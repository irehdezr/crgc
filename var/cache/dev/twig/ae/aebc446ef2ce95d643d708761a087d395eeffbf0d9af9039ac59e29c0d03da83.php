<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_19ebc7de69ef2fa012dfd854bab92cef4d740305c46e23f80d22ad0664739449 extends Twig_Template
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
        $__internal_8b60ccc404a922de3ed9533e561d685a4ea60c58c96017e6539ab05992778c70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b60ccc404a922de3ed9533e561d685a4ea60c58c96017e6539ab05992778c70->enter($__internal_8b60ccc404a922de3ed9533e561d685a4ea60c58c96017e6539ab05992778c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_e07ec844e6f45dab1bda5acfe9e14c1bda373329fdbe69e53325cc4d77a170d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e07ec844e6f45dab1bda5acfe9e14c1bda373329fdbe69e53325cc4d77a170d5->enter($__internal_e07ec844e6f45dab1bda5acfe9e14c1bda373329fdbe69e53325cc4d77a170d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_8b60ccc404a922de3ed9533e561d685a4ea60c58c96017e6539ab05992778c70->leave($__internal_8b60ccc404a922de3ed9533e561d685a4ea60c58c96017e6539ab05992778c70_prof);

        
        $__internal_e07ec844e6f45dab1bda5acfe9e14c1bda373329fdbe69e53325cc4d77a170d5->leave($__internal_e07ec844e6f45dab1bda5acfe9e14c1bda373329fdbe69e53325cc4d77a170d5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
