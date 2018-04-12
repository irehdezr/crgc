<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_7e54f7022311d69eb6f433e03af71bdb3f19132ebe514db4f8e695c4fbd2ab5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_921ac19a6c8c163453e02999e382cf65f221167d937c63498def4305a6e0838a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_921ac19a6c8c163453e02999e382cf65f221167d937c63498def4305a6e0838a->enter($__internal_921ac19a6c8c163453e02999e382cf65f221167d937c63498def4305a6e0838a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_1265b797ed3fe68f7db86a71c884417100cafb48013e1b9399a16d7f0e58a165 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1265b797ed3fe68f7db86a71c884417100cafb48013e1b9399a16d7f0e58a165->enter($__internal_1265b797ed3fe68f7db86a71c884417100cafb48013e1b9399a16d7f0e58a165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_921ac19a6c8c163453e02999e382cf65f221167d937c63498def4305a6e0838a->leave($__internal_921ac19a6c8c163453e02999e382cf65f221167d937c63498def4305a6e0838a_prof);

        
        $__internal_1265b797ed3fe68f7db86a71c884417100cafb48013e1b9399a16d7f0e58a165->leave($__internal_1265b797ed3fe68f7db86a71c884417100cafb48013e1b9399a16d7f0e58a165_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_181f879703b0effa0825ae4d7600acb73a45aede90d3a7d3fa758c05b71c2312 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_181f879703b0effa0825ae4d7600acb73a45aede90d3a7d3fa758c05b71c2312->enter($__internal_181f879703b0effa0825ae4d7600acb73a45aede90d3a7d3fa758c05b71c2312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_01eedba6812f118b9f807bc72578477688342523dda81ef11c18f72e8f36939c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01eedba6812f118b9f807bc72578477688342523dda81ef11c18f72e8f36939c->enter($__internal_01eedba6812f118b9f807bc72578477688342523dda81ef11c18f72e8f36939c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_01eedba6812f118b9f807bc72578477688342523dda81ef11c18f72e8f36939c->leave($__internal_01eedba6812f118b9f807bc72578477688342523dda81ef11c18f72e8f36939c_prof);

        
        $__internal_181f879703b0effa0825ae4d7600acb73a45aede90d3a7d3fa758c05b71c2312->leave($__internal_181f879703b0effa0825ae4d7600acb73a45aede90d3a7d3fa758c05b71c2312_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
