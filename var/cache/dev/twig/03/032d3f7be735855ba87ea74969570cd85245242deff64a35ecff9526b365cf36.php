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
        $__internal_4ee589a7e724796bc546b5e088588f401094954b7a5d2d0fb4fd40b81049c281 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ee589a7e724796bc546b5e088588f401094954b7a5d2d0fb4fd40b81049c281->enter($__internal_4ee589a7e724796bc546b5e088588f401094954b7a5d2d0fb4fd40b81049c281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_5a72838dab44c4393593ebca0b2ccd6b4aea0c832a392421a82f1523e3f964cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a72838dab44c4393593ebca0b2ccd6b4aea0c832a392421a82f1523e3f964cf->enter($__internal_5a72838dab44c4393593ebca0b2ccd6b4aea0c832a392421a82f1523e3f964cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ee589a7e724796bc546b5e088588f401094954b7a5d2d0fb4fd40b81049c281->leave($__internal_4ee589a7e724796bc546b5e088588f401094954b7a5d2d0fb4fd40b81049c281_prof);

        
        $__internal_5a72838dab44c4393593ebca0b2ccd6b4aea0c832a392421a82f1523e3f964cf->leave($__internal_5a72838dab44c4393593ebca0b2ccd6b4aea0c832a392421a82f1523e3f964cf_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c2f277030b3c6ae9c68bed9bf68e0b7ddf9e0db01144000f12779fdafb30536f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2f277030b3c6ae9c68bed9bf68e0b7ddf9e0db01144000f12779fdafb30536f->enter($__internal_c2f277030b3c6ae9c68bed9bf68e0b7ddf9e0db01144000f12779fdafb30536f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f3653d4d61e0edc70d8b1a017150035b6f887e2b91bb09aa783007e2fc2c270e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3653d4d61e0edc70d8b1a017150035b6f887e2b91bb09aa783007e2fc2c270e->enter($__internal_f3653d4d61e0edc70d8b1a017150035b6f887e2b91bb09aa783007e2fc2c270e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f3653d4d61e0edc70d8b1a017150035b6f887e2b91bb09aa783007e2fc2c270e->leave($__internal_f3653d4d61e0edc70d8b1a017150035b6f887e2b91bb09aa783007e2fc2c270e_prof);

        
        $__internal_c2f277030b3c6ae9c68bed9bf68e0b7ddf9e0db01144000f12779fdafb30536f->leave($__internal_c2f277030b3c6ae9c68bed9bf68e0b7ddf9e0db01144000f12779fdafb30536f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a90a738efd5eb4cbffa3706eda682a8ed7f84fc433e07d3e4c08a600ea75a16a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a90a738efd5eb4cbffa3706eda682a8ed7f84fc433e07d3e4c08a600ea75a16a->enter($__internal_a90a738efd5eb4cbffa3706eda682a8ed7f84fc433e07d3e4c08a600ea75a16a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_dc24014f9af516613daa24bf5520e0c1c18d11859c8be18a755f4c39708b5279 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc24014f9af516613daa24bf5520e0c1c18d11859c8be18a755f4c39708b5279->enter($__internal_dc24014f9af516613daa24bf5520e0c1c18d11859c8be18a755f4c39708b5279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_dc24014f9af516613daa24bf5520e0c1c18d11859c8be18a755f4c39708b5279->leave($__internal_dc24014f9af516613daa24bf5520e0c1c18d11859c8be18a755f4c39708b5279_prof);

        
        $__internal_a90a738efd5eb4cbffa3706eda682a8ed7f84fc433e07d3e4c08a600ea75a16a->leave($__internal_a90a738efd5eb4cbffa3706eda682a8ed7f84fc433e07d3e4c08a600ea75a16a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e8885c92b71e95ac902393441266100a7ea40b67ba08d2be5fbffbdfa8a7c094 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8885c92b71e95ac902393441266100a7ea40b67ba08d2be5fbffbdfa8a7c094->enter($__internal_e8885c92b71e95ac902393441266100a7ea40b67ba08d2be5fbffbdfa8a7c094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a737cd96a8b6f0176d4cac9ae0d0cc0b613509715be2091b659b92b83ac55526 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a737cd96a8b6f0176d4cac9ae0d0cc0b613509715be2091b659b92b83ac55526->enter($__internal_a737cd96a8b6f0176d4cac9ae0d0cc0b613509715be2091b659b92b83ac55526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a737cd96a8b6f0176d4cac9ae0d0cc0b613509715be2091b659b92b83ac55526->leave($__internal_a737cd96a8b6f0176d4cac9ae0d0cc0b613509715be2091b659b92b83ac55526_prof);

        
        $__internal_e8885c92b71e95ac902393441266100a7ea40b67ba08d2be5fbffbdfa8a7c094->leave($__internal_e8885c92b71e95ac902393441266100a7ea40b67ba08d2be5fbffbdfa8a7c094_prof);

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
