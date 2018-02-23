<?php

/* UserBundle:Security:confirm.html.twig */
class __TwigTemplate_4aa0c13aadc4c57d4b0c066fe58e07754d8bcd2b81675a7cd44f703a30a5fc50 extends Twig_Template
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
        $__internal_fd68048025a6df5a85f79d663de0aac7d6917a4a4ad34a2464387278b082ef4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd68048025a6df5a85f79d663de0aac7d6917a4a4ad34a2464387278b082ef4b->enter($__internal_fd68048025a6df5a85f79d663de0aac7d6917a4a4ad34a2464387278b082ef4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Security:confirm.html.twig"));

        $__internal_aa1f8030bed6000c94097281594fd02d33240a2d2b78f719f48eefee99223628 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa1f8030bed6000c94097281594fd02d33240a2d2b78f719f48eefee99223628->enter($__internal_aa1f8030bed6000c94097281594fd02d33240a2d2b78f719f48eefee99223628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Security:confirm.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd68048025a6df5a85f79d663de0aac7d6917a4a4ad34a2464387278b082ef4b->leave($__internal_fd68048025a6df5a85f79d663de0aac7d6917a4a4ad34a2464387278b082ef4b_prof);

        
        $__internal_aa1f8030bed6000c94097281594fd02d33240a2d2b78f719f48eefee99223628->leave($__internal_aa1f8030bed6000c94097281594fd02d33240a2d2b78f719f48eefee99223628_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0de5b855e048c3d53df68b3a2eccdaae48f7ecc1d47dfe91e9aaf3617539ecfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0de5b855e048c3d53df68b3a2eccdaae48f7ecc1d47dfe91e9aaf3617539ecfe->enter($__internal_0de5b855e048c3d53df68b3a2eccdaae48f7ecc1d47dfe91e9aaf3617539ecfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_34755f1a1d82aaedbc5fa754bb2ee53c2a9d1fdebc50532e84d119d11ea737e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34755f1a1d82aaedbc5fa754bb2ee53c2a9d1fdebc50532e84d119d11ea737e8->enter($__internal_34755f1a1d82aaedbc5fa754bb2ee53c2a9d1fdebc50532e84d119d11ea737e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Shopping Cup ";
        
        $__internal_34755f1a1d82aaedbc5fa754bb2ee53c2a9d1fdebc50532e84d119d11ea737e8->leave($__internal_34755f1a1d82aaedbc5fa754bb2ee53c2a9d1fdebc50532e84d119d11ea737e8_prof);

        
        $__internal_0de5b855e048c3d53df68b3a2eccdaae48f7ecc1d47dfe91e9aaf3617539ecfe->leave($__internal_0de5b855e048c3d53df68b3a2eccdaae48f7ecc1d47dfe91e9aaf3617539ecfe_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_dc1658a428371403606ec4a3ae235178a43a639116cdb1deac74b368754a8c5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc1658a428371403606ec4a3ae235178a43a639116cdb1deac74b368754a8c5d->enter($__internal_dc1658a428371403606ec4a3ae235178a43a639116cdb1deac74b368754a8c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f6a8c59293a31ed52f912a77d2a986a973d31eb81ba58da87ee608d14ea3417e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6a8c59293a31ed52f912a77d2a986a973d31eb81ba58da87ee608d14ea3417e->enter($__internal_f6a8c59293a31ed52f912a77d2a986a973d31eb81ba58da87ee608d14ea3417e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f6a8c59293a31ed52f912a77d2a986a973d31eb81ba58da87ee608d14ea3417e->leave($__internal_f6a8c59293a31ed52f912a77d2a986a973d31eb81ba58da87ee608d14ea3417e_prof);

        
        $__internal_dc1658a428371403606ec4a3ae235178a43a639116cdb1deac74b368754a8c5d->leave($__internal_dc1658a428371403606ec4a3ae235178a43a639116cdb1deac74b368754a8c5d_prof);

    }

    // line 127
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bb071dca8a32fc97987eec9bc5fdc87a11f3afc33fad2e5f8278bf015c3c337e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb071dca8a32fc97987eec9bc5fdc87a11f3afc33fad2e5f8278bf015c3c337e->enter($__internal_bb071dca8a32fc97987eec9bc5fdc87a11f3afc33fad2e5f8278bf015c3c337e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0b71c7e8a115bb09b4d8d4d8438658f1ea499c8fb207c8399b3cfa03ccf9d757 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b71c7e8a115bb09b4d8d4d8438658f1ea499c8fb207c8399b3cfa03ccf9d757->enter($__internal_0b71c7e8a115bb09b4d8d4d8438658f1ea499c8fb207c8399b3cfa03ccf9d757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 128
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/js/confirm.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
";
        
        $__internal_0b71c7e8a115bb09b4d8d4d8438658f1ea499c8fb207c8399b3cfa03ccf9d757->leave($__internal_0b71c7e8a115bb09b4d8d4d8438658f1ea499c8fb207c8399b3cfa03ccf9d757_prof);

        
        $__internal_bb071dca8a32fc97987eec9bc5fdc87a11f3afc33fad2e5f8278bf015c3c337e->leave($__internal_bb071dca8a32fc97987eec9bc5fdc87a11f3afc33fad2e5f8278bf015c3c337e_prof);

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
        return array (  353 => 129,  348 => 128,  339 => 127,  326 => 123,  319 => 119,  313 => 116,  309 => 114,  302 => 110,  292 => 102,  288 => 101,  285 => 100,  281 => 98,  278 => 97,  274 => 95,  272 => 94,  268 => 92,  257 => 89,  255 => 88,  249 => 85,  243 => 83,  241 => 82,  234 => 80,  228 => 79,  222 => 78,  217 => 76,  211 => 73,  207 => 72,  200 => 69,  196 => 68,  189 => 64,  185 => 63,  181 => 62,  177 => 61,  173 => 60,  169 => 59,  163 => 55,  161 => 54,  155 => 51,  145 => 44,  142 => 43,  138 => 41,  135 => 40,  131 => 38,  128 => 37,  124 => 35,  122 => 34,  110 => 25,  106 => 24,  102 => 23,  98 => 22,  94 => 21,  90 => 20,  86 => 19,  82 => 18,  69 => 7,  60 => 6,  42 => 3,  11 => 1,);
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
{% endblock %}", "UserBundle:Security:confirm.html.twig", "C:\\xampp\\htdocs\\src\\UserBundle/Resources/views/Security/confirm.html.twig");
    }
}
