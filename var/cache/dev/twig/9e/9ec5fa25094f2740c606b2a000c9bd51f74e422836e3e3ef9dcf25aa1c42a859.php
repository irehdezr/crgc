<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_a4c5d7b0949bfc9689ca999d3fac8c297ae8c96827c0610495b6ac9c148704a8 extends Twig_Template
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
        $__internal_8b3856e1b9c0314f63670b5eccf56da1e8bdcd1308eb7ab4412e144e054ed8ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b3856e1b9c0314f63670b5eccf56da1e8bdcd1308eb7ab4412e144e054ed8ef->enter($__internal_8b3856e1b9c0314f63670b5eccf56da1e8bdcd1308eb7ab4412e144e054ed8ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        $__internal_3c656402ae3e6665001186b0f47ec3a829123d7ffb3cfda16b8d33167407235c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c656402ae3e6665001186b0f47ec3a829123d7ffb3cfda16b8d33167407235c->enter($__internal_3c656402ae3e6665001186b0f47ec3a829123d7ffb3cfda16b8d33167407235c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_8b3856e1b9c0314f63670b5eccf56da1e8bdcd1308eb7ab4412e144e054ed8ef->leave($__internal_8b3856e1b9c0314f63670b5eccf56da1e8bdcd1308eb7ab4412e144e054ed8ef_prof);

        
        $__internal_3c656402ae3e6665001186b0f47ec3a829123d7ffb3cfda16b8d33167407235c->leave($__internal_3c656402ae3e6665001186b0f47ec3a829123d7ffb3cfda16b8d33167407235c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
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
", "TwigBundle:Exception:traces.txt.twig", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
