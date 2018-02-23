<?php

/* ProductBundle:Default:product_information.html.twig */
class __TwigTemplate_345a4f8d2663af53f336d298bd0dc74eb3adc08e30a168caf36669ce4bc0d69e extends Twig_Template
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
        $__internal_0a688faf2ad793d2d74712796f34a2d9c6bd258b25c2dc542e9b5f19b4eb1b5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a688faf2ad793d2d74712796f34a2d9c6bd258b25c2dc542e9b5f19b4eb1b5b->enter($__internal_0a688faf2ad793d2d74712796f34a2d9c6bd258b25c2dc542e9b5f19b4eb1b5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProductBundle:Default:product_information.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a688faf2ad793d2d74712796f34a2d9c6bd258b25c2dc542e9b5f19b4eb1b5b->leave($__internal_0a688faf2ad793d2d74712796f34a2d9c6bd258b25c2dc542e9b5f19b4eb1b5b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9e329b7f9e2f0bd1f24edf6f3acee2c28e1b2d0bbc6e392a204fa0d54d41d702 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e329b7f9e2f0bd1f24edf6f3acee2c28e1b2d0bbc6e392a204fa0d54d41d702->enter($__internal_9e329b7f9e2f0bd1f24edf6f3acee2c28e1b2d0bbc6e392a204fa0d54d41d702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Product Information ";
        
        $__internal_9e329b7f9e2f0bd1f24edf6f3acee2c28e1b2d0bbc6e392a204fa0d54d41d702->leave($__internal_9e329b7f9e2f0bd1f24edf6f3acee2c28e1b2d0bbc6e392a204fa0d54d41d702_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3f182f78dcefabf9b927e6902b60d332539ba958c1448980781c314ff3476c0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f182f78dcefabf9b927e6902b60d332539ba958c1448980781c314ff3476c0b->enter($__internal_3f182f78dcefabf9b927e6902b60d332539ba958c1448980781c314ff3476c0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/css/product_information.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_3f182f78dcefabf9b927e6902b60d332539ba958c1448980781c314ff3476c0b->leave($__internal_3f182f78dcefabf9b927e6902b60d332539ba958c1448980781c314ff3476c0b_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_23f2594800c73d1b57d7fccb46550aee6f2bf9cd24dc055fa86ae900a6d8aaac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23f2594800c73d1b57d7fccb46550aee6f2bf9cd24dc055fa86ae900a6d8aaac->enter($__internal_23f2594800c73d1b57d7fccb46550aee6f2bf9cd24dc055fa86ae900a6d8aaac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<main>
<section>
    \t<div class='clearfix'></div>

\t\t\t<center>
\t\t\t\t<h2>";
        // line 15
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
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["farm"] ?? $this->getContext($context, "farm")), "getProducts", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["prod"]) {
            // line 24
            echo "\t\t                \t<div
\t\t                \t";
            // line 25
            if (($this->getAttribute($context["prod"], "getId", array(), "method") == $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "getId", array(), "method"))) {
                // line 26
                echo "\t\t\t                \tclass= \"item active\"
\t\t\t                ";
            } else {
                // line 28
                echo "\t\t\t                \tclass= \"item\"
\t\t\t                ";
            }
            // line 30
            echo "\t\t\t                 id=\"product\" data-product-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["prod"], "getId", array(), "method"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<div id='carouselHeading' >
\t\t\t\t\t\t\t\t\t<center><h3>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["prod"], "getName", array(), "method"), "html", null, true);
            echo "</h3></center>
\t\t\t\t\t\t\t\t</div>
\t\t\t                \t<div class=\"row-fluid\">
\t\t\t\t\t\t\t\t\t<div class=\"carouselCards col-xs-12 col-md-offset-2 col-md-8\">
\t\t\t\t\t\t\t\t\t\t<div class=\"productThumbnails\">
\t\t\t\t\t\t\t\t\t\t\t<div class='prodThumbInside'>
\t\t\t\t\t\t\t\t\t\t\t\t<img class='prodThumbImgs' src=\"";
            // line 38
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
        // line 45
        echo "\t\t                </div>
\t\t                \t";
        // line 46
        if ((twig_length_filter($this->env, $this->getAttribute(($context["farm"] ?? $this->getContext($context, "farm")), "getProducts", array())) > 1)) {
            // line 47
            echo "\t\t                <a class=\"left carousel-control\" href=\".both\" data-slide=\"prev\"></a>
\t\t                <a class=\"right carousel-control\" href=\".both\" data-slide=\"next\"></a>
\t\t                \t";
        }
        // line 50
        echo "\t                </div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- Second carrousel Begin -->

\t\t\t<div id='prodInfoCarouselContainer2' class='col-xs-offset-1 col-xs-10 col-md-offset-3 col-md-6' data-spy=\"affix\" data-offset-top=\"480\">
\t\t\t\t<div class=\"container col-xs-12\">
\t                <div id=\"myCarousel2\" class=\"carousel slide both\" data-interval=\"false\">
\t\t                <div class=\"carousel-inner\" role=\"listbox\">
\t\t                \t";
        // line 60
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
            // line 61
            echo "\t\t                \t<div
\t\t                \t";
            // line 62
            if ($this->getAttribute($context["loop"], "first", array())) {
                // line 63
                echo "\t\t\t                \tclass= \"item active\"
\t\t\t                ";
            } else {
                // line 65
                echo "\t\t\t                \tclass= \"item\"
\t\t\t                ";
            }
            // line 66
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
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["prod"], "getRank", array(), "method"), "html", null, true);
            echo "/5<span>&#x2605;</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<a class='stickyRow orderPresentation col-xs-4'>
\t\t\t\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon5.svg\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class='reviews col-xs-4'>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["prod"], "getReviews", array(), "method"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getReviewsTitle", array(), "method"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class='order row'>
\t\t\t\t\t\t\t\t\t<div class='col-xs-offset-4 col-xs-4'>
\t\t\t\t\t\t\t\t\t\t<a id=\"product\" data-product-id=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "getId", array(), "method"), "html", null, true);
            echo "\" class='orderPresentation prodInfoIconHeadOrder'>
\t\t\t\t\t\t\t\t\t\t\t<h4>";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getOrderTitle", array(), "method"), "html", null, true);
            echo "</h4>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class='row'>
