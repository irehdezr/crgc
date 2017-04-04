<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_0fad7a04af1bae71be0fd70f19c5e512ebb74b8a617f6daaeca04639fbdee1c2 extends Twig_Template
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
        $__internal_b01f7bb033d5c86d1272e984c9eaff30be64b95b7a75de58d1dff15debc9901e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b01f7bb033d5c86d1272e984c9eaff30be64b95b7a75de58d1dff15debc9901e->enter($__internal_b01f7bb033d5c86d1272e984c9eaff30be64b95b7a75de58d1dff15debc9901e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_ef70044534f75d9f64c0562ba36062e813a4ce8a0d6e421226db8a9afe8f11b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef70044534f75d9f64c0562ba36062e813a4ce8a0d6e421226db8a9afe8f11b7->enter($__internal_ef70044534f75d9f64c0562ba36062e813a4ce8a0d6e421226db8a9afe8f11b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_b01f7bb033d5c86d1272e984c9eaff30be64b95b7a75de58d1dff15debc9901e->leave($__internal_b01f7bb033d5c86d1272e984c9eaff30be64b95b7a75de58d1dff15debc9901e_prof);

        
        $__internal_ef70044534f75d9f64c0562ba36062e813a4ce8a0d6e421226db8a9afe8f11b7->leave($__internal_ef70044534f75d9f64c0562ba36062e813a4ce8a0d6e421226db8a9afe8f11b7_prof);

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
", "@Framework/Form/form_widget_simple.html.php", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
