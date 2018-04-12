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
        $__internal_836e70350aa8ae1ccdc04b1aa93884da484018e29993f7cbab9caeca3b0859bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_836e70350aa8ae1ccdc04b1aa93884da484018e29993f7cbab9caeca3b0859bd->enter($__internal_836e70350aa8ae1ccdc04b1aa93884da484018e29993f7cbab9caeca3b0859bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_6e5bfad3f8a5ecf31ed922a08199a7876f7f8db0f354f0c06b7f3cd79c2f8ed3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e5bfad3f8a5ecf31ed922a08199a7876f7f8db0f354f0c06b7f3cd79c2f8ed3->enter($__internal_6e5bfad3f8a5ecf31ed922a08199a7876f7f8db0f354f0c06b7f3cd79c2f8ed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_836e70350aa8ae1ccdc04b1aa93884da484018e29993f7cbab9caeca3b0859bd->leave($__internal_836e70350aa8ae1ccdc04b1aa93884da484018e29993f7cbab9caeca3b0859bd_prof);

        
        $__internal_6e5bfad3f8a5ecf31ed922a08199a7876f7f8db0f354f0c06b7f3cd79c2f8ed3->leave($__internal_6e5bfad3f8a5ecf31ed922a08199a7876f7f8db0f354f0c06b7f3cd79c2f8ed3_prof);

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