\t\t\t\t\t\t\t\t\t<center><a class=\"btn btn-default btn-xs share\" href=\"";
            // line 95
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
        // line 99
        echo "\t\t                </div>
\t                </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t\t<!-- Second carrousel End -->

\t\t</section>
\t\t<div class='clearfix'></div>
\t\t<section>
\t\t<div id='prodInfoWidth'>
\t\t\t<div class='prodInfoPreferences row col-xs-offset-1 col-xs-10 col-md-offset-3 col-md-6'>
\t\t\t\t<div class='row'>
\t\t\t\t\t<div class='col-xs-12 col-md-6'>
\t\t\t\t\t\t<div id='informationSection'>
\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t<div class='prodInfoIconHeadings col-xs-offset-3 col-xs-6'>
\t\t\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon2.svg\">
\t\t\t\t\t\t\t\t\t<h4>";
        // line 118
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getInformationTitle", array(), "method"), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t\t\t</div>                                                                    
\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t<div id='prodInfoDetails' class='col-xs-12'>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<span>";
        // line 123
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getFarmTitle", array(), "method"), "html", null, true);
        echo ": </span><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("farm_information", array("farm_id" => $this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "getFarm", array(), "method"), "getId", array(), "method"))), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 124
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "getFarm", array(), "method"), "getName", array(), "method"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t</a></br>
\t\t\t\t\t\t\t\t\t<span>";
        // line 126
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getSpeciesTitle", array(), "method"), "html", null, true);
        echo ": </span>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getSpeciesInfo", array(), "method"), "html", null, true);
        echo "</br>
