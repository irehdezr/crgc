<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_3681ca8e0fcebf170b993c6e1875d86d8e7d7ea0a02a4c020fd4c29378448230 extends Twig_Template
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
        $__internal_f15d405d5d956c5026d287ecbcb9da0dd70f6edaf41635ced23e68eae748e31f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f15d405d5d956c5026d287ecbcb9da0dd70f6edaf41635ced23e68eae748e31f->enter($__internal_f15d405d5d956c5026d287ecbcb9da0dd70f6edaf41635ced23e68eae748e31f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_3cc99469becb3e1b1a5cd667ba432b6b87d5659c79cc76770650ff57574cac49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cc99469becb3e1b1a5cd667ba432b6b87d5659c79cc76770650ff57574cac49->enter($__internal_3cc99469becb3e1b1a5cd667ba432b6b87d5659c79cc76770650ff57574cac49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_f15d405d5d956c5026d287ecbcb9da0dd70f6edaf41635ced23e68eae748e31f->leave($__internal_f15d405d5d956c5026d287ecbcb9da0dd70f6edaf41635ced23e68eae748e31f_prof);

        
        $__internal_3cc99469becb3e1b1a5cd667ba432b6b87d5659c79cc76770650ff57574cac49->leave($__internal_3cc99469becb3e1b1a5cd667ba432b6b87d5659c79cc76770650ff57574cac49_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
