<?php

/* PageBundle:Default:login.html.twig */
class __TwigTemplate_532510ec25b83806dc60ea3920abb4f766331f1240caac6990f057d603ab2e7d extends Twig_Template
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
        $__internal_7a935b8a471c0553af422af7e266472f0fcf62e472c0e3052d960fd4921a422d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a935b8a471c0553af422af7e266472f0fcf62e472c0e3052d960fd4921a422d->enter($__internal_7a935b8a471c0553af422af7e266472f0fcf62e472c0e3052d960fd4921a422d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a935b8a471c0553af422af7e266472f0fcf62e472c0e3052d960fd4921a422d->leave($__internal_7a935b8a471c0553af422af7e266472f0fcf62e472c0e3052d960fd4921a422d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ef6afdc19178cd19da911b6137d8e7ce4d585de963343581a1d83cb13b0b99fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef6afdc19178cd19da911b6137d8e7ce4d585de963343581a1d83cb13b0b99fd->enter($__internal_ef6afdc19178cd19da911b6137d8e7ce4d585de963343581a1d83cb13b0b99fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Sign In ";
        
        $__internal_ef6afdc19178cd19da911b6137d8e7ce4d585de963343581a1d83cb13b0b99fd->leave($__internal_ef6afdc19178cd19da911b6137d8e7ce4d585de963343581a1d83cb13b0b99fd_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c0d97f3b3863ac1a137a7032f51a99da7aa4aa3481f0f4e9ef4c7f3a2bb930cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0d97f3b3863ac1a137a7032f51a99da7aa4aa3481f0f4e9ef4c7f3a2bb930cc->enter($__internal_c0d97f3b3863ac1a137a7032f51a99da7aa4aa3481f0f4e9ef4c7f3a2bb930cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/css/login.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_c0d97f3b3863ac1a137a7032f51a99da7aa4aa3481f0f4e9ef4c7f3a2bb930cc->leave($__internal_c0d97f3b3863ac1a137a7032f51a99da7aa4aa3481f0f4e9ef4c7f3a2bb930cc_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_792eae3f5cee885e25f49a80f5aacca60132f708d391ccafeb9c7718d8de1480 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_792eae3f5cee885e25f49a80f5aacca60132f708d391ccafeb9c7718d8de1480->enter($__internal_792eae3f5cee885e25f49a80f5aacca60132f708d391ccafeb9c7718d8de1480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_792eae3f5cee885e25f49a80f5aacca60132f708d391ccafeb9c7718d8de1480->leave($__internal_792eae3f5cee885e25f49a80f5aacca60132f708d391ccafeb9c7718d8de1480_prof);

    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_67f649cba3655c3b9b3de7808a328fc6eb6bbe11448190a1e0978d9f65330d90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67f649cba3655c3b9b3de7808a328fc6eb6bbe11448190a1e0978d9f65330d90->enter($__internal_67f649cba3655c3b9b3de7808a328fc6eb6bbe11448190a1e0978d9f65330d90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 29
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/js/login.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
";
        
        $__internal_67f649cba3655c3b9b3de7808a328fc6eb6bbe11448190a1e0978d9f65330d90->leave($__internal_67f649cba3655c3b9b3de7808a328fc6eb6bbe11448190a1e0978d9f65330d90_prof);

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
{% endblock %}", "PageBundle:Default:login.html.twig", "C:\\xampp\\htdocs\\src\\PageBundle/Resources/views/Default/login.html.twig");
    }
}
