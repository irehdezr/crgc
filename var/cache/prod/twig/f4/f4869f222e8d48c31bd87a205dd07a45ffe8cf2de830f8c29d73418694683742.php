<?php

/* UserBundle:Default:signUp.html.twig */
class __TwigTemplate_6241310daecfebf0b8a13f33a8b8057c749e5fe6aef03f1479b1bf9fa283e212 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "UserBundle:Default:signUp.html.twig", 1);
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
        $__internal_9d532e0f088da9f379ba0daae0b017f421d8476982f798b0601141451c630b90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d532e0f088da9f379ba0daae0b017f421d8476982f798b0601141451c630b90->enter($__internal_9d532e0f088da9f379ba0daae0b017f421d8476982f798b0601141451c630b90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:signUp.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d532e0f088da9f379ba0daae0b017f421d8476982f798b0601141451c630b90->leave($__internal_9d532e0f088da9f379ba0daae0b017f421d8476982f798b0601141451c630b90_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_68a95c86e6f714bce3157422d65710089aef0b90e6c9e10e452ca45a485101af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68a95c86e6f714bce3157422d65710089aef0b90e6c9e10e452ca45a485101af->enter($__internal_68a95c86e6f714bce3157422d65710089aef0b90e6c9e10e452ca45a485101af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Sign Up ";
        
        $__internal_68a95c86e6f714bce3157422d65710089aef0b90e6c9e10e452ca45a485101af->leave($__internal_68a95c86e6f714bce3157422d65710089aef0b90e6c9e10e452ca45a485101af_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_41db619acac6d5c21bddbf5de258be34c2bce9bcec3ef7cb3845ae24981ec4b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41db619acac6d5c21bddbf5de258be34c2bce9bcec3ef7cb3845ae24981ec4b6->enter($__internal_41db619acac6d5c21bddbf5de258be34c2bce9bcec3ef7cb3845ae24981ec4b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/css/login.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_41db619acac6d5c21bddbf5de258be34c2bce9bcec3ef7cb3845ae24981ec4b6->leave($__internal_41db619acac6d5c21bddbf5de258be34c2bce9bcec3ef7cb3845ae24981ec4b6_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_348c1f642ae111ed897a49af39dd79c4279327d54699f569c0093dc9f6f4478e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_348c1f642ae111ed897a49af39dd79c4279327d54699f569c0093dc9f6f4478e->enter($__internal_348c1f642ae111ed897a49af39dd79c4279327d54699f569c0093dc9f6f4478e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<main>
  <div id=\"login-modal\" >
    <div class=\"modal-dialog\">
      <div class=\"loginmodal-container\">
        <h1>Sign up</h1><br>
        ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate", "role" => "form")));
        echo "
          <div class=\"form-group\">
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'label');
        echo "   
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Your name")));
        echo "  
            <span class=\"text-danger\">";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'errors');
        echo "</span>       
          </div>
          <div class=\"form-group\">
            ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lastname", array()), 'label');
        echo "   
            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lastname", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Your lastname")));
        echo "  
            <span class=\"text-danger\">";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lastname", array()), 'errors');
        echo "</span>       
          </div>
          <div class=\"form-group\">
            ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), "first", array()), 'label');
        echo "   
            ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "example@domain.com")));
        echo "  
            <span class=\"text-danger\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), "first", array()), 'errors');
        echo "</span>       
          </div>
          <div class=\"form-group\">
            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), "second", array()), 'label');
        echo "   
            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "example@domain.com")));
        echo "  
            <span class=\"text-danger\">";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), "first", array()), 'errors');
        echo "</span>       
          </div>
          <div class=\"form-group\">
            ";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "password", array()), "first", array()), 'label');
        echo "   
            ";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "password", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "**********")));
        echo "  
            <span class=\"text-danger\">";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "password", array()), "first", array()), 'errors');
        echo "</span>       
          </div>
          <div class=\"form-group\">
            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "password", array()), "second", array()), 'label');
        echo "   
            ";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "password", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "**********")));
        echo "  
            <span class=\"text-danger\">";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "password", array()), "first", array()), 'errors');
        echo "</span>       
          </div>
          <div class=\"form-group\"> 
            ";
        // line 47
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", array()), 'widget', array("label" => "Create your new account", "attr" => array("class" => "pull-right btn btn-success")));
        echo "    
          </div>
        ";
        // line 49
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
      </div>
    </div>
  </div>
