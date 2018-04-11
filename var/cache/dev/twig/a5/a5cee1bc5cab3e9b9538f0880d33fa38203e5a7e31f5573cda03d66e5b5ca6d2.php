<?php

/* @Page/Default/error.html.twig */
class __TwigTemplate_28e162d0c8b68a8e5d65afa41da397bed25baa7ab1dc30b7e04b7f44a765caea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "@Page/Default/error.html.twig", 1);
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
        $__internal_fff221868f1cd2ae13834e9444ad33cf0b06c259115c327e4056f1fd3dd8915d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fff221868f1cd2ae13834e9444ad33cf0b06c259115c327e4056f1fd3dd8915d->enter($__internal_fff221868f1cd2ae13834e9444ad33cf0b06c259115c327e4056f1fd3dd8915d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Page/Default/error.html.twig"));

        $__internal_0048e1e4ae47059a07b18c68a4bfd11c25a21b09045c91fce7ebef77e2afcbe4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0048e1e4ae47059a07b18c68a4bfd11c25a21b09045c91fce7ebef77e2afcbe4->enter($__internal_0048e1e4ae47059a07b18c68a4bfd11c25a21b09045c91fce7ebef77e2afcbe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Page/Default/error.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fff221868f1cd2ae13834e9444ad33cf0b06c259115c327e4056f1fd3dd8915d->leave($__internal_fff221868f1cd2ae13834e9444ad33cf0b06c259115c327e4056f1fd3dd8915d_prof);

        
        $__internal_0048e1e4ae47059a07b18c68a4bfd11c25a21b09045c91fce7ebef77e2afcbe4->leave($__internal_0048e1e4ae47059a07b18c68a4bfd11c25a21b09045c91fce7ebef77e2afcbe4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fe46fbac502cf1ce08db7d1257e52d1694142651b742ff2db3f79ea3b78dfa20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe46fbac502cf1ce08db7d1257e52d1694142651b742ff2db3f79ea3b78dfa20->enter($__internal_fe46fbac502cf1ce08db7d1257e52d1694142651b742ff2db3f79ea3b78dfa20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_40b6ffe8c292d7858fdca692956e716a831e3a59944ea4d68e8cf00d446967af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40b6ffe8c292d7858fdca692956e716a831e3a59944ea4d68e8cf00d446967af->enter($__internal_40b6ffe8c292d7858fdca692956e716a831e3a59944ea4d68e8cf00d446967af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Error";
        
        $__internal_40b6ffe8c292d7858fdca692956e716a831e3a59944ea4d68e8cf00d446967af->leave($__internal_40b6ffe8c292d7858fdca692956e716a831e3a59944ea4d68e8cf00d446967af_prof);

        
        $__internal_fe46fbac502cf1ce08db7d1257e52d1694142651b742ff2db3f79ea3b78dfa20->leave($__internal_fe46fbac502cf1ce08db7d1257e52d1694142651b742ff2db3f79ea3b78dfa20_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_84b74b45c0d84e3e061826a609c96f46e2f2c6f8f12940a0462f9254208e407b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84b74b45c0d84e3e061826a609c96f46e2f2c6f8f12940a0462f9254208e407b->enter($__internal_84b74b45c0d84e3e061826a609c96f46e2f2c6f8f12940a0462f9254208e407b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8ada8b9122c7be1158d39ee910e140a33f66755d316446825f3b7c6df73d85ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ada8b9122c7be1158d39ee910e140a33f66755d316446825f3b7c6df73d85ab->enter($__internal_8ada8b9122c7be1158d39ee910e140a33f66755d316446825f3b7c6df73d85ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<main>
\t<center>
\t    <h2 class=\"center-block\">
\t        <br/>Oooops...<br/>
\t        This page doesn't exist please try another page or go <a href=\" ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_homepage", array("page" => "home"));
        echo "\">Home</a>
\t    </h2>
    </center>
</main>
";
        
        $__internal_8ada8b9122c7be1158d39ee910e140a33f66755d316446825f3b7c6df73d85ab->leave($__internal_8ada8b9122c7be1158d39ee910e140a33f66755d316446825f3b7c6df73d85ab_prof);

        
        $__internal_84b74b45c0d84e3e061826a609c96f46e2f2c6f8f12940a0462f9254208e407b->leave($__internal_84b74b45c0d84e3e061826a609c96f46e2f2c6f8f12940a0462f9254208e407b_prof);

    }

    public function getTemplateName()
    {
        return "@Page/Default/error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 9,  68 => 5,  59 => 4,  41 => 3,  11 => 1,);
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

{% block title%}Error{% endblock %}
{% block body %}
<main>
\t<center>
\t    <h2 class=\"center-block\">
\t        <br/>Oooops...<br/>
\t        This page doesn't exist please try another page or go <a href=\" {{ path('page_homepage', {'page': 'home' }) }}\">Home</a>
\t    </h2>
    </center>
</main>
{% endblock %}", "@Page/Default/error.html.twig", "C:\\xampp\\htdocs\\crgc\\src\\PageBundle\\Resources\\views\\Default\\error.html.twig");
    }
}
