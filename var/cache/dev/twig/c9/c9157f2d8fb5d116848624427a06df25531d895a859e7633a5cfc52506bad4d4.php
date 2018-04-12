<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_07efadb10f29a7b261e8a92da4e60d08a8ecd0e37647cfe722c77cad07537d36 extends Twig_Template
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
        $__internal_ed0297e3ecce1ea1bdda62abe47826eac17f9a95a3a338c6caa139d61e30b01a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed0297e3ecce1ea1bdda62abe47826eac17f9a95a3a338c6caa139d61e30b01a->enter($__internal_ed0297e3ecce1ea1bdda62abe47826eac17f9a95a3a338c6caa139d61e30b01a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_b3e215f59446e98e3afe404cf7fee832d2fdaa73e53a70667f5f4084bbf611be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3e215f59446e98e3afe404cf7fee832d2fdaa73e53a70667f5f4084bbf611be->enter($__internal_b3e215f59446e98e3afe404cf7fee832d2fdaa73e53a70667f5f4084bbf611be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_ed0297e3ecce1ea1bdda62abe47826eac17f9a95a3a338c6caa139d61e30b01a->leave($__internal_ed0297e3ecce1ea1bdda62abe47826eac17f9a95a3a338c6caa139d61e30b01a_prof);

        
        $__internal_b3e215f59446e98e3afe404cf7fee832d2fdaa73e53a70667f5f4084bbf611be->leave($__internal_b3e215f59446e98e3afe404cf7fee832d2fdaa73e53a70667f5f4084bbf611be_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
