<?php

/* PageBundle:Default:login.html.twig */
class __TwigTemplate_532510ec25b83806dc60ea3920abb4f766331f1240caac6990f057d603ab2e7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "PageBundle:Default:login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_61ff9e4b1bacd761aed25fb969a829e1c24e414e3077e3bc668c7a5712f0ee6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61ff9e4b1bacd761aed25fb969a829e1c24e414e3077e3bc668c7a5712f0ee6c->enter($__internal_61ff9e4b1bacd761aed25fb969a829e1c24e414e3077e3bc668c7a5712f0ee6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61ff9e4b1bacd761aed25fb969a829e1c24e414e3077e3bc668c7a5712f0ee6c->leave($__internal_61ff9e4b1bacd761aed25fb969a829e1c24e414e3077e3bc668c7a5712f0ee6c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f0a810bfbcffb8944d5b03b265f10806c33eaa2c791c95042d41cce6b56ec435 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0a810bfbcffb8944d5b03b265f10806c33eaa2c791c95042d41cce6b56ec435->enter($__internal_f0a810bfbcffb8944d5b03b265f10806c33eaa2c791c95042d41cce6b56ec435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Farm Information ";
        
        $__internal_f0a810bfbcffb8944d5b03b265f10806c33eaa2c791c95042d41cce6b56ec435->leave($__internal_f0a810bfbcffb8944d5b03b265f10806c33eaa2c791c95042d41cce6b56ec435_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_15610d22ab33286381efdb4f7ed27381de8c422bdbe97c9bf44e8dbdc1ad4fc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15610d22ab33286381efdb4f7ed27381de8c422bdbe97c9bf44e8dbdc1ad4fc3->enter($__internal_15610d22ab33286381efdb4f7ed27381de8c422bdbe97c9bf44e8dbdc1ad4fc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/css/login.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_15610d22ab33286381efdb4f7ed27381de8c422bdbe97c9bf44e8dbdc1ad4fc3->leave($__internal_15610d22ab33286381efdb4f7ed27381de8c422bdbe97c9bf44e8dbdc1ad4fc3_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_b78027e66286e997e3505585168729326c92be314754bf4103e326975d4164d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b78027e66286e997e3505585168729326c92be314754bf4103e326975d4164d0->enter($__internal_b78027e66286e997e3505585168729326c92be314754bf4103e326975d4164d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<main style=\"background-image:url('/web/public/imgs/coffeeGrains.png');\">

<div id=\"login-modal\" >
          <div class=\"modal-dialog\">
                <div class=\"loginmodal-container\">
                    <h1>Sign in</h1><br>
                  <form>
                    <input type=\"text\" name=\"user\" placeholder=\"Username\">
                    <input type=\"password\" name=\"pass\" placeholder=\"Password\">
                    <input type=\"submit\" name=\"login\" class=\"login loginmodal-submit\" value=\"Login\">
                  </form>
                    
                  <div class=\"login-help\">
                    <a href=\"#\">Sign up</a>
                  </div>
                </div>
            </div>
          </div>
</main>
";
        
        $__internal_b78027e66286e997e3505585168729326c92be314754bf4103e326975d4164d0->leave($__internal_b78027e66286e997e3505585168729326c92be314754bf4103e326975d4164d0_prof);

    }

    public function getTemplateName()
    {
        return "PageBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 10,  68 => 9,  59 => 6,  54 => 5,  48 => 4,  36 => 3,  11 => 1,);
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

{% block title%} Farm Information {% endblock %}
{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('/web/public/css/login.css')}}\" />
{% endblock %}

{% block body %}
<main style=\"background-image:url('/web/public/imgs/coffeeGrains.png');\">

<div id=\"login-modal\" >
          <div class=\"modal-dialog\">
                <div class=\"loginmodal-container\">
                    <h1>Sign in</h1><br>
                  <form>
                    <input type=\"text\" name=\"user\" placeholder=\"Username\">
                    <input type=\"password\" name=\"pass\" placeholder=\"Password\">
                    <input type=\"submit\" name=\"login\" class=\"login loginmodal-submit\" value=\"Login\">
                  </form>
                    
                  <div class=\"login-help\">
                    <a href=\"#\">Sign up</a>
                  </div>
                </div>
            </div>
          </div>
</main>
{% endblock %}", "PageBundle:Default:login.html.twig", "C:\\xampp\\htdocs\\src\\PageBundle/Resources/views/Default/login.html.twig");
    }
}
