<?php

/* ProductBundle:Default:product_information.html.twig */
class __TwigTemplate_926351176fe895f72b64e6ab50958d7dac5d5a068370845eb5e867749fb9fc38 extends Twig_Template
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
        $__internal_d57351c11424411a9a4fb011cacdab1e436bbc08a7d6d1b61953703cf01dbc3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d57351c11424411a9a4fb011cacdab1e436bbc08a7d6d1b61953703cf01dbc3a->enter($__internal_d57351c11424411a9a4fb011cacdab1e436bbc08a7d6d1b61953703cf01dbc3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProductBundle:Default:product_information.html.twig"));

        $__internal_70dcb6bb74389e904b92115275fa997c7658fc1d0598671c00cbe4ffe0a806be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70dcb6bb74389e904b92115275fa997c7658fc1d0598671c00cbe4ffe0a806be->enter($__internal_70dcb6bb74389e904b92115275fa997c7658fc1d0598671c00cbe4ffe0a806be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProductBundle:Default:product_information.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d57351c11424411a9a4fb011cacdab1e436bbc08a7d6d1b61953703cf01dbc3a->leave($__internal_d57351c11424411a9a4fb011cacdab1e436bbc08a7d6d1b61953703cf01dbc3a_prof);

        
        $__internal_70dcb6bb74389e904b92115275fa997c7658fc1d0598671c00cbe4ffe0a806be->leave($__internal_70dcb6bb74389e904b92115275fa997c7658fc1d0598671c00cbe4ffe0a806be_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fdcaeced7626e99cdc666880a4d9446538c3d50eea1afdcf0e32c09a4ad6f487 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdcaeced7626e99cdc666880a4d9446538c3d50eea1afdcf0e32c09a4ad6f487->enter($__internal_fdcaeced7626e99cdc666880a4d9446538c3d50eea1afdcf0e32c09a4ad6f487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c3405e0eb86e0f7af4bc29be5a7b7e247587611380466ae21067cbc4295746e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3405e0eb86e0f7af4bc29be5a7b7e247587611380466ae21067cbc4295746e2->enter($__internal_c3405e0eb86e0f7af4bc29be5a7b7e247587611380466ae21067cbc4295746e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Product Information ";
        
        $__internal_c3405e0eb86e0f7af4bc29be5a7b7e247587611380466ae21067cbc4295746e2->leave($__internal_c3405e0eb86e0f7af4bc29be5a7b7e247587611380466ae21067cbc4295746e2_prof);

        
        $__internal_fdcaeced7626e99cdc666880a4d9446538c3d50eea1afdcf0e32c09a4ad6f487->leave($__internal_fdcaeced7626e99cdc666880a4d9446538c3d50eea1afdcf0e32c09a4ad6f487_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c1ce917153f287cdc44a68a959cd4eda06257894eb676637d3d9252c5bc6b068 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1ce917153f287cdc44a68a959cd4eda06257894eb676637d3d9252c5bc6b068->enter($__internal_c1ce917153f287cdc44a68a959cd4eda06257894eb676637d3d9252c5bc6b068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_97771eceffb295f85f1830d450a93151be2c687f99c928714c2f848f6281a2df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97771eceffb295f85f1830d450a93151be2c687f99c928714c2f848f6281a2df->enter($__internal_97771eceffb295f85f1830d450a93151be2c687f99c928714c2f848f6281a2df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/product_information.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_97771eceffb295f85f1830d450a93151be2c687f99c928714c2f848f6281a2df->leave($__internal_97771eceffb295f85f1830d450a93151be2c687f99c928714c2f848f6281a2df_prof);

        
        $__internal_c1ce917153f287cdc44a68a959cd4eda06257894eb676637d3d9252c5bc6b068->leave($__internal_c1ce917153f287cdc44a68a959cd4eda06257894eb676637d3d9252c5bc6b068_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_4aa9f9b32aed313f1fa3ce2b0ed39b98b94dac06d0e39578d72cecb3d9a94ab4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4aa9f9b32aed313f1fa3ce2b0ed39b98b94dac06d0e39578d72cecb3d9a94ab4->enter($__internal_4aa9f9b32aed313f1fa3ce2b0ed39b98b94dac06d0e39578d72cecb3d9a94ab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bdd62d915f263e9bc0486409311bad043c818890229406c103d76da5640a29be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdd62d915f263e9bc0486409311bad043c818890229406c103d76da5640a29be->enter($__internal_bdd62d915f263e9bc0486409311bad043c818890229406c103d76da5640a29be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<section>
    \t<div class='clearfix'></div>

\t\t\t<center>
\t\t\t\t<h2>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getPageTitle", array(), "method"), "html", null, true);
        echo "</h2>
\t\t\t</center>
\t\t<section>
\t\t<div id='prodInfoWidth'>
\t\t\t<div id='prodInfoSection' class='col-xs-offset-1 col-xs-10 col-md-offset-3 col-md-6'>
\t\t\t\t<div id='prodInfoCarouselContainer' class=\"container col-xs-12\">
\t                <div id=\"myCarousel\" class=\"carousel slide both\" data-interval=\"false\">
\t\t                <div class=\"carousel-inner\" role=\"listbox\">
\t\t                \t";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["farm"] ?? $this->getContext($context, "farm")), "getProducts", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["prod"]) {
            // line 23
            echo "\t\t                \t<div
\t\t                \t";
            // line 24
            if (($this->getAttribute($context["prod"], "getId", array(), "method") == $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "getId", array(), "method"))) {
                // line 25
                echo "\t\t\t                \tclass= \"item active\"
\t\t\t                ";
            } else {
                // line 27
                echo "\t\t\t                \tclass= \"item\"
\t\t\t                ";
            }
            // line 29
            echo "\t\t\t                 id=\"product\" data-product-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["prod"], "getId", array(), "method"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<div id='carouselHeading' >
\t\t\t\t\t\t\t\t\t<center><h3>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["prod"], "getName", array(), "method"), "html", null, true);
            echo "</h3></center>
\t\t\t\t\t\t\t\t</div>
\t\t\t                \t<div class=\"row-fluid\">
\t\t\t\t\t\t\t\t\t<div class=\"carouselCards col-xs-12 col-md-offset-2 col-md-8\">
\t\t\t\t\t\t\t\t\t\t<div class=\"productThumbnails\">
\t\t\t\t\t\t\t\t\t\t\t<div class='prodThumbInside'>
\t\t\t\t\t\t\t\t\t\t\t\t<img class='prodThumbImgs' src=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["prod"], "getImage", array(), "method"), "html", null, true);
            echo " \">\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t                \t</div>
\t\t\t                </div>
\t\t                \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prod'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "\t\t                </div>
\t\t                \t";
        // line 45
        if ((twig_length_filter($this->env, $this->getAttribute(($context["farm"] ?? $this->getContext($context, "farm")), "getProducts", array())) > 1)) {
            // line 46
            echo "\t\t                <a class=\"left carousel-control\" href=\".both\" data-slide=\"prev\"></a>
\t\t                <a class=\"right carousel-control\" href=\".both\" data-slide=\"next\"></a>
\t\t                \t";
        }
        // line 49
        echo "\t                </div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- Second carrousel Begin -->

\t\t\t<div id='prodInfoCarouselContainer2' class='col-xs-offset-1 col-xs-10 col-md-offset-3 col-md-6' data-spy=\"affix\" data-offset-top=\"480\">
\t\t\t\t<div class=\"container col-xs-12\">
\t                <div id=\"myCarousel2\" class=\"carousel slide both\" data-interval=\"false\">
\t\t                <div class=\"carousel-inner\" role=\"listbox\">
\t\t                \t";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["farm"] ?? $this->getContext($context, "farm")), "getProducts", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["prod"]) {
            // line 60
            echo "\t\t                \t<div
\t\t                \t";
            // line 61
            if ($this->getAttribute($context["loop"], "first", array())) {
                // line 62
                echo "\t\t\t                \tclass= \"item active\"
\t\t\t                ";
            } else {
                // line 64
                echo "\t\t\t                \tclass= \"item\"
\t\t\t                ";
            }
            // line 65
            echo ">
\t\t\t                \t<div class='row'>
\t\t\t\t\t\t\t\t\t<p class='prodInfoIconHeadOrder col-xs-offset-4 col-xs-4'>
\t\t\t\t\t\t\t\t\t\t<div class='col-xs-12'>
\t\t\t\t\t\t\t\t\t\t\t<center><p class='price'>\$<span class=\"presentation-price\"></span></p></center>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class='stickyRow row'>
\t\t\t\t\t\t\t\t\t<div class='ratingCont col-xs-4'>
\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["prod"], "getRank", array(), "method"), "html", null, true);
            echo "/5<span>&#x2605;</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<a class='stickyRow orderPresentation col-xs-4'>
\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imgs/icon5.svg"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class='reviews col-xs-4'>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["prod"], "getReviews", array(), "method"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getReviewsTitle", array(), "method"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class='order row'>
\t\t\t\t\t\t\t\t\t<div class='col-xs-offset-4 col-xs-4'>
\t\t\t\t\t\t\t\t\t\t<a id=\"product\" data-product-id=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "getId", array(), "method"), "html", null, true);
            echo "\" class='orderPresentation prodInfoIconHeadOrder'>
\t\t\t\t\t\t\t\t\t\t\t<h4>";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getOrderTitle", array(), "method"), "html", null, true);
            echo "</h4>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class='row'>
\t\t\t\t\t\t\t\t\t<center><a class=\"btn btn-default btn-xs share\" href=\"";
            // line 94
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_homepage", array("name" => "onDevelopment"));
            echo "\"><span class=\"glyphicon glyphicon-share\" aria-hidden=\"true\"></span>Share</a></center>
\t\t\t\t\t\t\t\t</div>
\t\t\t                </div>
\t\t                \t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prod'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "\t\t                </div>
\t                </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t\t<!-- Second carrousel End -->

\t\t</section>
\t\t<div class='clearfix'></div>
\t\t<section>
\t\t<div id='prodInfoWidth' class=\"container\">
\t\t\t<div class='prodInfoPreferences row col-xs-offset-1 col-xs-10 col-md-offset-3 col-md-6'>
\t\t\t\t<div class='row'>
\t\t\t\t\t<div class='col-xs-12 col-md-6'>
\t\t\t\t\t\t<div id='informationSection'>
\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t<div class='prodInfoIconHeadings col-xs-offset-3 col-xs-6'>
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imgs/icon2.svg"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t<h4>";
        // line 117
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getInformationTitle", array(), "method"), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t\t\t</div>                                                                    
\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t<div id='prodInfoDetails' class='col-xs-12'>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<span>";
        // line 122
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getFarmTitle", array(), "method"), "html", null, true);
        echo ": </span><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("farm_information", array("farm_id" => $this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "getFarm", array(), "method"), "getId", array(), "method"))), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 123
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "getFarm", array(), "method"), "getName", array(), "method"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t</a></br>
\t\t\t\t\t\t\t\t\t<span>";
        // line 125
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getSpeciesTitle", array(), "method"), "html", null, true);
        echo ": </span>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getSpeciesInfo", array(), "method"), "html", null, true);
        echo "</br>
