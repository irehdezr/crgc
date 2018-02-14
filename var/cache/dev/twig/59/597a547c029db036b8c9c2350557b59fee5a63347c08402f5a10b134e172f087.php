<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_9e63fde05069fb11cd75513c98ebf48eb9624fa7a38b22e791424280153aab54 extends Twig_Template
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
        $__internal_d65c631e10695dcb34738710aa0def6c7fb5909ac0ec612ba5072d3dc4d30fb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d65c631e10695dcb34738710aa0def6c7fb5909ac0ec612ba5072d3dc4d30fb9->enter($__internal_d65c631e10695dcb34738710aa0def6c7fb5909ac0ec612ba5072d3dc4d30fb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_267dc988b1de7589bd7750102884f776baff905bef68e1dae05562d3d69c94df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_267dc988b1de7589bd7750102884f776baff905bef68e1dae05562d3d69c94df->enter($__internal_267dc988b1de7589bd7750102884f776baff905bef68e1dae05562d3d69c94df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d65c631e10695dcb34738710aa0def6c7fb5909ac0ec612ba5072d3dc4d30fb9->leave($__internal_d65c631e10695dcb34738710aa0def6c7fb5909ac0ec612ba5072d3dc4d30fb9_prof);

        
        $__internal_267dc988b1de7589bd7750102884f776baff905bef68e1dae05562d3d69c94df->leave($__internal_267dc988b1de7589bd7750102884f776baff905bef68e1dae05562d3d69c94df_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5ce97b5541ac6c033ee238b530a2edf23e829a065d9ca4650b26db204c7c3e9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ce97b5541ac6c033ee238b530a2edf23e829a065d9ca4650b26db204c7c3e9d->enter($__internal_5ce97b5541ac6c033ee238b530a2edf23e829a065d9ca4650b26db204c7c3e9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_aca2ac3891b5afe167fe445f8c8be272b983e020228e8db9008e2ff3478652c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aca2ac3891b5afe167fe445f8c8be272b983e020228e8db9008e2ff3478652c4->enter($__internal_aca2ac3891b5afe167fe445f8c8be272b983e020228e8db9008e2ff3478652c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_aca2ac3891b5afe167fe445f8c8be272b983e020228e8db9008e2ff3478652c4->leave($__internal_aca2ac3891b5afe167fe445f8c8be272b983e020228e8db9008e2ff3478652c4_prof);

        
        $__internal_5ce97b5541ac6c033ee238b530a2edf23e829a065d9ca4650b26db204c7c3e9d->leave($__internal_5ce97b5541ac6c033ee238b530a2edf23e829a065d9ca4650b26db204c7c3e9d_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1bffadcc1b2db34ec4e817bd6b9f08ddc392b6c69031860b45eac4ccdf66fd8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bffadcc1b2db34ec4e817bd6b9f08ddc392b6c69031860b45eac4ccdf66fd8d->enter($__internal_1bffadcc1b2db34ec4e817bd6b9f08ddc392b6c69031860b45eac4ccdf66fd8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_69d2cb9ddaad4af7296fee2cee37d1f31d7385e78837231bc4d3369b8fd20c44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69d2cb9ddaad4af7296fee2cee37d1f31d7385e78837231bc4d3369b8fd20c44->enter($__internal_69d2cb9ddaad4af7296fee2cee37d1f31d7385e78837231bc4d3369b8fd20c44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_69d2cb9ddaad4af7296fee2cee37d1f31d7385e78837231bc4d3369b8fd20c44->leave($__internal_69d2cb9ddaad4af7296fee2cee37d1f31d7385e78837231bc4d3369b8fd20c44_prof);

        
        $__internal_1bffadcc1b2db34ec4e817bd6b9f08ddc392b6c69031860b45eac4ccdf66fd8d->leave($__internal_1bffadcc1b2db34ec4e817bd6b9f08ddc392b6c69031860b45eac4ccdf66fd8d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4e4d2aa0cf0b4f6de71d3dd1e7e763d0d84afcaf3e62d8c30ba92e3b5bf79be5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e4d2aa0cf0b4f6de71d3dd1e7e763d0d84afcaf3e62d8c30ba92e3b5bf79be5->enter($__internal_4e4d2aa0cf0b4f6de71d3dd1e7e763d0d84afcaf3e62d8c30ba92e3b5bf79be5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_20614f2863e41dbe77853c5a19f23be017525e2c304d46cad3871bdab6db8aee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20614f2863e41dbe77853c5a19f23be017525e2c304d46cad3871bdab6db8aee->enter($__internal_20614f2863e41dbe77853c5a19f23be017525e2c304d46cad3871bdab6db8aee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_20614f2863e41dbe77853c5a19f23be017525e2c304d46cad3871bdab6db8aee->leave($__internal_20614f2863e41dbe77853c5a19f23be017525e2c304d46cad3871bdab6db8aee_prof);

        
        $__internal_4e4d2aa0cf0b4f6de71d3dd1e7e763d0d84afcaf3e62d8c30ba92e3b5bf79be5->leave($__internal_4e4d2aa0cf0b4f6de71d3dd1e7e763d0d84afcaf3e62d8c30ba92e3b5bf79be5_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
