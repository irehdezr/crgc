<?php

/* FarmBundle:Default:farm_information.html.twig */
class __TwigTemplate_8f5b53a90d49994ebc09cff7d8308edc1b38129335233be87acb4f5008e9f97e extends Twig_Template
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
        $__internal_176191746317e7d37d333011a44b96362bcdf92087c67c3099b947daac523aca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_176191746317e7d37d333011a44b96362bcdf92087c67c3099b947daac523aca->enter($__internal_176191746317e7d37d333011a44b96362bcdf92087c67c3099b947daac523aca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FarmBundle:Default:farm_information.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_176191746317e7d37d333011a44b96362bcdf92087c67c3099b947daac523aca->leave($__internal_176191746317e7d37d333011a44b96362bcdf92087c67c3099b947daac523aca_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0cbf2e911533ecc6159b534d97ab8a1fe0aa283030019e4fb59b0557257be636 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cbf2e911533ecc6159b534d97ab8a1fe0aa283030019e4fb59b0557257be636->enter($__internal_0cbf2e911533ecc6159b534d97ab8a1fe0aa283030019e4fb59b0557257be636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Farm Information ";
        
        $__internal_0cbf2e911533ecc6159b534d97ab8a1fe0aa283030019e4fb59b0557257be636->leave($__internal_0cbf2e911533ecc6159b534d97ab8a1fe0aa283030019e4fb59b0557257be636_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fc4e425417fc39a471d77d0e08f841519cb39e0f92ca61723f1a68a144484ebe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc4e425417fc39a471d77d0e08f841519cb39e0f92ca61723f1a68a144484ebe->enter($__internal_fc4e425417fc39a471d77d0e08f841519cb39e0f92ca61723f1a68a144484ebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/farm_information.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_fc4e425417fc39a471d77d0e08f841519cb39e0f92ca61723f1a68a144484ebe->leave($__internal_fc4e425417fc39a471d77d0e08f841519cb39e0f92ca61723f1a68a144484ebe_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_f071e6fe7421d7afc1934891939fed4b5ed501854a25d68030f9b660231660a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f071e6fe7421d7afc1934891939fed4b5ed501854a25d68030f9b660231660a2->enter($__internal_f071e6fe7421d7afc1934891939fed4b5ed501854a25d68030f9b660231660a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<main>
\t<div class='clearfix'></div>
\t\t<center>
\t\t\t<h2>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getPageTitle", array(), "method"), "html", null, true);
        echo "</h2>
\t\t</center>
\t<section id='farmInfoSection'>
\t\t<div class='container-fluid'>
\t\t\t<div id='farmInfoContainer' class='row'>
\t\t\t\t<div id='farmInfoHeading' class='col-xs-12'>
\t\t\t\t\t<center>
\t\t\t\t\t\t<h3>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["farm"] ?? $this->getContext($context, "farm")), "getName", array(), "method"), "html", null, true);
        echo "</h3>
\t\t\t\t\t</center>
\t\t\t\t</div>
\t\t\t\t<div id=\"farmPicContainer\" class='col-xs-12 col-sm-4'>
\t\t\t\t\t\t<div class='farmInfoIcons'>
\t\t\t\t\t\t\t<img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imgs/icon12.svg"), "html", null, true);
        echo "\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4>Image</h4>
\t\t\t\t\t<img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute(($context["farm"] ?? $this->getContext($context, "farm")), "getImage", array(), "method"), "html", null, true);
        echo "\" id=\"farmPic\">
\t\t\t\t\t<div class='farmInfoCards'>
\t\t\t\t\t\t<div class='farmInfoIcons'>
\t\t\t\t\t\t\t<img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imgs/icon1.svg"), "html", null, true);
        echo "\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getDescriptionTitle", array(), "method"), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t<div class='col-xs-12'>
\t\t\t\t\t\t\t";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute(($context["farm"] ?? $this->getContext($context, "farm")), "getDescription", array(), "method"), "html", null, true);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"prodInfoIconHeadings\">
\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info\">
\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-search\" ></span>
\t\t\t\t\t\t\t\t\t";
        // line 41
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
\t\t\t\t\t\t\t<img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imgs/icon2.svg"), "html", null, true);
        echo "\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4>";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getInformationTitle", array(), "method"), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t<div class='col-xs-12' style=\"text-align:center;\">
\t\t\t\t\t\t\t<span>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getRegionTitle", array(), "method"), "html", null, true);
        echo ": </span>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["farm"] ?? $this->getContext($context, "farm")), "getRegion", array(), "method"), "getName", array(), "method"), "html", null, true);
        echo "<br>
\t\t\t\t\t\t\t<span>";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getElevationTitle", array(), "method"), "html", null, true);
        echo ": </span>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["farm"] ?? $this->getContext($context, "farm")), "getElevation", array(), "method"), "html", null, true);
        echo "m.a.s.l.<br>
