<?php

/* UserBundle:Security:payment.html.twig */
class __TwigTemplate_8d8b30f7b428cd539f98a57fe3644ca22fe7ae74cd011379a382ff587fd9244e extends Twig_Template
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
        );
    }

    protected function doGetParent(array $context)
    {
        return "security.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0bc0d332708e17d26a2be215d4a2be98bffdf44eda45f685e8123d64fefe0c7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bc0d332708e17d26a2be215d4a2be98bffdf44eda45f685e8123d64fefe0c7d->enter($__internal_0bc0d332708e17d26a2be215d4a2be98bffdf44eda45f685e8123d64fefe0c7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Security:payment.html.twig"));

        $__internal_2650932472a1a836eb61f276e86e44ca03d30314a5018a99377fc56213400ec0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2650932472a1a836eb61f276e86e44ca03d30314a5018a99377fc56213400ec0->enter($__internal_2650932472a1a836eb61f276e86e44ca03d30314a5018a99377fc56213400ec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Security:payment.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0bc0d332708e17d26a2be215d4a2be98bffdf44eda45f685e8123d64fefe0c7d->leave($__internal_0bc0d332708e17d26a2be215d4a2be98bffdf44eda45f685e8123d64fefe0c7d_prof);

        
        $__internal_2650932472a1a836eb61f276e86e44ca03d30314a5018a99377fc56213400ec0->leave($__internal_2650932472a1a836eb61f276e86e44ca03d30314a5018a99377fc56213400ec0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dc4b4bfedf4007401841274c27250705578067b659e1a6c679210b757e8a4eb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc4b4bfedf4007401841274c27250705578067b659e1a6c679210b757e8a4eb6->enter($__internal_dc4b4bfedf4007401841274c27250705578067b659e1a6c679210b757e8a4eb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_44ac538f07e2ce6a0e767615e0297ddc344d4e86472e65293107c34156154c29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44ac538f07e2ce6a0e767615e0297ddc344d4e86472e65293107c34156154c29->enter($__internal_44ac538f07e2ce6a0e767615e0297ddc344d4e86472e65293107c34156154c29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Payment ";
        
        $__internal_44ac538f07e2ce6a0e767615e0297ddc344d4e86472e65293107c34156154c29->leave($__internal_44ac538f07e2ce6a0e767615e0297ddc344d4e86472e65293107c34156154c29_prof);

        
        $__internal_dc4b4bfedf4007401841274c27250705578067b659e1a6c679210b757e8a4eb6->leave($__internal_dc4b4bfedf4007401841274c27250705578067b659e1a6c679210b757e8a4eb6_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e196e9c26de2f9510a386d4d99f9878f9586d9c7ccf99f2ffc3d9935b8ca6364 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e196e9c26de2f9510a386d4d99f9878f9586d9c7ccf99f2ffc3d9935b8ca6364->enter($__internal_e196e9c26de2f9510a386d4d99f9878f9586d9c7ccf99f2ffc3d9935b8ca6364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d3c9d66c9a5cd091aca3e57656ac490a9d29500f558ade014238df4f852c8196 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3c9d66c9a5cd091aca3e57656ac490a9d29500f558ade014238df4f852c8196->enter($__internal_d3c9d66c9a5cd091aca3e57656ac490a9d29500f558ade014238df4f852c8196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/css/payment.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_d3c9d66c9a5cd091aca3e57656ac490a9d29500f558ade014238df4f852c8196->leave($__internal_d3c9d66c9a5cd091aca3e57656ac490a9d29500f558ade014238df4f852c8196_prof);

        
        $__internal_e196e9c26de2f9510a386d4d99f9878f9586d9c7ccf99f2ffc3d9935b8ca6364->leave($__internal_e196e9c26de2f9510a386d4d99f9878f9586d9c7ccf99f2ffc3d9935b8ca6364_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_77dded7ec7df0a483dae2eb8fe9f99693cded0f79dc7fa6f5602a5ee8da4444b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77dded7ec7df0a483dae2eb8fe9f99693cded0f79dc7fa6f5602a5ee8da4444b->enter($__internal_77dded7ec7df0a483dae2eb8fe9f99693cded0f79dc7fa6f5602a5ee8da4444b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9e037cf1a760106b728f392a200130850f670a77ff8dbb263198ce5f1c79bc05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e037cf1a760106b728f392a200130850f670a77ff8dbb263198ce5f1c79bc05->enter($__internal_9e037cf1a760106b728f392a200130850f670a77ff8dbb263198ce5f1c79bc05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9e037cf1a760106b728f392a200130850f670a77ff8dbb263198ce5f1c79bc05->leave($__internal_9e037cf1a760106b728f392a200130850f670a77ff8dbb263198ce5f1c79bc05_prof);

        
        $__internal_77dded7ec7df0a483dae2eb8fe9f99693cded0f79dc7fa6f5602a5ee8da4444b->leave($__internal_77dded7ec7df0a483dae2eb8fe9f99693cded0f79dc7fa6f5602a5ee8da4444b_prof);

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
", "UserBundle:Security:payment.html.twig", "C:\\xampp\\htdocs\\src\\UserBundle/Resources/views/Security/payment.html.twig");
    }
}
