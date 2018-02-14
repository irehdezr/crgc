<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_99788f504521db7fee8e6701e985b0e329d2ebeb4b30b169360c3e14013d10be extends Twig_Template
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
        $__internal_ff1eb88724a978361d98b63ae80f5deb372f8e7661c186501e12f0b59e724131 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff1eb88724a978361d98b63ae80f5deb372f8e7661c186501e12f0b59e724131->enter($__internal_ff1eb88724a978361d98b63ae80f5deb372f8e7661c186501e12f0b59e724131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_b96ab3b7c498ee2fff2fc58e09f99d01b75b6f77c3df3e5652052764e2ee6593 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b96ab3b7c498ee2fff2fc58e09f99d01b75b6f77c3df3e5652052764e2ee6593->enter($__internal_b96ab3b7c498ee2fff2fc58e09f99d01b75b6f77c3df3e5652052764e2ee6593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_ff1eb88724a978361d98b63ae80f5deb372f8e7661c186501e12f0b59e724131->leave($__internal_ff1eb88724a978361d98b63ae80f5deb372f8e7661c186501e12f0b59e724131_prof);

        
        $__internal_b96ab3b7c498ee2fff2fc58e09f99d01b75b6f77c3df3e5652052764e2ee6593->leave($__internal_b96ab3b7c498ee2fff2fc58e09f99d01b75b6f77c3df3e5652052764e2ee6593_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
