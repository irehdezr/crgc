<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_8aa84d24e8e3a372247000bd1b4c32e25d02cf4c636a5c591438bf44786c3bc6 extends Twig_Template
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
        $__internal_787b4372e71d739c4582c5d19f113da389a2fac2538b20bd625ae19748b28a19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_787b4372e71d739c4582c5d19f113da389a2fac2538b20bd625ae19748b28a19->enter($__internal_787b4372e71d739c4582c5d19f113da389a2fac2538b20bd625ae19748b28a19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_a84cde4e08ee51d0e0dabb4692ace700995182a6f96880194846944bb5f765a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a84cde4e08ee51d0e0dabb4692ace700995182a6f96880194846944bb5f765a1->enter($__internal_a84cde4e08ee51d0e0dabb4692ace700995182a6f96880194846944bb5f765a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_787b4372e71d739c4582c5d19f113da389a2fac2538b20bd625ae19748b28a19->leave($__internal_787b4372e71d739c4582c5d19f113da389a2fac2538b20bd625ae19748b28a19_prof);

        
        $__internal_a84cde4e08ee51d0e0dabb4692ace700995182a6f96880194846944bb5f765a1->leave($__internal_a84cde4e08ee51d0e0dabb4692ace700995182a6f96880194846944bb5f765a1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
