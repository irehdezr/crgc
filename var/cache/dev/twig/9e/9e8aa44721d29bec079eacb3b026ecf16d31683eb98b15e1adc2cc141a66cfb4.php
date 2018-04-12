<?php

/* PageBundle:Default:home.html.twig */
class __TwigTemplate_c239d0b997b90499bfa531043b24b16cfc8ccc0e3a2c1187b8da4596569d8dd0 extends Twig_Template
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
        $__internal_df12d9de859c9af8d24ebf1611e809d025305d01104ac07230e7b47d77b30cbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df12d9de859c9af8d24ebf1611e809d025305d01104ac07230e7b47d77b30cbd->enter($__internal_df12d9de859c9af8d24ebf1611e809d025305d01104ac07230e7b47d77b30cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:home.html.twig"));

        $__internal_afbfddf36f4de0ffef10abdded30e26bf5a32992569bc41d95a26150b17bef07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afbfddf36f4de0ffef10abdded30e26bf5a32992569bc41d95a26150b17bef07->enter($__internal_afbfddf36f4de0ffef10abdded30e26bf5a32992569bc41d95a26150b17bef07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df12d9de859c9af8d24ebf1611e809d025305d01104ac07230e7b47d77b30cbd->leave($__internal_df12d9de859c9af8d24ebf1611e809d025305d01104ac07230e7b47d77b30cbd_prof);

        
        $__internal_afbfddf36f4de0ffef10abdded30e26bf5a32992569bc41d95a26150b17bef07->leave($__internal_afbfddf36f4de0ffef10abdded30e26bf5a32992569bc41d95a26150b17bef07_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3765e54a9c8eb5f41fa2558e08e0a3915ea505965a15fe57ae4c280264648445 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3765e54a9c8eb5f41fa2558e08e0a3915ea505965a15fe57ae4c280264648445->enter($__internal_3765e54a9c8eb5f41fa2558e08e0a3915ea505965a15fe57ae4c280264648445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_56371a579ae5c7d90fc1d3e26f1187eae08138206900fb96fbe30d3bdc00b5cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56371a579ae5c7d90fc1d3e26f1187eae08138206900fb96fbe30d3bdc00b5cc->enter($__internal_56371a579ae5c7d90fc1d3e26f1187eae08138206900fb96fbe30d3bdc00b5cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CR Gourmet Coffee";
        
        $__internal_56371a579ae5c7d90fc1d3e26f1187eae08138206900fb96fbe30d3bdc00b5cc->leave($__internal_56371a579ae5c7d90fc1d3e26f1187eae08138206900fb96fbe30d3bdc00b5cc_prof);

        
        $__internal_3765e54a9c8eb5f41fa2558e08e0a3915ea505965a15fe57ae4c280264648445->leave($__internal_3765e54a9c8eb5f41fa2558e08e0a3915ea505965a15fe57ae4c280264648445_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_632f9864ec5522f003a1d5411bb28e2102db3c7a5a80bf2a06809240ff815368 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_632f9864ec5522f003a1d5411bb28e2102db3c7a5a80bf2a06809240ff815368->enter($__internal_632f9864ec5522f003a1d5411bb28e2102db3c7a5a80bf2a06809240ff815368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_bcac1717f613eb64585522c82a1f38fec6096e1e58eb719ce1ebfd6488b003dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcac1717f613eb64585522c82a1f38fec6096e1e58eb719ce1ebfd6488b003dd->enter($__internal_bcac1717f613eb64585522c82a1f38fec6096e1e58eb719ce1ebfd6488b003dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/homepage.css"), "html", null, true);
        echo "\" />";
        
        $__internal_bcac1717f613eb64585522c82a1f38fec6096e1e58eb719ce1ebfd6488b003dd->leave($__internal_bcac1717f613eb64585522c82a1f38fec6096e1e58eb719ce1ebfd6488b003dd_prof);

        
        $__internal_632f9864ec5522f003a1d5411bb28e2102db3c7a5a80bf2a06809240ff815368->leave($__internal_632f9864ec5522f003a1d5411bb28e2102db3c7a5a80bf2a06809240ff815368_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_2fe45bb2e33ecf4230882d844776d072801d1126350ed959a2e3b0d02f4a05d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fe45bb2e33ecf4230882d844776d072801d1126350ed959a2e3b0d02f4a05d3->enter($__internal_2fe45bb2e33ecf4230882d844776d072801d1126350ed959a2e3b0d02f4a05d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9ba182371e80fc7af0f1ec5224b024fa13aecdfcfe0b80a737c9b4da1334676f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ba182371e80fc7af0f1ec5224b024fa13aecdfcfe0b80a737c9b4da1334676f->enter($__internal_9ba182371e80fc7af0f1ec5224b024fa13aecdfcfe0b80a737c9b4da1334676f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9ba182371e80fc7af0f1ec5224b024fa13aecdfcfe0b80a737c9b4da1334676f->leave($__internal_9ba182371e80fc7af0f1ec5224b024fa13aecdfcfe0b80a737c9b4da1334676f_prof);

        
        $__internal_2fe45bb2e33ecf4230882d844776d072801d1126350ed959a2e3b0d02f4a05d3->leave($__internal_2fe45bb2e33ecf4230882d844776d072801d1126350ed959a2e3b0d02f4a05d3_prof);

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
{% endblock %}", "PageBundle:Default:home.html.twig", "C:\\xampp\\htdocs\\crgc\\var\\cache\\dev/../../../src/PageBundle/Resources/views/Default/home.html.twig");
    }
}
