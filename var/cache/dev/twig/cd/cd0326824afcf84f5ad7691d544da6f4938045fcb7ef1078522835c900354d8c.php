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
        $__internal_8073341d498272aadb9c760d0b7152dc44c146f2df02ae5bb1fee6a97afcd275 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8073341d498272aadb9c760d0b7152dc44c146f2df02ae5bb1fee6a97afcd275->enter($__internal_8073341d498272aadb9c760d0b7152dc44c146f2df02ae5bb1fee6a97afcd275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_6e17a517f449bda939f5b2fae81454ea8e11bce3f9ba46690c4299de55cb2db4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e17a517f449bda939f5b2fae81454ea8e11bce3f9ba46690c4299de55cb2db4->enter($__internal_6e17a517f449bda939f5b2fae81454ea8e11bce3f9ba46690c4299de55cb2db4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8073341d498272aadb9c760d0b7152dc44c146f2df02ae5bb1fee6a97afcd275->leave($__internal_8073341d498272aadb9c760d0b7152dc44c146f2df02ae5bb1fee6a97afcd275_prof);

        
        $__internal_6e17a517f449bda939f5b2fae81454ea8e11bce3f9ba46690c4299de55cb2db4->leave($__internal_6e17a517f449bda939f5b2fae81454ea8e11bce3f9ba46690c4299de55cb2db4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_04ee7270053309caabba01c6bd86921b5e5dbea132d6f6b76b8e6bee944d77eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04ee7270053309caabba01c6bd86921b5e5dbea132d6f6b76b8e6bee944d77eb->enter($__internal_04ee7270053309caabba01c6bd86921b5e5dbea132d6f6b76b8e6bee944d77eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6679afcb0e6e41e49eb292d344873011a7510a60b9d7cb5be77691809b7176ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6679afcb0e6e41e49eb292d344873011a7510a60b9d7cb5be77691809b7176ad->enter($__internal_6679afcb0e6e41e49eb292d344873011a7510a60b9d7cb5be77691809b7176ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_6679afcb0e6e41e49eb292d344873011a7510a60b9d7cb5be77691809b7176ad->leave($__internal_6679afcb0e6e41e49eb292d344873011a7510a60b9d7cb5be77691809b7176ad_prof);

        
        $__internal_04ee7270053309caabba01c6bd86921b5e5dbea132d6f6b76b8e6bee944d77eb->leave($__internal_04ee7270053309caabba01c6bd86921b5e5dbea132d6f6b76b8e6bee944d77eb_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_b89cdd49bb5db2f2b406e79c2c57f238539da83f79546c6b5586bb5e9456dfd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b89cdd49bb5db2f2b406e79c2c57f238539da83f79546c6b5586bb5e9456dfd5->enter($__internal_b89cdd49bb5db2f2b406e79c2c57f238539da83f79546c6b5586bb5e9456dfd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_74d8d44911271b6f070cb4cf2bd627c2ff59618b8d1720390f7f7681efc10dd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74d8d44911271b6f070cb4cf2bd627c2ff59618b8d1720390f7f7681efc10dd3->enter($__internal_74d8d44911271b6f070cb4cf2bd627c2ff59618b8d1720390f7f7681efc10dd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_74d8d44911271b6f070cb4cf2bd627c2ff59618b8d1720390f7f7681efc10dd3->leave($__internal_74d8d44911271b6f070cb4cf2bd627c2ff59618b8d1720390f7f7681efc10dd3_prof);

        
        $__internal_b89cdd49bb5db2f2b406e79c2c57f238539da83f79546c6b5586bb5e9456dfd5->leave($__internal_b89cdd49bb5db2f2b406e79c2c57f238539da83f79546c6b5586bb5e9456dfd5_prof);

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
