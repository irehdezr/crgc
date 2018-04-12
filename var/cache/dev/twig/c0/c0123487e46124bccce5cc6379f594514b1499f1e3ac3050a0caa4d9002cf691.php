<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_88bd5e0c1c1863915c2451e1cfa7caaabe78d81ca6bce8882474e699347863a9 extends Twig_Template
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
        $__internal_a05d1c94eff6d4e20ac7c4a1d9701d29b3aad697f48c7e96a7c0e8f81d984942 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a05d1c94eff6d4e20ac7c4a1d9701d29b3aad697f48c7e96a7c0e8f81d984942->enter($__internal_a05d1c94eff6d4e20ac7c4a1d9701d29b3aad697f48c7e96a7c0e8f81d984942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_6d695945f1f5f35195d1334a6dfd31bdafa6fa08fe11b7d00510fb31ee3aca31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d695945f1f5f35195d1334a6dfd31bdafa6fa08fe11b7d00510fb31ee3aca31->enter($__internal_6d695945f1f5f35195d1334a6dfd31bdafa6fa08fe11b7d00510fb31ee3aca31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_a05d1c94eff6d4e20ac7c4a1d9701d29b3aad697f48c7e96a7c0e8f81d984942->leave($__internal_a05d1c94eff6d4e20ac7c4a1d9701d29b3aad697f48c7e96a7c0e8f81d984942_prof);

        
        $__internal_6d695945f1f5f35195d1334a6dfd31bdafa6fa08fe11b7d00510fb31ee3aca31->leave($__internal_6d695945f1f5f35195d1334a6dfd31bdafa6fa08fe11b7d00510fb31ee3aca31_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.css.twig", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
