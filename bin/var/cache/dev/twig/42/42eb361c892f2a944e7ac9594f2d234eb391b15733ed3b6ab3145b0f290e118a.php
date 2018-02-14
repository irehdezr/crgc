<?php

/* ::header.html.twig */
class __TwigTemplate_c9a6a02a207716a1abbc171e4f25a212b734d9e6476c2f3e694c4ae044763be7 extends Twig_Template
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
        $__internal_148a768ed8c22c4679f76cc4ffd3b66340a99433bb80bf59217b62848430898b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_148a768ed8c22c4679f76cc4ffd3b66340a99433bb80bf59217b62848430898b->enter($__internal_148a768ed8c22c4679f76cc4ffd3b66340a99433bb80bf59217b62848430898b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::header.html.twig"));

        $__internal_4ba3e7cb02af013a438b6d96d2fa4592d157c7278e7e1e4483afd19a8c0c188d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ba3e7cb02af013a438b6d96d2fa4592d157c7278e7e1e4483afd19a8c0c188d->enter($__internal_4ba3e7cb02af013a438b6d96d2fa4592d157c7278e7e1e4483afd19a8c0c188d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::header.html.twig"));

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
        echo "\">Home</a></li>
           \t\t<li><a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("farm_information", array("farm_id" => "1"));
        echo "\">Farms</a></li>
           \t\t<li><a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_homepage", array("name" => "onDevelopment"));
        echo "\">Regions</a></li>
           \t\t<li><a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_homepage", array("name" => "onDevelopment"));
        echo "\">Search</a></li>
            </ul></ul>
\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_homepage", array("name" => "login"));
        echo "\">
\t\t\t\t\t\t\t<span id='login'> Login</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a id='shopping-cup' href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_homepage", array("name" => "shoppingCart"));
        echo "\">
\t\t\t\t\t\t\t<span id='itemsCart'>";
        // line 27
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
        
        $__internal_148a768ed8c22c4679f76cc4ffd3b66340a99433bb80bf59217b62848430898b->leave($__internal_148a768ed8c22c4679f76cc4ffd3b66340a99433bb80bf59217b62848430898b_prof);

        
        $__internal_4ba3e7cb02af013a438b6d96d2fa4592d157c7278e7e1e4483afd19a8c0c188d->leave($__internal_4ba3e7cb02af013a438b6d96d2fa4592d157c7278e7e1e4483afd19a8c0c188d_prof);

    }

    public function getTemplateName()
    {
        return "::header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 27,  67 => 26,  59 => 21,  52 => 17,  48 => 16,  44 => 15,  40 => 14,  25 => 1,);
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
\t\t\t\t<li><a href=\"{{ path('page_homepage', {'name': 'home'}) }}\">Home</a></li>
           \t\t<li><a href=\"{{ path('farm_information',{'farm_id': '1' })}}\">Farms</a></li>
           \t\t<li><a href=\"{{ path('page_homepage', {'name': 'onDevelopment'}) }}\">Regions</a></li>
           \t\t<li><a href=\"{{ path('page_homepage', {'name': 'onDevelopment'}) }}\">Search</a></li>
            </ul></ul>
\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"{{ path('page_homepage', {'name': 'login'}) }}\">
\t\t\t\t\t\t\t<span id='login'> Login</span>
\t\t\t\t\t\t</a>
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
<div class='clearfix'></div>", "::header.html.twig", "C:\\xampp\\htdocs\\app/Resources\\views/header.html.twig");
    }
}
