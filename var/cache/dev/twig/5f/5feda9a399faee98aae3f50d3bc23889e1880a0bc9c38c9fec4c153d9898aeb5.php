<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_7701d846070a06c08bde27c9301a8c05ce6eb695c7dbf5481a3c2e1ffbf95a6c extends Twig_Template
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
        $__internal_35f0e77cd1b2760c7a38f131ac40ce09493e90e5f8837943f1f49ac72486027e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35f0e77cd1b2760c7a38f131ac40ce09493e90e5f8837943f1f49ac72486027e->enter($__internal_35f0e77cd1b2760c7a38f131ac40ce09493e90e5f8837943f1f49ac72486027e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_aade81e85bcab58c969284bf487037acea7f3ab9a268ffb73f7942c770d63b22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aade81e85bcab58c969284bf487037acea7f3ab9a268ffb73f7942c770d63b22->enter($__internal_aade81e85bcab58c969284bf487037acea7f3ab9a268ffb73f7942c770d63b22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35f0e77cd1b2760c7a38f131ac40ce09493e90e5f8837943f1f49ac72486027e->leave($__internal_35f0e77cd1b2760c7a38f131ac40ce09493e90e5f8837943f1f49ac72486027e_prof);

        
        $__internal_aade81e85bcab58c969284bf487037acea7f3ab9a268ffb73f7942c770d63b22->leave($__internal_aade81e85bcab58c969284bf487037acea7f3ab9a268ffb73f7942c770d63b22_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9fa6302617ea4ef494d133ccbb01773e00f23b30b67ecdf1f183754399838d05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fa6302617ea4ef494d133ccbb01773e00f23b30b67ecdf1f183754399838d05->enter($__internal_9fa6302617ea4ef494d133ccbb01773e00f23b30b67ecdf1f183754399838d05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8761fc6ade1de5b314621e1efedfe9e1d1f11a35223d02fca6614b72440d4892 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8761fc6ade1de5b314621e1efedfe9e1d1f11a35223d02fca6614b72440d4892->enter($__internal_8761fc6ade1de5b314621e1efedfe9e1d1f11a35223d02fca6614b72440d4892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_8761fc6ade1de5b314621e1efedfe9e1d1f11a35223d02fca6614b72440d4892->leave($__internal_8761fc6ade1de5b314621e1efedfe9e1d1f11a35223d02fca6614b72440d4892_prof);

        
        $__internal_9fa6302617ea4ef494d133ccbb01773e00f23b30b67ecdf1f183754399838d05->leave($__internal_9fa6302617ea4ef494d133ccbb01773e00f23b30b67ecdf1f183754399838d05_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c66af9f26753c404a5820c2281b6db8315dd846da3258c1e603c6657e605d709 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c66af9f26753c404a5820c2281b6db8315dd846da3258c1e603c6657e605d709->enter($__internal_c66af9f26753c404a5820c2281b6db8315dd846da3258c1e603c6657e605d709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_24406dc760e3a65e5e6878cae45232ebb542d8b785fe6e92eb43ac45bd2e590f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24406dc760e3a65e5e6878cae45232ebb542d8b785fe6e92eb43ac45bd2e590f->enter($__internal_24406dc760e3a65e5e6878cae45232ebb542d8b785fe6e92eb43ac45bd2e590f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_24406dc760e3a65e5e6878cae45232ebb542d8b785fe6e92eb43ac45bd2e590f->leave($__internal_24406dc760e3a65e5e6878cae45232ebb542d8b785fe6e92eb43ac45bd2e590f_prof);

        
        $__internal_c66af9f26753c404a5820c2281b6db8315dd846da3258c1e603c6657e605d709->leave($__internal_c66af9f26753c404a5820c2281b6db8315dd846da3258c1e603c6657e605d709_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4758e349c15fb4dd77428f3cafb303f5969ea713161f2841a5862733e55713a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4758e349c15fb4dd77428f3cafb303f5969ea713161f2841a5862733e55713a8->enter($__internal_4758e349c15fb4dd77428f3cafb303f5969ea713161f2841a5862733e55713a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e91382ca5924ca7a31bec7222385476feada64eff9a2622448ed310812667285 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e91382ca5924ca7a31bec7222385476feada64eff9a2622448ed310812667285->enter($__internal_e91382ca5924ca7a31bec7222385476feada64eff9a2622448ed310812667285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_e91382ca5924ca7a31bec7222385476feada64eff9a2622448ed310812667285->leave($__internal_e91382ca5924ca7a31bec7222385476feada64eff9a2622448ed310812667285_prof);

        
        $__internal_4758e349c15fb4dd77428f3cafb303f5969ea713161f2841a5862733e55713a8->leave($__internal_4758e349c15fb4dd77428f3cafb303f5969ea713161f2841a5862733e55713a8_prof);

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
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
