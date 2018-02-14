<?php

/* @Page/Default/home.html.twig */
class __TwigTemplate_2ee4664991b2236a951b48c39e35e66b34bc10e970f2349c5bc308d0a6b2ea0f extends Twig_Template
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
        $__internal_1882e5fe41c3d14abe1f05fa25f70c5d8389452599a69732f62a25d0ff97f4a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1882e5fe41c3d14abe1f05fa25f70c5d8389452599a69732f62a25d0ff97f4a2->enter($__internal_1882e5fe41c3d14abe1f05fa25f70c5d8389452599a69732f62a25d0ff97f4a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Page/Default/home.html.twig"));

        $__internal_458562b8c2e9fcd5c622898540977edf8a48a83a1d2c374734eb30683256b50c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_458562b8c2e9fcd5c622898540977edf8a48a83a1d2c374734eb30683256b50c->enter($__internal_458562b8c2e9fcd5c622898540977edf8a48a83a1d2c374734eb30683256b50c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Page/Default/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1882e5fe41c3d14abe1f05fa25f70c5d8389452599a69732f62a25d0ff97f4a2->leave($__internal_1882e5fe41c3d14abe1f05fa25f70c5d8389452599a69732f62a25d0ff97f4a2_prof);

        
        $__internal_458562b8c2e9fcd5c622898540977edf8a48a83a1d2c374734eb30683256b50c->leave($__internal_458562b8c2e9fcd5c622898540977edf8a48a83a1d2c374734eb30683256b50c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ef7fa86fe54fe324eb7badd66543c1fcd5e9276b2762d42647721b0f56eea377 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef7fa86fe54fe324eb7badd66543c1fcd5e9276b2762d42647721b0f56eea377->enter($__internal_ef7fa86fe54fe324eb7badd66543c1fcd5e9276b2762d42647721b0f56eea377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a8317453175982a1db5f619cc76351b6d932bc57afaee3057b2a6b353278a20c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8317453175982a1db5f619cc76351b6d932bc57afaee3057b2a6b353278a20c->enter($__internal_a8317453175982a1db5f619cc76351b6d932bc57afaee3057b2a6b353278a20c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CR Gourmet Coffee";
        
        $__internal_a8317453175982a1db5f619cc76351b6d932bc57afaee3057b2a6b353278a20c->leave($__internal_a8317453175982a1db5f619cc76351b6d932bc57afaee3057b2a6b353278a20c_prof);

        
        $__internal_ef7fa86fe54fe324eb7badd66543c1fcd5e9276b2762d42647721b0f56eea377->leave($__internal_ef7fa86fe54fe324eb7badd66543c1fcd5e9276b2762d42647721b0f56eea377_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2dd0f1df6b86b8cb1c508d979f46baa4ed53b7e0247b16c582eb51ba2a818424 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dd0f1df6b86b8cb1c508d979f46baa4ed53b7e0247b16c582eb51ba2a818424->enter($__internal_2dd0f1df6b86b8cb1c508d979f46baa4ed53b7e0247b16c582eb51ba2a818424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_baaebd2a6cc100b654393a2db28458b2e1ae6ed77bab4456396b0e3296da4eae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baaebd2a6cc100b654393a2db28458b2e1ae6ed77bab4456396b0e3296da4eae->enter($__internal_baaebd2a6cc100b654393a2db28458b2e1ae6ed77bab4456396b0e3296da4eae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/css/product.css"), "html", null, true);
        echo "\" />";
        
        $__internal_baaebd2a6cc100b654393a2db28458b2e1ae6ed77bab4456396b0e3296da4eae->leave($__internal_baaebd2a6cc100b654393a2db28458b2e1ae6ed77bab4456396b0e3296da4eae_prof);

        
        $__internal_2dd0f1df6b86b8cb1c508d979f46baa4ed53b7e0247b16c582eb51ba2a818424->leave($__internal_2dd0f1df6b86b8cb1c508d979f46baa4ed53b7e0247b16c582eb51ba2a818424_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_145d7e213c99762c013103fb7a3e7c74a8dfee47223c8cc1697620a3ccd5f038 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_145d7e213c99762c013103fb7a3e7c74a8dfee47223c8cc1697620a3ccd5f038->enter($__internal_145d7e213c99762c013103fb7a3e7c74a8dfee47223c8cc1697620a3ccd5f038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_01dfae415cdd38b373b9422b05cab02ef4483e81c81d52bc46e13b1b18305377 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01dfae415cdd38b373b9422b05cab02ef4483e81c81d52bc46e13b1b18305377->enter($__internal_01dfae415cdd38b373b9422b05cab02ef4483e81c81d52bc46e13b1b18305377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_01dfae415cdd38b373b9422b05cab02ef4483e81c81d52bc46e13b1b18305377->leave($__internal_01dfae415cdd38b373b9422b05cab02ef4483e81c81d52bc46e13b1b18305377_prof);

        
        $__internal_145d7e213c99762c013103fb7a3e7c74a8dfee47223c8cc1697620a3ccd5f038->leave($__internal_145d7e213c99762c013103fb7a3e7c74a8dfee47223c8cc1697620a3ccd5f038_prof);

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
{% endblock %}", "@Page/Default/home.html.twig", "C:\\xampp\\htdocs\\src\\PageBundle\\Resources\\views\\Default\\home.html.twig");
    }
}
