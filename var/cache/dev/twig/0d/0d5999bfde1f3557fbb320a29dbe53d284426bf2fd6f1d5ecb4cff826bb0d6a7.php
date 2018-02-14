<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_d21956b2d61332ed1b5610ad3eeb0e1ba343edbed0d6e2618a838052f8a2ae4b extends Twig_Template
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
        $__internal_5082dece19151bab4a29fb45c7bd1a7d935f55d0fdc049f841d13cdf2429ff85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5082dece19151bab4a29fb45c7bd1a7d935f55d0fdc049f841d13cdf2429ff85->enter($__internal_5082dece19151bab4a29fb45c7bd1a7d935f55d0fdc049f841d13cdf2429ff85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_f10db691c48279e0e822c70ab414b0bcdab06cfac87475705da6e4cfeb24cb5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f10db691c48279e0e822c70ab414b0bcdab06cfac87475705da6e4cfeb24cb5d->enter($__internal_f10db691c48279e0e822c70ab414b0bcdab06cfac87475705da6e4cfeb24cb5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_5082dece19151bab4a29fb45c7bd1a7d935f55d0fdc049f841d13cdf2429ff85->leave($__internal_5082dece19151bab4a29fb45c7bd1a7d935f55d0fdc049f841d13cdf2429ff85_prof);

        
        $__internal_f10db691c48279e0e822c70ab414b0bcdab06cfac87475705da6e4cfeb24cb5d->leave($__internal_f10db691c48279e0e822c70ab414b0bcdab06cfac87475705da6e4cfeb24cb5d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
