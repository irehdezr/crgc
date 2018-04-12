<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_2b0818b5a0a99f2ac8798857a49eb97d8454ac0c4afa363b4a2f2d5d73960ce3 extends Twig_Template
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
        $__internal_6f759a6d0ebde4969b503b1b56c6dd1820192eca94e527670a81ea22d2e7c1de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f759a6d0ebde4969b503b1b56c6dd1820192eca94e527670a81ea22d2e7c1de->enter($__internal_6f759a6d0ebde4969b503b1b56c6dd1820192eca94e527670a81ea22d2e7c1de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_db7a7b491352ef9910c1666c116b6282039948b7fcb72cdb23147ba790904b7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db7a7b491352ef9910c1666c116b6282039948b7fcb72cdb23147ba790904b7c->enter($__internal_db7a7b491352ef9910c1666c116b6282039948b7fcb72cdb23147ba790904b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_6f759a6d0ebde4969b503b1b56c6dd1820192eca94e527670a81ea22d2e7c1de->leave($__internal_6f759a6d0ebde4969b503b1b56c6dd1820192eca94e527670a81ea22d2e7c1de_prof);

        
        $__internal_db7a7b491352ef9910c1666c116b6282039948b7fcb72cdb23147ba790904b7c->leave($__internal_db7a7b491352ef9910c1666c116b6282039948b7fcb72cdb23147ba790904b7c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
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
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.css.twig", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
