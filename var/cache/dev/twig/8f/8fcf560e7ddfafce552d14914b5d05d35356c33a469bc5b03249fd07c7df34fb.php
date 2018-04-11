<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_7544320964c7e0d1523512edd600948c55952fa7ff229ac9a1bdf82bb40eeb51 extends Twig_Template
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
        $__internal_ce77b5f67a90e65b62543a9ed2e9ffa79432b37e788ab0614082ad151f5f1200 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce77b5f67a90e65b62543a9ed2e9ffa79432b37e788ab0614082ad151f5f1200->enter($__internal_ce77b5f67a90e65b62543a9ed2e9ffa79432b37e788ab0614082ad151f5f1200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_ea83330fbb0e12a1ee84e27fcb8d26c827807f6afe51e77a8725b29ef9b05b11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea83330fbb0e12a1ee84e27fcb8d26c827807f6afe51e77a8725b29ef9b05b11->enter($__internal_ea83330fbb0e12a1ee84e27fcb8d26c827807f6afe51e77a8725b29ef9b05b11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_ce77b5f67a90e65b62543a9ed2e9ffa79432b37e788ab0614082ad151f5f1200->leave($__internal_ce77b5f67a90e65b62543a9ed2e9ffa79432b37e788ab0614082ad151f5f1200_prof);

        
        $__internal_ea83330fbb0e12a1ee84e27fcb8d26c827807f6afe51e77a8725b29ef9b05b11->leave($__internal_ea83330fbb0e12a1ee84e27fcb8d26c827807f6afe51e77a8725b29ef9b05b11_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
