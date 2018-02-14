<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_05afbc2bb988efef34ae7d76f1f60f9ab5a7d6984a3c85fc7caf011e90bc09a7 extends Twig_Template
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
        $__internal_5db7b05564197ab2e0abc9c323ce2c9a4067c3b0b5d8141e8df4a009d6088e7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5db7b05564197ab2e0abc9c323ce2c9a4067c3b0b5d8141e8df4a009d6088e7e->enter($__internal_5db7b05564197ab2e0abc9c323ce2c9a4067c3b0b5d8141e8df4a009d6088e7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_dddf3ecdca557d076e209bb37873d2dc050cd3a97be7f6276723756b24d4ea18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dddf3ecdca557d076e209bb37873d2dc050cd3a97be7f6276723756b24d4ea18->enter($__internal_dddf3ecdca557d076e209bb37873d2dc050cd3a97be7f6276723756b24d4ea18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_5db7b05564197ab2e0abc9c323ce2c9a4067c3b0b5d8141e8df4a009d6088e7e->leave($__internal_5db7b05564197ab2e0abc9c323ce2c9a4067c3b0b5d8141e8df4a009d6088e7e_prof);

        
        $__internal_dddf3ecdca557d076e209bb37873d2dc050cd3a97be7f6276723756b24d4ea18->leave($__internal_dddf3ecdca557d076e209bb37873d2dc050cd3a97be7f6276723756b24d4ea18_prof);

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
", "TwigBundle:Exception:exception.css.twig", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
