<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_cc8f3374b6f704202b157f27dcca25c1d5675507d5f2643549c5d53ae878847e extends Twig_Template
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
        $__internal_8cdc45313e161436a28a78c3cd54bce85e37284fcfe000c3e3f19a3ff5cc9313 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cdc45313e161436a28a78c3cd54bce85e37284fcfe000c3e3f19a3ff5cc9313->enter($__internal_8cdc45313e161436a28a78c3cd54bce85e37284fcfe000c3e3f19a3ff5cc9313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_7b99cf9d92e2320ca5e6c2f0125ee3ae3fa35ad2c3e6b65402dd06f1c0d3cdee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b99cf9d92e2320ca5e6c2f0125ee3ae3fa35ad2c3e6b65402dd06f1c0d3cdee->enter($__internal_7b99cf9d92e2320ca5e6c2f0125ee3ae3fa35ad2c3e6b65402dd06f1c0d3cdee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_8cdc45313e161436a28a78c3cd54bce85e37284fcfe000c3e3f19a3ff5cc9313->leave($__internal_8cdc45313e161436a28a78c3cd54bce85e37284fcfe000c3e3f19a3ff5cc9313_prof);

        
        $__internal_7b99cf9d92e2320ca5e6c2f0125ee3ae3fa35ad2c3e6b65402dd06f1c0d3cdee->leave($__internal_7b99cf9d92e2320ca5e6c2f0125ee3ae3fa35ad2c3e6b65402dd06f1c0d3cdee_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  37 => 5,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
