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
        $__internal_1f86c769aad17eb2d2b2fb841514779eb451941e1c6be7099fb6018b0a3de575 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f86c769aad17eb2d2b2fb841514779eb451941e1c6be7099fb6018b0a3de575->enter($__internal_1f86c769aad17eb2d2b2fb841514779eb451941e1c6be7099fb6018b0a3de575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_443f7167eac2152b4c61b96c4ecd9ae03140d0c88b4ad6d06b1c31c3cbe40c2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_443f7167eac2152b4c61b96c4ecd9ae03140d0c88b4ad6d06b1c31c3cbe40c2a->enter($__internal_443f7167eac2152b4c61b96c4ecd9ae03140d0c88b4ad6d06b1c31c3cbe40c2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_1f86c769aad17eb2d2b2fb841514779eb451941e1c6be7099fb6018b0a3de575->leave($__internal_1f86c769aad17eb2d2b2fb841514779eb451941e1c6be7099fb6018b0a3de575_prof);

        
        $__internal_443f7167eac2152b4c61b96c4ecd9ae03140d0c88b4ad6d06b1c31c3cbe40c2a->leave($__internal_443f7167eac2152b4c61b96c4ecd9ae03140d0c88b4ad6d06b1c31c3cbe40c2a_prof);

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
