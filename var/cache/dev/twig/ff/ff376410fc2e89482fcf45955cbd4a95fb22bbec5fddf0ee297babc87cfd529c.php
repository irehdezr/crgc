<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_f5631c9aee6994acb5b269749996be450362eb4a7fa672ba66914f85e3ea2154 extends Twig_Template
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
        $__internal_303a8263809cdc97d0fbb97b3beced6dfe29b31f3c06725960e365f8ec0c082e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_303a8263809cdc97d0fbb97b3beced6dfe29b31f3c06725960e365f8ec0c082e->enter($__internal_303a8263809cdc97d0fbb97b3beced6dfe29b31f3c06725960e365f8ec0c082e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_5e19b0c6b197d8965d347777a233ad5b452ba47a48fb132a4920c4007ef66c78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e19b0c6b197d8965d347777a233ad5b452ba47a48fb132a4920c4007ef66c78->enter($__internal_5e19b0c6b197d8965d347777a233ad5b452ba47a48fb132a4920c4007ef66c78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_303a8263809cdc97d0fbb97b3beced6dfe29b31f3c06725960e365f8ec0c082e->leave($__internal_303a8263809cdc97d0fbb97b3beced6dfe29b31f3c06725960e365f8ec0c082e_prof);

        
        $__internal_5e19b0c6b197d8965d347777a233ad5b452ba47a48fb132a4920c4007ef66c78->leave($__internal_5e19b0c6b197d8965d347777a233ad5b452ba47a48fb132a4920c4007ef66c78_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
