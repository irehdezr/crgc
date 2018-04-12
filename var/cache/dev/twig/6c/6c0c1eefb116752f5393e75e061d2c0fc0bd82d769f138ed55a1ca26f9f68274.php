<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_894072a08316827d1e3eaf67a23afe80e119b9ed59066c4241a4cb0255f467bf extends Twig_Template
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
        $__internal_4bc1bf6a957e983bfbe81ee6515e7d8afd62920ceb64f11570945d387c616066 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bc1bf6a957e983bfbe81ee6515e7d8afd62920ceb64f11570945d387c616066->enter($__internal_4bc1bf6a957e983bfbe81ee6515e7d8afd62920ceb64f11570945d387c616066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_e84edb40858fecb80e04211f9a4a80b9078f5c52e80768faf6aa9d93f8ac54f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e84edb40858fecb80e04211f9a4a80b9078f5c52e80768faf6aa9d93f8ac54f8->enter($__internal_e84edb40858fecb80e04211f9a4a80b9078f5c52e80768faf6aa9d93f8ac54f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4bc1bf6a957e983bfbe81ee6515e7d8afd62920ceb64f11570945d387c616066->leave($__internal_4bc1bf6a957e983bfbe81ee6515e7d8afd62920ceb64f11570945d387c616066_prof);

        
        $__internal_e84edb40858fecb80e04211f9a4a80b9078f5c52e80768faf6aa9d93f8ac54f8->leave($__internal_e84edb40858fecb80e04211f9a4a80b9078f5c52e80768faf6aa9d93f8ac54f8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4a3a340940936a5183110cbe2501ba8c92e98ee687b510d0918a722694c74dad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a3a340940936a5183110cbe2501ba8c92e98ee687b510d0918a722694c74dad->enter($__internal_4a3a340940936a5183110cbe2501ba8c92e98ee687b510d0918a722694c74dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6959d32ce3266908644d6ca365cc26a7a11953684a8ec1d54fad53cead7f76e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6959d32ce3266908644d6ca365cc26a7a11953684a8ec1d54fad53cead7f76e1->enter($__internal_6959d32ce3266908644d6ca365cc26a7a11953684a8ec1d54fad53cead7f76e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6959d32ce3266908644d6ca365cc26a7a11953684a8ec1d54fad53cead7f76e1->leave($__internal_6959d32ce3266908644d6ca365cc26a7a11953684a8ec1d54fad53cead7f76e1_prof);

        
        $__internal_4a3a340940936a5183110cbe2501ba8c92e98ee687b510d0918a722694c74dad->leave($__internal_4a3a340940936a5183110cbe2501ba8c92e98ee687b510d0918a722694c74dad_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f46559bddd301e127d65273dcbf65771a1891ec107bc6b27ba810536af19bfa1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f46559bddd301e127d65273dcbf65771a1891ec107bc6b27ba810536af19bfa1->enter($__internal_f46559bddd301e127d65273dcbf65771a1891ec107bc6b27ba810536af19bfa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5a0e7966dcddb29ad540acd4af65ed02c94e251311710061907bd608c510707f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a0e7966dcddb29ad540acd4af65ed02c94e251311710061907bd608c510707f->enter($__internal_5a0e7966dcddb29ad540acd4af65ed02c94e251311710061907bd608c510707f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5a0e7966dcddb29ad540acd4af65ed02c94e251311710061907bd608c510707f->leave($__internal_5a0e7966dcddb29ad540acd4af65ed02c94e251311710061907bd608c510707f_prof);

        
        $__internal_f46559bddd301e127d65273dcbf65771a1891ec107bc6b27ba810536af19bfa1->leave($__internal_f46559bddd301e127d65273dcbf65771a1891ec107bc6b27ba810536af19bfa1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_845eab6138a0c9968cf2a1e23e8a58b599cae988daffed21b54d4271ef7b95af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_845eab6138a0c9968cf2a1e23e8a58b599cae988daffed21b54d4271ef7b95af->enter($__internal_845eab6138a0c9968cf2a1e23e8a58b599cae988daffed21b54d4271ef7b95af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4db9838b466c13930d176dc1d6c45308ff43dd14ed23c1fcf2704dc5d3150dfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4db9838b466c13930d176dc1d6c45308ff43dd14ed23c1fcf2704dc5d3150dfd->enter($__internal_4db9838b466c13930d176dc1d6c45308ff43dd14ed23c1fcf2704dc5d3150dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4db9838b466c13930d176dc1d6c45308ff43dd14ed23c1fcf2704dc5d3150dfd->leave($__internal_4db9838b466c13930d176dc1d6c45308ff43dd14ed23c1fcf2704dc5d3150dfd_prof);

        
        $__internal_845eab6138a0c9968cf2a1e23e8a58b599cae988daffed21b54d4271ef7b95af->leave($__internal_845eab6138a0c9968cf2a1e23e8a58b599cae988daffed21b54d4271ef7b95af_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
