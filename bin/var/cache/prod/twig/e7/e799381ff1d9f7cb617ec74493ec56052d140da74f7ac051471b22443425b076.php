<?php

/* PageBundle:Default:farm_information.html.twig */
class __TwigTemplate_83f8b94e5e43cc06eb025920a7e09b581ed61df52515fdb197cb176fb898f87f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "PageBundle:Default:farm_information.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_56a4dc8df01aa3fa101ac70eeeffacdca81ce85f2b9a1a02839a63dbbbeee58b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56a4dc8df01aa3fa101ac70eeeffacdca81ce85f2b9a1a02839a63dbbbeee58b->enter($__internal_56a4dc8df01aa3fa101ac70eeeffacdca81ce85f2b9a1a02839a63dbbbeee58b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:farm_information.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56a4dc8df01aa3fa101ac70eeeffacdca81ce85f2b9a1a02839a63dbbbeee58b->leave($__internal_56a4dc8df01aa3fa101ac70eeeffacdca81ce85f2b9a1a02839a63dbbbeee58b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dec5312d1f627bbc91c98e2ad20e9b19112bb77abfc73b7d383e76a3a8fa276c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dec5312d1f627bbc91c98e2ad20e9b19112bb77abfc73b7d383e76a3a8fa276c->enter($__internal_dec5312d1f627bbc91c98e2ad20e9b19112bb77abfc73b7d383e76a3a8fa276c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Farm Information ";
        
        $__internal_dec5312d1f627bbc91c98e2ad20e9b19112bb77abfc73b7d383e76a3a8fa276c->leave($__internal_dec5312d1f627bbc91c98e2ad20e9b19112bb77abfc73b7d383e76a3a8fa276c_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0ff12d6bebab16b62b4bb5a7871dacde02f0f25a6d73598a149f51f8fb8e78ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ff12d6bebab16b62b4bb5a7871dacde02f0f25a6d73598a149f51f8fb8e78ad->enter($__internal_0ff12d6bebab16b62b4bb5a7871dacde02f0f25a6d73598a149f51f8fb8e78ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/css/product.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/css/farm_information.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_0ff12d6bebab16b62b4bb5a7871dacde02f0f25a6d73598a149f51f8fb8e78ad->leave($__internal_0ff12d6bebab16b62b4bb5a7871dacde02f0f25a6d73598a149f51f8fb8e78ad_prof);

    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_236343b37eaee1c4e84d9d1c72c995282c97b73d90a6e23de76cda004b09ec4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_236343b37eaee1c4e84d9d1c72c995282c97b73d90a6e23de76cda004b09ec4c->enter($__internal_236343b37eaee1c4e84d9d1c72c995282c97b73d90a6e23de76cda004b09ec4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 10
        echo "\t<script src=\"https://maps.googleapis.com/maps/api/js?key= AIzaSyA8iOI-wKQIfkncEFwGUHS3dsce-nlwsQ0&callback=loadMap\"></script>
\t<script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/js/farm_information.js"), "html", null, true);
        echo "\"></script>
\t<script>
\t\tvar lat = ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["farm"] ?? $this->getContext($context, "farm")), "getLatitude", array(), "method"), "html", null, true);
        echo "
\t\tvar lon = ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["farm"] ?? $this->getContext($context, "farm")), "getLongitude", array(), "method"), "html", null, true);
        echo "
\t</script>
    ";
        // line 16
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_236343b37eaee1c4e84d9d1c72c995282c97b73d90a6e23de76cda004b09ec4c->leave($__internal_236343b37eaee1c4e84d9d1c72c995282c97b73d90a6e23de76cda004b09ec4c_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_e91ba5a45ef8d9fd67f14df6d564a586f14a38da4d7c11ec9cc6a174eaf99a0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e91ba5a45ef8d9fd67f14df6d564a586f14a38da4d7c11ec9cc6a174eaf99a0f->enter($__internal_e91ba5a45ef8d9fd67f14df6d564a586f14a38da4d7c11ec9cc6a174eaf99a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 20
        echo "\t<center><h2>Farm Information</h2></center>
\t<section id='farmInfoSection'>
\t\t<div class='container-fluid'>
\t\t\t<div id='farmInfoContainer' class='row'>
\t\t\t\t<div id='farmInfoHeading' class='col-xs-12'>
\t\t\t\t\t<center>
\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["farm"] ?? $this->getContext($context, "farm")), "getName", array(), "method"), "html", null, true);
        echo "
