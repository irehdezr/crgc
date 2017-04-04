<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_6ae51622c3201d09e1a8eb5c52970b4976531790478481e2d81ece05604328a4 extends Twig_Template
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
        $__internal_e7d280e17ec30c818f55285d88b49d579c7cbe14aeecd4cb29366af415f6b496 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7d280e17ec30c818f55285d88b49d579c7cbe14aeecd4cb29366af415f6b496->enter($__internal_e7d280e17ec30c818f55285d88b49d579c7cbe14aeecd4cb29366af415f6b496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_574d7f5c6d7d3fb64f437a44531f9cc1e3eed0358628aa39a86ca86305145a11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_574d7f5c6d7d3fb64f437a44531f9cc1e3eed0358628aa39a86ca86305145a11->enter($__internal_574d7f5c6d7d3fb64f437a44531f9cc1e3eed0358628aa39a86ca86305145a11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_e7d280e17ec30c818f55285d88b49d579c7cbe14aeecd4cb29366af415f6b496->leave($__internal_e7d280e17ec30c818f55285d88b49d579c7cbe14aeecd4cb29366af415f6b496_prof);

        
        $__internal_574d7f5c6d7d3fb64f437a44531f9cc1e3eed0358628aa39a86ca86305145a11->leave($__internal_574d7f5c6d7d3fb64f437a44531f9cc1e3eed0358628aa39a86ca86305145a11_prof);

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
", "TwigBundle:Exception:error.atom.twig", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
