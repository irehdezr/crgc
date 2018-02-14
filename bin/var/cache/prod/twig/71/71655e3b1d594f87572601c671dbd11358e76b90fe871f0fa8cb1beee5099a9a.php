<?php

/* FarmBundle:Default:farm_information.html.twig */
class __TwigTemplate_4032335a2d99753ae0389b622c3278dc8fcbfd6f3c3f37a26aaf307ed4ab142a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "FarmBundle:Default:farm_information.html.twig", 1);
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
        $__internal_2f7b7a7288948f35509393cd8b98dc04969df605d4d3406fcc16266ddaf085c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f7b7a7288948f35509393cd8b98dc04969df605d4d3406fcc16266ddaf085c3->enter($__internal_2f7b7a7288948f35509393cd8b98dc04969df605d4d3406fcc16266ddaf085c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FarmBundle:Default:farm_information.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f7b7a7288948f35509393cd8b98dc04969df605d4d3406fcc16266ddaf085c3->leave($__internal_2f7b7a7288948f35509393cd8b98dc04969df605d4d3406fcc16266ddaf085c3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0528dd17e0290f6acf8de1bd7ac08f2405761cc31375642aed5b9d5b419da886 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0528dd17e0290f6acf8de1bd7ac08f2405761cc31375642aed5b9d5b419da886->enter($__internal_0528dd17e0290f6acf8de1bd7ac08f2405761cc31375642aed5b9d5b419da886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Farm Information ";
        
        $__internal_0528dd17e0290f6acf8de1bd7ac08f2405761cc31375642aed5b9d5b419da886->leave($__internal_0528dd17e0290f6acf8de1bd7ac08f2405761cc31375642aed5b9d5b419da886_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8da759a04d58ea3e0423aeef593d2e7fb2f0799beaeb9d99f989309daca307b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8da759a04d58ea3e0423aeef593d2e7fb2f0799beaeb9d99f989309daca307b3->enter($__internal_8da759a04d58ea3e0423aeef593d2e7fb2f0799beaeb9d99f989309daca307b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/css/farm_information.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_8da759a04d58ea3e0423aeef593d2e7fb2f0799beaeb9d99f989309daca307b3->leave($__internal_8da759a04d58ea3e0423aeef593d2e7fb2f0799beaeb9d99f989309daca307b3_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_4616d7dd658c32eb3783f982d63377235a5439fd9993582142d61faf77e9afc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4616d7dd658c32eb3783f982d63377235a5439fd9993582142d61faf77e9afc0->enter($__internal_4616d7dd658c32eb3783f982d63377235a5439fd9993582142d61faf77e9afc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<main>
\t<section id='farmInfoSection'>
\t\t<center>
\t\t\t<h2>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getPageTitle", array(), "method"), "html", null, true);
        echo "</h2>
\t\t</center>
\t\t<div class='container-fluid'>
\t\t\t<div id='farmInfoContainer' class='row'>
\t\t\t\t<div id='farmInfoHeading' class='col-xs-12'>
\t\t\t\t\t<center>
\t\t\t\t\t\t<h3>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["farm"] ?? $this->getContext($context, "farm")), "getName", array(), "method"), "html", null, true);
        echo "</h3>
\t\t\t\t\t</center>
\t\t\t\t</div>
\t\t\t\t<div id=\"farmPicContainer\" class='col-xs-12 col-sm-4'>
\t\t\t\t\t<img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute(($context["farm"] ?? $this->getContext($context, "farm")), "getImage", array(), "method"), "html", null, true);
        echo "\" id=\"farmPic\">
\t\t\t\t\t<div class='farmInfoCards'>
\t\t\t\t\t\t<div class='farmInfoIcons'>
\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon1.svg\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getDescriptionTitle", array(), "method"), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t<div class='col-xs-12'>
\t\t\t\t\t\t\t";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["farm"] ?? $this->getContext($context, "farm")), "getDescription", array(), "method"), "html", null, true);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"prodInfoIconHeadings\">
\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info\">
\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-search\"></span>
\t\t\t\t\t\t\t\t\t";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getStoryBtnTitle", array(), "method"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div id='farmInfoDetailsContainer' class='col-xs-12 col-sm-4'>
\t\t\t\t\t<div class='farmInfoCards'>
\t\t\t\t\t\t<div class='farmInfoIcons'>
\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon2.svg\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getInformationTitle", array(), "method"), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t<div class='col-xs-12 col-md-6 col-lg-6'>
\t\t\t\t\t\t\t<span>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getRegionTitle", array(), "method"), "html", null, true);
        echo ": </span>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["farm"] ?? $this->getContext($context, "farm")), "getRegion", array(), "method"), "getName", array(), "method"), "html", null, true);
        echo "<br>
\t\t\t\t\t\t\t<span>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getElevationTitle", array(), "method"), "html", null, true);
        echo ": </span>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["farm"] ?? $this->getContext($context, "farm")), "getElevation", array(), "method"), "html", null, true);
        echo "m.a.s.l.<br>
\t\t\t\t\t\t\t<span>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getHarvestTitle", array(), "method"), "html", null, true);
        echo ": </span>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["farm"] ?? $this->getContext($context, "farm")), "getHarvest", array(), "method"), "html", null, true);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class='col-xs-12 col-md-6 col-lg-6'>
\t\t\t\t\t\t\t<span>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getSpeciesTitle", array(), "method"), "html", null, true);
        echo ": </span>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getSpeciesInfo", array(), "method"), "html", null, true);
        echo "<br>
\t\t\t\t\t\t\t<span>";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getCultivarTitle", array(), "method"), "html", null, true);
        echo ": </span>
