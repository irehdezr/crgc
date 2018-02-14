<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_9bde9d740d03120655f1c6c655fe7c8fe9a88e8a8b9888ed93de23a0381997ff extends Twig_Template
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
        $__internal_91244b042cbeeb023a126ceb76b4c4acfcac28d452cfa742b4a773641a9ca542 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91244b042cbeeb023a126ceb76b4c4acfcac28d452cfa742b4a773641a9ca542->enter($__internal_91244b042cbeeb023a126ceb76b4c4acfcac28d452cfa742b4a773641a9ca542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_d4c3060fd9873fc5abec9f23850f3789ae09dfafd80bbfb45a57471393d1d6fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4c3060fd9873fc5abec9f23850f3789ae09dfafd80bbfb45a57471393d1d6fa->enter($__internal_d4c3060fd9873fc5abec9f23850f3789ae09dfafd80bbfb45a57471393d1d6fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_91244b042cbeeb023a126ceb76b4c4acfcac28d452cfa742b4a773641a9ca542->leave($__internal_91244b042cbeeb023a126ceb76b4c4acfcac28d452cfa742b4a773641a9ca542_prof);

        
        $__internal_d4c3060fd9873fc5abec9f23850f3789ae09dfafd80bbfb45a57471393d1d6fa->leave($__internal_d4c3060fd9873fc5abec9f23850f3789ae09dfafd80bbfb45a57471393d1d6fa_prof);

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
", "@Framework/Form/form_widget.html.php", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
