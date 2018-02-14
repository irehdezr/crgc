<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_863ba099f505cf8afae555f3728a6b90b60ccc407f1104bdeb585804079c3360 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_2b4a142b6a3a45876568e0d511c05f6387502c11c33ef92193a98a2820070d63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b4a142b6a3a45876568e0d511c05f6387502c11c33ef92193a98a2820070d63->enter($__internal_2b4a142b6a3a45876568e0d511c05f6387502c11c33ef92193a98a2820070d63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_19db29c76bd8e14c990c19153cac8fb1c96815abae2e7209ca96881c3669c44b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19db29c76bd8e14c990c19153cac8fb1c96815abae2e7209ca96881c3669c44b->enter($__internal_19db29c76bd8e14c990c19153cac8fb1c96815abae2e7209ca96881c3669c44b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b4a142b6a3a45876568e0d511c05f6387502c11c33ef92193a98a2820070d63->leave($__internal_2b4a142b6a3a45876568e0d511c05f6387502c11c33ef92193a98a2820070d63_prof);

        
        $__internal_19db29c76bd8e14c990c19153cac8fb1c96815abae2e7209ca96881c3669c44b->leave($__internal_19db29c76bd8e14c990c19153cac8fb1c96815abae2e7209ca96881c3669c44b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_806aa91e3168996bac4be45be72ce64293051e077cb4dfdd43c9aba1fb1f909e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_806aa91e3168996bac4be45be72ce64293051e077cb4dfdd43c9aba1fb1f909e->enter($__internal_806aa91e3168996bac4be45be72ce64293051e077cb4dfdd43c9aba1fb1f909e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_66aa295f9757230a545d902425dcf0de4386d2a2ba00d9b1aa66271fd6a2b4d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66aa295f9757230a545d902425dcf0de4386d2a2ba00d9b1aa66271fd6a2b4d8->enter($__internal_66aa295f9757230a545d902425dcf0de4386d2a2ba00d9b1aa66271fd6a2b4d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_66aa295f9757230a545d902425dcf0de4386d2a2ba00d9b1aa66271fd6a2b4d8->leave($__internal_66aa295f9757230a545d902425dcf0de4386d2a2ba00d9b1aa66271fd6a2b4d8_prof);

        
        $__internal_806aa91e3168996bac4be45be72ce64293051e077cb4dfdd43c9aba1fb1f909e->leave($__internal_806aa91e3168996bac4be45be72ce64293051e077cb4dfdd43c9aba1fb1f909e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a57826d40cafd2969bab565a22e8be09b8ffb9265fda90dd40d97c3f09147605 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a57826d40cafd2969bab565a22e8be09b8ffb9265fda90dd40d97c3f09147605->enter($__internal_a57826d40cafd2969bab565a22e8be09b8ffb9265fda90dd40d97c3f09147605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c51319cc0f218184497c3160c0c4a8458cfab558634a38d8311c8ccda5d15e0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c51319cc0f218184497c3160c0c4a8458cfab558634a38d8311c8ccda5d15e0e->enter($__internal_c51319cc0f218184497c3160c0c4a8458cfab558634a38d8311c8ccda5d15e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c51319cc0f218184497c3160c0c4a8458cfab558634a38d8311c8ccda5d15e0e->leave($__internal_c51319cc0f218184497c3160c0c4a8458cfab558634a38d8311c8ccda5d15e0e_prof);

        
        $__internal_a57826d40cafd2969bab565a22e8be09b8ffb9265fda90dd40d97c3f09147605->leave($__internal_a57826d40cafd2969bab565a22e8be09b8ffb9265fda90dd40d97c3f09147605_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5a495bcbdcb21d53960a685d4e1f7111fdd485221a4d2d3b1df1babf19bd330f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a495bcbdcb21d53960a685d4e1f7111fdd485221a4d2d3b1df1babf19bd330f->enter($__internal_5a495bcbdcb21d53960a685d4e1f7111fdd485221a4d2d3b1df1babf19bd330f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ed6600cbd3ced9230c687bdcf1c7e17f7f6b661d38ec8840701672b7fdc2c082 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed6600cbd3ced9230c687bdcf1c7e17f7f6b661d38ec8840701672b7fdc2c082->enter($__internal_ed6600cbd3ced9230c687bdcf1c7e17f7f6b661d38ec8840701672b7fdc2c082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ed6600cbd3ced9230c687bdcf1c7e17f7f6b661d38ec8840701672b7fdc2c082->leave($__internal_ed6600cbd3ced9230c687bdcf1c7e17f7f6b661d38ec8840701672b7fdc2c082_prof);

        
        $__internal_5a495bcbdcb21d53960a685d4e1f7111fdd485221a4d2d3b1df1babf19bd330f->leave($__internal_5a495bcbdcb21d53960a685d4e1f7111fdd485221a4d2d3b1df1babf19bd330f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
