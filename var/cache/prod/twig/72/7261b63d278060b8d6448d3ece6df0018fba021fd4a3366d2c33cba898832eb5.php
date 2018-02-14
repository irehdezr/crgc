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
        $__internal_0d2a0538be060cf696d42a52d86b007309f4d2290088479b7e21571ef35c4f11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d2a0538be060cf696d42a52d86b007309f4d2290088479b7e21571ef35c4f11->enter($__internal_0d2a0538be060cf696d42a52d86b007309f4d2290088479b7e21571ef35c4f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d2a0538be060cf696d42a52d86b007309f4d2290088479b7e21571ef35c4f11->leave($__internal_0d2a0538be060cf696d42a52d86b007309f4d2290088479b7e21571ef35c4f11_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f1b884ea583deb6235b0ec440852f078fedba38d8d8cecc91756543757cd6311 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1b884ea583deb6235b0ec440852f078fedba38d8d8cecc91756543757cd6311->enter($__internal_f1b884ea583deb6235b0ec440852f078fedba38d8d8cecc91756543757cd6311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CR Gourmet Coffee";
        
        $__internal_f1b884ea583deb6235b0ec440852f078fedba38d8d8cecc91756543757cd6311->leave($__internal_f1b884ea583deb6235b0ec440852f078fedba38d8d8cecc91756543757cd6311_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7b3f8b615fbd9b0edd9253cfcc835e7ed9f7576408e9c70cbf1048e907de6c93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b3f8b615fbd9b0edd9253cfcc835e7ed9f7576408e9c70cbf1048e907de6c93->enter($__internal_7b3f8b615fbd9b0edd9253cfcc835e7ed9f7576408e9c70cbf1048e907de6c93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/css/product.css"), "html", null, true);
        echo "\" />";
        
        $__internal_7b3f8b615fbd9b0edd9253cfcc835e7ed9f7576408e9c70cbf1048e907de6c93->leave($__internal_7b3f8b615fbd9b0edd9253cfcc835e7ed9f7576408e9c70cbf1048e907de6c93_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_705defa3461888eb0673e4a305b9a6c55b9a90fbbbf526a768f065087c1cf84e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_705defa3461888eb0673e4a305b9a6c55b9a90fbbbf526a768f065087c1cf84e->enter($__internal_705defa3461888eb0673e4a305b9a6c55b9a90fbbbf526a768f065087c1cf84e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_705defa3461888eb0673e4a305b9a6c55b9a90fbbbf526a768f065087c1cf84e->leave($__internal_705defa3461888eb0673e4a305b9a6c55b9a90fbbbf526a768f065087c1cf84e_prof);

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
        return array (  161 => 56,  155 => 53,  149 => 50,  142 => 45,  128 => 39,  124 => 38,  117 => 34,  113 => 33,  108 => 31,  103 => 28,  99 => 27,  91 => 22,  77 => 11,  73 => 9,  67 => 8,  59 => 7,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
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
