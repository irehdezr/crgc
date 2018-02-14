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
        $__internal_41f99f4ab1cfc913e236bd72595ed73c532e4f1c25fa2f284947a15cc94c9531 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41f99f4ab1cfc913e236bd72595ed73c532e4f1c25fa2f284947a15cc94c9531->enter($__internal_41f99f4ab1cfc913e236bd72595ed73c532e4f1c25fa2f284947a15cc94c9531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_1d419c731bec72f4955554ff0b936ce5e2b86b46e65dfd82f3f5ae48291843bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d419c731bec72f4955554ff0b936ce5e2b86b46e65dfd82f3f5ae48291843bb->enter($__internal_1d419c731bec72f4955554ff0b936ce5e2b86b46e65dfd82f3f5ae48291843bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

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
        
        $__internal_41f99f4ab1cfc913e236bd72595ed73c532e4f1c25fa2f284947a15cc94c9531->leave($__internal_41f99f4ab1cfc913e236bd72595ed73c532e4f1c25fa2f284947a15cc94c9531_prof);

        
        $__internal_1d419c731bec72f4955554ff0b936ce5e2b86b46e65dfd82f3f5ae48291843bb->leave($__internal_1d419c731bec72f4955554ff0b936ce5e2b86b46e65dfd82f3f5ae48291843bb_prof);

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
