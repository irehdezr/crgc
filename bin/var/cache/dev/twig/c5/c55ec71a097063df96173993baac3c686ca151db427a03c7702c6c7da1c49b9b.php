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
        $__internal_6e4d929b988e9b4837c385f60d741c88ef66f66edf5a61a89edb4ed29431ad78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e4d929b988e9b4837c385f60d741c88ef66f66edf5a61a89edb4ed29431ad78->enter($__internal_6e4d929b988e9b4837c385f60d741c88ef66f66edf5a61a89edb4ed29431ad78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_ed3902a77e182ed7f88b1e1a592ffe9d9b0187f5ca6b6b7c45a6167e61531922 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed3902a77e182ed7f88b1e1a592ffe9d9b0187f5ca6b6b7c45a6167e61531922->enter($__internal_ed3902a77e182ed7f88b1e1a592ffe9d9b0187f5ca6b6b7c45a6167e61531922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_6e4d929b988e9b4837c385f60d741c88ef66f66edf5a61a89edb4ed29431ad78->leave($__internal_6e4d929b988e9b4837c385f60d741c88ef66f66edf5a61a89edb4ed29431ad78_prof);

        
        $__internal_ed3902a77e182ed7f88b1e1a592ffe9d9b0187f5ca6b6b7c45a6167e61531922->leave($__internal_ed3902a77e182ed7f88b1e1a592ffe9d9b0187f5ca6b6b7c45a6167e61531922_prof);

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
