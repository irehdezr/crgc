<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_60c980f68b08fae939fe8ec4ee43da3d00ec5188d630d452cb970de77e1860ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7dfb05f9aaa55bc149625be8884b258b098130ae4c8492631747ed9959b25cf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dfb05f9aaa55bc149625be8884b258b098130ae4c8492631747ed9959b25cf4->enter($__internal_7dfb05f9aaa55bc149625be8884b258b098130ae4c8492631747ed9959b25cf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_0d44b8296fce8ff54f4e850deb38d26074c55b43a78a925c576893be0a63310c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d44b8296fce8ff54f4e850deb38d26074c55b43a78a925c576893be0a63310c->enter($__internal_0d44b8296fce8ff54f4e850deb38d26074c55b43a78a925c576893be0a63310c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_7dfb05f9aaa55bc149625be8884b258b098130ae4c8492631747ed9959b25cf4->leave($__internal_7dfb05f9aaa55bc149625be8884b258b098130ae4c8492631747ed9959b25cf4_prof);

        
        $__internal_0d44b8296fce8ff54f4e850deb38d26074c55b43a78a925c576893be0a63310c->leave($__internal_0d44b8296fce8ff54f4e850deb38d26074c55b43a78a925c576893be0a63310c_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_1454cb3c8bd631bc0ab51aa5837e73e38b9d933d579e2dbc068a0cf2017e2e63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1454cb3c8bd631bc0ab51aa5837e73e38b9d933d579e2dbc068a0cf2017e2e63->enter($__internal_1454cb3c8bd631bc0ab51aa5837e73e38b9d933d579e2dbc068a0cf2017e2e63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3d245183956c94636fa58a0686ad133b917d4f8b34b67178ee378f4909b531f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d245183956c94636fa58a0686ad133b917d4f8b34b67178ee378f4909b531f2->enter($__internal_3d245183956c94636fa58a0686ad133b917d4f8b34b67178ee378f4909b531f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_3d245183956c94636fa58a0686ad133b917d4f8b34b67178ee378f4909b531f2->leave($__internal_3d245183956c94636fa58a0686ad133b917d4f8b34b67178ee378f4909b531f2_prof);

        
        $__internal_1454cb3c8bd631bc0ab51aa5837e73e38b9d933d579e2dbc068a0cf2017e2e63->leave($__internal_1454cb3c8bd631bc0ab51aa5837e73e38b9d933d579e2dbc068a0cf2017e2e63_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
