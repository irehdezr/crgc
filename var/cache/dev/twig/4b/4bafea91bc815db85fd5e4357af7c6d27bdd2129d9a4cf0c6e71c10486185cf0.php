<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_baed4214a337fdb063973f5a38d1e401230711f09872d384709d9f849b7b1104 extends Twig_Template
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
        $__internal_9c00767514618dd3721de8b1cb1b0899cbbedd059eab7d4f717df783d2c3f4c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c00767514618dd3721de8b1cb1b0899cbbedd059eab7d4f717df783d2c3f4c1->enter($__internal_9c00767514618dd3721de8b1cb1b0899cbbedd059eab7d4f717df783d2c3f4c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_eb796e84d0592283a526ccb977010fb27f5bcbc7c76078af5af6514779dd82ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb796e84d0592283a526ccb977010fb27f5bcbc7c76078af5af6514779dd82ed->enter($__internal_eb796e84d0592283a526ccb977010fb27f5bcbc7c76078af5af6514779dd82ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_9c00767514618dd3721de8b1cb1b0899cbbedd059eab7d4f717df783d2c3f4c1->leave($__internal_9c00767514618dd3721de8b1cb1b0899cbbedd059eab7d4f717df783d2c3f4c1_prof);

        
        $__internal_eb796e84d0592283a526ccb977010fb27f5bcbc7c76078af5af6514779dd82ed->leave($__internal_eb796e84d0592283a526ccb977010fb27f5bcbc7c76078af5af6514779dd82ed_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
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
", "TwigBundle:Exception:error.xml.twig", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
