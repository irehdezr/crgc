<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_8592b21d1b18d494b7c97eedf7bc88ec31b2691fc1ee95e6f1c262ac1ce8923f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9b97401876997332bab61b264f8c9afad04938d66c3a64cf457efea70b3cf927 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b97401876997332bab61b264f8c9afad04938d66c3a64cf457efea70b3cf927->enter($__internal_9b97401876997332bab61b264f8c9afad04938d66c3a64cf457efea70b3cf927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_f02ad54442aec97f5f9f6f0ed06ab76f7a77c4f8d450f263687da95ab51ed919 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f02ad54442aec97f5f9f6f0ed06ab76f7a77c4f8d450f263687da95ab51ed919->enter($__internal_f02ad54442aec97f5f9f6f0ed06ab76f7a77c4f8d450f263687da95ab51ed919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_9b97401876997332bab61b264f8c9afad04938d66c3a64cf457efea70b3cf927->leave($__internal_9b97401876997332bab61b264f8c9afad04938d66c3a64cf457efea70b3cf927_prof);

        
        $__internal_f02ad54442aec97f5f9f6f0ed06ab76f7a77c4f8d450f263687da95ab51ed919->leave($__internal_f02ad54442aec97f5f9f6f0ed06ab76f7a77c4f8d450f263687da95ab51ed919_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
