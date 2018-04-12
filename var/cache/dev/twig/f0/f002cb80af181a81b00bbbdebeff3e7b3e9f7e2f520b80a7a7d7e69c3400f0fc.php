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
        $__internal_99dd87e0ba284cdaa7f83471ba6449ec0b54b40a762f2e1ed722d5031a33e815 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99dd87e0ba284cdaa7f83471ba6449ec0b54b40a762f2e1ed722d5031a33e815->enter($__internal_99dd87e0ba284cdaa7f83471ba6449ec0b54b40a762f2e1ed722d5031a33e815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_5fecf7ebfe1f46f3ab5f1217099198b865e2a311e4af8bad37326931fa69dd85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fecf7ebfe1f46f3ab5f1217099198b865e2a311e4af8bad37326931fa69dd85->enter($__internal_5fecf7ebfe1f46f3ab5f1217099198b865e2a311e4af8bad37326931fa69dd85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99dd87e0ba284cdaa7f83471ba6449ec0b54b40a762f2e1ed722d5031a33e815->leave($__internal_99dd87e0ba284cdaa7f83471ba6449ec0b54b40a762f2e1ed722d5031a33e815_prof);

        
        $__internal_5fecf7ebfe1f46f3ab5f1217099198b865e2a311e4af8bad37326931fa69dd85->leave($__internal_5fecf7ebfe1f46f3ab5f1217099198b865e2a311e4af8bad37326931fa69dd85_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_935d625febb2d7c8562514c1f271f6277ba1f0c878d8f8e3e2310b2f11600066 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_935d625febb2d7c8562514c1f271f6277ba1f0c878d8f8e3e2310b2f11600066->enter($__internal_935d625febb2d7c8562514c1f271f6277ba1f0c878d8f8e3e2310b2f11600066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7a7dbcc3ca09d7e3e8fddc73aaeb9740ab6c740011d62a01fd9749d234aecfd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a7dbcc3ca09d7e3e8fddc73aaeb9740ab6c740011d62a01fd9749d234aecfd9->enter($__internal_7a7dbcc3ca09d7e3e8fddc73aaeb9740ab6c740011d62a01fd9749d234aecfd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_7a7dbcc3ca09d7e3e8fddc73aaeb9740ab6c740011d62a01fd9749d234aecfd9->leave($__internal_7a7dbcc3ca09d7e3e8fddc73aaeb9740ab6c740011d62a01fd9749d234aecfd9_prof);

        
        $__internal_935d625febb2d7c8562514c1f271f6277ba1f0c878d8f8e3e2310b2f11600066->leave($__internal_935d625febb2d7c8562514c1f271f6277ba1f0c878d8f8e3e2310b2f11600066_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_f05f1fb9a5ae54a56f19ed3fdff5c813d3c23d4af52d8708674f5697efaa6a49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f05f1fb9a5ae54a56f19ed3fdff5c813d3c23d4af52d8708674f5697efaa6a49->enter($__internal_f05f1fb9a5ae54a56f19ed3fdff5c813d3c23d4af52d8708674f5697efaa6a49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d6e77e762a617ea8ffca2164e2fdbef1c90aa4914957a3ccbac28fdd6f1ff88b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6e77e762a617ea8ffca2164e2fdbef1c90aa4914957a3ccbac28fdd6f1ff88b->enter($__internal_d6e77e762a617ea8ffca2164e2fdbef1c90aa4914957a3ccbac28fdd6f1ff88b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d6e77e762a617ea8ffca2164e2fdbef1c90aa4914957a3ccbac28fdd6f1ff88b->leave($__internal_d6e77e762a617ea8ffca2164e2fdbef1c90aa4914957a3ccbac28fdd6f1ff88b_prof);

        
        $__internal_f05f1fb9a5ae54a56f19ed3fdff5c813d3c23d4af52d8708674f5697efaa6a49->leave($__internal_f05f1fb9a5ae54a56f19ed3fdff5c813d3c23d4af52d8708674f5697efaa6a49_prof);

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