\t\t\t\t\t\t</h3>
\t\t\t\t\t</center>
\t\t\t\t</div>
\t\t\t\t<div id=\"farmPicContainer\" class='col-xs-12 col-md-offset-3 col-md-6 col-lg-offset-0 col-lg-6'>
\t\t\t\t\t<img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute(($context["farm"] ?? $this->getContext($context, "farm")), "getImage", array(), "method"), "html", null, true);
        echo "\" id=\"farmPic\">
\t\t\t\t</div>
\t\t\t\t<div id='farmInfoDetailsContainer' class='col-md-12 col-lg-6'>
\t\t\t\t\t<div class='farmInfoCards col-lg-6 col-md-6'>
\t\t\t\t\t\t<div class='farmInfoIcons'>
\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon1.png\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getDescriptionTitle", array(), "method"), "html", null, true);
        echo "
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute(($context["farm"] ?? $this->getContext($context, "farm")), "getDescription", array(), "method"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t<div class='prodInfoIconHeadings'>
\t\t\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info\" data-toggle=\"collapse\" data-target=\"#cupMap\"><span class=\"glyphicon glyphicon-eye-open\"></span>Read story</button>
\t\t\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class='farmInfoCards col-lg-6 col-md-6'>
\t\t\t\t\t\t\t<div class='farmInfoIcons'>
\t\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon2.png\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h4>";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getInformationTitle", array(), "method"), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t\t<p><span>Region: </span>: Central Valley</p>
\t\t\t\t\t\t\t<p><span>";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getElevationTitle", array(), "method"), "html", null, true);
        echo "</span>: ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["farm"] ?? $this->getContext($context, "farm")), "getElevation", array(), "method"), "html", null, true);
        echo " m.a.s.l.</p>
\t\t\t\t\t\t\t<p><span>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getHarvestTitle", array(), "method"), "html", null, true);
        echo "</span>: ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["farm"] ?? $this->getContext($context, "farm")), "getHarvest", array(), "method"), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t<p><span>";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getSpeciesTitle", array(), "method"), "html", null, true);
        echo "</span>: Arabica</p>
\t\t\t\t\t\t\t<p><span>";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getCultivarTitle", array(), "method"), "html", null, true);
        echo "</span>:
\t\t\t\t\t\t\t<div class= \"col-md-12 col-md-offset-2\">
\t\t\t\t\t\t\t\t";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["farm"] ?? $this->getContext($context, "farm")), "getCultivars", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["cultivar"]) {
            // line 63
            echo "\t\t\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cultivar"], "getDescription", array(), "method"), "html", null, true);
            echo " </br>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cultivar'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p><span>";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getCertificationsTitle", array(), "method"), "html", null, true);
        echo "</span>:
\t\t\t\t\t\t\t<div class= \"col-md-12 col-md-offset-2\">
\t\t\t\t\t\t\t\t";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["farm"] ?? $this->getContext($context, "farm")), "getCertifications", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["certification"]) {
            // line 70
            echo "\t\t\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($context["certification"], "getDescription", array(), "method"), "html", null, true);
            echo " </br>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['certification'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class='farmInfoCards col-lg-6 col-md-6'>
\t\t\t\t\t\t\t<div class='farmInfoIcons'>
\t\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon3.png\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h4>";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getAwardsTitle", array(), "method"), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["farm"] ?? $this->getContext($context, "farm")), "getFarmAwards", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["award"]) {
            // line 82
            echo "\t\t\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["award"], "getAward", array(), "method"), "getDescription", array(), "method"), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, $this->getAttribute($context["award"], "getPlace", array(), "method"), "html", null, true);
            echo " place,";
            echo twig_escape_filter($this->env, $this->getAttribute($context["award"], "getYear", array(), "method"), "html", null, true);
            echo "</br>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['award'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class='farmInfoCards col-lg-6 col-md-6'>
\t\t\t\t\t\t\t<div class='farmInfoIcons'>
\t\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon4.png\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h4>";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getLocationTitle", array(), "method"), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t\t<div id=\"farm_map\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<div class='clearfix'></div>
\t\t";
        // line 98
        if ((twig_length_filter($this->env, $this->getAttribute(($context["farm"] ?? $this->getContext($context, "farm")), "getProducts", array(), "method")) > 0)) {
            // line 99
            echo "\t\t<section>
\t\t\t<div id='carouselHeading' class='col-xs-12'>
\t\t\t\t<center><h3>";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getProductsTitle", array(), "method"), "html", null, true);
            echo "</h3></center>
