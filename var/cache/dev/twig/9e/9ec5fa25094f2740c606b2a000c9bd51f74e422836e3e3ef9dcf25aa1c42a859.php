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
        $__internal_f4387006b82173dff679a47a399c10edf47c1d6203a6cc0b41f01e0407378ff9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4387006b82173dff679a47a399c10edf47c1d6203a6cc0b41f01e0407378ff9->enter($__internal_f4387006b82173dff679a47a399c10edf47c1d6203a6cc0b41f01e0407378ff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        $__internal_90d67a668a21d45473162ba4ea3856d8e555dee7c9ba8ba450bcd491f2e5bb4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90d67a668a21d45473162ba4ea3856d8e555dee7c9ba8ba450bcd491f2e5bb4c->enter($__internal_90d67a668a21d45473162ba4ea3856d8e555dee7c9ba8ba450bcd491f2e5bb4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

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
        
        $__internal_f4387006b82173dff679a47a399c10edf47c1d6203a6cc0b41f01e0407378ff9->leave($__internal_f4387006b82173dff679a47a399c10edf47c1d6203a6cc0b41f01e0407378ff9_prof);

        
        $__internal_90d67a668a21d45473162ba4ea3856d8e555dee7c9ba8ba450bcd491f2e5bb4c->leave($__internal_90d67a668a21d45473162ba4ea3856d8e555dee7c9ba8ba450bcd491f2e5bb4c_prof);

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
