<?php

/* RegionBundle:Default:region_information.html.twig */
class __TwigTemplate_22e8ac23b6892c7eee81ad6d7bcbe2cd0dd50075c4e5ec4219d230939d3c6a97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "RegionBundle:Default:region_information.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_747ef66b6672fea9f8809a428edbca9dad9400c720deeec34701ec4745557d2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_747ef66b6672fea9f8809a428edbca9dad9400c720deeec34701ec4745557d2a->enter($__internal_747ef66b6672fea9f8809a428edbca9dad9400c720deeec34701ec4745557d2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RegionBundle:Default:region_information.html.twig"));

        $__internal_376cc464098f45070d1c255074631d1cab3146e7de69a105202c072863041d10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_376cc464098f45070d1c255074631d1cab3146e7de69a105202c072863041d10->enter($__internal_376cc464098f45070d1c255074631d1cab3146e7de69a105202c072863041d10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RegionBundle:Default:region_information.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_747ef66b6672fea9f8809a428edbca9dad9400c720deeec34701ec4745557d2a->leave($__internal_747ef66b6672fea9f8809a428edbca9dad9400c720deeec34701ec4745557d2a_prof);

        
        $__internal_376cc464098f45070d1c255074631d1cab3146e7de69a105202c072863041d10->leave($__internal_376cc464098f45070d1c255074631d1cab3146e7de69a105202c072863041d10_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8edd73911beed4359679284cb7bcd6028762c32957881eba04291e6d7b4ab156 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8edd73911beed4359679284cb7bcd6028762c32957881eba04291e6d7b4ab156->enter($__internal_8edd73911beed4359679284cb7bcd6028762c32957881eba04291e6d7b4ab156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e39298c25b2e95da1ec276711c440d84549659acbd66903035a2f857351e513b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e39298c25b2e95da1ec276711c440d84549659acbd66903035a2f857351e513b->enter($__internal_e39298c25b2e95da1ec276711c440d84549659acbd66903035a2f857351e513b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Region Information ";
        
        $__internal_e39298c25b2e95da1ec276711c440d84549659acbd66903035a2f857351e513b->leave($__internal_e39298c25b2e95da1ec276711c440d84549659acbd66903035a2f857351e513b_prof);

        
        $__internal_8edd73911beed4359679284cb7bcd6028762c32957881eba04291e6d7b4ab156->leave($__internal_8edd73911beed4359679284cb7bcd6028762c32957881eba04291e6d7b4ab156_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6633b0b870923870690a327dbed2f91218f02fca623d45599bda7b19bef7c5cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6633b0b870923870690a327dbed2f91218f02fca623d45599bda7b19bef7c5cc->enter($__internal_6633b0b870923870690a327dbed2f91218f02fca623d45599bda7b19bef7c5cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_04ac3a6b6f18a45a1bb42898eb7abcbe5417aaa0c0c088e3e6dcb481cb998da2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04ac3a6b6f18a45a1bb42898eb7abcbe5417aaa0c0c088e3e6dcb481cb998da2->enter($__internal_04ac3a6b6f18a45a1bb42898eb7abcbe5417aaa0c0c088e3e6dcb481cb998da2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/css/region_information.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_04ac3a6b6f18a45a1bb42898eb7abcbe5417aaa0c0c088e3e6dcb481cb998da2->leave($__internal_04ac3a6b6f18a45a1bb42898eb7abcbe5417aaa0c0c088e3e6dcb481cb998da2_prof);

        
        $__internal_6633b0b870923870690a327dbed2f91218f02fca623d45599bda7b19bef7c5cc->leave($__internal_6633b0b870923870690a327dbed2f91218f02fca623d45599bda7b19bef7c5cc_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_2063ea49b9f425da411ff95b312870b512616d7d731e5ffe259a8834e4c6d3c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2063ea49b9f425da411ff95b312870b512616d7d731e5ffe259a8834e4c6d3c6->enter($__internal_2063ea49b9f425da411ff95b312870b512616d7d731e5ffe259a8834e4c6d3c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f2075949ca83141b2fd6b06773767e50c3d3e4df48c7db994b1871e5581ca960 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2075949ca83141b2fd6b06773767e50c3d3e4df48c7db994b1871e5581ca960->enter($__internal_f2075949ca83141b2fd6b06773767e50c3d3e4df48c7db994b1871e5581ca960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<main>
\t\t<section id='regionInfoSection'>
\t\t\t<center><h2>Region Information</h2></center>
\t\t\t<div class='container-fluid'>
\t\t\t\t<div id='regionInfoContainer' class='row'>
\t\t\t\t\t<div id='regionInfoHeading' class='col-xs-12'>
\t\t\t\t\t\t<center><h3>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["region"] ?? $this->getContext($context, "region")), "getName", array()), "html", null, true);
        echo "</h3></center>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"regionPicContainer\" class='regionInfoCards col-xs-12 col-sm-4'>
\t\t\t\t\t\t<div class='regionInfoIcons'>
\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon12.svg\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4>Images</h4>
\t\t\t\t\t\t<div class=\"container col-xs-12\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t    \t    <div class=\"well\"> 
\t\t\t\t\t\t                <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\" data-interval=\"3000\">
\t\t\t\t\t\t\t                <div class=\"carousel-inner\">
\t\t\t\t\t\t\t\t                <div class=\"item active\">
\t\t\t\t\t\t\t\t\t                <center><img class='regionPics' src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute(($context["region"] ?? $this->getContext($context, "region")), "getImage1", array()), "html", null, true);
        echo "\"></center>
\t\t\t\t\t\t\t\t                \t<div class=\"carousel-caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute(($context["region"] ?? $this->getContext($context, "region")), "getImageDescription1", array()), "html", null, true);
        echo "</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t                \t</div>
\t\t\t\t\t\t\t                \t<div class=\"item\">
\t\t\t\t\t\t\t\t                \t<center><img class='regionPics' src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute(($context["region"] ?? $this->getContext($context, "region")), "getImage2", array()), "html", null, true);
        echo "\"></center>
\t\t\t\t\t\t\t\t                \t<div class=\"carousel-caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute(($context["region"] ?? $this->getContext($context, "region")), "getImageDescription2", array()), "html", null, true);
        echo "</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t                \t</div>
\t\t\t\t\t\t\t                \t<div class=\"item\">
\t\t\t\t\t\t\t\t                \t<center><img class='regionPics' src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute(($context["region"] ?? $this->getContext($context, "region")), "getImage3", array()), "html", null, true);
        echo "\"></center>
\t\t\t\t\t\t\t\t                \t<div class=\"carousel-caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute(($context["region"] ?? $this->getContext($context, "region")), "getImageDescription3", array()), "html", null, true);
        echo "</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t                \t</div>
\t\t\t\t\t\t\t                </div>
\t\t\t\t\t\t                </div>
\t\t\t\t\t\t            </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class='regionInfoCards col-xs-12 col-sm-4'>
\t\t\t\t\t\t<div class='regionInfoIcons'>
\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon1.svg\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4>Description</h4>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<p class=\"regionText\">";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute(($context["region"] ?? $this->getContext($context, "region")), "getDescription", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t<p class=\"regionText\" style=\"font-style: italic;\">
\t\t\t\t\t\t\t\t<span style=\"font-style: bond\">Source:</span> Instituto del Café de Costa Rica (ICAFE)
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class='regionInfoIcons'>
\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon5.svg\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4>Organoleptic charactersitics</h4>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<p class=\"regionText\">";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute(($context["region"] ?? $this->getContext($context, "region")), "getOrganolepticCharacteristics", array(), "method"), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t<p class=\"regionText\" style=\"font-style: italic;\">
\t\t\t\t\t\t\t\t<span style=\"font-style: bond\">Source:</span> Instituto del Café de Costa Rica (ICAFE)
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div id='regionInfoDetailsContainer' class='regionInfoCards col-xs-12 col-sm-4'>
\t\t\t\t\t\t<div class='regionInfoIcons'>
\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon2.svg\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4>Information</h4>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<p class=\"regionText\">
\t\t\t\t\t\t\t\t";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute(($context["region"] ?? $this->getContext($context, "region")), "getInformation", array()), "html", null, true);
        echo "
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p class=\"regionText\" style=\"font-style: italic;\">
\t\t\t\t\t\t\t\t<span style=\"font-style: bond\">Source:</span> Instituto del Café de Costa Rica (ICAFE)
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class='regionInfoCards col-xs-12'>
\t\t\t\t\t\t<div class='regionInfoIcons'>
\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon4.svg\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4>Location</h4>
\t\t\t\t\t\t<div id=\"region_map\">Mapa</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t</main>
";
        
        $__internal_f2075949ca83141b2fd6b06773767e50c3d3e4df48c7db994b1871e5581ca960->leave($__internal_f2075949ca83141b2fd6b06773767e50c3d3e4df48c7db994b1871e5581ca960_prof);

        
        $__internal_2063ea49b9f425da411ff95b312870b512616d7d731e5ffe259a8834e4c6d3c6->leave($__internal_2063ea49b9f425da411ff95b312870b512616d7d731e5ffe259a8834e4c6d3c6_prof);

    }

    // line 101
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1948f67534be6ae0f5ff87813c4f25e63b4d3558e6293fd4da0e56fb549af958 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1948f67534be6ae0f5ff87813c4f25e63b4d3558e6293fd4da0e56fb549af958->enter($__internal_1948f67534be6ae0f5ff87813c4f25e63b4d3558e6293fd4da0e56fb549af958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0d848e148d123415edce913ad260922651f3e2f45865dbdeeb5008bccd7e2c5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d848e148d123415edce913ad260922651f3e2f45865dbdeeb5008bccd7e2c5e->enter($__internal_0d848e148d123415edce913ad260922651f3e2f45865dbdeeb5008bccd7e2c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 102
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyA8iOI-wKQIfkncEFwGUHS3dsce-nlwsQ0\" type=\"text/javascript\"></script>
\t<script>
\t\tvar lat = 10.070124;
\t\tvar lon = -84.081127;
\t</script>\t
\t<script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/js/region_information.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_0d848e148d123415edce913ad260922651f3e2f45865dbdeeb5008bccd7e2c5e->leave($__internal_0d848e148d123415edce913ad260922651f3e2f45865dbdeeb5008bccd7e2c5e_prof);

        
        $__internal_1948f67534be6ae0f5ff87813c4f25e63b4d3558e6293fd4da0e56fb549af958->leave($__internal_1948f67534be6ae0f5ff87813c4f25e63b4d3558e6293fd4da0e56fb549af958_prof);

    }

    public function getTemplateName()
    {
        return "RegionBundle:Default:region_information.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 108,  234 => 102,  225 => 101,  196 => 81,  180 => 68,  167 => 58,  149 => 43,  144 => 41,  137 => 37,  132 => 35,  125 => 31,  120 => 29,  104 => 16,  96 => 10,  87 => 9,  75 => 6,  70 => 5,  61 => 4,  43 => 3,  11 => 1,);
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

{% block title%} Region Information {% endblock %}
{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('/web/public/css/region_information.css') }}\" />
{% endblock %}

{% block body %}
<main>
\t\t<section id='regionInfoSection'>
\t\t\t<center><h2>Region Information</h2></center>
\t\t\t<div class='container-fluid'>
\t\t\t\t<div id='regionInfoContainer' class='row'>
\t\t\t\t\t<div id='regionInfoHeading' class='col-xs-12'>
\t\t\t\t\t\t<center><h3>{{ region.getName }}</h3></center>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"regionPicContainer\" class='regionInfoCards col-xs-12 col-sm-4'>
\t\t\t\t\t\t<div class='regionInfoIcons'>
\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon12.svg\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4>Images</h4>
\t\t\t\t\t\t<div class=\"container col-xs-12\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t    \t    <div class=\"well\"> 
\t\t\t\t\t\t                <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\" data-interval=\"3000\">
\t\t\t\t\t\t\t                <div class=\"carousel-inner\">
\t\t\t\t\t\t\t\t                <div class=\"item active\">
\t\t\t\t\t\t\t\t\t                <center><img class='regionPics' src=\"{{ region.getImage1 }}\"></center>
\t\t\t\t\t\t\t\t                \t<div class=\"carousel-caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>{{ region.getImageDescription1 }}</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t                \t</div>
\t\t\t\t\t\t\t                \t<div class=\"item\">
\t\t\t\t\t\t\t\t                \t<center><img class='regionPics' src=\"{{ region.getImage2}}\"></center>
\t\t\t\t\t\t\t\t                \t<div class=\"carousel-caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>{{ region.getImageDescription2 }}</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t                \t</div>
\t\t\t\t\t\t\t                \t<div class=\"item\">
\t\t\t\t\t\t\t\t                \t<center><img class='regionPics' src=\"{{ region.getImage3}}\"></center>
\t\t\t\t\t\t\t\t                \t<div class=\"carousel-caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>{{ region.getImageDescription3 }}</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t                \t</div>
\t\t\t\t\t\t\t                </div>
\t\t\t\t\t\t                </div>
\t\t\t\t\t\t            </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class='regionInfoCards col-xs-12 col-sm-4'>
\t\t\t\t\t\t<div class='regionInfoIcons'>
\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon1.svg\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4>Description</h4>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<p class=\"regionText\">{{ region.getDescription }}</p>
\t\t\t\t\t\t\t<p class=\"regionText\" style=\"font-style: italic;\">
\t\t\t\t\t\t\t\t<span style=\"font-style: bond\">Source:</span> Instituto del Café de Costa Rica (ICAFE)
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class='regionInfoIcons'>
\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon5.svg\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4>Organoleptic charactersitics</h4>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<p class=\"regionText\">{{ region.getOrganolepticCharacteristics() }}</p>
\t\t\t\t\t\t\t<p class=\"regionText\" style=\"font-style: italic;\">
\t\t\t\t\t\t\t\t<span style=\"font-style: bond\">Source:</span> Instituto del Café de Costa Rica (ICAFE)
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div id='regionInfoDetailsContainer' class='regionInfoCards col-xs-12 col-sm-4'>
\t\t\t\t\t\t<div class='regionInfoIcons'>
\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon2.svg\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4>Information</h4>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<p class=\"regionText\">
\t\t\t\t\t\t\t\t{{ region.getInformation }}
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p class=\"regionText\" style=\"font-style: italic;\">
\t\t\t\t\t\t\t\t<span style=\"font-style: bond\">Source:</span> Instituto del Café de Costa Rica (ICAFE)
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class='regionInfoCards col-xs-12'>
\t\t\t\t\t\t<div class='regionInfoIcons'>
\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon4.svg\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4>Location</h4>
\t\t\t\t\t\t<div id=\"region_map\">Mapa</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t</main>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyA8iOI-wKQIfkncEFwGUHS3dsce-nlwsQ0\" type=\"text/javascript\"></script>
\t<script>
\t\tvar lat = 10.070124;
\t\tvar lon = -84.081127;
\t</script>\t
\t<script src=\"{{ asset('/web/public/js/region_information.js')}}\"></script>
{% endblock %}", "RegionBundle:Default:region_information.html.twig", "C:\\xampp\\htdocs\\src\\RegionBundle/Resources/views/Default/region_information.html.twig");
    }
}