\t\t\t</div>
\t\t\t<div class='clearfix'></div>
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"span12\">
\t\t\t    \t    <div class=\"well\">
\t\t\t    \t    ";
            // line 108
            $context["size"] = (twig_length_filter($this->env, $this->getAttribute(($context["farm"] ?? $this->getContext($context, "farm")), "getProducts", array(), "method")) / 3);
            echo " 
\t\t\t    \t    ";
            // line 109
            if ((($context["size"] ?? $this->getContext($context, "size")) < 1)) {
                // line 110
                echo "\t\t\t    \t    \t";
                $context["size"] = 1;
                // line 111
                echo "\t\t\t    \t    ";
            }
            // line 112
            echo "                \t\t\t<div id=\"farm_informationCarousel\" class=\"carousel slide\" data-interval=\"false\">
\t\t\t\t                <ol class=\"carousel-indicators\">
\t\t\t\t                ";
            // line 114
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_number_format_filter($this->env, ($context["size"] ?? $this->getContext($context, "size")), 0)));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["index"]) {
                // line 115
                echo "\t\t\t\t                \t";
                if (($this->getAttribute($context["loop"], "index", array()) < 2)) {
                    // line 116
                    echo "\t\t\t\t                    \t<li data-target=\"#farm_informationCarousel\" data-slide-to=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "\" class=\"active\"></li>
\t\t\t\t                    ";
                } else {
                    // line 118
                    echo "\t\t\t\t                    \t<li data-target=\"#farm_informationCarousel\" data-slide-to=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "\" class=\"\"></li>
\t\t\t\t                \t";
                }
                // line 120
                echo "\t\t\t\t                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['index'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 121
            echo "\t\t\t\t                </ol>\t                
\t\t\t\t                <div class=\"carousel-inner\" role=\"listbox\">
\t\t\t\t                   \t";
            // line 123
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["farm"] ?? $this->getContext($context, "farm")), "getProducts", array(), "method"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 124
                echo "\t\t\t\t\t\t\t\t        ";
                if (($this->getAttribute($context["loop"], "index", array()) < 2)) {
                    echo " 
\t\t\t\t\t\t\t\t    \t    <div class=\"item active\">
\t\t\t\t\t\t\t\t    \t";
                }
                // line 127
                echo "\t\t\t\t                   \t\t";
                if (($this->getAttribute($context["loop"], "index", array()) < 4)) {
                    // line 128
                    echo "\t\t\t\t\t\t\t\t                <div class=\"row-fluid\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"carouselCards col-xs-12 col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"productThumbnails\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='prodThumbInside'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"productThumbnailsHeadings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>";
                    // line 133
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "getName", array(), "method"), "html", null, true);
                    echo "</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 135
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_information", array("farm" => $this->getAttribute($this->getAttribute(                    // line 136
$context["product"], "getFarm", array(), "method"), "getId", array(), "method"), "product" => $this->getAttribute(                    // line 137
$context["product"], "getId", array(), "method"), "presentation" => 1)), "html", null, true);
                    // line 138
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 139
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "getImage", array(), "method"), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$";
                    // line 142
                    echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, $this->getAttribute($context["product"], "getPresentations", array(), "method")), "getPrice", array(), "method"), "html", null, true);
                    echo "</br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 143
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_homepage", array("name" => "onDevelopment"));
                    echo "\">Order</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetailsContainer row'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetails col-xs-5 col-xs-offset-1'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 148
                    echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, $this->getAttribute($context["product"], "getPresentations", array(), "method")), "getWeight", array(), "method"), "html", null, true);
                    echo "g/
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 149
                    echo twig_escape_filter($this->env, ($this->getAttribute(twig_first($this->env, $this->getAttribute($context["product"], "getPresentations", array(), "method")), "getWeight", array(), "method") * 0.04), "html", null, true);
                    echo "oz
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>";
                    // line 151
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($context["product"], "getPresentations", array(), "method")), "getRoast", array(), "method"), "getDescription", array(), "method"), "html", null, true);
                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div href=\"#\" class='productDetails  col-xs-5 col-md-5'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>";
                    // line 154
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($context["product"], "getPresentations", array(), "method")), "getGrind", array(), "method"), "getDescription", array(), "method"), "html", null, true);
                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 155
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_information", array("farm" => $this->getAttribute($this->getAttribute(                    // line 156
$context["product"], "getFarm", array(), "method"), "getId", array(), "method"), "product" => $this->getAttribute(                    // line 157
$context["product"], "getId", array(), "method"), "presentation" => 1)), "html", null, true);
                    // line 158
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>More info/options</p></a> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetailsContainer row'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetails col-xs-5 col-xs-offset-1'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 165
                    $context["rank"] = 0;
                    // line 166
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute($context["product"], "getRank", array(), "method")));
                    foreach ($context['_seq'] as $context["_key"] => $context["inx"]) {
                        // line 167
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t";
                        $context["rank"] = (($context["rank"] ?? $this->getContext($context, "rank")) + 1);
                        // line 168
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t<span>&#x2605;</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inx'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 170
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if ((($context["rank"] ?? $this->getContext($context, "rank")) < 5)) {
                        // line 171
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(($context["rank"] ?? $this->getContext($context, "rank")), 4));
                        foreach ($context['_seq'] as $context["_key"] => $context["inx2"]) {
                            // line 172
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t";
                            $context["rank"] = (($context["rank"] ?? $this->getContext($context, "rank")) + 1);
                            // line 173
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t<span>&#x2606;</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inx2'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 175
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 176
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetails col-xs-5 col-md-5'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>";
                    // line 179
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "getReviews", array(), "method"), "html", null, true);
                    echo " reviews</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t              \t</div>
