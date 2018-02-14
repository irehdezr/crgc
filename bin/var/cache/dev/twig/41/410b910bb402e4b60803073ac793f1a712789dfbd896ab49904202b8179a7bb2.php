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
        $__internal_c44f3842b1adb5047e57c254ee58c50b25d57cadd01ef0291b4ed430b654b7e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c44f3842b1adb5047e57c254ee58c50b25d57cadd01ef0291b4ed430b654b7e1->enter($__internal_c44f3842b1adb5047e57c254ee58c50b25d57cadd01ef0291b4ed430b654b7e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_57a87ddf71f781485673e47089bcef1310a6c665379c4b63dbee1c36b9af6d85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57a87ddf71f781485673e47089bcef1310a6c665379c4b63dbee1c36b9af6d85->enter($__internal_57a87ddf71f781485673e47089bcef1310a6c665379c4b63dbee1c36b9af6d85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_c44f3842b1adb5047e57c254ee58c50b25d57cadd01ef0291b4ed430b654b7e1->leave($__internal_c44f3842b1adb5047e57c254ee58c50b25d57cadd01ef0291b4ed430b654b7e1_prof);

        
        $__internal_57a87ddf71f781485673e47089bcef1310a6c665379c4b63dbee1c36b9af6d85->leave($__internal_57a87ddf71f781485673e47089bcef1310a6c665379c4b63dbee1c36b9af6d85_prof);

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
