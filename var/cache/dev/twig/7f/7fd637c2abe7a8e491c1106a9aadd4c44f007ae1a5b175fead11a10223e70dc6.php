<?php

/* @Page/Default/home.html.twig */
class __TwigTemplate_88139c3f5f078cb47769153fc34f3dc19eafa9076d793c442db85a53ec7c7d55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "@Page/Default/home.html.twig", 1);
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
        $__internal_13f43c46096135d55b63d26570983f3e6d8c212b5bbe099cb78ad974ef8f6618 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13f43c46096135d55b63d26570983f3e6d8c212b5bbe099cb78ad974ef8f6618->enter($__internal_13f43c46096135d55b63d26570983f3e6d8c212b5bbe099cb78ad974ef8f6618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Page/Default/home.html.twig"));

        $__internal_5dcfa6224859aebad5a46c700cf87aa3f543df8c8ae826a2d1e6c7de6c0539c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dcfa6224859aebad5a46c700cf87aa3f543df8c8ae826a2d1e6c7de6c0539c6->enter($__internal_5dcfa6224859aebad5a46c700cf87aa3f543df8c8ae826a2d1e6c7de6c0539c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Page/Default/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13f43c46096135d55b63d26570983f3e6d8c212b5bbe099cb78ad974ef8f6618->leave($__internal_13f43c46096135d55b63d26570983f3e6d8c212b5bbe099cb78ad974ef8f6618_prof);

        
        $__internal_5dcfa6224859aebad5a46c700cf87aa3f543df8c8ae826a2d1e6c7de6c0539c6->leave($__internal_5dcfa6224859aebad5a46c700cf87aa3f543df8c8ae826a2d1e6c7de6c0539c6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6596f36eb532133beadbc8221d7acfea1558d91accefdb27ae3f40d2f77e69a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6596f36eb532133beadbc8221d7acfea1558d91accefdb27ae3f40d2f77e69a0->enter($__internal_6596f36eb532133beadbc8221d7acfea1558d91accefdb27ae3f40d2f77e69a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_764300329f73b1885dbebb6bd18e460879257a092ad96aea0a2ae80731243496 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_764300329f73b1885dbebb6bd18e460879257a092ad96aea0a2ae80731243496->enter($__internal_764300329f73b1885dbebb6bd18e460879257a092ad96aea0a2ae80731243496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CR Gourmet Coffee";
        
        $__internal_764300329f73b1885dbebb6bd18e460879257a092ad96aea0a2ae80731243496->leave($__internal_764300329f73b1885dbebb6bd18e460879257a092ad96aea0a2ae80731243496_prof);

        
        $__internal_6596f36eb532133beadbc8221d7acfea1558d91accefdb27ae3f40d2f77e69a0->leave($__internal_6596f36eb532133beadbc8221d7acfea1558d91accefdb27ae3f40d2f77e69a0_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4670dc721bd61953a5179d3d61ca3c5a16c0bfb48fdc8ab37d87c7b4507e3c95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4670dc721bd61953a5179d3d61ca3c5a16c0bfb48fdc8ab37d87c7b4507e3c95->enter($__internal_4670dc721bd61953a5179d3d61ca3c5a16c0bfb48fdc8ab37d87c7b4507e3c95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5b1163140cfe2a0e5814bd5ba65b3c54e498c49cf5f68e23b1a7850d7bd88e8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b1163140cfe2a0e5814bd5ba65b3c54e498c49cf5f68e23b1a7850d7bd88e8d->enter($__internal_5b1163140cfe2a0e5814bd5ba65b3c54e498c49cf5f68e23b1a7850d7bd88e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/homepage.css"), "html", null, true);
        echo "\" />";
        
        $__internal_5b1163140cfe2a0e5814bd5ba65b3c54e498c49cf5f68e23b1a7850d7bd88e8d->leave($__internal_5b1163140cfe2a0e5814bd5ba65b3c54e498c49cf5f68e23b1a7850d7bd88e8d_prof);

        
        $__internal_4670dc721bd61953a5179d3d61ca3c5a16c0bfb48fdc8ab37d87c7b4507e3c95->leave($__internal_4670dc721bd61953a5179d3d61ca3c5a16c0bfb48fdc8ab37d87c7b4507e3c95_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_42514148bddaeb7d13bf2192efdf934aecc8c678753da1efcef1fcd07858af81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42514148bddaeb7d13bf2192efdf934aecc8c678753da1efcef1fcd07858af81->enter($__internal_42514148bddaeb7d13bf2192efdf934aecc8c678753da1efcef1fcd07858af81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_98bbab8f37956c25bcf97e4202b8ad4239da5256ccf9c87e1aaa8d9c1aff3934 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98bbab8f37956c25bcf97e4202b8ad4239da5256ccf9c87e1aaa8d9c1aff3934->enter($__internal_98bbab8f37956c25bcf97e4202b8ad4239da5256ccf9c87e1aaa8d9c1aff3934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_98bbab8f37956c25bcf97e4202b8ad4239da5256ccf9c87e1aaa8d9c1aff3934->leave($__internal_98bbab8f37956c25bcf97e4202b8ad4239da5256ccf9c87e1aaa8d9c1aff3934_prof);

        
        $__internal_42514148bddaeb7d13bf2192efdf934aecc8c678753da1efcef1fcd07858af81->leave($__internal_42514148bddaeb7d13bf2192efdf934aecc8c678753da1efcef1fcd07858af81_prof);

    }

    public function getTemplateName()
    {
        return "@Page/Default/home.html.twig";
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
{% endblock %}", "@Page/Default/home.html.twig", "C:\\xampp\\htdocs\\crgc\\src\\PageBundle\\Resources\\views\\Default\\home.html.twig");
    }
}
