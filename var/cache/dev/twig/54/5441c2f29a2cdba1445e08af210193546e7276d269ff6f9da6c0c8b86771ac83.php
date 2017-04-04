<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_44f4d72ebe66d8f64f0a06b8e721d558d9c3125debaa89f6010dd8fcc4e3ab7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f832c5811a05fb3a49236a64d641480e67fd36a7c40420645cf850965a71c671 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f832c5811a05fb3a49236a64d641480e67fd36a7c40420645cf850965a71c671->enter($__internal_f832c5811a05fb3a49236a64d641480e67fd36a7c40420645cf850965a71c671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_ef0039cf4de5aa5b9180389369d17cc5f938e14c28af3a0d3a0f0572770c5286 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef0039cf4de5aa5b9180389369d17cc5f938e14c28af3a0d3a0f0572770c5286->enter($__internal_ef0039cf4de5aa5b9180389369d17cc5f938e14c28af3a0d3a0f0572770c5286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_f832c5811a05fb3a49236a64d641480e67fd36a7c40420645cf850965a71c671->leave($__internal_f832c5811a05fb3a49236a64d641480e67fd36a7c40420645cf850965a71c671_prof);

        
        $__internal_ef0039cf4de5aa5b9180389369d17cc5f938e14c28af3a0d3a0f0572770c5286->leave($__internal_ef0039cf4de5aa5b9180389369d17cc5f938e14c28af3a0d3a0f0572770c5286_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
