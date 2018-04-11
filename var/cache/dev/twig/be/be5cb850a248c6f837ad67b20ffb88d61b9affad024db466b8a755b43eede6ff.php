<?php

/* @User/Default/add_address.html.twig */
class __TwigTemplate_ea5d2b77dab8773d34186e273ff370bf763b6384603f898ecd8aa5c9011da3c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "@User/Default/add_address.html.twig", 1);
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
        $__internal_bb924d84de91eeded1a27b62db687a9053ade32b639c355f6569ee14c944492e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb924d84de91eeded1a27b62db687a9053ade32b639c355f6569ee14c944492e->enter($__internal_bb924d84de91eeded1a27b62db687a9053ade32b639c355f6569ee14c944492e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Default/add_address.html.twig"));

        $__internal_ccb2d17e66358f9389b339cf27ab75a0d14c829417a0a249aee299e6420641b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccb2d17e66358f9389b339cf27ab75a0d14c829417a0a249aee299e6420641b0->enter($__internal_ccb2d17e66358f9389b339cf27ab75a0d14c829417a0a249aee299e6420641b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Default/add_address.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb924d84de91eeded1a27b62db687a9053ade32b639c355f6569ee14c944492e->leave($__internal_bb924d84de91eeded1a27b62db687a9053ade32b639c355f6569ee14c944492e_prof);

        
        $__internal_ccb2d17e66358f9389b339cf27ab75a0d14c829417a0a249aee299e6420641b0->leave($__internal_ccb2d17e66358f9389b339cf27ab75a0d14c829417a0a249aee299e6420641b0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f3f8ab056ccee7b2e7790e449d2ae93297a1b05579a05841cc457686964457cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3f8ab056ccee7b2e7790e449d2ae93297a1b05579a05841cc457686964457cf->enter($__internal_f3f8ab056ccee7b2e7790e449d2ae93297a1b05579a05841cc457686964457cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f4e90e59cc32b4873d16defda9020c0d8a233555d052695658d57e289182d2f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4e90e59cc32b4873d16defda9020c0d8a233555d052695658d57e289182d2f0->enter($__internal_f4e90e59cc32b4873d16defda9020c0d8a233555d052695658d57e289182d2f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Address ";
        
        $__internal_f4e90e59cc32b4873d16defda9020c0d8a233555d052695658d57e289182d2f0->leave($__internal_f4e90e59cc32b4873d16defda9020c0d8a233555d052695658d57e289182d2f0_prof);

        
        $__internal_f3f8ab056ccee7b2e7790e449d2ae93297a1b05579a05841cc457686964457cf->leave($__internal_f3f8ab056ccee7b2e7790e449d2ae93297a1b05579a05841cc457686964457cf_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_40a34d724c76a1e40dfd377c0b87414cee9976457d3fe4765613a873584db53e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40a34d724c76a1e40dfd377c0b87414cee9976457d3fe4765613a873584db53e->enter($__internal_40a34d724c76a1e40dfd377c0b87414cee9976457d3fe4765613a873584db53e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_972f3c4342c6f429f5dbeefef6a222d973c51b48f33a4522b855b3b9a3997a1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_972f3c4342c6f429f5dbeefef6a222d973c51b48f33a4522b855b3b9a3997a1d->enter($__internal_972f3c4342c6f429f5dbeefef6a222d973c51b48f33a4522b855b3b9a3997a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/login.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_972f3c4342c6f429f5dbeefef6a222d973c51b48f33a4522b855b3b9a3997a1d->leave($__internal_972f3c4342c6f429f5dbeefef6a222d973c51b48f33a4522b855b3b9a3997a1d_prof);

        
        $__internal_40a34d724c76a1e40dfd377c0b87414cee9976457d3fe4765613a873584db53e->leave($__internal_40a34d724c76a1e40dfd377c0b87414cee9976457d3fe4765613a873584db53e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_a142cf07b6ef152762f152d759a9fb0daf8b051f265da6d03d4e7ff3eb29cfab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a142cf07b6ef152762f152d759a9fb0daf8b051f265da6d03d4e7ff3eb29cfab->enter($__internal_a142cf07b6ef152762f152d759a9fb0daf8b051f265da6d03d4e7ff3eb29cfab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2072a62379d2732874e7b229f52f462c2ded96541aa60b97e8cb042e5b924141 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2072a62379d2732874e7b229f52f462c2ded96541aa60b97e8cb042e5b924141->enter($__internal_2072a62379d2732874e7b229f52f462c2ded96541aa60b97e8cb042e5b924141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2072a62379d2732874e7b229f52f462c2ded96541aa60b97e8cb042e5b924141->leave($__internal_2072a62379d2732874e7b229f52f462c2ded96541aa60b97e8cb042e5b924141_prof);

        
        $__internal_a142cf07b6ef152762f152d759a9fb0daf8b051f265da6d03d4e7ff3eb29cfab->leave($__internal_a142cf07b6ef152762f152d759a9fb0daf8b051f265da6d03d4e7ff3eb29cfab_prof);

    }

    // line 61
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d6192795f25dfc96c82b4d567ca7d8cfc37546694f050583988a53f13ab1e995 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6192795f25dfc96c82b4d567ca7d8cfc37546694f050583988a53f13ab1e995->enter($__internal_d6192795f25dfc96c82b4d567ca7d8cfc37546694f050583988a53f13ab1e995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b971d90fdd722b1311a53e55968890bf3074c65fe59909b91006c3a1d103876b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b971d90fdd722b1311a53e55968890bf3074c65fe59909b91006c3a1d103876b->enter($__internal_b971d90fdd722b1311a53e55968890bf3074c65fe59909b91006c3a1d103876b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 62
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/signup.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
";
        
        $__internal_b971d90fdd722b1311a53e55968890bf3074c65fe59909b91006c3a1d103876b->leave($__internal_b971d90fdd722b1311a53e55968890bf3074c65fe59909b91006c3a1d103876b_prof);

        
        $__internal_d6192795f25dfc96c82b4d567ca7d8cfc37546694f050583988a53f13ab1e995->leave($__internal_d6192795f25dfc96c82b4d567ca7d8cfc37546694f050583988a53f13ab1e995_prof);

    }

    public function getTemplateName()
    {
        return "@User/Default/add_address.html.twig";
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
{% endblock %}", "@User/Default/add_address.html.twig", "C:\\xampp\\htdocs\\crgc\\src\\UserBundle\\Resources\\views\\Default\\add_address.html.twig");
    }
}
