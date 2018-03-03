<?php

/* PageBundle:Default:onDevelopment.html.twig */
class __TwigTemplate_f8d93be66ce45fdc649c41f04a51c6ef32f621b1fd10920ee6c429adcd5b3869 extends Twig_Template
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
        $__internal_95cfc666d64029a0f0ddb3713b36062db7a512dc2d14cbf1bf16acbf0488fe2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95cfc666d64029a0f0ddb3713b36062db7a512dc2d14cbf1bf16acbf0488fe2f->enter($__internal_95cfc666d64029a0f0ddb3713b36062db7a512dc2d14cbf1bf16acbf0488fe2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:onDevelopment.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95cfc666d64029a0f0ddb3713b36062db7a512dc2d14cbf1bf16acbf0488fe2f->leave($__internal_95cfc666d64029a0f0ddb3713b36062db7a512dc2d14cbf1bf16acbf0488fe2f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1dd8c4b54e19f139e9e66d055a4dde9ce5af51909b44c55056d849345779cfd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dd8c4b54e19f139e9e66d055a4dde9ce5af51909b44c55056d849345779cfd4->enter($__internal_1dd8c4b54e19f139e9e66d055a4dde9ce5af51909b44c55056d849345779cfd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "On Development";
        
        $__internal_1dd8c4b54e19f139e9e66d055a4dde9ce5af51909b44c55056d849345779cfd4->leave($__internal_1dd8c4b54e19f139e9e66d055a4dde9ce5af51909b44c55056d849345779cfd4_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d5aa3d93b30884c18905c021635dfd3eb59afc16a334b34d6a1ae810a99a2a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d5aa3d93b30884c18905c021635dfd3eb59afc16a334b34d6a1ae810a99a2a2->enter($__internal_2d5aa3d93b30884c18905c021635dfd3eb59afc16a334b34d6a1ae810a99a2a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<main>
\t<center>
\t    <h2>
\t        <br/>Oooops...<br/>
\t        This page is under development....
\t    </h2>
    </center>
</main>
";
        
        $__internal_2d5aa3d93b30884c18905c021635dfd3eb59afc16a334b34d6a1ae810a99a2a2->leave($__internal_2d5aa3d93b30884c18905c021635dfd3eb59afc16a334b34d6a1ae810a99a2a2_prof);

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
\t    <h2>
\t        <br/>Oooops...<br/>
\t        This page is under development....
\t    </h2>
    </center>
</main>
{% endblock %}", "PageBundle:Default:onDevelopment.html.twig", "D:\\Carlos\\xampp\\htdocs\\crgc\\src\\PageBundle/Resources/views/Default/onDevelopment.html.twig");
    }
}
