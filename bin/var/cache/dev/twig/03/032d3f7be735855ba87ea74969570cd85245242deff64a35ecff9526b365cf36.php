<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_24f31903085162574a6aedde2a4adee13399d3b3e84c38ff0158b4bd286e45fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_cfa14def975cc9031d52ceb31ee041599c869d15c6d3a33f9a42b0a97b093b66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfa14def975cc9031d52ceb31ee041599c869d15c6d3a33f9a42b0a97b093b66->enter($__internal_cfa14def975cc9031d52ceb31ee041599c869d15c6d3a33f9a42b0a97b093b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_eaa07d5a78dc3cab0df43839106ce0844e1e0618619afcc190971e23dac264f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaa07d5a78dc3cab0df43839106ce0844e1e0618619afcc190971e23dac264f7->enter($__internal_eaa07d5a78dc3cab0df43839106ce0844e1e0618619afcc190971e23dac264f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cfa14def975cc9031d52ceb31ee041599c869d15c6d3a33f9a42b0a97b093b66->leave($__internal_cfa14def975cc9031d52ceb31ee041599c869d15c6d3a33f9a42b0a97b093b66_prof);

        
        $__internal_eaa07d5a78dc3cab0df43839106ce0844e1e0618619afcc190971e23dac264f7->leave($__internal_eaa07d5a78dc3cab0df43839106ce0844e1e0618619afcc190971e23dac264f7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_27c2db0d19b445c6b2ab6eb3ad4325844ae57751d634cdef7378119836a9da65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27c2db0d19b445c6b2ab6eb3ad4325844ae57751d634cdef7378119836a9da65->enter($__internal_27c2db0d19b445c6b2ab6eb3ad4325844ae57751d634cdef7378119836a9da65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_22431fdffdb846ea93758a4274e8aad9d17c91c8dfbff868f1bf1c4402d6232b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22431fdffdb846ea93758a4274e8aad9d17c91c8dfbff868f1bf1c4402d6232b->enter($__internal_22431fdffdb846ea93758a4274e8aad9d17c91c8dfbff868f1bf1c4402d6232b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_22431fdffdb846ea93758a4274e8aad9d17c91c8dfbff868f1bf1c4402d6232b->leave($__internal_22431fdffdb846ea93758a4274e8aad9d17c91c8dfbff868f1bf1c4402d6232b_prof);

        
        $__internal_27c2db0d19b445c6b2ab6eb3ad4325844ae57751d634cdef7378119836a9da65->leave($__internal_27c2db0d19b445c6b2ab6eb3ad4325844ae57751d634cdef7378119836a9da65_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4012219a891ee9824c29507c637049e8db19a57079e4a5945a4ef996c2d4859e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4012219a891ee9824c29507c637049e8db19a57079e4a5945a4ef996c2d4859e->enter($__internal_4012219a891ee9824c29507c637049e8db19a57079e4a5945a4ef996c2d4859e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_47d498fa57a5a9dde81402475d54cd27b368d653d1611c544ecb0122f4326139 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47d498fa57a5a9dde81402475d54cd27b368d653d1611c544ecb0122f4326139->enter($__internal_47d498fa57a5a9dde81402475d54cd27b368d653d1611c544ecb0122f4326139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_47d498fa57a5a9dde81402475d54cd27b368d653d1611c544ecb0122f4326139->leave($__internal_47d498fa57a5a9dde81402475d54cd27b368d653d1611c544ecb0122f4326139_prof);

        
        $__internal_4012219a891ee9824c29507c637049e8db19a57079e4a5945a4ef996c2d4859e->leave($__internal_4012219a891ee9824c29507c637049e8db19a57079e4a5945a4ef996c2d4859e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7cadc870462ff0c10cf85ff2213f2d860052e64d78fe9148e6bfae243a38dbd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cadc870462ff0c10cf85ff2213f2d860052e64d78fe9148e6bfae243a38dbd5->enter($__internal_7cadc870462ff0c10cf85ff2213f2d860052e64d78fe9148e6bfae243a38dbd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_77b7c61207d914f98db754949d90aeb2de86097263619cb25f4c406ab9886197 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77b7c61207d914f98db754949d90aeb2de86097263619cb25f4c406ab9886197->enter($__internal_77b7c61207d914f98db754949d90aeb2de86097263619cb25f4c406ab9886197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_77b7c61207d914f98db754949d90aeb2de86097263619cb25f4c406ab9886197->leave($__internal_77b7c61207d914f98db754949d90aeb2de86097263619cb25f4c406ab9886197_prof);

        
        $__internal_7cadc870462ff0c10cf85ff2213f2d860052e64d78fe9148e6bfae243a38dbd5->leave($__internal_7cadc870462ff0c10cf85ff2213f2d860052e64d78fe9148e6bfae243a38dbd5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
