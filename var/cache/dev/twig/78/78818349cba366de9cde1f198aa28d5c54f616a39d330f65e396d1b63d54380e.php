<?php

/* @Farm/Default/farm_information.html.twig */
class __TwigTemplate_75774921f2da93f1a62efb359c8477899f795a0a011c19fe7f9b52c5cff45303 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "@Farm/Default/farm_information.html.twig", 1);
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
        $__internal_a3a886c2cde4201387fe353aa3f394f623b1316b347d057941e5dd6c695534c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3a886c2cde4201387fe353aa3f394f623b1316b347d057941e5dd6c695534c8->enter($__internal_a3a886c2cde4201387fe353aa3f394f623b1316b347d057941e5dd6c695534c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Farm/Default/farm_information.html.twig"));

        $__internal_e8fa6fee76701b5fb37413ad5166bd263955bd13fa03bd54f1d07b8d07118365 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8fa6fee76701b5fb37413ad5166bd263955bd13fa03bd54f1d07b8d07118365->enter($__internal_e8fa6fee76701b5fb37413ad5166bd263955bd13fa03bd54f1d07b8d07118365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Farm/Default/farm_information.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3a886c2cde4201387fe353aa3f394f623b1316b347d057941e5dd6c695534c8->leave($__internal_a3a886c2cde4201387fe353aa3f394f623b1316b347d057941e5dd6c695534c8_prof);

        
        $__internal_e8fa6fee76701b5fb37413ad5166bd263955bd13fa03bd54f1d07b8d07118365->leave($__internal_e8fa6fee76701b5fb37413ad5166bd263955bd13fa03bd54f1d07b8d07118365_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5172ef8258fa36a488c66d0f2ebc72a6282c745122f6f9d40f62ad80ca6850e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5172ef8258fa36a488c66d0f2ebc72a6282c745122f6f9d40f62ad80ca6850e8->enter($__internal_5172ef8258fa36a488c66d0f2ebc72a6282c745122f6f9d40f62ad80ca6850e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0d1267fc85d02db2737c6233babad5219b8d410575d852982b76e107a0ad851b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d1267fc85d02db2737c6233babad5219b8d410575d852982b76e107a0ad851b->enter($__internal_0d1267fc85d02db2737c6233babad5219b8d410575d852982b76e107a0ad851b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Farm Information ";
        
        $__internal_0d1267fc85d02db2737c6233babad5219b8d410575d852982b76e107a0ad851b->leave($__internal_0d1267fc85d02db2737c6233babad5219b8d410575d852982b76e107a0ad851b_prof);

        
        $__internal_5172ef8258fa36a488c66d0f2ebc72a6282c745122f6f9d40f62ad80ca6850e8->leave($__internal_5172ef8258fa36a488c66d0f2ebc72a6282c745122f6f9d40f62ad80ca6850e8_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ce54bd8d9770aeea53c603f49ef696d746d367e4a7fcf4464e6bc8b983dbe177 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce54bd8d9770aeea53c603f49ef696d746d367e4a7fcf4464e6bc8b983dbe177->enter($__internal_ce54bd8d9770aeea53c603f49ef696d746d367e4a7fcf4464e6bc8b983dbe177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6e685b8649a209985477bf2e75661b4e8109691f589f6a28d1e3192e21f18e7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e685b8649a209985477bf2e75661b4e8109691f589f6a28d1e3192e21f18e7c->enter($__internal_6e685b8649a209985477bf2e75661b4e8109691f589f6a28d1e3192e21f18e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/farm_information.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_6e685b8649a209985477bf2e75661b4e8109691f589f6a28d1e3192e21f18e7c->leave($__internal_6e685b8649a209985477bf2e75661b4e8109691f589f6a28d1e3192e21f18e7c_prof);

        
        $__internal_ce54bd8d9770aeea53c603f49ef696d746d367e4a7fcf4464e6bc8b983dbe177->leave($__internal_ce54bd8d9770aeea53c603f49ef696d746d367e4a7fcf4464e6bc8b983dbe177_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_2dd4978f9938731ea505f942d37eae9bf4df913aece5ff460f7e8be5747df4e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dd4978f9938731ea505f942d37eae9bf4df913aece5ff460f7e8be5747df4e0->enter($__internal_2dd4978f9938731ea505f942d37eae9bf4df913aece5ff460f7e8be5747df4e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3f21f78fdd3c65b1e36d5ca711d4136dc2e1baab5d878457b198378777822432 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f21f78fdd3c65b1e36d5ca711d4136dc2e1baab5d878457b198378777822432->enter($__internal_3f21f78fdd3c65b1e36d5ca711d4136dc2e1baab5d878457b198378777822432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<main>
\t<div class='pageTitle'>
\t\t<center>
\t\t\t<h2>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getPageTitle", array(), "method"), "html", null, true);
        echo "</h2>
\t\t</center>
\t</div>
\t<section id='farmInfoSection'>
\t\t<div class='container-fluid'>
\t\t\t<div id='farmInfoContainer' class='row'>
\t\t\t\t<div id='farmInfoHeading' class='col-xs-12'>
\t\t\t\t\t<center>
\t\t\t\t\t\t<h3>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["farm"] ?? $this->getContext($context, "farm")), "getName", array(), "method"), "html", null, true);
        echo "</h3>
\t\t\t\t\t</center>
\t\t\t\t</div>
\t\t\t\t<div id=\"farmPicContainer\" class='col-xs-12 col-sm-4'>
\t\t\t\t\t\t<div class='farmInfoIcons'>
\t\t\t\t\t\t\t<img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imgs/icon12.svg"), "html", null, true);
        echo "\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4>Image</h4>
\t\t\t\t\t<img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute(($context["farm"] ?? $this->getContext($context, "farm")), "getImage", array(), "method"), "html", null, true);
        echo "\" id=\"farmPic\">
\t\t\t\t\t<div class='farmInfoCards'>
\t\t\t\t\t\t<div class='farmInfoIcons'>
\t\t\t\t\t\t\t<img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imgs/icon1.svg"), "html", null, true);
        echo "\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getDescriptionTitle", array(), "method"), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t<div class='col-xs-12'>
\t\t\t\t\t\t\t";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute(($context["farm"] ?? $this->getContext($context, "farm")), "getDescription", array(), "method"), "html", null, true);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"prodInfoIconHeadings\">
\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info\">
\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-search\" ></span>
\t\t\t\t\t\t\t\t\t";
        // line 42
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
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imgs/icon2.svg"), "html", null, true);
        echo "\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4>";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getInformationTitle", array(), "method"), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t<div class='col-xs-12' style=\"text-align:center;\">
\t\t\t\t\t\t\t<span>";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getRegionTitle", array(), "method"), "html", null, true);
        echo ": </span>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["farm"] ?? $this->getContext($context, "farm")), "getRegion", array(), "method"), "getName", array(), "method"), "html", null, true);
        echo "<br>
\t\t\t\t\t\t\t<span>";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getElevationTitle", array(), "method"), "html", null, true);
        echo ": </span>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["farm"] ?? $this->getContext($context, "farm")), "getElevation", array(), "method"), "html", null, true);
        echo "m.a.s.l.<br>
\t\t\t\t\t\t\t<span>";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getHarvestTitle", array(), "method"), "html", null, true);
        echo ": </span>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["farm"] ?? $this->getContext($context, "farm")), "getHarvest", array(), "method"), "html", null, true);
        echo "
