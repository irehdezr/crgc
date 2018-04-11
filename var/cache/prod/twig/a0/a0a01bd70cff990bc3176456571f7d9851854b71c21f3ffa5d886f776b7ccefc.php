<?php

/* @Product/Default/product_information.html.twig */
class __TwigTemplate_8dcb320179a49a430fdd27a4f98a4e9794fa588d7e1e72ea35238fed388a325e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "@Product/Default/product_information.html.twig", 1);
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
        echo "<section>
    \t<div class='clearfix'></div>

\t\t\t<center>
\t\t\t\t<h2>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? null), "getPageTitle", array(), "method"), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["farm"] ?? null), "getProducts", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["prod"]) {
            // line 23
            echo "\t\t                \t<div
\t\t                \t";
            // line 24
            if (($this->getAttribute($context["prod"], "getId", array(), "method") == $this->getAttribute(($context["product"] ?? null), "getId", array(), "method"))) {
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
        if ((twig_length_filter($this->env, $this->getAttribute(($context["farm"] ?? null), "getProducts", array())) > 1)) {
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? null), "getInformationTitle", array(), "method"), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t\t\t</div>                                                                    
\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t<div id='prodInfoDetails' class='col-xs-12'>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<span>";
        // line 122
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? null), "getFarmTitle", array(), "method"), "html", null, true);
        echo ": </span><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("farm_information", array("farm_id" => $this->getAttribute($this->getAttribute(($context["product"] ?? null), "getFarm", array(), "method"), "getId", array(), "method"))), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 123
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["product"] ?? null), "getFarm", array(), "method"), "getName", array(), "method"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t</a></br>
\t\t\t\t\t\t\t\t\t<span>";
        // line 125
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? null), "getSpeciesTitle", array(), "method"), "html", null, true);
        echo ": </span>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? null), "getSpeciesInfo", array(), "method"), "html", null, true);
        echo "</br>
\t\t\t\t\t\t\t\t\t<span>";
        // line 126
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? null), "getCultivarTitle", array(), "method"), "html", null, true);
        echo ": </span>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["product"] ?? null), "getCultivar", array(), "method"), "getDescription", array(), "method"), "html", null, true);
        echo "</br>
\t\t\t\t\t\t\t\t\t<span>";
        // line 127
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? null), "getGradeTitle", array(), "method"), "html", null, true);
        echo ": </span>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["product"] ?? null), "getGrade", array(), "method"), "getDescription", array(), "method"), "html", null, true);
        echo "</br>
\t\t\t\t\t\t\t\t\t<span>";
        // line 128
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? null), "getProcessingTitle", array(), "method"), "html", null, true);
        echo ": </span>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["product"] ?? null), "getProcessing", array(), "method"), "getDescription", array(), "method"), "html", null, true);
        echo "</br>
