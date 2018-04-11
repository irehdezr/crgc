<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_0061868cedd8822c984c590bf3cd8e1bce21e7cd6880dc9da65985b64580da42 extends Twig_Template
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
        $__internal_7cd864c875b99c81ddb243bc35d85cb6f5916f887d38af1467ba596581e22fe5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cd864c875b99c81ddb243bc35d85cb6f5916f887d38af1467ba596581e22fe5->enter($__internal_7cd864c875b99c81ddb243bc35d85cb6f5916f887d38af1467ba596581e22fe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_51db647842256b6a737da5841633d4fa1ea0ab3052cddb59bbba285071c31183 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51db647842256b6a737da5841633d4fa1ea0ab3052cddb59bbba285071c31183->enter($__internal_51db647842256b6a737da5841633d4fa1ea0ab3052cddb59bbba285071c31183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_7cd864c875b99c81ddb243bc35d85cb6f5916f887d38af1467ba596581e22fe5->leave($__internal_7cd864c875b99c81ddb243bc35d85cb6f5916f887d38af1467ba596581e22fe5_prof);

        
        $__internal_51db647842256b6a737da5841633d4fa1ea0ab3052cddb59bbba285071c31183->leave($__internal_51db647842256b6a737da5841633d4fa1ea0ab3052cddb59bbba285071c31183_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
