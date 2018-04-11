<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_cde626001a5acb33f683cb205ab3387c725323f3b871048db105544edf042b99 extends Twig_Template
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
        $__internal_72e9925fa71eb679574ffc21fecc5aab8017e40730984236a870fe2dcadb9fca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72e9925fa71eb679574ffc21fecc5aab8017e40730984236a870fe2dcadb9fca->enter($__internal_72e9925fa71eb679574ffc21fecc5aab8017e40730984236a870fe2dcadb9fca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_66c74781ff0512161b5c0aa40bb4a407fc508c7a3985996b0a2d236407a66d57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66c74781ff0512161b5c0aa40bb4a407fc508c7a3985996b0a2d236407a66d57->enter($__internal_66c74781ff0512161b5c0aa40bb4a407fc508c7a3985996b0a2d236407a66d57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_72e9925fa71eb679574ffc21fecc5aab8017e40730984236a870fe2dcadb9fca->leave($__internal_72e9925fa71eb679574ffc21fecc5aab8017e40730984236a870fe2dcadb9fca_prof);

        
        $__internal_66c74781ff0512161b5c0aa40bb4a407fc508c7a3985996b0a2d236407a66d57->leave($__internal_66c74781ff0512161b5c0aa40bb4a407fc508c7a3985996b0a2d236407a66d57_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
