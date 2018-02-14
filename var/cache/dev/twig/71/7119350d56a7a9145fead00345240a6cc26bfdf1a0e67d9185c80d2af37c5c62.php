<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_57070c1955837d0b65abc3669b078e54a1a0948f5e7a0be511cc0837fb9f9d59 extends Twig_Template
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
        $__internal_65980ee38daf7c39105cfa3379b4a86ab34011abde0dbf32fd9db6c2174dba03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65980ee38daf7c39105cfa3379b4a86ab34011abde0dbf32fd9db6c2174dba03->enter($__internal_65980ee38daf7c39105cfa3379b4a86ab34011abde0dbf32fd9db6c2174dba03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_42b067b779dc8e1960e0b541e80d8f452acc7a3187a0480f7bcb8dd36f6230d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42b067b779dc8e1960e0b541e80d8f452acc7a3187a0480f7bcb8dd36f6230d8->enter($__internal_42b067b779dc8e1960e0b541e80d8f452acc7a3187a0480f7bcb8dd36f6230d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_65980ee38daf7c39105cfa3379b4a86ab34011abde0dbf32fd9db6c2174dba03->leave($__internal_65980ee38daf7c39105cfa3379b4a86ab34011abde0dbf32fd9db6c2174dba03_prof);

        
        $__internal_42b067b779dc8e1960e0b541e80d8f452acc7a3187a0480f7bcb8dd36f6230d8->leave($__internal_42b067b779dc8e1960e0b541e80d8f452acc7a3187a0480f7bcb8dd36f6230d8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
