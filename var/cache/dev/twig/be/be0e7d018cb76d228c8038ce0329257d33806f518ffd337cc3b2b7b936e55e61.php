<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a236fa6a0062ba1a24d363f761bee280a242665a9e259775e950da7b4faba031 extends Twig_Template
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
        $__internal_54959cca4ea97f0cc89daa2ae2dc6266458825d25c4e0cef057e1ac6fc5d37fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54959cca4ea97f0cc89daa2ae2dc6266458825d25c4e0cef057e1ac6fc5d37fa->enter($__internal_54959cca4ea97f0cc89daa2ae2dc6266458825d25c4e0cef057e1ac6fc5d37fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_d9f434b2c6838a1826f1d7bcdbd0bcc7ef02887bd6d9c20948bf02910fe3825c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9f434b2c6838a1826f1d7bcdbd0bcc7ef02887bd6d9c20948bf02910fe3825c->enter($__internal_d9f434b2c6838a1826f1d7bcdbd0bcc7ef02887bd6d9c20948bf02910fe3825c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54959cca4ea97f0cc89daa2ae2dc6266458825d25c4e0cef057e1ac6fc5d37fa->leave($__internal_54959cca4ea97f0cc89daa2ae2dc6266458825d25c4e0cef057e1ac6fc5d37fa_prof);

        
        $__internal_d9f434b2c6838a1826f1d7bcdbd0bcc7ef02887bd6d9c20948bf02910fe3825c->leave($__internal_d9f434b2c6838a1826f1d7bcdbd0bcc7ef02887bd6d9c20948bf02910fe3825c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_59114e38d514eb0dadf90274874fff9dbeb2261a798b546abd06bdabc14bd7be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59114e38d514eb0dadf90274874fff9dbeb2261a798b546abd06bdabc14bd7be->enter($__internal_59114e38d514eb0dadf90274874fff9dbeb2261a798b546abd06bdabc14bd7be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d774fcb2ce85d52e1f451096d73e42dfe1522ee55e97d663429b37cb6f818c6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d774fcb2ce85d52e1f451096d73e42dfe1522ee55e97d663429b37cb6f818c6d->enter($__internal_d774fcb2ce85d52e1f451096d73e42dfe1522ee55e97d663429b37cb6f818c6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d774fcb2ce85d52e1f451096d73e42dfe1522ee55e97d663429b37cb6f818c6d->leave($__internal_d774fcb2ce85d52e1f451096d73e42dfe1522ee55e97d663429b37cb6f818c6d_prof);

        
        $__internal_59114e38d514eb0dadf90274874fff9dbeb2261a798b546abd06bdabc14bd7be->leave($__internal_59114e38d514eb0dadf90274874fff9dbeb2261a798b546abd06bdabc14bd7be_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b08a6cabc051690135ffac1c10b956f7cdb650fa981a2d967cdfc94d4e701b02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b08a6cabc051690135ffac1c10b956f7cdb650fa981a2d967cdfc94d4e701b02->enter($__internal_b08a6cabc051690135ffac1c10b956f7cdb650fa981a2d967cdfc94d4e701b02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8145c6ab440b3c2e9280f57f3c756258fd5dbe14afc00dccbe1c5ec6cac5ee36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8145c6ab440b3c2e9280f57f3c756258fd5dbe14afc00dccbe1c5ec6cac5ee36->enter($__internal_8145c6ab440b3c2e9280f57f3c756258fd5dbe14afc00dccbe1c5ec6cac5ee36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8145c6ab440b3c2e9280f57f3c756258fd5dbe14afc00dccbe1c5ec6cac5ee36->leave($__internal_8145c6ab440b3c2e9280f57f3c756258fd5dbe14afc00dccbe1c5ec6cac5ee36_prof);

        
        $__internal_b08a6cabc051690135ffac1c10b956f7cdb650fa981a2d967cdfc94d4e701b02->leave($__internal_b08a6cabc051690135ffac1c10b956f7cdb650fa981a2d967cdfc94d4e701b02_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7948bf45fee7a74a507af6a840ec543525a90a76c8f6ce6ecb4466cac045286f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7948bf45fee7a74a507af6a840ec543525a90a76c8f6ce6ecb4466cac045286f->enter($__internal_7948bf45fee7a74a507af6a840ec543525a90a76c8f6ce6ecb4466cac045286f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_dd5a66c2be279869d23554e235b361299442523fd4c70cb087e347d0d34b496e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd5a66c2be279869d23554e235b361299442523fd4c70cb087e347d0d34b496e->enter($__internal_dd5a66c2be279869d23554e235b361299442523fd4c70cb087e347d0d34b496e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_dd5a66c2be279869d23554e235b361299442523fd4c70cb087e347d0d34b496e->leave($__internal_dd5a66c2be279869d23554e235b361299442523fd4c70cb087e347d0d34b496e_prof);

        
        $__internal_7948bf45fee7a74a507af6a840ec543525a90a76c8f6ce6ecb4466cac045286f->leave($__internal_7948bf45fee7a74a507af6a840ec543525a90a76c8f6ce6ecb4466cac045286f_prof);

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
