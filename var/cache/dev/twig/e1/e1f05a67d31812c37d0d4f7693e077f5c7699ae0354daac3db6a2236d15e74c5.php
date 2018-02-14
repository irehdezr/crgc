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
        $__internal_5c663859983aee879dac5916d909118939a2ee57f79dfa53e7f3591f6d025079 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c663859983aee879dac5916d909118939a2ee57f79dfa53e7f3591f6d025079->enter($__internal_5c663859983aee879dac5916d909118939a2ee57f79dfa53e7f3591f6d025079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_48d680e6cdde5933adaf5bfdb92d15d4e500cd7aaa116072817665eef0da9b39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48d680e6cdde5933adaf5bfdb92d15d4e500cd7aaa116072817665eef0da9b39->enter($__internal_48d680e6cdde5933adaf5bfdb92d15d4e500cd7aaa116072817665eef0da9b39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c663859983aee879dac5916d909118939a2ee57f79dfa53e7f3591f6d025079->leave($__internal_5c663859983aee879dac5916d909118939a2ee57f79dfa53e7f3591f6d025079_prof);

        
        $__internal_48d680e6cdde5933adaf5bfdb92d15d4e500cd7aaa116072817665eef0da9b39->leave($__internal_48d680e6cdde5933adaf5bfdb92d15d4e500cd7aaa116072817665eef0da9b39_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6b82b2dd670839562f176ad5612a0a1fe586f37d86b3f610756f1373010e7865 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b82b2dd670839562f176ad5612a0a1fe586f37d86b3f610756f1373010e7865->enter($__internal_6b82b2dd670839562f176ad5612a0a1fe586f37d86b3f610756f1373010e7865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9f956cf8df2ea0b8f23d216df1349d047815adad841155f916a5e3fbdc68537d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f956cf8df2ea0b8f23d216df1349d047815adad841155f916a5e3fbdc68537d->enter($__internal_9f956cf8df2ea0b8f23d216df1349d047815adad841155f916a5e3fbdc68537d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_9f956cf8df2ea0b8f23d216df1349d047815adad841155f916a5e3fbdc68537d->leave($__internal_9f956cf8df2ea0b8f23d216df1349d047815adad841155f916a5e3fbdc68537d_prof);

        
        $__internal_6b82b2dd670839562f176ad5612a0a1fe586f37d86b3f610756f1373010e7865->leave($__internal_6b82b2dd670839562f176ad5612a0a1fe586f37d86b3f610756f1373010e7865_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_22972083c8c782df81b80d8a2226bc6394e26596d16b59e1dcf44cada1458aee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22972083c8c782df81b80d8a2226bc6394e26596d16b59e1dcf44cada1458aee->enter($__internal_22972083c8c782df81b80d8a2226bc6394e26596d16b59e1dcf44cada1458aee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_31c460b42c404a69cbe9698b5bf944d6c3f0fbb47a4e0d251b150556aa2c608b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31c460b42c404a69cbe9698b5bf944d6c3f0fbb47a4e0d251b150556aa2c608b->enter($__internal_31c460b42c404a69cbe9698b5bf944d6c3f0fbb47a4e0d251b150556aa2c608b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_31c460b42c404a69cbe9698b5bf944d6c3f0fbb47a4e0d251b150556aa2c608b->leave($__internal_31c460b42c404a69cbe9698b5bf944d6c3f0fbb47a4e0d251b150556aa2c608b_prof);

        
        $__internal_22972083c8c782df81b80d8a2226bc6394e26596d16b59e1dcf44cada1458aee->leave($__internal_22972083c8c782df81b80d8a2226bc6394e26596d16b59e1dcf44cada1458aee_prof);

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
