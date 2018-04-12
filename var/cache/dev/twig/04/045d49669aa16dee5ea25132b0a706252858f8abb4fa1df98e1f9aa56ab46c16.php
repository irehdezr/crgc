<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_f90ee41b9a5676827d9f796250846f6b0c93a05489f78ba3b9550ac0fb496c5b extends Twig_Template
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
        $__internal_c1c06494e76a0f3e14acd8ee5b8bdd26ba8a1b205704837ac38386822a2f54ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1c06494e76a0f3e14acd8ee5b8bdd26ba8a1b205704837ac38386822a2f54ab->enter($__internal_c1c06494e76a0f3e14acd8ee5b8bdd26ba8a1b205704837ac38386822a2f54ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_7fff3d108f93ff23f7a54fa61883b299e493c6dd93500ffb65f88e75c4a8229a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fff3d108f93ff23f7a54fa61883b299e493c6dd93500ffb65f88e75c4a8229a->enter($__internal_7fff3d108f93ff23f7a54fa61883b299e493c6dd93500ffb65f88e75c4a8229a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1c06494e76a0f3e14acd8ee5b8bdd26ba8a1b205704837ac38386822a2f54ab->leave($__internal_c1c06494e76a0f3e14acd8ee5b8bdd26ba8a1b205704837ac38386822a2f54ab_prof);

        
        $__internal_7fff3d108f93ff23f7a54fa61883b299e493c6dd93500ffb65f88e75c4a8229a->leave($__internal_7fff3d108f93ff23f7a54fa61883b299e493c6dd93500ffb65f88e75c4a8229a_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_f93122b0d170ce854324ce834681004b1d3a48994c76de244257daf67a563eef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f93122b0d170ce854324ce834681004b1d3a48994c76de244257daf67a563eef->enter($__internal_f93122b0d170ce854324ce834681004b1d3a48994c76de244257daf67a563eef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_5efa21f825fe615c364e66c603c33152e49b73e691b41e4e9031e9ab3fc89545 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5efa21f825fe615c364e66c603c33152e49b73e691b41e4e9031e9ab3fc89545->enter($__internal_5efa21f825fe615c364e66c603c33152e49b73e691b41e4e9031e9ab3fc89545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_5efa21f825fe615c364e66c603c33152e49b73e691b41e4e9031e9ab3fc89545->leave($__internal_5efa21f825fe615c364e66c603c33152e49b73e691b41e4e9031e9ab3fc89545_prof);

        
        $__internal_f93122b0d170ce854324ce834681004b1d3a48994c76de244257daf67a563eef->leave($__internal_f93122b0d170ce854324ce834681004b1d3a48994c76de244257daf67a563eef_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_57cd976467bc2cddc9f52629d521fa88ac3861bf7f0ad3b4af9b8732ecb19783 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57cd976467bc2cddc9f52629d521fa88ac3861bf7f0ad3b4af9b8732ecb19783->enter($__internal_57cd976467bc2cddc9f52629d521fa88ac3861bf7f0ad3b4af9b8732ecb19783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5485a8f4c5579098e0ed538ef89ff72bfcb395f9e93a9edda895d45422e4501d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5485a8f4c5579098e0ed538ef89ff72bfcb395f9e93a9edda895d45422e4501d->enter($__internal_5485a8f4c5579098e0ed538ef89ff72bfcb395f9e93a9edda895d45422e4501d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_5485a8f4c5579098e0ed538ef89ff72bfcb395f9e93a9edda895d45422e4501d->leave($__internal_5485a8f4c5579098e0ed538ef89ff72bfcb395f9e93a9edda895d45422e4501d_prof);

        
        $__internal_57cd976467bc2cddc9f52629d521fa88ac3861bf7f0ad3b4af9b8732ecb19783->leave($__internal_57cd976467bc2cddc9f52629d521fa88ac3861bf7f0ad3b4af9b8732ecb19783_prof);

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
", "@WebProfiler/Profiler/info.html.twig", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
