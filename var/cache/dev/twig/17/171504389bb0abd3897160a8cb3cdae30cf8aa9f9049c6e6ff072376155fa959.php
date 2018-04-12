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
        $__internal_ab14cf2de2ec9bdceb559269d14ab5bebcc5fba7b7d3e1f5ec47e2a8c9287931 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab14cf2de2ec9bdceb559269d14ab5bebcc5fba7b7d3e1f5ec47e2a8c9287931->enter($__internal_ab14cf2de2ec9bdceb559269d14ab5bebcc5fba7b7d3e1f5ec47e2a8c9287931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_b2d7e78ac5c841fe5d058bfee09d624889c78863bc48839eea1e7256c6c32ce8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2d7e78ac5c841fe5d058bfee09d624889c78863bc48839eea1e7256c6c32ce8->enter($__internal_b2d7e78ac5c841fe5d058bfee09d624889c78863bc48839eea1e7256c6c32ce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_ab14cf2de2ec9bdceb559269d14ab5bebcc5fba7b7d3e1f5ec47e2a8c9287931->leave($__internal_ab14cf2de2ec9bdceb559269d14ab5bebcc5fba7b7d3e1f5ec47e2a8c9287931_prof);

        
        $__internal_b2d7e78ac5c841fe5d058bfee09d624889c78863bc48839eea1e7256c6c32ce8->leave($__internal_b2d7e78ac5c841fe5d058bfee09d624889c78863bc48839eea1e7256c6c32ce8_prof);

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
