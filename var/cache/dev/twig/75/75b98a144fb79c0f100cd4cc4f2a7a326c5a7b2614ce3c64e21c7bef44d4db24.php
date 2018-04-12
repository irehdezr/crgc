<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_04208b9e6bcde61bcc2c3c88edcb9f307f25b2fc849a3cf3e5adc3fc20072150 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_4f081eed2e0ee702c7246a27486ea2a154a4255b3d20a96be91cdf94750551d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f081eed2e0ee702c7246a27486ea2a154a4255b3d20a96be91cdf94750551d3->enter($__internal_4f081eed2e0ee702c7246a27486ea2a154a4255b3d20a96be91cdf94750551d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_d4934a96f3ee08accec7a81b9b8c5545eab83fb07eb517433265ba43e35f6422 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4934a96f3ee08accec7a81b9b8c5545eab83fb07eb517433265ba43e35f6422->enter($__internal_d4934a96f3ee08accec7a81b9b8c5545eab83fb07eb517433265ba43e35f6422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f081eed2e0ee702c7246a27486ea2a154a4255b3d20a96be91cdf94750551d3->leave($__internal_4f081eed2e0ee702c7246a27486ea2a154a4255b3d20a96be91cdf94750551d3_prof);

        
        $__internal_d4934a96f3ee08accec7a81b9b8c5545eab83fb07eb517433265ba43e35f6422->leave($__internal_d4934a96f3ee08accec7a81b9b8c5545eab83fb07eb517433265ba43e35f6422_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f16d1e33a0c33d6b4fcc7fa20cfcaccc92911b8ad8ead73b655cc9a9e5727e25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f16d1e33a0c33d6b4fcc7fa20cfcaccc92911b8ad8ead73b655cc9a9e5727e25->enter($__internal_f16d1e33a0c33d6b4fcc7fa20cfcaccc92911b8ad8ead73b655cc9a9e5727e25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_50a18ab53002dca0caee771e5232ee989627d1f9080d59c100d6700cca4725df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50a18ab53002dca0caee771e5232ee989627d1f9080d59c100d6700cca4725df->enter($__internal_50a18ab53002dca0caee771e5232ee989627d1f9080d59c100d6700cca4725df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_50a18ab53002dca0caee771e5232ee989627d1f9080d59c100d6700cca4725df->leave($__internal_50a18ab53002dca0caee771e5232ee989627d1f9080d59c100d6700cca4725df_prof);

        
        $__internal_f16d1e33a0c33d6b4fcc7fa20cfcaccc92911b8ad8ead73b655cc9a9e5727e25->leave($__internal_f16d1e33a0c33d6b4fcc7fa20cfcaccc92911b8ad8ead73b655cc9a9e5727e25_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_65628cb85a331b06e37aea44792cb06813d5e6d117a1fa670c4bba250ae6a940 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65628cb85a331b06e37aea44792cb06813d5e6d117a1fa670c4bba250ae6a940->enter($__internal_65628cb85a331b06e37aea44792cb06813d5e6d117a1fa670c4bba250ae6a940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_304155c861011e2f8bd11395e7b1179630d30ba7dd2280be2baeb72ebe9955b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_304155c861011e2f8bd11395e7b1179630d30ba7dd2280be2baeb72ebe9955b5->enter($__internal_304155c861011e2f8bd11395e7b1179630d30ba7dd2280be2baeb72ebe9955b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_304155c861011e2f8bd11395e7b1179630d30ba7dd2280be2baeb72ebe9955b5->leave($__internal_304155c861011e2f8bd11395e7b1179630d30ba7dd2280be2baeb72ebe9955b5_prof);

        
        $__internal_65628cb85a331b06e37aea44792cb06813d5e6d117a1fa670c4bba250ae6a940->leave($__internal_65628cb85a331b06e37aea44792cb06813d5e6d117a1fa670c4bba250ae6a940_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_320a384b4cbb12076c40dcd7ebf0d6d68151f00dd7426f8b99b4579399138633 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_320a384b4cbb12076c40dcd7ebf0d6d68151f00dd7426f8b99b4579399138633->enter($__internal_320a384b4cbb12076c40dcd7ebf0d6d68151f00dd7426f8b99b4579399138633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fc8d8854a9614c8fbb7020b27ef46b3100f6339f6436558b2449a85d928ea504 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc8d8854a9614c8fbb7020b27ef46b3100f6339f6436558b2449a85d928ea504->enter($__internal_fc8d8854a9614c8fbb7020b27ef46b3100f6339f6436558b2449a85d928ea504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_fc8d8854a9614c8fbb7020b27ef46b3100f6339f6436558b2449a85d928ea504->leave($__internal_fc8d8854a9614c8fbb7020b27ef46b3100f6339f6436558b2449a85d928ea504_prof);

        
        $__internal_320a384b4cbb12076c40dcd7ebf0d6d68151f00dd7426f8b99b4579399138633->leave($__internal_320a384b4cbb12076c40dcd7ebf0d6d68151f00dd7426f8b99b4579399138633_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
