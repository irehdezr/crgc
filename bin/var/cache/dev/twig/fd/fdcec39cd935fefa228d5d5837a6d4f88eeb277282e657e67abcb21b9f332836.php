<?php

/* PageBundle:Default:farm_information.html.twig */
class __TwigTemplate_19cd26a5938ed7ff6d8965e486c2613dec66a1db2a2d0a13578733059c38b7a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "PageBundle:Default:farm_information.html.twig", 1);
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
        $__internal_67cf5819284b591d451cb123f056d49d3ff8a9faedf6f9722b8266ee6e1d1ca1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67cf5819284b591d451cb123f056d49d3ff8a9faedf6f9722b8266ee6e1d1ca1->enter($__internal_67cf5819284b591d451cb123f056d49d3ff8a9faedf6f9722b8266ee6e1d1ca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:farm_information.html.twig"));

        $__internal_0dc18b3ac879f368869fc43319fe7b8791f942cf62a42045b9e303d5ede46c05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dc18b3ac879f368869fc43319fe7b8791f942cf62a42045b9e303d5ede46c05->enter($__internal_0dc18b3ac879f368869fc43319fe7b8791f942cf62a42045b9e303d5ede46c05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:farm_information.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67cf5819284b591d451cb123f056d49d3ff8a9faedf6f9722b8266ee6e1d1ca1->leave($__internal_67cf5819284b591d451cb123f056d49d3ff8a9faedf6f9722b8266ee6e1d1ca1_prof);

        
        $__internal_0dc18b3ac879f368869fc43319fe7b8791f942cf62a42045b9e303d5ede46c05->leave($__internal_0dc18b3ac879f368869fc43319fe7b8791f942cf62a42045b9e303d5ede46c05_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8c974fddc2a06955990de9eb4bd11798a71d33ec1618df2fabd9afebb4997b22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c974fddc2a06955990de9eb4bd11798a71d33ec1618df2fabd9afebb4997b22->enter($__internal_8c974fddc2a06955990de9eb4bd11798a71d33ec1618df2fabd9afebb4997b22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_777b2920615c6d8458a6219d3fc8ef1199f4fc9295b3093cb1aa7836276ea12c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_777b2920615c6d8458a6219d3fc8ef1199f4fc9295b3093cb1aa7836276ea12c->enter($__internal_777b2920615c6d8458a6219d3fc8ef1199f4fc9295b3093cb1aa7836276ea12c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Farm Information ";
        
        $__internal_777b2920615c6d8458a6219d3fc8ef1199f4fc9295b3093cb1aa7836276ea12c->leave($__internal_777b2920615c6d8458a6219d3fc8ef1199f4fc9295b3093cb1aa7836276ea12c_prof);

        
        $__internal_8c974fddc2a06955990de9eb4bd11798a71d33ec1618df2fabd9afebb4997b22->leave($__internal_8c974fddc2a06955990de9eb4bd11798a71d33ec1618df2fabd9afebb4997b22_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_12cdb5f76660252fd83e0b5e3f3d8e4c32dd1e9a3d0d6ad35e66603ad0f29fc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12cdb5f76660252fd83e0b5e3f3d8e4c32dd1e9a3d0d6ad35e66603ad0f29fc1->enter($__internal_12cdb5f76660252fd83e0b5e3f3d8e4c32dd1e9a3d0d6ad35e66603ad0f29fc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_fe4bfe2ed991bb914d9fe6b2b8576bc85a4ab69bc0950fec403f13b0bd4a876a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe4bfe2ed991bb914d9fe6b2b8576bc85a4ab69bc0950fec403f13b0bd4a876a->enter($__internal_fe4bfe2ed991bb914d9fe6b2b8576bc85a4ab69bc0950fec403f13b0bd4a876a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/css/product.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/css/farm_information.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_fe4bfe2ed991bb914d9fe6b2b8576bc85a4ab69bc0950fec403f13b0bd4a876a->leave($__internal_fe4bfe2ed991bb914d9fe6b2b8576bc85a4ab69bc0950fec403f13b0bd4a876a_prof);

        
        $__internal_12cdb5f76660252fd83e0b5e3f3d8e4c32dd1e9a3d0d6ad35e66603ad0f29fc1->leave($__internal_12cdb5f76660252fd83e0b5e3f3d8e4c32dd1e9a3d0d6ad35e66603ad0f29fc1_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a81f7aae04ab8d197a5f0992bbbfa576b551fbe838760127d2a89eab921dbd1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a81f7aae04ab8d197a5f0992bbbfa576b551fbe838760127d2a89eab921dbd1f->enter($__internal_a81f7aae04ab8d197a5f0992bbbfa576b551fbe838760127d2a89eab921dbd1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_03edaa0dc57445f2b8d2c84664c87203d7091e994157ea353085d0c1bd8e65d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03edaa0dc57445f2b8d2c84664c87203d7091e994157ea353085d0c1bd8e65d6->enter($__internal_03edaa0dc57445f2b8d2c84664c87203d7091e994157ea353085d0c1bd8e65d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "\t<center>
\t\t<h2>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getPageTitle", array(), "method"), "html", null, true);
        echo "</h2>
\t</center>
\t<section id='farmInfoSection'>
\t\t<div class='container-fluid'>
\t\t\t<div id='farmInfoContainer' class='row'>
\t\t\t\t<div id='farmInfoHeading' class='col-xs-12'>
\t\t\t\t\t<center>
\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["farm"] ?? $this->getContext($context, "farm")), "getName", array(), "method"), "html", null, true);
        echo "
\t\t\t\t\t\t</h3>
\t\t\t\t\t</center>
\t\t\t\t</div>
\t\t\t\t<div id=\"farmPicContainer\" class='col-xs-12 col-md-offset-3 col-md-6 col-lg-offset-0 col-lg-6'>
\t\t\t\t\t<img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["farm"] ?? $this->getContext($context, "farm")), "getImage", array(), "method"), "html", null, true);
        echo "\" id=\"farmPic\">
\t\t\t\t</div>
\t\t\t\t<div id='farmInfoDetailsContainer' class='col-md-12 col-lg-6'>
\t\t\t\t\t<div class='farmInfoCards col-lg-6 col-md-6'>
\t\t\t\t\t\t<div class='farmInfoIcons'>
\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon1.png\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getDescriptionTitle", array(), "method"), "html", null, true);
        echo "
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute(($context["farm"] ?? $this->getContext($context, "farm")), "getDescription", array(), "method"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t<div class='prodInfoIconHeadings'>
\t\t\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info\">\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-search\"></span>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getStoryBtnTitle", array(), "method"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class='farmInfoCards col-lg-6 col-md-6'>
\t\t\t\t\t\t\t<div class='farmInfoIcons'>
\t\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon2.png\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h4>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getInformationTitle", array(), "method"), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t\t<p><span>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getRegionTitle", array(), "method"), "html", null, true);
        echo "</span>: ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["farm"] ?? $this->getContext($context, "farm")), "getRegion", array(), "method"), "getName", array(), "method"), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t<p><span>";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getElevationTitle", array(), "method"), "html", null, true);
        echo "</span>: ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["farm"] ?? $this->getContext($context, "farm")), "getElevation", array(), "method"), "html", null, true);
        echo " m.a.s.l.</p>
\t\t\t\t\t\t\t<p><span>";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getHarvestTitle", array(), "method"), "html", null, true);
        echo "</span>: ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["farm"] ?? $this->getContext($context, "farm")), "getHarvest", array(), "method"), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t<p><span>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getSpeciesTitle", array(), "method"), "html", null, true);
        echo "</span>: ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getSpeciesInfo", array(), "method"), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t<p><span>";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getCultivarTitle", array(), "method"), "html", null, true);
        echo ":</span>
