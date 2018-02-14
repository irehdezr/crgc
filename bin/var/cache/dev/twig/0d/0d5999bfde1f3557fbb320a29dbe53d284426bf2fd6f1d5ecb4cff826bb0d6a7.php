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
        $__internal_1204269fc429e38ec3332925753d54dae38fbb37e2c08aad528894762683b183 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1204269fc429e38ec3332925753d54dae38fbb37e2c08aad528894762683b183->enter($__internal_1204269fc429e38ec3332925753d54dae38fbb37e2c08aad528894762683b183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_42f0608dd91b480bf5fed3de1d431b41845221a57f33f5d9f261032a130e0347 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42f0608dd91b480bf5fed3de1d431b41845221a57f33f5d9f261032a130e0347->enter($__internal_42f0608dd91b480bf5fed3de1d431b41845221a57f33f5d9f261032a130e0347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_1204269fc429e38ec3332925753d54dae38fbb37e2c08aad528894762683b183->leave($__internal_1204269fc429e38ec3332925753d54dae38fbb37e2c08aad528894762683b183_prof);

        
        $__internal_42f0608dd91b480bf5fed3de1d431b41845221a57f33f5d9f261032a130e0347->leave($__internal_42f0608dd91b480bf5fed3de1d431b41845221a57f33f5d9f261032a130e0347_prof);

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
