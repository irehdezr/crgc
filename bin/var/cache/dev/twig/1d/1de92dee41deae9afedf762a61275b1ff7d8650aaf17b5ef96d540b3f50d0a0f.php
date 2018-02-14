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
        $__internal_76d609ff11b0c44a9f53e730dda47cbc27ce1d4052227f7235b6c1477b3c16f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76d609ff11b0c44a9f53e730dda47cbc27ce1d4052227f7235b6c1477b3c16f9->enter($__internal_76d609ff11b0c44a9f53e730dda47cbc27ce1d4052227f7235b6c1477b3c16f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Page/Default/onDevelopment.html.twig"));

        $__internal_864699b683879293f4ec92fe69d14577589247539448a662d68bca50cbb5e4af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_864699b683879293f4ec92fe69d14577589247539448a662d68bca50cbb5e4af->enter($__internal_864699b683879293f4ec92fe69d14577589247539448a662d68bca50cbb5e4af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Page/Default/onDevelopment.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76d609ff11b0c44a9f53e730dda47cbc27ce1d4052227f7235b6c1477b3c16f9->leave($__internal_76d609ff11b0c44a9f53e730dda47cbc27ce1d4052227f7235b6c1477b3c16f9_prof);

        
        $__internal_864699b683879293f4ec92fe69d14577589247539448a662d68bca50cbb5e4af->leave($__internal_864699b683879293f4ec92fe69d14577589247539448a662d68bca50cbb5e4af_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4996bc492ca94e526d0683a03a7e491b8ba516c826f9a4c9fe8f250b60ea56bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4996bc492ca94e526d0683a03a7e491b8ba516c826f9a4c9fe8f250b60ea56bf->enter($__internal_4996bc492ca94e526d0683a03a7e491b8ba516c826f9a4c9fe8f250b60ea56bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7ab93be274d93e90bdf307235b140a91b9be339a3f0246405825e9c3508bebbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ab93be274d93e90bdf307235b140a91b9be339a3f0246405825e9c3508bebbd->enter($__internal_7ab93be274d93e90bdf307235b140a91b9be339a3f0246405825e9c3508bebbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "On Development";
        
        $__internal_7ab93be274d93e90bdf307235b140a91b9be339a3f0246405825e9c3508bebbd->leave($__internal_7ab93be274d93e90bdf307235b140a91b9be339a3f0246405825e9c3508bebbd_prof);

        
        $__internal_4996bc492ca94e526d0683a03a7e491b8ba516c826f9a4c9fe8f250b60ea56bf->leave($__internal_4996bc492ca94e526d0683a03a7e491b8ba516c826f9a4c9fe8f250b60ea56bf_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_a1bbb9c9d1d2cc8a30db7154d3ccf3d0de0ecebee2781c8e6833a084260c97e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1bbb9c9d1d2cc8a30db7154d3ccf3d0de0ecebee2781c8e6833a084260c97e6->enter($__internal_a1bbb9c9d1d2cc8a30db7154d3ccf3d0de0ecebee2781c8e6833a084260c97e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4ddf1766cb61b36fec53cd38c4dab20ee1755b1ce5c5649d8f7b4dd1f216d73f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ddf1766cb61b36fec53cd38c4dab20ee1755b1ce5c5649d8f7b4dd1f216d73f->enter($__internal_4ddf1766cb61b36fec53cd38c4dab20ee1755b1ce5c5649d8f7b4dd1f216d73f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4ddf1766cb61b36fec53cd38c4dab20ee1755b1ce5c5649d8f7b4dd1f216d73f->leave($__internal_4ddf1766cb61b36fec53cd38c4dab20ee1755b1ce5c5649d8f7b4dd1f216d73f_prof);

        
        $__internal_a1bbb9c9d1d2cc8a30db7154d3ccf3d0de0ecebee2781c8e6833a084260c97e6->leave($__internal_a1bbb9c9d1d2cc8a30db7154d3ccf3d0de0ecebee2781c8e6833a084260c97e6_prof);

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
