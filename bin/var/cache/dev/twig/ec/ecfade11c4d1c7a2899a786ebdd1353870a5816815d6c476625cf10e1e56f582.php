<?php

/* PageBundle:Default:product_information.html.twig */
class __TwigTemplate_145bc4e36212d0ed050078d2b2395c559db4749d7857092ae700619d6ee49f33 extends Twig_Template
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
        $__internal_2317ca2d91c9483d7305c1157070a52e4089d969ac5916a930bfd57956cf2742 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2317ca2d91c9483d7305c1157070a52e4089d969ac5916a930bfd57956cf2742->enter($__internal_2317ca2d91c9483d7305c1157070a52e4089d969ac5916a930bfd57956cf2742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:product_information.html.twig"));

        $__internal_57f693517eacc50ef1849c600c085873b57cff2a3b13118fcc2dc4c14e659f74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57f693517eacc50ef1849c600c085873b57cff2a3b13118fcc2dc4c14e659f74->enter($__internal_57f693517eacc50ef1849c600c085873b57cff2a3b13118fcc2dc4c14e659f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:product_information.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2317ca2d91c9483d7305c1157070a52e4089d969ac5916a930bfd57956cf2742->leave($__internal_2317ca2d91c9483d7305c1157070a52e4089d969ac5916a930bfd57956cf2742_prof);

        
        $__internal_57f693517eacc50ef1849c600c085873b57cff2a3b13118fcc2dc4c14e659f74->leave($__internal_57f693517eacc50ef1849c600c085873b57cff2a3b13118fcc2dc4c14e659f74_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_853fc07ae2300c7fe4056f9fc9304908f8d34a15966b327bb00087a576ee378a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_853fc07ae2300c7fe4056f9fc9304908f8d34a15966b327bb00087a576ee378a->enter($__internal_853fc07ae2300c7fe4056f9fc9304908f8d34a15966b327bb00087a576ee378a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d03a19b5ce7c583a87207b8f542bbc42b34a28f743468419a8c9b4542ce8739d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d03a19b5ce7c583a87207b8f542bbc42b34a28f743468419a8c9b4542ce8739d->enter($__internal_d03a19b5ce7c583a87207b8f542bbc42b34a28f743468419a8c9b4542ce8739d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Product Information ";
        
        $__internal_d03a19b5ce7c583a87207b8f542bbc42b34a28f743468419a8c9b4542ce8739d->leave($__internal_d03a19b5ce7c583a87207b8f542bbc42b34a28f743468419a8c9b4542ce8739d_prof);

        
        $__internal_853fc07ae2300c7fe4056f9fc9304908f8d34a15966b327bb00087a576ee378a->leave($__internal_853fc07ae2300c7fe4056f9fc9304908f8d34a15966b327bb00087a576ee378a_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6fc5ca2bc7a30d72cbea021381f389525202cfdcd3d20308181a616210bc080a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fc5ca2bc7a30d72cbea021381f389525202cfdcd3d20308181a616210bc080a->enter($__internal_6fc5ca2bc7a30d72cbea021381f389525202cfdcd3d20308181a616210bc080a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ec5818a6527ef2dc6c54a18da46e0868041ff2d1ee015abc804e17b0517b5a9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec5818a6527ef2dc6c54a18da46e0868041ff2d1ee015abc804e17b0517b5a9b->enter($__internal_ec5818a6527ef2dc6c54a18da46e0868041ff2d1ee015abc804e17b0517b5a9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/css/product_information.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_ec5818a6527ef2dc6c54a18da46e0868041ff2d1ee015abc804e17b0517b5a9b->leave($__internal_ec5818a6527ef2dc6c54a18da46e0868041ff2d1ee015abc804e17b0517b5a9b_prof);

        
        $__internal_6fc5ca2bc7a30d72cbea021381f389525202cfdcd3d20308181a616210bc080a->leave($__internal_6fc5ca2bc7a30d72cbea021381f389525202cfdcd3d20308181a616210bc080a_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_818d6086266e10830c654cbd38c7359574a511ee63b0609c08df87909dee9432 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_818d6086266e10830c654cbd38c7359574a511ee63b0609c08df87909dee9432->enter($__internal_818d6086266e10830c654cbd38c7359574a511ee63b0609c08df87909dee9432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_902415d8c4dc62f7ccd1fb50c19e2c5531980c4377c9c0674c370edf2ac07f4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_902415d8c4dc62f7ccd1fb50c19e2c5531980c4377c9c0674c370edf2ac07f4c->enter($__internal_902415d8c4dc62f7ccd1fb50c19e2c5531980c4377c9c0674c370edf2ac07f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<main>
\t\t<section>
\t\t\t<center>
\t\t\t\t<h2>
\t\t\t\t\t";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getPageTitle", array(), "method"), "html", null, true);
        echo "\t\t
\t\t\t\t</h2>
\t\t\t</center>
\t\t\t<div id='carouselHeading' class='col-xs-offset-1 col-xs-10 col-md-offset-3 col-md-6'>
\t\t\t\t<center>
\t\t\t\t\t<h3>
\t\t\t\t\t\t";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "getName", array(), "method"), "html", null, true);
        echo "
\t\t\t\t\t</h3>
\t\t\t\t</center>
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
\t\t\t\t\t\t\t\t\t\t\t\t<img class='prodThumbImgs' src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "getImage", array(), "method"), "html", null, true);
        echo " \">
\t\t\t\t\t\t\t\t\t\t\t\t<div class='row'>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='col-xs-12'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class='price'>\$ ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute(($context["presentation"] ?? $this->getContext($context, "presentation")), "getPrice", array(), "method"), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class='row'>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class='prodInfoIconHeadOrder col-xs-offset-4 col-xs-4'  href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_homepage", array("name" => "shoppingCart"));
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon5.svg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getOrderTitle", array(), "method"), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class='row'>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='col-xs-12 col-md-6'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 49
        $context["rank"] = 0;
        // line 50
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "getRank", array(), "method")));
        foreach ($context['_seq'] as $context["_key"] => $context["inx"]) {
            // line 51
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t";
            $context["rank"] = (($context["rank"] ?? $this->getContext($context, "rank")) + 1);
            // line 52
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t<span>&#x2605;</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inx'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        if ((($context["rank"] ?? $this->getContext($context, "rank")) < 5)) {
            // line 55
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(($context["rank"] ?? $this->getContext($context, "rank")), 4));
            foreach ($context['_seq'] as $context["_key"] => $context["inx2"]) {
                // line 56
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t";
                $context["rank"] = (($context["rank"] ?? $this->getContext($context, "rank")) + 1);
                // line 57
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t<span>&#x2606;</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inx2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 60
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='col-xs-12 col-md-6'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "getReviews", array(), "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getReviewsTitle", array(), "method"), "html", null, true);
        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t\t\t
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
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getInformationTitle", array(), "method"), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t<div id='prodInfoDetails' class='col-xs-12'>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<span>";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getFarmTitle", array(), "method"), "html", null, true);
        echo ": </span>
\t\t\t\t\t\t\t\t\t\t<a class='btn btn-default btn-xs' href=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("farm_information", array("farm_id" => $this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "getFarm", array(), "method"), "getId", array(), "method"))), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 95
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "getFarm", array(), "method"), "getName", array(), "method"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t</a></br>
\t\t\t\t\t\t\t\t\t<span>";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getSpeciesTitle", array(), "method"), "html", null, true);
        echo ": </span>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getSpeciesInfo", array(), "method"), "html", null, true);
        echo "</br>
