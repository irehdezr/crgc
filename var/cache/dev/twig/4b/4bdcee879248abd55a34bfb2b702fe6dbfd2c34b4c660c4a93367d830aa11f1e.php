<?php

/* PageBundle:Default:shopping_cart.html.twig */
class __TwigTemplate_9f5b7d58c0140354090d7329a4197823b9a96aa2f9c8becf6f224918af9ae1e0 extends Twig_Template
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
        $__internal_80fea5bdc8bc023f338ef5b527f623ca5f54afdb2f0385febfb18dec08f81890 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80fea5bdc8bc023f338ef5b527f623ca5f54afdb2f0385febfb18dec08f81890->enter($__internal_80fea5bdc8bc023f338ef5b527f623ca5f54afdb2f0385febfb18dec08f81890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:shopping_cart.html.twig"));

        $__internal_4da5b17c734573c39a6033b0dda89c1c909bde4157b154f0c2c937fb4ff47b28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4da5b17c734573c39a6033b0dda89c1c909bde4157b154f0c2c937fb4ff47b28->enter($__internal_4da5b17c734573c39a6033b0dda89c1c909bde4157b154f0c2c937fb4ff47b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:shopping_cart.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80fea5bdc8bc023f338ef5b527f623ca5f54afdb2f0385febfb18dec08f81890->leave($__internal_80fea5bdc8bc023f338ef5b527f623ca5f54afdb2f0385febfb18dec08f81890_prof);

        
        $__internal_4da5b17c734573c39a6033b0dda89c1c909bde4157b154f0c2c937fb4ff47b28->leave($__internal_4da5b17c734573c39a6033b0dda89c1c909bde4157b154f0c2c937fb4ff47b28_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_984f9b39a7020fa9d11d60e6aed3d962778fd308a156d044cec0c2173034417d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_984f9b39a7020fa9d11d60e6aed3d962778fd308a156d044cec0c2173034417d->enter($__internal_984f9b39a7020fa9d11d60e6aed3d962778fd308a156d044cec0c2173034417d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d6936e440afac4145b89cfc40906d51e2297ee8c7a3406cb830a30972a7d9506 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6936e440afac4145b89cfc40906d51e2297ee8c7a3406cb830a30972a7d9506->enter($__internal_d6936e440afac4145b89cfc40906d51e2297ee8c7a3406cb830a30972a7d9506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Shopping Cup ";
        
        $__internal_d6936e440afac4145b89cfc40906d51e2297ee8c7a3406cb830a30972a7d9506->leave($__internal_d6936e440afac4145b89cfc40906d51e2297ee8c7a3406cb830a30972a7d9506_prof);

        
        $__internal_984f9b39a7020fa9d11d60e6aed3d962778fd308a156d044cec0c2173034417d->leave($__internal_984f9b39a7020fa9d11d60e6aed3d962778fd308a156d044cec0c2173034417d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e7e1cf1fc710ec140700e3129243097702d6570ea6e502443226e7d6d3a5b77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e7e1cf1fc710ec140700e3129243097702d6570ea6e502443226e7d6d3a5b77->enter($__internal_4e7e1cf1fc710ec140700e3129243097702d6570ea6e502443226e7d6d3a5b77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c6e2dcd85b96cafbe39bff55eaf2617e69908ba4f076ef8e237f7a496b20f985 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6e2dcd85b96cafbe39bff55eaf2617e69908ba4f076ef8e237f7a496b20f985->enter($__internal_c6e2dcd85b96cafbe39bff55eaf2617e69908ba4f076ef8e237f7a496b20f985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<main>
\t\t<section>
\t\t\t<center>
\t\t\t\t<h2>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getPageTitle", array(), "method"), "html", null, true);
        echo "</h2>
\t\t\t</center>
\t\t</section>
\t\t<div  class='col-md-offset-1 col-md-10'>
\t\t\t<center>
\t\t\t\t<h3>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getCartTitle", array(), "method"), "html", null, true);
        echo "</h3>
\t\t\t</center>
\t\t\t";
        // line 16
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "productsOnCart"), "method")) > 0)) {
            // line 17
            echo "\t\t\t\t<div class=\"table-responsive\">
            \t\t<table id=\"shoppingCart\" class=\"table\">
                \t\t<thead class=\"thead-inverse\">
                    \t\t<tr>
\t\t                        <th>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getProductTitle", array(), "method"), "html", null, true);
            echo "</th>
\t\t                        <th>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getFarmTitle", array(), "method"), "html", null, true);
            echo "</th>
\t\t                        <th>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getDescriptionTitle", array(), "method"), "html", null, true);
            echo "</th>
\t\t                        <th>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getUnitPriceTitle", array(), "method"), "html", null, true);
            echo "</th>
\t\t                        <th>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getQuantityTitle", array(), "method"), "html", null, true);
            echo "</th>
\t\t                        <th>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getSubTotalTitle", array(), "method"), "html", null, true);
            echo "</th>
\t\t                        <th>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getActionTitle", array(), "method"), "html", null, true);
            echo "</th>
\t\t                    </tr>
\t\t                </thead>
\t\t                <tbody>
\t\t\t\t\t\t\t";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["productsOnCart"] ?? $this->getContext($context, "productsOnCart")));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 32
                echo "\t\t\t                    <tr data-item-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["product"], "presentation", array(), "array"), "getId", array(), "method"), "html", null, true);
                echo "\">
\t\t\t                        <td>
\t\t\t                        \t<center>
\t\t\t                         \t\t";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["product"], "presentation", array(), "array"), "getProduct", array(), "method"), "getName", array(), "method"), "html", null, true);
                echo "</br>
\t\t\t                         \t\t<img src=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["product"], "presentation", array(), "array"), "getProduct", array(), "method"), "getImage", array(), "method"), "html", null, true);
                echo "\"></img>
