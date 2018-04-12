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
        $__internal_92dec69ae1bfd5c9e8bd5b7d6b7595073b3b74a687105ea06bb86a0459b57369 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92dec69ae1bfd5c9e8bd5b7d6b7595073b3b74a687105ea06bb86a0459b57369->enter($__internal_92dec69ae1bfd5c9e8bd5b7d6b7595073b3b74a687105ea06bb86a0459b57369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Security/courier.html.twig"));

        $__internal_e52c7b532cc643479998115ee3fa12f4a5ccb31461fe8349a192d1ccd535c8a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e52c7b532cc643479998115ee3fa12f4a5ccb31461fe8349a192d1ccd535c8a1->enter($__internal_e52c7b532cc643479998115ee3fa12f4a5ccb31461fe8349a192d1ccd535c8a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Security/courier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92dec69ae1bfd5c9e8bd5b7d6b7595073b3b74a687105ea06bb86a0459b57369->leave($__internal_92dec69ae1bfd5c9e8bd5b7d6b7595073b3b74a687105ea06bb86a0459b57369_prof);

        
        $__internal_e52c7b532cc643479998115ee3fa12f4a5ccb31461fe8349a192d1ccd535c8a1->leave($__internal_e52c7b532cc643479998115ee3fa12f4a5ccb31461fe8349a192d1ccd535c8a1_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_9b53b792c597907962b6ae9704548c5b76b7e7c8699cc1389f19d9e3c67816bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b53b792c597907962b6ae9704548c5b76b7e7c8699cc1389f19d9e3c67816bb->enter($__internal_9b53b792c597907962b6ae9704548c5b76b7e7c8699cc1389f19d9e3c67816bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4740c1bdfe8c840ca1801ff4dba15d35c17e1230aa8c96b414a37b1a1768a6a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4740c1bdfe8c840ca1801ff4dba15d35c17e1230aa8c96b414a37b1a1768a6a5->enter($__internal_4740c1bdfe8c840ca1801ff4dba15d35c17e1230aa8c96b414a37b1a1768a6a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Currier ";
        
        $__internal_4740c1bdfe8c840ca1801ff4dba15d35c17e1230aa8c96b414a37b1a1768a6a5->leave($__internal_4740c1bdfe8c840ca1801ff4dba15d35c17e1230aa8c96b414a37b1a1768a6a5_prof);

        
        $__internal_9b53b792c597907962b6ae9704548c5b76b7e7c8699cc1389f19d9e3c67816bb->leave($__internal_9b53b792c597907962b6ae9704548c5b76b7e7c8699cc1389f19d9e3c67816bb_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9bf0b18b6cd3b1246143232170b1cf03e4b6d2a5b7792cba4880555eefee24f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bf0b18b6cd3b1246143232170b1cf03e4b6d2a5b7792cba4880555eefee24f0->enter($__internal_9bf0b18b6cd3b1246143232170b1cf03e4b6d2a5b7792cba4880555eefee24f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7ae16bb5f005517ad4915a9f3c2a90ff67739cbce1c828807577775714e0807d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ae16bb5f005517ad4915a9f3c2a90ff67739cbce1c828807577775714e0807d->enter($__internal_7ae16bb5f005517ad4915a9f3c2a90ff67739cbce1c828807577775714e0807d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "   ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
   <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/address_book.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_7ae16bb5f005517ad4915a9f3c2a90ff67739cbce1c828807577775714e0807d->leave($__internal_7ae16bb5f005517ad4915a9f3c2a90ff67739cbce1c828807577775714e0807d_prof);

        
        $__internal_9bf0b18b6cd3b1246143232170b1cf03e4b6d2a5b7792cba4880555eefee24f0->leave($__internal_9bf0b18b6cd3b1246143232170b1cf03e4b6d2a5b7792cba4880555eefee24f0_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b6d833a91da8fa6082d8cb890130428159593985a11d3f33c70d7ebf6a7fa35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b6d833a91da8fa6082d8cb890130428159593985a11d3f33c70d7ebf6a7fa35->enter($__internal_8b6d833a91da8fa6082d8cb890130428159593985a11d3f33c70d7ebf6a7fa35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_261eee9f5b50c57818e9c12879d0cf6ddaaa5e74d358805f5837792d9843c278 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_261eee9f5b50c57818e9c12879d0cf6ddaaa5e74d358805f5837792d9843c278->enter($__internal_261eee9f5b50c57818e9c12879d0cf6ddaaa5e74d358805f5837792d9843c278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_261eee9f5b50c57818e9c12879d0cf6ddaaa5e74d358805f5837792d9843c278->leave($__internal_261eee9f5b50c57818e9c12879d0cf6ddaaa5e74d358805f5837792d9843c278_prof);

        
        $__internal_8b6d833a91da8fa6082d8cb890130428159593985a11d3f33c70d7ebf6a7fa35->leave($__internal_8b6d833a91da8fa6082d8cb890130428159593985a11d3f33c70d7ebf6a7fa35_prof);

    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cf42995ffddbd14050a5b2dc9df980e97244da4456b505fb0d43f6ef240467f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf42995ffddbd14050a5b2dc9df980e97244da4456b505fb0d43f6ef240467f7->enter($__internal_cf42995ffddbd14050a5b2dc9df980e97244da4456b505fb0d43f6ef240467f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b5f621ef6bc98ae7731f2d7f0cb9e89f5e72d0001711e7cd7f328675b2183981 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5f621ef6bc98ae7731f2d7f0cb9e89f5e72d0001711e7cd7f328675b2183981->enter($__internal_b5f621ef6bc98ae7731f2d7f0cb9e89f5e72d0001711e7cd7f328675b2183981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_b5f621ef6bc98ae7731f2d7f0cb9e89f5e72d0001711e7cd7f328675b2183981->leave($__internal_b5f621ef6bc98ae7731f2d7f0cb9e89f5e72d0001711e7cd7f328675b2183981_prof);

        
        $__internal_cf42995ffddbd14050a5b2dc9df980e97244da4456b505fb0d43f6ef240467f7->leave($__internal_cf42995ffddbd14050a5b2dc9df980e97244da4456b505fb0d43f6ef240467f7_prof);

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
