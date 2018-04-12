<?php

/* PageBundle:Default:onDevelopment.html.twig */
class __TwigTemplate_2f61fce2854a2acac630ec19481870fb6b64fb509ddc451d595b41cb8bb97af5 extends Twig_Template
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
        $__internal_f2bd991e55e46803fa5fb0acd1236c33bcc3cde28ff741c73c426383345e63f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2bd991e55e46803fa5fb0acd1236c33bcc3cde28ff741c73c426383345e63f6->enter($__internal_f2bd991e55e46803fa5fb0acd1236c33bcc3cde28ff741c73c426383345e63f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:onDevelopment.html.twig"));

        $__internal_c59d7d47b8413818498e5ceddd120865d19a6a11d30cea8bd29c396357597c6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c59d7d47b8413818498e5ceddd120865d19a6a11d30cea8bd29c396357597c6a->enter($__internal_c59d7d47b8413818498e5ceddd120865d19a6a11d30cea8bd29c396357597c6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:onDevelopment.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2bd991e55e46803fa5fb0acd1236c33bcc3cde28ff741c73c426383345e63f6->leave($__internal_f2bd991e55e46803fa5fb0acd1236c33bcc3cde28ff741c73c426383345e63f6_prof);

        
        $__internal_c59d7d47b8413818498e5ceddd120865d19a6a11d30cea8bd29c396357597c6a->leave($__internal_c59d7d47b8413818498e5ceddd120865d19a6a11d30cea8bd29c396357597c6a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8bb5f03cb404d8f3a46f2a92001b7da1f9d8874f03633681b2bd232ea1c87e31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bb5f03cb404d8f3a46f2a92001b7da1f9d8874f03633681b2bd232ea1c87e31->enter($__internal_8bb5f03cb404d8f3a46f2a92001b7da1f9d8874f03633681b2bd232ea1c87e31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d852dda79549b9e3452e35ea83c5e9dfcc52eceb6e1932de431a74dcf2042b36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d852dda79549b9e3452e35ea83c5e9dfcc52eceb6e1932de431a74dcf2042b36->enter($__internal_d852dda79549b9e3452e35ea83c5e9dfcc52eceb6e1932de431a74dcf2042b36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "On Development";
        
        $__internal_d852dda79549b9e3452e35ea83c5e9dfcc52eceb6e1932de431a74dcf2042b36->leave($__internal_d852dda79549b9e3452e35ea83c5e9dfcc52eceb6e1932de431a74dcf2042b36_prof);

        
        $__internal_8bb5f03cb404d8f3a46f2a92001b7da1f9d8874f03633681b2bd232ea1c87e31->leave($__internal_8bb5f03cb404d8f3a46f2a92001b7da1f9d8874f03633681b2bd232ea1c87e31_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_10594fcfac80c42f63817c5b7626c93d7fbbf4f7bada885636ff647c1dfc3bb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10594fcfac80c42f63817c5b7626c93d7fbbf4f7bada885636ff647c1dfc3bb0->enter($__internal_10594fcfac80c42f63817c5b7626c93d7fbbf4f7bada885636ff647c1dfc3bb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d703de9ea9065c51c7884da0b8700c7b5f4021d32de7af0bada92eae0db19994 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d703de9ea9065c51c7884da0b8700c7b5f4021d32de7af0bada92eae0db19994->enter($__internal_d703de9ea9065c51c7884da0b8700c7b5f4021d32de7af0bada92eae0db19994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d703de9ea9065c51c7884da0b8700c7b5f4021d32de7af0bada92eae0db19994->leave($__internal_d703de9ea9065c51c7884da0b8700c7b5f4021d32de7af0bada92eae0db19994_prof);

        
        $__internal_10594fcfac80c42f63817c5b7626c93d7fbbf4f7bada885636ff647c1dfc3bb0->leave($__internal_10594fcfac80c42f63817c5b7626c93d7fbbf4f7bada885636ff647c1dfc3bb0_prof);

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
\t    <h2>
\t        <br/>Oooops...<br/>
\t        This page is under development....
\t    </h2>
    </center>
</main>
{% endblock %}", "PageBundle:Default:onDevelopment.html.twig", "C:\\xampp\\htdocs\\crgc\\src\\PageBundle/Resources/views/Default/onDevelopment.html.twig");
    }
}
