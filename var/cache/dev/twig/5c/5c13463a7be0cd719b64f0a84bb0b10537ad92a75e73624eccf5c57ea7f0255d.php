<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_74078baa528a8bc56ec8b8f3844c07c664af9ae9f79aee0663de31781115b8cd extends Twig_Template
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
        $__internal_f211a4b92959d56afd09ad79a4f5d049e2bd1478d46c2e2c00623de4172f8a95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f211a4b92959d56afd09ad79a4f5d049e2bd1478d46c2e2c00623de4172f8a95->enter($__internal_f211a4b92959d56afd09ad79a4f5d049e2bd1478d46c2e2c00623de4172f8a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_8a9ae45e75ec41be7e57fc7b9d22f3cd69da1bd79ffcc060ad4e2993e8525560 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a9ae45e75ec41be7e57fc7b9d22f3cd69da1bd79ffcc060ad4e2993e8525560->enter($__internal_8a9ae45e75ec41be7e57fc7b9d22f3cd69da1bd79ffcc060ad4e2993e8525560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_f211a4b92959d56afd09ad79a4f5d049e2bd1478d46c2e2c00623de4172f8a95->leave($__internal_f211a4b92959d56afd09ad79a4f5d049e2bd1478d46c2e2c00623de4172f8a95_prof);

        
        $__internal_8a9ae45e75ec41be7e57fc7b9d22f3cd69da1bd79ffcc060ad4e2993e8525560->leave($__internal_8a9ae45e75ec41be7e57fc7b9d22f3cd69da1bd79ffcc060ad4e2993e8525560_prof);

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
", "@WebProfiler/Profiler/header.html.twig", "D:\\Programacion\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
