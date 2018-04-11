<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_5df74de392d6ad3fe920ff4270cd90f4c6ea6f9ed63bae8141e55e47b72445a0 extends Twig_Template
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
        $__internal_d490bcf653032395e2627a3a94314d15231ef4862468dccb81dde6c37ec22bb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d490bcf653032395e2627a3a94314d15231ef4862468dccb81dde6c37ec22bb7->enter($__internal_d490bcf653032395e2627a3a94314d15231ef4862468dccb81dde6c37ec22bb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_dfbcb1858bae46df40fbc1f97d1373b14e0268b451e45d7aa85410488fe555b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfbcb1858bae46df40fbc1f97d1373b14e0268b451e45d7aa85410488fe555b4->enter($__internal_dfbcb1858bae46df40fbc1f97d1373b14e0268b451e45d7aa85410488fe555b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_d490bcf653032395e2627a3a94314d15231ef4862468dccb81dde6c37ec22bb7->leave($__internal_d490bcf653032395e2627a3a94314d15231ef4862468dccb81dde6c37ec22bb7_prof);

        
        $__internal_dfbcb1858bae46df40fbc1f97d1373b14e0268b451e45d7aa85410488fe555b4->leave($__internal_dfbcb1858bae46df40fbc1f97d1373b14e0268b451e45d7aa85410488fe555b4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.atom.twig", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
