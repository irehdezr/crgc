<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_e1f0502a4a58c42374cf6dc5ab4c057e238e6a0ab357ce8e170e821fa7313066 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_87947886a8c5876f251676122e6ad951f9e0450a231252fb8009005f4267e8d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87947886a8c5876f251676122e6ad951f9e0450a231252fb8009005f4267e8d7->enter($__internal_87947886a8c5876f251676122e6ad951f9e0450a231252fb8009005f4267e8d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_d58aaf6c338007c3e958bbc96bc1a15b3f1ba31a3b94abcc3bf8d5fb4e438488 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d58aaf6c338007c3e958bbc96bc1a15b3f1ba31a3b94abcc3bf8d5fb4e438488->enter($__internal_d58aaf6c338007c3e958bbc96bc1a15b3f1ba31a3b94abcc3bf8d5fb4e438488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87947886a8c5876f251676122e6ad951f9e0450a231252fb8009005f4267e8d7->leave($__internal_87947886a8c5876f251676122e6ad951f9e0450a231252fb8009005f4267e8d7_prof);

        
        $__internal_d58aaf6c338007c3e958bbc96bc1a15b3f1ba31a3b94abcc3bf8d5fb4e438488->leave($__internal_d58aaf6c338007c3e958bbc96bc1a15b3f1ba31a3b94abcc3bf8d5fb4e438488_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d456dc37547978a19cf065bcbe2e1d11c53e748aa4a4a1cbe9d460f940a96881 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d456dc37547978a19cf065bcbe2e1d11c53e748aa4a4a1cbe9d460f940a96881->enter($__internal_d456dc37547978a19cf065bcbe2e1d11c53e748aa4a4a1cbe9d460f940a96881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1e88a07f740846bca270de4389f102e032df128e7017278f6a699f99d0bfa85b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e88a07f740846bca270de4389f102e032df128e7017278f6a699f99d0bfa85b->enter($__internal_1e88a07f740846bca270de4389f102e032df128e7017278f6a699f99d0bfa85b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_1e88a07f740846bca270de4389f102e032df128e7017278f6a699f99d0bfa85b->leave($__internal_1e88a07f740846bca270de4389f102e032df128e7017278f6a699f99d0bfa85b_prof);

        
        $__internal_d456dc37547978a19cf065bcbe2e1d11c53e748aa4a4a1cbe9d460f940a96881->leave($__internal_d456dc37547978a19cf065bcbe2e1d11c53e748aa4a4a1cbe9d460f940a96881_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ecb386d7f6ac0b8948c065659eebf887c38720671167f4bc9e8bf78e84111732 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecb386d7f6ac0b8948c065659eebf887c38720671167f4bc9e8bf78e84111732->enter($__internal_ecb386d7f6ac0b8948c065659eebf887c38720671167f4bc9e8bf78e84111732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6239ff8e1bd69ced777ad33a875984c9a97fc16ff68d9b5ed0f8e08f379298dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6239ff8e1bd69ced777ad33a875984c9a97fc16ff68d9b5ed0f8e08f379298dd->enter($__internal_6239ff8e1bd69ced777ad33a875984c9a97fc16ff68d9b5ed0f8e08f379298dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6239ff8e1bd69ced777ad33a875984c9a97fc16ff68d9b5ed0f8e08f379298dd->leave($__internal_6239ff8e1bd69ced777ad33a875984c9a97fc16ff68d9b5ed0f8e08f379298dd_prof);

        
        $__internal_ecb386d7f6ac0b8948c065659eebf887c38720671167f4bc9e8bf78e84111732->leave($__internal_ecb386d7f6ac0b8948c065659eebf887c38720671167f4bc9e8bf78e84111732_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
