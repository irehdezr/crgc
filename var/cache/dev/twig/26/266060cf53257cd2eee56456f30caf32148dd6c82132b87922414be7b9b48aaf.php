<?php

/* UserBundle:Default:signUp.html.twig */
class __TwigTemplate_f3170978ae7a1eec5ae18535caf15a2855b7212d6cc9b55ab74019d6c4d4614a extends Twig_Template
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
        $__internal_1f65385aacd495cecd8e4f1d69b8fa2bcbe71088dba0a3fdb0d8fa5635a60edf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f65385aacd495cecd8e4f1d69b8fa2bcbe71088dba0a3fdb0d8fa5635a60edf->enter($__internal_1f65385aacd495cecd8e4f1d69b8fa2bcbe71088dba0a3fdb0d8fa5635a60edf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:signUp.html.twig"));

        $__internal_8a89805a27ce06f322e7591f006b8abb73571e1098d86472f53417e1b15248cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a89805a27ce06f322e7591f006b8abb73571e1098d86472f53417e1b15248cf->enter($__internal_8a89805a27ce06f322e7591f006b8abb73571e1098d86472f53417e1b15248cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:signUp.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f65385aacd495cecd8e4f1d69b8fa2bcbe71088dba0a3fdb0d8fa5635a60edf->leave($__internal_1f65385aacd495cecd8e4f1d69b8fa2bcbe71088dba0a3fdb0d8fa5635a60edf_prof);

        
        $__internal_8a89805a27ce06f322e7591f006b8abb73571e1098d86472f53417e1b15248cf->leave($__internal_8a89805a27ce06f322e7591f006b8abb73571e1098d86472f53417e1b15248cf_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7ffdf3f8db6bcc610438e87ea3139355b0c11dc73ddf1ce5c8a2d194168420d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ffdf3f8db6bcc610438e87ea3139355b0c11dc73ddf1ce5c8a2d194168420d8->enter($__internal_7ffdf3f8db6bcc610438e87ea3139355b0c11dc73ddf1ce5c8a2d194168420d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_508647d5e5ad0b4d5edd6fbfc0da65c5221ff10577f8e4fd5bd015e533611763 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_508647d5e5ad0b4d5edd6fbfc0da65c5221ff10577f8e4fd5bd015e533611763->enter($__internal_508647d5e5ad0b4d5edd6fbfc0da65c5221ff10577f8e4fd5bd015e533611763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Sign Up ";
        
        $__internal_508647d5e5ad0b4d5edd6fbfc0da65c5221ff10577f8e4fd5bd015e533611763->leave($__internal_508647d5e5ad0b4d5edd6fbfc0da65c5221ff10577f8e4fd5bd015e533611763_prof);

        
        $__internal_7ffdf3f8db6bcc610438e87ea3139355b0c11dc73ddf1ce5c8a2d194168420d8->leave($__internal_7ffdf3f8db6bcc610438e87ea3139355b0c11dc73ddf1ce5c8a2d194168420d8_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4434a4bf261405910926fefe00a99bd7e66e979ea4c245417dcbe5deb781752b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4434a4bf261405910926fefe00a99bd7e66e979ea4c245417dcbe5deb781752b->enter($__internal_4434a4bf261405910926fefe00a99bd7e66e979ea4c245417dcbe5deb781752b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a3c7bbbe4a56952bc96206eb5e332423b411ae8f6c27037ee4ac4aae7a9f64e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3c7bbbe4a56952bc96206eb5e332423b411ae8f6c27037ee4ac4aae7a9f64e4->enter($__internal_a3c7bbbe4a56952bc96206eb5e332423b411ae8f6c27037ee4ac4aae7a9f64e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/login.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_a3c7bbbe4a56952bc96206eb5e332423b411ae8f6c27037ee4ac4aae7a9f64e4->leave($__internal_a3c7bbbe4a56952bc96206eb5e332423b411ae8f6c27037ee4ac4aae7a9f64e4_prof);

        
        $__internal_4434a4bf261405910926fefe00a99bd7e66e979ea4c245417dcbe5deb781752b->leave($__internal_4434a4bf261405910926fefe00a99bd7e66e979ea4c245417dcbe5deb781752b_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_f098732a1b6f285901597bde7cc0560defec8aca0f32ab33ba60d1168007d9e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f098732a1b6f285901597bde7cc0560defec8aca0f32ab33ba60d1168007d9e0->enter($__internal_f098732a1b6f285901597bde7cc0560defec8aca0f32ab33ba60d1168007d9e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b8953d50c44c1f5176dfefda349dcd6f7bb08e216418f0766057718ebf58c77f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8953d50c44c1f5176dfefda349dcd6f7bb08e216418f0766057718ebf58c77f->enter($__internal_b8953d50c44c1f5176dfefda349dcd6f7bb08e216418f0766057718ebf58c77f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nickname")));
        echo "  
            <span class=\"text-danger\">";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'errors');
        echo "</span>       
          </div>
          <div class=\"form-group\">
            ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstname", array()), 'label');
        echo "   
            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstname", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Firstname")));
        echo "  
            <span class=\"text-danger\">";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstname", array()), 'errors');
        echo "</span>       
          </div>
          <div class=\"form-group\">
            ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lastname", array()), 'label');
        echo "   
            ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lastname", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Lastname")));
        echo "  
            <span class=\"text-danger\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lastname", array()), 'errors');
        echo "</span>       
          </div>
          <div class=\"form-group\">
            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), "first", array()), 'label');
        echo "   
            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "example@domain.com")));
        echo "  
            <span class=\"text-danger\">";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), "first", array()), 'errors');
        echo "</span>       
          </div>
          <div class=\"form-group\">
            ";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), "second", array()), 'label');
        echo "   
            ";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "example@domain.com")));
        echo "  
            <span class=\"text-danger\">";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), "first", array()), 'errors');
        echo "</span>       
          </div>
          <div class=\"form-group\">
            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "password", array()), "first", array()), 'label');
        echo "   
            ";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "password", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "**********")));
        echo "  
            <span class=\"text-danger\">";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "password", array()), "first", array()), 'errors');
        echo "</span>       
          </div>
          <div class=\"form-group\">
            ";
        // line 47
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "password", array()), "second", array()), 'label');
        echo "   
            ";
        // line 48
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "password", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "**********")));
        echo "  
            <span class=\"text-danger\">";
        // line 49
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "password", array()), "first", array()), 'errors');
        echo "</span>       
          </div>
          <div class=\"form-group\"> 
            ";
        // line 52
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", array()), 'widget', array("label" => "Create your new account", "attr" => array("class" => "pull-right btn btn-success")));
        echo "    
          </div>
        ";
        // line 54
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
      </div>
    </div>
  </div>
