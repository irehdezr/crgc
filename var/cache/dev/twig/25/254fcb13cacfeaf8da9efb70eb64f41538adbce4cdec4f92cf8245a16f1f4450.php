<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_f793577090af5ed27d7738d4b11948dd9835a4cdfe2b444593b01c6a48bde07b extends Twig_Template
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
        $__internal_5380e6deef7aaaa1642e29ea72d57cdcc29450460dfe71002019c746a5ef9616 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5380e6deef7aaaa1642e29ea72d57cdcc29450460dfe71002019c746a5ef9616->enter($__internal_5380e6deef7aaaa1642e29ea72d57cdcc29450460dfe71002019c746a5ef9616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_93f204bb7958d45c1103c33ac8368db6756665b19d627f383b7fe6f6179cb594 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93f204bb7958d45c1103c33ac8368db6756665b19d627f383b7fe6f6179cb594->enter($__internal_93f204bb7958d45c1103c33ac8368db6756665b19d627f383b7fe6f6179cb594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_5380e6deef7aaaa1642e29ea72d57cdcc29450460dfe71002019c746a5ef9616->leave($__internal_5380e6deef7aaaa1642e29ea72d57cdcc29450460dfe71002019c746a5ef9616_prof);

        
        $__internal_93f204bb7958d45c1103c33ac8368db6756665b19d627f383b7fe6f6179cb594->leave($__internal_93f204bb7958d45c1103c33ac8368db6756665b19d627f383b7fe6f6179cb594_prof);

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
", "TwigBundle:Exception:error.txt.twig", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}