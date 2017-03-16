<?php

/* PageBundle:Default:home.html.twig */
class __TwigTemplate_f0d7349686bd26d4a75d8e964ea2b94fcca94f865b4c1734acdc8479e9d01bd2 extends Twig_Template
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
        $__internal_19063d66e32dd057c6c03735aee48ee155361c7f94f764520de8991f74ed0847 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19063d66e32dd057c6c03735aee48ee155361c7f94f764520de8991f74ed0847->enter($__internal_19063d66e32dd057c6c03735aee48ee155361c7f94f764520de8991f74ed0847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:home.html.twig"));

        $__internal_a19cd90ba036836a1358d890a65d4cd850b76e493ab87a53ca943a5378f3c8c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a19cd90ba036836a1358d890a65d4cd850b76e493ab87a53ca943a5378f3c8c8->enter($__internal_a19cd90ba036836a1358d890a65d4cd850b76e493ab87a53ca943a5378f3c8c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19063d66e32dd057c6c03735aee48ee155361c7f94f764520de8991f74ed0847->leave($__internal_19063d66e32dd057c6c03735aee48ee155361c7f94f764520de8991f74ed0847_prof);

        
        $__internal_a19cd90ba036836a1358d890a65d4cd850b76e493ab87a53ca943a5378f3c8c8->leave($__internal_a19cd90ba036836a1358d890a65d4cd850b76e493ab87a53ca943a5378f3c8c8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3d5e4c41564c5c09f09a1e56719bf4d484ee4c311e4174f123f4a5a74fae492e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d5e4c41564c5c09f09a1e56719bf4d484ee4c311e4174f123f4a5a74fae492e->enter($__internal_3d5e4c41564c5c09f09a1e56719bf4d484ee4c311e4174f123f4a5a74fae492e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2873bc22931d2e4fd5222e9ac084517b305cf6034eaaa1808dcc3eefd1b1c457 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2873bc22931d2e4fd5222e9ac084517b305cf6034eaaa1808dcc3eefd1b1c457->enter($__internal_2873bc22931d2e4fd5222e9ac084517b305cf6034eaaa1808dcc3eefd1b1c457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CR Gourmet Coffee";
        
        $__internal_2873bc22931d2e4fd5222e9ac084517b305cf6034eaaa1808dcc3eefd1b1c457->leave($__internal_2873bc22931d2e4fd5222e9ac084517b305cf6034eaaa1808dcc3eefd1b1c457_prof);

        
        $__internal_3d5e4c41564c5c09f09a1e56719bf4d484ee4c311e4174f123f4a5a74fae492e->leave($__internal_3d5e4c41564c5c09f09a1e56719bf4d484ee4c311e4174f123f4a5a74fae492e_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8cd76a9893437a2d5264b722bc5b807f6c642cde96cd91300e56d53928919734 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cd76a9893437a2d5264b722bc5b807f6c642cde96cd91300e56d53928919734->enter($__internal_8cd76a9893437a2d5264b722bc5b807f6c642cde96cd91300e56d53928919734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0f10135815dd0c202cc3d90309e34008787f7e9fbd612f489f5a08f79ecdf09c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f10135815dd0c202cc3d90309e34008787f7e9fbd612f489f5a08f79ecdf09c->enter($__internal_0f10135815dd0c202cc3d90309e34008787f7e9fbd612f489f5a08f79ecdf09c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/product.css"), "html", null, true);
        echo "\" />";
        
        $__internal_0f10135815dd0c202cc3d90309e34008787f7e9fbd612f489f5a08f79ecdf09c->leave($__internal_0f10135815dd0c202cc3d90309e34008787f7e9fbd612f489f5a08f79ecdf09c_prof);

        
        $__internal_8cd76a9893437a2d5264b722bc5b807f6c642cde96cd91300e56d53928919734->leave($__internal_8cd76a9893437a2d5264b722bc5b807f6c642cde96cd91300e56d53928919734_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_f95afccc90a326ad3fcd4cd5abad127d325fb9997117448a3bde6973caaf6dc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f95afccc90a326ad3fcd4cd5abad127d325fb9997117448a3bde6973caaf6dc5->enter($__internal_f95afccc90a326ad3fcd4cd5abad127d325fb9997117448a3bde6973caaf6dc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ff3cf5e2075b7a679a1017f656a1c366cace7d19a857437cc95a6fea6b45de29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff3cf5e2075b7a679a1017f656a1c366cace7d19a857437cc95a6fea6b45de29->enter($__internal_ff3cf5e2075b7a679a1017f656a1c366cace7d19a857437cc95a6fea6b45de29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<main>
\t\t<section id='mainBanner'>
\t\t\t<div id='banner' style='background-image: url( ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")), "getBannerImage", array(), "method"), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")), "getFarm", array(), "method"), "getImage", array(), "method"), "html", null, true);
        echo " )'></div>
\t\t\t\t<div id='siteInfoText' class=\"col-xs-12 col-md-4\">
\t\t\t\t\t<h3>
                        ";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")), "getDescriptionTitle", array(), "method"), "html", null, true);
        echo "
\t\t\t\t\t</h3>\t
\t\t\t\t\t<h4>
                        ";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")), "getDescriptionInfo", array(), "method"), "html", null, true);
        echo "
                    </h4>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t</main>
";
        
        $__internal_ff3cf5e2075b7a679a1017f656a1c366cace7d19a857437cc95a6fea6b45de29->leave($__internal_ff3cf5e2075b7a679a1017f656a1c366cace7d19a857437cc95a6fea6b45de29_prof);

        
        $__internal_f95afccc90a326ad3fcd4cd5abad127d325fb9997117448a3bde6973caaf6dc5->leave($__internal_f95afccc90a326ad3fcd4cd5abad127d325fb9997117448a3bde6973caaf6dc5_prof);

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
{% endblock %}", "PageBundle:Default:home.html.twig", "/home/ubuntu/workspace/src/PageBundle/Resources/views/Default/home.html.twig");
    }
}
