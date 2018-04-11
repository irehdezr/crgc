<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_9b046197cc4f6ee0ad19a52d39a4758c98d1496d213b3d50b16967b7c9dbd5a9 extends Twig_Template
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
        $__internal_0a27b6237ea2f807c9875269d7bf15491ef6b8873ee3410509dc44d549d796c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a27b6237ea2f807c9875269d7bf15491ef6b8873ee3410509dc44d549d796c6->enter($__internal_0a27b6237ea2f807c9875269d7bf15491ef6b8873ee3410509dc44d549d796c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_fe0db5bbf6e044687230a483336045520ab4b1e071a112e50d1e1f643d485b23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe0db5bbf6e044687230a483336045520ab4b1e071a112e50d1e1f643d485b23->enter($__internal_fe0db5bbf6e044687230a483336045520ab4b1e071a112e50d1e1f643d485b23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_0a27b6237ea2f807c9875269d7bf15491ef6b8873ee3410509dc44d549d796c6->leave($__internal_0a27b6237ea2f807c9875269d7bf15491ef6b8873ee3410509dc44d549d796c6_prof);

        
        $__internal_fe0db5bbf6e044687230a483336045520ab4b1e071a112e50d1e1f643d485b23->leave($__internal_fe0db5bbf6e044687230a483336045520ab4b1e071a112e50d1e1f643d485b23_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
