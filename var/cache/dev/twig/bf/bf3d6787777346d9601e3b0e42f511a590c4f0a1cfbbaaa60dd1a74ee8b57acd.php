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
        $__internal_6b393b8b54fb533ac7ae9bb38acb6d769ccd1c49a41bdebb09ab2fd0852a6ba9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b393b8b54fb533ac7ae9bb38acb6d769ccd1c49a41bdebb09ab2fd0852a6ba9->enter($__internal_6b393b8b54fb533ac7ae9bb38acb6d769ccd1c49a41bdebb09ab2fd0852a6ba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:add_address.html.twig"));

        $__internal_ed460ea4eb5500bbd74d74d508d3f471861f21f3971cf55f3dc20904d55e13a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed460ea4eb5500bbd74d74d508d3f471861f21f3971cf55f3dc20904d55e13a5->enter($__internal_ed460ea4eb5500bbd74d74d508d3f471861f21f3971cf55f3dc20904d55e13a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:add_address.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b393b8b54fb533ac7ae9bb38acb6d769ccd1c49a41bdebb09ab2fd0852a6ba9->leave($__internal_6b393b8b54fb533ac7ae9bb38acb6d769ccd1c49a41bdebb09ab2fd0852a6ba9_prof);

        
        $__internal_ed460ea4eb5500bbd74d74d508d3f471861f21f3971cf55f3dc20904d55e13a5->leave($__internal_ed460ea4eb5500bbd74d74d508d3f471861f21f3971cf55f3dc20904d55e13a5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9dd3ec8467f4d1b0a02a0fc8c15732e8c3a7ec4728e259549be318a08949fecf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dd3ec8467f4d1b0a02a0fc8c15732e8c3a7ec4728e259549be318a08949fecf->enter($__internal_9dd3ec8467f4d1b0a02a0fc8c15732e8c3a7ec4728e259549be318a08949fecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9a9c6f0804cea38f55366cd471c54f4c569dd05b70f777c17335c3b53d9d4531 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a9c6f0804cea38f55366cd471c54f4c569dd05b70f777c17335c3b53d9d4531->enter($__internal_9a9c6f0804cea38f55366cd471c54f4c569dd05b70f777c17335c3b53d9d4531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Address ";
        
        $__internal_9a9c6f0804cea38f55366cd471c54f4c569dd05b70f777c17335c3b53d9d4531->leave($__internal_9a9c6f0804cea38f55366cd471c54f4c569dd05b70f777c17335c3b53d9d4531_prof);

        
        $__internal_9dd3ec8467f4d1b0a02a0fc8c15732e8c3a7ec4728e259549be318a08949fecf->leave($__internal_9dd3ec8467f4d1b0a02a0fc8c15732e8c3a7ec4728e259549be318a08949fecf_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2a2fa9014acd841c6f3c1e16995dac70547f4b7529fd0fd22dd2e944cdbf8041 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a2fa9014acd841c6f3c1e16995dac70547f4b7529fd0fd22dd2e944cdbf8041->enter($__internal_2a2fa9014acd841c6f3c1e16995dac70547f4b7529fd0fd22dd2e944cdbf8041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_be15f35dfa4006b853950a218dfc8bed0d0ff565d10b4ae83d66f7afe022cf34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be15f35dfa4006b853950a218dfc8bed0d0ff565d10b4ae83d66f7afe022cf34->enter($__internal_be15f35dfa4006b853950a218dfc8bed0d0ff565d10b4ae83d66f7afe022cf34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/login.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_be15f35dfa4006b853950a218dfc8bed0d0ff565d10b4ae83d66f7afe022cf34->leave($__internal_be15f35dfa4006b853950a218dfc8bed0d0ff565d10b4ae83d66f7afe022cf34_prof);

        
        $__internal_2a2fa9014acd841c6f3c1e16995dac70547f4b7529fd0fd22dd2e944cdbf8041->leave($__internal_2a2fa9014acd841c6f3c1e16995dac70547f4b7529fd0fd22dd2e944cdbf8041_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_add58e1354a73fa1f891e6fce2c76f0a429facb024d0dfe4455a58b10b3374fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_add58e1354a73fa1f891e6fce2c76f0a429facb024d0dfe4455a58b10b3374fa->enter($__internal_add58e1354a73fa1f891e6fce2c76f0a429facb024d0dfe4455a58b10b3374fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_22e8bd2b8d731d4d444afe7c25a7c2cf4972398a777fefd19db2d3e0a473bcdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22e8bd2b8d731d4d444afe7c25a7c2cf4972398a777fefd19db2d3e0a473bcdc->enter($__internal_22e8bd2b8d731d4d444afe7c25a7c2cf4972398a777fefd19db2d3e0a473bcdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_22e8bd2b8d731d4d444afe7c25a7c2cf4972398a777fefd19db2d3e0a473bcdc->leave($__internal_22e8bd2b8d731d4d444afe7c25a7c2cf4972398a777fefd19db2d3e0a473bcdc_prof);

        
        $__internal_add58e1354a73fa1f891e6fce2c76f0a429facb024d0dfe4455a58b10b3374fa->leave($__internal_add58e1354a73fa1f891e6fce2c76f0a429facb024d0dfe4455a58b10b3374fa_prof);

    }

    // line 61
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8d3e19b4825122b2985c84dd10314ac583026de72281bbf5cb5925a2752dc171 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d3e19b4825122b2985c84dd10314ac583026de72281bbf5cb5925a2752dc171->enter($__internal_8d3e19b4825122b2985c84dd10314ac583026de72281bbf5cb5925a2752dc171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_bc613895e795c79d21e99e6cd2e93ce9b475ba0b94377d6a08c59a6dddd9f71e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc613895e795c79d21e99e6cd2e93ce9b475ba0b94377d6a08c59a6dddd9f71e->enter($__internal_bc613895e795c79d21e99e6cd2e93ce9b475ba0b94377d6a08c59a6dddd9f71e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 62
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/signup.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
";
        
        $__internal_bc613895e795c79d21e99e6cd2e93ce9b475ba0b94377d6a08c59a6dddd9f71e->leave($__internal_bc613895e795c79d21e99e6cd2e93ce9b475ba0b94377d6a08c59a6dddd9f71e_prof);

        
        $__internal_8d3e19b4825122b2985c84dd10314ac583026de72281bbf5cb5925a2752dc171->leave($__internal_8d3e19b4825122b2985c84dd10314ac583026de72281bbf5cb5925a2752dc171_prof);

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
