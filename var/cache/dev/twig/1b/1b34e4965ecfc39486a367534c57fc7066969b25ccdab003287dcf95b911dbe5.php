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
        $__internal_110f0f6231ada337425d5b7b8bbe3b941ffcdecfee5b44410872993260eff769 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_110f0f6231ada337425d5b7b8bbe3b941ffcdecfee5b44410872993260eff769->enter($__internal_110f0f6231ada337425d5b7b8bbe3b941ffcdecfee5b44410872993260eff769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:home.html.twig"));

        $__internal_5424292398ac5e726454ef8233b26b914ba895d4b89209e9fb86c41af8d94086 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5424292398ac5e726454ef8233b26b914ba895d4b89209e9fb86c41af8d94086->enter($__internal_5424292398ac5e726454ef8233b26b914ba895d4b89209e9fb86c41af8d94086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_110f0f6231ada337425d5b7b8bbe3b941ffcdecfee5b44410872993260eff769->leave($__internal_110f0f6231ada337425d5b7b8bbe3b941ffcdecfee5b44410872993260eff769_prof);

        
        $__internal_5424292398ac5e726454ef8233b26b914ba895d4b89209e9fb86c41af8d94086->leave($__internal_5424292398ac5e726454ef8233b26b914ba895d4b89209e9fb86c41af8d94086_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8bac8f019479c5573538a2847198ab1fdaebd7f8909647325e2c66023edea728 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bac8f019479c5573538a2847198ab1fdaebd7f8909647325e2c66023edea728->enter($__internal_8bac8f019479c5573538a2847198ab1fdaebd7f8909647325e2c66023edea728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e8cb084ee9a1258a3471be7534ae83468d5f4f04582075d1b4e89e59acffbee5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8cb084ee9a1258a3471be7534ae83468d5f4f04582075d1b4e89e59acffbee5->enter($__internal_e8cb084ee9a1258a3471be7534ae83468d5f4f04582075d1b4e89e59acffbee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CR Gourmet Coffee";
        
        $__internal_e8cb084ee9a1258a3471be7534ae83468d5f4f04582075d1b4e89e59acffbee5->leave($__internal_e8cb084ee9a1258a3471be7534ae83468d5f4f04582075d1b4e89e59acffbee5_prof);

        
        $__internal_8bac8f019479c5573538a2847198ab1fdaebd7f8909647325e2c66023edea728->leave($__internal_8bac8f019479c5573538a2847198ab1fdaebd7f8909647325e2c66023edea728_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0958bc62cee340188dd4d3ea13ea2ec20fd7d2ee2847243ddf0c9091d2aec9b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0958bc62cee340188dd4d3ea13ea2ec20fd7d2ee2847243ddf0c9091d2aec9b1->enter($__internal_0958bc62cee340188dd4d3ea13ea2ec20fd7d2ee2847243ddf0c9091d2aec9b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_722388240cea239953acd06d23f20f835f8823209d0fb18235cb22ec09988ae7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_722388240cea239953acd06d23f20f835f8823209d0fb18235cb22ec09988ae7->enter($__internal_722388240cea239953acd06d23f20f835f8823209d0fb18235cb22ec09988ae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/homepage.css"), "html", null, true);
        echo "\" />";
        
        $__internal_722388240cea239953acd06d23f20f835f8823209d0fb18235cb22ec09988ae7->leave($__internal_722388240cea239953acd06d23f20f835f8823209d0fb18235cb22ec09988ae7_prof);

        
        $__internal_0958bc62cee340188dd4d3ea13ea2ec20fd7d2ee2847243ddf0c9091d2aec9b1->leave($__internal_0958bc62cee340188dd4d3ea13ea2ec20fd7d2ee2847243ddf0c9091d2aec9b1_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_097650f7c304d6dfbaace6be0d221ea18a4f5076bba13e2835a766af5bd68057 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_097650f7c304d6dfbaace6be0d221ea18a4f5076bba13e2835a766af5bd68057->enter($__internal_097650f7c304d6dfbaace6be0d221ea18a4f5076bba13e2835a766af5bd68057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7c5f175548712a4a3b4ebce790632ad684492f99c6a0280250bd2911544af39b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c5f175548712a4a3b4ebce790632ad684492f99c6a0280250bd2911544af39b->enter($__internal_7c5f175548712a4a3b4ebce790632ad684492f99c6a0280250bd2911544af39b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7c5f175548712a4a3b4ebce790632ad684492f99c6a0280250bd2911544af39b->leave($__internal_7c5f175548712a4a3b4ebce790632ad684492f99c6a0280250bd2911544af39b_prof);

        
        $__internal_097650f7c304d6dfbaace6be0d221ea18a4f5076bba13e2835a766af5bd68057->leave($__internal_097650f7c304d6dfbaace6be0d221ea18a4f5076bba13e2835a766af5bd68057_prof);

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
