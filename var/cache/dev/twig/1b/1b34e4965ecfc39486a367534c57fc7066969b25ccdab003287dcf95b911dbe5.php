<?php

/* PageBundle:Default:home.html.twig */
class __TwigTemplate_888a7b57ef8c4b2684c998ecda9ba3735677ca4c2a964997fe5777bbd5b949dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "PageBundle:Default:home.html.twig", 1);
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
        $__internal_d132e846290a2dd132575f190bbe4cb4a33edbec496e03ed4bc866a8568a5bb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d132e846290a2dd132575f190bbe4cb4a33edbec496e03ed4bc866a8568a5bb7->enter($__internal_d132e846290a2dd132575f190bbe4cb4a33edbec496e03ed4bc866a8568a5bb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:home.html.twig"));

        $__internal_c88239a688825c26acc07b2479f4163b7791371d31df2267115fb89e4efcf9bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c88239a688825c26acc07b2479f4163b7791371d31df2267115fb89e4efcf9bb->enter($__internal_c88239a688825c26acc07b2479f4163b7791371d31df2267115fb89e4efcf9bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d132e846290a2dd132575f190bbe4cb4a33edbec496e03ed4bc866a8568a5bb7->leave($__internal_d132e846290a2dd132575f190bbe4cb4a33edbec496e03ed4bc866a8568a5bb7_prof);

        
        $__internal_c88239a688825c26acc07b2479f4163b7791371d31df2267115fb89e4efcf9bb->leave($__internal_c88239a688825c26acc07b2479f4163b7791371d31df2267115fb89e4efcf9bb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_63fc2178dbd7ffddd958d639ac22853f2921e1f11aff1b5f24158c18979f72a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63fc2178dbd7ffddd958d639ac22853f2921e1f11aff1b5f24158c18979f72a0->enter($__internal_63fc2178dbd7ffddd958d639ac22853f2921e1f11aff1b5f24158c18979f72a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_191ac5aeaa2413bd697cedc54ecea09fc11e5cdcfad450e6b001bde3fe5ba0c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_191ac5aeaa2413bd697cedc54ecea09fc11e5cdcfad450e6b001bde3fe5ba0c4->enter($__internal_191ac5aeaa2413bd697cedc54ecea09fc11e5cdcfad450e6b001bde3fe5ba0c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CR Gourmet Coffee";
        
        $__internal_191ac5aeaa2413bd697cedc54ecea09fc11e5cdcfad450e6b001bde3fe5ba0c4->leave($__internal_191ac5aeaa2413bd697cedc54ecea09fc11e5cdcfad450e6b001bde3fe5ba0c4_prof);

        
        $__internal_63fc2178dbd7ffddd958d639ac22853f2921e1f11aff1b5f24158c18979f72a0->leave($__internal_63fc2178dbd7ffddd958d639ac22853f2921e1f11aff1b5f24158c18979f72a0_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1652e5227b7706ffb8ad0e3918d0454ce7aef8b2c58621d7e51ebd68b106dc51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1652e5227b7706ffb8ad0e3918d0454ce7aef8b2c58621d7e51ebd68b106dc51->enter($__internal_1652e5227b7706ffb8ad0e3918d0454ce7aef8b2c58621d7e51ebd68b106dc51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_52a4882108f8a26830fde946720ee162f6e2e3ecaba11679c48cf344b871ea8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52a4882108f8a26830fde946720ee162f6e2e3ecaba11679c48cf344b871ea8e->enter($__internal_52a4882108f8a26830fde946720ee162f6e2e3ecaba11679c48cf344b871ea8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/homepage.css"), "html", null, true);
        echo "\" />";
        
        $__internal_52a4882108f8a26830fde946720ee162f6e2e3ecaba11679c48cf344b871ea8e->leave($__internal_52a4882108f8a26830fde946720ee162f6e2e3ecaba11679c48cf344b871ea8e_prof);

        
        $__internal_1652e5227b7706ffb8ad0e3918d0454ce7aef8b2c58621d7e51ebd68b106dc51->leave($__internal_1652e5227b7706ffb8ad0e3918d0454ce7aef8b2c58621d7e51ebd68b106dc51_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_f72f7a2ebad90b526b7c75bd9c796f728b45850d8e764cc59955bcaa3916b036 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f72f7a2ebad90b526b7c75bd9c796f728b45850d8e764cc59955bcaa3916b036->enter($__internal_f72f7a2ebad90b526b7c75bd9c796f728b45850d8e764cc59955bcaa3916b036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6601d706731c2b033bae78dfa44262d2fa22bce63b447ac83c9b500c4e989bae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6601d706731c2b033bae78dfa44262d2fa22bce63b447ac83c9b500c4e989bae->enter($__internal_6601d706731c2b033bae78dfa44262d2fa22bce63b447ac83c9b500c4e989bae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<main>
    <div id='banner' style='background-image: url( ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getBannerImage", array(), "method"), "html", null, true);
        echo " )'>
        <img id=\"logoSite\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imgs/logo_final_v1_osc.svg"), "html", null, true);
        echo "\"/>  
\t</div>
\t</section>
\t\t<div class=\"pageTitle\">
\t\t\t<h2>
\t\t\t\t";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getFeaturedProductsTitle", array(), "method"), "html", null, true);
        echo "\t\t
\t\t\t</h2>
\t\t</div>
\t<section id='productsShowcase'>
\t\t<div class=\"col-xs-12 col-md-10 col-md-offset-1\">
\t\t\t";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 22
            echo "\t\t\t<div class=\"productThumbnails col-xs-6 col-md-6 col-lg-4\">
\t\t\t\t<div class='prodThumbInside'>
\t\t\t\t\t<div class=\"productThumbnailsHeadings\">
\t\t\t\t\t\t<h4>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "getName", array(), "method"), "html", null, true);
            echo "</h4>
\t\t\t\t\t</div> 
\t\t\t\t\t<a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_information", array("farm" => $this->getAttribute($this->getAttribute($context["product"], "getFarm", array(), "method"), "getId", array(), "method"), "product" => $this->getAttribute($context["product"], "getId", array(), "method"), "presentation" => $this->getAttribute(twig_first($this->env, $this->getAttribute($context["product"], "getPresentations", array(), "method")), "getId", array(), "method"))), "html", null, true);
            echo "\">
\t\t\t\t\t\t<img src=\" ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "getImage", array(), "method"), "html", null, true);
            echo "\">
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_information", array("farm" => $this->getAttribute($this->getAttribute($context["product"], "getFarm", array(), "method"), "getId", array(), "method"), "product" => $this->getAttribute($context["product"], "getId", array(), "method"), "presentation" => $this->getAttribute(twig_first($this->env, $this->getAttribute($context["product"], "getPresentations", array(), "method")), "getId", array(), "method"))), "html", null, true);
            echo "\"><p>More info/options</p></a> 
\t\t\t\t\t<div>
\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getProductFarmTitle", array(), "method"), "html", null, true);
            echo " 
\t\t\t\t\t\t\t<a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("farm_information", array("farm_id" => $this->getAttribute($this->getAttribute($context["product"], "getFarm", array(), "method"), "getId", array(), "method"))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["product"], "getFarm", array(), "method"), "getName", array()), "html", null, true);
            echo " </a>
\t\t\t\t\t\t</center>\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "\t\t</div>
\t</section>
\t<div class='clearfix'></div>
\t<section id='siteInfoSection' class='container-fluid'>
\t\t<div class=\"row\">
\t\t\t<div id='siteInfo' class=\"col-xs-12 col-md-8\" style='background-image: url(";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getFarm", array(), "method"), "getImage", array(), "method"), "html", null, true);
        echo " )'></div>
\t\t\t<div id='siteInfoText' class=\"col-xs-12 col-md-4\">
\t\t\t\t<h3>
                    ";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getDescriptionTitle", array(), "method"), "html", null, true);
        echo "
\t\t\t\t</h3>\t
\t\t\t\t<h4>
                    ";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getDescriptionInfo", array(), "method"), "html", null, true);
        echo "
                </h4>
