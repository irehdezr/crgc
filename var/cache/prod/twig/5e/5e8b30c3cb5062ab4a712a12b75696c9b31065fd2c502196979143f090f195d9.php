<?php

/* PageBundle:Default:error.html.twig */
class __TwigTemplate_dd9f121c0a2330bacada8706e008b952c446c00d27a097c46d18ac30b16aad76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "PageBundle:Default:error.html.twig", 1);
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
        $__internal_f83e6ab8d392957203fb4bd79f2e3cfe83e3b764ecbffd39fde46893983d0edb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f83e6ab8d392957203fb4bd79f2e3cfe83e3b764ecbffd39fde46893983d0edb->enter($__internal_f83e6ab8d392957203fb4bd79f2e3cfe83e3b764ecbffd39fde46893983d0edb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:error.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f83e6ab8d392957203fb4bd79f2e3cfe83e3b764ecbffd39fde46893983d0edb->leave($__internal_f83e6ab8d392957203fb4bd79f2e3cfe83e3b764ecbffd39fde46893983d0edb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_70250c1f351240fdb1a3b9c81f0fe8f99ad5a498f4f43aee8a6d2530b387ddbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70250c1f351240fdb1a3b9c81f0fe8f99ad5a498f4f43aee8a6d2530b387ddbd->enter($__internal_70250c1f351240fdb1a3b9c81f0fe8f99ad5a498f4f43aee8a6d2530b387ddbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Error";
        
        $__internal_70250c1f351240fdb1a3b9c81f0fe8f99ad5a498f4f43aee8a6d2530b387ddbd->leave($__internal_70250c1f351240fdb1a3b9c81f0fe8f99ad5a498f4f43aee8a6d2530b387ddbd_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_241c8b982ce5e4e9466e6739457d72e5860ca2e15686d72968ba3f431d04f2e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_241c8b982ce5e4e9466e6739457d72e5860ca2e15686d72968ba3f431d04f2e6->enter($__internal_241c8b982ce5e4e9466e6739457d72e5860ca2e15686d72968ba3f431d04f2e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_241c8b982ce5e4e9466e6739457d72e5860ca2e15686d72968ba3f431d04f2e6->leave($__internal_241c8b982ce5e4e9466e6739457d72e5860ca2e15686d72968ba3f431d04f2e6_prof);

    }

    public function getTemplateName()
    {
        return "PageBundle:Default:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 9,  53 => 5,  47 => 4,  35 => 3,  11 => 1,);
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
{% endblock %}", "PageBundle:Default:error.html.twig", "D:\\Programacion\\xampp\\htdocs\\crgc\\src\\PageBundle/Resources/views/Default/error.html.twig");
    }
}
