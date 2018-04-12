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
        $__internal_1427148c152d245f464a4dd0d71143b902fd5663bec9a9eeb6a5417eb9630cd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1427148c152d245f464a4dd0d71143b902fd5663bec9a9eeb6a5417eb9630cd2->enter($__internal_1427148c152d245f464a4dd0d71143b902fd5663bec9a9eeb6a5417eb9630cd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_92232a36fdb9379f81e4e8658ee5a6c30f89b0cc7a1b43b4315de8efa2960129 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92232a36fdb9379f81e4e8658ee5a6c30f89b0cc7a1b43b4315de8efa2960129->enter($__internal_92232a36fdb9379f81e4e8658ee5a6c30f89b0cc7a1b43b4315de8efa2960129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_1427148c152d245f464a4dd0d71143b902fd5663bec9a9eeb6a5417eb9630cd2->leave($__internal_1427148c152d245f464a4dd0d71143b902fd5663bec9a9eeb6a5417eb9630cd2_prof);

        
        $__internal_92232a36fdb9379f81e4e8658ee5a6c30f89b0cc7a1b43b4315de8efa2960129->leave($__internal_92232a36fdb9379f81e4e8658ee5a6c30f89b0cc7a1b43b4315de8efa2960129_prof);

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
