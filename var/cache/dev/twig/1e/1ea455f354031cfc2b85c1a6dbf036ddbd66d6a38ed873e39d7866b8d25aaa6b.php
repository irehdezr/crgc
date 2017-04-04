<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_c9a45de2fb7a259d11eddcff017f7cb94b46130e586acbe73aa879e369a54ade extends Twig_Template
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
        $__internal_78472fd1abc9838f549b4737210a025815f27d979ffdf43e9e0d643921c5c114 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78472fd1abc9838f549b4737210a025815f27d979ffdf43e9e0d643921c5c114->enter($__internal_78472fd1abc9838f549b4737210a025815f27d979ffdf43e9e0d643921c5c114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_6cc323de33fe6fbbb2cf37a0d4aeeb74e2e5b17e120acdb683fbd17e08de2727 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cc323de33fe6fbbb2cf37a0d4aeeb74e2e5b17e120acdb683fbd17e08de2727->enter($__internal_6cc323de33fe6fbbb2cf37a0d4aeeb74e2e5b17e120acdb683fbd17e08de2727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_78472fd1abc9838f549b4737210a025815f27d979ffdf43e9e0d643921c5c114->leave($__internal_78472fd1abc9838f549b4737210a025815f27d979ffdf43e9e0d643921c5c114_prof);

        
        $__internal_6cc323de33fe6fbbb2cf37a0d4aeeb74e2e5b17e120acdb683fbd17e08de2727->leave($__internal_6cc323de33fe6fbbb2cf37a0d4aeeb74e2e5b17e120acdb683fbd17e08de2727_prof);

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
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
