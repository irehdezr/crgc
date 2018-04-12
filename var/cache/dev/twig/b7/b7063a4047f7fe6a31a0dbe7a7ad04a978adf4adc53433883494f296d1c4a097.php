<?php

/* UserBundle:Default:signUp.html.twig */
class __TwigTemplate_a13a00e1376815ec10a6d5087bbdafe59986df371da5edb2103a47858e321565 extends Twig_Template
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
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c6f94383f4bb29dab14f3b49d92495176a580c827da42692e6f5636bc23a78e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6f94383f4bb29dab14f3b49d92495176a580c827da42692e6f5636bc23a78e4->enter($__internal_c6f94383f4bb29dab14f3b49d92495176a580c827da42692e6f5636bc23a78e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:signUp.html.twig"));

        $__internal_14f9b6d85986ffd345e6c5ea9852aa2928f6853e6990d2e58e03a050c5c5e118 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14f9b6d85986ffd345e6c5ea9852aa2928f6853e6990d2e58e03a050c5c5e118->enter($__internal_14f9b6d85986ffd345e6c5ea9852aa2928f6853e6990d2e58e03a050c5c5e118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:signUp.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6f94383f4bb29dab14f3b49d92495176a580c827da42692e6f5636bc23a78e4->leave($__internal_c6f94383f4bb29dab14f3b49d92495176a580c827da42692e6f5636bc23a78e4_prof);

        
        $__internal_14f9b6d85986ffd345e6c5ea9852aa2928f6853e6990d2e58e03a050c5c5e118->leave($__internal_14f9b6d85986ffd345e6c5ea9852aa2928f6853e6990d2e58e03a050c5c5e118_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c7612b7de7684ef04b42f0901e402940d3d4e0c2b4aab9ab8e228c457a060eb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7612b7de7684ef04b42f0901e402940d3d4e0c2b4aab9ab8e228c457a060eb7->enter($__internal_c7612b7de7684ef04b42f0901e402940d3d4e0c2b4aab9ab8e228c457a060eb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_67270d8837d0c2c4d2ae16b16606ab0f11530495849bd11e12c985f092286352 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67270d8837d0c2c4d2ae16b16606ab0f11530495849bd11e12c985f092286352->enter($__internal_67270d8837d0c2c4d2ae16b16606ab0f11530495849bd11e12c985f092286352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Sign Up ";
        
        $__internal_67270d8837d0c2c4d2ae16b16606ab0f11530495849bd11e12c985f092286352->leave($__internal_67270d8837d0c2c4d2ae16b16606ab0f11530495849bd11e12c985f092286352_prof);

        
        $__internal_c7612b7de7684ef04b42f0901e402940d3d4e0c2b4aab9ab8e228c457a060eb7->leave($__internal_c7612b7de7684ef04b42f0901e402940d3d4e0c2b4aab9ab8e228c457a060eb7_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8de144c30c93d5925fe0c1053c0829df41733dfef21c595b5328d6f269532480 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8de144c30c93d5925fe0c1053c0829df41733dfef21c595b5328d6f269532480->enter($__internal_8de144c30c93d5925fe0c1053c0829df41733dfef21c595b5328d6f269532480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_83577726fecaf50a0f0fae969e1a5a4aaa678a5efdc5e6c157e625e4e691e3a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83577726fecaf50a0f0fae969e1a5a4aaa678a5efdc5e6c157e625e4e691e3a9->enter($__internal_83577726fecaf50a0f0fae969e1a5a4aaa678a5efdc5e6c157e625e4e691e3a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/login.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_83577726fecaf50a0f0fae969e1a5a4aaa678a5efdc5e6c157e625e4e691e3a9->leave($__internal_83577726fecaf50a0f0fae969e1a5a4aaa678a5efdc5e6c157e625e4e691e3a9_prof);

        
        $__internal_8de144c30c93d5925fe0c1053c0829df41733dfef21c595b5328d6f269532480->leave($__internal_8de144c30c93d5925fe0c1053c0829df41733dfef21c595b5328d6f269532480_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_3c408dbbab2a920eaf1d9527d0b65df11dbce30b0d523eb2db925bab04778f84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c408dbbab2a920eaf1d9527d0b65df11dbce30b0d523eb2db925bab04778f84->enter($__internal_3c408dbbab2a920eaf1d9527d0b65df11dbce30b0d523eb2db925bab04778f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_727c079ca8c42a3b72ba6bf7afa621fb567555adb0b3c81d8871b10e22ace567 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_727c079ca8c42a3b72ba6bf7afa621fb567555adb0b3c81d8871b10e22ace567->enter($__internal_727c079ca8c42a3b72ba6bf7afa621fb567555adb0b3c81d8871b10e22ace567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstname", array()), 'label');
        echo "   
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstname", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Firstname")));
        echo "  
            <span class=\"text-danger\">";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstname", array()), 'errors');
        echo "</span>       
          </div>
          <div class=\"form-group\">
            ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lastname", array()), 'label');
        echo "   
            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lastname", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Lastname")));
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
        
        $__internal_727c079ca8c42a3b72ba6bf7afa621fb567555adb0b3c81d8871b10e22ace567->leave($__internal_727c079ca8c42a3b72ba6bf7afa621fb567555adb0b3c81d8871b10e22ace567_prof);

        
        $__internal_3c408dbbab2a920eaf1d9527d0b65df11dbce30b0d523eb2db925bab04778f84->leave($__internal_3c408dbbab2a920eaf1d9527d0b65df11dbce30b0d523eb2db925bab04778f84_prof);

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
        return array (  196 => 49,  191 => 47,  185 => 44,  181 => 43,  177 => 42,  171 => 39,  167 => 38,  163 => 37,  157 => 34,  153 => 33,  149 => 32,  143 => 29,  139 => 28,  135 => 27,  129 => 24,  125 => 23,  121 => 22,  115 => 19,  111 => 18,  107 => 17,  102 => 15,  95 => 10,  86 => 9,  74 => 6,  69 => 5,  60 => 4,  42 => 3,  11 => 1,);
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
{% endblock %}", "UserBundle:Default:signUp.html.twig", "C:\\xampp\\htdocs\\crgc\\src\\UserBundle/Resources/views/Default/signUp.html.twig");
    }
}
