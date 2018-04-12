<?php

/* @User/Default/signUp.html.twig */
class __TwigTemplate_2e503530df48c66d46874daac6313642b26b341f40756580cbd2462f36add111 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "@User/Default/signUp.html.twig", 1);
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
        $__internal_ec959c4baf20eb5f7f9c4fb3dd507375f81ab29af62201185de56acdb5146ad4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec959c4baf20eb5f7f9c4fb3dd507375f81ab29af62201185de56acdb5146ad4->enter($__internal_ec959c4baf20eb5f7f9c4fb3dd507375f81ab29af62201185de56acdb5146ad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Default/signUp.html.twig"));

        $__internal_def35abc801cca2d0352857f244041999625b133171ce004695c386864df1eb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_def35abc801cca2d0352857f244041999625b133171ce004695c386864df1eb6->enter($__internal_def35abc801cca2d0352857f244041999625b133171ce004695c386864df1eb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Default/signUp.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec959c4baf20eb5f7f9c4fb3dd507375f81ab29af62201185de56acdb5146ad4->leave($__internal_ec959c4baf20eb5f7f9c4fb3dd507375f81ab29af62201185de56acdb5146ad4_prof);

        
        $__internal_def35abc801cca2d0352857f244041999625b133171ce004695c386864df1eb6->leave($__internal_def35abc801cca2d0352857f244041999625b133171ce004695c386864df1eb6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_46035a1b03f20942aaf3fefde119ef3e3359c4aa00f5a89685b0f04651b006c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46035a1b03f20942aaf3fefde119ef3e3359c4aa00f5a89685b0f04651b006c9->enter($__internal_46035a1b03f20942aaf3fefde119ef3e3359c4aa00f5a89685b0f04651b006c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_529576cfafe5a955c0a2c092e165858b95b10e8ba7c06f7bddf63b6953f108e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_529576cfafe5a955c0a2c092e165858b95b10e8ba7c06f7bddf63b6953f108e5->enter($__internal_529576cfafe5a955c0a2c092e165858b95b10e8ba7c06f7bddf63b6953f108e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Sign Up ";
        
        $__internal_529576cfafe5a955c0a2c092e165858b95b10e8ba7c06f7bddf63b6953f108e5->leave($__internal_529576cfafe5a955c0a2c092e165858b95b10e8ba7c06f7bddf63b6953f108e5_prof);

        
        $__internal_46035a1b03f20942aaf3fefde119ef3e3359c4aa00f5a89685b0f04651b006c9->leave($__internal_46035a1b03f20942aaf3fefde119ef3e3359c4aa00f5a89685b0f04651b006c9_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0a61a8a76f99c18535ffd837ae7f638277177f1b0d49cdf99342c3c89dc107f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a61a8a76f99c18535ffd837ae7f638277177f1b0d49cdf99342c3c89dc107f0->enter($__internal_0a61a8a76f99c18535ffd837ae7f638277177f1b0d49cdf99342c3c89dc107f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f8bd5c3c0b6992921cd13bf32a2988db8febf811c2cafc7b26e766a8d3212588 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8bd5c3c0b6992921cd13bf32a2988db8febf811c2cafc7b26e766a8d3212588->enter($__internal_f8bd5c3c0b6992921cd13bf32a2988db8febf811c2cafc7b26e766a8d3212588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/login.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_f8bd5c3c0b6992921cd13bf32a2988db8febf811c2cafc7b26e766a8d3212588->leave($__internal_f8bd5c3c0b6992921cd13bf32a2988db8febf811c2cafc7b26e766a8d3212588_prof);

        
        $__internal_0a61a8a76f99c18535ffd837ae7f638277177f1b0d49cdf99342c3c89dc107f0->leave($__internal_0a61a8a76f99c18535ffd837ae7f638277177f1b0d49cdf99342c3c89dc107f0_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a13ed30a0be8af5f85be8f727c1ecc354806de1aa9da5570c0634a9e922f203 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a13ed30a0be8af5f85be8f727c1ecc354806de1aa9da5570c0634a9e922f203->enter($__internal_2a13ed30a0be8af5f85be8f727c1ecc354806de1aa9da5570c0634a9e922f203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9a30194156a48b0c2239a8aa580530a0cb903270c4c4d1e0d4f34a54308b9b5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a30194156a48b0c2239a8aa580530a0cb903270c4c4d1e0d4f34a54308b9b5a->enter($__internal_9a30194156a48b0c2239a8aa580530a0cb903270c4c4d1e0d4f34a54308b9b5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9a30194156a48b0c2239a8aa580530a0cb903270c4c4d1e0d4f34a54308b9b5a->leave($__internal_9a30194156a48b0c2239a8aa580530a0cb903270c4c4d1e0d4f34a54308b9b5a_prof);

        
        $__internal_2a13ed30a0be8af5f85be8f727c1ecc354806de1aa9da5570c0634a9e922f203->leave($__internal_2a13ed30a0be8af5f85be8f727c1ecc354806de1aa9da5570c0634a9e922f203_prof);

    }

    public function getTemplateName()
    {
        return "@User/Default/signUp.html.twig";
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
{% endblock %}", "@User/Default/signUp.html.twig", "C:\\xampp\\htdocs\\crgc\\src\\UserBundle\\Resources\\views\\Default\\signUp.html.twig");
    }
}
