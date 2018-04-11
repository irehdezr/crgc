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
        $__internal_236b762983941a65dc6ae66634b0086a3f1a93155018acea4393ecf0203bf696 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_236b762983941a65dc6ae66634b0086a3f1a93155018acea4393ecf0203bf696->enter($__internal_236b762983941a65dc6ae66634b0086a3f1a93155018acea4393ecf0203bf696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Security:login.html.twig"));

        $__internal_f59af48a245c9db52bffa4fcdbd9def3ba4485f99c4803d9f293203959cb199d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f59af48a245c9db52bffa4fcdbd9def3ba4485f99c4803d9f293203959cb199d->enter($__internal_f59af48a245c9db52bffa4fcdbd9def3ba4485f99c4803d9f293203959cb199d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_236b762983941a65dc6ae66634b0086a3f1a93155018acea4393ecf0203bf696->leave($__internal_236b762983941a65dc6ae66634b0086a3f1a93155018acea4393ecf0203bf696_prof);

        
        $__internal_f59af48a245c9db52bffa4fcdbd9def3ba4485f99c4803d9f293203959cb199d->leave($__internal_f59af48a245c9db52bffa4fcdbd9def3ba4485f99c4803d9f293203959cb199d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_566308b8ea8b2bcf48c186e6c47f7600f5e61da00bc8c67d34017b16371be807 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_566308b8ea8b2bcf48c186e6c47f7600f5e61da00bc8c67d34017b16371be807->enter($__internal_566308b8ea8b2bcf48c186e6c47f7600f5e61da00bc8c67d34017b16371be807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_82de60487130fbd570d224380eb5d39d36581c3221bed347fc48914ef8484e61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82de60487130fbd570d224380eb5d39d36581c3221bed347fc48914ef8484e61->enter($__internal_82de60487130fbd570d224380eb5d39d36581c3221bed347fc48914ef8484e61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Sign In ";
        
        $__internal_82de60487130fbd570d224380eb5d39d36581c3221bed347fc48914ef8484e61->leave($__internal_82de60487130fbd570d224380eb5d39d36581c3221bed347fc48914ef8484e61_prof);

        
        $__internal_566308b8ea8b2bcf48c186e6c47f7600f5e61da00bc8c67d34017b16371be807->leave($__internal_566308b8ea8b2bcf48c186e6c47f7600f5e61da00bc8c67d34017b16371be807_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d73d7371da7e9239f954a04187ecde82ca47006f627d88c863831179e2050cf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d73d7371da7e9239f954a04187ecde82ca47006f627d88c863831179e2050cf1->enter($__internal_d73d7371da7e9239f954a04187ecde82ca47006f627d88c863831179e2050cf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e419331a8fd419b926ec2c384abbee1c08d05c73b3052260e7f4bddf0de7e499 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e419331a8fd419b926ec2c384abbee1c08d05c73b3052260e7f4bddf0de7e499->enter($__internal_e419331a8fd419b926ec2c384abbee1c08d05c73b3052260e7f4bddf0de7e499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/login.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_e419331a8fd419b926ec2c384abbee1c08d05c73b3052260e7f4bddf0de7e499->leave($__internal_e419331a8fd419b926ec2c384abbee1c08d05c73b3052260e7f4bddf0de7e499_prof);

        
        $__internal_d73d7371da7e9239f954a04187ecde82ca47006f627d88c863831179e2050cf1->leave($__internal_d73d7371da7e9239f954a04187ecde82ca47006f627d88c863831179e2050cf1_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_f042fc02bccfdf0f21d428de5470cc7b7e69427a890c017d402f290fda544027 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f042fc02bccfdf0f21d428de5470cc7b7e69427a890c017d402f290fda544027->enter($__internal_f042fc02bccfdf0f21d428de5470cc7b7e69427a890c017d402f290fda544027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1b8dda8a32df0cebf47a8e1bd17d638ce02e722d3df7c99fb355113fe7233308 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b8dda8a32df0cebf47a8e1bd17d638ce02e722d3df7c99fb355113fe7233308->enter($__internal_1b8dda8a32df0cebf47a8e1bd17d638ce02e722d3df7c99fb355113fe7233308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "  <main>
    <div id=\"login-modal\" >
      <div class=\"modal-dialog\">
        <div class=\"loginmodal-container\">
          <form action= \"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_signin");
        echo "\" method=\"post\" id=\"signin\" class=\"form-signin\">
            <h1>Sign in</h1>
            <label for=\"username\">Email:</label>
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" placeholder=\"example@domin.com\" required autofocus/>
            <label for=\"password\">Password:</label>
            <input type=\"password\" id=\"password\" name=\"_password\" placeholder=\"**********\" required>
            ";
        // line 20
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 21
            echo "              <div class=\"text-danger\">
                <strong>";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</strong>
              </div>
            ";
        }
        // line 25
        echo "            <input type=\"submit\" name=\"signin\" class=\"login loginmodal-submit\" value=\"Access your account\">
            <input type=\"button\" name=\"signup\" class=\"login loginmodal-submit\" value=\"Create a new account\">
          </form>
        </div>
      </div>
    </div>
  </main>
";
        
        $__internal_1b8dda8a32df0cebf47a8e1bd17d638ce02e722d3df7c99fb355113fe7233308->leave($__internal_1b8dda8a32df0cebf47a8e1bd17d638ce02e722d3df7c99fb355113fe7233308_prof);

        
        $__internal_f042fc02bccfdf0f21d428de5470cc7b7e69427a890c017d402f290fda544027->leave($__internal_f042fc02bccfdf0f21d428de5470cc7b7e69427a890c017d402f290fda544027_prof);

    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_efdf09aa38d5b035a75181df31da4900fde99618990dd6f8f38032633252fed9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efdf09aa38d5b035a75181df31da4900fde99618990dd6f8f38032633252fed9->enter($__internal_efdf09aa38d5b035a75181df31da4900fde99618990dd6f8f38032633252fed9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_dd3ebc1734320e5d3b0ea55c7670a38757d18e69218bde82ffc6d95b5a092046 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd3ebc1734320e5d3b0ea55c7670a38757d18e69218bde82ffc6d95b5a092046->enter($__internal_dd3ebc1734320e5d3b0ea55c7670a38757d18e69218bde82ffc6d95b5a092046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 35
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
      var signUpUrl = \"";
        // line 37
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_form"), "js"), "html", null, true);
        echo "\";  
    </script>
    <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/login.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
";
        
        $__internal_dd3ebc1734320e5d3b0ea55c7670a38757d18e69218bde82ffc6d95b5a092046->leave($__internal_dd3ebc1734320e5d3b0ea55c7670a38757d18e69218bde82ffc6d95b5a092046_prof);

        
        $__internal_efdf09aa38d5b035a75181df31da4900fde99618990dd6f8f38032633252fed9->leave($__internal_efdf09aa38d5b035a75181df31da4900fde99618990dd6f8f38032633252fed9_prof);

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
  <main>
    <div id=\"login-modal\" >
      <div class=\"modal-dialog\">
        <div class=\"loginmodal-container\">
          <form action= \"{{ path('user_signin') }}\" method=\"post\" id=\"signin\" class=\"form-signin\">
            <h1>Sign in</h1>
            <label for=\"username\">Email:</label>
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" placeholder=\"example@domin.com\" required autofocus/>
            <label for=\"password\">Password:</label>
            <input type=\"password\" id=\"password\" name=\"_password\" placeholder=\"**********\" required>
            {% if error %}
              <div class=\"text-danger\">
                <strong>{{ error.messageKey|trans(error.messageData, 'security') }}</strong>
              </div>
            {% endif %}
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
    <script>
      var signUpUrl = \"{{ path('user_form')|escape('js') }}\";  
    </script>
    <script src=\"{{ asset('js/login.js') }}\" type=\"text/javascript\"></script> 
{% endblock %}", "UserBundle:Security:login.html.twig", "C:\\xampp\\htdocs\\crgc\\src\\UserBundle/Resources/views/Security/login.html.twig");
    }
}
