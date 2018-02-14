<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_4a7764758db4e0358abda368ca772888ac00df0b03e40d714d5e1b8ebe055dfd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
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
        $__internal_24319f5e31d7488bdcb151b3adf715232cec3317ca76020c14e28491f6190ca6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24319f5e31d7488bdcb151b3adf715232cec3317ca76020c14e28491f6190ca6->enter($__internal_24319f5e31d7488bdcb151b3adf715232cec3317ca76020c14e28491f6190ca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_51d48aba7f9f4432d6797c20f8a215c2a089bd53ee7a5ca757ac1a60f49593e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51d48aba7f9f4432d6797c20f8a215c2a089bd53ee7a5ca757ac1a60f49593e8->enter($__internal_51d48aba7f9f4432d6797c20f8a215c2a089bd53ee7a5ca757ac1a60f49593e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24319f5e31d7488bdcb151b3adf715232cec3317ca76020c14e28491f6190ca6->leave($__internal_24319f5e31d7488bdcb151b3adf715232cec3317ca76020c14e28491f6190ca6_prof);

        
        $__internal_51d48aba7f9f4432d6797c20f8a215c2a089bd53ee7a5ca757ac1a60f49593e8->leave($__internal_51d48aba7f9f4432d6797c20f8a215c2a089bd53ee7a5ca757ac1a60f49593e8_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_f1d6c0707831ce416824a70b6eaac5e62e3c8d4a35f1c24ebf02ac743d742e99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1d6c0707831ce416824a70b6eaac5e62e3c8d4a35f1c24ebf02ac743d742e99->enter($__internal_f1d6c0707831ce416824a70b6eaac5e62e3c8d4a35f1c24ebf02ac743d742e99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_730e58d5c935b1f8d6fa275460ffa27a5e9021b563be1cca4e7a4fb25d30a5be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_730e58d5c935b1f8d6fa275460ffa27a5e9021b563be1cca4e7a4fb25d30a5be->enter($__internal_730e58d5c935b1f8d6fa275460ffa27a5e9021b563be1cca4e7a4fb25d30a5be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_730e58d5c935b1f8d6fa275460ffa27a5e9021b563be1cca4e7a4fb25d30a5be->leave($__internal_730e58d5c935b1f8d6fa275460ffa27a5e9021b563be1cca4e7a4fb25d30a5be_prof);

        
        $__internal_f1d6c0707831ce416824a70b6eaac5e62e3c8d4a35f1c24ebf02ac743d742e99->leave($__internal_f1d6c0707831ce416824a70b6eaac5e62e3c8d4a35f1c24ebf02ac743d742e99_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7333ea16f4065f602367d55f68259d5a72d571f5aecc13cb48851dbfc061fb87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7333ea16f4065f602367d55f68259d5a72d571f5aecc13cb48851dbfc061fb87->enter($__internal_7333ea16f4065f602367d55f68259d5a72d571f5aecc13cb48851dbfc061fb87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_278dce7075f483e6c5bf439b87525d807f798c8ec49043595a6030f0c35f793b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_278dce7075f483e6c5bf439b87525d807f798c8ec49043595a6030f0c35f793b->enter($__internal_278dce7075f483e6c5bf439b87525d807f798c8ec49043595a6030f0c35f793b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_278dce7075f483e6c5bf439b87525d807f798c8ec49043595a6030f0c35f793b->leave($__internal_278dce7075f483e6c5bf439b87525d807f798c8ec49043595a6030f0c35f793b_prof);

        
        $__internal_7333ea16f4065f602367d55f68259d5a72d571f5aecc13cb48851dbfc061fb87->leave($__internal_7333ea16f4065f602367d55f68259d5a72d571f5aecc13cb48851dbfc061fb87_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
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
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
