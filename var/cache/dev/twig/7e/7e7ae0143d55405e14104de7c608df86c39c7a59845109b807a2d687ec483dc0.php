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
        $__internal_e6f0c664fa4ad485fe62ed1345e619618751400e562d4f3ada3ef7f9514cfe1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6f0c664fa4ad485fe62ed1345e619618751400e562d4f3ada3ef7f9514cfe1f->enter($__internal_e6f0c664fa4ad485fe62ed1345e619618751400e562d4f3ada3ef7f9514cfe1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_70a8970599405bb4c20ea015969d007e7936e79df50825df7447315225505bd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70a8970599405bb4c20ea015969d007e7936e79df50825df7447315225505bd5->enter($__internal_70a8970599405bb4c20ea015969d007e7936e79df50825df7447315225505bd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_e6f0c664fa4ad485fe62ed1345e619618751400e562d4f3ada3ef7f9514cfe1f->leave($__internal_e6f0c664fa4ad485fe62ed1345e619618751400e562d4f3ada3ef7f9514cfe1f_prof);

        
        $__internal_70a8970599405bb4c20ea015969d007e7936e79df50825df7447315225505bd5->leave($__internal_70a8970599405bb4c20ea015969d007e7936e79df50825df7447315225505bd5_prof);

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
