<?php

/* PageBundle:Default:shopping_cart.html.twig */
class __TwigTemplate_8fb661aba9d50d4cad8c84116acf216d33c942dd5f83b561a90ac1644e160fa3 extends Twig_Template
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
        $__internal_44c7b92ab7ed79220581d1ec93be4cd01e79c5ca7b55bbee344665329d519ea8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44c7b92ab7ed79220581d1ec93be4cd01e79c5ca7b55bbee344665329d519ea8->enter($__internal_44c7b92ab7ed79220581d1ec93be4cd01e79c5ca7b55bbee344665329d519ea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:shopping_cart.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44c7b92ab7ed79220581d1ec93be4cd01e79c5ca7b55bbee344665329d519ea8->leave($__internal_44c7b92ab7ed79220581d1ec93be4cd01e79c5ca7b55bbee344665329d519ea8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1f1118dc10efbecb92670d0b1172da99c77cfe850a015a87c776aaea0420545a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f1118dc10efbecb92670d0b1172da99c77cfe850a015a87c776aaea0420545a->enter($__internal_1f1118dc10efbecb92670d0b1172da99c77cfe850a015a87c776aaea0420545a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Shopping Cup ";
        
        $__internal_1f1118dc10efbecb92670d0b1172da99c77cfe850a015a87c776aaea0420545a->leave($__internal_1f1118dc10efbecb92670d0b1172da99c77cfe850a015a87c776aaea0420545a_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_f1e2422ce61c44ebe2c6e0ca174a61077d6cab5c13fe24cd8654c5d4026fd866 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1e2422ce61c44ebe2c6e0ca174a61077d6cab5c13fe24cd8654c5d4026fd866->enter($__internal_f1e2422ce61c44ebe2c6e0ca174a61077d6cab5c13fe24cd8654c5d4026fd866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<main>
\t<section>
\t\t<center>
\t\t\t<h2>
\t\t\t\t";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getPageTitle", array(), "method"), "html", null, true);
        echo "\t\t
\t\t\t</h2>
\t\t</center>
\t\t<div  class='col-md-offset-1 col-md-10'>
\t\t\t<center>
\t\t\t\t<h3>
\t\t\t\t";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getCartTitle", array(), "method"), "html", null, true);
        echo "\t
\t\t\t\t</h3>
\t\t\t</center>
\t\t\t";
        // line 20
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "productsOnCart"), "method")) > 0)) {
            // line 21
            echo "\t\t\t<div class=\"table-responsive\">
\t            <table id=\"shoppingCart\" class=\"table\">
\t                <thead class=\"thead-inverse\">
\t                    <tr>
\t                        <th>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getProductTitle", array(), "method"), "html", null, true);
            echo "</th>
\t                        <th>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getFarmTitle", array(), "method"), "html", null, true);
            echo "</th>
\t                        <th>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getDescriptionTitle", array(), "method"), "html", null, true);
            echo "</th>
\t                        <th>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getUnitPriceTitle", array(), "method"), "html", null, true);
            echo "</th>
\t                        <th>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getQuantityTitle", array(), "method"), "html", null, true);
            echo "</th>
\t                        <th>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getSubTotalTitle", array(), "method"), "html", null, true);
            echo "</th>
\t                        <th>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getActionTitle", array(), "method"), "html", null, true);
            echo "</th>
\t                    </tr>
\t                </thead>
\t                <tbody>
\t\t\t\t\t";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["productsOnCart"] ?? $this->getContext($context, "productsOnCart")));
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
                echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getWeightTitle", array(), "method"), "html", null, true);
                echo ": </strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["product"], "presentation", array(), "array"), "getWeight", array()), "html", null, true);
                echo "g </br>
\t\t                        <strong>";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getRoastTitle", array(), "method"), "html", null, true);
                echo ": </strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["product"], "presentation", array(), "array"), "getRoast", array(), "method"), "getDescription", array(), "method"), "html", null, true);
                echo "</br>
\t\t                        <strong>";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getGrindTitle", array(), "method"), "html", null, true);
                echo ": </strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["product"], "presentation", array(), "array"), "getGrind", array(), "method"), "getDescription", array(), "method"), "html", null, true);
                echo "</br>