\t\t\t\t\t\t\t\t\t<span>";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getCultivarTitle", array(), "method"), "html", null, true);
        echo ": </span>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "getCultivar", array(), "method"), "getDescription", array(), "method"), "html", null, true);
        echo "</br>
\t\t\t\t\t\t\t\t\t<span>";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getGradeTitle", array(), "method"), "html", null, true);
        echo ": </span>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "getGrade", array(), "method"), "getDescription", array(), "method"), "html", null, true);
        echo "</br>
\t\t\t\t\t\t\t\t\t<span>";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getProcessingTitle", array(), "method"), "html", null, true);
        echo ": </span>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "getProcessing", array(), "method"), "getDescription", array(), "method"), "html", null, true);
        echo "</br>
\t\t\t\t\t\t\t\t\t<span>";
        // line 101
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
        // line 111
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getRoastTitle", array(), "method"), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t<div class=\"btn-group btn-group-justified\" role=\"group\" aria-label=\"...\">
\t\t\t\t\t\t\t\t";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "getPresentations", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["pPresentation"]) {
            echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["pPresentation"], "getRoast", array(), "method"), "getDescription", array(), "method"), "html", null, true);
            echo "</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pPresentation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
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
        // line 130
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getWeightTitle", array(), "method"), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t<div class=\"btn-group btn-group-justified\" role=\"group\" aria-label=\"...\">
\t\t\t\t\t\t\t\t";
        // line 134
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "getPresentations", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["pPresentation"]) {
            echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">";
            // line 136
            echo twig_escape_filter($this->env, $this->getAttribute($context["pPresentation"], "getWeight", array(), "method"), "html", null, true);
            echo "</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pPresentation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class='col-xs-12 col-md-6'>
\t\t\t\t\t\t<div id='presentationSection'>
\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t<div class='prodInfoIconHeadings col-xs-offset-3 col-xs-6'>
\t\t\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon8.svg\">
\t\t\t\t\t\t\t\t\t<h4>";
        // line 147
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getGrindTitle", array(), "method"), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t<div class=\"btn-group btn-group-justified\" role=\"group\" aria-label=\"...\">
\t\t\t\t\t\t\t\t";
        // line 151
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "getPresentations", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["pPresentation"]) {
            echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">";
            // line 153
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["pPresentation"], "getGrind", array(), "method"), "getDescription", array(), "method"), "html", null, true);
            echo "</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pPresentation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
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
        // line 166
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
        
        $__internal_902415d8c4dc62f7ccd1fb50c19e2c5531980c4377c9c0674c370edf2ac07f4c->leave($__internal_902415d8c4dc62f7ccd1fb50c19e2c5531980c4377c9c0674c370edf2ac07f4c_prof);

        
        $__internal_818d6086266e10830c654cbd38c7359574a511ee63b0609c08df87909dee9432->leave($__internal_818d6086266e10830c654cbd38c7359574a511ee63b0609c08df87909dee9432_prof);

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
        return array (  390 => 166,  378 => 156,  369 => 153,  362 => 151,  355 => 147,  345 => 139,  336 => 136,  329 => 134,  322 => 130,  310 => 120,  301 => 117,  294 => 115,  287 => 111,  272 => 101,  266 => 100,  260 => 99,  254 => 98,  248 => 97,  243 => 95,  239 => 94,  235 => 93,  227 => 88,  198 => 64,  192 => 60,  189 => 59,  182 => 57,  179 => 56,  174 => 55,  171 => 54,  164 => 52,  161 => 51,  156 => 50,  154 => 49,  144 => 42,  139 => 40,  132 => 36,  126 => 33,  110 => 20,  101 => 14,  95 => 10,  86 => 9,  74 => 7,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
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
\t\t<section>
\t\t\t<center>
\t\t\t\t<h2>
\t\t\t\t\t{{ template.getPageTitle() }}\t\t
\t\t\t\t</h2>
\t\t\t</center>
\t\t\t<div id='carouselHeading' class='col-xs-offset-1 col-xs-10 col-md-offset-3 col-md-6'>
\t\t\t\t<center>
\t\t\t\t\t<h3>
\t\t\t\t\t\t{{ product.getName() }}
\t\t\t\t\t</h3>
\t\t\t\t</center>
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
\t\t\t\t\t\t\t\t\t\t\t\t<img class='prodThumbImgs' src=\"{{ product.getImage() }} \">
\t\t\t\t\t\t\t\t\t\t\t\t<div class='row'>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='col-xs-12'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class='price'>\$ {{ presentation.getPrice() }}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class='row'>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class='prodInfoIconHeadOrder col-xs-offset-4 col-xs-4'  href=\"{{ path('page_homepage', {'name':'shoppingCart' }) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon5.svg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>{{ template.getOrderTitle() }}</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class='row'>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='col-xs-12 col-md-6'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
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
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='col-xs-12 col-md-6'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">{{ product.getReviews() }} {{ template.getReviewsTitle() }}</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t\t\t
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
\t\t\t\t\t\t\t\t\t<span>{{ template.getFarmTitle() }}: </span>
\t\t\t\t\t\t\t\t\t\t<a class='btn btn-default btn-xs' href=\"{{ path('farm_information',{'farm_id': product.getFarm().getId() })}}\">
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
\t\t\t\t\t\t\t\t\t<h4>{{ template.getGrindTitle() }}</h4>
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
