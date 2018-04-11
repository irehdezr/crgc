<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_385829a978a09b6783d1930c086274709261660baf7b49f29c87b2dc4af5cc3b extends Twig_Template
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
        $__internal_31ebfb8d74f6f5f993e323f9cc72f4aa8fbd211c13643ca3e70c5e3046f8abb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31ebfb8d74f6f5f993e323f9cc72f4aa8fbd211c13643ca3e70c5e3046f8abb7->enter($__internal_31ebfb8d74f6f5f993e323f9cc72f4aa8fbd211c13643ca3e70c5e3046f8abb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_702ab9e9af30d86bec4bd3ddfe3d022b81a7dc6ed6433e5a98a402255460f8c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_702ab9e9af30d86bec4bd3ddfe3d022b81a7dc6ed6433e5a98a402255460f8c2->enter($__internal_702ab9e9af30d86bec4bd3ddfe3d022b81a7dc6ed6433e5a98a402255460f8c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_31ebfb8d74f6f5f993e323f9cc72f4aa8fbd211c13643ca3e70c5e3046f8abb7->leave($__internal_31ebfb8d74f6f5f993e323f9cc72f4aa8fbd211c13643ca3e70c5e3046f8abb7_prof);

        
        $__internal_702ab9e9af30d86bec4bd3ddfe3d022b81a7dc6ed6433e5a98a402255460f8c2->leave($__internal_702ab9e9af30d86bec4bd3ddfe3d022b81a7dc6ed6433e5a98a402255460f8c2_prof);

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
", "TwigBundle:Exception:error.json.twig", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