\t\t                    </td>
\t                        <td class=\"unit-price\">US\$ 
\t                        \t<span class=\"price\">";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["product"], "presentation", array(), "array"), "getPrice", array(), "method"), "html", null, true);
                echo "</span>
\t                        </td>
\t                        <td data-test=\"td\">
\t                        \t<input type=\"number\" class=\"presentation-quantity\" value=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "quantity", array(), "array"), "html", null, true);
                echo "\" min=\"1\"> 
\t                        </td>
\t                        <td>
\t                        \t<p> US\$ <span class=\"presentation-total\"></span></p>
\t                        </td>
\t                        <td> 
\t                    \t\t<button class=\"remove-item btn btn-danger\">";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getRemoveButton", array(), "method"), "html", null, true);
                echo "</button>
\t                        </td>
\t                    </tr>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "\t                 
\t                    <tr>
\t                        <td colspan=\"4\">";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getShippingTitle", array(), "method"), "html", null, true);
            echo "</td>   
\t                        <td>Total</td>
\t                        <td>
\t                        \t<p>US\$ <span id=\"cart-total\"></span></p>
\t                        </td>
\t                        <td></td>
\t                    </tr>
\t                </tbody>
\t            </table>
       \t\t</div>
\t\t\t<button class='continue-shopping btn btn-success'>
\t\t\t\t";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getContinueButton", array(), "method"), "html", null, true);
            echo "
\t\t\t</button> 
\t        <button class='check-out btn btn-success pull-right'>
\t        \t";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getCheckOutButton", array(), "method"), "html", null, true);
            echo "
\t        </button>
       \t\t";
        } else {
            // line 81
            echo "\t\t\t<center>
\t\t\t\t<h3>
\t\t\t\t\t";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getEmptyCartTitle", array(), "method"), "html", null, true);
            echo "
\t\t\t\t</h3>
\t\t\t\t<button class='continue-shopping btn btn-success'>
\t\t\t\t\t";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getContinueButton", array(), "method"), "html", null, true);
            echo "
\t\t\t\t</button> 
\t\t\t</center>
       \t\t";
        }
        // line 90
        echo "\t\t</div> 
