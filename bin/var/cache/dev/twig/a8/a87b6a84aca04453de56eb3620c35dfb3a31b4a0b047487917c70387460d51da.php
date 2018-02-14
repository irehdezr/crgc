<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_050c0930146e1e79e46c98e3b7f5e8109df808312065d75942aa64a8eb2e2d2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_53bd134e32bc3a7e7b975aa9ea5c451788585f5f32bddd8389e7dbf4a84a263c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53bd134e32bc3a7e7b975aa9ea5c451788585f5f32bddd8389e7dbf4a84a263c->enter($__internal_53bd134e32bc3a7e7b975aa9ea5c451788585f5f32bddd8389e7dbf4a84a263c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_a627b01555da97c9f308132075fba54cbcc616e198957e261109ee7d53248f2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a627b01555da97c9f308132075fba54cbcc616e198957e261109ee7d53248f2b->enter($__internal_a627b01555da97c9f308132075fba54cbcc616e198957e261109ee7d53248f2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53bd134e32bc3a7e7b975aa9ea5c451788585f5f32bddd8389e7dbf4a84a263c->leave($__internal_53bd134e32bc3a7e7b975aa9ea5c451788585f5f32bddd8389e7dbf4a84a263c_prof);

        
        $__internal_a627b01555da97c9f308132075fba54cbcc616e198957e261109ee7d53248f2b->leave($__internal_a627b01555da97c9f308132075fba54cbcc616e198957e261109ee7d53248f2b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6f8229a1d675084ba78b96dd9b6832fec3736ee8dbc5c5991aa8daa5245f90c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f8229a1d675084ba78b96dd9b6832fec3736ee8dbc5c5991aa8daa5245f90c2->enter($__internal_6f8229a1d675084ba78b96dd9b6832fec3736ee8dbc5c5991aa8daa5245f90c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_35be7877df0eec861d4a34438ac9f792d2fde7f943eaa06534b0bba546e0ec5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35be7877df0eec861d4a34438ac9f792d2fde7f943eaa06534b0bba546e0ec5d->enter($__internal_35be7877df0eec861d4a34438ac9f792d2fde7f943eaa06534b0bba546e0ec5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_35be7877df0eec861d4a34438ac9f792d2fde7f943eaa06534b0bba546e0ec5d->leave($__internal_35be7877df0eec861d4a34438ac9f792d2fde7f943eaa06534b0bba546e0ec5d_prof);

        
        $__internal_6f8229a1d675084ba78b96dd9b6832fec3736ee8dbc5c5991aa8daa5245f90c2->leave($__internal_6f8229a1d675084ba78b96dd9b6832fec3736ee8dbc5c5991aa8daa5245f90c2_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_60413919b0500dde7546012701c3a68c5e106786e048d4b89f6679ead91023fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60413919b0500dde7546012701c3a68c5e106786e048d4b89f6679ead91023fe->enter($__internal_60413919b0500dde7546012701c3a68c5e106786e048d4b89f6679ead91023fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_81606158e025118330d8e64f399b2bdfaff7632a2c124d15f6cface7e5362822 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81606158e025118330d8e64f399b2bdfaff7632a2c124d15f6cface7e5362822->enter($__internal_81606158e025118330d8e64f399b2bdfaff7632a2c124d15f6cface7e5362822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 11
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
    <h1>";
        // line 12
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_81606158e025118330d8e64f399b2bdfaff7632a2c124d15f6cface7e5362822->leave($__internal_81606158e025118330d8e64f399b2bdfaff7632a2c124d15f6cface7e5362822_prof);

        
        $__internal_60413919b0500dde7546012701c3a68c5e106786e048d4b89f6679ead91023fe->leave($__internal_60413919b0500dde7546012701c3a68c5e106786e048d4b89f6679ead91023fe_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  82 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
    <h1>{{ file }} <small>line {{ line }}</small></h1>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
