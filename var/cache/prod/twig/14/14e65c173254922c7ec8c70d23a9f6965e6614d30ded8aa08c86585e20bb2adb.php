<?php

/* UserBundle:Security:confirm.html.twig */
class __TwigTemplate_1ada0c42a3ecf764d0822c1519b431acf7c43f15013acec6a9d74c3e7f79aed0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("security.html.twig", "UserBundle:Security:confirm.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "security.html.twig";
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
\t\t\t\tOrder confirmation\t
\t\t\t</h2>
\t\t</center>
\t\t<div class=\"col-md-3 col-md-offset-2\">
          <h3 class=\"title\">
             <p>Address Selected</p>
          </h3>
          <p>Name: ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["address"] ?? null), "getFullname", array()), "html", null, true);
        echo "</p>
          <p>Country: ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["address"] ?? null), "getCountry", array()), "html", null, true);
        echo "</p>
          <p>State: ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["address"] ?? null), "getState", array()), "html", null, true);
        echo "</p>
          <p>City : ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["address"] ?? null), "getCity", array()), "html", null, true);
        echo "</p>
          <p>Line 1: ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["address"] ?? null), "getLine1", array()), "html", null, true);
        echo "</p>
          <p>Line 2: ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute(($context["address"] ?? null), "getLine2", array()), "html", null, true);
        echo "</p>
          <p>Zip code: ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["address"] ?? null), "getZip", array()), "html", null, true);
        echo "</p>
          <a href='";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_address_book", array("user" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "email", array()))), "html", null, true);
        echo "' class=\"btn btn-warning center\"> 
          Change address
          </a>
       </div>
\t\t<div class=\"col-md-4 col-md-offset-2\">
          <h3 class=\"title\">
             <p>Shipping information</p>
          </h3>
          <p>Correos de Costa makes international shipping easy by calculating import fees at checkout, as well as clearing customs for you. In addition, you have the visibility to track your packages door-to-door.</p>
          ";
        // line 34
        if ((($context["courier"] ?? null) == 7)) {
            // line 35
            echo "            Standard Shipping — get it in 7 days (US\$50)
          ";
        }
        // line 37
        echo "          ";
        if ((($context["courier"] ?? null) == 15)) {
            // line 38
            echo "            Expedited Shipping — get it in 15 days (US\$30)
          ";
        }
        // line 40
        echo "          ";
        if ((($context["courier"] ?? null) == 30)) {
            // line 41
            echo "            Priority Shipping — get it in 30 days (US\$15)
          ";
        }
        // line 43
        echo "          
          <a href='";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_shoppingcart_courier", array("user" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "email", array()))), "html", null, true);
        echo "' class=\"btn btn-warning center\"> 
          Change shipping option
          </a>
       </div>
\t\t<div  class='col-md-offset-1 col-md-10'>
\t\t\t<center>
\t\t\t\t<h3>
\t\t\t\t";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? null), "getCartTitle", array(), "method"), "html", null, true);
        echo "\t
\t\t\t\t</h3>
\t\t\t</center>
\t\t\t";
        // line 54
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "get", array(0 => "productsOnCart"), "method")) > 0)) {
            // line 55
            echo "\t\t\t<div class=\"table-responsive\">
\t            <table id=\"confirmCart\" class=\"table\">
\t                <thead class=\"thead-inverse\">
\t                    <tr>
\t                        <th>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? null), "getProductTitle", array(), "method"), "html", null, true);
            echo "</th>
\t                        <th>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? null), "getFarmTitle", array(), "method"), "html", null, true);
            echo "</th>
\t                        <th>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? null), "getDescriptionTitle", array(), "method"), "html", null, true);
            echo "</th>
\t                        <th>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? null), "getUnitPriceTitle", array(), "method"), "html", null, true);
            echo "</th>
\t                        <th>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? null), "getQuantityTitle", array(), "method"), "html", null, true);
            echo "</th>
\t                        <th>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? null), "getSubTotalTitle", array(), "method"), "html", null, true);
            echo "</th>
\t                    </tr>
\t                </thead>
\t                <tbody>
\t\t\t\t\t";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["productsOnCart"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 69
                echo "\t                    <tr data-item-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["product"], "presentation", array(), "array"), "getId", array(), "method"), "html", null, true);
                echo "\">
\t                        <td>
\t                        \t<center>
\t                         \t\t";
                // line 72
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["product"], "presentation", array(), "array"), "getProduct", array(), "method"), "getName", array(), "method"), "html", null, true);
                echo "</br>
\t                         \t\t<img src=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["product"], "presentation", array(), "array"), "getProduct", array(), "method"), "getImage", array(), "method"), "html", null, true);
                echo "\"></img>
\t                         \t</center>
\t                        </td>
\t                        <td>";
                // line 76
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["product"], "presentation", array(), "array"), "getProduct", array(), "method"), "getFarm", array(), "method"), "getName", array(), "method"), "html", null, true);
                echo "</td>
\t                        <td>
\t                         \t<strong>";
                // line 78
                echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? null), "getWeightTitle", array(), "method"), "html", null, true);
                echo ": </strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["product"], "presentation", array(), "array"), "getWeight", array()), "html", null, true);
                echo "g </br>
