<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_afd3bb2041986bca00a4a1c3df1f222f57508376574c8ac865b10fdb0c4d94d0 extends Twig_Template
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
        $__internal_a386471748156a388486a1583cd7b82fe72951d75de1f1d36ef5068ea65d909d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a386471748156a388486a1583cd7b82fe72951d75de1f1d36ef5068ea65d909d->enter($__internal_a386471748156a388486a1583cd7b82fe72951d75de1f1d36ef5068ea65d909d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_0b67b9db22a63865d5c51f7e8567891da31bd7049dd1330d58397c5e44d04928 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b67b9db22a63865d5c51f7e8567891da31bd7049dd1330d58397c5e44d04928->enter($__internal_0b67b9db22a63865d5c51f7e8567891da31bd7049dd1330d58397c5e44d04928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_a386471748156a388486a1583cd7b82fe72951d75de1f1d36ef5068ea65d909d->leave($__internal_a386471748156a388486a1583cd7b82fe72951d75de1f1d36ef5068ea65d909d_prof);

        
        $__internal_0b67b9db22a63865d5c51f7e8567891da31bd7049dd1330d58397c5e44d04928->leave($__internal_0b67b9db22a63865d5c51f7e8567891da31bd7049dd1330d58397c5e44d04928_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