\t\t\t\t\t\t\t\t";
        // line 56
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
            // line 57
            echo "\t\t\t\t\t\t\t\t\t";
            if ($this->getAttribute($context["loop"], "first", array())) {
                // line 58
                echo "\t\t\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($context["cultivar"], "getDescription", array(), "method"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 60
                echo "\t\t\t\t\t\t\t\t\t\t, ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["cultivar"], "getDescription", array(), "method"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t";
            }
            // line 62
            echo "\t\t\t\t\t\t\t\t";
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
        // line 63
        echo "\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p><span>";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getCertificationsTitle", array(), "method"), "html", null, true);
        echo "</span>:
\t\t\t\t\t\t\t\t";
        // line 65
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
            // line 66
            echo "\t\t\t\t\t\t\t\t\t";
            if ($this->getAttribute($context["loop"], "first", array())) {
                // line 67
                echo "\t\t\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($context["certification"], "getDescription", array(), "method"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 69
                echo "\t\t\t\t\t\t\t\t\t\t, ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["certification"], "getDescription", array(), "method"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t";
            }
            // line 71
            echo "\t\t\t\t\t\t\t\t";
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
        // line 72
        echo "\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class='farmInfoCards col-lg-6 col-md-6'>
\t\t\t\t\t\t\t<div class='farmInfoIcons'>
\t\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon3.png\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h4>";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getAwardsTitle", array(), "method"), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["farm"] ?? $this->getContext($context, "farm")), "getFarmAwards", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["award"]) {
            // line 81
            echo "\t\t\t\t\t\t\t\t\t-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["award"], "getAward", array(), "method"), "getDescription", array(), "method"), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["award"], "getPlace", array(), "method"), "html", null, true);
            echo " place, ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["award"], "getYear", array(), "method"), "html", null, true);
            echo "</br>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['award'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class='farmInfoCards col-lg-6 col-md-6'>
\t\t\t\t\t\t\t<div class='farmInfoIcons'>
\t\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon4.png\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h4>";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getLocationTitle", array(), "method"), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t\t<div id=\"farm_map\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<div class='clearfix'></div>
\t\t";
        // line 97
        if ((twig_length_filter($this->env, $this->getAttribute(($context["farm"] ?? $this->getContext($context, "farm")), "getProducts", array(), "method")) > 0)) {
            // line 98
            echo "\t\t<section>
\t\t\t<div class='hidden-xs hidden-sm'>
\t\t\t<div id='carouselHeading' class='col-xs-12'>
\t\t\t\t<center><h3>";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getProductsTitle", array(), "method"), "html", null, true);
            echo "</h3></center>
\t\t\t</div>
\t\t\t<div class='clearfix'></div>
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"span12\">
\t\t\t    \t    <div class=\"well\">
\t\t\t    \t    ";
            // line 108
            $context["size"] = (twig_length_filter($this->env, $this->getAttribute(($context["farm"] ?? $this->getContext($context, "farm")), "getProducts", array(), "method")) / 3);
            echo " 