\t\t\t\t\t\t\t<span>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getSpeciesTitle", array(), "method"), "html", null, true);
        echo ": </span>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getSpeciesInfo", array(), "method"), "html", null, true);
        echo "<br>
\t\t\t\t\t\t\t<span>";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getCultivarTitle", array(), "method"), "html", null, true);
        echo ": </span>
\t\t\t\t\t\t\t";
        // line 60
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
            // line 61
            echo "\t\t\t\t\t\t\t\t";
            if ($this->getAttribute($context["loop"], "first", array())) {
                // line 62
                echo "\t\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($context["cultivar"], "getDescription", array(), "method"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t";
            } else {
                // line 64
                echo "\t\t\t\t\t\t\t\t\t, ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["cultivar"], "getDescription", array(), "method"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t";
            }
            // line 66
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
        // line 67
        echo "\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<span>";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getCertificationsTitle", array(), "method"), "html", null, true);
        echo ": </span>
\t\t\t\t\t\t\t";
        // line 69
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
            // line 70
            echo "\t\t\t\t\t\t\t\t";
            if ($this->getAttribute($context["loop"], "first", array())) {
                // line 71
                echo "\t\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($context["certification"], "getDescription", array(), "method"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t";
            } else {
                // line 73
                echo "\t\t\t\t\t\t\t\t\t, ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["certification"], "getDescription", array(), "method"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t";
            }
            // line 75
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
        // line 76
        echo "\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class='farmInfoCards col-xs-12'>
\t\t\t\t\t\t<div class='farmInfoIcons'>
\t\t\t\t\t\t\t<img src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imgs/icon3.svg"), "html", null, true);
        echo "\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4>";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getAwardsTitle", array(), "method"), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t<div style=\"text-align:center;\">
