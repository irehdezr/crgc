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
        $__internal_b8fe875b920445585e8203255cd9cc5a4eb6c0fb1584e89a031389d93d2aeb52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8fe875b920445585e8203255cd9cc5a4eb6c0fb1584e89a031389d93d2aeb52->enter($__internal_b8fe875b920445585e8203255cd9cc5a4eb6c0fb1584e89a031389d93d2aeb52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Security:login.html.twig"));

        $__internal_993e87a4a9288bbb0066733f57f4776c7c07ad3da196169f6ad405b771fe3876 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_993e87a4a9288bbb0066733f57f4776c7c07ad3da196169f6ad405b771fe3876->enter($__internal_993e87a4a9288bbb0066733f57f4776c7c07ad3da196169f6ad405b771fe3876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8fe875b920445585e8203255cd9cc5a4eb6c0fb1584e89a031389d93d2aeb52->leave($__internal_b8fe875b920445585e8203255cd9cc5a4eb6c0fb1584e89a031389d93d2aeb52_prof);

        
        $__internal_993e87a4a9288bbb0066733f57f4776c7c07ad3da196169f6ad405b771fe3876->leave($__internal_993e87a4a9288bbb0066733f57f4776c7c07ad3da196169f6ad405b771fe3876_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bd206d5a1578db1f5aa7d146fdd9e7d3062fc8df966284727d268de471f2d00f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd206d5a1578db1f5aa7d146fdd9e7d3062fc8df966284727d268de471f2d00f->enter($__internal_bd206d5a1578db1f5aa7d146fdd9e7d3062fc8df966284727d268de471f2d00f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ce45e65a49f59ac72dc53c55c52535e50a53d666f74f3f807d71a706a55da702 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce45e65a49f59ac72dc53c55c52535e50a53d666f74f3f807d71a706a55da702->enter($__internal_ce45e65a49f59ac72dc53c55c52535e50a53d666f74f3f807d71a706a55da702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Sign In ";
        
        $__internal_ce45e65a49f59ac72dc53c55c52535e50a53d666f74f3f807d71a706a55da702->leave($__internal_ce45e65a49f59ac72dc53c55c52535e50a53d666f74f3f807d71a706a55da702_prof);

        
        $__internal_bd206d5a1578db1f5aa7d146fdd9e7d3062fc8df966284727d268de471f2d00f->leave($__internal_bd206d5a1578db1f5aa7d146fdd9e7d3062fc8df966284727d268de471f2d00f_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5c88778403ed95daf638c8545ad024bb8c28e3691d6e09b97fcfeb4fceab17fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c88778403ed95daf638c8545ad024bb8c28e3691d6e09b97fcfeb4fceab17fb->enter($__internal_5c88778403ed95daf638c8545ad024bb8c28e3691d6e09b97fcfeb4fceab17fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a5576e9737c8e45b59be1953c1a48a35510e9443b64f5b61c88cbac09884fe35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5576e9737c8e45b59be1953c1a48a35510e9443b64f5b61c88cbac09884fe35->enter($__internal_a5576e9737c8e45b59be1953c1a48a35510e9443b64f5b61c88cbac09884fe35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/login.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_a5576e9737c8e45b59be1953c1a48a35510e9443b64f5b61c88cbac09884fe35->leave($__internal_a5576e9737c8e45b59be1953c1a48a35510e9443b64f5b61c88cbac09884fe35_prof);

        
        $__internal_5c88778403ed95daf638c8545ad024bb8c28e3691d6e09b97fcfeb4fceab17fb->leave($__internal_5c88778403ed95daf638c8545ad024bb8c28e3691d6e09b97fcfeb4fceab17fb_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_f6541e19b82a334c2df994ebe96f6a73896bd68cd1aa68043845ece284bf5d09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6541e19b82a334c2df994ebe96f6a73896bd68cd1aa68043845ece284bf5d09->enter($__internal_f6541e19b82a334c2df994ebe96f6a73896bd68cd1aa68043845ece284bf5d09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_148093bd85d9e8cf60e6e71d5b99b42b88c51b31849af5003adedc097dbbd540 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_148093bd85d9e8cf60e6e71d5b99b42b88c51b31849af5003adedc097dbbd540->enter($__internal_148093bd85d9e8cf60e6e71d5b99b42b88c51b31849af5003adedc097dbbd540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_148093bd85d9e8cf60e6e71d5b99b42b88c51b31849af5003adedc097dbbd540->leave($__internal_148093bd85d9e8cf60e6e71d5b99b42b88c51b31849af5003adedc097dbbd540_prof);

        
        $__internal_f6541e19b82a334c2df994ebe96f6a73896bd68cd1aa68043845ece284bf5d09->leave($__internal_f6541e19b82a334c2df994ebe96f6a73896bd68cd1aa68043845ece284bf5d09_prof);

    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_02c1e77bc6c8f092e2619929e4b6fd7a64a6c945dd2f52e6f80be12d47cfdba1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02c1e77bc6c8f092e2619929e4b6fd7a64a6c945dd2f52e6f80be12d47cfdba1->enter($__internal_02c1e77bc6c8f092e2619929e4b6fd7a64a6c945dd2f52e6f80be12d47cfdba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_bc1ab29e94c04b88e7252977d361b27d2cb63ab236da8a8027a75f2abe6dd4ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc1ab29e94c04b88e7252977d361b27d2cb63ab236da8a8027a75f2abe6dd4ce->enter($__internal_bc1ab29e94c04b88e7252977d361b27d2cb63ab236da8a8027a75f2abe6dd4ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_bc1ab29e94c04b88e7252977d361b27d2cb63ab236da8a8027a75f2abe6dd4ce->leave($__internal_bc1ab29e94c04b88e7252977d361b27d2cb63ab236da8a8027a75f2abe6dd4ce_prof);

        
        $__internal_02c1e77bc6c8f092e2619929e4b6fd7a64a6c945dd2f52e6f80be12d47cfdba1->leave($__internal_02c1e77bc6c8f092e2619929e4b6fd7a64a6c945dd2f52e6f80be12d47cfdba1_prof);

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
