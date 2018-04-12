<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_da50a00e8d5eab37fe0bf1a4f8cd5f2dca49aa7022689f581372a437b9d3bb74 extends Twig_Template
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
        $__internal_f73a4606bd0a2623e16f4bd5539887fccb6113ad7063d17f3f58853786112e0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f73a4606bd0a2623e16f4bd5539887fccb6113ad7063d17f3f58853786112e0a->enter($__internal_f73a4606bd0a2623e16f4bd5539887fccb6113ad7063d17f3f58853786112e0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_189500cf79a2527cde741ab784893206c26cb5ed2d8f89bcd89cac57bcb7002e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_189500cf79a2527cde741ab784893206c26cb5ed2d8f89bcd89cac57bcb7002e->enter($__internal_189500cf79a2527cde741ab784893206c26cb5ed2d8f89bcd89cac57bcb7002e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_f73a4606bd0a2623e16f4bd5539887fccb6113ad7063d17f3f58853786112e0a->leave($__internal_f73a4606bd0a2623e16f4bd5539887fccb6113ad7063d17f3f58853786112e0a_prof);

        
        $__internal_189500cf79a2527cde741ab784893206c26cb5ed2d8f89bcd89cac57bcb7002e->leave($__internal_189500cf79a2527cde741ab784893206c26cb5ed2d8f89bcd89cac57bcb7002e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
