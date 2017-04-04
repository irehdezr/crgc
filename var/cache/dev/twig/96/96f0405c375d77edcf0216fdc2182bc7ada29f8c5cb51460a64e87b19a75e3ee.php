<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_79ec507e45b3d3112452ddedfd9aeca8f5096f526a6a1b460092a64e45698c16 extends Twig_Template
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
        $__internal_324671782779435c4e6b0fcf31a42629416759ab4c6a534cbb68d2da5ff0ccde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_324671782779435c4e6b0fcf31a42629416759ab4c6a534cbb68d2da5ff0ccde->enter($__internal_324671782779435c4e6b0fcf31a42629416759ab4c6a534cbb68d2da5ff0ccde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_c999e215a0bae4fe625fa3d546d34ed18a3b42ff820bf488682c939b5be7a1d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c999e215a0bae4fe625fa3d546d34ed18a3b42ff820bf488682c939b5be7a1d9->enter($__internal_c999e215a0bae4fe625fa3d546d34ed18a3b42ff820bf488682c939b5be7a1d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_324671782779435c4e6b0fcf31a42629416759ab4c6a534cbb68d2da5ff0ccde->leave($__internal_324671782779435c4e6b0fcf31a42629416759ab4c6a534cbb68d2da5ff0ccde_prof);

        
        $__internal_c999e215a0bae4fe625fa3d546d34ed18a3b42ff820bf488682c939b5be7a1d9->leave($__internal_c999e215a0bae4fe625fa3d546d34ed18a3b42ff820bf488682c939b5be7a1d9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
