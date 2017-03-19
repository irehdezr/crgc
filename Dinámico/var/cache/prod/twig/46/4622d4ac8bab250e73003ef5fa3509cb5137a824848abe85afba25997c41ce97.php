<?php

/* PageBundle:Default:product_information.html.twig */
class __TwigTemplate_bf2bd09330bd4a0c5cb61487a9ab2f7c4b51064b335a5216745c01e1fff95c4a extends Twig_Template
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
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7918cb687c0e9e1c5a368e806957ffffc09c94141bd54ff50a9e920f672e6975 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7918cb687c0e9e1c5a368e806957ffffc09c94141bd54ff50a9e920f672e6975->enter($__internal_7918cb687c0e9e1c5a368e806957ffffc09c94141bd54ff50a9e920f672e6975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:product_information.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7918cb687c0e9e1c5a368e806957ffffc09c94141bd54ff50a9e920f672e6975->leave($__internal_7918cb687c0e9e1c5a368e806957ffffc09c94141bd54ff50a9e920f672e6975_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ca5987186c1cdd3ec963d19f77e76a4e77051487fbd4395bc0d7b58ca5193894 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca5987186c1cdd3ec963d19f77e76a4e77051487fbd4395bc0d7b58ca5193894->enter($__internal_ca5987186c1cdd3ec963d19f77e76a4e77051487fbd4395bc0d7b58ca5193894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Farm Information ";
        
        $__internal_ca5987186c1cdd3ec963d19f77e76a4e77051487fbd4395bc0d7b58ca5193894->leave($__internal_ca5987186c1cdd3ec963d19f77e76a4e77051487fbd4395bc0d7b58ca5193894_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c453293469416d0339ce10bec3b69870627b95d327a9b53a7046105b13e6dcbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c453293469416d0339ce10bec3b69870627b95d327a9b53a7046105b13e6dcbd->enter($__internal_c453293469416d0339ce10bec3b69870627b95d327a9b53a7046105b13e6dcbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/product_information.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_c453293469416d0339ce10bec3b69870627b95d327a9b53a7046105b13e6dcbd->leave($__internal_c453293469416d0339ce10bec3b69870627b95d327a9b53a7046105b13e6dcbd_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_022b74c64bb6e480370a03467f6c144d2017c82f407cc4169678b474adae5c02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_022b74c64bb6e480370a03467f6c144d2017c82f407cc4169678b474adae5c02->enter($__internal_022b74c64bb6e480370a03467f6c144d2017c82f407cc4169678b474adae5c02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<main>
\t\t<section>
\t\t\t<center><h2>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getPageTitle", array(), "method"), "html", null, true);
        echo "</h2></center>
\t\t\t<div id='carouselHeading' class='col-xs-offset-1 col-xs-10 col-md-offset-3 col-md-6'>
\t\t\t\t<center><h3>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "getName", array(), "method"), "html", null, true);
        echo "</h3></center>
\t\t\t</div>
\t\t\t<div id='prodInfoSection' class='col-xs-offset-1 col-xs-10 col-md-offset-3 col-md-6'>
\t\t\t\t<div id='prodInfoCarouselContainer' class=\"container col-xs-12\">
\t                <div id=\"myCarousel\" class=\"carousel slide\" data-interval=\"false\">
\t\t                <div class=\"carousel-inner\" role=\"listbox\">
\t\t\t                <div class=\"item active\">
\t\t\t                \t<div class=\"row-fluid\">
\t\t\t\t\t\t\t\t\t<div class=\"carouselCards col-xs-12 col-md-offset-2 col-md-8\">
\t\t\t\t\t\t\t\t\t\t<div class=\"productThumbnails\">
\t\t\t\t\t\t\t\t\t\t\t<div class='prodThumbInside'>
\t\t\t\t\t\t\t\t\t\t\t\t<img class='prodThumbImgs' src=\" ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "getImage", array(), "method"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class='row'>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getFarmTitle", array(), "method"), "html", null, true);
        echo ": 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a id='prodInfofarmInfo' href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("farm_information", array("farm_id" => $this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "getFarm", array(), "method"), "getId", array(), "method"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "getFarm", array(), "method"), "getName", array(), "method"), "html", null, true);
        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t\t\t<div class='row'>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='col-xs-12'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class='price'>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute(($context["presentation"] ?? $this->getContext($context, "presentation")), "getPrice", array(), "method"), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class='row'>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class='prodInfoIconHeadOrder col-xs-offset-4 col-xs-4' href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon5.svg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getOrderTitle", array(), "method"), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class='row'>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='col-xs-12 col-md-6'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 45
        $context["rank"] = 0;
        // line 46
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "getRank", array(), "method")));
        foreach ($context['_seq'] as $context["_key"] => $context["inx"]) {
            // line 47
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t";
            $context["rank"] = (($context["rank"] ?? $this->getContext($context, "rank")) + 1);
            // line 48
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t<span>&#x2605;</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inx'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        if ((($context["rank"] ?? $this->getContext($context, "rank")) < 5)) {
            // line 51
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(($context["rank"] ?? $this->getContext($context, "rank")), 4));
            foreach ($context['_seq'] as $context["_key"] => $context["inx2"]) {
                // line 52
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t";
                $context["rank"] = (($context["rank"] ?? $this->getContext($context, "rank")) + 1);
                // line 53
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t<span>&#x2606;</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inx2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 56
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='col-xs-12 col-md-6'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "getReviews", array(), "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getReviewsTitle", array(), "method"), "html", null, true);
        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t                \t</div>
