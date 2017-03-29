<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_e2e4c6497b8858d06fdaaa0bb1377b45d7cbd832731b5a07128c3bf544f24ab4 extends Twig_Template
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
        $__internal_af20f230644f7d12431f09c6462a26a5c28b88abad15c712b58e233d079d9cb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af20f230644f7d12431f09c6462a26a5c28b88abad15c712b58e233d079d9cb8->enter($__internal_af20f230644f7d12431f09c6462a26a5c28b88abad15c712b58e233d079d9cb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_d5a057be2b800241b373873fd2bfd22f3f619aec6a4c1d6bdfe035e1c3577973 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5a057be2b800241b373873fd2bfd22f3f619aec6a4c1d6bdfe035e1c3577973->enter($__internal_d5a057be2b800241b373873fd2bfd22f3f619aec6a4c1d6bdfe035e1c3577973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_af20f230644f7d12431f09c6462a26a5c28b88abad15c712b58e233d079d9cb8->leave($__internal_af20f230644f7d12431f09c6462a26a5c28b88abad15c712b58e233d079d9cb8_prof);

        
        $__internal_d5a057be2b800241b373873fd2bfd22f3f619aec6a4c1d6bdfe035e1c3577973->leave($__internal_d5a057be2b800241b373873fd2bfd22f3f619aec6a4c1d6bdfe035e1c3577973_prof);

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
", "@Framework/Form/collection_widget.html.php", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
