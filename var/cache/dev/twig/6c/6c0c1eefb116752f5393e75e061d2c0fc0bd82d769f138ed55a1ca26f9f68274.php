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
        $__internal_65bfb634a206ac5a7a46da8cb8dd3b98ed1d1b12cef42672f85bd34597ae0ee1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65bfb634a206ac5a7a46da8cb8dd3b98ed1d1b12cef42672f85bd34597ae0ee1->enter($__internal_65bfb634a206ac5a7a46da8cb8dd3b98ed1d1b12cef42672f85bd34597ae0ee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_8fe261b9e7b8992c1fbf3319dfc147f07c47cebfe64a2235b865ccbd832b2918 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fe261b9e7b8992c1fbf3319dfc147f07c47cebfe64a2235b865ccbd832b2918->enter($__internal_8fe261b9e7b8992c1fbf3319dfc147f07c47cebfe64a2235b865ccbd832b2918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65bfb634a206ac5a7a46da8cb8dd3b98ed1d1b12cef42672f85bd34597ae0ee1->leave($__internal_65bfb634a206ac5a7a46da8cb8dd3b98ed1d1b12cef42672f85bd34597ae0ee1_prof);

        
        $__internal_8fe261b9e7b8992c1fbf3319dfc147f07c47cebfe64a2235b865ccbd832b2918->leave($__internal_8fe261b9e7b8992c1fbf3319dfc147f07c47cebfe64a2235b865ccbd832b2918_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_283b65e667adaa339925d1e7d0e554a842182ae7238954b1f8698e4cb7585161 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_283b65e667adaa339925d1e7d0e554a842182ae7238954b1f8698e4cb7585161->enter($__internal_283b65e667adaa339925d1e7d0e554a842182ae7238954b1f8698e4cb7585161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_fee850be31ee9d5f0023c59394955984565150faaa30548f4e76a84e8a1dae3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fee850be31ee9d5f0023c59394955984565150faaa30548f4e76a84e8a1dae3d->enter($__internal_fee850be31ee9d5f0023c59394955984565150faaa30548f4e76a84e8a1dae3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fee850be31ee9d5f0023c59394955984565150faaa30548f4e76a84e8a1dae3d->leave($__internal_fee850be31ee9d5f0023c59394955984565150faaa30548f4e76a84e8a1dae3d_prof);

        
        $__internal_283b65e667adaa339925d1e7d0e554a842182ae7238954b1f8698e4cb7585161->leave($__internal_283b65e667adaa339925d1e7d0e554a842182ae7238954b1f8698e4cb7585161_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4087a74e3d3400c1e5d1ee9628c9c6b2e5e0ed00bb7581a02163ed370c75ee4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4087a74e3d3400c1e5d1ee9628c9c6b2e5e0ed00bb7581a02163ed370c75ee4b->enter($__internal_4087a74e3d3400c1e5d1ee9628c9c6b2e5e0ed00bb7581a02163ed370c75ee4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e4c8eeded2a8b25f6df2a9fc5a31c8ab64c664e145e84b807f82adae866c9bad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4c8eeded2a8b25f6df2a9fc5a31c8ab64c664e145e84b807f82adae866c9bad->enter($__internal_e4c8eeded2a8b25f6df2a9fc5a31c8ab64c664e145e84b807f82adae866c9bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e4c8eeded2a8b25f6df2a9fc5a31c8ab64c664e145e84b807f82adae866c9bad->leave($__internal_e4c8eeded2a8b25f6df2a9fc5a31c8ab64c664e145e84b807f82adae866c9bad_prof);

        
        $__internal_4087a74e3d3400c1e5d1ee9628c9c6b2e5e0ed00bb7581a02163ed370c75ee4b->leave($__internal_4087a74e3d3400c1e5d1ee9628c9c6b2e5e0ed00bb7581a02163ed370c75ee4b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_25139f77b213a47d42fbfeb3f1d31e8c0ec887146597511284751a242d7203e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25139f77b213a47d42fbfeb3f1d31e8c0ec887146597511284751a242d7203e4->enter($__internal_25139f77b213a47d42fbfeb3f1d31e8c0ec887146597511284751a242d7203e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_897b7a4d658775e986327ded71e72d759ed00e47c6d69921e2a0fb931fb2b017 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_897b7a4d658775e986327ded71e72d759ed00e47c6d69921e2a0fb931fb2b017->enter($__internal_897b7a4d658775e986327ded71e72d759ed00e47c6d69921e2a0fb931fb2b017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_897b7a4d658775e986327ded71e72d759ed00e47c6d69921e2a0fb931fb2b017->leave($__internal_897b7a4d658775e986327ded71e72d759ed00e47c6d69921e2a0fb931fb2b017_prof);

        
        $__internal_25139f77b213a47d42fbfeb3f1d31e8c0ec887146597511284751a242d7203e4->leave($__internal_25139f77b213a47d42fbfeb3f1d31e8c0ec887146597511284751a242d7203e4_prof);

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
