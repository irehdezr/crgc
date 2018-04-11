<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_27f6065f92f760c297a06fd08470814afb9db58a8f14d561bd4532bc85117077 extends Twig_Template
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
        $__internal_2666c94105549802c0c59bf8d5428916e6bb80228978882ab882b6c0e7df6a76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2666c94105549802c0c59bf8d5428916e6bb80228978882ab882b6c0e7df6a76->enter($__internal_2666c94105549802c0c59bf8d5428916e6bb80228978882ab882b6c0e7df6a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_39aad4d069feac3679610f81e2b37c5ad804ba4c3c6a2b9fe1e7afd05786ffbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39aad4d069feac3679610f81e2b37c5ad804ba4c3c6a2b9fe1e7afd05786ffbc->enter($__internal_39aad4d069feac3679610f81e2b37c5ad804ba4c3c6a2b9fe1e7afd05786ffbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_2666c94105549802c0c59bf8d5428916e6bb80228978882ab882b6c0e7df6a76->leave($__internal_2666c94105549802c0c59bf8d5428916e6bb80228978882ab882b6c0e7df6a76_prof);

        
        $__internal_39aad4d069feac3679610f81e2b37c5ad804ba4c3c6a2b9fe1e7afd05786ffbc->leave($__internal_39aad4d069feac3679610f81e2b37c5ad804ba4c3c6a2b9fe1e7afd05786ffbc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
