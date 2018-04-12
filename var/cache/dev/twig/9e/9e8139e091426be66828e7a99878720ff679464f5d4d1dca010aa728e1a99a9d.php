<?php

/* @Page/Default/onDevelopment.html.twig */
class __TwigTemplate_64ce9bdfbf533bf607818c405971be66f0c565560f6b7d753c563852b34b9780 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "@Page/Default/onDevelopment.html.twig", 1);
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
        $__internal_919e06f47004ca0dd1ee134f43c6fde6d812fe2f4d1a162d495799ac5ccf5450 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_919e06f47004ca0dd1ee134f43c6fde6d812fe2f4d1a162d495799ac5ccf5450->enter($__internal_919e06f47004ca0dd1ee134f43c6fde6d812fe2f4d1a162d495799ac5ccf5450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Page/Default/onDevelopment.html.twig"));

        $__internal_bc5c3023cbc00a116226439e9d15ccf8c49f0e70124112e29aa3711770f8d5a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc5c3023cbc00a116226439e9d15ccf8c49f0e70124112e29aa3711770f8d5a2->enter($__internal_bc5c3023cbc00a116226439e9d15ccf8c49f0e70124112e29aa3711770f8d5a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Page/Default/onDevelopment.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_919e06f47004ca0dd1ee134f43c6fde6d812fe2f4d1a162d495799ac5ccf5450->leave($__internal_919e06f47004ca0dd1ee134f43c6fde6d812fe2f4d1a162d495799ac5ccf5450_prof);

        
        $__internal_bc5c3023cbc00a116226439e9d15ccf8c49f0e70124112e29aa3711770f8d5a2->leave($__internal_bc5c3023cbc00a116226439e9d15ccf8c49f0e70124112e29aa3711770f8d5a2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a20a32d3e0c2665ed6b171b48b6497fc1a8f08301f40c15867062084eef87b05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a20a32d3e0c2665ed6b171b48b6497fc1a8f08301f40c15867062084eef87b05->enter($__internal_a20a32d3e0c2665ed6b171b48b6497fc1a8f08301f40c15867062084eef87b05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_279ae37cd503ae008b020c12b68d21afc2c431e185e9eab96fd8f2986b992605 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_279ae37cd503ae008b020c12b68d21afc2c431e185e9eab96fd8f2986b992605->enter($__internal_279ae37cd503ae008b020c12b68d21afc2c431e185e9eab96fd8f2986b992605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "On Development";
        
        $__internal_279ae37cd503ae008b020c12b68d21afc2c431e185e9eab96fd8f2986b992605->leave($__internal_279ae37cd503ae008b020c12b68d21afc2c431e185e9eab96fd8f2986b992605_prof);

        
        $__internal_a20a32d3e0c2665ed6b171b48b6497fc1a8f08301f40c15867062084eef87b05->leave($__internal_a20a32d3e0c2665ed6b171b48b6497fc1a8f08301f40c15867062084eef87b05_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ebc86ed8c272d12192651ef27c42818a3f23b4ac61e4e4ae7dfdd9a8ce1c034 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ebc86ed8c272d12192651ef27c42818a3f23b4ac61e4e4ae7dfdd9a8ce1c034->enter($__internal_5ebc86ed8c272d12192651ef27c42818a3f23b4ac61e4e4ae7dfdd9a8ce1c034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a6849e37502740063b476ad4551201e6f465fbf5da475b6e20986984f6a5bd1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6849e37502740063b476ad4551201e6f465fbf5da475b6e20986984f6a5bd1d->enter($__internal_a6849e37502740063b476ad4551201e6f465fbf5da475b6e20986984f6a5bd1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<main>
\t<center>
\t    <h2>
\t        <br/>Oooops...<br/>
\t        This page is under development....
\t    </h2>
    </center>
</main>
";
        
        $__internal_a6849e37502740063b476ad4551201e6f465fbf5da475b6e20986984f6a5bd1d->leave($__internal_a6849e37502740063b476ad4551201e6f465fbf5da475b6e20986984f6a5bd1d_prof);

        
        $__internal_5ebc86ed8c272d12192651ef27c42818a3f23b4ac61e4e4ae7dfdd9a8ce1c034->leave($__internal_5ebc86ed8c272d12192651ef27c42818a3f23b4ac61e4e4ae7dfdd9a8ce1c034_prof);

    }

    public function getTemplateName()
    {
        return "@Page/Default/onDevelopment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 5,  59 => 4,  41 => 3,  11 => 1,);
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

{% block title%}On Development{% endblock %}
{% block body %}
<main>
\t<center>
\t    <h2>
\t        <br/>Oooops...<br/>
\t        This page is under development....
\t    </h2>
    </center>
</main>
{% endblock %}", "@Page/Default/onDevelopment.html.twig", "C:\\xampp\\htdocs\\crgc\\src\\PageBundle\\Resources\\views\\Default\\onDevelopment.html.twig");
    }
}
