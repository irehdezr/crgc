<?php

/* PageBundle:Default:login.html.twig */
class __TwigTemplate_846461b8bdfb776282dfef5ea5f2733c563d0b1f1810c5007790330add6eb73e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "PageBundle:Default:login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fe3beddc665714b87d9817fb0b387ad73cbf1ee7629c182c476537f5da6bdefd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe3beddc665714b87d9817fb0b387ad73cbf1ee7629c182c476537f5da6bdefd->enter($__internal_fe3beddc665714b87d9817fb0b387ad73cbf1ee7629c182c476537f5da6bdefd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe3beddc665714b87d9817fb0b387ad73cbf1ee7629c182c476537f5da6bdefd->leave($__internal_fe3beddc665714b87d9817fb0b387ad73cbf1ee7629c182c476537f5da6bdefd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_734d76aec425ad52c76d90acb592a8e9f55d5283ebc689fb5b388f058c9a293b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_734d76aec425ad52c76d90acb592a8e9f55d5283ebc689fb5b388f058c9a293b->enter($__internal_734d76aec425ad52c76d90acb592a8e9f55d5283ebc689fb5b388f058c9a293b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Sign In ";
        
        $__internal_734d76aec425ad52c76d90acb592a8e9f55d5283ebc689fb5b388f058c9a293b->leave($__internal_734d76aec425ad52c76d90acb592a8e9f55d5283ebc689fb5b388f058c9a293b_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_302c8ff5ac90e4d16e1efc9208eba725bb447065f563f0c8a1b759226d79cb05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_302c8ff5ac90e4d16e1efc9208eba725bb447065f563f0c8a1b759226d79cb05->enter($__internal_302c8ff5ac90e4d16e1efc9208eba725bb447065f563f0c8a1b759226d79cb05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/css/login.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_302c8ff5ac90e4d16e1efc9208eba725bb447065f563f0c8a1b759226d79cb05->leave($__internal_302c8ff5ac90e4d16e1efc9208eba725bb447065f563f0c8a1b759226d79cb05_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_5d05fd6a4600dc58f141fe7260930320067685a8166bfd38e163a6fceba6b0ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d05fd6a4600dc58f141fe7260930320067685a8166bfd38e163a6fceba6b0ad->enter($__internal_5d05fd6a4600dc58f141fe7260930320067685a8166bfd38e163a6fceba6b0ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<main style=\"background-image:url('/web/public/imgs/coffeeGrains.png');\">

<div id=\"login-modal\" >
          <div class=\"modal-dialog\">
                <div class=\"loginmodal-container\">
                    <h1>Sign in</h1><br>
                  <form id=\"signin\">
                    <input type=\"text\" name=\"user\" placeholder=\"E-mail\" required>
                    <input type=\"password\" name=\"pass\" placeholder=\"Password\" required>
                    <input type=\"submit\" name=\"signin\" class=\"login loginmodal-submit\" value=\"Access your account\">
                    <input type=\"button\" name=\"signup\" class=\"login loginmodal-submit\" value=\"Create a new account\">
                  </form>
                </div>
            </div>
          </div>
</main>
";
        
        $__internal_5d05fd6a4600dc58f141fe7260930320067685a8166bfd38e163a6fceba6b0ad->leave($__internal_5d05fd6a4600dc58f141fe7260930320067685a8166bfd38e163a6fceba6b0ad_prof);

    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_163008267a8999477c6e9c871dd9d0906c4acafe355129d9f48be68c15add7f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_163008267a8999477c6e9c871dd9d0906c4acafe355129d9f48be68c15add7f0->enter($__internal_163008267a8999477c6e9c871dd9d0906c4acafe355129d9f48be68c15add7f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 29
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/js/login.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
";
        
        $__internal_163008267a8999477c6e9c871dd9d0906c4acafe355129d9f48be68c15add7f0->leave($__internal_163008267a8999477c6e9c871dd9d0906c4acafe355129d9f48be68c15add7f0_prof);

    }

    public function getTemplateName()
    {
        return "PageBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 30,  104 => 29,  98 => 28,  75 => 10,  69 => 9,  60 => 6,  55 => 5,  49 => 4,  37 => 3,  11 => 1,);
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

{% block title%} Sign In {% endblock %}
{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('/web/public/css/login.css')}}\" />
{% endblock %}

{% block body %}
<main style=\"background-image:url('/web/public/imgs/coffeeGrains.png');\">

<div id=\"login-modal\" >
          <div class=\"modal-dialog\">
                <div class=\"loginmodal-container\">
                    <h1>Sign in</h1><br>
                  <form id=\"signin\">
                    <input type=\"text\" name=\"user\" placeholder=\"E-mail\" required>
                    <input type=\"password\" name=\"pass\" placeholder=\"Password\" required>
                    <input type=\"submit\" name=\"signin\" class=\"login loginmodal-submit\" value=\"Access your account\">
                    <input type=\"button\" name=\"signup\" class=\"login loginmodal-submit\" value=\"Create a new account\">
                  </form>
                </div>
            </div>
          </div>
</main>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('/web/public/js/login.js') }}\" type=\"text/javascript\"></script> 
{% endblock %}", "PageBundle:Default:login.html.twig", "/home/crgourme/public_html/src/PageBundle/Resources/views/Default/login.html.twig");
    }
}
