<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_fe3b808eac4ddc869953b7521c171f1ddaf65a950851b08f6a3cbff0088474d4 extends Twig_Template
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
        $__internal_3e2672206c0b2bd3a6aef6f991f485b17e7d9a656d4cd7e271c85752b03bc86c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e2672206c0b2bd3a6aef6f991f485b17e7d9a656d4cd7e271c85752b03bc86c->enter($__internal_3e2672206c0b2bd3a6aef6f991f485b17e7d9a656d4cd7e271c85752b03bc86c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_0667c6f25b76ba77119fd63d92b03e67b195def0905802eb731f773ac9be291e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0667c6f25b76ba77119fd63d92b03e67b195def0905802eb731f773ac9be291e->enter($__internal_0667c6f25b76ba77119fd63d92b03e67b195def0905802eb731f773ac9be291e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_3e2672206c0b2bd3a6aef6f991f485b17e7d9a656d4cd7e271c85752b03bc86c->leave($__internal_3e2672206c0b2bd3a6aef6f991f485b17e7d9a656d4cd7e271c85752b03bc86c_prof);

        
        $__internal_0667c6f25b76ba77119fd63d92b03e67b195def0905802eb731f773ac9be291e->leave($__internal_0667c6f25b76ba77119fd63d92b03e67b195def0905802eb731f773ac9be291e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
