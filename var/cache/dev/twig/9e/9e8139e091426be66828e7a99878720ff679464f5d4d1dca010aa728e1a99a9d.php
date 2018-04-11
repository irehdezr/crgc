<?php

/* @Page/Default/onDevelopment.html.twig */
class __TwigTemplate_64ce9bdfbf533bf607818c405971be66f0c565560f6b7d753c563852b34b9780 extends Twig_Template
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
        $__internal_4fea131710e6f03983975a8214028909c177c11fc9931c306b26251e126ff06e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fea131710e6f03983975a8214028909c177c11fc9931c306b26251e126ff06e->enter($__internal_4fea131710e6f03983975a8214028909c177c11fc9931c306b26251e126ff06e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Page/Default/onDevelopment.html.twig"));

        $__internal_08c397b08f12b02e5b7c57b39e95af8d52227090ea082ff316b69aa0a1e68c41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08c397b08f12b02e5b7c57b39e95af8d52227090ea082ff316b69aa0a1e68c41->enter($__internal_08c397b08f12b02e5b7c57b39e95af8d52227090ea082ff316b69aa0a1e68c41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Page/Default/onDevelopment.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4fea131710e6f03983975a8214028909c177c11fc9931c306b26251e126ff06e->leave($__internal_4fea131710e6f03983975a8214028909c177c11fc9931c306b26251e126ff06e_prof);

        
        $__internal_08c397b08f12b02e5b7c57b39e95af8d52227090ea082ff316b69aa0a1e68c41->leave($__internal_08c397b08f12b02e5b7c57b39e95af8d52227090ea082ff316b69aa0a1e68c41_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6ee5a2b2baaed7d00ad2771f039719db082296e513871055cac0492de3e2327d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ee5a2b2baaed7d00ad2771f039719db082296e513871055cac0492de3e2327d->enter($__internal_6ee5a2b2baaed7d00ad2771f039719db082296e513871055cac0492de3e2327d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a24f759d32f68d41964bd7593a410f98efdd25be3ca2bde33e5993376639405a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a24f759d32f68d41964bd7593a410f98efdd25be3ca2bde33e5993376639405a->enter($__internal_a24f759d32f68d41964bd7593a410f98efdd25be3ca2bde33e5993376639405a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "On Development";
        
        $__internal_a24f759d32f68d41964bd7593a410f98efdd25be3ca2bde33e5993376639405a->leave($__internal_a24f759d32f68d41964bd7593a410f98efdd25be3ca2bde33e5993376639405a_prof);

        
        $__internal_6ee5a2b2baaed7d00ad2771f039719db082296e513871055cac0492de3e2327d->leave($__internal_6ee5a2b2baaed7d00ad2771f039719db082296e513871055cac0492de3e2327d_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_e379b5a6459a889d7f2e9004c7f11085f71fbd22455e6137d05b06a2e266ef3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e379b5a6459a889d7f2e9004c7f11085f71fbd22455e6137d05b06a2e266ef3a->enter($__internal_e379b5a6459a889d7f2e9004c7f11085f71fbd22455e6137d05b06a2e266ef3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f718e5fcc821d23375003f42b5c800bcdb82d96d3b4dd55b3048606130254498 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f718e5fcc821d23375003f42b5c800bcdb82d96d3b4dd55b3048606130254498->enter($__internal_f718e5fcc821d23375003f42b5c800bcdb82d96d3b4dd55b3048606130254498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f718e5fcc821d23375003f42b5c800bcdb82d96d3b4dd55b3048606130254498->leave($__internal_f718e5fcc821d23375003f42b5c800bcdb82d96d3b4dd55b3048606130254498_prof);

        
        $__internal_e379b5a6459a889d7f2e9004c7f11085f71fbd22455e6137d05b06a2e266ef3a->leave($__internal_e379b5a6459a889d7f2e9004c7f11085f71fbd22455e6137d05b06a2e266ef3a_prof);

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
\t    <h2>
\t        <br/>Oooops...<br/>
\t        This page is under development....
\t    </h2>
    </center>
</main>
{% endblock %}", "@Page/Default/onDevelopment.html.twig", "C:\\xampp\\htdocs\\crgc\\src\\PageBundle\\Resources\\views\\Default\\onDevelopment.html.twig");
    }
}
