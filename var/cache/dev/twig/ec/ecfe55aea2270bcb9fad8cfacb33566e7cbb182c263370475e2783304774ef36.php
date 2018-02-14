<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_f976a3a1c30d141d7891a5e3050594a9b07f887674d665aa10d161d5efb342fd extends Twig_Template
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
        $__internal_d8a5056bc787b5ccb4392b3f29df28af0871337df2d946b9faee2054f8f9effb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8a5056bc787b5ccb4392b3f29df28af0871337df2d946b9faee2054f8f9effb->enter($__internal_d8a5056bc787b5ccb4392b3f29df28af0871337df2d946b9faee2054f8f9effb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_d26fff9a3671d598c4becef062ab3e5f724c2ab5a965281698c63e916cc17cc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d26fff9a3671d598c4becef062ab3e5f724c2ab5a965281698c63e916cc17cc9->enter($__internal_d26fff9a3671d598c4becef062ab3e5f724c2ab5a965281698c63e916cc17cc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_d8a5056bc787b5ccb4392b3f29df28af0871337df2d946b9faee2054f8f9effb->leave($__internal_d8a5056bc787b5ccb4392b3f29df28af0871337df2d946b9faee2054f8f9effb_prof);

        
        $__internal_d26fff9a3671d598c4becef062ab3e5f724c2ab5a965281698c63e916cc17cc9->leave($__internal_d26fff9a3671d598c4becef062ab3e5f724c2ab5a965281698c63e916cc17cc9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
