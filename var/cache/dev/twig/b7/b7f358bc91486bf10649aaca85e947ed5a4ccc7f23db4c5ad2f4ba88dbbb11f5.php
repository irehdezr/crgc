<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_5e8faaa126f2864e157ba99306315463cbe358308636c1ef0c2fbddad6feadcf extends Twig_Template
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
        $__internal_d4f2f059919f2fe114b753be4614bf1931ba71773dfef4808afe79ef2c822436 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4f2f059919f2fe114b753be4614bf1931ba71773dfef4808afe79ef2c822436->enter($__internal_d4f2f059919f2fe114b753be4614bf1931ba71773dfef4808afe79ef2c822436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_edf05c559f29e9502cfb3647abd25b788894ea328106061aeb68c2b4c07591a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edf05c559f29e9502cfb3647abd25b788894ea328106061aeb68c2b4c07591a7->enter($__internal_edf05c559f29e9502cfb3647abd25b788894ea328106061aeb68c2b4c07591a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_d4f2f059919f2fe114b753be4614bf1931ba71773dfef4808afe79ef2c822436->leave($__internal_d4f2f059919f2fe114b753be4614bf1931ba71773dfef4808afe79ef2c822436_prof);

        
        $__internal_edf05c559f29e9502cfb3647abd25b788894ea328106061aeb68c2b4c07591a7->leave($__internal_edf05c559f29e9502cfb3647abd25b788894ea328106061aeb68c2b4c07591a7_prof);

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
", "@Framework/Form/number_widget.html.php", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
