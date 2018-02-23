<?php

/* PageBundle:Default:onDevelopment.html.twig */
class __TwigTemplate_34d2189744bd99ff61164d5e0e3110bf80c32881e00ea4ba4560ac3b62c4ba43 extends Twig_Template
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
        $__internal_b043075744480be408baea175e5a3ef0b89148f275ce554a3ec65f3d59de954e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b043075744480be408baea175e5a3ef0b89148f275ce554a3ec65f3d59de954e->enter($__internal_b043075744480be408baea175e5a3ef0b89148f275ce554a3ec65f3d59de954e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:onDevelopment.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b043075744480be408baea175e5a3ef0b89148f275ce554a3ec65f3d59de954e->leave($__internal_b043075744480be408baea175e5a3ef0b89148f275ce554a3ec65f3d59de954e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_44cee1ba3f7424ac99445a34c9c27df1b2a66410d5450c284c4d5216098bc3ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44cee1ba3f7424ac99445a34c9c27df1b2a66410d5450c284c4d5216098bc3ab->enter($__internal_44cee1ba3f7424ac99445a34c9c27df1b2a66410d5450c284c4d5216098bc3ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "On Development";
        
        $__internal_44cee1ba3f7424ac99445a34c9c27df1b2a66410d5450c284c4d5216098bc3ab->leave($__internal_44cee1ba3f7424ac99445a34c9c27df1b2a66410d5450c284c4d5216098bc3ab_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_d7814fd5105d122230667a1b1e48889f5268b4aab97145a98ad330098a7881ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7814fd5105d122230667a1b1e48889f5268b4aab97145a98ad330098a7881ab->enter($__internal_d7814fd5105d122230667a1b1e48889f5268b4aab97145a98ad330098a7881ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d7814fd5105d122230667a1b1e48889f5268b4aab97145a98ad330098a7881ab->leave($__internal_d7814fd5105d122230667a1b1e48889f5268b4aab97145a98ad330098a7881ab_prof);

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
{% endblock %}", "PageBundle:Default:onDevelopment.html.twig", "/home/crgourme/public_html/src/PageBundle/Resources/views/Default/onDevelopment.html.twig");
    }
}
