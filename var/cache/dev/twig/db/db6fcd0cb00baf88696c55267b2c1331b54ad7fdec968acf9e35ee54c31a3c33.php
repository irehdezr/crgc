<?php

/* UserBundle:Security:courier.html.twig */
class __TwigTemplate_481002b2d5127cd4be0487bbefa5bc7e527845ab040ff95bc0e0f9f98b670927 extends Twig_Template
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
        $__internal_bad71a731973fb048dfb767300c237389414a16d3b75c247233599650032abd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bad71a731973fb048dfb767300c237389414a16d3b75c247233599650032abd1->enter($__internal_bad71a731973fb048dfb767300c237389414a16d3b75c247233599650032abd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Security:courier.html.twig"));

        $__internal_a90c8cae3d7feb6d75c071b1d8fb021a60c3d80c24a8d1129c85d45f4d26f265 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a90c8cae3d7feb6d75c071b1d8fb021a60c3d80c24a8d1129c85d45f4d26f265->enter($__internal_a90c8cae3d7feb6d75c071b1d8fb021a60c3d80c24a8d1129c85d45f4d26f265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Security:courier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bad71a731973fb048dfb767300c237389414a16d3b75c247233599650032abd1->leave($__internal_bad71a731973fb048dfb767300c237389414a16d3b75c247233599650032abd1_prof);

        
        $__internal_a90c8cae3d7feb6d75c071b1d8fb021a60c3d80c24a8d1129c85d45f4d26f265->leave($__internal_a90c8cae3d7feb6d75c071b1d8fb021a60c3d80c24a8d1129c85d45f4d26f265_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_7a4521f76b7941542d19d7fc2335fc321ea842e39fe9f0177f5c862e0b4d9040 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a4521f76b7941542d19d7fc2335fc321ea842e39fe9f0177f5c862e0b4d9040->enter($__internal_7a4521f76b7941542d19d7fc2335fc321ea842e39fe9f0177f5c862e0b4d9040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_737382ee9683e0a96274eba4f1200e88144356ddc391b5c0ad78d08db4b1b15f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_737382ee9683e0a96274eba4f1200e88144356ddc391b5c0ad78d08db4b1b15f->enter($__internal_737382ee9683e0a96274eba4f1200e88144356ddc391b5c0ad78d08db4b1b15f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Shipping ";
        
        $__internal_737382ee9683e0a96274eba4f1200e88144356ddc391b5c0ad78d08db4b1b15f->leave($__internal_737382ee9683e0a96274eba4f1200e88144356ddc391b5c0ad78d08db4b1b15f_prof);

        
        $__internal_7a4521f76b7941542d19d7fc2335fc321ea842e39fe9f0177f5c862e0b4d9040->leave($__internal_7a4521f76b7941542d19d7fc2335fc321ea842e39fe9f0177f5c862e0b4d9040_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_13c11355bf3119644be794df73dfc1c93df2190fb4be0ea1e441b3c4cf0066a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13c11355bf3119644be794df73dfc1c93df2190fb4be0ea1e441b3c4cf0066a8->enter($__internal_13c11355bf3119644be794df73dfc1c93df2190fb4be0ea1e441b3c4cf0066a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5ddbf34ddd6885155cc06c2dd77908644cc91bfa14a17aa08f76b55fd6f8c841 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ddbf34ddd6885155cc06c2dd77908644cc91bfa14a17aa08f76b55fd6f8c841->enter($__internal_5ddbf34ddd6885155cc06c2dd77908644cc91bfa14a17aa08f76b55fd6f8c841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/css/address_book.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_5ddbf34ddd6885155cc06c2dd77908644cc91bfa14a17aa08f76b55fd6f8c841->leave($__internal_5ddbf34ddd6885155cc06c2dd77908644cc91bfa14a17aa08f76b55fd6f8c841_prof);

        
        $__internal_13c11355bf3119644be794df73dfc1c93df2190fb4be0ea1e441b3c4cf0066a8->leave($__internal_13c11355bf3119644be794df73dfc1c93df2190fb4be0ea1e441b3c4cf0066a8_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_4ea1a615b9b2ab4e52063498d665b605369e100fec5a89315301c41d72f4bedf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ea1a615b9b2ab4e52063498d665b605369e100fec5a89315301c41d72f4bedf->enter($__internal_4ea1a615b9b2ab4e52063498d665b605369e100fec5a89315301c41d72f4bedf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e126e01ffb0f69bf41df13647a699a908fa56e7db406e7f83fa23bc4d43b50a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e126e01ffb0f69bf41df13647a699a908fa56e7db406e7f83fa23bc4d43b50a4->enter($__internal_e126e01ffb0f69bf41df13647a699a908fa56e7db406e7f83fa23bc4d43b50a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e126e01ffb0f69bf41df13647a699a908fa56e7db406e7f83fa23bc4d43b50a4->leave($__internal_e126e01ffb0f69bf41df13647a699a908fa56e7db406e7f83fa23bc4d43b50a4_prof);

        
        $__internal_4ea1a615b9b2ab4e52063498d665b605369e100fec5a89315301c41d72f4bedf->leave($__internal_4ea1a615b9b2ab4e52063498d665b605369e100fec5a89315301c41d72f4bedf_prof);

    }

    // line 58
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6526c4df7527a82038b1401f357ea1cff585df111028e8898abe06d0da993cf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6526c4df7527a82038b1401f357ea1cff585df111028e8898abe06d0da993cf2->enter($__internal_6526c4df7527a82038b1401f357ea1cff585df111028e8898abe06d0da993cf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e73aae639b3d32fb4039fa3a28504bce2860b1504566c769bd311abdf94ddb41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e73aae639b3d32fb4039fa3a28504bce2860b1504566c769bd311abdf94ddb41->enter($__internal_e73aae639b3d32fb4039fa3a28504bce2860b1504566c769bd311abdf94ddb41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 59
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/js/courier.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_e73aae639b3d32fb4039fa3a28504bce2860b1504566c769bd311abdf94ddb41->leave($__internal_e73aae639b3d32fb4039fa3a28504bce2860b1504566c769bd311abdf94ddb41_prof);

        
        $__internal_6526c4df7527a82038b1401f357ea1cff585df111028e8898abe06d0da993cf2->leave($__internal_6526c4df7527a82038b1401f357ea1cff585df111028e8898abe06d0da993cf2_prof);

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
        return array (  191 => 60,  187 => 59,  178 => 58,  144 => 34,  140 => 33,  136 => 32,  132 => 31,  128 => 30,  124 => 29,  120 => 28,  116 => 27,  95 => 8,  86 => 7,  74 => 5,  70 => 4,  61 => 3,  43 => 2,  11 => 1,);
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
