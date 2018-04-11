<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_4f7456d0c839f07644480a5954981ca5441f37c6ffb5d0491a77b7df4d3462ac extends Twig_Template
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
        $__internal_9e6cb076d58e167ce62ff0c9818c588c760f1592e1ace74a7c2d0ed19a4b56b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e6cb076d58e167ce62ff0c9818c588c760f1592e1ace74a7c2d0ed19a4b56b0->enter($__internal_9e6cb076d58e167ce62ff0c9818c588c760f1592e1ace74a7c2d0ed19a4b56b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_05bdc5fed6c4bccb1e72b2cf4493eb0fa6bd183823ea9dcfc74c296c2e5b3d16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05bdc5fed6c4bccb1e72b2cf4493eb0fa6bd183823ea9dcfc74c296c2e5b3d16->enter($__internal_05bdc5fed6c4bccb1e72b2cf4493eb0fa6bd183823ea9dcfc74c296c2e5b3d16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e6cb076d58e167ce62ff0c9818c588c760f1592e1ace74a7c2d0ed19a4b56b0->leave($__internal_9e6cb076d58e167ce62ff0c9818c588c760f1592e1ace74a7c2d0ed19a4b56b0_prof);

        
        $__internal_05bdc5fed6c4bccb1e72b2cf4493eb0fa6bd183823ea9dcfc74c296c2e5b3d16->leave($__internal_05bdc5fed6c4bccb1e72b2cf4493eb0fa6bd183823ea9dcfc74c296c2e5b3d16_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a91688712a4d80216e9bbb3ba1555ab1e9d3dbf6824ed375d1633cdb3de81ad8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a91688712a4d80216e9bbb3ba1555ab1e9d3dbf6824ed375d1633cdb3de81ad8->enter($__internal_a91688712a4d80216e9bbb3ba1555ab1e9d3dbf6824ed375d1633cdb3de81ad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6061991a83a3787717beb5c68613ff6893edf88482be6cb62cd958197e56da89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6061991a83a3787717beb5c68613ff6893edf88482be6cb62cd958197e56da89->enter($__internal_6061991a83a3787717beb5c68613ff6893edf88482be6cb62cd958197e56da89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_6061991a83a3787717beb5c68613ff6893edf88482be6cb62cd958197e56da89->leave($__internal_6061991a83a3787717beb5c68613ff6893edf88482be6cb62cd958197e56da89_prof);

        
        $__internal_a91688712a4d80216e9bbb3ba1555ab1e9d3dbf6824ed375d1633cdb3de81ad8->leave($__internal_a91688712a4d80216e9bbb3ba1555ab1e9d3dbf6824ed375d1633cdb3de81ad8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_aa52d2785be2efb30a840ffe7283cd93b607885d95364e75186c99b613d58c8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa52d2785be2efb30a840ffe7283cd93b607885d95364e75186c99b613d58c8e->enter($__internal_aa52d2785be2efb30a840ffe7283cd93b607885d95364e75186c99b613d58c8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4559bb54e417b79434fa9c4f53b7d4572552a41816a28483d7c31ff726aa000d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4559bb54e417b79434fa9c4f53b7d4572552a41816a28483d7c31ff726aa000d->enter($__internal_4559bb54e417b79434fa9c4f53b7d4572552a41816a28483d7c31ff726aa000d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4559bb54e417b79434fa9c4f53b7d4572552a41816a28483d7c31ff726aa000d->leave($__internal_4559bb54e417b79434fa9c4f53b7d4572552a41816a28483d7c31ff726aa000d_prof);

        
        $__internal_aa52d2785be2efb30a840ffe7283cd93b607885d95364e75186c99b613d58c8e->leave($__internal_aa52d2785be2efb30a840ffe7283cd93b607885d95364e75186c99b613d58c8e_prof);

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
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