\t\t\t                </div>
\t\t\t                 
\t\t\t                <div class=\"item\">
\t\t\t                \t<div class=\"row-fluid\">
\t\t\t\t\t\t\t\t\t<div class=\"carouselCards col-xs-12 col-md-offset-2 col-md-8\">
\t\t\t\t\t\t\t\t\t\t<div class=\"productThumbnails\">
\t\t\t\t\t\t\t\t\t\t\t<div class='prodThumbInside'>
\t\t\t\t\t\t\t\t\t\t\t\t<img class='prodThumbImgs' src=\"/web/public/imgs/coffeeBag2.png\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class='row'>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Farm: <a id='prodInfofarmInfo' href=\"\">Tortuga</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t\t\t<div class='row'>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='col-xs-12'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class='price'>\$29.99</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class='row'>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class='prodInfoIconHeadOrder col-xs-offset-4 col-xs-4' href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon5.svg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Order</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class='row'>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='col-xs-12 col-md-6'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>&#x2605;</span><span>&#x2605;</span><span>&#x2605;</span><span>&#x2606;</span><span>&#x2606;</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='col-xs-12 col-md-6'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">12 reviews</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t                \t</div>
\t\t\t                </div>
\t\t\t                 
\t\t\t                <div class=\"item\">
\t\t\t                \t<div class=\"row-fluid\">
\t\t\t\t\t\t\t\t\t<div class=\"carouselCards col-xs-12 col-md-offset-2 col-md-8\">
\t\t\t\t\t\t\t\t\t\t<div class=\"productThumbnails\">
\t\t\t\t\t\t\t\t\t\t\t<div class='prodThumbInside'>
\t\t\t\t\t\t\t\t\t\t\t\t<img class='prodThumbImgs' src=\"/web/public/imgs/coffeeBag3.png\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class='row'>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Farm: <a id='prodInfofarmInfo' href=\"\">Tortuga</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class='price'>\$29.99</p>
\t\t\t\t\t\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t\t\t\t\t\t<div class='row'>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class='prodInfoIconHeadOrder col-xs-offset-4 col-xs-4' href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon5.svg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Order</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class='row'>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='col-xs-12 col-md-6'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>&#x2605;</span><span>&#x2605;</span><span>&#x2605;</span><span>&#x2606;</span><span>&#x2606;</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='col-xs-12 col-md-6'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">12 reviews</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t                \t</div>
\t\t\t                </div>
\t\t                </div>
\t\t                <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\"></a>
\t\t                <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\"></a>
\t                </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<div class='clearfix'></div>
\t\t<section>
\t\t\t<div class='prodInfoPreferences row col-xs-offset-1 col-xs-10 col-md-offset-3 col-md-6'>
\t\t\t\t<div class='row'>
\t\t\t\t\t<div class='col-xs-12 col-md-6'>
\t\t\t\t\t\t<div id='informationSection'>
\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t<div class='prodInfoIconHeadings col-xs-offset-3 col-xs-6'>
\t\t\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon2.svg\">
\t\t\t\t\t\t\t\t\t<h4>";
        // line 153
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getInformationTitle", array(), "method"), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t<div id='prodInfoDetails' class='col-xs-12'>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<span>";
        // line 158
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getSpeciesTitle", array(), "method"), "html", null, true);
        echo ": </span></br>
