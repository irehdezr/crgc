<?php

/* @Page/Default/error.html.twig */
class __TwigTemplate_29f379905773cdba31347631ceeeb9d39f116c49c03bd2d4cba9eb916a03a4ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "@Page/Default/error.html.twig", 1);
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
        $__internal_8ec295c3cfa4f669261b1b609e4fe05f406b4ebcdcff833ed1e7dc843bdfe0f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ec295c3cfa4f669261b1b609e4fe05f406b4ebcdcff833ed1e7dc843bdfe0f1->enter($__internal_8ec295c3cfa4f669261b1b609e4fe05f406b4ebcdcff833ed1e7dc843bdfe0f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Page/Default/error.html.twig"));

        $__internal_423deb0fb6b914b9f46a0027a005c0be41624b522c698145997aa35595cada44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_423deb0fb6b914b9f46a0027a005c0be41624b522c698145997aa35595cada44->enter($__internal_423deb0fb6b914b9f46a0027a005c0be41624b522c698145997aa35595cada44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Page/Default/error.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ec295c3cfa4f669261b1b609e4fe05f406b4ebcdcff833ed1e7dc843bdfe0f1->leave($__internal_8ec295c3cfa4f669261b1b609e4fe05f406b4ebcdcff833ed1e7dc843bdfe0f1_prof);

        
        $__internal_423deb0fb6b914b9f46a0027a005c0be41624b522c698145997aa35595cada44->leave($__internal_423deb0fb6b914b9f46a0027a005c0be41624b522c698145997aa35595cada44_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ccf49f557b6668f8d74767f206c37bfb488e8ab11002f29851b83e34ec2b0322 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccf49f557b6668f8d74767f206c37bfb488e8ab11002f29851b83e34ec2b0322->enter($__internal_ccf49f557b6668f8d74767f206c37bfb488e8ab11002f29851b83e34ec2b0322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_90e09bbfcb4cd1f7f277b120cbe94a419d38c139be0056e60e53657c0c5a92ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90e09bbfcb4cd1f7f277b120cbe94a419d38c139be0056e60e53657c0c5a92ac->enter($__internal_90e09bbfcb4cd1f7f277b120cbe94a419d38c139be0056e60e53657c0c5a92ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Error";
        
        $__internal_90e09bbfcb4cd1f7f277b120cbe94a419d38c139be0056e60e53657c0c5a92ac->leave($__internal_90e09bbfcb4cd1f7f277b120cbe94a419d38c139be0056e60e53657c0c5a92ac_prof);

        
        $__internal_ccf49f557b6668f8d74767f206c37bfb488e8ab11002f29851b83e34ec2b0322->leave($__internal_ccf49f557b6668f8d74767f206c37bfb488e8ab11002f29851b83e34ec2b0322_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_100d55297a979c8f9087d0145ba57528196533199eeb0752db8572eb5e06f52e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_100d55297a979c8f9087d0145ba57528196533199eeb0752db8572eb5e06f52e->enter($__internal_100d55297a979c8f9087d0145ba57528196533199eeb0752db8572eb5e06f52e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dd3f3e42713c4535ec3a14971dc65dd6413121804fa85d7bb2d47b19bbe157d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd3f3e42713c4535ec3a14971dc65dd6413121804fa85d7bb2d47b19bbe157d2->enter($__internal_dd3f3e42713c4535ec3a14971dc65dd6413121804fa85d7bb2d47b19bbe157d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_dd3f3e42713c4535ec3a14971dc65dd6413121804fa85d7bb2d47b19bbe157d2->leave($__internal_dd3f3e42713c4535ec3a14971dc65dd6413121804fa85d7bb2d47b19bbe157d2_prof);

        
        $__internal_100d55297a979c8f9087d0145ba57528196533199eeb0752db8572eb5e06f52e->leave($__internal_100d55297a979c8f9087d0145ba57528196533199eeb0752db8572eb5e06f52e_prof);

    }

    public function getTemplateName()
    {
        return "@Page/Default/error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 9,  68 => 5,  59 => 4,  41 => 3,  11 => 1,);
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
{% endblock %}", "@Page/Default/error.html.twig", "C:\\xampp\\htdocs\\src\\PageBundle\\Resources\\views\\Default\\error.html.twig");
    }
}
