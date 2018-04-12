<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_43a47f682bbdeb01945fb6a954e0f37b2c85c07bc019711c247b62fc23c6d3c4 extends Twig_Template
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
        $__internal_935bff24ab7a89661a69b38f92b8c00b9cf5e48ea45fbb4adfcff0c42bc46b19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_935bff24ab7a89661a69b38f92b8c00b9cf5e48ea45fbb4adfcff0c42bc46b19->enter($__internal_935bff24ab7a89661a69b38f92b8c00b9cf5e48ea45fbb4adfcff0c42bc46b19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_fa2acb0249f0fc4e462d0cf232b6218b840b8d1b73fb70c0f2a13663fd7eb94b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa2acb0249f0fc4e462d0cf232b6218b840b8d1b73fb70c0f2a13663fd7eb94b->enter($__internal_fa2acb0249f0fc4e462d0cf232b6218b840b8d1b73fb70c0f2a13663fd7eb94b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_935bff24ab7a89661a69b38f92b8c00b9cf5e48ea45fbb4adfcff0c42bc46b19->leave($__internal_935bff24ab7a89661a69b38f92b8c00b9cf5e48ea45fbb4adfcff0c42bc46b19_prof);

        
        $__internal_fa2acb0249f0fc4e462d0cf232b6218b840b8d1b73fb70c0f2a13663fd7eb94b->leave($__internal_fa2acb0249f0fc4e462d0cf232b6218b840b8d1b73fb70c0f2a13663fd7eb94b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