\t\t\t</div>
\t\t</div>
</main>
";
        
        $__internal_6601d706731c2b033bae78dfa44262d2fa22bce63b447ac83c9b500c4e989bae->leave($__internal_6601d706731c2b033bae78dfa44262d2fa22bce63b447ac83c9b500c4e989bae_prof);

        
        $__internal_f72f7a2ebad90b526b7c75bd9c796f728b45850d8e764cc59955bcaa3916b036->leave($__internal_f72f7a2ebad90b526b7c75bd9c796f728b45850d8e764cc59955bcaa3916b036_prof);

    }

    public function getTemplateName()
    {
        return "PageBundle:Default:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 51,  177 => 48,  171 => 45,  164 => 40,  150 => 34,  146 => 33,  140 => 30,  135 => 28,  131 => 27,  126 => 25,  121 => 22,  117 => 21,  109 => 16,  101 => 11,  97 => 10,  94 => 9,  85 => 8,  74 => 7,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
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

{% block title%}CR Gourmet Coffee{% endblock %}

{% block stylesheets%}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/homepage.css')}}\" />{% endblock %}
{% block body %}
<main>
    <div id='banner' style='background-image: url( {{ template.getBannerImage() }} )'>
        <img id=\"logoSite\" src=\"{{ asset('imgs/logo_final_v1_osc.svg') }}\"/>  
\t</div>
\t</section>
\t\t<div class=\"pageTitle\">
\t\t\t<h2>
\t\t\t\t{{ template.getFeaturedProductsTitle() }}\t\t
\t\t\t</h2>
\t\t</div>
\t<section id='productsShowcase'>
\t\t<div class=\"col-xs-12 col-md-10 col-md-offset-1\">
\t\t\t{% for product in products %}
\t\t\t<div class=\"productThumbnails col-xs-6 col-md-6 col-lg-4\">
\t\t\t\t<div class='prodThumbInside'>
\t\t\t\t\t<div class=\"productThumbnailsHeadings\">
\t\t\t\t\t\t<h4>{{ product.getName() }}</h4>
\t\t\t\t\t</div> 
\t\t\t\t\t<a href=\"{{ path('product_information', {'farm': product.getFarm().getId(),'product': product.getId(),'presentation': product.getPresentations()|first.getId()  }) }}\">
\t\t\t\t\t\t<img src=\" {{ product.getImage() }}\">
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"{{ path('product_information', {'farm': product.getFarm().getId(),'product': product.getId(),'presentation': product.getPresentations()|first.getId() }) }}\"><p>More info/options</p></a> 
\t\t\t\t\t<div>
\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t{{ template.getProductFarmTitle() }} 
\t\t\t\t\t\t\t<a href=\"{{ path('farm_information', {'farm_id': product.getFarm().getId()}) }}\"> {{ product.getFarm().getName }} </a>
\t\t\t\t\t\t</center>\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t{% endfor %}
\t\t</div>
\t</section>
\t<div class='clearfix'></div>
\t<section id='siteInfoSection' class='container-fluid'>
\t\t<div class=\"row\">
\t\t\t<div id='siteInfo' class=\"col-xs-12 col-md-8\" style='background-image: url({{ template.getFarm().getImage()  }} )'></div>
\t\t\t<div id='siteInfoText' class=\"col-xs-12 col-md-4\">
\t\t\t\t<h3>
                    {{ template.getDescriptionTitle() }}
\t\t\t\t</h3>\t
\t\t\t\t<h4>
                    {{ template.getDescriptionInfo() }}
                </h4>
\t\t\t</div>
\t\t</div>
</main>
{% endblock %}", "PageBundle:Default:home.html.twig", "C:\\xampp\\htdocs\\crgc\\src\\PageBundle/Resources/views/Default/home.html.twig");
    }
}