\t\t\t\t                   \t\t";
                } elseif ((0 == $this->getAttribute(                // line 186
$context["loop"], "index", array()) % 4)) {
                    // line 187
                    echo "\t\t\t\t\t\t\t\t            </div>
\t\t\t\t                   \t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t                <div class=\"row-fluid\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"carouselCards col-xs-12 col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"productThumbnails\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='prodThumbInside'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"productThumbnailsHeadings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>";
                    // line 194
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "getName", array(), "method"), "html", null, true);
                    echo "</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 196
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_information", array("farm" => $this->getAttribute($this->getAttribute(                    // line 197
$context["product"], "getFarm", array(), "method"), "getId", array(), "method"), "product" => $this->getAttribute(                    // line 198
$context["product"], "getId", array(), "method"), "presentation" => 1)), "html", null, true);
                    // line 199
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 200
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "getImage", array(), "method"), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$";
                    // line 203
                    echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, $this->getAttribute($context["product"], "getPresentations", array(), "method")), "getPrice", array(), "method"), "html", null, true);
                    echo "</br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 204
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_homepage", array("name" => "onDevelopment"));
                    echo "\">Order</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetailsContainer row'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetails col-xs-5 col-xs-offset-1'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 209
                    echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, $this->getAttribute($context["product"], "getPresentations", array(), "method")), "getWeight", array(), "method"), "html", null, true);
                    echo "g/
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 210
                    echo twig_escape_filter($this->env, ($this->getAttribute(twig_first($this->env, $this->getAttribute($context["product"], "getPresentations", array(), "method")), "getWeight", array(), "method") * 0.04), "html", null, true);
                    echo "oz
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>";
                    // line 212
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($context["product"], "getPresentations", array(), "method")), "getRoast", array(), "method"), "getDescription", array(), "method"), "html", null, true);
                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div href=\"#\" class='productDetails  col-xs-5 col-md-5'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>";
                    // line 215
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($context["product"], "getPresentations", array(), "method")), "getGrind", array(), "method"), "getDescription", array(), "method"), "html", null, true);
                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 216
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_information", array("farm" => $this->getAttribute($this->getAttribute(                    // line 217
$context["product"], "getFarm", array(), "method"), "getId", array(), "method"), "product" => $this->getAttribute(                    // line 218
$context["product"], "getId", array(), "method"), "presentation" => 1)), "html", null, true);
                    // line 219
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>More info/options</p></a> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetailsContainer row'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetails col-xs-5 col-xs-offset-1'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 226
                    $context["rank"] = 0;
                    // line 227
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute($context["product"], "getRank", array(), "method")));
                    foreach ($context['_seq'] as $context["_key"] => $context["inx"]) {
                        // line 228
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t";
                        $context["rank"] = (($context["rank"] ?? $this->getContext($context, "rank")) + 1);
                        // line 229
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t<span>&#x2605;</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inx'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 231
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if ((($context["rank"] ?? $this->getContext($context, "rank")) < 5)) {
                        // line 232
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(($context["rank"] ?? $this->getContext($context, "rank")), 4));
                        foreach ($context['_seq'] as $context["_key"] => $context["inx2"]) {
                            // line 233
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t";
                            $context["rank"] = (($context["rank"] ?? $this->getContext($context, "rank")) + 1);
                            // line 234
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t<span>&#x2606;</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inx2'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 236
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 237
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetails col-xs-5 col-md-5'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>";
                    // line 240
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "getReviews", array(), "method"), "html", null, true);
                    echo " reviews</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t              \t</div>