\t\t\t                         \t</center>
\t\t\t                        </td>
\t\t\t                        <td>";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["product"], "presentation", array(), "array"), "getProduct", array(), "method"), "getFarm", array(), "method"), "getName", array(), "method"), "html", null, true);
                echo "</td>
\t\t\t                        <td>
\t\t\t                         \t<strong>";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getWeightTitle", array(), "method"), "html", null, true);
                echo ": </strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["product"], "presentation", array(), "array"), "getWeight", array()), "html", null, true);
                echo "</br>
\t\t\t\t                        <strong>";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getRoastTitle", array(), "method"), "html", null, true);
                echo ": </strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["product"], "presentation", array(), "array"), "getRoast", array(), "method"), "getDescription", array(), "method"), "html", null, true);
                echo "</br>
\t\t\t\t                        <strong>";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getGrindTitle", array(), "method"), "html", null, true);
                echo ": </strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["product"], "presentation", array(), "array"), "getGrind", array(), "method"), "getDescription", array(), "method"), "html", null, true);
                echo "</br>
\t\t\t\t                    </td>
\t\t\t                        <td class=\"unit-price\">US\$ 
\t\t\t                        \t<span class=\"price\">";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["product"], "presentation", array(), "array"), "getPrice", array(), "method"), "html", null, true);
                echo "</span>
\t\t\t                        </td>
\t\t\t                        <td data-test=\"td\">
\t\t\t                        \t<input type=\"number\" class=\"presentation-quantity\" value=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "quantity", array(), "array"), "html", null, true);
                echo "\" min=\"1\"> 
\t\t\t                        </td>
\t\t\t                        <td>
\t\t\t                        \t<p> US\$ <span class=\"presentation-total\"></span></p>
\t\t\t                        </td>
\t\t\t                        <td> 
\t\t\t                    \t\t<button class=\"remove-item btn btn-danger\">";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getRemoveButton", array(), "method"), "html", null, true);
                echo "</button>
\t\t\t                        </td>
\t\t\t                    </tr>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "\t                 
\t\t                    <tr>
\t\t                        <td colspan=\"4\">";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getShippingTitle", array(), "method"), "html", null, true);
            echo "</td>   
\t\t                        <td>Total</td>
\t\t                        <td>
\t\t                        \t<p>US\$ <span id=\"cart-total\"></span></p>
\t\t                        </td>
\t\t                        <td></td>
\t\t                    </tr>
\t\t                </tbody>
\t\t            </table>
   \t\t\t\t</div>
\t\t\t\t<button class='continue-shopping btn btn-success'>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getContinueButton", array(), "method"), "html", null, true);
            echo "</button> 
