<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_8452ba4208725e4a8bf9c9e33cbfea2a14ff2db072df63edd4221feadb7129b8 extends Twig_Template
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
        $__internal_17d02b89523a48cc3c3c0e0efcb8519f0068338c8c905f3f6b5fb918c5bae8e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17d02b89523a48cc3c3c0e0efcb8519f0068338c8c905f3f6b5fb918c5bae8e2->enter($__internal_17d02b89523a48cc3c3c0e0efcb8519f0068338c8c905f3f6b5fb918c5bae8e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_6e0d25569d51b2e8066427bf122d3bf6b2d67ebc442a0946c9ef030ab28529b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e0d25569d51b2e8066427bf122d3bf6b2d67ebc442a0946c9ef030ab28529b0->enter($__internal_6e0d25569d51b2e8066427bf122d3bf6b2d67ebc442a0946c9ef030ab28529b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_17d02b89523a48cc3c3c0e0efcb8519f0068338c8c905f3f6b5fb918c5bae8e2->leave($__internal_17d02b89523a48cc3c3c0e0efcb8519f0068338c8c905f3f6b5fb918c5bae8e2_prof);

        
        $__internal_6e0d25569d51b2e8066427bf122d3bf6b2d67ebc442a0946c9ef030ab28529b0->leave($__internal_6e0d25569d51b2e8066427bf122d3bf6b2d67ebc442a0946c9ef030ab28529b0_prof);

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
", "TwigBundle:Exception:error.css.twig", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
