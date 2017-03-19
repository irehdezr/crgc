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
        $__internal_3ea1f7bce815bdd98471c0a4c8d2796ad4acbeadad40c9b9e78dc47449585931 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ea1f7bce815bdd98471c0a4c8d2796ad4acbeadad40c9b9e78dc47449585931->enter($__internal_3ea1f7bce815bdd98471c0a4c8d2796ad4acbeadad40c9b9e78dc47449585931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:home.html.twig"));

        $__internal_29db9977ff0a3c9cacddfc404752c81a8d790a1131c220a1566d1784e7aa2d65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29db9977ff0a3c9cacddfc404752c81a8d790a1131c220a1566d1784e7aa2d65->enter($__internal_29db9977ff0a3c9cacddfc404752c81a8d790a1131c220a1566d1784e7aa2d65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ea1f7bce815bdd98471c0a4c8d2796ad4acbeadad40c9b9e78dc47449585931->leave($__internal_3ea1f7bce815bdd98471c0a4c8d2796ad4acbeadad40c9b9e78dc47449585931_prof);

        
        $__internal_29db9977ff0a3c9cacddfc404752c81a8d790a1131c220a1566d1784e7aa2d65->leave($__internal_29db9977ff0a3c9cacddfc404752c81a8d790a1131c220a1566d1784e7aa2d65_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_65b098d721bc5e418f36eeadf61c494ee74d616ae496016946147257f849527d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65b098d721bc5e418f36eeadf61c494ee74d616ae496016946147257f849527d->enter($__internal_65b098d721bc5e418f36eeadf61c494ee74d616ae496016946147257f849527d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a8f1c16b3b4f6c541f37781b334b0634edecfc6899bb55e8f0eb12ee60bc6f69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8f1c16b3b4f6c541f37781b334b0634edecfc6899bb55e8f0eb12ee60bc6f69->enter($__internal_a8f1c16b3b4f6c541f37781b334b0634edecfc6899bb55e8f0eb12ee60bc6f69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CR Gourmet Coffee";
        
        $__internal_a8f1c16b3b4f6c541f37781b334b0634edecfc6899bb55e8f0eb12ee60bc6f69->leave($__internal_a8f1c16b3b4f6c541f37781b334b0634edecfc6899bb55e8f0eb12ee60bc6f69_prof);

        
        $__internal_65b098d721bc5e418f36eeadf61c494ee74d616ae496016946147257f849527d->leave($__internal_65b098d721bc5e418f36eeadf61c494ee74d616ae496016946147257f849527d_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dd7ae17d115f9c97daaec5003e184c71c5f2802c767dd9d4172d93b852848e58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd7ae17d115f9c97daaec5003e184c71c5f2802c767dd9d4172d93b852848e58->enter($__internal_dd7ae17d115f9c97daaec5003e184c71c5f2802c767dd9d4172d93b852848e58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_aa023edba5babebda4d4eff56e64b0ec7539ca902d9c5c369af9fc2962f245d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa023edba5babebda4d4eff56e64b0ec7539ca902d9c5c369af9fc2962f245d1->enter($__internal_aa023edba5babebda4d4eff56e64b0ec7539ca902d9c5c369af9fc2962f245d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/product.css"), "html", null, true);
        echo "\" />";
        
        $__internal_aa023edba5babebda4d4eff56e64b0ec7539ca902d9c5c369af9fc2962f245d1->leave($__internal_aa023edba5babebda4d4eff56e64b0ec7539ca902d9c5c369af9fc2962f245d1_prof);

        
        $__internal_dd7ae17d115f9c97daaec5003e184c71c5f2802c767dd9d4172d93b852848e58->leave($__internal_dd7ae17d115f9c97daaec5003e184c71c5f2802c767dd9d4172d93b852848e58_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_6df6d11a46256ae4de2f1f2c0bec976122b3ece81f7b3f4c03665fb4b0b8b16a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6df6d11a46256ae4de2f1f2c0bec976122b3ece81f7b3f4c03665fb4b0b8b16a->enter($__internal_6df6d11a46256ae4de2f1f2c0bec976122b3ece81f7b3f4c03665fb4b0b8b16a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_99c3aceecf4b0d4f250d27c963e675c038e7049777c57925244869d17ed63052 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99c3aceecf4b0d4f250d27c963e675c038e7049777c57925244869d17ed63052->enter($__internal_99c3aceecf4b0d4f250d27c963e675c038e7049777c57925244869d17ed63052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_information", array("product" => ($this->getAttribute($this->getAttribute($context["product"], "getFarm", array(), "method"), "getId", array(), "method") . $this->getAttribute($context["product"], "getId", array(), "method")))), "html", null, true);
            echo "\">
\t\t\t\t\t\t<img src=\" ";
            // line 25
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
        // line 30
        echo "\t\t\t</div>
\t\t</section>
\t\t<div class='clearfix'></div>
\t\t<section id='siteInfoSection' class='container-fluid'>
\t\t\t<div class=\"row\">
\t\t\t\t<div id='siteInfo' class=\"col-xs-12 col-md-8\" style='background-image: url(";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getFarm", array(), "method"), "getImage", array(), "method"), "html", null, true);
        echo " )'></div>
\t\t\t\t<div id='siteInfoText' class=\"col-xs-12 col-md-4\">
\t\t\t\t\t<h3>
                        ";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getDescriptionTitle", array(), "method"), "html", null, true);
        echo "
\t\t\t\t\t</h3>\t
\t\t\t\t\t<h4>
                        ";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getDescriptionInfo", array(), "method"), "html", null, true);
        echo "
                    </h4>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t</main>
";
        
        $__internal_99c3aceecf4b0d4f250d27c963e675c038e7049777c57925244869d17ed63052->leave($__internal_99c3aceecf4b0d4f250d27c963e675c038e7049777c57925244869d17ed63052_prof);

        
        $__internal_6df6d11a46256ae4de2f1f2c0bec976122b3ece81f7b3f4c03665fb4b0b8b16a->leave($__internal_6df6d11a46256ae4de2f1f2c0bec976122b3ece81f7b3f4c03665fb4b0b8b16a_prof);

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
        return array (  156 => 41,  150 => 38,  144 => 35,  137 => 30,  126 => 25,  122 => 24,  117 => 22,  112 => 19,  108 => 18,  98 => 11,  94 => 9,  85 => 8,  74 => 7,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
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
\t\t\t\t\t\t<a href=\"{{ path('product_information', {'product': product.getFarm().getId()~ product.getId() }) }}\">
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
