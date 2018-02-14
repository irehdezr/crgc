<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_720543b4fbce9983c9776e1985703fa7cdc3ae704467fa4bef40c11afc118a14 extends Twig_Template
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
        $__internal_1935045b07dbadaf984c3dcb6471017931b74c43f4ff6912691b6834c59dafa0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1935045b07dbadaf984c3dcb6471017931b74c43f4ff6912691b6834c59dafa0->enter($__internal_1935045b07dbadaf984c3dcb6471017931b74c43f4ff6912691b6834c59dafa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_f6a1ab523a6f8f84bd37c9b478377e3083c7361d48a9c35839d7764a7e794886 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6a1ab523a6f8f84bd37c9b478377e3083c7361d48a9c35839d7764a7e794886->enter($__internal_f6a1ab523a6f8f84bd37c9b478377e3083c7361d48a9c35839d7764a7e794886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_1935045b07dbadaf984c3dcb6471017931b74c43f4ff6912691b6834c59dafa0->leave($__internal_1935045b07dbadaf984c3dcb6471017931b74c43f4ff6912691b6834c59dafa0_prof);

        
        $__internal_f6a1ab523a6f8f84bd37c9b478377e3083c7361d48a9c35839d7764a7e794886->leave($__internal_f6a1ab523a6f8f84bd37c9b478377e3083c7361d48a9c35839d7764a7e794886_prof);

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
", "TwigBundle:Exception:error.js.twig", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
