<?php

/* @User/Default/signUp.html.twig */
class __TwigTemplate_cc7104297010631b06f1b07e2185959287f3fedf0c01dd0c224e56c9ca9c0343 extends Twig_Template
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
        $__internal_288e2d3ba086138e98f25bdf866159abd06e6137a9aa0ceac3fe855f3d2fcaf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_288e2d3ba086138e98f25bdf866159abd06e6137a9aa0ceac3fe855f3d2fcaf7->enter($__internal_288e2d3ba086138e98f25bdf866159abd06e6137a9aa0ceac3fe855f3d2fcaf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Default/signUp.html.twig"));

        $__internal_9fd42224fec308e8541c0dbb9d3ce1f75866669b5b7f273a58520115b9b15e0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fd42224fec308e8541c0dbb9d3ce1f75866669b5b7f273a58520115b9b15e0c->enter($__internal_9fd42224fec308e8541c0dbb9d3ce1f75866669b5b7f273a58520115b9b15e0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Default/signUp.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_288e2d3ba086138e98f25bdf866159abd06e6137a9aa0ceac3fe855f3d2fcaf7->leave($__internal_288e2d3ba086138e98f25bdf866159abd06e6137a9aa0ceac3fe855f3d2fcaf7_prof);

        
        $__internal_9fd42224fec308e8541c0dbb9d3ce1f75866669b5b7f273a58520115b9b15e0c->leave($__internal_9fd42224fec308e8541c0dbb9d3ce1f75866669b5b7f273a58520115b9b15e0c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_af3fb2ef61ca52e7b5586625ed7f28db8f3e91306854492cada72f63e8aa9951 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af3fb2ef61ca52e7b5586625ed7f28db8f3e91306854492cada72f63e8aa9951->enter($__internal_af3fb2ef61ca52e7b5586625ed7f28db8f3e91306854492cada72f63e8aa9951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1a6361385c2dadeb358825068b00027b7a7b4c172f39a987ea364419b7453504 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a6361385c2dadeb358825068b00027b7a7b4c172f39a987ea364419b7453504->enter($__internal_1a6361385c2dadeb358825068b00027b7a7b4c172f39a987ea364419b7453504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Sign Up ";
        
        $__internal_1a6361385c2dadeb358825068b00027b7a7b4c172f39a987ea364419b7453504->leave($__internal_1a6361385c2dadeb358825068b00027b7a7b4c172f39a987ea364419b7453504_prof);

        
        $__internal_af3fb2ef61ca52e7b5586625ed7f28db8f3e91306854492cada72f63e8aa9951->leave($__internal_af3fb2ef61ca52e7b5586625ed7f28db8f3e91306854492cada72f63e8aa9951_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6529e90f21bc2466700a848ab3e5980ee33d0f60df8dfe192abe3c2c11b455e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6529e90f21bc2466700a848ab3e5980ee33d0f60df8dfe192abe3c2c11b455e0->enter($__internal_6529e90f21bc2466700a848ab3e5980ee33d0f60df8dfe192abe3c2c11b455e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_86f4d4fcd88c9080898918d60deb3a74ac5a2aba8f84be3728332c44a278ec61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86f4d4fcd88c9080898918d60deb3a74ac5a2aba8f84be3728332c44a278ec61->enter($__internal_86f4d4fcd88c9080898918d60deb3a74ac5a2aba8f84be3728332c44a278ec61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/css/login.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_86f4d4fcd88c9080898918d60deb3a74ac5a2aba8f84be3728332c44a278ec61->leave($__internal_86f4d4fcd88c9080898918d60deb3a74ac5a2aba8f84be3728332c44a278ec61_prof);

        
        $__internal_6529e90f21bc2466700a848ab3e5980ee33d0f60df8dfe192abe3c2c11b455e0->leave($__internal_6529e90f21bc2466700a848ab3e5980ee33d0f60df8dfe192abe3c2c11b455e0_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_26840a775f3a53ec4be43aa25061b348e58bcc1115e13f2325ae045ab77c1257 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26840a775f3a53ec4be43aa25061b348e58bcc1115e13f2325ae045ab77c1257->enter($__internal_26840a775f3a53ec4be43aa25061b348e58bcc1115e13f2325ae045ab77c1257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0df9aae77b2d00130a7712d0826ada5bf7941eecc5f17c7029a77d107751f835 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0df9aae77b2d00130a7712d0826ada5bf7941eecc5f17c7029a77d107751f835->enter($__internal_0df9aae77b2d00130a7712d0826ada5bf7941eecc5f17c7029a77d107751f835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0df9aae77b2d00130a7712d0826ada5bf7941eecc5f17c7029a77d107751f835->leave($__internal_0df9aae77b2d00130a7712d0826ada5bf7941eecc5f17c7029a77d107751f835_prof);

        
        $__internal_26840a775f3a53ec4be43aa25061b348e58bcc1115e13f2325ae045ab77c1257->leave($__internal_26840a775f3a53ec4be43aa25061b348e58bcc1115e13f2325ae045ab77c1257_prof);

    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d4b2f8303efde315d75c4edd3efc90ea1d199c85ab5cbb5ac1798034dd0b1f69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4b2f8303efde315d75c4edd3efc90ea1d199c85ab5cbb5ac1798034dd0b1f69->enter($__internal_d4b2f8303efde315d75c4edd3efc90ea1d199c85ab5cbb5ac1798034dd0b1f69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4abfa3226ab3cec2ccee0f986d51b660dd2e4c41772c99bd37116f08cbbf7038 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4abfa3226ab3cec2ccee0f986d51b660dd2e4c41772c99bd37116f08cbbf7038->enter($__internal_4abfa3226ab3cec2ccee0f986d51b660dd2e4c41772c99bd37116f08cbbf7038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 57
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/js/signup.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
";
        
        $__internal_4abfa3226ab3cec2ccee0f986d51b660dd2e4c41772c99bd37116f08cbbf7038->leave($__internal_4abfa3226ab3cec2ccee0f986d51b660dd2e4c41772c99bd37116f08cbbf7038_prof);

        
        $__internal_d4b2f8303efde315d75c4edd3efc90ea1d199c85ab5cbb5ac1798034dd0b1f69->leave($__internal_d4b2f8303efde315d75c4edd3efc90ea1d199c85ab5cbb5ac1798034dd0b1f69_prof);

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
    <link rel=\"stylesheet\" href=\"{{ asset('/web/public/css/login.css')}}\" />
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
    <script src=\"{{ asset('/web/public/js/signup.js') }}\" type=\"text/javascript\"></script> 
{% endblock %}", "@User/Default/signUp.html.twig", "C:\\xampp\\htdocs\\src\\UserBundle\\Resources\\views\\Default\\signUp.html.twig");
    }
}
