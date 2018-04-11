<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_44d547cfa02ddffaabe794234e8f120f8c394c40047dda33a93aa51448a945f6 extends Twig_Template
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
        $__internal_67b4db510ca3bb6b63c8befe7f6a1fe113955f0bad6dd868c33574175d80a870 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67b4db510ca3bb6b63c8befe7f6a1fe113955f0bad6dd868c33574175d80a870->enter($__internal_67b4db510ca3bb6b63c8befe7f6a1fe113955f0bad6dd868c33574175d80a870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_a699c89a581e23fa1feb0cb78b6ad8a3bf59385f9298c1fd4fbc0cc86a20f82b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a699c89a581e23fa1feb0cb78b6ad8a3bf59385f9298c1fd4fbc0cc86a20f82b->enter($__internal_a699c89a581e23fa1feb0cb78b6ad8a3bf59385f9298c1fd4fbc0cc86a20f82b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67b4db510ca3bb6b63c8befe7f6a1fe113955f0bad6dd868c33574175d80a870->leave($__internal_67b4db510ca3bb6b63c8befe7f6a1fe113955f0bad6dd868c33574175d80a870_prof);

        
        $__internal_a699c89a581e23fa1feb0cb78b6ad8a3bf59385f9298c1fd4fbc0cc86a20f82b->leave($__internal_a699c89a581e23fa1feb0cb78b6ad8a3bf59385f9298c1fd4fbc0cc86a20f82b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1a7fec52bef0b76c0629fe89c2a4ac7e5608ef87861f576041e267b0a5b628c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a7fec52bef0b76c0629fe89c2a4ac7e5608ef87861f576041e267b0a5b628c7->enter($__internal_1a7fec52bef0b76c0629fe89c2a4ac7e5608ef87861f576041e267b0a5b628c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_963e88c68e758783a5e386479633600ebb5272815ddbf96326678ea46bb1ebae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_963e88c68e758783a5e386479633600ebb5272815ddbf96326678ea46bb1ebae->enter($__internal_963e88c68e758783a5e386479633600ebb5272815ddbf96326678ea46bb1ebae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_963e88c68e758783a5e386479633600ebb5272815ddbf96326678ea46bb1ebae->leave($__internal_963e88c68e758783a5e386479633600ebb5272815ddbf96326678ea46bb1ebae_prof);

        
        $__internal_1a7fec52bef0b76c0629fe89c2a4ac7e5608ef87861f576041e267b0a5b628c7->leave($__internal_1a7fec52bef0b76c0629fe89c2a4ac7e5608ef87861f576041e267b0a5b628c7_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_0ed2fe8e8d60e9db66161e36b696452286bb7b5c66ca55a1df25c14e26f4e5e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ed2fe8e8d60e9db66161e36b696452286bb7b5c66ca55a1df25c14e26f4e5e8->enter($__internal_0ed2fe8e8d60e9db66161e36b696452286bb7b5c66ca55a1df25c14e26f4e5e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6c8f09d73f5247f8e60a709a5ca297f28a8107071129d0cc3f4eff112eecd45d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c8f09d73f5247f8e60a709a5ca297f28a8107071129d0cc3f4eff112eecd45d->enter($__internal_6c8f09d73f5247f8e60a709a5ca297f28a8107071129d0cc3f4eff112eecd45d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6c8f09d73f5247f8e60a709a5ca297f28a8107071129d0cc3f4eff112eecd45d->leave($__internal_6c8f09d73f5247f8e60a709a5ca297f28a8107071129d0cc3f4eff112eecd45d_prof);

        
        $__internal_0ed2fe8e8d60e9db66161e36b696452286bb7b5c66ca55a1df25c14e26f4e5e8->leave($__internal_0ed2fe8e8d60e9db66161e36b696452286bb7b5c66ca55a1df25c14e26f4e5e8_prof);

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
", "@WebProfiler/Profiler/open.html.twig", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
