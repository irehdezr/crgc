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
        $__internal_a6ef6eeb30f2ed3de47974f7b347ed4c8403993e20ad6327e36321aca4c04f5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6ef6eeb30f2ed3de47974f7b347ed4c8403993e20ad6327e36321aca4c04f5c->enter($__internal_a6ef6eeb30f2ed3de47974f7b347ed4c8403993e20ad6327e36321aca4c04f5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:home.html.twig"));

        $__internal_48c63c4a89fddcb5f414f554191fead417d6bf9e16b542f9817f088a368fef4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48c63c4a89fddcb5f414f554191fead417d6bf9e16b542f9817f088a368fef4c->enter($__internal_48c63c4a89fddcb5f414f554191fead417d6bf9e16b542f9817f088a368fef4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6ef6eeb30f2ed3de47974f7b347ed4c8403993e20ad6327e36321aca4c04f5c->leave($__internal_a6ef6eeb30f2ed3de47974f7b347ed4c8403993e20ad6327e36321aca4c04f5c_prof);

        
        $__internal_48c63c4a89fddcb5f414f554191fead417d6bf9e16b542f9817f088a368fef4c->leave($__internal_48c63c4a89fddcb5f414f554191fead417d6bf9e16b542f9817f088a368fef4c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_eba252d1f274b72142f90e1411028b0cbc849082c89e6855d79e1bcd0bf7dd29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eba252d1f274b72142f90e1411028b0cbc849082c89e6855d79e1bcd0bf7dd29->enter($__internal_eba252d1f274b72142f90e1411028b0cbc849082c89e6855d79e1bcd0bf7dd29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_014fc6a5ec337a681349f26c0610a908898eacf0a3f080f952dc5770911ad01e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_014fc6a5ec337a681349f26c0610a908898eacf0a3f080f952dc5770911ad01e->enter($__internal_014fc6a5ec337a681349f26c0610a908898eacf0a3f080f952dc5770911ad01e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CR Gourmet Coffee";
        
        $__internal_014fc6a5ec337a681349f26c0610a908898eacf0a3f080f952dc5770911ad01e->leave($__internal_014fc6a5ec337a681349f26c0610a908898eacf0a3f080f952dc5770911ad01e_prof);

        
        $__internal_eba252d1f274b72142f90e1411028b0cbc849082c89e6855d79e1bcd0bf7dd29->leave($__internal_eba252d1f274b72142f90e1411028b0cbc849082c89e6855d79e1bcd0bf7dd29_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_87de0f0d25e34c493150ecc16bf79d05a314b01e47f6734bc0cf0a983963fd3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87de0f0d25e34c493150ecc16bf79d05a314b01e47f6734bc0cf0a983963fd3d->enter($__internal_87de0f0d25e34c493150ecc16bf79d05a314b01e47f6734bc0cf0a983963fd3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4288c93ba76dfaf46c04d46514c9174bebdbdca35216703ddf7dcada36fbf54c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4288c93ba76dfaf46c04d46514c9174bebdbdca35216703ddf7dcada36fbf54c->enter($__internal_4288c93ba76dfaf46c04d46514c9174bebdbdca35216703ddf7dcada36fbf54c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/css/product.css"), "html", null, true);
        echo "\" />";
        
        $__internal_4288c93ba76dfaf46c04d46514c9174bebdbdca35216703ddf7dcada36fbf54c->leave($__internal_4288c93ba76dfaf46c04d46514c9174bebdbdca35216703ddf7dcada36fbf54c_prof);

        
        $__internal_87de0f0d25e34c493150ecc16bf79d05a314b01e47f6734bc0cf0a983963fd3d->leave($__internal_87de0f0d25e34c493150ecc16bf79d05a314b01e47f6734bc0cf0a983963fd3d_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_5b2c101f31665c892b9b7c5f877a5f0410a0d8c9ae2319b0b93fdc9e91c91296 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b2c101f31665c892b9b7c5f877a5f0410a0d8c9ae2319b0b93fdc9e91c91296->enter($__internal_5b2c101f31665c892b9b7c5f877a5f0410a0d8c9ae2319b0b93fdc9e91c91296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c13789f432970167add818a69931a649349a3bc37e3edb220d99284f3e3a028f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c13789f432970167add818a69931a649349a3bc37e3edb220d99284f3e3a028f->enter($__internal_c13789f432970167add818a69931a649349a3bc37e3edb220d99284f3e3a028f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
\t\t<center>
\t\t\t<h2>
\t\t\t\t";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getFeaturedProductsTitle", array(), "method"), "html", null, true);
        echo "\t\t
\t\t\t</h2>
\t\t</center>
\t\t<section id='productsShowcase'>
\t\t\t<div class=\"col-xs-12 col-md-10 col-md-offset-1\">
\t\t\t\t";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 23
            echo "\t\t\t\t<div class=\"productThumbnails col-xs-6 col-md-6 col-lg-4\">
\t\t\t\t\t<div class='prodThumbInside'>
\t\t\t\t\t\t<div class=\"productThumbnailsHeadings\">
\t\t\t\t\t\t\t<h4>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "getName", array(), "method"), "html", null, true);
            echo "</h4>
\t\t\t\t\t\t</div> 
\t\t\t\t\t\t<a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_information", array("farm" => $this->getAttribute($this->getAttribute($context["product"], "getFarm", array(), "method"), "getId", array(), "method"), "product" => $this->getAttribute($context["product"], "getId", array(), "method"), "presentation" => $this->getAttribute(twig_first($this->env, $this->getAttribute($context["product"], "getPresentations", array(), "method")), "getId", array(), "method"))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<img src=\" ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "getImage", array(), "method"), "html", null, true);
            echo "\">
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getProductFarmTitle", array(), "method"), "html", null, true);
            echo " 
\t\t\t\t\t\t\t\t<a href=\"";
            // line 34
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
        // line 40
        echo "\t\t\t</div>
\t\t</section>
\t\t<div class='clearfix'></div>
\t\t<section id='siteInfoSection' class='container-fluid'>
\t\t\t<div class=\"row\">
\t\t\t\t<div id='siteInfo' class=\"col-xs-12 col-md-8\" style='background-image: url(";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getFarm", array(), "method"), "getImage", array(), "method"), "html", null, true);
        echo " )'></div>
\t\t\t\t<div id='siteInfoText' class=\"col-xs-12 col-md-4\">
\t\t\t\t\t<h3>
                        ";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getDescriptionTitle", array(), "method"), "html", null, true);
        echo "
\t\t\t\t\t</h3>\t
\t\t\t\t\t<h4>
                        ";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getDescriptionInfo", array(), "method"), "html", null, true);
        echo "
                    </h4>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t</main>
";
        
        $__internal_c13789f432970167add818a69931a649349a3bc37e3edb220d99284f3e3a028f->leave($__internal_c13789f432970167add818a69931a649349a3bc37e3edb220d99284f3e3a028f_prof);

        
        $__internal_5b2c101f31665c892b9b7c5f877a5f0410a0d8c9ae2319b0b93fdc9e91c91296->leave($__internal_5b2c101f31665c892b9b7c5f877a5f0410a0d8c9ae2319b0b93fdc9e91c91296_prof);

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
        return array (  177 => 51,  171 => 48,  165 => 45,  158 => 40,  144 => 34,  140 => 33,  133 => 29,  129 => 28,  124 => 26,  119 => 23,  115 => 22,  107 => 17,  98 => 11,  94 => 9,  85 => 8,  74 => 7,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
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
