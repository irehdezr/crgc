<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_863ba099f505cf8afae555f3728a6b90b60ccc407f1104bdeb585804079c3360 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f4b26ea2ae2bedfc6317f14b021c4bc55caa1ff63cfdfec7973de8c2aa4cfc5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4b26ea2ae2bedfc6317f14b021c4bc55caa1ff63cfdfec7973de8c2aa4cfc5e->enter($__internal_f4b26ea2ae2bedfc6317f14b021c4bc55caa1ff63cfdfec7973de8c2aa4cfc5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_8c5a5f09c5aed37d727ca396535dfd60367ea1d85700c9a01e216f9c7ff9b0b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c5a5f09c5aed37d727ca396535dfd60367ea1d85700c9a01e216f9c7ff9b0b7->enter($__internal_8c5a5f09c5aed37d727ca396535dfd60367ea1d85700c9a01e216f9c7ff9b0b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4b26ea2ae2bedfc6317f14b021c4bc55caa1ff63cfdfec7973de8c2aa4cfc5e->leave($__internal_f4b26ea2ae2bedfc6317f14b021c4bc55caa1ff63cfdfec7973de8c2aa4cfc5e_prof);

        
        $__internal_8c5a5f09c5aed37d727ca396535dfd60367ea1d85700c9a01e216f9c7ff9b0b7->leave($__internal_8c5a5f09c5aed37d727ca396535dfd60367ea1d85700c9a01e216f9c7ff9b0b7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d612527472210de3e227ee54487d0510cd1f586125ef8da63c720e8672c9a22c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d612527472210de3e227ee54487d0510cd1f586125ef8da63c720e8672c9a22c->enter($__internal_d612527472210de3e227ee54487d0510cd1f586125ef8da63c720e8672c9a22c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_67b94e23b670f49b5873bced5f2d9abdae2df1f9ac6d4a04170cb3025c7e406f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67b94e23b670f49b5873bced5f2d9abdae2df1f9ac6d4a04170cb3025c7e406f->enter($__internal_67b94e23b670f49b5873bced5f2d9abdae2df1f9ac6d4a04170cb3025c7e406f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_67b94e23b670f49b5873bced5f2d9abdae2df1f9ac6d4a04170cb3025c7e406f->leave($__internal_67b94e23b670f49b5873bced5f2d9abdae2df1f9ac6d4a04170cb3025c7e406f_prof);

        
        $__internal_d612527472210de3e227ee54487d0510cd1f586125ef8da63c720e8672c9a22c->leave($__internal_d612527472210de3e227ee54487d0510cd1f586125ef8da63c720e8672c9a22c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_df856a123f3f333a5e8e60e7b5f05b69f1f9ccb43f42d21641952222fd994e52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df856a123f3f333a5e8e60e7b5f05b69f1f9ccb43f42d21641952222fd994e52->enter($__internal_df856a123f3f333a5e8e60e7b5f05b69f1f9ccb43f42d21641952222fd994e52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5d0083004367886a9e0a685e21ac63c06ce945263dbcdfa40e4a86edaaf87a8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d0083004367886a9e0a685e21ac63c06ce945263dbcdfa40e4a86edaaf87a8f->enter($__internal_5d0083004367886a9e0a685e21ac63c06ce945263dbcdfa40e4a86edaaf87a8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5d0083004367886a9e0a685e21ac63c06ce945263dbcdfa40e4a86edaaf87a8f->leave($__internal_5d0083004367886a9e0a685e21ac63c06ce945263dbcdfa40e4a86edaaf87a8f_prof);

        
        $__internal_df856a123f3f333a5e8e60e7b5f05b69f1f9ccb43f42d21641952222fd994e52->leave($__internal_df856a123f3f333a5e8e60e7b5f05b69f1f9ccb43f42d21641952222fd994e52_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1de95f14a9ad3f3a38cbbd3e9e1d9f0d7b4272a5ca395ea02e6ea3354db00e70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1de95f14a9ad3f3a38cbbd3e9e1d9f0d7b4272a5ca395ea02e6ea3354db00e70->enter($__internal_1de95f14a9ad3f3a38cbbd3e9e1d9f0d7b4272a5ca395ea02e6ea3354db00e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ff7735f9318593358c3daab510c4c0cdc09cdb7a80d702aa31552f36c8db5cea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff7735f9318593358c3daab510c4c0cdc09cdb7a80d702aa31552f36c8db5cea->enter($__internal_ff7735f9318593358c3daab510c4c0cdc09cdb7a80d702aa31552f36c8db5cea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ff7735f9318593358c3daab510c4c0cdc09cdb7a80d702aa31552f36c8db5cea->leave($__internal_ff7735f9318593358c3daab510c4c0cdc09cdb7a80d702aa31552f36c8db5cea_prof);

        
        $__internal_1de95f14a9ad3f3a38cbbd3e9e1d9f0d7b4272a5ca395ea02e6ea3354db00e70->leave($__internal_1de95f14a9ad3f3a38cbbd3e9e1d9f0d7b4272a5ca395ea02e6ea3354db00e70_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