\t\t\t\t\t\t\t\t\t<span>";
        // line 126
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getCultivarTitle", array(), "method"), "html", null, true);
        echo ": </span>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "getCultivar", array(), "method"), "getDescription", array(), "method"), "html", null, true);
        echo "</br>
\t\t\t\t\t\t\t\t\t<span>";
        // line 127
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getGradeTitle", array(), "method"), "html", null, true);
        echo ": </span>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "getGrade", array(), "method"), "getDescription", array(), "method"), "html", null, true);
        echo "</br>
\t\t\t\t\t\t\t\t\t<span>";
        // line 128
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getProcessingTitle", array(), "method"), "html", null, true);
        echo ": </span>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "getProcessing", array(), "method"), "getDescription", array(), "method"), "html", null, true);
        echo "</br>
\t\t\t\t\t\t\t\t\t<span>";
        // line 129
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getFlavorNotesTitle", array(), "method"), "html", null, true);
        echo ": </span>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "getFlavor", array(), "method"), "getNotes", array(), "method"), "html", null, true);
        echo "</br>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class='col-xs-12 col-md-6'>
\t\t\t\t\t\t<div id='roastSection'>
\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t<div class='prodInfoIconHeadings col-xs-offset-3 col-xs-6'>
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imgs/icon7.svg"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t<h4>";
        // line 139
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getRoastTitle", array(), "method"), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t<div class=\"btn-group btn-group-justified\" role=\"group\" aria-label=\"...\">
\t\t\t\t\t\t\t\t";
        // line 143
        $context["roasts"] = array();
        echo "\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        // line 144
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "getPresentations", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["presentation"]) {
            // line 145
            echo "   \t\t\t\t\t\t\t\t\t";
            if (!twig_in_filter($this->getAttribute($this->getAttribute($context["presentation"], "getRoast", array(), "method"), "getDescription", array(), "method"), ($context["roasts"] ?? $this->getContext($context, "roasts")))) {
                // line 146
                echo "\t\t\t\t\t\t\t\t\t\t";
                $context["roasts"] = twig_array_merge(($context["roasts"] ?? $this->getContext($context, "roasts")), array(0 => $this->getAttribute($this->getAttribute($context["presentation"], "getRoast", array(), "method"), "getDescription", array(), "method")));
                // line 147
                echo "\t\t\t\t\t\t\t\t\t";
            }
            // line 148
            echo "\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['presentation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "\t\t
\t\t\t\t\t\t\t\t";
        // line 149
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["roasts"] ?? $this->getContext($context, "roasts")));
        foreach ($context['_seq'] as $context["_key"] => $context["roast"]) {
            echo "\t\t
\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\">\t\t
\t\t\t\t\t\t\t\t\t\t";
            // line 151
            if (($context["roast"] == $this->getAttribute($this->getAttribute(($context["presentation"] ?? $this->getContext($context, "presentation")), "getRoast", array(), "method"), "getDescription", array()))) {
                // line 152
                echo "\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default active\">";
                echo twig_escape_filter($this->env, $context["roast"], "html", null, true);
                echo "</button>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 154
                echo "\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">";
                echo twig_escape_filter($this->env, $context["roast"], "html", null, true);
                echo "</button>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 155
            echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['roast'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 158
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class='row'>
\t\t\t\t\t<div class='col-xs-12 col-md-6'>
\t\t\t\t\t\t<div id='weightSection'>
\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t<div class='prodInfoIconHeadings col-xs-offset-3 col-xs-6'>
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imgs/icon10.svg"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t<h4>";
        // line 168
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getWeightTitle", array(), "method"), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t<div class=\"btn-group btn-group-justified\" role=\"group\" aria-label=\"...\">
\t\t\t\t\t\t\t\t";
        // line 172
        $context["weights"] = array();
        echo "\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        // line 173
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "getPresentations", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["presentation"]) {
            // line 174
            echo "   \t\t\t\t\t\t\t\t\t";
            if (!twig_in_filter($this->getAttribute($context["presentation"], "getWeight", array(), "method"), ($context["weights"] ?? $this->getContext($context, "weights")))) {
                // line 175
                echo "\t\t\t\t\t\t\t\t\t\t";
                $context["weights"] = twig_array_merge(($context["weights"] ?? $this->getContext($context, "weights")), array(0 => $this->getAttribute($context["presentation"], "getWeight", array(), "method")));
                // line 176
                echo "\t\t\t\t\t\t\t\t\t";
            }
            // line 177
            echo "\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['presentation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "\t\t
\t\t\t\t\t\t\t\t";
        // line 178
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["weights"] ?? $this->getContext($context, "weights")));
        foreach ($context['_seq'] as $context["_key"] => $context["weight"]) {
            echo "\t\t
\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\">\t\t
\t\t\t\t\t\t\t\t\t\t";
            // line 180
            if (($context["weight"] == $this->getAttribute(($context["presentation"] ?? $this->getContext($context, "presentation")), "getWeight", array(), "method"))) {
                // line 181
                echo "\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default active\">";
                echo twig_escape_filter($this->env, $context["weight"], "html", null, true);
                echo "</button>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 183
                echo "\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">";
                echo twig_escape_filter($this->env, $context["weight"], "html", null, true);
                echo "</button>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 184
            echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 187
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class='col-xs-12 col-md-6'>
\t\t\t\t\t\t<div id='grindSection'>
\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t<div class='prodInfoIconHeadings col-xs-offset-3 col-xs-6'>
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imgs/icon8.svg"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t<h4>";
        // line 195
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getGrindTitle", array(), "method"), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t<div class=\"btn-group btn-group-justified\" role=\"group\" aria-label=\"...\">
\t\t\t\t\t\t\t\t";
        // line 199
        $context["grinds"] = array();
        echo "\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        // line 200
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "getPresentations", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["presentation"]) {
            // line 201
            echo "   \t\t\t\t\t\t\t\t\t";
            if (!twig_in_filter($this->getAttribute($this->getAttribute($context["presentation"], "getGrind", array(), "method"), "getDescription", array(), "method"), ($context["grinds"] ?? $this->getContext($context, "grinds")))) {
                // line 202
                echo "\t\t\t\t\t\t\t\t\t\t";
                $context["grinds"] = twig_array_merge(($context["grinds"] ?? $this->getContext($context, "grinds")), array(0 => $this->getAttribute($this->getAttribute($context["presentation"], "getGrind", array(), "method"), "getDescription", array())));
                // line 203
                echo "\t\t\t\t\t\t\t\t\t";
            }
            // line 204
            echo "\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['presentation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "\t\t
\t\t\t\t\t\t\t\t";
        // line 205
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["grinds"] ?? $this->getContext($context, "grinds")));
        foreach ($context['_seq'] as $context["_key"] => $context["grind"]) {
            echo "\t\t
\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\">\t\t
\t\t\t\t\t\t\t\t\t\t";
            // line 207
            if (($context["grind"] == $this->getAttribute($this->getAttribute(($context["presentation"] ?? $this->getContext($context, "presentation")), "getGrind", array(), "method"), "getDescription", array(), "method"))) {
                // line 208
                echo "\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default active\">";
                echo twig_escape_filter($this->env, $context["grind"], "html", null, true);
                echo "</button>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 210
                echo "\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">";
                echo twig_escape_filter($this->env, $context["grind"], "html", null, true);
                echo "</button>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 211
            echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grind'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 214
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class='row'>
\t\t\t\t\t<div class='col-xs-12 col-md-offset-3 col-md-6'>
\t\t\t\t\t\t<div id='cupSection'>
\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t<div class='prodInfoIconHeadings col-xs-offset-3 col-xs-6'>
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imgs/icon9.svg"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t<h4>";
        // line 224
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getCupScoringTitle", array(), "method"), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t<div id='cupMap' class='col-xs-12'>
\t\t\t\t\t\t\t\t<center><img src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imgs/cupScori\tng.png"), "html", null, true);
        echo "\"></center>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
</section>
";
        
        $__internal_bdd62d915f263e9bc0486409311bad043c818890229406c103d76da5640a29be->leave($__internal_bdd62d915f263e9bc0486409311bad043c818890229406c103d76da5640a29be_prof);

        
        $__internal_4aa9f9b32aed313f1fa3ce2b0ed39b98b94dac06d0e39578d72cecb3d9a94ab4->leave($__internal_4aa9f9b32aed313f1fa3ce2b0ed39b98b94dac06d0e39578d72cecb3d9a94ab4_prof);

    }

    // line 238
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_24e76388543119fe3ecb730d4540a23d8efbebb909cfea2b90edb393e3df43c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24e76388543119fe3ecb730d4540a23d8efbebb909cfea2b90edb393e3df43c0->enter($__internal_24e76388543119fe3ecb730d4540a23d8efbebb909cfea2b90edb393e3df43c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6deed18c567d8828b33eb7aab0ba4d67980ca37ec75031ccd6fe0fb2cd1238a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6deed18c567d8828b33eb7aab0ba4d67980ca37ec75031ccd6fe0fb2cd1238a4->enter($__internal_6deed18c567d8828b33eb7aab0ba4d67980ca37ec75031ccd6fe0fb2cd1238a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 239
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script>
\t\tvar findPresentationUrl = \"";
        // line 241
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_search_presentation"), "js"), "html", null, true);
        echo "\";
\t\tvar getPriceUrl = \"";
        // line 242
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_presentation_price"), "js"), "html", null, true);
        echo "\";
\t</script>
\t<script src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/product_information.js"), "html", null, true);
        echo "\"></script>
\t
\t
";
        
        $__internal_6deed18c567d8828b33eb7aab0ba4d67980ca37ec75031ccd6fe0fb2cd1238a4->leave($__internal_6deed18c567d8828b33eb7aab0ba4d67980ca37ec75031ccd6fe0fb2cd1238a4_prof);

        
        $__internal_24e76388543119fe3ecb730d4540a23d8efbebb909cfea2b90edb393e3df43c0->leave($__internal_24e76388543119fe3ecb730d4540a23d8efbebb909cfea2b90edb393e3df43c0_prof);

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
        return array (  638 => 244,  633 => 242,  629 => 241,  623 => 239,  614 => 238,  594 => 228,  587 => 224,  583 => 223,  572 => 214,  564 => 211,  558 => 210,  552 => 208,  550 => 207,  543 => 205,  535 => 204,  532 => 203,  529 => 202,  526 => 201,  522 => 200,  518 => 199,  511 => 195,  507 => 194,  498 => 187,  490 => 184,  484 => 183,  478 => 181,  476 => 180,  469 => 178,  461 => 177,  458 => 176,  455 => 175,  452 => 174,  448 => 173,  444 => 172,  437 => 168,  433 => 167,  422 => 158,  414 => 155,  408 => 154,  402 => 152,  400 => 151,  393 => 149,  385 => 148,  382 => 147,  379 => 146,  376 => 145,  372 => 144,  368 => 143,  361 => 139,  357 => 138,  343 => 129,  337 => 128,  331 => 127,  325 => 126,  319 => 125,  314 => 123,  308 => 122,  300 => 117,  296 => 116,  276 => 98,  258 => 94,  250 => 89,  246 => 88,  236 => 83,  230 => 80,  223 => 76,  210 => 65,  206 => 64,  202 => 62,  200 => 61,  197 => 60,  180 => 59,  168 => 49,  163 => 46,  161 => 45,  158 => 44,  145 => 37,  136 => 31,  130 => 29,  126 => 27,  122 => 25,  120 => 24,  117 => 23,  113 => 22,  102 => 14,  96 => 10,  87 => 9,  75 => 7,  70 => 6,  61 => 5,  43 => 3,  11 => 1,);
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

{% block title%} Product Information {% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/product_information.css') }}\" />
{% endblock %}
{% block body %}
<section>
    \t<div class='clearfix'></div>

\t\t\t<center>
\t\t\t\t<h2>{{ template.getPageTitle() }}</h2>
\t\t\t</center>
\t\t<section>
\t\t<div id='prodInfoWidth'>
\t\t\t<div id='prodInfoSection' class='col-xs-offset-1 col-xs-10 col-md-offset-3 col-md-6'>
\t\t\t\t<div id='prodInfoCarouselContainer' class=\"container col-xs-12\">
\t                <div id=\"myCarousel\" class=\"carousel slide both\" data-interval=\"false\">
\t\t                <div class=\"carousel-inner\" role=\"listbox\">
\t\t                \t{% for prod in farm.getProducts %}
\t\t                \t<div
\t\t                \t{% if prod.getId() == product.getId()%}
\t\t\t                \tclass= \"item active\"
\t\t\t                {% else %}
\t\t\t                \tclass= \"item\"
\t\t\t                {% endif %}
\t\t\t                 id=\"product\" data-product-id=\"{{prod.getId()}}\">
\t\t\t\t\t\t\t\t<div id='carouselHeading' >
\t\t\t\t\t\t\t\t\t<center><h3>{{ prod.getName() }}</h3></center>
\t\t\t\t\t\t\t\t</div>
\t\t\t                \t<div class=\"row-fluid\">
\t\t\t\t\t\t\t\t\t<div class=\"carouselCards col-xs-12 col-md-offset-2 col-md-8\">
\t\t\t\t\t\t\t\t\t\t<div class=\"productThumbnails\">
\t\t\t\t\t\t\t\t\t\t\t<div class='prodThumbInside'>
\t\t\t\t\t\t\t\t\t\t\t\t<img class='prodThumbImgs' src=\"{{ prod.getImage() }} \">\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t                \t</div>
\t\t\t                </div>
\t\t                \t{% endfor %}
\t\t                </div>
\t\t                \t{% if farm.getProducts|length >1 %}
\t\t                <a class=\"left carousel-control\" href=\".both\" data-slide=\"prev\"></a>
\t\t                <a class=\"right carousel-control\" href=\".both\" data-slide=\"next\"></a>
\t\t                \t{% endif %}
\t                </div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- Second carrousel Begin -->

\t\t\t<div id='prodInfoCarouselContainer2' class='col-xs-offset-1 col-xs-10 col-md-offset-3 col-md-6' data-spy=\"affix\" data-offset-top=\"480\">
\t\t\t\t<div class=\"container col-xs-12\">
\t                <div id=\"myCarousel2\" class=\"carousel slide both\" data-interval=\"false\">
\t\t                <div class=\"carousel-inner\" role=\"listbox\">
\t\t                \t{% for prod in farm.getProducts %}
\t\t                \t<div
\t\t                \t{% if loop.first%}
\t\t\t                \tclass= \"item active\"
\t\t\t                {% else %}
\t\t\t                \tclass= \"item\"
\t\t\t                {% endif %}>
\t\t\t                \t<div class='row'>
\t\t\t\t\t\t\t\t\t<p class='prodInfoIconHeadOrder col-xs-offset-4 col-xs-4'>
\t\t\t\t\t\t\t\t\t\t<div class='col-xs-12'>
\t\t\t\t\t\t\t\t\t\t\t<center><p class='price'>\$<span class=\"presentation-price\"></span></p></center>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class='stickyRow row'>
\t\t\t\t\t\t\t\t\t<div class='ratingCont col-xs-4'>
\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t{{ prod.getRank() }}/5<span>&#x2605;</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<a class='stickyRow orderPresentation col-xs-4'>
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('imgs/icon5.svg') }}\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class='reviews col-xs-4'>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">{{ prod.getReviews() }} {{ template.getReviewsTitle() }}</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class='order row'>
\t\t\t\t\t\t\t\t\t<div class='col-xs-offset-4 col-xs-4'>
\t\t\t\t\t\t\t\t\t\t<a id=\"product\" data-product-id=\"{{product.getId() }}\" class='orderPresentation prodInfoIconHeadOrder'>
\t\t\t\t\t\t\t\t\t\t\t<h4>{{ template.getOrderTitle() }}</h4>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class='row'>
\t\t\t\t\t\t\t\t\t<center><a class=\"btn btn-default btn-xs share\" href=\"{{ path('page_homepage',{'name':'onDevelopment'}) }}\"><span class=\"glyphicon glyphicon-share\" aria-hidden=\"true\"></span>Share</a></center>
\t\t\t\t\t\t\t\t</div>
\t\t\t                </div>
\t\t                \t{% endfor %}
\t\t                </div>
\t                </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t\t<!-- Second carrousel End -->

\t\t</section>
\t\t<div class='clearfix'></div>
\t\t<section>
\t\t<div id='prodInfoWidth' class=\"container\">
\t\t\t<div class='prodInfoPreferences row col-xs-offset-1 col-xs-10 col-md-offset-3 col-md-6'>
\t\t\t\t<div class='row'>
\t\t\t\t\t<div class='col-xs-12 col-md-6'>
\t\t\t\t\t\t<div id='informationSection'>
\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t<div class='prodInfoIconHeadings col-xs-offset-3 col-xs-6'>
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('imgs/icon2.svg') }}\">
\t\t\t\t\t\t\t\t\t<h4>{{ template.getInformationTitle() }}</h4>
\t\t\t\t\t\t\t\t</div>                                                                    
\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t<div id='prodInfoDetails' class='col-xs-12'>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<span>{{ template.getFarmTitle() }}: </span><a href=\"{{ path('farm_information',{'farm_id':product.getFarm().getId() })}}\">
\t\t\t\t\t\t\t\t\t\t\t{{ product.getFarm().getName() }}
\t\t\t\t\t\t\t\t\t\t</a></br>
\t\t\t\t\t\t\t\t\t<span>{{ template.getSpeciesTitle() }}: </span>{{ template.getSpeciesInfo() }}</br>
\t\t\t\t\t\t\t\t\t<span>{{ template.getCultivarTitle() }}: </span>{{ product.getCultivar().getDescription() }}</br>
\t\t\t\t\t\t\t\t\t<span>{{ template.getGradeTitle() }}: </span>{{ product.getGrade().getDescription() }}</br>
\t\t\t\t\t\t\t\t\t<span>{{ template.getProcessingTitle() }}: </span>{{ product.getProcessing().getDescription() }}</br>
\t\t\t\t\t\t\t\t\t<span>{{ template.getFlavorNotesTitle() }}: </span>{{ product.getFlavor().getNotes() }}</br>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class='col-xs-12 col-md-6'>
\t\t\t\t\t\t<div id='roastSection'>
\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t<div class='prodInfoIconHeadings col-xs-offset-3 col-xs-6'>
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('imgs/icon7.svg') }}\">
\t\t\t\t\t\t\t\t\t<h4>{{ template.getRoastTitle() }}</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t<div class=\"btn-group btn-group-justified\" role=\"group\" aria-label=\"...\">
\t\t\t\t\t\t\t\t{% set roasts = [] %}\t\t\t\t\t
\t\t\t\t\t\t\t\t{% for presentation in product.getPresentations() %}
   \t\t\t\t\t\t\t\t\t{% if presentation.getRoast().getDescription() not in roasts %}
