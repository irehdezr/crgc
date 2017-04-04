<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_396b7683b174ab0814144631a42fb58629f24c69f04ea3af53ed4d9127ffe7e8 extends Twig_Template
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
        $__internal_8d8e52f02662ff7a347d0b2bf6d3973b9060c8f7bf25ebb4aa38cfb239ee997a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d8e52f02662ff7a347d0b2bf6d3973b9060c8f7bf25ebb4aa38cfb239ee997a->enter($__internal_8d8e52f02662ff7a347d0b2bf6d3973b9060c8f7bf25ebb4aa38cfb239ee997a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_279520846b47f326d7e1be0042248a90e438b8880e6dff4e3eedcce080c54cd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_279520846b47f326d7e1be0042248a90e438b8880e6dff4e3eedcce080c54cd5->enter($__internal_279520846b47f326d7e1be0042248a90e438b8880e6dff4e3eedcce080c54cd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_8d8e52f02662ff7a347d0b2bf6d3973b9060c8f7bf25ebb4aa38cfb239ee997a->leave($__internal_8d8e52f02662ff7a347d0b2bf6d3973b9060c8f7bf25ebb4aa38cfb239ee997a_prof);

        
        $__internal_279520846b47f326d7e1be0042248a90e438b8880e6dff4e3eedcce080c54cd5->leave($__internal_279520846b47f326d7e1be0042248a90e438b8880e6dff4e3eedcce080c54cd5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
