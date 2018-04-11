<?php

/* @User/Default/address_book.html.twig */
class __TwigTemplate_3276581ca6570119623bd22d282fffcec6e435ef4f4013db679b0618351065c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("security.html.twig", "@User/Default/address_book.html.twig", 1);
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
        $__internal_14977d879868de08ec22d99232e2a8b775d2ae1450e49728f25ee3762f28d5c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14977d879868de08ec22d99232e2a8b775d2ae1450e49728f25ee3762f28d5c5->enter($__internal_14977d879868de08ec22d99232e2a8b775d2ae1450e49728f25ee3762f28d5c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Default/address_book.html.twig"));

        $__internal_ca575bd157662a65fba0e413ae04e1e07c8bf1dcbacf5ebb4088568d635510d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca575bd157662a65fba0e413ae04e1e07c8bf1dcbacf5ebb4088568d635510d0->enter($__internal_ca575bd157662a65fba0e413ae04e1e07c8bf1dcbacf5ebb4088568d635510d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Default/address_book.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14977d879868de08ec22d99232e2a8b775d2ae1450e49728f25ee3762f28d5c5->leave($__internal_14977d879868de08ec22d99232e2a8b775d2ae1450e49728f25ee3762f28d5c5_prof);

        
        $__internal_ca575bd157662a65fba0e413ae04e1e07c8bf1dcbacf5ebb4088568d635510d0->leave($__internal_ca575bd157662a65fba0e413ae04e1e07c8bf1dcbacf5ebb4088568d635510d0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_95377deed77dd82c8e5f7b5df04fa094269bc69a58a28bd12aa5f82b236c7b80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95377deed77dd82c8e5f7b5df04fa094269bc69a58a28bd12aa5f82b236c7b80->enter($__internal_95377deed77dd82c8e5f7b5df04fa094269bc69a58a28bd12aa5f82b236c7b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1803df2af9f28e327f8786be1a02b255a696c12b57169fbfe73ba23b0d66a54d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1803df2af9f28e327f8786be1a02b255a696c12b57169fbfe73ba23b0d66a54d->enter($__internal_1803df2af9f28e327f8786be1a02b255a696c12b57169fbfe73ba23b0d66a54d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Address Book ";
        
        $__internal_1803df2af9f28e327f8786be1a02b255a696c12b57169fbfe73ba23b0d66a54d->leave($__internal_1803df2af9f28e327f8786be1a02b255a696c12b57169fbfe73ba23b0d66a54d_prof);

        
        $__internal_95377deed77dd82c8e5f7b5df04fa094269bc69a58a28bd12aa5f82b236c7b80->leave($__internal_95377deed77dd82c8e5f7b5df04fa094269bc69a58a28bd12aa5f82b236c7b80_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fc112ebe59f2aba00b80b1bbb64479520fd2985d581b6ebe615786534bb2d9c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc112ebe59f2aba00b80b1bbb64479520fd2985d581b6ebe615786534bb2d9c5->enter($__internal_fc112ebe59f2aba00b80b1bbb64479520fd2985d581b6ebe615786534bb2d9c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_297b61691481de368c0b010922d7bfa49cb5591f7844f93bcee2aa1da04e422b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_297b61691481de368c0b010922d7bfa49cb5591f7844f93bcee2aa1da04e422b->enter($__internal_297b61691481de368c0b010922d7bfa49cb5591f7844f93bcee2aa1da04e422b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/address_book.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_297b61691481de368c0b010922d7bfa49cb5591f7844f93bcee2aa1da04e422b->leave($__internal_297b61691481de368c0b010922d7bfa49cb5591f7844f93bcee2aa1da04e422b_prof);

        
        $__internal_fc112ebe59f2aba00b80b1bbb64479520fd2985d581b6ebe615786534bb2d9c5->leave($__internal_fc112ebe59f2aba00b80b1bbb64479520fd2985d581b6ebe615786534bb2d9c5_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_e1804d8deabcf2abd1f6b69f7e81a7475aa930c62d6e0e85672dfb198dd6fe7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1804d8deabcf2abd1f6b69f7e81a7475aa930c62d6e0e85672dfb198dd6fe7f->enter($__internal_e1804d8deabcf2abd1f6b69f7e81a7475aa930c62d6e0e85672dfb198dd6fe7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cc9b250579e3ebb1072b7f37e310a3a2a4bb6a9b0803164ee1f9520545c087ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc9b250579e3ebb1072b7f37e310a3a2a4bb6a9b0803164ee1f9520545c087ae->enter($__internal_cc9b250579e3ebb1072b7f37e310a3a2a4bb6a9b0803164ee1f9520545c087ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_cc9b250579e3ebb1072b7f37e310a3a2a4bb6a9b0803164ee1f9520545c087ae->leave($__internal_cc9b250579e3ebb1072b7f37e310a3a2a4bb6a9b0803164ee1f9520545c087ae_prof);

        
        $__internal_e1804d8deabcf2abd1f6b69f7e81a7475aa930c62d6e0e85672dfb198dd6fe7f->leave($__internal_e1804d8deabcf2abd1f6b69f7e81a7475aa930c62d6e0e85672dfb198dd6fe7f_prof);

    }

    // line 49
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_84c67a003a882c0f1e67078f43a61234141a5e6393fa71a010b093081b141809 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84c67a003a882c0f1e67078f43a61234141a5e6393fa71a010b093081b141809->enter($__internal_84c67a003a882c0f1e67078f43a61234141a5e6393fa71a010b093081b141809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4e026e295739cd0bb1f727f8f0697dd4cab92bec76426030b90286273c637c3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e026e295739cd0bb1f727f8f0697dd4cab92bec76426030b90286273c637c3d->enter($__internal_4e026e295739cd0bb1f727f8f0697dd4cab92bec76426030b90286273c637c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_4e026e295739cd0bb1f727f8f0697dd4cab92bec76426030b90286273c637c3d->leave($__internal_4e026e295739cd0bb1f727f8f0697dd4cab92bec76426030b90286273c637c3d_prof);

        
        $__internal_84c67a003a882c0f1e67078f43a61234141a5e6393fa71a010b093081b141809->leave($__internal_84c67a003a882c0f1e67078f43a61234141a5e6393fa71a010b093081b141809_prof);

    }

    public function getTemplateName()
    {
        return "@User/Default/address_book.html.twig";
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
{% endblock %}", "@User/Default/address_book.html.twig", "C:\\xampp\\htdocs\\crgc\\src\\UserBundle\\Resources\\views\\Default\\address_book.html.twig");
    }
}
