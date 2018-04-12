<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_a976b4102da291a180b5eca5024a2e6b7d10250dcfc7b7c289fdddef9c3c24e8 extends Twig_Template
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
        $__internal_25cd230aae3157e7afbf6805eb7d3a68761d89efcea5e5ec27f5136f08ccce6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25cd230aae3157e7afbf6805eb7d3a68761d89efcea5e5ec27f5136f08ccce6d->enter($__internal_25cd230aae3157e7afbf6805eb7d3a68761d89efcea5e5ec27f5136f08ccce6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_b5166de80b0a5b287ff441ff94bdeede610babacd5d9de21d5f291ebc0b18907 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5166de80b0a5b287ff441ff94bdeede610babacd5d9de21d5f291ebc0b18907->enter($__internal_b5166de80b0a5b287ff441ff94bdeede610babacd5d9de21d5f291ebc0b18907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_25cd230aae3157e7afbf6805eb7d3a68761d89efcea5e5ec27f5136f08ccce6d->leave($__internal_25cd230aae3157e7afbf6805eb7d3a68761d89efcea5e5ec27f5136f08ccce6d_prof);

        
        $__internal_b5166de80b0a5b287ff441ff94bdeede610babacd5d9de21d5f291ebc0b18907->leave($__internal_b5166de80b0a5b287ff441ff94bdeede610babacd5d9de21d5f291ebc0b18907_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
