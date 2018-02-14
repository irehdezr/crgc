<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_5453deb6cc7ab5c2c4077604de2c3e6ee75c25fb2b5709a39b6d76f928198964 extends Twig_Template
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
        $__internal_50a26e8f71dd34f2721f085d0bf7d91876c81cf60e0789dfc335eb10cfabfb3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50a26e8f71dd34f2721f085d0bf7d91876c81cf60e0789dfc335eb10cfabfb3b->enter($__internal_50a26e8f71dd34f2721f085d0bf7d91876c81cf60e0789dfc335eb10cfabfb3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_72ef9a3234b15f62ab1e09943020e3f4836f536779274b5203e6dd7a57fb3c8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72ef9a3234b15f62ab1e09943020e3f4836f536779274b5203e6dd7a57fb3c8f->enter($__internal_72ef9a3234b15f62ab1e09943020e3f4836f536779274b5203e6dd7a57fb3c8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50a26e8f71dd34f2721f085d0bf7d91876c81cf60e0789dfc335eb10cfabfb3b->leave($__internal_50a26e8f71dd34f2721f085d0bf7d91876c81cf60e0789dfc335eb10cfabfb3b_prof);

        
        $__internal_72ef9a3234b15f62ab1e09943020e3f4836f536779274b5203e6dd7a57fb3c8f->leave($__internal_72ef9a3234b15f62ab1e09943020e3f4836f536779274b5203e6dd7a57fb3c8f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_76a44e5f4cbc70e4d65bfd5b22de9775315dd198f3b25bff3b3bcd82c99ba129 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76a44e5f4cbc70e4d65bfd5b22de9775315dd198f3b25bff3b3bcd82c99ba129->enter($__internal_76a44e5f4cbc70e4d65bfd5b22de9775315dd198f3b25bff3b3bcd82c99ba129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e0424da0941234fc12c6c85d0e8b08ccf8b0ddb033f4eda14f5d486613bc6db5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0424da0941234fc12c6c85d0e8b08ccf8b0ddb033f4eda14f5d486613bc6db5->enter($__internal_e0424da0941234fc12c6c85d0e8b08ccf8b0ddb033f4eda14f5d486613bc6db5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_e0424da0941234fc12c6c85d0e8b08ccf8b0ddb033f4eda14f5d486613bc6db5->leave($__internal_e0424da0941234fc12c6c85d0e8b08ccf8b0ddb033f4eda14f5d486613bc6db5_prof);

        
        $__internal_76a44e5f4cbc70e4d65bfd5b22de9775315dd198f3b25bff3b3bcd82c99ba129->leave($__internal_76a44e5f4cbc70e4d65bfd5b22de9775315dd198f3b25bff3b3bcd82c99ba129_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_a30ae4db9868457a7203aa0121e728463ac7b9cc7ddb4fa0737f763a09d5953c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a30ae4db9868457a7203aa0121e728463ac7b9cc7ddb4fa0737f763a09d5953c->enter($__internal_a30ae4db9868457a7203aa0121e728463ac7b9cc7ddb4fa0737f763a09d5953c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_72ee852dcb24b053c9f71a46b3d02c006580d4bf46475dfc9c9dc2c897e07d7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72ee852dcb24b053c9f71a46b3d02c006580d4bf46475dfc9c9dc2c897e07d7a->enter($__internal_72ee852dcb24b053c9f71a46b3d02c006580d4bf46475dfc9c9dc2c897e07d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_72ee852dcb24b053c9f71a46b3d02c006580d4bf46475dfc9c9dc2c897e07d7a->leave($__internal_72ee852dcb24b053c9f71a46b3d02c006580d4bf46475dfc9c9dc2c897e07d7a_prof);

        
        $__internal_a30ae4db9868457a7203aa0121e728463ac7b9cc7ddb4fa0737f763a09d5953c->leave($__internal_a30ae4db9868457a7203aa0121e728463ac7b9cc7ddb4fa0737f763a09d5953c_prof);

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
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