\t\t\t\t\t\t\t";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["farm"] ?? $this->getContext($context, "farm")), "getCultivars", array(), "method"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["cultivar"]) {
            // line 57
            echo "\t\t\t\t\t\t\t\t";
            if ($this->getAttribute($context["loop"], "first", array())) {
                // line 58
                echo "\t\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($context["cultivar"], "getDescription", array(), "method"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t";
            } else {
                // line 60
                echo "\t\t\t\t\t\t\t\t\t, ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["cultivar"], "getDescription", array(), "method"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t";
            }
            // line 62
            echo "\t\t\t\t\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cultivar'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<span>";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getCertificationsTitle", array(), "method"), "html", null, true);
        echo ": </span>
\t\t\t\t\t\t\t";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["farm"] ?? $this->getContext($context, "farm")), "getCertifications", array(), "method"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["certification"]) {
            // line 66
            echo "\t\t\t\t\t\t\t\t";
            if ($this->getAttribute($context["loop"], "first", array())) {
                // line 67
                echo "\t\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($context["certification"], "getDescription", array(), "method"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t";
            } else {
                // line 69
                echo "\t\t\t\t\t\t\t\t\t, ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["certification"], "getDescription", array(), "method"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t";
            }
            // line 71
            echo "\t\t\t\t\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['certification'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class='farmInfoCards col-xs-12'>
\t\t\t\t\t\t<div class='farmInfoIcons'>
\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon3.svg\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4>";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getAwardsTitle", array(), "method"), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["farm"] ?? $this->getContext($context, "farm")), "getFarmAwards", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["award"]) {
            // line 81
            echo "\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t-";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["award"], "getAward", array(), "method"), "getDescription", array(), "method"), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["award"], "getPlace", array(), "method"), "html", null, true);
            echo " place, ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["award"], "getYear", array(), "method"), "html", null, true);
            echo "</br>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['award'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class='farmInfoCards col-xs-12'>
\t\t\t\t\t\t<div class='farmInfoIcons'>
\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon4.svg\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4>";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getLocationTitle", array(), "method"), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t<div id=\"farm_map\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>\t\t
\t\t\t\t";
        // line 94
        if ((twig_length_filter($this->env, $this->getAttribute(($context["farm"] ?? $this->getContext($context, "farm")), "getProducts", array(), "method")) > 0)) {
            // line 95
            echo "\t\t\t\t<div class='col-xs-12 col-sm-4'>
\t\t\t\t\t<div class='farmInfoIcons'>
\t\t\t\t\t\t<img src=\"/web/public/imgs/icon7.svg\">
\t\t\t\t\t</div>
\t\t\t\t\t<div id='carouselHeading'>
\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t<h4>";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getProductsTitle", array(), "method"), "html", null, true);
            echo "</h4>
