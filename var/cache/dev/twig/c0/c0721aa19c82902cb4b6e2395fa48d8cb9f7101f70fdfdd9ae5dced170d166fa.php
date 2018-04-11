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
        $__internal_b5c2dd5c8d07f9044e3a9335ee530e06742169d65c75562d5be7647e9ceb9889 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5c2dd5c8d07f9044e3a9335ee530e06742169d65c75562d5be7647e9ceb9889->enter($__internal_b5c2dd5c8d07f9044e3a9335ee530e06742169d65c75562d5be7647e9ceb9889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Security:courier.html.twig"));

        $__internal_6185c3289de0782ad1f2e5478e5815ba8c25d478de0cd27e9b7679e2af058798 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6185c3289de0782ad1f2e5478e5815ba8c25d478de0cd27e9b7679e2af058798->enter($__internal_6185c3289de0782ad1f2e5478e5815ba8c25d478de0cd27e9b7679e2af058798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Security:courier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5c2dd5c8d07f9044e3a9335ee530e06742169d65c75562d5be7647e9ceb9889->leave($__internal_b5c2dd5c8d07f9044e3a9335ee530e06742169d65c75562d5be7647e9ceb9889_prof);

        
        $__internal_6185c3289de0782ad1f2e5478e5815ba8c25d478de0cd27e9b7679e2af058798->leave($__internal_6185c3289de0782ad1f2e5478e5815ba8c25d478de0cd27e9b7679e2af058798_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_ceb0eb0be8325f8d81f1e577db39a9c81ad7712e618f77d51d26cd106c296394 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ceb0eb0be8325f8d81f1e577db39a9c81ad7712e618f77d51d26cd106c296394->enter($__internal_ceb0eb0be8325f8d81f1e577db39a9c81ad7712e618f77d51d26cd106c296394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_67d0d89513e18b4b495f18751a5871e5988a067f444194c042ab0404ba7fb688 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67d0d89513e18b4b495f18751a5871e5988a067f444194c042ab0404ba7fb688->enter($__internal_67d0d89513e18b4b495f18751a5871e5988a067f444194c042ab0404ba7fb688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Currier ";
        
        $__internal_67d0d89513e18b4b495f18751a5871e5988a067f444194c042ab0404ba7fb688->leave($__internal_67d0d89513e18b4b495f18751a5871e5988a067f444194c042ab0404ba7fb688_prof);

        
        $__internal_ceb0eb0be8325f8d81f1e577db39a9c81ad7712e618f77d51d26cd106c296394->leave($__internal_ceb0eb0be8325f8d81f1e577db39a9c81ad7712e618f77d51d26cd106c296394_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0e9affaaa1b638c47882aba6f41261e97b60763f99b8d021e37c9c5efed9efb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e9affaaa1b638c47882aba6f41261e97b60763f99b8d021e37c9c5efed9efb6->enter($__internal_0e9affaaa1b638c47882aba6f41261e97b60763f99b8d021e37c9c5efed9efb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7793f5ce4702bb970d39d70d6b85cca5be81870ecb7bf6e13e353d39853fd285 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7793f5ce4702bb970d39d70d6b85cca5be81870ecb7bf6e13e353d39853fd285->enter($__internal_7793f5ce4702bb970d39d70d6b85cca5be81870ecb7bf6e13e353d39853fd285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "   ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
   <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/address_book.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_7793f5ce4702bb970d39d70d6b85cca5be81870ecb7bf6e13e353d39853fd285->leave($__internal_7793f5ce4702bb970d39d70d6b85cca5be81870ecb7bf6e13e353d39853fd285_prof);

        
        $__internal_0e9affaaa1b638c47882aba6f41261e97b60763f99b8d021e37c9c5efed9efb6->leave($__internal_0e9affaaa1b638c47882aba6f41261e97b60763f99b8d021e37c9c5efed9efb6_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_13cd42cdd7b416b127a5390a2fb1ba920ba44bed1193f1920aef4e9d540ecbe5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13cd42cdd7b416b127a5390a2fb1ba920ba44bed1193f1920aef4e9d540ecbe5->enter($__internal_13cd42cdd7b416b127a5390a2fb1ba920ba44bed1193f1920aef4e9d540ecbe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b85a04ddfb80b525fc79b59746759b2cc469d329e1e4b94e12f7a8d9e0ab0f8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b85a04ddfb80b525fc79b59746759b2cc469d329e1e4b94e12f7a8d9e0ab0f8f->enter($__internal_b85a04ddfb80b525fc79b59746759b2cc469d329e1e4b94e12f7a8d9e0ab0f8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b85a04ddfb80b525fc79b59746759b2cc469d329e1e4b94e12f7a8d9e0ab0f8f->leave($__internal_b85a04ddfb80b525fc79b59746759b2cc469d329e1e4b94e12f7a8d9e0ab0f8f_prof);

        
        $__internal_13cd42cdd7b416b127a5390a2fb1ba920ba44bed1193f1920aef4e9d540ecbe5->leave($__internal_13cd42cdd7b416b127a5390a2fb1ba920ba44bed1193f1920aef4e9d540ecbe5_prof);

    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_64567666e94b89d8846436591e7f16a4c74d3381aa5d5ce72211107b9a2cd0ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64567666e94b89d8846436591e7f16a4c74d3381aa5d5ce72211107b9a2cd0ba->enter($__internal_64567666e94b89d8846436591e7f16a4c74d3381aa5d5ce72211107b9a2cd0ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6602e48a39c0188fef41b071d2e80b268f3985a7b2febd30875068f3b19e74d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6602e48a39c0188fef41b071d2e80b268f3985a7b2febd30875068f3b19e74d2->enter($__internal_6602e48a39c0188fef41b071d2e80b268f3985a7b2febd30875068f3b19e74d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_6602e48a39c0188fef41b071d2e80b268f3985a7b2febd30875068f3b19e74d2->leave($__internal_6602e48a39c0188fef41b071d2e80b268f3985a7b2febd30875068f3b19e74d2_prof);

        
        $__internal_64567666e94b89d8846436591e7f16a4c74d3381aa5d5ce72211107b9a2cd0ba->leave($__internal_64567666e94b89d8846436591e7f16a4c74d3381aa5d5ce72211107b9a2cd0ba_prof);

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
