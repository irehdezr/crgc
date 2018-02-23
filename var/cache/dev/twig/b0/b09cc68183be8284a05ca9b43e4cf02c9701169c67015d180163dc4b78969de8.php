<?php

/* @User/Security/courier.html.twig */
class __TwigTemplate_6e230c18de56945bee5445837e89d060ea604701368487b40c764f0a4975c38c extends Twig_Template
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
        $__internal_9ea94d196fe71d1413ee43be48cd62e2c91bc5aae402a852d1937709e2884aa1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ea94d196fe71d1413ee43be48cd62e2c91bc5aae402a852d1937709e2884aa1->enter($__internal_9ea94d196fe71d1413ee43be48cd62e2c91bc5aae402a852d1937709e2884aa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Security/courier.html.twig"));

        $__internal_44a6f94ba0483a18b691762162382aabcbe878d0847ff667440bc98c923fa578 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44a6f94ba0483a18b691762162382aabcbe878d0847ff667440bc98c923fa578->enter($__internal_44a6f94ba0483a18b691762162382aabcbe878d0847ff667440bc98c923fa578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Security/courier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ea94d196fe71d1413ee43be48cd62e2c91bc5aae402a852d1937709e2884aa1->leave($__internal_9ea94d196fe71d1413ee43be48cd62e2c91bc5aae402a852d1937709e2884aa1_prof);

        
        $__internal_44a6f94ba0483a18b691762162382aabcbe878d0847ff667440bc98c923fa578->leave($__internal_44a6f94ba0483a18b691762162382aabcbe878d0847ff667440bc98c923fa578_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_9bc71e6c659f8f405503f6c7743c4196f042873e80e4cd4ab64388bb16a97e5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bc71e6c659f8f405503f6c7743c4196f042873e80e4cd4ab64388bb16a97e5c->enter($__internal_9bc71e6c659f8f405503f6c7743c4196f042873e80e4cd4ab64388bb16a97e5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1b1c04f286a54b2b3bc1619de0cd328b33cc9818973ab88be859e3ce95c90c71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b1c04f286a54b2b3bc1619de0cd328b33cc9818973ab88be859e3ce95c90c71->enter($__internal_1b1c04f286a54b2b3bc1619de0cd328b33cc9818973ab88be859e3ce95c90c71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Shipping ";
        
        $__internal_1b1c04f286a54b2b3bc1619de0cd328b33cc9818973ab88be859e3ce95c90c71->leave($__internal_1b1c04f286a54b2b3bc1619de0cd328b33cc9818973ab88be859e3ce95c90c71_prof);

        
        $__internal_9bc71e6c659f8f405503f6c7743c4196f042873e80e4cd4ab64388bb16a97e5c->leave($__internal_9bc71e6c659f8f405503f6c7743c4196f042873e80e4cd4ab64388bb16a97e5c_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c4b5ba6bd3c8939ddf56e8f0686fdbccf5ab59383dcefd6c33b91aa4de31bcca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4b5ba6bd3c8939ddf56e8f0686fdbccf5ab59383dcefd6c33b91aa4de31bcca->enter($__internal_c4b5ba6bd3c8939ddf56e8f0686fdbccf5ab59383dcefd6c33b91aa4de31bcca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7d7e6268d5c665009549652254511d68f4981c8e4007a646862c8512007ed7e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d7e6268d5c665009549652254511d68f4981c8e4007a646862c8512007ed7e2->enter($__internal_7d7e6268d5c665009549652254511d68f4981c8e4007a646862c8512007ed7e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/css/address_book.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_7d7e6268d5c665009549652254511d68f4981c8e4007a646862c8512007ed7e2->leave($__internal_7d7e6268d5c665009549652254511d68f4981c8e4007a646862c8512007ed7e2_prof);

        
        $__internal_c4b5ba6bd3c8939ddf56e8f0686fdbccf5ab59383dcefd6c33b91aa4de31bcca->leave($__internal_c4b5ba6bd3c8939ddf56e8f0686fdbccf5ab59383dcefd6c33b91aa4de31bcca_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_8120c84cc2f76b8135e68305c5c297467f9d4f8da69e1322440e833bd1ec97c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8120c84cc2f76b8135e68305c5c297467f9d4f8da69e1322440e833bd1ec97c0->enter($__internal_8120c84cc2f76b8135e68305c5c297467f9d4f8da69e1322440e833bd1ec97c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5a9fd5789c5f4152b9985143bf021eb94a23c51d044681b6230711d3a4b475e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a9fd5789c5f4152b9985143bf021eb94a23c51d044681b6230711d3a4b475e3->enter($__internal_5a9fd5789c5f4152b9985143bf021eb94a23c51d044681b6230711d3a4b475e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5a9fd5789c5f4152b9985143bf021eb94a23c51d044681b6230711d3a4b475e3->leave($__internal_5a9fd5789c5f4152b9985143bf021eb94a23c51d044681b6230711d3a4b475e3_prof);

        
        $__internal_8120c84cc2f76b8135e68305c5c297467f9d4f8da69e1322440e833bd1ec97c0->leave($__internal_8120c84cc2f76b8135e68305c5c297467f9d4f8da69e1322440e833bd1ec97c0_prof);

    }

    // line 58
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9be51cc41932d01d438b0fee3451fefa9579b3add81707522c48034a93429ab5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9be51cc41932d01d438b0fee3451fefa9579b3add81707522c48034a93429ab5->enter($__internal_9be51cc41932d01d438b0fee3451fefa9579b3add81707522c48034a93429ab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_16cdd1a6ac8516b7a55571bd4e338fbf583fcc321bf9b3a1f8e63f8f3b3cec53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16cdd1a6ac8516b7a55571bd4e338fbf583fcc321bf9b3a1f8e63f8f3b3cec53->enter($__internal_16cdd1a6ac8516b7a55571bd4e338fbf583fcc321bf9b3a1f8e63f8f3b3cec53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 59
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/js/courier.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_16cdd1a6ac8516b7a55571bd4e338fbf583fcc321bf9b3a1f8e63f8f3b3cec53->leave($__internal_16cdd1a6ac8516b7a55571bd4e338fbf583fcc321bf9b3a1f8e63f8f3b3cec53_prof);

        
        $__internal_9be51cc41932d01d438b0fee3451fefa9579b3add81707522c48034a93429ab5->leave($__internal_9be51cc41932d01d438b0fee3451fefa9579b3add81707522c48034a93429ab5_prof);

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
{% endblock %}", "@User/Security/courier.html.twig", "C:\\xampp\\htdocs\\src\\UserBundle\\Resources\\views\\Security\\courier.html.twig");
    }
}
