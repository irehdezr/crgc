<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_44f4d72ebe66d8f64f0a06b8e721d558d9c3125debaa89f6010dd8fcc4e3ab7c extends Twig_Template
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
        $__internal_b716a324800b1d6de84760e178a6625c7c8383cabd6d43f3963fef91936a852a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b716a324800b1d6de84760e178a6625c7c8383cabd6d43f3963fef91936a852a->enter($__internal_b716a324800b1d6de84760e178a6625c7c8383cabd6d43f3963fef91936a852a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_66e70d9e031e6974abfb8f4e68c53d36262cff678a9a569f5371f97347c80b38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66e70d9e031e6974abfb8f4e68c53d36262cff678a9a569f5371f97347c80b38->enter($__internal_66e70d9e031e6974abfb8f4e68c53d36262cff678a9a569f5371f97347c80b38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_b716a324800b1d6de84760e178a6625c7c8383cabd6d43f3963fef91936a852a->leave($__internal_b716a324800b1d6de84760e178a6625c7c8383cabd6d43f3963fef91936a852a_prof);

        
        $__internal_66e70d9e031e6974abfb8f4e68c53d36262cff678a9a569f5371f97347c80b38->leave($__internal_66e70d9e031e6974abfb8f4e68c53d36262cff678a9a569f5371f97347c80b38_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
