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
        $__internal_bac394bb09e30459339b82f2f1f9e62a83b5b5f9a009103840063ab0cc3bcb23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bac394bb09e30459339b82f2f1f9e62a83b5b5f9a009103840063ab0cc3bcb23->enter($__internal_bac394bb09e30459339b82f2f1f9e62a83b5b5f9a009103840063ab0cc3bcb23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_fb7e8eee14fc0ccef5b94cd01e141535acc8c430aa0e81f91fa3d1a03208ac9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb7e8eee14fc0ccef5b94cd01e141535acc8c430aa0e81f91fa3d1a03208ac9d->enter($__internal_fb7e8eee14fc0ccef5b94cd01e141535acc8c430aa0e81f91fa3d1a03208ac9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_bac394bb09e30459339b82f2f1f9e62a83b5b5f9a009103840063ab0cc3bcb23->leave($__internal_bac394bb09e30459339b82f2f1f9e62a83b5b5f9a009103840063ab0cc3bcb23_prof);

        
        $__internal_fb7e8eee14fc0ccef5b94cd01e141535acc8c430aa0e81f91fa3d1a03208ac9d->leave($__internal_fb7e8eee14fc0ccef5b94cd01e141535acc8c430aa0e81f91fa3d1a03208ac9d_prof);

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
