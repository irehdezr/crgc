<?php

/* PageBundle:Default:farm_information.html.twig */
class __TwigTemplate_70db99a9cb0953d2fbc013655767c2bf7751154a5c863df8d179dbd304e496a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "PageBundle:Default:farm_information.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_325b51d10aafb0b7a9ac7432cb2904ca89bbaf4120b26a54d1e006151b9b9182 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_325b51d10aafb0b7a9ac7432cb2904ca89bbaf4120b26a54d1e006151b9b9182->enter($__internal_325b51d10aafb0b7a9ac7432cb2904ca89bbaf4120b26a54d1e006151b9b9182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:farm_information.html.twig"));

        $__internal_dbbfb167f80fe9ff297116a9653482e231f1829f57aef25ca80eea357a77a285 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbbfb167f80fe9ff297116a9653482e231f1829f57aef25ca80eea357a77a285->enter($__internal_dbbfb167f80fe9ff297116a9653482e231f1829f57aef25ca80eea357a77a285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:farm_information.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_325b51d10aafb0b7a9ac7432cb2904ca89bbaf4120b26a54d1e006151b9b9182->leave($__internal_325b51d10aafb0b7a9ac7432cb2904ca89bbaf4120b26a54d1e006151b9b9182_prof);

        
        $__internal_dbbfb167f80fe9ff297116a9653482e231f1829f57aef25ca80eea357a77a285->leave($__internal_dbbfb167f80fe9ff297116a9653482e231f1829f57aef25ca80eea357a77a285_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5522a5631876c319f9cec8020d43c9047f5a49290043d0fe8e00698e57acd997 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5522a5631876c319f9cec8020d43c9047f5a49290043d0fe8e00698e57acd997->enter($__internal_5522a5631876c319f9cec8020d43c9047f5a49290043d0fe8e00698e57acd997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dcf8dbc066bea45e912cee418c7ad62e314912d75790d64ee798c6856df695eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcf8dbc066bea45e912cee418c7ad62e314912d75790d64ee798c6856df695eb->enter($__internal_dcf8dbc066bea45e912cee418c7ad62e314912d75790d64ee798c6856df695eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Farm Information ";
        
        $__internal_dcf8dbc066bea45e912cee418c7ad62e314912d75790d64ee798c6856df695eb->leave($__internal_dcf8dbc066bea45e912cee418c7ad62e314912d75790d64ee798c6856df695eb_prof);

        
        $__internal_5522a5631876c319f9cec8020d43c9047f5a49290043d0fe8e00698e57acd997->leave($__internal_5522a5631876c319f9cec8020d43c9047f5a49290043d0fe8e00698e57acd997_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0ef255edd987e3fc5add3d37012030cea340f7fcf12033b411b02c35e8eef5d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ef255edd987e3fc5add3d37012030cea340f7fcf12033b411b02c35e8eef5d3->enter($__internal_0ef255edd987e3fc5add3d37012030cea340f7fcf12033b411b02c35e8eef5d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d3f2008af5796d4f84758d1427668615b560d577afffe073c5e846443644a777 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3f2008af5796d4f84758d1427668615b560d577afffe073c5e846443644a777->enter($__internal_d3f2008af5796d4f84758d1427668615b560d577afffe073c5e846443644a777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/product.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/farm_information.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_d3f2008af5796d4f84758d1427668615b560d577afffe073c5e846443644a777->leave($__internal_d3f2008af5796d4f84758d1427668615b560d577afffe073c5e846443644a777_prof);

        
        $__internal_0ef255edd987e3fc5add3d37012030cea340f7fcf12033b411b02c35e8eef5d3->leave($__internal_0ef255edd987e3fc5add3d37012030cea340f7fcf12033b411b02c35e8eef5d3_prof);

    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f4fda268b44e0960a2bcbf1466c1cb867935d9c2f2646c90b2fe5911181fc15f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4fda268b44e0960a2bcbf1466c1cb867935d9c2f2646c90b2fe5911181fc15f->enter($__internal_f4fda268b44e0960a2bcbf1466c1cb867935d9c2f2646c90b2fe5911181fc15f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0b7356a58727f33d864b4e86b74d35a230e222b959472272e3ef5f9324d7a1c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b7356a58727f33d864b4e86b74d35a230e222b959472272e3ef5f9324d7a1c3->enter($__internal_0b7356a58727f33d864b4e86b74d35a230e222b959472272e3ef5f9324d7a1c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 10
        echo "\t<script src=\"https://maps.googleapis.com/maps/api/js?key= AIzaSyA8iOI-wKQIfkncEFwGUHS3dsce-nlwsQ0&callback=loadMap\"></script>
\t<script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/farm_information.js"), "html", null, true);
        echo "\"></script>
\t<script>
\t\tvar lat = ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["farm"]) ? $context["farm"] : $this->getContext($context, "farm")), "getLatitude", array(), "method"), "html", null, true);
        echo "
\t\tvar lon = ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["farm"]) ? $context["farm"] : $this->getContext($context, "farm")), "getLongitude", array(), "method"), "html", null, true);
        echo "
\t</script>
    ";
        // line 16
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_0b7356a58727f33d864b4e86b74d35a230e222b959472272e3ef5f9324d7a1c3->leave($__internal_0b7356a58727f33d864b4e86b74d35a230e222b959472272e3ef5f9324d7a1c3_prof);

        
        $__internal_f4fda268b44e0960a2bcbf1466c1cb867935d9c2f2646c90b2fe5911181fc15f->leave($__internal_f4fda268b44e0960a2bcbf1466c1cb867935d9c2f2646c90b2fe5911181fc15f_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_90b135b22847e0d27a8a2c92e26ca2467816605b1fdfef39466051d540e7cfe4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90b135b22847e0d27a8a2c92e26ca2467816605b1fdfef39466051d540e7cfe4->enter($__internal_90b135b22847e0d27a8a2c92e26ca2467816605b1fdfef39466051d540e7cfe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8c716406c5b44b6f3d6ef618efc717483fc2be4d3ac9d948cccd4edfed9393e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c716406c5b44b6f3d6ef618efc717483fc2be4d3ac9d948cccd4edfed9393e3->enter($__internal_8c716406c5b44b6f3d6ef618efc717483fc2be4d3ac9d948cccd4edfed9393e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 20
        echo "\t<center><h2>Farm Information</h2></center>
\t<section id='farmInfoSection'>
\t\t<div class='container-fluid'>
\t\t\t<div id='farmInfoContainer' class='row'>
\t\t\t\t<div id='farmInfoHeading' class='col-xs-12'>
\t\t\t\t\t<center>
\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["farm"]) ? $context["farm"] : $this->getContext($context, "farm")), "getName", array(), "method"), "html", null, true);
        echo "
