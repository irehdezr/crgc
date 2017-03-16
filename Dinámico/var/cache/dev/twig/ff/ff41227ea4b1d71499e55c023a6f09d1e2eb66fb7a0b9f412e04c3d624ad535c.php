<?php

/* PageBundle:Default:error.html.twig */
class __TwigTemplate_3dd7a744e2b8af86d31f6992419f548618d84678b6e9405e828008406845bc49 extends Twig_Template
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
        $__internal_81b25ad74a2a916b362291fcdcfa5f1b9a338dedc935db51377a8f8ab116092b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81b25ad74a2a916b362291fcdcfa5f1b9a338dedc935db51377a8f8ab116092b->enter($__internal_81b25ad74a2a916b362291fcdcfa5f1b9a338dedc935db51377a8f8ab116092b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:error.html.twig"));

        $__internal_ace1f3f92fab3ee525ea8f2a7d701708d7d28cc974c08fa713bb7b0ee7da6dfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ace1f3f92fab3ee525ea8f2a7d701708d7d28cc974c08fa713bb7b0ee7da6dfb->enter($__internal_ace1f3f92fab3ee525ea8f2a7d701708d7d28cc974c08fa713bb7b0ee7da6dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:error.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81b25ad74a2a916b362291fcdcfa5f1b9a338dedc935db51377a8f8ab116092b->leave($__internal_81b25ad74a2a916b362291fcdcfa5f1b9a338dedc935db51377a8f8ab116092b_prof);

        
        $__internal_ace1f3f92fab3ee525ea8f2a7d701708d7d28cc974c08fa713bb7b0ee7da6dfb->leave($__internal_ace1f3f92fab3ee525ea8f2a7d701708d7d28cc974c08fa713bb7b0ee7da6dfb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bafaa7082dda24aabf156da07112eab40964e282891b8267a90831de6b428ca5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bafaa7082dda24aabf156da07112eab40964e282891b8267a90831de6b428ca5->enter($__internal_bafaa7082dda24aabf156da07112eab40964e282891b8267a90831de6b428ca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_543797b5a36b01a7795b11e3c68ff330ebdf9355c0b3fee05fd83bfc31bcf297 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_543797b5a36b01a7795b11e3c68ff330ebdf9355c0b3fee05fd83bfc31bcf297->enter($__internal_543797b5a36b01a7795b11e3c68ff330ebdf9355c0b3fee05fd83bfc31bcf297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CR Gourmet Coffee";
        
        $__internal_543797b5a36b01a7795b11e3c68ff330ebdf9355c0b3fee05fd83bfc31bcf297->leave($__internal_543797b5a36b01a7795b11e3c68ff330ebdf9355c0b3fee05fd83bfc31bcf297_prof);

        
        $__internal_bafaa7082dda24aabf156da07112eab40964e282891b8267a90831de6b428ca5->leave($__internal_bafaa7082dda24aabf156da07112eab40964e282891b8267a90831de6b428ca5_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_70bf79a5053915512857d056c3934b5e9bdd6e6f46efcb4af1f5b7efc114bbfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70bf79a5053915512857d056c3934b5e9bdd6e6f46efcb4af1f5b7efc114bbfa->enter($__internal_70bf79a5053915512857d056c3934b5e9bdd6e6f46efcb4af1f5b7efc114bbfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0538cc543964b4d1afc55e8c2219fbee5d18833cd831a59487d3fe55c93fc260 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0538cc543964b4d1afc55e8c2219fbee5d18833cd831a59487d3fe55c93fc260->enter($__internal_0538cc543964b4d1afc55e8c2219fbee5d18833cd831a59487d3fe55c93fc260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<main>
<div class='container'>
\t<center>
\t    <h2 class=\"center-block jumbotron \">
\t        <br/>Oooops...<br/>
\t        This page doesn't exist please try another page or go <a href=\" ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_homepage", array("page" => "home"));
        echo "\">Home</a>
\t    </h2>
    </center>
</div>
</main>
";
        
        $__internal_0538cc543964b4d1afc55e8c2219fbee5d18833cd831a59487d3fe55c93fc260->leave($__internal_0538cc543964b4d1afc55e8c2219fbee5d18833cd831a59487d3fe55c93fc260_prof);

        
        $__internal_70bf79a5053915512857d056c3934b5e9bdd6e6f46efcb4af1f5b7efc114bbfa->leave($__internal_70bf79a5053915512857d056c3934b5e9bdd6e6f46efcb4af1f5b7efc114bbfa_prof);

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
        return array (  75 => 10,  68 => 5,  59 => 4,  41 => 3,  11 => 1,);
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
\t        This page doesn't exist please try another page or go <a href=\" {{ path('page_homepage', {'page': 'home' }) }}\">Home</a>
\t    </h2>
    </center>
</div>
</main>
{% endblock %}", "PageBundle:Default:error.html.twig", "/home/ubuntu/workspace/src/PageBundle/Resources/views/Default/error.html.twig");
    }
}
