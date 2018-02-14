<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_396b7683b174ab0814144631a42fb58629f24c69f04ea3af53ed4d9127ffe7e8 extends Twig_Template
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
        $__internal_aaa4a90865f7cd6c0b8b3dbced2e08d970d3bef3910408e6835655cb25ae49ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaa4a90865f7cd6c0b8b3dbced2e08d970d3bef3910408e6835655cb25ae49ba->enter($__internal_aaa4a90865f7cd6c0b8b3dbced2e08d970d3bef3910408e6835655cb25ae49ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_3c6b25ba52169eb5c8b98f1464bbec3ca7b04252bf921f3c5fcb779071053470 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c6b25ba52169eb5c8b98f1464bbec3ca7b04252bf921f3c5fcb779071053470->enter($__internal_3c6b25ba52169eb5c8b98f1464bbec3ca7b04252bf921f3c5fcb779071053470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_aaa4a90865f7cd6c0b8b3dbced2e08d970d3bef3910408e6835655cb25ae49ba->leave($__internal_aaa4a90865f7cd6c0b8b3dbced2e08d970d3bef3910408e6835655cb25ae49ba_prof);

        
        $__internal_3c6b25ba52169eb5c8b98f1464bbec3ca7b04252bf921f3c5fcb779071053470->leave($__internal_3c6b25ba52169eb5c8b98f1464bbec3ca7b04252bf921f3c5fcb779071053470_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
