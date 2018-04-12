<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_0061868cedd8822c984c590bf3cd8e1bce21e7cd6880dc9da65985b64580da42 extends Twig_Template
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
        $__internal_e16934c4c89c7864f095eac61aa2a5cdadc665708fa3f165a15e28567146f210 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e16934c4c89c7864f095eac61aa2a5cdadc665708fa3f165a15e28567146f210->enter($__internal_e16934c4c89c7864f095eac61aa2a5cdadc665708fa3f165a15e28567146f210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_19db696436ab9ab124b039e6d14781801d3e5cf9608e47bab16a63701e38d43c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19db696436ab9ab124b039e6d14781801d3e5cf9608e47bab16a63701e38d43c->enter($__internal_19db696436ab9ab124b039e6d14781801d3e5cf9608e47bab16a63701e38d43c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_e16934c4c89c7864f095eac61aa2a5cdadc665708fa3f165a15e28567146f210->leave($__internal_e16934c4c89c7864f095eac61aa2a5cdadc665708fa3f165a15e28567146f210_prof);

        
        $__internal_19db696436ab9ab124b039e6d14781801d3e5cf9608e47bab16a63701e38d43c->leave($__internal_19db696436ab9ab124b039e6d14781801d3e5cf9608e47bab16a63701e38d43c_prof);

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
", "@Framework/Form/choice_options.html.php", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