\t\t\t\t\t\t</h3>
\t\t\t\t\t</center>
\t\t\t\t</div>
\t\t\t\t<div id=\"farmPicContainer\" class='col-xs-12 col-md-offset-3 col-md-6 col-lg-offset-0 col-lg-6'>
\t\t\t\t\t<img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["farm"]) ? $context["farm"] : $this->getContext($context, "farm")), "getImage", array(), "method"), "html", null, true);
        echo "\" id=\"farmPic\">
\t\t\t\t</div>
\t\t\t\t<div id='farmInfoDetailsContainer' class='col-md-12 col-lg-6'>
\t\t\t\t\t<div class='farmInfoCards col-lg-6 col-md-6'>
\t\t\t\t\t\t<div class='farmInfoIcons'>
\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon1.png\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")), "getDescriptionTitle", array(), "method"), "html", null, true);
        echo "
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["farm"]) ? $context["farm"] : $this->getContext($context, "farm")), "getDescription", array(), "method"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t<div class='prodInfoIconHeadings'>
\t\t\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info\" data-toggle=\"collapse\" data-target=\"#cupMap\"><span class=\"glyphicon glyphicon-eye-open\"></span>Read story</button>
\t\t\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class='farmInfoCards col-lg-6 col-md-6'>
\t\t\t\t\t\t\t<div class='farmInfoIcons'>
\t\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon2.png\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h4>";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")), "getInformationTitle", array(), "method"), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t\t<p><span>Region: </span>: Central Valley</p>
\t\t\t\t\t\t\t<p><span>";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")), "getElevationTitle", array(), "method"), "html", null, true);
        echo "</span>: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["farm"]) ? $context["farm"] : $this->getContext($context, "farm")), "getElevation", array(), "method"), "html", null, true);
        echo " m.a.s.l.</p>
\t\t\t\t\t\t\t<p><span>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")), "getHarvestTitle", array(), "method"), "html", null, true);
        echo "</span>: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["farm"]) ? $context["farm"] : $this->getContext($context, "farm")), "getHarvest", array(), "method"), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t<p><span>";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")), "getSpeciesTitle", array(), "method"), "html", null, true);
        echo "</span>: Arabica</p>
\t\t\t\t\t\t\t<p><span>";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")), "getCultivarTitle", array(), "method"), "html", null, true);
        echo "</span>:
\t\t\t\t\t\t\t<div class= \"col-md-12 col-md-offset-2\">
\t\t\t\t\t\t\t\t";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["farm"]) ? $context["farm"] : $this->getContext($context, "farm")), "getCultivars", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["cultivar"]) {
            // line 63
            echo "\t\t\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cultivar"], "getDescription", array(), "method"), "html", null, true);
            echo " </br>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cultivar'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p><span>";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")), "getCertificationsTitle", array(), "method"), "html", null, true);
        echo "</span>:
