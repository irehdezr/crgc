<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_5e8faaa126f2864e157ba99306315463cbe358308636c1ef0c2fbddad6feadcf extends Twig_Template
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
        $__internal_9c7613b67216b8af60613aea75318b11327d304a996b278bec4a69baf5f2c7e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c7613b67216b8af60613aea75318b11327d304a996b278bec4a69baf5f2c7e6->enter($__internal_9c7613b67216b8af60613aea75318b11327d304a996b278bec4a69baf5f2c7e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_e7a09ac830435a2cc216842799aaf169111679f83d46a31bc7cad4514c6d230d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7a09ac830435a2cc216842799aaf169111679f83d46a31bc7cad4514c6d230d->enter($__internal_e7a09ac830435a2cc216842799aaf169111679f83d46a31bc7cad4514c6d230d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_9c7613b67216b8af60613aea75318b11327d304a996b278bec4a69baf5f2c7e6->leave($__internal_9c7613b67216b8af60613aea75318b11327d304a996b278bec4a69baf5f2c7e6_prof);

        
        $__internal_e7a09ac830435a2cc216842799aaf169111679f83d46a31bc7cad4514c6d230d->leave($__internal_e7a09ac830435a2cc216842799aaf169111679f83d46a31bc7cad4514c6d230d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