\t\t        <button class='check-out btn btn-success pull-right'>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getCheckOutButton", array(), "method"), "html", null, true);
            echo "</button>
   \t\t\t";
        } else {
            // line 73
            echo "\t\t\t\t<center>
\t\t\t\t\t<h3>";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getEmptyCartTitle", array(), "method"), "html", null, true);
            echo "</h3>
\t\t\t\t\t<button class='continue-shopping btn btn-success'>";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getContinueButton", array(), "method"), "html", null, true);
            echo "</button> 
\t\t\t\t</center>
   \t\t\t";
        }
        // line 78
        echo "\t\t</div> 
\t</main>
";
        
        $__internal_c6e2dcd85b96cafbe39bff55eaf2617e69908ba4f076ef8e237f7a496b20f985->leave($__internal_c6e2dcd85b96cafbe39bff55eaf2617e69908ba4f076ef8e237f7a496b20f985_prof);

        
        $__internal_4e7e1cf1fc710ec140700e3129243097702d6570ea6e502443226e7d6d3a5b77->leave($__internal_4e7e1cf1fc710ec140700e3129243097702d6570ea6e502443226e7d6d3a5b77_prof);

    }

    // line 81
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fdefdddcd45784e88861f5aa2b8bf7d771b42e7f58d813b98cb2fecfdb081b9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdefdddcd45784e88861f5aa2b8bf7d771b42e7f58d813b98cb2fecfdb081b9d->enter($__internal_fdefdddcd45784e88861f5aa2b8bf7d771b42e7f58d813b98cb2fecfdb081b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2894d7f907831b81155f4f8cbf5a6e1804ca26f553e45cb7b6ad40dcb41b6d18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2894d7f907831b81155f4f8cbf5a6e1804ca26f553e45cb7b6ad40dcb41b6d18->enter($__internal_2894d7f907831b81155f4f8cbf5a6e1804ca26f553e45cb7b6ad40dcb41b6d18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 82
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script>
\t\tvar checkSessionmUrl = \"";
        // line 84
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_check_session"), "js"), "html", null, true);
        echo "\";
\t\tvar removeItemUrl = \"";
        // line 85
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_remove_presentation"), "js"), "html", null, true);
        echo "\";
\t</script>
    <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/shopping_cart.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
";
        
        $__internal_2894d7f907831b81155f4f8cbf5a6e1804ca26f553e45cb7b6ad40dcb41b6d18->leave($__internal_2894d7f907831b81155f4f8cbf5a6e1804ca26f553e45cb7b6ad40dcb41b6d18_prof);

        
        $__internal_fdefdddcd45784e88861f5aa2b8bf7d771b42e7f58d813b98cb2fecfdb081b9d->leave($__internal_fdefdddcd45784e88861f5aa2b8bf7d771b42e7f58d813b98cb2fecfdb081b9d_prof);

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
        return array (  272 => 87,  267 => 85,  263 => 84,  257 => 82,  248 => 81,  236 => 78,  230 => 75,  226 => 74,  223 => 73,  218 => 71,  214 => 70,  201 => 60,  197 => 58,  187 => 55,  178 => 49,  172 => 46,  164 => 43,  158 => 42,  152 => 41,  147 => 39,  141 => 36,  137 => 35,  130 => 32,  126 => 31,  119 => 27,  115 => 26,  111 => 25,  107 => 24,  103 => 23,  99 => 22,  95 => 21,  89 => 17,  87 => 16,  82 => 14,  74 => 9,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
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
\t<main>
\t\t<section>
\t\t\t<center>
\t\t\t\t<h2>{{ template.getPageTitle() }}</h2>
\t\t\t</center>
\t\t</section>
\t\t<div  class='col-md-offset-1 col-md-10'>
\t\t\t<center>
\t\t\t\t<h3>{{ template.getCartTitle() }}</h3>
\t\t\t</center>
\t\t\t{% if app.session.get(\"productsOnCart\")|length > 0 %}
\t\t\t\t<div class=\"table-responsive\">
            \t\t<table id=\"shoppingCart\" class=\"table\">
                \t\t<thead class=\"thead-inverse\">
                    \t\t<tr>
\t\t                        <th>{{ template.getProductTitle() }}</th>
\t\t                        <th>{{ template.getFarmTitle() }}</th>
\t\t                        <th>{{ template.getDescriptionTitle() }}</th>
\t\t                        <th>{{ template.getUnitPriceTitle() }}</th>
\t\t                        <th>{{ template.getQuantityTitle() }}</th>
\t\t                        <th>{{ template.getSubTotalTitle() }}</th>
\t\t                        <th>{{ template.getActionTitle() }}</th>
\t\t                    </tr>
\t\t                </thead>
\t\t                <tbody>
\t\t\t\t\t\t\t{% for product in productsOnCart %}
\t\t\t                    <tr data-item-id=\"{{ product['presentation'].getId() }}\">
\t\t\t                        <td>
\t\t\t                        \t<center>
\t\t\t                         \t\t{{ product['presentation'].getProduct().getName() }}</br>
\t\t\t                         \t\t<img src=\"{{ product['presentation'].getProduct().getImage() }}\"></img>
\t\t\t                         \t</center>
\t\t\t                        </td>
\t\t\t                        <td>{{ product['presentation'].getProduct().getFarm().getName() }}</td>
\t\t\t                        <td>
\t\t\t                         \t<strong>{{ template.getWeightTitle() }}: </strong>{{ product['presentation'].getWeight }}</br>
\t\t\t\t                        <strong>{{ template.getRoastTitle() }}: </strong>{{product['presentation'].getRoast().getDescription() }}</br>
\t\t\t\t                        <strong>{{ template.getGrindTitle() }}: </strong>{{product['presentation'].getGrind().getDescription() }}</br>
\t\t\t\t                    </td>
\t\t\t                        <td class=\"unit-price\">US\$ 
\t\t\t                        \t<span class=\"price\">{{ product['presentation'].getPrice() }}</span>
\t\t\t                        </td>
\t\t\t                        <td data-test=\"td\">
\t\t\t                        \t<input type=\"number\" class=\"presentation-quantity\" value=\"{{ product['quantity'] }}\" min=\"1\"> 
\t\t\t                        </td>
\t\t\t                        <td>
\t\t\t                        \t<p> US\$ <span class=\"presentation-total\"></span></p>
\t\t\t                        </td>
\t\t\t                        <td> 
\t\t\t                    \t\t<button class=\"remove-item btn btn-danger\">{{ template.getRemoveButton() }}</button>
\t\t\t                        </td>
\t\t\t                    </tr>
\t\t\t\t\t\t\t{% endfor %}\t                 
\t\t                    <tr>
\t\t                        <td colspan=\"4\">{{ template.getShippingTitle() }}</td>   
\t\t                        <td>Total</td>
\t\t                        <td>
\t\t                        \t<p>US\$ <span id=\"cart-total\"></span></p>
\t\t                        </td>
\t\t                        <td></td>
\t\t                    </tr>
\t\t                </tbody>
\t\t            </table>
   \t\t\t\t</div>
\t\t\t\t<button class='continue-shopping btn btn-success'>{{ template.getContinueButton() }}</button> 
\t\t        <button class='check-out btn btn-success pull-right'>{{ template.getCheckOutButton() }}</button>
   \t\t\t{% else %}
\t\t\t\t<center>
\t\t\t\t\t<h3>{{ template.getEmptyCartTitle() }}</h3>
\t\t\t\t\t<button class='continue-shopping btn btn-success'>{{ template.getContinueButton() }}</button> 
\t\t\t\t</center>
   \t\t\t{% endif %}
\t\t</div> 
\t</main>
{% endblock %}
{% block javascripts %}
    {{ parent() }}
\t<script>
\t\tvar checkSessionmUrl = \"{{ path('user_check_session') | escape('js') }}\";
\t\tvar removeItemUrl = \"{{ path('product_remove_presentation') | escape('js') }}\";
\t</script>
    <script src=\"{{ asset('js/shopping_cart.js') }}\" type=\"text/javascript\"></script> 
{% endblock %}", "PageBundle:Default:shopping_cart.html.twig", "C:\\xampp\\htdocs\\crgc\\src\\PageBundle/Resources/views/Default/shopping_cart.html.twig");
    }
}
