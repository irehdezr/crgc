<?php

/* @Page/Default/error.html.twig */
class __TwigTemplate_29f379905773cdba31347631ceeeb9d39f116c49c03bd2d4cba9eb916a03a4ab extends Twig_Template
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
        $__internal_53ad8a9e03f73916e76aef7440293a1823c7316f40458533bf9e262d8f31834d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53ad8a9e03f73916e76aef7440293a1823c7316f40458533bf9e262d8f31834d->enter($__internal_53ad8a9e03f73916e76aef7440293a1823c7316f40458533bf9e262d8f31834d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Page/Default/error.html.twig"));

        $__internal_0b2948c4887ccc625d97bf793e50b4128e13fbbcbc6b486dba196e04bce636ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b2948c4887ccc625d97bf793e50b4128e13fbbcbc6b486dba196e04bce636ca->enter($__internal_0b2948c4887ccc625d97bf793e50b4128e13fbbcbc6b486dba196e04bce636ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Page/Default/error.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53ad8a9e03f73916e76aef7440293a1823c7316f40458533bf9e262d8f31834d->leave($__internal_53ad8a9e03f73916e76aef7440293a1823c7316f40458533bf9e262d8f31834d_prof);

        
        $__internal_0b2948c4887ccc625d97bf793e50b4128e13fbbcbc6b486dba196e04bce636ca->leave($__internal_0b2948c4887ccc625d97bf793e50b4128e13fbbcbc6b486dba196e04bce636ca_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_277fca8f4e1f7e27380e121d9d2ba41c03645953a5642d9e0b7693a6747ea622 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_277fca8f4e1f7e27380e121d9d2ba41c03645953a5642d9e0b7693a6747ea622->enter($__internal_277fca8f4e1f7e27380e121d9d2ba41c03645953a5642d9e0b7693a6747ea622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_047ead439f44e6592d2581c9c97df23be7a6f097925c6d7d137cba93387aa06c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_047ead439f44e6592d2581c9c97df23be7a6f097925c6d7d137cba93387aa06c->enter($__internal_047ead439f44e6592d2581c9c97df23be7a6f097925c6d7d137cba93387aa06c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Error";
        
        $__internal_047ead439f44e6592d2581c9c97df23be7a6f097925c6d7d137cba93387aa06c->leave($__internal_047ead439f44e6592d2581c9c97df23be7a6f097925c6d7d137cba93387aa06c_prof);

        
        $__internal_277fca8f4e1f7e27380e121d9d2ba41c03645953a5642d9e0b7693a6747ea622->leave($__internal_277fca8f4e1f7e27380e121d9d2ba41c03645953a5642d9e0b7693a6747ea622_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_7b743e08e4a0b795a83476aaf8c524c852c3c4c96f7494975d09b319a4e9fa21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b743e08e4a0b795a83476aaf8c524c852c3c4c96f7494975d09b319a4e9fa21->enter($__internal_7b743e08e4a0b795a83476aaf8c524c852c3c4c96f7494975d09b319a4e9fa21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b05e581c7bdc0a01c56aafa596ef2cd8264805f4f00ac750496b0fcd888ad104 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b05e581c7bdc0a01c56aafa596ef2cd8264805f4f00ac750496b0fcd888ad104->enter($__internal_b05e581c7bdc0a01c56aafa596ef2cd8264805f4f00ac750496b0fcd888ad104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b05e581c7bdc0a01c56aafa596ef2cd8264805f4f00ac750496b0fcd888ad104->leave($__internal_b05e581c7bdc0a01c56aafa596ef2cd8264805f4f00ac750496b0fcd888ad104_prof);

        
        $__internal_7b743e08e4a0b795a83476aaf8c524c852c3c4c96f7494975d09b319a4e9fa21->leave($__internal_7b743e08e4a0b795a83476aaf8c524c852c3c4c96f7494975d09b319a4e9fa21_prof);

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
{% endblock %}", "@Page/Default/error.html.twig", "C:\\xampp\\htdocs\\src\\PageBundle\\Resources\\views\\Default\\error.html.twig");
    }
}
