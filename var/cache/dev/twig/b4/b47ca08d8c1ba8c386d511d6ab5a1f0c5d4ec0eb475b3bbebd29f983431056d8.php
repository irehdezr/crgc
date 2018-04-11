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
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5120ab0d95422d5a8b93fc01557f88b3aa0fe16b5732c241cf2930fd7938718e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5120ab0d95422d5a8b93fc01557f88b3aa0fe16b5732c241cf2930fd7938718e->enter($__internal_5120ab0d95422d5a8b93fc01557f88b3aa0fe16b5732c241cf2930fd7938718e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Default/signUp.html.twig"));

        $__internal_8165ab4b95191ae060909f2816bfd6f2fb491d2dd224f5975da6eb260c7c8ca1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8165ab4b95191ae060909f2816bfd6f2fb491d2dd224f5975da6eb260c7c8ca1->enter($__internal_8165ab4b95191ae060909f2816bfd6f2fb491d2dd224f5975da6eb260c7c8ca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Default/signUp.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5120ab0d95422d5a8b93fc01557f88b3aa0fe16b5732c241cf2930fd7938718e->leave($__internal_5120ab0d95422d5a8b93fc01557f88b3aa0fe16b5732c241cf2930fd7938718e_prof);

        
        $__internal_8165ab4b95191ae060909f2816bfd6f2fb491d2dd224f5975da6eb260c7c8ca1->leave($__internal_8165ab4b95191ae060909f2816bfd6f2fb491d2dd224f5975da6eb260c7c8ca1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_96e82d519decadeef3345b132f734373839eac522ded20d70c6b589b6b576a78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96e82d519decadeef3345b132f734373839eac522ded20d70c6b589b6b576a78->enter($__internal_96e82d519decadeef3345b132f734373839eac522ded20d70c6b589b6b576a78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_afd5830c2e55f6b6a20adc48e4cb2276c44ceeba8435c762954a63cf80e72b35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afd5830c2e55f6b6a20adc48e4cb2276c44ceeba8435c762954a63cf80e72b35->enter($__internal_afd5830c2e55f6b6a20adc48e4cb2276c44ceeba8435c762954a63cf80e72b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Sign Up ";
        
        $__internal_afd5830c2e55f6b6a20adc48e4cb2276c44ceeba8435c762954a63cf80e72b35->leave($__internal_afd5830c2e55f6b6a20adc48e4cb2276c44ceeba8435c762954a63cf80e72b35_prof);

        
        $__internal_96e82d519decadeef3345b132f734373839eac522ded20d70c6b589b6b576a78->leave($__internal_96e82d519decadeef3345b132f734373839eac522ded20d70c6b589b6b576a78_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5da4acca0ff122413d0c3caa07461d879018dfa600684321e7df04641c24f147 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5da4acca0ff122413d0c3caa07461d879018dfa600684321e7df04641c24f147->enter($__internal_5da4acca0ff122413d0c3caa07461d879018dfa600684321e7df04641c24f147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f5f3e30c579d6b5bfd3900951f55fc9d45a6f05183786d66d2db95291fd64060 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5f3e30c579d6b5bfd3900951f55fc9d45a6f05183786d66d2db95291fd64060->enter($__internal_f5f3e30c579d6b5bfd3900951f55fc9d45a6f05183786d66d2db95291fd64060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/login.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_f5f3e30c579d6b5bfd3900951f55fc9d45a6f05183786d66d2db95291fd64060->leave($__internal_f5f3e30c579d6b5bfd3900951f55fc9d45a6f05183786d66d2db95291fd64060_prof);

        
        $__internal_5da4acca0ff122413d0c3caa07461d879018dfa600684321e7df04641c24f147->leave($__internal_5da4acca0ff122413d0c3caa07461d879018dfa600684321e7df04641c24f147_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_e2343d07956597a1a116f9f140d8edaf51ffe415c6528225690dd114745a7b55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2343d07956597a1a116f9f140d8edaf51ffe415c6528225690dd114745a7b55->enter($__internal_e2343d07956597a1a116f9f140d8edaf51ffe415c6528225690dd114745a7b55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d9f2891dcc480faf0b4a9541b4486eb6159932ab0a9e91d0242a01e0271eb458 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9f2891dcc480faf0b4a9541b4486eb6159932ab0a9e91d0242a01e0271eb458->enter($__internal_d9f2891dcc480faf0b4a9541b4486eb6159932ab0a9e91d0242a01e0271eb458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d9f2891dcc480faf0b4a9541b4486eb6159932ab0a9e91d0242a01e0271eb458->leave($__internal_d9f2891dcc480faf0b4a9541b4486eb6159932ab0a9e91d0242a01e0271eb458_prof);

        
        $__internal_e2343d07956597a1a116f9f140d8edaf51ffe415c6528225690dd114745a7b55->leave($__internal_e2343d07956597a1a116f9f140d8edaf51ffe415c6528225690dd114745a7b55_prof);

    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3bcf8180a044b0330e74aecc7ea4ac223dd65a1e1fee7390710a9f03e70d8071 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bcf8180a044b0330e74aecc7ea4ac223dd65a1e1fee7390710a9f03e70d8071->enter($__internal_3bcf8180a044b0330e74aecc7ea4ac223dd65a1e1fee7390710a9f03e70d8071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5e92194cebae1b652c18e438e4520fa92ab0a730b081812604ed39b86d67df9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e92194cebae1b652c18e438e4520fa92ab0a730b081812604ed39b86d67df9e->enter($__internal_5e92194cebae1b652c18e438e4520fa92ab0a730b081812604ed39b86d67df9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 57
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/signup.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
";
        
        $__internal_5e92194cebae1b652c18e438e4520fa92ab0a730b081812604ed39b86d67df9e->leave($__internal_5e92194cebae1b652c18e438e4520fa92ab0a730b081812604ed39b86d67df9e_prof);

        
        $__internal_3bcf8180a044b0330e74aecc7ea4ac223dd65a1e1fee7390710a9f03e70d8071->leave($__internal_3bcf8180a044b0330e74aecc7ea4ac223dd65a1e1fee7390710a9f03e70d8071_prof);

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
        return array (  227 => 58,  222 => 57,  213 => 56,  197 => 49,  192 => 47,  186 => 44,  182 => 43,  178 => 42,  172 => 39,  168 => 38,  164 => 37,  158 => 34,  154 => 33,  150 => 32,  144 => 29,  140 => 28,  136 => 27,  130 => 24,  126 => 23,  122 => 22,  116 => 19,  112 => 18,  108 => 17,  103 => 15,  96 => 10,  87 => 9,  75 => 6,  70 => 5,  61 => 4,  43 => 3,  11 => 1,);
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
    <script src=\"{{ asset('js/signup.js') }}\" type=\"text/javascript\"></script> 
{% endblock %}", "@User/Default/signUp.html.twig", "C:\\xampp\\htdocs\\crgc\\src\\UserBundle\\Resources\\views\\Default\\signUp.html.twig");
    }
}
