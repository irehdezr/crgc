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
        $__internal_61531192f70ada6a708454720bcf0af64d4b24cb66b76ed9adcad11522fc11d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61531192f70ada6a708454720bcf0af64d4b24cb66b76ed9adcad11522fc11d7->enter($__internal_61531192f70ada6a708454720bcf0af64d4b24cb66b76ed9adcad11522fc11d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_c2363697e712c172b8fa4e7424a567a5f086ba67b6521bcb5ca3bdfb6239a1f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2363697e712c172b8fa4e7424a567a5f086ba67b6521bcb5ca3bdfb6239a1f8->enter($__internal_c2363697e712c172b8fa4e7424a567a5f086ba67b6521bcb5ca3bdfb6239a1f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_61531192f70ada6a708454720bcf0af64d4b24cb66b76ed9adcad11522fc11d7->leave($__internal_61531192f70ada6a708454720bcf0af64d4b24cb66b76ed9adcad11522fc11d7_prof);

        
        $__internal_c2363697e712c172b8fa4e7424a567a5f086ba67b6521bcb5ca3bdfb6239a1f8->leave($__internal_c2363697e712c172b8fa4e7424a567a5f086ba67b6521bcb5ca3bdfb6239a1f8_prof);

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
