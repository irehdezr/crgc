<?php

/* UserBundle:Security:login.html.twig */
class __TwigTemplate_7a5aa32c31ef78e12aaa145bc6f28a3323328f745f09a095b2be91810872fdbf extends Twig_Template
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
        $__internal_8397b0647c6c91a63f01faf99412b9e52d3e9e9679b79810cffb49783d05bc6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8397b0647c6c91a63f01faf99412b9e52d3e9e9679b79810cffb49783d05bc6c->enter($__internal_8397b0647c6c91a63f01faf99412b9e52d3e9e9679b79810cffb49783d05bc6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Security:login.html.twig"));

        $__internal_4555453e7831cf033a59f5ddd319a5ed44511ebe7fb337780f32f1d3dcb1240e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4555453e7831cf033a59f5ddd319a5ed44511ebe7fb337780f32f1d3dcb1240e->enter($__internal_4555453e7831cf033a59f5ddd319a5ed44511ebe7fb337780f32f1d3dcb1240e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8397b0647c6c91a63f01faf99412b9e52d3e9e9679b79810cffb49783d05bc6c->leave($__internal_8397b0647c6c91a63f01faf99412b9e52d3e9e9679b79810cffb49783d05bc6c_prof);

        
        $__internal_4555453e7831cf033a59f5ddd319a5ed44511ebe7fb337780f32f1d3dcb1240e->leave($__internal_4555453e7831cf033a59f5ddd319a5ed44511ebe7fb337780f32f1d3dcb1240e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f5a0aa2a231f498c2a4d6e3a41d176f86b64efd1c399295f8b77d4d952a5b0dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5a0aa2a231f498c2a4d6e3a41d176f86b64efd1c399295f8b77d4d952a5b0dc->enter($__internal_f5a0aa2a231f498c2a4d6e3a41d176f86b64efd1c399295f8b77d4d952a5b0dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_42c9085f4678be81d71aa31ddf1df0c7d7cf37264a895332716a2a2036df27b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42c9085f4678be81d71aa31ddf1df0c7d7cf37264a895332716a2a2036df27b4->enter($__internal_42c9085f4678be81d71aa31ddf1df0c7d7cf37264a895332716a2a2036df27b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Sign In ";
        
        $__internal_42c9085f4678be81d71aa31ddf1df0c7d7cf37264a895332716a2a2036df27b4->leave($__internal_42c9085f4678be81d71aa31ddf1df0c7d7cf37264a895332716a2a2036df27b4_prof);

        
        $__internal_f5a0aa2a231f498c2a4d6e3a41d176f86b64efd1c399295f8b77d4d952a5b0dc->leave($__internal_f5a0aa2a231f498c2a4d6e3a41d176f86b64efd1c399295f8b77d4d952a5b0dc_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f713ce46e40c7d18e3264f51c729d89fedf8e75bcc288c6e29e55862379b1c38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f713ce46e40c7d18e3264f51c729d89fedf8e75bcc288c6e29e55862379b1c38->enter($__internal_f713ce46e40c7d18e3264f51c729d89fedf8e75bcc288c6e29e55862379b1c38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_694f382321fb756870021ef7433a0d5019d19268a9bd7d38aa45c924bd788881 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_694f382321fb756870021ef7433a0d5019d19268a9bd7d38aa45c924bd788881->enter($__internal_694f382321fb756870021ef7433a0d5019d19268a9bd7d38aa45c924bd788881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/login.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_694f382321fb756870021ef7433a0d5019d19268a9bd7d38aa45c924bd788881->leave($__internal_694f382321fb756870021ef7433a0d5019d19268a9bd7d38aa45c924bd788881_prof);

        
        $__internal_f713ce46e40c7d18e3264f51c729d89fedf8e75bcc288c6e29e55862379b1c38->leave($__internal_f713ce46e40c7d18e3264f51c729d89fedf8e75bcc288c6e29e55862379b1c38_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ecbbcff9a1f689d4b5d4cd58564f3269989400305edb819d6d18b04848dc084 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ecbbcff9a1f689d4b5d4cd58564f3269989400305edb819d6d18b04848dc084->enter($__internal_5ecbbcff9a1f689d4b5d4cd58564f3269989400305edb819d6d18b04848dc084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d0bd75414baad48f14d86d6050cc2237e88adc21f8ccbdb995f30995f07d530b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0bd75414baad48f14d86d6050cc2237e88adc21f8ccbdb995f30995f07d530b->enter($__internal_d0bd75414baad48f14d86d6050cc2237e88adc21f8ccbdb995f30995f07d530b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d0bd75414baad48f14d86d6050cc2237e88adc21f8ccbdb995f30995f07d530b->leave($__internal_d0bd75414baad48f14d86d6050cc2237e88adc21f8ccbdb995f30995f07d530b_prof);

        
        $__internal_5ecbbcff9a1f689d4b5d4cd58564f3269989400305edb819d6d18b04848dc084->leave($__internal_5ecbbcff9a1f689d4b5d4cd58564f3269989400305edb819d6d18b04848dc084_prof);

    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_acb4b55b076d5fe57d0859fd1f2831203caf31aaefdf221d477ddd302bba7253 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acb4b55b076d5fe57d0859fd1f2831203caf31aaefdf221d477ddd302bba7253->enter($__internal_acb4b55b076d5fe57d0859fd1f2831203caf31aaefdf221d477ddd302bba7253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_81d95fe18ac8c93a425b20a18d9d2145deef87bba0309784c6b6104b000a74e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81d95fe18ac8c93a425b20a18d9d2145deef87bba0309784c6b6104b000a74e0->enter($__internal_81d95fe18ac8c93a425b20a18d9d2145deef87bba0309784c6b6104b000a74e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_81d95fe18ac8c93a425b20a18d9d2145deef87bba0309784c6b6104b000a74e0->leave($__internal_81d95fe18ac8c93a425b20a18d9d2145deef87bba0309784c6b6104b000a74e0_prof);

        
        $__internal_acb4b55b076d5fe57d0859fd1f2831203caf31aaefdf221d477ddd302bba7253->leave($__internal_acb4b55b076d5fe57d0859fd1f2831203caf31aaefdf221d477ddd302bba7253_prof);

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
{% endblock %}", "UserBundle:Security:login.html.twig", "C:\\xampp\\htdocs\\crgc\\var\\cache\\dev/../../../src/UserBundle/Resources/views/Security/login.html.twig");
    }
}
