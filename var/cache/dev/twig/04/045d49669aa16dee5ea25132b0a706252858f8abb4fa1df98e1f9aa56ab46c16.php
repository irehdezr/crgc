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
        $__internal_92ee84db769975d1631ec7ef2057debbe6b5df6d0d425f0a6df00c02219cc56b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92ee84db769975d1631ec7ef2057debbe6b5df6d0d425f0a6df00c02219cc56b->enter($__internal_92ee84db769975d1631ec7ef2057debbe6b5df6d0d425f0a6df00c02219cc56b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_9906553740ac29da36c0bc66d08b988fe2f88d33bf00a70e0d8cbe939ee2b50d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9906553740ac29da36c0bc66d08b988fe2f88d33bf00a70e0d8cbe939ee2b50d->enter($__internal_9906553740ac29da36c0bc66d08b988fe2f88d33bf00a70e0d8cbe939ee2b50d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92ee84db769975d1631ec7ef2057debbe6b5df6d0d425f0a6df00c02219cc56b->leave($__internal_92ee84db769975d1631ec7ef2057debbe6b5df6d0d425f0a6df00c02219cc56b_prof);

        
        $__internal_9906553740ac29da36c0bc66d08b988fe2f88d33bf00a70e0d8cbe939ee2b50d->leave($__internal_9906553740ac29da36c0bc66d08b988fe2f88d33bf00a70e0d8cbe939ee2b50d_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_5e064805b54cf5fa3f2446c96a0722c77fb61b304a149cdd6f1eb47b48797dc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e064805b54cf5fa3f2446c96a0722c77fb61b304a149cdd6f1eb47b48797dc7->enter($__internal_5e064805b54cf5fa3f2446c96a0722c77fb61b304a149cdd6f1eb47b48797dc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_0777134ac1f91c93302d32db482a8ec6eb912a6c8f90b6965780d0da3f2eb4a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0777134ac1f91c93302d32db482a8ec6eb912a6c8f90b6965780d0da3f2eb4a1->enter($__internal_0777134ac1f91c93302d32db482a8ec6eb912a6c8f90b6965780d0da3f2eb4a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_0777134ac1f91c93302d32db482a8ec6eb912a6c8f90b6965780d0da3f2eb4a1->leave($__internal_0777134ac1f91c93302d32db482a8ec6eb912a6c8f90b6965780d0da3f2eb4a1_prof);

        
        $__internal_5e064805b54cf5fa3f2446c96a0722c77fb61b304a149cdd6f1eb47b48797dc7->leave($__internal_5e064805b54cf5fa3f2446c96a0722c77fb61b304a149cdd6f1eb47b48797dc7_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_48d9dda9cae24ac99ad80373ac5f17d2df4879b0e8907bda981d2f5c49247ad4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48d9dda9cae24ac99ad80373ac5f17d2df4879b0e8907bda981d2f5c49247ad4->enter($__internal_48d9dda9cae24ac99ad80373ac5f17d2df4879b0e8907bda981d2f5c49247ad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a591a083a022754daac0a4c8c0f12b7a97e05c1f580d9d513a94d2604c578fae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a591a083a022754daac0a4c8c0f12b7a97e05c1f580d9d513a94d2604c578fae->enter($__internal_a591a083a022754daac0a4c8c0f12b7a97e05c1f580d9d513a94d2604c578fae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_a591a083a022754daac0a4c8c0f12b7a97e05c1f580d9d513a94d2604c578fae->leave($__internal_a591a083a022754daac0a4c8c0f12b7a97e05c1f580d9d513a94d2604c578fae_prof);

        
        $__internal_48d9dda9cae24ac99ad80373ac5f17d2df4879b0e8907bda981d2f5c49247ad4->leave($__internal_48d9dda9cae24ac99ad80373ac5f17d2df4879b0e8907bda981d2f5c49247ad4_prof);

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
