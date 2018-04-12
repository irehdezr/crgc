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
        $__internal_567b533af10f7633f868424d618783e7d1f76451aa0f9d9143356f53235ae0e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_567b533af10f7633f868424d618783e7d1f76451aa0f9d9143356f53235ae0e0->enter($__internal_567b533af10f7633f868424d618783e7d1f76451aa0f9d9143356f53235ae0e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Default/address_book.html.twig"));

        $__internal_9e621614cf9d407ea2dac1d57844b40d3f793b047ec8e63869dd488ec461482f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e621614cf9d407ea2dac1d57844b40d3f793b047ec8e63869dd488ec461482f->enter($__internal_9e621614cf9d407ea2dac1d57844b40d3f793b047ec8e63869dd488ec461482f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Default/address_book.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_567b533af10f7633f868424d618783e7d1f76451aa0f9d9143356f53235ae0e0->leave($__internal_567b533af10f7633f868424d618783e7d1f76451aa0f9d9143356f53235ae0e0_prof);

        
        $__internal_9e621614cf9d407ea2dac1d57844b40d3f793b047ec8e63869dd488ec461482f->leave($__internal_9e621614cf9d407ea2dac1d57844b40d3f793b047ec8e63869dd488ec461482f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7a97672a77762aafe3f71f9f7a3eccf7acdb0b5a15bf01363a4124586c6e8366 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a97672a77762aafe3f71f9f7a3eccf7acdb0b5a15bf01363a4124586c6e8366->enter($__internal_7a97672a77762aafe3f71f9f7a3eccf7acdb0b5a15bf01363a4124586c6e8366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_47cbd5a01b3b2e66ee47bd40791c0337860e77533cba2d479e913a2ea767c3f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47cbd5a01b3b2e66ee47bd40791c0337860e77533cba2d479e913a2ea767c3f5->enter($__internal_47cbd5a01b3b2e66ee47bd40791c0337860e77533cba2d479e913a2ea767c3f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Address Book ";
        
        $__internal_47cbd5a01b3b2e66ee47bd40791c0337860e77533cba2d479e913a2ea767c3f5->leave($__internal_47cbd5a01b3b2e66ee47bd40791c0337860e77533cba2d479e913a2ea767c3f5_prof);

        
        $__internal_7a97672a77762aafe3f71f9f7a3eccf7acdb0b5a15bf01363a4124586c6e8366->leave($__internal_7a97672a77762aafe3f71f9f7a3eccf7acdb0b5a15bf01363a4124586c6e8366_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_75489c3a27b00568d7c2729da84228558796a350533991546244d8015b1ab0bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75489c3a27b00568d7c2729da84228558796a350533991546244d8015b1ab0bb->enter($__internal_75489c3a27b00568d7c2729da84228558796a350533991546244d8015b1ab0bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d83f1f097fc928a16ad5e22aa58f13c2193e287bf1aa6b3d929e5c0d24830211 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d83f1f097fc928a16ad5e22aa58f13c2193e287bf1aa6b3d929e5c0d24830211->enter($__internal_d83f1f097fc928a16ad5e22aa58f13c2193e287bf1aa6b3d929e5c0d24830211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/address_book.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_d83f1f097fc928a16ad5e22aa58f13c2193e287bf1aa6b3d929e5c0d24830211->leave($__internal_d83f1f097fc928a16ad5e22aa58f13c2193e287bf1aa6b3d929e5c0d24830211_prof);

        
        $__internal_75489c3a27b00568d7c2729da84228558796a350533991546244d8015b1ab0bb->leave($__internal_75489c3a27b00568d7c2729da84228558796a350533991546244d8015b1ab0bb_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_a0b2cbbc3b22cb603deefbcb0c57a450a9dca2226dd0f6865d2b3c0f0e92ea84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0b2cbbc3b22cb603deefbcb0c57a450a9dca2226dd0f6865d2b3c0f0e92ea84->enter($__internal_a0b2cbbc3b22cb603deefbcb0c57a450a9dca2226dd0f6865d2b3c0f0e92ea84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3d04c966db2dca336180863e9fa2dd7ebb9f601ede0e09d929ffe9cc5aa96506 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d04c966db2dca336180863e9fa2dd7ebb9f601ede0e09d929ffe9cc5aa96506->enter($__internal_3d04c966db2dca336180863e9fa2dd7ebb9f601ede0e09d929ffe9cc5aa96506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3d04c966db2dca336180863e9fa2dd7ebb9f601ede0e09d929ffe9cc5aa96506->leave($__internal_3d04c966db2dca336180863e9fa2dd7ebb9f601ede0e09d929ffe9cc5aa96506_prof);

        
        $__internal_a0b2cbbc3b22cb603deefbcb0c57a450a9dca2226dd0f6865d2b3c0f0e92ea84->leave($__internal_a0b2cbbc3b22cb603deefbcb0c57a450a9dca2226dd0f6865d2b3c0f0e92ea84_prof);

    }

    // line 49
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3d7cf329c27eb2960dbf8512f9ca970e1fdb0167cde214f235e0778cb8254a64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d7cf329c27eb2960dbf8512f9ca970e1fdb0167cde214f235e0778cb8254a64->enter($__internal_3d7cf329c27eb2960dbf8512f9ca970e1fdb0167cde214f235e0778cb8254a64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_32c26c31c9fb7a1e1136e5815418470e250cd5c6499fc009608497fc649938be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32c26c31c9fb7a1e1136e5815418470e250cd5c6499fc009608497fc649938be->enter($__internal_32c26c31c9fb7a1e1136e5815418470e250cd5c6499fc009608497fc649938be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_32c26c31c9fb7a1e1136e5815418470e250cd5c6499fc009608497fc649938be->leave($__internal_32c26c31c9fb7a1e1136e5815418470e250cd5c6499fc009608497fc649938be_prof);

        
        $__internal_3d7cf329c27eb2960dbf8512f9ca970e1fdb0167cde214f235e0778cb8254a64->leave($__internal_3d7cf329c27eb2960dbf8512f9ca970e1fdb0167cde214f235e0778cb8254a64_prof);

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
{% endblock %}", "@User/Default/address_book.html.twig", "C:\\xampp\\htdocs\\crgc\\src\\UserBundle\\Resources\\views\\Default\\address_book.html.twig");
    }
}
