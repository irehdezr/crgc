<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_68b10ef328c6c25e148df2c76466342c5d5451db443e0755b3c87887ee81410d extends Twig_Template
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
        $__internal_789b8dffab46133847dc7ba68873d90a699cf88067dc5b3be36fad3460ed0e19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_789b8dffab46133847dc7ba68873d90a699cf88067dc5b3be36fad3460ed0e19->enter($__internal_789b8dffab46133847dc7ba68873d90a699cf88067dc5b3be36fad3460ed0e19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_5e1412ddfdfab31bfb76cf195dbc305b70230a8d1767caa246e21a12092d1b0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e1412ddfdfab31bfb76cf195dbc305b70230a8d1767caa246e21a12092d1b0d->enter($__internal_5e1412ddfdfab31bfb76cf195dbc305b70230a8d1767caa246e21a12092d1b0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_789b8dffab46133847dc7ba68873d90a699cf88067dc5b3be36fad3460ed0e19->leave($__internal_789b8dffab46133847dc7ba68873d90a699cf88067dc5b3be36fad3460ed0e19_prof);

        
        $__internal_5e1412ddfdfab31bfb76cf195dbc305b70230a8d1767caa246e21a12092d1b0d->leave($__internal_5e1412ddfdfab31bfb76cf195dbc305b70230a8d1767caa246e21a12092d1b0d_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_9ed4bffbbf6439550f733023d1be0a4aeead91f02fad20539a8c4a514e8e3965 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ed4bffbbf6439550f733023d1be0a4aeead91f02fad20539a8c4a514e8e3965->enter($__internal_9ed4bffbbf6439550f733023d1be0a4aeead91f02fad20539a8c4a514e8e3965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_915279f54e327d9c75237e815edcad7ad4407b8dffc2e38f12eefb5bea2ac1df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_915279f54e327d9c75237e815edcad7ad4407b8dffc2e38f12eefb5bea2ac1df->enter($__internal_915279f54e327d9c75237e815edcad7ad4407b8dffc2e38f12eefb5bea2ac1df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_915279f54e327d9c75237e815edcad7ad4407b8dffc2e38f12eefb5bea2ac1df->leave($__internal_915279f54e327d9c75237e815edcad7ad4407b8dffc2e38f12eefb5bea2ac1df_prof);

        
        $__internal_9ed4bffbbf6439550f733023d1be0a4aeead91f02fad20539a8c4a514e8e3965->leave($__internal_9ed4bffbbf6439550f733023d1be0a4aeead91f02fad20539a8c4a514e8e3965_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_48f4708c128dfb28aab720ef7a45fc2fce9f005f46cd79cde0d8db4450d139ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48f4708c128dfb28aab720ef7a45fc2fce9f005f46cd79cde0d8db4450d139ed->enter($__internal_48f4708c128dfb28aab720ef7a45fc2fce9f005f46cd79cde0d8db4450d139ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_72f293de5a8a893a04aef0075d62879f4fdd15957f533cbdedcb7308f1f82596 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72f293de5a8a893a04aef0075d62879f4fdd15957f533cbdedcb7308f1f82596->enter($__internal_72f293de5a8a893a04aef0075d62879f4fdd15957f533cbdedcb7308f1f82596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_72f293de5a8a893a04aef0075d62879f4fdd15957f533cbdedcb7308f1f82596->leave($__internal_72f293de5a8a893a04aef0075d62879f4fdd15957f533cbdedcb7308f1f82596_prof);

        
        $__internal_48f4708c128dfb28aab720ef7a45fc2fce9f005f46cd79cde0d8db4450d139ed->leave($__internal_48f4708c128dfb28aab720ef7a45fc2fce9f005f46cd79cde0d8db4450d139ed_prof);

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
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
