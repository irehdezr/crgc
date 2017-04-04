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
        $__internal_5b12cf640c44fc5aaa4fcf60f3026f13be64b46287da06d6363ad047d521fd8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b12cf640c44fc5aaa4fcf60f3026f13be64b46287da06d6363ad047d521fd8e->enter($__internal_5b12cf640c44fc5aaa4fcf60f3026f13be64b46287da06d6363ad047d521fd8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Page/Default/home.html.twig"));

        $__internal_86b64afcc5e6c235cc179c3fb97b0520ed1f93bdc0f19c4004a4d50275c5b3e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86b64afcc5e6c235cc179c3fb97b0520ed1f93bdc0f19c4004a4d50275c5b3e6->enter($__internal_86b64afcc5e6c235cc179c3fb97b0520ed1f93bdc0f19c4004a4d50275c5b3e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Page/Default/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b12cf640c44fc5aaa4fcf60f3026f13be64b46287da06d6363ad047d521fd8e->leave($__internal_5b12cf640c44fc5aaa4fcf60f3026f13be64b46287da06d6363ad047d521fd8e_prof);

        
        $__internal_86b64afcc5e6c235cc179c3fb97b0520ed1f93bdc0f19c4004a4d50275c5b3e6->leave($__internal_86b64afcc5e6c235cc179c3fb97b0520ed1f93bdc0f19c4004a4d50275c5b3e6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6cfb73e5a0cd04077daea51f9cfb6f83ec0fdfc61bedb38312be0e9fd3a82d1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cfb73e5a0cd04077daea51f9cfb6f83ec0fdfc61bedb38312be0e9fd3a82d1d->enter($__internal_6cfb73e5a0cd04077daea51f9cfb6f83ec0fdfc61bedb38312be0e9fd3a82d1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2e5f6231685b99613f0c92f74d2e58b030db8dec1c9c5830620fed35cfe45343 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e5f6231685b99613f0c92f74d2e58b030db8dec1c9c5830620fed35cfe45343->enter($__internal_2e5f6231685b99613f0c92f74d2e58b030db8dec1c9c5830620fed35cfe45343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CR Gourmet Coffee";
        
        $__internal_2e5f6231685b99613f0c92f74d2e58b030db8dec1c9c5830620fed35cfe45343->leave($__internal_2e5f6231685b99613f0c92f74d2e58b030db8dec1c9c5830620fed35cfe45343_prof);

        
        $__internal_6cfb73e5a0cd04077daea51f9cfb6f83ec0fdfc61bedb38312be0e9fd3a82d1d->leave($__internal_6cfb73e5a0cd04077daea51f9cfb6f83ec0fdfc61bedb38312be0e9fd3a82d1d_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a55361d6341d572750501e015eba243898c8edb9826891b4f9123c59e81d30a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a55361d6341d572750501e015eba243898c8edb9826891b4f9123c59e81d30a3->enter($__internal_a55361d6341d572750501e015eba243898c8edb9826891b4f9123c59e81d30a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_97504c147505a714c48bd1f845a8db37f5ff8f11d889349c274fda51067ec141 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97504c147505a714c48bd1f845a8db37f5ff8f11d889349c274fda51067ec141->enter($__internal_97504c147505a714c48bd1f845a8db37f5ff8f11d889349c274fda51067ec141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/css/product.css"), "html", null, true);
        echo "\" />";
        
        $__internal_97504c147505a714c48bd1f845a8db37f5ff8f11d889349c274fda51067ec141->leave($__internal_97504c147505a714c48bd1f845a8db37f5ff8f11d889349c274fda51067ec141_prof);

        
        $__internal_a55361d6341d572750501e015eba243898c8edb9826891b4f9123c59e81d30a3->leave($__internal_a55361d6341d572750501e015eba243898c8edb9826891b4f9123c59e81d30a3_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_a11984d9ceac92349f88db6fdad2c2ec0c22946fef51ac675006dbb292c452ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a11984d9ceac92349f88db6fdad2c2ec0c22946fef51ac675006dbb292c452ce->enter($__internal_a11984d9ceac92349f88db6fdad2c2ec0c22946fef51ac675006dbb292c452ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1981f1aa9a35c1398ecff2844138e7927caaf23246d17f094141d74e976f3ae7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1981f1aa9a35c1398ecff2844138e7927caaf23246d17f094141d74e976f3ae7->enter($__internal_1981f1aa9a35c1398ecff2844138e7927caaf23246d17f094141d74e976f3ae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1981f1aa9a35c1398ecff2844138e7927caaf23246d17f094141d74e976f3ae7->leave($__internal_1981f1aa9a35c1398ecff2844138e7927caaf23246d17f094141d74e976f3ae7_prof);

        
        $__internal_a11984d9ceac92349f88db6fdad2c2ec0c22946fef51ac675006dbb292c452ce->leave($__internal_a11984d9ceac92349f88db6fdad2c2ec0c22946fef51ac675006dbb292c452ce_prof);

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
{% endblock %}", "@Page/Default/home.html.twig", "C:\\xampp\\htdocs\\src\\PageBundle\\Resources\\views\\Default\\home.html.twig");
    }
}
