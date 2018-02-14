<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_5b4b152bb955cff181b180f96274987c48edd01262bc6d880ca2c7fc50ded420 extends Twig_Template
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
        $__internal_57ebd0e147b30a9b431f7a73ee70388c67d9cce3d65b835df60ce41b7ce58648 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57ebd0e147b30a9b431f7a73ee70388c67d9cce3d65b835df60ce41b7ce58648->enter($__internal_57ebd0e147b30a9b431f7a73ee70388c67d9cce3d65b835df60ce41b7ce58648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_94aa4d68c20379d013d23e9a72ec49fb780fc2aacdee8d0ec977a3a174982139 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94aa4d68c20379d013d23e9a72ec49fb780fc2aacdee8d0ec977a3a174982139->enter($__internal_94aa4d68c20379d013d23e9a72ec49fb780fc2aacdee8d0ec977a3a174982139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_57ebd0e147b30a9b431f7a73ee70388c67d9cce3d65b835df60ce41b7ce58648->leave($__internal_57ebd0e147b30a9b431f7a73ee70388c67d9cce3d65b835df60ce41b7ce58648_prof);

        
        $__internal_94aa4d68c20379d013d23e9a72ec49fb780fc2aacdee8d0ec977a3a174982139->leave($__internal_94aa4d68c20379d013d23e9a72ec49fb780fc2aacdee8d0ec977a3a174982139_prof);

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
", "@Framework/Form/button_widget.html.php", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