\t\t\t\t\t\t\t";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["farm"] ?? $this->getContext($context, "farm")), "getFarmAwards", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["award"]) {
            // line 86
            echo "\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t";
            // line 87
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
        // line 90
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class='farmInfoCards col-xs-12'>
\t\t\t\t\t\t<div class='farmInfoIcons'>
\t\t\t\t\t\t\t<img src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imgs/icon4.svg"), "html", null, true);
        echo "\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4>";
        // line 96
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getLocationTitle", array(), "method"), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t<div id=\"farm_map\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>\t\t
\t\t\t\t";
        // line 100
        if ((twig_length_filter($this->env, $this->getAttribute(($context["farm"] ?? $this->getContext($context, "farm")), "getProducts", array(), "method")) > 0)) {
            // line 101
            echo "\t\t\t\t<div class='col-xs-12 col-sm-4'>
\t\t\t\t\t<div class='farmInfoIcons'>
\t\t\t\t\t\t<img src=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imgs/icon_presentation.png"), "html", null, true);
            echo "\">
\t\t\t\t\t</div>
\t\t\t\t\t<div id='carouselHeading'>
\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t<h4>";
            // line 107
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
            // line 117
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
                // line 119
                if ($this->getAttribute($context["loop"], "first", array())) {
                    // line 120
                    echo "\t\t\t\t\t\t\t\t                \t\t class=\"item active\"
\t\t\t\t\t\t\t\t                \t";
                } else {
                    // line 122
                    echo "\t\t\t\t\t\t\t\t                \t \tclass=\"item\"
\t\t\t\t\t\t\t\t                \t";
                }
                // line 124
                echo "\t\t\t\t\t\t\t\t                \t>
\t\t\t\t\t\t\t\t                \t<div class=\"row-fluid\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"carouselCards\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"productThumbnails\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"prodThumbInside\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"productThumbnailsHeadings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>";
                // line 130
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "getName", array(), "method"), "html", null, true);
                echo "</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 132
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_information", array("farm" => $this->getAttribute($this->getAttribute($context["product"], "getFarm", array(), "method"), "getId", array(), "method"), "product" => $this->getAttribute($context["product"], "getId", array(), "method"), "presentation" => $this->getAttribute(twig_first($this->env, $this->getAttribute($context["product"], "getPresentations", array(), "method")), "getId", array(), "method"))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 133
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "getImage", array(), "method"), "html", null, true);
                echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">\$";
                // line 135
                echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, $this->getAttribute($context["product"], "getPresentations", array(), "method")), "getPrice", array(), "method"), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 136
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_information", array("farm" => $this->getAttribute($this->getAttribute($context["product"], "getFarm", array(), "method"), "getId", array(), "method"), "product" => $this->getAttribute($context["product"], "getId", array(), "method"), "presentation" => $this->getAttribute(twig_first($this->env, $this->getAttribute($context["product"], "getPresentations", array(), "method")), "getId", array(), "method"))), "html", null, true);
                echo "\"><p>";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getMoreInfoTitle", array(), "method"), "html", null, true);
                echo "</p></a> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetailsContainer row'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetails col-md-6'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    <p>Weight:</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetails col-md-6'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    <p>";
                // line 142
                echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, $this->getAttribute($context["product"], "getPresentations", array(), "method")), "getWeight", array(), "method"), "html", null, true);
                echo "g/";
                echo twig_escape_filter($this->env, ($this->getAttribute(twig_first($this->env, $this->getAttribute($context["product"], "getPresentations", array(), "method")), "getWeight", array(), "method") * 0.04), "html", null, true);
                echo "oz</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetailsContainer row'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetails col-md-6'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    <p>Grind:</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetails col-md-6'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>";
                // line 150
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($context["product"], "getPresentations", array(), "method")), "getGrind", array(), "method"), "getDescription", array(), "method"), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetailsContainer row'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetails col-md-6'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    <p>Roast:</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetails col-md-6'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        \t<p>";
                // line 158
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($context["product"], "getPresentations", array(), "method")), "getRoast", array(), "method"), "getDescription", array(), "method"), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetailsContainer row'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetails col-md-6'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    <p>Rating:</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetails col-md-6'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            <p class=\"rating\">";
                // line 166
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "getRank", array(), "method"), "html", null, true);
                echo "/5<span>&#x2605;</span><a>Reviews</a></p>
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
            // line 175
            echo "\t\t\t\t\t\t                </div>
\t\t\t\t\t\t            </div>
\t\t\t\t\t\t\t                \t";
            // line 177
            if ((twig_length_filter($this->env, $this->getAttribute(($context["farm"] ?? $this->getContext($context, "farm")), "getProducts", array(), "method")) > 1)) {
                // line 178
                echo "                                                    <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\"></a>
                                                    <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\"></a>
\t\t\t\t\t\t\t                \t";
            }
            // line 181
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"prodInfoIconHeadings\">
\t\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t\t<button id='contactButton' type=\"button\" class=\"btn btn-info\">
\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-envelope\"></span>
\t\t\t\t\t\t\t\t\t\t";
            // line 187
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
        // line 196
        echo "\t\t</section>
