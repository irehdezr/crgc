<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_2be8ca80bb365aca6a8d90989de9148ad9aca2278fb9f6ef9d9a7856010d6fc8 extends Twig_Template
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
        $__internal_38f3abd99cab8a85fbc855bd675f4385254f1b90e4e96d8e7052adfcf9d1de01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38f3abd99cab8a85fbc855bd675f4385254f1b90e4e96d8e7052adfcf9d1de01->enter($__internal_38f3abd99cab8a85fbc855bd675f4385254f1b90e4e96d8e7052adfcf9d1de01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_8b35d4bcb60ea61f2fc230f7a5a1e4e3d828d9d63610b79d0c975f321c1d4721 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b35d4bcb60ea61f2fc230f7a5a1e4e3d828d9d63610b79d0c975f321c1d4721->enter($__internal_8b35d4bcb60ea61f2fc230f7a5a1e4e3d828d9d63610b79d0c975f321c1d4721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_38f3abd99cab8a85fbc855bd675f4385254f1b90e4e96d8e7052adfcf9d1de01->leave($__internal_38f3abd99cab8a85fbc855bd675f4385254f1b90e4e96d8e7052adfcf9d1de01_prof);

        
        $__internal_8b35d4bcb60ea61f2fc230f7a5a1e4e3d828d9d63610b79d0c975f321c1d4721->leave($__internal_8b35d4bcb60ea61f2fc230f7a5a1e4e3d828d9d63610b79d0c975f321c1d4721_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_27c35b9c0b261a7f7515eeadd8b3a00644890d2c8d9fce86fe634af716454747 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27c35b9c0b261a7f7515eeadd8b3a00644890d2c8d9fce86fe634af716454747->enter($__internal_27c35b9c0b261a7f7515eeadd8b3a00644890d2c8d9fce86fe634af716454747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_359c9826d0d70fe56a9126b5eb20d1e666bbd7fe2917ea67190006fa3da9e7c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_359c9826d0d70fe56a9126b5eb20d1e666bbd7fe2917ea67190006fa3da9e7c2->enter($__internal_359c9826d0d70fe56a9126b5eb20d1e666bbd7fe2917ea67190006fa3da9e7c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_359c9826d0d70fe56a9126b5eb20d1e666bbd7fe2917ea67190006fa3da9e7c2->leave($__internal_359c9826d0d70fe56a9126b5eb20d1e666bbd7fe2917ea67190006fa3da9e7c2_prof);

        
        $__internal_27c35b9c0b261a7f7515eeadd8b3a00644890d2c8d9fce86fe634af716454747->leave($__internal_27c35b9c0b261a7f7515eeadd8b3a00644890d2c8d9fce86fe634af716454747_prof);

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
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
