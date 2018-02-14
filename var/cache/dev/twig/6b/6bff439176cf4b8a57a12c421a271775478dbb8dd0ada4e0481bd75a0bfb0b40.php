<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_57f1a01c6bf8c46f9b3644b821f32bb71ce2826a3fe423e7408f8bb9e9406842 extends Twig_Template
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
        $__internal_2e062ffae9e521cd930346770d315a5156f2d1f41a690a706f668384d4858b14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e062ffae9e521cd930346770d315a5156f2d1f41a690a706f668384d4858b14->enter($__internal_2e062ffae9e521cd930346770d315a5156f2d1f41a690a706f668384d4858b14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_c05afe210ef3a9fb5982139bb2083a9d81decac61440e47e37319faceabc8937 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c05afe210ef3a9fb5982139bb2083a9d81decac61440e47e37319faceabc8937->enter($__internal_c05afe210ef3a9fb5982139bb2083a9d81decac61440e47e37319faceabc8937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_2e062ffae9e521cd930346770d315a5156f2d1f41a690a706f668384d4858b14->leave($__internal_2e062ffae9e521cd930346770d315a5156f2d1f41a690a706f668384d4858b14_prof);

        
        $__internal_c05afe210ef3a9fb5982139bb2083a9d81decac61440e47e37319faceabc8937->leave($__internal_c05afe210ef3a9fb5982139bb2083a9d81decac61440e47e37319faceabc8937_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_9ad5c8f9009e13a28baff160610bf23900a5bdb96a53b177f3b800806945e0f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ad5c8f9009e13a28baff160610bf23900a5bdb96a53b177f3b800806945e0f5->enter($__internal_9ad5c8f9009e13a28baff160610bf23900a5bdb96a53b177f3b800806945e0f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d32fc81dd42dd569c7ffc1565b82e480f18f3b86ddf9a8438bd14c6e221e6e58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d32fc81dd42dd569c7ffc1565b82e480f18f3b86ddf9a8438bd14c6e221e6e58->enter($__internal_d32fc81dd42dd569c7ffc1565b82e480f18f3b86ddf9a8438bd14c6e221e6e58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_d32fc81dd42dd569c7ffc1565b82e480f18f3b86ddf9a8438bd14c6e221e6e58->leave($__internal_d32fc81dd42dd569c7ffc1565b82e480f18f3b86ddf9a8438bd14c6e221e6e58_prof);

        
        $__internal_9ad5c8f9009e13a28baff160610bf23900a5bdb96a53b177f3b800806945e0f5->leave($__internal_9ad5c8f9009e13a28baff160610bf23900a5bdb96a53b177f3b800806945e0f5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
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
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
