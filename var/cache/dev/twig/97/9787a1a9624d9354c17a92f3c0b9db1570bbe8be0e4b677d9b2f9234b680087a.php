<?php

/* @User/Security/login.html.twig */
class __TwigTemplate_e1c534ae195d2b3943a15f17b0d4c28fcb68c05d704c501a8993704e699d572c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "@User/Security/login.html.twig", 1);
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
        $__internal_15ccc9ab03d9441e4cad24249e49df0ce0ddaf4c1b15aca8c1b082df10b2d7cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15ccc9ab03d9441e4cad24249e49df0ce0ddaf4c1b15aca8c1b082df10b2d7cd->enter($__internal_15ccc9ab03d9441e4cad24249e49df0ce0ddaf4c1b15aca8c1b082df10b2d7cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Security/login.html.twig"));

        $__internal_c421379cd8802c4ed9d53d97f5760377362d0ddc0504b5942ae80ac31e721034 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c421379cd8802c4ed9d53d97f5760377362d0ddc0504b5942ae80ac31e721034->enter($__internal_c421379cd8802c4ed9d53d97f5760377362d0ddc0504b5942ae80ac31e721034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15ccc9ab03d9441e4cad24249e49df0ce0ddaf4c1b15aca8c1b082df10b2d7cd->leave($__internal_15ccc9ab03d9441e4cad24249e49df0ce0ddaf4c1b15aca8c1b082df10b2d7cd_prof);

        
        $__internal_c421379cd8802c4ed9d53d97f5760377362d0ddc0504b5942ae80ac31e721034->leave($__internal_c421379cd8802c4ed9d53d97f5760377362d0ddc0504b5942ae80ac31e721034_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_aa79953e4d9426164701ddf6ef84f56740d3c744b7b4950ab4d6375202442cd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa79953e4d9426164701ddf6ef84f56740d3c744b7b4950ab4d6375202442cd0->enter($__internal_aa79953e4d9426164701ddf6ef84f56740d3c744b7b4950ab4d6375202442cd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c6221f89b8ef040786a1c91078c24f8146f7a4c753e914b4b6151e2e97e11726 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6221f89b8ef040786a1c91078c24f8146f7a4c753e914b4b6151e2e97e11726->enter($__internal_c6221f89b8ef040786a1c91078c24f8146f7a4c753e914b4b6151e2e97e11726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Sign In ";
        
        $__internal_c6221f89b8ef040786a1c91078c24f8146f7a4c753e914b4b6151e2e97e11726->leave($__internal_c6221f89b8ef040786a1c91078c24f8146f7a4c753e914b4b6151e2e97e11726_prof);

        
        $__internal_aa79953e4d9426164701ddf6ef84f56740d3c744b7b4950ab4d6375202442cd0->leave($__internal_aa79953e4d9426164701ddf6ef84f56740d3c744b7b4950ab4d6375202442cd0_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7cc220da17d82ec6efffe3e9897bf94182ab5fc46d140e8761d766ff5f7a2831 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cc220da17d82ec6efffe3e9897bf94182ab5fc46d140e8761d766ff5f7a2831->enter($__internal_7cc220da17d82ec6efffe3e9897bf94182ab5fc46d140e8761d766ff5f7a2831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e8e914d89dd0bcb82ade99f30a4241de9356cfc80aee88a5c790a73398bdebdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8e914d89dd0bcb82ade99f30a4241de9356cfc80aee88a5c790a73398bdebdd->enter($__internal_e8e914d89dd0bcb82ade99f30a4241de9356cfc80aee88a5c790a73398bdebdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/login.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_e8e914d89dd0bcb82ade99f30a4241de9356cfc80aee88a5c790a73398bdebdd->leave($__internal_e8e914d89dd0bcb82ade99f30a4241de9356cfc80aee88a5c790a73398bdebdd_prof);

        
        $__internal_7cc220da17d82ec6efffe3e9897bf94182ab5fc46d140e8761d766ff5f7a2831->leave($__internal_7cc220da17d82ec6efffe3e9897bf94182ab5fc46d140e8761d766ff5f7a2831_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f3ae9f0fa88dd2b71dfd39ae1db261aec2174e4f9ee2f9b88de9e695324fcc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f3ae9f0fa88dd2b71dfd39ae1db261aec2174e4f9ee2f9b88de9e695324fcc0->enter($__internal_7f3ae9f0fa88dd2b71dfd39ae1db261aec2174e4f9ee2f9b88de9e695324fcc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3c2275dd50048ad58f0feabba31f5e3ad7f80e977dded1c9f1af55cb13cee9b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c2275dd50048ad58f0feabba31f5e3ad7f80e977dded1c9f1af55cb13cee9b0->enter($__internal_3c2275dd50048ad58f0feabba31f5e3ad7f80e977dded1c9f1af55cb13cee9b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3c2275dd50048ad58f0feabba31f5e3ad7f80e977dded1c9f1af55cb13cee9b0->leave($__internal_3c2275dd50048ad58f0feabba31f5e3ad7f80e977dded1c9f1af55cb13cee9b0_prof);

        
        $__internal_7f3ae9f0fa88dd2b71dfd39ae1db261aec2174e4f9ee2f9b88de9e695324fcc0->leave($__internal_7f3ae9f0fa88dd2b71dfd39ae1db261aec2174e4f9ee2f9b88de9e695324fcc0_prof);

    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_09a2da001c4cee9e600903af4e4e8b7a5262055c966642cad9af0bc38c9c862b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09a2da001c4cee9e600903af4e4e8b7a5262055c966642cad9af0bc38c9c862b->enter($__internal_09a2da001c4cee9e600903af4e4e8b7a5262055c966642cad9af0bc38c9c862b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_433a1abaa4a6aa2b3e5f3106ceaaac15762fa3dc47e69e57108bcafdd870132d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_433a1abaa4a6aa2b3e5f3106ceaaac15762fa3dc47e69e57108bcafdd870132d->enter($__internal_433a1abaa4a6aa2b3e5f3106ceaaac15762fa3dc47e69e57108bcafdd870132d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_433a1abaa4a6aa2b3e5f3106ceaaac15762fa3dc47e69e57108bcafdd870132d->leave($__internal_433a1abaa4a6aa2b3e5f3106ceaaac15762fa3dc47e69e57108bcafdd870132d_prof);

        
        $__internal_09a2da001c4cee9e600903af4e4e8b7a5262055c966642cad9af0bc38c9c862b->leave($__internal_09a2da001c4cee9e600903af4e4e8b7a5262055c966642cad9af0bc38c9c862b_prof);

    }

    public function getTemplateName()
    {
        return "@User/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 39,  157 => 37,  151 => 35,  142 => 34,  125 => 25,  119 => 22,  116 => 21,  114 => 20,  108 => 17,  102 => 14,  96 => 10,  87 => 9,  75 => 6,  70 => 5,  61 => 4,  43 => 3,  11 => 1,);
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
{% endblock %}", "@User/Security/login.html.twig", "C:\\xampp\\htdocs\\crgc\\src\\UserBundle\\Resources\\views\\Security\\login.html.twig");
    }
}
