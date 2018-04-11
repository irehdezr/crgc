<?php

/* PageBundle:Default:product_information.html.twig */
class __TwigTemplate_59dcef4d1b287c5a0629482465a800db1ea0df86b382d537b05bba35e17071e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "PageBundle:Default:product_information.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " Product Information ";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/product_information.css"), "html", null, true);
        echo "\" />
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "<main>
<section>
\t\t<div id='prodInfoWidth'>
\t\t\t<center><h2>
\t\t\t\t\t";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? null), "getPageTitle", array(), "method"), "html", null, true);
        echo "</h2></center>
\t\t<section>
\t\t\t<div id='prodInfoSection' class='col-xs-offset-1 col-xs-10 col-md-offset-3 col-md-6'>
\t\t\t\t<div id='prodInfoCarouselContainer' class=\"container col-xs-12\">
\t                <div id=\"myCarousel\" class=\"carousel slide both\" data-interval=\"false\">
\t\t                <div class=\"carousel-inner\" role=\"listbox\">
\t\t                \t";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["farm"] ?? null), "getProducts", array()));
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
            // line 21
            echo "\t\t                \t<div
\t\t                \t";
            // line 22
            if ($this->getAttribute($context["loop"], "first", array())) {
                // line 23
                echo "\t\t\t                \tclass= \"item active\"
\t\t\t                ";
            } else {
                // line 25
                echo "\t\t\t                \tclass= \"item\"
\t\t\t                ";
            }
            // line 27
            echo "\t\t\t                >
\t\t\t\t\t\t\t\t<div id='carouselHeading' >
\t\t\t\t\t\t\t\t\t<center><h3>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "getName", array(), "method"), "html", null, true);
            echo "</h3></center>
\t\t\t\t\t\t\t\t</div>
\t\t\t                \t<div class=\"row-fluid\">
\t\t\t\t\t\t\t\t\t<div class=\"carouselCards col-xs-12 col-md-offset-2 col-md-8\">
\t\t\t\t\t\t\t\t\t\t<div class=\"productThumbnails\">
\t\t\t\t\t\t\t\t\t\t\t<div class='prodThumbInside'>
\t\t\t\t\t\t\t\t\t\t\t\t<img class='prodThumbImgs' src=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "getImage", array(), "method"), "html", null, true);
            echo " \">\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t                \t</div>
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
        // line 42
        echo "\t\t                </div>
\t\t                <a class=\"left carousel-control\" href=\".both\" data-slide=\"prev\"></a>
\t\t                <a class=\"right carousel-control\" href=\".both\" data-slide=\"next\"></a>
\t                </div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- Second carrousel Begin -->

\t\t\t<div id='prodInfoCarouselContainer2' class='col-xs-offset-1 col-xs-10 col-md-offset-3 col-md-6' data-spy=\"affix\" data-offset-top=\"480\">
\t\t\t\t<div class=\"container col-xs-12\">
\t                <div id=\"myCarousel2\" class=\"carousel slide both\" data-interval=\"false\">
\t\t                <div class=\"carousel-inner\" role=\"listbox\">
\t\t\t                <div class=\"item active\">
\t\t\t                \t<div class='row'>
\t\t\t\t\t\t\t\t\t<a class='prodInfoIconHeadOrder col-xs-offset-4 col-xs-4' href=\"#\">
\t\t\t\t\t\t\t\t\t\t<div class='col-xs-12'>
\t\t\t\t\t\t\t\t\t\t\t<center><p class='price'>\$ ";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute(($context["presentation"] ?? null), "getPrice", array(), "method"), "html", null, true);
        echo "</p></center>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class='stickyRow row'>
