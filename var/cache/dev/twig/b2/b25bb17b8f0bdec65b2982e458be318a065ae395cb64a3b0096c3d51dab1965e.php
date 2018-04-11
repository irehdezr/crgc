<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_7e54f7022311d69eb6f433e03af71bdb3f19132ebe514db4f8e695c4fbd2ab5e extends Twig_Template
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
        $__internal_ccede6fe141b94d3f4b70160bfe2a32ee1ccc24c8b7bdbce1404b5619402e6b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccede6fe141b94d3f4b70160bfe2a32ee1ccc24c8b7bdbce1404b5619402e6b3->enter($__internal_ccede6fe141b94d3f4b70160bfe2a32ee1ccc24c8b7bdbce1404b5619402e6b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_6aecbb7b42c14db005d2a67bebd00ef91df2248b98ab11f6bde7318557d72f27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6aecbb7b42c14db005d2a67bebd00ef91df2248b98ab11f6bde7318557d72f27->enter($__internal_6aecbb7b42c14db005d2a67bebd00ef91df2248b98ab11f6bde7318557d72f27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ccede6fe141b94d3f4b70160bfe2a32ee1ccc24c8b7bdbce1404b5619402e6b3->leave($__internal_ccede6fe141b94d3f4b70160bfe2a32ee1ccc24c8b7bdbce1404b5619402e6b3_prof);

        
        $__internal_6aecbb7b42c14db005d2a67bebd00ef91df2248b98ab11f6bde7318557d72f27->leave($__internal_6aecbb7b42c14db005d2a67bebd00ef91df2248b98ab11f6bde7318557d72f27_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_28c9ac508f4e2c910c724622b4c455bc3467463fb53ddd65c410f016a6394ce4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28c9ac508f4e2c910c724622b4c455bc3467463fb53ddd65c410f016a6394ce4->enter($__internal_28c9ac508f4e2c910c724622b4c455bc3467463fb53ddd65c410f016a6394ce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_07fbccb42a6b7d7a204f8f3eeac41d233de9c67c1b02e62dc67adf5df02c1187 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07fbccb42a6b7d7a204f8f3eeac41d233de9c67c1b02e62dc67adf5df02c1187->enter($__internal_07fbccb42a6b7d7a204f8f3eeac41d233de9c67c1b02e62dc67adf5df02c1187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_07fbccb42a6b7d7a204f8f3eeac41d233de9c67c1b02e62dc67adf5df02c1187->leave($__internal_07fbccb42a6b7d7a204f8f3eeac41d233de9c67c1b02e62dc67adf5df02c1187_prof);

        
        $__internal_28c9ac508f4e2c910c724622b4c455bc3467463fb53ddd65c410f016a6394ce4->leave($__internal_28c9ac508f4e2c910c724622b4c455bc3467463fb53ddd65c410f016a6394ce4_prof);

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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
