<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_22b59a66f604eb63a845368d451af8852f2ba4086a3e48b50d97c1f5c6425c01 extends Twig_Template
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
        $__internal_7020d948fe4d6960182d9529edeeeed69a9827a73d20c2d8e3740cc2543ffd99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7020d948fe4d6960182d9529edeeeed69a9827a73d20c2d8e3740cc2543ffd99->enter($__internal_7020d948fe4d6960182d9529edeeeed69a9827a73d20c2d8e3740cc2543ffd99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_57cdf88d5081ab9b7c5bd76bd67ea75ba2521f2b60cb4aebfead7200fd1ec857 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57cdf88d5081ab9b7c5bd76bd67ea75ba2521f2b60cb4aebfead7200fd1ec857->enter($__internal_57cdf88d5081ab9b7c5bd76bd67ea75ba2521f2b60cb4aebfead7200fd1ec857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_7020d948fe4d6960182d9529edeeeed69a9827a73d20c2d8e3740cc2543ffd99->leave($__internal_7020d948fe4d6960182d9529edeeeed69a9827a73d20c2d8e3740cc2543ffd99_prof);

        
        $__internal_57cdf88d5081ab9b7c5bd76bd67ea75ba2521f2b60cb4aebfead7200fd1ec857->leave($__internal_57cdf88d5081ab9b7c5bd76bd67ea75ba2521f2b60cb4aebfead7200fd1ec857_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
