<?php

/* UserBundle:Default:address_book.html.twig */
class __TwigTemplate_006e43be3ecffca1415f8fe976079d730786074674b352087ee960e618abee44 extends Twig_Template
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
        $__internal_908c63ae5d6b191e93b902ffba39e2053e60c94ef8fd2e021872ef9e5a7859c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_908c63ae5d6b191e93b902ffba39e2053e60c94ef8fd2e021872ef9e5a7859c5->enter($__internal_908c63ae5d6b191e93b902ffba39e2053e60c94ef8fd2e021872ef9e5a7859c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:address_book.html.twig"));

        $__internal_3529a519d61dc6debb6c954386d6985ee61a2321439ce776b9d0308bf296d235 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3529a519d61dc6debb6c954386d6985ee61a2321439ce776b9d0308bf296d235->enter($__internal_3529a519d61dc6debb6c954386d6985ee61a2321439ce776b9d0308bf296d235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:address_book.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_908c63ae5d6b191e93b902ffba39e2053e60c94ef8fd2e021872ef9e5a7859c5->leave($__internal_908c63ae5d6b191e93b902ffba39e2053e60c94ef8fd2e021872ef9e5a7859c5_prof);

        
        $__internal_3529a519d61dc6debb6c954386d6985ee61a2321439ce776b9d0308bf296d235->leave($__internal_3529a519d61dc6debb6c954386d6985ee61a2321439ce776b9d0308bf296d235_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_47bf6bb348bb1898c87094e09ccdb2f42e2fe0662df23938dd933eaee2c0a098 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47bf6bb348bb1898c87094e09ccdb2f42e2fe0662df23938dd933eaee2c0a098->enter($__internal_47bf6bb348bb1898c87094e09ccdb2f42e2fe0662df23938dd933eaee2c0a098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a2ab204ca32cab6226688b94d2dd23b2316f2c5afc2446425c7ea2faca7b2d83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2ab204ca32cab6226688b94d2dd23b2316f2c5afc2446425c7ea2faca7b2d83->enter($__internal_a2ab204ca32cab6226688b94d2dd23b2316f2c5afc2446425c7ea2faca7b2d83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Address Book ";
        
        $__internal_a2ab204ca32cab6226688b94d2dd23b2316f2c5afc2446425c7ea2faca7b2d83->leave($__internal_a2ab204ca32cab6226688b94d2dd23b2316f2c5afc2446425c7ea2faca7b2d83_prof);

        
        $__internal_47bf6bb348bb1898c87094e09ccdb2f42e2fe0662df23938dd933eaee2c0a098->leave($__internal_47bf6bb348bb1898c87094e09ccdb2f42e2fe0662df23938dd933eaee2c0a098_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a8d9a90b6882dbf8b7cfb9170c022d8daa82feed261548aa4ec5e1c9074a183a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8d9a90b6882dbf8b7cfb9170c022d8daa82feed261548aa4ec5e1c9074a183a->enter($__internal_a8d9a90b6882dbf8b7cfb9170c022d8daa82feed261548aa4ec5e1c9074a183a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_fe1b65f4675d932112f9c6da28f70f810f3b8b6e420344608c22bf7bde1d6ad4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe1b65f4675d932112f9c6da28f70f810f3b8b6e420344608c22bf7bde1d6ad4->enter($__internal_fe1b65f4675d932112f9c6da28f70f810f3b8b6e420344608c22bf7bde1d6ad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/address_book.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_fe1b65f4675d932112f9c6da28f70f810f3b8b6e420344608c22bf7bde1d6ad4->leave($__internal_fe1b65f4675d932112f9c6da28f70f810f3b8b6e420344608c22bf7bde1d6ad4_prof);

        
        $__internal_a8d9a90b6882dbf8b7cfb9170c022d8daa82feed261548aa4ec5e1c9074a183a->leave($__internal_a8d9a90b6882dbf8b7cfb9170c022d8daa82feed261548aa4ec5e1c9074a183a_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_1bf42c639dda8a4353f646fd707d3cb123508ff5a848e16ca6c9f76ac8654f5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bf42c639dda8a4353f646fd707d3cb123508ff5a848e16ca6c9f76ac8654f5a->enter($__internal_1bf42c639dda8a4353f646fd707d3cb123508ff5a848e16ca6c9f76ac8654f5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a1989ddc2e1d4937ac255aa8e79b21210ea0e6c6075a5707e6db41cdf1ff5012 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1989ddc2e1d4937ac255aa8e79b21210ea0e6c6075a5707e6db41cdf1ff5012->enter($__internal_a1989ddc2e1d4937ac255aa8e79b21210ea0e6c6075a5707e6db41cdf1ff5012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a1989ddc2e1d4937ac255aa8e79b21210ea0e6c6075a5707e6db41cdf1ff5012->leave($__internal_a1989ddc2e1d4937ac255aa8e79b21210ea0e6c6075a5707e6db41cdf1ff5012_prof);

        
        $__internal_1bf42c639dda8a4353f646fd707d3cb123508ff5a848e16ca6c9f76ac8654f5a->leave($__internal_1bf42c639dda8a4353f646fd707d3cb123508ff5a848e16ca6c9f76ac8654f5a_prof);

    }

    // line 49
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f34be39e7480c7bca448568b21eb012d23d3fba01e9c9b6cdda38fc71c5a44c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f34be39e7480c7bca448568b21eb012d23d3fba01e9c9b6cdda38fc71c5a44c3->enter($__internal_f34be39e7480c7bca448568b21eb012d23d3fba01e9c9b6cdda38fc71c5a44c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d4629413489c42fd0b3ab429d91cfc5426150cdb3481917066bf1c88d2a80b89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4629413489c42fd0b3ab429d91cfc5426150cdb3481917066bf1c88d2a80b89->enter($__internal_d4629413489c42fd0b3ab429d91cfc5426150cdb3481917066bf1c88d2a80b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_d4629413489c42fd0b3ab429d91cfc5426150cdb3481917066bf1c88d2a80b89->leave($__internal_d4629413489c42fd0b3ab429d91cfc5426150cdb3481917066bf1c88d2a80b89_prof);

        
        $__internal_f34be39e7480c7bca448568b21eb012d23d3fba01e9c9b6cdda38fc71c5a44c3->leave($__internal_f34be39e7480c7bca448568b21eb012d23d3fba01e9c9b6cdda38fc71c5a44c3_prof);

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
{% endblock %}", "UserBundle:Default:address_book.html.twig", "C:\\xampp\\htdocs\\crgc\\var\\cache\\dev/../../../src/UserBundle/Resources/views/Default/address_book.html.twig");
    }
}