</main>
";
        
        $__internal_3f21f78fdd3c65b1e36d5ca711d4136dc2e1baab5d878457b198378777822432->leave($__internal_3f21f78fdd3c65b1e36d5ca711d4136dc2e1baab5d878457b198378777822432_prof);

        
        $__internal_2dd4978f9938731ea505f942d37eae9bf4df913aece5ff460f7e8be5747df4e0->leave($__internal_2dd4978f9938731ea505f942d37eae9bf4df913aece5ff460f7e8be5747df4e0_prof);

    }

    // line 200
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_386b79293b7b19f11bea5259edc239d9686b001ed6608fbcaf6553f6b322da3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_386b79293b7b19f11bea5259edc239d9686b001ed6608fbcaf6553f6b322da3b->enter($__internal_386b79293b7b19f11bea5259edc239d9686b001ed6608fbcaf6553f6b322da3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1579fbbc83e0faf683e20be24d4612191c6faac1f74f44a8480b120bce5c636c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1579fbbc83e0faf683e20be24d4612191c6faac1f74f44a8480b120bce5c636c->enter($__internal_1579fbbc83e0faf683e20be24d4612191c6faac1f74f44a8480b120bce5c636c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 201
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyA8iOI-wKQIfkncEFwGUHS3dsce-nlwsQ0\" type=\"text/javascript\"></script>
\t<script>
\t\tvar lat = ";
        // line 204
        echo twig_escape_filter($this->env, $this->getAttribute(($context["farm"] ?? $this->getContext($context, "farm")), "getLatitude", array(), "method"), "html", null, true);
        echo "
\t\tvar lon = ";
        // line 205
        echo twig_escape_filter($this->env, $this->getAttribute(($context["farm"] ?? $this->getContext($context, "farm")), "getLongitude", array(), "method"), "html", null, true);
        echo "
\t</script>\t
\t<script src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/farm_information.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_1579fbbc83e0faf683e20be24d4612191c6faac1f74f44a8480b120bce5c636c->leave($__internal_1579fbbc83e0faf683e20be24d4612191c6faac1f74f44a8480b120bce5c636c_prof);

        
        $__internal_386b79293b7b19f11bea5259edc239d9686b001ed6608fbcaf6553f6b322da3b->leave($__internal_386b79293b7b19f11bea5259edc239d9686b001ed6608fbcaf6553f6b322da3b_prof);

    }

    public function getTemplateName()
    {
        return "@Farm/Default/farm_information.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  574 => 207,  569 => 205,  565 => 204,  558 => 201,  549 => 200,  537 => 196,  525 => 187,  517 => 181,  512 => 178,  510 => 177,  506 => 175,  483 => 166,  472 => 158,  461 => 150,  448 => 142,  437 => 136,  433 => 135,  428 => 133,  424 => 132,  419 => 130,  411 => 124,  407 => 122,  403 => 120,  401 => 119,  381 => 117,  368 => 107,  361 => 103,  357 => 101,  355 => 100,  348 => 96,  343 => 94,  337 => 90,  324 => 87,  321 => 86,  317 => 85,  312 => 83,  307 => 81,  300 => 76,  286 => 75,  280 => 73,  274 => 71,  271 => 70,  254 => 69,  250 => 68,  247 => 67,  233 => 66,  227 => 64,  221 => 62,  218 => 61,  201 => 60,  197 => 59,  191 => 58,  185 => 57,  179 => 56,  173 => 55,  168 => 53,  163 => 51,  151 => 42,  142 => 36,  137 => 34,  132 => 32,  126 => 29,  120 => 26,  112 => 21,  101 => 13,  96 => 10,  87 => 9,  75 => 6,  70 => 5,  61 => 4,  43 => 3,  11 => 1,);
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
\t<div class='pageTitle'>
\t\t<center>
\t\t\t<h2>{{ template.getPageTitle() }}</h2>
\t\t</center>
\t</div>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetails col-md-6'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    <p>Weight:</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetails col-md-6'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    <p>{{ product.getPresentations()|first.getWeight() }}g/{{product.getPresentations()|first.getWeight() *0.04 }}oz</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetailsContainer row'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetails col-md-6'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    <p>Grind:</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetails col-md-6'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>{{ product.getPresentations()|first.getGrind().getDescription() }}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetailsContainer row'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetails col-md-6'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    <p>Roast:</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetails col-md-6'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        \t<p>{{ product.getPresentations()|first.getRoast().getDescription() }}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetailsContainer row'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetails col-md-6'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    <p>Rating:</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetails col-md-6'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            <p class=\"rating\">{{ product.getRank() }}/5<span>&#x2605;</span><a>Reviews</a></p>
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
{% endblock %}", "@Farm/Default/farm_information.html.twig", "C:\\xampp\\htdocs\\crgc\\src\\FarmBundle\\Resources\\views\\Default\\farm_information.html.twig");
    }
}
