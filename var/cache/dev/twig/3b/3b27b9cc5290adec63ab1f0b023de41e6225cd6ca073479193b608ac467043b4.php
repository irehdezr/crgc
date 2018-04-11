<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_e4063d213c39ef4babe86ee51ecc57d931d72233f3664467861d8e3e4d86c68b extends Twig_Template
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
        $__internal_645e4493d615bd4dab0bf28573ebf323106fa5011af2261e84a168f9a4cdacad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_645e4493d615bd4dab0bf28573ebf323106fa5011af2261e84a168f9a4cdacad->enter($__internal_645e4493d615bd4dab0bf28573ebf323106fa5011af2261e84a168f9a4cdacad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_05aced3653b45e5662a3184ae18876feff1c83285a7cb90769df1d74d5f6d59c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05aced3653b45e5662a3184ae18876feff1c83285a7cb90769df1d74d5f6d59c->enter($__internal_05aced3653b45e5662a3184ae18876feff1c83285a7cb90769df1d74d5f6d59c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_645e4493d615bd4dab0bf28573ebf323106fa5011af2261e84a168f9a4cdacad->leave($__internal_645e4493d615bd4dab0bf28573ebf323106fa5011af2261e84a168f9a4cdacad_prof);

        
        $__internal_05aced3653b45e5662a3184ae18876feff1c83285a7cb90769df1d74d5f6d59c->leave($__internal_05aced3653b45e5662a3184ae18876feff1c83285a7cb90769df1d74d5f6d59c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
