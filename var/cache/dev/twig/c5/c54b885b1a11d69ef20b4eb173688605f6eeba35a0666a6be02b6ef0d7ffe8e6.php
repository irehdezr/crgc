<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_ec3ebc5bdfe202ced9191165d32e9e4826ab50558c545ac544b37a059ee89105 extends Twig_Template
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
        $__internal_ddc847f43a29ea8b2eac6d727005268b1fa615cefbe6036d06fbeb0741cea5d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddc847f43a29ea8b2eac6d727005268b1fa615cefbe6036d06fbeb0741cea5d0->enter($__internal_ddc847f43a29ea8b2eac6d727005268b1fa615cefbe6036d06fbeb0741cea5d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_3403590ada4b5752264ccf8ee125f3f9d99f1e3dd03857685dd2d83fb28ce093 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3403590ada4b5752264ccf8ee125f3f9d99f1e3dd03857685dd2d83fb28ce093->enter($__internal_3403590ada4b5752264ccf8ee125f3f9d99f1e3dd03857685dd2d83fb28ce093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

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
        
        $__internal_ddc847f43a29ea8b2eac6d727005268b1fa615cefbe6036d06fbeb0741cea5d0->leave($__internal_ddc847f43a29ea8b2eac6d727005268b1fa615cefbe6036d06fbeb0741cea5d0_prof);

        
        $__internal_3403590ada4b5752264ccf8ee125f3f9d99f1e3dd03857685dd2d83fb28ce093->leave($__internal_3403590ada4b5752264ccf8ee125f3f9d99f1e3dd03857685dd2d83fb28ce093_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
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
", "@Twig/Exception/error.txt.twig", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
