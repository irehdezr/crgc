<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_38a822e323a0d24ad1731e4152911b58024e24d299365b9ec44b5abb236014f2 extends Twig_Template
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
        $__internal_70681066656fbb69a009fa02ac1fb7fa56897576bb5b9cdb9b56dcb996cbe7d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70681066656fbb69a009fa02ac1fb7fa56897576bb5b9cdb9b56dcb996cbe7d7->enter($__internal_70681066656fbb69a009fa02ac1fb7fa56897576bb5b9cdb9b56dcb996cbe7d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_4a1997f03468b8c3b6443a473b3f11fe5dd334f8fe78092ea53e18a7c10e4aff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a1997f03468b8c3b6443a473b3f11fe5dd334f8fe78092ea53e18a7c10e4aff->enter($__internal_4a1997f03468b8c3b6443a473b3f11fe5dd334f8fe78092ea53e18a7c10e4aff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_70681066656fbb69a009fa02ac1fb7fa56897576bb5b9cdb9b56dcb996cbe7d7->leave($__internal_70681066656fbb69a009fa02ac1fb7fa56897576bb5b9cdb9b56dcb996cbe7d7_prof);

        
        $__internal_4a1997f03468b8c3b6443a473b3f11fe5dd334f8fe78092ea53e18a7c10e4aff->leave($__internal_4a1997f03468b8c3b6443a473b3f11fe5dd334f8fe78092ea53e18a7c10e4aff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
