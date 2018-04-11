<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_f5631c9aee6994acb5b269749996be450362eb4a7fa672ba66914f85e3ea2154 extends Twig_Template
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
        $__internal_2c0d12031b89e7ae6adf5462cd214c2a79a419512ca78a9312f4d0e0e1e7226c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c0d12031b89e7ae6adf5462cd214c2a79a419512ca78a9312f4d0e0e1e7226c->enter($__internal_2c0d12031b89e7ae6adf5462cd214c2a79a419512ca78a9312f4d0e0e1e7226c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_a7dcb2a821f11dd91c2f8b37c3fa9f213ed0fddc98c96dcca27fb5e656a5bd99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7dcb2a821f11dd91c2f8b37c3fa9f213ed0fddc98c96dcca27fb5e656a5bd99->enter($__internal_a7dcb2a821f11dd91c2f8b37c3fa9f213ed0fddc98c96dcca27fb5e656a5bd99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_2c0d12031b89e7ae6adf5462cd214c2a79a419512ca78a9312f4d0e0e1e7226c->leave($__internal_2c0d12031b89e7ae6adf5462cd214c2a79a419512ca78a9312f4d0e0e1e7226c_prof);

        
        $__internal_a7dcb2a821f11dd91c2f8b37c3fa9f213ed0fddc98c96dcca27fb5e656a5bd99->leave($__internal_a7dcb2a821f11dd91c2f8b37c3fa9f213ed0fddc98c96dcca27fb5e656a5bd99_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
