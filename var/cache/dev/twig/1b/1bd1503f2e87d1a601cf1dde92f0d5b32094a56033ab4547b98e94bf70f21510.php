<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_93eb952d27dd49bd39daacb91aba047a49594b460742b03f79819951a32104b5 extends Twig_Template
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
        $__internal_98db7751dc35abe81b8e293a32ec4cb788a9b6775f790746bd7e48c90e8e68e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98db7751dc35abe81b8e293a32ec4cb788a9b6775f790746bd7e48c90e8e68e8->enter($__internal_98db7751dc35abe81b8e293a32ec4cb788a9b6775f790746bd7e48c90e8e68e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_790d751b94cf2c21636c1c89f49f8906703c62317933474fa03ea06f39e1af6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_790d751b94cf2c21636c1c89f49f8906703c62317933474fa03ea06f39e1af6d->enter($__internal_790d751b94cf2c21636c1c89f49f8906703c62317933474fa03ea06f39e1af6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_98db7751dc35abe81b8e293a32ec4cb788a9b6775f790746bd7e48c90e8e68e8->leave($__internal_98db7751dc35abe81b8e293a32ec4cb788a9b6775f790746bd7e48c90e8e68e8_prof);

        
        $__internal_790d751b94cf2c21636c1c89f49f8906703c62317933474fa03ea06f39e1af6d->leave($__internal_790d751b94cf2c21636c1c89f49f8906703c62317933474fa03ea06f39e1af6d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
