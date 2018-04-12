<?php

/* UserBundle:Default:add_address.html.twig */
class __TwigTemplate_1f2ba420bd5450358fcfde770d2cc70e0439605dac2427c10a40e2dc0a9d3d59 extends Twig_Template
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
        $__internal_dc3d45f7b4875a4b9c3c2a841125abf83b815aeb60b65f493db650b70fe60137 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc3d45f7b4875a4b9c3c2a841125abf83b815aeb60b65f493db650b70fe60137->enter($__internal_dc3d45f7b4875a4b9c3c2a841125abf83b815aeb60b65f493db650b70fe60137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:add_address.html.twig"));

        $__internal_44c18bc71b170078582b0785658ce886257a00d8605c4025af9a85f09a22acd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44c18bc71b170078582b0785658ce886257a00d8605c4025af9a85f09a22acd5->enter($__internal_44c18bc71b170078582b0785658ce886257a00d8605c4025af9a85f09a22acd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:add_address.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc3d45f7b4875a4b9c3c2a841125abf83b815aeb60b65f493db650b70fe60137->leave($__internal_dc3d45f7b4875a4b9c3c2a841125abf83b815aeb60b65f493db650b70fe60137_prof);

        
        $__internal_44c18bc71b170078582b0785658ce886257a00d8605c4025af9a85f09a22acd5->leave($__internal_44c18bc71b170078582b0785658ce886257a00d8605c4025af9a85f09a22acd5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fdc2935d91107dc94beb15c7a62f8a874a96394e2915d20ef4fc93542dbfa81c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdc2935d91107dc94beb15c7a62f8a874a96394e2915d20ef4fc93542dbfa81c->enter($__internal_fdc2935d91107dc94beb15c7a62f8a874a96394e2915d20ef4fc93542dbfa81c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_340b0252c21c1145dd6407be7b97901ffff821c3ec1e97aae304cfc7ebe626de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_340b0252c21c1145dd6407be7b97901ffff821c3ec1e97aae304cfc7ebe626de->enter($__internal_340b0252c21c1145dd6407be7b97901ffff821c3ec1e97aae304cfc7ebe626de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Address ";
        
        $__internal_340b0252c21c1145dd6407be7b97901ffff821c3ec1e97aae304cfc7ebe626de->leave($__internal_340b0252c21c1145dd6407be7b97901ffff821c3ec1e97aae304cfc7ebe626de_prof);

        
        $__internal_fdc2935d91107dc94beb15c7a62f8a874a96394e2915d20ef4fc93542dbfa81c->leave($__internal_fdc2935d91107dc94beb15c7a62f8a874a96394e2915d20ef4fc93542dbfa81c_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d3a8d2441b88586aa03db6fcaffe8763d9ef8098e0643b2c2056f3dac47abf6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3a8d2441b88586aa03db6fcaffe8763d9ef8098e0643b2c2056f3dac47abf6b->enter($__internal_d3a8d2441b88586aa03db6fcaffe8763d9ef8098e0643b2c2056f3dac47abf6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_59c74f4cb893868cb4f855fb115c2734e91a77f52cc99198260ec3a4279acb51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59c74f4cb893868cb4f855fb115c2734e91a77f52cc99198260ec3a4279acb51->enter($__internal_59c74f4cb893868cb4f855fb115c2734e91a77f52cc99198260ec3a4279acb51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/login.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_59c74f4cb893868cb4f855fb115c2734e91a77f52cc99198260ec3a4279acb51->leave($__internal_59c74f4cb893868cb4f855fb115c2734e91a77f52cc99198260ec3a4279acb51_prof);

        
        $__internal_d3a8d2441b88586aa03db6fcaffe8763d9ef8098e0643b2c2056f3dac47abf6b->leave($__internal_d3a8d2441b88586aa03db6fcaffe8763d9ef8098e0643b2c2056f3dac47abf6b_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_e492de235f3a7e10a16e253edcbef8419c94401db9f573969ca2dd2c6d85cd39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e492de235f3a7e10a16e253edcbef8419c94401db9f573969ca2dd2c6d85cd39->enter($__internal_e492de235f3a7e10a16e253edcbef8419c94401db9f573969ca2dd2c6d85cd39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b62efa830ffb30dae7149d83717c45074f0bda070ebd7a3f19007d4d880af7a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b62efa830ffb30dae7149d83717c45074f0bda070ebd7a3f19007d4d880af7a8->enter($__internal_b62efa830ffb30dae7149d83717c45074f0bda070ebd7a3f19007d4d880af7a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b62efa830ffb30dae7149d83717c45074f0bda070ebd7a3f19007d4d880af7a8->leave($__internal_b62efa830ffb30dae7149d83717c45074f0bda070ebd7a3f19007d4d880af7a8_prof);

        
        $__internal_e492de235f3a7e10a16e253edcbef8419c94401db9f573969ca2dd2c6d85cd39->leave($__internal_e492de235f3a7e10a16e253edcbef8419c94401db9f573969ca2dd2c6d85cd39_prof);

    }

    // line 61
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a4be3bf90fc91ed3d2fcc6e74eb6e52f3de8a25271d26348fe2a456cb8ea7fec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4be3bf90fc91ed3d2fcc6e74eb6e52f3de8a25271d26348fe2a456cb8ea7fec->enter($__internal_a4be3bf90fc91ed3d2fcc6e74eb6e52f3de8a25271d26348fe2a456cb8ea7fec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_cfedeed824fad992b668b862d28db16998ec94e1e655c9870ff4d3785b7014ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfedeed824fad992b668b862d28db16998ec94e1e655c9870ff4d3785b7014ae->enter($__internal_cfedeed824fad992b668b862d28db16998ec94e1e655c9870ff4d3785b7014ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 62
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/signup.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
";
        
        $__internal_cfedeed824fad992b668b862d28db16998ec94e1e655c9870ff4d3785b7014ae->leave($__internal_cfedeed824fad992b668b862d28db16998ec94e1e655c9870ff4d3785b7014ae_prof);

        
        $__internal_a4be3bf90fc91ed3d2fcc6e74eb6e52f3de8a25271d26348fe2a456cb8ea7fec->leave($__internal_a4be3bf90fc91ed3d2fcc6e74eb6e52f3de8a25271d26348fe2a456cb8ea7fec_prof);

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
{% endblock %}", "UserBundle:Default:add_address.html.twig", "C:\\xampp\\htdocs\\crgc\\src\\UserBundle/Resources/views/Default/add_address.html.twig");
    }
}