\t\t\t\t\t\t\t<div class= \"col-md-12 col-md-offset-2\">
\t\t\t\t\t\t\t\t";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["farm"]) ? $context["farm"] : $this->getContext($context, "farm")), "getCertifications", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["certification"]) {
            // line 70
            echo "\t\t\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($context["certification"], "getDescription", array(), "method"), "html", null, true);
            echo " </br>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['certification'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class='farmInfoCards col-lg-6 col-md-6'>
\t\t\t\t\t\t\t<div class='farmInfoIcons'>
\t\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon3.png\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h4>";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")), "getAwardsTitle", array(), "method"), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["farm"]) ? $context["farm"] : $this->getContext($context, "farm")), "getFarmAwards", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["award"]) {
            // line 82
            echo "\t\t\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["award"], "getAward", array(), "method"), "getDescription", array(), "method"), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, $this->getAttribute($context["award"], "getPlace", array(), "method"), "html", null, true);
            echo " place,";
            echo twig_escape_filter($this->env, $this->getAttribute($context["award"], "getYear", array(), "method"), "html", null, true);
            echo "</br>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['award'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class='farmInfoCards col-lg-6 col-md-6'>
\t\t\t\t\t\t\t<div class='farmInfoIcons'>
\t\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon4.png\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h4>";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")), "getLocationTitle", array(), "method"), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t\t<div id=\"farm_map\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<div class='clearfix'></div>
\t\t";
        // line 98
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["farm"]) ? $context["farm"] : $this->getContext($context, "farm")), "getProducts", array(), "method")) > 0)) {
            // line 99
            echo "\t\t<section>
\t\t\t<div id='carouselHeading' class='col-xs-12'>
\t\t\t\t<center><h3>";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")), "getProductsTitle", array(), "method"), "html", null, true);
            echo "</h3></center>
\t\t\t</div>
\t\t\t<div class='clearfix'></div>
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"span12\">
\t\t\t    \t    <div class=\"well\">
\t\t\t    \t    ";
            // line 108
            $context["size"] = (twig_length_filter($this->env, $this->getAttribute((isset($context["farm"]) ? $context["farm"] : $this->getContext($context, "farm")), "getProducts", array(), "method")) / 3);
            echo " 
\t\t\t    \t    ";
            // line 109
            if (((isset($context["size"]) ? $context["size"] : $this->getContext($context, "size")) < 1)) {
                // line 110
                echo "\t\t\t    \t    \t";
                $context["size"] = 1;
                // line 111
                echo "\t\t\t    \t    ";
            }
            // line 112
            echo "                \t\t\t<div id=\"farm_informationCarousel\" class=\"carousel slide\" data-interval=\"false\">
