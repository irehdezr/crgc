<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Bundle\FrameworkBundle\Command;

use Symfony\Component\Config\Definition\Processor;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Console\Exception\LogicException;
use Symfony\Component\Yaml\Yaml;

/**
 * A console command for dumping available configuration reference.
 *
 * @author Grégoire Pineau <lyrixx@lyrixx.info>
 */
class ConfigDebugCommand extends AbstractConfigCommand
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('debug:config')
            ->setDefinition(array(
                new InputArgument('name', InputArgument::OPTIONAL, 'The bundle name or the extension alias'),
                new InputArgument('path', InputArgument::OPTIONAL, 'The configuration option path'),
            ))
            ->setDescription('Dumps the current configuration for an extension')
            ->setHelp(<<<'EOF'
The <info>%command.name%</info> command dumps the current configuration for an
extension/bundle.

Either the extension alias or bundle name can be used:

  <info>php %command.full_name% framework</info>
  <info>php %command.full_name% FrameworkBundle</info>

For dumping a specific option, add its path as second argument:

  <info>php %command.full_name% framework serializer.enabled</info>

EOF
            )
        ;
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $io = new SymfonyStyle($input, $output);

        if (null === $name = $input->getArgument('name')) {
            $this->listBundles($io);
            $io->comment('Provide the name of a bundle as the first argument of this command to dump its configuration. (e.g. <comment>debug:config FrameworkBundle</comment>)');
            $io->comment('For dumping a specific option, add its path as the second argument of this command. (e.g. <comment>debug:config FrameworkBundle serializer</comment> to dump the <comment>framework.serializer</comment> configuration)');

            return;
        }

        $extension = $this->findExtension($name);
        $container = $this->compileContainer();

        $extensionAlias = $extension->getAlias();
        $configs = $container->getExtensionConfig($extensionAlias);
        $configuration = $extension->getConfiguration($configs, $container);

        $this->validateConfiguration($extension, $configuration);

        $configs = $container->getParameterBag()->resolveValue($configs);

        $processor = new Processor();
        $config = $processor->processConfiguration($configuration, $configs);

        if (null === $path = $input->getArgument('path')) {
            $io->title(
                sprintf('Current configuration for %s', ($name === $extensionAlias ? sprintf('extension with alias "%s"', $extensionAlias) : sprintf('"%s"', $name)))
            );

            $io->writeln(Yaml::dump(array($extensionAlias => $config), 10));

            return;
        }

        try {
            $config = $this->getConfigForPath($config, $path, $extensionAlias);
        } catch (LogicException $e) {
            $io->error($e->getMessage());

            return;
        }

        $io->title(sprintf('Current configuration for "%s.%s"', $extensionAlias, $path));

        $io->writeln(Yaml::dump($config, 10));
    }

    private function compileContainer()
    {
        $kernel = clone $this->getContainer()->get('kernel');
        $kernel->boot();

        $method = new \ReflectionMethod($kernel, 'buildContainer');
        $method->setAccessible(true);
        $container = $method->invoke($kernel);
        $container->getCompiler()->compile($container);

        return $container;
    }

    /**
     * Iterate over configuration until the last step of the given path.
     *
     * @param array $config A bundle configuration
     *
     * @throws LogicException If the configuration does not exist
     *
     * @return mixed
     */
    private function getConfigForPath(array $config = array(), $path, $alias)
    {
        $steps = explode('.', $path);

        foreach ($steps as $step) {
            if (!array_key_exists($step, $config)) {
                throw new LogicException(sprintf('Unable to find configuration for "%s.%s"', $alias, $path));
            }

            $config = $config[$step];
        }

        return $config;
    }
}