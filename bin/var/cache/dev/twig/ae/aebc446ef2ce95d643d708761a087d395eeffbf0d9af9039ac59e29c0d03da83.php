<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_19ebc7de69ef2fa012dfd854bab92cef4d740305c46e23f80d22ad0664739449 extends Twig_Template
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
        $__internal_efad341a696081900c9f7b2e6b95b814e5d69de469b28b0a839fced30fddca6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efad341a696081900c9f7b2e6b95b814e5d69de469b28b0a839fced30fddca6f->enter($__internal_efad341a696081900c9f7b2e6b95b814e5d69de469b28b0a839fced30fddca6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_a5c81100f7bd02aca8ad9e6086494ff909944e253bd5357f626330da013250fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5c81100f7bd02aca8ad9e6086494ff909944e253bd5357f626330da013250fd->enter($__internal_a5c81100f7bd02aca8ad9e6086494ff909944e253bd5357f626330da013250fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_efad341a696081900c9f7b2e6b95b814e5d69de469b28b0a839fced30fddca6f->leave($__internal_efad341a696081900c9f7b2e6b95b814e5d69de469b28b0a839fced30fddca6f_prof);

        
        $__internal_a5c81100f7bd02aca8ad9e6086494ff909944e253bd5357f626330da013250fd->leave($__internal_a5c81100f7bd02aca8ad9e6086494ff909944e253bd5357f626330da013250fd_prof);

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
", "@Twig/Exception/exception.json.twig", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
