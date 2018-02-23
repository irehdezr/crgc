<?php

/* UserBundle:Security:courier.html.twig */
class __TwigTemplate_9f2c37f37a6334b9296316ed6b355290105c8c94dda21d1e973c5749375bf26e extends Twig_Template
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
        $__internal_2634678917aea184d8da2e1faba9dccd34ca87efefc7c088d46fda75edbe5e35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2634678917aea184d8da2e1faba9dccd34ca87efefc7c088d46fda75edbe5e35->enter($__internal_2634678917aea184d8da2e1faba9dccd34ca87efefc7c088d46fda75edbe5e35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Security:courier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2634678917aea184d8da2e1faba9dccd34ca87efefc7c088d46fda75edbe5e35->leave($__internal_2634678917aea184d8da2e1faba9dccd34ca87efefc7c088d46fda75edbe5e35_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_44e4f7b97d3ad8feace555f5ea47da803c947894df5d061c772e1525115f4b6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44e4f7b97d3ad8feace555f5ea47da803c947894df5d061c772e1525115f4b6b->enter($__internal_44e4f7b97d3ad8feace555f5ea47da803c947894df5d061c772e1525115f4b6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Shipping ";
        
        $__internal_44e4f7b97d3ad8feace555f5ea47da803c947894df5d061c772e1525115f4b6b->leave($__internal_44e4f7b97d3ad8feace555f5ea47da803c947894df5d061c772e1525115f4b6b_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_20d76289ad8145f9d1b43e90ef3bc2ab6d8fe059789ee2c29916f503f96ae4a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20d76289ad8145f9d1b43e90ef3bc2ab6d8fe059789ee2c29916f503f96ae4a6->enter($__internal_20d76289ad8145f9d1b43e90ef3bc2ab6d8fe059789ee2c29916f503f96ae4a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/css/address_book.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_20d76289ad8145f9d1b43e90ef3bc2ab6d8fe059789ee2c29916f503f96ae4a6->leave($__internal_20d76289ad8145f9d1b43e90ef3bc2ab6d8fe059789ee2c29916f503f96ae4a6_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e61ecd517942995e5c95e2ce23d898301fa7e4bbdedfded041f205d6055bbaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e61ecd517942995e5c95e2ce23d898301fa7e4bbdedfded041f205d6055bbaa->enter($__internal_8e61ecd517942995e5c95e2ce23d898301fa7e4bbdedfded041f205d6055bbaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<main>
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
        echo "' class=\"btn btn-warning center\"> 
                  Change address
                  </a>
               </div>
            </div>
            <div class=\"col-xs-12 col-sm-6 col-lg-6\">
               <h3 class=\"title\">
                  <p>Choose a delivery option:</p>
               </h3>
               <p>
                  Correos de Costa  makes international shipping easy by calculating import fees at checkout, as well as clearing customs for you. In addition, you have the visibility to track your packages door-to-door.
               </p>
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
        
        $__internal_8e61ecd517942995e5c95e2ce23d898301fa7e4bbdedfded041f205d6055bbaa->leave($__internal_8e61ecd517942995e5c95e2ce23d898301fa7e4bbdedfded041f205d6055bbaa_prof);

    }

    // line 58
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f6e4012589062ce6e7da18a18872646dea3a57282d895c0d2f433c9581c07de6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6e4012589062ce6e7da18a18872646dea3a57282d895c0d2f433c9581c07de6->enter($__internal_f6e4012589062ce6e7da18a18872646dea3a57282d895c0d2f433c9581c07de6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 59
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/js/courier.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_f6e4012589062ce6e7da18a18872646dea3a57282d895c0d2f433c9581c07de6->leave($__internal_f6e4012589062ce6e7da18a18872646dea3a57282d895c0d2f433c9581c07de6_prof);

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
        return array (  164 => 60,  160 => 59,  154 => 58,  123 => 34,  119 => 33,  115 => 32,  111 => 31,  107 => 30,  103 => 29,  99 => 28,  95 => 27,  74 => 8,  68 => 7,  59 => 5,  55 => 4,  49 => 3,  37 => 2,  11 => 1,);
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
{% block title%} Shipping {% endblock %}
{% block stylesheets %}
{{ parent() }}
<link rel=\"stylesheet\" href=\"{{ asset('/web/public/css/address_book.css') }}\" />
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
                  <a href='{{ path(\"user_address_book\", {\"user\": app.user.email }) }}' class=\"btn btn-warning center\"> 
                  Change address
                  </a>
               </div>
            </div>
            <div class=\"col-xs-12 col-sm-6 col-lg-6\">
               <h3 class=\"title\">
                  <p>Choose a delivery option:</p>
               </h3>
               <p>
                  Correos de Costa  makes international shipping easy by calculating import fees at checkout, as well as clearing customs for you. In addition, you have the visibility to track your packages door-to-door.
               </p>
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
<script src=\"{{ asset('/web/public/js/courier.js')}}\"></script>
{% endblock %}", "UserBundle:Security:courier.html.twig", "/home/crgourme/public_html/src/UserBundle/Resources/views/Security/courier.html.twig");
    }
}