\t\t\t\t\t\t\t\t\t<span>";
        // line 127
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getCultivarTitle", array(), "method"), "html", null, true);
        echo ": </span>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "getCultivar", array(), "method"), "getDescription", array(), "method"), "html", null, true);
        echo "</br>
\t\t\t\t\t\t\t\t\t<span>";
        // line 128
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getGradeTitle", array(), "method"), "html", null, true);
        echo ": </span>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "getGrade", array(), "method"), "getDescription", array(), "method"), "html", null, true);
        echo "</br>
\t\t\t\t\t\t\t\t\t<span>";
        // line 129
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getProcessingTitle", array(), "method"), "html", null, true);
        echo ": </span>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "getProcessing", array(), "method"), "getDescription", array(), "method"), "html", null, true);
        echo "</br>
\t\t\t\t\t\t\t\t\t<span>";
        // line 130
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
\t\t\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon7.svg\">
\t\t\t\t\t\t\t\t\t<h4>";
        // line 140
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getRoastTitle", array(), "method"), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t<div class=\"btn-group btn-group-justified\" role=\"group\" aria-label=\"...\">
\t\t\t\t\t\t\t\t";
        // line 144
        $context["roasts"] = array();
        echo "\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        // line 145
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "getPresentations", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["presentation"]) {
            // line 146
            echo "   \t\t\t\t\t\t\t\t\t";
            if (!twig_in_filter($this->getAttribute($this->getAttribute($context["presentation"], "getRoast", array(), "method"), "getDescription", array(), "method"), ($context["roasts"] ?? $this->getContext($context, "roasts")))) {
                // line 147
                echo "\t\t\t\t\t\t\t\t\t\t";
                $context["roasts"] = twig_array_merge(($context["roasts"] ?? $this->getContext($context, "roasts")), array(0 => $this->getAttribute($this->getAttribute($context["presentation"], "getRoast", array(), "method"), "getDescription", array(), "method")));
                // line 148
                echo "\t\t\t\t\t\t\t\t\t";
            }
            // line 149
            echo "\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['presentation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "\t\t
\t\t\t\t\t\t\t\t";
        // line 150
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["roasts"] ?? $this->getContext($context, "roasts")));
        foreach ($context['_seq'] as $context["_key"] => $context["roast"]) {
            echo "\t\t
\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\">\t\t
\t\t\t\t\t\t\t\t\t\t";
            // line 152
            if (($context["roast"] == $this->getAttribute($this->getAttribute(($context["presentation"] ?? $this->getContext($context, "presentation")), "getRoast", array(), "method"), "getDescription", array()))) {
                // line 153
                echo "\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default active\">";
                echo twig_escape_filter($this->env, $context["roast"], "html", null, true);
                echo "</button>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 155
                echo "\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">";
                echo twig_escape_filter($this->env, $context["roast"], "html", null, true);
                echo "</button>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 156
            echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['roast'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class='row'>
\t\t\t\t\t<div class='col-xs-12 col-md-6'>
\t\t\t\t\t\t<div id='weightSection'>
\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t<div class='prodInfoIconHeadings col-xs-offset-3 col-xs-6'>
\t\t\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon10.svg\">
\t\t\t\t\t\t\t\t\t<h4>";
        // line 169
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getWeightTitle", array(), "method"), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t<div class=\"btn-group btn-group-justified\" role=\"group\" aria-label=\"...\">
\t\t\t\t\t\t\t\t";
        // line 173
        $context["weights"] = array();
        echo "\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        // line 174
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "getPresentations", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["presentation"]) {
            // line 175
            echo "   \t\t\t\t\t\t\t\t\t";
            if (!twig_in_filter($this->getAttribute($context["presentation"], "getWeight", array(), "method"), ($context["weights"] ?? $this->getContext($context, "weights")))) {
                // line 176
                echo "\t\t\t\t\t\t\t\t\t\t";
                $context["weights"] = twig_array_merge(($context["weights"] ?? $this->getContext($context, "weights")), array(0 => $this->getAttribute($context["presentation"], "getWeight", array(), "method")));
                // line 177
                echo "\t\t\t\t\t\t\t\t\t";
            }
            // line 178
            echo "\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['presentation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "\t\t
\t\t\t\t\t\t\t\t";
        // line 179
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["weights"] ?? $this->getContext($context, "weights")));
        foreach ($context['_seq'] as $context["_key"] => $context["weight"]) {
            echo "\t\t
\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\">\t\t
\t\t\t\t\t\t\t\t\t\t";
            // line 181
            if (($context["weight"] == $this->getAttribute(($context["presentation"] ?? $this->getContext($context, "presentation")), "getWeight", array(), "method"))) {
                // line 182
                echo "\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default active\">";
                echo twig_escape_filter($this->env, $context["weight"], "html", null, true);
                echo "</button>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 184
                echo "\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">";
                echo twig_escape_filter($this->env, $context["weight"], "html", null, true);
                echo "</button>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 185
            echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 188
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class='col-xs-12 col-md-6'>
\t\t\t\t\t\t<div id='grindSection'>
\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t<div class='prodInfoIconHeadings col-xs-offset-3 col-xs-6'>
\t\t\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon8.svg\">
\t\t\t\t\t\t\t\t\t<h4>";
        // line 196
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getGrindTitle", array(), "method"), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t<div class=\"btn-group btn-group-justified\" role=\"group\" aria-label=\"...\">
\t\t\t\t\t\t\t\t";
        // line 200
        $context["grinds"] = array();
        echo "\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        // line 201
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "getPresentations", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["presentation"]) {
            // line 202
            echo "   \t\t\t\t\t\t\t\t\t";
            if (!twig_in_filter($this->getAttribute($this->getAttribute($context["presentation"], "getGrind", array(), "method"), "getDescription", array(), "method"), ($context["grinds"] ?? $this->getContext($context, "grinds")))) {
                // line 203
                echo "\t\t\t\t\t\t\t\t\t\t";
                $context["grinds"] = twig_array_merge(($context["grinds"] ?? $this->getContext($context, "grinds")), array(0 => $this->getAttribute($this->getAttribute($context["presentation"], "getGrind", array(), "method"), "getDescription", array())));
                // line 204
                echo "\t\t\t\t\t\t\t\t\t";
            }
            // line 205
            echo "\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['presentation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "\t\t
\t\t\t\t\t\t\t\t";
        // line 206
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["grinds"] ?? $this->getContext($context, "grinds")));
        foreach ($context['_seq'] as $context["_key"] => $context["grind"]) {
            echo "\t\t
\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\">\t\t
\t\t\t\t\t\t\t\t\t\t";
            // line 208
            if (($context["grind"] == $this->getAttribute($this->getAttribute(($context["presentation"] ?? $this->getContext($context, "presentation")), "getGrind", array(), "method"), "getDescription", array(), "method"))) {
                // line 209
                echo "\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default active\">";
                echo twig_escape_filter($this->env, $context["grind"], "html", null, true);
                echo "</button>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 211
                echo "\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">";
                echo twig_escape_filter($this->env, $context["grind"], "html", null, true);
                echo "</button>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 212
            echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grind'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 215
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class='row'>
\t\t\t\t\t<div class='col-xs-12 col-md-offset-3 col-md-6'>
\t\t\t\t\t\t<div id='cupSection'>
\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t<div class='prodInfoIconHeadings col-xs-offset-3 col-xs-6'>
\t\t\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon9.svg\">
\t\t\t\t\t\t\t\t\t<h4>";
        // line 225
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getCupScoringTitle", array(), "method"), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t<div id='cupMap' class='col-xs-12'>
\t\t\t\t\t\t\t\t<center><img src=\"/web/public/imgs/cupScoring.png\"></center>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t</section>
\t</main>
\t

";
        
        $__internal_23f2594800c73d1b57d7fccb46550aee6f2bf9cd24dc055fa86ae900a6d8aaac->leave($__internal_23f2594800c73d1b57d7fccb46550aee6f2bf9cd24dc055fa86ae900a6d8aaac_prof);

    }

    // line 241
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a52ff479fd057351f82d51f2cc2a6e11cd7712a88610de84b2b4058ef8dc9207 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a52ff479fd057351f82d51f2cc2a6e11cd7712a88610de84b2b4058ef8dc9207->enter($__internal_a52ff479fd057351f82d51f2cc2a6e11cd7712a88610de84b2b4058ef8dc9207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 242
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/js/product_information.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_a52ff479fd057351f82d51f2cc2a6e11cd7712a88610de84b2b4058ef8dc9207->leave($__internal_a52ff479fd057351f82d51f2cc2a6e11cd7712a88610de84b2b4058ef8dc9207_prof);

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
        return array (  583 => 243,  578 => 242,  572 => 241,  549 => 225,  537 => 215,  529 => 212,  523 => 211,  517 => 209,  515 => 208,  508 => 206,  500 => 205,  497 => 204,  494 => 203,  491 => 202,  487 => 201,  483 => 200,  476 => 196,  466 => 188,  458 => 185,  452 => 184,  446 => 182,  444 => 181,  437 => 179,  429 => 178,  426 => 177,  423 => 176,  420 => 175,  416 => 174,  412 => 173,  405 => 169,  393 => 159,  385 => 156,  379 => 155,  373 => 153,  371 => 152,  364 => 150,  356 => 149,  353 => 148,  350 => 147,  347 => 146,  343 => 145,  339 => 144,  332 => 140,  317 => 130,  311 => 129,  305 => 128,  299 => 127,  293 => 126,  288 => 124,  282 => 123,  274 => 118,  253 => 99,  235 => 95,  227 => 90,  223 => 89,  213 => 84,  203 => 77,  190 => 66,  186 => 65,  182 => 63,  180 => 62,  177 => 61,  160 => 60,  148 => 50,  143 => 47,  141 => 46,  138 => 45,  125 => 38,  116 => 32,  110 => 30,  106 => 28,  102 => 26,  100 => 25,  97 => 24,  93 => 23,  82 => 15,  75 => 10,  69 => 9,  60 => 7,  55 => 6,  49 => 5,  37 => 3,  11 => 1,);
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
    <link rel=\"stylesheet\" href=\"{{ asset('/web/public/css/product_information.css') }}\" />
{% endblock %}
{% block body %}
<main>
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
\t\t\t\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon5.svg\">
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
\t\t<div id='prodInfoWidth'>
\t\t\t<div class='prodInfoPreferences row col-xs-offset-1 col-xs-10 col-md-offset-3 col-md-6'>
\t\t\t\t<div class='row'>
\t\t\t\t\t<div class='col-xs-12 col-md-6'>
\t\t\t\t\t\t<div id='informationSection'>
\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t<div class='prodInfoIconHeadings col-xs-offset-3 col-xs-6'>
\t\t\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon2.svg\">
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
\t\t\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon7.svg\">
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
\t\t\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon10.svg\">
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
\t\t\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon8.svg\">
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
\t\t\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon9.svg\">
\t\t\t\t\t\t\t\t\t<h4>{{ template.getCupScoringTitle() }}</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t<div id='cupMap' class='col-xs-12'>
\t\t\t\t\t\t\t\t<center><img src=\"/web/public/imgs/cupScoring.png\"></center>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t</section>
\t</main>
\t

{% endblock %}
{% block javascripts %}
    {{ parent() }}
\t<script src=\"{{ asset('/web/public/js/product_information.js')}}\"></script>
{% endblock %}", "ProductBundle:Default:product_information.html.twig", "/home/crgourme/public_html/src/ProductBundle/Resources/views/Default/product_information.html.twig");
    }
}
