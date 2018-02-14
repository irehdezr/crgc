<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_ae078035a67893fca6d7af63fe21ceb8d547c80d505d0664cd0a1fec82d6787a extends Twig_Template
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
        $__internal_d095cfd3125c2332e9b5fd673c592806bd8cbde099b53c24c8e0523638fcba88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d095cfd3125c2332e9b5fd673c592806bd8cbde099b53c24c8e0523638fcba88->enter($__internal_d095cfd3125c2332e9b5fd673c592806bd8cbde099b53c24c8e0523638fcba88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_1d2524a30daa51aaff95878960d724432cdf32064fc92f77595f4479488f613d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d2524a30daa51aaff95878960d724432cdf32064fc92f77595f4479488f613d->enter($__internal_1d2524a30daa51aaff95878960d724432cdf32064fc92f77595f4479488f613d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_d095cfd3125c2332e9b5fd673c592806bd8cbde099b53c24c8e0523638fcba88->leave($__internal_d095cfd3125c2332e9b5fd673c592806bd8cbde099b53c24c8e0523638fcba88_prof);

        
        $__internal_1d2524a30daa51aaff95878960d724432cdf32064fc92f77595f4479488f613d->leave($__internal_1d2524a30daa51aaff95878960d724432cdf32064fc92f77595f4479488f613d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
