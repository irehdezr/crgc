<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_026bab98cde411ab15e97450ac999d31d50c58eef208c72caf662b58096a9b27 extends Twig_Template
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
        $__internal_c5aac35720712ace9463d558381c6a98028df9f78270fad8b85b444dbf970ab1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5aac35720712ace9463d558381c6a98028df9f78270fad8b85b444dbf970ab1->enter($__internal_c5aac35720712ace9463d558381c6a98028df9f78270fad8b85b444dbf970ab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_0aba83ccd03a7ee67cd61d679ce0ee1db33cb66b7ca4fb02aadc200da553054f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0aba83ccd03a7ee67cd61d679ce0ee1db33cb66b7ca4fb02aadc200da553054f->enter($__internal_0aba83ccd03a7ee67cd61d679ce0ee1db33cb66b7ca4fb02aadc200da553054f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_c5aac35720712ace9463d558381c6a98028df9f78270fad8b85b444dbf970ab1->leave($__internal_c5aac35720712ace9463d558381c6a98028df9f78270fad8b85b444dbf970ab1_prof);

        
        $__internal_0aba83ccd03a7ee67cd61d679ce0ee1db33cb66b7ca4fb02aadc200da553054f->leave($__internal_0aba83ccd03a7ee67cd61d679ce0ee1db33cb66b7ca4fb02aadc200da553054f_prof);

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
", "@Framework/Form/money_widget.html.php", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
