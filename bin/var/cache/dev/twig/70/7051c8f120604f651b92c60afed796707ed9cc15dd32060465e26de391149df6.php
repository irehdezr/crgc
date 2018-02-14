<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_5a33b6e3dac6110024b9825cd96dc9ea1e9e3b469b01d96a1067da7b0dc2ea70 extends Twig_Template
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
        $__internal_378e48a1e3bc2c94f9c86ab8b3227a5a291c6b09f2eec83735e019993192aabf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_378e48a1e3bc2c94f9c86ab8b3227a5a291c6b09f2eec83735e019993192aabf->enter($__internal_378e48a1e3bc2c94f9c86ab8b3227a5a291c6b09f2eec83735e019993192aabf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_1366ce8b3d873ebfd068d03479781fb47b21793f2960cf32f218f8a2db98b71b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1366ce8b3d873ebfd068d03479781fb47b21793f2960cf32f218f8a2db98b71b->enter($__internal_1366ce8b3d873ebfd068d03479781fb47b21793f2960cf32f218f8a2db98b71b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_378e48a1e3bc2c94f9c86ab8b3227a5a291c6b09f2eec83735e019993192aabf->leave($__internal_378e48a1e3bc2c94f9c86ab8b3227a5a291c6b09f2eec83735e019993192aabf_prof);

        
        $__internal_1366ce8b3d873ebfd068d03479781fb47b21793f2960cf32f218f8a2db98b71b->leave($__internal_1366ce8b3d873ebfd068d03479781fb47b21793f2960cf32f218f8a2db98b71b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
