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
        $__internal_2e64e16ac7d9b1f3e61e2d5551303641fa8742a9120b961d27c9c2b1fc6b2abb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e64e16ac7d9b1f3e61e2d5551303641fa8742a9120b961d27c9c2b1fc6b2abb->enter($__internal_2e64e16ac7d9b1f3e61e2d5551303641fa8742a9120b961d27c9c2b1fc6b2abb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Security:payment.html.twig"));

        $__internal_c47db7c2efe9972a1ac0abd0d12e6afbe9dbf2f8ad9b7d272e51a0d45a6552d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c47db7c2efe9972a1ac0abd0d12e6afbe9dbf2f8ad9b7d272e51a0d45a6552d1->enter($__internal_c47db7c2efe9972a1ac0abd0d12e6afbe9dbf2f8ad9b7d272e51a0d45a6552d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Security:payment.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e64e16ac7d9b1f3e61e2d5551303641fa8742a9120b961d27c9c2b1fc6b2abb->leave($__internal_2e64e16ac7d9b1f3e61e2d5551303641fa8742a9120b961d27c9c2b1fc6b2abb_prof);

        
        $__internal_c47db7c2efe9972a1ac0abd0d12e6afbe9dbf2f8ad9b7d272e51a0d45a6552d1->leave($__internal_c47db7c2efe9972a1ac0abd0d12e6afbe9dbf2f8ad9b7d272e51a0d45a6552d1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fb728cb80743f4486672fa9932011feca94f67b849fe4c9ba88c2f8d24242365 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb728cb80743f4486672fa9932011feca94f67b849fe4c9ba88c2f8d24242365->enter($__internal_fb728cb80743f4486672fa9932011feca94f67b849fe4c9ba88c2f8d24242365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3b6bb0b4df6daf6553e69fd023dc2bcc909591ecf2a66c14fb6a3993b1598e5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b6bb0b4df6daf6553e69fd023dc2bcc909591ecf2a66c14fb6a3993b1598e5b->enter($__internal_3b6bb0b4df6daf6553e69fd023dc2bcc909591ecf2a66c14fb6a3993b1598e5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Payment ";
        
        $__internal_3b6bb0b4df6daf6553e69fd023dc2bcc909591ecf2a66c14fb6a3993b1598e5b->leave($__internal_3b6bb0b4df6daf6553e69fd023dc2bcc909591ecf2a66c14fb6a3993b1598e5b_prof);

        
        $__internal_fb728cb80743f4486672fa9932011feca94f67b849fe4c9ba88c2f8d24242365->leave($__internal_fb728cb80743f4486672fa9932011feca94f67b849fe4c9ba88c2f8d24242365_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e515e7ea4f83b68413f313f7ebad73d7c63afb623dea2b35dcff6412d7d8fc07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e515e7ea4f83b68413f313f7ebad73d7c63afb623dea2b35dcff6412d7d8fc07->enter($__internal_e515e7ea4f83b68413f313f7ebad73d7c63afb623dea2b35dcff6412d7d8fc07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e2b85968c5b465a57404f934c0f397138a3fd393dd5d50623d51d9d6edaef603 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2b85968c5b465a57404f934c0f397138a3fd393dd5d50623d51d9d6edaef603->enter($__internal_e2b85968c5b465a57404f934c0f397138a3fd393dd5d50623d51d9d6edaef603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/payment.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_e2b85968c5b465a57404f934c0f397138a3fd393dd5d50623d51d9d6edaef603->leave($__internal_e2b85968c5b465a57404f934c0f397138a3fd393dd5d50623d51d9d6edaef603_prof);

        
        $__internal_e515e7ea4f83b68413f313f7ebad73d7c63afb623dea2b35dcff6412d7d8fc07->leave($__internal_e515e7ea4f83b68413f313f7ebad73d7c63afb623dea2b35dcff6412d7d8fc07_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_bec6a6c1639df407fa9a01680d8cb3c1d8d9658d0f415515d8151f89dca34d0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bec6a6c1639df407fa9a01680d8cb3c1d8d9658d0f415515d8151f89dca34d0c->enter($__internal_bec6a6c1639df407fa9a01680d8cb3c1d8d9658d0f415515d8151f89dca34d0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_19a6f7f38f38c953a2c39b0be1d779a4bd893ae1c4146ad92341673872f23f5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19a6f7f38f38c953a2c39b0be1d779a4bd893ae1c4146ad92341673872f23f5e->enter($__internal_19a6f7f38f38c953a2c39b0be1d779a4bd893ae1c4146ad92341673872f23f5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_19a6f7f38f38c953a2c39b0be1d779a4bd893ae1c4146ad92341673872f23f5e->leave($__internal_19a6f7f38f38c953a2c39b0be1d779a4bd893ae1c4146ad92341673872f23f5e_prof);

        
        $__internal_bec6a6c1639df407fa9a01680d8cb3c1d8d9658d0f415515d8151f89dca34d0c->leave($__internal_bec6a6c1639df407fa9a01680d8cb3c1d8d9658d0f415515d8151f89dca34d0c_prof);

    }

    // line 90
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2c801cdb4952225ed769e76fbf744b6adbc0179ae5f641b95a9c6e16aa75514f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c801cdb4952225ed769e76fbf744b6adbc0179ae5f641b95a9c6e16aa75514f->enter($__internal_2c801cdb4952225ed769e76fbf744b6adbc0179ae5f641b95a9c6e16aa75514f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_89c3bfd1ba97f601a570fb0071be3de34beffb96880b0dc14481d065f072d69e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89c3bfd1ba97f601a570fb0071be3de34beffb96880b0dc14481d065f072d69e->enter($__internal_89c3bfd1ba97f601a570fb0071be3de34beffb96880b0dc14481d065f072d69e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 91
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/payment.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
";
        
        $__internal_89c3bfd1ba97f601a570fb0071be3de34beffb96880b0dc14481d065f072d69e->leave($__internal_89c3bfd1ba97f601a570fb0071be3de34beffb96880b0dc14481d065f072d69e_prof);

        
        $__internal_2c801cdb4952225ed769e76fbf744b6adbc0179ae5f641b95a9c6e16aa75514f->leave($__internal_2c801cdb4952225ed769e76fbf744b6adbc0179ae5f641b95a9c6e16aa75514f_prof);

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
