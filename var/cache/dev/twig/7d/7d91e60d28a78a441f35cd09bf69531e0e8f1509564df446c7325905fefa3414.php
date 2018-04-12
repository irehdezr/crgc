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
        $__internal_d1b660eeaf23541080c0fd8370e28a6e88ea0440054933989b1732b43749f192 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1b660eeaf23541080c0fd8370e28a6e88ea0440054933989b1732b43749f192->enter($__internal_d1b660eeaf23541080c0fd8370e28a6e88ea0440054933989b1732b43749f192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:address_book.html.twig"));

        $__internal_dc06bf38ecf77d07082ad671536f4adfeb4817472b296ea2824721158387df64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc06bf38ecf77d07082ad671536f4adfeb4817472b296ea2824721158387df64->enter($__internal_dc06bf38ecf77d07082ad671536f4adfeb4817472b296ea2824721158387df64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:address_book.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1b660eeaf23541080c0fd8370e28a6e88ea0440054933989b1732b43749f192->leave($__internal_d1b660eeaf23541080c0fd8370e28a6e88ea0440054933989b1732b43749f192_prof);

        
        $__internal_dc06bf38ecf77d07082ad671536f4adfeb4817472b296ea2824721158387df64->leave($__internal_dc06bf38ecf77d07082ad671536f4adfeb4817472b296ea2824721158387df64_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9180a68a9a8e37ee4620d6a967ea0645c3be2481a65d983b8800e2e301c68d33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9180a68a9a8e37ee4620d6a967ea0645c3be2481a65d983b8800e2e301c68d33->enter($__internal_9180a68a9a8e37ee4620d6a967ea0645c3be2481a65d983b8800e2e301c68d33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0092451c8964cd265a1bba8e343a2b1eefaaafbc760273ecce7b664f898fee39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0092451c8964cd265a1bba8e343a2b1eefaaafbc760273ecce7b664f898fee39->enter($__internal_0092451c8964cd265a1bba8e343a2b1eefaaafbc760273ecce7b664f898fee39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Address Book ";
        
        $__internal_0092451c8964cd265a1bba8e343a2b1eefaaafbc760273ecce7b664f898fee39->leave($__internal_0092451c8964cd265a1bba8e343a2b1eefaaafbc760273ecce7b664f898fee39_prof);

        
        $__internal_9180a68a9a8e37ee4620d6a967ea0645c3be2481a65d983b8800e2e301c68d33->leave($__internal_9180a68a9a8e37ee4620d6a967ea0645c3be2481a65d983b8800e2e301c68d33_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_40ad3982cc1cb31274fff005b90480829d7420afc4ca3d968e79f03bf5f81724 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40ad3982cc1cb31274fff005b90480829d7420afc4ca3d968e79f03bf5f81724->enter($__internal_40ad3982cc1cb31274fff005b90480829d7420afc4ca3d968e79f03bf5f81724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b34f9514198b544b422de23a447925781b1d04d0da5380e39e5c1bbbb9233863 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b34f9514198b544b422de23a447925781b1d04d0da5380e39e5c1bbbb9233863->enter($__internal_b34f9514198b544b422de23a447925781b1d04d0da5380e39e5c1bbbb9233863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/address_book.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_b34f9514198b544b422de23a447925781b1d04d0da5380e39e5c1bbbb9233863->leave($__internal_b34f9514198b544b422de23a447925781b1d04d0da5380e39e5c1bbbb9233863_prof);

        
        $__internal_40ad3982cc1cb31274fff005b90480829d7420afc4ca3d968e79f03bf5f81724->leave($__internal_40ad3982cc1cb31274fff005b90480829d7420afc4ca3d968e79f03bf5f81724_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_c1f02f115c39e76030510af11645cb4b47fe27be7c0e9555f2735184f0db7a19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1f02f115c39e76030510af11645cb4b47fe27be7c0e9555f2735184f0db7a19->enter($__internal_c1f02f115c39e76030510af11645cb4b47fe27be7c0e9555f2735184f0db7a19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9fa3ec85c98410f1d6515f9b5a223b9a98e98826110e7af981b1140cd65f9584 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fa3ec85c98410f1d6515f9b5a223b9a98e98826110e7af981b1140cd65f9584->enter($__internal_9fa3ec85c98410f1d6515f9b5a223b9a98e98826110e7af981b1140cd65f9584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo " </h3>
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
        
        $__internal_9fa3ec85c98410f1d6515f9b5a223b9a98e98826110e7af981b1140cd65f9584->leave($__internal_9fa3ec85c98410f1d6515f9b5a223b9a98e98826110e7af981b1140cd65f9584_prof);

        
        $__internal_c1f02f115c39e76030510af11645cb4b47fe27be7c0e9555f2735184f0db7a19->leave($__internal_c1f02f115c39e76030510af11645cb4b47fe27be7c0e9555f2735184f0db7a19_prof);

    }

    // line 49
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9aef7d13951084a3ff9897a7bcdd0f196eb8e103226b145c88c3dbab231f8618 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9aef7d13951084a3ff9897a7bcdd0f196eb8e103226b145c88c3dbab231f8618->enter($__internal_9aef7d13951084a3ff9897a7bcdd0f196eb8e103226b145c88c3dbab231f8618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_60646ea5bdeeb0dacc72d760ce1e5cf199535591f110aa5460e791fa6e1afb6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60646ea5bdeeb0dacc72d760ce1e5cf199535591f110aa5460e791fa6e1afb6e->enter($__internal_60646ea5bdeeb0dacc72d760ce1e5cf199535591f110aa5460e791fa6e1afb6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_60646ea5bdeeb0dacc72d760ce1e5cf199535591f110aa5460e791fa6e1afb6e->leave($__internal_60646ea5bdeeb0dacc72d760ce1e5cf199535591f110aa5460e791fa6e1afb6e_prof);

        
        $__internal_9aef7d13951084a3ff9897a7bcdd0f196eb8e103226b145c88c3dbab231f8618->leave($__internal_9aef7d13951084a3ff9897a7bcdd0f196eb8e103226b145c88c3dbab231f8618_prof);

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
        return array (  201 => 55,  196 => 53,  192 => 52,  186 => 50,  177 => 49,  162 => 42,  149 => 35,  145 => 34,  141 => 33,  137 => 32,  133 => 31,  129 => 30,  124 => 28,  119 => 25,  115 => 24,  108 => 20,  96 => 10,  87 => 9,  75 => 7,  70 => 6,  61 => 5,  43 => 3,  11 => 1,);
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
\t            \t<h3>{{ user.getUsername() }} </h3>
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
