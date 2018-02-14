<?php

/* PageBundle:Default:header.html.twig */
class __TwigTemplate_ba75cc9de41ba266900a8fefe2cbef554237f1169e3d1d184054c95f3ed429e5 extends Twig_Template
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
        $__internal_a88e3f343a305a24dd824f52402f7186b2580ae46d16f69f6e5e5d01fc47f127 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a88e3f343a305a24dd824f52402f7186b2580ae46d16f69f6e5e5d01fc47f127->enter($__internal_a88e3f343a305a24dd824f52402f7186b2580ae46d16f69f6e5e5d01fc47f127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:header.html.twig"));

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
\t\t\t\t\t\t\t";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["farms"] ?? $this->getContext($context, "farms")));
        foreach ($context['_seq'] as $context["_key"] => $context["farm"]) {
            // line 18
            echo "\t\t\t\t\t\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("farm_information", array("farm_id" => $this->getAttribute($context["farm"], "getId", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["farm"], "getName", array(), "method"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['farm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"true\">Regions <span class=\"caret\"></span></a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["regions"] ?? $this->getContext($context, "regions")));
        foreach ($context['_seq'] as $context["_key"] => $context["region"]) {
            // line 26
            echo "\t\t\t\t\t\t\t\t<li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_homepage", array("name" => "onDevelopment"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["region"], "getName", array(), "method"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['region'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
           \t\t<li><a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_homepage", array("name" => "onDevelopment"));
        echo "\">Search</a></li>
            </ul></ul>
\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t\t<li>
\t\t\t\t\t\t";
        // line 34
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "user"), "method")) {
            // line 35
            echo "\t\t\t\t\t\t\t<a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "user"), "method"), "html", null, true);
            echo "<span class=\"caret\"></span></a>
\t\t\t\t\t\t\t    <ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t      <li><a id=\"signout\">Sign out</a></li>
\t\t\t\t\t\t\t    </ul>
\t\t\t\t\t\t";
        } else {
            // line 40
            echo "\t\t\t\t\t\t\t<a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_homepage", array("name" => "login"));
            echo "\">Sign in <span class=\"glyphicon glyphicon-log-in\"></span> 
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
        }
        // line 43
        echo "\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a id='shopping-cup' href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_homepage", array("name" => "shoppingCart"));
        echo "\">
\t\t\t\t\t\t\t<span id='itemsCart'>";
        // line 46
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
        
        $__internal_a88e3f343a305a24dd824f52402f7186b2580ae46d16f69f6e5e5d01fc47f127->leave($__internal_a88e3f343a305a24dd824f52402f7186b2580ae46d16f69f6e5e5d01fc47f127_prof);

    }

    public function getTemplateName()
    {
        return "PageBundle:Default:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 46,  113 => 45,  109 => 43,  102 => 40,  93 => 35,  91 => 34,  84 => 30,  80 => 28,  69 => 26,  65 => 25,  58 => 20,  47 => 18,  43 => 17,  37 => 14,  22 => 1,);
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
\t\t\t\t\t\t\t{% for farm in farms %}
\t\t\t\t\t\t\t\t<li><a href=\"{{ path('farm_information',{'farm_id': farm.getId()} ) }}\">{{ farm.getName() }}</a></li>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"true\">Regions <span class=\"caret\"></span></a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t{% for region in regions %}
\t\t\t\t\t\t\t\t<li><a href=\"{{ path('page_homepage', {'name': 'onDevelopment'}) }}\">{{ region.getName() }}</a></li>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
           \t\t<li><a href=\"{{ path('page_homepage', {'name': 'onDevelopment'}) }}\">Search</a></li>
            </ul></ul>
\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t\t<li>
\t\t\t\t\t\t{% if app.session.get('user') %}
\t\t\t\t\t\t\t<a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">{{ app.session.get('user') }}<span class=\"caret\"></span></a>
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
<div class='clearfix'></div>", "PageBundle:Default:header.html.twig", "C:\\xampp\\htdocs\\src\\PageBundle/Resources/views/Default/header.html.twig");
    }
}
