<?php

/* PageBundle:Default:onDevelopment.html.twig */
class __TwigTemplate_56c871db3e34cdb428327d10d8dfe8cc0a698dd11864ba8772fe97aba3b9fd26 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "CR Gourmet Coffee";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
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
        return array (  38 => 5,  35 => 4,  29 => 3,  11 => 1,);
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
