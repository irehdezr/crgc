<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_fa53edb058465f70ec5309f7724610d468a939f480c05faff98dd075fe6863dd extends Twig_Template
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
        $__internal_83f05f8aa66c5d754307b705fb86f159b5212c86ae6b30d32c799f49f0b120f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83f05f8aa66c5d754307b705fb86f159b5212c86ae6b30d32c799f49f0b120f9->enter($__internal_83f05f8aa66c5d754307b705fb86f159b5212c86ae6b30d32c799f49f0b120f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_2cb4de322cd06f1502c07b7afbce957e154bdb576cf1b39628ee7ca990e8e0b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cb4de322cd06f1502c07b7afbce957e154bdb576cf1b39628ee7ca990e8e0b5->enter($__internal_2cb4de322cd06f1502c07b7afbce957e154bdb576cf1b39628ee7ca990e8e0b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_83f05f8aa66c5d754307b705fb86f159b5212c86ae6b30d32c799f49f0b120f9->leave($__internal_83f05f8aa66c5d754307b705fb86f159b5212c86ae6b30d32c799f49f0b120f9_prof);

        
        $__internal_2cb4de322cd06f1502c07b7afbce957e154bdb576cf1b39628ee7ca990e8e0b5->leave($__internal_2cb4de322cd06f1502c07b7afbce957e154bdb576cf1b39628ee7ca990e8e0b5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
