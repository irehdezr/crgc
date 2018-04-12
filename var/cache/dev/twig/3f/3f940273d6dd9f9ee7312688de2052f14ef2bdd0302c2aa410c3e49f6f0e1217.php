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
        $__internal_a42bb791a80d5f96e68363b7bbdba74773dc9e161208ad779b1544d46952590d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a42bb791a80d5f96e68363b7bbdba74773dc9e161208ad779b1544d46952590d->enter($__internal_a42bb791a80d5f96e68363b7bbdba74773dc9e161208ad779b1544d46952590d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_2e68a65fe95d3cadc8be7e155cb934d0ae54114bfcc89c95da071eba8af09bc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e68a65fe95d3cadc8be7e155cb934d0ae54114bfcc89c95da071eba8af09bc2->enter($__internal_2e68a65fe95d3cadc8be7e155cb934d0ae54114bfcc89c95da071eba8af09bc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

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
        
        $__internal_a42bb791a80d5f96e68363b7bbdba74773dc9e161208ad779b1544d46952590d->leave($__internal_a42bb791a80d5f96e68363b7bbdba74773dc9e161208ad779b1544d46952590d_prof);

        
        $__internal_2e68a65fe95d3cadc8be7e155cb934d0ae54114bfcc89c95da071eba8af09bc2->leave($__internal_2e68a65fe95d3cadc8be7e155cb934d0ae54114bfcc89c95da071eba8af09bc2_prof);

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