\t\t\t    \t    ";
            // line 109
            if ((($context["size"] ?? $this->getContext($context, "size")) < 1)) {
                // line 110
                echo "\t\t\t    \t    \t";
                $context["size"] = 1;
                // line 111
                echo "\t\t\t    \t    ";
            }
            // line 112
            echo "                \t\t\t<div id=\"farm_informationCarousel\" class=\"carousel slide\" data-interval=\"false\">          
\t\t\t\t                <div class=\"carousel-inner\" role=\"listbox\">
\t\t\t\t                   \t";
            // line 114
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
                // line 115
                echo "\t\t\t\t\t\t\t\t        ";
                if (($this->getAttribute($context["loop"], "index", array()) < 2)) {
                    echo " 
\t\t\t\t\t\t\t\t    \t    <div class=\"item active\">
\t\t\t\t\t\t\t\t    \t";
                }
                // line 118
                echo "\t\t\t\t                   \t\t";
                if (($this->getAttribute($context["loop"], "index", array()) < 4)) {
                    // line 119
                    echo "\t\t\t\t\t\t\t\t                <div class=\"row-fluid\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"carouselCards col-xs-12 col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"productThumbnails\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='prodThumbInside'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"productThumbnailsHeadings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>";
                    // line 124
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "getName", array(), "method"), "html", null, true);
                    echo "</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 126
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_information", array("farm" => $this->getAttribute($this->getAttribute(                    // line 127
$context["product"], "getFarm", array(), "method"), "getId", array(), "method"), "product" => $this->getAttribute(                    // line 128
$context["product"], "getId", array(), "method"), "presentation" => $this->getAttribute(twig_first($this->env, $this->getAttribute(                    // line 129
$context["product"], "getPresentations", array(), "method")), "getId", array(), "method"))), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 130
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "getImage", array(), "method"), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$";
                    // line 133
                    echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, $this->getAttribute($context["product"], "getPresentations", array(), "method")), "getPrice", array(), "method"), "html", null, true);
                    echo "</br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a id=\"orderPresentation\" data-presentation=\"";
                    // line 134
                    echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, $this->getAttribute($context["product"], "getPresentations", array(), "method")), "getId", array(), "method"), "html", null, true);
                    echo "\" href=\"";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_homepage", array("name" => "shoppingCart"));
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getOrderTitle", array(), "method"), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetailsContainer row'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetails col-xs-5 col-xs-offset-1'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 139
                    echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, $this->getAttribute($context["product"], "getPresentations", array(), "method")), "getWeight", array(), "method"), "html", null, true);
                    echo "g/
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 140
                    echo twig_escape_filter($this->env, ($this->getAttribute(twig_first($this->env, $this->getAttribute($context["product"], "getPresentations", array(), "method")), "getWeight", array(), "method") * 0.04), "html", null, true);
                    echo "oz
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>";
                    // line 142
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($context["product"], "getPresentations", array(), "method")), "getRoast", array(), "method"), "getDescription", array(), "method"), "html", null, true);
                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div href=\"#\" class='productDetails  col-xs-5 col-md-5'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>";
                    // line 145
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($context["product"], "getPresentations", array(), "method")), "getGrind", array(), "method"), "getDescription", array(), "method"), "html", null, true);
                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 146
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_information", array("farm" => $this->getAttribute($this->getAttribute(                    // line 147
$context["product"], "getFarm", array(), "method"), "getId", array(), "method"), "product" => $this->getAttribute(                    // line 148
$context["product"], "getId", array(), "method"), "presentation" => $this->getAttribute(twig_first($this->env, $this->getAttribute(                    // line 149
$context["product"], "getPresentations", array(), "method")), "getId", array(), "method"))), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>";
                    // line 150
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getMoreInfoTitle", array(), "method"), "html", null, true);
                    echo "</p></a> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetailsContainer row'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetails col-xs-5 col-xs-offset-1'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 156
                    $context["rank"] = 0;
                    // line 157
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute($context["product"], "getRank", array(), "method")));
                    foreach ($context['_seq'] as $context["_key"] => $context["inx"]) {
                        // line 158
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t";
                        $context["rank"] = (($context["rank"] ?? $this->getContext($context, "rank")) + 1);
                        // line 159
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t<span>&#x2605;</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inx'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 161
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if ((($context["rank"] ?? $this->getContext($context, "rank")) < 5)) {
                        // line 162
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(($context["rank"] ?? $this->getContext($context, "rank")), 4));
                        foreach ($context['_seq'] as $context["_key"] => $context["inx2"]) {
                            // line 163
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t";
                            $context["rank"] = (($context["rank"] ?? $this->getContext($context, "rank")) + 1);
                            // line 164
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t<span>&#x2606;</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inx2'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 166
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 167
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetails col-xs-5 col-md-5'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>";
                    // line 170
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "getReviews", array(), "method"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getReviewsTitle", array(), "method"), "html", null, true);
                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t              \t</div>
\t\t\t\t                   \t\t";
                } elseif ((0 == $this->getAttribute(                // line 177
$context["loop"], "index", array()) % 4)) {
                    // line 178
                    echo "\t\t\t\t\t\t\t\t            </div>
\t\t\t\t                   \t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t                <div class=\"row-fluid\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"carouselCards col-xs-12 col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"productThumbnails\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='prodThumbInside'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"productThumbnailsHeadings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>";
                    // line 185
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "getName", array(), "method"), "html", null, true);
                    echo "</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 187
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_information", array("farm" => $this->getAttribute($this->getAttribute(                    // line 188
$context["product"], "getFarm", array(), "method"), "getId", array(), "method"), "product" => $this->getAttribute(                    // line 189
$context["product"], "getId", array(), "method"), "presentation" => $this->getAttribute(twig_first($this->env, $this->getAttribute(                    // line 190
$context["product"], "getPresentations", array(), "method")), "getId", array(), "method"))), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 191
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "getImage", array(), "method"), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$";
                    // line 194
                    echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, $this->getAttribute($context["product"], "getPresentations", array(), "method")), "getPrice", array(), "method"), "html", null, true);
                    echo "</br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 195
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_homepage", array("name" => "shoppingCart"));
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getOrderTitle", array(), "method"), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetailsContainer row'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetails col-xs-5 col-xs-offset-1'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 200
                    echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, $this->getAttribute($context["product"], "getPresentations", array(), "method")), "getWeight", array(), "method"), "html", null, true);
                    echo "g/
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 201
                    echo twig_escape_filter($this->env, ($this->getAttribute(twig_first($this->env, $this->getAttribute($context["product"], "getPresentations", array(), "method")), "getWeight", array(), "method") * 0.04), "html", null, true);
                    echo "oz
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>";
                    // line 203
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($context["product"], "getPresentations", array(), "method")), "getRoast", array(), "method"), "getDescription", array(), "method"), "html", null, true);
                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div href=\"#\" class='productDetails  col-xs-5 col-md-5'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>";
                    // line 206
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($context["product"], "getPresentations", array(), "method")), "getGrind", array(), "method"), "getDescription", array(), "method"), "html", null, true);
                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 207
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_information", array("farm" => $this->getAttribute($this->getAttribute(                    // line 208
$context["product"], "getFarm", array(), "method"), "getId", array(), "method"), "product" => $this->getAttribute(                    // line 209
$context["product"], "getId", array(), "method"), "presentation" => 1)), "html", null, true);
                    // line 210
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>";
                    // line 211
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getMoreInfoTitle", array(), "method"), "html", null, true);
                    echo "</p></a> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetailsContainer row'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetails col-xs-5 col-xs-offset-1'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 217
                    $context["rank"] = 0;
                    // line 218
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute($context["product"], "getRank", array(), "method")));
                    foreach ($context['_seq'] as $context["_key"] => $context["inx"]) {
                        // line 219
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t";
                        $context["rank"] = (($context["rank"] ?? $this->getContext($context, "rank")) + 1);
                        // line 220
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t<span>&#x2605;</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inx'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 222
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if ((($context["rank"] ?? $this->getContext($context, "rank")) < 5)) {
                        // line 223
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(($context["rank"] ?? $this->getContext($context, "rank")), 4));
                        foreach ($context['_seq'] as $context["_key"] => $context["inx2"]) {
                            // line 224
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t";
                            $context["rank"] = (($context["rank"] ?? $this->getContext($context, "rank")) + 1);
                            // line 225
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t<span>&#x2606;</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inx2'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 227
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 228
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetails col-xs-5 col-md-5'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>";
                    // line 231
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "getReviews", array(), "method"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getReviewsTitle", array(), "method"), "html", null, true);
                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t              \t</div>
\t\t\t\t                   \t\t";
                } else {
                    // line 239
                    echo "\t\t\t\t\t\t\t\t                <div class=\"row-fluid\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"carouselCards col-xs-12 col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"productThumbnails\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='prodThumbInside'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"productThumbnailsHeadings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>";
                    // line 244
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "getName", array(), "method"), "html", null, true);
                    echo "</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 246
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_information", array("farm" => $this->getAttribute($this->getAttribute(                    // line 247
$context["product"], "getFarm", array(), "method"), "getId", array(), "method"), "product" => $this->getAttribute(                    // line 248
$context["product"], "getId", array(), "method"), "presentation" => $this->getAttribute(twig_first($this->env, $this->getAttribute(                    // line 249
$context["product"], "getPresentations", array(), "method")), "getId", array(), "method"))), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 250
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "getImage", array(), "method"), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$";
                    // line 253
                    echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, $this->getAttribute($context["product"], "getPresentations", array(), "method")), "getPrice", array(), "method"), "html", null, true);
                    echo "</br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a  href=\"";
                    // line 254
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_homepage", array("name" => "shoppingCart"));
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getOrderTitle", array(), "method"), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetailsContainer row'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetails col-xs-5 col-xs-offset-1'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 259
                    echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, $this->getAttribute($context["product"], "getPresentations", array(), "method")), "getWeight", array(), "method"), "html", null, true);
                    echo "g/
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 260
                    echo twig_escape_filter($this->env, ($this->getAttribute(twig_first($this->env, $this->getAttribute($context["product"], "getPresentations", array(), "method")), "getWeight", array(), "method") * 0.04), "html", null, true);
                    echo "oz
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>";
                    // line 262
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($context["product"], "getPresentations", array(), "method")), "getRoast", array(), "method"), "getDescription", array(), "method"), "html", null, true);
                    echo " </p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div href=\"#\" class='productDetails  col-xs-5 col-md-5'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>";
                    // line 265
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($context["product"], "getPresentations", array(), "method")), "getGrind", array(), "method"), "getDescription", array(), "method"), "html", null, true);
                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 266
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_information", array("farm" => $this->getAttribute($this->getAttribute(                    // line 267
$context["product"], "getFarm", array(), "method"), "getId", array(), "method"), "product" => $this->getAttribute(                    // line 268
$context["product"], "getId", array(), "method"), "presentation" => 1)), "html", null, true);
                    // line 269
                    echo "\"><p>";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getMoreInfoTitle", array(), "method"), "html", null, true);
                    echo "</p></a> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetailsContainer row'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetails col-xs-5 col-xs-offset-1'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 275
                    $context["rank"] = 0;
                    // line 276
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute($context["product"], "getRank", array(), "method")));
                    foreach ($context['_seq'] as $context["_key"] => $context["inx"]) {
                        // line 277
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t";
                        $context["rank"] = (($context["rank"] ?? $this->getContext($context, "rank")) + 1);
                        // line 278
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t<span>&#x2605;</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inx'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 280
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if ((($context["rank"] ?? $this->getContext($context, "rank")) < 5)) {
                        // line 281
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(($context["rank"] ?? $this->getContext($context, "rank")), 4));
                        foreach ($context['_seq'] as $context["_key"] => $context["inx2"]) {
                            // line 282
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t";
                            $context["rank"] = (($context["rank"] ?? $this->getContext($context, "rank")) + 1);
                            // line 283
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t<span>&#x2606;</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inx2'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 285
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 286
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetails col-xs-5 col-md-5'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>";
                    // line 289
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "getReviews", array(), "method"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getReviewsTitle", array(), "method"), "html", null, true);
                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t              \t</div>
\t\t\t\t\t                   \t";
                }
                // line 297
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
            // line 298
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
        // line 309
        echo "\t\t";
        if ((twig_length_filter($this->env, $this->getAttribute(($context["farm"] ?? $this->getContext($context, "farm")), "getProducts", array(), "method")) > 0)) {
            // line 310
            echo "\t\t<section>
\t\t\t<div class='hidden-lg hidden-md'>
\t\t\t<div id='carouselHeading' class='col-xs-12'>
\t\t\t\t<center><h3>";
            // line 313
            echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getProductsTitle", array(), "method"), "html", null, true);
            echo "</h3></center>
\t\t\t</div>
\t\t\t<div class='clearfix'></div>
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"span12\">
\t\t\t    \t    <div class=\"well\">
                \t\t\t<div id=\"farm_informationCarousel2\" class=\"carousel slide\" data-interval=\"false\">             
\t\t\t\t                <div class=\"carousel-inner\" role=\"listbox\">
\t\t\t\t                   \t";
            // line 322
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
                // line 323
                echo "\t\t\t\t\t\t\t\t        ";
                if ($this->getAttribute($context["loop"], "first", array())) {
                    echo " 
\t\t\t\t\t\t\t\t    \t    <div class=\"item active\">
\t\t\t\t\t\t\t\t    \t";
                } else {
                    // line 326
                    echo "\t\t\t\t\t\t\t\t    \t    <div class=\"item \">
\t\t\t\t\t\t\t\t    \t";
                }
                // line 328
                echo "\t\t\t\t\t\t\t\t                <div class=\"row-fluid\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"carouselCards col-xs-12 col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"productThumbnails\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='prodThumbInside'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"productThumbnailsHeadings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>";
                // line 333
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "getName", array(), "method"), "html", null, true);
                echo "</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 335
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_information", array("farm" => $this->getAttribute($this->getAttribute(                // line 336
$context["product"], "getFarm", array(), "method"), "getId", array(), "method"), "product" => $this->getAttribute(                // line 337
$context["product"], "getId", array(), "method"), "presentation" => $this->getAttribute(twig_first($this->env, $this->getAttribute(                // line 338
$context["product"], "getPresentations", array(), "method")), "getId", array(), "method"))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 339
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "getImage", array(), "method"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$";
                // line 342
                echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, $this->getAttribute($context["product"], "getPresentations", array(), "method")), "getPrice", array(), "method"), "html", null, true);
                echo "</br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a  href=\"";
                // line 343
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_homepage", array("name" => "shoppingCart"));
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getOrderTitle", array(), "method"), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetailsContainer row'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetails col-xs-5 col-xs-offset-1'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 348
                echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, $this->getAttribute($context["product"], "getPresentations", array(), "method")), "getWeight", array(), "method"), "html", null, true);
                echo "g/
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 349
                echo twig_escape_filter($this->env, ($this->getAttribute(twig_first($this->env, $this->getAttribute($context["product"], "getPresentations", array(), "method")), "getWeight", array(), "method") * 0.04), "html", null, true);
                echo "oz
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>";
                // line 351
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($context["product"], "getPresentations", array(), "method")), "getRoast", array(), "method"), "getDescription", array(), "method"), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div href=\"#\" class='productDetails  col-xs-5 col-md-5'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>";
                // line 354
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($context["product"], "getPresentations", array(), "method")), "getGrind", array(), "method"), "getDescription", array(), "method"), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 355
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_information", array("farm" => $this->getAttribute($this->getAttribute(                // line 356
$context["product"], "getFarm", array(), "method"), "getId", array(), "method"), "product" => $this->getAttribute(                // line 357
$context["product"], "getId", array(), "method"), "presentation" => $this->getAttribute(twig_first($this->env, $this->getAttribute(                // line 358
$context["product"], "getPresentations", array(), "method")), "getId", array(), "method"))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>";
                // line 359
                echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getMoreInfoTitle", array(), "method"), "html", null, true);
                echo "</p></a> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetailsContainer row'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetails col-xs-5 col-xs-offset-1'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 365
                $context["rank"] = 0;
                // line 366
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute($context["product"], "getRank", array(), "method")));
                foreach ($context['_seq'] as $context["_key"] => $context["inx"]) {
                    // line 367
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t";
                    $context["rank"] = (($context["rank"] ?? $this->getContext($context, "rank")) + 1);
                    // line 368
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t<span>&#x2605;</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inx'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 370
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                if ((($context["rank"] ?? $this->getContext($context, "rank")) < 5)) {
                    // line 371
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(($context["rank"] ?? $this->getContext($context, "rank")), 4));
                    foreach ($context['_seq'] as $context["_key"] => $context["inx2"]) {
                        // line 372
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t";
                        $context["rank"] = (($context["rank"] ?? $this->getContext($context, "rank")) + 1);
                        // line 373
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t<span>&#x2606;</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inx2'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 375
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 376
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='productDetails col-xs-5 col-md-5'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>";
                // line 379
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "getReviews", array(), "method"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getReviewsTitle", array(), "method"), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t              \t</div>
\t\t\t\t\t\t\t\t            </div>
\t\t\t\t\t\t            ";
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
            // line 388
            echo "\t\t\t\t\t\t            </div>
\t\t\t\t                <a class=\"left carousel-control\" href=\"#farm_informationCarousel2\" data-slide=\"prev\"></a>
\t\t\t\t                <a class=\"right carousel-control\" href=\"#farm_informationCarousel2\" data-slide=\"next\"></a>
\t\t\t            \t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t";
        }
        // line 398
        echo "\t</main>
";
        
        $__internal_03edaa0dc57445f2b8d2c84664c87203d7091e994157ea353085d0c1bd8e65d6->leave($__internal_03edaa0dc57445f2b8d2c84664c87203d7091e994157ea353085d0c1bd8e65d6_prof);

        
        $__internal_a81f7aae04ab8d197a5f0992bbbfa576b551fbe838760127d2a89eab921dbd1f->leave($__internal_a81f7aae04ab8d197a5f0992bbbfa576b551fbe838760127d2a89eab921dbd1f_prof);

    }

    // line 401
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ef5fffe987d3a82a9c961023744586e69c03ec941b114bc501a31e10da63ae93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef5fffe987d3a82a9c961023744586e69c03ec941b114bc501a31e10da63ae93->enter($__internal_ef5fffe987d3a82a9c961023744586e69c03ec941b114bc501a31e10da63ae93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_59009666c284ce197a4dc120ddf315822872542f9553ff47ddc47522845a6d9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59009666c284ce197a4dc120ddf315822872542f9553ff47ddc47522845a6d9b->enter($__internal_59009666c284ce197a4dc120ddf315822872542f9553ff47ddc47522845a6d9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 402
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyA8iOI-wKQIfkncEFwGUHS3dsce-nlwsQ0\" type=\"text/javascript\"></script>
\t<script>
\t\tvar lat = ";
        // line 405
        echo twig_escape_filter($this->env, $this->getAttribute(($context["farm"] ?? $this->getContext($context, "farm")), "getLatitude", array(), "method"), "html", null, true);
        echo "
\t\tvar lon = ";
        // line 406
        echo twig_escape_filter($this->env, $this->getAttribute(($context["farm"] ?? $this->getContext($context, "farm")), "getLongitude", array(), "method"), "html", null, true);
        echo "
\t\t\$(\"#orderPresentation\").click(function(presentation){
\t\t\t// ";
        // line 408
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "set", array(0 => "itemsOnCart", 1 => ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "itemsOnCart"), "method") + 1)), "method"), "html", null, true);
        echo "
