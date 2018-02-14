<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_bc85dbe287b7a47d18b8ceed3d59975728cffeb13976e901a847a675e22756a4 extends Twig_Template
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
        $__internal_6f8d9a5e4eb674a069ca3bbbadaa1aea7cbf4a8a15eeddd362242ccd36fe0494 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f8d9a5e4eb674a069ca3bbbadaa1aea7cbf4a8a15eeddd362242ccd36fe0494->enter($__internal_6f8d9a5e4eb674a069ca3bbbadaa1aea7cbf4a8a15eeddd362242ccd36fe0494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_dc57bd2efa2f134e1df4dd6127d883c7942dd9a4d7578e51d16bdca75188116c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc57bd2efa2f134e1df4dd6127d883c7942dd9a4d7578e51d16bdca75188116c->enter($__internal_dc57bd2efa2f134e1df4dd6127d883c7942dd9a4d7578e51d16bdca75188116c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_6f8d9a5e4eb674a069ca3bbbadaa1aea7cbf4a8a15eeddd362242ccd36fe0494->leave($__internal_6f8d9a5e4eb674a069ca3bbbadaa1aea7cbf4a8a15eeddd362242ccd36fe0494_prof);

        
        $__internal_dc57bd2efa2f134e1df4dd6127d883c7942dd9a4d7578e51d16bdca75188116c->leave($__internal_dc57bd2efa2f134e1df4dd6127d883c7942dd9a4d7578e51d16bdca75188116c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
