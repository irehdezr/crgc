<?php

/* RegionBundle:Default:region_information.html.twig */
class __TwigTemplate_62c3e9a209b82a98c21ba07702d7af98e436b213d8161bd9d75fe09a0b742f20 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " Region Information ";
    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/region_information.css"), "html", null, true);
        echo "\" />
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["region"] ?? null), "getName", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["region"] ?? null), "getImage1", array()), "html", null, true);
        echo "\"></center>
\t\t\t\t\t\t\t\t                \t<div class=\"carousel-caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute(($context["region"] ?? null), "getImageDescription1", array()), "html", null, true);
        echo "</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t                \t</div>
\t\t\t\t\t\t\t                \t<div class=\"item\">
\t\t\t\t\t\t\t\t                \t<center><img class='regionPics' src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute(($context["region"] ?? null), "getImage2", array()), "html", null, true);
        echo "\"></center>
\t\t\t\t\t\t\t\t                \t<div class=\"carousel-caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["region"] ?? null), "getImageDescription2", array()), "html", null, true);
        echo "</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t                \t</div>
\t\t\t\t\t\t\t                \t<div class=\"item\">
\t\t\t\t\t\t\t\t                \t<center><img class='regionPics' src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute(($context["region"] ?? null), "getImage3", array()), "html", null, true);
        echo "\"></center>
\t\t\t\t\t\t\t\t                \t<div class=\"carousel-caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute(($context["region"] ?? null), "getImageDescription3", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["region"] ?? null), "getDescription", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["region"] ?? null), "getOrganolepticCharacteristics", array(), "method"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["region"] ?? null), "getInformation", array()), "html", null, true);
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
    }

    // line 102
    public function block_javascripts($context, array $blocks = array())
    {
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
            $context['_seq'] = twig_ensure_traversable(($context["farms"] ?? null));
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
        return array (  268 => 121,  265 => 120,  247 => 116,  243 => 115,  239 => 114,  228 => 113,  210 => 112,  208 => 111,  196 => 103,  193 => 102,  179 => 91,  167 => 82,  159 => 77,  148 => 69,  141 => 65,  132 => 59,  125 => 55,  111 => 44,  106 => 42,  99 => 38,  94 => 36,  87 => 32,  82 => 30,  70 => 21,  63 => 17,  54 => 10,  51 => 9,  45 => 6,  40 => 5,  37 => 4,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "RegionBundle:Default:region_information.html.twig", "C:\\xampp\\htdocs\\crgc\\src\\RegionBundle/Resources/views/Default/region_information.html.twig");
    }
}
