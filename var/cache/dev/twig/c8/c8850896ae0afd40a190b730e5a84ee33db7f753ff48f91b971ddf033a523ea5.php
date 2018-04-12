<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_4b1e0ceb84486310dc7b456ddef3a1f2449320fa49634c63906fdaffd8074e85 extends Twig_Template
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
        $__internal_c6a6ad9751c40c49e011e47138aee54ace5a1bf933995602e123c3afbd1b357d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6a6ad9751c40c49e011e47138aee54ace5a1bf933995602e123c3afbd1b357d->enter($__internal_c6a6ad9751c40c49e011e47138aee54ace5a1bf933995602e123c3afbd1b357d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_01e5add2c8b02676ba3c35f2749df4b003255d5b966f42e16c5b712857cb1cfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01e5add2c8b02676ba3c35f2749df4b003255d5b966f42e16c5b712857cb1cfe->enter($__internal_01e5add2c8b02676ba3c35f2749df4b003255d5b966f42e16c5b712857cb1cfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_c6a6ad9751c40c49e011e47138aee54ace5a1bf933995602e123c3afbd1b357d->leave($__internal_c6a6ad9751c40c49e011e47138aee54ace5a1bf933995602e123c3afbd1b357d_prof);

        
        $__internal_01e5add2c8b02676ba3c35f2749df4b003255d5b966f42e16c5b712857cb1cfe->leave($__internal_01e5add2c8b02676ba3c35f2749df4b003255d5b966f42e16c5b712857cb1cfe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
