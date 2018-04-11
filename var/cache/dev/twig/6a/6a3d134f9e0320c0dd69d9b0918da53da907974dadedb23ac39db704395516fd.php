<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_333424e3e37026b0e806f8c57e02cb03bacd3ec4cd8f7d9667a34246ba93b6de extends Twig_Template
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
        $__internal_5cab92a153c9edb85d9cfbf34473a390ec1984e19ce7b9de9da4c497ad099859 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cab92a153c9edb85d9cfbf34473a390ec1984e19ce7b9de9da4c497ad099859->enter($__internal_5cab92a153c9edb85d9cfbf34473a390ec1984e19ce7b9de9da4c497ad099859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_7527589b73ca7fcfbb11c96b45f765f5c95fed0d415b061752b27d58a95dde44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7527589b73ca7fcfbb11c96b45f765f5c95fed0d415b061752b27d58a95dde44->enter($__internal_7527589b73ca7fcfbb11c96b45f765f5c95fed0d415b061752b27d58a95dde44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_5cab92a153c9edb85d9cfbf34473a390ec1984e19ce7b9de9da4c497ad099859->leave($__internal_5cab92a153c9edb85d9cfbf34473a390ec1984e19ce7b9de9da4c497ad099859_prof);

        
        $__internal_7527589b73ca7fcfbb11c96b45f765f5c95fed0d415b061752b27d58a95dde44->leave($__internal_7527589b73ca7fcfbb11c96b45f765f5c95fed0d415b061752b27d58a95dde44_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.js.twig", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
