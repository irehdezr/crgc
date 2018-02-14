<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_11fc1845d9602d3086d6d165a63a7f9e8f9e73442d799402dfb32fda79c7f7cf extends Twig_Template
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
        $__internal_372ae84b9d552ead0c778f67b12115b6bb30e16273563c2381eb74de27ef7e03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_372ae84b9d552ead0c778f67b12115b6bb30e16273563c2381eb74de27ef7e03->enter($__internal_372ae84b9d552ead0c778f67b12115b6bb30e16273563c2381eb74de27ef7e03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_20ad52dba250a6cfdf4c133e30c30abe94e6c2c49839e374f44a57ba4f3471a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20ad52dba250a6cfdf4c133e30c30abe94e6c2c49839e374f44a57ba4f3471a5->enter($__internal_20ad52dba250a6cfdf4c133e30c30abe94e6c2c49839e374f44a57ba4f3471a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_372ae84b9d552ead0c778f67b12115b6bb30e16273563c2381eb74de27ef7e03->leave($__internal_372ae84b9d552ead0c778f67b12115b6bb30e16273563c2381eb74de27ef7e03_prof);

        
        $__internal_20ad52dba250a6cfdf4c133e30c30abe94e6c2c49839e374f44a57ba4f3471a5->leave($__internal_20ad52dba250a6cfdf4c133e30c30abe94e6c2c49839e374f44a57ba4f3471a5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
