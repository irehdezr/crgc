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
        $__internal_58e942fc9c9375e8b88e7514ae8b4655f874745a4f86cc8f4e704867de6f020a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58e942fc9c9375e8b88e7514ae8b4655f874745a4f86cc8f4e704867de6f020a->enter($__internal_58e942fc9c9375e8b88e7514ae8b4655f874745a4f86cc8f4e704867de6f020a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_b6aa9956d205827e63c2c735ae4ec8054f439b69e21e5eaf4a63cc56829d94fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6aa9956d205827e63c2c735ae4ec8054f439b69e21e5eaf4a63cc56829d94fc->enter($__internal_b6aa9956d205827e63c2c735ae4ec8054f439b69e21e5eaf4a63cc56829d94fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58e942fc9c9375e8b88e7514ae8b4655f874745a4f86cc8f4e704867de6f020a->leave($__internal_58e942fc9c9375e8b88e7514ae8b4655f874745a4f86cc8f4e704867de6f020a_prof);

        
        $__internal_b6aa9956d205827e63c2c735ae4ec8054f439b69e21e5eaf4a63cc56829d94fc->leave($__internal_b6aa9956d205827e63c2c735ae4ec8054f439b69e21e5eaf4a63cc56829d94fc_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_9dfdcb2db58273e734170348dfb9aa35b57059c23f561dda29e8923e7615d0c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dfdcb2db58273e734170348dfb9aa35b57059c23f561dda29e8923e7615d0c3->enter($__internal_9dfdcb2db58273e734170348dfb9aa35b57059c23f561dda29e8923e7615d0c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_a6727f08cd1be6364710f2163a31719abe72b321158bdc9c51ba53b560f2c880 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6727f08cd1be6364710f2163a31719abe72b321158bdc9c51ba53b560f2c880->enter($__internal_a6727f08cd1be6364710f2163a31719abe72b321158bdc9c51ba53b560f2c880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_a6727f08cd1be6364710f2163a31719abe72b321158bdc9c51ba53b560f2c880->leave($__internal_a6727f08cd1be6364710f2163a31719abe72b321158bdc9c51ba53b560f2c880_prof);

        
        $__internal_9dfdcb2db58273e734170348dfb9aa35b57059c23f561dda29e8923e7615d0c3->leave($__internal_9dfdcb2db58273e734170348dfb9aa35b57059c23f561dda29e8923e7615d0c3_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6745230c72d35acc0ef21e9f41906c971a760eee10660306d5363b14327b9f97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6745230c72d35acc0ef21e9f41906c971a760eee10660306d5363b14327b9f97->enter($__internal_6745230c72d35acc0ef21e9f41906c971a760eee10660306d5363b14327b9f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_200df024717ffd0dabd5c69a0bdfb26b68d12dc69f406622beb5b9ba6affabfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_200df024717ffd0dabd5c69a0bdfb26b68d12dc69f406622beb5b9ba6affabfe->enter($__internal_200df024717ffd0dabd5c69a0bdfb26b68d12dc69f406622beb5b9ba6affabfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_200df024717ffd0dabd5c69a0bdfb26b68d12dc69f406622beb5b9ba6affabfe->leave($__internal_200df024717ffd0dabd5c69a0bdfb26b68d12dc69f406622beb5b9ba6affabfe_prof);

        
        $__internal_6745230c72d35acc0ef21e9f41906c971a760eee10660306d5363b14327b9f97->leave($__internal_6745230c72d35acc0ef21e9f41906c971a760eee10660306d5363b14327b9f97_prof);

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
