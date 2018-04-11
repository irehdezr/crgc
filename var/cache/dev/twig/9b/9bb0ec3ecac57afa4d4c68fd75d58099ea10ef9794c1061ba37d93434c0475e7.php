<?php

/* @User/Security/courier.html.twig */
class __TwigTemplate_0349f73d08a7bd9423049c41b1051559ae6239234df112c97eb077aa63985a99 extends Twig_Template
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
        $__internal_64f59171a7de7b42a161bac6ee8cadbcb2333a28fbcf21edf287d2161a865a15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64f59171a7de7b42a161bac6ee8cadbcb2333a28fbcf21edf287d2161a865a15->enter($__internal_64f59171a7de7b42a161bac6ee8cadbcb2333a28fbcf21edf287d2161a865a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Security/courier.html.twig"));

        $__internal_d77d8a189cbebf3e5e674f9da2ab4b23ac4a120f89dced794cbdf76ab293261c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d77d8a189cbebf3e5e674f9da2ab4b23ac4a120f89dced794cbdf76ab293261c->enter($__internal_d77d8a189cbebf3e5e674f9da2ab4b23ac4a120f89dced794cbdf76ab293261c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Security/courier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64f59171a7de7b42a161bac6ee8cadbcb2333a28fbcf21edf287d2161a865a15->leave($__internal_64f59171a7de7b42a161bac6ee8cadbcb2333a28fbcf21edf287d2161a865a15_prof);

        
        $__internal_d77d8a189cbebf3e5e674f9da2ab4b23ac4a120f89dced794cbdf76ab293261c->leave($__internal_d77d8a189cbebf3e5e674f9da2ab4b23ac4a120f89dced794cbdf76ab293261c_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_0f6a9f1bb8e661f3e4f2fdd5dd4b6f65962b7b80a822db202b2a7e9f70a441a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f6a9f1bb8e661f3e4f2fdd5dd4b6f65962b7b80a822db202b2a7e9f70a441a6->enter($__internal_0f6a9f1bb8e661f3e4f2fdd5dd4b6f65962b7b80a822db202b2a7e9f70a441a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8e3676a2425f801730c5edc636fa0ecd564f95286f87f6490bdc9a70cc91912d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e3676a2425f801730c5edc636fa0ecd564f95286f87f6490bdc9a70cc91912d->enter($__internal_8e3676a2425f801730c5edc636fa0ecd564f95286f87f6490bdc9a70cc91912d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Currier ";
        
        $__internal_8e3676a2425f801730c5edc636fa0ecd564f95286f87f6490bdc9a70cc91912d->leave($__internal_8e3676a2425f801730c5edc636fa0ecd564f95286f87f6490bdc9a70cc91912d_prof);

        
        $__internal_0f6a9f1bb8e661f3e4f2fdd5dd4b6f65962b7b80a822db202b2a7e9f70a441a6->leave($__internal_0f6a9f1bb8e661f3e4f2fdd5dd4b6f65962b7b80a822db202b2a7e9f70a441a6_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_99831eec219c60542f8bac1bb073a17c4a9d9ff1b2a51bca1cec90ad857cff39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99831eec219c60542f8bac1bb073a17c4a9d9ff1b2a51bca1cec90ad857cff39->enter($__internal_99831eec219c60542f8bac1bb073a17c4a9d9ff1b2a51bca1cec90ad857cff39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_23af571c0365f2738ab5534b0522b8461f77fc40e1229d3301766bd70e4e23da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23af571c0365f2738ab5534b0522b8461f77fc40e1229d3301766bd70e4e23da->enter($__internal_23af571c0365f2738ab5534b0522b8461f77fc40e1229d3301766bd70e4e23da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "   ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
   <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/address_book.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_23af571c0365f2738ab5534b0522b8461f77fc40e1229d3301766bd70e4e23da->leave($__internal_23af571c0365f2738ab5534b0522b8461f77fc40e1229d3301766bd70e4e23da_prof);

        
        $__internal_99831eec219c60542f8bac1bb073a17c4a9d9ff1b2a51bca1cec90ad857cff39->leave($__internal_99831eec219c60542f8bac1bb073a17c4a9d9ff1b2a51bca1cec90ad857cff39_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_e583c1ec0f1be9fbc81243cdc5ba2fdb07d1bb832eb02433928a78c47202564f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e583c1ec0f1be9fbc81243cdc5ba2fdb07d1bb832eb02433928a78c47202564f->enter($__internal_e583c1ec0f1be9fbc81243cdc5ba2fdb07d1bb832eb02433928a78c47202564f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cd5024115ef1a604d854102375a2f8479e8f5d73440f5595b3c544ba9e822988 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd5024115ef1a604d854102375a2f8479e8f5d73440f5595b3c544ba9e822988->enter($__internal_cd5024115ef1a604d854102375a2f8479e8f5d73440f5595b3c544ba9e822988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["address"] ?? $this->getContext($context, "address")), "getFullname", array()), "html", null, true);
        echo "</p>
                     <p>Country: ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute(($context["address"] ?? $this->getContext($context, "address")), "getCountry", array()), "html", null, true);
        echo "</p>
                     <p>State: ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute(($context["address"] ?? $this->getContext($context, "address")), "getState", array()), "html", null, true);
        echo "</p>
                     <p>City : ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["address"] ?? $this->getContext($context, "address")), "getCity", array()), "html", null, true);
        echo "</p>
                     <p>Line 1: ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute(($context["address"] ?? $this->getContext($context, "address")), "getLine1", array()), "html", null, true);
        echo "</p>
                     <p>Line 2: ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute(($context["address"] ?? $this->getContext($context, "address")), "getLine2", array()), "html", null, true);
        echo "</p>
                     <p>Zip code: ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute(($context["address"] ?? $this->getContext($context, "address")), "getZip", array()), "html", null, true);
        echo "</p>
                     <a href='";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_address_book", array("user" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "email", array()))), "html", null, true);
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
        
        $__internal_cd5024115ef1a604d854102375a2f8479e8f5d73440f5595b3c544ba9e822988->leave($__internal_cd5024115ef1a604d854102375a2f8479e8f5d73440f5595b3c544ba9e822988_prof);

        
        $__internal_e583c1ec0f1be9fbc81243cdc5ba2fdb07d1bb832eb02433928a78c47202564f->leave($__internal_e583c1ec0f1be9fbc81243cdc5ba2fdb07d1bb832eb02433928a78c47202564f_prof);

    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1261ec5c62bb2cc31e43a9dca7b85286a03119ed75460e5bfb0d846a40b5e7a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1261ec5c62bb2cc31e43a9dca7b85286a03119ed75460e5bfb0d846a40b5e7a6->enter($__internal_1261ec5c62bb2cc31e43a9dca7b85286a03119ed75460e5bfb0d846a40b5e7a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4df250a0c00965da082f1191fdb356f44415e01c9c072073a6bda35493bc3276 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4df250a0c00965da082f1191fdb356f44415e01c9c072073a6bda35493bc3276->enter($__internal_4df250a0c00965da082f1191fdb356f44415e01c9c072073a6bda35493bc3276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_4df250a0c00965da082f1191fdb356f44415e01c9c072073a6bda35493bc3276->leave($__internal_4df250a0c00965da082f1191fdb356f44415e01c9c072073a6bda35493bc3276_prof);

        
        $__internal_1261ec5c62bb2cc31e43a9dca7b85286a03119ed75460e5bfb0d846a40b5e7a6->leave($__internal_1261ec5c62bb2cc31e43a9dca7b85286a03119ed75460e5bfb0d846a40b5e7a6_prof);

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
        return array (  195 => 59,  190 => 57,  184 => 55,  175 => 54,  145 => 34,  141 => 33,  137 => 32,  133 => 31,  129 => 30,  125 => 29,  121 => 28,  117 => 27,  96 => 8,  87 => 7,  75 => 5,  70 => 4,  61 => 3,  43 => 2,  11 => 1,);
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
{% block title%} Currier {% endblock %}
{% block stylesheets %}
   {{ parent() }}
   <link rel=\"stylesheet\" href=\"{{ asset('css/address_book.css') }}\" />
{% endblock %}
{% block body %}
   <main>
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
                     <p>Name: {{address.getFullname }}</p>
                     <p>Country: {{address.getCountry }}</p>
                     <p>State: {{address.getState }}</p>
                     <p>City : {{address.getCity }}</p>
                     <p>Line 1: {{address.getLine1 }}</p>
                     <p>Line 2: {{address.getLine2 }}</p>
                     <p>Zip code: {{address.getZip }}</p>
                     <a href='{{ path(\"user_address_book\", {\"user\": app.user.email }) }}' class=\"btn btn-warning center\">Change address</a>
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
{% endblock %}
{% block javascripts %}
   {{ parent() }}
   <script>
      var setCurriertUrl = \"{{ path('user_shoppingcart_set_courier')|escape('js') }}\";
   </script>
   <script src=\"{{ asset('js/courier.js')}}\"></script>
{% endblock %}", "@User/Security/courier.html.twig", "C:\\xampp\\htdocs\\crgc\\src\\UserBundle\\Resources\\views\\Security\\courier.html.twig");
    }
}
