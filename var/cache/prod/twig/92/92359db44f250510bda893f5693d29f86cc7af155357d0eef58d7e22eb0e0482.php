<?php

/* @User/Security/courier.html.twig */
class __TwigTemplate_350d7af063d364a31b9df7ca1041905c7a8add3aba95f21f2c426b16d06e2c2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("security.html.twig", "@User/Security/courier.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo " Currier ";
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "   ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
   <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/address_book.css"), "html", null, true);
        echo "\" />
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "   <main>
      <section id=\"pageTitle\">
         <center>
            <h2>Shipping options</h2>
         </center>
      </section>
      <div class='container-fluid'>
         <div id='farmInfoContainer' class='row'>
            <div id='farmInfoHeading' class='col-xs-12'>
               <center>
                  <h3>Choose a delivery option:</h3>
               </center>
            </div>
            <div class=\"row\" >
               <div class=\"col-xs-12 col-sm-6 col-lg-6\">
                  <div class=\"box\">
                     <h3 class=\"title\">
                        <p>Address selected</p>
                     </h3>
                     <p>Name: ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["address"] ?? null), "getFullname", array()), "html", null, true);
        echo "</p>
                     <p>Country: ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute(($context["address"] ?? null), "getCountry", array()), "html", null, true);
        echo "</p>
                     <p>State: ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute(($context["address"] ?? null), "getState", array()), "html", null, true);
        echo "</p>
                     <p>City : ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["address"] ?? null), "getCity", array()), "html", null, true);
        echo "</p>
                     <p>Line 1: ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute(($context["address"] ?? null), "getLine1", array()), "html", null, true);
        echo "</p>
                     <p>Line 2: ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute(($context["address"] ?? null), "getLine2", array()), "html", null, true);
        echo "</p>
                     <p>Zip code: ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute(($context["address"] ?? null), "getZip", array()), "html", null, true);
        echo "</p>
                     <a href='";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_address_book", array("user" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "email", array()))), "html", null, true);
        echo "' class=\"btn btn-warning center\">Change address</a>
                  </div>
               </div>
               <div class=\"col-xs-12 col-sm-6 col-lg-6\">
                  <h3 class=\"title\">
                     <p>Choose a delivery option:</p>
                  </h3>
                  <p>Correos de Costa  makes international shipping easy by calculating import fees at checkout, as well as clearing customs for you. In addition, you have the visibility to track your packages door-to-door.</p>
                  <div id=\"courier_form\" method=\"GET\">
                     <input type=\"radio\" name=\"shipping_option\" value=\"30\" checked> Standard Shipping — get it in 30 days (US\$50)<br>
                     <input type=\"radio\" name=\"shipping_option\" value=\"15\"> Expedited Shipping — get it in 15 days (US\$30)<br>
                     <input type=\"radio\" name=\"shipping_option\" value=\"7\"> Priority Shipping — get it in 7 days (US\$15)<br>
                  </div>
               </div>
            </div>
            <button id=\"btn-continue\" class=\"btn btn-success pull-right\">Continue</button>
         </div>
      </div>
   </main>
";
    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        // line 55
        echo "   ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
   <script>
      var setCurriertUrl = \"";
        // line 57
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_shoppingcart_set_courier"), "js"), "html", null, true);
        echo "\";
   </script>
   <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/courier.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@User/Security/courier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 59,  136 => 57,  130 => 55,  127 => 54,  103 => 34,  99 => 33,  95 => 32,  91 => 31,  87 => 30,  83 => 29,  79 => 28,  75 => 27,  54 => 8,  51 => 7,  45 => 5,  40 => 4,  37 => 3,  31 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@User/Security/courier.html.twig", "C:\\xampp\\htdocs\\crgc\\src\\UserBundle\\Resources\\views\\Security\\courier.html.twig");
    }
}
