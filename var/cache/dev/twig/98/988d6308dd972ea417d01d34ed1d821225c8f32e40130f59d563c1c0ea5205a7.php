<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_bc6674af95a439fdc9d8ca81aed1cfd8c2d3ed2849b6d2bf347a500486741792 extends Twig_Template
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
        $__internal_254b78642ecf61703615855027d5648d15f3495f5838641e5908fc8ee289e351 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_254b78642ecf61703615855027d5648d15f3495f5838641e5908fc8ee289e351->enter($__internal_254b78642ecf61703615855027d5648d15f3495f5838641e5908fc8ee289e351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_9fde82c5ec4e45608822964edfd695009cd13e9d2be67e8588f05469ffd01cdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fde82c5ec4e45608822964edfd695009cd13e9d2be67e8588f05469ffd01cdf->enter($__internal_9fde82c5ec4e45608822964edfd695009cd13e9d2be67e8588f05469ffd01cdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_254b78642ecf61703615855027d5648d15f3495f5838641e5908fc8ee289e351->leave($__internal_254b78642ecf61703615855027d5648d15f3495f5838641e5908fc8ee289e351_prof);

        
        $__internal_9fde82c5ec4e45608822964edfd695009cd13e9d2be67e8588f05469ffd01cdf->leave($__internal_9fde82c5ec4e45608822964edfd695009cd13e9d2be67e8588f05469ffd01cdf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2474a0aa188f84cc6da7f4b3f7031f94cbf04b967b583d6697cd7092d2853122 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2474a0aa188f84cc6da7f4b3f7031f94cbf04b967b583d6697cd7092d2853122->enter($__internal_2474a0aa188f84cc6da7f4b3f7031f94cbf04b967b583d6697cd7092d2853122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5be4965fc2cdf7dfbea5abff7f547a5211a7b7cc80b8e94839850f108ff6f2bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5be4965fc2cdf7dfbea5abff7f547a5211a7b7cc80b8e94839850f108ff6f2bf->enter($__internal_5be4965fc2cdf7dfbea5abff7f547a5211a7b7cc80b8e94839850f108ff6f2bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_5be4965fc2cdf7dfbea5abff7f547a5211a7b7cc80b8e94839850f108ff6f2bf->leave($__internal_5be4965fc2cdf7dfbea5abff7f547a5211a7b7cc80b8e94839850f108ff6f2bf_prof);

        
        $__internal_2474a0aa188f84cc6da7f4b3f7031f94cbf04b967b583d6697cd7092d2853122->leave($__internal_2474a0aa188f84cc6da7f4b3f7031f94cbf04b967b583d6697cd7092d2853122_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d5f3db52633ad003ab0bf32c03127e5c101b58005fbd52474211c99c4eb9dd36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5f3db52633ad003ab0bf32c03127e5c101b58005fbd52474211c99c4eb9dd36->enter($__internal_d5f3db52633ad003ab0bf32c03127e5c101b58005fbd52474211c99c4eb9dd36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d8be3ac4dedd3f2ce60b621aa22bab65e105901a1493b251250b64e28d762c29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8be3ac4dedd3f2ce60b621aa22bab65e105901a1493b251250b64e28d762c29->enter($__internal_d8be3ac4dedd3f2ce60b621aa22bab65e105901a1493b251250b64e28d762c29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_d8be3ac4dedd3f2ce60b621aa22bab65e105901a1493b251250b64e28d762c29->leave($__internal_d8be3ac4dedd3f2ce60b621aa22bab65e105901a1493b251250b64e28d762c29_prof);

        
        $__internal_d5f3db52633ad003ab0bf32c03127e5c101b58005fbd52474211c99c4eb9dd36->leave($__internal_d5f3db52633ad003ab0bf32c03127e5c101b58005fbd52474211c99c4eb9dd36_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1575db58b3a4b808e9997f4fd020363cb749245225288f8cca548fdc821f1246 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1575db58b3a4b808e9997f4fd020363cb749245225288f8cca548fdc821f1246->enter($__internal_1575db58b3a4b808e9997f4fd020363cb749245225288f8cca548fdc821f1246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_169a01dc756e9ff99437f8ecabcda6e9c73325442cec526fba7f343fb14ed8d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_169a01dc756e9ff99437f8ecabcda6e9c73325442cec526fba7f343fb14ed8d7->enter($__internal_169a01dc756e9ff99437f8ecabcda6e9c73325442cec526fba7f343fb14ed8d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_169a01dc756e9ff99437f8ecabcda6e9c73325442cec526fba7f343fb14ed8d7->leave($__internal_169a01dc756e9ff99437f8ecabcda6e9c73325442cec526fba7f343fb14ed8d7_prof);

        
        $__internal_1575db58b3a4b808e9997f4fd020363cb749245225288f8cca548fdc821f1246->leave($__internal_1575db58b3a4b808e9997f4fd020363cb749245225288f8cca548fdc821f1246_prof);

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
