<?php

/* footer.html.twig */
class __TwigTemplate_074a6f1589b808dc8c309905a20b1f5783f7504add02311a5b445c5c0cd8abf0 extends Twig_Template
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
        $__internal_8436379a07224ce45fbcf0f78be9840d8a75be0feb7791cf359e9b9fe278c8ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8436379a07224ce45fbcf0f78be9840d8a75be0feb7791cf359e9b9fe278c8ef->enter($__internal_8436379a07224ce45fbcf0f78be9840d8a75be0feb7791cf359e9b9fe278c8ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "footer.html.twig"));

        $__internal_085406fe5ade782d5f0e332235224ea56f9c47dad9c557d62098238ed25a47fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_085406fe5ade782d5f0e332235224ea56f9c47dad9c557d62098238ed25a47fc->enter($__internal_085406fe5ade782d5f0e332235224ea56f9c47dad9c557d62098238ed25a47fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "footer.html.twig"));

        // line 1
        echo "
    <div class='clearfix'></div>
    <footer class='footer'>
        <nav>
            <div class=\"container-fluid\">
                <div class=\"navbar navbar-inverse\"> <!-- /* NUEVO (v3) (03-05-17)*/ -->
                    <ul id='quickLinks' class=\"nav navbar-nav\">
                        <li><a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_homepage", array("name" => "onDevelopment"));
        echo "\">About</a></li>
                        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_homepage", array("name" => "onDevelopment"));
        echo "\">Contact</a></li>
                        <li><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_homepage", array("name" => "onDevelopment"));
        echo "\">Terms of Use</a></li>
                        <li><a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_homepage", array("name" => "onDevelopment"));
        echo "\">Help</a></li>
                    </ul>
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li>
                            <a id='facebook' class='socialIcon' href=\"https://www.facebook.com/profile.php?id=100012619925730&fref=ts\"></a>
                        </li>
                        <li>
                            <a id='twitter' class='socialIcon' href=\"https://www.twitter.com\"></a>
                        </li> 
                    </ul>
                </div>
            </div>
        </nav>
        <div id='credits' class='container'>
            <center>Copyright &#169; Universidad Nacional de Costa Rica, 2017</center>
        </div>
    </footer>";
        
        $__internal_8436379a07224ce45fbcf0f78be9840d8a75be0feb7791cf359e9b9fe278c8ef->leave($__internal_8436379a07224ce45fbcf0f78be9840d8a75be0feb7791cf359e9b9fe278c8ef_prof);

        
        $__internal_085406fe5ade782d5f0e332235224ea56f9c47dad9c557d62098238ed25a47fc->leave($__internal_085406fe5ade782d5f0e332235224ea56f9c47dad9c557d62098238ed25a47fc_prof);

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
        return array (  46 => 11,  42 => 10,  38 => 9,  34 => 8,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
    <div class='clearfix'></div>
    <footer class='footer'>
        <nav>
            <div class=\"container-fluid\">
                <div class=\"navbar navbar-inverse\"> <!-- /* NUEVO (v3) (03-05-17)*/ -->
                    <ul id='quickLinks' class=\"nav navbar-nav\">
                        <li><a href=\"{{ path('page_homepage', {'name': 'onDevelopment'}) }}\">About</a></li>
                        <li><a href=\"{{ path('page_homepage', {'name': 'onDevelopment'}) }}\">Contact</a></li>
                        <li><a href=\"{{ path('page_homepage', {'name': 'onDevelopment'}) }}\">Terms of Use</a></li>
                        <li><a href=\"{{ path('page_homepage', {'name': 'onDevelopment'}) }}\">Help</a></li>
                    </ul>
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li>
                            <a id='facebook' class='socialIcon' href=\"https://www.facebook.com/profile.php?id=100012619925730&fref=ts\"></a>
                        </li>
                        <li>
                            <a id='twitter' class='socialIcon' href=\"https://www.twitter.com\"></a>
                        </li> 
                    </ul>
                </div>
            </div>
        </nav>
        <div id='credits' class='container'>
            <center>Copyright &#169; Universidad Nacional de Costa Rica, 2017</center>
        </div>
    </footer>", "footer.html.twig", "C:\\xampp\\htdocs\\app\\Resources\\views\\footer.html.twig");
    }
}
