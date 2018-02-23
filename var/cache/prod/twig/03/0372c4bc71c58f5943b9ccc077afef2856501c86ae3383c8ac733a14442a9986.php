<?php

/* UserBundle:Security:confirm.html.twig */
class __TwigTemplate_e57d02ce09cdedbee5ede8204025cf26fbe22ef9f8f98b600e2f25eaa559d6e5 extends Twig_Template
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
        $__internal_0464cf699a66aa1c8f2574789303aaa80323ee8753a77d04657d2a2513980af3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0464cf699a66aa1c8f2574789303aaa80323ee8753a77d04657d2a2513980af3->enter($__internal_0464cf699a66aa1c8f2574789303aaa80323ee8753a77d04657d2a2513980af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Security:confirm.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0464cf699a66aa1c8f2574789303aaa80323ee8753a77d04657d2a2513980af3->leave($__internal_0464cf699a66aa1c8f2574789303aaa80323ee8753a77d04657d2a2513980af3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f0c7770e66f36f988b16d09acc1b210ff28998b8ae90a2f9da3f2a13bafcdefc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0c7770e66f36f988b16d09acc1b210ff28998b8ae90a2f9da3f2a13bafcdefc->enter($__internal_f0c7770e66f36f988b16d09acc1b210ff28998b8ae90a2f9da3f2a13bafcdefc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Shopping Cup ";
        
        $__internal_f0c7770e66f36f988b16d09acc1b210ff28998b8ae90a2f9da3f2a13bafcdefc->leave($__internal_f0c7770e66f36f988b16d09acc1b210ff28998b8ae90a2f9da3f2a13bafcdefc_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b57b216164aaac19d872788caa1b6c5e30bc42e4633e29f201d413123127253 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b57b216164aaac19d872788caa1b6c5e30bc42e4633e29f201d413123127253->enter($__internal_9b57b216164aaac19d872788caa1b6c5e30bc42e4633e29f201d413123127253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["address"] ?? $this->getContext($context, "address")), "getFullname", array()), "html", null, true);
        echo "</p>
          <p>Country: ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["address"] ?? $this->getContext($context, "address")), "getCountry", array()), "html", null, true);
        echo "</p>
          <p>State: ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["address"] ?? $this->getContext($context, "address")), "getState", array()), "html", null, true);
        echo "</p>
          <p>City : ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["address"] ?? $this->getContext($context, "address")), "getCity", array()), "html", null, true);
        echo "</p>
          <p>Line 1: ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["address"] ?? $this->getContext($context, "address")), "getLine1", array()), "html", null, true);
        echo "</p>
          <p>Line 2: ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute(($context["address"] ?? $this->getContext($context, "address")), "getLine2", array()), "html", null, true);
        echo "</p>
          <p>Zip code: ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["address"] ?? $this->getContext($context, "address")), "getZip", array()), "html", null, true);
        echo "</p>
          <a href='";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_address_book", array("user" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "email", array()))), "html", null, true);
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
        if ((($context["courier"] ?? $this->getContext($context, "courier")) == 7)) {
            // line 35
            echo "            Standard Shipping — get it in 7 days (US\$50)
          ";
        }
        // line 37
        echo "          ";
        if ((($context["courier"] ?? $this->getContext($context, "courier")) == 15)) {
            // line 38
            echo "            Expedited Shipping — get it in 15 days (US\$30)
          ";
        }
        // line 40
        echo "          ";
        if ((($context["courier"] ?? $this->getContext($context, "courier")) == 30)) {
            // line 41
            echo "            Priority Shipping — get it in 30 days (US\$15)
          ";
        }
        // line 43
        echo "          
          <a href='";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_shoppingcart_courier", array("user" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "email", array()))), "html", null, true);
        echo "' class=\"btn btn-warning center\"> 
          Change shipping option
          </a>
       </div>
\t\t<div  class='col-md-offset-1 col-md-10'>
\t\t\t<center>
\t\t\t\t<h3>
\t\t\t\t";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getCartTitle", array(), "method"), "html", null, true);
        echo "\t
