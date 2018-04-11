<?php

/* @Page/Default/shopping_cart.html.twig */
class __TwigTemplate_fb0e60337627ee0a3a1ab13898d78411ff925fa3056260e4e09ac1bb0e357aeb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "@Page/Default/shopping_cart.html.twig", 1);
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
        $__internal_acb8c0aaa1ea88d959974612819b596ebe1f747d6839186088d059daba84c0bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acb8c0aaa1ea88d959974612819b596ebe1f747d6839186088d059daba84c0bf->enter($__internal_acb8c0aaa1ea88d959974612819b596ebe1f747d6839186088d059daba84c0bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Page/Default/shopping_cart.html.twig"));

        $__internal_6fbd6d3375df6d35d1dd07a79b472a108f051f3bbec2b470c5974e14b9de5f36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fbd6d3375df6d35d1dd07a79b472a108f051f3bbec2b470c5974e14b9de5f36->enter($__internal_6fbd6d3375df6d35d1dd07a79b472a108f051f3bbec2b470c5974e14b9de5f36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Page/Default/shopping_cart.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_acb8c0aaa1ea88d959974612819b596ebe1f747d6839186088d059daba84c0bf->leave($__internal_acb8c0aaa1ea88d959974612819b596ebe1f747d6839186088d059daba84c0bf_prof);

        
        $__internal_6fbd6d3375df6d35d1dd07a79b472a108f051f3bbec2b470c5974e14b9de5f36->leave($__internal_6fbd6d3375df6d35d1dd07a79b472a108f051f3bbec2b470c5974e14b9de5f36_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2d9ec2ef6a3c881fafbae2231c14cd5ef8516f46eb90abb85b8a5f2a571efe2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d9ec2ef6a3c881fafbae2231c14cd5ef8516f46eb90abb85b8a5f2a571efe2d->enter($__internal_2d9ec2ef6a3c881fafbae2231c14cd5ef8516f46eb90abb85b8a5f2a571efe2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3a9a6989e5e0b85411665c63eb9c2ee12164cfea73ee2e267a2f983b0514c6b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a9a6989e5e0b85411665c63eb9c2ee12164cfea73ee2e267a2f983b0514c6b0->enter($__internal_3a9a6989e5e0b85411665c63eb9c2ee12164cfea73ee2e267a2f983b0514c6b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Shopping Cup ";
        
        $__internal_3a9a6989e5e0b85411665c63eb9c2ee12164cfea73ee2e267a2f983b0514c6b0->leave($__internal_3a9a6989e5e0b85411665c63eb9c2ee12164cfea73ee2e267a2f983b0514c6b0_prof);

        
        $__internal_2d9ec2ef6a3c881fafbae2231c14cd5ef8516f46eb90abb85b8a5f2a571efe2d->leave($__internal_2d9ec2ef6a3c881fafbae2231c14cd5ef8516f46eb90abb85b8a5f2a571efe2d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b66caa30822b2c18746339f65c9208689a96c2656617acc8f53f918745c5233 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b66caa30822b2c18746339f65c9208689a96c2656617acc8f53f918745c5233->enter($__internal_8b66caa30822b2c18746339f65c9208689a96c2656617acc8f53f918745c5233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9c4d4202c66ffdf71a23fd433e8029c1915313c8d2d287fb163375a36f8763a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c4d4202c66ffdf71a23fd433e8029c1915313c8d2d287fb163375a36f8763a5->enter($__internal_9c4d4202c66ffdf71a23fd433e8029c1915313c8d2d287fb163375a36f8763a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9c4d4202c66ffdf71a23fd433e8029c1915313c8d2d287fb163375a36f8763a5->leave($__internal_9c4d4202c66ffdf71a23fd433e8029c1915313c8d2d287fb163375a36f8763a5_prof);

        
        $__internal_8b66caa30822b2c18746339f65c9208689a96c2656617acc8f53f918745c5233->leave($__internal_8b66caa30822b2c18746339f65c9208689a96c2656617acc8f53f918745c5233_prof);

    }

    // line 81
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7ddb80debf32b4e3f554338f70636bc8701aeb3333b16eb0c6359d874b9c0638 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ddb80debf32b4e3f554338f70636bc8701aeb3333b16eb0c6359d874b9c0638->enter($__internal_7ddb80debf32b4e3f554338f70636bc8701aeb3333b16eb0c6359d874b9c0638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_696bcb17bbf046fc6c2a6f08cdc93a82a9cebe326df09ef7daf108cb463bfa36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_696bcb17bbf046fc6c2a6f08cdc93a82a9cebe326df09ef7daf108cb463bfa36->enter($__internal_696bcb17bbf046fc6c2a6f08cdc93a82a9cebe326df09ef7daf108cb463bfa36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_696bcb17bbf046fc6c2a6f08cdc93a82a9cebe326df09ef7daf108cb463bfa36->leave($__internal_696bcb17bbf046fc6c2a6f08cdc93a82a9cebe326df09ef7daf108cb463bfa36_prof);

        
        $__internal_7ddb80debf32b4e3f554338f70636bc8701aeb3333b16eb0c6359d874b9c0638->leave($__internal_7ddb80debf32b4e3f554338f70636bc8701aeb3333b16eb0c6359d874b9c0638_prof);

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
{% endblock %}", "@Page/Default/shopping_cart.html.twig", "C:\\xampp\\htdocs\\crgc\\src\\PageBundle\\Resources\\views\\Default\\shopping_cart.html.twig");
    }
}