\t\t\t\t                   \t\t";
                } else {
                    // line 248
                    echo "\t\t\t\t\t\t\t\t                <div class=\"row-fluid\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"carouselCards col-xs-12 col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"productThumbnails\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='prodThumbInside'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"productThumbnailsHeadings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>";
                    // line 253
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "getName", array(), "method"), "html", null, true);
                    echo "</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 255
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_information", array("farm" => $this->getAttribute($this->getAttribute(                    // line 256
$context["product"], "getFarm", array(), "method"), "getId", array(), "method"), "product" => $this->getAttribute(                    // line 257
$context["product"], "getId", array(), "method"), "presentation" => 1)), "html", null, true);
                    // line 258
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$";
                    // line 261
                    echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, $this->getAttribute($context["product"], "getPresentations", array(), "method")), "getPrice", array(), "method"), "html", null, true);
                    echo "</br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 262
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_homepage", array("name" => "onDevelopment"));
                    echo "\">Order</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetailsContainer row'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetails col-xs-5 col-xs-offset-1'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 267
                    echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, $this->getAttribute($context["product"], "getPresentations", array(), "method")), "getWeight", array(), "method"), "html", null, true);
                    echo "g/
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 268
                    echo twig_escape_filter($this->env, ($this->getAttribute(twig_first($this->env, $this->getAttribute($context["product"], "getPresentations", array(), "method")), "getWeight", array(), "method") * 0.04), "html", null, true);
                    echo "oz
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>";
                    // line 270
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($context["product"], "getPresentations", array(), "method")), "getRoast", array(), "method"), "getDescription", array(), "method"), "html", null, true);
                    echo " </p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div href=\"#\" class='productDetails  col-xs-5 col-md-5'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>";
                    // line 273
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($context["product"], "getPresentations", array(), "method")), "getGrind", array(), "method"), "getDescription", array(), "method"), "html", null, true);
                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 274
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_information", array("farm" => $this->getAttribute($this->getAttribute(                    // line 275
$context["product"], "getFarm", array(), "method"), "getId", array(), "method"), "product" => $this->getAttribute(                    // line 276
$context["product"], "getId", array(), "method"), "presentation" => 1)), "html", null, true);
                    // line 277
                    echo "\"><p>More info/options</p></a> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetailsContainer row'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetails col-xs-5 col-xs-offset-1'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 283
                    $context["rank"] = 0;
                    // line 284
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute($context["product"], "getRank", array(), "method")));
                    foreach ($context['_seq'] as $context["_key"] => $context["inx"]) {
                        // line 285
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t";
                        $context["rank"] = (($context["rank"] ?? $this->getContext($context, "rank")) + 1);
                        // line 286
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t<span>&#x2605;</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inx'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 288
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if ((($context["rank"] ?? $this->getContext($context, "rank")) < 5)) {
                        // line 289
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(($context["rank"] ?? $this->getContext($context, "rank")), 4));
                        foreach ($context['_seq'] as $context["_key"] => $context["inx2"]) {
                            // line 290
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t";
                            $context["rank"] = (($context["rank"] ?? $this->getContext($context, "rank")) + 1);
                            // line 291
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t<span>&#x2606;</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inx2'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 293
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 294
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetails col-xs-5 col-md-5'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>";
                    // line 297
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "getReviews", array(), "method"), "html", null, true);
                    echo " reviews</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t              \t</div>
\t\t\t\t\t                   \t";
                }
                // line 305
                echo "\t\t\t\t\t\t            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 306
            echo "\t\t\t\t\t\t            </div>
\t\t\t                \t</div>
\t\t\t\t                <a class=\"left carousel-control\" href=\"#farm_informationCarousel\" data-slide=\"prev\"></a>
\t\t\t\t                <a class=\"right carousel-control\" href=\"#farm_informationCarousel\" data-slide=\"next\"></a>
\t\t\t            \t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t";
        }
        // line 317
        echo "\t</main>