\t\t\talert (\$(this).attr(\"data-presentation\"));
\t\t});\t
\t</script>\t
\t<script src=\"";
        // line 412
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/js/farm_information.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_59009666c284ce197a4dc120ddf315822872542f9553ff47ddc47522845a6d9b->leave($__internal_59009666c284ce197a4dc120ddf315822872542f9553ff47ddc47522845a6d9b_prof);

        
        $__internal_ef5fffe987d3a82a9c961023744586e69c03ec941b114bc501a31e10da63ae93->leave($__internal_ef5fffe987d3a82a9c961023744586e69c03ec941b114bc501a31e10da63ae93_prof);

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
        return array (  1064 => 412,  1057 => 408,  1052 => 406,  1048 => 405,  1041 => 402,  1032 => 401,  1021 => 398,  1009 => 388,  984 => 379,  979 => 376,  976 => 375,  969 => 373,  966 => 372,  961 => 371,  958 => 370,  951 => 368,  948 => 367,  943 => 366,  941 => 365,  932 => 359,  928 => 358,  927 => 357,  926 => 356,  925 => 355,  921 => 354,  915 => 351,  910 => 349,  906 => 348,  896 => 343,  892 => 342,  886 => 339,  882 => 338,  881 => 337,  880 => 336,  879 => 335,  874 => 333,  867 => 328,  863 => 326,  856 => 323,  839 => 322,  827 => 313,  822 => 310,  819 => 309,  806 => 298,  792 => 297,  779 => 289,  774 => 286,  771 => 285,  764 => 283,  761 => 282,  756 => 281,  753 => 280,  746 => 278,  743 => 277,  738 => 276,  736 => 275,  726 => 269,  724 => 268,  723 => 267,  722 => 266,  718 => 265,  712 => 262,  707 => 260,  703 => 259,  693 => 254,  689 => 253,  683 => 250,  679 => 249,  678 => 248,  677 => 247,  676 => 246,  671 => 244,  664 => 239,  651 => 231,  646 => 228,  643 => 227,  636 => 225,  633 => 224,  628 => 223,  625 => 222,  618 => 220,  615 => 219,  610 => 218,  608 => 217,  599 => 211,  596 => 210,  594 => 209,  593 => 208,  592 => 207,  588 => 206,  582 => 203,  577 => 201,  573 => 200,  563 => 195,  559 => 194,  553 => 191,  549 => 190,  548 => 189,  547 => 188,  546 => 187,  541 => 185,  532 => 178,  530 => 177,  518 => 170,  513 => 167,  510 => 166,  503 => 164,  500 => 163,  495 => 162,  492 => 161,  485 => 159,  482 => 158,  477 => 157,  475 => 156,  466 => 150,  462 => 149,  461 => 148,  460 => 147,  459 => 146,  455 => 145,  449 => 142,  444 => 140,  440 => 139,  428 => 134,  424 => 133,  418 => 130,  414 => 129,  413 => 128,  412 => 127,  411 => 126,  406 => 124,  399 => 119,  396 => 118,  389 => 115,  372 => 114,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  356 => 108,  346 => 101,  341 => 98,  339 => 97,  328 => 89,  320 => 83,  307 => 81,  303 => 80,  298 => 78,  290 => 72,  276 => 71,  270 => 69,  264 => 67,  261 => 66,  244 => 65,  240 => 64,  237 => 63,  223 => 62,  217 => 60,  211 => 58,  208 => 57,  191 => 56,  187 => 55,  181 => 54,  175 => 53,  169 => 52,  163 => 51,  159 => 50,  146 => 40,  139 => 36,  133 => 33,  122 => 25,  114 => 20,  103 => 12,  100 => 11,  91 => 10,  79 => 7,  75 => 6,  70 => 5,  61 => 4,  43 => 3,  11 => 1,);
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
    <link rel=\"stylesheet\" href=\"{{ asset('/web/public/css/product.css')}}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('/web/public/css/farm_information.css') }}\" />
{% endblock %}

