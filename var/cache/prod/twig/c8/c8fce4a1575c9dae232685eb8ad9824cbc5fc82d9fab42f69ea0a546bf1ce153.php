<?php

/* ProductBundle:Default:product_information.html.twig */
class __TwigTemplate_aa2356d0372b1464cb2bb6a4de0f1ef463aa9634706a5c9bcdee6c5bef9ce5b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "ProductBundle:Default:product_information.html.twig", 1);
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
        $__internal_77dba6b2c989af0fe227add8bc28954647ab49b30df1472b368cba8a18d9da20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77dba6b2c989af0fe227add8bc28954647ab49b30df1472b368cba8a18d9da20->enter($__internal_77dba6b2c989af0fe227add8bc28954647ab49b30df1472b368cba8a18d9da20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProductBundle:Default:product_information.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77dba6b2c989af0fe227add8bc28954647ab49b30df1472b368cba8a18d9da20->leave($__internal_77dba6b2c989af0fe227add8bc28954647ab49b30df1472b368cba8a18d9da20_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_30df42c4f18818065fc423bf8282a4fa0d66d58000f512c6e3f2b394900e16f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30df42c4f18818065fc423bf8282a4fa0d66d58000f512c6e3f2b394900e16f0->enter($__internal_30df42c4f18818065fc423bf8282a4fa0d66d58000f512c6e3f2b394900e16f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "\tProduct Information
";
        
        $__internal_30df42c4f18818065fc423bf8282a4fa0d66d58000f512c6e3f2b394900e16f0->leave($__internal_30df42c4f18818065fc423bf8282a4fa0d66d58000f512c6e3f2b394900e16f0_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a5040975b0a4483bc40bd326e5257876e1deb6fe5f45869ebc1212010666ee0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5040975b0a4483bc40bd326e5257876e1deb6fe5f45869ebc1212010666ee0e->enter($__internal_a5040975b0a4483bc40bd326e5257876e1deb6fe5f45869ebc1212010666ee0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/product_information.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_a5040975b0a4483bc40bd326e5257876e1deb6fe5f45869ebc1212010666ee0e->leave($__internal_a5040975b0a4483bc40bd326e5257876e1deb6fe5f45869ebc1212010666ee0e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d4e1b7810a068e5021e6df37d1523b36699566befbd9e4421e79e6fcf28a9e84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4e1b7810a068e5021e6df37d1523b36699566befbd9e4421e79e6fcf28a9e84->enter($__internal_d4e1b7810a068e5021e6df37d1523b36699566befbd9e4421e79e6fcf28a9e84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "\t<section>
\t\t<div class='pageTitle'>
\t\t\t<center>
\t\t\t\t<h2>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getPageTitle", array(), "method"), "html", null, true);
        echo "</h2>
\t\t\t</center>
\t\t</div>
\t\t<section>
\t\t\t<div id='prodInfoWidth'>
\t\t\t\t<div id='prodInfoSection' class='col-xs-offset-1 col-xs-10 col-md-offset-3 col-md-6'>
\t\t\t\t\t<div class=\"carousel-inner\" role=\"listbox\">
\t\t\t\t\t\t<div class= \"item active\" id=\"product\" data-product-id=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "getId", array(), "method"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<div id='carouselHeading' >
\t\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t<span id=\"productName\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "getName", array(), "method"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row-fluid\">
\t\t\t\t\t\t\t\t<div class=\"carouselCards col-xs-12 col-md-offset-2 col-md-8\">
\t\t\t\t\t\t\t\t\t<div class=\"productThumbnails\">
\t\t\t\t\t\t\t\t\t\t<div class='prodThumbInside'>
\t\t\t\t\t\t\t\t\t\t\t<img class='prodThumbImgs' src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "getImage", array(), "method"), "html", null, true);
        echo " \">\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 41
        if ((twig_length_filter($this->env, $this->getAttribute(($context["farm"] ?? $this->getContext($context, "farm")), "getProducts", array())) > 1)) {
            // line 42
            echo "\t\t\t\t\t\t<a class=\"left carousel-control\" href=\"\"></a>
\t\t\t\t\t\t<a class=\"right carousel-control\" href=\"\"></a>
\t\t\t\t\t";
        }
        // line 45
        echo "\t\t\t\t</div>
\t\t\t\t<div id='prodInfoCarouselContainer2' class='col-xs-offset-1 col-xs-10 col-md-offset-3 col-md-6' data-spy=\"affix\" data-offset-top=\"480\">
\t\t\t\t\t<div class=\"container col-xs-12\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<p class='prodInfoIconHeadOrder col-xs-offset-4 col-xs-4'>
\t\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t\t<p class='price'>
\t\t\t\t\t\t\t\t\t\t\$<span class=\"presentation-price\"></span>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class='stickyRow row'>
\t\t\t\t\t\t\t<div class='ratingCont col-xs-4'>
\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "getRank", array(), "method"), "html", null, true);
        echo "/5<span>&#x2605;</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class='stickyRow orderPresentation col-xs-4'>
\t\t\t\t\t\t\t\t<img src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imgs/icon5.svg"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class='reviews col-xs-4'>
\t\t\t\t\t\t\t\t<a href=\"#product_Reviews\">
\t\t\t\t\t\t\t\t\t";
        // line 68
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "getReviews", array(), "method")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getReviewsTitle", array(), "method"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class='order row'>
\t\t\t\t\t\t\t<div class='col-xs-offset-4 col-xs-4'>
\t\t\t\t\t\t\t\t<a id=\"product\" data-product-id=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "getId", array(), "method"), "html", null, true);
        echo "\" class='orderPresentation prodInfoIconHeadOrder'>
\t\t\t\t\t\t\t\t\t<h4>";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getOrderTitle", array(), "method"), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class='row'>
\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t<a class=\"btn btn-default btn-xs share\" href=\"";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_homepage", array("name" => "onDevelopment"));
        echo "\"><span class=\"glyphicon glyphicon-share\" aria-hidden=\"true\"></span>Share</a>
\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<div class='clearfix'></div>
\t\t<section>
\t\t\t<div id='prodInfoWidth' class=\"container\">
\t\t\t\t<div class='prodInfoPreferences row col-xs-offset-1 col-xs-10 col-md-offset-3 col-md-6'>
\t\t\t\t\t<div class='row'>
\t\t\t\t\t\t<div class='col-xs-12 col-md-6'>
\t\t\t\t\t\t\t<div id='informationSection'>
\t\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t\t<div class='prodInfoIconHeadings col-xs-offset-3 col-xs-6'>
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imgs/icon2.svg"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t<h4>";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getInformationTitle", array(), "method"), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t\t<div id='prodInfoDetails' class='col-xs-12'>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<span>";
        // line 103
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getFarmTitle", array(), "method"), "html", null, true);
        echo ": </span>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("farm_information", array("farm_id" => $this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "getFarm", array(), "method"), "getId", array(), "method"))), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t";
        // line 105
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "getFarm", array(), "method"), "getName", array(), "method"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<span>";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getSpeciesTitle", array(), "method"), "html", null, true);
        echo ": </span>
