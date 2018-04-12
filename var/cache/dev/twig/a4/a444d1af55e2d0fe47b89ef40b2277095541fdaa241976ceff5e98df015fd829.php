<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_0250a3e93c565f9e8a1893ba8bce4f6cc79475f70e94489211fcfa709d36e65f extends Twig_Template
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
        $__internal_66f90b757fe936b5220a0a50966c67591053d40aaaf104653c6c51507f52a1b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66f90b757fe936b5220a0a50966c67591053d40aaaf104653c6c51507f52a1b2->enter($__internal_66f90b757fe936b5220a0a50966c67591053d40aaaf104653c6c51507f52a1b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_42f43ee9d77c09b471841996e7ece29b925f11f9aaf5e5efe898e4cfe4a1c56e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42f43ee9d77c09b471841996e7ece29b925f11f9aaf5e5efe898e4cfe4a1c56e->enter($__internal_42f43ee9d77c09b471841996e7ece29b925f11f9aaf5e5efe898e4cfe4a1c56e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_66f90b757fe936b5220a0a50966c67591053d40aaaf104653c6c51507f52a1b2->leave($__internal_66f90b757fe936b5220a0a50966c67591053d40aaaf104653c6c51507f52a1b2_prof);

        
        $__internal_42f43ee9d77c09b471841996e7ece29b925f11f9aaf5e5efe898e4cfe4a1c56e->leave($__internal_42f43ee9d77c09b471841996e7ece29b925f11f9aaf5e5efe898e4cfe4a1c56e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
