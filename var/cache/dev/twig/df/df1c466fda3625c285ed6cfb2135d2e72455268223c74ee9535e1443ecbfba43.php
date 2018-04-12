<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_b4e9d03206a1e42bc753a625267560cd607166f70095dbf4190e5f9d65199640 extends Twig_Template
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
        $__internal_dad98e16f79ed19b3c4b3cbd820ad33e7fc9d9211c1863b4e8efec36f913891f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dad98e16f79ed19b3c4b3cbd820ad33e7fc9d9211c1863b4e8efec36f913891f->enter($__internal_dad98e16f79ed19b3c4b3cbd820ad33e7fc9d9211c1863b4e8efec36f913891f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_13e38c10c632760df67e0aa0a37a5cdb3c0917afcb3ab27c04a42b8b52a5e563 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13e38c10c632760df67e0aa0a37a5cdb3c0917afcb3ab27c04a42b8b52a5e563->enter($__internal_13e38c10c632760df67e0aa0a37a5cdb3c0917afcb3ab27c04a42b8b52a5e563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_dad98e16f79ed19b3c4b3cbd820ad33e7fc9d9211c1863b4e8efec36f913891f->leave($__internal_dad98e16f79ed19b3c4b3cbd820ad33e7fc9d9211c1863b4e8efec36f913891f_prof);

        
        $__internal_13e38c10c632760df67e0aa0a37a5cdb3c0917afcb3ab27c04a42b8b52a5e563->leave($__internal_13e38c10c632760df67e0aa0a37a5cdb3c0917afcb3ab27c04a42b8b52a5e563_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.atom.twig", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
