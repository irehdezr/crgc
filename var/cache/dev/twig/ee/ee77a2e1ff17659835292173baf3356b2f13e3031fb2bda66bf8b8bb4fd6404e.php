<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_c3cc12d864cb5ed47b0c953bdd00ed26ed9b1d13131ea8f6b7838e9f7ff3acc2 extends Twig_Template
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
        $__internal_a358c94b814c81f87fd891e257e693210fddc31d24ec3fe94cca9b3d8fa695c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a358c94b814c81f87fd891e257e693210fddc31d24ec3fe94cca9b3d8fa695c5->enter($__internal_a358c94b814c81f87fd891e257e693210fddc31d24ec3fe94cca9b3d8fa695c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_43b56dda47bc4c6be1e8ddae2e769cbf87a4f4f6b2caaae05ea56d203826de1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43b56dda47bc4c6be1e8ddae2e769cbf87a4f4f6b2caaae05ea56d203826de1c->enter($__internal_43b56dda47bc4c6be1e8ddae2e769cbf87a4f4f6b2caaae05ea56d203826de1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_a358c94b814c81f87fd891e257e693210fddc31d24ec3fe94cca9b3d8fa695c5->leave($__internal_a358c94b814c81f87fd891e257e693210fddc31d24ec3fe94cca9b3d8fa695c5_prof);

        
        $__internal_43b56dda47bc4c6be1e8ddae2e769cbf87a4f4f6b2caaae05ea56d203826de1c->leave($__internal_43b56dda47bc4c6be1e8ddae2e769cbf87a4f4f6b2caaae05ea56d203826de1c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
