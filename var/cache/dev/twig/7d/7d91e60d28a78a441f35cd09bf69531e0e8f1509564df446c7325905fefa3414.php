<?php

/* UserBundle:Default:address_book.html.twig */
class __TwigTemplate_4078612c7156c5dd35337d461d7be5d1e6b97c0516e25c53c7e68394f23837b5 extends Twig_Template
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
        $__internal_b82a271c065673aee59840dc6d0a46df3b1774f80a84e4754d28383fbf518694 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b82a271c065673aee59840dc6d0a46df3b1774f80a84e4754d28383fbf518694->enter($__internal_b82a271c065673aee59840dc6d0a46df3b1774f80a84e4754d28383fbf518694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:address_book.html.twig"));

        $__internal_49267924e82eb3c69d592bccba6c98889bddad19ff36212f70dd920d29cbf1f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49267924e82eb3c69d592bccba6c98889bddad19ff36212f70dd920d29cbf1f8->enter($__internal_49267924e82eb3c69d592bccba6c98889bddad19ff36212f70dd920d29cbf1f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:address_book.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b82a271c065673aee59840dc6d0a46df3b1774f80a84e4754d28383fbf518694->leave($__internal_b82a271c065673aee59840dc6d0a46df3b1774f80a84e4754d28383fbf518694_prof);

        
        $__internal_49267924e82eb3c69d592bccba6c98889bddad19ff36212f70dd920d29cbf1f8->leave($__internal_49267924e82eb3c69d592bccba6c98889bddad19ff36212f70dd920d29cbf1f8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f0c347381cec1428cd9db46b82d7593209ca1a2ca4ef571e2741c803184f8b2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0c347381cec1428cd9db46b82d7593209ca1a2ca4ef571e2741c803184f8b2f->enter($__internal_f0c347381cec1428cd9db46b82d7593209ca1a2ca4ef571e2741c803184f8b2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_70990b7a5a0e6091ce151b05f2cdfdda2e0eb02f173d9381b9bee362b2818550 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70990b7a5a0e6091ce151b05f2cdfdda2e0eb02f173d9381b9bee362b2818550->enter($__internal_70990b7a5a0e6091ce151b05f2cdfdda2e0eb02f173d9381b9bee362b2818550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Address Book ";
        
        $__internal_70990b7a5a0e6091ce151b05f2cdfdda2e0eb02f173d9381b9bee362b2818550->leave($__internal_70990b7a5a0e6091ce151b05f2cdfdda2e0eb02f173d9381b9bee362b2818550_prof);

        
        $__internal_f0c347381cec1428cd9db46b82d7593209ca1a2ca4ef571e2741c803184f8b2f->leave($__internal_f0c347381cec1428cd9db46b82d7593209ca1a2ca4ef571e2741c803184f8b2f_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7e5def32ebb078f41836ad733eeae41d79b49febce8794c4cd635c653105bff3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e5def32ebb078f41836ad733eeae41d79b49febce8794c4cd635c653105bff3->enter($__internal_7e5def32ebb078f41836ad733eeae41d79b49febce8794c4cd635c653105bff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2a428a9ad2c013900536a93c2a3e89beb0690832c63505cbd675e4007f843fa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a428a9ad2c013900536a93c2a3e89beb0690832c63505cbd675e4007f843fa2->enter($__internal_2a428a9ad2c013900536a93c2a3e89beb0690832c63505cbd675e4007f843fa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/address_book.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_2a428a9ad2c013900536a93c2a3e89beb0690832c63505cbd675e4007f843fa2->leave($__internal_2a428a9ad2c013900536a93c2a3e89beb0690832c63505cbd675e4007f843fa2_prof);

        
        $__internal_7e5def32ebb078f41836ad733eeae41d79b49febce8794c4cd635c653105bff3->leave($__internal_7e5def32ebb078f41836ad733eeae41d79b49febce8794c4cd635c653105bff3_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_56f743d3fa3da1e44759ab096668ebdb05304d2813cd6bb6d7ba7a238f30c455 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56f743d3fa3da1e44759ab096668ebdb05304d2813cd6bb6d7ba7a238f30c455->enter($__internal_56f743d3fa3da1e44759ab096668ebdb05304d2813cd6bb6d7ba7a238f30c455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2c8c124aa4162668d0ed1bcbfd9285b31f119c9dad2418252f951b10321d1447 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c8c124aa4162668d0ed1bcbfd9285b31f119c9dad2418252f951b10321d1447->enter($__internal_2c8c124aa4162668d0ed1bcbfd9285b31f119c9dad2418252f951b10321d1447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<main>    
\t<section id=\"pageTitle\">
    \t<center>
      \t\t<h2>Address book</h2>
    \t</center>
  \t</section>
  \t<div class='container-fluid'>
    \t<div id='farmInfoContainer' class='row'>
        \t<div id='farmInfoHeading' class='col-xs-12'>
\t          \t<center>
\t            \t<h3>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "getUsername", array(), "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "getLastname", array(), "method"), "html", null, true);
        echo "</h3>
          \t\t</center>
        \t</div>
\t        <div class=\"row\" >
\t        \t";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["addresses"] ?? $this->getContext($context, "addresses")));
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 25
            echo "\t          \t\t<div class=\"col-xs-12 col-sm-6 col-lg-4\">
\t\t            \t<div class=\"box\">      
\t\t              \t\t<h3 class=\"title\">
\t\t              \t\t\t\t<p id=\"addressName\">";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "getFullname", array(), "method"), "html", null, true);
            echo "</p>
\t\t              \t\t</h3>
\t\t             \t\t<p>Country: ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "getCountry", array(), "method"), "html", null, true);
            echo "</p>
\t\t              \t\t<p>State:";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "getState", array(), "method"), "html", null, true);
            echo "</p>
\t\t              \t\t<p>City :";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "getCity", array(), "method"), "html", null, true);
            echo "</p>
\t\t              \t\t<p>Line 1:";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "getLine1", array(), "method"), "html", null, true);
            echo "</p>
\t\t              \t\t<p>Line 2:";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "getLine2", array(), "method"), "html", null, true);
            echo "</p>
\t\t              \t\t<p>Zip code:";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "getZip", array(), "method"), "html", null, true);
            echo "</p>
\t\t              \t\t<button  class=\"btn btn-success setAddress pull-left\">Use this address</button>
\t\t              \t\t<button class=\"btn btn-warning editAddress center\">Edit</button>
\t\t              \t\t<button class=\"btn btn-danger deleteAddress pull-right\">Delete</button>
\t\t            \t</div> 
\t\t          \t</div>
\t\t        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "\t\t    </div>
\t    </div>
\t</div>
  \t<button id=\"btn-new-address\" class=\"btn btn-success pull-right\">Add new address</button>
</main>
";
        
        $__internal_2c8c124aa4162668d0ed1bcbfd9285b31f119c9dad2418252f951b10321d1447->leave($__internal_2c8c124aa4162668d0ed1bcbfd9285b31f119c9dad2418252f951b10321d1447_prof);

        
        $__internal_56f743d3fa3da1e44759ab096668ebdb05304d2813cd6bb6d7ba7a238f30c455->leave($__internal_56f743d3fa3da1e44759ab096668ebdb05304d2813cd6bb6d7ba7a238f30c455_prof);

    }

    // line 49
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1e5118aa96e382c150f8f40c14d9c613b1be3817e7d8cbea0f84ae416606d807 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e5118aa96e382c150f8f40c14d9c613b1be3817e7d8cbea0f84ae416606d807->enter($__internal_1e5118aa96e382c150f8f40c14d9c613b1be3817e7d8cbea0f84ae416606d807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0bbd5233722e2e7aedd4828b0e42ee9fa3614c8941ed31c16384be57549935a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bbd5233722e2e7aedd4828b0e42ee9fa3614c8941ed31c16384be57549935a3->enter($__internal_0bbd5233722e2e7aedd4828b0e42ee9fa3614c8941ed31c16384be57549935a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 50
        echo "  \t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
 \t<script>
 \t\tvar addNewAddressUrl = \"";
        // line 52
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_address_new"), "js"), "html", null, true);
        echo "\";
 \t\tvar setCurrentAddressUrl = \"";
        // line 53
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_address_setCurrent"), "js"), "html", null, true);
        echo "\";
 \t</script>
  \t<script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/address_book.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_0bbd5233722e2e7aedd4828b0e42ee9fa3614c8941ed31c16384be57549935a3->leave($__internal_0bbd5233722e2e7aedd4828b0e42ee9fa3614c8941ed31c16384be57549935a3_prof);

        
        $__internal_1e5118aa96e382c150f8f40c14d9c613b1be3817e7d8cbea0f84ae416606d807->leave($__internal_1e5118aa96e382c150f8f40c14d9c613b1be3817e7d8cbea0f84ae416606d807_prof);

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
        return array (  203 => 55,  198 => 53,  194 => 52,  188 => 50,  179 => 49,  164 => 42,  151 => 35,  147 => 34,  143 => 33,  139 => 32,  135 => 31,  131 => 30,  126 => 28,  121 => 25,  117 => 24,  108 => 20,  96 => 10,  87 => 9,  75 => 7,  70 => 6,  61 => 5,  43 => 3,  11 => 1,);
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
    <link rel=\"stylesheet\" href=\"{{ asset('css/address_book.css') }}\" />
{% endblock %}
{% block body %}
<main>    
\t<section id=\"pageTitle\">
    \t<center>
      \t\t<h2>Address book</h2>
    \t</center>
  \t</section>
  \t<div class='container-fluid'>
    \t<div id='farmInfoContainer' class='row'>
        \t<div id='farmInfoHeading' class='col-xs-12'>
\t          \t<center>
\t            \t<h3>{{ user.getUsername() }} {{ user.getLastname() }}</h3>
          \t\t</center>
        \t</div>
\t        <div class=\"row\" >
\t        \t{% for address in addresses %}
\t          \t\t<div class=\"col-xs-12 col-sm-6 col-lg-4\">
\t\t            \t<div class=\"box\">      
\t\t              \t\t<h3 class=\"title\">
\t\t              \t\t\t\t<p id=\"addressName\">{{ address.getFullname() }}</p>
\t\t              \t\t</h3>
\t\t             \t\t<p>Country: {{ address.getCountry() }}</p>
\t\t              \t\t<p>State:{{ address.getState() }}</p>
\t\t              \t\t<p>City :{{ address.getCity() }}</p>
\t\t              \t\t<p>Line 1:{{ address.getLine1() }}</p>
\t\t              \t\t<p>Line 2:{{ address.getLine2() }}</p>
\t\t              \t\t<p>Zip code:{{ address.getZip() }}</p>
\t\t              \t\t<button  class=\"btn btn-success setAddress pull-left\">Use this address</button>
\t\t              \t\t<button class=\"btn btn-warning editAddress center\">Edit</button>
\t\t              \t\t<button class=\"btn btn-danger deleteAddress pull-right\">Delete</button>
\t\t            \t</div> 
\t\t          \t</div>
\t\t        {% endfor%}
\t\t    </div>
\t    </div>
\t</div>
  \t<button id=\"btn-new-address\" class=\"btn btn-success pull-right\">Add new address</button>
</main>
{% endblock %}

{% block javascripts %}
  \t{{ parent() }}
 \t<script>
 \t\tvar addNewAddressUrl = \"{{ path('user_address_new')|escape('js') }}\";
 \t\tvar setCurrentAddressUrl = \"{{ path('user_address_setCurrent')|escape('js') }}\";
 \t</script>
  \t<script src=\"{{ asset('js/address_book.js')}}\"></script>
{% endblock %}", "UserBundle:Default:address_book.html.twig", "C:\\xampp\\htdocs\\crgc\\src\\UserBundle/Resources/views/Default/address_book.html.twig");
    }
}
