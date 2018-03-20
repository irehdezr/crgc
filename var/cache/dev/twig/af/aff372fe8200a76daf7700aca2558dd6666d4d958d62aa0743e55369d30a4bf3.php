<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_91013576074c7ba80d746a7fb92f84b0496bd06780a313c8dd67d240600d4a98 extends Twig_Template
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
        $__internal_454b4b002abe5eef84e73aab6bb0cd5b9fb1b459e0f55209541a8d92704d2ded = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_454b4b002abe5eef84e73aab6bb0cd5b9fb1b459e0f55209541a8d92704d2ded->enter($__internal_454b4b002abe5eef84e73aab6bb0cd5b9fb1b459e0f55209541a8d92704d2ded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_0d7c388fe7a488dd24fc8fa29581c5f4a751fc74643f6576deef53c0c83a174b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d7c388fe7a488dd24fc8fa29581c5f4a751fc74643f6576deef53c0c83a174b->enter($__internal_0d7c388fe7a488dd24fc8fa29581c5f4a751fc74643f6576deef53c0c83a174b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_454b4b002abe5eef84e73aab6bb0cd5b9fb1b459e0f55209541a8d92704d2ded->leave($__internal_454b4b002abe5eef84e73aab6bb0cd5b9fb1b459e0f55209541a8d92704d2ded_prof);

        
        $__internal_0d7c388fe7a488dd24fc8fa29581c5f4a751fc74643f6576deef53c0c83a174b->leave($__internal_0d7c388fe7a488dd24fc8fa29581c5f4a751fc74643f6576deef53c0c83a174b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ea589b58ee94b11148ea5fe58f958ba276722e47c15c13d22ebc1d5c99cfa8da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea589b58ee94b11148ea5fe58f958ba276722e47c15c13d22ebc1d5c99cfa8da->enter($__internal_ea589b58ee94b11148ea5fe58f958ba276722e47c15c13d22ebc1d5c99cfa8da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6a6b9045e28fdb183130d40d3dde49c9353bd6255bb667d6994665b55817d047 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a6b9045e28fdb183130d40d3dde49c9353bd6255bb667d6994665b55817d047->enter($__internal_6a6b9045e28fdb183130d40d3dde49c9353bd6255bb667d6994665b55817d047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6a6b9045e28fdb183130d40d3dde49c9353bd6255bb667d6994665b55817d047->leave($__internal_6a6b9045e28fdb183130d40d3dde49c9353bd6255bb667d6994665b55817d047_prof);

        
        $__internal_ea589b58ee94b11148ea5fe58f958ba276722e47c15c13d22ebc1d5c99cfa8da->leave($__internal_ea589b58ee94b11148ea5fe58f958ba276722e47c15c13d22ebc1d5c99cfa8da_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c7a317795d22b0dc1064021c62d4cc6a51b409e528e7273b03119e740a0332b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7a317795d22b0dc1064021c62d4cc6a51b409e528e7273b03119e740a0332b4->enter($__internal_c7a317795d22b0dc1064021c62d4cc6a51b409e528e7273b03119e740a0332b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c9d91e8eb2a0f7173f9f784e3d6168afb2d7aedc72a5a7b0617e7a9bab8d29a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9d91e8eb2a0f7173f9f784e3d6168afb2d7aedc72a5a7b0617e7a9bab8d29a4->enter($__internal_c9d91e8eb2a0f7173f9f784e3d6168afb2d7aedc72a5a7b0617e7a9bab8d29a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c9d91e8eb2a0f7173f9f784e3d6168afb2d7aedc72a5a7b0617e7a9bab8d29a4->leave($__internal_c9d91e8eb2a0f7173f9f784e3d6168afb2d7aedc72a5a7b0617e7a9bab8d29a4_prof);

        
        $__internal_c7a317795d22b0dc1064021c62d4cc6a51b409e528e7273b03119e740a0332b4->leave($__internal_c7a317795d22b0dc1064021c62d4cc6a51b409e528e7273b03119e740a0332b4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9575cae6cc5cabc39e5b5e4d65efe4e63755b1c06dab48efa1a5db6cf556a701 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9575cae6cc5cabc39e5b5e4d65efe4e63755b1c06dab48efa1a5db6cf556a701->enter($__internal_9575cae6cc5cabc39e5b5e4d65efe4e63755b1c06dab48efa1a5db6cf556a701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_89681796d9f168a59abc282a752bd7a479a6afb16dc4f53ecfcec218c21a6ab7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89681796d9f168a59abc282a752bd7a479a6afb16dc4f53ecfcec218c21a6ab7->enter($__internal_89681796d9f168a59abc282a752bd7a479a6afb16dc4f53ecfcec218c21a6ab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_89681796d9f168a59abc282a752bd7a479a6afb16dc4f53ecfcec218c21a6ab7->leave($__internal_89681796d9f168a59abc282a752bd7a479a6afb16dc4f53ecfcec218c21a6ab7_prof);

        
        $__internal_9575cae6cc5cabc39e5b5e4d65efe4e63755b1c06dab48efa1a5db6cf556a701->leave($__internal_9575cae6cc5cabc39e5b5e4d65efe4e63755b1c06dab48efa1a5db6cf556a701_prof);

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
", "@WebProfiler/Collector/router.html.twig", "D:\\Programacion\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