{% block body %}
\t<center>
\t\t<h2>{{ template.getPageTitle() }}</h2>
\t</center>
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
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info\">\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-search\"></span>
\t\t\t\t\t\t\t\t\t\t\t{{ template.getStoryBtnTitle() }}
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class='farmInfoCards col-lg-6 col-md-6'>
\t\t\t\t\t\t\t<div class='farmInfoIcons'>
\t\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon2.png\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h4>{{ template.getInformationTitle() }}</h4>
\t\t\t\t\t\t\t<p><span>{{ template.getRegionTitle() }}</span>: {{ farm.getRegion().getName() }}</p>
\t\t\t\t\t\t\t<p><span>{{ template.getElevationTitle() }}</span>: {{ farm.getElevation() }} m.a.s.l.</p>
\t\t\t\t\t\t\t<p><span>{{ template.getHarvestTitle() }}</span>: {{ farm.getHarvest() }}</p>
\t\t\t\t\t\t\t<p><span>{{ template.getSpeciesTitle() }}</span>: {{ template.getSpeciesInfo() }}</p>
\t\t\t\t\t\t\t<p><span>{{ template.getCultivarTitle() }}:</span>
\t\t\t\t\t\t\t\t{% for cultivar in farm.getCultivars() %}
\t\t\t\t\t\t\t\t\t{% if loop.first %}
\t\t\t\t\t\t\t\t\t\t{{ cultivar.getDescription() }}
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t, {{ cultivar.getDescription() }}
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p><span>{{ template.getCertificationsTitle() }}</span>:
\t\t\t\t\t\t\t\t{% for certification in farm.getCertifications() %}
\t\t\t\t\t\t\t\t\t{% if loop.first %}
\t\t\t\t\t\t\t\t\t\t{{ certification.getDescription() }}
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t, {{ certification.getDescription() }}
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class='farmInfoCards col-lg-6 col-md-6'>
\t\t\t\t\t\t\t<div class='farmInfoIcons'>
\t\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon3.png\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h4>{{ template.getAwardsTitle() }}</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t{% for award in farm.getFarmAwards() %}
\t\t\t\t\t\t\t\t\t-{{ award.getAward().getDescription() }}, {{ award.getPlace() }} place, {{ award.getYear() }}</br>
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
\t\t\t<div class='hidden-xs hidden-sm'>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('product_information', {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'farm': product.getFarm().getId(),
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'product': product.getId(),
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'presentation': product.getPresentations()|first.getId()  }) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{product.getImage()}}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\${{ product.getPresentations()|first.getPrice() }}</br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a id=\"orderPresentation\" data-presentation=\"{{ product.getPresentations()|first.getId() }}\" href=\"{{ path('page_homepage', {'name':'shoppingCart' }) }}\">{{ template.getOrderTitle() }}</a>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('product_information', {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'farm': product.getFarm().getId(),
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'product': product.getId(),
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'presentation': product.getPresentations()|first.getId() }) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>{{ template.getMoreInfoTitle() }}</p></a> 
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>{{product.getReviews()}} {{ template.getReviewsTitle() }}</p>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('product_information', {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'farm': product.getFarm().getId(),
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'product': product.getId(),
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'presentation': product.getPresentations()|first.getId()  }) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{product.getImage()}}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\${{ product.getPresentations()|first.getPrice() }}</br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('page_homepage', {'name':'shoppingCart' }) }}\">{{ template.getOrderTitle() }}</a>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('product_information', {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'farm': product.getFarm().getId(),
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'product': product.getId(),
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'presentation': 1 }) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>{{ template.getMoreInfoTitle() }}</p></a> 
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>{{product.getReviews()}} {{ template.getReviewsTitle() }}</p>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('product_information', {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'farm': product.getFarm().getId(),
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'product': product.getId(),
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'presentation': product.getPresentations()|first.getId()  }) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{product.getImage()}}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\${{ product.getPresentations()|first.getPrice() }}</br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a  href=\"{{ path('page_homepage', {'name':'shoppingCart' }) }}\">{{ template.getOrderTitle() }}</a>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('product_information', {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'farm': product.getFarm().getId(),
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'product': product.getId(),
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'presentation': 1 }) }}\"><p>{{ template.getMoreInfoTitle() }}</p></a> 
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>{{product.getReviews()}} {{ template.getReviewsTitle() }}</p>
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
\t\t{% if farm.getProducts()|length > 0 %}
\t\t<section>
\t\t\t<div class='hidden-lg hidden-md'>
\t\t\t<div id='carouselHeading' class='col-xs-12'>
\t\t\t\t<center><h3>{{ template.getProductsTitle() }}</h3></center>
\t\t\t</div>
\t\t\t<div class='clearfix'></div>
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"span12\">
\t\t\t    \t    <div class=\"well\">
                \t\t\t<div id=\"farm_informationCarousel2\" class=\"carousel slide\" data-interval=\"false\">             
