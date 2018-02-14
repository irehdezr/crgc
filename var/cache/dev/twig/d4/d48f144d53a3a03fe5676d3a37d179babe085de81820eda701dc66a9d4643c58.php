<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_2ac4805872a4fc85c6f8f8e8531d06520532adc1c5494a93be80cc7f9430143a extends Twig_Template
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
        $__internal_74e7fbe321a528a10ff6199bb2bf3e747a65e4a7aa7c504ce1b1d30f3bd444fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74e7fbe321a528a10ff6199bb2bf3e747a65e4a7aa7c504ce1b1d30f3bd444fd->enter($__internal_74e7fbe321a528a10ff6199bb2bf3e747a65e4a7aa7c504ce1b1d30f3bd444fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_65b3fb76461d188557f8d80a9e4b25c7fa59d5cdfd43a5477b75255770533acd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65b3fb76461d188557f8d80a9e4b25c7fa59d5cdfd43a5477b75255770533acd->enter($__internal_65b3fb76461d188557f8d80a9e4b25c7fa59d5cdfd43a5477b75255770533acd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_74e7fbe321a528a10ff6199bb2bf3e747a65e4a7aa7c504ce1b1d30f3bd444fd->leave($__internal_74e7fbe321a528a10ff6199bb2bf3e747a65e4a7aa7c504ce1b1d30f3bd444fd_prof);

        
        $__internal_65b3fb76461d188557f8d80a9e4b25c7fa59d5cdfd43a5477b75255770533acd->leave($__internal_65b3fb76461d188557f8d80a9e4b25c7fa59d5cdfd43a5477b75255770533acd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
