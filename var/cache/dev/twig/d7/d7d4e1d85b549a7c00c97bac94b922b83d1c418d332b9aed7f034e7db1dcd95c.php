<?php

/* UserBundle:Default:address_book.html.twig */
class __TwigTemplate_7681f5f1e9f375d21acb68cf6bcd9686fdb4f5dee05d5ab795e8767b48217749 extends Twig_Template
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
        $__internal_5cc7a6c75e972c03f688adbc453da753fecf0550ed914698ee86f43957420250 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cc7a6c75e972c03f688adbc453da753fecf0550ed914698ee86f43957420250->enter($__internal_5cc7a6c75e972c03f688adbc453da753fecf0550ed914698ee86f43957420250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:address_book.html.twig"));

        $__internal_63e3e14a65ff8c3a53eed01bd498befc5bbea2eea80f9dcc622c9694b83e938b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63e3e14a65ff8c3a53eed01bd498befc5bbea2eea80f9dcc622c9694b83e938b->enter($__internal_63e3e14a65ff8c3a53eed01bd498befc5bbea2eea80f9dcc622c9694b83e938b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:address_book.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5cc7a6c75e972c03f688adbc453da753fecf0550ed914698ee86f43957420250->leave($__internal_5cc7a6c75e972c03f688adbc453da753fecf0550ed914698ee86f43957420250_prof);

        
        $__internal_63e3e14a65ff8c3a53eed01bd498befc5bbea2eea80f9dcc622c9694b83e938b->leave($__internal_63e3e14a65ff8c3a53eed01bd498befc5bbea2eea80f9dcc622c9694b83e938b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2b67eb85aee88258babd211bd6a55018418c5d773390faface5be98bdb5189fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b67eb85aee88258babd211bd6a55018418c5d773390faface5be98bdb5189fc->enter($__internal_2b67eb85aee88258babd211bd6a55018418c5d773390faface5be98bdb5189fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f6acbef3e5992bc00a515fff509681f1ee874a33a800d575ebebdf2182877fab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6acbef3e5992bc00a515fff509681f1ee874a33a800d575ebebdf2182877fab->enter($__internal_f6acbef3e5992bc00a515fff509681f1ee874a33a800d575ebebdf2182877fab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Address Book ";
        
        $__internal_f6acbef3e5992bc00a515fff509681f1ee874a33a800d575ebebdf2182877fab->leave($__internal_f6acbef3e5992bc00a515fff509681f1ee874a33a800d575ebebdf2182877fab_prof);

        
        $__internal_2b67eb85aee88258babd211bd6a55018418c5d773390faface5be98bdb5189fc->leave($__internal_2b67eb85aee88258babd211bd6a55018418c5d773390faface5be98bdb5189fc_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_59e72723da3096b78f54bec232f6be45fb4dce88ede349d8304f285a68cf8f4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59e72723da3096b78f54bec232f6be45fb4dce88ede349d8304f285a68cf8f4e->enter($__internal_59e72723da3096b78f54bec232f6be45fb4dce88ede349d8304f285a68cf8f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b66c2c31059f65d484a64e3411985310edac637cdf9f9e4bbb30a91dda0ad09b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b66c2c31059f65d484a64e3411985310edac637cdf9f9e4bbb30a91dda0ad09b->enter($__internal_b66c2c31059f65d484a64e3411985310edac637cdf9f9e4bbb30a91dda0ad09b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/css/address_book.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_b66c2c31059f65d484a64e3411985310edac637cdf9f9e4bbb30a91dda0ad09b->leave($__internal_b66c2c31059f65d484a64e3411985310edac637cdf9f9e4bbb30a91dda0ad09b_prof);

        
        $__internal_59e72723da3096b78f54bec232f6be45fb4dce88ede349d8304f285a68cf8f4e->leave($__internal_59e72723da3096b78f54bec232f6be45fb4dce88ede349d8304f285a68cf8f4e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_93f6ee7894f4fcc2476f2825f31e1d8976eb9a5fcc96cbc01dce98f80200511c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93f6ee7894f4fcc2476f2825f31e1d8976eb9a5fcc96cbc01dce98f80200511c->enter($__internal_93f6ee7894f4fcc2476f2825f31e1d8976eb9a5fcc96cbc01dce98f80200511c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5142d3ce990edf93e62ade094d61ad75270a752df4a06f2cc8bd7c971b9c3d89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5142d3ce990edf93e62ade094d61ad75270a752df4a06f2cc8bd7c971b9c3d89->enter($__internal_5142d3ce990edf93e62ade094d61ad75270a752df4a06f2cc8bd7c971b9c3d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5142d3ce990edf93e62ade094d61ad75270a752df4a06f2cc8bd7c971b9c3d89->leave($__internal_5142d3ce990edf93e62ade094d61ad75270a752df4a06f2cc8bd7c971b9c3d89_prof);

        
        $__internal_93f6ee7894f4fcc2476f2825f31e1d8976eb9a5fcc96cbc01dce98f80200511c->leave($__internal_93f6ee7894f4fcc2476f2825f31e1d8976eb9a5fcc96cbc01dce98f80200511c_prof);

    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_612431970eadb605164495d7781d7856520123a7bd60d566c941cde41c287dde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_612431970eadb605164495d7781d7856520123a7bd60d566c941cde41c287dde->enter($__internal_612431970eadb605164495d7781d7856520123a7bd60d566c941cde41c287dde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1c407954c0a99b739a7be173f591c523be7c3a8dfcdb5ffd2dea9cfa338b6258 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c407954c0a99b739a7be173f591c523be7c3a8dfcdb5ffd2dea9cfa338b6258->enter($__internal_1c407954c0a99b739a7be173f591c523be7c3a8dfcdb5ffd2dea9cfa338b6258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 55
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/js/address_book.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_1c407954c0a99b739a7be173f591c523be7c3a8dfcdb5ffd2dea9cfa338b6258->leave($__internal_1c407954c0a99b739a7be173f591c523be7c3a8dfcdb5ffd2dea9cfa338b6258_prof);

        
        $__internal_612431970eadb605164495d7781d7856520123a7bd60d566c941cde41c287dde->leave($__internal_612431970eadb605164495d7781d7856520123a7bd60d566c941cde41c287dde_prof);

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
        return array (  198 => 56,  193 => 55,  184 => 54,  168 => 46,  149 => 33,  145 => 32,  141 => 31,  137 => 30,  133 => 29,  129 => 28,  125 => 27,  121 => 25,  117 => 24,  108 => 20,  96 => 10,  87 => 9,  75 => 7,  70 => 6,  61 => 5,  43 => 3,  11 => 1,);
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
{% endblock %}", "UserBundle:Default:address_book.html.twig", "C:\\xampp\\htdocs\\src\\UserBundle/Resources/views/Default/address_book.html.twig");
    }
}
