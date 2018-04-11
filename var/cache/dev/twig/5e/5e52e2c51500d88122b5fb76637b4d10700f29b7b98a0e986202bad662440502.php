<?php

/* UserBundle:Default:add_address.html.twig */
class __TwigTemplate_2f80903d5f1a6ce075a94fd726cea6c05090b6eb47a172c747c29268e6b6c986 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "UserBundle:Default:add_address.html.twig", 1);
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
        $__internal_4c3c25430bb01aab088c628a040cd662408a49d3c769ec23879720859505a47c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c3c25430bb01aab088c628a040cd662408a49d3c769ec23879720859505a47c->enter($__internal_4c3c25430bb01aab088c628a040cd662408a49d3c769ec23879720859505a47c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:add_address.html.twig"));

        $__internal_7d13d21f16d9fc7bfc456fff8e17affdbfdd82807ebd2c097b031086c3ed09ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d13d21f16d9fc7bfc456fff8e17affdbfdd82807ebd2c097b031086c3ed09ce->enter($__internal_7d13d21f16d9fc7bfc456fff8e17affdbfdd82807ebd2c097b031086c3ed09ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:add_address.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c3c25430bb01aab088c628a040cd662408a49d3c769ec23879720859505a47c->leave($__internal_4c3c25430bb01aab088c628a040cd662408a49d3c769ec23879720859505a47c_prof);

        
        $__internal_7d13d21f16d9fc7bfc456fff8e17affdbfdd82807ebd2c097b031086c3ed09ce->leave($__internal_7d13d21f16d9fc7bfc456fff8e17affdbfdd82807ebd2c097b031086c3ed09ce_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e326f889e02b1185393ce15a855232a6835645edebb329211d7bc9860de6ebe7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e326f889e02b1185393ce15a855232a6835645edebb329211d7bc9860de6ebe7->enter($__internal_e326f889e02b1185393ce15a855232a6835645edebb329211d7bc9860de6ebe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8a21377da8e3aa37cebfe572717fbc2b8dadf5089449ffe3380227990a86a44f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a21377da8e3aa37cebfe572717fbc2b8dadf5089449ffe3380227990a86a44f->enter($__internal_8a21377da8e3aa37cebfe572717fbc2b8dadf5089449ffe3380227990a86a44f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Address ";
        
        $__internal_8a21377da8e3aa37cebfe572717fbc2b8dadf5089449ffe3380227990a86a44f->leave($__internal_8a21377da8e3aa37cebfe572717fbc2b8dadf5089449ffe3380227990a86a44f_prof);

        
        $__internal_e326f889e02b1185393ce15a855232a6835645edebb329211d7bc9860de6ebe7->leave($__internal_e326f889e02b1185393ce15a855232a6835645edebb329211d7bc9860de6ebe7_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ae86273417212deb5a8630f986b84418643c03dd2b6281a956088ce816789463 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae86273417212deb5a8630f986b84418643c03dd2b6281a956088ce816789463->enter($__internal_ae86273417212deb5a8630f986b84418643c03dd2b6281a956088ce816789463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_affc9d3e20cc8046907f4ba288e8e3a2122b3e84adc491371d3313ea14b3ccdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_affc9d3e20cc8046907f4ba288e8e3a2122b3e84adc491371d3313ea14b3ccdc->enter($__internal_affc9d3e20cc8046907f4ba288e8e3a2122b3e84adc491371d3313ea14b3ccdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/login.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_affc9d3e20cc8046907f4ba288e8e3a2122b3e84adc491371d3313ea14b3ccdc->leave($__internal_affc9d3e20cc8046907f4ba288e8e3a2122b3e84adc491371d3313ea14b3ccdc_prof);

        
        $__internal_ae86273417212deb5a8630f986b84418643c03dd2b6281a956088ce816789463->leave($__internal_ae86273417212deb5a8630f986b84418643c03dd2b6281a956088ce816789463_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_f55332608ea5ed029db498f28551f0979a402513d54acf426b76d02d51fb117c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f55332608ea5ed029db498f28551f0979a402513d54acf426b76d02d51fb117c->enter($__internal_f55332608ea5ed029db498f28551f0979a402513d54acf426b76d02d51fb117c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ed34b5a92b5d54fd7128e238926d07a2355ec0654ba9cfc563a16e2bd1f4f650 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed34b5a92b5d54fd7128e238926d07a2355ec0654ba9cfc563a16e2bd1f4f650->enter($__internal_ed34b5a92b5d54fd7128e238926d07a2355ec0654ba9cfc563a16e2bd1f4f650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<main>
  <div id=\"login-modal\" >
    <div class=\"modal-dialog\">
      <div class=\"loginmodal-container\">
        <h1>Add a new Address</h1><br>
        ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate", "role" => "form")));
        echo "
          <div class=\"form-group\">
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fullname", array()), 'label');
        echo "   
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fullname", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Name Lastname")));
        echo "  
            <span class=\"text-danger\">";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fullname", array()), 'errors');
        echo "</span>       
          </div>
          <div class=\"form-group\">
            ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "country", array()), 'label');
        echo "   
            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "country", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Country")));
        echo "  
            <span class=\"text-danger\">";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "country", array()), 'errors');
        echo "</span>       
          </div>   
          <div class=\"form-group\">
            ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "state", array()), 'label');
        echo "   
            ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "state", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "State")));
        echo "  
            <span class=\"text-danger\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "state", array()), 'errors');
        echo "</span>       
          </div>   
          <div class=\"form-group\">
            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "city", array()), 'label');
        echo "   
            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "city", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "City")));
        echo "  
            <span class=\"text-danger\">";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "city", array()), 'errors');
        echo "</span>       
          </div>   
          <div class=\"form-group\">
            ";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "line_1", array()), 'label');
        echo "   
            ";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "line_1", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Address line 1")));
        echo "  
            <span class=\"text-danger\">";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "line_1", array()), 'errors');
        echo "</span>       
          </div>
          <div class=\"form-group\">
            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "line_2", array()), 'label');
        echo "   
            ";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "line_2", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Address line 2")));
        echo "  
            <span class=\"text-danger\">";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "line_2", array()), 'errors');
        echo "</span>    
          </div>
          <div class=\"form-group\">
            ";
        // line 47
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "zip", array()), 'label');
        echo "   
            ";
        // line 48
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "zip", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Zip or postal code")));
        echo "  
            <span class=\"text-danger\">";
        // line 49
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "zip", array()), 'errors');
        echo "</span>       
          </div>  
          <div class=\"form-group\"> 
            ";
        // line 52
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", array()), 'widget', array("label" => "Add new address", "attr" => array("class" => "pull-right btn btn-success")));
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
        
        $__internal_ed34b5a92b5d54fd7128e238926d07a2355ec0654ba9cfc563a16e2bd1f4f650->leave($__internal_ed34b5a92b5d54fd7128e238926d07a2355ec0654ba9cfc563a16e2bd1f4f650_prof);

        
        $__internal_f55332608ea5ed029db498f28551f0979a402513d54acf426b76d02d51fb117c->leave($__internal_f55332608ea5ed029db498f28551f0979a402513d54acf426b76d02d51fb117c_prof);

    }

    // line 61
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_26f1e79d512b89c92d6b7fc006138b27ff1fea4f7134455191459c1deceaaea1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26f1e79d512b89c92d6b7fc006138b27ff1fea4f7134455191459c1deceaaea1->enter($__internal_26f1e79d512b89c92d6b7fc006138b27ff1fea4f7134455191459c1deceaaea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1a34f0a6ef18635ec3569707d4652367fda07723808de00bfa0a867bad1e7064 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a34f0a6ef18635ec3569707d4652367fda07723808de00bfa0a867bad1e7064->enter($__internal_1a34f0a6ef18635ec3569707d4652367fda07723808de00bfa0a867bad1e7064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 62
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/signup.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
";
        
        $__internal_1a34f0a6ef18635ec3569707d4652367fda07723808de00bfa0a867bad1e7064->leave($__internal_1a34f0a6ef18635ec3569707d4652367fda07723808de00bfa0a867bad1e7064_prof);

        
        $__internal_26f1e79d512b89c92d6b7fc006138b27ff1fea4f7134455191459c1deceaaea1->leave($__internal_26f1e79d512b89c92d6b7fc006138b27ff1fea4f7134455191459c1deceaaea1_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Default:add_address.html.twig";
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

{% block title%} Address {% endblock %}
{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/login.css')}}\" />
{% endblock %}

{% block body %}
<main>
  <div id=\"login-modal\" >
    <div class=\"modal-dialog\">
      <div class=\"loginmodal-container\">
        <h1>Add a new Address</h1><br>
        {{ form_start(form,{'attr': {'novalidate': 'novalidate', 'role': 'form'}} ) }}
          <div class=\"form-group\">
            {{ form_label(form.fullname) }}   
            {{ form_widget(form.fullname, { \"attr\": {\"class\": \"form-control\", \"placeholder\": \"Name Lastname\"} }) }}  
            <span class=\"text-danger\">{{ form_errors(form.fullname) }}</span>       
          </div>
          <div class=\"form-group\">
            {{ form_label(form.country) }}   
            {{ form_widget(form.country, { \"attr\": {\"class\": \"form-control\", \"placeholder\": \"Country\"} }) }}  
            <span class=\"text-danger\">{{ form_errors(form.country) }}</span>       
          </div>   
          <div class=\"form-group\">
            {{ form_label(form.state) }}   
            {{ form_widget(form.state, { \"attr\": {\"class\": \"form-control\", \"placeholder\": \"State\"} }) }}  
            <span class=\"text-danger\">{{ form_errors(form.state) }}</span>       
          </div>   
          <div class=\"form-group\">
            {{ form_label(form.city) }}   
            {{ form_widget(form.city, { \"attr\": {\"class\": \"form-control\", \"placeholder\": \"City\"} }) }}  
            <span class=\"text-danger\">{{ form_errors(form.city) }}</span>       
          </div>   
          <div class=\"form-group\">
            {{ form_label(form.line_1) }}   
            {{ form_widget(form.line_1, { \"attr\": {\"class\": \"form-control\", \"placeholder\": \"Address line 1\"} }) }}  
            <span class=\"text-danger\">{{ form_errors(form.line_1) }}</span>       
          </div>
          <div class=\"form-group\">
            {{ form_label(form.line_2) }}   
            {{ form_widget(form.line_2, { \"attr\": {\"class\": \"form-control\", \"placeholder\": \"Address line 2\"} }) }}  
            <span class=\"text-danger\">{{ form_errors(form.line_2) }}</span>    
          </div>
          <div class=\"form-group\">
            {{ form_label(form.zip) }}   
            {{ form_widget(form.zip, { \"attr\": {\"class\": \"form-control\", \"placeholder\": \"Zip or postal code\"} }) }}  
            <span class=\"text-danger\">{{ form_errors(form.zip) }}</span>       
          </div>  
          <div class=\"form-group\"> 
            {{ form_widget(form.save, {\"label\":\"Add new address\", \"attr\": { \"class\": \"pull-right btn btn-success\"} }) }}    
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
{% endblock %}", "UserBundle:Default:add_address.html.twig", "C:\\xampp\\htdocs\\crgc\\var\\cache\\dev/../../../src/UserBundle/Resources/views/Default/add_address.html.twig");
    }
}