\t\t\t\t\t\t\t<span>";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getHarvestTitle", array(), "method"), "html", null, true);
        echo ": </span>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["farm"] ?? $this->getContext($context, "farm")), "getHarvest", array(), "method"), "html", null, true);
        echo "
\t\t\t\t\t\t\t<span>";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getSpeciesTitle", array(), "method"), "html", null, true);
        echo ": </span>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getSpeciesInfo", array(), "method"), "html", null, true);
        echo "<br>
\t\t\t\t\t\t\t<span>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getCultivarTitle", array(), "method"), "html", null, true);
        echo ": </span>
\t\t\t\t\t\t\t";
        // line 59
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
            // line 60
            echo "\t\t\t\t\t\t\t\t";
            if ($this->getAttribute($context["loop"], "first", array())) {
                // line 61
                echo "\t\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($context["cultivar"], "getDescription", array(), "method"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t";
            } else {
                // line 63
                echo "\t\t\t\t\t\t\t\t\t, ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["cultivar"], "getDescription", array(), "method"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t";
            }
            // line 65
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
        // line 66
        echo "\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<span>";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getCertificationsTitle", array(), "method"), "html", null, true);
        echo ": </span>
\t\t\t\t\t\t\t";
        // line 68
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
            // line 69
            echo "\t\t\t\t\t\t\t\t";
            if ($this->getAttribute($context["loop"], "first", array())) {
                // line 70
                echo "\t\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($context["certification"], "getDescription", array(), "method"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t";
            } else {
                // line 72
                echo "\t\t\t\t\t\t\t\t\t, ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["certification"], "getDescription", array(), "method"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t";
            }
            // line 74
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
        // line 75
        echo "\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class='farmInfoCards col-xs-12'>
\t\t\t\t\t\t<div class='farmInfoIcons'>
\t\t\t\t\t\t\t<img src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imgs/icon3.svg"), "html", null, true);
        echo "\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4>";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getAwardsTitle", array(), "method"), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t<div style=\"text-align:center;\">
\t\t\t\t\t\t\t";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["farm"] ?? $this->getContext($context, "farm")), "getFarmAwards", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["award"]) {
            // line 85
            echo "\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["award"], "getAward", array(), "method"), "getDescription", array(), "method"), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["award"], "getPlace", array(), "method"), "html", null, true);
            echo " place, ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["award"], "getYear", array(), "method"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</span></br>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['award'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class='farmInfoCards col-xs-12'>
\t\t\t\t\t\t<div class='farmInfoIcons'>
\t\t\t\t\t\t\t<img src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imgs/icon4.svg"), "html", null, true);
        echo "\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4>";
        // line 95
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getLocationTitle", array(), "method"), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t<div id=\"farm_map\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>\t\t
\t\t\t\t";
        // line 99
        if ((twig_length_filter($this->env, $this->getAttribute(($context["farm"] ?? $this->getContext($context, "farm")), "getProducts", array(), "method")) > 0)) {
            // line 100
            echo "\t\t\t\t<div class='col-xs-12 col-sm-4'>
\t\t\t\t\t<div class='farmInfoIcons'>
\t\t\t\t\t\t<img src=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imgs/icon_presentation.png"), "html", null, true);
            echo "\">
\t\t\t\t\t</div>
\t\t\t\t\t<div id='carouselHeading'>
\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t<h4>";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getProductsTitle", array(), "method"), "html", null, true);
            echo "</h4>
\t\t\t\t\t\t</center>
\t\t\t\t\t</div>
\t\t\t\t\t<div class='clearfix'></div>
\t\t\t\t\t\t<div class=\"container col-xs-10 col-xs-offset-1\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"span12\">
\t\t\t\t\t\t    \t    <div class=\"well\"> 
\t\t\t\t\t\t                <div id=\"myCarousel\" class=\"carousel slide\" data-interval=\"false\">
\t\t\t\t\t\t\t                <div class=\"carousel-inner\">
\t\t\t\t                   \t\t\t\t";
            // line 116
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
                echo "\t
