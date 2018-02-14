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
        $__internal_cbf859c5bcd87910458d1c78e31d538160d508eec9b38109882c97a07d084ab7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbf859c5bcd87910458d1c78e31d538160d508eec9b38109882c97a07d084ab7->enter($__internal_cbf859c5bcd87910458d1c78e31d538160d508eec9b38109882c97a07d084ab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:error.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cbf859c5bcd87910458d1c78e31d538160d508eec9b38109882c97a07d084ab7->leave($__internal_cbf859c5bcd87910458d1c78e31d538160d508eec9b38109882c97a07d084ab7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1f0e27938a21265a67c75de79024aa3d2a53c155e1289fa63bddd754f01e5a7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f0e27938a21265a67c75de79024aa3d2a53c155e1289fa63bddd754f01e5a7f->enter($__internal_1f0e27938a21265a67c75de79024aa3d2a53c155e1289fa63bddd754f01e5a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Error";
        
        $__internal_1f0e27938a21265a67c75de79024aa3d2a53c155e1289fa63bddd754f01e5a7f->leave($__internal_1f0e27938a21265a67c75de79024aa3d2a53c155e1289fa63bddd754f01e5a7f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ef410d76281f5331f563fe06a3424902a813d72590cd565ee0f0aff08fafb98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ef410d76281f5331f563fe06a3424902a813d72590cd565ee0f0aff08fafb98->enter($__internal_8ef410d76281f5331f563fe06a3424902a813d72590cd565ee0f0aff08fafb98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8ef410d76281f5331f563fe06a3424902a813d72590cd565ee0f0aff08fafb98->leave($__internal_8ef410d76281f5331f563fe06a3424902a813d72590cd565ee0f0aff08fafb98_prof);

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
{% endblock %}", "PageBundle:Default:error.html.twig", "C:\\xampp\\htdocs\\src\\PageBundle/Resources/views/Default/error.html.twig");
    }
}
