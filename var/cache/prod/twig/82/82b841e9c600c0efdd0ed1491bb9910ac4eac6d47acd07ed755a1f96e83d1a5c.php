<?php

/* UserBundle:Security:login.html.twig */
class __TwigTemplate_3049580217245d62de2cbbdb4d1485f57ad2e20ee844f900225101eacbf419b0 extends Twig_Template
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
        $__internal_a5e09d7fc825194b28cf6bf9680c6d622339df578aa1010980a70287cc050cbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5e09d7fc825194b28cf6bf9680c6d622339df578aa1010980a70287cc050cbb->enter($__internal_a5e09d7fc825194b28cf6bf9680c6d622339df578aa1010980a70287cc050cbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5e09d7fc825194b28cf6bf9680c6d622339df578aa1010980a70287cc050cbb->leave($__internal_a5e09d7fc825194b28cf6bf9680c6d622339df578aa1010980a70287cc050cbb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_920fa0bd1a13a8f2a6f3db85cb9fdb865962a98f02f9f192ed95a2ca3b63c4e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_920fa0bd1a13a8f2a6f3db85cb9fdb865962a98f02f9f192ed95a2ca3b63c4e7->enter($__internal_920fa0bd1a13a8f2a6f3db85cb9fdb865962a98f02f9f192ed95a2ca3b63c4e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Sign In ";
        
        $__internal_920fa0bd1a13a8f2a6f3db85cb9fdb865962a98f02f9f192ed95a2ca3b63c4e7->leave($__internal_920fa0bd1a13a8f2a6f3db85cb9fdb865962a98f02f9f192ed95a2ca3b63c4e7_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e09b4ab7b9262bafb9935d14c3c0389ae43b5d6cef77460ba17e38c30d9f82ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e09b4ab7b9262bafb9935d14c3c0389ae43b5d6cef77460ba17e38c30d9f82ee->enter($__internal_e09b4ab7b9262bafb9935d14c3c0389ae43b5d6cef77460ba17e38c30d9f82ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/css/login.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_e09b4ab7b9262bafb9935d14c3c0389ae43b5d6cef77460ba17e38c30d9f82ee->leave($__internal_e09b4ab7b9262bafb9935d14c3c0389ae43b5d6cef77460ba17e38c30d9f82ee_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_ceea8d4e4a3f16497b9d1ab19d17fea418ef90b7d8cb9481813764ae4af0df14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ceea8d4e4a3f16497b9d1ab19d17fea418ef90b7d8cb9481813764ae4af0df14->enter($__internal_ceea8d4e4a3f16497b9d1ab19d17fea418ef90b7d8cb9481813764ae4af0df14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ceea8d4e4a3f16497b9d1ab19d17fea418ef90b7d8cb9481813764ae4af0df14->leave($__internal_ceea8d4e4a3f16497b9d1ab19d17fea418ef90b7d8cb9481813764ae4af0df14_prof);

    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1f77f43d312c8ce4a84af92ccb7d8f450de0db5f1e922183803749f280a768b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f77f43d312c8ce4a84af92ccb7d8f450de0db5f1e922183803749f280a768b8->enter($__internal_1f77f43d312c8ce4a84af92ccb7d8f450de0db5f1e922183803749f280a768b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 35
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/js/login.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
";
        
        $__internal_1f77f43d312c8ce4a84af92ccb7d8f450de0db5f1e922183803749f280a768b8->leave($__internal_1f77f43d312c8ce4a84af92ccb7d8f450de0db5f1e922183803749f280a768b8_prof);

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
{% endblock %}", "UserBundle:Security:login.html.twig", "C:\\xampp\\htdocs\\src\\UserBundle/Resources/views/Security/login.html.twig");
    }
}
