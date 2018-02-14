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
        $__internal_39a1e01ea892b4779afafb37dfe162b65708a19b5665cb854e6c89c0ed216bc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39a1e01ea892b4779afafb37dfe162b65708a19b5665cb854e6c89c0ed216bc0->enter($__internal_39a1e01ea892b4779afafb37dfe162b65708a19b5665cb854e6c89c0ed216bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:shopping_cart.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39a1e01ea892b4779afafb37dfe162b65708a19b5665cb854e6c89c0ed216bc0->leave($__internal_39a1e01ea892b4779afafb37dfe162b65708a19b5665cb854e6c89c0ed216bc0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_073c00ad4ce53fcd60bd07e5293efbceab88801c767d2e9b09e1ce1709c3733c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_073c00ad4ce53fcd60bd07e5293efbceab88801c767d2e9b09e1ce1709c3733c->enter($__internal_073c00ad4ce53fcd60bd07e5293efbceab88801c767d2e9b09e1ce1709c3733c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Shopping Cup ";
        
        $__internal_073c00ad4ce53fcd60bd07e5293efbceab88801c767d2e9b09e1ce1709c3733c->leave($__internal_073c00ad4ce53fcd60bd07e5293efbceab88801c767d2e9b09e1ce1709c3733c_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_cac542fa74b2422f25f802aa87da4f2aa731f69a275c51015a1c8d3f4a265c84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cac542fa74b2422f25f802aa87da4f2aa731f69a275c51015a1c8d3f4a265c84->enter($__internal_cac542fa74b2422f25f802aa87da4f2aa731f69a275c51015a1c8d3f4a265c84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_cac542fa74b2422f25f802aa87da4f2aa731f69a275c51015a1c8d3f4a265c84->leave($__internal_cac542fa74b2422f25f802aa87da4f2aa731f69a275c51015a1c8d3f4a265c84_prof);

    }

    // line 94
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_17aab29b388942760ea11681aebe0fa97c42507ce61e6d3a8daa547825923713 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17aab29b388942760ea11681aebe0fa97c42507ce61e6d3a8daa547825923713->enter($__internal_17aab29b388942760ea11681aebe0fa97c42507ce61e6d3a8daa547825923713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 95
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/js/shopping_cart.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
";
        
        $__internal_17aab29b388942760ea11681aebe0fa97c42507ce61e6d3a8daa547825923713->leave($__internal_17aab29b388942760ea11681aebe0fa97c42507ce61e6d3a8daa547825923713_prof);

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
{% endblock %}", "PageBundle:Default:shopping_cart.html.twig", "C:\\xampp\\htdocs\\src\\PageBundle/Resources/views/Default/shopping_cart.html.twig");
    }
}
