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
        $__internal_9fb59248495183e55416c8d9e92ef65e292cd37efe4029d958ddf462b70b47d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fb59248495183e55416c8d9e92ef65e292cd37efe4029d958ddf462b70b47d0->enter($__internal_9fb59248495183e55416c8d9e92ef65e292cd37efe4029d958ddf462b70b47d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_dc35cb0ed3d96b1ae9d752e782f4276a33fa36265b4f584583b08ffc1876ee60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc35cb0ed3d96b1ae9d752e782f4276a33fa36265b4f584583b08ffc1876ee60->enter($__internal_dc35cb0ed3d96b1ae9d752e782f4276a33fa36265b4f584583b08ffc1876ee60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_9fb59248495183e55416c8d9e92ef65e292cd37efe4029d958ddf462b70b47d0->leave($__internal_9fb59248495183e55416c8d9e92ef65e292cd37efe4029d958ddf462b70b47d0_prof);

        
        $__internal_dc35cb0ed3d96b1ae9d752e782f4276a33fa36265b4f584583b08ffc1876ee60->leave($__internal_dc35cb0ed3d96b1ae9d752e782f4276a33fa36265b4f584583b08ffc1876ee60_prof);

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