\t\t\t\t\t\t\t\t\t<div class='ratingCont col-xs-4'>
\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 66
        $context["rank"] = 0;
        // line 67
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute(($context["product"] ?? null), "getRank", array(), "method")));
        foreach ($context['_seq'] as $context["_key"] => $context["inx"]) {
            // line 68
            echo "\t\t\t\t\t\t\t\t\t\t\t \t";
            $context["rank"] = (($context["rank"] ?? null) + 1);
            // line 69
            echo "\t\t\t\t\t\t\t\t\t\t\t \t<span>&#x2605;</span>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inx'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        if ((($context["rank"] ?? null) < 5)) {
            // line 72
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(($context["rank"] ?? null), 4));
            foreach ($context['_seq'] as $context["_key"] => $context["inx2"]) {
                // line 73
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["rank"] = (($context["rank"] ?? null) + 1);
                // line 74
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span>&#x2606;</span>
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inx2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 77
        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<a class='stickyRow col-xs-4' href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon5.svg\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class='reviews col-xs-4'>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "getReviews", array(), "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? null), "getReviewsTitle", array(), "method"), "html", null, true);
        echo "</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class='order row'>
\t\t\t\t\t\t\t\t\t<div class='col-xs-offset-4 col-xs-4'>
\t\t\t\t\t\t\t\t\t\t<a id=\"product\" data-product-id=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "getId", array(), "method"), "html", null, true);
        echo "\" class='orderPresentation prodInfoIconHeadOrder'>
\t\t\t\t\t\t\t\t\t\t\t<h4>";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? null), "getOrderTitle", array(), "method"), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class='row'>
\t\t\t\t\t\t\t\t\t<center><a class=\"btn btn-default btn-xs share\" href=\"#\"><span class=\"glyphicon glyphicon-share\" aria-hidden=\"true\"></span> Share</a></center>
\t\t\t\t\t\t\t\t</div>
\t\t\t                </div>
\t\t\t                 
\t\t\t                <div class=\"item\">
\t\t\t                \t<div class='row'>
\t\t\t\t\t\t\t\t\t<a class='prodInfoIconHeadOrder col-xs-offset-4 col-xs-4' href=\"#\">
\t\t\t\t\t\t\t\t\t\t<div class='col-xs-12'>
\t\t\t\t\t\t\t\t\t\t\t<center><p class='price'>\$19.99</p></center>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class='stickyRow row'>
\t\t\t\t\t\t\t\t\t<div class='ratingCont col-xs-4'>
\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t<span>&#x2605;</span><span>&#x2605;</span><span>&#x2605;</span><span>&#x2606;</span><span>&#x2606;</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<a class='stickyRow col-xs-4' href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon5.svg\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class='reviews col-xs-4'>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">7 reviews</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class='order row'>
\t\t\t\t\t\t\t\t\t<div class='col-xs-offset-4 col-xs-4'>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<h4>Order</h4>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class='row'>
\t\t\t\t\t\t\t\t\t<center><a class=\"btn btn-default btn-xs share\" href=\"#\"><span class=\"glyphicon glyphicon-share\" aria-hidden=\"true\"></span> Share</a></center>
\t\t\t\t\t\t\t\t</div>
\t\t\t                </div>
\t\t\t                 
\t\t\t                <div class=\"item\">
\t\t\t                \t<div class='row'>
\t\t\t\t\t\t\t\t\t<a class='prodInfoIconHeadOrder col-xs-offset-4 col-xs-4' href=\"#\">
\t\t\t\t\t\t\t\t\t\t<div class='col-xs-12'>
\t\t\t\t\t\t\t\t\t\t\t<center><p class='price'>\$39.99</p></center>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class='stickyRow row'>
\t\t\t\t\t\t\t\t\t<div class='ratingCont col-xs-4'>
\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t<span>&#x2605;</span><span>&#x2605;</span><span>&#x2605;</span><span>&#x2606;</span><span>&#x2606;</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<a class='stickyRow col-xs-4' href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon5.svg\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class='reviews col-xs-4'>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">16 reviews</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class='order row'>
\t\t\t\t\t\t\t\t\t<div class='col-xs-offset-4 col-xs-4'>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<h4>Order</h4>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class='row'>
\t\t\t\t\t\t\t\t\t<center><a class=\"btn btn-xs share\" href=\"#\"><span class=\"glyphicon glyphicon-share\" aria-hidden=\"true\"></span> Share</a></center>
\t\t\t\t\t\t\t\t</div>
\t\t\t                </div>
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
\t\t\t\t\t\t\t\t\t<h4>Information</h4>
\t\t\t\t\t\t\t\t</div>                                                                    
\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t<div id='prodInfoDetails' class='col-xs-12'>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<span>Farm: </span><a class='btn btn-default btn-xs' href=\"#\">Tortuga</a></br>
\t\t\t\t\t\t\t\t\t<span>Species: </span>Arabica</br>
\t\t\t\t\t\t\t\t\t<span>Cultivar: </span>Caturra</br>
\t\t\t\t\t\t\t\t\t<span>Grade: </span>SHB</br>
\t\t\t\t\t\t\t\t\t<span>Processing: </span>Washed</br>
\t\t\t\t\t\t\t\t\t<span>Flavor notes: </span>Dried frutis and chocolate</br>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class='col-xs-12 col-md-6'>
\t\t\t\t\t\t<div id='roastSection'>
\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t<div class='prodInfoIconHeadings col-xs-offset-3 col-xs-6'>
\t\t\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon7.svg\">
\t\t\t\t\t\t\t\t\t<h4>Roast</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t<div class=\"btn-group btn-group-justified\" role=\"group\" aria-label=\"...\">
\t\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default active\">Light</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">Medium</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">Dark</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class='row'>
\t\t\t\t\t<div class='col-xs-12 col-md-6'>
\t\t\t\t\t\t<div id='presentationSection'>
\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t<div class='prodInfoIconHeadings col-xs-offset-3 col-xs-6'>
\t\t\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon10.svg\">
\t\t\t\t\t\t\t\t\t<h4>Weight</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t<div class=\"btn-group btn-group-justified\" role=\"group\" aria-label=\"...\">
\t\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">32 oz</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default active\">12 oz</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">32 oz</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">12 oz</button>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class='col-xs-12 col-md-6'>
\t\t\t\t\t\t<div id='presentationSection'>
\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t<div class='prodInfoIconHeadings col-xs-offset-3 col-xs-6'>
\t\t\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon8.svg\">
\t\t\t\t\t\t\t\t\t<h4>Grind</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t<div class=\"btn-group btn-group-justified\" role=\"group\" aria-label=\"...\">
\t\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">Whole Bean</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default active\">Ground</button>
\t\t\t\t\t\t\t\t</div>
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
\t\t\t\t\t\t\t\t\t<h4>Cup Scoring</h4>
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
    }

    // line 286
    public function block_javascripts($context, array $blocks = array())
    {
        // line 287
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script src=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/js/product_information.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "PageBundle:Default:product_information.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  431 => 288,  426 => 287,  423 => 286,  222 => 89,  218 => 88,  208 => 83,  200 => 77,  197 => 76,  190 => 74,  187 => 73,  182 => 72,  179 => 71,  172 => 69,  169 => 68,  164 => 67,  162 => 66,  152 => 59,  133 => 42,  112 => 35,  103 => 29,  99 => 27,  95 => 25,  91 => 23,  89 => 22,  86 => 21,  69 => 20,  60 => 14,  54 => 10,  51 => 9,  45 => 7,  40 => 6,  37 => 5,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PageBundle:Default:product_information.html.twig", "C:\\xampp\\htdocs\\crgc\\src\\PageBundle/Resources/views/Default/product_information.html.twig");
    }
}
