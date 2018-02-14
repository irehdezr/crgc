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
        $__internal_59690b56e802e66c291c1b4aafb918b0437b9dd1cb3a0ab4a8aff627d4fc66e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59690b56e802e66c291c1b4aafb918b0437b9dd1cb3a0ab4a8aff627d4fc66e0->enter($__internal_59690b56e802e66c291c1b4aafb918b0437b9dd1cb3a0ab4a8aff627d4fc66e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_586725cfd3080bf1368da74d64668dc4fac8f82104d97e8a65875594b3ac89f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_586725cfd3080bf1368da74d64668dc4fac8f82104d97e8a65875594b3ac89f6->enter($__internal_586725cfd3080bf1368da74d64668dc4fac8f82104d97e8a65875594b3ac89f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_59690b56e802e66c291c1b4aafb918b0437b9dd1cb3a0ab4a8aff627d4fc66e0->leave($__internal_59690b56e802e66c291c1b4aafb918b0437b9dd1cb3a0ab4a8aff627d4fc66e0_prof);

        
        $__internal_586725cfd3080bf1368da74d64668dc4fac8f82104d97e8a65875594b3ac89f6->leave($__internal_586725cfd3080bf1368da74d64668dc4fac8f82104d97e8a65875594b3ac89f6_prof);

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
