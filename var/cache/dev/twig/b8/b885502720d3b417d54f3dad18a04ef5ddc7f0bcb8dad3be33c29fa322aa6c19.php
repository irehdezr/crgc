<?php

/* @User/Default/add_address.html.twig */
class __TwigTemplate_f698dc9b09e4d8ba42634c48f75be8807bf54abc55d336ca687d542bda6271aa extends Twig_Template
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
        $__internal_e8278af4cc9e1b9c6d13530118f7a2cb6488e884b7cb957520a323c3a23e0316 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8278af4cc9e1b9c6d13530118f7a2cb6488e884b7cb957520a323c3a23e0316->enter($__internal_e8278af4cc9e1b9c6d13530118f7a2cb6488e884b7cb957520a323c3a23e0316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Default/add_address.html.twig"));

        $__internal_441e0d66b34818083996698acbc8fd26dac9d15ac9a351ff1549b3ee394a55a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_441e0d66b34818083996698acbc8fd26dac9d15ac9a351ff1549b3ee394a55a8->enter($__internal_441e0d66b34818083996698acbc8fd26dac9d15ac9a351ff1549b3ee394a55a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Default/add_address.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8278af4cc9e1b9c6d13530118f7a2cb6488e884b7cb957520a323c3a23e0316->leave($__internal_e8278af4cc9e1b9c6d13530118f7a2cb6488e884b7cb957520a323c3a23e0316_prof);

        
        $__internal_441e0d66b34818083996698acbc8fd26dac9d15ac9a351ff1549b3ee394a55a8->leave($__internal_441e0d66b34818083996698acbc8fd26dac9d15ac9a351ff1549b3ee394a55a8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_278d46327338fa436f30dd3a87edcfefe9646eb43e1fc8b7554bc0aee517102b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_278d46327338fa436f30dd3a87edcfefe9646eb43e1fc8b7554bc0aee517102b->enter($__internal_278d46327338fa436f30dd3a87edcfefe9646eb43e1fc8b7554bc0aee517102b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_67da575ffe1d982cfccd3ac501cdcd0740d43ac04afab4446081d9d0b3f53efe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67da575ffe1d982cfccd3ac501cdcd0740d43ac04afab4446081d9d0b3f53efe->enter($__internal_67da575ffe1d982cfccd3ac501cdcd0740d43ac04afab4446081d9d0b3f53efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Address ";
        
        $__internal_67da575ffe1d982cfccd3ac501cdcd0740d43ac04afab4446081d9d0b3f53efe->leave($__internal_67da575ffe1d982cfccd3ac501cdcd0740d43ac04afab4446081d9d0b3f53efe_prof);

        
        $__internal_278d46327338fa436f30dd3a87edcfefe9646eb43e1fc8b7554bc0aee517102b->leave($__internal_278d46327338fa436f30dd3a87edcfefe9646eb43e1fc8b7554bc0aee517102b_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4448aa359bf4068643b73ebd5f9e5086dd07e84265ad4dbdd0cadaca8f8499b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4448aa359bf4068643b73ebd5f9e5086dd07e84265ad4dbdd0cadaca8f8499b3->enter($__internal_4448aa359bf4068643b73ebd5f9e5086dd07e84265ad4dbdd0cadaca8f8499b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_18fde807314e5e50b1e9772751967ec9f4777bf28a3f629a1c073da54c1b9f47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18fde807314e5e50b1e9772751967ec9f4777bf28a3f629a1c073da54c1b9f47->enter($__internal_18fde807314e5e50b1e9772751967ec9f4777bf28a3f629a1c073da54c1b9f47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/css/login.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_18fde807314e5e50b1e9772751967ec9f4777bf28a3f629a1c073da54c1b9f47->leave($__internal_18fde807314e5e50b1e9772751967ec9f4777bf28a3f629a1c073da54c1b9f47_prof);

        
        $__internal_4448aa359bf4068643b73ebd5f9e5086dd07e84265ad4dbdd0cadaca8f8499b3->leave($__internal_4448aa359bf4068643b73ebd5f9e5086dd07e84265ad4dbdd0cadaca8f8499b3_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_756bafa1028e6b5face18b494ef25714435c4243e8d92fa4db39c7a55b82a2ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_756bafa1028e6b5face18b494ef25714435c4243e8d92fa4db39c7a55b82a2ab->enter($__internal_756bafa1028e6b5face18b494ef25714435c4243e8d92fa4db39c7a55b82a2ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ea64d9768a34dbaffb88b36a525f3b21daba423905a55afd6dd0853b1367574c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea64d9768a34dbaffb88b36a525f3b21daba423905a55afd6dd0853b1367574c->enter($__internal_ea64d9768a34dbaffb88b36a525f3b21daba423905a55afd6dd0853b1367574c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ea64d9768a34dbaffb88b36a525f3b21daba423905a55afd6dd0853b1367574c->leave($__internal_ea64d9768a34dbaffb88b36a525f3b21daba423905a55afd6dd0853b1367574c_prof);

        
        $__internal_756bafa1028e6b5face18b494ef25714435c4243e8d92fa4db39c7a55b82a2ab->leave($__internal_756bafa1028e6b5face18b494ef25714435c4243e8d92fa4db39c7a55b82a2ab_prof);

    }

    // line 61
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e3b09d0f9271a81f3c4b04033eb644f48a869cceb028f6841c3e1f67878b0287 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3b09d0f9271a81f3c4b04033eb644f48a869cceb028f6841c3e1f67878b0287->enter($__internal_e3b09d0f9271a81f3c4b04033eb644f48a869cceb028f6841c3e1f67878b0287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2476d03418c0d0d91f01abdeb11a63c922ffcca9e21ef0672bda38b8bfee24f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2476d03418c0d0d91f01abdeb11a63c922ffcca9e21ef0672bda38b8bfee24f8->enter($__internal_2476d03418c0d0d91f01abdeb11a63c922ffcca9e21ef0672bda38b8bfee24f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 62
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/js/signup.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
";
        
        $__internal_2476d03418c0d0d91f01abdeb11a63c922ffcca9e21ef0672bda38b8bfee24f8->leave($__internal_2476d03418c0d0d91f01abdeb11a63c922ffcca9e21ef0672bda38b8bfee24f8_prof);

        
        $__internal_e3b09d0f9271a81f3c4b04033eb644f48a869cceb028f6841c3e1f67878b0287->leave($__internal_e3b09d0f9271a81f3c4b04033eb644f48a869cceb028f6841c3e1f67878b0287_prof);

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
    <link rel=\"stylesheet\" href=\"{{ asset('/web/public/css/login.css')}}\" />
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
    <script src=\"{{ asset('/web/public/js/signup.js') }}\" type=\"text/javascript\"></script> 
{% endblock %}", "@User/Default/add_address.html.twig", "C:\\xampp\\htdocs\\src\\UserBundle\\Resources\\views\\Default\\add_address.html.twig");
    }
}
