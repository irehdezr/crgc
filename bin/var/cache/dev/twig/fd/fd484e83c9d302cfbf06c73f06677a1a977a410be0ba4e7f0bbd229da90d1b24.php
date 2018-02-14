<?php

/* @Page/Default/shopping_cart.html.twig */
class __TwigTemplate_f1672ec72794ffa6cec3e382a5ba3fe196deb9f4b28bd1bf2549909ec1f49a82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "@Page/Default/shopping_cart.html.twig", 1);
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
        $__internal_efb7ee88fe39346076c2ab0d2fc5eb6d1abd0b2a444dab644946de8afa9e4da2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efb7ee88fe39346076c2ab0d2fc5eb6d1abd0b2a444dab644946de8afa9e4da2->enter($__internal_efb7ee88fe39346076c2ab0d2fc5eb6d1abd0b2a444dab644946de8afa9e4da2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Page/Default/shopping_cart.html.twig"));

        $__internal_c6e5fd5c8b478ea6c6933d6838051e00e1139e76f2738f0132dff6382186bf1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6e5fd5c8b478ea6c6933d6838051e00e1139e76f2738f0132dff6382186bf1f->enter($__internal_c6e5fd5c8b478ea6c6933d6838051e00e1139e76f2738f0132dff6382186bf1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Page/Default/shopping_cart.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efb7ee88fe39346076c2ab0d2fc5eb6d1abd0b2a444dab644946de8afa9e4da2->leave($__internal_efb7ee88fe39346076c2ab0d2fc5eb6d1abd0b2a444dab644946de8afa9e4da2_prof);

        
        $__internal_c6e5fd5c8b478ea6c6933d6838051e00e1139e76f2738f0132dff6382186bf1f->leave($__internal_c6e5fd5c8b478ea6c6933d6838051e00e1139e76f2738f0132dff6382186bf1f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f52665687586bf6c62e03c8d8441821af240be0ccff46818e053faa029670a5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f52665687586bf6c62e03c8d8441821af240be0ccff46818e053faa029670a5d->enter($__internal_f52665687586bf6c62e03c8d8441821af240be0ccff46818e053faa029670a5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1ff2cd30bf360d7ca96baf8cbbce8e66a34306eec6d1434f9ad68496fe2eadd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ff2cd30bf360d7ca96baf8cbbce8e66a34306eec6d1434f9ad68496fe2eadd2->enter($__internal_1ff2cd30bf360d7ca96baf8cbbce8e66a34306eec6d1434f9ad68496fe2eadd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Shopping Cup ";
        
        $__internal_1ff2cd30bf360d7ca96baf8cbbce8e66a34306eec6d1434f9ad68496fe2eadd2->leave($__internal_1ff2cd30bf360d7ca96baf8cbbce8e66a34306eec6d1434f9ad68496fe2eadd2_prof);

        
        $__internal_f52665687586bf6c62e03c8d8441821af240be0ccff46818e053faa029670a5d->leave($__internal_f52665687586bf6c62e03c8d8441821af240be0ccff46818e053faa029670a5d_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b1484a76356545452ba6c759972c551217d0d63dcc2ecacfeb5b2db62568066b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1484a76356545452ba6c759972c551217d0d63dcc2ecacfeb5b2db62568066b->enter($__internal_b1484a76356545452ba6c759972c551217d0d63dcc2ecacfeb5b2db62568066b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2c2ce96fcb7dfe27300e54c550183b98ecfb55e55e8bc6584aef3faf1bdb1afb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c2ce96fcb7dfe27300e54c550183b98ecfb55e55e8bc6584aef3faf1bdb1afb->enter($__internal_2c2ce96fcb7dfe27300e54c550183b98ecfb55e55e8bc6584aef3faf1bdb1afb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/css/product_information.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_2c2ce96fcb7dfe27300e54c550183b98ecfb55e55e8bc6584aef3faf1bdb1afb->leave($__internal_2c2ce96fcb7dfe27300e54c550183b98ecfb55e55e8bc6584aef3faf1bdb1afb_prof);

        
        $__internal_b1484a76356545452ba6c759972c551217d0d63dcc2ecacfeb5b2db62568066b->leave($__internal_b1484a76356545452ba6c759972c551217d0d63dcc2ecacfeb5b2db62568066b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_89ee6b644269f0c641d5a39bfccb806d128d3435f5c3fb6647cc5357fee8afbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89ee6b644269f0c641d5a39bfccb806d128d3435f5c3fb6647cc5357fee8afbb->enter($__internal_89ee6b644269f0c641d5a39bfccb806d128d3435f5c3fb6647cc5357fee8afbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8b46906c6cb373fc90dbb8a67731b0f40996cae5c599bdfdb88fd91321673dde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b46906c6cb373fc90dbb8a67731b0f40996cae5c599bdfdb88fd91321673dde->enter($__internal_8b46906c6cb373fc90dbb8a67731b0f40996cae5c599bdfdb88fd91321673dde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8b46906c6cb373fc90dbb8a67731b0f40996cae5c599bdfdb88fd91321673dde->leave($__internal_8b46906c6cb373fc90dbb8a67731b0f40996cae5c599bdfdb88fd91321673dde_prof);

        
        $__internal_89ee6b644269f0c641d5a39bfccb806d128d3435f5c3fb6647cc5357fee8afbb->leave($__internal_89ee6b644269f0c641d5a39bfccb806d128d3435f5c3fb6647cc5357fee8afbb_prof);

    }

    public function getTemplateName()
    {
        return "@Page/Default/shopping_cart.html.twig";
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
{% endblock %}", "@Page/Default/shopping_cart.html.twig", "C:\\xampp\\htdocs\\src\\PageBundle\\Resources\\views\\Default\\shopping_cart.html.twig");
    }
}
