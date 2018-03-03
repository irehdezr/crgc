<?php

/* PageBundle:Default:home.html.twig */
class __TwigTemplate_bbf156b02b1abd6e90ae62e2e8d307780a0e25884d99bcb91ee59dfcc00dcc25 extends Twig_Template
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
        $__internal_56e048d0c9a31a5d8f6fb134fdc4f94c6fd4aad335c5f0ab411b166952d32c15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56e048d0c9a31a5d8f6fb134fdc4f94c6fd4aad335c5f0ab411b166952d32c15->enter($__internal_56e048d0c9a31a5d8f6fb134fdc4f94c6fd4aad335c5f0ab411b166952d32c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56e048d0c9a31a5d8f6fb134fdc4f94c6fd4aad335c5f0ab411b166952d32c15->leave($__internal_56e048d0c9a31a5d8f6fb134fdc4f94c6fd4aad335c5f0ab411b166952d32c15_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ef6813bfd2120ec5ce63908ebf422db79ebaeb2c48093d7f3a1ff57f03704ea7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef6813bfd2120ec5ce63908ebf422db79ebaeb2c48093d7f3a1ff57f03704ea7->enter($__internal_ef6813bfd2120ec5ce63908ebf422db79ebaeb2c48093d7f3a1ff57f03704ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CR Gourmet Coffee";
        
        $__internal_ef6813bfd2120ec5ce63908ebf422db79ebaeb2c48093d7f3a1ff57f03704ea7->leave($__internal_ef6813bfd2120ec5ce63908ebf422db79ebaeb2c48093d7f3a1ff57f03704ea7_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_108bd2b1eecfab696d69bb1b75b7ee720bb2d118e5dd4f6926e0c2a244480c34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_108bd2b1eecfab696d69bb1b75b7ee720bb2d118e5dd4f6926e0c2a244480c34->enter($__internal_108bd2b1eecfab696d69bb1b75b7ee720bb2d118e5dd4f6926e0c2a244480c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/homepage.css"), "html", null, true);
        echo "\" />";
        
        $__internal_108bd2b1eecfab696d69bb1b75b7ee720bb2d118e5dd4f6926e0c2a244480c34->leave($__internal_108bd2b1eecfab696d69bb1b75b7ee720bb2d118e5dd4f6926e0c2a244480c34_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_bc2c241608c7c6c51730bb3a7e08c09a577081b3c1010b4ad6f5345a63b1a5a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc2c241608c7c6c51730bb3a7e08c09a577081b3c1010b4ad6f5345a63b1a5a4->enter($__internal_bc2c241608c7c6c51730bb3a7e08c09a577081b3c1010b4ad6f5345a63b1a5a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<main>
    <div id='banner' style='background-image: url( ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getBannerImage", array(), "method"), "html", null, true);
        echo " )'>
        <div id=\"logoSite\"> </div> 
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
\t\t\t\t\t<p>
\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getProductFarmTitle", array(), "method"), "html", null, true);
            echo " 
\t\t\t\t\t\t\t<a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("farm_information", array("farm_id" => $this->getAttribute($this->getAttribute($context["product"], "getFarm", array(), "method"), "getId", array(), "method"))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["product"], "getFarm", array(), "method"), "getName", array()), "html", null, true);
            echo " </a>
\t\t\t\t\t\t</center>\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "\t\t</div>
\t</section>
\t<div class='clearfix'></div>
\t<section id='siteInfoSection' class='container-fluid'>
\t\t<div class=\"row\">
\t\t\t<div id='siteInfo' class=\"col-xs-12 col-md-8\" style='background-image: url(";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getFarm", array(), "method"), "getImage", array(), "method"), "html", null, true);
        echo " )'></div>
\t\t\t<div id='siteInfoText' class=\"col-xs-12 col-md-4\">
\t\t\t\t<h3>
                    ";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getDescriptionTitle", array(), "method"), "html", null, true);
        echo "
\t\t\t\t</h3>\t
\t\t\t\t<h4>
                    ";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getDescriptionInfo", array(), "method"), "html", null, true);
        echo "
                </h4>
\t\t\t</div>
\t\t</div>
</main>
";
        
        $__internal_bc2c241608c7c6c51730bb3a7e08c09a577081b3c1010b4ad6f5345a63b1a5a4->leave($__internal_bc2c241608c7c6c51730bb3a7e08c09a577081b3c1010b4ad6f5345a63b1a5a4_prof);

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
        return array (  155 => 50,  149 => 47,  143 => 44,  136 => 39,  122 => 33,  118 => 32,  111 => 28,  107 => 27,  102 => 25,  97 => 22,  93 => 21,  85 => 16,  76 => 10,  73 => 9,  67 => 8,  59 => 7,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
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
        <div id=\"logoSite\"> </div> 
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
\t\t\t\t\t<p>
\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t{{ template.getProductFarmTitle() }} 
\t\t\t\t\t\t\t<a href=\"{{ path('farm_information', {'farm_id': product.getFarm().getId()}) }}\"> {{ product.getFarm().getName }} </a>
\t\t\t\t\t\t</center>\t\t\t\t\t\t
\t\t\t\t\t</p>
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
{% endblock %}", "PageBundle:Default:home.html.twig", "D:\\Carlos\\xampp\\htdocs\\crgc\\src\\PageBundle/Resources/views/Default/home.html.twig");
    }
}