\t</section>
</main>
";
        
        $__internal_f1e2422ce61c44ebe2c6e0ca174a61077d6cab5c13fe24cd8654c5d4026fd866->leave($__internal_f1e2422ce61c44ebe2c6e0ca174a61077d6cab5c13fe24cd8654c5d4026fd866_prof);

    }

    // line 94
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f80a8b2a769aaa1596c30a8d892798b35c3069f09385d3c66c61ebb699e8b305 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f80a8b2a769aaa1596c30a8d892798b35c3069f09385d3c66c61ebb699e8b305->enter($__internal_f80a8b2a769aaa1596c30a8d892798b35c3069f09385d3c66c61ebb699e8b305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 95
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/js/shopping_cart.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
";
        
        $__internal_f80a8b2a769aaa1596c30a8d892798b35c3069f09385d3c66c61ebb699e8b305->leave($__internal_f80a8b2a769aaa1596c30a8d892798b35c3069f09385d3c66c61ebb699e8b305_prof);

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
        return array (  253 => 96,  248 => 95,  242 => 94,  232 => 90,  225 => 86,  219 => 83,  215 => 81,  209 => 78,  203 => 75,  189 => 64,  185 => 62,  175 => 59,  166 => 53,  160 => 50,  152 => 47,  146 => 46,  140 => 45,  135 => 43,  129 => 40,  125 => 39,  118 => 36,  114 => 35,  107 => 31,  103 => 30,  99 => 29,  95 => 28,  91 => 27,  87 => 26,  83 => 25,  77 => 21,  75 => 20,  69 => 17,  60 => 11,  54 => 7,  48 => 6,  36 => 3,  11 => 1,);
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


{% block body %}
<main>
\t<section>
\t\t<center>
\t\t\t<h2>
\t\t\t\t{{ template.getPageTitle() }}\t\t
\t\t\t</h2>
\t\t</center>
\t\t<div  class='col-md-offset-1 col-md-10'>
\t\t\t<center>
\t\t\t\t<h3>
\t\t\t\t{{ template.getCartTitle() }}\t
\t\t\t\t</h3>
\t\t\t</center>
\t\t\t{% if app.session.get(\"productsOnCart\")|length > 0 %}
\t\t\t<div class=\"table-responsive\">
\t            <table id=\"shoppingCart\" class=\"table\">
\t                <thead class=\"thead-inverse\">
\t                    <tr>
\t                        <th>{{ template.getProductTitle() }}</th>
\t                        <th>{{ template.getFarmTitle() }}</th>
\t                        <th>{{ template.getDescriptionTitle() }}</th>
\t                        <th>{{ template.getUnitPriceTitle() }}</th>
\t                        <th>{{ template.getQuantityTitle() }}</th>
\t                        <th>{{ template.getSubTotalTitle() }}</th>
\t                        <th>{{ template.getActionTitle() }}</th>
\t                    </tr>
\t                </thead>
\t                <tbody>
\t\t\t\t\t{% for product in productsOnCart %}
\t                    <tr data-item-id=\"{{ product['presentation'].getId() }}\">
\t                        <td>
\t                        \t<center>
\t                         \t\t{{ product['presentation'].getProduct().getName() }}</br>
\t                         \t\t<img src=\"{{ product['presentation'].getProduct().getImage() }}\"></img>
\t                         \t</center>
\t                        </td>
\t                        <td>{{ product['presentation'].getProduct().getFarm().getName() }}</td>
\t                        <td>
\t                         \t<strong>{{ template.getWeightTitle() }}: </strong>{{ product['presentation'].getWeight }}g </br>
\t\t                        <strong>{{ template.getRoastTitle() }}: </strong>{{ product['presentation'].getRoast().getDescription() }}</br>
\t\t                        <strong>{{ template.getGrindTitle() }}: </strong>{{ product['presentation'].getGrind().getDescription() }}</br>
\t\t                    </td>
\t                        <td class=\"unit-price\">US\$ 
\t                        \t<span class=\"price\">{{ product['presentation'].getPrice() }}</span>
\t                        </td>
\t                        <td data-test=\"td\">
\t                        \t<input type=\"number\" class=\"presentation-quantity\" value=\"{{ product['quantity'] }}\" min=\"1\"> 
\t                        </td>
\t                        <td>
\t                        \t<p> US\$ <span class=\"presentation-total\"></span></p>
\t                        </td>
\t                        <td> 
\t                    \t\t<button class=\"remove-item btn btn-danger\">{{ template.getRemoveButton() }}</button>
\t                        </td>
\t                    </tr>
\t\t\t\t\t\t{% endfor %}\t                 
\t                    <tr>
\t                        <td colspan=\"4\">{{ template.getShippingTitle() }}</td>   
\t                        <td>Total</td>
\t                        <td>
\t                        \t<p>US\$ <span id=\"cart-total\"></span></p>
\t                        </td>
\t                        <td></td>
\t                    </tr>
\t                </tbody>
\t            </table>
       \t\t</div>
\t\t\t<button class='continue-shopping btn btn-success'>
\t\t\t\t{{ template.getContinueButton() }}
\t\t\t</button> 
\t        <button class='check-out btn btn-success pull-right'>
\t        \t{{ template.getCheckOutButton() }}
\t        </button>
       \t\t{% else %}
\t\t\t<center>
\t\t\t\t<h3>
\t\t\t\t\t{{ template.getEmptyCartTitle() }}
\t\t\t\t</h3>
\t\t\t\t<button class='continue-shopping btn btn-success'>
\t\t\t\t\t{{ template.getContinueButton() }}
\t\t\t\t</button> 
\t\t\t</center>
       \t\t{% endif %}
\t\t</div> 
\t</section>
</main>
{% endblock %}
{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('/web/public/js/shopping_cart.js') }}\" type=\"text/javascript\"></script> 
{% endblock %}", "PageBundle:Default:shopping_cart.html.twig", "D:\\Carlos\\xampp\\htdocs\\crgc\\src\\PageBundle/Resources/views/Default/shopping_cart.html.twig");
    }
}
