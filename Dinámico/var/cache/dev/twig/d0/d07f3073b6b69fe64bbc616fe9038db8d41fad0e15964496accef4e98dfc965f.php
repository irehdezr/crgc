<?php

/* PageBundle:Default:onDevelopment.html.twig */
class __TwigTemplate_0bb78c08f83365a2faf3eab839939310da91dc44b5aba779af8edb84e0b773be extends Twig_Template
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
        $__internal_ab49c920f18bc917dc78f7a8ef0698bd9e470d9b7db724e4526625d242c3a209 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab49c920f18bc917dc78f7a8ef0698bd9e470d9b7db724e4526625d242c3a209->enter($__internal_ab49c920f18bc917dc78f7a8ef0698bd9e470d9b7db724e4526625d242c3a209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:onDevelopment.html.twig"));

        $__internal_a3a3399a170e63dd930014d8c591b2a4319cb240542cea5361232098d85f897a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3a3399a170e63dd930014d8c591b2a4319cb240542cea5361232098d85f897a->enter($__internal_a3a3399a170e63dd930014d8c591b2a4319cb240542cea5361232098d85f897a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:onDevelopment.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab49c920f18bc917dc78f7a8ef0698bd9e470d9b7db724e4526625d242c3a209->leave($__internal_ab49c920f18bc917dc78f7a8ef0698bd9e470d9b7db724e4526625d242c3a209_prof);

        
        $__internal_a3a3399a170e63dd930014d8c591b2a4319cb240542cea5361232098d85f897a->leave($__internal_a3a3399a170e63dd930014d8c591b2a4319cb240542cea5361232098d85f897a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_09c12c2549307e6c4c63ca0fc9ac1d3955a696ad45a47e5580b967b27b28c708 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09c12c2549307e6c4c63ca0fc9ac1d3955a696ad45a47e5580b967b27b28c708->enter($__internal_09c12c2549307e6c4c63ca0fc9ac1d3955a696ad45a47e5580b967b27b28c708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a0277ef8391913474401b84adadfc04d22e6bf65e4ee3ac478319e5715e47c0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0277ef8391913474401b84adadfc04d22e6bf65e4ee3ac478319e5715e47c0c->enter($__internal_a0277ef8391913474401b84adadfc04d22e6bf65e4ee3ac478319e5715e47c0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CR Gourmet Coffee";
        
        $__internal_a0277ef8391913474401b84adadfc04d22e6bf65e4ee3ac478319e5715e47c0c->leave($__internal_a0277ef8391913474401b84adadfc04d22e6bf65e4ee3ac478319e5715e47c0c_prof);

        
        $__internal_09c12c2549307e6c4c63ca0fc9ac1d3955a696ad45a47e5580b967b27b28c708->leave($__internal_09c12c2549307e6c4c63ca0fc9ac1d3955a696ad45a47e5580b967b27b28c708_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_912cac08c6b9883529433bfc35a9b30c30632ce294a3b484a439d817b5477094 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_912cac08c6b9883529433bfc35a9b30c30632ce294a3b484a439d817b5477094->enter($__internal_912cac08c6b9883529433bfc35a9b30c30632ce294a3b484a439d817b5477094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_72b4ba6bddd4a9d9b5e0187abf651f68f0b1e8affc08af5a968b1cdb27ece28c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72b4ba6bddd4a9d9b5e0187abf651f68f0b1e8affc08af5a968b1cdb27ece28c->enter($__internal_72b4ba6bddd4a9d9b5e0187abf651f68f0b1e8affc08af5a968b1cdb27ece28c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<main>
<div class='container'>
\t<center>
\t    <h2 class=\"center-block jumbotron \">
\t        <br/>Oooops...<br/>
\t        This page is under development....
\t    </h2>
    </center>
</div>
</main>
";
        
        $__internal_72b4ba6bddd4a9d9b5e0187abf651f68f0b1e8affc08af5a968b1cdb27ece28c->leave($__internal_72b4ba6bddd4a9d9b5e0187abf651f68f0b1e8affc08af5a968b1cdb27ece28c_prof);

        
        $__internal_912cac08c6b9883529433bfc35a9b30c30632ce294a3b484a439d817b5477094->leave($__internal_912cac08c6b9883529433bfc35a9b30c30632ce294a3b484a439d817b5477094_prof);

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
        return array (  68 => 5,  59 => 4,  41 => 3,  11 => 1,);
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

{% block title%}CR Gourmet Coffee{% endblock %}
{% block body %}
<main>
<div class='container'>
\t<center>
\t    <h2 class=\"center-block jumbotron \">
\t        <br/>Oooops...<br/>
\t        This page is under development....
\t    </h2>
    </center>
</div>
</main>
{% endblock %}", "PageBundle:Default:onDevelopment.html.twig", "/home/ubuntu/workspace/src/PageBundle/Resources/views/Default/onDevelopment.html.twig");
    }
}
