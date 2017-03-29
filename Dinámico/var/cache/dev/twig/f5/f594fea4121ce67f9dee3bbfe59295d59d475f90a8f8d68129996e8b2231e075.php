<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_28c3ed7d61cdb3974952a3ecaa2fb9dee7d4160d2158716da36e92c22a27c811 extends Twig_Template
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
        $__internal_e58f18b653117bfa3e31ff564859b1bb06a3227ab3adc433c5ddc7aef6db40fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e58f18b653117bfa3e31ff564859b1bb06a3227ab3adc433c5ddc7aef6db40fd->enter($__internal_e58f18b653117bfa3e31ff564859b1bb06a3227ab3adc433c5ddc7aef6db40fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_bcd8ff044d27e05b58c3284889e012322604df8e51be3dd9da971631d11236d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcd8ff044d27e05b58c3284889e012322604df8e51be3dd9da971631d11236d5->enter($__internal_bcd8ff044d27e05b58c3284889e012322604df8e51be3dd9da971631d11236d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_e58f18b653117bfa3e31ff564859b1bb06a3227ab3adc433c5ddc7aef6db40fd->leave($__internal_e58f18b653117bfa3e31ff564859b1bb06a3227ab3adc433c5ddc7aef6db40fd_prof);

        
        $__internal_bcd8ff044d27e05b58c3284889e012322604df8e51be3dd9da971631d11236d5->leave($__internal_bcd8ff044d27e05b58c3284889e012322604df8e51be3dd9da971631d11236d5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