\t\t\t\t\t\t</center>
\t\t\t\t\t</div>
\t\t\t\t\t<div class='clearfix'></div>
\t\t\t\t\t\t<div class=\"container col-xs-12\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"span12\">
\t\t\t\t\t\t    \t    <div class=\"well\"> 
\t\t\t\t\t\t                <div id=\"myCarousel\" class=\"carousel slide\" data-interval=\"false\">
\t\t\t\t\t\t\t                <div class=\"carousel-inner\">
\t\t\t\t                   \t\t\t\t";
            // line 111
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
                echo "\t\t
\t\t\t\t\t\t\t\t                \t";
                // line 112
                if ($this->getAttribute($context["loop"], "first", array())) {
                    // line 113
                    echo "\t\t\t\t\t\t\t\t                \t\t<div class=\"item active\">
\t\t\t\t\t\t\t\t                \t";
                } else {
                    // line 115
                    echo "\t\t\t\t\t\t\t\t                \t\t<div class=\"item\">
\t\t\t\t\t\t\t\t                \t";
                }
                // line 117
                echo "\t\t\t\t\t\t\t\t                \t<div class=\"row-fluid\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"carouselCards\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"productThumbnails\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"prodThumbInside\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"productThumbnailsHeadings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>";
                // line 122
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "getName", array(), "method"), "html", null, true);
                echo "</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 124
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_information", array("farm" => $this->getAttribute($this->getAttribute(                // line 125
$context["product"], "getFarm", array(), "method"), "getId", array(), "method"), "product" => $this->getAttribute(                // line 126
$context["product"], "getId", array(), "method"), "presentation" => $this->getAttribute(twig_first($this->env, $this->getAttribute(                // line 127
$context["product"], "getPresentations", array(), "method")), "getId", array(), "method"))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 128
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "getImage", array(), "method"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">\$";
                // line 130
                echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, $this->getAttribute($context["product"], "getPresentations", array(), "method")), "getPrice", array(), "method"), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"price orderPresentation\" data-presentation-id=\"";
                // line 131
                echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, $this->getAttribute($context["product"], "getPresentations", array(), "method")), "getId", array(), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getOrderTitle", array(), "method"), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetailsContainer row'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetails col-xs-5 col-xs-offset-1'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 136
                echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, $this->getAttribute($context["product"], "getPresentations", array(), "method")), "getWeight", array(), "method"), "html", null, true);
                echo "g/
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 137
                echo twig_escape_filter($this->env, ($this->getAttribute(twig_first($this->env, $this->getAttribute($context["product"], "getPresentations", array(), "method")), "getWeight", array(), "method") * 0.04), "html", null, true);
                echo "oz
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>";
                // line 139
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($context["product"], "getPresentations", array(), "method")), "getRoast", array(), "method"), "getDescription", array(), "method"), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div href=\"#\" class='productDetails  col-xs-5 col-md-5'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>";
                // line 142
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($context["product"], "getPresentations", array(), "method")), "getGrind", array(), "method"), "getDescription", array(), "method"), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 143
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_information", array("farm" => $this->getAttribute($this->getAttribute(                // line 144
$context["product"], "getFarm", array(), "method"), "getId", array(), "method"), "product" => $this->getAttribute(                // line 145
$context["product"], "getId", array(), "method"), "presentation" => $this->getAttribute(twig_first($this->env, $this->getAttribute(                // line 146
$context["product"], "getPresentations", array(), "method")), "getId", array(), "method"))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>";
                // line 147
                echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getMoreInfoTitle", array(), "method"), "html", null, true);
                echo "</p></a> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetailsContainer row'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetails col-xs-5 col-xs-offset-1'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 153
                $context["rank"] = 0;
                // line 154
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute($context["product"], "getRank", array(), "method")));
                foreach ($context['_seq'] as $context["_key"] => $context["inx"]) {
                    // line 155
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t";
                    $context["rank"] = (($context["rank"] ?? $this->getContext($context, "rank")) + 1);
                    // line 156
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t<span>&#x2605;</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inx'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 158
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                if ((($context["rank"] ?? $this->getContext($context, "rank")) < 5)) {
                    // line 159
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(($context["rank"] ?? $this->getContext($context, "rank")), 4));
                    foreach ($context['_seq'] as $context["_key"] => $context["inx2"]) {
                        // line 160
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t";
                        $context["rank"] = (($context["rank"] ?? $this->getContext($context, "rank")) + 1);
                        // line 161
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t<span>&#x2606;</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inx2'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 163
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 164
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetails col-xs-5 col-md-5'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>";
                // line 167
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "getReviews", array(), "method"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getReviewsTitle", array(), "method"), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t                \t</div>
\t\t\t\t\t\t\t                \t</div>
\t\t\t\t\t\t\t                \t";
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
            // line 176
            echo "\t\t\t\t\t\t\t                <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\"></a>
\t\t\t\t\t\t\t                <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\"></a>
\t\t\t\t\t\t                </div>
\t\t\t\t\t\t            </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class='farmInfoCards col-xs-offset-2 col-xs-8'>
\t\t\t\t\t\t\t<div class=\"prodInfoIconHeadings\">
\t\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t\t<button id='contactButton' type=\"button\" class=\"btn btn-info\">
\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-envelope\"></span>
\t\t\t\t\t\t\t\t\t\t";
            // line 188
            echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getContactBtnTitle", array(), "method"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        // line 197
        echo "\t\t</section>
</main>
";
        
        $__internal_4616d7dd658c32eb3783f982d63377235a5439fd9993582142d61faf77e9afc0->leave($__internal_4616d7dd658c32eb3783f982d63377235a5439fd9993582142d61faf77e9afc0_prof);

    }

    // line 201
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3fe7d4d9c97c6fdaeb44365fbb7b1b9fbe81dd5b9a4e789fa69499e3915d37b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fe7d4d9c97c6fdaeb44365fbb7b1b9fbe81dd5b9a4e789fa69499e3915d37b4->enter($__internal_3fe7d4d9c97c6fdaeb44365fbb7b1b9fbe81dd5b9a4e789fa69499e3915d37b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 202
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyA8iOI-wKQIfkncEFwGUHS3dsce-nlwsQ0\" type=\"text/javascript\"></script>
\t<script>
\t\tvar lat = ";
        // line 205
        echo twig_escape_filter($this->env, $this->getAttribute(($context["farm"] ?? $this->getContext($context, "farm")), "getLatitude", array(), "method"), "html", null, true);
        echo "
\t\tvar lon = ";
        // line 206
        echo twig_escape_filter($this->env, $this->getAttribute(($context["farm"] ?? $this->getContext($context, "farm")), "getLongitude", array(), "method"), "html", null, true);
        echo "
\t</script>\t
\t<script src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/js/farm_information.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_3fe7d4d9c97c6fdaeb44365fbb7b1b9fbe81dd5b9a4e789fa69499e3915d37b4->leave($__internal_3fe7d4d9c97c6fdaeb44365fbb7b1b9fbe81dd5b9a4e789fa69499e3915d37b4_prof);

    }

    public function getTemplateName()
    {
        return "FarmBundle:Default:farm_information.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  563 => 208,  558 => 206,  554 => 205,  547 => 202,  541 => 201,  532 => 197,  520 => 188,  506 => 176,  481 => 167,  476 => 164,  473 => 163,  466 => 161,  463 => 160,  458 => 159,  455 => 158,  448 => 156,  445 => 155,  440 => 154,  438 => 153,  429 => 147,  425 => 146,  424 => 145,  423 => 144,  422 => 143,  418 => 142,  412 => 139,  407 => 137,  403 => 136,  393 => 131,  389 => 130,  384 => 128,  380 => 127,  379 => 126,  378 => 125,  377 => 124,  372 => 122,  365 => 117,  361 => 115,  357 => 113,  355 => 112,  336 => 111,  323 => 101,  315 => 95,  313 => 94,  306 => 90,  299 => 85,  286 => 82,  283 => 81,  279 => 80,  275 => 79,  266 => 72,  252 => 71,  246 => 69,  240 => 67,  237 => 66,  220 => 65,  216 => 64,  213 => 63,  199 => 62,  193 => 60,  187 => 58,  184 => 57,  167 => 56,  163 => 55,  157 => 54,  149 => 51,  143 => 50,  137 => 49,  132 => 47,  118 => 36,  109 => 30,  104 => 28,  96 => 23,  89 => 19,  80 => 13,  75 => 10,  69 => 9,  60 => 6,  55 => 5,  49 => 4,  37 => 3,  11 => 1,);
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
    <link rel=\"stylesheet\" href=\"{{ asset('/web/public/css/farm_information.css') }}\" />
{% endblock %}

{% block body %}
<main>
\t<section id='farmInfoSection'>
\t\t<center>
\t\t\t<h2>{{ template.getPageTitle() }}</h2>
\t\t</center>
\t\t<div class='container-fluid'>
\t\t\t<div id='farmInfoContainer' class='row'>
\t\t\t\t<div id='farmInfoHeading' class='col-xs-12'>
\t\t\t\t\t<center>
\t\t\t\t\t\t<h3>{{ farm.getName() }}</h3>
\t\t\t\t\t</center>
\t\t\t\t</div>
\t\t\t\t<div id=\"farmPicContainer\" class='col-xs-12 col-sm-4'>
\t\t\t\t\t<img src=\"{{ farm.getImage() }}\" id=\"farmPic\">
\t\t\t\t\t<div class='farmInfoCards'>
\t\t\t\t\t\t<div class='farmInfoIcons'>
\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon1.svg\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4>{{ template.getDescriptionTitle() }}</h4>
\t\t\t\t\t\t<div class='col-xs-12'>
\t\t\t\t\t\t\t{{ farm.getDescription() }}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"prodInfoIconHeadings\">
\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info\">
\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-search\"></span>
\t\t\t\t\t\t\t\t\t{{ template.getStoryBtnTitle() }}
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div id='farmInfoDetailsContainer' class='col-xs-12 col-sm-4'>
\t\t\t\t\t<div class='farmInfoCards'>
\t\t\t\t\t\t<div class='farmInfoIcons'>
\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon2.svg\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4>{{ template.getInformationTitle() }}</h4>
\t\t\t\t\t\t<div class='col-xs-12 col-md-6 col-lg-6'>
\t\t\t\t\t\t\t<span>{{ template.getRegionTitle() }}: </span>{{ farm.getRegion().getName() }}<br>
\t\t\t\t\t\t\t<span>{{ template.getElevationTitle() }}: </span>{{ farm.getElevation() }}m.a.s.l.<br>
\t\t\t\t\t\t\t<span>{{ template.getHarvestTitle() }}: </span>{{ farm.getHarvest() }}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class='col-xs-12 col-md-6 col-lg-6'>
\t\t\t\t\t\t\t<span>{{ template.getSpeciesTitle() }}: </span>{{ template.getSpeciesInfo() }}<br>
\t\t\t\t\t\t\t<span>{{ template.getCultivarTitle() }}: </span>
\t\t\t\t\t\t\t{% for cultivar in farm.getCultivars() %}
\t\t\t\t\t\t\t\t{% if loop.first %}
\t\t\t\t\t\t\t\t\t{{ cultivar.getDescription() }}
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t, {{ cultivar.getDescription() }}
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<span>{{ template.getCertificationsTitle() }}: </span>
\t\t\t\t\t\t\t{% for certification in farm.getCertifications() %}
\t\t\t\t\t\t\t\t{% if loop.first %}
\t\t\t\t\t\t\t\t\t{{ certification.getDescription() }}
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t, {{ certification.getDescription() }}
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class='farmInfoCards col-xs-12'>
\t\t\t\t\t\t<div class='farmInfoIcons'>
\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon3.svg\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4>{{ template.getAwardsTitle() }}</h4>
\t\t\t\t\t\t{% for award in farm.getFarmAwards() %}
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t-{{award.getAward().getDescription()}}, {{award.getPlace()}} place, {{award.getYear()}}</br>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</div>
\t\t\t\t\t<div class='farmInfoCards col-xs-12'>
\t\t\t\t\t\t<div class='farmInfoIcons'>
\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon4.svg\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4>{{ template.getLocationTitle() }}</h4>
\t\t\t\t\t\t<div id=\"farm_map\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>\t\t
\t\t\t\t{% if farm.getProducts()|length > 0 %}
\t\t\t\t<div class='col-xs-12 col-sm-4'>
\t\t\t\t\t<div class='farmInfoIcons'>
\t\t\t\t\t\t<img src=\"/web/public/imgs/icon7.svg\">
\t\t\t\t\t</div>
\t\t\t\t\t<div id='carouselHeading'>
\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t<h4>{{ template.getProductsTitle() }}</h4>
\t\t\t\t\t\t</center>
\t\t\t\t\t</div>
\t\t\t\t\t<div class='clearfix'></div>
\t\t\t\t\t\t<div class=\"container col-xs-12\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"span12\">
\t\t\t\t\t\t    \t    <div class=\"well\"> 
\t\t\t\t\t\t                <div id=\"myCarousel\" class=\"carousel slide\" data-interval=\"false\">
\t\t\t\t\t\t\t                <div class=\"carousel-inner\">
\t\t\t\t                   \t\t\t\t{% for product in farm.getProducts() %}\t\t
\t\t\t\t\t\t\t\t                \t{% if loop.first %}
\t\t\t\t\t\t\t\t                \t\t<div class=\"item active\">
\t\t\t\t\t\t\t\t                \t{% else %}
\t\t\t\t\t\t\t\t                \t\t<div class=\"item\">
\t\t\t\t\t\t\t\t                \t{% endif %}
\t\t\t\t\t\t\t\t                \t<div class=\"row-fluid\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"carouselCards\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"productThumbnails\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"prodThumbInside\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"productThumbnailsHeadings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>{{ product.getName() }}</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('product_information', {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'farm': product.getFarm().getId(),
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'product': product.getId(),
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'presentation': product.getPresentations()|first.getId()  }) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{product.getImage()}}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">\${{ product.getPresentations()|first.getPrice() }}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"price orderPresentation\" data-presentation-id=\"{{ product.getPresentations()|first.getId() }}\">{{ template.getOrderTitle() }}</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'presentation': product.getPresentations()|first.getId() }) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>{{ template.getMoreInfoTitle() }}</p></a> 
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>{{product.getReviews()}} {{ template.getReviewsTitle() }}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t                \t</div>
\t\t\t\t\t\t\t                \t</div>
\t\t\t\t\t\t\t                \t{% endfor%}
\t\t\t\t\t\t\t                <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\"></a>
\t\t\t\t\t\t\t                <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\"></a>
\t\t\t\t\t\t                </div>
\t\t\t\t\t\t            </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class='farmInfoCards col-xs-offset-2 col-xs-8'>
\t\t\t\t\t\t\t<div class=\"prodInfoIconHeadings\">
\t\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t\t<button id='contactButton' type=\"button\" class=\"btn btn-info\">
\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-envelope\"></span>
\t\t\t\t\t\t\t\t\t\t{{ template.getContactBtnTitle() }}
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t{% endif %}
\t\t</section>
</main>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyA8iOI-wKQIfkncEFwGUHS3dsce-nlwsQ0\" type=\"text/javascript\"></script>
\t<script>
\t\tvar lat = {{ farm.getLatitude() }}
\t\tvar lon = {{ farm.getLongitude() }}
\t</script>\t
\t<script src=\"{{ asset('/web/public/js/farm_information.js')}}\"></script>
{% endblock %}", "FarmBundle:Default:farm_information.html.twig", "C:\\xampp\\htdocs\\src\\FarmBundle/Resources/views/Default/farm_information.html.twig");
    }
}
