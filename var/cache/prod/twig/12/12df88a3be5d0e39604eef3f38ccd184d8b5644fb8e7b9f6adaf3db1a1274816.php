<?php

/* PageBundle:Default:shopping_cart.html.twig */
class __TwigTemplate_fdc07d5ca702ea44eda99ad167427162268a277fcc9a3a1e9c0356f2380037da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "PageBundle:Default:shopping_cart.html.twig", 1);
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
        $__internal_fa423804cb08b4c2aa38abdef195bab179448fb96263db5fc8e741f849195f37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa423804cb08b4c2aa38abdef195bab179448fb96263db5fc8e741f849195f37->enter($__internal_fa423804cb08b4c2aa38abdef195bab179448fb96263db5fc8e741f849195f37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:shopping_cart.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa423804cb08b4c2aa38abdef195bab179448fb96263db5fc8e741f849195f37->leave($__internal_fa423804cb08b4c2aa38abdef195bab179448fb96263db5fc8e741f849195f37_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_62fa27b09fc90c7f7e1a0a4564b727106be5a679fce17d3573ba1dfc0c31b638 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62fa27b09fc90c7f7e1a0a4564b727106be5a679fce17d3573ba1dfc0c31b638->enter($__internal_62fa27b09fc90c7f7e1a0a4564b727106be5a679fce17d3573ba1dfc0c31b638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Shopping Cup ";
        
        $__internal_62fa27b09fc90c7f7e1a0a4564b727106be5a679fce17d3573ba1dfc0c31b638->leave($__internal_62fa27b09fc90c7f7e1a0a4564b727106be5a679fce17d3573ba1dfc0c31b638_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_75598f9f8ea7225084877a89f6e98183d07602206cf7eadc582feb0663c3673e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75598f9f8ea7225084877a89f6e98183d07602206cf7eadc582feb0663c3673e->enter($__internal_75598f9f8ea7225084877a89f6e98183d07602206cf7eadc582feb0663c3673e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/css/product_information.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_75598f9f8ea7225084877a89f6e98183d07602206cf7eadc582feb0663c3673e->leave($__internal_75598f9f8ea7225084877a89f6e98183d07602206cf7eadc582feb0663c3673e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_889d23d910363c145ce86a615e067272ed94bb918965c6c8e2f27e30ab128e52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_889d23d910363c145ce86a615e067272ed94bb918965c6c8e2f27e30ab128e52->enter($__internal_889d23d910363c145ce86a615e067272ed94bb918965c6c8e2f27e30ab128e52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "<main>
\t<section>
\t\t<center>
\t\t\t<h2>
\t\t\t\tShopping Cup\t\t
\t\t\t</h2>
\t\t</center>
\t\t<div  class='col-xs-offset-1 col-xs-10 col-md-offset-3 col-md-6'>
\t\t\t<center>
\t\t\t\t<h3>
\t\t\t\t\tYour products
\t\t\t\t</h3>
\t\t\t</center>
\t\t\t<div  id='carouselHeading' class=\"table-responsive\">
\t            <table class=\"table\">
\t                <thead class=\"thead-inverse\">
\t                    <tr>
\t                        <th>Farm</th>
\t                        <th>Product</th>
\t                        <th>Description</th>
\t                        <th>Unit price</th>
\t                        <th>Quantity</th>
\t                        <th>Subtotal</th>
\t                        <th>Action</th>
\t                    </tr>
\t                </thead>
\t                <tbody>
\t                    <tr>
\t                        <td>Tortuga</td>
\t                        <td>Solela</td>
\t                        <td>Whole Bean</td>
\t                        <td>\$20.00</td>
\t                        <td>1</td>
\t                        <td>\$20.00</td>
\t                        <td>Remove</td>
\t                    </tr>
\t                    <tr>
\t                        <td>Yigarcheffe</td>
\t                        <td>Cumbal Coffee</td>
\t                        <td>Whole Bean</td>
\t                        <td>\$24.99</td>
\t                        <td>1</td>
\t                        <td>\$24.99</td>
\t                        <td>Remove</td>
\t                    </tr>
\t                    <tr>
\t                        <td></td>
\t                        <td></td>
\t                        <td></td>
\t                        <td></td>
\t                        <td>Total</td>
\t                        <td>\$44.99</td>
\t                        <td></td>
\t                    </tr>
\t                </tbody>
\t            </table>
       \t\t</div>
       \t<div id=\"test\"></div>
\t\t<a class='btn btn-success'  href=\"";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_homepage", array("name" => "home"));
        echo "\">
\t\t\tContinue Shopping
\t\t</a> 
        <a class='btn btn-success pull-right' href=\"";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_homepage", array("name" => "shoppingCart"));
        echo "\">
        \tCheck Out
        </a> 
\t\t</div> 
\t</section>
</main>
";
        
        $__internal_889d23d910363c145ce86a615e067272ed94bb918965c6c8e2f27e30ab128e52->leave($__internal_889d23d910363c145ce86a615e067272ed94bb918965c6c8e2f27e30ab128e52_prof);

    }

    public function getTemplateName()
    {
        return "PageBundle:Default:shopping_cart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 72,  134 => 69,  74 => 11,  68 => 10,  59 => 7,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
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

{% block title%} Shopping Cup {% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('/web/public/css/product_information.css') }}\" />
{% endblock %}

{% block body %}
<main>
\t<section>
\t\t<center>
\t\t\t<h2>
\t\t\t\tShopping Cup\t\t
\t\t\t</h2>
\t\t</center>
\t\t<div  class='col-xs-offset-1 col-xs-10 col-md-offset-3 col-md-6'>
\t\t\t<center>
\t\t\t\t<h3>
\t\t\t\t\tYour products
\t\t\t\t</h3>
\t\t\t</center>
\t\t\t<div  id='carouselHeading' class=\"table-responsive\">
\t            <table class=\"table\">
\t                <thead class=\"thead-inverse\">
\t                    <tr>
\t                        <th>Farm</th>
\t                        <th>Product</th>
\t                        <th>Description</th>
\t                        <th>Unit price</th>
\t                        <th>Quantity</th>
\t                        <th>Subtotal</th>
\t                        <th>Action</th>
\t                    </tr>
\t                </thead>
\t                <tbody>
\t                    <tr>
\t                        <td>Tortuga</td>
\t                        <td>Solela</td>
\t                        <td>Whole Bean</td>
\t                        <td>\$20.00</td>
\t                        <td>1</td>
\t                        <td>\$20.00</td>
\t                        <td>Remove</td>
\t                    </tr>
\t                    <tr>
\t                        <td>Yigarcheffe</td>
\t                        <td>Cumbal Coffee</td>
\t                        <td>Whole Bean</td>
\t                        <td>\$24.99</td>
\t                        <td>1</td>
\t                        <td>\$24.99</td>
\t                        <td>Remove</td>
\t                    </tr>
\t                    <tr>
\t                        <td></td>
\t                        <td></td>
\t                        <td></td>
\t                        <td></td>
\t                        <td>Total</td>
\t                        <td>\$44.99</td>
\t                        <td></td>
\t                    </tr>
\t                </tbody>
\t            </table>
       \t\t</div>
       \t<div id=\"test\"></div>
\t\t<a class='btn btn-success'  href=\"{{ path('page_homepage', {'name': 'home'}) }}\">
\t\t\tContinue Shopping
\t\t</a> 
        <a class='btn btn-success pull-right' href=\"{{ path('page_homepage', {'name': 'shoppingCart'}) }}\">
        \tCheck Out
        </a> 
\t\t</div> 
\t</section>
</main>
{% endblock %}", "PageBundle:Default:shopping_cart.html.twig", "C:\\xampp\\htdocs\\src\\PageBundle/Resources/views/Default/shopping_cart.html.twig");
    }
}
