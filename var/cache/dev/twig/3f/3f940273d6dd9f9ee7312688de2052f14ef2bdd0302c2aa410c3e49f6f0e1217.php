<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_c8aeb1d866cf7f981913bbb09d101cdc816e0498b841cb2e8eb0a653583a1ee3 extends Twig_Template
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
        $__internal_baec0d4a2097993eb1b60eaf02a85a529aa262b63e41fc293869c86a2329ea7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_baec0d4a2097993eb1b60eaf02a85a529aa262b63e41fc293869c86a2329ea7c->enter($__internal_baec0d4a2097993eb1b60eaf02a85a529aa262b63e41fc293869c86a2329ea7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_0cef6f22a97c2d8959296868e4b0408481c2a56a416fe20ac38d4f937043d97e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cef6f22a97c2d8959296868e4b0408481c2a56a416fe20ac38d4f937043d97e->enter($__internal_0cef6f22a97c2d8959296868e4b0408481c2a56a416fe20ac38d4f937043d97e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

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
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
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
        
        $__internal_baec0d4a2097993eb1b60eaf02a85a529aa262b63e41fc293869c86a2329ea7c->leave($__internal_baec0d4a2097993eb1b60eaf02a85a529aa262b63e41fc293869c86a2329ea7c_prof);

        
        $__internal_0cef6f22a97c2d8959296868e4b0408481c2a56a416fe20ac38d4f937043d97e->leave($__internal_0cef6f22a97c2d8959296868e4b0408481c2a56a416fe20ac38d4f937043d97e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
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
", "@Twig/Exception/traces.xml.twig", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.xml.twig");
    }
}
