<?php

/* ProductBundle:Default:index.html.twig */
class __TwigTemplate_c2f60a0dae9948b1b425c75c02f54624a6a47e1083c9d51b7e467d550854f258 extends Twig_Template
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
        $__internal_1acd5ff5461024b8c04beb1802c57c09c22bd7bc835a534f933312b0b0339a9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1acd5ff5461024b8c04beb1802c57c09c22bd7bc835a534f933312b0b0339a9a->enter($__internal_1acd5ff5461024b8c04beb1802c57c09c22bd7bc835a534f933312b0b0339a9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProductBundle:Default:index.html.twig"));

        $__internal_e87405caff0a4a0828ea349accb31098cfffb8e34fc7483de7de2cd3f9ca55f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e87405caff0a4a0828ea349accb31098cfffb8e34fc7483de7de2cd3f9ca55f9->enter($__internal_e87405caff0a4a0828ea349accb31098cfffb8e34fc7483de7de2cd3f9ca55f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProductBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_1acd5ff5461024b8c04beb1802c57c09c22bd7bc835a534f933312b0b0339a9a->leave($__internal_1acd5ff5461024b8c04beb1802c57c09c22bd7bc835a534f933312b0b0339a9a_prof);

        
        $__internal_e87405caff0a4a0828ea349accb31098cfffb8e34fc7483de7de2cd3f9ca55f9->leave($__internal_e87405caff0a4a0828ea349accb31098cfffb8e34fc7483de7de2cd3f9ca55f9_prof);

    }

    public function getTemplateName()
    {
        return "ProductBundle:Default:index.html.twig";
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
        return new Twig_Source("Hello World!
", "ProductBundle:Default:index.html.twig", "C:\\xampp\\htdocs\\src\\ProductBundle/Resources/views/Default/index.html.twig");
    }
}
