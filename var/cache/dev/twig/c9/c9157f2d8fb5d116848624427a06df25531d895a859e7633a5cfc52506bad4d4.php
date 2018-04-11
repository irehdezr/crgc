<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_07efadb10f29a7b261e8a92da4e60d08a8ecd0e37647cfe722c77cad07537d36 extends Twig_Template
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
        $__internal_dd79d56c8b0c2f553a5d5dd2479c1720f6377b583434bfa9ef573a1a28917347 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd79d56c8b0c2f553a5d5dd2479c1720f6377b583434bfa9ef573a1a28917347->enter($__internal_dd79d56c8b0c2f553a5d5dd2479c1720f6377b583434bfa9ef573a1a28917347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_dbdebc75dd66c399dc2ec347c57f2449162a7db5a5d0bfaea8de1f2ccb057eb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbdebc75dd66c399dc2ec347c57f2449162a7db5a5d0bfaea8de1f2ccb057eb6->enter($__internal_dbdebc75dd66c399dc2ec347c57f2449162a7db5a5d0bfaea8de1f2ccb057eb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_dd79d56c8b0c2f553a5d5dd2479c1720f6377b583434bfa9ef573a1a28917347->leave($__internal_dd79d56c8b0c2f553a5d5dd2479c1720f6377b583434bfa9ef573a1a28917347_prof);

        
        $__internal_dbdebc75dd66c399dc2ec347c57f2449162a7db5a5d0bfaea8de1f2ccb057eb6->leave($__internal_dbdebc75dd66c399dc2ec347c57f2449162a7db5a5d0bfaea8de1f2ccb057eb6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
