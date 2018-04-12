<?php

/* @User/Security/payment.html.twig */
class __TwigTemplate_7ce202824d545a0ea0eca5c70114f8d1dc87bdfd29f4ae3b5cb70f987f69ef18 extends Twig_Template
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
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "security.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0e0748ffca03a15b75b3136f3183056a47ed63b592afdd53db8af6c0d0f812be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e0748ffca03a15b75b3136f3183056a47ed63b592afdd53db8af6c0d0f812be->enter($__internal_0e0748ffca03a15b75b3136f3183056a47ed63b592afdd53db8af6c0d0f812be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Security/payment.html.twig"));

        $__internal_308f22f69050a5d91014d67b96f3da201812b165afa75c861838954c5bb4b29c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_308f22f69050a5d91014d67b96f3da201812b165afa75c861838954c5bb4b29c->enter($__internal_308f22f69050a5d91014d67b96f3da201812b165afa75c861838954c5bb4b29c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Security/payment.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e0748ffca03a15b75b3136f3183056a47ed63b592afdd53db8af6c0d0f812be->leave($__internal_0e0748ffca03a15b75b3136f3183056a47ed63b592afdd53db8af6c0d0f812be_prof);

        
        $__internal_308f22f69050a5d91014d67b96f3da201812b165afa75c861838954c5bb4b29c->leave($__internal_308f22f69050a5d91014d67b96f3da201812b165afa75c861838954c5bb4b29c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_db295b400dfceaad4206e53f238ea535a78abf1ae7d398f26f7befc131fa4480 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db295b400dfceaad4206e53f238ea535a78abf1ae7d398f26f7befc131fa4480->enter($__internal_db295b400dfceaad4206e53f238ea535a78abf1ae7d398f26f7befc131fa4480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d84cb5c1b3a393cdda188e432a71defa839be34bbce505a0abb3b18db0e66741 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d84cb5c1b3a393cdda188e432a71defa839be34bbce505a0abb3b18db0e66741->enter($__internal_d84cb5c1b3a393cdda188e432a71defa839be34bbce505a0abb3b18db0e66741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Payment ";
        
        $__internal_d84cb5c1b3a393cdda188e432a71defa839be34bbce505a0abb3b18db0e66741->leave($__internal_d84cb5c1b3a393cdda188e432a71defa839be34bbce505a0abb3b18db0e66741_prof);

        
        $__internal_db295b400dfceaad4206e53f238ea535a78abf1ae7d398f26f7befc131fa4480->leave($__internal_db295b400dfceaad4206e53f238ea535a78abf1ae7d398f26f7befc131fa4480_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2b46b88c75780095044c86fcd7a1e9ed475573a754643f62f87fce4ac5457813 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b46b88c75780095044c86fcd7a1e9ed475573a754643f62f87fce4ac5457813->enter($__internal_2b46b88c75780095044c86fcd7a1e9ed475573a754643f62f87fce4ac5457813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2887752151bf1691511644ee844f296eb14aa4118c1e1537d819c130f8750ec7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2887752151bf1691511644ee844f296eb14aa4118c1e1537d819c130f8750ec7->enter($__internal_2887752151bf1691511644ee844f296eb14aa4118c1e1537d819c130f8750ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/payment.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_2887752151bf1691511644ee844f296eb14aa4118c1e1537d819c130f8750ec7->leave($__internal_2887752151bf1691511644ee844f296eb14aa4118c1e1537d819c130f8750ec7_prof);

        
        $__internal_2b46b88c75780095044c86fcd7a1e9ed475573a754643f62f87fce4ac5457813->leave($__internal_2b46b88c75780095044c86fcd7a1e9ed475573a754643f62f87fce4ac5457813_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_029148f3b41f1b178b9e01c7d7b7ab8755f5b17e7b0ca2bc83c139d8cfe81f8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_029148f3b41f1b178b9e01c7d7b7ab8755f5b17e7b0ca2bc83c139d8cfe81f8d->enter($__internal_029148f3b41f1b178b9e01c7d7b7ab8755f5b17e7b0ca2bc83c139d8cfe81f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dad81afdc7922dac8846970d698a3375732053c98047efe5400b2fc3c992d4d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dad81afdc7922dac8846970d698a3375732053c98047efe5400b2fc3c992d4d3->enter($__internal_dad81afdc7922dac8846970d698a3375732053c98047efe5400b2fc3c992d4d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_dad81afdc7922dac8846970d698a3375732053c98047efe5400b2fc3c992d4d3->leave($__internal_dad81afdc7922dac8846970d698a3375732053c98047efe5400b2fc3c992d4d3_prof);

        
        $__internal_029148f3b41f1b178b9e01c7d7b7ab8755f5b17e7b0ca2bc83c139d8cfe81f8d->leave($__internal_029148f3b41f1b178b9e01c7d7b7ab8755f5b17e7b0ca2bc83c139d8cfe81f8d_prof);

    }

    // line 90
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4931694384e94575a5b47545b7abb442d902a3a2eb5b819504726007fdf073f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4931694384e94575a5b47545b7abb442d902a3a2eb5b819504726007fdf073f6->enter($__internal_4931694384e94575a5b47545b7abb442d902a3a2eb5b819504726007fdf073f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_11c58d8786b3a05f484e0de309e5a84c90d1c05a16c71d50828240aa01742eee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11c58d8786b3a05f484e0de309e5a84c90d1c05a16c71d50828240aa01742eee->enter($__internal_11c58d8786b3a05f484e0de309e5a84c90d1c05a16c71d50828240aa01742eee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 91
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/payment.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
";
        
        $__internal_11c58d8786b3a05f484e0de309e5a84c90d1c05a16c71d50828240aa01742eee->leave($__internal_11c58d8786b3a05f484e0de309e5a84c90d1c05a16c71d50828240aa01742eee_prof);

        
        $__internal_4931694384e94575a5b47545b7abb442d902a3a2eb5b819504726007fdf073f6->leave($__internal_4931694384e94575a5b47545b7abb442d902a3a2eb5b819504726007fdf073f6_prof);

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
{% endblock %}", "@User/Security/payment.html.twig", "C:\\xampp\\htdocs\\crgc\\src\\UserBundle\\Resources\\views\\Security\\payment.html.twig");
    }
}
