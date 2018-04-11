<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_da50a00e8d5eab37fe0bf1a4f8cd5f2dca49aa7022689f581372a437b9d3bb74 extends Twig_Template
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
        $__internal_2d858f123a5f46f4af7663aef6477d07553ac4a00e83c36b4a2ef8e8f21e9fd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d858f123a5f46f4af7663aef6477d07553ac4a00e83c36b4a2ef8e8f21e9fd0->enter($__internal_2d858f123a5f46f4af7663aef6477d07553ac4a00e83c36b4a2ef8e8f21e9fd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_9261ab2a69f45aeec2a504342d07f893d967d557eb0aa3fff6274519e8d763a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9261ab2a69f45aeec2a504342d07f893d967d557eb0aa3fff6274519e8d763a5->enter($__internal_9261ab2a69f45aeec2a504342d07f893d967d557eb0aa3fff6274519e8d763a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_2d858f123a5f46f4af7663aef6477d07553ac4a00e83c36b4a2ef8e8f21e9fd0->leave($__internal_2d858f123a5f46f4af7663aef6477d07553ac4a00e83c36b4a2ef8e8f21e9fd0_prof);

        
        $__internal_9261ab2a69f45aeec2a504342d07f893d967d557eb0aa3fff6274519e8d763a5->leave($__internal_9261ab2a69f45aeec2a504342d07f893d967d557eb0aa3fff6274519e8d763a5_prof);

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
", "@Framework/Form/form_widget_compound.html.php", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
