<?php

/* PageBundle:Default:onDevelopment.html.twig */
class __TwigTemplate_96533bd90de4733935f8b22692c408bf9765f13ae812d6a47e79b78b2ccf12f4 extends Twig_Template
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
        $__internal_f97924c29c88ea95061785b43484416c28ae7dcfe53e9531da1feb27a1a3295b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f97924c29c88ea95061785b43484416c28ae7dcfe53e9531da1feb27a1a3295b->enter($__internal_f97924c29c88ea95061785b43484416c28ae7dcfe53e9531da1feb27a1a3295b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:onDevelopment.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f97924c29c88ea95061785b43484416c28ae7dcfe53e9531da1feb27a1a3295b->leave($__internal_f97924c29c88ea95061785b43484416c28ae7dcfe53e9531da1feb27a1a3295b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b292439a0b748e92ad704d92900b182d9b741fbfebde132edd23c70351a318e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b292439a0b748e92ad704d92900b182d9b741fbfebde132edd23c70351a318e0->enter($__internal_b292439a0b748e92ad704d92900b182d9b741fbfebde132edd23c70351a318e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CR Gourmet Coffee";
        
        $__internal_b292439a0b748e92ad704d92900b182d9b741fbfebde132edd23c70351a318e0->leave($__internal_b292439a0b748e92ad704d92900b182d9b741fbfebde132edd23c70351a318e0_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_d24be41e91fde1a167fe72dad9aa090f3974574271b6bd0e84bfcc6c43e1ff81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d24be41e91fde1a167fe72dad9aa090f3974574271b6bd0e84bfcc6c43e1ff81->enter($__internal_d24be41e91fde1a167fe72dad9aa090f3974574271b6bd0e84bfcc6c43e1ff81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<main>
<div class='container'>
\t<center>
\t    <h2 class=\"center-block jumbotron \">
\t        <br/>Oooops...<br/>
\t        This page is under development....
\t    </h2>
    </center>
</div>
</main>
";
        
        $__internal_d24be41e91fde1a167fe72dad9aa090f3974574271b6bd0e84bfcc6c43e1ff81->leave($__internal_d24be41e91fde1a167fe72dad9aa090f3974574271b6bd0e84bfcc6c43e1ff81_prof);

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

{% block title%}CR Gourmet Coffee{% endblock %}
{% block body %}
<main>
<div class='container'>
\t<center>
\t    <h2 class=\"center-block jumbotron \">
\t        <br/>Oooops...<br/>
\t        This page is under development....
\t    </h2>
    </center>
</div>
</main>
{% endblock %}", "PageBundle:Default:onDevelopment.html.twig", "/home/crgourme/public_html/src/PageBundle/Resources/views/Default/onDevelopment.html.twig");
    }
}
