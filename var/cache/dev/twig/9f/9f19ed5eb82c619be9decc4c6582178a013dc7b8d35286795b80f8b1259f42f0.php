<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_ee38711f8c76ea2e0cac04957eb638a58c6a0ad1bfa3f5e2087f1b65f4f7214b extends Twig_Template
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
        $__internal_5dce54acd8716975e48d1da7723a83f66e7cfe988b439447b0fd440eae63f236 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dce54acd8716975e48d1da7723a83f66e7cfe988b439447b0fd440eae63f236->enter($__internal_5dce54acd8716975e48d1da7723a83f66e7cfe988b439447b0fd440eae63f236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_69e9135a307cbe03fba53bfc0ade4163ae94c4b99819bfcba4cf78fbd982fe2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69e9135a307cbe03fba53bfc0ade4163ae94c4b99819bfcba4cf78fbd982fe2b->enter($__internal_69e9135a307cbe03fba53bfc0ade4163ae94c4b99819bfcba4cf78fbd982fe2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

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
        
        $__internal_5dce54acd8716975e48d1da7723a83f66e7cfe988b439447b0fd440eae63f236->leave($__internal_5dce54acd8716975e48d1da7723a83f66e7cfe988b439447b0fd440eae63f236_prof);

        
        $__internal_69e9135a307cbe03fba53bfc0ade4163ae94c4b99819bfcba4cf78fbd982fe2b->leave($__internal_69e9135a307cbe03fba53bfc0ade4163ae94c4b99819bfcba4cf78fbd982fe2b_prof);

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
", "TwigBundle:Exception:traces.xml.twig", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
