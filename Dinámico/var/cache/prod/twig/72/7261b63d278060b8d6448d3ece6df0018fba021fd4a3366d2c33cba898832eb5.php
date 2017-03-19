<?php

/* PageBundle:Default:home.html.twig */
class __TwigTemplate_dbb5135cfafe1f0ddba47544d45756e16a6296fcd54c37b911e90a1489bdec23 extends Twig_Template
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
        $__internal_cc153df2483bbe1c6deb3270c99a399e3e12fe9827b961917e88579a592d9dba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc153df2483bbe1c6deb3270c99a399e3e12fe9827b961917e88579a592d9dba->enter($__internal_cc153df2483bbe1c6deb3270c99a399e3e12fe9827b961917e88579a592d9dba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc153df2483bbe1c6deb3270c99a399e3e12fe9827b961917e88579a592d9dba->leave($__internal_cc153df2483bbe1c6deb3270c99a399e3e12fe9827b961917e88579a592d9dba_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_19812ea153dba84cb96843d5ce951262587364a5c8e2279a2b406f98837f8123 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19812ea153dba84cb96843d5ce951262587364a5c8e2279a2b406f98837f8123->enter($__internal_19812ea153dba84cb96843d5ce951262587364a5c8e2279a2b406f98837f8123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CR Gourmet Coffee";
        
        $__internal_19812ea153dba84cb96843d5ce951262587364a5c8e2279a2b406f98837f8123->leave($__internal_19812ea153dba84cb96843d5ce951262587364a5c8e2279a2b406f98837f8123_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_92a47fa9cfb2a0847afab697eedb0ac3104517b57e0b347ad83185ef1c24bdb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92a47fa9cfb2a0847afab697eedb0ac3104517b57e0b347ad83185ef1c24bdb7->enter($__internal_92a47fa9cfb2a0847afab697eedb0ac3104517b57e0b347ad83185ef1c24bdb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/product.css"), "html", null, true);
        echo "\" />";
        
        $__internal_92a47fa9cfb2a0847afab697eedb0ac3104517b57e0b347ad83185ef1c24bdb7->leave($__internal_92a47fa9cfb2a0847afab697eedb0ac3104517b57e0b347ad83185ef1c24bdb7_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_6914892a8e4e700d30816c0d1718130b0630a8617f188ea199bd9a95f7708a46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6914892a8e4e700d30816c0d1718130b0630a8617f188ea199bd9a95f7708a46->enter($__internal_6914892a8e4e700d30816c0d1718130b0630a8617f188ea199bd9a95f7708a46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<main>
\t\t<section id='mainBanner'>
\t\t\t<div id='banner' style='background-image: url( ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getBannerImage", array(), "method"), "html", null, true);
        echo " )'>
\t\t\t</div>
\t\t</section>
\t\t<div class='clearfix'></div>
\t\t<center><h2>Featured Products</h2></center>
\t\t<section id='productsShowcase'>
\t\t\t<div class=\"col-xs-12 col-md-10 col-md-offset-1\">
\t\t\t\t";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 19
            echo "\t\t\t\t<div class=\"productThumbnails col-xs-6 col-md-6 col-lg-4\">
\t\t\t\t\t<div class='prodThumbInside'>
\t\t\t\t\t\t<div class=\"productThumbnailsHeadings\">
\t\t\t\t\t\t\t<h4>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "getName", array(), "method"), "html", null, true);
            echo "</h4>
\t\t\t\t\t\t</div> 
\t\t\t\t\t\t<a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_information", array("farm" => $this->getAttribute($this->getAttribute($context["product"], "getFarm", array(), "method"), "getId", array(), "method"), "product" => $this->getAttribute(            // line 25
$context["product"], "getId", array(), "method"), "presentation" => 1)), "html", null, true);
            // line 26
            echo "\">
\t\t\t\t\t\t<img src=\" ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "getImage", array(), "method"), "html", null, true);
            echo "\">
\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "\t\t\t</div>
\t\t</section>
\t\t<div class='clearfix'></div>
\t\t<section id='siteInfoSection' class='container-fluid'>
\t\t\t<div class=\"row\">
\t\t\t\t<div id='siteInfo' class=\"col-xs-12 col-md-8\" style='background-image: url(";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getFarm", array(), "method"), "getImage", array(), "method"), "html", null, true);
        echo " )'></div>
\t\t\t\t<div id='siteInfoText' class=\"col-xs-12 col-md-4\">
\t\t\t\t\t<h3>
                        ";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getDescriptionTitle", array(), "method"), "html", null, true);
        echo "
\t\t\t\t\t</h3>\t
\t\t\t\t\t<h4>
                        ";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getDescriptionInfo", array(), "method"), "html", null, true);
        echo "
                    </h4>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t</main>
";
        
        $__internal_6914892a8e4e700d30816c0d1718130b0630a8617f188ea199bd9a95f7708a46->leave($__internal_6914892a8e4e700d30816c0d1718130b0630a8617f188ea199bd9a95f7708a46_prof);

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
        return array (  137 => 43,  131 => 40,  125 => 37,  118 => 32,  107 => 27,  104 => 26,  102 => 25,  101 => 24,  96 => 22,  91 => 19,  87 => 18,  77 => 11,  73 => 9,  67 => 8,  59 => 7,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
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
    <link rel=\"stylesheet\" href=\"{{ asset('public/css/product.css')}}\" />{% endblock %}
{% block body %}
<main>
\t\t<section id='mainBanner'>
\t\t\t<div id='banner' style='background-image: url( {{ template.getBannerImage() }} )'>
\t\t\t</div>
\t\t</section>
\t\t<div class='clearfix'></div>
\t\t<center><h2>Featured Products</h2></center>
\t\t<section id='productsShowcase'>
\t\t\t<div class=\"col-xs-12 col-md-10 col-md-offset-1\">
\t\t\t\t{% for product in products %}
\t\t\t\t<div class=\"productThumbnails col-xs-6 col-md-6 col-lg-4\">
\t\t\t\t\t<div class='prodThumbInside'>
\t\t\t\t\t\t<div class=\"productThumbnailsHeadings\">
\t\t\t\t\t\t\t<h4>{{ product.getName() }}</h4>
\t\t\t\t\t\t</div> 
\t\t\t\t\t\t<a href=\"{{ path('product_information', {'farm': product.getFarm().getId(),
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'product': product.getId(),
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'presentation': 1 }) }}\">
\t\t\t\t\t\t<img src=\" {{ product.getImage() }}\">
\t\t\t\t\t</a>
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
