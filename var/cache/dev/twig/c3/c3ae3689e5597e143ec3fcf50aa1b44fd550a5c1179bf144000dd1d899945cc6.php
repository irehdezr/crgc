<?php

/* PageBundle:Default:error.html.twig */
class __TwigTemplate_9edd77fca537e484334c770c071af1eb97ba5bc628ec2589c43741477212b826 extends Twig_Template
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
        $__internal_29aa9535d1b4615affa54c8f91b205c8d7ba3f815715db06108dacdcefee731c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29aa9535d1b4615affa54c8f91b205c8d7ba3f815715db06108dacdcefee731c->enter($__internal_29aa9535d1b4615affa54c8f91b205c8d7ba3f815715db06108dacdcefee731c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:error.html.twig"));

        $__internal_d165714a9e5c0a51085855d7506dc339cfe79d58eb5619860eb6c64f3383dbd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d165714a9e5c0a51085855d7506dc339cfe79d58eb5619860eb6c64f3383dbd8->enter($__internal_d165714a9e5c0a51085855d7506dc339cfe79d58eb5619860eb6c64f3383dbd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:error.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29aa9535d1b4615affa54c8f91b205c8d7ba3f815715db06108dacdcefee731c->leave($__internal_29aa9535d1b4615affa54c8f91b205c8d7ba3f815715db06108dacdcefee731c_prof);

        
        $__internal_d165714a9e5c0a51085855d7506dc339cfe79d58eb5619860eb6c64f3383dbd8->leave($__internal_d165714a9e5c0a51085855d7506dc339cfe79d58eb5619860eb6c64f3383dbd8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_43e841d3ed74e9c4b436ac4062f3fa9d639bedd60453e29ac91b8495c37d9e32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43e841d3ed74e9c4b436ac4062f3fa9d639bedd60453e29ac91b8495c37d9e32->enter($__internal_43e841d3ed74e9c4b436ac4062f3fa9d639bedd60453e29ac91b8495c37d9e32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_75cc3f2dc3733b2bd4bd9c8624898b59d5987a6d931f4299dd41489591329d11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75cc3f2dc3733b2bd4bd9c8624898b59d5987a6d931f4299dd41489591329d11->enter($__internal_75cc3f2dc3733b2bd4bd9c8624898b59d5987a6d931f4299dd41489591329d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Error";
        
        $__internal_75cc3f2dc3733b2bd4bd9c8624898b59d5987a6d931f4299dd41489591329d11->leave($__internal_75cc3f2dc3733b2bd4bd9c8624898b59d5987a6d931f4299dd41489591329d11_prof);

        
        $__internal_43e841d3ed74e9c4b436ac4062f3fa9d639bedd60453e29ac91b8495c37d9e32->leave($__internal_43e841d3ed74e9c4b436ac4062f3fa9d639bedd60453e29ac91b8495c37d9e32_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_8449b95eb54881190358b3462c32c2aa7188a86c0446ca59cb8d46214c0494e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8449b95eb54881190358b3462c32c2aa7188a86c0446ca59cb8d46214c0494e6->enter($__internal_8449b95eb54881190358b3462c32c2aa7188a86c0446ca59cb8d46214c0494e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5eb5a18eb176bc9e818855be8187b7f2d76d3c6270d4f07bf1762a0910bee16a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5eb5a18eb176bc9e818855be8187b7f2d76d3c6270d4f07bf1762a0910bee16a->enter($__internal_5eb5a18eb176bc9e818855be8187b7f2d76d3c6270d4f07bf1762a0910bee16a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5eb5a18eb176bc9e818855be8187b7f2d76d3c6270d4f07bf1762a0910bee16a->leave($__internal_5eb5a18eb176bc9e818855be8187b7f2d76d3c6270d4f07bf1762a0910bee16a_prof);

        
        $__internal_8449b95eb54881190358b3462c32c2aa7188a86c0446ca59cb8d46214c0494e6->leave($__internal_8449b95eb54881190358b3462c32c2aa7188a86c0446ca59cb8d46214c0494e6_prof);

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
{% endblock %}", "PageBundle:Default:error.html.twig", "D:\\Programacion\\xampp\\htdocs\\crgc\\src\\PageBundle/Resources/views/Default/error.html.twig");
    }
}
