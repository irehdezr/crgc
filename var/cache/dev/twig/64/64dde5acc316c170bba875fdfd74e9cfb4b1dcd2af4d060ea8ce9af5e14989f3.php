<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_f4d8312df22bb25e23fe8dc2838a330e085b018f1aaf56176341ca37ff36043f extends Twig_Template
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
        $__internal_f7b528786b61d9a95bba536d6cbc2a4ef53b3aa82df51678604c0833e927c60d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7b528786b61d9a95bba536d6cbc2a4ef53b3aa82df51678604c0833e927c60d->enter($__internal_f7b528786b61d9a95bba536d6cbc2a4ef53b3aa82df51678604c0833e927c60d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_7c49582d9bff4121d468ba4d3bebcaabb21605e13ae6b4b4223b1e0d730119e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c49582d9bff4121d468ba4d3bebcaabb21605e13ae6b4b4223b1e0d730119e7->enter($__internal_7c49582d9bff4121d468ba4d3bebcaabb21605e13ae6b4b4223b1e0d730119e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_f7b528786b61d9a95bba536d6cbc2a4ef53b3aa82df51678604c0833e927c60d->leave($__internal_f7b528786b61d9a95bba536d6cbc2a4ef53b3aa82df51678604c0833e927c60d_prof);

        
        $__internal_7c49582d9bff4121d468ba4d3bebcaabb21605e13ae6b4b4223b1e0d730119e7->leave($__internal_7c49582d9bff4121d468ba4d3bebcaabb21605e13ae6b4b4223b1e0d730119e7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