\t\t                        <strong>";
                // line 79
                echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? null), "getRoastTitle", array(), "method"), "html", null, true);
                echo ": </strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["product"], "presentation", array(), "array"), "getRoast", array(), "method"), "getDescription", array(), "method"), "html", null, true);
                echo "</br>
\t\t                        <strong>";
                // line 80
                echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? null), "getGrindTitle", array(), "method"), "html", null, true);
                echo ": </strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["product"], "presentation", array(), "array"), "getGrind", array(), "method"), "getDescription", array(), "method"), "html", null, true);
                echo "</br>
\t\t                    </td>
\t\t                    ";
                // line 82
                $context["price"] = $this->getAttribute($this->getAttribute($context["product"], "presentation", array(), "array"), "getPrice", array(), "method");
                // line 83
                echo "\t                        <td class=\"unit-price\">US\$ ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["product"], "presentation", array(), "array"), "getPrice", array(), "method"), "html", null, true);
                echo "</td>
\t                        <td data-test=\"td\">
\t                        \t<p class=\"presentation-quantity\"> ";
                // line 85
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "quantity", array(), "array"), "html", null, true);
                echo " </p>
\t                        </td>
\t                        <td>
\t\t                    ";
                // line 88
                $context["total"] = ($this->getAttribute($this->getAttribute($context["product"], "presentation", array(), "array"), "getPrice", array(), "method") * $this->getAttribute($context["product"], "quantity", array(), "array"));
                // line 89
                echo "\t                        \t<p>US\$ <span class=\"item-total\">";
                echo twig_escape_filter($this->env, ($context["total"] ?? null), "html", null, true);
                echo "</span></p>
\t                        </td>
\t                    </tr>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "\t                 
\t                    <tr>
\t\t\t\t          ";
            // line 94
            if ((($context["courier"] ?? null) == 7)) {
                // line 95
                echo "\t                        <td colspan=\"4\">Shipping: US\$ <span class=\"shipping\">50</span></td>   
\t\t\t\t          ";
            }
            // line 97
            echo "\t\t\t\t          ";
            if ((($context["courier"] ?? null) == 15)) {
                // line 98
                echo "\t                        <td colspan=\"4\">Shipping: US\$ <span class=\"shipping\">30</span></td>   
\t\t\t\t          ";
            }
            // line 100
            echo "\t\t\t\t          ";
            if ((($context["courier"] ?? null) == 30)) {
                // line 101
                echo "\t                        <td colspan=\"4\">Shipping: US\$ <span class=\"shipping\">15</span></td>  
\t\t\t\t          ";
            }
            // line 102
            echo " 
\t                        <td>Total</td>
\t                        <td>US\$ <span id=\"cart-total\"></span></td>
\t                        <td></td>
\t                    </tr>
\t                </tbody>
\t            </table>
       \t\t</div>
\t        <a class='check-out btn btn-success pull-right' href=\"";
            // line 110
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_shoppingcart_payment");
            echo "\">
\t        \tConfirm order
\t        </a>
       \t\t";
        } else {
            // line 114
            echo "\t\t\t<center>
\t\t\t\t<h3>
\t\t\t\t\t";
            // line 116
            echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? null), "getEmptyCartTitle", array(), "method"), "html", null, true);
            echo "
\t\t\t\t</h3>
\t\t\t\t<button class='continue-shopping btn btn-success'>
\t\t\t\t\t";
            // line 119
            echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? null), "getContinueButton", array(), "method"), "html", null, true);
            echo "
\t\t\t\t</button> 
\t\t\t</center>
       \t\t";
        }
        // line 123
        echo "\t\t</div> 
\t</section>
</main>
";
    }

    // line 127
    public function block_javascripts($context, array $blocks = array())
    {
        // line 128
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/confirm.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
";
    }

    public function getTemplateName()
    {
        return "UserBundle:Security:confirm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  311 => 129,  306 => 128,  303 => 127,  296 => 123,  289 => 119,  283 => 116,  279 => 114,  272 => 110,  262 => 102,  258 => 101,  255 => 100,  251 => 98,  248 => 97,  244 => 95,  242 => 94,  238 => 92,  227 => 89,  225 => 88,  219 => 85,  213 => 83,  211 => 82,  204 => 80,  198 => 79,  192 => 78,  187 => 76,  181 => 73,  177 => 72,  170 => 69,  166 => 68,  159 => 64,  155 => 63,  151 => 62,  147 => 61,  143 => 60,  139 => 59,  133 => 55,  131 => 54,  125 => 51,  115 => 44,  112 => 43,  108 => 41,  105 => 40,  101 => 38,  98 => 37,  94 => 35,  92 => 34,  80 => 25,  76 => 24,  72 => 23,  68 => 22,  64 => 21,  60 => 20,  56 => 19,  52 => 18,  39 => 7,  36 => 6,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "UserBundle:Security:confirm.html.twig", "C:\\xampp\\htdocs\\crgc\\src\\UserBundle/Resources/views/Security/confirm.html.twig");
    }
}
