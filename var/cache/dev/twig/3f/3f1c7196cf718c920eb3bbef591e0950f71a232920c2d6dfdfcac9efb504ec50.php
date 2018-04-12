<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_4e6aefbdec6cc97dfa456853cc16db6e722bf9ed406c0235af0f043006ea6b7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_bac5dde51df38cf9e182925cf0fe99513bc855b9f1b1c2674e27c092900959dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bac5dde51df38cf9e182925cf0fe99513bc855b9f1b1c2674e27c092900959dd->enter($__internal_bac5dde51df38cf9e182925cf0fe99513bc855b9f1b1c2674e27c092900959dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_5b8f14f0d4eebc91e36ede9533e2b0b563c9a7e9cb576e57d8cecd1f9c394141 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b8f14f0d4eebc91e36ede9533e2b0b563c9a7e9cb576e57d8cecd1f9c394141->enter($__internal_5b8f14f0d4eebc91e36ede9533e2b0b563c9a7e9cb576e57d8cecd1f9c394141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bac5dde51df38cf9e182925cf0fe99513bc855b9f1b1c2674e27c092900959dd->leave($__internal_bac5dde51df38cf9e182925cf0fe99513bc855b9f1b1c2674e27c092900959dd_prof);

        
        $__internal_5b8f14f0d4eebc91e36ede9533e2b0b563c9a7e9cb576e57d8cecd1f9c394141->leave($__internal_5b8f14f0d4eebc91e36ede9533e2b0b563c9a7e9cb576e57d8cecd1f9c394141_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6a873f17499aae0d8dff0681ada7cb264f4f8a8b1b357c58d6805e6b835bb3e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a873f17499aae0d8dff0681ada7cb264f4f8a8b1b357c58d6805e6b835bb3e7->enter($__internal_6a873f17499aae0d8dff0681ada7cb264f4f8a8b1b357c58d6805e6b835bb3e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_73f2c9bbaf2b86ae5f370f2fbf462e99ffb8e12e615761c6d137324a70f7d65c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73f2c9bbaf2b86ae5f370f2fbf462e99ffb8e12e615761c6d137324a70f7d65c->enter($__internal_73f2c9bbaf2b86ae5f370f2fbf462e99ffb8e12e615761c6d137324a70f7d65c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_73f2c9bbaf2b86ae5f370f2fbf462e99ffb8e12e615761c6d137324a70f7d65c->leave($__internal_73f2c9bbaf2b86ae5f370f2fbf462e99ffb8e12e615761c6d137324a70f7d65c_prof);

        
        $__internal_6a873f17499aae0d8dff0681ada7cb264f4f8a8b1b357c58d6805e6b835bb3e7->leave($__internal_6a873f17499aae0d8dff0681ada7cb264f4f8a8b1b357c58d6805e6b835bb3e7_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e5a340af1337cf15307ad869eab5e50dbc1dee99a9bc4847cc875d70e32774be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5a340af1337cf15307ad869eab5e50dbc1dee99a9bc4847cc875d70e32774be->enter($__internal_e5a340af1337cf15307ad869eab5e50dbc1dee99a9bc4847cc875d70e32774be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5e7884978fd7ae4b8181ca6e276d843a816cb8296b60626db03a8f7c6026b614 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e7884978fd7ae4b8181ca6e276d843a816cb8296b60626db03a8f7c6026b614->enter($__internal_5e7884978fd7ae4b8181ca6e276d843a816cb8296b60626db03a8f7c6026b614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_5e7884978fd7ae4b8181ca6e276d843a816cb8296b60626db03a8f7c6026b614->leave($__internal_5e7884978fd7ae4b8181ca6e276d843a816cb8296b60626db03a8f7c6026b614_prof);

        
        $__internal_e5a340af1337cf15307ad869eab5e50dbc1dee99a9bc4847cc875d70e32774be->leave($__internal_e5a340af1337cf15307ad869eab5e50dbc1dee99a9bc4847cc875d70e32774be_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_012926d0fb62d992855763164d569e2f612a3f5b2b7989ca3d07bf92050dd173 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_012926d0fb62d992855763164d569e2f612a3f5b2b7989ca3d07bf92050dd173->enter($__internal_012926d0fb62d992855763164d569e2f612a3f5b2b7989ca3d07bf92050dd173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_759723420f13c70de6f972822b60e45750ef56b98cf380a35c1a4f87ef4083cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_759723420f13c70de6f972822b60e45750ef56b98cf380a35c1a4f87ef4083cc->enter($__internal_759723420f13c70de6f972822b60e45750ef56b98cf380a35c1a4f87ef4083cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_759723420f13c70de6f972822b60e45750ef56b98cf380a35c1a4f87ef4083cc->leave($__internal_759723420f13c70de6f972822b60e45750ef56b98cf380a35c1a4f87ef4083cc_prof);

        
        $__internal_012926d0fb62d992855763164d569e2f612a3f5b2b7989ca3d07bf92050dd173->leave($__internal_012926d0fb62d992855763164d569e2f612a3f5b2b7989ca3d07bf92050dd173_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
