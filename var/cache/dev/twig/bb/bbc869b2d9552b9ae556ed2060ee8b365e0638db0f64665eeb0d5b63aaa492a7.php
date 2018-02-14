<?php

/* PageBundle:Default:home.html.twig */
class __TwigTemplate_561cc89b2dc2d88e54414446e69cccf4b456242f2d298f941c82dfde4335b3d2 extends Twig_Template
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
        $__internal_92dba57455a4d5905884dd482c81ac546938bafa09a6a04198bc2a30d1eb1ce7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92dba57455a4d5905884dd482c81ac546938bafa09a6a04198bc2a30d1eb1ce7->enter($__internal_92dba57455a4d5905884dd482c81ac546938bafa09a6a04198bc2a30d1eb1ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:home.html.twig"));

        $__internal_33b4f47774bc0f36765f8939107d13ea21c6a229cc51d5f8e8a20e6d7d36505c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33b4f47774bc0f36765f8939107d13ea21c6a229cc51d5f8e8a20e6d7d36505c->enter($__internal_33b4f47774bc0f36765f8939107d13ea21c6a229cc51d5f8e8a20e6d7d36505c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92dba57455a4d5905884dd482c81ac546938bafa09a6a04198bc2a30d1eb1ce7->leave($__internal_92dba57455a4d5905884dd482c81ac546938bafa09a6a04198bc2a30d1eb1ce7_prof);

        
        $__internal_33b4f47774bc0f36765f8939107d13ea21c6a229cc51d5f8e8a20e6d7d36505c->leave($__internal_33b4f47774bc0f36765f8939107d13ea21c6a229cc51d5f8e8a20e6d7d36505c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_87cdbd47e5d45410529d7ecb12ed2e0a03a26f478696b6ce7b80e2db4fdbc17e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87cdbd47e5d45410529d7ecb12ed2e0a03a26f478696b6ce7b80e2db4fdbc17e->enter($__internal_87cdbd47e5d45410529d7ecb12ed2e0a03a26f478696b6ce7b80e2db4fdbc17e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_66c61e561182a560bc97767db15c9ac25e6ff5b7cd845956b237fc7cffff07ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66c61e561182a560bc97767db15c9ac25e6ff5b7cd845956b237fc7cffff07ec->enter($__internal_66c61e561182a560bc97767db15c9ac25e6ff5b7cd845956b237fc7cffff07ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CR Gourmet Coffee";
        
        $__internal_66c61e561182a560bc97767db15c9ac25e6ff5b7cd845956b237fc7cffff07ec->leave($__internal_66c61e561182a560bc97767db15c9ac25e6ff5b7cd845956b237fc7cffff07ec_prof);

        
        $__internal_87cdbd47e5d45410529d7ecb12ed2e0a03a26f478696b6ce7b80e2db4fdbc17e->leave($__internal_87cdbd47e5d45410529d7ecb12ed2e0a03a26f478696b6ce7b80e2db4fdbc17e_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0ddfbe84c1e3421a52e41d66bfcd8e3b866d108afcb85a7f74ac49a7890545ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ddfbe84c1e3421a52e41d66bfcd8e3b866d108afcb85a7f74ac49a7890545ab->enter($__internal_0ddfbe84c1e3421a52e41d66bfcd8e3b866d108afcb85a7f74ac49a7890545ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_77debc18afcce64bb342e3611f0b9406f26f62bc09ba94bc2e7e600acc01bf82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77debc18afcce64bb342e3611f0b9406f26f62bc09ba94bc2e7e600acc01bf82->enter($__internal_77debc18afcce64bb342e3611f0b9406f26f62bc09ba94bc2e7e600acc01bf82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/css/product.css"), "html", null, true);
        echo "\" />";
        
        $__internal_77debc18afcce64bb342e3611f0b9406f26f62bc09ba94bc2e7e600acc01bf82->leave($__internal_77debc18afcce64bb342e3611f0b9406f26f62bc09ba94bc2e7e600acc01bf82_prof);

        
        $__internal_0ddfbe84c1e3421a52e41d66bfcd8e3b866d108afcb85a7f74ac49a7890545ab->leave($__internal_0ddfbe84c1e3421a52e41d66bfcd8e3b866d108afcb85a7f74ac49a7890545ab_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_eceee389c99552e859003ff0d691820689c1085d36f74bad1be28800381b670d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eceee389c99552e859003ff0d691820689c1085d36f74bad1be28800381b670d->enter($__internal_eceee389c99552e859003ff0d691820689c1085d36f74bad1be28800381b670d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1117949a992e7745b19f9c94969fb74a8dbd75579aea8795543e610d7abe6db5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1117949a992e7745b19f9c94969fb74a8dbd75579aea8795543e610d7abe6db5->enter($__internal_1117949a992e7745b19f9c94969fb74a8dbd75579aea8795543e610d7abe6db5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<main>
\t\t<section id='mainBanner'>
\t\t\t<div id='banner' style='background-image: url( ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getBannerImage", array(), "method"), "html", null, true);
        echo " )'>
\t\t\t<div style=\" font-size: 250%; color:white;\">
\t\t\t\t</br>
\t\t\t\t<p>UNDER DEVELOPMENT</p>
\t\t\t\t<p>THIS SITE IS NOT YET OPERATIONAL</p>
\t\t\t</div>\t
\t\t\t</div>
\t\t</section>
\t\t<div class='clearfix'></div>
\t\t<center>
\t\t\t<h2>
\t\t\t\t";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getFeaturedProductsTitle", array(), "method"), "html", null, true);
        echo "\t\t
\t\t\t</h2>
\t\t</center>
\t\t<section id='productsShowcase'>
\t\t\t<div class=\"col-xs-12 col-md-10 col-md-offset-1\">
\t\t\t\t";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 28
            echo "\t\t\t\t<div class=\"productThumbnails col-xs-6 col-md-6 col-lg-4\">
\t\t\t\t\t<div class='prodThumbInside'>
\t\t\t\t\t\t<div class=\"productThumbnailsHeadings\">
\t\t\t\t\t\t\t<h4>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "getName", array(), "method"), "html", null, true);
            echo "</h4>
\t\t\t\t\t\t</div> 
\t\t\t\t\t\t<a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_information", array("farm" => $this->getAttribute($this->getAttribute($context["product"], "getFarm", array(), "method"), "getId", array(), "method"), "product" => $this->getAttribute($context["product"], "getId", array(), "method"), "presentation" => $this->getAttribute(twig_first($this->env, $this->getAttribute($context["product"], "getPresentations", array(), "method")), "getId", array(), "method"))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<img src=\" ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "getImage", array(), "method"), "html", null, true);
            echo "\">
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getProductFarmTitle", array(), "method"), "html", null, true);
            echo " 
\t\t\t\t\t\t\t\t<a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("farm_information", array("farm_id" => $this->getAttribute($this->getAttribute($context["product"], "getFarm", array(), "method"), "getId", array(), "method"))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["product"], "getFarm", array(), "method"), "getName", array()), "html", null, true);
            echo " </a>
\t\t\t\t\t\t\t</center>\t\t\t\t\t\t
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "\t\t\t</div>
\t\t</section>
\t\t<div class='clearfix'></div>
\t\t<section id='siteInfoSection' class='container-fluid'>
\t\t\t<div class=\"row\">
\t\t\t\t<div id='siteInfo' class=\"col-xs-12 col-md-8\" style='background-image: url(";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getFarm", array(), "method"), "getImage", array(), "method"), "html", null, true);
        echo " )'></div>
\t\t\t\t<div id='siteInfoText' class=\"col-xs-12 col-md-4\">
\t\t\t\t\t<h3>
                        ";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getDescriptionTitle", array(), "method"), "html", null, true);
        echo "
\t\t\t\t\t</h3>\t
\t\t\t\t\t<h4>
                        ";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getDescriptionInfo", array(), "method"), "html", null, true);
        echo "
                    </h4>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t</main>
";
        
        $__internal_1117949a992e7745b19f9c94969fb74a8dbd75579aea8795543e610d7abe6db5->leave($__internal_1117949a992e7745b19f9c94969fb74a8dbd75579aea8795543e610d7abe6db5_prof);

        
        $__internal_eceee389c99552e859003ff0d691820689c1085d36f74bad1be28800381b670d->leave($__internal_eceee389c99552e859003ff0d691820689c1085d36f74bad1be28800381b670d_prof);

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
        return array (  182 => 56,  176 => 53,  170 => 50,  163 => 45,  149 => 39,  145 => 38,  138 => 34,  134 => 33,  129 => 31,  124 => 28,  120 => 27,  112 => 22,  98 => 11,  94 => 9,  85 => 8,  74 => 7,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source(" {% extends \"layout.html.twig\" %}

{% block title%}CR Gourmet Coffee{% endblock %}

{% block stylesheets%}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('/web/public/css/product.css')}}\" />{% endblock %}
{% block body %}
<main>
\t\t<section id='mainBanner'>
\t\t\t<div id='banner' style='background-image: url( {{ template.getBannerImage() }} )'>
\t\t\t<div style=\" font-size: 250%; color:white;\">
\t\t\t\t</br>
\t\t\t\t<p>UNDER DEVELOPMENT</p>
\t\t\t\t<p>THIS SITE IS NOT YET OPERATIONAL</p>
\t\t\t</div>\t
\t\t\t</div>
\t\t</section>
\t\t<div class='clearfix'></div>
\t\t<center>
\t\t\t<h2>
\t\t\t\t{{ template.getFeaturedProductsTitle() }}\t\t
\t\t\t</h2>
\t\t</center>
\t\t<section id='productsShowcase'>
\t\t\t<div class=\"col-xs-12 col-md-10 col-md-offset-1\">
\t\t\t\t{% for product in products %}
\t\t\t\t<div class=\"productThumbnails col-xs-6 col-md-6 col-lg-4\">
\t\t\t\t\t<div class='prodThumbInside'>
\t\t\t\t\t\t<div class=\"productThumbnailsHeadings\">
\t\t\t\t\t\t\t<h4>{{ product.getName() }}</h4>
\t\t\t\t\t\t</div> 
\t\t\t\t\t\t<a href=\"{{ path('product_information', {'farm': product.getFarm().getId(),'product': product.getId(),'presentation': product.getPresentations()|first.getId()  }) }}\">
\t\t\t\t\t\t\t<img src=\" {{ product.getImage() }}\">
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t{{ template.getProductFarmTitle() }} 
\t\t\t\t\t\t\t\t<a href=\"{{ path('farm_information', {'farm_id': product.getFarm().getId()}) }}\"> {{ product.getFarm().getName }} </a>
\t\t\t\t\t\t\t</center>\t\t\t\t\t\t
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t</section>
\t\t<div class='clearfix'></div>
\t\t<section id='siteInfoSection' class='container-fluid'>
\t\t\t<div class=\"row\">
\t\t\t\t<div id='siteInfo' class=\"col-xs-12 col-md-8\" style='background-image: url({{ template.getFarm().getImage()  }} )'></div>
\t\t\t\t<div id='siteInfoText' class=\"col-xs-12 col-md-4\">
\t\t\t\t\t<h3>
                        {{ template.getDescriptionTitle() }}
\t\t\t\t\t</h3>\t
\t\t\t\t\t<h4>
                        {{ template.getDescriptionInfo() }}
                    </h4>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t</main>
{% endblock %}", "PageBundle:Default:home.html.twig", "C:\\xampp\\htdocs\\src\\PageBundle/Resources/views/Default/home.html.twig");
    }
}
