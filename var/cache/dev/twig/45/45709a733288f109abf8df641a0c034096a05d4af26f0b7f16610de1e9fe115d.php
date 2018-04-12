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
        $__internal_126be7de638403c8b73f9ef93497ec2cb742e14f47590af6f246efb520a29c6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_126be7de638403c8b73f9ef93497ec2cb742e14f47590af6f246efb520a29c6a->enter($__internal_126be7de638403c8b73f9ef93497ec2cb742e14f47590af6f246efb520a29c6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_ab40e71195b855908402144a56a002fcda9779c746db0d24dbf953e0028d3f2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab40e71195b855908402144a56a002fcda9779c746db0d24dbf953e0028d3f2f->enter($__internal_ab40e71195b855908402144a56a002fcda9779c746db0d24dbf953e0028d3f2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

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
        
        $__internal_126be7de638403c8b73f9ef93497ec2cb742e14f47590af6f246efb520a29c6a->leave($__internal_126be7de638403c8b73f9ef93497ec2cb742e14f47590af6f246efb520a29c6a_prof);

        
        $__internal_ab40e71195b855908402144a56a002fcda9779c746db0d24dbf953e0028d3f2f->leave($__internal_ab40e71195b855908402144a56a002fcda9779c746db0d24dbf953e0028d3f2f_prof);

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
