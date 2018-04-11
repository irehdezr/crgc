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
        $__internal_e49e2f0e5d9ff208d156c4b1ff3d2950cc82e7d4ce6fad995ba6f3df95aaa56d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e49e2f0e5d9ff208d156c4b1ff3d2950cc82e7d4ce6fad995ba6f3df95aaa56d->enter($__internal_e49e2f0e5d9ff208d156c4b1ff3d2950cc82e7d4ce6fad995ba6f3df95aaa56d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Region/Default/region_information.html.twig"));

        $__internal_9a0ee2ea7e57114a1c79873cf80779ae33519c0fb4807f8d7661979a43295078 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a0ee2ea7e57114a1c79873cf80779ae33519c0fb4807f8d7661979a43295078->enter($__internal_9a0ee2ea7e57114a1c79873cf80779ae33519c0fb4807f8d7661979a43295078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Region/Default/region_information.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e49e2f0e5d9ff208d156c4b1ff3d2950cc82e7d4ce6fad995ba6f3df95aaa56d->leave($__internal_e49e2f0e5d9ff208d156c4b1ff3d2950cc82e7d4ce6fad995ba6f3df95aaa56d_prof);

        
        $__internal_9a0ee2ea7e57114a1c79873cf80779ae33519c0fb4807f8d7661979a43295078->leave($__internal_9a0ee2ea7e57114a1c79873cf80779ae33519c0fb4807f8d7661979a43295078_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5cd703ed9c3966cd6d973dcf83d3f86491cced5e5d92351004409f72babb8dce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cd703ed9c3966cd6d973dcf83d3f86491cced5e5d92351004409f72babb8dce->enter($__internal_5cd703ed9c3966cd6d973dcf83d3f86491cced5e5d92351004409f72babb8dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ba578c1c59e16e18eddacf41535fb48cf85204970bd2e1a45822cba4627c211c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba578c1c59e16e18eddacf41535fb48cf85204970bd2e1a45822cba4627c211c->enter($__internal_ba578c1c59e16e18eddacf41535fb48cf85204970bd2e1a45822cba4627c211c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Region Information ";
        
        $__internal_ba578c1c59e16e18eddacf41535fb48cf85204970bd2e1a45822cba4627c211c->leave($__internal_ba578c1c59e16e18eddacf41535fb48cf85204970bd2e1a45822cba4627c211c_prof);

        
        $__internal_5cd703ed9c3966cd6d973dcf83d3f86491cced5e5d92351004409f72babb8dce->leave($__internal_5cd703ed9c3966cd6d973dcf83d3f86491cced5e5d92351004409f72babb8dce_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_04ae8ab462d5f767a89e9d90286b14985b9d76b4c7fa026072522d3f22a02762 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04ae8ab462d5f767a89e9d90286b14985b9d76b4c7fa026072522d3f22a02762->enter($__internal_04ae8ab462d5f767a89e9d90286b14985b9d76b4c7fa026072522d3f22a02762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_42eb240e4000cac0cd0a4c0b2eb0643e09512b53110540527ea6176558cfe9f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42eb240e4000cac0cd0a4c0b2eb0643e09512b53110540527ea6176558cfe9f6->enter($__internal_42eb240e4000cac0cd0a4c0b2eb0643e09512b53110540527ea6176558cfe9f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/region_information.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_42eb240e4000cac0cd0a4c0b2eb0643e09512b53110540527ea6176558cfe9f6->leave($__internal_42eb240e4000cac0cd0a4c0b2eb0643e09512b53110540527ea6176558cfe9f6_prof);

        
        $__internal_04ae8ab462d5f767a89e9d90286b14985b9d76b4c7fa026072522d3f22a02762->leave($__internal_04ae8ab462d5f767a89e9d90286b14985b9d76b4c7fa026072522d3f22a02762_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_1d5045fe039081d96a184f3ee2137921cf6f0dd2137177cee85be34387345127 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d5045fe039081d96a184f3ee2137921cf6f0dd2137177cee85be34387345127->enter($__internal_1d5045fe039081d96a184f3ee2137921cf6f0dd2137177cee85be34387345127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a0a11bdb078f8aaa77107496314d4aba1a2eff3e781541e06b3254221d55810e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0a11bdb078f8aaa77107496314d4aba1a2eff3e781541e06b3254221d55810e->enter($__internal_a0a11bdb078f8aaa77107496314d4aba1a2eff3e781541e06b3254221d55810e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a0a11bdb078f8aaa77107496314d4aba1a2eff3e781541e06b3254221d55810e->leave($__internal_a0a11bdb078f8aaa77107496314d4aba1a2eff3e781541e06b3254221d55810e_prof);

        
        $__internal_1d5045fe039081d96a184f3ee2137921cf6f0dd2137177cee85be34387345127->leave($__internal_1d5045fe039081d96a184f3ee2137921cf6f0dd2137177cee85be34387345127_prof);

    }

    // line 102
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0f19fe1f1caac4d2b5496780dcc4a4ffd25dbf2941f6c3ed71ff8bae1c6762f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f19fe1f1caac4d2b5496780dcc4a4ffd25dbf2941f6c3ed71ff8bae1c6762f6->enter($__internal_0f19fe1f1caac4d2b5496780dcc4a4ffd25dbf2941f6c3ed71ff8bae1c6762f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4c285429143e9ea6489ff4af7572c22404a474d7aa80b3196d1c4845a5712f79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c285429143e9ea6489ff4af7572c22404a474d7aa80b3196d1c4845a5712f79->enter($__internal_4c285429143e9ea6489ff4af7572c22404a474d7aa80b3196d1c4845a5712f79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_4c285429143e9ea6489ff4af7572c22404a474d7aa80b3196d1c4845a5712f79->leave($__internal_4c285429143e9ea6489ff4af7572c22404a474d7aa80b3196d1c4845a5712f79_prof);

        
        $__internal_0f19fe1f1caac4d2b5496780dcc4a4ffd25dbf2941f6c3ed71ff8bae1c6762f6->leave($__internal_0f19fe1f1caac4d2b5496780dcc4a4ffd25dbf2941f6c3ed71ff8bae1c6762f6_prof);

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
{% endblock %}", "@Region/Default/region_information.html.twig", "C:\\xampp\\htdocs\\crgc\\src\\RegionBundle\\Resources\\views\\Default\\region_information.html.twig");
    }
}
