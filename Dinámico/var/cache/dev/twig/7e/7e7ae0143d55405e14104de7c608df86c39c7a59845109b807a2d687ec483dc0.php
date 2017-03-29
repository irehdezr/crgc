<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_8624af7b95c69976ca71854f4a0f33daf40cc9bcdaea32b639701e0dd0cce5fa extends Twig_Template
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
        $__internal_a1076d11c5f6baf0913068e020d7373e95557da4b82dea695aa946ccafa765cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1076d11c5f6baf0913068e020d7373e95557da4b82dea695aa946ccafa765cf->enter($__internal_a1076d11c5f6baf0913068e020d7373e95557da4b82dea695aa946ccafa765cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_1004588e9143906624c3c1baf2a64cdebff387b722a310329e1d7fd0b106dbc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1004588e9143906624c3c1baf2a64cdebff387b722a310329e1d7fd0b106dbc3->enter($__internal_1004588e9143906624c3c1baf2a64cdebff387b722a310329e1d7fd0b106dbc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_a1076d11c5f6baf0913068e020d7373e95557da4b82dea695aa946ccafa765cf->leave($__internal_a1076d11c5f6baf0913068e020d7373e95557da4b82dea695aa946ccafa765cf_prof);

        
        $__internal_1004588e9143906624c3c1baf2a64cdebff387b722a310329e1d7fd0b106dbc3->leave($__internal_1004588e9143906624c3c1baf2a64cdebff387b722a310329e1d7fd0b106dbc3_prof);

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
", "@Framework/Form/choice_widget.html.php", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
