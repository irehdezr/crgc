<?php

/* PageBundle:Default:error.html.twig */
class __TwigTemplate_0f95082e6afd94c74254f306fea6c0430dd604f51502360da9dfd6320ff1f049 extends Twig_Template
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
        $__internal_5234fa561857e4cb1d33436f9ea0e69f43e70d7db1d1e6a62145de0911702f39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5234fa561857e4cb1d33436f9ea0e69f43e70d7db1d1e6a62145de0911702f39->enter($__internal_5234fa561857e4cb1d33436f9ea0e69f43e70d7db1d1e6a62145de0911702f39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:error.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5234fa561857e4cb1d33436f9ea0e69f43e70d7db1d1e6a62145de0911702f39->leave($__internal_5234fa561857e4cb1d33436f9ea0e69f43e70d7db1d1e6a62145de0911702f39_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d153e9b5adf69770f9784074f21f8e9b50ea8166a220fb70ca634b6450c88846 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d153e9b5adf69770f9784074f21f8e9b50ea8166a220fb70ca634b6450c88846->enter($__internal_d153e9b5adf69770f9784074f21f8e9b50ea8166a220fb70ca634b6450c88846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Error";
        
        $__internal_d153e9b5adf69770f9784074f21f8e9b50ea8166a220fb70ca634b6450c88846->leave($__internal_d153e9b5adf69770f9784074f21f8e9b50ea8166a220fb70ca634b6450c88846_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_90b8ddd02aa1013c65ad19001b36c790f142a10fdec627572a10f08efee258de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90b8ddd02aa1013c65ad19001b36c790f142a10fdec627572a10f08efee258de->enter($__internal_90b8ddd02aa1013c65ad19001b36c790f142a10fdec627572a10f08efee258de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_90b8ddd02aa1013c65ad19001b36c790f142a10fdec627572a10f08efee258de->leave($__internal_90b8ddd02aa1013c65ad19001b36c790f142a10fdec627572a10f08efee258de_prof);

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
{% endblock %}", "PageBundle:Default:error.html.twig", "/home/crgourme/public_html/src/PageBundle/Resources/views/Default/error.html.twig");
    }
}