\t\t\t\t\t\t\t\t\t<span>";
        // line 159
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getCultivarTitle", array(), "method"), "html", null, true);
        echo ": </span></br>
\t\t\t\t\t\t\t\t\t<span>";
        // line 160
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getGradeTitle", array(), "method"), "html", null, true);
        echo ": </span></br>
\t\t\t\t\t\t\t\t\t<span>";
        // line 161
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getProcessingTitle", array(), "method"), "html", null, true);
        echo ": </span></br>
\t\t\t\t\t\t\t\t\t<span>";
        // line 162
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getFlavorNotesTitle", array(), "method"), "html", null, true);
        echo "</span></br>
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
        // line 172
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getRoastTitle", array(), "method"), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t<div class=\"btn-group btn-group-justified\" role=\"group\" aria-label=\"...\">
\t\t\t\t\t\t\t\t";
        // line 176
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "getPresentations", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["pPresentation"]) {
            echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">";
            // line 178
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["pPresentation"], "getRoast", array(), "method"), "getDescription", array(), "method"), "html", null, true);
            echo "</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pPresentation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 181
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class='row'>
\t\t\t\t\t<div class='col-xs-12 col-md-6'>
\t\t\t\t\t\t<div id='presentationSection'>
\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t<div class='prodInfoIconHeadings col-xs-offset-3 col-xs-6'>
\t\t\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon10.svg\">
\t\t\t\t\t\t\t\t\t<h4>";
        // line 191
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getWeightTitle", array(), "method"), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t<div class=\"btn-group btn-group-justified\" role=\"group\" aria-label=\"...\">
\t\t\t\t\t\t\t\t";
        // line 195
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "getPresentations", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["pPresentation"]) {
            echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">";
            // line 197
            echo twig_escape_filter($this->env, $this->getAttribute($context["pPresentation"], "getWeight", array(), "method"), "html", null, true);
            echo "</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pPresentation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 200
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class='col-xs-12 col-md-6'>
\t\t\t\t\t\t<div id='presentationSection'>
\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t<div class='prodInfoIconHeadings col-xs-offset-3 col-xs-6'>
\t\t\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon8.svg\">
\t\t\t\t\t\t\t\t\t<h4>";
        // line 208
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getWeightTitle", array(), "method"), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t<div class=\"btn-group btn-group-justified\" role=\"group\" aria-label=\"...\">
\t\t\t\t\t\t\t\t";
        // line 212
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "getPresentations", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["pPresentation"]) {
            echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">";
            // line 214
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["pPresentation"], "getGrind", array(), "method"), "getDescription", array(), "method"), "html", null, true);
            echo "</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pPresentation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 217
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
        // line 227
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
\t\t</section>
\t</main>
";
        
        $__internal_022b74c64bb6e480370a03467f6c144d2017c82f407cc4169678b474adae5c02->leave($__internal_022b74c64bb6e480370a03467f6c144d2017c82f407cc4169678b474adae5c02_prof);

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
        return array (  416 => 227,  404 => 217,  395 => 214,  388 => 212,  381 => 208,  371 => 200,  362 => 197,  355 => 195,  348 => 191,  336 => 181,  327 => 178,  320 => 176,  313 => 172,  300 => 162,  296 => 161,  292 => 160,  288 => 159,  284 => 158,  276 => 153,  177 => 59,  172 => 56,  169 => 55,  162 => 53,  159 => 52,  154 => 51,  151 => 50,  144 => 48,  141 => 47,  136 => 46,  134 => 45,  125 => 39,  116 => 33,  106 => 28,  102 => 27,  97 => 25,  83 => 14,  78 => 12,  74 => 10,  68 => 9,  59 => 7,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
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
    <link rel=\"stylesheet\" href=\"{{ asset('public/css/product_information.css') }}\" />
{% endblock %}
{% block body %}
<main>
\t\t<section>
\t\t\t<center><h2>{{ template.getPageTitle() }}</h2></center>
\t\t\t<div id='carouselHeading' class='col-xs-offset-1 col-xs-10 col-md-offset-3 col-md-6'>
\t\t\t\t<center><h3>{{ product.getName() }}</h3></center>
\t\t\t</div>
\t\t\t<div id='prodInfoSection' class='col-xs-offset-1 col-xs-10 col-md-offset-3 col-md-6'>
\t\t\t\t<div id='prodInfoCarouselContainer' class=\"container col-xs-12\">
\t                <div id=\"myCarousel\" class=\"carousel slide\" data-interval=\"false\">
\t\t                <div class=\"carousel-inner\" role=\"listbox\">
\t\t\t                <div class=\"item active\">
\t\t\t                \t<div class=\"row-fluid\">
\t\t\t\t\t\t\t\t\t<div class=\"carouselCards col-xs-12 col-md-offset-2 col-md-8\">
\t\t\t\t\t\t\t\t\t\t<div class=\"productThumbnails\">
\t\t\t\t\t\t\t\t\t\t\t<div class='prodThumbInside'>
\t\t\t\t\t\t\t\t\t\t\t\t<img class='prodThumbImgs' src=\" {{ product.getImage() }}\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class='row'>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>{{ template.getFarmTitle() }}: 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a id='prodInfofarmInfo' href=\"{{ path('farm_information',{'farm_id':product.getFarm().getId()}) }}\">{{ product.getFarm().getName() }}</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t\t\t<div class='row'>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='col-xs-12'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class='price'>{{ presentation.getPrice() }}</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class='row'>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class='prodInfoIconHeadOrder col-xs-offset-4 col-xs-4' href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon5.svg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>{{ template.getOrderTitle() }}</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class='row'>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='col-xs-12 col-md-6'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% set rank= 0 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for inx in 1..product.getRank() %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t{% set rank = rank+1 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t<span>&#x2605;</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if rank < 5 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for inx2 in rank..4 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t{% set rank = rank+1 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t<span>&#x2606;</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='col-xs-12 col-md-6'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">{{ product.getReviews() }} {{ template.getReviewsTitle() }}</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t                \t</div>
\t\t\t                </div>
\t\t\t                 
\t\t\t                <div class=\"item\">
\t\t\t                \t<div class=\"row-fluid\">
\t\t\t\t\t\t\t\t\t<div class=\"carouselCards col-xs-12 col-md-offset-2 col-md-8\">
\t\t\t\t\t\t\t\t\t\t<div class=\"productThumbnails\">
\t\t\t\t\t\t\t\t\t\t\t<div class='prodThumbInside'>
\t\t\t\t\t\t\t\t\t\t\t\t<img class='prodThumbImgs' src=\"/web/public/imgs/coffeeBag2.png\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class='row'>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Farm: <a id='prodInfofarmInfo' href=\"\">Tortuga</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t\t\t<div class='row'>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='col-xs-12'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class='price'>\$29.99</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class='row'>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class='prodInfoIconHeadOrder col-xs-offset-4 col-xs-4' href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon5.svg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Order</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class='row'>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='col-xs-12 col-md-6'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>&#x2605;</span><span>&#x2605;</span><span>&#x2605;</span><span>&#x2606;</span><span>&#x2606;</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='col-xs-12 col-md-6'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">12 reviews</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t                \t</div>
\t\t\t                </div>
\t\t\t                 
\t\t\t                <div class=\"item\">
\t\t\t                \t<div class=\"row-fluid\">
\t\t\t\t\t\t\t\t\t<div class=\"carouselCards col-xs-12 col-md-offset-2 col-md-8\">
\t\t\t\t\t\t\t\t\t\t<div class=\"productThumbnails\">
\t\t\t\t\t\t\t\t\t\t\t<div class='prodThumbInside'>
\t\t\t\t\t\t\t\t\t\t\t\t<img class='prodThumbImgs' src=\"/web/public/imgs/coffeeBag3.png\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class='row'>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Farm: <a id='prodInfofarmInfo' href=\"\">Tortuga</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class='price'>\$29.99</p>
\t\t\t\t\t\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t\t\t\t\t\t<div class='row'>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class='prodInfoIconHeadOrder col-xs-offset-4 col-xs-4' href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon5.svg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Order</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class='row'>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='col-xs-12 col-md-6'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>&#x2605;</span><span>&#x2605;</span><span>&#x2605;</span><span>&#x2606;</span><span>&#x2606;</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='col-xs-12 col-md-6'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">12 reviews</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t                \t</div>
\t\t\t                </div>
\t\t                </div>
\t\t                <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\"></a>
\t\t                <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\"></a>
\t                </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<div class='clearfix'></div>
\t\t<section>
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
\t\t\t\t\t\t\t\t\t<span>{{ template.getSpeciesTitle() }}: </span></br>
\t\t\t\t\t\t\t\t\t<span>{{ template.getCultivarTitle() }}: </span></br>
\t\t\t\t\t\t\t\t\t<span>{{ template.getGradeTitle() }}: </span></br>
\t\t\t\t\t\t\t\t\t<span>{{ template.getProcessingTitle() }}: </span></br>
\t\t\t\t\t\t\t\t\t<span>{{ template.getFlavorNotesTitle() }}</span></br>
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
\t\t\t\t\t\t\t\t{% for pPresentation in product.getPresentations%}\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">{{ pPresentation.getRoast().getDescription() }}</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% endfor %}
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
\t\t\t\t\t\t\t\t\t<h4>{{ template.getWeightTitle() }}</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t<div class=\"btn-group btn-group-justified\" role=\"group\" aria-label=\"...\">
\t\t\t\t\t\t\t\t{% for pPresentation in product.getPresentations%}\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">{{ pPresentation.getWeight() }}</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class='col-xs-12 col-md-6'>
\t\t\t\t\t\t<div id='presentationSection'>
\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t<div class='prodInfoIconHeadings col-xs-offset-3 col-xs-6'>
\t\t\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon8.svg\">
\t\t\t\t\t\t\t\t\t<h4>{{ template.getWeightTitle() }}</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t<div class=\"btn-group btn-group-justified\" role=\"group\" aria-label=\"...\">
\t\t\t\t\t\t\t\t{% for pPresentation in product.getPresentations%}\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">{{ pPresentation.getGrind().getDescription() }}</button>
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
\t\t</section>
\t</main>
{% endblock %}", "PageBundle:Default:product_information.html.twig", "C:\\xampp\\htdocs\\src\\PageBundle/Resources/views/Default/product_information.html.twig");
    }
}
