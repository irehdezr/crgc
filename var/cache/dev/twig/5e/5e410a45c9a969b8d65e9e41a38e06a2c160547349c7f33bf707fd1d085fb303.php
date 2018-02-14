<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_c0f2f502619d1a95a71004aef50574d2fc0462c776a801aec24715adb0b9bae8 extends Twig_Template
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
        $__internal_69fb44a1a014341431e0590cc59d3ca5375d63cf49267ab6ac9c655d570ed4db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69fb44a1a014341431e0590cc59d3ca5375d63cf49267ab6ac9c655d570ed4db->enter($__internal_69fb44a1a014341431e0590cc59d3ca5375d63cf49267ab6ac9c655d570ed4db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_9d6dad9768b938ded3cbaadbc4c59ebcfb40a1d40e79b8ac54657c2060b1b107 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d6dad9768b938ded3cbaadbc4c59ebcfb40a1d40e79b8ac54657c2060b1b107->enter($__internal_9d6dad9768b938ded3cbaadbc4c59ebcfb40a1d40e79b8ac54657c2060b1b107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_69fb44a1a014341431e0590cc59d3ca5375d63cf49267ab6ac9c655d570ed4db->leave($__internal_69fb44a1a014341431e0590cc59d3ca5375d63cf49267ab6ac9c655d570ed4db_prof);

        
        $__internal_9d6dad9768b938ded3cbaadbc4c59ebcfb40a1d40e79b8ac54657c2060b1b107->leave($__internal_9d6dad9768b938ded3cbaadbc4c59ebcfb40a1d40e79b8ac54657c2060b1b107_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
