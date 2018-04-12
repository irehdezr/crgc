<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_20dd8b53599f45a041e9747e8c659177d4acacac239dd3f09f2cb484fa97cf86 extends Twig_Template
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
        $__internal_e326bee001b969a3c8b806369d29edc3dbab814ff09ff4c032a5c352d087330c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e326bee001b969a3c8b806369d29edc3dbab814ff09ff4c032a5c352d087330c->enter($__internal_e326bee001b969a3c8b806369d29edc3dbab814ff09ff4c032a5c352d087330c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_c761bad5095563d4ba20744bee117163855aa2f1ceb857218bea435583dcd943 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c761bad5095563d4ba20744bee117163855aa2f1ceb857218bea435583dcd943->enter($__internal_c761bad5095563d4ba20744bee117163855aa2f1ceb857218bea435583dcd943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_e326bee001b969a3c8b806369d29edc3dbab814ff09ff4c032a5c352d087330c->leave($__internal_e326bee001b969a3c8b806369d29edc3dbab814ff09ff4c032a5c352d087330c_prof);

        
        $__internal_c761bad5095563d4ba20744bee117163855aa2f1ceb857218bea435583dcd943->leave($__internal_c761bad5095563d4ba20744bee117163855aa2f1ceb857218bea435583dcd943_prof);

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
", "@Framework/Form/choice_attributes.html.php", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
