<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_baed4214a337fdb063973f5a38d1e401230711f09872d384709d9f849b7b1104 extends Twig_Template
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
        $__internal_6e4f0fb22f80d8aa1fa0db344432d997bb1496613ff7eb5bc3f0e625cb2de018 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e4f0fb22f80d8aa1fa0db344432d997bb1496613ff7eb5bc3f0e625cb2de018->enter($__internal_6e4f0fb22f80d8aa1fa0db344432d997bb1496613ff7eb5bc3f0e625cb2de018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_506a0ad46ff4cedb4c2fb5a1d2256054449c51f882c7cf6716015b1aa3a411c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_506a0ad46ff4cedb4c2fb5a1d2256054449c51f882c7cf6716015b1aa3a411c8->enter($__internal_506a0ad46ff4cedb4c2fb5a1d2256054449c51f882c7cf6716015b1aa3a411c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_6e4f0fb22f80d8aa1fa0db344432d997bb1496613ff7eb5bc3f0e625cb2de018->leave($__internal_6e4f0fb22f80d8aa1fa0db344432d997bb1496613ff7eb5bc3f0e625cb2de018_prof);

        
        $__internal_506a0ad46ff4cedb4c2fb5a1d2256054449c51f882c7cf6716015b1aa3a411c8->leave($__internal_506a0ad46ff4cedb4c2fb5a1d2256054449c51f882c7cf6716015b1aa3a411c8_prof);

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
", "TwigBundle:Exception:error.xml.twig", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
