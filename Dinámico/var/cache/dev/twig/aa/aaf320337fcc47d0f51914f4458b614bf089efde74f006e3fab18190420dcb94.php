<?php

/* PageBundle:Default:onDevelopment.html.twig */
class __TwigTemplate_a8fab2311b1a7061d293ea374bc376ab4590ba94dc5f73b2b133770aad8da441 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "PageBundle:Default:onDevelopment.html.twig", 1);
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
        $__internal_da2b3e784bc5b6a812161637607f10c36a6f7c404d6d1e6d0d71f8d23736777c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da2b3e784bc5b6a812161637607f10c36a6f7c404d6d1e6d0d71f8d23736777c->enter($__internal_da2b3e784bc5b6a812161637607f10c36a6f7c404d6d1e6d0d71f8d23736777c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:onDevelopment.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da2b3e784bc5b6a812161637607f10c36a6f7c404d6d1e6d0d71f8d23736777c->leave($__internal_da2b3e784bc5b6a812161637607f10c36a6f7c404d6d1e6d0d71f8d23736777c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_392b4477323df386c6b3e2fc4101d5b741c0b9eca019335ca2ef83058bd01c12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_392b4477323df386c6b3e2fc4101d5b741c0b9eca019335ca2ef83058bd01c12->enter($__internal_392b4477323df386c6b3e2fc4101d5b741c0b9eca019335ca2ef83058bd01c12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CR Gourmet Coffee";
        
        $__internal_392b4477323df386c6b3e2fc4101d5b741c0b9eca019335ca2ef83058bd01c12->leave($__internal_392b4477323df386c6b3e2fc4101d5b741c0b9eca019335ca2ef83058bd01c12_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_809c1d789c819116273cefb79431747b617fb12d29e0b37e52f5178be4dac479 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_809c1d789c819116273cefb79431747b617fb12d29e0b37e52f5178be4dac479->enter($__internal_809c1d789c819116273cefb79431747b617fb12d29e0b37e52f5178be4dac479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<main>
<div class='container'>
\t<center>
\t    <h2 class=\"center-block jumbotron \">
\t        <br/>Oooops...<br/>
\t        This page is under development....
\t    </h2>
    </center>
</div>
</main>
";
        
        $__internal_809c1d789c819116273cefb79431747b617fb12d29e0b37e52f5178be4dac479->leave($__internal_809c1d789c819116273cefb79431747b617fb12d29e0b37e52f5178be4dac479_prof);

    }

    public function getTemplateName()
    {
        return "PageBundle:Default:onDevelopment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 5,  47 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PageBundle:Default:onDevelopment.html.twig", "C:\\xampp\\htdocs\\src\\PageBundle/Resources/views/Default/onDevelopment.html.twig");
    }
}