\t\t\t\t                   \t\t\t\t<div\t
\t\t\t\t\t\t\t\t                \t";
                // line 118
                if ($this->getAttribute($context["loop"], "first", array())) {
                    // line 119
                    echo "\t\t\t\t\t\t\t\t                \t\t class=\"item active\"
\t\t\t\t\t\t\t\t                \t";
                } else {
                    // line 121
                    echo "\t\t\t\t\t\t\t\t                \t \tclass=\"item\"
\t\t\t\t\t\t\t\t                \t";
                }
                // line 123
                echo "\t\t\t\t\t\t\t\t                \t>
\t\t\t\t\t\t\t\t                \t<div class=\"row-fluid\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"carouselCards\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"productThumbnails\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"prodThumbInside\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"productThumbnailsHeadings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>";
                // line 129
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "getName", array(), "method"), "html", null, true);
                echo "</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 131
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_information", array("farm" => $this->getAttribute($this->getAttribute($context["product"], "getFarm", array(), "method"), "getId", array(), "method"), "product" => $this->getAttribute($context["product"], "getId", array(), "method"), "presentation" => $this->getAttribute(twig_first($this->env, $this->getAttribute($context["product"], "getPresentations", array(), "method")), "getId", array(), "method"))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 132
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "getImage", array(), "method"), "html", null, true);
                echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">\$";
                // line 134
                echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, $this->getAttribute($context["product"], "getPresentations", array(), "method")), "getPrice", array(), "method"), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 135
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_information", array("farm" => $this->getAttribute($this->getAttribute($context["product"], "getFarm", array(), "method"), "getId", array(), "method"), "product" => $this->getAttribute($context["product"], "getId", array(), "method"), "presentation" => $this->getAttribute(twig_first($this->env, $this->getAttribute($context["product"], "getPresentations", array(), "method")), "getId", array(), "method"))), "html", null, true);
                echo "\"><p>";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getMoreInfoTitle", array(), "method"), "html", null, true);
                echo "</p></a> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetailsContainer row'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetails col-xs-5 col-xs-offset-1'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>";
                // line 138
                echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, $this->getAttribute($context["product"], "getPresentations", array(), "method")), "getWeight", array(), "method"), "html", null, true);
                echo "g/";
                echo twig_escape_filter($this->env, ($this->getAttribute(twig_first($this->env, $this->getAttribute($context["product"], "getPresentations", array(), "method")), "getWeight", array(), "method") * 0.04), "html", null, true);
                echo "oz</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetails col-xs-4 col-xs-offset-1'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    <p class=\"rating\">";
                // line 141
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "getRank", array(), "method"), "html", null, true);
                echo "/5<span>&#x2605;</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetailsContainer row'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetails col-xs-5 col-xs-offset-1'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>";
                // line 146
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($context["product"], "getPresentations", array(), "method")), "getGrind", array(), "method"), "getDescription", array(), "method"), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetails col-xs-4 col-xs-offset-1'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>";
                // line 149
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "getReviews", array(), "method"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getReviewsTitle", array(), "method"), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetailsContainer row'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetails col-xs-5 col-xs-offset-1'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>";
                // line 155
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($context["product"], "getPresentations", array(), "method")), "getRoast", array(), "method"), "getDescription", array(), "method"), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
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
            // line 164
            echo "\t\t\t\t\t\t                </div>
\t\t\t\t\t\t            </div>
\t\t\t\t\t\t\t                \t";
            // line 166
            if ((twig_length_filter($this->env, $this->getAttribute(($context["farm"] ?? $this->getContext($context, "farm")), "getProducts", array(), "method")) > 1)) {
                // line 167
                echo "                                                    <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\"></a>
                                                    <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\"></a>
\t\t\t\t\t\t\t                \t";
            }
            // line 170
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"prodInfoIconHeadings\">
\t\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t\t<button id='contactButton' type=\"button\" class=\"btn btn-info\">
\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-envelope\"></span>
\t\t\t\t\t\t\t\t\t\t";
            // line 176
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
        // line 185
        echo "\t\t</section>
