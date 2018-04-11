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
        $__internal_6794727ac68289a67854369e605b58e032d4832b0a3c70c843d292ca8dc6efb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6794727ac68289a67854369e605b58e032d4832b0a3c70c843d292ca8dc6efb8->enter($__internal_6794727ac68289a67854369e605b58e032d4832b0a3c70c843d292ca8dc6efb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_eb71b6ca44fdd0838a23a3390b4227800ad6888fd56f2e959fa85f3706eeb209 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb71b6ca44fdd0838a23a3390b4227800ad6888fd56f2e959fa85f3706eeb209->enter($__internal_eb71b6ca44fdd0838a23a3390b4227800ad6888fd56f2e959fa85f3706eeb209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6794727ac68289a67854369e605b58e032d4832b0a3c70c843d292ca8dc6efb8->leave($__internal_6794727ac68289a67854369e605b58e032d4832b0a3c70c843d292ca8dc6efb8_prof);

        
        $__internal_eb71b6ca44fdd0838a23a3390b4227800ad6888fd56f2e959fa85f3706eeb209->leave($__internal_eb71b6ca44fdd0838a23a3390b4227800ad6888fd56f2e959fa85f3706eeb209_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_040120c7d01ee2d7d7558d94bceb6ee1747114f6d11552fe8041a0aad5cf0fba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_040120c7d01ee2d7d7558d94bceb6ee1747114f6d11552fe8041a0aad5cf0fba->enter($__internal_040120c7d01ee2d7d7558d94bceb6ee1747114f6d11552fe8041a0aad5cf0fba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_884fc01fc71d8c19d524aca362305568e0b7d8c3a846566d40185448e32b2563 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_884fc01fc71d8c19d524aca362305568e0b7d8c3a846566d40185448e32b2563->enter($__internal_884fc01fc71d8c19d524aca362305568e0b7d8c3a846566d40185448e32b2563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_884fc01fc71d8c19d524aca362305568e0b7d8c3a846566d40185448e32b2563->leave($__internal_884fc01fc71d8c19d524aca362305568e0b7d8c3a846566d40185448e32b2563_prof);

        
        $__internal_040120c7d01ee2d7d7558d94bceb6ee1747114f6d11552fe8041a0aad5cf0fba->leave($__internal_040120c7d01ee2d7d7558d94bceb6ee1747114f6d11552fe8041a0aad5cf0fba_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_42cb803250d7cb4205d8116b79886b4af71a4e1e28f23a9e255bd75c058f3931 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42cb803250d7cb4205d8116b79886b4af71a4e1e28f23a9e255bd75c058f3931->enter($__internal_42cb803250d7cb4205d8116b79886b4af71a4e1e28f23a9e255bd75c058f3931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_24294a44d2580c019709e8c6040d11cd6b5d2eb88334440f69a888fd45c59272 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24294a44d2580c019709e8c6040d11cd6b5d2eb88334440f69a888fd45c59272->enter($__internal_24294a44d2580c019709e8c6040d11cd6b5d2eb88334440f69a888fd45c59272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_24294a44d2580c019709e8c6040d11cd6b5d2eb88334440f69a888fd45c59272->leave($__internal_24294a44d2580c019709e8c6040d11cd6b5d2eb88334440f69a888fd45c59272_prof);

        
        $__internal_42cb803250d7cb4205d8116b79886b4af71a4e1e28f23a9e255bd75c058f3931->leave($__internal_42cb803250d7cb4205d8116b79886b4af71a4e1e28f23a9e255bd75c058f3931_prof);

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
