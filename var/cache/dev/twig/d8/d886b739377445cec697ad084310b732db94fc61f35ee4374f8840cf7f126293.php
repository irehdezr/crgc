<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_a2480e85cd03a09c0f36d33910d86be9c3a7555b3657cb51e7ce79afc0238d45 extends Twig_Template
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
        $__internal_0495dac3c2e7e7422d78029990370e5806849926d4c1ad1fb61c79400749fd9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0495dac3c2e7e7422d78029990370e5806849926d4c1ad1fb61c79400749fd9c->enter($__internal_0495dac3c2e7e7422d78029990370e5806849926d4c1ad1fb61c79400749fd9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_afc16f749612ae3394421535336edf7bc8da3e3da498f101a38f702daf5c08c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afc16f749612ae3394421535336edf7bc8da3e3da498f101a38f702daf5c08c9->enter($__internal_afc16f749612ae3394421535336edf7bc8da3e3da498f101a38f702daf5c08c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_0495dac3c2e7e7422d78029990370e5806849926d4c1ad1fb61c79400749fd9c->leave($__internal_0495dac3c2e7e7422d78029990370e5806849926d4c1ad1fb61c79400749fd9c_prof);

        
        $__internal_afc16f749612ae3394421535336edf7bc8da3e3da498f101a38f702daf5c08c9->leave($__internal_afc16f749612ae3394421535336edf7bc8da3e3da498f101a38f702daf5c08c9_prof);

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
", "@Framework/Form/search_widget.html.php", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
