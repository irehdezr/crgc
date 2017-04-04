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
        $__internal_5eb5448efc3bdde22ede935df7e11159fc0644ea57b1ce1685fdb1b90921c60a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5eb5448efc3bdde22ede935df7e11159fc0644ea57b1ce1685fdb1b90921c60a->enter($__internal_5eb5448efc3bdde22ede935df7e11159fc0644ea57b1ce1685fdb1b90921c60a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_b79c52849832be82a26459e9db4e761faeef5a2e6ba5aeb65b7ad6de44dbc587 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b79c52849832be82a26459e9db4e761faeef5a2e6ba5aeb65b7ad6de44dbc587->enter($__internal_b79c52849832be82a26459e9db4e761faeef5a2e6ba5aeb65b7ad6de44dbc587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_5eb5448efc3bdde22ede935df7e11159fc0644ea57b1ce1685fdb1b90921c60a->leave($__internal_5eb5448efc3bdde22ede935df7e11159fc0644ea57b1ce1685fdb1b90921c60a_prof);

        
        $__internal_b79c52849832be82a26459e9db4e761faeef5a2e6ba5aeb65b7ad6de44dbc587->leave($__internal_b79c52849832be82a26459e9db4e761faeef5a2e6ba5aeb65b7ad6de44dbc587_prof);

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