\t\t\t\t\t\t\t\t\t\t<span>";
        // line 110
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getSpeciesInfo", array(), "method"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<span>";
        // line 113
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getCultivarTitle", array(), "method"), "html", null, true);
        echo ": </span>
\t\t\t\t\t\t\t\t\t\t<span>";
        // line 114
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "getCultivar", array(), "method"), "getDescription", array(), "method"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<span>";
        // line 117
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getGradeTitle", array(), "method"), "html", null, true);
        echo ": </span>
\t\t\t\t\t\t\t\t\t\t<span>";
        // line 118
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "getGrade", array(), "method"), "getDescription", array(), "method"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<span>";
        // line 121
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getProcessingTitle", array(), "method"), "html", null, true);
        echo ": </span>
\t\t\t\t\t\t\t\t\t\t<span>";
        // line 122
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "getProcessing", array(), "method"), "getDescription", array(), "method"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<span>";
        // line 125
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getFlavorNotesTitle", array(), "method"), "html", null, true);
        echo ": </span>
\t\t\t\t\t\t\t\t\t\t<span>";
        // line 126
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "getFlavor", array(), "method"), "getNotes", array(), "method"), "html", null, true);
        echo " </span>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class='col-xs-12 col-md-6'>
\t\t\t\t\t\t\t<div id='roastSection'>
\t\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t\t<div class='prodInfoIconHeadings col-xs-offset-3 col-xs-6'>
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imgs/icon7.svg"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t<h4>";
        // line 136
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getRoastTitle", array(), "method"), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t\t<div class=\"btn-group btn-group-justified\" role=\"group\" aria-label=\"...\">
\t\t\t\t\t\t\t\t\t";
        // line 140
        $context["roasts"] = array();
        echo "\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
        // line 141
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "getPresentations", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["presentation"]) {
            // line 142
            echo "\t\t\t\t\t\t\t\t\t\t";
            if (!twig_in_filter($this->getAttribute($this->getAttribute($context["presentation"], "getRoast", array(), "method"), "getDescription", array(), "method"), ($context["roasts"] ?? $this->getContext($context, "roasts")))) {
                // line 143
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                $context["roasts"] = twig_array_merge(($context["roasts"] ?? $this->getContext($context, "roasts")), array(0 => $this->getAttribute($this->getAttribute($context["presentation"], "getRoast", array(), "method"), "getDescription", array(), "method")));
                // line 144
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            // line 145
            echo "\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['presentation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "\t\t
\t\t\t\t\t\t\t\t\t";
        // line 146
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["roasts"] ?? $this->getContext($context, "roasts")));
        foreach ($context['_seq'] as $context["_key"] => $context["roast"]) {
            echo "\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\">\t\t
\t\t\t\t\t\t\t\t\t\t\t";
            // line 148
            if (($context["roast"] == $this->getAttribute($this->getAttribute(($context["presentation"] ?? $this->getContext($context, "presentation")), "getRoast", array(), "method"), "getDescription", array()))) {
                // line 149
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default active\">";
                echo twig_escape_filter($this->env, $context["roast"], "html", null, true);
                echo "</button>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 151
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">";
                echo twig_escape_filter($this->env, $context["roast"], "html", null, true);
                echo "</button>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 152
            echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['roast'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class='row'>
\t\t\t\t\t\t<div class='col-xs-12 col-md-6'>
\t\t\t\t\t\t\t<div id='weightSection'>
\t\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t\t<div class='prodInfoIconHeadings col-xs-offset-3 col-xs-6'>
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imgs/icon10.svg"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t<h4>";
        // line 165
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getWeightTitle", array(), "method"), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t\t<div class=\"btn-group btn-group-justified\" role=\"group\" aria-label=\"...\">
\t\t\t\t\t\t\t\t\t";
        // line 169
        $context["weights"] = array();
        echo "\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
        // line 170
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "getPresentations", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["presentation"]) {
            // line 171
            echo "\t\t\t\t\t\t\t\t\t\t";
            if (!twig_in_filter($this->getAttribute($context["presentation"], "getWeight", array(), "method"), ($context["weights"] ?? $this->getContext($context, "weights")))) {
                // line 172
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                $context["weights"] = twig_array_merge(($context["weights"] ?? $this->getContext($context, "weights")), array(0 => $this->getAttribute($context["presentation"], "getWeight", array(), "method")));
                // line 173
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            // line 174
            echo "\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['presentation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "\t\t
\t\t\t\t\t\t\t\t\t";
        // line 175
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["weights"] ?? $this->getContext($context, "weights")));
        foreach ($context['_seq'] as $context["_key"] => $context["weight"]) {
            echo "\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\">\t\t
\t\t\t\t\t\t\t\t\t\t\t";
            // line 177
            if (($context["weight"] == $this->getAttribute(($context["presentation"] ?? $this->getContext($context, "presentation")), "getWeight", array(), "method"))) {
                // line 178
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default active\">";
                echo twig_escape_filter($this->env, $context["weight"], "html", null, true);
                echo "</button>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 180
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">";
                echo twig_escape_filter($this->env, $context["weight"], "html", null, true);
                echo "</button>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 181
            echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 184
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class='col-xs-12 col-md-6'>
\t\t\t\t\t\t\t<div id='grindSection'>
\t\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t\t<div class='prodInfoIconHeadings col-xs-offset-3 col-xs-6'>
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imgs/icon8.svg"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t<h4>";
        // line 192
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getGrindTitle", array(), "method"), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t\t<div class=\"btn-group btn-group-justified\" role=\"group\" aria-label=\"...\">
\t\t\t\t\t\t\t\t\t";
        // line 196
        $context["grinds"] = array();
        echo "\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
        // line 197
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "getPresentations", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["presentation"]) {
            // line 198
            echo "\t\t\t\t\t\t\t\t\t\t";
            if (!twig_in_filter($this->getAttribute($this->getAttribute($context["presentation"], "getGrind", array(), "method"), "getDescription", array(), "method"), ($context["grinds"] ?? $this->getContext($context, "grinds")))) {
                // line 199
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                $context["grinds"] = twig_array_merge(($context["grinds"] ?? $this->getContext($context, "grinds")), array(0 => $this->getAttribute($this->getAttribute($context["presentation"], "getGrind", array(), "method"), "getDescription", array())));
                // line 200
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            // line 201
            echo "\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['presentation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "\t\t
\t\t\t\t\t\t\t\t\t";
        // line 202
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["grinds"] ?? $this->getContext($context, "grinds")));
        foreach ($context['_seq'] as $context["_key"] => $context["grind"]) {
            echo "\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\">\t\t
\t\t\t\t\t\t\t\t\t\t\t";
            // line 204
            if (($context["grind"] == $this->getAttribute($this->getAttribute(($context["presentation"] ?? $this->getContext($context, "presentation")), "getGrind", array(), "method"), "getDescription", array(), "method"))) {
                // line 205
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default active\">";
                echo twig_escape_filter($this->env, $context["grind"], "html", null, true);
                echo "</button>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 207
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">";
                echo twig_escape_filter($this->env, $context["grind"], "html", null, true);
                echo "</button>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 208
            echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grind'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 211
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class='row'>
\t\t\t\t\t\t<div id=\"product_Reviews\"class='col-xs-12'>
\t\t\t\t\t\t\tReviews of the product:</br>
\t\t\t\t\t\t\t";
        // line 218
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "getReviews", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            // line 219
            echo "\t\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "getUser", array(), "method"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "getComment", array(), "method"), "html", null, true);
            echo "
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 221
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t</section>
\t";
        
        $__internal_d4e1b7810a068e5021e6df37d1523b36699566befbd9e4421e79e6fcf28a9e84->leave($__internal_d4e1b7810a068e5021e6df37d1523b36699566befbd9e4421e79e6fcf28a9e84_prof);

    }

    // line 228
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1261bda63bd52815912df8e3c105a8a701112fa41eebdb0cb41fd453265c1a67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1261bda63bd52815912df8e3c105a8a701112fa41eebdb0cb41fd453265c1a67->enter($__internal_1261bda63bd52815912df8e3c105a8a701112fa41eebdb0cb41fd453265c1a67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 229
        echo "\t\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t\t<script>
\t\t\tvar findPresentationUrl = \"";
        // line 231
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_search_presentation"), "js"), "html", null, true);
        echo "\";
\t\t\tvar getPriceUrl = \"";
        // line 232
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_presentation_price"), "js"), "html", null, true);
        echo "\";
\t\t\tvar getProductUrl = \"";
        // line 233
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_get"), "js"), "html", null, true);
        echo "\";
\t\t</script>
\t\t<script src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/product_information.js"), "html", null, true);
        echo "\"></script>
\t\t
\t\t
\t";
        
        $__internal_1261bda63bd52815912df8e3c105a8a701112fa41eebdb0cb41fd453265c1a67->leave($__internal_1261bda63bd52815912df8e3c105a8a701112fa41eebdb0cb41fd453265c1a67_prof);

    }

    public function getTemplateName()
    {
        return "ProductBundle:Default:product_information.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  563 => 235,  558 => 233,  554 => 232,  550 => 231,  544 => 229,  538 => 228,  525 => 221,  514 => 219,  510 => 218,  501 => 211,  493 => 208,  487 => 207,  481 => 205,  479 => 204,  472 => 202,  464 => 201,  461 => 200,  458 => 199,  455 => 198,  451 => 197,  447 => 196,  440 => 192,  436 => 191,  427 => 184,  419 => 181,  413 => 180,  407 => 178,  405 => 177,  398 => 175,  390 => 174,  387 => 173,  384 => 172,  381 => 171,  377 => 170,  373 => 169,  366 => 165,  362 => 164,  351 => 155,  343 => 152,  337 => 151,  331 => 149,  329 => 148,  322 => 146,  314 => 145,  311 => 144,  308 => 143,  305 => 142,  301 => 141,  297 => 140,  290 => 136,  286 => 135,  274 => 126,  270 => 125,  264 => 122,  260 => 121,  254 => 118,  250 => 117,  244 => 114,  240 => 113,  234 => 110,  230 => 109,  223 => 105,  219 => 104,  215 => 103,  207 => 98,  203 => 97,  184 => 81,  175 => 75,  171 => 74,  160 => 68,  153 => 64,  146 => 60,  129 => 45,  124 => 42,  122 => 41,  112 => 34,  100 => 25,  92 => 20,  82 => 13,  77 => 10,  71 => 9,  62 => 7,  57 => 6,  51 => 5,  43 => 3,  37 => 2,  11 => 1,);
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
{% block title%}
\tProduct Information
{% endblock %}
{% block stylesheets %}
\t{{ parent() }}
\t<link rel=\"stylesheet\" href=\"{{ asset('css/product_information.css') }}\" />
{% endblock %}
{% block body %}
\t<section>
\t\t<div class='pageTitle'>
\t\t\t<center>
\t\t\t\t<h2>{{ template.getPageTitle() }}</h2>
\t\t\t</center>
\t\t</div>
\t\t<section>
\t\t\t<div id='prodInfoWidth'>
\t\t\t\t<div id='prodInfoSection' class='col-xs-offset-1 col-xs-10 col-md-offset-3 col-md-6'>
\t\t\t\t\t<div class=\"carousel-inner\" role=\"listbox\">
\t\t\t\t\t\t<div class= \"item active\" id=\"product\" data-product-id=\"{{product.getId()}}\">
\t\t\t\t\t\t\t<div id='carouselHeading' >
\t\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t<span id=\"productName\">
\t\t\t\t\t\t\t\t\t\t\t{{ product.getName() }}
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row-fluid\">
\t\t\t\t\t\t\t\t<div class=\"carouselCards col-xs-12 col-md-offset-2 col-md-8\">
\t\t\t\t\t\t\t\t\t<div class=\"productThumbnails\">
\t\t\t\t\t\t\t\t\t\t<div class='prodThumbInside'>
\t\t\t\t\t\t\t\t\t\t\t<img class='prodThumbImgs' src=\"{{ product.getImage() }} \">\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t{% if farm.getProducts|length >1 %}
\t\t\t\t\t\t<a class=\"left carousel-control\" href=\"\"></a>
\t\t\t\t\t\t<a class=\"right carousel-control\" href=\"\"></a>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t\t<div id='prodInfoCarouselContainer2' class='col-xs-offset-1 col-xs-10 col-md-offset-3 col-md-6' data-spy=\"affix\" data-offset-top=\"480\">
\t\t\t\t\t<div class=\"container col-xs-12\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<p class='prodInfoIconHeadOrder col-xs-offset-4 col-xs-4'>
\t\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t\t<p class='price'>
\t\t\t\t\t\t\t\t\t\t\$<span class=\"presentation-price\"></span>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class='stickyRow row'>
\t\t\t\t\t\t\t<div class='ratingCont col-xs-4'>
\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t{{ product.getRank() }}/5<span>&#x2605;</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class='stickyRow orderPresentation col-xs-4'>
\t\t\t\t\t\t\t\t<img src=\"{{ asset('imgs/icon5.svg') }}\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class='reviews col-xs-4'>
\t\t\t\t\t\t\t\t<a href=\"#product_Reviews\">
\t\t\t\t\t\t\t\t\t{{product.getReviews()|length}} {{ template.getReviewsTitle() }}
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class='order row'>
\t\t\t\t\t\t\t<div class='col-xs-offset-4 col-xs-4'>
\t\t\t\t\t\t\t\t<a id=\"product\" data-product-id=\"{{product.getId() }}\" class='orderPresentation prodInfoIconHeadOrder'>
\t\t\t\t\t\t\t\t\t<h4>{{ template.getOrderTitle() }}</h4>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class='row'>
\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t<a class=\"btn btn-default btn-xs share\" href=\"{{ path('page_homepage',{'name':'onDevelopment'}) }}\"><span class=\"glyphicon glyphicon-share\" aria-hidden=\"true\"></span>Share</a>
\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<div class='clearfix'></div>
\t\t<section>
\t\t\t<div id='prodInfoWidth' class=\"container\">
\t\t\t\t<div class='prodInfoPreferences row col-xs-offset-1 col-xs-10 col-md-offset-3 col-md-6'>
\t\t\t\t\t<div class='row'>
\t\t\t\t\t\t<div class='col-xs-12 col-md-6'>
\t\t\t\t\t\t\t<div id='informationSection'>
\t\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t\t<div class='prodInfoIconHeadings col-xs-offset-3 col-xs-6'>
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('imgs/icon2.svg') }}\">
\t\t\t\t\t\t\t\t\t\t<h4>{{ template.getInformationTitle() }}</h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t\t<div id='prodInfoDetails' class='col-xs-12'>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<span>{{ template.getFarmTitle() }}: </span>
\t\t\t\t\t\t\t\t\t\t<a href=\"{{path('farm_information',{'farm_id':product.getFarm().getId() })}}\">
\t\t\t\t\t\t\t\t\t\t{{ product.getFarm().getName() }}
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<span>{{ template.getSpeciesTitle() }}: </span>
\t\t\t\t\t\t\t\t\t\t<span>{{ template.getSpeciesInfo() }}</span>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<span>{{ template.getCultivarTitle() }}: </span>
\t\t\t\t\t\t\t\t\t\t<span>{{ product.getCultivar().getDescription() }}</span>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<span>{{ template.getGradeTitle() }}: </span>
\t\t\t\t\t\t\t\t\t\t<span>{{ product.getGrade().getDescription() }}</span>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<span>{{ template.getProcessingTitle() }}: </span>
\t\t\t\t\t\t\t\t\t\t<span>{{ product.getProcessing().getDescription() }}</span>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<span>{{ template.getFlavorNotesTitle() }}: </span>
\t\t\t\t\t\t\t\t\t\t<span>{{ product.getFlavor().getNotes() }} </span>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class='col-xs-12 col-md-6'>
\t\t\t\t\t\t\t<div id='roastSection'>
\t\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t\t<div class='prodInfoIconHeadings col-xs-offset-3 col-xs-6'>
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('imgs/icon7.svg') }}\">
\t\t\t\t\t\t\t\t\t\t<h4>{{ template.getRoastTitle() }}</h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t\t<div class=\"btn-group btn-group-justified\" role=\"group\" aria-label=\"...\">
\t\t\t\t\t\t\t\t\t{% set roasts = [] %}\t\t\t\t\t
\t\t\t\t\t\t\t\t\t{% for presentation in product.getPresentations() %}
\t\t\t\t\t\t\t\t\t\t{% if presentation.getRoast().getDescription() not in roasts %}
\t\t\t\t\t\t\t\t\t\t\t{% set roasts = roasts|merge([presentation.getRoast().getDescription()]) %}
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t{% endfor %}\t\t
\t\t\t\t\t\t\t\t\t{% for roast in roasts %}\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\">\t\t
\t\t\t\t\t\t\t\t\t\t\t{% if roast == presentation.getRoast().getDescription %}
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default active\">{{ roast }}</button>
\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">{{ roast }}</button>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class='row'>
\t\t\t\t\t\t<div class='col-xs-12 col-md-6'>
\t\t\t\t\t\t\t<div id='weightSection'>
\t\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t\t<div class='prodInfoIconHeadings col-xs-offset-3 col-xs-6'>
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('imgs/icon10.svg') }}\">
\t\t\t\t\t\t\t\t\t\t<h4>{{ template.getWeightTitle() }}</h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t\t<div class=\"btn-group btn-group-justified\" role=\"group\" aria-label=\"...\">
\t\t\t\t\t\t\t\t\t{% set weights = [] %}\t\t\t\t\t
\t\t\t\t\t\t\t\t\t{% for presentation in product.getPresentations() %}
\t\t\t\t\t\t\t\t\t\t{% if presentation.getWeight() not in weights %}
\t\t\t\t\t\t\t\t\t\t\t{% set weights = weights|merge([presentation.getWeight()]) %}
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t{% endfor %}\t\t
\t\t\t\t\t\t\t\t\t{% for weight in weights %}\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\">\t\t
\t\t\t\t\t\t\t\t\t\t\t{% if weight == presentation.getWeight() %}
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default active\">{{ weight }}</button>
\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">{{ weight }}</button>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class='col-xs-12 col-md-6'>
\t\t\t\t\t\t\t<div id='grindSection'>
\t\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t\t<div class='prodInfoIconHeadings col-xs-offset-3 col-xs-6'>
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('imgs/icon8.svg') }}\">
\t\t\t\t\t\t\t\t\t\t<h4>{{ template.getGrindTitle() }}</h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t\t<div class=\"btn-group btn-group-justified\" role=\"group\" aria-label=\"...\">
\t\t\t\t\t\t\t\t\t{% set grinds = [] %}\t\t\t\t\t
\t\t\t\t\t\t\t\t\t{% for presentation in product.getPresentations() %}
\t\t\t\t\t\t\t\t\t\t{% if presentation.getGrind().getDescription() not in grinds %}
\t\t\t\t\t\t\t\t\t\t\t{% set grinds = grinds|merge([presentation.getGrind().getDescription]) %}
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t{% endfor %}\t\t
\t\t\t\t\t\t\t\t\t{% for grind in grinds %}\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\">\t\t
\t\t\t\t\t\t\t\t\t\t\t{% if grind == presentation.getGrind().getDescription() %}
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default active\">{{ grind }}</button>
\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">{{ grind }}</button>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class='row'>
\t\t\t\t\t\t<div id=\"product_Reviews\"class='col-xs-12'>
\t\t\t\t\t\t\tReviews of the product:</br>
\t\t\t\t\t\t\t{% for review in product.getReviews() %}
\t\t\t\t\t\t\t\t{{review.getUser() }}: {{review.getComment()}}
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t</section>
\t{% endblock %}
\t{% block javascripts %}
\t\t{{ parent() }}
\t\t<script>
\t\t\tvar findPresentationUrl = \"{{ path('product_search_presentation')|escape('js') }}\";
\t\t\tvar getPriceUrl = \"{{ path('product_presentation_price')|escape('js') }}\";
\t\t\tvar getProductUrl = \"{{ path('product_get')|escape('js') }}\";
\t\t</script>
\t\t<script src=\"{{ asset('js/product_information.js')}}\"></script>
\t\t
\t\t
\t{% endblock %}", "ProductBundle:Default:product_information.html.twig", "C:\\xampp\\htdocs\\crgc\\var\\cache\\prod/../../../src/ProductBundle/Resources/views/Default/product_information.html.twig");
    }
}
