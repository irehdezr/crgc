<?php

/* @User/Default/address_book.html.twig */
class __TwigTemplate_23b0c75548d7bdbb116af7ddd6f11e198d450c913bba2e8409409e642967464c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("security.html.twig", "@User/Default/address_book.html.twig", 1);
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
        $__internal_6f494de9d41462ca7dee30e48a9f98da8aab5f6775889d233cf8f01bcf0f4851 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f494de9d41462ca7dee30e48a9f98da8aab5f6775889d233cf8f01bcf0f4851->enter($__internal_6f494de9d41462ca7dee30e48a9f98da8aab5f6775889d233cf8f01bcf0f4851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Default/address_book.html.twig"));

        $__internal_25627ac71d11c28a0bed64d7e1923329a80fce7612a7e9ccf66fbd465d8a9da0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25627ac71d11c28a0bed64d7e1923329a80fce7612a7e9ccf66fbd465d8a9da0->enter($__internal_25627ac71d11c28a0bed64d7e1923329a80fce7612a7e9ccf66fbd465d8a9da0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Default/address_book.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f494de9d41462ca7dee30e48a9f98da8aab5f6775889d233cf8f01bcf0f4851->leave($__internal_6f494de9d41462ca7dee30e48a9f98da8aab5f6775889d233cf8f01bcf0f4851_prof);

        
        $__internal_25627ac71d11c28a0bed64d7e1923329a80fce7612a7e9ccf66fbd465d8a9da0->leave($__internal_25627ac71d11c28a0bed64d7e1923329a80fce7612a7e9ccf66fbd465d8a9da0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1113419ae1e888c90b348da19890d75cb39e4358b80a42f4e8d5845da3b140b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1113419ae1e888c90b348da19890d75cb39e4358b80a42f4e8d5845da3b140b2->enter($__internal_1113419ae1e888c90b348da19890d75cb39e4358b80a42f4e8d5845da3b140b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0876cf6b47b756719b855bf0886db645aa05b1b288b7d1729944c462c9c10bed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0876cf6b47b756719b855bf0886db645aa05b1b288b7d1729944c462c9c10bed->enter($__internal_0876cf6b47b756719b855bf0886db645aa05b1b288b7d1729944c462c9c10bed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Address Book ";
        
        $__internal_0876cf6b47b756719b855bf0886db645aa05b1b288b7d1729944c462c9c10bed->leave($__internal_0876cf6b47b756719b855bf0886db645aa05b1b288b7d1729944c462c9c10bed_prof);

        
        $__internal_1113419ae1e888c90b348da19890d75cb39e4358b80a42f4e8d5845da3b140b2->leave($__internal_1113419ae1e888c90b348da19890d75cb39e4358b80a42f4e8d5845da3b140b2_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_461d959989740bd9e05454666d52436875956a75fa188b9213354dbb7d52193e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_461d959989740bd9e05454666d52436875956a75fa188b9213354dbb7d52193e->enter($__internal_461d959989740bd9e05454666d52436875956a75fa188b9213354dbb7d52193e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_bf7226cdd665f9cf2ab2d4614ca30a160f62f5b5ee3c1975eaea9ab27b4332bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf7226cdd665f9cf2ab2d4614ca30a160f62f5b5ee3c1975eaea9ab27b4332bb->enter($__internal_bf7226cdd665f9cf2ab2d4614ca30a160f62f5b5ee3c1975eaea9ab27b4332bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/css/address_book.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_bf7226cdd665f9cf2ab2d4614ca30a160f62f5b5ee3c1975eaea9ab27b4332bb->leave($__internal_bf7226cdd665f9cf2ab2d4614ca30a160f62f5b5ee3c1975eaea9ab27b4332bb_prof);

        
        $__internal_461d959989740bd9e05454666d52436875956a75fa188b9213354dbb7d52193e->leave($__internal_461d959989740bd9e05454666d52436875956a75fa188b9213354dbb7d52193e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_70623419049753eb2c42066e951b981eb280a6cbf75ef15fbb72397db5ee2f43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70623419049753eb2c42066e951b981eb280a6cbf75ef15fbb72397db5ee2f43->enter($__internal_70623419049753eb2c42066e951b981eb280a6cbf75ef15fbb72397db5ee2f43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a9b095a5906b4b45ed87f9f36fda12c9d0213da6b861eb7b604965c6d3f5251b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9b095a5906b4b45ed87f9f36fda12c9d0213da6b861eb7b604965c6d3f5251b->enter($__internal_a9b095a5906b4b45ed87f9f36fda12c9d0213da6b861eb7b604965c6d3f5251b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<main>    
  <section id=\"pageTitle\">
    <center>
      <h2>Address book</h2>
    </center>
  </section>
  <div class='container-fluid'>
      <div id='farmInfoContainer' class='row'>
        <div id='farmInfoHeading' class='col-xs-12'>
          <center>
            <h3>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "getUsername", array(), "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "getLastname", array(), "method"), "html", null, true);
        echo "</h3>
          </center>
        </div>
        <div class=\"row\" >
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["addresses"] ?? $this->getContext($context, "addresses")));
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 25
            echo "          <div class=\"col-xs-12 col-sm-6 col-lg-4\">
            <div class=\"box\">      
              <h3 class=\"title\"><p id=\"addressName\">";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "getFullname", array(), "method"), "html", null, true);
            echo "</p></h3>
              <p>Country: ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "getCountry", array(), "method"), "html", null, true);
            echo "</p>
              <p>State:";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "getState", array(), "method"), "html", null, true);
            echo "</p>
              <p>City :";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "getCity", array(), "method"), "html", null, true);
            echo "</p>
              <p>Line 1:";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "getLine1", array(), "method"), "html", null, true);
            echo "</p>
              <p>Line 2:";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "getLine2", array(), "method"), "html", null, true);
            echo "</p>
              <p>Zip code:";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "getZip", array(), "method"), "html", null, true);
            echo "</p>
              <button  class=\"btn btn-success setAddress pull-left\"> 
                Use this address
              </button>
              <button class=\"btn btn-warning editAddress center\"> 
                Edit
              </button>
              <button class=\"btn btn-danger deleteAddress pull-right\"> 
                Delete
              </button>
            </div> 
          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "        </div>
      </div>
    </div>
  <button id=\"btn-new-address\" class=\"btn btn-success pull-right\">Add new address</button>

</main>
";
        
        $__internal_a9b095a5906b4b45ed87f9f36fda12c9d0213da6b861eb7b604965c6d3f5251b->leave($__internal_a9b095a5906b4b45ed87f9f36fda12c9d0213da6b861eb7b604965c6d3f5251b_prof);

        
        $__internal_70623419049753eb2c42066e951b981eb280a6cbf75ef15fbb72397db5ee2f43->leave($__internal_70623419049753eb2c42066e951b981eb280a6cbf75ef15fbb72397db5ee2f43_prof);

    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_31f244d425bca7ce6d80bc46c08b5e5d75e6da2d4b77483c82223daaa1ebccbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31f244d425bca7ce6d80bc46c08b5e5d75e6da2d4b77483c82223daaa1ebccbe->enter($__internal_31f244d425bca7ce6d80bc46c08b5e5d75e6da2d4b77483c82223daaa1ebccbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3148ed8c9414402a1c63ec078b0eef861d4cf578e1460d75f7d66e3cadc5f08c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3148ed8c9414402a1c63ec078b0eef861d4cf578e1460d75f7d66e3cadc5f08c->enter($__internal_3148ed8c9414402a1c63ec078b0eef861d4cf578e1460d75f7d66e3cadc5f08c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 55
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/js/address_book.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_3148ed8c9414402a1c63ec078b0eef861d4cf578e1460d75f7d66e3cadc5f08c->leave($__internal_3148ed8c9414402a1c63ec078b0eef861d4cf578e1460d75f7d66e3cadc5f08c_prof);

        
        $__internal_31f244d425bca7ce6d80bc46c08b5e5d75e6da2d4b77483c82223daaa1ebccbe->leave($__internal_31f244d425bca7ce6d80bc46c08b5e5d75e6da2d4b77483c82223daaa1ebccbe_prof);

    }

    public function getTemplateName()
    {
        return "@User/Default/address_book.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 56,  193 => 55,  184 => 54,  168 => 46,  149 => 33,  145 => 32,  141 => 31,  137 => 30,  133 => 29,  129 => 28,  125 => 27,  121 => 25,  117 => 24,  108 => 20,  96 => 10,  87 => 9,  75 => 7,  70 => 6,  61 => 5,  43 => 3,  11 => 1,);
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

{% block title%} Address Book {% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('/web/public/css/address_book.css') }}\" />
{% endblock %}
{% block body %}
<main>    
  <section id=\"pageTitle\">
    <center>
      <h2>Address book</h2>
    </center>
  </section>
  <div class='container-fluid'>
      <div id='farmInfoContainer' class='row'>
        <div id='farmInfoHeading' class='col-xs-12'>
          <center>
            <h3>{{ user.getUsername() }} {{ user.getLastname() }}</h3>
          </center>
        </div>
        <div class=\"row\" >
        {% for address in addresses %}
          <div class=\"col-xs-12 col-sm-6 col-lg-4\">
            <div class=\"box\">      
              <h3 class=\"title\"><p id=\"addressName\">{{ address.getFullname() }}</p></h3>
              <p>Country: {{ address.getCountry() }}</p>
              <p>State:{{ address.getState() }}</p>
              <p>City :{{ address.getCity() }}</p>
              <p>Line 1:{{ address.getLine1() }}</p>
              <p>Line 2:{{ address.getLine2() }}</p>
              <p>Zip code:{{ address.getZip() }}</p>
              <button  class=\"btn btn-success setAddress pull-left\"> 
                Use this address
              </button>
              <button class=\"btn btn-warning editAddress center\"> 
                Edit
              </button>
              <button class=\"btn btn-danger deleteAddress pull-right\"> 
                Delete
              </button>
            </div> 
          </div>
        {% endfor%}
        </div>
      </div>
    </div>
  <button id=\"btn-new-address\" class=\"btn btn-success pull-right\">Add new address</button>

</main>
{% endblock %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"{{ asset('/web/public/js/address_book.js')}}\"></script>
{% endblock %}", "@User/Default/address_book.html.twig", "C:\\xampp\\htdocs\\src\\UserBundle\\Resources\\views\\Default\\address_book.html.twig");
    }
}
