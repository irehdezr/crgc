<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_27196a56c59ef7c29872c8aadc1a69648fab0fe8cad4fbfcd0c22e96fe546341 extends Twig_Template
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
        $__internal_e7b05b044db5679eaaafe07fcaca7cf806f04f0c8bc36050656c4c307a80182d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7b05b044db5679eaaafe07fcaca7cf806f04f0c8bc36050656c4c307a80182d->enter($__internal_e7b05b044db5679eaaafe07fcaca7cf806f04f0c8bc36050656c4c307a80182d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_3a486fc3237f3e36afb60fe8836701e7bd328a1ee290dd5763a941d0d4bbe942 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a486fc3237f3e36afb60fe8836701e7bd328a1ee290dd5763a941d0d4bbe942->enter($__internal_3a486fc3237f3e36afb60fe8836701e7bd328a1ee290dd5763a941d0d4bbe942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_e7b05b044db5679eaaafe07fcaca7cf806f04f0c8bc36050656c4c307a80182d->leave($__internal_e7b05b044db5679eaaafe07fcaca7cf806f04f0c8bc36050656c4c307a80182d_prof);

        
        $__internal_3a486fc3237f3e36afb60fe8836701e7bd328a1ee290dd5763a941d0d4bbe942->leave($__internal_3a486fc3237f3e36afb60fe8836701e7bd328a1ee290dd5763a941d0d4bbe942_prof);

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
", "@WebProfiler/Profiler/header.html.twig", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
