<?php

/* UserBundle:Security:courier.html.twig */
class __TwigTemplate_834e490b3fbf37daa194d874a6795498089982a2501adf724954f39d239accba extends Twig_Template
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
        $__internal_037de77fd119cd76740ad14a5e951eac394ff0ae446eec23a324d94f8a90602b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_037de77fd119cd76740ad14a5e951eac394ff0ae446eec23a324d94f8a90602b->enter($__internal_037de77fd119cd76740ad14a5e951eac394ff0ae446eec23a324d94f8a90602b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Security:courier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_037de77fd119cd76740ad14a5e951eac394ff0ae446eec23a324d94f8a90602b->leave($__internal_037de77fd119cd76740ad14a5e951eac394ff0ae446eec23a324d94f8a90602b_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_ef3c0c41bcb90ce43983a115b923ad10a4360dd8ee0ed1539216dfa23ff64d15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef3c0c41bcb90ce43983a115b923ad10a4360dd8ee0ed1539216dfa23ff64d15->enter($__internal_ef3c0c41bcb90ce43983a115b923ad10a4360dd8ee0ed1539216dfa23ff64d15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Shipping ";
        
        $__internal_ef3c0c41bcb90ce43983a115b923ad10a4360dd8ee0ed1539216dfa23ff64d15->leave($__internal_ef3c0c41bcb90ce43983a115b923ad10a4360dd8ee0ed1539216dfa23ff64d15_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_96aa8ad293473d801eee6a21413e08eaaead59861710406c891555880da3b801 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96aa8ad293473d801eee6a21413e08eaaead59861710406c891555880da3b801->enter($__internal_96aa8ad293473d801eee6a21413e08eaaead59861710406c891555880da3b801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/css/address_book.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_96aa8ad293473d801eee6a21413e08eaaead59861710406c891555880da3b801->leave($__internal_96aa8ad293473d801eee6a21413e08eaaead59861710406c891555880da3b801_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_d68456364e1ef12d2e48052b6f8eb98dd434e023935d328e7dcb2b92027ebf31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d68456364e1ef12d2e48052b6f8eb98dd434e023935d328e7dcb2b92027ebf31->enter($__internal_d68456364e1ef12d2e48052b6f8eb98dd434e023935d328e7dcb2b92027ebf31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d68456364e1ef12d2e48052b6f8eb98dd434e023935d328e7dcb2b92027ebf31->leave($__internal_d68456364e1ef12d2e48052b6f8eb98dd434e023935d328e7dcb2b92027ebf31_prof);

    }

    // line 58
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fb6ee34101e93f5095e7c42e3a3af42e0164b7faaabb5a7d8d33af3abddc89fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb6ee34101e93f5095e7c42e3a3af42e0164b7faaabb5a7d8d33af3abddc89fe->enter($__internal_fb6ee34101e93f5095e7c42e3a3af42e0164b7faaabb5a7d8d33af3abddc89fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 59
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/js/courier.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_fb6ee34101e93f5095e7c42e3a3af42e0164b7faaabb5a7d8d33af3abddc89fe->leave($__internal_fb6ee34101e93f5095e7c42e3a3af42e0164b7faaabb5a7d8d33af3abddc89fe_prof);

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
{% endblock %}", "UserBundle:Security:courier.html.twig", "C:\\xampp\\htdocs\\src\\UserBundle/Resources/views/Security/courier.html.twig");
    }
}
