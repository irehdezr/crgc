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
        $__internal_d8c4288dbdfe1182af59d2662e3a01fa463b24a44da055941866bd23986392f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8c4288dbdfe1182af59d2662e3a01fa463b24a44da055941866bd23986392f9->enter($__internal_d8c4288dbdfe1182af59d2662e3a01fa463b24a44da055941866bd23986392f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_32f64cebfbda29977f9ad2b427c35f93c25fee07a641953fa336bd93bb179b3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32f64cebfbda29977f9ad2b427c35f93c25fee07a641953fa336bd93bb179b3b->enter($__internal_32f64cebfbda29977f9ad2b427c35f93c25fee07a641953fa336bd93bb179b3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

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
        
        $__internal_d8c4288dbdfe1182af59d2662e3a01fa463b24a44da055941866bd23986392f9->leave($__internal_d8c4288dbdfe1182af59d2662e3a01fa463b24a44da055941866bd23986392f9_prof);

        
        $__internal_32f64cebfbda29977f9ad2b427c35f93c25fee07a641953fa336bd93bb179b3b->leave($__internal_32f64cebfbda29977f9ad2b427c35f93c25fee07a641953fa336bd93bb179b3b_prof);

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
