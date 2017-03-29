<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_8b1aae2fb57e4f050290a4ee33ffec4fd52bc7abe1f7ba4d6c0fff43468e1b09 extends Twig_Template
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
        $__internal_51d894599c4b3c8e7bc05f0c25522dfa44e3264b85dd8c30d45ee65bc4cca013 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51d894599c4b3c8e7bc05f0c25522dfa44e3264b85dd8c30d45ee65bc4cca013->enter($__internal_51d894599c4b3c8e7bc05f0c25522dfa44e3264b85dd8c30d45ee65bc4cca013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_923028f7650baae6b2ab81d1b4d7fdd5ff10f4daa32b3d6152fedcec917bc79b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_923028f7650baae6b2ab81d1b4d7fdd5ff10f4daa32b3d6152fedcec917bc79b->enter($__internal_923028f7650baae6b2ab81d1b4d7fdd5ff10f4daa32b3d6152fedcec917bc79b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

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
        
        $__internal_51d894599c4b3c8e7bc05f0c25522dfa44e3264b85dd8c30d45ee65bc4cca013->leave($__internal_51d894599c4b3c8e7bc05f0c25522dfa44e3264b85dd8c30d45ee65bc4cca013_prof);

        
        $__internal_923028f7650baae6b2ab81d1b4d7fdd5ff10f4daa32b3d6152fedcec917bc79b->leave($__internal_923028f7650baae6b2ab81d1b4d7fdd5ff10f4daa32b3d6152fedcec917bc79b_prof);

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
", "@Twig/Exception/error.txt.twig", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