\t\t\t\t                <ol class=\"carousel-indicators\">
\t\t\t\t                ";
            // line 114
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_number_format_filter($this->env, (isset($context["size"]) ? $context["size"] : $this->getContext($context, "size")), 0)));
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
            foreach ($context['_seq'] as $context["_key"] => $context["index"]) {
                // line 115
                echo "\t\t\t\t                \t";
                if (($this->getAttribute($context["loop"], "index", array()) < 2)) {
                    // line 116
                    echo "\t\t\t\t                    \t<li data-target=\"#farm_informationCarousel\" data-slide-to=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "\" class=\"active\"></li>
\t\t\t\t                    ";
                } else {
                    // line 118
                    echo "\t\t\t\t                    \t<li data-target=\"#farm_informationCarousel\" data-slide-to=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "\" class=\"\"></li>
\t\t\t\t                \t";
                }
                // line 120
                echo "\t\t\t\t                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['index'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 121
            echo "\t\t\t\t                </ol>\t                
\t\t\t\t                <div class=\"carousel-inner\" role=\"listbox\">
\t\t\t\t                   \t";
            // line 123
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["farm"]) ? $context["farm"] : $this->getContext($context, "farm")), "getProducts", array(), "method"));
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
                // line 124
                echo "\t\t\t\t\t\t\t\t        ";
                if (($this->getAttribute($context["loop"], "index", array()) < 2)) {
                    echo " 
\t\t\t\t\t\t\t\t    \t    <div class=\"item active\">
\t\t\t\t\t\t\t\t    \t";
                }
                // line 127
                echo "\t\t\t\t                   \t\t";
                if (($this->getAttribute($context["loop"], "index", array()) < 4)) {
                    // line 128
                    echo "\t\t\t\t\t\t\t\t                <div class=\"row-fluid\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"carouselCards col-xs-12 col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"productThumbnails\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='prodThumbInside'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"productThumbnailsHeadings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>";
                    // line 133
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "getName", array(), "method"), "html", null, true);
                    echo "</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 135
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_information", array("product" => ($this->getAttribute($this->getAttribute($context["product"], "getFarm", array(), "method"), "getId", array(), "method") . $this->getAttribute($context["product"], "getId", array(), "method")))), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 136
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "getImage", array(), "method"), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$";
                    // line 139
                    echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, $this->getAttribute($context["product"], "getPresentations", array(), "method")), "getPrice", array(), "method"), "html", null, true);
                    echo "</br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 140
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_homepage", array("name" => "onDevelopment"));
                    echo "\">Order</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetailsContainer row'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetails col-xs-5 col-xs-offset-1'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 145
                    echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, $this->getAttribute($context["product"], "getPresentations", array(), "method")), "getWeight", array(), "method"), "html", null, true);
                    echo "g/
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 146
                    echo twig_escape_filter($this->env, ($this->getAttribute(twig_first($this->env, $this->getAttribute($context["product"], "getPresentations", array(), "method")), "getWeight", array(), "method") * 0.04), "html", null, true);
                    echo "oz
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>";
                    // line 148
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($context["product"], "getPresentations", array(), "method")), "getRoast", array(), "method"), "getDescription", array(), "method"), "html", null, true);
                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div href=\"#\" class='productDetails  col-xs-5 col-md-5'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>";
                    // line 151
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($context["product"], "getPresentations", array(), "method")), "getGrind", array(), "method"), "getDescription", array(), "method"), "html", null, true);
                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 152
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_information", array("product" => ($this->getAttribute($this->getAttribute($context["product"], "getFarm", array(), "method"), "getId", array(), "method") . $this->getAttribute($context["product"], "getId", array(), "method")))), "html", null, true);
                    echo "\"><p>More info/options</p></a> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetailsContainer row'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetails col-xs-5 col-xs-offset-1'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 158
                    $context["rank"] = 0;
                    // line 159
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute($context["product"], "getRank", array(), "method")));
                    foreach ($context['_seq'] as $context["_key"] => $context["inx"]) {
                        // line 160
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t";
                        $context["rank"] = ((isset($context["rank"]) ? $context["rank"] : $this->getContext($context, "rank")) + 1);
                        // line 161
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t<span>&#x2605;</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inx'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 163
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if (((isset($context["rank"]) ? $context["rank"] : $this->getContext($context, "rank")) < 5)) {
                        // line 164
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range((isset($context["rank"]) ? $context["rank"] : $this->getContext($context, "rank")), 4));
                        foreach ($context['_seq'] as $context["_key"] => $context["inx2"]) {
                            // line 165
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t";
                            $context["rank"] = ((isset($context["rank"]) ? $context["rank"] : $this->getContext($context, "rank")) + 1);
                            // line 166
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t<span>&#x2606;</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inx2'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 168
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 169
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetails col-xs-5 col-md-5'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>";
                    // line 172
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "getReviews", array(), "method"), "html", null, true);
                    echo " reviews</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t              \t</div>
\t\t\t\t                   \t\t";
                } elseif ((0 == $this->getAttribute(                // line 179
$context["loop"], "index", array()) % 4)) {
                    // line 180
                    echo "\t\t\t\t\t\t\t\t            </div>
\t\t\t\t                   \t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t                <div class=\"row-fluid\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"carouselCards col-xs-12 col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"productThumbnails\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='prodThumbInside'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"productThumbnailsHeadings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>";
                    // line 187
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "getName", array(), "method"), "html", null, true);
                    echo "</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 189
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_information", array("product" => ($this->getAttribute($this->getAttribute($context["product"], "getFarm", array(), "method"), "getId", array(), "method") . $this->getAttribute($context["product"], "getId", array(), "method")))), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 190
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "getImage", array(), "method"), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$";
                    // line 193
                    echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, $this->getAttribute($context["product"], "getPresentations", array(), "method")), "getPrice", array(), "method"), "html", null, true);
                    echo "</br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 194
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_homepage", array("name" => "onDevelopment"));
                    echo "\">Order</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetailsContainer row'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetails col-xs-5 col-xs-offset-1'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 199
                    echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, $this->getAttribute($context["product"], "getPresentations", array(), "method")), "getWeight", array(), "method"), "html", null, true);
                    echo "g/
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 200
                    echo twig_escape_filter($this->env, ($this->getAttribute(twig_first($this->env, $this->getAttribute($context["product"], "getPresentations", array(), "method")), "getWeight", array(), "method") * 0.04), "html", null, true);
                    echo "oz
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>";
                    // line 202
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($context["product"], "getPresentations", array(), "method")), "getRoast", array(), "method"), "getDescription", array(), "method"), "html", null, true);
                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div href=\"#\" class='productDetails  col-xs-5 col-md-5'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>";
                    // line 205
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($context["product"], "getPresentations", array(), "method")), "getGrind", array(), "method"), "getDescription", array(), "method"), "html", null, true);
                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 206
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_information", array("product" => ($this->getAttribute($this->getAttribute($context["product"], "getFarm", array(), "method"), "getId", array(), "method") . $this->getAttribute($context["product"], "getId", array(), "method")))), "html", null, true);
                    echo "\"><p>More info/options</p></a> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetailsContainer row'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetails col-xs-5 col-xs-offset-1'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 212
                    $context["rank"] = 0;
                    // line 213
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute($context["product"], "getRank", array(), "method")));
                    foreach ($context['_seq'] as $context["_key"] => $context["inx"]) {
                        // line 214
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t";
                        $context["rank"] = ((isset($context["rank"]) ? $context["rank"] : $this->getContext($context, "rank")) + 1);
                        // line 215
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t<span>&#x2605;</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inx'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 217
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if (((isset($context["rank"]) ? $context["rank"] : $this->getContext($context, "rank")) < 5)) {
                        // line 218
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range((isset($context["rank"]) ? $context["rank"] : $this->getContext($context, "rank")), 4));
                        foreach ($context['_seq'] as $context["_key"] => $context["inx2"]) {
                            // line 219
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t";
                            $context["rank"] = ((isset($context["rank"]) ? $context["rank"] : $this->getContext($context, "rank")) + 1);
                            // line 220
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t<span>&#x2606;</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inx2'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 222
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 223
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetails col-xs-5 col-md-5'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>";
                    // line 226
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "getReviews", array(), "method"), "html", null, true);
                    echo " reviews</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t              \t</div>
