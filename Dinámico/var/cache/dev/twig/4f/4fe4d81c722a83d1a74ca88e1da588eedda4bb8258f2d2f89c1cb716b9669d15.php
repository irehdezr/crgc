<?php

/* PageBundle:Default:home.html.twig */
class __TwigTemplate_9d8c94ab05b41a8fdc52e464f106514b076f8e0309b1c37699db1c436791e4fa extends Twig_Template
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
        $__internal_510d1d48cda9e5b5c2f240f07655eccb682f555268ab044f107ea49ee3829095 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_510d1d48cda9e5b5c2f240f07655eccb682f555268ab044f107ea49ee3829095->enter($__internal_510d1d48cda9e5b5c2f240f07655eccb682f555268ab044f107ea49ee3829095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_510d1d48cda9e5b5c2f240f07655eccb682f555268ab044f107ea49ee3829095->leave($__internal_510d1d48cda9e5b5c2f240f07655eccb682f555268ab044f107ea49ee3829095_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_898f4b9b83a86398f480bfd5ad8f6cec2f96e2fe5f7276bad50868b6b4bdcb1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_898f4b9b83a86398f480bfd5ad8f6cec2f96e2fe5f7276bad50868b6b4bdcb1c->enter($__internal_898f4b9b83a86398f480bfd5ad8f6cec2f96e2fe5f7276bad50868b6b4bdcb1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CR Gourmet Coffee";
        
        $__internal_898f4b9b83a86398f480bfd5ad8f6cec2f96e2fe5f7276bad50868b6b4bdcb1c->leave($__internal_898f4b9b83a86398f480bfd5ad8f6cec2f96e2fe5f7276bad50868b6b4bdcb1c_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_83730784c01495ad49031923ba94c0a3a4f9932e582e490e62b84b39d2f1b9fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83730784c01495ad49031923ba94c0a3a4f9932e582e490e62b84b39d2f1b9fd->enter($__internal_83730784c01495ad49031923ba94c0a3a4f9932e582e490e62b84b39d2f1b9fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/product.css"), "html", null, true);
        echo "\" />";
        
        $__internal_83730784c01495ad49031923ba94c0a3a4f9932e582e490e62b84b39d2f1b9fd->leave($__internal_83730784c01495ad49031923ba94c0a3a4f9932e582e490e62b84b39d2f1b9fd_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_5091cde7691184c58cd0279a3008f03a4c59d423150e36741af1756132de7a16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5091cde7691184c58cd0279a3008f03a4c59d423150e36741af1756132de7a16->enter($__internal_5091cde7691184c58cd0279a3008f03a4c59d423150e36741af1756132de7a16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<main>
\t\t<section id='mainBanner'>
\t\t\t<div id='banner' style='background-image: url( ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? null), "getBannerImage", array(), "method"), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["template"] ?? null), "getFarm", array(), "method"), "getImage", array(), "method"), "html", null, true);
        echo " )'></div>
\t\t\t\t<div id='siteInfoText' class=\"col-xs-12 col-md-4\">
\t\t\t\t\t<h3>
                        ";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? null), "getDescriptionTitle", array(), "method"), "html", null, true);
        echo "
\t\t\t\t\t</h3>\t
\t\t\t\t\t<h4>
                        ";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? null), "getDescriptionInfo", array(), "method"), "html", null, true);
        echo "
                    </h4>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t</main>
";
        
        $__internal_5091cde7691184c58cd0279a3008f03a4c59d423150e36741af1756132de7a16->leave($__internal_5091cde7691184c58cd0279a3008f03a4c59d423150e36741af1756132de7a16_prof);

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
        return array (  135 => 41,  129 => 38,  123 => 35,  116 => 30,  105 => 25,  101 => 24,  96 => 22,  91 => 19,  87 => 18,  77 => 11,  73 => 9,  67 => 8,  59 => 7,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PageBundle:Default:home.html.twig", "C:\\xampp\\htdocs\\src\\PageBundle/Resources/views/Default/home.html.twig");
    }
}
