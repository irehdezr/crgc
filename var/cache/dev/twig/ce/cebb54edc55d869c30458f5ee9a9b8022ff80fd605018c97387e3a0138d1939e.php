<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_325fa080008627458e9e47f55168a39c57871c2719e6fa9cbf1ae6cd1ff1b638 extends Twig_Template
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
        $__internal_038841e523b9e5b632fd27e9c77014c07ba0b8e507520f28bb503edc57b12e87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_038841e523b9e5b632fd27e9c77014c07ba0b8e507520f28bb503edc57b12e87->enter($__internal_038841e523b9e5b632fd27e9c77014c07ba0b8e507520f28bb503edc57b12e87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_be2cf59463368fce55cc2abd21d63d31d3bf3c5ff25d60f7ff09aa55de6c92f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be2cf59463368fce55cc2abd21d63d31d3bf3c5ff25d60f7ff09aa55de6c92f0->enter($__internal_be2cf59463368fce55cc2abd21d63d31d3bf3c5ff25d60f7ff09aa55de6c92f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_038841e523b9e5b632fd27e9c77014c07ba0b8e507520f28bb503edc57b12e87->leave($__internal_038841e523b9e5b632fd27e9c77014c07ba0b8e507520f28bb503edc57b12e87_prof);

        
        $__internal_be2cf59463368fce55cc2abd21d63d31d3bf3c5ff25d60f7ff09aa55de6c92f0->leave($__internal_be2cf59463368fce55cc2abd21d63d31d3bf3c5ff25d60f7ff09aa55de6c92f0_prof);

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
", "@Framework/Form/container_attributes.html.php", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
