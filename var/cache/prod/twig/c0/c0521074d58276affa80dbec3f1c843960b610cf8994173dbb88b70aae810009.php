<?php

/* UserBundle:Security:login.html.twig */
class __TwigTemplate_42f4c39ec068eec37a67f48bce70212f0015992590502c8cefa6335219f35405 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "UserBundle:Security:login.html.twig", 1);
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
        $__internal_f17d1a950694f03289fe7f3b139559d25ef1f5b79c28d97fe137366c1a242ee3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f17d1a950694f03289fe7f3b139559d25ef1f5b79c28d97fe137366c1a242ee3->enter($__internal_f17d1a950694f03289fe7f3b139559d25ef1f5b79c28d97fe137366c1a242ee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f17d1a950694f03289fe7f3b139559d25ef1f5b79c28d97fe137366c1a242ee3->leave($__internal_f17d1a950694f03289fe7f3b139559d25ef1f5b79c28d97fe137366c1a242ee3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_113398a84a2f665239ba1f39e49cd4c37be56db5eeff73d6bfe1e6d927637acb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_113398a84a2f665239ba1f39e49cd4c37be56db5eeff73d6bfe1e6d927637acb->enter($__internal_113398a84a2f665239ba1f39e49cd4c37be56db5eeff73d6bfe1e6d927637acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Sign In ";
        
        $__internal_113398a84a2f665239ba1f39e49cd4c37be56db5eeff73d6bfe1e6d927637acb->leave($__internal_113398a84a2f665239ba1f39e49cd4c37be56db5eeff73d6bfe1e6d927637acb_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_22722950a4f47ceee6737ec75e7cac99777bd6f0dce68ef24be4d5d16f5c4ed5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22722950a4f47ceee6737ec75e7cac99777bd6f0dce68ef24be4d5d16f5c4ed5->enter($__internal_22722950a4f47ceee6737ec75e7cac99777bd6f0dce68ef24be4d5d16f5c4ed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/login.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_22722950a4f47ceee6737ec75e7cac99777bd6f0dce68ef24be4d5d16f5c4ed5->leave($__internal_22722950a4f47ceee6737ec75e7cac99777bd6f0dce68ef24be4d5d16f5c4ed5_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a8b54c369e0ea7a3b382eac365a240c550a98948c5bcea9a2f048859c2831c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a8b54c369e0ea7a3b382eac365a240c550a98948c5bcea9a2f048859c2831c2->enter($__internal_8a8b54c369e0ea7a3b382eac365a240c550a98948c5bcea9a2f048859c2831c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "  \t<main>
    \t<div id=\"login-modal\" >
     \t\t<div class=\"modal-dialog\">
        \t\t<div class=\"loginmodal-container\">
          \t\t\t<form action= \"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_signin");
        echo "\" method=\"post\" id=\"signin\" class=\"form-signin\">
            \t\t\t<h1>Sign in</h1>
\t\t\t            <label for=\"username\">Email:</label>
\t\t\t            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" placeholder=\"example@domin.com\" required autofocus/>
\t\t\t            <label for=\"password\">Password:</label>
\t\t\t            <input type=\"password\" id=\"password\" name=\"_password\" placeholder=\"**********\" required>
\t\t\t            ";
        // line 20
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 21
            echo "\t\t\t              <div class=\"text-danger\">
\t\t\t                <strong>";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</strong>
\t\t\t              </div>
\t\t\t            ";
        }
        // line 25
        echo "\t\t\t            <input type=\"submit\" name=\"signin\" class=\"login loginmodal-submit\" value=\"Access your account\">
\t\t\t            <input type=\"button\" name=\"signup\" class=\"login loginmodal-submit\" value=\"Create a new account\">
          \t\t\t</form>
        \t\t</div>
      \t\t</div>
    \t</div>
  \t</main>
";
        
        $__internal_8a8b54c369e0ea7a3b382eac365a240c550a98948c5bcea9a2f048859c2831c2->leave($__internal_8a8b54c369e0ea7a3b382eac365a240c550a98948c5bcea9a2f048859c2831c2_prof);

    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8490207ea470889e0016b2f3225c6bc1c793e4a3b0729b1fa0c78e0231fc9338 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8490207ea470889e0016b2f3225c6bc1c793e4a3b0729b1fa0c78e0231fc9338->enter($__internal_8490207ea470889e0016b2f3225c6bc1c793e4a3b0729b1fa0c78e0231fc9338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 35
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
      var signUpUrl = \"";
        // line 37
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_signup"), "js"), "html", null, true);
        echo "\";  
    </script>
    <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/login.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
";
        
        $__internal_8490207ea470889e0016b2f3225c6bc1c793e4a3b0729b1fa0c78e0231fc9338->leave($__internal_8490207ea470889e0016b2f3225c6bc1c793e4a3b0729b1fa0c78e0231fc9338_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 39,  130 => 37,  124 => 35,  118 => 34,  104 => 25,  98 => 22,  95 => 21,  93 => 20,  87 => 17,  81 => 14,  75 => 10,  69 => 9,  60 => 6,  55 => 5,  49 => 4,  37 => 3,  11 => 1,);
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
    <link rel=\"stylesheet\" href=\"{{ asset('css/login.css')}}\" />
{% endblock %}

{% block body %}
  \t<main>
    \t<div id=\"login-modal\" >
     \t\t<div class=\"modal-dialog\">
        \t\t<div class=\"loginmodal-container\">
          \t\t\t<form action= \"{{ path('user_signin') }}\" method=\"post\" id=\"signin\" class=\"form-signin\">
            \t\t\t<h1>Sign in</h1>
\t\t\t            <label for=\"username\">Email:</label>
\t\t\t            <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" placeholder=\"example@domin.com\" required autofocus/>
\t\t\t            <label for=\"password\">Password:</label>
\t\t\t            <input type=\"password\" id=\"password\" name=\"_password\" placeholder=\"**********\" required>
\t\t\t            {% if error %}
\t\t\t              <div class=\"text-danger\">
\t\t\t                <strong>{{ error.messageKey|trans(error.messageData, 'security') }}</strong>
\t\t\t              </div>
\t\t\t            {% endif %}
\t\t\t            <input type=\"submit\" name=\"signin\" class=\"login loginmodal-submit\" value=\"Access your account\">
\t\t\t            <input type=\"button\" name=\"signup\" class=\"login loginmodal-submit\" value=\"Create a new account\">
          \t\t\t</form>
        \t\t</div>
      \t\t</div>
    \t</div>
  \t</main>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
      var signUpUrl = \"{{ path('user_signup')|escape('js') }}\";  
    </script>
    <script src=\"{{ asset('js/login.js') }}\" type=\"text/javascript\"></script> 
{% endblock %}", "UserBundle:Security:login.html.twig", "C:\\xampp\\htdocs\\crgc\\var\\cache\\prod/../../../src/UserBundle/Resources/views/Security/login.html.twig");
    }
}
