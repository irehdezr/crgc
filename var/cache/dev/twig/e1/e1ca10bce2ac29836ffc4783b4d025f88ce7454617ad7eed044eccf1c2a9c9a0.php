<?php

/* RegionBundle:Default:region_information.html.twig */
class __TwigTemplate_12810d0551152de13bfb823c19e200a4007d030c9c5d38737c6b545fd5588054 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "RegionBundle:Default:region_information.html.twig", 1);
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
        $__internal_d51c3e5c63f584717fafc899ad1583025100e74e3d65e45e728fa92db79afd2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d51c3e5c63f584717fafc899ad1583025100e74e3d65e45e728fa92db79afd2d->enter($__internal_d51c3e5c63f584717fafc899ad1583025100e74e3d65e45e728fa92db79afd2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RegionBundle:Default:region_information.html.twig"));

        $__internal_373434de71a9aefdcb5cd7c299dd739715a0396598d0ef011eab33acbcaf5756 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_373434de71a9aefdcb5cd7c299dd739715a0396598d0ef011eab33acbcaf5756->enter($__internal_373434de71a9aefdcb5cd7c299dd739715a0396598d0ef011eab33acbcaf5756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RegionBundle:Default:region_information.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d51c3e5c63f584717fafc899ad1583025100e74e3d65e45e728fa92db79afd2d->leave($__internal_d51c3e5c63f584717fafc899ad1583025100e74e3d65e45e728fa92db79afd2d_prof);

        
        $__internal_373434de71a9aefdcb5cd7c299dd739715a0396598d0ef011eab33acbcaf5756->leave($__internal_373434de71a9aefdcb5cd7c299dd739715a0396598d0ef011eab33acbcaf5756_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_077028aab581477a268418152eb124548b8e07d3c453776159391330520d5028 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_077028aab581477a268418152eb124548b8e07d3c453776159391330520d5028->enter($__internal_077028aab581477a268418152eb124548b8e07d3c453776159391330520d5028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_34d19aca1c005f01bf950c44cdfb8ebb529a6fd61998910641d1ff53d84aa989 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34d19aca1c005f01bf950c44cdfb8ebb529a6fd61998910641d1ff53d84aa989->enter($__internal_34d19aca1c005f01bf950c44cdfb8ebb529a6fd61998910641d1ff53d84aa989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Region Information ";
        
        $__internal_34d19aca1c005f01bf950c44cdfb8ebb529a6fd61998910641d1ff53d84aa989->leave($__internal_34d19aca1c005f01bf950c44cdfb8ebb529a6fd61998910641d1ff53d84aa989_prof);

        
        $__internal_077028aab581477a268418152eb124548b8e07d3c453776159391330520d5028->leave($__internal_077028aab581477a268418152eb124548b8e07d3c453776159391330520d5028_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_00ebc468ce8b49d7671240b2f1ed130c3f3dbc8ae50fa7d34921321bf0994d7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00ebc468ce8b49d7671240b2f1ed130c3f3dbc8ae50fa7d34921321bf0994d7a->enter($__internal_00ebc468ce8b49d7671240b2f1ed130c3f3dbc8ae50fa7d34921321bf0994d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_689c54e1dd76daf4662ae2e7187ecc4a88a7ece920fb3aa0dfe6f301cdc183f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_689c54e1dd76daf4662ae2e7187ecc4a88a7ece920fb3aa0dfe6f301cdc183f6->enter($__internal_689c54e1dd76daf4662ae2e7187ecc4a88a7ece920fb3aa0dfe6f301cdc183f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/region_information.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_689c54e1dd76daf4662ae2e7187ecc4a88a7ece920fb3aa0dfe6f301cdc183f6->leave($__internal_689c54e1dd76daf4662ae2e7187ecc4a88a7ece920fb3aa0dfe6f301cdc183f6_prof);

        
        $__internal_00ebc468ce8b49d7671240b2f1ed130c3f3dbc8ae50fa7d34921321bf0994d7a->leave($__internal_00ebc468ce8b49d7671240b2f1ed130c3f3dbc8ae50fa7d34921321bf0994d7a_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_b589a356377ddf5337a99e9c0ea5b577d556e5d2e5a00af497031534661f719a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b589a356377ddf5337a99e9c0ea5b577d556e5d2e5a00af497031534661f719a->enter($__internal_b589a356377ddf5337a99e9c0ea5b577d556e5d2e5a00af497031534661f719a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c0228e0e57d81a7d203e51c017d32ecdbfd97dff7cfbd720a6f87295b287227c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0228e0e57d81a7d203e51c017d32ecdbfd97dff7cfbd720a6f87295b287227c->enter($__internal_c0228e0e57d81a7d203e51c017d32ecdbfd97dff7cfbd720a6f87295b287227c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<main>
\t<div class='clearfix'></div>
\t\t\t<center><h2>Region Information</h2></center>
\t\t<section id='regionInfoSection'>
\t\t\t<div class='container-fluid'>
\t\t\t\t<div id='regionInfoContainer' class='row'>
\t\t\t\t\t<div id='regionInfoHeading' class='col-xs-12'>
\t\t\t\t\t\t<center><h3>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["region"] ?? $this->getContext($context, "region")), "getName", array()), "html", null, true);
        echo "</h3></center>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"regionPicContainer\" class='regionInfoCards col-xs-12 col-sm-4'>
\t\t\t\t\t\t<div class='regionInfoIcons'>
\t\t\t\t\t\t\t<img src=\"";
        // line 21
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
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["region"] ?? $this->getContext($context, "region")), "getImage1", array()), "html", null, true);
        echo "\"></center>
\t\t\t\t\t\t\t\t                \t<div class=\"carousel-caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute(($context["region"] ?? $this->getContext($context, "region")), "getImageDescription1", array()), "html", null, true);
        echo "</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t                \t</div>
\t\t\t\t\t\t\t                \t<div class=\"item\">
\t\t\t\t\t\t\t\t                \t<center><img class='regionPics' src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute(($context["region"] ?? $this->getContext($context, "region")), "getImage2", array()), "html", null, true);
        echo "\"></center>
\t\t\t\t\t\t\t\t                \t<div class=\"carousel-caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["region"] ?? $this->getContext($context, "region")), "getImageDescription2", array()), "html", null, true);
        echo "</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t                \t</div>
\t\t\t\t\t\t\t                \t<div class=\"item\">
\t\t\t\t\t\t\t\t                \t<center><img class='regionPics' src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute(($context["region"] ?? $this->getContext($context, "region")), "getImage3", array()), "html", null, true);
        echo "\"></center>
\t\t\t\t\t\t\t\t                \t<div class=\"carousel-caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>";
        // line 44
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
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imgs/icon1.svg"), "html", null, true);
        echo "\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4>Description</h4>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<p class=\"regionText\">";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute(($context["region"] ?? $this->getContext($context, "region")), "getDescription", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t<p class=\"regionText\" style=\"font-style: italic;\">
\t\t\t\t\t\t\t\t<span style=\"font-style: bond\">Source:</span> Instituto del Café de Costa Rica (ICAFE)
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class='regionInfoIcons'>
\t\t\t\t\t\t\t<img src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imgs/icon_organoleptic.png"), "html", null, true);
        echo "\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4>Organoleptic characteristics</h4>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<p class=\"regionText\">";
        // line 69
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
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imgs/icon2.svg"), "html", null, true);
        echo "\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4>Information</h4>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<p class=\"regionText\">
\t\t\t\t\t\t\t\t";
        // line 82
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
        // line 91
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
        
        $__internal_c0228e0e57d81a7d203e51c017d32ecdbfd97dff7cfbd720a6f87295b287227c->leave($__internal_c0228e0e57d81a7d203e51c017d32ecdbfd97dff7cfbd720a6f87295b287227c_prof);

        
        $__internal_b589a356377ddf5337a99e9c0ea5b577d556e5d2e5a00af497031534661f719a->leave($__internal_b589a356377ddf5337a99e9c0ea5b577d556e5d2e5a00af497031534661f719a_prof);

    }

    // line 102
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_307171f19cb9552bc98f863f0ecc604370bcc65efe719774f8144be8896fca7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_307171f19cb9552bc98f863f0ecc604370bcc65efe719774f8144be8896fca7b->enter($__internal_307171f19cb9552bc98f863f0ecc604370bcc65efe719774f8144be8896fca7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e4a1d4f228ce93cf93512900eaa86c914651eef1cbb7a445c7783639c3239289 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4a1d4f228ce93cf93512900eaa86c914651eef1cbb7a445c7783639c3239289->enter($__internal_e4a1d4f228ce93cf93512900eaa86c914651eef1cbb7a445c7783639c3239289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 103
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
        // line 111
        if (array_key_exists("farms", $context)) {
            // line 112
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
                // line 113
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
                // line 114
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo ".setMap(map);
    \t\t\t\tgoogle.maps.event.addListener(marker";
                // line 115
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo ",'click',function() {
    \t\t\t\t    location.href = \"";
                // line 116
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
            // line 120
            echo "\t\t  \t";
        }
        // line 121
        echo "\t\t</script>\t
\t\t
";
        
        $__internal_e4a1d4f228ce93cf93512900eaa86c914651eef1cbb7a445c7783639c3239289->leave($__internal_e4a1d4f228ce93cf93512900eaa86c914651eef1cbb7a445c7783639c3239289_prof);

        
        $__internal_307171f19cb9552bc98f863f0ecc604370bcc65efe719774f8144be8896fca7b->leave($__internal_307171f19cb9552bc98f863f0ecc604370bcc65efe719774f8144be8896fca7b_prof);

    }

    public function getTemplateName()
    {
        return "RegionBundle:Default:region_information.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  322 => 121,  319 => 120,  301 => 116,  297 => 115,  293 => 114,  282 => 113,  264 => 112,  262 => 111,  250 => 103,  241 => 102,  221 => 91,  209 => 82,  201 => 77,  190 => 69,  183 => 65,  174 => 59,  167 => 55,  153 => 44,  148 => 42,  141 => 38,  136 => 36,  129 => 32,  124 => 30,  112 => 21,  105 => 17,  96 => 10,  87 => 9,  75 => 6,  70 => 5,  61 => 4,  43 => 3,  11 => 1,);
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
\t<div class='clearfix'></div>
\t\t\t<center><h2>Region Information</h2></center>
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
{% endblock %}", "RegionBundle:Default:region_information.html.twig", "C:\\xampp\\htdocs\\crgc\\var\\cache\\dev/../../../src/RegionBundle/Resources/views/Default/region_information.html.twig");
    }
}
