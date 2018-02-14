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
        $__internal_a1990b68d540a96537e33caf80e656cf6d9302c6b9f8d7f1538a9b76b84c8b83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1990b68d540a96537e33caf80e656cf6d9302c6b9f8d7f1538a9b76b84c8b83->enter($__internal_a1990b68d540a96537e33caf80e656cf6d9302c6b9f8d7f1538a9b76b84c8b83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_b34e02ba24304c5a4eed0f505d4ae21f5439c1ec74d2bfa5a8afa186e309ac06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b34e02ba24304c5a4eed0f505d4ae21f5439c1ec74d2bfa5a8afa186e309ac06->enter($__internal_b34e02ba24304c5a4eed0f505d4ae21f5439c1ec74d2bfa5a8afa186e309ac06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_a1990b68d540a96537e33caf80e656cf6d9302c6b9f8d7f1538a9b76b84c8b83->leave($__internal_a1990b68d540a96537e33caf80e656cf6d9302c6b9f8d7f1538a9b76b84c8b83_prof);

        
        $__internal_b34e02ba24304c5a4eed0f505d4ae21f5439c1ec74d2bfa5a8afa186e309ac06->leave($__internal_b34e02ba24304c5a4eed0f505d4ae21f5439c1ec74d2bfa5a8afa186e309ac06_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_f2f1e5baec899741a5b26623248bb9a9a1116b2d53482fda4bad38884e770094 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2f1e5baec899741a5b26623248bb9a9a1116b2d53482fda4bad38884e770094->enter($__internal_f2f1e5baec899741a5b26623248bb9a9a1116b2d53482fda4bad38884e770094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_85b31fd9f6ae2f50b3e8d3860ab25db7757e1e9e0a6fe5684e1c09301137fca2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85b31fd9f6ae2f50b3e8d3860ab25db7757e1e9e0a6fe5684e1c09301137fca2->enter($__internal_85b31fd9f6ae2f50b3e8d3860ab25db7757e1e9e0a6fe5684e1c09301137fca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_85b31fd9f6ae2f50b3e8d3860ab25db7757e1e9e0a6fe5684e1c09301137fca2->leave($__internal_85b31fd9f6ae2f50b3e8d3860ab25db7757e1e9e0a6fe5684e1c09301137fca2_prof);

        
        $__internal_f2f1e5baec899741a5b26623248bb9a9a1116b2d53482fda4bad38884e770094->leave($__internal_f2f1e5baec899741a5b26623248bb9a9a1116b2d53482fda4bad38884e770094_prof);

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
