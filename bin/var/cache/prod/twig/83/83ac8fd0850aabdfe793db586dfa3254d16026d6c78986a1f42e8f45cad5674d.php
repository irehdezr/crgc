<?php

/* header.html.twig */
class __TwigTemplate_2e30487d76dd8aaa2865bdd9d6d930272a7d37ccee63081e1707ab477f5ce551 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4ab53744b7320c580ef9e2c681c0438fb2a54ac0cb49252495596e19b2843def = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ab53744b7320c580ef9e2c681c0438fb2a54ac0cb49252495596e19b2843def->enter($__internal_4ab53744b7320c580ef9e2c681c0438fb2a54ac0cb49252495596e19b2843def_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "header.html.twig"));

        // line 1
        echo "<header class='col-xs-12'>
\t<nav id='navBar' class=\"navbar navbar-inverse navbar-fixed-top\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"navbar-header\">
\t\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>                        
\t\t\t\t</button>
\t\t\t<a class=\"navbar-brand\">cr<span>gourmet</span><span>coffee.com</span></a>
\t\t</div>
\t\t<div class=\"collapse navbar-collapse\" id=\"myNavbar\">
\t\t    <ul id='mainMenu' class=\"nav navbar-nav\">
\t\t\t\t<li><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_homepage", array("name" => "home"));
        echo "\">Home</a></li><li class=\"dropdown\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"true\">Farms <span class=\"caret\"></span></a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t<li><a href=\"#\">Farm 1</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Farm 2</a></li>
\t\t\t\t\t\t\t\t<li role=\"separator\" class=\"divider\"></li>
\t\t\t\t\t\t\t\t<li class=\"dropdown-header\">Other Farms</li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Farm 3</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Farm 4</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("PageBundle:default:farmsMenu"));
        echo "
\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"true\">Regions <span class=\"caret\"></span></a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t<li><a href=\"#\">Region 1</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Region 2</a></li>
\t\t\t\t\t\t\t\t<li role=\"separator\" class=\"divider\"></li>
\t\t\t\t\t\t\t\t<li class=\"dropdown-header\">Other Regions</li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Region 3</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Region 4</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
           \t\t<li><a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_homepage", array("name" => "onDevelopment"));
        echo "\">Search</a></li>
            </ul></ul>
\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t\t<li>
\t\t\t\t\t\t";
        // line 41
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "user"), "method")) {
            // line 42
            echo "\t\t\t\t\t\t\t<a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "user"), "method"), "html", null, true);
            echo "</a>

\t\t\t\t\t\t\t    <ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t      <li><a id=\"signout\">Sign out</a></li>
\t\t\t\t\t\t\t    </ul>
\t\t\t\t\t\t";
        } else {
            // line 48
            echo "\t\t\t\t\t\t\t<a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_homepage", array("name" => "login"));
            echo "\">Sign in <span class=\"glyphicon glyphicon-log-in\"></span> 
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
        }
        // line 51
        echo "\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a id='shopping-cup' href=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_homepage", array("name" => "shoppingCart"));
        echo "\">
\t\t\t\t\t\t\t<span id='itemsCart'>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "itemsOnCart"), "method"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</nav>
</header>
<div class='clearfix'></div>";
        
        $__internal_4ab53744b7320c580ef9e2c681c0438fb2a54ac0cb49252495596e19b2843def->leave($__internal_4ab53744b7320c580ef9e2c681c0438fb2a54ac0cb49252495596e19b2843def_prof);

    }

    public function getTemplateName()
    {
        return "header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 54,  96 => 53,  92 => 51,  85 => 48,  75 => 42,  73 => 41,  66 => 37,  51 => 25,  37 => 14,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<header class='col-xs-12'>
\t<nav id='navBar' class=\"navbar navbar-inverse navbar-fixed-top\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"navbar-header\">
\t\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>                        
\t\t\t\t</button>
\t\t\t<a class=\"navbar-brand\">cr<span>gourmet</span><span>coffee.com</span></a>
\t\t</div>
\t\t<div class=\"collapse navbar-collapse\" id=\"myNavbar\">
\t\t    <ul id='mainMenu' class=\"nav navbar-nav\">
\t\t\t\t<li><a href=\"{{ path('page_homepage', {'name': 'home'}) }}\">Home</a></li><li class=\"dropdown\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"true\">Farms <span class=\"caret\"></span></a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t<li><a href=\"#\">Farm 1</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Farm 2</a></li>
\t\t\t\t\t\t\t\t<li role=\"separator\" class=\"divider\"></li>
\t\t\t\t\t\t\t\t<li class=\"dropdown-header\">Other Farms</li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Farm 3</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Farm 4</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t {{ render(controller('PageBundle:default:farmsMenu' )) }}
\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"true\">Regions <span class=\"caret\"></span></a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t<li><a href=\"#\">Region 1</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Region 2</a></li>
\t\t\t\t\t\t\t\t<li role=\"separator\" class=\"divider\"></li>
\t\t\t\t\t\t\t\t<li class=\"dropdown-header\">Other Regions</li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Region 3</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Region 4</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
           \t\t<li><a href=\"{{ path('page_homepage', {'name': 'onDevelopment'}) }}\">Search</a></li>
            </ul></ul>
\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t\t<li>
\t\t\t\t\t\t{% if app.session.get('user') %}
\t\t\t\t\t\t\t<a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">{{ app.session.get('user') }}</a>

\t\t\t\t\t\t\t    <ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t      <li><a id=\"signout\">Sign out</a></li>
\t\t\t\t\t\t\t    </ul>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<a href=\"{{ path('page_homepage', {'name': 'login'}) }}\">Sign in <span class=\"glyphicon glyphicon-log-in\"></span> 
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a id='shopping-cup' href=\"{{ path('page_homepage', {'name': 'shoppingCart'}) }}\">
\t\t\t\t\t\t\t<span id='itemsCart'>{{ app.session.get('itemsOnCart') }}</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</nav>
</header>
<div class='clearfix'></div>", "header.html.twig", "C:\\xampp\\htdocs\\app\\Resources\\views\\header.html.twig");
    }
}
