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
        $__internal_3b5d98a5593207a09c9638322ee9cd21414aa340571074abc1caf69066d21325 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b5d98a5593207a09c9638322ee9cd21414aa340571074abc1caf69066d21325->enter($__internal_3b5d98a5593207a09c9638322ee9cd21414aa340571074abc1caf69066d21325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_75d341f874b71f4ee90103aab221c8a6db99f9116b5bef885b02e112ef423d6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75d341f874b71f4ee90103aab221c8a6db99f9116b5bef885b02e112ef423d6a->enter($__internal_75d341f874b71f4ee90103aab221c8a6db99f9116b5bef885b02e112ef423d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_3b5d98a5593207a09c9638322ee9cd21414aa340571074abc1caf69066d21325->leave($__internal_3b5d98a5593207a09c9638322ee9cd21414aa340571074abc1caf69066d21325_prof);

        
        $__internal_75d341f874b71f4ee90103aab221c8a6db99f9116b5bef885b02e112ef423d6a->leave($__internal_75d341f874b71f4ee90103aab221c8a6db99f9116b5bef885b02e112ef423d6a_prof);

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
