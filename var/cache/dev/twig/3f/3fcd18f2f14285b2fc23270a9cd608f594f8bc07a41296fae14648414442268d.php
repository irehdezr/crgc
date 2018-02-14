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
        $__internal_6fc56f9aeb0f55525bc03919285a528bc4574ae50ef39216a776190b0e9475dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fc56f9aeb0f55525bc03919285a528bc4574ae50ef39216a776190b0e9475dd->enter($__internal_6fc56f9aeb0f55525bc03919285a528bc4574ae50ef39216a776190b0e9475dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_c691230e1d15d2776beac70fc9ac926ff2e5d2dabe3b2b2fbdea984286c5fd12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c691230e1d15d2776beac70fc9ac926ff2e5d2dabe3b2b2fbdea984286c5fd12->enter($__internal_c691230e1d15d2776beac70fc9ac926ff2e5d2dabe3b2b2fbdea984286c5fd12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_6fc56f9aeb0f55525bc03919285a528bc4574ae50ef39216a776190b0e9475dd->leave($__internal_6fc56f9aeb0f55525bc03919285a528bc4574ae50ef39216a776190b0e9475dd_prof);

        
        $__internal_c691230e1d15d2776beac70fc9ac926ff2e5d2dabe3b2b2fbdea984286c5fd12->leave($__internal_c691230e1d15d2776beac70fc9ac926ff2e5d2dabe3b2b2fbdea984286c5fd12_prof);

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
