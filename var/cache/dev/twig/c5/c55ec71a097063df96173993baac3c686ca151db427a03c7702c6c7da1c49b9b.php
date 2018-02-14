<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_edf5186a7787300ccc003bdf5019dbb10edd33f7204be06169fcc9385dacaf47 extends Twig_Template
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
        $__internal_bcb2b75aeef4fdc4cc4e167218b37d92c2ff3de7e3e5389458d0ce967deea7a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcb2b75aeef4fdc4cc4e167218b37d92c2ff3de7e3e5389458d0ce967deea7a5->enter($__internal_bcb2b75aeef4fdc4cc4e167218b37d92c2ff3de7e3e5389458d0ce967deea7a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_dbec200ca0ff91acf6f025b64865e642593e68fa51f4c083de64f049c7dcfb8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbec200ca0ff91acf6f025b64865e642593e68fa51f4c083de64f049c7dcfb8b->enter($__internal_dbec200ca0ff91acf6f025b64865e642593e68fa51f4c083de64f049c7dcfb8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_bcb2b75aeef4fdc4cc4e167218b37d92c2ff3de7e3e5389458d0ce967deea7a5->leave($__internal_bcb2b75aeef4fdc4cc4e167218b37d92c2ff3de7e3e5389458d0ce967deea7a5_prof);

        
        $__internal_dbec200ca0ff91acf6f025b64865e642593e68fa51f4c083de64f049c7dcfb8b->leave($__internal_dbec200ca0ff91acf6f025b64865e642593e68fa51f4c083de64f049c7dcfb8b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
