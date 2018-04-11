<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_34cd549fa9f6dd72942d03f8b3ddcf0d61915de0dcf3ba1100f07fedf906dd69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
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
        $__internal_9d7ea34a5c07be8458a55f97c6da177232cc5b2e9ba749076fd2aa9d8c68d451 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d7ea34a5c07be8458a55f97c6da177232cc5b2e9ba749076fd2aa9d8c68d451->enter($__internal_9d7ea34a5c07be8458a55f97c6da177232cc5b2e9ba749076fd2aa9d8c68d451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_c2c42e76afc9a542b8f7927a5564ef4e12193de443e7db90e4dcba0ddab89bc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2c42e76afc9a542b8f7927a5564ef4e12193de443e7db90e4dcba0ddab89bc5->enter($__internal_c2c42e76afc9a542b8f7927a5564ef4e12193de443e7db90e4dcba0ddab89bc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d7ea34a5c07be8458a55f97c6da177232cc5b2e9ba749076fd2aa9d8c68d451->leave($__internal_9d7ea34a5c07be8458a55f97c6da177232cc5b2e9ba749076fd2aa9d8c68d451_prof);

        
        $__internal_c2c42e76afc9a542b8f7927a5564ef4e12193de443e7db90e4dcba0ddab89bc5->leave($__internal_c2c42e76afc9a542b8f7927a5564ef4e12193de443e7db90e4dcba0ddab89bc5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_98c3fa43ef78a637861c71a16f0b0696720ff231f97d2ea2ac036260b3592d46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98c3fa43ef78a637861c71a16f0b0696720ff231f97d2ea2ac036260b3592d46->enter($__internal_98c3fa43ef78a637861c71a16f0b0696720ff231f97d2ea2ac036260b3592d46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_497b4f5e0ac2e097f48b04a25cbdfa0858b3c9ed7641850fb31ff4036023c476 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_497b4f5e0ac2e097f48b04a25cbdfa0858b3c9ed7641850fb31ff4036023c476->enter($__internal_497b4f5e0ac2e097f48b04a25cbdfa0858b3c9ed7641850fb31ff4036023c476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_497b4f5e0ac2e097f48b04a25cbdfa0858b3c9ed7641850fb31ff4036023c476->leave($__internal_497b4f5e0ac2e097f48b04a25cbdfa0858b3c9ed7641850fb31ff4036023c476_prof);

        
        $__internal_98c3fa43ef78a637861c71a16f0b0696720ff231f97d2ea2ac036260b3592d46->leave($__internal_98c3fa43ef78a637861c71a16f0b0696720ff231f97d2ea2ac036260b3592d46_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_4a3966ef16caedfce6d6ccac6f91bccb96d7693f98db5069da256e5a8dc2fb5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a3966ef16caedfce6d6ccac6f91bccb96d7693f98db5069da256e5a8dc2fb5c->enter($__internal_4a3966ef16caedfce6d6ccac6f91bccb96d7693f98db5069da256e5a8dc2fb5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_76ee75539edf2147f1cadbf80deb06052e91a8fcf8ab7c35e759cd8cdf7e492a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76ee75539edf2147f1cadbf80deb06052e91a8fcf8ab7c35e759cd8cdf7e492a->enter($__internal_76ee75539edf2147f1cadbf80deb06052e91a8fcf8ab7c35e759cd8cdf7e492a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_76ee75539edf2147f1cadbf80deb06052e91a8fcf8ab7c35e759cd8cdf7e492a->leave($__internal_76ee75539edf2147f1cadbf80deb06052e91a8fcf8ab7c35e759cd8cdf7e492a_prof);

        
        $__internal_4a3966ef16caedfce6d6ccac6f91bccb96d7693f98db5069da256e5a8dc2fb5c->leave($__internal_4a3966ef16caedfce6d6ccac6f91bccb96d7693f98db5069da256e5a8dc2fb5c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
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
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
