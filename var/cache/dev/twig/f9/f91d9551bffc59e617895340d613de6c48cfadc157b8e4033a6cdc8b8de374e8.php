<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_840ada71e5d6db6ac5f71daeeecd7f2946e8cb843f66d64640cd6c3481e39255 extends Twig_Template
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
        $__internal_47a44850dc5719a912e5a42b09c0bffb54b23ea4e7deb0da9971c704e0e5024e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47a44850dc5719a912e5a42b09c0bffb54b23ea4e7deb0da9971c704e0e5024e->enter($__internal_47a44850dc5719a912e5a42b09c0bffb54b23ea4e7deb0da9971c704e0e5024e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_20fd8078679e22096381943061245c27b3c6caf1e621f119e2bba1b7d98c6c50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20fd8078679e22096381943061245c27b3c6caf1e621f119e2bba1b7d98c6c50->enter($__internal_20fd8078679e22096381943061245c27b3c6caf1e621f119e2bba1b7d98c6c50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47a44850dc5719a912e5a42b09c0bffb54b23ea4e7deb0da9971c704e0e5024e->leave($__internal_47a44850dc5719a912e5a42b09c0bffb54b23ea4e7deb0da9971c704e0e5024e_prof);

        
        $__internal_20fd8078679e22096381943061245c27b3c6caf1e621f119e2bba1b7d98c6c50->leave($__internal_20fd8078679e22096381943061245c27b3c6caf1e621f119e2bba1b7d98c6c50_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bcb60f4bf8bc4585d3879bbd3d23253907642f0cc8256a6da1c39338158abbc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcb60f4bf8bc4585d3879bbd3d23253907642f0cc8256a6da1c39338158abbc3->enter($__internal_bcb60f4bf8bc4585d3879bbd3d23253907642f0cc8256a6da1c39338158abbc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e9cc5470b2342f6c0ecd52c93193af734db8198c4e6d13208c13569c5a155dee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9cc5470b2342f6c0ecd52c93193af734db8198c4e6d13208c13569c5a155dee->enter($__internal_e9cc5470b2342f6c0ecd52c93193af734db8198c4e6d13208c13569c5a155dee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e9cc5470b2342f6c0ecd52c93193af734db8198c4e6d13208c13569c5a155dee->leave($__internal_e9cc5470b2342f6c0ecd52c93193af734db8198c4e6d13208c13569c5a155dee_prof);

        
        $__internal_bcb60f4bf8bc4585d3879bbd3d23253907642f0cc8256a6da1c39338158abbc3->leave($__internal_bcb60f4bf8bc4585d3879bbd3d23253907642f0cc8256a6da1c39338158abbc3_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_674173669efb32b5170367fe85df0d38a3a8451faab01a230f558ff15e8a31e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_674173669efb32b5170367fe85df0d38a3a8451faab01a230f558ff15e8a31e7->enter($__internal_674173669efb32b5170367fe85df0d38a3a8451faab01a230f558ff15e8a31e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ce7f7cdc9f6e9afa10468735331f31f728b4cbcc5e2ca6a866ea0d0965bc65d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce7f7cdc9f6e9afa10468735331f31f728b4cbcc5e2ca6a866ea0d0965bc65d0->enter($__internal_ce7f7cdc9f6e9afa10468735331f31f728b4cbcc5e2ca6a866ea0d0965bc65d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_ce7f7cdc9f6e9afa10468735331f31f728b4cbcc5e2ca6a866ea0d0965bc65d0->leave($__internal_ce7f7cdc9f6e9afa10468735331f31f728b4cbcc5e2ca6a866ea0d0965bc65d0_prof);

        
        $__internal_674173669efb32b5170367fe85df0d38a3a8451faab01a230f558ff15e8a31e7->leave($__internal_674173669efb32b5170367fe85df0d38a3a8451faab01a230f558ff15e8a31e7_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1e31f7dac5be7edeae260e38269a1103a9f3c5bd29b297ac76691e8814120648 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e31f7dac5be7edeae260e38269a1103a9f3c5bd29b297ac76691e8814120648->enter($__internal_1e31f7dac5be7edeae260e38269a1103a9f3c5bd29b297ac76691e8814120648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4e81dc3a2e3883d4c7a41d0afbd44e34775eaeac461106c6a6ad9b9eda324947 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e81dc3a2e3883d4c7a41d0afbd44e34775eaeac461106c6a6ad9b9eda324947->enter($__internal_4e81dc3a2e3883d4c7a41d0afbd44e34775eaeac461106c6a6ad9b9eda324947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_4e81dc3a2e3883d4c7a41d0afbd44e34775eaeac461106c6a6ad9b9eda324947->leave($__internal_4e81dc3a2e3883d4c7a41d0afbd44e34775eaeac461106c6a6ad9b9eda324947_prof);

        
        $__internal_1e31f7dac5be7edeae260e38269a1103a9f3c5bd29b297ac76691e8814120648->leave($__internal_1e31f7dac5be7edeae260e38269a1103a9f3c5bd29b297ac76691e8814120648_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "D:\\Programacion\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
