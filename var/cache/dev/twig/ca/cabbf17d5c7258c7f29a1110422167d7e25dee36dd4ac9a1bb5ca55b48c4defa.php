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
        $__internal_c203b722d158fb90302eecd9b3b113fe4c87469a1cb8218bd2bbc8b31274ac83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c203b722d158fb90302eecd9b3b113fe4c87469a1cb8218bd2bbc8b31274ac83->enter($__internal_c203b722d158fb90302eecd9b3b113fe4c87469a1cb8218bd2bbc8b31274ac83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_c4e3ffb7a55af3f28d206d7d5088a85a6daab44ff8f27bb625fc7833068edeb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4e3ffb7a55af3f28d206d7d5088a85a6daab44ff8f27bb625fc7833068edeb1->enter($__internal_c4e3ffb7a55af3f28d206d7d5088a85a6daab44ff8f27bb625fc7833068edeb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_c203b722d158fb90302eecd9b3b113fe4c87469a1cb8218bd2bbc8b31274ac83->leave($__internal_c203b722d158fb90302eecd9b3b113fe4c87469a1cb8218bd2bbc8b31274ac83_prof);

        
        $__internal_c4e3ffb7a55af3f28d206d7d5088a85a6daab44ff8f27bb625fc7833068edeb1->leave($__internal_c4e3ffb7a55af3f28d206d7d5088a85a6daab44ff8f27bb625fc7833068edeb1_prof);

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
