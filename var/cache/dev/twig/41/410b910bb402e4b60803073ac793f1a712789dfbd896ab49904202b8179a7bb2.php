<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_02cb945d5c7f2055e3f35a673d8b06ff4e4c51dff8186e43d3e0ed09420a0052 extends Twig_Template
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
        $__internal_9863f4187688074cecd0f0062d7e8aff01b7e2202ae3b2aa17edcb403b02ae13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9863f4187688074cecd0f0062d7e8aff01b7e2202ae3b2aa17edcb403b02ae13->enter($__internal_9863f4187688074cecd0f0062d7e8aff01b7e2202ae3b2aa17edcb403b02ae13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_5ee271731057b3bdef4baa03797e8521eb17bb156fce3e86da8f1b1e73ad5b37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ee271731057b3bdef4baa03797e8521eb17bb156fce3e86da8f1b1e73ad5b37->enter($__internal_5ee271731057b3bdef4baa03797e8521eb17bb156fce3e86da8f1b1e73ad5b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_9863f4187688074cecd0f0062d7e8aff01b7e2202ae3b2aa17edcb403b02ae13->leave($__internal_9863f4187688074cecd0f0062d7e8aff01b7e2202ae3b2aa17edcb403b02ae13_prof);

        
        $__internal_5ee271731057b3bdef4baa03797e8521eb17bb156fce3e86da8f1b1e73ad5b37->leave($__internal_5ee271731057b3bdef4baa03797e8521eb17bb156fce3e86da8f1b1e73ad5b37_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