";
        
        $__internal_e91ba5a45ef8d9fd67f14df6d564a586f14a38da4d7c11ec9cc6a174eaf99a0f->leave($__internal_e91ba5a45ef8d9fd67f14df6d564a586f14a38da4d7c11ec9cc6a174eaf99a0f_prof);

    }

    public function getTemplateName()
    {
        return "PageBundle:Default:farm_information.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  774 => 317,  761 => 306,  747 => 305,  736 => 297,  731 => 294,  728 => 293,  721 => 291,  718 => 290,  713 => 289,  710 => 288,  703 => 286,  700 => 285,  695 => 284,  693 => 283,  685 => 277,  683 => 276,  682 => 275,  681 => 274,  677 => 273,  671 => 270,  666 => 268,  662 => 267,  654 => 262,  650 => 261,  645 => 258,  643 => 257,  642 => 256,  641 => 255,  636 => 253,  629 => 248,  618 => 240,  613 => 237,  610 => 236,  603 => 234,  600 => 233,  595 => 232,  592 => 231,  585 => 229,  582 => 228,  577 => 227,  575 => 226,  566 => 219,  564 => 218,  563 => 217,  562 => 216,  558 => 215,  552 => 212,  547 => 210,  543 => 209,  535 => 204,  531 => 203,  525 => 200,  522 => 199,  520 => 198,  519 => 197,  518 => 196,  513 => 194,  504 => 187,  502 => 186,  492 => 179,  487 => 176,  484 => 175,  477 => 173,  474 => 172,  469 => 171,  466 => 170,  459 => 168,  456 => 167,  451 => 166,  449 => 165,  440 => 158,  438 => 157,  437 => 156,  436 => 155,  432 => 154,  426 => 151,  421 => 149,  417 => 148,  409 => 143,  405 => 142,  399 => 139,  396 => 138,  394 => 137,  393 => 136,  392 => 135,  387 => 133,  380 => 128,  377 => 127,  370 => 124,  353 => 123,  349 => 121,  335 => 120,  329 => 118,  323 => 116,  320 => 115,  303 => 114,  299 => 112,  296 => 111,  293 => 110,  291 => 109,  287 => 108,  277 => 101,  273 => 99,  271 => 98,  260 => 90,  252 => 84,  239 => 82,  235 => 81,  230 => 79,  221 => 72,  212 => 70,  208 => 69,  203 => 67,  199 => 65,  190 => 63,  186 => 62,  181 => 60,  177 => 59,  171 => 58,  165 => 57,  160 => 55,  145 => 43,  139 => 40,  128 => 32,  120 => 27,  111 => 20,  105 => 19,  96 => 16,  91 => 14,  87 => 13,  82 => 11,  79 => 10,  73 => 9,  64 => 7,  60 => 6,  55 => 5,  49 => 4,  37 => 3,  11 => 1,);
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

{% block title%} Farm Information {% endblock %}
{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('/web/public/css/product.css')}}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('/web/public/css/farm_information.css') }}\" />
{% endblock %}
{% block javascripts %}
\t<script src=\"https://maps.googleapis.com/maps/api/js?key= AIzaSyA8iOI-wKQIfkncEFwGUHS3dsce-nlwsQ0&callback=loadMap\"></script>
\t<script src=\"{{ asset('/web/public/js/farm_information.js')}}\"></script>
\t<script>
\t\tvar lat = {{ farm.getLatitude() }}
\t\tvar lon = {{ farm.getLongitude() }}
\t</script>
    {{ parent() }}
{% endblock %}

