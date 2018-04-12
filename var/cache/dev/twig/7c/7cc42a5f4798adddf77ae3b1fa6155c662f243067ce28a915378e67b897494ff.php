<?php

/* PageBundle:Default:error.html.twig */
class __TwigTemplate_a7f3383e35621e53636b70d77f7550a92dd659813491cee5db07ee6af403fa5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "PageBundle:Default:error.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_30103b846ea1f406a0d8378d95fa5b80ef455e3b957f67d139e9674bb79b1301 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30103b846ea1f406a0d8378d95fa5b80ef455e3b957f67d139e9674bb79b1301->enter($__internal_30103b846ea1f406a0d8378d95fa5b80ef455e3b957f67d139e9674bb79b1301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:error.html.twig"));

        $__internal_e12b3e99267756aac173cb8dd16b9876733c9b720566747869cd95cab165b276 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e12b3e99267756aac173cb8dd16b9876733c9b720566747869cd95cab165b276->enter($__internal_e12b3e99267756aac173cb8dd16b9876733c9b720566747869cd95cab165b276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:error.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30103b846ea1f406a0d8378d95fa5b80ef455e3b957f67d139e9674bb79b1301->leave($__internal_30103b846ea1f406a0d8378d95fa5b80ef455e3b957f67d139e9674bb79b1301_prof);

        
        $__internal_e12b3e99267756aac173cb8dd16b9876733c9b720566747869cd95cab165b276->leave($__internal_e12b3e99267756aac173cb8dd16b9876733c9b720566747869cd95cab165b276_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a76ebc97a06923a075ccc72ff6e49f9f11c70bcfd3a8bc09d1ee6b19f9a1fd5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a76ebc97a06923a075ccc72ff6e49f9f11c70bcfd3a8bc09d1ee6b19f9a1fd5d->enter($__internal_a76ebc97a06923a075ccc72ff6e49f9f11c70bcfd3a8bc09d1ee6b19f9a1fd5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b0450a8aa83bc605282715f48ac0163a8c192c32c73e3f276212bdef70cbd285 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0450a8aa83bc605282715f48ac0163a8c192c32c73e3f276212bdef70cbd285->enter($__internal_b0450a8aa83bc605282715f48ac0163a8c192c32c73e3f276212bdef70cbd285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Error";
        
        $__internal_b0450a8aa83bc605282715f48ac0163a8c192c32c73e3f276212bdef70cbd285->leave($__internal_b0450a8aa83bc605282715f48ac0163a8c192c32c73e3f276212bdef70cbd285_prof);

        
        $__internal_a76ebc97a06923a075ccc72ff6e49f9f11c70bcfd3a8bc09d1ee6b19f9a1fd5d->leave($__internal_a76ebc97a06923a075ccc72ff6e49f9f11c70bcfd3a8bc09d1ee6b19f9a1fd5d_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_74fa4d11c7f20c862ad1dd9b382e02435afcf228531e20f3ec28becf039a1876 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74fa4d11c7f20c862ad1dd9b382e02435afcf228531e20f3ec28becf039a1876->enter($__internal_74fa4d11c7f20c862ad1dd9b382e02435afcf228531e20f3ec28becf039a1876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f8880417c7dd8148ff70c272bd64167111fb901f64c0919d0b3342209b3b9384 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8880417c7dd8148ff70c272bd64167111fb901f64c0919d0b3342209b3b9384->enter($__internal_f8880417c7dd8148ff70c272bd64167111fb901f64c0919d0b3342209b3b9384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<main>
\t<center>
\t    <h2 class=\"center-block\">
\t        <br/>Oooops...<br/>
\t        This page doesn't exist please try another page or go <a href=\" ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_homepage", array("page" => "home"));
        echo "\">Home</a>
\t    </h2>
    </center>
</main>
";
        
        $__internal_f8880417c7dd8148ff70c272bd64167111fb901f64c0919d0b3342209b3b9384->leave($__internal_f8880417c7dd8148ff70c272bd64167111fb901f64c0919d0b3342209b3b9384_prof);

        
        $__internal_74fa4d11c7f20c862ad1dd9b382e02435afcf228531e20f3ec28becf039a1876->leave($__internal_74fa4d11c7f20c862ad1dd9b382e02435afcf228531e20f3ec28becf039a1876_prof);

    }

    public function getTemplateName()
    {
        return "PageBundle:Default:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 9,  68 => 5,  59 => 4,  41 => 3,  11 => 1,);
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

{% block title%}Error{% endblock %}
{% block body %}
<main>
\t<center>
\t    <h2 class=\"center-block\">
\t        <br/>Oooops...<br/>
\t        This page doesn't exist please try another page or go <a href=\" {{ path('page_homepage', {'page': 'home' }) }}\">Home</a>
\t    </h2>
    </center>
</main>
{% endblock %}", "PageBundle:Default:error.html.twig", "C:\\xampp\\htdocs\\crgc\\src\\PageBundle/Resources/views/Default/error.html.twig");
    }
}
