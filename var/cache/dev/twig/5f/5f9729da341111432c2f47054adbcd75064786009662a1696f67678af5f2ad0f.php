<?php

/* PageBundle:Default:header.html.twig */
class __TwigTemplate_9bf3b1cedecd46b1435198001f3a60d57feeae91690d32ce8a566d0c7959376e extends Twig_Template
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
        $__internal_fba9f3ada27575afe2e3c96738d73ac821977318c58611d05f2890b701f83a52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fba9f3ada27575afe2e3c96738d73ac821977318c58611d05f2890b701f83a52->enter($__internal_fba9f3ada27575afe2e3c96738d73ac821977318c58611d05f2890b701f83a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:header.html.twig"));

        $__internal_66b1335f97c79a51786d3029a47bebb87adaf968bd5b1455efdab32dea31ca7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66b1335f97c79a51786d3029a47bebb87adaf968bd5b1455efdab32dea31ca7c->enter($__internal_66b1335f97c79a51786d3029a47bebb87adaf968bd5b1455efdab32dea31ca7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:header.html.twig"));

        // line 1
        echo "<header class='col-xs-12'>
   <nav id='navBar' class=\"navbar navbar-inverse navbar-fixed-top\">
      <div class=\"container-fluid\">
         <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>                        
            </button>
            <a class=\"navbar-brand\">cr<span>gourmet</span><span>coffee.com</span></a>
         </div>
         <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
            <ul id='mainMenu' class=\"nav navbar-nav\">
               <li><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_homepage", array("name" => "home"));
        echo "\">Home</a></li>
               <li class=\"dropdown\">
                  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"true\">Regions <span class=\"caret\"></span></a>
                  <ul class=\"dropdown-menu\">
                     ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["regions"] ?? $this->getContext($context, "regions")));
        foreach ($context['_seq'] as $context["_key"] => $context["region"]) {
            // line 19
            echo "                        <li>
                              <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("region_homepage", array("id" => $this->getAttribute($context["region"], "getId", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["region"], "getName", array(), "method"), "html", null, true);
            echo "</a>
                        </li>
                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['region'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "                  </ul>
               </li>
               <li class=\"dropdown\">
                  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"true\">Farms <span class=\"caret\"></span></a>
                  <ul class=\"dropdown-menu\">
                     ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["farms"] ?? $this->getContext($context, "farms")));
        foreach ($context['_seq'] as $context["_key"] => $context["farm"]) {
            // line 29
            echo "                     <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("farm_information", array("farm_id" => $this->getAttribute($context["farm"], "getId", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["farm"], "getName", array(), "method"), "html", null, true);
            echo "</a></li>
                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['farm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                  </ul>
               </li>
               <li><a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_homepage", array("name" => "onDevelopment"));
        echo "\">Search</a></li>
            </ul>
            </ul>
            <ul class=\"nav navbar-nav navbar-right\">
               <li>
                  ";
        // line 38
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 39
            echo "                  <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "lastname", array(), "method"), "html", null, true);
            echo " <span class=\"caret\"></span></a>
                  <ul class=\"dropdown-menu\">
                     <li><a href=\"";
            // line 41
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_signout");
            echo "\">Sign out</a></li>
                  </ul>
                  ";
        } else {
            // line 44
            echo "                  <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_signin");
            echo "\">Sign in <span class=\"glyphicon glyphicon-log-in\"></span> 
                  </a>
                  ";
        }
        // line 47
        echo "               </li>
               <li>
                  <a id='shopping-cup' href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_homepage", array("name" => "shoppingCart"));
        echo "\">
                  <span id='itemsCart'>";
        // line 50
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array(), "any", false, true), "get", array(0 => "itemsOnCart"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array(), "any", false, true), "get", array(0 => "itemsOnCart"), "method"), "0")) : ("0")), "html", null, true);
        echo "</span>
                  </a>
               </li>
            </ul>
         </div>
      </div>
   </nav>
</header>
<div class='clearfix'></div>";
        
        $__internal_fba9f3ada27575afe2e3c96738d73ac821977318c58611d05f2890b701f83a52->leave($__internal_fba9f3ada27575afe2e3c96738d73ac821977318c58611d05f2890b701f83a52_prof);

        
        $__internal_66b1335f97c79a51786d3029a47bebb87adaf968bd5b1455efdab32dea31ca7c->leave($__internal_66b1335f97c79a51786d3029a47bebb87adaf968bd5b1455efdab32dea31ca7c_prof);

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
        return array (  130 => 50,  126 => 49,  122 => 47,  115 => 44,  109 => 41,  101 => 39,  99 => 38,  91 => 33,  87 => 31,  76 => 29,  72 => 28,  65 => 23,  54 => 20,  51 => 19,  47 => 18,  40 => 14,  25 => 1,);
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
   <nav id='navBar' class=\"navbar navbar-inverse navbar-fixed-top\">
      <div class=\"container-fluid\">
         <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>                        
            </button>
            <a class=\"navbar-brand\">cr<span>gourmet</span><span>coffee.com</span></a>
         </div>
         <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
            <ul id='mainMenu' class=\"nav navbar-nav\">
               <li><a href=\"{{ path('page_homepage', {'name': 'home'}) }}\">Home</a></li>
               <li class=\"dropdown\">
                  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"true\">Regions <span class=\"caret\"></span></a>
                  <ul class=\"dropdown-menu\">
                     {% for region in regions %}
                        <li>
                              <a href=\"{{ path('region_homepage',{'id': region.getId() }) }}\">{{ region.getName() }}</a>
                        </li>
                     {% endfor %}
                  </ul>
               </li>
               <li class=\"dropdown\">
                  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"true\">Farms <span class=\"caret\"></span></a>
                  <ul class=\"dropdown-menu\">
                     {% for farm in farms %}
                     <li><a href=\"{{ path('farm_information',{'farm_id': farm.getId()} ) }}\">{{ farm.getName() }}</a></li>
                     {% endfor %}
                  </ul>
               </li>
               <li><a href=\"{{ path('page_homepage', {'name': 'onDevelopment'}) }}\">Search</a></li>
            </ul>
            </ul>
            <ul class=\"nav navbar-nav navbar-right\">
               <li>
                  {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                  <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">{{ app.user.username }} {{ app.user.lastname() }} <span class=\"caret\"></span></a>
                  <ul class=\"dropdown-menu\">
                     <li><a href=\"{{ path('user_signout') }}\">Sign out</a></li>
                  </ul>
                  {% else %}
                  <a href=\"{{ path('user_signin') }}\">Sign in <span class=\"glyphicon glyphicon-log-in\"></span> 
                  </a>
                  {% endif %}
               </li>
               <li>
                  <a id='shopping-cup' href=\"{{ path('page_homepage', {'name': 'shoppingCart'}) }}\">
                  <span id='itemsCart'>{{ app.session.get('itemsOnCart')|default('0') }}</span>
                  </a>
               </li>
            </ul>
         </div>
      </div>
   </nav>
</header>
<div class='clearfix'></div>", "PageBundle:Default:header.html.twig", "C:\\xampp\\htdocs\\src\\PageBundle/Resources/views/Default/header.html.twig");
    }
}
