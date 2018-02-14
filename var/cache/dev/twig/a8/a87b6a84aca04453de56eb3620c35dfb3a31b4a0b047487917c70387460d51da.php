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
        $__internal_f8a58c3eb7df445d41277661a3cc9bd54bcea2cf6bd91f67bd601200b049d3fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8a58c3eb7df445d41277661a3cc9bd54bcea2cf6bd91f67bd601200b049d3fa->enter($__internal_f8a58c3eb7df445d41277661a3cc9bd54bcea2cf6bd91f67bd601200b049d3fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_378d486557429568909fd5831aa6f31f2ac837e7f73a45d0eddafaef4553e45b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_378d486557429568909fd5831aa6f31f2ac837e7f73a45d0eddafaef4553e45b->enter($__internal_378d486557429568909fd5831aa6f31f2ac837e7f73a45d0eddafaef4553e45b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8a58c3eb7df445d41277661a3cc9bd54bcea2cf6bd91f67bd601200b049d3fa->leave($__internal_f8a58c3eb7df445d41277661a3cc9bd54bcea2cf6bd91f67bd601200b049d3fa_prof);

        
        $__internal_378d486557429568909fd5831aa6f31f2ac837e7f73a45d0eddafaef4553e45b->leave($__internal_378d486557429568909fd5831aa6f31f2ac837e7f73a45d0eddafaef4553e45b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8629a21891b806424742b137db6636602a72bf7a7866faafe821eeb6b75ee3ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8629a21891b806424742b137db6636602a72bf7a7866faafe821eeb6b75ee3ce->enter($__internal_8629a21891b806424742b137db6636602a72bf7a7866faafe821eeb6b75ee3ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_72081ca2419b30fa256d4e3e2cf9da5c147286ebfa0b5576d6a6cc5c398fff71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72081ca2419b30fa256d4e3e2cf9da5c147286ebfa0b5576d6a6cc5c398fff71->enter($__internal_72081ca2419b30fa256d4e3e2cf9da5c147286ebfa0b5576d6a6cc5c398fff71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_72081ca2419b30fa256d4e3e2cf9da5c147286ebfa0b5576d6a6cc5c398fff71->leave($__internal_72081ca2419b30fa256d4e3e2cf9da5c147286ebfa0b5576d6a6cc5c398fff71_prof);

        
        $__internal_8629a21891b806424742b137db6636602a72bf7a7866faafe821eeb6b75ee3ce->leave($__internal_8629a21891b806424742b137db6636602a72bf7a7866faafe821eeb6b75ee3ce_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_52d2895ceaebf468f7ad89b6d23485a92af3889c2c5081b88d39ac1ab080fb58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52d2895ceaebf468f7ad89b6d23485a92af3889c2c5081b88d39ac1ab080fb58->enter($__internal_52d2895ceaebf468f7ad89b6d23485a92af3889c2c5081b88d39ac1ab080fb58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_83ee2b1330af6d8c352b016ce887c0fdfcd03bc1e68fa316b0a26d220df00082 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83ee2b1330af6d8c352b016ce887c0fdfcd03bc1e68fa316b0a26d220df00082->enter($__internal_83ee2b1330af6d8c352b016ce887c0fdfcd03bc1e68fa316b0a26d220df00082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_83ee2b1330af6d8c352b016ce887c0fdfcd03bc1e68fa316b0a26d220df00082->leave($__internal_83ee2b1330af6d8c352b016ce887c0fdfcd03bc1e68fa316b0a26d220df00082_prof);

        
        $__internal_52d2895ceaebf468f7ad89b6d23485a92af3889c2c5081b88d39ac1ab080fb58->leave($__internal_52d2895ceaebf468f7ad89b6d23485a92af3889c2c5081b88d39ac1ab080fb58_prof);

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
