<?php

/* PageBundle:Default:error.html.twig */
class __TwigTemplate_18de07682ed969bb7aec7aef899afadfc6ea38f842739bbf755d62108fdeb93e extends Twig_Template
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
        $__internal_254b3c5a4c4a0c8e04f7c73b6dd88cd660b6eb9b63d6fa3669546da940fba5c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_254b3c5a4c4a0c8e04f7c73b6dd88cd660b6eb9b63d6fa3669546da940fba5c7->enter($__internal_254b3c5a4c4a0c8e04f7c73b6dd88cd660b6eb9b63d6fa3669546da940fba5c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:error.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_254b3c5a4c4a0c8e04f7c73b6dd88cd660b6eb9b63d6fa3669546da940fba5c7->leave($__internal_254b3c5a4c4a0c8e04f7c73b6dd88cd660b6eb9b63d6fa3669546da940fba5c7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d663c95354f35694d941c382f8017688079ddc6927714067330fbb06e7f5c874 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d663c95354f35694d941c382f8017688079ddc6927714067330fbb06e7f5c874->enter($__internal_d663c95354f35694d941c382f8017688079ddc6927714067330fbb06e7f5c874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Error";
        
        $__internal_d663c95354f35694d941c382f8017688079ddc6927714067330fbb06e7f5c874->leave($__internal_d663c95354f35694d941c382f8017688079ddc6927714067330fbb06e7f5c874_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_e36360da60fa57eab8937007018105b7dd7c8e629ef9e577639af7b9463eecd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e36360da60fa57eab8937007018105b7dd7c8e629ef9e577639af7b9463eecd8->enter($__internal_e36360da60fa57eab8937007018105b7dd7c8e629ef9e577639af7b9463eecd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e36360da60fa57eab8937007018105b7dd7c8e629ef9e577639af7b9463eecd8->leave($__internal_e36360da60fa57eab8937007018105b7dd7c8e629ef9e577639af7b9463eecd8_prof);

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
{% endblock %}", "PageBundle:Default:error.html.twig", "C:\\xampp\\htdocs\\src\\PageBundle/Resources/views/Default/error.html.twig");
    }
}
