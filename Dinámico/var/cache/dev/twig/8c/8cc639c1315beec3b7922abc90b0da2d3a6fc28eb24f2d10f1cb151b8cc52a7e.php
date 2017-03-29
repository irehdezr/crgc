<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_31a41ff7b52c865f040729fbf1797045237098e74c4f69677c8b81ee6a2287a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d5a38dc2d207c881cd3affa66fd5642df3a5f4d1b0fd317bbb466eded0b46d74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5a38dc2d207c881cd3affa66fd5642df3a5f4d1b0fd317bbb466eded0b46d74->enter($__internal_d5a38dc2d207c881cd3affa66fd5642df3a5f4d1b0fd317bbb466eded0b46d74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_90024e4c4c6a3f24ff1caf5d9117435e5c9c3e9bf1b7d61693814694292360c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90024e4c4c6a3f24ff1caf5d9117435e5c9c3e9bf1b7d61693814694292360c0->enter($__internal_90024e4c4c6a3f24ff1caf5d9117435e5c9c3e9bf1b7d61693814694292360c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5a38dc2d207c881cd3affa66fd5642df3a5f4d1b0fd317bbb466eded0b46d74->leave($__internal_d5a38dc2d207c881cd3affa66fd5642df3a5f4d1b0fd317bbb466eded0b46d74_prof);

        
        $__internal_90024e4c4c6a3f24ff1caf5d9117435e5c9c3e9bf1b7d61693814694292360c0->leave($__internal_90024e4c4c6a3f24ff1caf5d9117435e5c9c3e9bf1b7d61693814694292360c0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5eb5147f7212278453a565d1f3329a9aeae89dbf20e9c1e3236eafdc0675ae17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5eb5147f7212278453a565d1f3329a9aeae89dbf20e9c1e3236eafdc0675ae17->enter($__internal_5eb5147f7212278453a565d1f3329a9aeae89dbf20e9c1e3236eafdc0675ae17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9373e3c53de5d429e11528f99a01b71e6a228639bee494cd3a992e7674586e7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9373e3c53de5d429e11528f99a01b71e6a228639bee494cd3a992e7674586e7c->enter($__internal_9373e3c53de5d429e11528f99a01b71e6a228639bee494cd3a992e7674586e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_9373e3c53de5d429e11528f99a01b71e6a228639bee494cd3a992e7674586e7c->leave($__internal_9373e3c53de5d429e11528f99a01b71e6a228639bee494cd3a992e7674586e7c_prof);

        
        $__internal_5eb5147f7212278453a565d1f3329a9aeae89dbf20e9c1e3236eafdc0675ae17->leave($__internal_5eb5147f7212278453a565d1f3329a9aeae89dbf20e9c1e3236eafdc0675ae17_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e12509e8d45a8b56cb3e768e234a22f5889a9a4ecd4bd16a81e178efa3217344 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e12509e8d45a8b56cb3e768e234a22f5889a9a4ecd4bd16a81e178efa3217344->enter($__internal_e12509e8d45a8b56cb3e768e234a22f5889a9a4ecd4bd16a81e178efa3217344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_efd0e9668b70ce0df065c171214a795ea6a979d5e1c6d3d618bcfcdf2fdf6eed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efd0e9668b70ce0df065c171214a795ea6a979d5e1c6d3d618bcfcdf2fdf6eed->enter($__internal_efd0e9668b70ce0df065c171214a795ea6a979d5e1c6d3d618bcfcdf2fdf6eed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_efd0e9668b70ce0df065c171214a795ea6a979d5e1c6d3d618bcfcdf2fdf6eed->leave($__internal_efd0e9668b70ce0df065c171214a795ea6a979d5e1c6d3d618bcfcdf2fdf6eed_prof);

        
        $__internal_e12509e8d45a8b56cb3e768e234a22f5889a9a4ecd4bd16a81e178efa3217344->leave($__internal_e12509e8d45a8b56cb3e768e234a22f5889a9a4ecd4bd16a81e178efa3217344_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
