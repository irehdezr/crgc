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
        $__internal_a14248f619e2080661c32a15992828f1cfaf29d39b3d41177ae95b309c039d2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a14248f619e2080661c32a15992828f1cfaf29d39b3d41177ae95b309c039d2f->enter($__internal_a14248f619e2080661c32a15992828f1cfaf29d39b3d41177ae95b309c039d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_b5dde11376ecaa19d26fc0e9c877d25039dac5088b101a2d6abb24bebec89145 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5dde11376ecaa19d26fc0e9c877d25039dac5088b101a2d6abb24bebec89145->enter($__internal_b5dde11376ecaa19d26fc0e9c877d25039dac5088b101a2d6abb24bebec89145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_a14248f619e2080661c32a15992828f1cfaf29d39b3d41177ae95b309c039d2f->leave($__internal_a14248f619e2080661c32a15992828f1cfaf29d39b3d41177ae95b309c039d2f_prof);

        
        $__internal_b5dde11376ecaa19d26fc0e9c877d25039dac5088b101a2d6abb24bebec89145->leave($__internal_b5dde11376ecaa19d26fc0e9c877d25039dac5088b101a2d6abb24bebec89145_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_03563c4c15c6c3a11db94d259179fb8f01affdd9ee14167e73d717295c022efc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03563c4c15c6c3a11db94d259179fb8f01affdd9ee14167e73d717295c022efc->enter($__internal_03563c4c15c6c3a11db94d259179fb8f01affdd9ee14167e73d717295c022efc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_eccb2541e4d346ef72857d9921abdd9fb6fec0c5868cf2e9d6eb3aa18fe311e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eccb2541e4d346ef72857d9921abdd9fb6fec0c5868cf2e9d6eb3aa18fe311e8->enter($__internal_eccb2541e4d346ef72857d9921abdd9fb6fec0c5868cf2e9d6eb3aa18fe311e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_eccb2541e4d346ef72857d9921abdd9fb6fec0c5868cf2e9d6eb3aa18fe311e8->leave($__internal_eccb2541e4d346ef72857d9921abdd9fb6fec0c5868cf2e9d6eb3aa18fe311e8_prof);

        
        $__internal_03563c4c15c6c3a11db94d259179fb8f01affdd9ee14167e73d717295c022efc->leave($__internal_03563c4c15c6c3a11db94d259179fb8f01affdd9ee14167e73d717295c022efc_prof);

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
