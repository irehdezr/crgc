<?php

/* footer.html.twig */
class __TwigTemplate_3c38f103f4e42e24e8986b5d13845ba57a81a78c6455183d3fd7621b4027619c extends Twig_Template
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
        $__internal_cefb4c4759917fe87c3e69c37de04f30c819c0805e0f1ad0e12ab98d07860972 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cefb4c4759917fe87c3e69c37de04f30c819c0805e0f1ad0e12ab98d07860972->enter($__internal_cefb4c4759917fe87c3e69c37de04f30c819c0805e0f1ad0e12ab98d07860972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "footer.html.twig"));

        $__internal_7d1458e4b903620349ff5393380aa509a60ad8ce84488147089220b37ca53a8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d1458e4b903620349ff5393380aa509a60ad8ce84488147089220b37ca53a8e->enter($__internal_7d1458e4b903620349ff5393380aa509a60ad8ce84488147089220b37ca53a8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "footer.html.twig"));

        // line 1
        echo "<nav id=\"footerOptions\"class=\"navbar navbar-inverse \">
        <ul id='quickLinks' class=\"nav navbar-nav\">
            <li><a href=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_homepage", array("name" => "onDevelopment"));
        echo "\">About</a></li>
            <li><a href=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_homepage", array("name" => "onDevelopment"));
        echo "\">Contact</a></li>
            <li><a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_homepage", array("name" => "onDevelopment"));
        echo "\">Terms of Use</a></li>
            <li><a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_homepage", array("name" => "onDevelopment"));
        echo "\">Privacy</a></li>
            <li><a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_homepage", array("name" => "onDevelopment"));
        echo "\">Help</a></li>
            <li><a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_homepage", array("name" => "onDevelopment"));
        echo "\">Credits</a></li>
        </ul>
</nav>
<div id='credits' >
    <center>Copyright &#169; Universidad Nacional de Costa Rica, 2017-2018</center>
</div>";
        
        $__internal_cefb4c4759917fe87c3e69c37de04f30c819c0805e0f1ad0e12ab98d07860972->leave($__internal_cefb4c4759917fe87c3e69c37de04f30c819c0805e0f1ad0e12ab98d07860972_prof);

        
        $__internal_7d1458e4b903620349ff5393380aa509a60ad8ce84488147089220b37ca53a8e->leave($__internal_7d1458e4b903620349ff5393380aa509a60ad8ce84488147089220b37ca53a8e_prof);

    }

    public function getTemplateName()
    {
        return "footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 8,  45 => 7,  41 => 6,  37 => 5,  33 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav id=\"footerOptions\"class=\"navbar navbar-inverse \">
        <ul id='quickLinks' class=\"nav navbar-nav\">
            <li><a href=\"{{ path('page_homepage', {'name': 'onDevelopment'}) }}\">About</a></li>
            <li><a href=\"{{ path('page_homepage', {'name': 'onDevelopment'}) }}\">Contact</a></li>
            <li><a href=\"{{ path('page_homepage', {'name': 'onDevelopment'}) }}\">Terms of Use</a></li>
            <li><a href=\"{{ path('page_homepage', {'name': 'onDevelopment'}) }}\">Privacy</a></li>
            <li><a href=\"{{ path('page_homepage', {'name': 'onDevelopment'}) }}\">Help</a></li>
            <li><a href=\"{{ path('page_homepage', {'name': 'onDevelopment'}) }}\">Credits</a></li>
        </ul>
</nav>
<div id='credits' >
    <center>Copyright &#169; Universidad Nacional de Costa Rica, 2017-2018</center>
</div>", "footer.html.twig", "C:\\xampp\\htdocs\\crgc\\app\\Resources\\views\\footer.html.twig");
    }
}
