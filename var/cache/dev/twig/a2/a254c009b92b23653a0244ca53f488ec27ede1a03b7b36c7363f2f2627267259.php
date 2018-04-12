<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_39f63b2e10050189a92a97c8d4f44cfd3b4d57bbc138bba692b6a642036652ba extends Twig_Template
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
        $__internal_53f30401889fc386cc2c0e9dcd9fcab74cf1509855fabc3004062318369b7045 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53f30401889fc386cc2c0e9dcd9fcab74cf1509855fabc3004062318369b7045->enter($__internal_53f30401889fc386cc2c0e9dcd9fcab74cf1509855fabc3004062318369b7045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_97879365032e5271c9d37fca481068ecae2bf5a6c88168a9c1aaf13fb3817f0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97879365032e5271c9d37fca481068ecae2bf5a6c88168a9c1aaf13fb3817f0e->enter($__internal_97879365032e5271c9d37fca481068ecae2bf5a6c88168a9c1aaf13fb3817f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_53f30401889fc386cc2c0e9dcd9fcab74cf1509855fabc3004062318369b7045->leave($__internal_53f30401889fc386cc2c0e9dcd9fcab74cf1509855fabc3004062318369b7045_prof);

        
        $__internal_97879365032e5271c9d37fca481068ecae2bf5a6c88168a9c1aaf13fb3817f0e->leave($__internal_97879365032e5271c9d37fca481068ecae2bf5a6c88168a9c1aaf13fb3817f0e_prof);

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
", "@Framework/Form/url_widget.html.php", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
