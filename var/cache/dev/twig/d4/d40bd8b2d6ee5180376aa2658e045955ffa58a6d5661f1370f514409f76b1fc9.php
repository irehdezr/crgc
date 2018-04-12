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
        $__internal_4f6b67ede03871cf10c666a487e7f75882347c5b3a7a8131826e96f9f296894f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f6b67ede03871cf10c666a487e7f75882347c5b3a7a8131826e96f9f296894f->enter($__internal_4f6b67ede03871cf10c666a487e7f75882347c5b3a7a8131826e96f9f296894f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_6c8d5edecb530fe5fa5d1008edac578bcdc8d990590b332e13c6d8a24d8e5800 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c8d5edecb530fe5fa5d1008edac578bcdc8d990590b332e13c6d8a24d8e5800->enter($__internal_6c8d5edecb530fe5fa5d1008edac578bcdc8d990590b332e13c6d8a24d8e5800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_4f6b67ede03871cf10c666a487e7f75882347c5b3a7a8131826e96f9f296894f->leave($__internal_4f6b67ede03871cf10c666a487e7f75882347c5b3a7a8131826e96f9f296894f_prof);

        
        $__internal_6c8d5edecb530fe5fa5d1008edac578bcdc8d990590b332e13c6d8a24d8e5800->leave($__internal_6c8d5edecb530fe5fa5d1008edac578bcdc8d990590b332e13c6d8a24d8e5800_prof);

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
