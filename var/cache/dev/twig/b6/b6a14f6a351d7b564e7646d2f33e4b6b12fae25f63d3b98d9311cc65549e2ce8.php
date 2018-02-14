<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_97b85fcb4f0fd57042d501474622654c2e7e2419cb66a114b68b4074f7b2c9f3 extends Twig_Template
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
        $__internal_6a49838fd226112da39e184b0b61a233b6607874f1d3cc551f07f6abbc43fc4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a49838fd226112da39e184b0b61a233b6607874f1d3cc551f07f6abbc43fc4f->enter($__internal_6a49838fd226112da39e184b0b61a233b6607874f1d3cc551f07f6abbc43fc4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_a7e2c1be6f08504b16b0c62ec40ccab57fc7c2e326ba3e1d838e2e76f2e71467 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7e2c1be6f08504b16b0c62ec40ccab57fc7c2e326ba3e1d838e2e76f2e71467->enter($__internal_a7e2c1be6f08504b16b0c62ec40ccab57fc7c2e326ba3e1d838e2e76f2e71467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_6a49838fd226112da39e184b0b61a233b6607874f1d3cc551f07f6abbc43fc4f->leave($__internal_6a49838fd226112da39e184b0b61a233b6607874f1d3cc551f07f6abbc43fc4f_prof);

        
        $__internal_a7e2c1be6f08504b16b0c62ec40ccab57fc7c2e326ba3e1d838e2e76f2e71467->leave($__internal_a7e2c1be6f08504b16b0c62ec40ccab57fc7c2e326ba3e1d838e2e76f2e71467_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
