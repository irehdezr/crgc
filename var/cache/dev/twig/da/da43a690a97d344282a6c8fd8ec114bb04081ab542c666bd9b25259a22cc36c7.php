<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_fa53edb058465f70ec5309f7724610d468a939f480c05faff98dd075fe6863dd extends Twig_Template
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
        $__internal_01a4a9b2e2ab7e60520d1097bfc0930bcccd3b585538ec240b5f6f85db73ccd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01a4a9b2e2ab7e60520d1097bfc0930bcccd3b585538ec240b5f6f85db73ccd3->enter($__internal_01a4a9b2e2ab7e60520d1097bfc0930bcccd3b585538ec240b5f6f85db73ccd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_a9409a3c365de87b335360bf4ee73973f7c8561964fade9ca380b2784d27efe2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9409a3c365de87b335360bf4ee73973f7c8561964fade9ca380b2784d27efe2->enter($__internal_a9409a3c365de87b335360bf4ee73973f7c8561964fade9ca380b2784d27efe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_01a4a9b2e2ab7e60520d1097bfc0930bcccd3b585538ec240b5f6f85db73ccd3->leave($__internal_01a4a9b2e2ab7e60520d1097bfc0930bcccd3b585538ec240b5f6f85db73ccd3_prof);

        
        $__internal_a9409a3c365de87b335360bf4ee73973f7c8561964fade9ca380b2784d27efe2->leave($__internal_a9409a3c365de87b335360bf4ee73973f7c8561964fade9ca380b2784d27efe2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
