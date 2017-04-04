<?php

/* PageBundle:Default:error.html.twig */
class __TwigTemplate_1716e00f6fc2eb36f22ff8a48e827881def0658ca56b59a8ec5c600d4412d122 extends Twig_Template
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
        $__internal_1c273cdb33cf4d0c5741aa2feab0b76154357ee2c0886fccdb1bc2a64718186e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c273cdb33cf4d0c5741aa2feab0b76154357ee2c0886fccdb1bc2a64718186e->enter($__internal_1c273cdb33cf4d0c5741aa2feab0b76154357ee2c0886fccdb1bc2a64718186e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:error.html.twig"));

        $__internal_2baf02c7eb3ebbabb836963fc79030e741bd6e0a647d28c2b67b4bc5c8d4449c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2baf02c7eb3ebbabb836963fc79030e741bd6e0a647d28c2b67b4bc5c8d4449c->enter($__internal_2baf02c7eb3ebbabb836963fc79030e741bd6e0a647d28c2b67b4bc5c8d4449c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:error.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c273cdb33cf4d0c5741aa2feab0b76154357ee2c0886fccdb1bc2a64718186e->leave($__internal_1c273cdb33cf4d0c5741aa2feab0b76154357ee2c0886fccdb1bc2a64718186e_prof);

        
        $__internal_2baf02c7eb3ebbabb836963fc79030e741bd6e0a647d28c2b67b4bc5c8d4449c->leave($__internal_2baf02c7eb3ebbabb836963fc79030e741bd6e0a647d28c2b67b4bc5c8d4449c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_31fe5b23c5250baca8441e122d4668489c31bd143e9840e026fe0abd50386f92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31fe5b23c5250baca8441e122d4668489c31bd143e9840e026fe0abd50386f92->enter($__internal_31fe5b23c5250baca8441e122d4668489c31bd143e9840e026fe0abd50386f92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_50528a21110658d3130a9cd8e87895a8d976176e6ee1d1c29282e111a28360d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50528a21110658d3130a9cd8e87895a8d976176e6ee1d1c29282e111a28360d3->enter($__internal_50528a21110658d3130a9cd8e87895a8d976176e6ee1d1c29282e111a28360d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Error";
        
        $__internal_50528a21110658d3130a9cd8e87895a8d976176e6ee1d1c29282e111a28360d3->leave($__internal_50528a21110658d3130a9cd8e87895a8d976176e6ee1d1c29282e111a28360d3_prof);

        
        $__internal_31fe5b23c5250baca8441e122d4668489c31bd143e9840e026fe0abd50386f92->leave($__internal_31fe5b23c5250baca8441e122d4668489c31bd143e9840e026fe0abd50386f92_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_6020624e2f6258b2cdde0503c46c272eb5d34e51342878b62c2ff8642fa6f0d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6020624e2f6258b2cdde0503c46c272eb5d34e51342878b62c2ff8642fa6f0d4->enter($__internal_6020624e2f6258b2cdde0503c46c272eb5d34e51342878b62c2ff8642fa6f0d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_694321a5cbcf9857719064ff86b97150420b68ed83b47d8d9eef462596ac4b13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_694321a5cbcf9857719064ff86b97150420b68ed83b47d8d9eef462596ac4b13->enter($__internal_694321a5cbcf9857719064ff86b97150420b68ed83b47d8d9eef462596ac4b13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_694321a5cbcf9857719064ff86b97150420b68ed83b47d8d9eef462596ac4b13->leave($__internal_694321a5cbcf9857719064ff86b97150420b68ed83b47d8d9eef462596ac4b13_prof);

        
        $__internal_6020624e2f6258b2cdde0503c46c272eb5d34e51342878b62c2ff8642fa6f0d4->leave($__internal_6020624e2f6258b2cdde0503c46c272eb5d34e51342878b62c2ff8642fa6f0d4_prof);

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
{% endblock %}", "PageBundle:Default:error.html.twig", "C:\\xampp\\htdocs\\src\\PageBundle/Resources/views/Default/error.html.twig");
    }
}
