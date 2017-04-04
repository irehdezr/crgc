<?php

/* PageBundle:Default:error.html.twig */
class __TwigTemplate_6e7a2745fb1ffb76d636066f2f376b7a06c77a9db85f0526f2522ca0429d6b1c extends Twig_Template
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
        $__internal_e5e43ace31c3ec83e9d179fc3d16722b75a23f1e6601c5d0dbaf88ba10023c6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5e43ace31c3ec83e9d179fc3d16722b75a23f1e6601c5d0dbaf88ba10023c6e->enter($__internal_e5e43ace31c3ec83e9d179fc3d16722b75a23f1e6601c5d0dbaf88ba10023c6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:error.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5e43ace31c3ec83e9d179fc3d16722b75a23f1e6601c5d0dbaf88ba10023c6e->leave($__internal_e5e43ace31c3ec83e9d179fc3d16722b75a23f1e6601c5d0dbaf88ba10023c6e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_147f07d0f17283789d0552b50cd77b2a826513659fbc3ab96ebc9822e6532724 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_147f07d0f17283789d0552b50cd77b2a826513659fbc3ab96ebc9822e6532724->enter($__internal_147f07d0f17283789d0552b50cd77b2a826513659fbc3ab96ebc9822e6532724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CR Gourmet Coffee";
        
        $__internal_147f07d0f17283789d0552b50cd77b2a826513659fbc3ab96ebc9822e6532724->leave($__internal_147f07d0f17283789d0552b50cd77b2a826513659fbc3ab96ebc9822e6532724_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_86d066d8a5d27a68d66707c91469418d13e6317856a129e5c1363971e963fb8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86d066d8a5d27a68d66707c91469418d13e6317856a129e5c1363971e963fb8e->enter($__internal_86d066d8a5d27a68d66707c91469418d13e6317856a129e5c1363971e963fb8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_86d066d8a5d27a68d66707c91469418d13e6317856a129e5c1363971e963fb8e->leave($__internal_86d066d8a5d27a68d66707c91469418d13e6317856a129e5c1363971e963fb8e_prof);

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
{% endblock %}", "PageBundle:Default:error.html.twig", "/home/crgourme/public_html/src/PageBundle/Resources/views/Default/error.html.twig");
    }
}
