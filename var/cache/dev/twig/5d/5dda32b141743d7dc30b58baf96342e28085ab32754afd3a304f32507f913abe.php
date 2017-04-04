<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_d79090fc01bc242d7119c2209bdd04c568e464373bfc032c48c70402e93697b1 extends Twig_Template
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
        $__internal_4e52968f470eb39b5d95f6bbe4387f37bf198317e264301906ec25c6d762d02f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e52968f470eb39b5d95f6bbe4387f37bf198317e264301906ec25c6d762d02f->enter($__internal_4e52968f470eb39b5d95f6bbe4387f37bf198317e264301906ec25c6d762d02f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_2c7afab32f1d45bd4dc41dfa0a4864318e7ccefc1a6481edca05e0f48957e15e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c7afab32f1d45bd4dc41dfa0a4864318e7ccefc1a6481edca05e0f48957e15e->enter($__internal_2c7afab32f1d45bd4dc41dfa0a4864318e7ccefc1a6481edca05e0f48957e15e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

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
        
        $__internal_4e52968f470eb39b5d95f6bbe4387f37bf198317e264301906ec25c6d762d02f->leave($__internal_4e52968f470eb39b5d95f6bbe4387f37bf198317e264301906ec25c6d762d02f_prof);

        
        $__internal_2c7afab32f1d45bd4dc41dfa0a4864318e7ccefc1a6481edca05e0f48957e15e->leave($__internal_2c7afab32f1d45bd4dc41dfa0a4864318e7ccefc1a6481edca05e0f48957e15e_prof);

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
", "@Twig/Exception/traces.txt.twig", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.txt.twig");
    }
}