\t\t\t\t                   \t\t";
                } else {
                    // line 234
                    echo "\t\t\t\t\t\t\t\t                <div class=\"row-fluid\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"carouselCards col-xs-12 col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"productThumbnails\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='prodThumbInside'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"productThumbnailsHeadings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>";
                    // line 239
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "getName", array(), "method"), "html", null, true);
                    echo "</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 241
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_information", array("product" => ($this->getAttribute($this->getAttribute($context["product"], "getFarm", array(), "method"), "getId", array(), "method") . $this->getAttribute($context["product"], "getId", array(), "method")))), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 242
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "getImage", array(), "method"), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$";
                    // line 245
                    echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, $this->getAttribute($context["product"], "getPresentations", array(), "method")), "getPrice", array(), "method"), "html", null, true);
                    echo "</br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 246
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_homepage", array("name" => "onDevelopment"));
                    echo "\">Order</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetailsContainer row'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetails col-xs-5 col-xs-offset-1'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 251
                    echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, $this->getAttribute($context["product"], "getPresentations", array(), "method")), "getWeight", array(), "method"), "html", null, true);
                    echo "g/
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 252
                    echo twig_escape_filter($this->env, ($this->getAttribute(twig_first($this->env, $this->getAttribute($context["product"], "getPresentations", array(), "method")), "getWeight", array(), "method") * 0.04), "html", null, true);
                    echo "oz
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>";
                    // line 254
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($context["product"], "getPresentations", array(), "method")), "getRoast", array(), "method"), "getDescription", array(), "method"), "html", null, true);
                    echo " </p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div href=\"#\" class='productDetails  col-xs-5 col-md-5'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>";
                    // line 257
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($context["product"], "getPresentations", array(), "method")), "getGrind", array(), "method"), "getDescription", array(), "method"), "html", null, true);
                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 258
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_information", array("product" => ($this->getAttribute($this->getAttribute($context["product"], "getFarm", array(), "method"), "getId", array(), "method") . $this->getAttribute($context["product"], "getId", array(), "method")))), "html", null, true);
                    echo "\"><p>More info/options</p></a> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetailsContainer row'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetails col-xs-5 col-xs-offset-1'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 264
                    $context["rank"] = 0;
                    // line 265
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute($context["product"], "getRank", array(), "method")));
                    foreach ($context['_seq'] as $context["_key"] => $context["inx"]) {
                        // line 266
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t";
                        $context["rank"] = ((isset($context["rank"]) ? $context["rank"] : $this->getContext($context, "rank")) + 1);
                        // line 267
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t<span>&#x2605;</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inx'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 269
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if (((isset($context["rank"]) ? $context["rank"] : $this->getContext($context, "rank")) < 5)) {
                        // line 270
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range((isset($context["rank"]) ? $context["rank"] : $this->getContext($context, "rank")), 4));
                        foreach ($context['_seq'] as $context["_key"] => $context["inx2"]) {
                            // line 271
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t";
                            $context["rank"] = ((isset($context["rank"]) ? $context["rank"] : $this->getContext($context, "rank")) + 1);
                            // line 272
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t<span>&#x2606;</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inx2'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 274
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 275
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetails col-xs-5 col-md-5'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>";
                    // line 278
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "getReviews", array(), "method"), "html", null, true);
                    echo " reviews</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t              \t</div>
\t\t\t\t\t                   \t";
                }
                // line 286
                echo "\t\t\t\t\t\t            ";
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
            // line 287
            echo "\t\t\t\t\t\t            </div>
