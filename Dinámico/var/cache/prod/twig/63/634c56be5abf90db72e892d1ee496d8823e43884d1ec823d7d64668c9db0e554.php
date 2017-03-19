<?php

/* PageBundle:Default:error.html.twig */
class __TwigTemplate_18de07682ed969bb7aec7aef899afadfc6ea38f842739bbf755d62108fdeb93e extends Twig_Template
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
        $__internal_981809d156e993317f24e4379da649a7c0baacb8343328cea4a625b28d2e97f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_981809d156e993317f24e4379da649a7c0baacb8343328cea4a625b28d2e97f5->enter($__internal_981809d156e993317f24e4379da649a7c0baacb8343328cea4a625b28d2e97f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:error.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_981809d156e993317f24e4379da649a7c0baacb8343328cea4a625b28d2e97f5->leave($__internal_981809d156e993317f24e4379da649a7c0baacb8343328cea4a625b28d2e97f5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_035f244fc530a571b9992892fadb22de89d6c07707c916a1f329f68bfe5a849e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_035f244fc530a571b9992892fadb22de89d6c07707c916a1f329f68bfe5a849e->enter($__internal_035f244fc530a571b9992892fadb22de89d6c07707c916a1f329f68bfe5a849e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CR Gourmet Coffee";
        
        $__internal_035f244fc530a571b9992892fadb22de89d6c07707c916a1f329f68bfe5a849e->leave($__internal_035f244fc530a571b9992892fadb22de89d6c07707c916a1f329f68bfe5a849e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_324b069092db13b918afa6aabe75e3b2f7a9d6f8963e85577b3b0056ca953eaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_324b069092db13b918afa6aabe75e3b2f7a9d6f8963e85577b3b0056ca953eaa->enter($__internal_324b069092db13b918afa6aabe75e3b2f7a9d6f8963e85577b3b0056ca953eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<main>
<div class='container'>
\t<center>
\t    <h2 class=\"center-block jumbotron \">
\t        <br/>Oooops...<br/>
\t        This page doesn't exist please try another page or go <a href=\" ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_homepage", array("page" => "home"));
        echo "\">Home</a>
\t    </h2>
    </center>
</div>
</main>
";
        
        $__internal_324b069092db13b918afa6aabe75e3b2f7a9d6f8963e85577b3b0056ca953eaa->leave($__internal_324b069092db13b918afa6aabe75e3b2f7a9d6f8963e85577b3b0056ca953eaa_prof);

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
        return array (  60 => 10,  53 => 5,  47 => 4,  35 => 3,  11 => 1,);
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
\t        This page doesn't exist please try another page or go <a href=\" {{ path('page_homepage', {'page': 'home' }) }}\">Home</a>
\t    </h2>
    </center>
</div>
</main>
{% endblock %}", "PageBundle:Default:error.html.twig", "C:\\xampp\\htdocs\\src\\PageBundle/Resources/views/Default/error.html.twig");
    }
}
