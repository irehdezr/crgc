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
        $__internal_23d5b1c11c0de6a9f5945683ba18d45f7f0b9a33c0b054d0e4556c61a5f08d2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23d5b1c11c0de6a9f5945683ba18d45f7f0b9a33c0b054d0e4556c61a5f08d2c->enter($__internal_23d5b1c11c0de6a9f5945683ba18d45f7f0b9a33c0b054d0e4556c61a5f08d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_19688be310eaf3e187a9daa96b910c42c7f1e97886204d44d720885fe2d3957e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19688be310eaf3e187a9daa96b910c42c7f1e97886204d44d720885fe2d3957e->enter($__internal_19688be310eaf3e187a9daa96b910c42c7f1e97886204d44d720885fe2d3957e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

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
        
        $__internal_23d5b1c11c0de6a9f5945683ba18d45f7f0b9a33c0b054d0e4556c61a5f08d2c->leave($__internal_23d5b1c11c0de6a9f5945683ba18d45f7f0b9a33c0b054d0e4556c61a5f08d2c_prof);

        
        $__internal_19688be310eaf3e187a9daa96b910c42c7f1e97886204d44d720885fe2d3957e->leave($__internal_19688be310eaf3e187a9daa96b910c42c7f1e97886204d44d720885fe2d3957e_prof);

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