\t\t\t\t</h3>
\t\t\t</center>
\t\t\t";
        // line 54
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "productsOnCart"), "method")) > 0)) {
            // line 55
            echo "\t\t\t<div class=\"table-responsive\">
\t            <table id=\"confirmCart\" class=\"table\">
\t                <thead class=\"thead-inverse\">
\t                    <tr>
\t                        <th>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getProductTitle", array(), "method"), "html", null, true);
            echo "</th>
\t                        <th>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getFarmTitle", array(), "method"), "html", null, true);
            echo "</th>
\t                        <th>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getDescriptionTitle", array(), "method"), "html", null, true);
            echo "</th>
\t                        <th>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getUnitPriceTitle", array(), "method"), "html", null, true);
            echo "</th>
\t                        <th>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getQuantityTitle", array(), "method"), "html", null, true);
            echo "</th>
\t                        <th>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getSubTotalTitle", array(), "method"), "html", null, true);
            echo "</th>
\t                    </tr>
\t                </thead>
\t                <tbody>
\t\t\t\t\t";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["productsOnCart"] ?? $this->getContext($context, "productsOnCart")));
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
                echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getWeightTitle", array(), "method"), "html", null, true);
                echo ": </strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["product"], "presentation", array(), "array"), "getWeight", array()), "html", null, true);
                echo "g </br>
\t\t                        <strong>";
                // line 79
                echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getRoastTitle", array(), "method"), "html", null, true);
                echo ": </strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["product"], "presentation", array(), "array"), "getRoast", array(), "method"), "getDescription", array(), "method"), "html", null, true);
                echo "</br>
\t\t                        <strong>";
                // line 80
                echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getGrindTitle", array(), "method"), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["total"] ?? $this->getContext($context, "total")), "html", null, true);
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
            if ((($context["courier"] ?? $this->getContext($context, "courier")) == 7)) {
                // line 95
                echo "\t                        <td colspan=\"4\">Shipping: US\$ <span class=\"shipping\">50</span></td>   
\t\t\t\t          ";
            }
            // line 97
            echo "\t\t\t\t          ";
            if ((($context["courier"] ?? $this->getContext($context, "courier")) == 15)) {
                // line 98
                echo "\t                        <td colspan=\"4\">Shipping: US\$ <span class=\"shipping\">30</span></td>   
\t\t\t\t          ";
            }
            // line 100
            echo "\t\t\t\t          ";
            if ((($context["courier"] ?? $this->getContext($context, "courier")) == 30)) {
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
            echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getEmptyCartTitle", array(), "method"), "html", null, true);
            echo "
\t\t\t\t</h3>
\t\t\t\t<button class='continue-shopping btn btn-success'>
\t\t\t\t\t";
            // line 119
            echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getContinueButton", array(), "method"), "html", null, true);
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
        
        $__internal_9b57b216164aaac19d872788caa1b6c5e30bc42e4633e29f201d413123127253->leave($__internal_9b57b216164aaac19d872788caa1b6c5e30bc42e4633e29f201d413123127253_prof);

    }

    // line 127
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_54441caea8d17b9bb8d8b26b027daeb0826a7b40072061c2c88280700a144590 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54441caea8d17b9bb8d8b26b027daeb0826a7b40072061c2c88280700a144590->enter($__internal_54441caea8d17b9bb8d8b26b027daeb0826a7b40072061c2c88280700a144590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 128
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/js/confirm.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
";
        
        $__internal_54441caea8d17b9bb8d8b26b027daeb0826a7b40072061c2c88280700a144590->leave($__internal_54441caea8d17b9bb8d8b26b027daeb0826a7b40072061c2c88280700a144590_prof);

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
        return array (  332 => 129,  327 => 128,  321 => 127,  311 => 123,  304 => 119,  298 => 116,  294 => 114,  287 => 110,  277 => 102,  273 => 101,  270 => 100,  266 => 98,  263 => 97,  259 => 95,  257 => 94,  253 => 92,  242 => 89,  240 => 88,  234 => 85,  228 => 83,  226 => 82,  219 => 80,  213 => 79,  207 => 78,  202 => 76,  196 => 73,  192 => 72,  185 => 69,  181 => 68,  174 => 64,  170 => 63,  166 => 62,  162 => 61,  158 => 60,  154 => 59,  148 => 55,  146 => 54,  140 => 51,  130 => 44,  127 => 43,  123 => 41,  120 => 40,  116 => 38,  113 => 37,  109 => 35,  107 => 34,  95 => 25,  91 => 24,  87 => 23,  83 => 22,  79 => 21,  75 => 20,  71 => 19,  67 => 18,  54 => 7,  48 => 6,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"security.html.twig\" %}

{% block title%} Shopping Cup {% endblock %}


{% block body %}
<main>
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
          <p>Name: {{address.getFullname }}</p>
          <p>Country: {{address.getCountry }}</p>
          <p>State: {{address.getState }}</p>
          <p>City : {{address.getCity }}</p>
          <p>Line 1: {{address.getLine1 }}</p>
          <p>Line 2: {{address.getLine2 }}</p>
          <p>Zip code: {{address.getZip }}</p>
          <a href='{{ path(\"user_address_book\", {\"user\": app.user.email }) }}' class=\"btn btn-warning center\"> 
          Change address
          </a>
       </div>
\t\t<div class=\"col-md-4 col-md-offset-2\">
          <h3 class=\"title\">
             <p>Shipping information</p>
          </h3>
          <p>Correos de Costa makes international shipping easy by calculating import fees at checkout, as well as clearing customs for you. In addition, you have the visibility to track your packages door-to-door.</p>
          {% if courier == 7 %}
            Standard Shipping — get it in 7 days (US\$50)
          {% endif %}
          {% if courier == 15 %}
            Expedited Shipping — get it in 15 days (US\$30)
          {% endif %}
          {% if courier == 30 %}
            Priority Shipping — get it in 30 days (US\$15)
          {% endif %}
          
          <a href='{{ path(\"user_shoppingcart_courier\", {\"user\": app.user.email }) }}' class=\"btn btn-warning center\"> 
          Change shipping option
          </a>
       </div>
\t\t<div  class='col-md-offset-1 col-md-10'>
\t\t\t<center>
\t\t\t\t<h3>
\t\t\t\t{{ template.getCartTitle() }}\t
\t\t\t\t</h3>
\t\t\t</center>
\t\t\t{% if app.session.get(\"productsOnCart\")|length > 0 %}
\t\t\t<div class=\"table-responsive\">
\t            <table id=\"confirmCart\" class=\"table\">
\t                <thead class=\"thead-inverse\">
\t                    <tr>
\t                        <th>{{ template.getProductTitle() }}</th>
\t                        <th>{{ template.getFarmTitle() }}</th>
\t                        <th>{{ template.getDescriptionTitle() }}</th>
\t                        <th>{{ template.getUnitPriceTitle() }}</th>
\t                        <th>{{ template.getQuantityTitle() }}</th>
\t                        <th>{{ template.getSubTotalTitle() }}</th>
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
\t\t                    {% set price = product['presentation'].getPrice() %}
\t                        <td class=\"unit-price\">US\$ {{ product['presentation'].getPrice() }}</td>
\t                        <td data-test=\"td\">
\t                        \t<p class=\"presentation-quantity\"> {{ product['quantity'] }} </p>
\t                        </td>
\t                        <td>
\t\t                    {% set total = product['presentation'].getPrice() * product['quantity'] %}
\t                        \t<p>US\$ <span class=\"item-total\">{{ total }}</span></p>
\t                        </td>
\t                    </tr>
\t\t\t\t\t\t{% endfor %}\t                 
\t                    <tr>
\t\t\t\t          {% if courier == 7 %}
\t                        <td colspan=\"4\">Shipping: US\$ <span class=\"shipping\">50</span></td>   
\t\t\t\t          {% endif %}
\t\t\t\t          {% if courier == 15 %}
\t                        <td colspan=\"4\">Shipping: US\$ <span class=\"shipping\">30</span></td>   
\t\t\t\t          {% endif %}
\t\t\t\t          {% if courier == 30 %}
\t                        <td colspan=\"4\">Shipping: US\$ <span class=\"shipping\">15</span></td>  
\t\t\t\t          {% endif %} 
\t                        <td>Total</td>
\t                        <td>US\$ <span id=\"cart-total\"></span></td>
\t                        <td></td>
\t                    </tr>
\t                </tbody>
\t            </table>
       \t\t</div>
\t        <a class='check-out btn btn-success pull-right' href=\"{{ path('user_shoppingcart_payment') }}\">
\t        \tConfirm order
\t        </a>
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
    <script src=\"{{ asset('/web/public/js/confirm.js') }}\" type=\"text/javascript\"></script> 
{% endblock %}", "UserBundle:Security:confirm.html.twig", "/home/crgourme/public_html/src/UserBundle/Resources/views/Security/confirm.html.twig");
    }
}
