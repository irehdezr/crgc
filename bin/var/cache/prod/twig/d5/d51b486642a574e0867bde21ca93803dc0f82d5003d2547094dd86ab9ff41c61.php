<?php

/* PageBundle:Default:onDevelopment.html.twig */
class __TwigTemplate_bfcbc58aadc6d0e24c54140f375d268108dec50ebb148a3c9a5eacca4a15d6dc extends Twig_Template
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
        $__internal_d382d6344d541cc3aa11fcdadfe5dce542a486033d1c2099254cd8159daa4c2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d382d6344d541cc3aa11fcdadfe5dce542a486033d1c2099254cd8159daa4c2d->enter($__internal_d382d6344d541cc3aa11fcdadfe5dce542a486033d1c2099254cd8159daa4c2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:onDevelopment.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d382d6344d541cc3aa11fcdadfe5dce542a486033d1c2099254cd8159daa4c2d->leave($__internal_d382d6344d541cc3aa11fcdadfe5dce542a486033d1c2099254cd8159daa4c2d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9d9c8fc77020e6d0a56f82a7364f93817b25cbcdc61860a1daab3c146ca39187 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d9c8fc77020e6d0a56f82a7364f93817b25cbcdc61860a1daab3c146ca39187->enter($__internal_9d9c8fc77020e6d0a56f82a7364f93817b25cbcdc61860a1daab3c146ca39187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "On Development";
        
        $__internal_9d9c8fc77020e6d0a56f82a7364f93817b25cbcdc61860a1daab3c146ca39187->leave($__internal_9d9c8fc77020e6d0a56f82a7364f93817b25cbcdc61860a1daab3c146ca39187_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_210363e12c6fec03d5f8267115b5e519fa5d9fa21663ae033cb2da30894e1e18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_210363e12c6fec03d5f8267115b5e519fa5d9fa21663ae033cb2da30894e1e18->enter($__internal_210363e12c6fec03d5f8267115b5e519fa5d9fa21663ae033cb2da30894e1e18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<main>
\t<center>
\t    <h2 class=\"center-block\">
\t        <br/>Oooops...<br/>
\t        This page is under development....
\t    </h2>
    </center>
</main>
";
        
        $__internal_210363e12c6fec03d5f8267115b5e519fa5d9fa21663ae033cb2da30894e1e18->leave($__internal_210363e12c6fec03d5f8267115b5e519fa5d9fa21663ae033cb2da30894e1e18_prof);

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
\t    <h2 class=\"center-block\">
\t        <br/>Oooops...<br/>
\t        This page is under development....
\t    </h2>
    </center>
</main>
{% endblock %}", "PageBundle:Default:onDevelopment.html.twig", "C:\\xampp\\htdocs\\src\\PageBundle/Resources/views/Default/onDevelopment.html.twig");
    }
}
