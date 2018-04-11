<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_57c6bfb1046e19d1ffa8d6894803b68c5d3247319c15c387637612031eef377e extends Twig_Template
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
        $__internal_e3c4e07e79b74ea730aaac2d9836c63c0a97f6f31a8193c235fa0f372af15685 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3c4e07e79b74ea730aaac2d9836c63c0a97f6f31a8193c235fa0f372af15685->enter($__internal_e3c4e07e79b74ea730aaac2d9836c63c0a97f6f31a8193c235fa0f372af15685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_9cfc1dfb1b518d3f7a37da838866c8236592f177b6d178c23dad10cbafd82dfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cfc1dfb1b518d3f7a37da838866c8236592f177b6d178c23dad10cbafd82dfc->enter($__internal_9cfc1dfb1b518d3f7a37da838866c8236592f177b6d178c23dad10cbafd82dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_e3c4e07e79b74ea730aaac2d9836c63c0a97f6f31a8193c235fa0f372af15685->leave($__internal_e3c4e07e79b74ea730aaac2d9836c63c0a97f6f31a8193c235fa0f372af15685_prof);

        
        $__internal_9cfc1dfb1b518d3f7a37da838866c8236592f177b6d178c23dad10cbafd82dfc->leave($__internal_9cfc1dfb1b518d3f7a37da838866c8236592f177b6d178c23dad10cbafd82dfc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
