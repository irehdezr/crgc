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
        $__internal_1a158a074e02fd364ee061532e25fa3560924371513137c0cf54e72845f91808 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a158a074e02fd364ee061532e25fa3560924371513137c0cf54e72845f91808->enter($__internal_1a158a074e02fd364ee061532e25fa3560924371513137c0cf54e72845f91808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_1c479359976772540325eaf0c3d409c243b4f57b5c7f6bfcebdd100867848e27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c479359976772540325eaf0c3d409c243b4f57b5c7f6bfcebdd100867848e27->enter($__internal_1c479359976772540325eaf0c3d409c243b4f57b5c7f6bfcebdd100867848e27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a158a074e02fd364ee061532e25fa3560924371513137c0cf54e72845f91808->leave($__internal_1a158a074e02fd364ee061532e25fa3560924371513137c0cf54e72845f91808_prof);

        
        $__internal_1c479359976772540325eaf0c3d409c243b4f57b5c7f6bfcebdd100867848e27->leave($__internal_1c479359976772540325eaf0c3d409c243b4f57b5c7f6bfcebdd100867848e27_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f040f0b1407d326d5503686fa2a632da1f35ee5d7fa31f760da559d59a57bd2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f040f0b1407d326d5503686fa2a632da1f35ee5d7fa31f760da559d59a57bd2c->enter($__internal_f040f0b1407d326d5503686fa2a632da1f35ee5d7fa31f760da559d59a57bd2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2a0af3030d6b643b53d605f91762fda1b5c020f4611d9ce7cf0bd4e8e4bad68b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a0af3030d6b643b53d605f91762fda1b5c020f4611d9ce7cf0bd4e8e4bad68b->enter($__internal_2a0af3030d6b643b53d605f91762fda1b5c020f4611d9ce7cf0bd4e8e4bad68b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_2a0af3030d6b643b53d605f91762fda1b5c020f4611d9ce7cf0bd4e8e4bad68b->leave($__internal_2a0af3030d6b643b53d605f91762fda1b5c020f4611d9ce7cf0bd4e8e4bad68b_prof);

        
        $__internal_f040f0b1407d326d5503686fa2a632da1f35ee5d7fa31f760da559d59a57bd2c->leave($__internal_f040f0b1407d326d5503686fa2a632da1f35ee5d7fa31f760da559d59a57bd2c_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_cbb2724f2108f25c00f2f295a4228697705ff05d5dcdcc68cf407e4546b72aaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbb2724f2108f25c00f2f295a4228697705ff05d5dcdcc68cf407e4546b72aaf->enter($__internal_cbb2724f2108f25c00f2f295a4228697705ff05d5dcdcc68cf407e4546b72aaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_59749fa380ae80d33f856b1ab919b6e7f9a4fcb4dc33d77df1d4a882ca3aea66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59749fa380ae80d33f856b1ab919b6e7f9a4fcb4dc33d77df1d4a882ca3aea66->enter($__internal_59749fa380ae80d33f856b1ab919b6e7f9a4fcb4dc33d77df1d4a882ca3aea66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_59749fa380ae80d33f856b1ab919b6e7f9a4fcb4dc33d77df1d4a882ca3aea66->leave($__internal_59749fa380ae80d33f856b1ab919b6e7f9a4fcb4dc33d77df1d4a882ca3aea66_prof);

        
        $__internal_cbb2724f2108f25c00f2f295a4228697705ff05d5dcdcc68cf407e4546b72aaf->leave($__internal_cbb2724f2108f25c00f2f295a4228697705ff05d5dcdcc68cf407e4546b72aaf_prof);

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
