<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_2b0818b5a0a99f2ac8798857a49eb97d8454ac0c4afa363b4a2f2d5d73960ce3 extends Twig_Template
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
        $__internal_79d64bfd0a9666c32c68a6161dce619ce59b27485e75e4efd6df2a6959bd6364 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79d64bfd0a9666c32c68a6161dce619ce59b27485e75e4efd6df2a6959bd6364->enter($__internal_79d64bfd0a9666c32c68a6161dce619ce59b27485e75e4efd6df2a6959bd6364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_6e81c99d1f5b8405503a288825e66436de894d79f834cc2af0566d31ffef4b3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e81c99d1f5b8405503a288825e66436de894d79f834cc2af0566d31ffef4b3d->enter($__internal_6e81c99d1f5b8405503a288825e66436de894d79f834cc2af0566d31ffef4b3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_79d64bfd0a9666c32c68a6161dce619ce59b27485e75e4efd6df2a6959bd6364->leave($__internal_79d64bfd0a9666c32c68a6161dce619ce59b27485e75e4efd6df2a6959bd6364_prof);

        
        $__internal_6e81c99d1f5b8405503a288825e66436de894d79f834cc2af0566d31ffef4b3d->leave($__internal_6e81c99d1f5b8405503a288825e66436de894d79f834cc2af0566d31ffef4b3d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
", "@Twig/Exception/exception.css.twig", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
