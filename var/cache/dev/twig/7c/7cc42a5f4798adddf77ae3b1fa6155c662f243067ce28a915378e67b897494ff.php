<?php

/* PageBundle:Default:error.html.twig */
class __TwigTemplate_a7f3383e35621e53636b70d77f7550a92dd659813491cee5db07ee6af403fa5d extends Twig_Template
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
        $__internal_f680d76522eeb996ecb67facb22b8cb22b2964ac6041606b2d6255b23d89c14e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f680d76522eeb996ecb67facb22b8cb22b2964ac6041606b2d6255b23d89c14e->enter($__internal_f680d76522eeb996ecb67facb22b8cb22b2964ac6041606b2d6255b23d89c14e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:error.html.twig"));

        $__internal_91a18fec1a29808b18f4f94a996352600a80b7cf3da577f0a5312180c075b1e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91a18fec1a29808b18f4f94a996352600a80b7cf3da577f0a5312180c075b1e3->enter($__internal_91a18fec1a29808b18f4f94a996352600a80b7cf3da577f0a5312180c075b1e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:error.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f680d76522eeb996ecb67facb22b8cb22b2964ac6041606b2d6255b23d89c14e->leave($__internal_f680d76522eeb996ecb67facb22b8cb22b2964ac6041606b2d6255b23d89c14e_prof);

        
        $__internal_91a18fec1a29808b18f4f94a996352600a80b7cf3da577f0a5312180c075b1e3->leave($__internal_91a18fec1a29808b18f4f94a996352600a80b7cf3da577f0a5312180c075b1e3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_571e4cf6bd5f8e1635511c04b0f44b1b05ab2bb088938c5ec517e4e6e8785373 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_571e4cf6bd5f8e1635511c04b0f44b1b05ab2bb088938c5ec517e4e6e8785373->enter($__internal_571e4cf6bd5f8e1635511c04b0f44b1b05ab2bb088938c5ec517e4e6e8785373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1d6f07ba9b568b824cf2526dd5379c6084446605aebf11f8e92260ca7fd497f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d6f07ba9b568b824cf2526dd5379c6084446605aebf11f8e92260ca7fd497f0->enter($__internal_1d6f07ba9b568b824cf2526dd5379c6084446605aebf11f8e92260ca7fd497f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Error";
        
        $__internal_1d6f07ba9b568b824cf2526dd5379c6084446605aebf11f8e92260ca7fd497f0->leave($__internal_1d6f07ba9b568b824cf2526dd5379c6084446605aebf11f8e92260ca7fd497f0_prof);

        
        $__internal_571e4cf6bd5f8e1635511c04b0f44b1b05ab2bb088938c5ec517e4e6e8785373->leave($__internal_571e4cf6bd5f8e1635511c04b0f44b1b05ab2bb088938c5ec517e4e6e8785373_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_739292a6a5faa6fd86243594f840c1edc19b63e6c32f6110c8391525dcd25719 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_739292a6a5faa6fd86243594f840c1edc19b63e6c32f6110c8391525dcd25719->enter($__internal_739292a6a5faa6fd86243594f840c1edc19b63e6c32f6110c8391525dcd25719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0c233df2a0a0ea73261c6797c887ee0c9243d2e3bc10fe60d2af36ef9e5f83fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c233df2a0a0ea73261c6797c887ee0c9243d2e3bc10fe60d2af36ef9e5f83fc->enter($__internal_0c233df2a0a0ea73261c6797c887ee0c9243d2e3bc10fe60d2af36ef9e5f83fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0c233df2a0a0ea73261c6797c887ee0c9243d2e3bc10fe60d2af36ef9e5f83fc->leave($__internal_0c233df2a0a0ea73261c6797c887ee0c9243d2e3bc10fe60d2af36ef9e5f83fc_prof);

        
        $__internal_739292a6a5faa6fd86243594f840c1edc19b63e6c32f6110c8391525dcd25719->leave($__internal_739292a6a5faa6fd86243594f840c1edc19b63e6c32f6110c8391525dcd25719_prof);

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
{% endblock %}", "PageBundle:Default:error.html.twig", "C:\\xampp\\htdocs\\crgc\\src\\PageBundle/Resources/views/Default/error.html.twig");
    }
}
