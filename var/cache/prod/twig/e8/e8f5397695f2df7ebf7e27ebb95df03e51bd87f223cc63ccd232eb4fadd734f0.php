<?php

/* PageBundle:Default:onDevelopment.html.twig */
class __TwigTemplate_cc9c4cdb64827eecdb51f9085c000f36d2a48d5b661d85ebb248bc187e006175 extends Twig_Template
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
        $__internal_ade8c542a517eb61828e8fe5031f249cdfade8cf55c91e9acf5ed4014049abf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ade8c542a517eb61828e8fe5031f249cdfade8cf55c91e9acf5ed4014049abf5->enter($__internal_ade8c542a517eb61828e8fe5031f249cdfade8cf55c91e9acf5ed4014049abf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:onDevelopment.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ade8c542a517eb61828e8fe5031f249cdfade8cf55c91e9acf5ed4014049abf5->leave($__internal_ade8c542a517eb61828e8fe5031f249cdfade8cf55c91e9acf5ed4014049abf5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_680c91e5fa9c9c02aabd5da7fe0c464c50198a1667ec1e02fdcd7aadbd61394d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_680c91e5fa9c9c02aabd5da7fe0c464c50198a1667ec1e02fdcd7aadbd61394d->enter($__internal_680c91e5fa9c9c02aabd5da7fe0c464c50198a1667ec1e02fdcd7aadbd61394d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "On Development";
        
        $__internal_680c91e5fa9c9c02aabd5da7fe0c464c50198a1667ec1e02fdcd7aadbd61394d->leave($__internal_680c91e5fa9c9c02aabd5da7fe0c464c50198a1667ec1e02fdcd7aadbd61394d_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c6661c0ca527f06e415b728425a57e7eb8a495651b7c98cf40804a689f232db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c6661c0ca527f06e415b728425a57e7eb8a495651b7c98cf40804a689f232db->enter($__internal_8c6661c0ca527f06e415b728425a57e7eb8a495651b7c98cf40804a689f232db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8c6661c0ca527f06e415b728425a57e7eb8a495651b7c98cf40804a689f232db->leave($__internal_8c6661c0ca527f06e415b728425a57e7eb8a495651b7c98cf40804a689f232db_prof);

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
{% endblock %}", "PageBundle:Default:onDevelopment.html.twig", "D:\\Programacion\\xampp\\htdocs\\app\\src\\PageBundle/Resources/views/Default/onDevelopment.html.twig");
    }
}
