<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_35912a3550fc1a9c9c0d78cd2e3b871fc83ab2fa9270ddb074552db4d82af4b9 extends Twig_Template
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
        $__internal_2c7986bfde93e418f13ed14bc6d50505ad05d008634158f7e62599e61287e121 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c7986bfde93e418f13ed14bc6d50505ad05d008634158f7e62599e61287e121->enter($__internal_2c7986bfde93e418f13ed14bc6d50505ad05d008634158f7e62599e61287e121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_8ee2d3faf4fd3ff77c6784c498acf5e17843e1774070333f333bf7be6e931925 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ee2d3faf4fd3ff77c6784c498acf5e17843e1774070333f333bf7be6e931925->enter($__internal_8ee2d3faf4fd3ff77c6784c498acf5e17843e1774070333f333bf7be6e931925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_2c7986bfde93e418f13ed14bc6d50505ad05d008634158f7e62599e61287e121->leave($__internal_2c7986bfde93e418f13ed14bc6d50505ad05d008634158f7e62599e61287e121_prof);

        
        $__internal_8ee2d3faf4fd3ff77c6784c498acf5e17843e1774070333f333bf7be6e931925->leave($__internal_8ee2d3faf4fd3ff77c6784c498acf5e17843e1774070333f333bf7be6e931925_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
