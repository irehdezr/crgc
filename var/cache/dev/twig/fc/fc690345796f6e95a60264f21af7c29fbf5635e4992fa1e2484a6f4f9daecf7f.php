<?php

/* UserBundle:Security:login.html.twig */
class __TwigTemplate_4cc089079e02269535866a703d2404def2039cac1d25dc1e8ee706a650319430 extends Twig_Template
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
        $__internal_2124bc98992cb99efe4abb8f00334953fb89fd0c83e11c9e39c0554fc1966916 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2124bc98992cb99efe4abb8f00334953fb89fd0c83e11c9e39c0554fc1966916->enter($__internal_2124bc98992cb99efe4abb8f00334953fb89fd0c83e11c9e39c0554fc1966916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Security:login.html.twig"));

        $__internal_4210fbcbf588af53d5a90e6995a2d89e68531d781410b0e0ce770a9bf004f39e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4210fbcbf588af53d5a90e6995a2d89e68531d781410b0e0ce770a9bf004f39e->enter($__internal_4210fbcbf588af53d5a90e6995a2d89e68531d781410b0e0ce770a9bf004f39e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2124bc98992cb99efe4abb8f00334953fb89fd0c83e11c9e39c0554fc1966916->leave($__internal_2124bc98992cb99efe4abb8f00334953fb89fd0c83e11c9e39c0554fc1966916_prof);

        
        $__internal_4210fbcbf588af53d5a90e6995a2d89e68531d781410b0e0ce770a9bf004f39e->leave($__internal_4210fbcbf588af53d5a90e6995a2d89e68531d781410b0e0ce770a9bf004f39e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3e089c03678dac1fd0c966597d25a0df9189ee7058d11c56ed45ae3fc3724f1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e089c03678dac1fd0c966597d25a0df9189ee7058d11c56ed45ae3fc3724f1b->enter($__internal_3e089c03678dac1fd0c966597d25a0df9189ee7058d11c56ed45ae3fc3724f1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_547400a2ca21527ed83bac00f7f4a9813a1e1ab143361da6195cecb4b9e96e04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_547400a2ca21527ed83bac00f7f4a9813a1e1ab143361da6195cecb4b9e96e04->enter($__internal_547400a2ca21527ed83bac00f7f4a9813a1e1ab143361da6195cecb4b9e96e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Sign In ";
        
        $__internal_547400a2ca21527ed83bac00f7f4a9813a1e1ab143361da6195cecb4b9e96e04->leave($__internal_547400a2ca21527ed83bac00f7f4a9813a1e1ab143361da6195cecb4b9e96e04_prof);

        
        $__internal_3e089c03678dac1fd0c966597d25a0df9189ee7058d11c56ed45ae3fc3724f1b->leave($__internal_3e089c03678dac1fd0c966597d25a0df9189ee7058d11c56ed45ae3fc3724f1b_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6de84e27e5f75ee4d56d20330e66181e69afca696b4e1ddd8ebf24b527a835c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6de84e27e5f75ee4d56d20330e66181e69afca696b4e1ddd8ebf24b527a835c8->enter($__internal_6de84e27e5f75ee4d56d20330e66181e69afca696b4e1ddd8ebf24b527a835c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_92274f7682c79f4131473424a0bafdf4a10d5950705fe16ea2ad1844875e0cc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92274f7682c79f4131473424a0bafdf4a10d5950705fe16ea2ad1844875e0cc5->enter($__internal_92274f7682c79f4131473424a0bafdf4a10d5950705fe16ea2ad1844875e0cc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/login.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_92274f7682c79f4131473424a0bafdf4a10d5950705fe16ea2ad1844875e0cc5->leave($__internal_92274f7682c79f4131473424a0bafdf4a10d5950705fe16ea2ad1844875e0cc5_prof);

        
        $__internal_6de84e27e5f75ee4d56d20330e66181e69afca696b4e1ddd8ebf24b527a835c8->leave($__internal_6de84e27e5f75ee4d56d20330e66181e69afca696b4e1ddd8ebf24b527a835c8_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_a84b0ebf0dd020788e7c1a4ad3c5e436e9f4810cdc4613c84b2c6dcc3206d9d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a84b0ebf0dd020788e7c1a4ad3c5e436e9f4810cdc4613c84b2c6dcc3206d9d3->enter($__internal_a84b0ebf0dd020788e7c1a4ad3c5e436e9f4810cdc4613c84b2c6dcc3206d9d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1e75d0296d92e951c47b797ea416aec4e31dabaaffc70dd05fd18c1f4dc19d86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e75d0296d92e951c47b797ea416aec4e31dabaaffc70dd05fd18c1f4dc19d86->enter($__internal_1e75d0296d92e951c47b797ea416aec4e31dabaaffc70dd05fd18c1f4dc19d86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1e75d0296d92e951c47b797ea416aec4e31dabaaffc70dd05fd18c1f4dc19d86->leave($__internal_1e75d0296d92e951c47b797ea416aec4e31dabaaffc70dd05fd18c1f4dc19d86_prof);

        
        $__internal_a84b0ebf0dd020788e7c1a4ad3c5e436e9f4810cdc4613c84b2c6dcc3206d9d3->leave($__internal_a84b0ebf0dd020788e7c1a4ad3c5e436e9f4810cdc4613c84b2c6dcc3206d9d3_prof);

    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cd4cb9c359192378f4127d0e7b1a157a93f252bf3abad2a58170920d1aa85a9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd4cb9c359192378f4127d0e7b1a157a93f252bf3abad2a58170920d1aa85a9a->enter($__internal_cd4cb9c359192378f4127d0e7b1a157a93f252bf3abad2a58170920d1aa85a9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3e6f5f5c9fda8758d134b6d80a8e937bf5a11caeea18175a57fab4a5ad759296 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e6f5f5c9fda8758d134b6d80a8e937bf5a11caeea18175a57fab4a5ad759296->enter($__internal_3e6f5f5c9fda8758d134b6d80a8e937bf5a11caeea18175a57fab4a5ad759296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_3e6f5f5c9fda8758d134b6d80a8e937bf5a11caeea18175a57fab4a5ad759296->leave($__internal_3e6f5f5c9fda8758d134b6d80a8e937bf5a11caeea18175a57fab4a5ad759296_prof);

        
        $__internal_cd4cb9c359192378f4127d0e7b1a157a93f252bf3abad2a58170920d1aa85a9a->leave($__internal_cd4cb9c359192378f4127d0e7b1a157a93f252bf3abad2a58170920d1aa85a9a_prof);

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
{% endblock %}", "UserBundle:Security:login.html.twig", "C:\\xampp\\htdocs\\crgc\\src\\UserBundle/Resources/views/Security/login.html.twig");
    }
}
