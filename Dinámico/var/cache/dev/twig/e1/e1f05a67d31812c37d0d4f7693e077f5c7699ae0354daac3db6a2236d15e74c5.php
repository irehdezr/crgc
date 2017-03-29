<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_a41bb16434f65465d02a1623c8466db1bc2c16386746c8f298bd41f50cca3571 extends Twig_Template
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
        $__internal_5b46986eff8c4b96971318af9b15dfdd4d2f6a0e5c45bf572602f0950fb146c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b46986eff8c4b96971318af9b15dfdd4d2f6a0e5c45bf572602f0950fb146c3->enter($__internal_5b46986eff8c4b96971318af9b15dfdd4d2f6a0e5c45bf572602f0950fb146c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_4772229db928a60c07b45d74a435985cacf1500a293fa96ede9d546c7c9baf6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4772229db928a60c07b45d74a435985cacf1500a293fa96ede9d546c7c9baf6a->enter($__internal_4772229db928a60c07b45d74a435985cacf1500a293fa96ede9d546c7c9baf6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b46986eff8c4b96971318af9b15dfdd4d2f6a0e5c45bf572602f0950fb146c3->leave($__internal_5b46986eff8c4b96971318af9b15dfdd4d2f6a0e5c45bf572602f0950fb146c3_prof);

        
        $__internal_4772229db928a60c07b45d74a435985cacf1500a293fa96ede9d546c7c9baf6a->leave($__internal_4772229db928a60c07b45d74a435985cacf1500a293fa96ede9d546c7c9baf6a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5a31acc7e410deefee777c2a84b992b06799bd9aea3996ee2504de62f8f1a007 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a31acc7e410deefee777c2a84b992b06799bd9aea3996ee2504de62f8f1a007->enter($__internal_5a31acc7e410deefee777c2a84b992b06799bd9aea3996ee2504de62f8f1a007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_183c1452900dac4f98dc992c8c4364cef88f06d4233315806d467e6d5af1293e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_183c1452900dac4f98dc992c8c4364cef88f06d4233315806d467e6d5af1293e->enter($__internal_183c1452900dac4f98dc992c8c4364cef88f06d4233315806d467e6d5af1293e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_183c1452900dac4f98dc992c8c4364cef88f06d4233315806d467e6d5af1293e->leave($__internal_183c1452900dac4f98dc992c8c4364cef88f06d4233315806d467e6d5af1293e_prof);

        
        $__internal_5a31acc7e410deefee777c2a84b992b06799bd9aea3996ee2504de62f8f1a007->leave($__internal_5a31acc7e410deefee777c2a84b992b06799bd9aea3996ee2504de62f8f1a007_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d9e98a5a094809305214a9cc9b9e6bbe82052cc1afd9ef57c11495158fd9fad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d9e98a5a094809305214a9cc9b9e6bbe82052cc1afd9ef57c11495158fd9fad->enter($__internal_3d9e98a5a094809305214a9cc9b9e6bbe82052cc1afd9ef57c11495158fd9fad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_649b212c7331441be70390979d15498588bd1b4a84221a7eb0fe45a7b0853759 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_649b212c7331441be70390979d15498588bd1b4a84221a7eb0fe45a7b0853759->enter($__internal_649b212c7331441be70390979d15498588bd1b4a84221a7eb0fe45a7b0853759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_649b212c7331441be70390979d15498588bd1b4a84221a7eb0fe45a7b0853759->leave($__internal_649b212c7331441be70390979d15498588bd1b4a84221a7eb0fe45a7b0853759_prof);

        
        $__internal_3d9e98a5a094809305214a9cc9b9e6bbe82052cc1afd9ef57c11495158fd9fad->leave($__internal_3d9e98a5a094809305214a9cc9b9e6bbe82052cc1afd9ef57c11495158fd9fad_prof);

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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
