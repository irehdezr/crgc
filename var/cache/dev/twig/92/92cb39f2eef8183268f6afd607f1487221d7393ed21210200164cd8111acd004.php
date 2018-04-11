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
        $__internal_ad11d120b8cb933c8ef9217b1187fd1481d935c577cdf28c7a5399403cc398e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad11d120b8cb933c8ef9217b1187fd1481d935c577cdf28c7a5399403cc398e8->enter($__internal_ad11d120b8cb933c8ef9217b1187fd1481d935c577cdf28c7a5399403cc398e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_0609757c463a221d552bf3785ae5e5b583277a62b316084135d39765a9c794c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0609757c463a221d552bf3785ae5e5b583277a62b316084135d39765a9c794c7->enter($__internal_0609757c463a221d552bf3785ae5e5b583277a62b316084135d39765a9c794c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad11d120b8cb933c8ef9217b1187fd1481d935c577cdf28c7a5399403cc398e8->leave($__internal_ad11d120b8cb933c8ef9217b1187fd1481d935c577cdf28c7a5399403cc398e8_prof);

        
        $__internal_0609757c463a221d552bf3785ae5e5b583277a62b316084135d39765a9c794c7->leave($__internal_0609757c463a221d552bf3785ae5e5b583277a62b316084135d39765a9c794c7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_578e6c3c415c9deb66bfeaddb3a303bd61bb8eaefcc66f303148a37c64bd33f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_578e6c3c415c9deb66bfeaddb3a303bd61bb8eaefcc66f303148a37c64bd33f9->enter($__internal_578e6c3c415c9deb66bfeaddb3a303bd61bb8eaefcc66f303148a37c64bd33f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d8e5e431c5993f37db9de5385eb6c1d472303384906e8b0882e01d3647cee851 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8e5e431c5993f37db9de5385eb6c1d472303384906e8b0882e01d3647cee851->enter($__internal_d8e5e431c5993f37db9de5385eb6c1d472303384906e8b0882e01d3647cee851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d8e5e431c5993f37db9de5385eb6c1d472303384906e8b0882e01d3647cee851->leave($__internal_d8e5e431c5993f37db9de5385eb6c1d472303384906e8b0882e01d3647cee851_prof);

        
        $__internal_578e6c3c415c9deb66bfeaddb3a303bd61bb8eaefcc66f303148a37c64bd33f9->leave($__internal_578e6c3c415c9deb66bfeaddb3a303bd61bb8eaefcc66f303148a37c64bd33f9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_29a3511e337073b993f26f58755f6fa0a8a8de2010b792372ab27f19cfb0c93b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29a3511e337073b993f26f58755f6fa0a8a8de2010b792372ab27f19cfb0c93b->enter($__internal_29a3511e337073b993f26f58755f6fa0a8a8de2010b792372ab27f19cfb0c93b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3762cd3bf133d7f83e75e78f2fd1f79160ae34be9936211d3f808866ccdab404 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3762cd3bf133d7f83e75e78f2fd1f79160ae34be9936211d3f808866ccdab404->enter($__internal_3762cd3bf133d7f83e75e78f2fd1f79160ae34be9936211d3f808866ccdab404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3762cd3bf133d7f83e75e78f2fd1f79160ae34be9936211d3f808866ccdab404->leave($__internal_3762cd3bf133d7f83e75e78f2fd1f79160ae34be9936211d3f808866ccdab404_prof);

        
        $__internal_29a3511e337073b993f26f58755f6fa0a8a8de2010b792372ab27f19cfb0c93b->leave($__internal_29a3511e337073b993f26f58755f6fa0a8a8de2010b792372ab27f19cfb0c93b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0b25a0df8810ce7e69517197d94c0dae19d7bfca868e00f0698e4a0a49ea1525 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b25a0df8810ce7e69517197d94c0dae19d7bfca868e00f0698e4a0a49ea1525->enter($__internal_0b25a0df8810ce7e69517197d94c0dae19d7bfca868e00f0698e4a0a49ea1525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2e2bc41a9468bf42b58ec39572cb9b79d61be1d18d81604630eb17f06cb1b1e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e2bc41a9468bf42b58ec39572cb9b79d61be1d18d81604630eb17f06cb1b1e6->enter($__internal_2e2bc41a9468bf42b58ec39572cb9b79d61be1d18d81604630eb17f06cb1b1e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2e2bc41a9468bf42b58ec39572cb9b79d61be1d18d81604630eb17f06cb1b1e6->leave($__internal_2e2bc41a9468bf42b58ec39572cb9b79d61be1d18d81604630eb17f06cb1b1e6_prof);

        
        $__internal_0b25a0df8810ce7e69517197d94c0dae19d7bfca868e00f0698e4a0a49ea1525->leave($__internal_0b25a0df8810ce7e69517197d94c0dae19d7bfca868e00f0698e4a0a49ea1525_prof);

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