\t\t\t\t\t\t\t\t\t<span>";
        // line 129
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? null), "getFlavorNotesTitle", array(), "method"), "html", null, true);
        echo ": </span>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["product"] ?? null), "getFlavor", array(), "method"), "getNotes", array(), "method"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? null), "getRoastTitle", array(), "method"), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["product"] ?? null), "getPresentations", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["presentation"]) {
            // line 145
            echo "   \t\t\t\t\t\t\t\t\t";
            if (!twig_in_filter($this->getAttribute($this->getAttribute($context["presentation"], "getRoast", array(), "method"), "getDescription", array(), "method"), ($context["roasts"] ?? null))) {
                // line 146
                echo "\t\t\t\t\t\t\t\t\t\t";
                $context["roasts"] = twig_array_merge(($context["roasts"] ?? null), array(0 => $this->getAttribute($this->getAttribute($context["presentation"], "getRoast", array(), "method"), "getDescription", array(), "method")));
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
        $context['_seq'] = twig_ensure_traversable(($context["roasts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["roast"]) {
            echo "\t\t
\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\">\t\t
\t\t\t\t\t\t\t\t\t\t";
            // line 151
            if (($context["roast"] == $this->getAttribute($this->getAttribute(($context["presentation"] ?? null), "getRoast", array(), "method"), "getDescription", array()))) {
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? null), "getWeightTitle", array(), "method"), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["product"] ?? null), "getPresentations", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["presentation"]) {
            // line 174
            echo "   \t\t\t\t\t\t\t\t\t";
            if (!twig_in_filter($this->getAttribute($context["presentation"], "getWeight", array(), "method"), ($context["weights"] ?? null))) {
                // line 175
                echo "\t\t\t\t\t\t\t\t\t\t";
                $context["weights"] = twig_array_merge(($context["weights"] ?? null), array(0 => $this->getAttribute($context["presentation"], "getWeight", array(), "method")));
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
        $context['_seq'] = twig_ensure_traversable(($context["weights"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight"]) {
            echo "\t\t
\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\">\t\t
\t\t\t\t\t\t\t\t\t\t";
            // line 180
            if (($context["weight"] == $this->getAttribute(($context["presentation"] ?? null), "getWeight", array(), "method"))) {
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? null), "getGrindTitle", array(), "method"), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["product"] ?? null), "getPresentations", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["presentation"]) {
            // line 201
            echo "   \t\t\t\t\t\t\t\t\t";
            if (!twig_in_filter($this->getAttribute($this->getAttribute($context["presentation"], "getGrind", array(), "method"), "getDescription", array(), "method"), ($context["grinds"] ?? null))) {
                // line 202
                echo "\t\t\t\t\t\t\t\t\t\t";
                $context["grinds"] = twig_array_merge(($context["grinds"] ?? null), array(0 => $this->getAttribute($this->getAttribute($context["presentation"], "getGrind", array(), "method"), "getDescription", array())));
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
        $context['_seq'] = twig_ensure_traversable(($context["grinds"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["grind"]) {
            echo "\t\t
\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\">\t\t
\t\t\t\t\t\t\t\t\t\t";
            // line 207
            if (($context["grind"] == $this->getAttribute($this->getAttribute(($context["presentation"] ?? null), "getGrind", array(), "method"), "getDescription", array(), "method"))) {
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? null), "getCupScoringTitle", array(), "method"), "html", null, true);
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
    }

    // line 238
    public function block_javascripts($context, array $blocks = array())
    {
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
    }

    public function getTemplateName()
    {
        return "@Product/Default/product_information.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  584 => 244,  579 => 242,  575 => 241,  569 => 239,  566 => 238,  552 => 228,  545 => 224,  541 => 223,  530 => 214,  522 => 211,  516 => 210,  510 => 208,  508 => 207,  501 => 205,  493 => 204,  490 => 203,  487 => 202,  484 => 201,  480 => 200,  476 => 199,  469 => 195,  465 => 194,  456 => 187,  448 => 184,  442 => 183,  436 => 181,  434 => 180,  427 => 178,  419 => 177,  416 => 176,  413 => 175,  410 => 174,  406 => 173,  402 => 172,  395 => 168,  391 => 167,  380 => 158,  372 => 155,  366 => 154,  360 => 152,  358 => 151,  351 => 149,  343 => 148,  340 => 147,  337 => 146,  334 => 145,  330 => 144,  326 => 143,  319 => 139,  315 => 138,  301 => 129,  295 => 128,  289 => 127,  283 => 126,  277 => 125,  272 => 123,  266 => 122,  258 => 117,  254 => 116,  234 => 98,  216 => 94,  208 => 89,  204 => 88,  194 => 83,  188 => 80,  181 => 76,  168 => 65,  164 => 64,  160 => 62,  158 => 61,  155 => 60,  138 => 59,  126 => 49,  121 => 46,  119 => 45,  116 => 44,  103 => 37,  94 => 31,  88 => 29,  84 => 27,  80 => 25,  78 => 24,  75 => 23,  71 => 22,  60 => 14,  54 => 10,  51 => 9,  45 => 7,  40 => 6,  37 => 5,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Product/Default/product_information.html.twig", "C:\\xampp\\htdocs\\crgc\\src\\ProductBundle\\Resources\\views\\Default\\product_information.html.twig");
    }
}
