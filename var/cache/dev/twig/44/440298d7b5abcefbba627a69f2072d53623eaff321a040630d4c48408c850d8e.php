<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_a096a32f1923cddfdae39df3ad105437b0ed6105bd9361719df0f8c8ef935dce extends Twig_Template
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
        $__internal_659328a3e2f91643a61cab75711d2c36d1d6a5d96230da7880753aed471fc705 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_659328a3e2f91643a61cab75711d2c36d1d6a5d96230da7880753aed471fc705->enter($__internal_659328a3e2f91643a61cab75711d2c36d1d6a5d96230da7880753aed471fc705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_1280b78dd227de570bc14cb1b1838cb38eac01729d42a0dc99a484fcb40f0e3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1280b78dd227de570bc14cb1b1838cb38eac01729d42a0dc99a484fcb40f0e3b->enter($__internal_1280b78dd227de570bc14cb1b1838cb38eac01729d42a0dc99a484fcb40f0e3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_659328a3e2f91643a61cab75711d2c36d1d6a5d96230da7880753aed471fc705->leave($__internal_659328a3e2f91643a61cab75711d2c36d1d6a5d96230da7880753aed471fc705_prof);

        
        $__internal_1280b78dd227de570bc14cb1b1838cb38eac01729d42a0dc99a484fcb40f0e3b->leave($__internal_1280b78dd227de570bc14cb1b1838cb38eac01729d42a0dc99a484fcb40f0e3b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
