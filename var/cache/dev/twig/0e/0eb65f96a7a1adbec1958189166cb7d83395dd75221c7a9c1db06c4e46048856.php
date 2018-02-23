<?php

/* @User/Security/login.html.twig */
class __TwigTemplate_bb8bf4becb382a8231a16a73645395af90a6fbd0ab6a740b3745e7ff517afd67 extends Twig_Template
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
        $__internal_871f74bb6ae4e5fd8495c0f3142c0932be808379d9ac2889e5d034a68e9c67f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_871f74bb6ae4e5fd8495c0f3142c0932be808379d9ac2889e5d034a68e9c67f0->enter($__internal_871f74bb6ae4e5fd8495c0f3142c0932be808379d9ac2889e5d034a68e9c67f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Security/login.html.twig"));

        $__internal_35401b7d495f2b1d7a3dc2c59387094561a27fb5db44f3540e0820ea6c850c7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35401b7d495f2b1d7a3dc2c59387094561a27fb5db44f3540e0820ea6c850c7c->enter($__internal_35401b7d495f2b1d7a3dc2c59387094561a27fb5db44f3540e0820ea6c850c7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_871f74bb6ae4e5fd8495c0f3142c0932be808379d9ac2889e5d034a68e9c67f0->leave($__internal_871f74bb6ae4e5fd8495c0f3142c0932be808379d9ac2889e5d034a68e9c67f0_prof);

        
        $__internal_35401b7d495f2b1d7a3dc2c59387094561a27fb5db44f3540e0820ea6c850c7c->leave($__internal_35401b7d495f2b1d7a3dc2c59387094561a27fb5db44f3540e0820ea6c850c7c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_18903ea78926e951146f329ed9c272b8c691238b3b177c1403194527cf06f57c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18903ea78926e951146f329ed9c272b8c691238b3b177c1403194527cf06f57c->enter($__internal_18903ea78926e951146f329ed9c272b8c691238b3b177c1403194527cf06f57c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bcb288e66432b3d985a03d24cda452f017d8b30e077673949096aad297b119b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcb288e66432b3d985a03d24cda452f017d8b30e077673949096aad297b119b2->enter($__internal_bcb288e66432b3d985a03d24cda452f017d8b30e077673949096aad297b119b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Sign In ";
        
        $__internal_bcb288e66432b3d985a03d24cda452f017d8b30e077673949096aad297b119b2->leave($__internal_bcb288e66432b3d985a03d24cda452f017d8b30e077673949096aad297b119b2_prof);

        
        $__internal_18903ea78926e951146f329ed9c272b8c691238b3b177c1403194527cf06f57c->leave($__internal_18903ea78926e951146f329ed9c272b8c691238b3b177c1403194527cf06f57c_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3e9da564c74b70357a75b3bf15506590ea7b1bf2baa906e3b7c15546f8b7980b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e9da564c74b70357a75b3bf15506590ea7b1bf2baa906e3b7c15546f8b7980b->enter($__internal_3e9da564c74b70357a75b3bf15506590ea7b1bf2baa906e3b7c15546f8b7980b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d7ff9ea369c1f78e84e7fb1d5fa212b71a4373bf0c89164f05d928f04bca5ed3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7ff9ea369c1f78e84e7fb1d5fa212b71a4373bf0c89164f05d928f04bca5ed3->enter($__internal_d7ff9ea369c1f78e84e7fb1d5fa212b71a4373bf0c89164f05d928f04bca5ed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/css/login.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_d7ff9ea369c1f78e84e7fb1d5fa212b71a4373bf0c89164f05d928f04bca5ed3->leave($__internal_d7ff9ea369c1f78e84e7fb1d5fa212b71a4373bf0c89164f05d928f04bca5ed3_prof);

        
        $__internal_3e9da564c74b70357a75b3bf15506590ea7b1bf2baa906e3b7c15546f8b7980b->leave($__internal_3e9da564c74b70357a75b3bf15506590ea7b1bf2baa906e3b7c15546f8b7980b_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_f15191c1a21c3398247ca19844a9c5da9f0774d3da7c3d8cfd4095b1aa76a922 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f15191c1a21c3398247ca19844a9c5da9f0774d3da7c3d8cfd4095b1aa76a922->enter($__internal_f15191c1a21c3398247ca19844a9c5da9f0774d3da7c3d8cfd4095b1aa76a922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_abccf65fdd553eda9c78c467f2def6d2db459cb1001edc838bb68c5c891056c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abccf65fdd553eda9c78c467f2def6d2db459cb1001edc838bb68c5c891056c2->enter($__internal_abccf65fdd553eda9c78c467f2def6d2db459cb1001edc838bb68c5c891056c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<main>
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
        
        $__internal_abccf65fdd553eda9c78c467f2def6d2db459cb1001edc838bb68c5c891056c2->leave($__internal_abccf65fdd553eda9c78c467f2def6d2db459cb1001edc838bb68c5c891056c2_prof);

        
        $__internal_f15191c1a21c3398247ca19844a9c5da9f0774d3da7c3d8cfd4095b1aa76a922->leave($__internal_f15191c1a21c3398247ca19844a9c5da9f0774d3da7c3d8cfd4095b1aa76a922_prof);

    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_709f6752242ad0bbd48b563883993a09f989f24662aeb773bb11225270f02ac7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_709f6752242ad0bbd48b563883993a09f989f24662aeb773bb11225270f02ac7->enter($__internal_709f6752242ad0bbd48b563883993a09f989f24662aeb773bb11225270f02ac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c842a587cb1647b3aec18c7ca177d89bcb809b6ae466ccfd0bca5c0441c8f137 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c842a587cb1647b3aec18c7ca177d89bcb809b6ae466ccfd0bca5c0441c8f137->enter($__internal_c842a587cb1647b3aec18c7ca177d89bcb809b6ae466ccfd0bca5c0441c8f137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 35
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/js/login.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
";
        
        $__internal_c842a587cb1647b3aec18c7ca177d89bcb809b6ae466ccfd0bca5c0441c8f137->leave($__internal_c842a587cb1647b3aec18c7ca177d89bcb809b6ae466ccfd0bca5c0441c8f137_prof);

        
        $__internal_709f6752242ad0bbd48b563883993a09f989f24662aeb773bb11225270f02ac7->leave($__internal_709f6752242ad0bbd48b563883993a09f989f24662aeb773bb11225270f02ac7_prof);

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
        return array (  156 => 36,  151 => 35,  142 => 34,  125 => 25,  119 => 22,  116 => 21,  114 => 20,  108 => 17,  102 => 14,  96 => 10,  87 => 9,  75 => 6,  70 => 5,  61 => 4,  43 => 3,  11 => 1,);
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
    <script src=\"{{ asset('/web/public/js/login.js') }}\" type=\"text/javascript\"></script> 
{% endblock %}", "@User/Security/login.html.twig", "C:\\xampp\\htdocs\\src\\UserBundle\\Resources\\views\\Security\\login.html.twig");
    }
}
