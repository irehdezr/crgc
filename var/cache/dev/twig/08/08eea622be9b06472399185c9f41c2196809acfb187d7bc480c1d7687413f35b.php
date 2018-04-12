<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_41e87c82327211e035840acc9d414ea30efe84047380efcf701d98720c48cb9d extends Twig_Template
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
        $__internal_2b5fc6ef5d6d92c0d23b46e3a42d24f0f0da0852aa89c0b529c8d50d16bcb547 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b5fc6ef5d6d92c0d23b46e3a42d24f0f0da0852aa89c0b529c8d50d16bcb547->enter($__internal_2b5fc6ef5d6d92c0d23b46e3a42d24f0f0da0852aa89c0b529c8d50d16bcb547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_4bb5cd8b1ec7b5b29e9d4b1248e3062292ee4fe1003b96a8a28c71ac9b3b4631 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bb5cd8b1ec7b5b29e9d4b1248e3062292ee4fe1003b96a8a28c71ac9b3b4631->enter($__internal_4bb5cd8b1ec7b5b29e9d4b1248e3062292ee4fe1003b96a8a28c71ac9b3b4631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_2b5fc6ef5d6d92c0d23b46e3a42d24f0f0da0852aa89c0b529c8d50d16bcb547->leave($__internal_2b5fc6ef5d6d92c0d23b46e3a42d24f0f0da0852aa89c0b529c8d50d16bcb547_prof);

        
        $__internal_4bb5cd8b1ec7b5b29e9d4b1248e3062292ee4fe1003b96a8a28c71ac9b3b4631->leave($__internal_4bb5cd8b1ec7b5b29e9d4b1248e3062292ee4fe1003b96a8a28c71ac9b3b4631_prof);

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
