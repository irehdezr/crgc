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
        $__internal_99efc8197d121292f9bbe311758efd666e492dca57a0f8cfdca5980598ee330f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99efc8197d121292f9bbe311758efd666e492dca57a0f8cfdca5980598ee330f->enter($__internal_99efc8197d121292f9bbe311758efd666e492dca57a0f8cfdca5980598ee330f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:shopping_cart.html.twig"));

        $__internal_7081939e7c18403f58c604944a11c142bbcf112f595e78827b899b29989745b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7081939e7c18403f58c604944a11c142bbcf112f595e78827b899b29989745b2->enter($__internal_7081939e7c18403f58c604944a11c142bbcf112f595e78827b899b29989745b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:shopping_cart.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99efc8197d121292f9bbe311758efd666e492dca57a0f8cfdca5980598ee330f->leave($__internal_99efc8197d121292f9bbe311758efd666e492dca57a0f8cfdca5980598ee330f_prof);

        
        $__internal_7081939e7c18403f58c604944a11c142bbcf112f595e78827b899b29989745b2->leave($__internal_7081939e7c18403f58c604944a11c142bbcf112f595e78827b899b29989745b2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_eb3d7959eb1b2fd9b9b58cf97f309b0892be109bfeb1522de1fc4746069aefae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb3d7959eb1b2fd9b9b58cf97f309b0892be109bfeb1522de1fc4746069aefae->enter($__internal_eb3d7959eb1b2fd9b9b58cf97f309b0892be109bfeb1522de1fc4746069aefae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b4a58aeba7f9e9c8de9efa0d8ee35a4ae0db4240dee79e75037f0792d03e27ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4a58aeba7f9e9c8de9efa0d8ee35a4ae0db4240dee79e75037f0792d03e27ed->enter($__internal_b4a58aeba7f9e9c8de9efa0d8ee35a4ae0db4240dee79e75037f0792d03e27ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Shopping Cup ";
        
        $__internal_b4a58aeba7f9e9c8de9efa0d8ee35a4ae0db4240dee79e75037f0792d03e27ed->leave($__internal_b4a58aeba7f9e9c8de9efa0d8ee35a4ae0db4240dee79e75037f0792d03e27ed_prof);

        
        $__internal_eb3d7959eb1b2fd9b9b58cf97f309b0892be109bfeb1522de1fc4746069aefae->leave($__internal_eb3d7959eb1b2fd9b9b58cf97f309b0892be109bfeb1522de1fc4746069aefae_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_da6dd457e3ca197b7a8367dfc0a6edcdf35592246a25c28e66bb30d715f97fc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da6dd457e3ca197b7a8367dfc0a6edcdf35592246a25c28e66bb30d715f97fc7->enter($__internal_da6dd457e3ca197b7a8367dfc0a6edcdf35592246a25c28e66bb30d715f97fc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d7e0f2c648a95b5cf5120ef159f8a4b4a02fab94baa228378a0fd8a7a9b71ff1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7e0f2c648a95b5cf5120ef159f8a4b4a02fab94baa228378a0fd8a7a9b71ff1->enter($__internal_d7e0f2c648a95b5cf5120ef159f8a4b4a02fab94baa228378a0fd8a7a9b71ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getRemoveButton", array(), "method"), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getShippingTitle", array(), "method"), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getContinueButton", array(), "method"), "html", null, true);
            echo "
\t\t\t</button> 
\t        <button class='check-out btn btn-success pull-right'>
\t        \t";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getCheckOutButton", array(), "method"), "html", null, true);
            echo "
\t        </button>
       \t\t";
        } else {
            // line 77
            echo "\t\t\t<center>
\t\t\t\t<h3>
\t\t\t\t\t";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getEmptyCartTitle", array(), "method"), "html", null, true);
            echo "
\t\t\t\t</h3>
\t\t\t\t<button class='continue-shopping btn btn-success'>
\t\t\t\t\t";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getContinueButton", array(), "method"), "html", null, true);
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
        
        $__internal_d7e0f2c648a95b5cf5120ef159f8a4b4a02fab94baa228378a0fd8a7a9b71ff1->leave($__internal_d7e0f2c648a95b5cf5120ef159f8a4b4a02fab94baa228378a0fd8a7a9b71ff1_prof);

        
        $__internal_da6dd457e3ca197b7a8367dfc0a6edcdf35592246a25c28e66bb30d715f97fc7->leave($__internal_da6dd457e3ca197b7a8367dfc0a6edcdf35592246a25c28e66bb30d715f97fc7_prof);

    }

    // line 90
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_21c7d974afc0bfa43c49dc2140cd871f2eb56dbb58e7e8900cfe3d6a3c20fb36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21c7d974afc0bfa43c49dc2140cd871f2eb56dbb58e7e8900cfe3d6a3c20fb36->enter($__internal_21c7d974afc0bfa43c49dc2140cd871f2eb56dbb58e7e8900cfe3d6a3c20fb36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5c6be1a6018d42783ce65545da9a4ecb8762af904ecc88b278f54a1fe2bcc494 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c6be1a6018d42783ce65545da9a4ecb8762af904ecc88b278f54a1fe2bcc494->enter($__internal_5c6be1a6018d42783ce65545da9a4ecb8762af904ecc88b278f54a1fe2bcc494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 91
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/js/shopping_cart.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
";
        
        $__internal_5c6be1a6018d42783ce65545da9a4ecb8762af904ecc88b278f54a1fe2bcc494->leave($__internal_5c6be1a6018d42783ce65545da9a4ecb8762af904ecc88b278f54a1fe2bcc494_prof);

        
        $__internal_21c7d974afc0bfa43c49dc2140cd871f2eb56dbb58e7e8900cfe3d6a3c20fb36->leave($__internal_21c7d974afc0bfa43c49dc2140cd871f2eb56dbb58e7e8900cfe3d6a3c20fb36_prof);

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
        return array (  270 => 92,  265 => 91,  256 => 90,  243 => 86,  236 => 82,  230 => 79,  226 => 77,  220 => 74,  214 => 71,  202 => 62,  198 => 60,  188 => 57,  179 => 51,  174 => 49,  167 => 47,  161 => 46,  155 => 45,  150 => 43,  144 => 40,  140 => 39,  133 => 36,  129 => 35,  122 => 31,  118 => 30,  114 => 29,  110 => 28,  106 => 27,  102 => 26,  98 => 25,  92 => 21,  90 => 20,  84 => 17,  75 => 11,  69 => 7,  60 => 6,  42 => 3,  11 => 1,);
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
\t                        <td class=\"unit-price\">{{ product['presentation'].getPrice() }}</td>
\t                        <td data-test=\"td\">
\t                        \t<input type=\"number\" class=\"presentation-quantity\" value=\"{{ product['quantity'] }}\"> 
\t                        </td>
\t                        <td>
\t                        \t<p class=\"presentation-total\"></p>
\t                        </td>
\t                        <td> 
\t                    \t\t<button class=\"remove-item btn btn-danger\">{{ template.getRemoveButton() }}</button>
\t                        </td>
\t                    </tr>
\t\t\t\t\t\t{% endfor %}\t                 
\t                    <tr>
\t                        <td colspan=\"4\">{{ template.getShippingTitle() }}</td>   
\t                        <td>Total</td>
\t                        <td id=\"cart-total\"></td>
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
