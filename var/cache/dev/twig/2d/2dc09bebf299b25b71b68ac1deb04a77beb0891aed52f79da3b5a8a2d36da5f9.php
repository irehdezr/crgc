<?php

/* UserBundle:Security:payment.html.twig */
class __TwigTemplate_4e3630ac73c269631c6885c7630403ba7ad9ba12a7fb2bee4f0e131a85ecde14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("security.html.twig", "UserBundle:Security:payment.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "security.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b27b5abe5ce3d83e9397aa5201e7768d6d1d09203bb4796b50e73576b97a5215 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b27b5abe5ce3d83e9397aa5201e7768d6d1d09203bb4796b50e73576b97a5215->enter($__internal_b27b5abe5ce3d83e9397aa5201e7768d6d1d09203bb4796b50e73576b97a5215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Security:payment.html.twig"));

        $__internal_716ea9b5d9b2354d073d8d408cc14c6b412393c3d1cedb713aa147b4c3700d16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_716ea9b5d9b2354d073d8d408cc14c6b412393c3d1cedb713aa147b4c3700d16->enter($__internal_716ea9b5d9b2354d073d8d408cc14c6b412393c3d1cedb713aa147b4c3700d16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Security:payment.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b27b5abe5ce3d83e9397aa5201e7768d6d1d09203bb4796b50e73576b97a5215->leave($__internal_b27b5abe5ce3d83e9397aa5201e7768d6d1d09203bb4796b50e73576b97a5215_prof);

        
        $__internal_716ea9b5d9b2354d073d8d408cc14c6b412393c3d1cedb713aa147b4c3700d16->leave($__internal_716ea9b5d9b2354d073d8d408cc14c6b412393c3d1cedb713aa147b4c3700d16_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_80ba367130536d357b18fdd68a895fd764e7ab5a8401023618d63e06b826c8af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80ba367130536d357b18fdd68a895fd764e7ab5a8401023618d63e06b826c8af->enter($__internal_80ba367130536d357b18fdd68a895fd764e7ab5a8401023618d63e06b826c8af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c70384af59e491cb26deeab65e334714e7e19a3dfdafbfd26d32a3ca9a433cef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c70384af59e491cb26deeab65e334714e7e19a3dfdafbfd26d32a3ca9a433cef->enter($__internal_c70384af59e491cb26deeab65e334714e7e19a3dfdafbfd26d32a3ca9a433cef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Payment ";
        
        $__internal_c70384af59e491cb26deeab65e334714e7e19a3dfdafbfd26d32a3ca9a433cef->leave($__internal_c70384af59e491cb26deeab65e334714e7e19a3dfdafbfd26d32a3ca9a433cef_prof);

        
        $__internal_80ba367130536d357b18fdd68a895fd764e7ab5a8401023618d63e06b826c8af->leave($__internal_80ba367130536d357b18fdd68a895fd764e7ab5a8401023618d63e06b826c8af_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d9cade0b307ca2f10083f856c9716501508592d4195e06e6c54e4a90019898c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9cade0b307ca2f10083f856c9716501508592d4195e06e6c54e4a90019898c8->enter($__internal_d9cade0b307ca2f10083f856c9716501508592d4195e06e6c54e4a90019898c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_55ca7e00ae0615992f7b5b64799fd7d6649cdc7c1e76508b869622d77fdaf31e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55ca7e00ae0615992f7b5b64799fd7d6649cdc7c1e76508b869622d77fdaf31e->enter($__internal_55ca7e00ae0615992f7b5b64799fd7d6649cdc7c1e76508b869622d77fdaf31e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/payment.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_55ca7e00ae0615992f7b5b64799fd7d6649cdc7c1e76508b869622d77fdaf31e->leave($__internal_55ca7e00ae0615992f7b5b64799fd7d6649cdc7c1e76508b869622d77fdaf31e_prof);

        
        $__internal_d9cade0b307ca2f10083f856c9716501508592d4195e06e6c54e4a90019898c8->leave($__internal_d9cade0b307ca2f10083f856c9716501508592d4195e06e6c54e4a90019898c8_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_a4bbd5c6a3c556af8d332f9399b0359a8ee798f3b6dc541d11576601d0441d4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4bbd5c6a3c556af8d332f9399b0359a8ee798f3b6dc541d11576601d0441d4a->enter($__internal_a4bbd5c6a3c556af8d332f9399b0359a8ee798f3b6dc541d11576601d0441d4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e35b90a0601f14ef87afadd594b5065a6674d2cfda04a75a1f93cf414292877a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e35b90a0601f14ef87afadd594b5065a6674d2cfda04a75a1f93cf414292877a->enter($__internal_e35b90a0601f14ef87afadd594b5065a6674d2cfda04a75a1f93cf414292877a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "<div class=\"container\">
   <div class=\"row\">
      <div class=\"col-xs-12 col-md-4 col-md-offset-4\">
         <div class=\"panel panel-default credit-card-box\">
            <div class=\"panel-heading display-table\" >
               <div class=\"row display-tr\" >
                  <h3 class=\"panel-title display-td\" >Payment Details</h3>
                  <div class=\"display-td\" >                            
                     <img class=\"img-responsive pull-right\" src=\"http://i76.imgup.net/accepted_c22e0.png\">
                  </div>
               </div>
            </div>
            <div class=\"panel-body\">
               <form role=\"form\" id=\"payment-form\" method=\"POST\" action=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_clear_cart");
        echo "\">
                  <div class=\"row\">
                     <div class=\"col-xs-12\">
                        <div class=\"form-group\">
                           <label for=\"cardNumber\">CARD NUMBER</label>
                           <div class=\"input-group\">
                              <input 
                                 type=\"tel\"
                                 class=\"form-control\"
                                 name=\"cardNumber\"
                                 placeholder=\"Valid Card Number\"
                                 autocomplete=\"cc-number\"
                                 required autofocus 
                                 />
                              <span class=\"input-group-addon\"><i class=\"fa fa-credit-card\"></i></span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class=\"row\">
                     <div class=\"col-xs-7 col-md-7\">
                        <div class=\"form-group\">
                           <label for=\"cardExpiry\"><span class=\"hidden-xs\">EXPIRATION</span><span class=\"visible-xs-inline\">EXP</span> DATE</label>
                           <input 
                              type=\"tel\" 
                              class=\"form-control\" 
                              name=\"cardExpiry\"
                              placeholder=\"MM / YY\"
                              autocomplete=\"cc-exp\"
                              required 
                              />
                        </div>
                     </div>
                     <div class=\"col-xs-5 col-md-5 pull-right\">
                        <div class=\"form-group\">
                           <label for=\"cardCVC\">CV CODE</label>
                           <input 
                              type=\"tel\" 
                              class=\"form-control\"
                              name=\"cardCVC\"
                              placeholder=\"CVC\"
                              autocomplete=\"cc-csc\"
                              required
                              />
                        </div>
                     </div>
                  </div>
                  <div class=\"row\">
                     <div class=\"col-xs-12\">
                        <button type=\"submit\" class=\"btn btn-success btn-lg btn-block\" href=\"";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_homepage", array("name" => "home"));
        echo "\"> 
                           Confirm payment
                        </button>
                     
                  </div>
                  <div class=\"row\" style=\"display:none;\">
                     <div class=\"col-xs-12\">
                        <p class=\"payment-errors\"></p>
                     </div>
                  </div>
               </form>
            </div>
         </div>
         <!-- CREDIT CARD FORM ENDS HERE -->
      </div>
   </div>
</div>
";
        
        $__internal_e35b90a0601f14ef87afadd594b5065a6674d2cfda04a75a1f93cf414292877a->leave($__internal_e35b90a0601f14ef87afadd594b5065a6674d2cfda04a75a1f93cf414292877a_prof);

        
        $__internal_a4bbd5c6a3c556af8d332f9399b0359a8ee798f3b6dc541d11576601d0441d4a->leave($__internal_a4bbd5c6a3c556af8d332f9399b0359a8ee798f3b6dc541d11576601d0441d4a_prof);

    }

    // line 90
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_77c0d23a34102175b5aee2033acdde476f5bc518043d8dd675569847f9afe635 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77c0d23a34102175b5aee2033acdde476f5bc518043d8dd675569847f9afe635->enter($__internal_77c0d23a34102175b5aee2033acdde476f5bc518043d8dd675569847f9afe635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9683ef7d262f887f7f96bad476cfe64750103c293f7a7727cec2459e72daf69f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9683ef7d262f887f7f96bad476cfe64750103c293f7a7727cec2459e72daf69f->enter($__internal_9683ef7d262f887f7f96bad476cfe64750103c293f7a7727cec2459e72daf69f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 91
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/payment.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
";
        
        $__internal_9683ef7d262f887f7f96bad476cfe64750103c293f7a7727cec2459e72daf69f->leave($__internal_9683ef7d262f887f7f96bad476cfe64750103c293f7a7727cec2459e72daf69f_prof);

        
        $__internal_77c0d23a34102175b5aee2033acdde476f5bc518043d8dd675569847f9afe635->leave($__internal_77c0d23a34102175b5aee2033acdde476f5bc518043d8dd675569847f9afe635_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Security:payment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 92,  199 => 91,  190 => 90,  162 => 71,  110 => 22,  87 => 9,  75 => 6,  70 => 5,  61 => 4,  43 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"security.html.twig\" %}

{% block title%} Payment {% endblock %}
{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/payment.css')}}\" />
{% endblock %}

{% block body %}<div class=\"container\">
   <div class=\"row\">
      <div class=\"col-xs-12 col-md-4 col-md-offset-4\">
         <div class=\"panel panel-default credit-card-box\">
            <div class=\"panel-heading display-table\" >
               <div class=\"row display-tr\" >
                  <h3 class=\"panel-title display-td\" >Payment Details</h3>
                  <div class=\"display-td\" >                            
                     <img class=\"img-responsive pull-right\" src=\"http://i76.imgup.net/accepted_c22e0.png\">
                  </div>
               </div>
            </div>
            <div class=\"panel-body\">
               <form role=\"form\" id=\"payment-form\" method=\"POST\" action=\"{{ path('user_clear_cart')}}\">
                  <div class=\"row\">
                     <div class=\"col-xs-12\">
                        <div class=\"form-group\">
                           <label for=\"cardNumber\">CARD NUMBER</label>
                           <div class=\"input-group\">
                              <input 
                                 type=\"tel\"
                                 class=\"form-control\"
                                 name=\"cardNumber\"
                                 placeholder=\"Valid Card Number\"
                                 autocomplete=\"cc-number\"
                                 required autofocus 
                                 />
                              <span class=\"input-group-addon\"><i class=\"fa fa-credit-card\"></i></span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class=\"row\">
                     <div class=\"col-xs-7 col-md-7\">
                        <div class=\"form-group\">
                           <label for=\"cardExpiry\"><span class=\"hidden-xs\">EXPIRATION</span><span class=\"visible-xs-inline\">EXP</span> DATE</label>
                           <input 
                              type=\"tel\" 
                              class=\"form-control\" 
                              name=\"cardExpiry\"
                              placeholder=\"MM / YY\"
                              autocomplete=\"cc-exp\"
                              required 
                              />
                        </div>
                     </div>
                     <div class=\"col-xs-5 col-md-5 pull-right\">
                        <div class=\"form-group\">
                           <label for=\"cardCVC\">CV CODE</label>
                           <input 
                              type=\"tel\" 
                              class=\"form-control\"
                              name=\"cardCVC\"
                              placeholder=\"CVC\"
                              autocomplete=\"cc-csc\"
                              required
                              />
                        </div>
                     </div>
                  </div>
                  <div class=\"row\">
                     <div class=\"col-xs-12\">
                        <button type=\"submit\" class=\"btn btn-success btn-lg btn-block\" href=\"{{ path('page_homepage', {'name': 'home' }) }}\"> 
                           Confirm payment
                        </button>
                     
                  </div>
                  <div class=\"row\" style=\"display:none;\">
                     <div class=\"col-xs-12\">
                        <p class=\"payment-errors\"></p>
                     </div>
                  </div>
               </form>
            </div>
         </div>
         <!-- CREDIT CARD FORM ENDS HERE -->
      </div>
   </div>
</div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('js/payment.js') }}\" type=\"text/javascript\"></script> 
{% endblock %}", "UserBundle:Security:payment.html.twig", "C:\\xampp\\htdocs\\crgc\\src\\UserBundle/Resources/views/Security/payment.html.twig");
    }
}
