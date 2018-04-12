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
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b7b30521fd6d0387f638b2cd8d70ed7a7bf91372cb7357c020e8107d141402dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7b30521fd6d0387f638b2cd8d70ed7a7bf91372cb7357c020e8107d141402dd->enter($__internal_b7b30521fd6d0387f638b2cd8d70ed7a7bf91372cb7357c020e8107d141402dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:signUp.html.twig"));

        $__internal_1f482897e46c6af4d45ab11284e39cf267818be16b30d3cf031c7acaaaed1505 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f482897e46c6af4d45ab11284e39cf267818be16b30d3cf031c7acaaaed1505->enter($__internal_1f482897e46c6af4d45ab11284e39cf267818be16b30d3cf031c7acaaaed1505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:signUp.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7b30521fd6d0387f638b2cd8d70ed7a7bf91372cb7357c020e8107d141402dd->leave($__internal_b7b30521fd6d0387f638b2cd8d70ed7a7bf91372cb7357c020e8107d141402dd_prof);

        
        $__internal_1f482897e46c6af4d45ab11284e39cf267818be16b30d3cf031c7acaaaed1505->leave($__internal_1f482897e46c6af4d45ab11284e39cf267818be16b30d3cf031c7acaaaed1505_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5c4503f85c15cd109bfc55b71748e76883b45fdc54a381e65eb08f5802585235 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c4503f85c15cd109bfc55b71748e76883b45fdc54a381e65eb08f5802585235->enter($__internal_5c4503f85c15cd109bfc55b71748e76883b45fdc54a381e65eb08f5802585235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d0dfc3819033c5d4b2cf31a9dddc4adc1913ca4fedabcd7687b3677d23f6ddf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0dfc3819033c5d4b2cf31a9dddc4adc1913ca4fedabcd7687b3677d23f6ddf6->enter($__internal_d0dfc3819033c5d4b2cf31a9dddc4adc1913ca4fedabcd7687b3677d23f6ddf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Sign Up ";
        
        $__internal_d0dfc3819033c5d4b2cf31a9dddc4adc1913ca4fedabcd7687b3677d23f6ddf6->leave($__internal_d0dfc3819033c5d4b2cf31a9dddc4adc1913ca4fedabcd7687b3677d23f6ddf6_prof);

        
        $__internal_5c4503f85c15cd109bfc55b71748e76883b45fdc54a381e65eb08f5802585235->leave($__internal_5c4503f85c15cd109bfc55b71748e76883b45fdc54a381e65eb08f5802585235_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_585039f8f440a19436f001e39223feb6077acbcab1c7ab981d8547f128d8643b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_585039f8f440a19436f001e39223feb6077acbcab1c7ab981d8547f128d8643b->enter($__internal_585039f8f440a19436f001e39223feb6077acbcab1c7ab981d8547f128d8643b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_73516e68e3a61f71bb58957129fbfb73527e15d4102693c8a9eb003193bd8ae6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73516e68e3a61f71bb58957129fbfb73527e15d4102693c8a9eb003193bd8ae6->enter($__internal_73516e68e3a61f71bb58957129fbfb73527e15d4102693c8a9eb003193bd8ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/login.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_73516e68e3a61f71bb58957129fbfb73527e15d4102693c8a9eb003193bd8ae6->leave($__internal_73516e68e3a61f71bb58957129fbfb73527e15d4102693c8a9eb003193bd8ae6_prof);

        
        $__internal_585039f8f440a19436f001e39223feb6077acbcab1c7ab981d8547f128d8643b->leave($__internal_585039f8f440a19436f001e39223feb6077acbcab1c7ab981d8547f128d8643b_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_db29f015ff3320f34b283fad586009069683d2b54c9b2e388baecd93268f303c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db29f015ff3320f34b283fad586009069683d2b54c9b2e388baecd93268f303c->enter($__internal_db29f015ff3320f34b283fad586009069683d2b54c9b2e388baecd93268f303c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_42ebbdbdf415b7b53557c587566775fcca251d0ff504ea97768ac011189a6343 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42ebbdbdf415b7b53557c587566775fcca251d0ff504ea97768ac011189a6343->enter($__internal_42ebbdbdf415b7b53557c587566775fcca251d0ff504ea97768ac011189a6343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_42ebbdbdf415b7b53557c587566775fcca251d0ff504ea97768ac011189a6343->leave($__internal_42ebbdbdf415b7b53557c587566775fcca251d0ff504ea97768ac011189a6343_prof);

        
        $__internal_db29f015ff3320f34b283fad586009069683d2b54c9b2e388baecd93268f303c->leave($__internal_db29f015ff3320f34b283fad586009069683d2b54c9b2e388baecd93268f303c_prof);

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
{% endblock %}", "UserBundle:Default:signUp.html.twig", "C:\\xampp\\htdocs\\crgc\\var\\cache\\dev/../../../src/UserBundle/Resources/views/Default/signUp.html.twig");
    }
}