</main>
";
        
        $__internal_348c1f642ae111ed897a49af39dd79c4279327d54699f569c0093dc9f6f4478e->leave($__internal_348c1f642ae111ed897a49af39dd79c4279327d54699f569c0093dc9f6f4478e_prof);

    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0def4387edbc443c71b48f02007977cc1f7ace87fafd4e46364f4427b461acf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0def4387edbc443c71b48f02007977cc1f7ace87fafd4e46364f4427b461acf8->enter($__internal_0def4387edbc443c71b48f02007977cc1f7ace87fafd4e46364f4427b461acf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 57
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/js/signup.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
";
        
        $__internal_0def4387edbc443c71b48f02007977cc1f7ace87fafd4e46364f4427b461acf8->leave($__internal_0def4387edbc443c71b48f02007977cc1f7ace87fafd4e46364f4427b461acf8_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Default:signUp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 58,  195 => 57,  189 => 56,  176 => 49,  171 => 47,  165 => 44,  161 => 43,  157 => 42,  151 => 39,  147 => 38,  143 => 37,  137 => 34,  133 => 33,  129 => 32,  123 => 29,  119 => 28,  115 => 27,  109 => 24,  105 => 23,  101 => 22,  95 => 19,  91 => 18,  87 => 17,  82 => 15,  75 => 10,  69 => 9,  60 => 6,  55 => 5,  49 => 4,  37 => 3,  11 => 1,);
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
        {{ form_start(form,{'attr': {'novalidate': 'novalidate', 'role': 'form'}} ) }}
          <div class=\"form-group\">
            {{ form_label(form.username) }}   
            {{ form_widget(form.username, { \"attr\": {\"class\": \"form-control\", \"placeholder\": \"Your name\"} }) }}  
            <span class=\"text-danger\">{{ form_errors(form.username) }}</span>       
          </div>
          <div class=\"form-group\">
            {{ form_label(form.lastname) }}   
            {{ form_widget(form.lastname, { \"attr\": {\"class\": \"form-control\", \"placeholder\": \"Your lastname\"} }) }}  
            <span class=\"text-danger\">{{ form_errors(form.lastname) }}</span>       
          </div>
          <div class=\"form-group\">
            {{ form_label(form.email.first) }}   
            {{ form_widget(form.email.first, { \"attr\": {\"class\": \"form-control\", \"placeholder\": \"example@domain.com\"} }) }}  
            <span class=\"text-danger\">{{ form_errors(form.email.first) }}</span>       
          </div>
          <div class=\"form-group\">
            {{ form_label(form.email.second) }}   
            {{ form_widget(form.email.second, { \"attr\": {\"class\": \"form-control\", \"placeholder\": \"example@domain.com\"} }) }}  
            <span class=\"text-danger\">{{ form_errors(form.email.first) }}</span>       
          </div>
          <div class=\"form-group\">
            {{ form_label(form.password.first) }}   
            {{ form_widget(form.password.first, { \"attr\": {\"class\": \"form-control\", \"placeholder\": \"**********\"} }) }}  
            <span class=\"text-danger\">{{ form_errors(form.password.first) }}</span>       
          </div>
          <div class=\"form-group\">
            {{ form_label(form.password.second) }}   
            {{ form_widget(form.password.second, { \"attr\": {\"class\": \"form-control\", \"placeholder\": \"**********\"} }) }}  
            <span class=\"text-danger\">{{ form_errors(form.password.first) }}</span>       
          </div>
          <div class=\"form-group\"> 
            {{ form_widget(form.save, {\"label\":\"Create your new account\", \"attr\": { \"class\": \"pull-right btn btn-success\"} }) }}    
          </div>
        {{ form_end(form) }}
      </div>
    </div>
  </div>
</main>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('/web/public/js/signup.js') }}\" type=\"text/javascript\"></script> 
{% endblock %}", "UserBundle:Default:signUp.html.twig", "C:\\xampp\\htdocs\\src\\UserBundle/Resources/views/Default/signUp.html.twig");
    }
}