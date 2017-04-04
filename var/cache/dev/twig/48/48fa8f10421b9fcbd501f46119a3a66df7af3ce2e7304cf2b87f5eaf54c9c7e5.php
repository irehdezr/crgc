<?php

/* PageBundle:Default:shopping_cart.html.twig */
class __TwigTemplate_a8c4b99a7b400909e04389bc162c5a42873f4b40b68c35eaffb553dd2c313ad7 extends Twig_Template
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
        $__internal_e90ee8779a9732438e39a7d803bf09715537f2babac305dd73aa39b07f1dab6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e90ee8779a9732438e39a7d803bf09715537f2babac305dd73aa39b07f1dab6f->enter($__internal_e90ee8779a9732438e39a7d803bf09715537f2babac305dd73aa39b07f1dab6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:shopping_cart.html.twig"));

        $__internal_b1d58c322a5038f2ba8823825071bcbe8925fc59353a072b6d3fa400f832941c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1d58c322a5038f2ba8823825071bcbe8925fc59353a072b6d3fa400f832941c->enter($__internal_b1d58c322a5038f2ba8823825071bcbe8925fc59353a072b6d3fa400f832941c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:shopping_cart.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e90ee8779a9732438e39a7d803bf09715537f2babac305dd73aa39b07f1dab6f->leave($__internal_e90ee8779a9732438e39a7d803bf09715537f2babac305dd73aa39b07f1dab6f_prof);

        
        $__internal_b1d58c322a5038f2ba8823825071bcbe8925fc59353a072b6d3fa400f832941c->leave($__internal_b1d58c322a5038f2ba8823825071bcbe8925fc59353a072b6d3fa400f832941c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7d2246c29d623bca52921dfbb6adf9c9eb8dc5551d8f002b1efed44238f0667d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d2246c29d623bca52921dfbb6adf9c9eb8dc5551d8f002b1efed44238f0667d->enter($__internal_7d2246c29d623bca52921dfbb6adf9c9eb8dc5551d8f002b1efed44238f0667d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5b37153630a95cc7b35c913be2f3147f20bbfc44aa2b9bb5724596d53230a160 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b37153630a95cc7b35c913be2f3147f20bbfc44aa2b9bb5724596d53230a160->enter($__internal_5b37153630a95cc7b35c913be2f3147f20bbfc44aa2b9bb5724596d53230a160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Shopping Cup ";
        
        $__internal_5b37153630a95cc7b35c913be2f3147f20bbfc44aa2b9bb5724596d53230a160->leave($__internal_5b37153630a95cc7b35c913be2f3147f20bbfc44aa2b9bb5724596d53230a160_prof);

        
        $__internal_7d2246c29d623bca52921dfbb6adf9c9eb8dc5551d8f002b1efed44238f0667d->leave($__internal_7d2246c29d623bca52921dfbb6adf9c9eb8dc5551d8f002b1efed44238f0667d_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b0aa53c8e5039354e9843f888db271305a6af3c04f75c650e7f33557320ef78a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0aa53c8e5039354e9843f888db271305a6af3c04f75c650e7f33557320ef78a->enter($__internal_b0aa53c8e5039354e9843f888db271305a6af3c04f75c650e7f33557320ef78a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_697538e0fcf121127a4576f875a086f8940c7ef1cd44a5d1e4b97a4641793f4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_697538e0fcf121127a4576f875a086f8940c7ef1cd44a5d1e4b97a4641793f4e->enter($__internal_697538e0fcf121127a4576f875a086f8940c7ef1cd44a5d1e4b97a4641793f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/css/product_information.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_697538e0fcf121127a4576f875a086f8940c7ef1cd44a5d1e4b97a4641793f4e->leave($__internal_697538e0fcf121127a4576f875a086f8940c7ef1cd44a5d1e4b97a4641793f4e_prof);

        
        $__internal_b0aa53c8e5039354e9843f888db271305a6af3c04f75c650e7f33557320ef78a->leave($__internal_b0aa53c8e5039354e9843f888db271305a6af3c04f75c650e7f33557320ef78a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c1ca7ce8360b6b6f11b37e8144f4abdbbf07a425e82fcf89a1247ec56aae11c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1ca7ce8360b6b6f11b37e8144f4abdbbf07a425e82fcf89a1247ec56aae11c7->enter($__internal_c1ca7ce8360b6b6f11b37e8144f4abdbbf07a425e82fcf89a1247ec56aae11c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_41abaa1426e5b3f429933c651e1ca432d1a6200919961ebddf2fda1a00511522 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41abaa1426e5b3f429933c651e1ca432d1a6200919961ebddf2fda1a00511522->enter($__internal_41abaa1426e5b3f429933c651e1ca432d1a6200919961ebddf2fda1a00511522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_41abaa1426e5b3f429933c651e1ca432d1a6200919961ebddf2fda1a00511522->leave($__internal_41abaa1426e5b3f429933c651e1ca432d1a6200919961ebddf2fda1a00511522_prof);

        
        $__internal_c1ca7ce8360b6b6f11b37e8144f4abdbbf07a425e82fcf89a1247ec56aae11c7->leave($__internal_c1ca7ce8360b6b6f11b37e8144f4abdbbf07a425e82fcf89a1247ec56aae11c7_prof);

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
        return array (  161 => 72,  155 => 69,  95 => 11,  86 => 10,  74 => 7,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
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
