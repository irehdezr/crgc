<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_8c1627641dc5d7869cf23526ce7716a628e118545de09c9a49acf0570c5c677f extends Twig_Template
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
        $__internal_ea0cc68c2fc3be62193ebd72c8ad5021e0e97da4d077a4e8d6751aa9112cb5a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea0cc68c2fc3be62193ebd72c8ad5021e0e97da4d077a4e8d6751aa9112cb5a4->enter($__internal_ea0cc68c2fc3be62193ebd72c8ad5021e0e97da4d077a4e8d6751aa9112cb5a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_875e067125972ccf6cf1e06d5a30041e968f17b2c38c92982ac7c29b084769fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_875e067125972ccf6cf1e06d5a30041e968f17b2c38c92982ac7c29b084769fd->enter($__internal_875e067125972ccf6cf1e06d5a30041e968f17b2c38c92982ac7c29b084769fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_ea0cc68c2fc3be62193ebd72c8ad5021e0e97da4d077a4e8d6751aa9112cb5a4->leave($__internal_ea0cc68c2fc3be62193ebd72c8ad5021e0e97da4d077a4e8d6751aa9112cb5a4_prof);

        
        $__internal_875e067125972ccf6cf1e06d5a30041e968f17b2c38c92982ac7c29b084769fd->leave($__internal_875e067125972ccf6cf1e06d5a30041e968f17b2c38c92982ac7c29b084769fd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.txt.twig");
    }
}
