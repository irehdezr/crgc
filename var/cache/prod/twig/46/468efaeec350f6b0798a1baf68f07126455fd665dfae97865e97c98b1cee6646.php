<?php

/* PageBundle:Default:signUp.html.twig */
class __TwigTemplate_cc2a020c2e2f3d2960f85e917af7aae2c688d9ee0f21b3ca48a71bab9fdea92d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "PageBundle:Default:signUp.html.twig", 1);
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
        $__internal_f954de5441abb1aacf81800417cfb337acdea6f9e2de4cc037f68b3f04bf825f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f954de5441abb1aacf81800417cfb337acdea6f9e2de4cc037f68b3f04bf825f->enter($__internal_f954de5441abb1aacf81800417cfb337acdea6f9e2de4cc037f68b3f04bf825f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:signUp.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f954de5441abb1aacf81800417cfb337acdea6f9e2de4cc037f68b3f04bf825f->leave($__internal_f954de5441abb1aacf81800417cfb337acdea6f9e2de4cc037f68b3f04bf825f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8752d199ab73ea763049499acba5667831b6ca5541281aacdecc9fd88aac8808 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8752d199ab73ea763049499acba5667831b6ca5541281aacdecc9fd88aac8808->enter($__internal_8752d199ab73ea763049499acba5667831b6ca5541281aacdecc9fd88aac8808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Sign Up ";
        
        $__internal_8752d199ab73ea763049499acba5667831b6ca5541281aacdecc9fd88aac8808->leave($__internal_8752d199ab73ea763049499acba5667831b6ca5541281aacdecc9fd88aac8808_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5f6dd37474819bd3f814b7206531e1a12dbe34647708258af17285b28b89dd35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f6dd37474819bd3f814b7206531e1a12dbe34647708258af17285b28b89dd35->enter($__internal_5f6dd37474819bd3f814b7206531e1a12dbe34647708258af17285b28b89dd35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/css/login.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_5f6dd37474819bd3f814b7206531e1a12dbe34647708258af17285b28b89dd35->leave($__internal_5f6dd37474819bd3f814b7206531e1a12dbe34647708258af17285b28b89dd35_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_771f3ae76f0778c3ae57978512183325f22e65366b95677ba5d77e0d626ab541 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_771f3ae76f0778c3ae57978512183325f22e65366b95677ba5d77e0d626ab541->enter($__internal_771f3ae76f0778c3ae57978512183325f22e65366b95677ba5d77e0d626ab541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<main>
  <div id=\"login-modal\" >
    <div class=\"modal-dialog\">
      <div class=\"loginmodal-container\">
        <h1>Sign up</h1><br>
        <form id=\"signup\">
          <input type=\"text\" name=\"name\" placeholder=\"Name\" required>
          <input type=\"text\" name=\"lastName\" placeholder=\"Last Name\" required>
          <input type=\"text\" name=\"emal\" placeholder=\"E-mail\" required>
          <input type=\"text\" name=\"country\" placeholder=\"Contry\" required>
          <input type=\"text\" name=\"state\" placeholder=\"State/Province\" required>
          <input type=\"text\" name=\"city\" placeholder=\"City\" required>
          <input type=\"text\" name=\"address\" placeholder=\"Address\" required>
          <input type=\"text\" name=\"zip\" placeholder=\"Zip code\" required>
          <input type=\"text\" name=\"phone\" placeholder=\"Phone\" required>
          <input type=\"password\" name=\"pass\" placeholder=\"Password\" required>
          <input type=\"password\" name=\"passconfirm\" placeholder=\"Confirm password\" required>
          <input type=\"submit\" name=\"signup\" class=\"login loginmodal-submit\" value=\"Sign up\">
        </form>
      </div>
    </div>
  </div>
</main>
";
        
        $__internal_771f3ae76f0778c3ae57978512183325f22e65366b95677ba5d77e0d626ab541->leave($__internal_771f3ae76f0778c3ae57978512183325f22e65366b95677ba5d77e0d626ab541_prof);

    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_51769419b066443c472b7e7591daa38e5bdaabf0113344f103d8ca20c45324ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51769419b066443c472b7e7591daa38e5bdaabf0113344f103d8ca20c45324ce->enter($__internal_51769419b066443c472b7e7591daa38e5bdaabf0113344f103d8ca20c45324ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 36
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/js/signup.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
";
        
        $__internal_51769419b066443c472b7e7591daa38e5bdaabf0113344f103d8ca20c45324ce->leave($__internal_51769419b066443c472b7e7591daa38e5bdaabf0113344f103d8ca20c45324ce_prof);

    }

    public function getTemplateName()
    {
        return "PageBundle:Default:signUp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 37,  111 => 36,  105 => 35,  75 => 10,  69 => 9,  60 => 6,  55 => 5,  49 => 4,  37 => 3,  11 => 1,);
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

{% block title%} Sign Up {% endblock %}
{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('/web/public/css/login.css')}}\" />
{% endblock %}

{% block body %}
<main>
  <div id=\"login-modal\" >
    <div class=\"modal-dialog\">
      <div class=\"loginmodal-container\">
        <h1>Sign up</h1><br>
        <form id=\"signup\">
          <input type=\"text\" name=\"name\" placeholder=\"Name\" required>
          <input type=\"text\" name=\"lastName\" placeholder=\"Last Name\" required>
          <input type=\"text\" name=\"emal\" placeholder=\"E-mail\" required>
          <input type=\"text\" name=\"country\" placeholder=\"Contry\" required>
          <input type=\"text\" name=\"state\" placeholder=\"State/Province\" required>
          <input type=\"text\" name=\"city\" placeholder=\"City\" required>
          <input type=\"text\" name=\"address\" placeholder=\"Address\" required>
          <input type=\"text\" name=\"zip\" placeholder=\"Zip code\" required>
          <input type=\"text\" name=\"phone\" placeholder=\"Phone\" required>
          <input type=\"password\" name=\"pass\" placeholder=\"Password\" required>
          <input type=\"password\" name=\"passconfirm\" placeholder=\"Confirm password\" required>
          <input type=\"submit\" name=\"signup\" class=\"login loginmodal-submit\" value=\"Sign up\">
        </form>
      </div>
    </div>
  </div>
</main>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('/web/public/js/signup.js') }}\" type=\"text/javascript\"></script> 
{% endblock %}", "PageBundle:Default:signUp.html.twig", "C:\\xampp\\htdocs\\src\\PageBundle/Resources/views/Default/signUp.html.twig");
    }
}
