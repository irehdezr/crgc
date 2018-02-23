<?php

/* UserBundle:Default:address_book.html.twig */
class __TwigTemplate_c87ef07b72e2252405e15d706dc8110b0e4cab64b181fa73f0c4c4a5c845553a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("security.html.twig", "UserBundle:Default:address_book.html.twig", 1);
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
        $__internal_65b19392aac0c07665bc63bd21ccde191b20c801cd7b4c2fa1281dc47122bf0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65b19392aac0c07665bc63bd21ccde191b20c801cd7b4c2fa1281dc47122bf0c->enter($__internal_65b19392aac0c07665bc63bd21ccde191b20c801cd7b4c2fa1281dc47122bf0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:address_book.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65b19392aac0c07665bc63bd21ccde191b20c801cd7b4c2fa1281dc47122bf0c->leave($__internal_65b19392aac0c07665bc63bd21ccde191b20c801cd7b4c2fa1281dc47122bf0c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ee962416c0ac170d05a1ab5642f2da536dc7390ba0f598104dda2f821cdbb0b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee962416c0ac170d05a1ab5642f2da536dc7390ba0f598104dda2f821cdbb0b0->enter($__internal_ee962416c0ac170d05a1ab5642f2da536dc7390ba0f598104dda2f821cdbb0b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Address Book ";
        
        $__internal_ee962416c0ac170d05a1ab5642f2da536dc7390ba0f598104dda2f821cdbb0b0->leave($__internal_ee962416c0ac170d05a1ab5642f2da536dc7390ba0f598104dda2f821cdbb0b0_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2aa4230ee8dab1c06c1f653eb844687879db258a363c620a5da6a4aeacf7d976 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aa4230ee8dab1c06c1f653eb844687879db258a363c620a5da6a4aeacf7d976->enter($__internal_2aa4230ee8dab1c06c1f653eb844687879db258a363c620a5da6a4aeacf7d976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/css/address_book.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_2aa4230ee8dab1c06c1f653eb844687879db258a363c620a5da6a4aeacf7d976->leave($__internal_2aa4230ee8dab1c06c1f653eb844687879db258a363c620a5da6a4aeacf7d976_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_adc80b954892b7e76ef42ce9376bfbecc65e9f034063277288061df435cbba17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adc80b954892b7e76ef42ce9376bfbecc65e9f034063277288061df435cbba17->enter($__internal_adc80b954892b7e76ef42ce9376bfbecc65e9f034063277288061df435cbba17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<main>    
  <section id=\"pageTitle\">
    <center>
      <h2>Address book</h2>
    </center>
  </section>
  <div class='container-fluid'>
      <div id='farmInfoContainer' class='row'>
        <div id='farmInfoHeading' class='col-xs-12'>
          <center>
            <h3>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "getUsername", array(), "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "getLastname", array(), "method"), "html", null, true);
        echo "</h3>
          </center>
        </div>
        <div class=\"row\" >
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["addresses"] ?? $this->getContext($context, "addresses")));
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 25
            echo "          <div class=\"col-xs-12 col-sm-6 col-lg-4\">
            <div class=\"box\">      
              <h3 class=\"title\"><p id=\"addressName\">";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "getFullname", array(), "method"), "html", null, true);
            echo "</p></h3>
              <p>Country: ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "getCountry", array(), "method"), "html", null, true);
            echo "</p>
              <p>State:";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "getState", array(), "method"), "html", null, true);
            echo "</p>
              <p>City :";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "getCity", array(), "method"), "html", null, true);
            echo "</p>
              <p>Line 1:";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "getLine1", array(), "method"), "html", null, true);
            echo "</p>
              <p>Line 2:";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "getLine2", array(), "method"), "html", null, true);
            echo "</p>
              <p>Zip code:";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "getZip", array(), "method"), "html", null, true);
            echo "</p>
              <button  class=\"btn btn-success setAddress pull-left\"> 
                Use this address
              </button>
              <button class=\"btn btn-warning editAddress center\"> 
                Edit
              </button>
              <button class=\"btn btn-danger deleteAddress pull-right\"> 
                Delete
              </button>
            </div> 
          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "        </div>
      </div>
    </div>
  <button id=\"btn-new-address\" class=\"btn btn-success pull-right\">Add new address</button>

</main>
";
        
        $__internal_adc80b954892b7e76ef42ce9376bfbecc65e9f034063277288061df435cbba17->leave($__internal_adc80b954892b7e76ef42ce9376bfbecc65e9f034063277288061df435cbba17_prof);

    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ce6f9c5456bc7e8f92cc8bbc421ba37512bbb983defb588704b03cbc7857f2c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce6f9c5456bc7e8f92cc8bbc421ba37512bbb983defb588704b03cbc7857f2c6->enter($__internal_ce6f9c5456bc7e8f92cc8bbc421ba37512bbb983defb588704b03cbc7857f2c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 55
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/js/address_book.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_ce6f9c5456bc7e8f92cc8bbc421ba37512bbb983defb588704b03cbc7857f2c6->leave($__internal_ce6f9c5456bc7e8f92cc8bbc421ba37512bbb983defb588704b03cbc7857f2c6_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Default:address_book.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 56,  166 => 55,  160 => 54,  147 => 46,  128 => 33,  124 => 32,  120 => 31,  116 => 30,  112 => 29,  108 => 28,  104 => 27,  100 => 25,  96 => 24,  87 => 20,  75 => 10,  69 => 9,  60 => 7,  55 => 6,  49 => 5,  37 => 3,  11 => 1,);
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

{% block title%} Address Book {% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('/web/public/css/address_book.css') }}\" />
{% endblock %}
{% block body %}
<main>    
  <section id=\"pageTitle\">
    <center>
      <h2>Address book</h2>
    </center>
  </section>
  <div class='container-fluid'>
      <div id='farmInfoContainer' class='row'>
        <div id='farmInfoHeading' class='col-xs-12'>
          <center>
            <h3>{{ user.getUsername() }} {{ user.getLastname() }}</h3>
          </center>
        </div>
        <div class=\"row\" >
        {% for address in addresses %}
          <div class=\"col-xs-12 col-sm-6 col-lg-4\">
            <div class=\"box\">      
              <h3 class=\"title\"><p id=\"addressName\">{{ address.getFullname() }}</p></h3>
              <p>Country: {{ address.getCountry() }}</p>
              <p>State:{{ address.getState() }}</p>
              <p>City :{{ address.getCity() }}</p>
              <p>Line 1:{{ address.getLine1() }}</p>
              <p>Line 2:{{ address.getLine2() }}</p>
              <p>Zip code:{{ address.getZip() }}</p>
              <button  class=\"btn btn-success setAddress pull-left\"> 
                Use this address
              </button>
              <button class=\"btn btn-warning editAddress center\"> 
                Edit
              </button>
              <button class=\"btn btn-danger deleteAddress pull-right\"> 
                Delete
              </button>
            </div> 
          </div>
        {% endfor%}
        </div>
      </div>
    </div>
  <button id=\"btn-new-address\" class=\"btn btn-success pull-right\">Add new address</button>

</main>
{% endblock %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"{{ asset('/web/public/js/address_book.js')}}\"></script>
{% endblock %}", "UserBundle:Default:address_book.html.twig", "/home/crgourme/public_html/src/UserBundle/Resources/views/Default/address_book.html.twig");
    }
}
