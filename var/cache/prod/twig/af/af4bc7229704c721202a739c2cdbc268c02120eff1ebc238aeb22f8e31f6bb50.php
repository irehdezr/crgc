<?php

/* PageBundle:Default:error.html.twig */
class __TwigTemplate_fcff747af9f99eb75f24f4c4290626947a8c7ce62b45e0f6f8078aa7f2d2f430 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "PageBundle:Default:error.html.twig", 1);
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
        $__internal_8914d3087fa30a1559ad42915aefdcc34e8191805c70ea181b88db67b384c691 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8914d3087fa30a1559ad42915aefdcc34e8191805c70ea181b88db67b384c691->enter($__internal_8914d3087fa30a1559ad42915aefdcc34e8191805c70ea181b88db67b384c691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:error.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8914d3087fa30a1559ad42915aefdcc34e8191805c70ea181b88db67b384c691->leave($__internal_8914d3087fa30a1559ad42915aefdcc34e8191805c70ea181b88db67b384c691_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_14f19c0bbd41e9c36f2bdd2a18995cd61646d479ab20d52a28a4e4912a25544e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14f19c0bbd41e9c36f2bdd2a18995cd61646d479ab20d52a28a4e4912a25544e->enter($__internal_14f19c0bbd41e9c36f2bdd2a18995cd61646d479ab20d52a28a4e4912a25544e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Error";
        
        $__internal_14f19c0bbd41e9c36f2bdd2a18995cd61646d479ab20d52a28a4e4912a25544e->leave($__internal_14f19c0bbd41e9c36f2bdd2a18995cd61646d479ab20d52a28a4e4912a25544e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_b2441f9c12c613b5232a589851aec6901eb6af170bdcf1945ac1d3bf8ceda1b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2441f9c12c613b5232a589851aec6901eb6af170bdcf1945ac1d3bf8ceda1b2->enter($__internal_b2441f9c12c613b5232a589851aec6901eb6af170bdcf1945ac1d3bf8ceda1b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<main>
\t<center>
\t    <h2 class=\"center-block\">
\t        <br/>Oooops...<br/>
\t        This page doesn't exist please try another page or go <a href=\" ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_homepage", array("page" => "home"));
        echo "\">Home</a>
\t    </h2>
    </center>
</main>
";
        
        $__internal_b2441f9c12c613b5232a589851aec6901eb6af170bdcf1945ac1d3bf8ceda1b2->leave($__internal_b2441f9c12c613b5232a589851aec6901eb6af170bdcf1945ac1d3bf8ceda1b2_prof);

    }

    public function getTemplateName()
    {
        return "PageBundle:Default:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 9,  53 => 5,  47 => 4,  35 => 3,  11 => 1,);
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

{% block title%}Error{% endblock %}
{% block body %}
<main>
\t<center>
\t    <h2 class=\"center-block\">
\t        <br/>Oooops...<br/>
\t        This page doesn't exist please try another page or go <a href=\" {{ path('page_homepage', {'page': 'home' }) }}\">Home</a>
\t    </h2>
    </center>
</main>
{% endblock %}", "PageBundle:Default:error.html.twig", "C:\\xampp\\htdocs\\crgc\\var\\cache\\prod/../../../src/PageBundle/Resources/views/Default/error.html.twig");
    }
}
