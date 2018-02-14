<?php

/* PageBundle:Default:home.html.twig */
class __TwigTemplate_23aa2d93683700cbaf44f4b5cc0d088892deb9acc9cfdbb4c614779b43624a3e extends Twig_Template
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
        $__internal_d6deb0c40f70bd44bb48539f1f00fbb5bc40bf2d9c6ac37a9772469b6cfab3fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6deb0c40f70bd44bb48539f1f00fbb5bc40bf2d9c6ac37a9772469b6cfab3fa->enter($__internal_d6deb0c40f70bd44bb48539f1f00fbb5bc40bf2d9c6ac37a9772469b6cfab3fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6deb0c40f70bd44bb48539f1f00fbb5bc40bf2d9c6ac37a9772469b6cfab3fa->leave($__internal_d6deb0c40f70bd44bb48539f1f00fbb5bc40bf2d9c6ac37a9772469b6cfab3fa_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_36b314c187fbabe55475118aee1826fbf595ed614fdf89f94742d6fe0ece8d5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36b314c187fbabe55475118aee1826fbf595ed614fdf89f94742d6fe0ece8d5b->enter($__internal_36b314c187fbabe55475118aee1826fbf595ed614fdf89f94742d6fe0ece8d5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CR Gourmet Coffee";
        
        $__internal_36b314c187fbabe55475118aee1826fbf595ed614fdf89f94742d6fe0ece8d5b->leave($__internal_36b314c187fbabe55475118aee1826fbf595ed614fdf89f94742d6fe0ece8d5b_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6e373057d0b3bf67912fd5f0deee30b3e49e1edf3d1e0f2646c1dcb5b2085af4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e373057d0b3bf67912fd5f0deee30b3e49e1edf3d1e0f2646c1dcb5b2085af4->enter($__internal_6e373057d0b3bf67912fd5f0deee30b3e49e1edf3d1e0f2646c1dcb5b2085af4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/css/product.css"), "html", null, true);
        echo "\" />";
        
        $__internal_6e373057d0b3bf67912fd5f0deee30b3e49e1edf3d1e0f2646c1dcb5b2085af4->leave($__internal_6e373057d0b3bf67912fd5f0deee30b3e49e1edf3d1e0f2646c1dcb5b2085af4_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_33f6525e8ea26fa2321a82da9dcadf390a1c1593485dd3eac52b386015ff841b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33f6525e8ea26fa2321a82da9dcadf390a1c1593485dd3eac52b386015ff841b->enter($__internal_33f6525e8ea26fa2321a82da9dcadf390a1c1593485dd3eac52b386015ff841b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_33f6525e8ea26fa2321a82da9dcadf390a1c1593485dd3eac52b386015ff841b->leave($__internal_33f6525e8ea26fa2321a82da9dcadf390a1c1593485dd3eac52b386015ff841b_prof);

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
{% endblock %}", "PageBundle:Default:home.html.twig", "/home/crgourme/public_html/src/PageBundle/Resources/views/Default/home.html.twig");
    }
}