\t\t\t\t\t\t\t\t\t\t{% set roasts = roasts|merge([presentation.getRoast().getDescription()]) %}
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% endfor %}\t\t
\t\t\t\t\t\t\t\t{% for roast in roasts %}\t\t
\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\">\t\t
\t\t\t\t\t\t\t\t\t\t{% if roast == presentation.getRoast().getDescription %}
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default active\">{{ roast }}</button>
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">{{ roast }}</button>
\t\t\t\t\t\t\t\t\t\t{% endif %}\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class='row'>
\t\t\t\t\t<div class='col-xs-12 col-md-6'>
\t\t\t\t\t\t<div id='weightSection'>
\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t<div class='prodInfoIconHeadings col-xs-offset-3 col-xs-6'>
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('imgs/icon10.svg') }}\">
\t\t\t\t\t\t\t\t\t<h4>{{ template.getWeightTitle() }}</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t<div class=\"btn-group btn-group-justified\" role=\"group\" aria-label=\"...\">
\t\t\t\t\t\t\t\t{% set weights = [] %}\t\t\t\t\t
\t\t\t\t\t\t\t\t{% for presentation in product.getPresentations() %}
   \t\t\t\t\t\t\t\t\t{% if presentation.getWeight() not in weights %}
\t\t\t\t\t\t\t\t\t\t{% set weights = weights|merge([presentation.getWeight()]) %}
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% endfor %}\t\t
\t\t\t\t\t\t\t\t{% for weight in weights %}\t\t
\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\">\t\t
\t\t\t\t\t\t\t\t\t\t{% if weight == presentation.getWeight() %}
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default active\">{{ weight }}</button>
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">{{ weight }}</button>
\t\t\t\t\t\t\t\t\t\t{% endif %}\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class='col-xs-12 col-md-6'>
\t\t\t\t\t\t<div id='grindSection'>
\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t<div class='prodInfoIconHeadings col-xs-offset-3 col-xs-6'>
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('imgs/icon8.svg') }}\">
\t\t\t\t\t\t\t\t\t<h4>{{ template.getGrindTitle() }}</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t<div class=\"btn-group btn-group-justified\" role=\"group\" aria-label=\"...\">
\t\t\t\t\t\t\t\t{% set grinds = [] %}\t\t\t\t\t
\t\t\t\t\t\t\t\t{% for presentation in product.getPresentations() %}
   \t\t\t\t\t\t\t\t\t{% if presentation.getGrind().getDescription() not in grinds %}