{% block body %}
\t<center><h2>Farm Information</h2></center>
\t<section id='farmInfoSection'>
\t\t<div class='container-fluid'>
\t\t\t<div id='farmInfoContainer' class='row'>
\t\t\t\t<div id='farmInfoHeading' class='col-xs-12'>
\t\t\t\t\t<center>
\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t{{ farm.getName() }}
\t\t\t\t\t\t</h3>
\t\t\t\t\t</center>
\t\t\t\t</div>
\t\t\t\t<div id=\"farmPicContainer\" class='col-xs-12 col-md-offset-3 col-md-6 col-lg-offset-0 col-lg-6'>
\t\t\t\t\t<img src=\"{{ farm.getImage() }}\" id=\"farmPic\">
\t\t\t\t</div>
\t\t\t\t<div id='farmInfoDetailsContainer' class='col-md-12 col-lg-6'>
\t\t\t\t\t<div class='farmInfoCards col-lg-6 col-md-6'>
\t\t\t\t\t\t<div class='farmInfoIcons'>
\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon1.png\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t{{ template.getDescriptionTitle() }}
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t{{ farm.getDescription() }}
\t\t\t\t\t\t\t\t<div class='prodInfoIconHeadings'>
\t\t\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info\" data-toggle=\"collapse\" data-target=\"#cupMap\"><span class=\"glyphicon glyphicon-eye-open\"></span>Read story</button>
\t\t\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class='farmInfoCards col-lg-6 col-md-6'>
\t\t\t\t\t\t\t<div class='farmInfoIcons'>
\t\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon2.png\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h4>{{ template.getInformationTitle() }}</h4>
\t\t\t\t\t\t\t<p><span>Region: </span>: Central Valley</p>
\t\t\t\t\t\t\t<p><span>{{ template.getElevationTitle() }}</span>: {{ farm.getElevation() }} m.a.s.l.</p>
\t\t\t\t\t\t\t<p><span>{{ template.getHarvestTitle() }}</span>: {{ farm.getHarvest() }}</p>
\t\t\t\t\t\t\t<p><span>{{ template.getSpeciesTitle() }}</span>: Arabica</p>
\t\t\t\t\t\t\t<p><span>{{ template.getCultivarTitle() }}</span>:
\t\t\t\t\t\t\t<div class= \"col-md-12 col-md-offset-2\">
\t\t\t\t\t\t\t\t{% for cultivar in farm.getCultivars() %}
\t\t\t\t\t\t\t\t\t{{cultivar.getDescription()}} </br>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p><span>{{ template.getCertificationsTitle() }}</span>:
\t\t\t\t\t\t\t<div class= \"col-md-12 col-md-offset-2\">
\t\t\t\t\t\t\t\t{% for certification in farm.getCertifications() %}
\t\t\t\t\t\t\t\t\t{{certification.getDescription()}} </br>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class='farmInfoCards col-lg-6 col-md-6'>
\t\t\t\t\t\t\t<div class='farmInfoIcons'>
\t\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon3.png\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h4>{{ template.getAwardsTitle() }}</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t{% for award in farm.getFarmAwards() %}
\t\t\t\t\t\t\t\t\t{{ award.getAward().getDescription() }},{{ award.getPlace() }} place,{{ award.getYear() }}</br>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class='farmInfoCards col-lg-6 col-md-6'>
\t\t\t\t\t\t\t<div class='farmInfoIcons'>
\t\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon4.png\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h4>{{ template.getLocationTitle() }}</h4>
\t\t\t\t\t\t\t<div id=\"farm_map\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<div class='clearfix'></div>
\t\t{% if farm.getProducts()|length > 0 %}
\t\t<section>
\t\t\t<div id='carouselHeading' class='col-xs-12'>
\t\t\t\t<center><h3>{{ template.getProductsTitle() }}</h3></center>
\t\t\t</div>
\t\t\t<div class='clearfix'></div>
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"span12\">
\t\t\t    \t    <div class=\"well\">
\t\t\t    \t    {% set size = farm.getProducts()|length / 3 %} 
\t\t\t    \t    {% if size < 1 %}
\t\t\t    \t    \t{% set size = 1%}
\t\t\t    \t    {% endif%}
                \t\t\t<div id=\"farm_informationCarousel\" class=\"carousel slide\" data-interval=\"false\">
