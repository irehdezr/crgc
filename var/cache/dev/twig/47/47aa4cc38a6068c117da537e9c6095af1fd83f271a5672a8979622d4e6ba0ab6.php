<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_c2ae52394a8f896d56ff1a7cee56296f519a9ba78c2db9459b71d16a6f014b56 extends Twig_Template
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
        $__internal_835ae9a8c010fe8592728954023a7084687e15442ec9a5fcecb9df17d579997b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_835ae9a8c010fe8592728954023a7084687e15442ec9a5fcecb9df17d579997b->enter($__internal_835ae9a8c010fe8592728954023a7084687e15442ec9a5fcecb9df17d579997b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_b4b4327c236ecb544767bfeacc430c82c0b698662b202ffe41accff49fc0ece9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4b4327c236ecb544767bfeacc430c82c0b698662b202ffe41accff49fc0ece9->enter($__internal_b4b4327c236ecb544767bfeacc430c82c0b698662b202ffe41accff49fc0ece9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_835ae9a8c010fe8592728954023a7084687e15442ec9a5fcecb9df17d579997b->leave($__internal_835ae9a8c010fe8592728954023a7084687e15442ec9a5fcecb9df17d579997b_prof);

        
        $__internal_b4b4327c236ecb544767bfeacc430c82c0b698662b202ffe41accff49fc0ece9->leave($__internal_b4b4327c236ecb544767bfeacc430c82c0b698662b202ffe41accff49fc0ece9_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_015a64ef0ca9223a4529a4588acfb3a2ade58a65f0bec1700b5ea38fcc495cd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_015a64ef0ca9223a4529a4588acfb3a2ade58a65f0bec1700b5ea38fcc495cd6->enter($__internal_015a64ef0ca9223a4529a4588acfb3a2ade58a65f0bec1700b5ea38fcc495cd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_b32778b7fae017dc3b0a7a9240bf9c9599692ff6ea628401a982366037a8b3da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b32778b7fae017dc3b0a7a9240bf9c9599692ff6ea628401a982366037a8b3da->enter($__internal_b32778b7fae017dc3b0a7a9240bf9c9599692ff6ea628401a982366037a8b3da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_b32778b7fae017dc3b0a7a9240bf9c9599692ff6ea628401a982366037a8b3da->leave($__internal_b32778b7fae017dc3b0a7a9240bf9c9599692ff6ea628401a982366037a8b3da_prof);

        
        $__internal_015a64ef0ca9223a4529a4588acfb3a2ade58a65f0bec1700b5ea38fcc495cd6->leave($__internal_015a64ef0ca9223a4529a4588acfb3a2ade58a65f0bec1700b5ea38fcc495cd6_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6df0239f6e2bef0975b84d3a74e5d039a0211789e6f7a34667ad4d02b1c8e0c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6df0239f6e2bef0975b84d3a74e5d039a0211789e6f7a34667ad4d02b1c8e0c1->enter($__internal_6df0239f6e2bef0975b84d3a74e5d039a0211789e6f7a34667ad4d02b1c8e0c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f9c127f714819ceab45da21308761d005b6ac4eeb340cf693ece71867c25202f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9c127f714819ceab45da21308761d005b6ac4eeb340cf693ece71867c25202f->enter($__internal_f9c127f714819ceab45da21308761d005b6ac4eeb340cf693ece71867c25202f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_f9c127f714819ceab45da21308761d005b6ac4eeb340cf693ece71867c25202f->leave($__internal_f9c127f714819ceab45da21308761d005b6ac4eeb340cf693ece71867c25202f_prof);

        
        $__internal_6df0239f6e2bef0975b84d3a74e5d039a0211789e6f7a34667ad4d02b1c8e0c1->leave($__internal_6df0239f6e2bef0975b84d3a74e5d039a0211789e6f7a34667ad4d02b1c8e0c1_prof);

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
", "@WebProfiler/Profiler/info.html.twig", "D:\\Programacion\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