\t\t\t\t\t\t\t\t\t\t{% set grinds = grinds|merge([presentation.getGrind().getDescription]) %}
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% endfor %}\t\t
\t\t\t\t\t\t\t\t{% for grind in grinds %}\t\t
\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\">\t\t
\t\t\t\t\t\t\t\t\t\t{% if grind == presentation.getGrind().getDescription() %}
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default active\">{{ grind }}</button>
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">{{ grind }}</button>
\t\t\t\t\t\t\t\t\t\t{% endif %}\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class='row'>
\t\t\t\t\t<div class='col-xs-12 col-md-offset-3 col-md-6'>
\t\t\t\t\t\t<div id='cupSection'>
\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t<div class='prodInfoIconHeadings col-xs-offset-3 col-xs-6'>
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('imgs/icon9.svg') }}\">
\t\t\t\t\t\t\t\t\t<h4>{{ template.getCupScoringTitle() }}</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t<div id='cupMap' class='col-xs-12'>
\t\t\t\t\t\t\t\t<center><img src=\"{{ asset('imgs/cupScori\tng.png') }}\"></center>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
</section>
{% endblock %}
{% block javascripts %}
    {{ parent() }}
\t<script>
\t\tvar findPresentationUrl = \"{{ path('product_search_presentation')|escape('js') }}\";
\t\tvar getPriceUrl = \"{{ path('product_presentation_price')|escape('js') }}\";
\t</script>
\t<script src=\"{{ asset('js/product_information.js')}}\"></script>
\t
\t
{% endblock %}", "ProductBundle:Default:product_information.html.twig", "C:\\xampp\\htdocs\\crgc\\src\\ProductBundle/Resources/views/Default/product_information.html.twig");
    }
}
