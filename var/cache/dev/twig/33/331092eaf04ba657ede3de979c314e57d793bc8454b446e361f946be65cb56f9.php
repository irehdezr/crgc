<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_d07c564b565979acbaa24a34fb0cc4d2c61173ab64a91418e392fa1337c8dda9 extends Twig_Template
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
        $__internal_cfd5d3b33707fa2581329959ae3cb88f83f45b46f90510da16b935af43f5bed4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfd5d3b33707fa2581329959ae3cb88f83f45b46f90510da16b935af43f5bed4->enter($__internal_cfd5d3b33707fa2581329959ae3cb88f83f45b46f90510da16b935af43f5bed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_cea565d53c1f35c15df4c79b88d3aad6853dfc1c77a03002bc719469d0c3de3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cea565d53c1f35c15df4c79b88d3aad6853dfc1c77a03002bc719469d0c3de3a->enter($__internal_cea565d53c1f35c15df4c79b88d3aad6853dfc1c77a03002bc719469d0c3de3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_cfd5d3b33707fa2581329959ae3cb88f83f45b46f90510da16b935af43f5bed4->leave($__internal_cfd5d3b33707fa2581329959ae3cb88f83f45b46f90510da16b935af43f5bed4_prof);

        
        $__internal_cea565d53c1f35c15df4c79b88d3aad6853dfc1c77a03002bc719469d0c3de3a->leave($__internal_cea565d53c1f35c15df4c79b88d3aad6853dfc1c77a03002bc719469d0c3de3a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
