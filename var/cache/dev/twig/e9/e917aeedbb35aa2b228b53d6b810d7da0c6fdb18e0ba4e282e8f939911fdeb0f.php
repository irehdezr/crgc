<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_a1a8fe19dc4ce723d2cf8ef2dc5b92d14baec939d0d9cf2d6108472c322f6b2b extends Twig_Template
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
        $__internal_f0bb14ba53939de60f352af932b4aac77ae2d20c787631e4ea8d66d85fa63d6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0bb14ba53939de60f352af932b4aac77ae2d20c787631e4ea8d66d85fa63d6f->enter($__internal_f0bb14ba53939de60f352af932b4aac77ae2d20c787631e4ea8d66d85fa63d6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        $__internal_d904511585af68f8a25de435e30c32f34102f9993e88964b5fcf54e9dd54b46b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d904511585af68f8a25de435e30c32f34102f9993e88964b5fcf54e9dd54b46b->enter($__internal_d904511585af68f8a25de435e30c32f34102f9993e88964b5fcf54e9dd54b46b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

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
        
        $__internal_f0bb14ba53939de60f352af932b4aac77ae2d20c787631e4ea8d66d85fa63d6f->leave($__internal_f0bb14ba53939de60f352af932b4aac77ae2d20c787631e4ea8d66d85fa63d6f_prof);

        
        $__internal_d904511585af68f8a25de435e30c32f34102f9993e88964b5fcf54e9dd54b46b->leave($__internal_d904511585af68f8a25de435e30c32f34102f9993e88964b5fcf54e9dd54b46b_prof);

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
", "TwigBundle:Exception:traces.txt.twig", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
