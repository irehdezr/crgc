<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_6bfc38df2dd25ee85b6800886f49dc7435f75ec8a9afc2ee0b3bcbdc02eb6bfd extends Twig_Template
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
        $__internal_3ff3fe8e2a9c524b13988a2ca86cff3d13b4b7751e2bb9d5537263fedf01f1f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ff3fe8e2a9c524b13988a2ca86cff3d13b4b7751e2bb9d5537263fedf01f1f5->enter($__internal_3ff3fe8e2a9c524b13988a2ca86cff3d13b4b7751e2bb9d5537263fedf01f1f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_bf500628af24349b3f28b3d58f2c6c48c7c3376adda72b68763a22faf02118d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf500628af24349b3f28b3d58f2c6c48c7c3376adda72b68763a22faf02118d9->enter($__internal_bf500628af24349b3f28b3d58f2c6c48c7c3376adda72b68763a22faf02118d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_3ff3fe8e2a9c524b13988a2ca86cff3d13b4b7751e2bb9d5537263fedf01f1f5->leave($__internal_3ff3fe8e2a9c524b13988a2ca86cff3d13b4b7751e2bb9d5537263fedf01f1f5_prof);

        
        $__internal_bf500628af24349b3f28b3d58f2c6c48c7c3376adda72b68763a22faf02118d9->leave($__internal_bf500628af24349b3f28b3d58f2c6c48c7c3376adda72b68763a22faf02118d9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