\t\t\t                \t</div>
\t\t\t\t                <a class=\"left carousel-control\" href=\"#farm_informationCarousel\" data-slide=\"prev\"></a>
\t\t\t\t                <a class=\"right carousel-control\" href=\"#farm_informationCarousel\" data-slide=\"next\"></a>
\t\t\t            \t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t";
        }
        // line 298
        echo "\t</main>
";
        
        $__internal_8c716406c5b44b6f3d6ef618efc717483fc2be4d3ac9d948cccd4edfed9393e3->leave($__internal_8c716406c5b44b6f3d6ef618efc717483fc2be4d3ac9d948cccd4edfed9393e3_prof);

        
        $__internal_90b135b22847e0d27a8a2c92e26ca2467816605b1fdfef39466051d540e7cfe4->leave($__internal_90b135b22847e0d27a8a2c92e26ca2467816605b1fdfef39466051d540e7cfe4_prof);

    }

    public function getTemplateName()
    {
        return "PageBundle:Default:farm_information.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  785 => 298,  772 => 287,  758 => 286,  747 => 278,  742 => 275,  739 => 274,  732 => 272,  729 => 271,  724 => 270,  721 => 269,  714 => 267,  711 => 266,  706 => 265,  704 => 264,  695 => 258,  691 => 257,  685 => 254,  680 => 252,  676 => 251,  668 => 246,  664 => 245,  658 => 242,  654 => 241,  649 => 239,  642 => 234,  631 => 226,  626 => 223,  623 => 222,  616 => 220,  613 => 219,  608 => 218,  605 => 217,  598 => 215,  595 => 214,  590 => 213,  588 => 212,  579 => 206,  575 => 205,  569 => 202,  564 => 200,  560 => 199,  552 => 194,  548 => 193,  542 => 190,  538 => 189,  533 => 187,  524 => 180,  522 => 179,  512 => 172,  507 => 169,  504 => 168,  497 => 166,  494 => 165,  489 => 164,  486 => 163,  479 => 161,  476 => 160,  471 => 159,  469 => 158,  460 => 152,  456 => 151,  450 => 148,  445 => 146,  441 => 145,  433 => 140,  429 => 139,  423 => 136,  419 => 135,  414 => 133,  407 => 128,  404 => 127,  397 => 124,  380 => 123,  376 => 121,  362 => 120,  356 => 118,  350 => 116,  347 => 115,  330 => 114,  326 => 112,  323 => 111,  320 => 110,  318 => 109,  314 => 108,  304 => 101,  300 => 99,  298 => 98,  287 => 90,  279 => 84,  266 => 82,  262 => 81,  257 => 79,  248 => 72,  239 => 70,  235 => 69,  230 => 67,  226 => 65,  217 => 63,  213 => 62,  208 => 60,  204 => 59,  198 => 58,  192 => 57,  187 => 55,  172 => 43,  166 => 40,  155 => 32,  147 => 27,  138 => 20,  129 => 19,  117 => 16,  112 => 14,  108 => 13,  103 => 11,  100 => 10,  91 => 9,  79 => 7,  75 => 6,  70 => 5,  61 => 4,  43 => 3,  11 => 1,);
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
    <link rel=\"stylesheet\" href=\"{{ asset('public/css/product.css')}}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('public/css/farm_information.css') }}\" />
{% endblock %}
{% block javascripts %}
\t<script src=\"https://maps.googleapis.com/maps/api/js?key= AIzaSyA8iOI-wKQIfkncEFwGUHS3dsce-nlwsQ0&callback=loadMap\"></script>
\t<script src=\"{{ asset('public/js/farm_information.js')}}\"></script>
\t<script>
\t\tvar lat = {{ farm.getLatitude() }}
\t\tvar lon = {{ farm.getLongitude() }}
\t</script>
    {{ parent() }}
{% endblock %}

{% block body %}
\t<center><h2>Farm Information</h2></center>
\t<section id='farmInfoSection'>
\t\t<div class='container-fluid'>
\t\t\t<div id='farmInfoContainer' class='row'>
\t\t\t\t<div id='farmInfoHeading' class='col-xs-12'>
\t\t\t\t\t<center>
\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t{{ farm.getName() }}
\t\t\t\t\t\t</h3>
\t\t\t\t\t</center>
\t\t\t\t</div>
\t\t\t\t<div id=\"farmPicContainer\" class='col-xs-12 col-md-offset-3 col-md-6 col-lg-offset-0 col-lg-6'>
\t\t\t\t\t<img src=\"{{ farm.getImage() }}\" id=\"farmPic\">
\t\t\t\t</div>
\t\t\t\t<div id='farmInfoDetailsContainer' class='col-md-12 col-lg-6'>
\t\t\t\t\t<div class='farmInfoCards col-lg-6 col-md-6'>
\t\t\t\t\t\t<div class='farmInfoIcons'>
\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon1.png\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t{{ template.getDescriptionTitle() }}
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t{{ farm.getDescription() }}
\t\t\t\t\t\t\t\t<div class='prodInfoIconHeadings'>
\t\t\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info\" data-toggle=\"collapse\" data-target=\"#cupMap\"><span class=\"glyphicon glyphicon-eye-open\"></span>Read story</button>
\t\t\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class='farmInfoCards col-lg-6 col-md-6'>
\t\t\t\t\t\t\t<div class='farmInfoIcons'>
\t\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon2.png\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h4>{{ template.getInformationTitle() }}</h4>
\t\t\t\t\t\t\t<p><span>Region: </span>: Central Valley</p>
\t\t\t\t\t\t\t<p><span>{{ template.getElevationTitle() }}</span>: {{ farm.getElevation() }} m.a.s.l.</p>
\t\t\t\t\t\t\t<p><span>{{ template.getHarvestTitle() }}</span>: {{ farm.getHarvest() }}</p>
\t\t\t\t\t\t\t<p><span>{{ template.getSpeciesTitle() }}</span>: Arabica</p>
\t\t\t\t\t\t\t<p><span>{{ template.getCultivarTitle() }}</span>:
\t\t\t\t\t\t\t<div class= \"col-md-12 col-md-offset-2\">
\t\t\t\t\t\t\t\t{% for cultivar in farm.getCultivars() %}
\t\t\t\t\t\t\t\t\t{{cultivar.getDescription()}} </br>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p><span>{{ template.getCertificationsTitle() }}</span>:
\t\t\t\t\t\t\t<div class= \"col-md-12 col-md-offset-2\">
\t\t\t\t\t\t\t\t{% for certification in farm.getCertifications() %}
\t\t\t\t\t\t\t\t\t{{certification.getDescription()}} </br>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class='farmInfoCards col-lg-6 col-md-6'>
\t\t\t\t\t\t\t<div class='farmInfoIcons'>
\t\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon3.png\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h4>{{ template.getAwardsTitle() }}</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t{% for award in farm.getFarmAwards() %}
\t\t\t\t\t\t\t\t\t{{ award.getAward().getDescription() }},{{ award.getPlace() }} place,{{ award.getYear() }}</br>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class='farmInfoCards col-lg-6 col-md-6'>
\t\t\t\t\t\t\t<div class='farmInfoIcons'>
\t\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon4.png\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h4>{{ template.getLocationTitle() }}</h4>
\t\t\t\t\t\t\t<div id=\"farm_map\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<div class='clearfix'></div>
\t\t{% if farm.getProducts()|length > 0 %}
\t\t<section>
\t\t\t<div id='carouselHeading' class='col-xs-12'>
\t\t\t\t<center><h3>{{ template.getProductsTitle() }}</h3></center>
\t\t\t</div>
\t\t\t<div class='clearfix'></div>
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"span12\">
\t\t\t    \t    <div class=\"well\">
\t\t\t    \t    {% set size = farm.getProducts()|length / 3 %} 
\t\t\t    \t    {% if size < 1 %}
\t\t\t    \t    \t{% set size = 1%}
\t\t\t    \t    {% endif%}
                \t\t\t<div id=\"farm_informationCarousel\" class=\"carousel slide\" data-interval=\"false\">
\t\t\t\t                <ol class=\"carousel-indicators\">
\t\t\t\t                {% for index in 1..size|number_format(0) %}
\t\t\t\t                \t{% if loop.index < 2 %}
\t\t\t\t                    \t<li data-target=\"#farm_informationCarousel\" data-slide-to=\"{{ loop.index }}\" class=\"active\"></li>
\t\t\t\t                    {% else %}
\t\t\t\t                    \t<li data-target=\"#farm_informationCarousel\" data-slide-to=\"{{ loop.index }}\" class=\"\"></li>
\t\t\t\t                \t{% endif %}
\t\t\t\t                {% endfor %}
\t\t\t\t                </ol>\t                
\t\t\t\t                <div class=\"carousel-inner\" role=\"listbox\">
\t\t\t\t                   \t{% for product in farm.getProducts() %}
\t\t\t\t\t\t\t\t        {% if loop.index  < 2 %} 
\t\t\t\t\t\t\t\t    \t    <div class=\"item active\">
\t\t\t\t\t\t\t\t    \t{% endif %}
\t\t\t\t                   \t\t{% if loop.index <  4 %}
\t\t\t\t\t\t\t\t                <div class=\"row-fluid\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"carouselCards col-xs-12 col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"productThumbnails\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='prodThumbInside'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"productThumbnailsHeadings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>{{ product.getName()}}</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('product_information', {'product': product.getFarm().getId() ~ product.getId() }) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{product.getImage()}}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\${{ product.getPresentations()|first.getPrice() }}</br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('page_homepage', {'name':'onDevelopment' }) }}\">Order</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetailsContainer row'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetails col-xs-5 col-xs-offset-1'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ product.getPresentations()|first.getWeight() }}g/
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ product.getPresentations()|first.getWeight() *0.04 }}oz
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>{{ product.getPresentations()|first.getRoast().getDescription() }}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div href=\"#\" class='productDetails  col-xs-5 col-md-5'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>{{ product.getPresentations()|first.getGrind().getDescription() }}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('product_information', {'product': product.getFarm().getId() ~ product.getId() }) }}\"><p>More info/options</p></a> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetailsContainer row'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetails col-xs-5 col-xs-offset-1'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% set rank= 0 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t {% for inx in 1..product.getRank() %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t{% set rank = rank+1 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t<span>&#x2605;</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t {% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if rank < 5 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for inx2 in rank..4 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t{% set rank = rank+1 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t<span>&#x2606;</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetails col-xs-5 col-md-5'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>{{product.getReviews()}} reviews</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t              \t</div>
\t\t\t\t                   \t\t{% elseif loop.index is divisible by(4) %}
\t\t\t\t\t\t\t\t            </div>
\t\t\t\t                   \t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t                <div class=\"row-fluid\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"carouselCards col-xs-12 col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"productThumbnails\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='prodThumbInside'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"productThumbnailsHeadings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>{{ product.getName()}}</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('product_information', {'product': product.getFarm().getId() ~ product.getId() }) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{product.getImage()}}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\${{ product.getPresentations()|first.getPrice() }}</br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('page_homepage', {'name':'onDevelopment' }) }}\">Order</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetailsContainer row'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetails col-xs-5 col-xs-offset-1'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ product.getPresentations()|first.getWeight() }}g/
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ product.getPresentations()|first.getWeight() *0.04 }}oz
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>{{ product.getPresentations()|first.getRoast().getDescription() }}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div href=\"#\" class='productDetails  col-xs-5 col-md-5'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>{{ product.getPresentations()|first.getGrind().getDescription() }}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('product_information', {'product': product.getFarm().getId() ~ product.getId() }) }}\"><p>More info/options</p></a> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetailsContainer row'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetails col-xs-5 col-xs-offset-1'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% set rank= 0 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t {% for inx in 1..product.getRank() %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t{% set rank = rank+1 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t<span>&#x2605;</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t {% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if rank < 5 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for inx2 in rank..4 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t{% set rank = rank+1 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t<span>&#x2606;</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetails col-xs-5 col-md-5'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>{{product.getReviews()}} reviews</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t              \t</div>
\t\t\t\t                   \t\t{% else %}
\t\t\t\t\t\t\t\t                <div class=\"row-fluid\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"carouselCards col-xs-12 col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"productThumbnails\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='prodThumbInside'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"productThumbnailsHeadings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>{{ product.getName()}}</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('product_information', {'product': product.getFarm().getId() ~ product.getId() }) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{product.getImage()}}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\${{ product.getPresentations()|first.getPrice() }}</br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('page_homepage', {'name':'onDevelopment' }) }}\">Order</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetailsContainer row'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetails col-xs-5 col-xs-offset-1'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ product.getPresentations()|first.getWeight() }}g/
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ product.getPresentations()|first.getWeight() *0.04 }}oz
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>{{ product.getPresentations()|first.getRoast().getDescription() }} </p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div href=\"#\" class='productDetails  col-xs-5 col-md-5'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>{{ product.getPresentations()|first.getGrind().getDescription() }}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('product_information', {'product': product.getFarm().getId() ~ product.getId() }) }}\"><p>More info/options</p></a> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetailsContainer row'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetails col-xs-5 col-xs-offset-1'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% set rank= 0 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t {% for inx in 1..product.getRank() %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t{% set rank = rank+1 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t<span>&#x2605;</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t {% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if rank < 5 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for inx2 in rank..4 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t{% set rank = rank+1 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t<span>&#x2606;</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetails col-xs-5 col-md-5'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>{{product.getReviews()}} reviews</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t              \t</div>
\t\t\t\t\t                   \t{% endif %}
\t\t\t\t\t\t            {% endfor %}
\t\t\t\t\t\t            </div>
\t\t\t                \t</div>
\t\t\t\t                <a class=\"left carousel-control\" href=\"#farm_informationCarousel\" data-slide=\"prev\"></a>
\t\t\t\t                <a class=\"right carousel-control\" href=\"#farm_informationCarousel\" data-slide=\"next\"></a>
\t\t\t            \t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t{% endif %}
\t</main>
{% endblock %}", "PageBundle:Default:farm_information.html.twig", "/home/ubuntu/workspace/src/PageBundle/Resources/views/Default/farm_information.html.twig");
    }
}
