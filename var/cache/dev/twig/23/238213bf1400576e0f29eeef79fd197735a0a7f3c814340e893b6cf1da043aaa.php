<?php

/* @User/Security/payment.html.twig */
class __TwigTemplate_7b4cfae6155f4cead5d32ff2a6cb37f78d546eec896084edd74351fb542221b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("security.html.twig", "@User/Security/payment.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "security.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d65121c890ff8960ca750a5120ee59ed81cc3db7c243c4cce59b68299b5382b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d65121c890ff8960ca750a5120ee59ed81cc3db7c243c4cce59b68299b5382b9->enter($__internal_d65121c890ff8960ca750a5120ee59ed81cc3db7c243c4cce59b68299b5382b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Security/payment.html.twig"));

        $__internal_556b1c31bf8580b0334888a461e3abc93822fa2e9f2283b00c1e5c5d32145777 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_556b1c31bf8580b0334888a461e3abc93822fa2e9f2283b00c1e5c5d32145777->enter($__internal_556b1c31bf8580b0334888a461e3abc93822fa2e9f2283b00c1e5c5d32145777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Security/payment.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d65121c890ff8960ca750a5120ee59ed81cc3db7c243c4cce59b68299b5382b9->leave($__internal_d65121c890ff8960ca750a5120ee59ed81cc3db7c243c4cce59b68299b5382b9_prof);

        
        $__internal_556b1c31bf8580b0334888a461e3abc93822fa2e9f2283b00c1e5c5d32145777->leave($__internal_556b1c31bf8580b0334888a461e3abc93822fa2e9f2283b00c1e5c5d32145777_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_74ffe6f9abccfc1ceeb1d0ca5aa5e79ae41aec731e0c758800aa11af3cf1bdfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74ffe6f9abccfc1ceeb1d0ca5aa5e79ae41aec731e0c758800aa11af3cf1bdfe->enter($__internal_74ffe6f9abccfc1ceeb1d0ca5aa5e79ae41aec731e0c758800aa11af3cf1bdfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_92bf58232904b3a5a1fad5370d101af339b66ecd2bbc21bb5a1c48391a293d3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92bf58232904b3a5a1fad5370d101af339b66ecd2bbc21bb5a1c48391a293d3a->enter($__internal_92bf58232904b3a5a1fad5370d101af339b66ecd2bbc21bb5a1c48391a293d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Payment ";
        
        $__internal_92bf58232904b3a5a1fad5370d101af339b66ecd2bbc21bb5a1c48391a293d3a->leave($__internal_92bf58232904b3a5a1fad5370d101af339b66ecd2bbc21bb5a1c48391a293d3a_prof);

        
        $__internal_74ffe6f9abccfc1ceeb1d0ca5aa5e79ae41aec731e0c758800aa11af3cf1bdfe->leave($__internal_74ffe6f9abccfc1ceeb1d0ca5aa5e79ae41aec731e0c758800aa11af3cf1bdfe_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_20e226c375df64e83f9a6a1fbec98b2a5e93e638777fc4051cf69011f43dafa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20e226c375df64e83f9a6a1fbec98b2a5e93e638777fc4051cf69011f43dafa8->enter($__internal_20e226c375df64e83f9a6a1fbec98b2a5e93e638777fc4051cf69011f43dafa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e8ce20e0c41bafd99816cf28150be1d8b99af83d78f0df08fbadc45219a74a8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8ce20e0c41bafd99816cf28150be1d8b99af83d78f0df08fbadc45219a74a8c->enter($__internal_e8ce20e0c41bafd99816cf28150be1d8b99af83d78f0df08fbadc45219a74a8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/css/payment.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_e8ce20e0c41bafd99816cf28150be1d8b99af83d78f0df08fbadc45219a74a8c->leave($__internal_e8ce20e0c41bafd99816cf28150be1d8b99af83d78f0df08fbadc45219a74a8c_prof);

        
        $__internal_20e226c375df64e83f9a6a1fbec98b2a5e93e638777fc4051cf69011f43dafa8->leave($__internal_20e226c375df64e83f9a6a1fbec98b2a5e93e638777fc4051cf69011f43dafa8_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b6496446b617760f7311a5d4920d23d26461cf573488f228f2c415bdbe68185 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b6496446b617760f7311a5d4920d23d26461cf573488f228f2c415bdbe68185->enter($__internal_4b6496446b617760f7311a5d4920d23d26461cf573488f228f2c415bdbe68185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9ac063d9bb16e9c0736f28b04a90b7fc46042e064480f2a8307f7eb426db5824 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ac063d9bb16e9c0736f28b04a90b7fc46042e064480f2a8307f7eb426db5824->enter($__internal_9ac063d9bb16e9c0736f28b04a90b7fc46042e064480f2a8307f7eb426db5824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
               <form role=\"form\" id=\"payment-form\">
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
                        <a class=\"btn btn-success btn-lg btn-block\" href=\"";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_homepage", array("name" => "home"));
        echo "\">Confirm payment</button>
                     </a>
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
        
        $__internal_9ac063d9bb16e9c0736f28b04a90b7fc46042e064480f2a8307f7eb426db5824->leave($__internal_9ac063d9bb16e9c0736f28b04a90b7fc46042e064480f2a8307f7eb426db5824_prof);

        
        $__internal_4b6496446b617760f7311a5d4920d23d26461cf573488f228f2c415bdbe68185->leave($__internal_4b6496446b617760f7311a5d4920d23d26461cf573488f228f2c415bdbe68185_prof);

    }

    public function getTemplateName()
    {
        return "@User/Security/payment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 71,  86 => 9,  74 => 6,  69 => 5,  60 => 4,  42 => 3,  11 => 1,);
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
    <link rel=\"stylesheet\" href=\"{{ asset('/web/public/css/payment.css')}}\" />
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
               <form role=\"form\" id=\"payment-form\">
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
                        <a class=\"btn btn-success btn-lg btn-block\" href=\"{{ path('page_homepage', {'name': 'home' }) }}\">Confirm payment</button>
                     </a>
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
", "@User/Security/payment.html.twig", "C:\\xampp\\htdocs\\src\\UserBundle\\Resources\\views\\Security\\payment.html.twig");
    }
}
