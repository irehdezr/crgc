<?php

/* @Region/Default/region_information.html.twig */
class __TwigTemplate_28908a35f52f696fdf1b33269231c76462a7c92886b30ace19ccfaef5767cc2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "@Region/Default/region_information.html.twig", 1);
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
        $__internal_6f0a426bf493a54a5dd4afb7fabda161c5ecdc6f4941b2794c28b831a07e740a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f0a426bf493a54a5dd4afb7fabda161c5ecdc6f4941b2794c28b831a07e740a->enter($__internal_6f0a426bf493a54a5dd4afb7fabda161c5ecdc6f4941b2794c28b831a07e740a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Region/Default/region_information.html.twig"));

        $__internal_d2c35e8eead6fffcbd9827e8c9b5a44b4831158e28ba685ec954d52cc61b8298 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2c35e8eead6fffcbd9827e8c9b5a44b4831158e28ba685ec954d52cc61b8298->enter($__internal_d2c35e8eead6fffcbd9827e8c9b5a44b4831158e28ba685ec954d52cc61b8298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Region/Default/region_information.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f0a426bf493a54a5dd4afb7fabda161c5ecdc6f4941b2794c28b831a07e740a->leave($__internal_6f0a426bf493a54a5dd4afb7fabda161c5ecdc6f4941b2794c28b831a07e740a_prof);

        
        $__internal_d2c35e8eead6fffcbd9827e8c9b5a44b4831158e28ba685ec954d52cc61b8298->leave($__internal_d2c35e8eead6fffcbd9827e8c9b5a44b4831158e28ba685ec954d52cc61b8298_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7f6f2b90b14f61d20ab4d5de9957b06ef116360b371138f3e5f23387aeb64f69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f6f2b90b14f61d20ab4d5de9957b06ef116360b371138f3e5f23387aeb64f69->enter($__internal_7f6f2b90b14f61d20ab4d5de9957b06ef116360b371138f3e5f23387aeb64f69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_49cf3a688a21bd1a7d2d21c7180f21e4e33e40aacdfb92e642fbef593b525f72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49cf3a688a21bd1a7d2d21c7180f21e4e33e40aacdfb92e642fbef593b525f72->enter($__internal_49cf3a688a21bd1a7d2d21c7180f21e4e33e40aacdfb92e642fbef593b525f72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Region Information ";
        
        $__internal_49cf3a688a21bd1a7d2d21c7180f21e4e33e40aacdfb92e642fbef593b525f72->leave($__internal_49cf3a688a21bd1a7d2d21c7180f21e4e33e40aacdfb92e642fbef593b525f72_prof);

        
        $__internal_7f6f2b90b14f61d20ab4d5de9957b06ef116360b371138f3e5f23387aeb64f69->leave($__internal_7f6f2b90b14f61d20ab4d5de9957b06ef116360b371138f3e5f23387aeb64f69_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e2683b21a0caa1495bc63d9ce0ba39f99869c6e959776cde08eeba591dc73428 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2683b21a0caa1495bc63d9ce0ba39f99869c6e959776cde08eeba591dc73428->enter($__internal_e2683b21a0caa1495bc63d9ce0ba39f99869c6e959776cde08eeba591dc73428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3fd488de918cfdcd97ae2248d8f0f6ba57ca192b5e2b53e956390a39df27105d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fd488de918cfdcd97ae2248d8f0f6ba57ca192b5e2b53e956390a39df27105d->enter($__internal_3fd488de918cfdcd97ae2248d8f0f6ba57ca192b5e2b53e956390a39df27105d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/region_information.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_3fd488de918cfdcd97ae2248d8f0f6ba57ca192b5e2b53e956390a39df27105d->leave($__internal_3fd488de918cfdcd97ae2248d8f0f6ba57ca192b5e2b53e956390a39df27105d_prof);

        
        $__internal_e2683b21a0caa1495bc63d9ce0ba39f99869c6e959776cde08eeba591dc73428->leave($__internal_e2683b21a0caa1495bc63d9ce0ba39f99869c6e959776cde08eeba591dc73428_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_da5483e13503665183744ae567d689fcc600e605c84c9a9b435bd311f2901b35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da5483e13503665183744ae567d689fcc600e605c84c9a9b435bd311f2901b35->enter($__internal_da5483e13503665183744ae567d689fcc600e605c84c9a9b435bd311f2901b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c9698894ded67c3a3603e9e964815a1cb30af15a59cd19a75a5e44b9d916fd60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9698894ded67c3a3603e9e964815a1cb30af15a59cd19a75a5e44b9d916fd60->enter($__internal_c9698894ded67c3a3603e9e964815a1cb30af15a59cd19a75a5e44b9d916fd60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<main>

\t<div class='pageTitle'>
\t\t<center>
\t\t\t<h2>Region Information</h2>
\t\t</center>
\t</div>
\t\t<section id='regionInfoSection'>
\t\t\t<div class='container-fluid'>
\t\t\t\t<div id='regionInfoContainer' class='row'>
\t\t\t\t\t<div id='regionInfoHeading' class='col-xs-12'>
\t\t\t\t\t\t<center><h3>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["region"] ?? $this->getContext($context, "region")), "getName", array()), "html", null, true);
        echo "</h3></center>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"regionPicContainer\" class='regionInfoCards col-xs-12 col-sm-4'>
\t\t\t\t\t\t<div class='regionInfoIcons'>
\t\t\t\t\t\t\t<img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imgs/icon12.svg"), "html", null, true);
        echo "\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4>Images</h4>
\t\t\t\t\t\t<div class=\"container col-xs-12\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t    \t    <div class=\"well\"> 
\t\t\t\t\t\t                <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\" data-interval=\"3000\">
\t\t\t\t\t\t\t                <div class=\"carousel-inner\">
\t\t\t\t\t\t\t\t                <div class=\"item active\">
\t\t\t\t\t\t\t\t\t                <center><img class='regionPics' src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["region"] ?? $this->getContext($context, "region")), "getImage1", array()), "html", null, true);
        echo "\"></center>
\t\t\t\t\t\t\t\t                \t<div class=\"carousel-caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute(($context["region"] ?? $this->getContext($context, "region")), "getImageDescription1", array()), "html", null, true);
        echo "</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t                \t</div>
\t\t\t\t\t\t\t                \t<div class=\"item\">
\t\t\t\t\t\t\t\t                \t<center><img class='regionPics' src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute(($context["region"] ?? $this->getContext($context, "region")), "getImage2", array()), "html", null, true);
        echo "\"></center>
\t\t\t\t\t\t\t\t                \t<div class=\"carousel-caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute(($context["region"] ?? $this->getContext($context, "region")), "getImageDescription2", array()), "html", null, true);
        echo "</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t                \t</div>
\t\t\t\t\t\t\t                \t<div class=\"item\">
\t\t\t\t\t\t\t\t                \t<center><img class='regionPics' src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute(($context["region"] ?? $this->getContext($context, "region")), "getImage3", array()), "html", null, true);
        echo "\"></center>
\t\t\t\t\t\t\t\t                \t<div class=\"carousel-caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute(($context["region"] ?? $this->getContext($context, "region")), "getImageDescription3", array()), "html", null, true);
        echo "</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t                \t</div>
\t\t\t\t\t\t\t                </div>
\t\t\t\t\t\t                </div>
\t\t\t\t\t\t            </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class='regionInfoCards col-xs-12 col-sm-4'>
\t\t\t\t\t\t<div class='regionInfoIcons'>
\t\t\t\t\t\t\t<img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imgs/icon1.svg"), "html", null, true);
        echo "\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4>Description</h4>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<p class=\"regionText\">";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute(($context["region"] ?? $this->getContext($context, "region")), "getDescription", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t<p class=\"regionText\" style=\"font-style: italic;\">
\t\t\t\t\t\t\t\t<span style=\"font-style: bond\">Source:</span> Instituto del Café de Costa Rica (ICAFE)
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class='regionInfoIcons'>
\t\t\t\t\t\t\t<img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imgs/icon_organoleptic.png"), "html", null, true);
        echo "\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4>Organoleptic characteristics</h4>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<p class=\"regionText\">";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute(($context["region"] ?? $this->getContext($context, "region")), "getOrganolepticCharacteristics", array(), "method"), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t<p class=\"regionText\" style=\"font-style: italic;\">
\t\t\t\t\t\t\t\t<span style=\"font-style: bond\">Source:</span> Instituto del Café de Costa Rica (ICAFE)
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div id='regionInfoDetailsContainer' class='regionInfoCards col-xs-12 col-sm-4'>
\t\t\t\t\t\t<div class='regionInfoIcons'>
\t\t\t\t\t\t\t<img src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imgs/icon2.svg"), "html", null, true);
        echo "\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4>Information</h4>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<p class=\"regionText\">
\t\t\t\t\t\t\t\t";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute(($context["region"] ?? $this->getContext($context, "region")), "getInformation", array()), "html", null, true);
        echo "
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p class=\"regionText\" style=\"font-style: italic;\">
\t\t\t\t\t\t\t\t<span style=\"font-style: bond\">Source:</span> Instituto del Café de Costa Rica (ICAFE)
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class='regionInfoCards col-xs-12'>
\t\t\t\t\t\t<div class='regionInfoIcons'>
\t\t\t\t\t\t\t<img src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imgs/icon4.svg"), "html", null, true);
        echo "\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4>Location</h4>
\t\t\t\t\t\t<div id=\"region_map\">Mapa</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t</main>
";
        
        $__internal_c9698894ded67c3a3603e9e964815a1cb30af15a59cd19a75a5e44b9d916fd60->leave($__internal_c9698894ded67c3a3603e9e964815a1cb30af15a59cd19a75a5e44b9d916fd60_prof);

        
        $__internal_da5483e13503665183744ae567d689fcc600e605c84c9a9b435bd311f2901b35->leave($__internal_da5483e13503665183744ae567d689fcc600e605c84c9a9b435bd311f2901b35_prof);

    }

    // line 106
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fe0b3dd1e116e8ac35a7799b5cfd3f8eda142fc843cc263374a8e3d80427ac62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe0b3dd1e116e8ac35a7799b5cfd3f8eda142fc843cc263374a8e3d80427ac62->enter($__internal_fe0b3dd1e116e8ac35a7799b5cfd3f8eda142fc843cc263374a8e3d80427ac62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c666fe7a25ce78dfadcf44b5096cb571509e6b10e7f34306d71227fe6dac0cbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c666fe7a25ce78dfadcf44b5096cb571509e6b10e7f34306d71227fe6dac0cbe->enter($__internal_c666fe7a25ce78dfadcf44b5096cb571509e6b10e7f34306d71227fe6dac0cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 107
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

\t    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyA8iOI-wKQIfkncEFwGUHS3dsce-nlwsQ0\" type=\"text/javascript\"></script>
\t\t<script>
\t\t    var myCenter = new google.maps.LatLng(9.856626, -83.864775);
\t\t  \tvar mapCanvas = document.getElementById(\"region_map\");
\t\t  \tvar mapOptions = {center: myCenter, zoom: 9};
\t\t  \tvar map = new google.maps.Map(mapCanvas, mapOptions);
\t\t  \t";
        // line 115
        if (array_key_exists("farms", $context)) {
            // line 116
            echo "    \t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["farms"] ?? $this->getContext($context, "farms")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["farm"]) {
                // line 117
                echo "    \t\t\t\tvar marker";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo " = new google.maps.Marker({title:'";
                echo twig_escape_filter($this->env, $this->getAttribute($context["farm"], "getName", array()), "html", null, true);
                echo "',position:new google.maps.LatLng( ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["farm"], "getLatitude", array()), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, $this->getAttribute($context["farm"], "getLongitude", array()), "html", null, true);
                echo ")});
    \t\t\t\tmarker";
                // line 118
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo ".setMap(map);
    \t\t\t\tgoogle.maps.event.addListener(marker";
                // line 119
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo ",'click',function() {
    \t\t\t\t    location.href = \"";
                // line 120
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("farm_information", array("farm_id" => $this->getAttribute($context["farm"], "getId", array(), "method"))), "html", null, true);
                echo "\";
    \t\t\t\t});
    \t\t\t\t
    \t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['farm'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 124
            echo "\t\t  \t";
        }
        // line 125
        echo "\t\t</script>\t
\t\t
";
        
        $__internal_c666fe7a25ce78dfadcf44b5096cb571509e6b10e7f34306d71227fe6dac0cbe->leave($__internal_c666fe7a25ce78dfadcf44b5096cb571509e6b10e7f34306d71227fe6dac0cbe_prof);

        
        $__internal_fe0b3dd1e116e8ac35a7799b5cfd3f8eda142fc843cc263374a8e3d80427ac62->leave($__internal_fe0b3dd1e116e8ac35a7799b5cfd3f8eda142fc843cc263374a8e3d80427ac62_prof);

    }

    public function getTemplateName()
    {
        return "@Region/Default/region_information.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  326 => 125,  323 => 124,  305 => 120,  301 => 119,  297 => 118,  286 => 117,  268 => 116,  266 => 115,  254 => 107,  245 => 106,  225 => 95,  213 => 86,  205 => 81,  194 => 73,  187 => 69,  178 => 63,  171 => 59,  157 => 48,  152 => 46,  145 => 42,  140 => 40,  133 => 36,  128 => 34,  116 => 25,  109 => 21,  96 => 10,  87 => 9,  75 => 6,  70 => 5,  61 => 4,  43 => 3,  11 => 1,);
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

{% block title%} Region Information {% endblock %}
{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/region_information.css') }}\" />
{% endblock %}

{% block body %}
<main>

\t<div class='pageTitle'>
\t\t<center>
\t\t\t<h2>Region Information</h2>
\t\t</center>
\t</div>
\t\t<section id='regionInfoSection'>
\t\t\t<div class='container-fluid'>
\t\t\t\t<div id='regionInfoContainer' class='row'>
\t\t\t\t\t<div id='regionInfoHeading' class='col-xs-12'>
\t\t\t\t\t\t<center><h3>{{ region.getName }}</h3></center>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"regionPicContainer\" class='regionInfoCards col-xs-12 col-sm-4'>
\t\t\t\t\t\t<div class='regionInfoIcons'>
\t\t\t\t\t\t\t<img src=\"{{ asset('imgs/icon12.svg') }}\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4>Images</h4>
\t\t\t\t\t\t<div class=\"container col-xs-12\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t    \t    <div class=\"well\"> 
\t\t\t\t\t\t                <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\" data-interval=\"3000\">
\t\t\t\t\t\t\t                <div class=\"carousel-inner\">
\t\t\t\t\t\t\t\t                <div class=\"item active\">
\t\t\t\t\t\t\t\t\t                <center><img class='regionPics' src=\"{{ region.getImage1 }}\"></center>
\t\t\t\t\t\t\t\t                \t<div class=\"carousel-caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>{{ region.getImageDescription1 }}</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t                \t</div>
\t\t\t\t\t\t\t                \t<div class=\"item\">
\t\t\t\t\t\t\t\t                \t<center><img class='regionPics' src=\"{{ region.getImage2}}\"></center>
\t\t\t\t\t\t\t\t                \t<div class=\"carousel-caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>{{ region.getImageDescription2 }}</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t                \t</div>
\t\t\t\t\t\t\t                \t<div class=\"item\">
\t\t\t\t\t\t\t\t                \t<center><img class='regionPics' src=\"{{ region.getImage3}}\"></center>
\t\t\t\t\t\t\t\t                \t<div class=\"carousel-caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>{{ region.getImageDescription3 }}</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t                \t</div>
\t\t\t\t\t\t\t                </div>
\t\t\t\t\t\t                </div>
\t\t\t\t\t\t            </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class='regionInfoCards col-xs-12 col-sm-4'>
\t\t\t\t\t\t<div class='regionInfoIcons'>
\t\t\t\t\t\t\t<img src=\"{{ asset('imgs/icon1.svg') }}\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4>Description</h4>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<p class=\"regionText\">{{ region.getDescription }}</p>
\t\t\t\t\t\t\t<p class=\"regionText\" style=\"font-style: italic;\">
\t\t\t\t\t\t\t\t<span style=\"font-style: bond\">Source:</span> Instituto del Café de Costa Rica (ICAFE)
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class='regionInfoIcons'>
\t\t\t\t\t\t\t<img src=\"{{ asset('imgs/icon_organoleptic.png') }}\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4>Organoleptic characteristics</h4>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<p class=\"regionText\">{{ region.getOrganolepticCharacteristics() }}</p>
\t\t\t\t\t\t\t<p class=\"regionText\" style=\"font-style: italic;\">
\t\t\t\t\t\t\t\t<span style=\"font-style: bond\">Source:</span> Instituto del Café de Costa Rica (ICAFE)
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div id='regionInfoDetailsContainer' class='regionInfoCards col-xs-12 col-sm-4'>
\t\t\t\t\t\t<div class='regionInfoIcons'>
\t\t\t\t\t\t\t<img src=\"{{ asset('imgs/icon2.svg') }}\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4>Information</h4>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<p class=\"regionText\">
\t\t\t\t\t\t\t\t{{ region.getInformation }}
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p class=\"regionText\" style=\"font-style: italic;\">
\t\t\t\t\t\t\t\t<span style=\"font-style: bond\">Source:</span> Instituto del Café de Costa Rica (ICAFE)
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class='regionInfoCards col-xs-12'>
\t\t\t\t\t\t<div class='regionInfoIcons'>
\t\t\t\t\t\t\t<img src=\"{{ asset('imgs/icon4.svg') }}\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4>Location</h4>
\t\t\t\t\t\t<div id=\"region_map\">Mapa</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t</main>
{% endblock %}

{% block javascripts %}
    {{ parent() }}

\t    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyA8iOI-wKQIfkncEFwGUHS3dsce-nlwsQ0\" type=\"text/javascript\"></script>
\t\t<script>
\t\t    var myCenter = new google.maps.LatLng(9.856626, -83.864775);
\t\t  \tvar mapCanvas = document.getElementById(\"region_map\");
\t\t  \tvar mapOptions = {center: myCenter, zoom: 9};
\t\t  \tvar map = new google.maps.Map(mapCanvas, mapOptions);
\t\t  \t{% if farms is defined %}
    \t\t\t{% for farm in farms %}
    \t\t\t\tvar marker{{ loop.index}} = new google.maps.Marker({title:'{{farm.getName}}',position:new google.maps.LatLng( {{ farm.getLatitude}},{{ farm.getLongitude}})});
    \t\t\t\tmarker{{ loop.index}}.setMap(map);
    \t\t\t\tgoogle.maps.event.addListener(marker{{ loop.index}},'click',function() {
    \t\t\t\t    location.href = \"{{ path('farm_information',{'farm_id': farm.getId()} ) }}\";
    \t\t\t\t});
    \t\t\t\t
    \t\t\t{% endfor %}
\t\t  \t{% endif %}
\t\t</script>\t
\t\t
{% endblock %}", "@Region/Default/region_information.html.twig", "C:\\xampp\\htdocs\\crgc\\src\\RegionBundle\\Resources\\views\\Default\\region_information.html.twig");
    }
}