\t\t\t\t                <ol class=\"carousel-indicators\">
\t\t\t\t                {% for index in 1..size|number_format(0) %}
\t\t\t\t                \t{% if loop.index < 2 %}
\t\t\t\t                    \t<li data-target=\"#farm_informationCarousel\" data-slide-to=\"{{ loop.index }}\" class=\"active\"></li>
\t\t\t\t                    {% else %}
\t\t\t\t                    \t<li data-target=\"#farm_informationCarousel\" data-slide-to=\"{{ loop.index }}\" class=\"\"></li>
\t\t\t\t                \t{% endif %}
\t\t\t\t                {% endfor %}
\t\t\t\t                </ol>\t                
\t\t\t\t                <div class=\"carousel-inner\" role=\"listbox\">
\t\t\t\t                   \t{% for product in farm.getProducts() %}
\t\t\t\t\t\t\t\t        {% if loop.index  < 2 %} 
\t\t\t\t\t\t\t\t    \t    <div class=\"item active\">
\t\t\t\t\t\t\t\t    \t{% endif %}
\t\t\t\t                   \t\t{% if loop.index <  4 %}
\t\t\t\t\t\t\t\t                <div class=\"row-fluid\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"carouselCards col-xs-12 col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"productThumbnails\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='prodThumbInside'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"productThumbnailsHeadings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>{{ product.getName()}}</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('product_information', {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'farm': product.getFarm().getId(),
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'product': product.getId(),
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'presentation': 1 }) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{product.getImage()}}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\${{ product.getPresentations()|first.getPrice() }}</br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('page_homepage', {'name':'onDevelopment' }) }}\">Order</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetailsContainer row'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetails col-xs-5 col-xs-offset-1'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ product.getPresentations()|first.getWeight() }}g/
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ product.getPresentations()|first.getWeight() *0.04 }}oz
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>{{ product.getPresentations()|first.getRoast().getDescription() }}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div href=\"#\" class='productDetails  col-xs-5 col-md-5'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>{{ product.getPresentations()|first.getGrind().getDescription() }}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('product_information', {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'farm': product.getFarm().getId(),
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'product': product.getId(),
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'presentation': 1 }) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>More info/options</p></a> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetailsContainer row'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetails col-xs-5 col-xs-offset-1'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% set rank= 0 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t {% for inx in 1..product.getRank() %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t{% set rank = rank+1 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t<span>&#x2605;</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t {% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if rank < 5 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for inx2 in rank..4 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t{% set rank = rank+1 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t<span>&#x2606;</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetails col-xs-5 col-md-5'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>{{product.getReviews()}} reviews</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t              \t</div>
\t\t\t\t                   \t\t{% elseif loop.index is divisible by(4) %}
\t\t\t\t\t\t\t\t            </div>
\t\t\t\t                   \t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t                <div class=\"row-fluid\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"carouselCards col-xs-12 col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"productThumbnails\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='prodThumbInside'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"productThumbnailsHeadings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>{{ product.getName()}}</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('product_information', {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'farm': product.getFarm().getId(),
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'product': product.getId(),
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'presentation': 1 }) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{product.getImage()}}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\${{ product.getPresentations()|first.getPrice() }}</br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('page_homepage', {'name':'onDevelopment' }) }}\">Order</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetailsContainer row'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetails col-xs-5 col-xs-offset-1'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ product.getPresentations()|first.getWeight() }}g/
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ product.getPresentations()|first.getWeight() *0.04 }}oz
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>{{ product.getPresentations()|first.getRoast().getDescription() }}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div href=\"#\" class='productDetails  col-xs-5 col-md-5'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>{{ product.getPresentations()|first.getGrind().getDescription() }}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('product_information', {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'farm': product.getFarm().getId(),
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'product': product.getId(),
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'presentation': 1 }) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>More info/options</p></a> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetailsContainer row'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetails col-xs-5 col-xs-offset-1'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% set rank= 0 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t {% for inx in 1..product.getRank() %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t{% set rank = rank+1 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t<span>&#x2605;</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t {% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if rank < 5 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for inx2 in rank..4 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t{% set rank = rank+1 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t<span>&#x2606;</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetails col-xs-5 col-md-5'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>{{product.getReviews()}} reviews</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t              \t</div>
\t\t\t\t                   \t\t{% else %}
\t\t\t\t\t\t\t\t                <div class=\"row-fluid\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"carouselCards col-xs-12 col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"productThumbnails\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='prodThumbInside'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"productThumbnailsHeadings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>{{ product.getName()}}</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('product_information', {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'farm': product.getFarm().getId(),
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'product': product.getId(),
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'presentation': 1 }) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\${{ product.getPresentations()|first.getPrice() }}</br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('page_homepage', {'name':'onDevelopment' }) }}\">Order</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetailsContainer row'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetails col-xs-5 col-xs-offset-1'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ product.getPresentations()|first.getWeight() }}g/
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ product.getPresentations()|first.getWeight() *0.04 }}oz
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>{{ product.getPresentations()|first.getRoast().getDescription() }} </p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div href=\"#\" class='productDetails  col-xs-5 col-md-5'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>{{ product.getPresentations()|first.getGrind().getDescription() }}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('product_information', {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'farm': product.getFarm().getId(),
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'product': product.getId(),
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'presentation': 1 }) }}\"><p>More info/options</p></a> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetailsContainer row'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetails col-xs-5 col-xs-offset-1'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% set rank= 0 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t {% for inx in 1..product.getRank() %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t{% set rank = rank+1 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t<span>&#x2605;</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t {% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if rank < 5 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for inx2 in rank..4 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t{% set rank = rank+1 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t<span>&#x2606;</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetails col-xs-5 col-md-5'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>{{product.getReviews()}} reviews</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t              \t</div>
\t\t\t\t\t                   \t{% endif %}
\t\t\t\t\t\t            {% endfor %}
\t\t\t\t\t\t            </div>
\t\t\t                \t</div>
\t\t\t\t                <a class=\"left carousel-control\" href=\"#farm_informationCarousel\" data-slide=\"prev\"></a>
\t\t\t\t                <a class=\"right carousel-control\" href=\"#farm_informationCarousel\" data-slide=\"next\"></a>
\t\t\t            \t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t{% endif %}
\t</main>
{% endblock %}", "PageBundle:Default:farm_information.html.twig", "/home/crgourme/public_html/src/PageBundle/Resources/views/Default/farm_information.html.twig");
    }
}
