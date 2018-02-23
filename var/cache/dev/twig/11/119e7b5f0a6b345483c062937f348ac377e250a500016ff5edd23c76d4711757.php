<?php

/* @Region/Default/region_information.html.twig */
class __TwigTemplate_7b67262186f3e5353dab3b688ea7192f663ffe2b3f73ccac76d12374f5092fbd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "@Region/Default/region_information.html.twig", 1);
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
        $__internal_d83316eff5843795385097bc0987cba2525d437d13481df5b26344f8107a9093 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d83316eff5843795385097bc0987cba2525d437d13481df5b26344f8107a9093->enter($__internal_d83316eff5843795385097bc0987cba2525d437d13481df5b26344f8107a9093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Region/Default/region_information.html.twig"));

        $__internal_82e41dd65c28e59f5b7c0c1c3e6fd620fa739c829c3b28b702f44938c9ea54c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82e41dd65c28e59f5b7c0c1c3e6fd620fa739c829c3b28b702f44938c9ea54c8->enter($__internal_82e41dd65c28e59f5b7c0c1c3e6fd620fa739c829c3b28b702f44938c9ea54c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Region/Default/region_information.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d83316eff5843795385097bc0987cba2525d437d13481df5b26344f8107a9093->leave($__internal_d83316eff5843795385097bc0987cba2525d437d13481df5b26344f8107a9093_prof);

        
        $__internal_82e41dd65c28e59f5b7c0c1c3e6fd620fa739c829c3b28b702f44938c9ea54c8->leave($__internal_82e41dd65c28e59f5b7c0c1c3e6fd620fa739c829c3b28b702f44938c9ea54c8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_840490e4644bf54b143d0898ceb6aeff8f2769917594c7bd32b170df62064e70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_840490e4644bf54b143d0898ceb6aeff8f2769917594c7bd32b170df62064e70->enter($__internal_840490e4644bf54b143d0898ceb6aeff8f2769917594c7bd32b170df62064e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e370b2c99958dc86bb8dfe4830d46e638bbf29618ee78d66e91df5b50e7095c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e370b2c99958dc86bb8dfe4830d46e638bbf29618ee78d66e91df5b50e7095c4->enter($__internal_e370b2c99958dc86bb8dfe4830d46e638bbf29618ee78d66e91df5b50e7095c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Region Information ";
        
        $__internal_e370b2c99958dc86bb8dfe4830d46e638bbf29618ee78d66e91df5b50e7095c4->leave($__internal_e370b2c99958dc86bb8dfe4830d46e638bbf29618ee78d66e91df5b50e7095c4_prof);

        
        $__internal_840490e4644bf54b143d0898ceb6aeff8f2769917594c7bd32b170df62064e70->leave($__internal_840490e4644bf54b143d0898ceb6aeff8f2769917594c7bd32b170df62064e70_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_81929eecdd66d006d6c95e665e12633916045ad7e65e2d956fe406afc10ec1e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81929eecdd66d006d6c95e665e12633916045ad7e65e2d956fe406afc10ec1e3->enter($__internal_81929eecdd66d006d6c95e665e12633916045ad7e65e2d956fe406afc10ec1e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9254404410b5eab81a290f8839f4754e1ce500a88293fd3cbbeaae18426783b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9254404410b5eab81a290f8839f4754e1ce500a88293fd3cbbeaae18426783b6->enter($__internal_9254404410b5eab81a290f8839f4754e1ce500a88293fd3cbbeaae18426783b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/css/region_information.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_9254404410b5eab81a290f8839f4754e1ce500a88293fd3cbbeaae18426783b6->leave($__internal_9254404410b5eab81a290f8839f4754e1ce500a88293fd3cbbeaae18426783b6_prof);

        
        $__internal_81929eecdd66d006d6c95e665e12633916045ad7e65e2d956fe406afc10ec1e3->leave($__internal_81929eecdd66d006d6c95e665e12633916045ad7e65e2d956fe406afc10ec1e3_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_a558fd0759700515f163bebc10576183fd17013980bea2bf38bb3783f7ac2785 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a558fd0759700515f163bebc10576183fd17013980bea2bf38bb3783f7ac2785->enter($__internal_a558fd0759700515f163bebc10576183fd17013980bea2bf38bb3783f7ac2785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b0b9e5d33b97da2d2a852b81d87a3b0779c84d65e9bc76c46df5865ecb1eb61c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0b9e5d33b97da2d2a852b81d87a3b0779c84d65e9bc76c46df5865ecb1eb61c->enter($__internal_b0b9e5d33b97da2d2a852b81d87a3b0779c84d65e9bc76c46df5865ecb1eb61c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b0b9e5d33b97da2d2a852b81d87a3b0779c84d65e9bc76c46df5865ecb1eb61c->leave($__internal_b0b9e5d33b97da2d2a852b81d87a3b0779c84d65e9bc76c46df5865ecb1eb61c_prof);

        
        $__internal_a558fd0759700515f163bebc10576183fd17013980bea2bf38bb3783f7ac2785->leave($__internal_a558fd0759700515f163bebc10576183fd17013980bea2bf38bb3783f7ac2785_prof);

    }

    // line 101
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d211b5433e44b7bf7ccd0e6a022ec6bfe71b3ed1dbc1a2e02f5bc57fb0afe19b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d211b5433e44b7bf7ccd0e6a022ec6bfe71b3ed1dbc1a2e02f5bc57fb0afe19b->enter($__internal_d211b5433e44b7bf7ccd0e6a022ec6bfe71b3ed1dbc1a2e02f5bc57fb0afe19b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4e066cf8ecd20be4269732298bb4e73595e04e7cf0be677a0455b6fe29b744a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e066cf8ecd20be4269732298bb4e73595e04e7cf0be677a0455b6fe29b744a5->enter($__internal_4e066cf8ecd20be4269732298bb4e73595e04e7cf0be677a0455b6fe29b744a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_4e066cf8ecd20be4269732298bb4e73595e04e7cf0be677a0455b6fe29b744a5->leave($__internal_4e066cf8ecd20be4269732298bb4e73595e04e7cf0be677a0455b6fe29b744a5_prof);

        
        $__internal_d211b5433e44b7bf7ccd0e6a022ec6bfe71b3ed1dbc1a2e02f5bc57fb0afe19b->leave($__internal_d211b5433e44b7bf7ccd0e6a022ec6bfe71b3ed1dbc1a2e02f5bc57fb0afe19b_prof);

    }

    public function getTemplateName()
    {
        return "@Region/Default/region_information.html.twig";
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
{% endblock %}", "@Region/Default/region_information.html.twig", "C:\\xampp\\htdocs\\src\\RegionBundle\\Resources\\views\\Default\\region_information.html.twig");
    }
}
