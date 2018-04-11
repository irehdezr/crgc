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
        $__internal_32856d2240cca8854cc1c0375bc428bd67c17f232bad017bed41b28bf578cc2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32856d2240cca8854cc1c0375bc428bd67c17f232bad017bed41b28bf578cc2e->enter($__internal_32856d2240cca8854cc1c0375bc428bd67c17f232bad017bed41b28bf578cc2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_10284064a3f82dd4f822f39faee33427bc510e8e5781fbb4c5a36cbd96630945 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10284064a3f82dd4f822f39faee33427bc510e8e5781fbb4c5a36cbd96630945->enter($__internal_10284064a3f82dd4f822f39faee33427bc510e8e5781fbb4c5a36cbd96630945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32856d2240cca8854cc1c0375bc428bd67c17f232bad017bed41b28bf578cc2e->leave($__internal_32856d2240cca8854cc1c0375bc428bd67c17f232bad017bed41b28bf578cc2e_prof);

        
        $__internal_10284064a3f82dd4f822f39faee33427bc510e8e5781fbb4c5a36cbd96630945->leave($__internal_10284064a3f82dd4f822f39faee33427bc510e8e5781fbb4c5a36cbd96630945_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fb8c4f66c4293498579c814ec2aaa215e0bdddac19557e357f8e7acb9e0cbf6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb8c4f66c4293498579c814ec2aaa215e0bdddac19557e357f8e7acb9e0cbf6a->enter($__internal_fb8c4f66c4293498579c814ec2aaa215e0bdddac19557e357f8e7acb9e0cbf6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3c318791a0ed9ce660058e300c140aae46b11f6f8116e3770d555ed08551f3b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c318791a0ed9ce660058e300c140aae46b11f6f8116e3770d555ed08551f3b3->enter($__internal_3c318791a0ed9ce660058e300c140aae46b11f6f8116e3770d555ed08551f3b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_3c318791a0ed9ce660058e300c140aae46b11f6f8116e3770d555ed08551f3b3->leave($__internal_3c318791a0ed9ce660058e300c140aae46b11f6f8116e3770d555ed08551f3b3_prof);

        
        $__internal_fb8c4f66c4293498579c814ec2aaa215e0bdddac19557e357f8e7acb9e0cbf6a->leave($__internal_fb8c4f66c4293498579c814ec2aaa215e0bdddac19557e357f8e7acb9e0cbf6a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8c23b29696c34a0d448727fe9826f95065fce1982dc3321a69b44369639a05c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c23b29696c34a0d448727fe9826f95065fce1982dc3321a69b44369639a05c2->enter($__internal_8c23b29696c34a0d448727fe9826f95065fce1982dc3321a69b44369639a05c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d63ce840b2f98929043c1ad40027794b840115f2f7aea3be0da3e10c2e19aa77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d63ce840b2f98929043c1ad40027794b840115f2f7aea3be0da3e10c2e19aa77->enter($__internal_d63ce840b2f98929043c1ad40027794b840115f2f7aea3be0da3e10c2e19aa77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_d63ce840b2f98929043c1ad40027794b840115f2f7aea3be0da3e10c2e19aa77->leave($__internal_d63ce840b2f98929043c1ad40027794b840115f2f7aea3be0da3e10c2e19aa77_prof);

        
        $__internal_8c23b29696c34a0d448727fe9826f95065fce1982dc3321a69b44369639a05c2->leave($__internal_8c23b29696c34a0d448727fe9826f95065fce1982dc3321a69b44369639a05c2_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_70e65dee7d73e21d52a99e98f289a5f7082190558eba2fbdf020603a04fd27f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70e65dee7d73e21d52a99e98f289a5f7082190558eba2fbdf020603a04fd27f9->enter($__internal_70e65dee7d73e21d52a99e98f289a5f7082190558eba2fbdf020603a04fd27f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5b9390bae1c5eea8102e730a1426c2c6e06eea91042c01c58fc34ac671d74d89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b9390bae1c5eea8102e730a1426c2c6e06eea91042c01c58fc34ac671d74d89->enter($__internal_5b9390bae1c5eea8102e730a1426c2c6e06eea91042c01c58fc34ac671d74d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_5b9390bae1c5eea8102e730a1426c2c6e06eea91042c01c58fc34ac671d74d89->leave($__internal_5b9390bae1c5eea8102e730a1426c2c6e06eea91042c01c58fc34ac671d74d89_prof);

        
        $__internal_70e65dee7d73e21d52a99e98f289a5f7082190558eba2fbdf020603a04fd27f9->leave($__internal_70e65dee7d73e21d52a99e98f289a5f7082190558eba2fbdf020603a04fd27f9_prof);

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
