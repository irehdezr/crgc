<?php

/* @Page/Default/onDevelopment.html.twig */
class __TwigTemplate_c3f94f247d562ba6227e99301bad8436e5c0bfc71151d92e60c33d51447a03ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "@Page/Default/onDevelopment.html.twig", 1);
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
        $__internal_b4ed6d0a211a007b168cad0d4373d7dba9eb3b1a36aadd88131641c1ae21d340 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4ed6d0a211a007b168cad0d4373d7dba9eb3b1a36aadd88131641c1ae21d340->enter($__internal_b4ed6d0a211a007b168cad0d4373d7dba9eb3b1a36aadd88131641c1ae21d340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Page/Default/onDevelopment.html.twig"));

        $__internal_c6d8edb819b79994f362cf4998cb69bcbd22c830207b62a264e9016cf84a3358 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6d8edb819b79994f362cf4998cb69bcbd22c830207b62a264e9016cf84a3358->enter($__internal_c6d8edb819b79994f362cf4998cb69bcbd22c830207b62a264e9016cf84a3358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Page/Default/onDevelopment.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4ed6d0a211a007b168cad0d4373d7dba9eb3b1a36aadd88131641c1ae21d340->leave($__internal_b4ed6d0a211a007b168cad0d4373d7dba9eb3b1a36aadd88131641c1ae21d340_prof);

        
        $__internal_c6d8edb819b79994f362cf4998cb69bcbd22c830207b62a264e9016cf84a3358->leave($__internal_c6d8edb819b79994f362cf4998cb69bcbd22c830207b62a264e9016cf84a3358_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d760b09c1c0417cd0067e5905a3c87cd9f9d8cbca527e9016909428dcb68e1bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d760b09c1c0417cd0067e5905a3c87cd9f9d8cbca527e9016909428dcb68e1bf->enter($__internal_d760b09c1c0417cd0067e5905a3c87cd9f9d8cbca527e9016909428dcb68e1bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_865fb28163550fe1076dff69c28195b5daf16e171c22f3723f15672913c9a46a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_865fb28163550fe1076dff69c28195b5daf16e171c22f3723f15672913c9a46a->enter($__internal_865fb28163550fe1076dff69c28195b5daf16e171c22f3723f15672913c9a46a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "On Development";
        
        $__internal_865fb28163550fe1076dff69c28195b5daf16e171c22f3723f15672913c9a46a->leave($__internal_865fb28163550fe1076dff69c28195b5daf16e171c22f3723f15672913c9a46a_prof);

        
        $__internal_d760b09c1c0417cd0067e5905a3c87cd9f9d8cbca527e9016909428dcb68e1bf->leave($__internal_d760b09c1c0417cd0067e5905a3c87cd9f9d8cbca527e9016909428dcb68e1bf_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_048c51ef7601883a8ed4c5fd74e017a1842420a1e93a8320df98ad372a185e6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_048c51ef7601883a8ed4c5fd74e017a1842420a1e93a8320df98ad372a185e6b->enter($__internal_048c51ef7601883a8ed4c5fd74e017a1842420a1e93a8320df98ad372a185e6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_36359c34357ed2db7d9fc5643deecf6bf6e067c2fdbd12195271222ee466862b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36359c34357ed2db7d9fc5643deecf6bf6e067c2fdbd12195271222ee466862b->enter($__internal_36359c34357ed2db7d9fc5643deecf6bf6e067c2fdbd12195271222ee466862b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_36359c34357ed2db7d9fc5643deecf6bf6e067c2fdbd12195271222ee466862b->leave($__internal_36359c34357ed2db7d9fc5643deecf6bf6e067c2fdbd12195271222ee466862b_prof);

        
        $__internal_048c51ef7601883a8ed4c5fd74e017a1842420a1e93a8320df98ad372a185e6b->leave($__internal_048c51ef7601883a8ed4c5fd74e017a1842420a1e93a8320df98ad372a185e6b_prof);

    }

    public function getTemplateName()
    {
        return "@Page/Default/onDevelopment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 5,  59 => 4,  41 => 3,  11 => 1,);
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
{% endblock %}", "@Page/Default/onDevelopment.html.twig", "C:\\xampp\\htdocs\\src\\PageBundle\\Resources\\views\\Default\\onDevelopment.html.twig");
    }
}
