<?php

/* UserBundle:Default:signUp.html.twig */
class __TwigTemplate_d8e7c80ccdf9afdadbe435e55400ec9c66f5cd3dc6e2d9a0e4020a527e58a775 extends Twig_Template
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
        $__internal_fe11de715309bb50fdf3ba818f6e07c756a995605d9404c8ab0d6a149f614f8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe11de715309bb50fdf3ba818f6e07c756a995605d9404c8ab0d6a149f614f8c->enter($__internal_fe11de715309bb50fdf3ba818f6e07c756a995605d9404c8ab0d6a149f614f8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:signUp.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe11de715309bb50fdf3ba818f6e07c756a995605d9404c8ab0d6a149f614f8c->leave($__internal_fe11de715309bb50fdf3ba818f6e07c756a995605d9404c8ab0d6a149f614f8c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_532c54363e48c33bea0595fd4e07adadfde39cbeca2907be1d7b48d9dec09dca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_532c54363e48c33bea0595fd4e07adadfde39cbeca2907be1d7b48d9dec09dca->enter($__internal_532c54363e48c33bea0595fd4e07adadfde39cbeca2907be1d7b48d9dec09dca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Sign Up ";
        
        $__internal_532c54363e48c33bea0595fd4e07adadfde39cbeca2907be1d7b48d9dec09dca->leave($__internal_532c54363e48c33bea0595fd4e07adadfde39cbeca2907be1d7b48d9dec09dca_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_817991698568a39cba38249c6dc0cdf28fc57a7e3a8fd1cb2116d6ba31c88466 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_817991698568a39cba38249c6dc0cdf28fc57a7e3a8fd1cb2116d6ba31c88466->enter($__internal_817991698568a39cba38249c6dc0cdf28fc57a7e3a8fd1cb2116d6ba31c88466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/login.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_817991698568a39cba38249c6dc0cdf28fc57a7e3a8fd1cb2116d6ba31c88466->leave($__internal_817991698568a39cba38249c6dc0cdf28fc57a7e3a8fd1cb2116d6ba31c88466_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_597fddf76bdca73a125a705def2d0b6428b156a5cf902cc2b7171c06fc8f24a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_597fddf76bdca73a125a705def2d0b6428b156a5cf902cc2b7171c06fc8f24a3->enter($__internal_597fddf76bdca73a125a705def2d0b6428b156a5cf902cc2b7171c06fc8f24a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_597fddf76bdca73a125a705def2d0b6428b156a5cf902cc2b7171c06fc8f24a3->leave($__internal_597fddf76bdca73a125a705def2d0b6428b156a5cf902cc2b7171c06fc8f24a3_prof);

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
        return array (  175 => 49,  170 => 47,  164 => 44,  160 => 43,  156 => 42,  150 => 39,  146 => 38,  142 => 37,  136 => 34,  132 => 33,  128 => 32,  122 => 29,  118 => 28,  114 => 27,  108 => 24,  104 => 23,  100 => 22,  94 => 19,  90 => 18,  86 => 17,  81 => 15,  74 => 10,  68 => 9,  59 => 6,  54 => 5,  48 => 4,  36 => 3,  11 => 1,);
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
{% endblock %}", "UserBundle:Default:signUp.html.twig", "C:\\xampp\\htdocs\\crgc\\var\\cache\\prod/../../../src/UserBundle/Resources/views/Default/signUp.html.twig");
    }
}
