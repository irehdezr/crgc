<?php

/* UserBundle:Security:login.html.twig */
class __TwigTemplate_b673882d8714a5e25fb3276f8e39b79b6adf7cbbd8b8b6b1f1bd6a0294d88933 extends Twig_Template
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
        $__internal_7f4ad02bc345a0a4146ce26b0067f4243d5ef3a8b1ac7cea8b0a6668865da34b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f4ad02bc345a0a4146ce26b0067f4243d5ef3a8b1ac7cea8b0a6668865da34b->enter($__internal_7f4ad02bc345a0a4146ce26b0067f4243d5ef3a8b1ac7cea8b0a6668865da34b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f4ad02bc345a0a4146ce26b0067f4243d5ef3a8b1ac7cea8b0a6668865da34b->leave($__internal_7f4ad02bc345a0a4146ce26b0067f4243d5ef3a8b1ac7cea8b0a6668865da34b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_68bffab38726ab94bbbd4fb34d29004e8c88cab02eba6fd3b55758c2dad71881 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68bffab38726ab94bbbd4fb34d29004e8c88cab02eba6fd3b55758c2dad71881->enter($__internal_68bffab38726ab94bbbd4fb34d29004e8c88cab02eba6fd3b55758c2dad71881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Sign In ";
        
        $__internal_68bffab38726ab94bbbd4fb34d29004e8c88cab02eba6fd3b55758c2dad71881->leave($__internal_68bffab38726ab94bbbd4fb34d29004e8c88cab02eba6fd3b55758c2dad71881_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_53a6279d9d647ae10f55d4e852ad0d927ed8571f4eb21c4b9d18c66a9d1e9c5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53a6279d9d647ae10f55d4e852ad0d927ed8571f4eb21c4b9d18c66a9d1e9c5e->enter($__internal_53a6279d9d647ae10f55d4e852ad0d927ed8571f4eb21c4b9d18c66a9d1e9c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/login.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_53a6279d9d647ae10f55d4e852ad0d927ed8571f4eb21c4b9d18c66a9d1e9c5e->leave($__internal_53a6279d9d647ae10f55d4e852ad0d927ed8571f4eb21c4b9d18c66a9d1e9c5e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_165ba6fcb7c5375feec9a6ea046650e0a8f3003248714f975128127d50fe57f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_165ba6fcb7c5375feec9a6ea046650e0a8f3003248714f975128127d50fe57f8->enter($__internal_165ba6fcb7c5375feec9a6ea046650e0a8f3003248714f975128127d50fe57f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_165ba6fcb7c5375feec9a6ea046650e0a8f3003248714f975128127d50fe57f8->leave($__internal_165ba6fcb7c5375feec9a6ea046650e0a8f3003248714f975128127d50fe57f8_prof);

    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_80c85134aae3ddfa05209fdc6b1ffbb9681223a2db15ae5fcc4aa64456cb2da0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80c85134aae3ddfa05209fdc6b1ffbb9681223a2db15ae5fcc4aa64456cb2da0->enter($__internal_80c85134aae3ddfa05209fdc6b1ffbb9681223a2db15ae5fcc4aa64456cb2da0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 35
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/login.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
";
        
        $__internal_80c85134aae3ddfa05209fdc6b1ffbb9681223a2db15ae5fcc4aa64456cb2da0->leave($__internal_80c85134aae3ddfa05209fdc6b1ffbb9681223a2db15ae5fcc4aa64456cb2da0_prof);

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
        return array (  129 => 36,  124 => 35,  118 => 34,  104 => 25,  98 => 22,  95 => 21,  93 => 20,  87 => 17,  81 => 14,  75 => 10,  69 => 9,  60 => 6,  55 => 5,  49 => 4,  37 => 3,  11 => 1,);
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
    <script src=\"{{ asset('js/login.js') }}\" type=\"text/javascript\"></script> 
{% endblock %}", "UserBundle:Security:login.html.twig", "D:\\Carlos\\xampp\\htdocs\\crgc\\src\\UserBundle/Resources/views/Security/login.html.twig");
    }
}
