<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_97b85fcb4f0fd57042d501474622654c2e7e2419cb66a114b68b4074f7b2c9f3 extends Twig_Template
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
        $__internal_517c6db05093db5227bd4a0deaeb70e8b1d585f1ca3d77345abbf140c9a87a57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_517c6db05093db5227bd4a0deaeb70e8b1d585f1ca3d77345abbf140c9a87a57->enter($__internal_517c6db05093db5227bd4a0deaeb70e8b1d585f1ca3d77345abbf140c9a87a57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_c156051b78f42d88843492e1dc9ebe8f0d8cdf41bb3d1d4f49af67751fdde9fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c156051b78f42d88843492e1dc9ebe8f0d8cdf41bb3d1d4f49af67751fdde9fb->enter($__internal_c156051b78f42d88843492e1dc9ebe8f0d8cdf41bb3d1d4f49af67751fdde9fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_517c6db05093db5227bd4a0deaeb70e8b1d585f1ca3d77345abbf140c9a87a57->leave($__internal_517c6db05093db5227bd4a0deaeb70e8b1d585f1ca3d77345abbf140c9a87a57_prof);

        
        $__internal_c156051b78f42d88843492e1dc9ebe8f0d8cdf41bb3d1d4f49af67751fdde9fb->leave($__internal_c156051b78f42d88843492e1dc9ebe8f0d8cdf41bb3d1d4f49af67751fdde9fb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
