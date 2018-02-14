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
        $__internal_cbf83ae4d19bfd083555b5ae222e1eb6b0b0ec626ecd0b8f96c69f15e9f31b8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbf83ae4d19bfd083555b5ae222e1eb6b0b0ec626ecd0b8f96c69f15e9f31b8f->enter($__internal_cbf83ae4d19bfd083555b5ae222e1eb6b0b0ec626ecd0b8f96c69f15e9f31b8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:error.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cbf83ae4d19bfd083555b5ae222e1eb6b0b0ec626ecd0b8f96c69f15e9f31b8f->leave($__internal_cbf83ae4d19bfd083555b5ae222e1eb6b0b0ec626ecd0b8f96c69f15e9f31b8f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e7e16d35486c04cf74dafb44e95d0912dfc2c62505fd938ad3628875be5431fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7e16d35486c04cf74dafb44e95d0912dfc2c62505fd938ad3628875be5431fb->enter($__internal_e7e16d35486c04cf74dafb44e95d0912dfc2c62505fd938ad3628875be5431fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Error";
        
        $__internal_e7e16d35486c04cf74dafb44e95d0912dfc2c62505fd938ad3628875be5431fb->leave($__internal_e7e16d35486c04cf74dafb44e95d0912dfc2c62505fd938ad3628875be5431fb_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_614ba8b89a8bd45b851df6585e9bb38c775ca38c44372e143a328d2cafbd2897 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_614ba8b89a8bd45b851df6585e9bb38c775ca38c44372e143a328d2cafbd2897->enter($__internal_614ba8b89a8bd45b851df6585e9bb38c775ca38c44372e143a328d2cafbd2897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_614ba8b89a8bd45b851df6585e9bb38c775ca38c44372e143a328d2cafbd2897->leave($__internal_614ba8b89a8bd45b851df6585e9bb38c775ca38c44372e143a328d2cafbd2897_prof);

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
