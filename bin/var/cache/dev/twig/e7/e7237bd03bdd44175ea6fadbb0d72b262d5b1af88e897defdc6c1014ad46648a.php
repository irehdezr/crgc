<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_2f6c3fe84252b8d4fc475d76046577efa83d8ad19a9d0d6100af221fd6466e4d extends Twig_Template
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
        $__internal_7b469782f6a4068b90c8ca4a423b1f96a2f7f8ce2dc5b08e1c8e394a823fc952 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b469782f6a4068b90c8ca4a423b1f96a2f7f8ce2dc5b08e1c8e394a823fc952->enter($__internal_7b469782f6a4068b90c8ca4a423b1f96a2f7f8ce2dc5b08e1c8e394a823fc952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_82248056867b4670746ecc61a714e6fec54dedd48869d6a3a01e53818bd1c978 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82248056867b4670746ecc61a714e6fec54dedd48869d6a3a01e53818bd1c978->enter($__internal_82248056867b4670746ecc61a714e6fec54dedd48869d6a3a01e53818bd1c978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_7b469782f6a4068b90c8ca4a423b1f96a2f7f8ce2dc5b08e1c8e394a823fc952->leave($__internal_7b469782f6a4068b90c8ca4a423b1f96a2f7f8ce2dc5b08e1c8e394a823fc952_prof);

        
        $__internal_82248056867b4670746ecc61a714e6fec54dedd48869d6a3a01e53818bd1c978->leave($__internal_82248056867b4670746ecc61a714e6fec54dedd48869d6a3a01e53818bd1c978_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
