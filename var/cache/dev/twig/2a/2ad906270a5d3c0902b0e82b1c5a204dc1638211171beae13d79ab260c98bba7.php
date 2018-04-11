<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_b6f72f1cc7fbe2faa81f7cac2ebcd250b4d26789cfbd2634b1222cfaf8b92e3d extends Twig_Template
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
        $__internal_b206907a1342b34e4f6821bdb6b87f8a1337993dcd7ff067eaef493854a2bf53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b206907a1342b34e4f6821bdb6b87f8a1337993dcd7ff067eaef493854a2bf53->enter($__internal_b206907a1342b34e4f6821bdb6b87f8a1337993dcd7ff067eaef493854a2bf53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_a67d8396bb528e8a74e43d2dfd8d6332aee184f5618541331a22bdb722ea5795 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a67d8396bb528e8a74e43d2dfd8d6332aee184f5618541331a22bdb722ea5795->enter($__internal_a67d8396bb528e8a74e43d2dfd8d6332aee184f5618541331a22bdb722ea5795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_b206907a1342b34e4f6821bdb6b87f8a1337993dcd7ff067eaef493854a2bf53->leave($__internal_b206907a1342b34e4f6821bdb6b87f8a1337993dcd7ff067eaef493854a2bf53_prof);

        
        $__internal_a67d8396bb528e8a74e43d2dfd8d6332aee184f5618541331a22bdb722ea5795->leave($__internal_a67d8396bb528e8a74e43d2dfd8d6332aee184f5618541331a22bdb722ea5795_prof);

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
", "@Framework/Form/datetime_widget.html.php", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
