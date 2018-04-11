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
        $__internal_d2e01f9d1f9d74ba3b34a23babfe8850a1923e3e6b722b5d30c30ce3113b5e5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2e01f9d1f9d74ba3b34a23babfe8850a1923e3e6b722b5d30c30ce3113b5e5e->enter($__internal_d2e01f9d1f9d74ba3b34a23babfe8850a1923e3e6b722b5d30c30ce3113b5e5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_75ab7fafe046f3222179f84c698adc1db74d531526b12b0aeb1f629272444586 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75ab7fafe046f3222179f84c698adc1db74d531526b12b0aeb1f629272444586->enter($__internal_75ab7fafe046f3222179f84c698adc1db74d531526b12b0aeb1f629272444586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_d2e01f9d1f9d74ba3b34a23babfe8850a1923e3e6b722b5d30c30ce3113b5e5e->leave($__internal_d2e01f9d1f9d74ba3b34a23babfe8850a1923e3e6b722b5d30c30ce3113b5e5e_prof);

        
        $__internal_75ab7fafe046f3222179f84c698adc1db74d531526b12b0aeb1f629272444586->leave($__internal_75ab7fafe046f3222179f84c698adc1db74d531526b12b0aeb1f629272444586_prof);

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
