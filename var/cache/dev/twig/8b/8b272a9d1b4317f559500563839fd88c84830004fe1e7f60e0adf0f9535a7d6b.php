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
        $__internal_049d8ba54dd38802a87daf224ae168d7611e93ad55e6d3148932485a63fccc0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_049d8ba54dd38802a87daf224ae168d7611e93ad55e6d3148932485a63fccc0d->enter($__internal_049d8ba54dd38802a87daf224ae168d7611e93ad55e6d3148932485a63fccc0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_e095062c6dba4cb77c648353cde58904c2e6166ef390c2e62e1d4d46ce7893ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e095062c6dba4cb77c648353cde58904c2e6166ef390c2e62e1d4d46ce7893ee->enter($__internal_e095062c6dba4cb77c648353cde58904c2e6166ef390c2e62e1d4d46ce7893ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

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
        
        $__internal_049d8ba54dd38802a87daf224ae168d7611e93ad55e6d3148932485a63fccc0d->leave($__internal_049d8ba54dd38802a87daf224ae168d7611e93ad55e6d3148932485a63fccc0d_prof);

        
        $__internal_e095062c6dba4cb77c648353cde58904c2e6166ef390c2e62e1d4d46ce7893ee->leave($__internal_e095062c6dba4cb77c648353cde58904c2e6166ef390c2e62e1d4d46ce7893ee_prof);

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
