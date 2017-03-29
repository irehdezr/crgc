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
        $__internal_c8818eae01b5201f8d1f06ff59fac78ea44b53ee9571cae1241232cb650f25f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8818eae01b5201f8d1f06ff59fac78ea44b53ee9571cae1241232cb650f25f7->enter($__internal_c8818eae01b5201f8d1f06ff59fac78ea44b53ee9571cae1241232cb650f25f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_bfb0cf57683ae4acd7e211726f0d0788ad6343816e9347204a9f2040870fa4a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfb0cf57683ae4acd7e211726f0d0788ad6343816e9347204a9f2040870fa4a9->enter($__internal_bfb0cf57683ae4acd7e211726f0d0788ad6343816e9347204a9f2040870fa4a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_c8818eae01b5201f8d1f06ff59fac78ea44b53ee9571cae1241232cb650f25f7->leave($__internal_c8818eae01b5201f8d1f06ff59fac78ea44b53ee9571cae1241232cb650f25f7_prof);

        
        $__internal_bfb0cf57683ae4acd7e211726f0d0788ad6343816e9347204a9f2040870fa4a9->leave($__internal_bfb0cf57683ae4acd7e211726f0d0788ad6343816e9347204a9f2040870fa4a9_prof);

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
