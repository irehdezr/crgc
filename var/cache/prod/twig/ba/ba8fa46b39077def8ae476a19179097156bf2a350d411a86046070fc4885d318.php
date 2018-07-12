<?php

/* PageBundle:Default:header.html.twig */
class __TwigTemplate_64ccf0116f566a492e796873d4353a2936cdf05cd6f03c24686a43c93c1c07cd extends Twig_Template
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
        $__internal_e251a38db0be99a343636589a87568f13b6301694565c12ce62d1d8136e477e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e251a38db0be99a343636589a87568f13b6301694565c12ce62d1d8136e477e1->enter($__internal_e251a38db0be99a343636589a87568f13b6301694565c12ce62d1d8136e477e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:header.html.twig"));

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
        
        $__internal_e251a38db0be99a343636589a87568f13b6301694565c12ce62d1d8136e477e1->leave($__internal_e251a38db0be99a343636589a87568f13b6301694565c12ce62d1d8136e477e1_prof);

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
        return array (  128 => 53,  124 => 52,  120 => 50,  114 => 48,  107 => 44,  100 => 41,  98 => 40,  90 => 35,  85 => 32,  74 => 30,  70 => 29,  63 => 24,  52 => 21,  49 => 20,  45 => 19,  37 => 14,  22 => 1,);
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
</nav>", "PageBundle:Default:header.html.twig", "C:\\xampp\\htdocs\\crgc\\var\\cache\\prod/../../../src/PageBundle/Resources/views/Default/header.html.twig");
    }
}