\t\t\t\t                <div class=\"carousel-inner\" role=\"listbox\">
\t\t\t\t                   \t{% for product in farm.getProducts() %}
\t\t\t\t\t\t\t\t        {% if loop.first %} 
\t\t\t\t\t\t\t\t    \t    <div class=\"item active\">
\t\t\t\t\t\t\t\t    \t{% else %}
\t\t\t\t\t\t\t\t    \t    <div class=\"item \">
\t\t\t\t\t\t\t\t    \t{% endif %}
\t\t\t\t\t\t\t\t                <div class=\"row-fluid\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"carouselCards col-xs-12 col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"productThumbnails\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='prodThumbInside'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"productThumbnailsHeadings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>{{ product.getName()}}</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('product_information', {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'farm': product.getFarm().getId(),
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'product': product.getId(),
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'presentation': product.getPresentations()|first.getId()  }) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{product.getImage()}}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\${{ product.getPresentations()|first.getPrice() }}</br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a  href=\"{{ path('page_homepage', {'name':'shoppingCart' }) }}\">{{ template.getOrderTitle() }}</a>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('product_information', {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'farm': product.getFarm().getId(),
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'product': product.getId(),
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'presentation': product.getPresentations()|first.getId() }) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>{{ template.getMoreInfoTitle() }}</p></a> 
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>{{product.getReviews()}} {{ template.getReviewsTitle() }}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t              \t</div>
\t\t\t\t\t\t\t\t            </div>
\t\t\t\t\t\t            {% endfor %}
\t\t\t\t\t\t            </div>
\t\t\t\t                <a class=\"left carousel-control\" href=\"#farm_informationCarousel2\" data-slide=\"prev\"></a>
\t\t\t\t                <a class=\"right carousel-control\" href=\"#farm_informationCarousel2\" data-slide=\"next\"></a>
\t\t\t            \t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t{% endif %}
\t</main>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyA8iOI-wKQIfkncEFwGUHS3dsce-nlwsQ0\" type=\"text/javascript\"></script>
\t<script>
\t\tvar lat = {{ farm.getLatitude() }}
\t\tvar lon = {{ farm.getLongitude() }}
\t\t\$(\"#orderPresentation\").click(function(presentation){
\t\t\t// {{ app.session.set(\"itemsOnCart\",app.session.get(\"itemsOnCart\")+1) }}
\t\t\talert (\$(this).attr(\"data-presentation\"));
\t\t});\t
\t</script>\t
\t<script src=\"{{ asset('/web/public/js/farm_information.js')}}\"></script>
{% endblock %}", "PageBundle:Default:farm_information.html.twig", "C:\\xampp\\htdocs\\src\\PageBundle/Resources/views/Default/farm_information.html.twig");
    }
}
