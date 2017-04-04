<?php

/* PageBundle:Default:onDevelopment.html.twig */
class __TwigTemplate_bfcbc58aadc6d0e24c54140f375d268108dec50ebb148a3c9a5eacca4a15d6dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "PageBundle:Default:onDevelopment.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3296a7c173e224c1b3898afd4f34167acdded0593fcb5835e87f5cbb7f093fd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3296a7c173e224c1b3898afd4f34167acdded0593fcb5835e87f5cbb7f093fd0->enter($__internal_3296a7c173e224c1b3898afd4f34167acdded0593fcb5835e87f5cbb7f093fd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:onDevelopment.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3296a7c173e224c1b3898afd4f34167acdded0593fcb5835e87f5cbb7f093fd0->leave($__internal_3296a7c173e224c1b3898afd4f34167acdded0593fcb5835e87f5cbb7f093fd0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cd3a83062f774db0d85518ab8773907556344a70d8b181a5fbafd47df8464094 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd3a83062f774db0d85518ab8773907556344a70d8b181a5fbafd47df8464094->enter($__internal_cd3a83062f774db0d85518ab8773907556344a70d8b181a5fbafd47df8464094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "On Development";
        
        $__internal_cd3a83062f774db0d85518ab8773907556344a70d8b181a5fbafd47df8464094->leave($__internal_cd3a83062f774db0d85518ab8773907556344a70d8b181a5fbafd47df8464094_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_cfcf4d9b54558b32a7150f5a132dd502b8e31ce7dce159d3757415c2777d65b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfcf4d9b54558b32a7150f5a132dd502b8e31ce7dce159d3757415c2777d65b1->enter($__internal_cfcf4d9b54558b32a7150f5a132dd502b8e31ce7dce159d3757415c2777d65b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<main>
\t<center>
\t    <h2 class=\"center-block\">
\t        <br/>Oooops...<br/>
\t        This page is under development....
\t    </h2>
    </center>
</main>
";
        
        $__internal_cfcf4d9b54558b32a7150f5a132dd502b8e31ce7dce159d3757415c2777d65b1->leave($__internal_cfcf4d9b54558b32a7150f5a132dd502b8e31ce7dce159d3757415c2777d65b1_prof);

    }

    public function getTemplateName()
    {
        return "PageBundle:Default:onDevelopment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 5,  47 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}

{% block title%}On Development{% endblock %}
{% block body %}
<main>
\t<center>
\t    <h2 class=\"center-block\">
\t        <br/>Oooops...<br/>
\t        This page is under development....
\t    </h2>
    </center>
</main>
{% endblock %}", "PageBundle:Default:onDevelopment.html.twig", "C:\\xampp\\htdocs\\src\\PageBundle/Resources/views/Default/onDevelopment.html.twig");
    }
}
