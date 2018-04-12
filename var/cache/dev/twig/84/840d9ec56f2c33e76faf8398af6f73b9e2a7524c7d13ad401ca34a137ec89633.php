<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_f9ba31a8d348f3b0d10a53bcfe9b9d5a412357ae275619cf49c648815c0ba1d1 extends Twig_Template
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
        $__internal_2bea314b6d3832fa0589eb9ddb018652850b365c8167b2c125d0f1eb465a546d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bea314b6d3832fa0589eb9ddb018652850b365c8167b2c125d0f1eb465a546d->enter($__internal_2bea314b6d3832fa0589eb9ddb018652850b365c8167b2c125d0f1eb465a546d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_996fb2961b7d420b9efec296316ef04bc11f380bbea18f1ca1e39544b99a77bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_996fb2961b7d420b9efec296316ef04bc11f380bbea18f1ca1e39544b99a77bb->enter($__internal_996fb2961b7d420b9efec296316ef04bc11f380bbea18f1ca1e39544b99a77bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_2bea314b6d3832fa0589eb9ddb018652850b365c8167b2c125d0f1eb465a546d->leave($__internal_2bea314b6d3832fa0589eb9ddb018652850b365c8167b2c125d0f1eb465a546d_prof);

        
        $__internal_996fb2961b7d420b9efec296316ef04bc11f380bbea18f1ca1e39544b99a77bb->leave($__internal_996fb2961b7d420b9efec296316ef04bc11f380bbea18f1ca1e39544b99a77bb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
", "@Twig/Exception/error.css.twig", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
