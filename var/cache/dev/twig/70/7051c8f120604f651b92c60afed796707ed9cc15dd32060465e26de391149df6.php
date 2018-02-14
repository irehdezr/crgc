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
        $__internal_b9a2edbc639b7b4c9be7021b3b6a2bbb4a4f9790c6fdae4ca3bc1cc7ba04b6d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9a2edbc639b7b4c9be7021b3b6a2bbb4a4f9790c6fdae4ca3bc1cc7ba04b6d4->enter($__internal_b9a2edbc639b7b4c9be7021b3b6a2bbb4a4f9790c6fdae4ca3bc1cc7ba04b6d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_8117cc5034f63cbaa6432f8a837391900764536d5e4c97e24afc02d9787ac4e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8117cc5034f63cbaa6432f8a837391900764536d5e4c97e24afc02d9787ac4e8->enter($__internal_8117cc5034f63cbaa6432f8a837391900764536d5e4c97e24afc02d9787ac4e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_b9a2edbc639b7b4c9be7021b3b6a2bbb4a4f9790c6fdae4ca3bc1cc7ba04b6d4->leave($__internal_b9a2edbc639b7b4c9be7021b3b6a2bbb4a4f9790c6fdae4ca3bc1cc7ba04b6d4_prof);

        
        $__internal_8117cc5034f63cbaa6432f8a837391900764536d5e4c97e24afc02d9787ac4e8->leave($__internal_8117cc5034f63cbaa6432f8a837391900764536d5e4c97e24afc02d9787ac4e8_prof);

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
