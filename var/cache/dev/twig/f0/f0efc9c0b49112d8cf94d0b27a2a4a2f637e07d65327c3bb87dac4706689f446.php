<?php

/* ::footer.html.twig */
class __TwigTemplate_40e42da524115eed14e5debf7535537c1dfd42e054f581c05c4f218ab26586a5 extends Twig_Template
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
        $__internal_45c4e06200a6a643e89f42e2f32953eb4f400d32ee95cff76b5cee99a098f458 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45c4e06200a6a643e89f42e2f32953eb4f400d32ee95cff76b5cee99a098f458->enter($__internal_45c4e06200a6a643e89f42e2f32953eb4f400d32ee95cff76b5cee99a098f458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::footer.html.twig"));

        $__internal_d2a166486c1546772e656373f0c39fc047297fbf3994c1b30edd2a11ac4abb09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2a166486c1546772e656373f0c39fc047297fbf3994c1b30edd2a11ac4abb09->enter($__internal_d2a166486c1546772e656373f0c39fc047297fbf3994c1b30edd2a11ac4abb09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::footer.html.twig"));

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
        
        $__internal_45c4e06200a6a643e89f42e2f32953eb4f400d32ee95cff76b5cee99a098f458->leave($__internal_45c4e06200a6a643e89f42e2f32953eb4f400d32ee95cff76b5cee99a098f458_prof);

        
        $__internal_d2a166486c1546772e656373f0c39fc047297fbf3994c1b30edd2a11ac4abb09->leave($__internal_d2a166486c1546772e656373f0c39fc047297fbf3994c1b30edd2a11ac4abb09_prof);

    }

    public function getTemplateName()
    {
        return "::footer.html.twig";
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
</div>", "::footer.html.twig", "C:\\xampp\\htdocs\\crgc\\app/Resources\\views/footer.html.twig");
    }
}
