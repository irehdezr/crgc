<?php

/* @Page/Default/error.html.twig */
class __TwigTemplate_28e162d0c8b68a8e5d65afa41da397bed25baa7ab1dc30b7e04b7f44a765caea extends Twig_Template
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
        $__internal_63121a01b72dfd0f73b8ed5838a0554b87871651b455e9030bb97351865b59b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63121a01b72dfd0f73b8ed5838a0554b87871651b455e9030bb97351865b59b4->enter($__internal_63121a01b72dfd0f73b8ed5838a0554b87871651b455e9030bb97351865b59b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Page/Default/error.html.twig"));

        $__internal_9d601efaf40001460280585d5ee030cdc442309dbb399931a673962ebd761257 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d601efaf40001460280585d5ee030cdc442309dbb399931a673962ebd761257->enter($__internal_9d601efaf40001460280585d5ee030cdc442309dbb399931a673962ebd761257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Page/Default/error.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63121a01b72dfd0f73b8ed5838a0554b87871651b455e9030bb97351865b59b4->leave($__internal_63121a01b72dfd0f73b8ed5838a0554b87871651b455e9030bb97351865b59b4_prof);

        
        $__internal_9d601efaf40001460280585d5ee030cdc442309dbb399931a673962ebd761257->leave($__internal_9d601efaf40001460280585d5ee030cdc442309dbb399931a673962ebd761257_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_27ba5cc535a3dbc3dbfbc31d32c090394468e84ad3f5c9ef44e7cc573c1189f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27ba5cc535a3dbc3dbfbc31d32c090394468e84ad3f5c9ef44e7cc573c1189f0->enter($__internal_27ba5cc535a3dbc3dbfbc31d32c090394468e84ad3f5c9ef44e7cc573c1189f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3826bf4a23f00f1e6d300733258304408f2cdacc6b585931fb7566418b1b20f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3826bf4a23f00f1e6d300733258304408f2cdacc6b585931fb7566418b1b20f0->enter($__internal_3826bf4a23f00f1e6d300733258304408f2cdacc6b585931fb7566418b1b20f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Error";
        
        $__internal_3826bf4a23f00f1e6d300733258304408f2cdacc6b585931fb7566418b1b20f0->leave($__internal_3826bf4a23f00f1e6d300733258304408f2cdacc6b585931fb7566418b1b20f0_prof);

        
        $__internal_27ba5cc535a3dbc3dbfbc31d32c090394468e84ad3f5c9ef44e7cc573c1189f0->leave($__internal_27ba5cc535a3dbc3dbfbc31d32c090394468e84ad3f5c9ef44e7cc573c1189f0_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_792af22b31014f94f8166d6b9b5c5dd881d9389ed98faaaf92251dcbee08849d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_792af22b31014f94f8166d6b9b5c5dd881d9389ed98faaaf92251dcbee08849d->enter($__internal_792af22b31014f94f8166d6b9b5c5dd881d9389ed98faaaf92251dcbee08849d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fd31c8b23a22b67525829429346a5e5b96ea843cf54ae5599b869595ba7567e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd31c8b23a22b67525829429346a5e5b96ea843cf54ae5599b869595ba7567e9->enter($__internal_fd31c8b23a22b67525829429346a5e5b96ea843cf54ae5599b869595ba7567e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fd31c8b23a22b67525829429346a5e5b96ea843cf54ae5599b869595ba7567e9->leave($__internal_fd31c8b23a22b67525829429346a5e5b96ea843cf54ae5599b869595ba7567e9_prof);

        
        $__internal_792af22b31014f94f8166d6b9b5c5dd881d9389ed98faaaf92251dcbee08849d->leave($__internal_792af22b31014f94f8166d6b9b5c5dd881d9389ed98faaaf92251dcbee08849d_prof);

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
{% endblock %}", "@Page/Default/error.html.twig", "C:\\xampp\\htdocs\\crgc\\src\\PageBundle\\Resources\\views\\Default\\error.html.twig");
    }
}
