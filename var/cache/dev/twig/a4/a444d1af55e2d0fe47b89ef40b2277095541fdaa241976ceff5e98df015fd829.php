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
        $__internal_3f0f8a16b7ef89cbaabf78c607c255610209abc165c17b3e6bdf8266eab020a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f0f8a16b7ef89cbaabf78c607c255610209abc165c17b3e6bdf8266eab020a3->enter($__internal_3f0f8a16b7ef89cbaabf78c607c255610209abc165c17b3e6bdf8266eab020a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_34f70fc2eeb9eacbc57b0da5531c54730417b0434d4df6335f2a3795f97a1ea6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34f70fc2eeb9eacbc57b0da5531c54730417b0434d4df6335f2a3795f97a1ea6->enter($__internal_34f70fc2eeb9eacbc57b0da5531c54730417b0434d4df6335f2a3795f97a1ea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_3f0f8a16b7ef89cbaabf78c607c255610209abc165c17b3e6bdf8266eab020a3->leave($__internal_3f0f8a16b7ef89cbaabf78c607c255610209abc165c17b3e6bdf8266eab020a3_prof);

        
        $__internal_34f70fc2eeb9eacbc57b0da5531c54730417b0434d4df6335f2a3795f97a1ea6->leave($__internal_34f70fc2eeb9eacbc57b0da5531c54730417b0434d4df6335f2a3795f97a1ea6_prof);

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
