<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_6f7d489a96d09a576e8ac524303be886f3862e167b02b14f0c85ef7a28f52b9c extends Twig_Template
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
        $__internal_0b857e69b552c090c8c26ed41177b563ae174731f75073a515115187fbfb8467 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b857e69b552c090c8c26ed41177b563ae174731f75073a515115187fbfb8467->enter($__internal_0b857e69b552c090c8c26ed41177b563ae174731f75073a515115187fbfb8467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_d62cd215673e378542f6f6c65fe5a16456c3bd2db214a29aecafa6122b52da5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d62cd215673e378542f6f6c65fe5a16456c3bd2db214a29aecafa6122b52da5b->enter($__internal_d62cd215673e378542f6f6c65fe5a16456c3bd2db214a29aecafa6122b52da5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_0b857e69b552c090c8c26ed41177b563ae174731f75073a515115187fbfb8467->leave($__internal_0b857e69b552c090c8c26ed41177b563ae174731f75073a515115187fbfb8467_prof);

        
        $__internal_d62cd215673e378542f6f6c65fe5a16456c3bd2db214a29aecafa6122b52da5b->leave($__internal_d62cd215673e378542f6f6c65fe5a16456c3bd2db214a29aecafa6122b52da5b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