</main>
";
        
        $__internal_b8953d50c44c1f5176dfefda349dcd6f7bb08e216418f0766057718ebf58c77f->leave($__internal_b8953d50c44c1f5176dfefda349dcd6f7bb08e216418f0766057718ebf58c77f_prof);

        
        $__internal_f098732a1b6f285901597bde7cc0560defec8aca0f32ab33ba60d1168007d9e0->leave($__internal_f098732a1b6f285901597bde7cc0560defec8aca0f32ab33ba60d1168007d9e0_prof);

    }

    // line 61
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cf2a543dc3446ffe5315ed21f6222fd55df7917ad005e9e1b65c6bb97d3f15be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf2a543dc3446ffe5315ed21f6222fd55df7917ad005e9e1b65c6bb97d3f15be->enter($__internal_cf2a543dc3446ffe5315ed21f6222fd55df7917ad005e9e1b65c6bb97d3f15be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_cc019391f9120741dec5e188ba6150ebe931413681a9685997f5f07aa183b8f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc019391f9120741dec5e188ba6150ebe931413681a9685997f5f07aa183b8f2->enter($__internal_cc019391f9120741dec5e188ba6150ebe931413681a9685997f5f07aa183b8f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 62
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/signup.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
";
        
        $__internal_cc019391f9120741dec5e188ba6150ebe931413681a9685997f5f07aa183b8f2->leave($__internal_cc019391f9120741dec5e188ba6150ebe931413681a9685997f5f07aa183b8f2_prof);

        
        $__internal_cf2a543dc3446ffe5315ed21f6222fd55df7917ad005e9e1b65c6bb97d3f15be->leave($__internal_cf2a543dc3446ffe5315ed21f6222fd55df7917ad005e9e1b65c6bb97d3f15be_prof);

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
        return array (  241 => 63,  236 => 62,  227 => 61,  211 => 54,  206 => 52,  200 => 49,  196 => 48,  192 => 47,  186 => 44,  182 => 43,  178 => 42,  172 => 39,  168 => 38,  164 => 37,  158 => 34,  154 => 33,  150 => 32,  144 => 29,  140 => 28,  136 => 27,  130 => 24,  126 => 23,  122 => 22,  116 => 19,  112 => 18,  108 => 17,  103 => 15,  96 => 10,  87 => 9,  75 => 6,  70 => 5,  61 => 4,  43 => 3,  11 => 1,);
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
    <link rel=\"stylesheet\" href=\"{{ asset('css/login.css')}}\" />
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
            {{ form_widget(form.username, { \"attr\": {\"class\": \"form-control\", \"placeholder\": \"Nickname\"} }) }}  
            <span class=\"text-danger\">{{ form_errors(form.username) }}</span>       
          </div>
          <div class=\"form-group\">
            {{ form_label(form.firstname) }}   
            {{ form_widget(form.firstname, { \"attr\": {\"class\": \"form-control\", \"placeholder\": \"Firstname\"} }) }}  
            <span class=\"text-danger\">{{ form_errors(form.firstname) }}</span>       
          </div>
          <div class=\"form-group\">
            {{ form_label(form.lastname) }}   
            {{ form_widget(form.lastname, { \"attr\": {\"class\": \"form-control\", \"placeholder\": \"Lastname\"} }) }}  
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
    <script src=\"{{ asset('js/signup.js') }}\" type=\"text/javascript\"></script> 
{% endblock %}", "UserBundle:Default:signUp.html.twig", "C:\\xampp\\htdocs\\crgc\\var\\cache\\dev/../../../src/UserBundle/Resources/views/Default/signUp.html.twig");
    }
}
