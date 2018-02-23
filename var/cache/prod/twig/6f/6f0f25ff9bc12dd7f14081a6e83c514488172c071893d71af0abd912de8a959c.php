<?php

/* UserBundle:Security:payment.html.twig */
class __TwigTemplate_4821a9c0b34ce35bfefaaeaaa5ed0a982d0cb765533959cd3d79eb77f2543b1b extends Twig_Template
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
        $__internal_963db5b108c6112833a666114e3db7d2eee71f0dba20ec3fdfe10035c2506ce9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_963db5b108c6112833a666114e3db7d2eee71f0dba20ec3fdfe10035c2506ce9->enter($__internal_963db5b108c6112833a666114e3db7d2eee71f0dba20ec3fdfe10035c2506ce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Security:payment.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_963db5b108c6112833a666114e3db7d2eee71f0dba20ec3fdfe10035c2506ce9->leave($__internal_963db5b108c6112833a666114e3db7d2eee71f0dba20ec3fdfe10035c2506ce9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ba731e6bfa29e30ed86108d62b2838960951f5daa514974d6135d6a7c2024637 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba731e6bfa29e30ed86108d62b2838960951f5daa514974d6135d6a7c2024637->enter($__internal_ba731e6bfa29e30ed86108d62b2838960951f5daa514974d6135d6a7c2024637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Payment ";
        
        $__internal_ba731e6bfa29e30ed86108d62b2838960951f5daa514974d6135d6a7c2024637->leave($__internal_ba731e6bfa29e30ed86108d62b2838960951f5daa514974d6135d6a7c2024637_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7d383c6f3ad6279a299a27fd4d455fd6faba190d957925e5b469349f9a2f34f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d383c6f3ad6279a299a27fd4d455fd6faba190d957925e5b469349f9a2f34f4->enter($__internal_7d383c6f3ad6279a299a27fd4d455fd6faba190d957925e5b469349f9a2f34f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/css/payment.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_7d383c6f3ad6279a299a27fd4d455fd6faba190d957925e5b469349f9a2f34f4->leave($__internal_7d383c6f3ad6279a299a27fd4d455fd6faba190d957925e5b469349f9a2f34f4_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_7e0e437c8cfde3a6fc287f6482cd9c6231208ac2f72b8ad404d14a31b23151fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e0e437c8cfde3a6fc287f6482cd9c6231208ac2f72b8ad404d14a31b23151fa->enter($__internal_7e0e437c8cfde3a6fc287f6482cd9c6231208ac2f72b8ad404d14a31b23151fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7e0e437c8cfde3a6fc287f6482cd9c6231208ac2f72b8ad404d14a31b23151fa->leave($__internal_7e0e437c8cfde3a6fc287f6482cd9c6231208ac2f72b8ad404d14a31b23151fa_prof);

    }

    // line 90
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_347c5a57f54867fbecebc29fed0273164358e18c1bb6931fbdc63f0dec46f4a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_347c5a57f54867fbecebc29fed0273164358e18c1bb6931fbdc63f0dec46f4a0->enter($__internal_347c5a57f54867fbecebc29fed0273164358e18c1bb6931fbdc63f0dec46f4a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 91
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/js/payment.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
";
        
        $__internal_347c5a57f54867fbecebc29fed0273164358e18c1bb6931fbdc63f0dec46f4a0->leave($__internal_347c5a57f54867fbecebc29fed0273164358e18c1bb6931fbdc63f0dec46f4a0_prof);

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
        return array (  177 => 92,  172 => 91,  166 => 90,  141 => 71,  89 => 22,  69 => 9,  60 => 6,  55 => 5,  49 => 4,  37 => 3,  11 => 1,);
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
    <script src=\"{{ asset('/web/public/js/payment.js') }}\" type=\"text/javascript\"></script> 
{% endblock %}", "UserBundle:Security:payment.html.twig", "/home/crgourme/public_html/src/UserBundle/Resources/views/Security/payment.html.twig");
    }
}
