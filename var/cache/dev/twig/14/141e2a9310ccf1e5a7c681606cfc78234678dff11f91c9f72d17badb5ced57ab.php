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
        $__internal_901d358983d8ff0617de78835daba6c5f115b6f130bd576a617d208dcc8a1d34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_901d358983d8ff0617de78835daba6c5f115b6f130bd576a617d208dcc8a1d34->enter($__internal_901d358983d8ff0617de78835daba6c5f115b6f130bd576a617d208dcc8a1d34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_bb3ab37a2fd5bebde94c2427a03f43c473558ff3c57afc0f4ef5e8e5d706a334 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb3ab37a2fd5bebde94c2427a03f43c473558ff3c57afc0f4ef5e8e5d706a334->enter($__internal_bb3ab37a2fd5bebde94c2427a03f43c473558ff3c57afc0f4ef5e8e5d706a334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_901d358983d8ff0617de78835daba6c5f115b6f130bd576a617d208dcc8a1d34->leave($__internal_901d358983d8ff0617de78835daba6c5f115b6f130bd576a617d208dcc8a1d34_prof);

        
        $__internal_bb3ab37a2fd5bebde94c2427a03f43c473558ff3c57afc0f4ef5e8e5d706a334->leave($__internal_bb3ab37a2fd5bebde94c2427a03f43c473558ff3c57afc0f4ef5e8e5d706a334_prof);

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
