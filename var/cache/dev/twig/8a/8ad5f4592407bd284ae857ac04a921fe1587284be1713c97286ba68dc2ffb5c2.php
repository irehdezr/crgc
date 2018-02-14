<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_1f1bc9604f493468766da588cbb29181828b7b848b41f3e8fbcc69a5c8b596a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3e65f963520d6c0bfb4bd8bf82ca635db01ea41b62225d22fab051277d083e30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e65f963520d6c0bfb4bd8bf82ca635db01ea41b62225d22fab051277d083e30->enter($__internal_3e65f963520d6c0bfb4bd8bf82ca635db01ea41b62225d22fab051277d083e30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_b7ec63ada4068e00f4fae7b2beeed689db815a1c07999c9e059b0e9f9a816918 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7ec63ada4068e00f4fae7b2beeed689db815a1c07999c9e059b0e9f9a816918->enter($__internal_b7ec63ada4068e00f4fae7b2beeed689db815a1c07999c9e059b0e9f9a816918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e65f963520d6c0bfb4bd8bf82ca635db01ea41b62225d22fab051277d083e30->leave($__internal_3e65f963520d6c0bfb4bd8bf82ca635db01ea41b62225d22fab051277d083e30_prof);

        
        $__internal_b7ec63ada4068e00f4fae7b2beeed689db815a1c07999c9e059b0e9f9a816918->leave($__internal_b7ec63ada4068e00f4fae7b2beeed689db815a1c07999c9e059b0e9f9a816918_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_73ace250d6401ffad265293c8b21013f7124d07380f1a309ba96011118cee8d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73ace250d6401ffad265293c8b21013f7124d07380f1a309ba96011118cee8d8->enter($__internal_73ace250d6401ffad265293c8b21013f7124d07380f1a309ba96011118cee8d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_c2cdd4036d54e55666c7a0904af724c9143a3925f96947be9ceb45e881402b57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2cdd4036d54e55666c7a0904af724c9143a3925f96947be9ceb45e881402b57->enter($__internal_c2cdd4036d54e55666c7a0904af724c9143a3925f96947be9ceb45e881402b57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_c2cdd4036d54e55666c7a0904af724c9143a3925f96947be9ceb45e881402b57->leave($__internal_c2cdd4036d54e55666c7a0904af724c9143a3925f96947be9ceb45e881402b57_prof);

        
        $__internal_73ace250d6401ffad265293c8b21013f7124d07380f1a309ba96011118cee8d8->leave($__internal_73ace250d6401ffad265293c8b21013f7124d07380f1a309ba96011118cee8d8_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_786dd2ded50aee5674a5403a153be652ef5d21064e86e14178e8cf364e343213 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_786dd2ded50aee5674a5403a153be652ef5d21064e86e14178e8cf364e343213->enter($__internal_786dd2ded50aee5674a5403a153be652ef5d21064e86e14178e8cf364e343213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_dc185214d8b03f98f76b8f993a6b9897ca465cb3f70088a86b7baaf0b9f0a7a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc185214d8b03f98f76b8f993a6b9897ca465cb3f70088a86b7baaf0b9f0a7a3->enter($__internal_dc185214d8b03f98f76b8f993a6b9897ca465cb3f70088a86b7baaf0b9f0a7a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_dc185214d8b03f98f76b8f993a6b9897ca465cb3f70088a86b7baaf0b9f0a7a3->leave($__internal_dc185214d8b03f98f76b8f993a6b9897ca465cb3f70088a86b7baaf0b9f0a7a3_prof);

        
        $__internal_786dd2ded50aee5674a5403a153be652ef5d21064e86e14178e8cf364e343213->leave($__internal_786dd2ded50aee5674a5403a153be652ef5d21064e86e14178e8cf364e343213_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
