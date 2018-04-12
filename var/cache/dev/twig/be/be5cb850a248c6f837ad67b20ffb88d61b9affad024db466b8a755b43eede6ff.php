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
        $__internal_71060f863235e2d7b82a8b1b3868c2d5584ce087504b1182f7b3273e5b9c18ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71060f863235e2d7b82a8b1b3868c2d5584ce087504b1182f7b3273e5b9c18ca->enter($__internal_71060f863235e2d7b82a8b1b3868c2d5584ce087504b1182f7b3273e5b9c18ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Default/add_address.html.twig"));

        $__internal_3125e599dd7372393c5b3a6861dfad959f619fcafee082f481f6b0d889b19cd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3125e599dd7372393c5b3a6861dfad959f619fcafee082f481f6b0d889b19cd0->enter($__internal_3125e599dd7372393c5b3a6861dfad959f619fcafee082f481f6b0d889b19cd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Default/add_address.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71060f863235e2d7b82a8b1b3868c2d5584ce087504b1182f7b3273e5b9c18ca->leave($__internal_71060f863235e2d7b82a8b1b3868c2d5584ce087504b1182f7b3273e5b9c18ca_prof);

        
        $__internal_3125e599dd7372393c5b3a6861dfad959f619fcafee082f481f6b0d889b19cd0->leave($__internal_3125e599dd7372393c5b3a6861dfad959f619fcafee082f481f6b0d889b19cd0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5f62328dd2e153040cf201fe13f221adce1d2019dbf35f78401faa512d3e7450 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f62328dd2e153040cf201fe13f221adce1d2019dbf35f78401faa512d3e7450->enter($__internal_5f62328dd2e153040cf201fe13f221adce1d2019dbf35f78401faa512d3e7450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8dd58b0306b12418354f862546a47f61c26181047ea41fd0a9cd461fd8ed9651 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dd58b0306b12418354f862546a47f61c26181047ea41fd0a9cd461fd8ed9651->enter($__internal_8dd58b0306b12418354f862546a47f61c26181047ea41fd0a9cd461fd8ed9651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Address ";
        
        $__internal_8dd58b0306b12418354f862546a47f61c26181047ea41fd0a9cd461fd8ed9651->leave($__internal_8dd58b0306b12418354f862546a47f61c26181047ea41fd0a9cd461fd8ed9651_prof);

        
        $__internal_5f62328dd2e153040cf201fe13f221adce1d2019dbf35f78401faa512d3e7450->leave($__internal_5f62328dd2e153040cf201fe13f221adce1d2019dbf35f78401faa512d3e7450_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c6a18d0f81f99f9c456a03ff0d2b84b3f1f875a2210eea7b6e5b8b9d0dd49ce6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6a18d0f81f99f9c456a03ff0d2b84b3f1f875a2210eea7b6e5b8b9d0dd49ce6->enter($__internal_c6a18d0f81f99f9c456a03ff0d2b84b3f1f875a2210eea7b6e5b8b9d0dd49ce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9366dad9707a5dddcbe6633f8f83298a1bed852d6f0cd7eb20652d8645136135 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9366dad9707a5dddcbe6633f8f83298a1bed852d6f0cd7eb20652d8645136135->enter($__internal_9366dad9707a5dddcbe6633f8f83298a1bed852d6f0cd7eb20652d8645136135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/login.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_9366dad9707a5dddcbe6633f8f83298a1bed852d6f0cd7eb20652d8645136135->leave($__internal_9366dad9707a5dddcbe6633f8f83298a1bed852d6f0cd7eb20652d8645136135_prof);

        
        $__internal_c6a18d0f81f99f9c456a03ff0d2b84b3f1f875a2210eea7b6e5b8b9d0dd49ce6->leave($__internal_c6a18d0f81f99f9c456a03ff0d2b84b3f1f875a2210eea7b6e5b8b9d0dd49ce6_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c2aa4d050ace6e02ef18f992c3a1028b0b0f26ccfa46ec2e37179d296e1e104 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c2aa4d050ace6e02ef18f992c3a1028b0b0f26ccfa46ec2e37179d296e1e104->enter($__internal_5c2aa4d050ace6e02ef18f992c3a1028b0b0f26ccfa46ec2e37179d296e1e104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6b7e9bac2dd920760c22e89c1ec76b4d15aff6e422553fc2fe7538546e1b4461 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b7e9bac2dd920760c22e89c1ec76b4d15aff6e422553fc2fe7538546e1b4461->enter($__internal_6b7e9bac2dd920760c22e89c1ec76b4d15aff6e422553fc2fe7538546e1b4461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6b7e9bac2dd920760c22e89c1ec76b4d15aff6e422553fc2fe7538546e1b4461->leave($__internal_6b7e9bac2dd920760c22e89c1ec76b4d15aff6e422553fc2fe7538546e1b4461_prof);

        
        $__internal_5c2aa4d050ace6e02ef18f992c3a1028b0b0f26ccfa46ec2e37179d296e1e104->leave($__internal_5c2aa4d050ace6e02ef18f992c3a1028b0b0f26ccfa46ec2e37179d296e1e104_prof);

    }

    // line 61
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ea6a5212abc7b8ec5f9c9c903b80db7c4f8e81d0a1435e356c646aa2e9dee48e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea6a5212abc7b8ec5f9c9c903b80db7c4f8e81d0a1435e356c646aa2e9dee48e->enter($__internal_ea6a5212abc7b8ec5f9c9c903b80db7c4f8e81d0a1435e356c646aa2e9dee48e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f0f330ac82a4c6aaafdeba4c496c15db4f39cb8c3a46ee9e156281a42a8881fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0f330ac82a4c6aaafdeba4c496c15db4f39cb8c3a46ee9e156281a42a8881fe->enter($__internal_f0f330ac82a4c6aaafdeba4c496c15db4f39cb8c3a46ee9e156281a42a8881fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 62
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/signup.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
";
        
        $__internal_f0f330ac82a4c6aaafdeba4c496c15db4f39cb8c3a46ee9e156281a42a8881fe->leave($__internal_f0f330ac82a4c6aaafdeba4c496c15db4f39cb8c3a46ee9e156281a42a8881fe_prof);

        
        $__internal_ea6a5212abc7b8ec5f9c9c903b80db7c4f8e81d0a1435e356c646aa2e9dee48e->leave($__internal_ea6a5212abc7b8ec5f9c9c903b80db7c4f8e81d0a1435e356c646aa2e9dee48e_prof);

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
