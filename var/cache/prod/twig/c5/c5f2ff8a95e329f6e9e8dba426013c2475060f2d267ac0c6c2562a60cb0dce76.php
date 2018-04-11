<?php

/* PageBundle:Default:onDevelopment.html.twig */
class __TwigTemplate_9ffa8df1bdfcc333a11846008f7a289f760fd57fb34d5a60cbc6e28fcf955085 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "PageBundle:Default:onDevelopment.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2daa2f464567186b4a6d430d170f5515d75a00c6fc40efe2647914e377cdf21e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2daa2f464567186b4a6d430d170f5515d75a00c6fc40efe2647914e377cdf21e->enter($__internal_2daa2f464567186b4a6d430d170f5515d75a00c6fc40efe2647914e377cdf21e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:onDevelopment.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2daa2f464567186b4a6d430d170f5515d75a00c6fc40efe2647914e377cdf21e->leave($__internal_2daa2f464567186b4a6d430d170f5515d75a00c6fc40efe2647914e377cdf21e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e96b573f845453c76ae79bb9fb8ebceee75b9e5f36489ad4f9951314c3a96373 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e96b573f845453c76ae79bb9fb8ebceee75b9e5f36489ad4f9951314c3a96373->enter($__internal_e96b573f845453c76ae79bb9fb8ebceee75b9e5f36489ad4f9951314c3a96373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "On Development";
        
        $__internal_e96b573f845453c76ae79bb9fb8ebceee75b9e5f36489ad4f9951314c3a96373->leave($__internal_e96b573f845453c76ae79bb9fb8ebceee75b9e5f36489ad4f9951314c3a96373_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a896210d59a8e71260205f5801b113a566c8d8db8044274d09c05c56d2324ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a896210d59a8e71260205f5801b113a566c8d8db8044274d09c05c56d2324ac->enter($__internal_7a896210d59a8e71260205f5801b113a566c8d8db8044274d09c05c56d2324ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<main>
\t<center>
\t    <h2>
\t        <br/>Oooops...<br/>
\t        This page is under development....
\t    </h2>
    </center>
</main>
";
        
        $__internal_7a896210d59a8e71260205f5801b113a566c8d8db8044274d09c05c56d2324ac->leave($__internal_7a896210d59a8e71260205f5801b113a566c8d8db8044274d09c05c56d2324ac_prof);

    }

    public function getTemplateName()
    {
        return "PageBundle:Default:onDevelopment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 5,  47 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}

{% block title%}On Development{% endblock %}
{% block body %}
<main>
\t<center>
\t    <h2>
\t        <br/>Oooops...<br/>
\t        This page is under development....
\t    </h2>
    </center>
</main>
{% endblock %}", "PageBundle:Default:onDevelopment.html.twig", "C:\\xampp\\htdocs\\crgc\\var\\cache\\prod/../../../src/PageBundle/Resources/views/Default/onDevelopment.html.twig");
    }
}
