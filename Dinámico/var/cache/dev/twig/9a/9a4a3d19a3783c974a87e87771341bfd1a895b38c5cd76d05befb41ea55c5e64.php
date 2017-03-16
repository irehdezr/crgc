<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_4529dc7a1adc698f844caf40f4a78126b7f5e25b349b5e1dd7114bd303c7a400 extends Twig_Template
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
        $__internal_c771c9f319cbd2a3c1b323cc1c92863772fea13f79c2420c1ff81891c89f89e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c771c9f319cbd2a3c1b323cc1c92863772fea13f79c2420c1ff81891c89f89e0->enter($__internal_c771c9f319cbd2a3c1b323cc1c92863772fea13f79c2420c1ff81891c89f89e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_f840ac92ce1f33b464a80ebc7ff276c759130e8dfb4f94a9a94d1d01c28347b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f840ac92ce1f33b464a80ebc7ff276c759130e8dfb4f94a9a94d1d01c28347b8->enter($__internal_f840ac92ce1f33b464a80ebc7ff276c759130e8dfb4f94a9a94d1d01c28347b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
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
        
        $__internal_c771c9f319cbd2a3c1b323cc1c92863772fea13f79c2420c1ff81891c89f89e0->leave($__internal_c771c9f319cbd2a3c1b323cc1c92863772fea13f79c2420c1ff81891c89f89e0_prof);

        
        $__internal_f840ac92ce1f33b464a80ebc7ff276c759130e8dfb4f94a9a94d1d01c28347b8->leave($__internal_f840ac92ce1f33b464a80ebc7ff276c759130e8dfb4f94a9a94d1d01c28347b8_prof);

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
", "@Twig/Exception/traces.txt.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
