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
        $__internal_708e3c71f850a9756466432954a4dee182c2295a1069bc9865e2318b95f880c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_708e3c71f850a9756466432954a4dee182c2295a1069bc9865e2318b95f880c5->enter($__internal_708e3c71f850a9756466432954a4dee182c2295a1069bc9865e2318b95f880c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_58b262a718089257c8182076c4e090698f47f71cacc8bed6183f7c0b6d9fe960 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58b262a718089257c8182076c4e090698f47f71cacc8bed6183f7c0b6d9fe960->enter($__internal_58b262a718089257c8182076c4e090698f47f71cacc8bed6183f7c0b6d9fe960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_708e3c71f850a9756466432954a4dee182c2295a1069bc9865e2318b95f880c5->leave($__internal_708e3c71f850a9756466432954a4dee182c2295a1069bc9865e2318b95f880c5_prof);

        
        $__internal_58b262a718089257c8182076c4e090698f47f71cacc8bed6183f7c0b6d9fe960->leave($__internal_58b262a718089257c8182076c4e090698f47f71cacc8bed6183f7c0b6d9fe960_prof);

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
