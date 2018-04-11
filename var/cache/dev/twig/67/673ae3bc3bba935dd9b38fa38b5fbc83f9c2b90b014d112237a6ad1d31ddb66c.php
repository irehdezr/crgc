<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_b5541ae5122d07827e48c74f626d6d4104bfbc7724315d53c653092842ab2b89 extends Twig_Template
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
        $__internal_cbed1e617e1e3fed015beff72df5d22e24bb139d5bc5bb65ea3e34e91ec122b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbed1e617e1e3fed015beff72df5d22e24bb139d5bc5bb65ea3e34e91ec122b5->enter($__internal_cbed1e617e1e3fed015beff72df5d22e24bb139d5bc5bb65ea3e34e91ec122b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_1fab36a5ad4b7a72bc13f0d5db1ee8f4dde287481633277c300c053ccbe74ce0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fab36a5ad4b7a72bc13f0d5db1ee8f4dde287481633277c300c053ccbe74ce0->enter($__internal_1fab36a5ad4b7a72bc13f0d5db1ee8f4dde287481633277c300c053ccbe74ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_cbed1e617e1e3fed015beff72df5d22e24bb139d5bc5bb65ea3e34e91ec122b5->leave($__internal_cbed1e617e1e3fed015beff72df5d22e24bb139d5bc5bb65ea3e34e91ec122b5_prof);

        
        $__internal_1fab36a5ad4b7a72bc13f0d5db1ee8f4dde287481633277c300c053ccbe74ce0->leave($__internal_1fab36a5ad4b7a72bc13f0d5db1ee8f4dde287481633277c300c053ccbe74ce0_prof);

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
", "@Framework/Form/checkbox_widget.html.php", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
