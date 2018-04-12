<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_3e2222190460271a0253554244565c7c30822031686e3fe3796a86997ba4b709 extends Twig_Template
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
        $__internal_ea4b5eac83c1945edc40d08b3767b50f606d1aef7d81648d7f1b171b120b1cf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea4b5eac83c1945edc40d08b3767b50f606d1aef7d81648d7f1b171b120b1cf4->enter($__internal_ea4b5eac83c1945edc40d08b3767b50f606d1aef7d81648d7f1b171b120b1cf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_e7184ef499de412950e9a6028ec1dc2c3d1e75ab5000f1574c9aaa12efc09ae1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7184ef499de412950e9a6028ec1dc2c3d1e75ab5000f1574c9aaa12efc09ae1->enter($__internal_e7184ef499de412950e9a6028ec1dc2c3d1e75ab5000f1574c9aaa12efc09ae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea4b5eac83c1945edc40d08b3767b50f606d1aef7d81648d7f1b171b120b1cf4->leave($__internal_ea4b5eac83c1945edc40d08b3767b50f606d1aef7d81648d7f1b171b120b1cf4_prof);

        
        $__internal_e7184ef499de412950e9a6028ec1dc2c3d1e75ab5000f1574c9aaa12efc09ae1->leave($__internal_e7184ef499de412950e9a6028ec1dc2c3d1e75ab5000f1574c9aaa12efc09ae1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_236506d0e23becf24bbe96f7e1e88b27333a8a70dba1d6c0bc0b63911f881451 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_236506d0e23becf24bbe96f7e1e88b27333a8a70dba1d6c0bc0b63911f881451->enter($__internal_236506d0e23becf24bbe96f7e1e88b27333a8a70dba1d6c0bc0b63911f881451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ea07cc9805ec35d74f20d7664b8e8753ccdcc61a839dc821d5dac8b619397e32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea07cc9805ec35d74f20d7664b8e8753ccdcc61a839dc821d5dac8b619397e32->enter($__internal_ea07cc9805ec35d74f20d7664b8e8753ccdcc61a839dc821d5dac8b619397e32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ea07cc9805ec35d74f20d7664b8e8753ccdcc61a839dc821d5dac8b619397e32->leave($__internal_ea07cc9805ec35d74f20d7664b8e8753ccdcc61a839dc821d5dac8b619397e32_prof);

        
        $__internal_236506d0e23becf24bbe96f7e1e88b27333a8a70dba1d6c0bc0b63911f881451->leave($__internal_236506d0e23becf24bbe96f7e1e88b27333a8a70dba1d6c0bc0b63911f881451_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e7355036d1eff393bb7a366bec75b444ef6c65f09e071564df2e9d0ad72e9815 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7355036d1eff393bb7a366bec75b444ef6c65f09e071564df2e9d0ad72e9815->enter($__internal_e7355036d1eff393bb7a366bec75b444ef6c65f09e071564df2e9d0ad72e9815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_71067271a50c49d8e44e475a6f420e8c50dade36aa7c7a82681448e3b69ce5c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71067271a50c49d8e44e475a6f420e8c50dade36aa7c7a82681448e3b69ce5c6->enter($__internal_71067271a50c49d8e44e475a6f420e8c50dade36aa7c7a82681448e3b69ce5c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_71067271a50c49d8e44e475a6f420e8c50dade36aa7c7a82681448e3b69ce5c6->leave($__internal_71067271a50c49d8e44e475a6f420e8c50dade36aa7c7a82681448e3b69ce5c6_prof);

        
        $__internal_e7355036d1eff393bb7a366bec75b444ef6c65f09e071564df2e9d0ad72e9815->leave($__internal_e7355036d1eff393bb7a366bec75b444ef6c65f09e071564df2e9d0ad72e9815_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_be5e79296400e9af6bad4d8bd6ccbef6f80560e5efe38a222b66297a446d69c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be5e79296400e9af6bad4d8bd6ccbef6f80560e5efe38a222b66297a446d69c5->enter($__internal_be5e79296400e9af6bad4d8bd6ccbef6f80560e5efe38a222b66297a446d69c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_26140cde8e980653b7913b2e7ab8d7993975dc9b5659b5723ede222f427c804d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26140cde8e980653b7913b2e7ab8d7993975dc9b5659b5723ede222f427c804d->enter($__internal_26140cde8e980653b7913b2e7ab8d7993975dc9b5659b5723ede222f427c804d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_26140cde8e980653b7913b2e7ab8d7993975dc9b5659b5723ede222f427c804d->leave($__internal_26140cde8e980653b7913b2e7ab8d7993975dc9b5659b5723ede222f427c804d_prof);

        
        $__internal_be5e79296400e9af6bad4d8bd6ccbef6f80560e5efe38a222b66297a446d69c5->leave($__internal_be5e79296400e9af6bad4d8bd6ccbef6f80560e5efe38a222b66297a446d69c5_prof);

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
", "WebProfilerBundle:Collector:router.html.twig", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
