<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_2d66215da9f4d5a7945d6dd5153577fc99fd369f7f665d8daa66d96ff893ef39 extends Twig_Template
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
        $__internal_9fffccf9e83a5b8d01a717dc2717403b8f5e67cc6a622f6828469b64e874bb48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fffccf9e83a5b8d01a717dc2717403b8f5e67cc6a622f6828469b64e874bb48->enter($__internal_9fffccf9e83a5b8d01a717dc2717403b8f5e67cc6a622f6828469b64e874bb48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_d4cf2a7228633e298806d522c9deff829f92d7834ade37937cdc8196123265b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4cf2a7228633e298806d522c9deff829f92d7834ade37937cdc8196123265b1->enter($__internal_d4cf2a7228633e298806d522c9deff829f92d7834ade37937cdc8196123265b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_9fffccf9e83a5b8d01a717dc2717403b8f5e67cc6a622f6828469b64e874bb48->leave($__internal_9fffccf9e83a5b8d01a717dc2717403b8f5e67cc6a622f6828469b64e874bb48_prof);

        
        $__internal_d4cf2a7228633e298806d522c9deff829f92d7834ade37937cdc8196123265b1->leave($__internal_d4cf2a7228633e298806d522c9deff829f92d7834ade37937cdc8196123265b1_prof);

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
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