</main>
";
        
        $__internal_f071e6fe7421d7afc1934891939fed4b5ed501854a25d68030f9b660231660a2->leave($__internal_f071e6fe7421d7afc1934891939fed4b5ed501854a25d68030f9b660231660a2_prof);

    }

    // line 189
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a2d2d9e10b78d58d0080fe18e2aa59d46f2c77e5462522be7a6508c3a24fb3e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2d2d9e10b78d58d0080fe18e2aa59d46f2c77e5462522be7a6508c3a24fb3e7->enter($__internal_a2d2d9e10b78d58d0080fe18e2aa59d46f2c77e5462522be7a6508c3a24fb3e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 190
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyA8iOI-wKQIfkncEFwGUHS3dsce-nlwsQ0\" type=\"text/javascript\"></script>
\t<script>
\t\tvar lat = ";
        // line 193
        echo twig_escape_filter($this->env, $this->getAttribute(($context["farm"] ?? $this->getContext($context, "farm")), "getLatitude", array(), "method"), "html", null, true);
        echo "
\t\tvar lon = ";
        // line 194
        echo twig_escape_filter($this->env, $this->getAttribute(($context["farm"] ?? $this->getContext($context, "farm")), "getLongitude", array(), "method"), "html", null, true);
        echo "
\t</script>\t
\t<script src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/farm_information.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_a2d2d9e10b78d58d0080fe18e2aa59d46f2c77e5462522be7a6508c3a24fb3e7->leave($__internal_a2d2d9e10b78d58d0080fe18e2aa59d46f2c77e5462522be7a6508c3a24fb3e7_prof);

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
        return array (  541 => 196,  536 => 194,  532 => 193,  525 => 190,  519 => 189,  510 => 185,  498 => 176,  490 => 170,  485 => 167,  483 => 166,  479 => 164,  456 => 155,  445 => 149,  439 => 146,  431 => 141,  423 => 138,  415 => 135,  411 => 134,  406 => 132,  402 => 131,  397 => 129,  389 => 123,  385 => 121,  381 => 119,  379 => 118,  359 => 116,  346 => 106,  339 => 102,  335 => 100,  333 => 99,  326 => 95,  321 => 93,  315 => 89,  302 => 86,  299 => 85,  295 => 84,  290 => 82,  285 => 80,  278 => 75,  264 => 74,  258 => 72,  252 => 70,  249 => 69,  232 => 68,  228 => 67,  225 => 66,  211 => 65,  205 => 63,  199 => 61,  196 => 60,  179 => 59,  175 => 58,  169 => 57,  163 => 56,  157 => 55,  151 => 54,  146 => 52,  141 => 50,  129 => 41,  120 => 35,  115 => 33,  110 => 31,  104 => 28,  98 => 25,  90 => 20,  80 => 13,  75 => 10,  69 => 9,  60 => 6,  55 => 5,  49 => 4,  37 => 3,  11 => 1,);
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
    <link rel=\"stylesheet\" href=\"{{ asset('css/farm_information.css') }}\" />
{% endblock %}

{% block body %}
<main>
\t<div class='clearfix'></div>
\t\t<center>
\t\t\t<h2>{{ template.getPageTitle() }}</h2>
\t\t</center>
\t<section id='farmInfoSection'>
\t\t<div class='container-fluid'>
\t\t\t<div id='farmInfoContainer' class='row'>
\t\t\t\t<div id='farmInfoHeading' class='col-xs-12'>
\t\t\t\t\t<center>
\t\t\t\t\t\t<h3>{{ farm.getName() }}</h3>
\t\t\t\t\t</center>
\t\t\t\t</div>
\t\t\t\t<div id=\"farmPicContainer\" class='col-xs-12 col-sm-4'>
\t\t\t\t\t\t<div class='farmInfoIcons'>
\t\t\t\t\t\t\t<img src=\"{{asset('imgs/icon12.svg') }}\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4>Image</h4>
\t\t\t\t\t<img src=\"{{ farm.getImage() }}\" id=\"farmPic\">
\t\t\t\t\t<div class='farmInfoCards'>
\t\t\t\t\t\t<div class='farmInfoIcons'>
\t\t\t\t\t\t\t<img src=\"{{asset('imgs/icon1.svg') }}\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4>{{ template.getDescriptionTitle() }}</h4>
\t\t\t\t\t\t<div class='col-xs-12'>
\t\t\t\t\t\t\t{{ farm.getDescription() }}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"prodInfoIconHeadings\">
\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info\">
\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-search\" ></span>
\t\t\t\t\t\t\t\t\t{{ template.getStoryBtnTitle() }}
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div id='farmInfoDetailsContainer' class='col-xs-12 col-sm-4'>
\t\t\t\t\t<div class='farmInfoCards'>
\t\t\t\t\t\t<div class='farmInfoIcons'>
\t\t\t\t\t\t\t<img src=\"{{asset('imgs/icon2.svg') }}\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4>{{ template.getInformationTitle() }}</h4>
\t\t\t\t\t\t<div class='col-xs-12' style=\"text-align:center;\">
\t\t\t\t\t\t\t<span>{{ template.getRegionTitle() }}: </span>{{ farm.getRegion().getName() }}<br>
\t\t\t\t\t\t\t<span>{{ template.getElevationTitle() }}: </span>{{ farm.getElevation() }}m.a.s.l.<br>
\t\t\t\t\t\t\t<span>{{ template.getHarvestTitle() }}: </span>{{ farm.getHarvest() }}
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
\t\t\t\t\t\t\t<img src=\"{{asset('imgs/icon3.svg') }}\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4>{{ template.getAwardsTitle() }}</h4>
\t\t\t\t\t\t<div style=\"text-align:center;\">
\t\t\t\t\t\t\t{% for award in farm.getFarmAwards() %}
\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t{{award.getAward().getDescription()}}, {{award.getPlace()}} place, {{award.getYear()}}
\t\t\t\t\t\t\t\t</span></br>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class='farmInfoCards col-xs-12'>
\t\t\t\t\t\t<div class='farmInfoIcons'>
\t\t\t\t\t\t\t<img src=\"{{asset('imgs/icon4.svg') }}\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4>{{ template.getLocationTitle() }}</h4>
\t\t\t\t\t\t<div id=\"farm_map\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>\t\t
\t\t\t\t{% if farm.getProducts()|length > 0 %}
\t\t\t\t<div class='col-xs-12 col-sm-4'>
\t\t\t\t\t<div class='farmInfoIcons'>
\t\t\t\t\t\t<img src=\"{{asset('imgs/icon_presentation.png') }}\">
\t\t\t\t\t</div>
\t\t\t\t\t<div id='carouselHeading'>
\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t<h4>{{ template.getProductsTitle() }}</h4>
\t\t\t\t\t\t</center>
\t\t\t\t\t</div>
\t\t\t\t\t<div class='clearfix'></div>
\t\t\t\t\t\t<div class=\"container col-xs-10 col-xs-offset-1\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"span12\">
\t\t\t\t\t\t    \t    <div class=\"well\"> 
\t\t\t\t\t\t                <div id=\"myCarousel\" class=\"carousel slide\" data-interval=\"false\">
\t\t\t\t\t\t\t                <div class=\"carousel-inner\">
\t\t\t\t                   \t\t\t\t{% for product in farm.getProducts() %}\t
\t\t\t\t                   \t\t\t\t<div\t
\t\t\t\t\t\t\t\t                \t{% if loop.first %}
\t\t\t\t\t\t\t\t                \t\t class=\"item active\"
\t\t\t\t\t\t\t\t                \t{% else %}
\t\t\t\t\t\t\t\t                \t \tclass=\"item\"
\t\t\t\t\t\t\t\t                \t{% endif %}
\t\t\t\t\t\t\t\t                \t>
\t\t\t\t\t\t\t\t                \t<div class=\"row-fluid\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"carouselCards\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"productThumbnails\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"prodThumbInside\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"productThumbnailsHeadings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>{{ product.getName() }}</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('product_information', {'farm': product.getFarm().getId(),'product': product.getId(),'presentation':product.getPresentations()|first.getId()  }) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{product.getImage()}}\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">\${{ product.getPresentations()|first.getPrice() }}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('product_information', {'farm': product.getFarm().getId(),'product': product.getId(),'presentation': product.getPresentations()|first.getId() }) }}\"><p>{{ template.getMoreInfoTitle() }}</p></a> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetailsContainer row'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetails col-xs-5 col-xs-offset-1'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>{{ product.getPresentations()|first.getWeight() }}g/{{product.getPresentations()|first.getWeight() *0.04 }}oz</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetails col-xs-4 col-xs-offset-1'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    <p class=\"rating\">{{ product.getRank() }}/5<span>&#x2605;</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetailsContainer row'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetails col-xs-5 col-xs-offset-1'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>{{ product.getPresentations()|first.getGrind().getDescription() }}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetails col-xs-4 col-xs-offset-1'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>{{product.getReviews()}} {{ template.getReviewsTitle() }}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetailsContainer row'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetails col-xs-5 col-xs-offset-1'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>{{ product.getPresentations()|first.getRoast().getDescription() }}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t                \t</div>
\t\t\t\t\t\t\t                \t</div>
\t\t\t\t\t\t\t                \t{% endfor %}
\t\t\t\t\t\t                </div>
\t\t\t\t\t\t            </div>
\t\t\t\t\t\t\t                \t{% if farm.getProducts()|length > 1 %}
                                                    <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\"></a>
                                                    <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\"></a>
\t\t\t\t\t\t\t                \t{% endif %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
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
\t<script src=\"{{ asset('js/farm_information.js')}}\"></script>
{% endblock %}", "FarmBundle:Default:farm_information.html.twig", "D:\\Programacion\\xampp\\htdocs\\app\\src\\FarmBundle/Resources/views/Default/farm_information.html.twig");
    }
}
