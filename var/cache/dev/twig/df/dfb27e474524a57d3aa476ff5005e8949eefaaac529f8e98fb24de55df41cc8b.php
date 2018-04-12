<?php

/* @Product/Default/product_information.html.twig */
class __TwigTemplate_722f5d9eac01e0c441c902d2ddb064b14856bd81ea9d0f69940c1b4ca4e63048 extends Twig_Template
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
        $__internal_e65289806a002ea2d23a68765bb220a0af59b39d3179355c7c49962ab36d5a38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e65289806a002ea2d23a68765bb220a0af59b39d3179355c7c49962ab36d5a38->enter($__internal_e65289806a002ea2d23a68765bb220a0af59b39d3179355c7c49962ab36d5a38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Product/Default/product_information.html.twig"));

        $__internal_41486637ec89c1cc08316940d7b0f2b86e166d3a2dabe14dfbf2f72164a96ab7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41486637ec89c1cc08316940d7b0f2b86e166d3a2dabe14dfbf2f72164a96ab7->enter($__internal_41486637ec89c1cc08316940d7b0f2b86e166d3a2dabe14dfbf2f72164a96ab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Product/Default/product_information.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e65289806a002ea2d23a68765bb220a0af59b39d3179355c7c49962ab36d5a38->leave($__internal_e65289806a002ea2d23a68765bb220a0af59b39d3179355c7c49962ab36d5a38_prof);

        
        $__internal_41486637ec89c1cc08316940d7b0f2b86e166d3a2dabe14dfbf2f72164a96ab7->leave($__internal_41486637ec89c1cc08316940d7b0f2b86e166d3a2dabe14dfbf2f72164a96ab7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_113457a1fb6fec0792ac42d5e8302ea8591d5a7fab92fe2676642813779fba24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_113457a1fb6fec0792ac42d5e8302ea8591d5a7fab92fe2676642813779fba24->enter($__internal_113457a1fb6fec0792ac42d5e8302ea8591d5a7fab92fe2676642813779fba24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4971bfe9b33f75165cf7052e13fbb78b9115708a410b7e90a6cdd445cceeff15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4971bfe9b33f75165cf7052e13fbb78b9115708a410b7e90a6cdd445cceeff15->enter($__internal_4971bfe9b33f75165cf7052e13fbb78b9115708a410b7e90a6cdd445cceeff15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Product Information ";
        
        $__internal_4971bfe9b33f75165cf7052e13fbb78b9115708a410b7e90a6cdd445cceeff15->leave($__internal_4971bfe9b33f75165cf7052e13fbb78b9115708a410b7e90a6cdd445cceeff15_prof);

        
        $__internal_113457a1fb6fec0792ac42d5e8302ea8591d5a7fab92fe2676642813779fba24->leave($__internal_113457a1fb6fec0792ac42d5e8302ea8591d5a7fab92fe2676642813779fba24_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dd4658b083af7cdcdc196c7a5046acab58a73eda47c7b299d21c99b216068cf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd4658b083af7cdcdc196c7a5046acab58a73eda47c7b299d21c99b216068cf8->enter($__internal_dd4658b083af7cdcdc196c7a5046acab58a73eda47c7b299d21c99b216068cf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_24533212e2898acbc1f4c6cc4b560e821cc8e9a879fbdc8b98500d3caa32368d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24533212e2898acbc1f4c6cc4b560e821cc8e9a879fbdc8b98500d3caa32368d->enter($__internal_24533212e2898acbc1f4c6cc4b560e821cc8e9a879fbdc8b98500d3caa32368d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/product_information.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_24533212e2898acbc1f4c6cc4b560e821cc8e9a879fbdc8b98500d3caa32368d->leave($__internal_24533212e2898acbc1f4c6cc4b560e821cc8e9a879fbdc8b98500d3caa32368d_prof);

        
        $__internal_dd4658b083af7cdcdc196c7a5046acab58a73eda47c7b299d21c99b216068cf8->leave($__internal_dd4658b083af7cdcdc196c7a5046acab58a73eda47c7b299d21c99b216068cf8_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_df3eadaa487dbcc41ed87c81b75ee1ea9a1e7d5878b1e052e294c3adc4b274b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df3eadaa487dbcc41ed87c81b75ee1ea9a1e7d5878b1e052e294c3adc4b274b5->enter($__internal_df3eadaa487dbcc41ed87c81b75ee1ea9a1e7d5878b1e052e294c3adc4b274b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d69b30e1a59c3bf64d9464d92dbd4a912cd0523e047cdb6252471df4fde64042 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d69b30e1a59c3bf64d9464d92dbd4a912cd0523e047cdb6252471df4fde64042->enter($__internal_d69b30e1a59c3bf64d9464d92dbd4a912cd0523e047cdb6252471df4fde64042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<section>
\t<div class='pageTitle'>
\t\t<center>
\t\t\t<h2>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getPageTitle", array(), "method"), "html", null, true);
        echo "</h2>
\t\t</center>
\t</div>
\t<section>
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
            echo "\t\t\t                \t<div
\t\t\t\t                \t";
            // line 24
            if (($this->getAttribute($context["prod"], "getId", array(), "method") == $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "getId", array(), "method"))) {
                // line 25
                echo "\t\t\t\t\t                \tclass= \"item active\"
\t\t\t\t\t                ";
            } else {
                // line 27
                echo "\t\t\t\t\t                \tclass= \"item\"
\t\t\t\t\t                ";
            }
            // line 29
            echo "\t\t\t\t                 \tid=\"product\" data-product-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["prod"], "getId", array(), "method"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t<div id='carouselHeading' >
\t\t\t\t\t\t\t\t\t\t<center><h3>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["prod"], "getName", array(), "method"), "html", null, true);
            echo "</h3></center>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t                \t<div class=\"row-fluid\">
\t\t\t\t\t\t\t\t\t\t<div class=\"carouselCards col-xs-12 col-md-offset-2 col-md-8\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"productThumbnails\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class='prodThumbInside'>
\t\t\t\t\t\t\t\t\t\t\t\t\t<img class='prodThumbImgs' src=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["prod"], "getImage", array(), "method"), "html", null, true);
            echo " \">\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t                \t</div>
\t\t\t\t                </div>
\t\t                \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prod'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "\t\t                </div>
\t\t                ";
        // line 45
        if ((twig_length_filter($this->env, $this->getAttribute(($context["farm"] ?? $this->getContext($context, "farm")), "getProducts", array())) > 1)) {
            // line 46
            echo "\t\t\t\t            <a class=\"left carousel-control\" href=\".both\" data-slide=\"prev\"></a>
\t\t\t\t            <a class=\"right carousel-control\" href=\".both\" data-slide=\"next\"></a>
\t\t                ";
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
            echo "\t\t\t                \t<div
\t\t\t\t                \t";
            // line 61
            if ($this->getAttribute($context["loop"], "first", array())) {
                // line 62
                echo "\t\t\t\t\t                \tclass= \"item active\"
\t\t\t\t\t                ";
            } else {
                // line 64
                echo "\t\t\t\t\t                \tclass= \"item\"
\t\t\t\t\t                ";
            }
            // line 65
            echo ">
\t\t\t\t\t                <div class='row'>
\t\t\t\t\t\t\t\t\t\t<p class='prodInfoIconHeadOrder col-xs-offset-4 col-xs-4'>
\t\t\t\t\t\t\t\t\t\t\t<div class='col-xs-12'>
\t\t\t\t\t\t\t\t\t\t\t\t<center><p class='price'>\$<span class=\"presentation-price\"></span></p></center>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class='stickyRow row'>
\t\t\t\t\t\t\t\t\t\t<div class='ratingCont col-xs-4'>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["prod"], "getRank", array(), "method"), "html", null, true);
            echo "/5<span>&#x2605;</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<a class='stickyRow orderPresentation col-xs-4'>
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imgs/icon5.svg"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class='reviews col-xs-4'>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["prod"], "getReviews", array(), "method"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getReviewsTitle", array(), "method"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class='order row'>
\t\t\t\t\t\t\t\t\t\t<div class='col-xs-offset-4 col-xs-4'>
\t\t\t\t\t\t\t\t\t\t\t<a id=\"product\" data-product-id=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "getId", array(), "method"), "html", null, true);
            echo "\" class='orderPresentation prodInfoIconHeadOrder'>
\t\t\t\t\t\t\t\t\t\t\t\t<h4>";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getOrderTitle", array(), "method"), "html", null, true);
            echo "</h4>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class='row'>
\t\t\t\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-default btn-xs share\" href=\"";
            // line 95
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_homepage", array("name" => "onDevelopment"));
            echo "\"><span class=\"glyphicon glyphicon-share\" aria-hidden=\"true\"></span>Share</a>
\t\t\t\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t            \t</div>
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
        // line 100
        echo "\t\t                </div>
\t                </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<div class='clearfix'></div>
\t<section>
\t\t<div id='prodInfoWidth' class=\"container\">
\t\t\t<div class='prodInfoPreferences row col-xs-offset-1 col-xs-10 col-md-offset-3 col-md-6'>
\t\t\t\t<div class='row'>
\t\t\t\t\t<div class='col-xs-12 col-md-6'>
\t\t\t\t\t\t<div id='informationSection'>
\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t<div class='prodInfoIconHeadings col-xs-offset-3 col-xs-6'>
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imgs/icon2.svg"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t<h4>";
        // line 116
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getInformationTitle", array(), "method"), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t\t\t</div>                                                                    
\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t<div id='prodInfoDetails' class='col-xs-12'>
\t\t\t\t\t\t\t\t<span>";
        // line 120
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getFarmTitle", array(), "method"), "html", null, true);
        echo ": </span>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("farm_information", array("farm_id" => $this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "getFarm", array(), "method"), "getId", array(), "method"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "getFarm", array(), "method"), "getName", array(), "method"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</br>
\t\t\t\t\t\t\t\t<span>";
        // line 124
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getSpeciesTitle", array(), "method"), "html", null, true);
        echo ": </span>
\t\t\t\t\t\t\t\t<span>";
        // line 125
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getSpeciesInfo", array(), "method"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t</br>
\t\t\t\t\t\t\t\t<span>";
        // line 127
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getCultivarTitle", array(), "method"), "html", null, true);
        echo ": </span>
\t\t\t\t\t\t\t\t<span>";
        // line 128
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "getCultivar", array(), "method"), "getDescription", array(), "method"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t</br>
\t\t\t\t\t\t\t\t<span>";
        // line 130
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getGradeTitle", array(), "method"), "html", null, true);
        echo ": </span>
\t\t\t\t\t\t\t\t<span>";
        // line 131
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "getGrade", array(), "method"), "getDescription", array(), "method"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t</br>
\t\t\t\t\t\t\t\t<span>";
        // line 133
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getProcessingTitle", array(), "method"), "html", null, true);
        echo ": </span>
\t\t\t\t\t\t\t\t<span>";
        // line 134
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "getProcessing", array(), "method"), "getDescription", array(), "method"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t</br>
\t\t\t\t\t\t\t\t<span>";
        // line 136
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getFlavorNotesTitle", array(), "method"), "html", null, true);
        echo ": </span>
