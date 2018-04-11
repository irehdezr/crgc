<?php

/* UserBundle:Default:address_book.html.twig */
class __TwigTemplate_4b626f4e5b920bdb72f0364d95ea7a5f56b8121ebc8de040feec800d80567ca7 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " Address Book ";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/address_book.css"), "html", null, true);
        echo "\" />
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "getUsername", array(), "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "getLastname", array(), "method"), "html", null, true);
        echo "</h3>
          \t\t</center>
        \t</div>
\t        <div class=\"row\" >
\t        \t";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["addresses"] ?? null));
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
    }

    // line 49
    public function block_javascripts($context, array $blocks = array())
    {
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
        return array (  149 => 55,  144 => 53,  140 => 52,  134 => 50,  131 => 49,  122 => 42,  109 => 35,  105 => 34,  101 => 33,  97 => 32,  93 => 31,  89 => 30,  84 => 28,  79 => 25,  75 => 24,  66 => 20,  54 => 10,  51 => 9,  45 => 7,  40 => 6,  37 => 5,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "UserBundle:Default:address_book.html.twig", "C:\\xampp\\htdocs\\crgc\\src\\UserBundle/Resources/views/Default/address_book.html.twig");
    }
}
