<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_28c3ed7d61cdb3974952a3ecaa2fb9dee7d4160d2158716da36e92c22a27c811 extends Twig_Template
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
        $__internal_3bb055847a909f5554c8061a0dcacb3c61ef21771b6bc5eae1f3a746d57082c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bb055847a909f5554c8061a0dcacb3c61ef21771b6bc5eae1f3a746d57082c6->enter($__internal_3bb055847a909f5554c8061a0dcacb3c61ef21771b6bc5eae1f3a746d57082c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_9b4cba6866f416328fd1c1bec074b8d0910353dcc82086c3209d77afdfe23132 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b4cba6866f416328fd1c1bec074b8d0910353dcc82086c3209d77afdfe23132->enter($__internal_9b4cba6866f416328fd1c1bec074b8d0910353dcc82086c3209d77afdfe23132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_3bb055847a909f5554c8061a0dcacb3c61ef21771b6bc5eae1f3a746d57082c6->leave($__internal_3bb055847a909f5554c8061a0dcacb3c61ef21771b6bc5eae1f3a746d57082c6_prof);

        
        $__internal_9b4cba6866f416328fd1c1bec074b8d0910353dcc82086c3209d77afdfe23132->leave($__internal_9b4cba6866f416328fd1c1bec074b8d0910353dcc82086c3209d77afdfe23132_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
