<?php

/* PageBundle:Default:header.html.twig */
class __TwigTemplate_500dc308eb049672fb155f35a62f411fb29a9fdbb43e32b6cffefa7cabbec216 extends Twig_Template
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
        $__internal_d127aadc26d9232ff27674c3f554b35aef2786e39dac9fc4dbafe2c93f85b68c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d127aadc26d9232ff27674c3f554b35aef2786e39dac9fc4dbafe2c93f85b68c->enter($__internal_d127aadc26d9232ff27674c3f554b35aef2786e39dac9fc4dbafe2c93f85b68c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:header.html.twig"));

        $__internal_61e4e2de5ea82286bd68d3baeca92f25eec2487b70071930924383b1d2fa781c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61e4e2de5ea82286bd68d3baeca92f25eec2487b70071930924383b1d2fa781c->enter($__internal_61e4e2de5ea82286bd68d3baeca92f25eec2487b70071930924383b1d2fa781c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:header.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-inverse navbar-fixed-top\">
\t<div class=\"container-fluid\">
\t\t<div class=\"navbar-header\">
\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navBarMenu\">
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t<span class=\"icon-bar\"></span>                        
\t\t\t</button>
\t\t\t<text class=\"navbar-brand\">cr<span>gourmet</span><span>coffee.com</text>
   \t\t</div>
   \t\t<div class=\"collapse navbar-collapse\" >
   \t\t    <ul class=\"nav navbar-nav\">
   \t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_homepage", array("name" => "home"));
        echo "\">Home</a>
\t\t\t\t</li>
   \t\t\t\t<li class=\"dropdown\">
   \t\t\t\t\t<a class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"true\">Regions <span class=\"caret\"></span></a>
   \t\t\t\t    <ul class=\"dropdown-menu\">
   \t\t\t\t\t\t";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["regions"] ?? $this->getContext($context, "regions")));
        foreach ($context['_seq'] as $context["_key"] => $context["region"]) {
            // line 20
            echo "   \t\t\t\t\t\t\t<li>
   \t\t\t\t\t\t\t\t<a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("region_homepage", array("id" => $this->getAttribute($context["region"], "getId", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["region"], "getName", array(), "method"), "html", null, true);
            echo "</a>
   \t\t\t\t\t\t\t</li>
   \t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['region'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "   \t\t\t\t\t</ul>
   \t\t\t\t</li>
   \t\t\t\t<li class=\"dropdown\">
   \t\t\t\t\t<a class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"true\">Farms <span class=\"caret\"></span></a>
   \t\t\t\t\t<ul class=\"dropdown-menu\">
   \t\t\t\t\t\t";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["farms"] ?? $this->getContext($context, "farms")));
        foreach ($context['_seq'] as $context["_key"] => $context["farm"]) {
            // line 30
            echo "   \t\t\t\t\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("farm_information", array("farm_id" => $this->getAttribute($context["farm"], "getId", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["farm"], "getName", array(), "method"), "html", null, true);
            echo "</a></li>
   \t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['farm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "   \t\t\t\t\t</ul>
   \t\t\t\t</li>
          \t\t<li>
\t\t\t\t\t<a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_homepage", array("name" => "onDevelopment"));
        echo "\">Search</a>
\t\t\t\t</li>
            </ul>
            <ul class=\"nav navbar-nav navbar-right\">
   \t\t\t\t<li>
\t\t\t\t\t";
        // line 40
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 41
            echo "\t\t\t\t\t\t<a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " <span class=\"caret\"></span></a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 44
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_signout");
            echo "\">Sign out</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t";
        } else {
            // line 48
            echo "\t\t\t\t\t\t<a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_signin");
            echo "\">Sign in <span class=\"glyphicon glyphicon-log-in\"></span> </a>
\t\t\t\t\t";
        }
        // line 50
        echo "   \t\t\t\t</li>
   \t\t\t\t<li>
   \t\t\t\t\t<a id='shopping-cup' href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_homepage", array("name" => "shoppingCart"));
        echo "\">
   \t\t\t\t\t\t<span id='itemsCart'>";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "itemsOnCart"), "method"), "html", null, true);
        echo "</span>
   \t\t\t\t\t</a>
   \t\t\t\t</li>
   \t\t\t</ul>
   \t\t</div>
    </div>
</nav>";
        
        $__internal_d127aadc26d9232ff27674c3f554b35aef2786e39dac9fc4dbafe2c93f85b68c->leave($__internal_d127aadc26d9232ff27674c3f554b35aef2786e39dac9fc4dbafe2c93f85b68c_prof);

        
        $__internal_61e4e2de5ea82286bd68d3baeca92f25eec2487b70071930924383b1d2fa781c->leave($__internal_61e4e2de5ea82286bd68d3baeca92f25eec2487b70071930924383b1d2fa781c_prof);

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
        return array (  131 => 53,  127 => 52,  123 => 50,  117 => 48,  110 => 44,  103 => 41,  101 => 40,  93 => 35,  88 => 32,  77 => 30,  73 => 29,  66 => 24,  55 => 21,  52 => 20,  48 => 19,  40 => 14,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-inverse navbar-fixed-top\">
\t<div class=\"container-fluid\">
\t\t<div class=\"navbar-header\">
\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navBarMenu\">
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t<span class=\"icon-bar\"></span>                        
\t\t\t</button>
\t\t\t<text class=\"navbar-brand\">cr<span>gourmet</span><span>coffee.com</text>
   \t\t</div>
   \t\t<div class=\"collapse navbar-collapse\" >
   \t\t    <ul class=\"nav navbar-nav\">
   \t\t\t\t<li>
\t\t\t\t\t<a href=\"{{ path('page_homepage', {'name': 'home'}) }}\">Home</a>
\t\t\t\t</li>
   \t\t\t\t<li class=\"dropdown\">
   \t\t\t\t\t<a class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"true\">Regions <span class=\"caret\"></span></a>
   \t\t\t\t    <ul class=\"dropdown-menu\">
   \t\t\t\t\t\t{% for region in regions %}
   \t\t\t\t\t\t\t<li>
   \t\t\t\t\t\t\t\t<a href=\"{{ path('region_homepage',{'id': region.getId() }) }}\">{{ region.getName() }}</a>
   \t\t\t\t\t\t\t</li>
   \t\t\t\t\t\t{% endfor %}
   \t\t\t\t\t</ul>
   \t\t\t\t</li>
   \t\t\t\t<li class=\"dropdown\">
   \t\t\t\t\t<a class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"true\">Farms <span class=\"caret\"></span></a>
   \t\t\t\t\t<ul class=\"dropdown-menu\">
   \t\t\t\t\t\t{% for farm in farms %}
   \t\t\t\t\t\t\t<li><a href=\"{{ path('farm_information',{'farm_id': farm.getId()} ) }}\">{{ farm.getName() }}</a></li>
   \t\t\t\t\t\t{% endfor %}
   \t\t\t\t\t</ul>
   \t\t\t\t</li>
          \t\t<li>
\t\t\t\t\t<a href=\"{{ path('page_homepage', {'name': 'onDevelopment'}) }}\">Search</a>
\t\t\t\t</li>
            </ul>
            <ul class=\"nav navbar-nav navbar-right\">
   \t\t\t\t<li>
\t\t\t\t\t{% if is_granted('IS_AUTHENTICATED_FULLY') %}
\t\t\t\t\t\t<a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">{{ app.user.username  }} <span class=\"caret\"></span></a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{ path('user_signout') }}\">Sign out</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<a href=\"{{ path('user_signin') }}\">Sign in <span class=\"glyphicon glyphicon-log-in\"></span> </a>
\t\t\t\t\t{% endif %}
   \t\t\t\t</li>
   \t\t\t\t<li>
   \t\t\t\t\t<a id='shopping-cup' href=\"{{ path('page_homepage', {'name': 'shoppingCart'}) }}\">
   \t\t\t\t\t\t<span id='itemsCart'>{{ app.session.get('itemsOnCart') }}</span>
   \t\t\t\t\t</a>
   \t\t\t\t</li>
   \t\t\t</ul>
   \t\t</div>
    </div>
</nav>", "PageBundle:Default:header.html.twig", "C:\\xampp\\htdocs\\crgc\\src\\PageBundle/Resources/views/Default/header.html.twig");
    }
}
