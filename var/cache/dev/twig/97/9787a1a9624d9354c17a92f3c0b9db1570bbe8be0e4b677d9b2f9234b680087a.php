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
        $__internal_c51a76545aff00db05960919e4ef7ce2b89c61e38e9d248eef784500d3f822f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c51a76545aff00db05960919e4ef7ce2b89c61e38e9d248eef784500d3f822f2->enter($__internal_c51a76545aff00db05960919e4ef7ce2b89c61e38e9d248eef784500d3f822f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Security/login.html.twig"));

        $__internal_4ac80cc33c3aa2442ee996faa092c297e420a35f5af366275795d2f7ea57afc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ac80cc33c3aa2442ee996faa092c297e420a35f5af366275795d2f7ea57afc2->enter($__internal_4ac80cc33c3aa2442ee996faa092c297e420a35f5af366275795d2f7ea57afc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c51a76545aff00db05960919e4ef7ce2b89c61e38e9d248eef784500d3f822f2->leave($__internal_c51a76545aff00db05960919e4ef7ce2b89c61e38e9d248eef784500d3f822f2_prof);

        
        $__internal_4ac80cc33c3aa2442ee996faa092c297e420a35f5af366275795d2f7ea57afc2->leave($__internal_4ac80cc33c3aa2442ee996faa092c297e420a35f5af366275795d2f7ea57afc2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9d33a92b40ec2b8164c85354c6d70b5342686c15c9402d896e3ed014a7a85ad2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d33a92b40ec2b8164c85354c6d70b5342686c15c9402d896e3ed014a7a85ad2->enter($__internal_9d33a92b40ec2b8164c85354c6d70b5342686c15c9402d896e3ed014a7a85ad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6e968c21a948e95c5de68b03170fe7f5ec70665aa4fbf8e726f80c5e1c36ee39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e968c21a948e95c5de68b03170fe7f5ec70665aa4fbf8e726f80c5e1c36ee39->enter($__internal_6e968c21a948e95c5de68b03170fe7f5ec70665aa4fbf8e726f80c5e1c36ee39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Sign In ";
        
        $__internal_6e968c21a948e95c5de68b03170fe7f5ec70665aa4fbf8e726f80c5e1c36ee39->leave($__internal_6e968c21a948e95c5de68b03170fe7f5ec70665aa4fbf8e726f80c5e1c36ee39_prof);

        
        $__internal_9d33a92b40ec2b8164c85354c6d70b5342686c15c9402d896e3ed014a7a85ad2->leave($__internal_9d33a92b40ec2b8164c85354c6d70b5342686c15c9402d896e3ed014a7a85ad2_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dd4f1f1be159deeb1f94b49999382c46161417451dbaf277f16518f33a792845 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd4f1f1be159deeb1f94b49999382c46161417451dbaf277f16518f33a792845->enter($__internal_dd4f1f1be159deeb1f94b49999382c46161417451dbaf277f16518f33a792845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_336d7e09d13b73c362fef0de5c179f86094112b0a5814293961c39fc992d5428 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_336d7e09d13b73c362fef0de5c179f86094112b0a5814293961c39fc992d5428->enter($__internal_336d7e09d13b73c362fef0de5c179f86094112b0a5814293961c39fc992d5428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/login.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_336d7e09d13b73c362fef0de5c179f86094112b0a5814293961c39fc992d5428->leave($__internal_336d7e09d13b73c362fef0de5c179f86094112b0a5814293961c39fc992d5428_prof);

        
        $__internal_dd4f1f1be159deeb1f94b49999382c46161417451dbaf277f16518f33a792845->leave($__internal_dd4f1f1be159deeb1f94b49999382c46161417451dbaf277f16518f33a792845_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_7af7311186119fe3db85722fcb604935dbe2026f8942ee075d1f202d3066a02a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7af7311186119fe3db85722fcb604935dbe2026f8942ee075d1f202d3066a02a->enter($__internal_7af7311186119fe3db85722fcb604935dbe2026f8942ee075d1f202d3066a02a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3ab9986bd517475125d1056124fe6acc21b4a090cfe49e4267a0aad86cdab5da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ab9986bd517475125d1056124fe6acc21b4a090cfe49e4267a0aad86cdab5da->enter($__internal_3ab9986bd517475125d1056124fe6acc21b4a090cfe49e4267a0aad86cdab5da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3ab9986bd517475125d1056124fe6acc21b4a090cfe49e4267a0aad86cdab5da->leave($__internal_3ab9986bd517475125d1056124fe6acc21b4a090cfe49e4267a0aad86cdab5da_prof);

        
        $__internal_7af7311186119fe3db85722fcb604935dbe2026f8942ee075d1f202d3066a02a->leave($__internal_7af7311186119fe3db85722fcb604935dbe2026f8942ee075d1f202d3066a02a_prof);

    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e2a5630b090577ac94759eb07c273fa848d0ccc83df4c79ebeff787cf5891a4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2a5630b090577ac94759eb07c273fa848d0ccc83df4c79ebeff787cf5891a4b->enter($__internal_e2a5630b090577ac94759eb07c273fa848d0ccc83df4c79ebeff787cf5891a4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e14654e6512456c490db6ac8a6d67b7abc93eface647fe70728fc982c1070dfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e14654e6512456c490db6ac8a6d67b7abc93eface647fe70728fc982c1070dfa->enter($__internal_e14654e6512456c490db6ac8a6d67b7abc93eface647fe70728fc982c1070dfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_e14654e6512456c490db6ac8a6d67b7abc93eface647fe70728fc982c1070dfa->leave($__internal_e14654e6512456c490db6ac8a6d67b7abc93eface647fe70728fc982c1070dfa_prof);

        
        $__internal_e2a5630b090577ac94759eb07c273fa848d0ccc83df4c79ebeff787cf5891a4b->leave($__internal_e2a5630b090577ac94759eb07c273fa848d0ccc83df4c79ebeff787cf5891a4b_prof);

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
{% endblock %}", "@User/Security/login.html.twig", "C:\\xampp\\htdocs\\crgc\\src\\UserBundle\\Resources\\views\\Security\\login.html.twig");
    }
}