\t\t\t\t\t\t\t\t<span>";
        // line 137
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "getFlavor", array(), "method"), "getNotes", array(), "method"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</br>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class='col-xs-12 col-md-6'>
\t\t\t\t\t\t<div id='roastSection'>
\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t<div class='prodInfoIconHeadings col-xs-offset-3 col-xs-6'>
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imgs/icon7.svg"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t<h4>";
        // line 148
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getRoastTitle", array(), "method"), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t<div class=\"btn-group btn-group-justified\" role=\"group\" aria-label=\"...\">
\t\t\t\t\t\t\t\t";
        // line 152
        $context["roasts"] = array();
        echo "\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        // line 153
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "getPresentations", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["presentation"]) {
            // line 154
            echo "   \t\t\t\t\t\t\t\t\t";
            if (!twig_in_filter($this->getAttribute($this->getAttribute($context["presentation"], "getRoast", array(), "method"), "getDescription", array(), "method"), ($context["roasts"] ?? $this->getContext($context, "roasts")))) {
                // line 155
                echo "\t\t\t\t\t\t\t\t\t\t";
                $context["roasts"] = twig_array_merge(($context["roasts"] ?? $this->getContext($context, "roasts")), array(0 => $this->getAttribute($this->getAttribute($context["presentation"], "getRoast", array(), "method"), "getDescription", array(), "method")));
                // line 156
                echo "\t\t\t\t\t\t\t\t\t";
            }
            // line 157
            echo "\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['presentation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "\t\t
\t\t\t\t\t\t\t\t";
        // line 158
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["roasts"] ?? $this->getContext($context, "roasts")));
        foreach ($context['_seq'] as $context["_key"] => $context["roast"]) {
            echo "\t\t
\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\">\t\t
\t\t\t\t\t\t\t\t\t\t";
            // line 160
            if (($context["roast"] == $this->getAttribute($this->getAttribute(($context["presentation"] ?? $this->getContext($context, "presentation")), "getRoast", array(), "method"), "getDescription", array()))) {
                // line 161
                echo "\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default active\">";
                echo twig_escape_filter($this->env, $context["roast"], "html", null, true);
                echo "</button>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 163
                echo "\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">";
                echo twig_escape_filter($this->env, $context["roast"], "html", null, true);
                echo "</button>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 164
            echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['roast'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 167
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
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imgs/icon10.svg"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t<h4>";
        // line 177
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getWeightTitle", array(), "method"), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t<div class=\"btn-group btn-group-justified\" role=\"group\" aria-label=\"...\">
\t\t\t\t\t\t\t\t";
        // line 181
        $context["weights"] = array();
        echo "\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        // line 182
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "getPresentations", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["presentation"]) {
            // line 183
            echo "   \t\t\t\t\t\t\t\t\t";
            if (!twig_in_filter($this->getAttribute($context["presentation"], "getWeight", array(), "method"), ($context["weights"] ?? $this->getContext($context, "weights")))) {
                // line 184
                echo "\t\t\t\t\t\t\t\t\t\t";
                $context["weights"] = twig_array_merge(($context["weights"] ?? $this->getContext($context, "weights")), array(0 => $this->getAttribute($context["presentation"], "getWeight", array(), "method")));
                // line 185
                echo "\t\t\t\t\t\t\t\t\t";
            }
            // line 186
            echo "\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['presentation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "\t\t
\t\t\t\t\t\t\t\t";
        // line 187
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["weights"] ?? $this->getContext($context, "weights")));
        foreach ($context['_seq'] as $context["_key"] => $context["weight"]) {
            echo "\t\t
\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\">\t\t
\t\t\t\t\t\t\t\t\t\t";
            // line 189
            if (($context["weight"] == $this->getAttribute(($context["presentation"] ?? $this->getContext($context, "presentation")), "getWeight", array(), "method"))) {
                // line 190
                echo "\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default active\">";
                echo twig_escape_filter($this->env, $context["weight"], "html", null, true);
                echo "</button>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 192
                echo "\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">";
                echo twig_escape_filter($this->env, $context["weight"], "html", null, true);
                echo "</button>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 193
            echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 196
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class='col-xs-12 col-md-6'>
\t\t\t\t\t\t<div id='grindSection'>
\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t<div class='prodInfoIconHeadings col-xs-offset-3 col-xs-6'>
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imgs/icon8.svg"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t<h4>";
        // line 204
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getGrindTitle", array(), "method"), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t<div class=\"btn-group btn-group-justified\" role=\"group\" aria-label=\"...\">
\t\t\t\t\t\t\t\t";
        // line 208
        $context["grinds"] = array();
        echo "\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        // line 209
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "getPresentations", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["presentation"]) {
            // line 210
            echo "   \t\t\t\t\t\t\t\t\t";
            if (!twig_in_filter($this->getAttribute($this->getAttribute($context["presentation"], "getGrind", array(), "method"), "getDescription", array(), "method"), ($context["grinds"] ?? $this->getContext($context, "grinds")))) {
                // line 211
                echo "\t\t\t\t\t\t\t\t\t\t";
                $context["grinds"] = twig_array_merge(($context["grinds"] ?? $this->getContext($context, "grinds")), array(0 => $this->getAttribute($this->getAttribute($context["presentation"], "getGrind", array(), "method"), "getDescription", array())));
                // line 212
                echo "\t\t\t\t\t\t\t\t\t";
            }
            // line 213
            echo "\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['presentation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "\t\t
\t\t\t\t\t\t\t\t";
        // line 214
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["grinds"] ?? $this->getContext($context, "grinds")));
        foreach ($context['_seq'] as $context["_key"] => $context["grind"]) {
            echo "\t\t
\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\">\t\t
\t\t\t\t\t\t\t\t\t\t";
            // line 216
            if (($context["grind"] == $this->getAttribute($this->getAttribute(($context["presentation"] ?? $this->getContext($context, "presentation")), "getGrind", array(), "method"), "getDescription", array(), "method"))) {
                // line 217
                echo "\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default active\">";
                echo twig_escape_filter($this->env, $context["grind"], "html", null, true);
                echo "</button>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 219
                echo "\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">";
                echo twig_escape_filter($this->env, $context["grind"], "html", null, true);
                echo "</button>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 220
            echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grind'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 223
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
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imgs/icon9.svg"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t<h4>";
        // line 233
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getCupScoringTitle", array(), "method"), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t<div id='cupMap' class='col-xs-12'>
\t\t\t\t\t\t\t\t<center><img src=\"";
        // line 237
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
        
        $__internal_d69b30e1a59c3bf64d9464d92dbd4a912cd0523e047cdb6252471df4fde64042->leave($__internal_d69b30e1a59c3bf64d9464d92dbd4a912cd0523e047cdb6252471df4fde64042_prof);

        
        $__internal_df3eadaa487dbcc41ed87c81b75ee1ea9a1e7d5878b1e052e294c3adc4b274b5->leave($__internal_df3eadaa487dbcc41ed87c81b75ee1ea9a1e7d5878b1e052e294c3adc4b274b5_prof);

    }

    // line 247
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2986a0bac53a754e8e271d2943eeb13dd60f6a5f15fba24620af4f71ad6e2dbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2986a0bac53a754e8e271d2943eeb13dd60f6a5f15fba24620af4f71ad6e2dbe->enter($__internal_2986a0bac53a754e8e271d2943eeb13dd60f6a5f15fba24620af4f71ad6e2dbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_cd5b8a12a66c7971c080bc5ac1f2ae47b8d1d14a5d91d9ee26d70e77284ef66d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd5b8a12a66c7971c080bc5ac1f2ae47b8d1d14a5d91d9ee26d70e77284ef66d->enter($__internal_cd5b8a12a66c7971c080bc5ac1f2ae47b8d1d14a5d91d9ee26d70e77284ef66d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 248
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script>
\t\tvar findPresentationUrl = \"";
        // line 250
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_search_presentation"), "js"), "html", null, true);
        echo "\";
\t\tvar getPriceUrl = \"";
        // line 251
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_presentation_price"), "js"), "html", null, true);
        echo "\";
\t</script>
\t<script src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/product_information.js"), "html", null, true);
        echo "\"></script>
\t
\t
";
        
        $__internal_cd5b8a12a66c7971c080bc5ac1f2ae47b8d1d14a5d91d9ee26d70e77284ef66d->leave($__internal_cd5b8a12a66c7971c080bc5ac1f2ae47b8d1d14a5d91d9ee26d70e77284ef66d_prof);

        
        $__internal_2986a0bac53a754e8e271d2943eeb13dd60f6a5f15fba24620af4f71ad6e2dbe->leave($__internal_2986a0bac53a754e8e271d2943eeb13dd60f6a5f15fba24620af4f71ad6e2dbe_prof);

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
        return array (  652 => 253,  647 => 251,  643 => 250,  637 => 248,  628 => 247,  608 => 237,  601 => 233,  597 => 232,  586 => 223,  578 => 220,  572 => 219,  566 => 217,  564 => 216,  557 => 214,  549 => 213,  546 => 212,  543 => 211,  540 => 210,  536 => 209,  532 => 208,  525 => 204,  521 => 203,  512 => 196,  504 => 193,  498 => 192,  492 => 190,  490 => 189,  483 => 187,  475 => 186,  472 => 185,  469 => 184,  466 => 183,  462 => 182,  458 => 181,  451 => 177,  447 => 176,  436 => 167,  428 => 164,  422 => 163,  416 => 161,  414 => 160,  407 => 158,  399 => 157,  396 => 156,  393 => 155,  390 => 154,  386 => 153,  382 => 152,  375 => 148,  371 => 147,  358 => 137,  354 => 136,  349 => 134,  345 => 133,  340 => 131,  336 => 130,  331 => 128,  327 => 127,  322 => 125,  318 => 124,  310 => 121,  306 => 120,  299 => 116,  295 => 115,  278 => 100,  259 => 95,  250 => 89,  246 => 88,  236 => 83,  230 => 80,  223 => 76,  210 => 65,  206 => 64,  202 => 62,  200 => 61,  197 => 60,  180 => 59,  168 => 49,  163 => 46,  161 => 45,  158 => 44,  145 => 37,  136 => 31,  130 => 29,  126 => 27,  122 => 25,  120 => 24,  117 => 23,  113 => 22,  101 => 13,  96 => 10,  87 => 9,  75 => 7,  70 => 6,  61 => 5,  43 => 3,  11 => 1,);
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
\t<div class='pageTitle'>
\t\t<center>
\t\t\t<h2>{{ template.getPageTitle() }}</h2>
\t\t</center>
\t</div>
\t<section>
\t\t<div id='prodInfoWidth'>
\t\t\t<div id='prodInfoSection' class='col-xs-offset-1 col-xs-10 col-md-offset-3 col-md-6'>
\t\t\t\t<div id='prodInfoCarouselContainer' class=\"container col-xs-12\">
\t                <div id=\"myCarousel\" class=\"carousel slide both\" data-interval=\"false\">
\t\t                <div class=\"carousel-inner\" role=\"listbox\">
\t\t                \t{% for prod in farm.getProducts %}
\t\t\t                \t<div
\t\t\t\t                \t{% if prod.getId() == product.getId()%}
\t\t\t\t\t                \tclass= \"item active\"
\t\t\t\t\t                {% else %}
\t\t\t\t\t                \tclass= \"item\"
\t\t\t\t\t                {% endif %}
\t\t\t\t                 \tid=\"product\" data-product-id=\"{{prod.getId()}}\">
\t\t\t\t\t\t\t\t\t<div id='carouselHeading' >
\t\t\t\t\t\t\t\t\t\t<center><h3>{{ prod.getName() }}</h3></center>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t                \t<div class=\"row-fluid\">
\t\t\t\t\t\t\t\t\t\t<div class=\"carouselCards col-xs-12 col-md-offset-2 col-md-8\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"productThumbnails\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class='prodThumbInside'>
\t\t\t\t\t\t\t\t\t\t\t\t\t<img class='prodThumbImgs' src=\"{{ prod.getImage() }} \">\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t                \t</div>
\t\t\t\t                </div>
\t\t                \t{% endfor %}
\t\t                </div>
\t\t                {% if farm.getProducts|length >1 %}
\t\t\t\t            <a class=\"left carousel-control\" href=\".both\" data-slide=\"prev\"></a>
\t\t\t\t            <a class=\"right carousel-control\" href=\".both\" data-slide=\"next\"></a>
\t\t                {% endif %}
\t                </div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- Second carrousel Begin -->

\t\t\t<div id='prodInfoCarouselContainer2' class='col-xs-offset-1 col-xs-10 col-md-offset-3 col-md-6' data-spy=\"affix\" data-offset-top=\"480\">
\t\t\t\t<div class=\"container col-xs-12\">
\t                <div id=\"myCarousel2\" class=\"carousel slide both\" data-interval=\"false\">
\t\t                <div class=\"carousel-inner\" role=\"listbox\">
\t\t                \t{% for prod in farm.getProducts %}
\t\t\t                \t<div
\t\t\t\t                \t{% if loop.first%}
\t\t\t\t\t                \tclass= \"item active\"
\t\t\t\t\t                {% else %}
\t\t\t\t\t                \tclass= \"item\"
\t\t\t\t\t                {% endif %}>
\t\t\t\t\t                <div class='row'>
\t\t\t\t\t\t\t\t\t\t<p class='prodInfoIconHeadOrder col-xs-offset-4 col-xs-4'>
\t\t\t\t\t\t\t\t\t\t\t<div class='col-xs-12'>
\t\t\t\t\t\t\t\t\t\t\t\t<center><p class='price'>\$<span class=\"presentation-price\"></span></p></center>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class='stickyRow row'>
\t\t\t\t\t\t\t\t\t\t<div class='ratingCont col-xs-4'>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t{{ prod.getRank() }}/5<span>&#x2605;</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<a class='stickyRow orderPresentation col-xs-4'>
\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('imgs/icon5.svg') }}\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class='reviews col-xs-4'>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">{{ prod.getReviews() }} {{ template.getReviewsTitle() }}</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class='order row'>
\t\t\t\t\t\t\t\t\t\t<div class='col-xs-offset-4 col-xs-4'>
\t\t\t\t\t\t\t\t\t\t\t<a id=\"product\" data-product-id=\"{{product.getId() }}\" class='orderPresentation prodInfoIconHeadOrder'>
\t\t\t\t\t\t\t\t\t\t\t\t<h4>{{ template.getOrderTitle() }}</h4>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class='row'>
\t\t\t\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-default btn-xs share\" href=\"{{ path('page_homepage',{'name':'onDevelopment'}) }}\"><span class=\"glyphicon glyphicon-share\" aria-hidden=\"true\"></span>Share</a>
\t\t\t\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t            \t</div>
\t\t                \t{% endfor %}
\t\t                </div>
\t                </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<div class='clearfix'></div>
\t<section>
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
\t\t\t\t\t\t\t\t<span>{{ template.getFarmTitle() }}: </span>
\t\t\t\t\t\t\t\t<a href=\"{{path('farm_information',{'farm_id':product.getFarm().getId() })}}\">{{ product.getFarm().getName() }}
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</br>
\t\t\t\t\t\t\t\t<span>{{ template.getSpeciesTitle() }}: </span>
\t\t\t\t\t\t\t\t<span>{{ template.getSpeciesInfo() }}</span>
\t\t\t\t\t\t\t\t</br>
\t\t\t\t\t\t\t\t<span>{{ template.getCultivarTitle() }}: </span>
\t\t\t\t\t\t\t\t<span>{{ product.getCultivar().getDescription() }}</span>
\t\t\t\t\t\t\t\t</br>
\t\t\t\t\t\t\t\t<span>{{ template.getGradeTitle() }}: </span>
\t\t\t\t\t\t\t\t<span>{{ product.getGrade().getDescription() }}</span>
\t\t\t\t\t\t\t\t</br>
\t\t\t\t\t\t\t\t<span>{{ template.getProcessingTitle() }}: </span>
\t\t\t\t\t\t\t\t<span>{{ product.getProcessing().getDescription() }}</span>
\t\t\t\t\t\t\t\t</br>
\t\t\t\t\t\t\t\t<span>{{ template.getFlavorNotesTitle() }}: </span>
\t\t\t\t\t\t\t\t<span>{{ product.getFlavor().getNotes() }}
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</br>
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
{% endblock %}", "@Product/Default/product_information.html.twig", "C:\\xampp\\htdocs\\crgc\\src\\ProductBundle\\Resources\\views\\Default\\product_information.html.twig");
    }
}
