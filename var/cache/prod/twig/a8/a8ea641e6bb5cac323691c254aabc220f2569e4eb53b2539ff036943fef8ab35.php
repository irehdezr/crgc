<?php

/* UserBundle:Security:login.html.twig */
class __TwigTemplate_7e682b9a847385179db31eb5b26de3afa77f1236deea2858b7d8b917366bfe13 extends Twig_Template
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
        $__internal_267b5c2dadf1f3bfc2a7514052279d88d1642553d3b673cbad7eafdb3ec46c63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_267b5c2dadf1f3bfc2a7514052279d88d1642553d3b673cbad7eafdb3ec46c63->enter($__internal_267b5c2dadf1f3bfc2a7514052279d88d1642553d3b673cbad7eafdb3ec46c63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_267b5c2dadf1f3bfc2a7514052279d88d1642553d3b673cbad7eafdb3ec46c63->leave($__internal_267b5c2dadf1f3bfc2a7514052279d88d1642553d3b673cbad7eafdb3ec46c63_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d4aff2368774b95cf22e6b20ac5aea50749365f84e50f3e90ad08b5a125436e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4aff2368774b95cf22e6b20ac5aea50749365f84e50f3e90ad08b5a125436e6->enter($__internal_d4aff2368774b95cf22e6b20ac5aea50749365f84e50f3e90ad08b5a125436e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Sign In ";
        
        $__internal_d4aff2368774b95cf22e6b20ac5aea50749365f84e50f3e90ad08b5a125436e6->leave($__internal_d4aff2368774b95cf22e6b20ac5aea50749365f84e50f3e90ad08b5a125436e6_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5978ef0ce8912fb6d22d23a2ae8b348565eb3d4084793b6b3d7efa508d8eb5c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5978ef0ce8912fb6d22d23a2ae8b348565eb3d4084793b6b3d7efa508d8eb5c5->enter($__internal_5978ef0ce8912fb6d22d23a2ae8b348565eb3d4084793b6b3d7efa508d8eb5c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/login.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_5978ef0ce8912fb6d22d23a2ae8b348565eb3d4084793b6b3d7efa508d8eb5c5->leave($__internal_5978ef0ce8912fb6d22d23a2ae8b348565eb3d4084793b6b3d7efa508d8eb5c5_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_c21a2603498df8d3d16406aa2de7d4f9bc19165d70a5be3be843914b9f095e1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c21a2603498df8d3d16406aa2de7d4f9bc19165d70a5be3be843914b9f095e1c->enter($__internal_c21a2603498df8d3d16406aa2de7d4f9bc19165d70a5be3be843914b9f095e1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c21a2603498df8d3d16406aa2de7d4f9bc19165d70a5be3be843914b9f095e1c->leave($__internal_c21a2603498df8d3d16406aa2de7d4f9bc19165d70a5be3be843914b9f095e1c_prof);

    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_84b6b56004a75f8aef85942a5287d08e86662108573720b73da3c7ebcdd38f2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84b6b56004a75f8aef85942a5287d08e86662108573720b73da3c7ebcdd38f2e->enter($__internal_84b6b56004a75f8aef85942a5287d08e86662108573720b73da3c7ebcdd38f2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 35
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/login.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
";
        
        $__internal_84b6b56004a75f8aef85942a5287d08e86662108573720b73da3c7ebcdd38f2e->leave($__internal_84b6b56004a75f8aef85942a5287d08e86662108573720b73da3c7ebcdd38f2e_prof);

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
{% endblock %}", "UserBundle:Security:login.html.twig", "D:\\Programacion\\xampp\\htdocs\\app\\src\\UserBundle/Resources/views/Security/login.html.twig");
    }
}
