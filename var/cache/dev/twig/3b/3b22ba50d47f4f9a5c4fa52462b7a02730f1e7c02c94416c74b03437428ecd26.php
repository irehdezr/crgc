<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_b3443b774175f5d53db5a3d699ca25b4695b3e0951ade7fc257c2e86350acffb extends Twig_Template
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
        $__internal_e565a13f0c586c2faa7367177a601cccb7c2241150aef96672ba417a489ceb2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e565a13f0c586c2faa7367177a601cccb7c2241150aef96672ba417a489ceb2d->enter($__internal_e565a13f0c586c2faa7367177a601cccb7c2241150aef96672ba417a489ceb2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_d44018c4c4b5911a3c18edecf40ee0e723ff074c16ac57d2c3448476ae3fbfa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d44018c4c4b5911a3c18edecf40ee0e723ff074c16ac57d2c3448476ae3fbfa8->enter($__internal_d44018c4c4b5911a3c18edecf40ee0e723ff074c16ac57d2c3448476ae3fbfa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_e565a13f0c586c2faa7367177a601cccb7c2241150aef96672ba417a489ceb2d->leave($__internal_e565a13f0c586c2faa7367177a601cccb7c2241150aef96672ba417a489ceb2d_prof);

        
        $__internal_d44018c4c4b5911a3c18edecf40ee0e723ff074c16ac57d2c3448476ae3fbfa8->leave($__internal_d44018c4c4b5911a3c18edecf40ee0e723ff074c16ac57d2c3448476ae3fbfa8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
