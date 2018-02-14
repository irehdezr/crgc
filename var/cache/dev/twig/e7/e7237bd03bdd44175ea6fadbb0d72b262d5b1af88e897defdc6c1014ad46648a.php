<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_2f6c3fe84252b8d4fc475d76046577efa83d8ad19a9d0d6100af221fd6466e4d extends Twig_Template
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
        $__internal_459c7b0b1547f40b80dbe7d71aa838ab49108f1978481caf191a7cb1f6765d29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_459c7b0b1547f40b80dbe7d71aa838ab49108f1978481caf191a7cb1f6765d29->enter($__internal_459c7b0b1547f40b80dbe7d71aa838ab49108f1978481caf191a7cb1f6765d29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_fc6483891f0197b943ddece3024f1897bfb4d3ad7c2a48ceabbf83cd9b4a1b07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc6483891f0197b943ddece3024f1897bfb4d3ad7c2a48ceabbf83cd9b4a1b07->enter($__internal_fc6483891f0197b943ddece3024f1897bfb4d3ad7c2a48ceabbf83cd9b4a1b07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_459c7b0b1547f40b80dbe7d71aa838ab49108f1978481caf191a7cb1f6765d29->leave($__internal_459c7b0b1547f40b80dbe7d71aa838ab49108f1978481caf191a7cb1f6765d29_prof);

        
        $__internal_fc6483891f0197b943ddece3024f1897bfb4d3ad7c2a48ceabbf83cd9b4a1b07->leave($__internal_fc6483891f0197b943ddece3024f1897bfb4d3ad7c2a48ceabbf83cd9b4a1b07_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
