<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_47de7a1b0132dff1d612ab8f603a97f2c4f1d11f20c70e4c925bc00d39e54cbf extends Twig_Template
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
        $__internal_29a9acabdd0ad1151c146569c48c2d6fc19293f3a71b78c9ed82c8590fa24258 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29a9acabdd0ad1151c146569c48c2d6fc19293f3a71b78c9ed82c8590fa24258->enter($__internal_29a9acabdd0ad1151c146569c48c2d6fc19293f3a71b78c9ed82c8590fa24258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_b8628418a04ea64762e7293fc143a67e6cd95b3f849184f8af97ab323059f0f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8628418a04ea64762e7293fc143a67e6cd95b3f849184f8af97ab323059f0f7->enter($__internal_b8628418a04ea64762e7293fc143a67e6cd95b3f849184f8af97ab323059f0f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_29a9acabdd0ad1151c146569c48c2d6fc19293f3a71b78c9ed82c8590fa24258->leave($__internal_29a9acabdd0ad1151c146569c48c2d6fc19293f3a71b78c9ed82c8590fa24258_prof);

        
        $__internal_b8628418a04ea64762e7293fc143a67e6cd95b3f849184f8af97ab323059f0f7->leave($__internal_b8628418a04ea64762e7293fc143a67e6cd95b3f849184f8af97ab323059f0f7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
