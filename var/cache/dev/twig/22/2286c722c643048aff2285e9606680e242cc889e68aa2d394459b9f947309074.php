<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_aac5f9d0610d964811def3f004a0dbed6c478cfe111d1b27300809330a198e32 extends Twig_Template
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
        $__internal_81c648b05a7ac7323054e9ebbdfea87c8de6106a38b159fc7df83afd1adba013 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81c648b05a7ac7323054e9ebbdfea87c8de6106a38b159fc7df83afd1adba013->enter($__internal_81c648b05a7ac7323054e9ebbdfea87c8de6106a38b159fc7df83afd1adba013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_8372d055b2b9ec6f73835695aa0264da9c92b87654d470ec83ff0573e32a4f1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8372d055b2b9ec6f73835695aa0264da9c92b87654d470ec83ff0573e32a4f1f->enter($__internal_8372d055b2b9ec6f73835695aa0264da9c92b87654d470ec83ff0573e32a4f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_81c648b05a7ac7323054e9ebbdfea87c8de6106a38b159fc7df83afd1adba013->leave($__internal_81c648b05a7ac7323054e9ebbdfea87c8de6106a38b159fc7df83afd1adba013_prof);

        
        $__internal_8372d055b2b9ec6f73835695aa0264da9c92b87654d470ec83ff0573e32a4f1f->leave($__internal_8372d055b2b9ec6f73835695aa0264da9c92b87654d470ec83ff0573e32a4f1f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
