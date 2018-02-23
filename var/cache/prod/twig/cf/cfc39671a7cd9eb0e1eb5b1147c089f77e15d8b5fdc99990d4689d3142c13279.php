<?php

/* PageBundle:Default:shopping_cart.html.twig */
class __TwigTemplate_14a39072611d4e58aa2ee2f4f3bcca3e01452c030350bb952a7f425b62daba83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "PageBundle:Default:shopping_cart.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " Shopping Cup ";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "<main>
\t<section>
\t\t<center>
\t\t\t<h2>
\t\t\t\t";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? null), "getPageTitle", array(), "method"), "html", null, true);
        echo "\t\t
\t\t\t</h2>
\t\t</center>
\t\t<div  class='col-md-offset-1 col-md-10'>
\t\t\t<center>
\t\t\t\t<h3>
\t\t\t\t";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? null), "getCartTitle", array(), "method"), "html", null, true);
        echo "\t
\t\t\t\t</h3>
\t\t\t</center>
\t\t\t";
        // line 20
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "get", array(0 => "productsOnCart"), "method")) > 0)) {
            // line 21
            echo "\t\t\t<div class=\"table-responsive\">
\t            <table id=\"shoppingCart\" class=\"table\">
\t                <thead class=\"thead-inverse\">
\t                    <tr>
\t                        <th>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? null), "getProductTitle", array(), "method"), "html", null, true);
            echo "</th>
\t                        <th>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? null), "getFarmTitle", array(), "method"), "html", null, true);
            echo "</th>
\t                        <th>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? null), "getDescriptionTitle", array(), "method"), "html", null, true);
            echo "</th>
\t                        <th>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? null), "getUnitPriceTitle", array(), "method"), "html", null, true);
            echo "</th>
\t                        <th>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? null), "getQuantityTitle", array(), "method"), "html", null, true);
            echo "</th>
\t                        <th>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? null), "getSubTotalTitle", array(), "method"), "html", null, true);
            echo "</th>
\t                        <th>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? null), "getActionTitle", array(), "method"), "html", null, true);
            echo "</th>
\t                    </tr>
\t                </thead>
\t                <tbody>
\t\t\t\t\t";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["productsOnCart"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 36
                echo "\t                    <tr data-item-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["product"], "presentation", array(), "array"), "getId", array(), "method"), "html", null, true);
                echo "\">
\t                        <td>
\t                        \t<center>
\t                         \t\t";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["product"], "presentation", array(), "array"), "getProduct", array(), "method"), "getName", array(), "method"), "html", null, true);
                echo "</br>
\t                         \t\t<img src=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["product"], "presentation", array(), "array"), "getProduct", array(), "method"), "getImage", array(), "method"), "html", null, true);
                echo "\"></img>
\t                         \t</center>
\t                        </td>
\t                        <td>";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["product"], "presentation", array(), "array"), "getProduct", array(), "method"), "getFarm", array(), "method"), "getName", array(), "method"), "html", null, true);
                echo "</td>
\t                        <td>
\t                         \t<strong>";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? null), "getWeightTitle", array(), "method"), "html", null, true);
                echo ": </strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["product"], "presentation", array(), "array"), "getWeight", array()), "html", null, true);
                echo "g </br>
\t\t                        <strong>";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? null), "getRoastTitle", array(), "method"), "html", null, true);
                echo ": </strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["product"], "presentation", array(), "array"), "getRoast", array(), "method"), "getDescription", array(), "method"), "html", null, true);
                echo "</br>
\t\t                        <strong>";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? null), "getGrindTitle", array(), "method"), "html", null, true);
                echo ": </strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["product"], "presentation", array(), "array"), "getGrind", array(), "method"), "getDescription", array(), "method"), "html", null, true);
                echo "</br>
\t\t                    </td>
\t                        <td class=\"unit-price\">";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["product"], "presentation", array(), "array"), "getPrice", array(), "method"), "html", null, true);
                echo "</td>
\t                        <td data-test=\"td\">
\t                        \t<input type=\"number\" class=\"presentation-quantity\" value=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "quantity", array(), "array"), "html", null, true);
                echo "\"> 
\t                        </td>
\t                        <td>
\t                        \t<p class=\"presentation-total\"></p>
\t                        </td>
\t                        <td> 
\t                    \t\t<button class=\"remove-item btn btn-danger\">";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? null), "getRemoveButton", array(), "method"), "html", null, true);
                echo "</button>
\t                        </td>
\t                    </tr>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "\t                 
\t                    <tr>
\t                        <td colspan=\"4\">";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? null), "getShippingTitle", array(), "method"), "html", null, true);
            echo "</td>   
\t                        <td>Total</td>
\t                        <td id=\"cart-total\"></td>
\t                        <td></td>
\t                    </tr>
\t                </tbody>
\t            </table>
       \t\t</div>
\t\t\t<button class='continue-shopping btn btn-success'>
\t\t\t\t";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? null), "getContinueButton", array(), "method"), "html", null, true);
            echo "
\t\t\t</button> 
\t        <button class='check-out btn btn-success pull-right'>
\t        \t";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? null), "getCheckOutButton", array(), "method"), "html", null, true);
            echo "
\t        </button>
       \t\t";
        } else {
            // line 77
            echo "\t\t\t<center>
\t\t\t\t<h3>
\t\t\t\t\t";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? null), "getEmptyCartTitle", array(), "method"), "html", null, true);
            echo "
\t\t\t\t</h3>
\t\t\t\t<button class='continue-shopping btn btn-success'>
\t\t\t\t\t";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? null), "getContinueButton", array(), "method"), "html", null, true);
            echo "
\t\t\t\t</button> 
\t\t\t</center>
       \t\t";
        }
        // line 86
        echo "\t\t</div> 
\t</section>
</main>
";
    }

    // line 90
    public function block_javascripts($context, array $blocks = array())
    {
        // line 91
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/js/shopping_cart.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
";
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
        return array (  228 => 92,  223 => 91,  220 => 90,  213 => 86,  206 => 82,  200 => 79,  196 => 77,  190 => 74,  184 => 71,  172 => 62,  168 => 60,  158 => 57,  149 => 51,  144 => 49,  137 => 47,  131 => 46,  125 => 45,  120 => 43,  114 => 40,  110 => 39,  103 => 36,  99 => 35,  92 => 31,  88 => 30,  84 => 29,  80 => 28,  76 => 27,  72 => 26,  68 => 25,  62 => 21,  60 => 20,  54 => 17,  45 => 11,  39 => 7,  36 => 6,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PageBundle:Default:shopping_cart.html.twig", "C:\\xampp\\htdocs\\src\\PageBundle/Resources/views/Default/shopping_cart.html.twig");
    }
}
