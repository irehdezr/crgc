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
        $__internal_6d251e9f7801e91c97a12526e99b942d8296005022f0220d891ccf6284a13022 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d251e9f7801e91c97a12526e99b942d8296005022f0220d891ccf6284a13022->enter($__internal_6d251e9f7801e91c97a12526e99b942d8296005022f0220d891ccf6284a13022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_c645da5244895599034d85d83dc9f2c3a382040c5f143813a053db248a8eedd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c645da5244895599034d85d83dc9f2c3a382040c5f143813a053db248a8eedd5->enter($__internal_c645da5244895599034d85d83dc9f2c3a382040c5f143813a053db248a8eedd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d251e9f7801e91c97a12526e99b942d8296005022f0220d891ccf6284a13022->leave($__internal_6d251e9f7801e91c97a12526e99b942d8296005022f0220d891ccf6284a13022_prof);

        
        $__internal_c645da5244895599034d85d83dc9f2c3a382040c5f143813a053db248a8eedd5->leave($__internal_c645da5244895599034d85d83dc9f2c3a382040c5f143813a053db248a8eedd5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_eb38f6ea48b5eb169d31d539d4deff9966e5c0d865c6cd219ecee57f371bf703 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb38f6ea48b5eb169d31d539d4deff9966e5c0d865c6cd219ecee57f371bf703->enter($__internal_eb38f6ea48b5eb169d31d539d4deff9966e5c0d865c6cd219ecee57f371bf703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_79aaa3d3de0fbc70b870ffd43020cb47a0a2a5fea83f95f085f31b3543c8fce4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79aaa3d3de0fbc70b870ffd43020cb47a0a2a5fea83f95f085f31b3543c8fce4->enter($__internal_79aaa3d3de0fbc70b870ffd43020cb47a0a2a5fea83f95f085f31b3543c8fce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_79aaa3d3de0fbc70b870ffd43020cb47a0a2a5fea83f95f085f31b3543c8fce4->leave($__internal_79aaa3d3de0fbc70b870ffd43020cb47a0a2a5fea83f95f085f31b3543c8fce4_prof);

        
        $__internal_eb38f6ea48b5eb169d31d539d4deff9966e5c0d865c6cd219ecee57f371bf703->leave($__internal_eb38f6ea48b5eb169d31d539d4deff9966e5c0d865c6cd219ecee57f371bf703_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a7426d6ddac2fd5d418d79dfdad8922125dfb15be9c62b07c082343f2908d8b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7426d6ddac2fd5d418d79dfdad8922125dfb15be9c62b07c082343f2908d8b8->enter($__internal_a7426d6ddac2fd5d418d79dfdad8922125dfb15be9c62b07c082343f2908d8b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_00f8c4c58e41a8436b964bc6963908d286835431989358fd0d6dfef119b191e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00f8c4c58e41a8436b964bc6963908d286835431989358fd0d6dfef119b191e2->enter($__internal_00f8c4c58e41a8436b964bc6963908d286835431989358fd0d6dfef119b191e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_00f8c4c58e41a8436b964bc6963908d286835431989358fd0d6dfef119b191e2->leave($__internal_00f8c4c58e41a8436b964bc6963908d286835431989358fd0d6dfef119b191e2_prof);

        
        $__internal_a7426d6ddac2fd5d418d79dfdad8922125dfb15be9c62b07c082343f2908d8b8->leave($__internal_a7426d6ddac2fd5d418d79dfdad8922125dfb15be9c62b07c082343f2908d8b8_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d7051aea65b182849761b3d5147fcb9c1ae41fd7eaa41e3dcb9a4e8e468d2394 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7051aea65b182849761b3d5147fcb9c1ae41fd7eaa41e3dcb9a4e8e468d2394->enter($__internal_d7051aea65b182849761b3d5147fcb9c1ae41fd7eaa41e3dcb9a4e8e468d2394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4dacbb0a2093e63ca22e3bda34b844f8d69dfbce3dd1bdf54f4dc54796c7902c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dacbb0a2093e63ca22e3bda34b844f8d69dfbce3dd1bdf54f4dc54796c7902c->enter($__internal_4dacbb0a2093e63ca22e3bda34b844f8d69dfbce3dd1bdf54f4dc54796c7902c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_4dacbb0a2093e63ca22e3bda34b844f8d69dfbce3dd1bdf54f4dc54796c7902c->leave($__internal_4dacbb0a2093e63ca22e3bda34b844f8d69dfbce3dd1bdf54f4dc54796c7902c_prof);

        
        $__internal_d7051aea65b182849761b3d5147fcb9c1ae41fd7eaa41e3dcb9a4e8e468d2394->leave($__internal_d7051aea65b182849761b3d5147fcb9c1ae41fd7eaa41e3dcb9a4e8e468d2394_prof);

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
