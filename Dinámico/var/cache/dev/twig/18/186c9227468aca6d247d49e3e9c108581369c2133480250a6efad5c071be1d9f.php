<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_379bfe9ba49f1b2f8c80b9624969edf496422d749847c4fcb82917be91a08fde extends Twig_Template
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
        $__internal_7a730797e4f4714dfc85c9dcf084b78bdb29c9d63fe9e9d19db26214a5208bba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a730797e4f4714dfc85c9dcf084b78bdb29c9d63fe9e9d19db26214a5208bba->enter($__internal_7a730797e4f4714dfc85c9dcf084b78bdb29c9d63fe9e9d19db26214a5208bba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_4b7680cb82cf13f28997c98457757f4feac67ea529655bf9bae04d7647747bb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b7680cb82cf13f28997c98457757f4feac67ea529655bf9bae04d7647747bb1->enter($__internal_4b7680cb82cf13f28997c98457757f4feac67ea529655bf9bae04d7647747bb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_7a730797e4f4714dfc85c9dcf084b78bdb29c9d63fe9e9d19db26214a5208bba->leave($__internal_7a730797e4f4714dfc85c9dcf084b78bdb29c9d63fe9e9d19db26214a5208bba_prof);

        
        $__internal_4b7680cb82cf13f28997c98457757f4feac67ea529655bf9bae04d7647747bb1->leave($__internal_4b7680cb82cf13f28997c98457757f4feac67ea529655bf9bae04d7647747bb1_prof);

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
", "@Framework/Form/email_widget.html.php", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
