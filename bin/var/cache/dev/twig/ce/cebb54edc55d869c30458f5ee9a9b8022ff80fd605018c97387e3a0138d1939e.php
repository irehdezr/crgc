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
        $__internal_03d7c4feaa1f3db64a9e9822798f75b654565469d547826af0b1395bcccc7216 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03d7c4feaa1f3db64a9e9822798f75b654565469d547826af0b1395bcccc7216->enter($__internal_03d7c4feaa1f3db64a9e9822798f75b654565469d547826af0b1395bcccc7216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_3ed1e1d48441d676769c65e1723079c0e21301eda9b2278d83ef99ecd18eecfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ed1e1d48441d676769c65e1723079c0e21301eda9b2278d83ef99ecd18eecfc->enter($__internal_3ed1e1d48441d676769c65e1723079c0e21301eda9b2278d83ef99ecd18eecfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_03d7c4feaa1f3db64a9e9822798f75b654565469d547826af0b1395bcccc7216->leave($__internal_03d7c4feaa1f3db64a9e9822798f75b654565469d547826af0b1395bcccc7216_prof);

        
        $__internal_3ed1e1d48441d676769c65e1723079c0e21301eda9b2278d83ef99ecd18eecfc->leave($__internal_3ed1e1d48441d676769c65e1723079c0e21301eda9b2278d83ef99ecd18eecfc_prof);

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
