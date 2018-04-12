<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_ca13190b786fcd122bc6cfb6c9ce6705005be705cd12447fc8a1470b7b0c9af9 extends Twig_Template
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
        $__internal_eb635f7294c39ec70fad37d8589907518458d5b31b3607fbbecb2db7afc13f5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb635f7294c39ec70fad37d8589907518458d5b31b3607fbbecb2db7afc13f5e->enter($__internal_eb635f7294c39ec70fad37d8589907518458d5b31b3607fbbecb2db7afc13f5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_d64b40927515b1da02cbe47815ca9c4031741b603d36778625ef000051059855 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d64b40927515b1da02cbe47815ca9c4031741b603d36778625ef000051059855->enter($__internal_d64b40927515b1da02cbe47815ca9c4031741b603d36778625ef000051059855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_eb635f7294c39ec70fad37d8589907518458d5b31b3607fbbecb2db7afc13f5e->leave($__internal_eb635f7294c39ec70fad37d8589907518458d5b31b3607fbbecb2db7afc13f5e_prof);

        
        $__internal_d64b40927515b1da02cbe47815ca9c4031741b603d36778625ef000051059855->leave($__internal_d64b40927515b1da02cbe47815ca9c4031741b603d36778625ef000051059855_prof);

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
", "TwigBundle:Exception:exception.json.twig", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
