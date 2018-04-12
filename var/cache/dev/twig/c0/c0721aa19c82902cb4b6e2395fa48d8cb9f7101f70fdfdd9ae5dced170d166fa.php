<?php

/* UserBundle:Security:courier.html.twig */
class __TwigTemplate_86f07d23fcc848fa8497ad042d2b47bb2984a424dace9267d5062dc2dfdaa742 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("security.html.twig", "UserBundle:Security:courier.html.twig", 1);
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
        $__internal_2247f590d0d31b3dae8a42478aa6c494d900d04ed2ac0b26f47f8bb143c61526 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2247f590d0d31b3dae8a42478aa6c494d900d04ed2ac0b26f47f8bb143c61526->enter($__internal_2247f590d0d31b3dae8a42478aa6c494d900d04ed2ac0b26f47f8bb143c61526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Security:courier.html.twig"));

        $__internal_eacc985b7d863e72c6e427a263c7a574e2f3b3287a7484ac2c40bb342b22c3d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eacc985b7d863e72c6e427a263c7a574e2f3b3287a7484ac2c40bb342b22c3d1->enter($__internal_eacc985b7d863e72c6e427a263c7a574e2f3b3287a7484ac2c40bb342b22c3d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Security:courier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2247f590d0d31b3dae8a42478aa6c494d900d04ed2ac0b26f47f8bb143c61526->leave($__internal_2247f590d0d31b3dae8a42478aa6c494d900d04ed2ac0b26f47f8bb143c61526_prof);

        
        $__internal_eacc985b7d863e72c6e427a263c7a574e2f3b3287a7484ac2c40bb342b22c3d1->leave($__internal_eacc985b7d863e72c6e427a263c7a574e2f3b3287a7484ac2c40bb342b22c3d1_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_00ccd2b29bceeb9590481ca55ab31bf433bae93da2af1320ff3ca83a41c33c43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00ccd2b29bceeb9590481ca55ab31bf433bae93da2af1320ff3ca83a41c33c43->enter($__internal_00ccd2b29bceeb9590481ca55ab31bf433bae93da2af1320ff3ca83a41c33c43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ac70b48d7e7074ce3622410df2cc4c77c01e4b51af329ff45d6bb32411a8b09e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac70b48d7e7074ce3622410df2cc4c77c01e4b51af329ff45d6bb32411a8b09e->enter($__internal_ac70b48d7e7074ce3622410df2cc4c77c01e4b51af329ff45d6bb32411a8b09e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Currier ";
        
        $__internal_ac70b48d7e7074ce3622410df2cc4c77c01e4b51af329ff45d6bb32411a8b09e->leave($__internal_ac70b48d7e7074ce3622410df2cc4c77c01e4b51af329ff45d6bb32411a8b09e_prof);

        
        $__internal_00ccd2b29bceeb9590481ca55ab31bf433bae93da2af1320ff3ca83a41c33c43->leave($__internal_00ccd2b29bceeb9590481ca55ab31bf433bae93da2af1320ff3ca83a41c33c43_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7433643409e1c72cdc6798538917a02f86a6a6f88f84cec1c469df88043a70d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7433643409e1c72cdc6798538917a02f86a6a6f88f84cec1c469df88043a70d0->enter($__internal_7433643409e1c72cdc6798538917a02f86a6a6f88f84cec1c469df88043a70d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_11f6fae8a592ea20689c672b319eab16d6d58e8c77562016ad1416a1481c72a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11f6fae8a592ea20689c672b319eab16d6d58e8c77562016ad1416a1481c72a7->enter($__internal_11f6fae8a592ea20689c672b319eab16d6d58e8c77562016ad1416a1481c72a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "   ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
   <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/address_book.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_11f6fae8a592ea20689c672b319eab16d6d58e8c77562016ad1416a1481c72a7->leave($__internal_11f6fae8a592ea20689c672b319eab16d6d58e8c77562016ad1416a1481c72a7_prof);

        
        $__internal_7433643409e1c72cdc6798538917a02f86a6a6f88f84cec1c469df88043a70d0->leave($__internal_7433643409e1c72cdc6798538917a02f86a6a6f88f84cec1c469df88043a70d0_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_27ff8d71844e61744096aa08f6c310aead4119b712a64cd992268cee88439c33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27ff8d71844e61744096aa08f6c310aead4119b712a64cd992268cee88439c33->enter($__internal_27ff8d71844e61744096aa08f6c310aead4119b712a64cd992268cee88439c33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7b9eda2cebd75646164fbe4ad92265d4352770b27fde7250e7476e4190ea3961 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b9eda2cebd75646164fbe4ad92265d4352770b27fde7250e7476e4190ea3961->enter($__internal_7b9eda2cebd75646164fbe4ad92265d4352770b27fde7250e7476e4190ea3961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7b9eda2cebd75646164fbe4ad92265d4352770b27fde7250e7476e4190ea3961->leave($__internal_7b9eda2cebd75646164fbe4ad92265d4352770b27fde7250e7476e4190ea3961_prof);

        
        $__internal_27ff8d71844e61744096aa08f6c310aead4119b712a64cd992268cee88439c33->leave($__internal_27ff8d71844e61744096aa08f6c310aead4119b712a64cd992268cee88439c33_prof);

    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_886b97d4e17323408623107d1185172457857359dc14a4637d9a1bf9f094103e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_886b97d4e17323408623107d1185172457857359dc14a4637d9a1bf9f094103e->enter($__internal_886b97d4e17323408623107d1185172457857359dc14a4637d9a1bf9f094103e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d8f9f71a0fc8f8d344a24ae897c71f2abb46591fb818de8b4b7359d48839db00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8f9f71a0fc8f8d344a24ae897c71f2abb46591fb818de8b4b7359d48839db00->enter($__internal_d8f9f71a0fc8f8d344a24ae897c71f2abb46591fb818de8b4b7359d48839db00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_d8f9f71a0fc8f8d344a24ae897c71f2abb46591fb818de8b4b7359d48839db00->leave($__internal_d8f9f71a0fc8f8d344a24ae897c71f2abb46591fb818de8b4b7359d48839db00_prof);

        
        $__internal_886b97d4e17323408623107d1185172457857359dc14a4637d9a1bf9f094103e->leave($__internal_886b97d4e17323408623107d1185172457857359dc14a4637d9a1bf9f094103e_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Security:courier.html.twig";
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
{% endblock %}", "UserBundle:Security:courier.html.twig", "C:\\xampp\\htdocs\\crgc\\src\\UserBundle/Resources/views/Security/courier.html.twig");
    }
}
