<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_e6cfd437461eab17c2f5a76f5b8697c225a2b56a4ad755141ae80047749e1cbd extends Twig_Template
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
        $__internal_ba6319947b69ba7ca0be2f6e9c2dad7244130bd252d3a480d4880626ccf27c42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba6319947b69ba7ca0be2f6e9c2dad7244130bd252d3a480d4880626ccf27c42->enter($__internal_ba6319947b69ba7ca0be2f6e9c2dad7244130bd252d3a480d4880626ccf27c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_f714937ec9cc33a236f9b7e706c5abcc9b9c0ed3367194f0db126dbbb632a845 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f714937ec9cc33a236f9b7e706c5abcc9b9c0ed3367194f0db126dbbb632a845->enter($__internal_f714937ec9cc33a236f9b7e706c5abcc9b9c0ed3367194f0db126dbbb632a845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

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
        
        $__internal_ba6319947b69ba7ca0be2f6e9c2dad7244130bd252d3a480d4880626ccf27c42->leave($__internal_ba6319947b69ba7ca0be2f6e9c2dad7244130bd252d3a480d4880626ccf27c42_prof);

        
        $__internal_f714937ec9cc33a236f9b7e706c5abcc9b9c0ed3367194f0db126dbbb632a845->leave($__internal_f714937ec9cc33a236f9b7e706c5abcc9b9c0ed3367194f0db126dbbb632a845_prof);

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
