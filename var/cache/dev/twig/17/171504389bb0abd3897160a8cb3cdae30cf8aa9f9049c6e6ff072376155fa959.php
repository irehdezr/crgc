<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_43030eaaab0ed9d84a96e78099c11ba4214ccb5bbbd28087c9b7687ed0f6fe38 extends Twig_Template
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
        $__internal_eec949163952e9bd72d370616786145da57875c95367a333df17b6a2f9b19cf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eec949163952e9bd72d370616786145da57875c95367a333df17b6a2f9b19cf0->enter($__internal_eec949163952e9bd72d370616786145da57875c95367a333df17b6a2f9b19cf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_436a7ea9c4e9403c7e9a448aaa23a269b25d5dafb4e9a359186646eb14f711dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_436a7ea9c4e9403c7e9a448aaa23a269b25d5dafb4e9a359186646eb14f711dd->enter($__internal_436a7ea9c4e9403c7e9a448aaa23a269b25d5dafb4e9a359186646eb14f711dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_eec949163952e9bd72d370616786145da57875c95367a333df17b6a2f9b19cf0->leave($__internal_eec949163952e9bd72d370616786145da57875c95367a333df17b6a2f9b19cf0_prof);

        
        $__internal_436a7ea9c4e9403c7e9a448aaa23a269b25d5dafb4e9a359186646eb14f711dd->leave($__internal_436a7ea9c4e9403c7e9a448aaa23a269b25d5dafb4e9a359186646eb14f711dd_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
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
", "@WebProfiler/Profiler/header.html.twig", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
