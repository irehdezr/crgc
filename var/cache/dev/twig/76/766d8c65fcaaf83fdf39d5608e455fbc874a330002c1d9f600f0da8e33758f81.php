<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_b29eb519860e1035321608f6aa0463cff73f7a4fa1937a18e8a1455922d6a205 extends Twig_Template
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
        $__internal_20fed9c552ec31af15ae34f1229578b2693fc979667d6a445be70ab22f4e9398 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20fed9c552ec31af15ae34f1229578b2693fc979667d6a445be70ab22f4e9398->enter($__internal_20fed9c552ec31af15ae34f1229578b2693fc979667d6a445be70ab22f4e9398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_f3c7236b6185234cc714d5767d2936de14bf7b9f032e2d5d307e78ceb1998025 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3c7236b6185234cc714d5767d2936de14bf7b9f032e2d5d307e78ceb1998025->enter($__internal_f3c7236b6185234cc714d5767d2936de14bf7b9f032e2d5d307e78ceb1998025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_20fed9c552ec31af15ae34f1229578b2693fc979667d6a445be70ab22f4e9398->leave($__internal_20fed9c552ec31af15ae34f1229578b2693fc979667d6a445be70ab22f4e9398_prof);

        
        $__internal_f3c7236b6185234cc714d5767d2936de14bf7b9f032e2d5d307e78ceb1998025->leave($__internal_f3c7236b6185234cc714d5767d2936de14bf7b9f032e2d5d307e78ceb1998025_prof);

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
", "@Twig/Exception/error.json.twig", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
