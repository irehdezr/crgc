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
        $__internal_363021cf0a9b21afe565a707826d2767e7f3ce8c5ed033e18e1a982616e83b32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_363021cf0a9b21afe565a707826d2767e7f3ce8c5ed033e18e1a982616e83b32->enter($__internal_363021cf0a9b21afe565a707826d2767e7f3ce8c5ed033e18e1a982616e83b32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_c4ceb2300bfc6425580af6df9851f190ea9a7f2273a767ab4e76f9b8bc82fac1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4ceb2300bfc6425580af6df9851f190ea9a7f2273a767ab4e76f9b8bc82fac1->enter($__internal_c4ceb2300bfc6425580af6df9851f190ea9a7f2273a767ab4e76f9b8bc82fac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_363021cf0a9b21afe565a707826d2767e7f3ce8c5ed033e18e1a982616e83b32->leave($__internal_363021cf0a9b21afe565a707826d2767e7f3ce8c5ed033e18e1a982616e83b32_prof);

        
        $__internal_c4ceb2300bfc6425580af6df9851f190ea9a7f2273a767ab4e76f9b8bc82fac1->leave($__internal_c4ceb2300bfc6425580af6df9851f190ea9a7f2273a767ab4e76f9b8bc82fac1_prof);

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
