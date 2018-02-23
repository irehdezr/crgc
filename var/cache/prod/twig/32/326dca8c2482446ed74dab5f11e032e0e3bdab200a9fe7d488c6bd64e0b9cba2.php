<?php

/* footer.html.twig */
class __TwigTemplate_974050f766e24dc0c10bef33eb0083119ce18e6f6821902f0d2eea6a68dd61c2 extends Twig_Template
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
        $__internal_d3a6ea301bf16f0f782bf93e7cd0161069b65ac64e1cd19b2c8aac086d05e519 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3a6ea301bf16f0f782bf93e7cd0161069b65ac64e1cd19b2c8aac086d05e519->enter($__internal_d3a6ea301bf16f0f782bf93e7cd0161069b65ac64e1cd19b2c8aac086d05e519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "footer.html.twig"));

        // line 1
        echo "<div class='clearfix'></div>
<footer class='footer'>
    <nav>
        <div class=\"container-fluid\">
            <div class=\"navbar navbar-inverse\"> <!-- /* NUEVO (v3) (03-05-17)*/ -->
                <ul id='quickLinks' class=\"nav navbar-nav\">
                    <li><a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_homepage", array("name" => "onDevelopment"));
        echo "\">About</a></li>
                    <li><a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_homepage", array("name" => "onDevelopment"));
        echo "\">Contact</a></li>
                    <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_homepage", array("name" => "onDevelopment"));
        echo "\">Terms of Use</a></li>
                    <li><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_homepage", array("name" => "onDevelopment"));
        echo "\">Privacy</a></li>
                    <li><a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_homepage", array("name" => "onDevelopment"));
        echo "\">Help</a></li>
                    <li><a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_homepage", array("name" => "onDevelopment"));
        echo "\">Credits</a></li>
                </ul>
                ";
        // line 22
        echo "            </div>
        </div>
    </nav>
    <div id='credits' class='container'>
        <center>Copyright &#169; Universidad Nacional de Costa Rica, 2017-2018</center>
    </div>
</footer>";
        
        $__internal_d3a6ea301bf16f0f782bf93e7cd0161069b65ac64e1cd19b2c8aac086d05e519->leave($__internal_d3a6ea301bf16f0f782bf93e7cd0161069b65ac64e1cd19b2c8aac086d05e519_prof);

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
        return array (  55 => 22,  50 => 12,  46 => 11,  42 => 10,  38 => 9,  34 => 8,  30 => 7,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class='clearfix'></div>
<footer class='footer'>
    <nav>
        <div class=\"container-fluid\">
            <div class=\"navbar navbar-inverse\"> <!-- /* NUEVO (v3) (03-05-17)*/ -->
                <ul id='quickLinks' class=\"nav navbar-nav\">
                    <li><a href=\"{{ path('page_homepage', {'name': 'onDevelopment'}) }}\">About</a></li>
                    <li><a href=\"{{ path('page_homepage', {'name': 'onDevelopment'}) }}\">Contact</a></li>
                    <li><a href=\"{{ path('page_homepage', {'name': 'onDevelopment'}) }}\">Terms of Use</a></li>
                    <li><a href=\"{{ path('page_homepage', {'name': 'onDevelopment'}) }}\">Privacy</a></li>
                    <li><a href=\"{{ path('page_homepage', {'name': 'onDevelopment'}) }}\">Help</a></li>
                    <li><a href=\"{{ path('page_homepage', {'name': 'onDevelopment'}) }}\">Credits</a></li>
                </ul>
                {#<ul class=\"nav navbar-nav navbar-right\">
                    <li>
                        <a id='facebook' class='socialIcon' href=\"https://www.facebook.com/profile.php?id=100012619925730&fref=ts\"></a>
                    </li>
                    <li>
                        <a id='twitter' class='socialIcon' href=\"https://www.twitter.com\"></a>
                    </li> 
                </ul>#}
            </div>
        </div>
    </nav>
    <div id='credits' class='container'>
        <center>Copyright &#169; Universidad Nacional de Costa Rica, 2017-2018</center>
    </div>
</footer>", "footer.html.twig", "/home/crgourme/public_html/app/Resources/views/footer.html.twig");
    }
}
