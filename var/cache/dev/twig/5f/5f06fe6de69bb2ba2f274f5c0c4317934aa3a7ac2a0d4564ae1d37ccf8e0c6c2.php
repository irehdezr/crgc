<?php

/* UserBundle:Security:login.html.twig */
class __TwigTemplate_733bf8cb137e0255b9f30a3f6bdb9b1d2ff2a5805adc65235f31f39fedcdfb5a extends Twig_Template
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
        $__internal_bf73b0a1246d3ac6df082c8622fce8d9aa2db07b26472d8c7ae70acc56517b3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf73b0a1246d3ac6df082c8622fce8d9aa2db07b26472d8c7ae70acc56517b3e->enter($__internal_bf73b0a1246d3ac6df082c8622fce8d9aa2db07b26472d8c7ae70acc56517b3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Security:login.html.twig"));

        $__internal_510931185e6ca3d8ace86554771b754fdb50fc208e2f25328134c1da95eaff7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_510931185e6ca3d8ace86554771b754fdb50fc208e2f25328134c1da95eaff7b->enter($__internal_510931185e6ca3d8ace86554771b754fdb50fc208e2f25328134c1da95eaff7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf73b0a1246d3ac6df082c8622fce8d9aa2db07b26472d8c7ae70acc56517b3e->leave($__internal_bf73b0a1246d3ac6df082c8622fce8d9aa2db07b26472d8c7ae70acc56517b3e_prof);

        
        $__internal_510931185e6ca3d8ace86554771b754fdb50fc208e2f25328134c1da95eaff7b->leave($__internal_510931185e6ca3d8ace86554771b754fdb50fc208e2f25328134c1da95eaff7b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_59ff76db9b6709c11459a934216e2e292484cfd36cb109ce1f81f1f27015e594 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59ff76db9b6709c11459a934216e2e292484cfd36cb109ce1f81f1f27015e594->enter($__internal_59ff76db9b6709c11459a934216e2e292484cfd36cb109ce1f81f1f27015e594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_83518be9271793236581a205d8a66c269d712a64b679e7cd12c7818f06a7f665 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83518be9271793236581a205d8a66c269d712a64b679e7cd12c7818f06a7f665->enter($__internal_83518be9271793236581a205d8a66c269d712a64b679e7cd12c7818f06a7f665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Sign In ";
        
        $__internal_83518be9271793236581a205d8a66c269d712a64b679e7cd12c7818f06a7f665->leave($__internal_83518be9271793236581a205d8a66c269d712a64b679e7cd12c7818f06a7f665_prof);

        
        $__internal_59ff76db9b6709c11459a934216e2e292484cfd36cb109ce1f81f1f27015e594->leave($__internal_59ff76db9b6709c11459a934216e2e292484cfd36cb109ce1f81f1f27015e594_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c716cb294e886279c2550178eb579d534f22b18ca0b8d440895339433ae7f502 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c716cb294e886279c2550178eb579d534f22b18ca0b8d440895339433ae7f502->enter($__internal_c716cb294e886279c2550178eb579d534f22b18ca0b8d440895339433ae7f502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_31bb093db5bd408d89ec1458bb6534529f8287b041b4a8ae82a1a787b91bac57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31bb093db5bd408d89ec1458bb6534529f8287b041b4a8ae82a1a787b91bac57->enter($__internal_31bb093db5bd408d89ec1458bb6534529f8287b041b4a8ae82a1a787b91bac57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/css/login.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_31bb093db5bd408d89ec1458bb6534529f8287b041b4a8ae82a1a787b91bac57->leave($__internal_31bb093db5bd408d89ec1458bb6534529f8287b041b4a8ae82a1a787b91bac57_prof);

        
        $__internal_c716cb294e886279c2550178eb579d534f22b18ca0b8d440895339433ae7f502->leave($__internal_c716cb294e886279c2550178eb579d534f22b18ca0b8d440895339433ae7f502_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_42e81070705d1c249e07fd48f6472872bcb7b17a2890e4aca7ea71bb789f522d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42e81070705d1c249e07fd48f6472872bcb7b17a2890e4aca7ea71bb789f522d->enter($__internal_42e81070705d1c249e07fd48f6472872bcb7b17a2890e4aca7ea71bb789f522d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9740493821efad5d7d04ab19ab6c50ded772ca5df6f00137325ea1ce5bec7a99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9740493821efad5d7d04ab19ab6c50ded772ca5df6f00137325ea1ce5bec7a99->enter($__internal_9740493821efad5d7d04ab19ab6c50ded772ca5df6f00137325ea1ce5bec7a99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9740493821efad5d7d04ab19ab6c50ded772ca5df6f00137325ea1ce5bec7a99->leave($__internal_9740493821efad5d7d04ab19ab6c50ded772ca5df6f00137325ea1ce5bec7a99_prof);

        
        $__internal_42e81070705d1c249e07fd48f6472872bcb7b17a2890e4aca7ea71bb789f522d->leave($__internal_42e81070705d1c249e07fd48f6472872bcb7b17a2890e4aca7ea71bb789f522d_prof);

    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9a632b6ff24a6416bac83ccd0e6d2fdbe34a832c2c0349f5356366437243d808 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a632b6ff24a6416bac83ccd0e6d2fdbe34a832c2c0349f5356366437243d808->enter($__internal_9a632b6ff24a6416bac83ccd0e6d2fdbe34a832c2c0349f5356366437243d808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4ada1b5156ee2eeb229a32c2955da4c8454259cfea8cec25484b097b0665755b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ada1b5156ee2eeb229a32c2955da4c8454259cfea8cec25484b097b0665755b->enter($__internal_4ada1b5156ee2eeb229a32c2955da4c8454259cfea8cec25484b097b0665755b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 35
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/js/login.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
";
        
        $__internal_4ada1b5156ee2eeb229a32c2955da4c8454259cfea8cec25484b097b0665755b->leave($__internal_4ada1b5156ee2eeb229a32c2955da4c8454259cfea8cec25484b097b0665755b_prof);

        
        $__internal_9a632b6ff24a6416bac83ccd0e6d2fdbe34a832c2c0349f5356366437243d808->leave($__internal_9a632b6ff24a6416bac83ccd0e6d2fdbe34a832c2c0349f5356366437243d808_prof);

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
{% endblock %}", "UserBundle:Security:login.html.twig", "C:\\xampp\\htdocs\\src\\UserBundle/Resources/views/Security/login.html.twig");
    }
}
