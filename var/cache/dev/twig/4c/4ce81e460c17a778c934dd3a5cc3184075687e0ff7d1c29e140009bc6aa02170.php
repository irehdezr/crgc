<?php

/* PageBundle:Default:error.html.twig */
class __TwigTemplate_1716e00f6fc2eb36f22ff8a48e827881def0658ca56b59a8ec5c600d4412d122 extends Twig_Template
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
        $__internal_8da3561c3415ab8b39c174c6aa9bc1a3170515dabdd0f36b11477919933c3ce8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8da3561c3415ab8b39c174c6aa9bc1a3170515dabdd0f36b11477919933c3ce8->enter($__internal_8da3561c3415ab8b39c174c6aa9bc1a3170515dabdd0f36b11477919933c3ce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:error.html.twig"));

        $__internal_7555ad47c710cde66d814d2e73a8e65d9c3b934971486785aaaf3d8253e8cd8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7555ad47c710cde66d814d2e73a8e65d9c3b934971486785aaaf3d8253e8cd8c->enter($__internal_7555ad47c710cde66d814d2e73a8e65d9c3b934971486785aaaf3d8253e8cd8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:error.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8da3561c3415ab8b39c174c6aa9bc1a3170515dabdd0f36b11477919933c3ce8->leave($__internal_8da3561c3415ab8b39c174c6aa9bc1a3170515dabdd0f36b11477919933c3ce8_prof);

        
        $__internal_7555ad47c710cde66d814d2e73a8e65d9c3b934971486785aaaf3d8253e8cd8c->leave($__internal_7555ad47c710cde66d814d2e73a8e65d9c3b934971486785aaaf3d8253e8cd8c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1a4ed5a5fb2acf47f5ec1711330fcdedd2edee76d9dc71b976134b34fc1e1ce8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a4ed5a5fb2acf47f5ec1711330fcdedd2edee76d9dc71b976134b34fc1e1ce8->enter($__internal_1a4ed5a5fb2acf47f5ec1711330fcdedd2edee76d9dc71b976134b34fc1e1ce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b3fcda227560e8ec2ad1f738bedb07752c4fe68658b1e0f38c7fd94fb59d0e7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3fcda227560e8ec2ad1f738bedb07752c4fe68658b1e0f38c7fd94fb59d0e7d->enter($__internal_b3fcda227560e8ec2ad1f738bedb07752c4fe68658b1e0f38c7fd94fb59d0e7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Error";
        
        $__internal_b3fcda227560e8ec2ad1f738bedb07752c4fe68658b1e0f38c7fd94fb59d0e7d->leave($__internal_b3fcda227560e8ec2ad1f738bedb07752c4fe68658b1e0f38c7fd94fb59d0e7d_prof);

        
        $__internal_1a4ed5a5fb2acf47f5ec1711330fcdedd2edee76d9dc71b976134b34fc1e1ce8->leave($__internal_1a4ed5a5fb2acf47f5ec1711330fcdedd2edee76d9dc71b976134b34fc1e1ce8_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_e1e5dfcbb8d71c884e98390682eefdcdea5f63f923b0a73fa48b5f19a31153d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1e5dfcbb8d71c884e98390682eefdcdea5f63f923b0a73fa48b5f19a31153d5->enter($__internal_e1e5dfcbb8d71c884e98390682eefdcdea5f63f923b0a73fa48b5f19a31153d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6e9af008aabcb7361df3904166773b0b8199ebcf398411aeae1f3da88545ff63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e9af008aabcb7361df3904166773b0b8199ebcf398411aeae1f3da88545ff63->enter($__internal_6e9af008aabcb7361df3904166773b0b8199ebcf398411aeae1f3da88545ff63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6e9af008aabcb7361df3904166773b0b8199ebcf398411aeae1f3da88545ff63->leave($__internal_6e9af008aabcb7361df3904166773b0b8199ebcf398411aeae1f3da88545ff63_prof);

        
        $__internal_e1e5dfcbb8d71c884e98390682eefdcdea5f63f923b0a73fa48b5f19a31153d5->leave($__internal_e1e5dfcbb8d71c884e98390682eefdcdea5f63f923b0a73fa48b5f19a31153d5_prof);

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
{% endblock %}", "PageBundle:Default:error.html.twig", "C:\\xampp\\htdocs\\src\\PageBundle/Resources/views/Default/error.html.twig");
    }
}
