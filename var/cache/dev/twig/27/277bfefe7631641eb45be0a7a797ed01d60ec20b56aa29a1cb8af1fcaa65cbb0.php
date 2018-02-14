<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_dc6ad8167368cd5613711f2c19bbb9b6b4c79b9733998cc918474e94771f9ccf extends Twig_Template
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
        $__internal_fc48723a29731034c77593e039594e85ca4466320dd86a777e4014529ec04efa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc48723a29731034c77593e039594e85ca4466320dd86a777e4014529ec04efa->enter($__internal_fc48723a29731034c77593e039594e85ca4466320dd86a777e4014529ec04efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_cadbdff1a08ba6c2d1b7b54c2c389fea6a5ad3e4628a6445d12dbc26f70a0d1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cadbdff1a08ba6c2d1b7b54c2c389fea6a5ad3e4628a6445d12dbc26f70a0d1e->enter($__internal_cadbdff1a08ba6c2d1b7b54c2c389fea6a5ad3e4628a6445d12dbc26f70a0d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

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
        
        $__internal_fc48723a29731034c77593e039594e85ca4466320dd86a777e4014529ec04efa->leave($__internal_fc48723a29731034c77593e039594e85ca4466320dd86a777e4014529ec04efa_prof);

        
        $__internal_cadbdff1a08ba6c2d1b7b54c2c389fea6a5ad3e4628a6445d12dbc26f70a0d1e->leave($__internal_cadbdff1a08ba6c2d1b7b54c2c389fea6a5ad3e4628a6445d12dbc26f70a0d1e_prof);

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
", "@Twig/Exception/error.xml.twig", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
