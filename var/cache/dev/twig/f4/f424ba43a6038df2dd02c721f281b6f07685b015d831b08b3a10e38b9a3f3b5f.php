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
        $__internal_a4ac4e6fc9bf5a6388a3188a34382caa14badf7ced4628cfbe03a9ea8a1cb57d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4ac4e6fc9bf5a6388a3188a34382caa14badf7ced4628cfbe03a9ea8a1cb57d->enter($__internal_a4ac4e6fc9bf5a6388a3188a34382caa14badf7ced4628cfbe03a9ea8a1cb57d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_3db8d71abb9451941e768d8f898983b3f410991d296c693068f3a6d9638bece9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3db8d71abb9451941e768d8f898983b3f410991d296c693068f3a6d9638bece9->enter($__internal_3db8d71abb9451941e768d8f898983b3f410991d296c693068f3a6d9638bece9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_a4ac4e6fc9bf5a6388a3188a34382caa14badf7ced4628cfbe03a9ea8a1cb57d->leave($__internal_a4ac4e6fc9bf5a6388a3188a34382caa14badf7ced4628cfbe03a9ea8a1cb57d_prof);

        
        $__internal_3db8d71abb9451941e768d8f898983b3f410991d296c693068f3a6d9638bece9->leave($__internal_3db8d71abb9451941e768d8f898983b3f410991d296c693068f3a6d9638bece9_prof);

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
