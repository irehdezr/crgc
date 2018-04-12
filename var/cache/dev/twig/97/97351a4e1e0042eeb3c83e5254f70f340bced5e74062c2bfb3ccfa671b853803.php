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
        $__internal_b477f6702280859e82efcff37604125333b8ea429f6708d84e0e3ec25c54dbc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b477f6702280859e82efcff37604125333b8ea429f6708d84e0e3ec25c54dbc3->enter($__internal_b477f6702280859e82efcff37604125333b8ea429f6708d84e0e3ec25c54dbc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_b4522eff3c4221fef1191d3bf83bad6b94a200efff720a645aeb8e6aafe663ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4522eff3c4221fef1191d3bf83bad6b94a200efff720a645aeb8e6aafe663ad->enter($__internal_b4522eff3c4221fef1191d3bf83bad6b94a200efff720a645aeb8e6aafe663ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_b477f6702280859e82efcff37604125333b8ea429f6708d84e0e3ec25c54dbc3->leave($__internal_b477f6702280859e82efcff37604125333b8ea429f6708d84e0e3ec25c54dbc3_prof);

        
        $__internal_b4522eff3c4221fef1191d3bf83bad6b94a200efff720a645aeb8e6aafe663ad->leave($__internal_b4522eff3c4221fef1191d3bf83bad6b94a200efff720a645aeb8e6aafe663ad_prof);

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
