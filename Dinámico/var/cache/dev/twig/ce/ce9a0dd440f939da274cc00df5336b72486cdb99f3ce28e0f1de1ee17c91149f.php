<?php

/* footer.html.twig */
class __TwigTemplate_7d76e32c2f1872e77e78d78853f5300716aab5fe060c92db1adb204fb76728ef extends Twig_Template
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
        $__internal_546a5f36398d46d7b6208fe7ea4a905bb34e66c8b112977aaf422fb4df013f85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_546a5f36398d46d7b6208fe7ea4a905bb34e66c8b112977aaf422fb4df013f85->enter($__internal_546a5f36398d46d7b6208fe7ea4a905bb34e66c8b112977aaf422fb4df013f85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "footer.html.twig"));

        $__internal_8a59fb01fffff5887840a5978613f3abf49675dc0af8a121040e29267d63b42d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a59fb01fffff5887840a5978613f3abf49675dc0af8a121040e29267d63b42d->enter($__internal_8a59fb01fffff5887840a5978613f3abf49675dc0af8a121040e29267d63b42d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "footer.html.twig"));

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
        
        $__internal_546a5f36398d46d7b6208fe7ea4a905bb34e66c8b112977aaf422fb4df013f85->leave($__internal_546a5f36398d46d7b6208fe7ea4a905bb34e66c8b112977aaf422fb4df013f85_prof);

        
        $__internal_8a59fb01fffff5887840a5978613f3abf49675dc0af8a121040e29267d63b42d->leave($__internal_8a59fb01fffff5887840a5978613f3abf49675dc0af8a121040e29267d63b42d_prof);

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
    </footer>", "footer.html.twig", "/home/ubuntu/workspace/app/Resources/views/footer.html.twig");
    }
}
