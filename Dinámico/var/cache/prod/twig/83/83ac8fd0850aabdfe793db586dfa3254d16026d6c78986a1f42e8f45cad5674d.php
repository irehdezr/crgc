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
        $__internal_95d2402c5369f0ab748a6a4d6dd8dee5594a0d6b1ee7bb68a58814db900f619d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95d2402c5369f0ab748a6a4d6dd8dee5594a0d6b1ee7bb68a58814db900f619d->enter($__internal_95d2402c5369f0ab748a6a4d6dd8dee5594a0d6b1ee7bb68a58814db900f619d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "header.html.twig"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_homepage", array("name" => "onDevelopment"));
        echo "\">Regions</a></li>
           \t\t<li><a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_homepage", array("name" => "onDevelopment"));
        echo "\">Farms</a></li>
           \t\t<li><a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_homepage", array("name" => "onDevelopment"));
        echo "\">Awards</a></li>
           \t\t<li><a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_homepage", array("name" => "onDevelopment"));
        echo "\">Search</a></li>
            </ul></ul>
\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_homepage", array("name" => "onDevelopment"));
        echo "\"><span id='login'></span> Login</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a id='shopping-cup' href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_homepage", array("name" => "onDevelopment"));
        echo "\"><span>2</span></a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</nav>
</header>
<div class='clearfix'></div>";
        
        $__internal_95d2402c5369f0ab748a6a4d6dd8dee5594a0d6b1ee7bb68a58814db900f619d->leave($__internal_95d2402c5369f0ab748a6a4d6dd8dee5594a0d6b1ee7bb68a58814db900f619d_prof);

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
        return array (  66 => 25,  60 => 22,  53 => 18,  49 => 17,  45 => 16,  41 => 15,  37 => 14,  22 => 1,);
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
           \t\t<li><a href=\"{{ path('page_homepage', {'name': 'onDevelopment'}) }}\">Regions</a></li>
           \t\t<li><a href=\"{{ path('page_homepage', {'name': 'onDevelopment'}) }}\">Farms</a></li>
           \t\t<li><a href=\"{{ path('page_homepage', {'name': 'onDevelopment'}) }}\">Awards</a></li>
           \t\t<li><a href=\"{{ path('page_homepage', {'name': 'onDevelopment'}) }}\">Search</a></li>
            </ul></ul>
\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"{{ path('page_homepage', {'name': 'onDevelopment'}) }}\"><span id='login'></span> Login</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a id='shopping-cup' href=\"{{ path('page_homepage', {'name': 'onDevelopment'}) }}\"><span>2</span></a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</nav>
</header>
<div class='clearfix'></div>", "header.html.twig", "C:\\xampp\\htdocs\\app\\Resources\\views\\header.html.twig");
    }
}
