<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_5b4b152bb955cff181b180f96274987c48edd01262bc6d880ca2c7fc50ded420 extends Twig_Template
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
        $__internal_1b2c1ea03cf92fdf1ee1fc8bb72788caeee0d84e994297ed6e2d0d6e1d91433b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b2c1ea03cf92fdf1ee1fc8bb72788caeee0d84e994297ed6e2d0d6e1d91433b->enter($__internal_1b2c1ea03cf92fdf1ee1fc8bb72788caeee0d84e994297ed6e2d0d6e1d91433b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_8d51f0caed78d025275c49f46991e26d62473b8696b1fbb6024d83740cd95d9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d51f0caed78d025275c49f46991e26d62473b8696b1fbb6024d83740cd95d9f->enter($__internal_8d51f0caed78d025275c49f46991e26d62473b8696b1fbb6024d83740cd95d9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_1b2c1ea03cf92fdf1ee1fc8bb72788caeee0d84e994297ed6e2d0d6e1d91433b->leave($__internal_1b2c1ea03cf92fdf1ee1fc8bb72788caeee0d84e994297ed6e2d0d6e1d91433b_prof);

        
        $__internal_8d51f0caed78d025275c49f46991e26d62473b8696b1fbb6024d83740cd95d9f->leave($__internal_8d51f0caed78d025275c49f46991e26d62473b8696b1fbb6024d83740cd95d9f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
