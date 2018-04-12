<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_b5541ae5122d07827e48c74f626d6d4104bfbc7724315d53c653092842ab2b89 extends Twig_Template
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
        $__internal_32be5ebe0c7d3c456e7aaf0fbfd3493c7c7cc16fcca5b5177d99c529da64197f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32be5ebe0c7d3c456e7aaf0fbfd3493c7c7cc16fcca5b5177d99c529da64197f->enter($__internal_32be5ebe0c7d3c456e7aaf0fbfd3493c7c7cc16fcca5b5177d99c529da64197f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_a9ecb4cf19ed23167ecdb115a4a8190304e79ecda65afc099900d907302d4979 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9ecb4cf19ed23167ecdb115a4a8190304e79ecda65afc099900d907302d4979->enter($__internal_a9ecb4cf19ed23167ecdb115a4a8190304e79ecda65afc099900d907302d4979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_32be5ebe0c7d3c456e7aaf0fbfd3493c7c7cc16fcca5b5177d99c529da64197f->leave($__internal_32be5ebe0c7d3c456e7aaf0fbfd3493c7c7cc16fcca5b5177d99c529da64197f_prof);

        
        $__internal_a9ecb4cf19ed23167ecdb115a4a8190304e79ecda65afc099900d907302d4979->leave($__internal_a9ecb4cf19ed23167ecdb115a4a8190304e79ecda65afc099900d907302d4979_prof);

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
", "@Framework/Form/checkbox_widget.html.php", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
