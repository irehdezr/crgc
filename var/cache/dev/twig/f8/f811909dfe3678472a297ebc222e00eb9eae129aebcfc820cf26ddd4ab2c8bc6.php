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
        $__internal_93d475d7dfa82b76ee8702d46f0a5393080ca17cfd29feb1c8b346677a17c471 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93d475d7dfa82b76ee8702d46f0a5393080ca17cfd29feb1c8b346677a17c471->enter($__internal_93d475d7dfa82b76ee8702d46f0a5393080ca17cfd29feb1c8b346677a17c471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Security/payment.html.twig"));

        $__internal_4ff243d2a4619bc58feac7c5cc0decae0dff8332de152322e52c87ae27437a50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ff243d2a4619bc58feac7c5cc0decae0dff8332de152322e52c87ae27437a50->enter($__internal_4ff243d2a4619bc58feac7c5cc0decae0dff8332de152322e52c87ae27437a50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Security/payment.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93d475d7dfa82b76ee8702d46f0a5393080ca17cfd29feb1c8b346677a17c471->leave($__internal_93d475d7dfa82b76ee8702d46f0a5393080ca17cfd29feb1c8b346677a17c471_prof);

        
        $__internal_4ff243d2a4619bc58feac7c5cc0decae0dff8332de152322e52c87ae27437a50->leave($__internal_4ff243d2a4619bc58feac7c5cc0decae0dff8332de152322e52c87ae27437a50_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b717affeca21eb5aa775a72fe2b4a9f83dd4bc3cc88273bc7b430a36178ffa31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b717affeca21eb5aa775a72fe2b4a9f83dd4bc3cc88273bc7b430a36178ffa31->enter($__internal_b717affeca21eb5aa775a72fe2b4a9f83dd4bc3cc88273bc7b430a36178ffa31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2ec82a86bbfefaa19b8c0599c10b6eb3f69e15d187f84fb1e9bd95907a0bad53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ec82a86bbfefaa19b8c0599c10b6eb3f69e15d187f84fb1e9bd95907a0bad53->enter($__internal_2ec82a86bbfefaa19b8c0599c10b6eb3f69e15d187f84fb1e9bd95907a0bad53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Payment ";
        
        $__internal_2ec82a86bbfefaa19b8c0599c10b6eb3f69e15d187f84fb1e9bd95907a0bad53->leave($__internal_2ec82a86bbfefaa19b8c0599c10b6eb3f69e15d187f84fb1e9bd95907a0bad53_prof);

        
        $__internal_b717affeca21eb5aa775a72fe2b4a9f83dd4bc3cc88273bc7b430a36178ffa31->leave($__internal_b717affeca21eb5aa775a72fe2b4a9f83dd4bc3cc88273bc7b430a36178ffa31_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_32a7724075c9b395c8ddbbb4a06fdc9fbb234ee5959cb2289fd71e743a7305d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32a7724075c9b395c8ddbbb4a06fdc9fbb234ee5959cb2289fd71e743a7305d8->enter($__internal_32a7724075c9b395c8ddbbb4a06fdc9fbb234ee5959cb2289fd71e743a7305d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f6018d9032bab432bba1b53f7962341e21c7aaf9bc6f1ef6118a480cefbae8ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6018d9032bab432bba1b53f7962341e21c7aaf9bc6f1ef6118a480cefbae8ee->enter($__internal_f6018d9032bab432bba1b53f7962341e21c7aaf9bc6f1ef6118a480cefbae8ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/payment.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_f6018d9032bab432bba1b53f7962341e21c7aaf9bc6f1ef6118a480cefbae8ee->leave($__internal_f6018d9032bab432bba1b53f7962341e21c7aaf9bc6f1ef6118a480cefbae8ee_prof);

        
        $__internal_32a7724075c9b395c8ddbbb4a06fdc9fbb234ee5959cb2289fd71e743a7305d8->leave($__internal_32a7724075c9b395c8ddbbb4a06fdc9fbb234ee5959cb2289fd71e743a7305d8_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_5515ddfe48aa4e47c473a1411ce27246cf6b60123c90bdab9fcd04bc3cdae59e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5515ddfe48aa4e47c473a1411ce27246cf6b60123c90bdab9fcd04bc3cdae59e->enter($__internal_5515ddfe48aa4e47c473a1411ce27246cf6b60123c90bdab9fcd04bc3cdae59e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_83f3069e94546f8705da902078c6f1d4115c99c144aa2ced631c55771d81eabb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83f3069e94546f8705da902078c6f1d4115c99c144aa2ced631c55771d81eabb->enter($__internal_83f3069e94546f8705da902078c6f1d4115c99c144aa2ced631c55771d81eabb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_83f3069e94546f8705da902078c6f1d4115c99c144aa2ced631c55771d81eabb->leave($__internal_83f3069e94546f8705da902078c6f1d4115c99c144aa2ced631c55771d81eabb_prof);

        
        $__internal_5515ddfe48aa4e47c473a1411ce27246cf6b60123c90bdab9fcd04bc3cdae59e->leave($__internal_5515ddfe48aa4e47c473a1411ce27246cf6b60123c90bdab9fcd04bc3cdae59e_prof);

    }

    // line 90
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f5f59c951f73d522c6361514ccae9171e808f3adb128bfdd2ffa581ca4dfd28a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5f59c951f73d522c6361514ccae9171e808f3adb128bfdd2ffa581ca4dfd28a->enter($__internal_f5f59c951f73d522c6361514ccae9171e808f3adb128bfdd2ffa581ca4dfd28a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_46751a92272c333f45ee826c4298ce5d6078b323f98492b5a3ad2b49faf1f812 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46751a92272c333f45ee826c4298ce5d6078b323f98492b5a3ad2b49faf1f812->enter($__internal_46751a92272c333f45ee826c4298ce5d6078b323f98492b5a3ad2b49faf1f812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 91
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/payment.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
";
        
        $__internal_46751a92272c333f45ee826c4298ce5d6078b323f98492b5a3ad2b49faf1f812->leave($__internal_46751a92272c333f45ee826c4298ce5d6078b323f98492b5a3ad2b49faf1f812_prof);

        
        $__internal_f5f59c951f73d522c6361514ccae9171e808f3adb128bfdd2ffa581ca4dfd28a->leave($__internal_f5f59c951f73d522c6361514ccae9171e808f3adb128bfdd2ffa581ca4dfd28a_prof);

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
