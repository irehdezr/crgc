<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_f976a3a1c30d141d7891a5e3050594a9b07f887674d665aa10d161d5efb342fd extends Twig_Template
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
        $__internal_2c1d0e0a48b618788d72b03e38a64fa52bb3f74637b52ddd02894857a6693f17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c1d0e0a48b618788d72b03e38a64fa52bb3f74637b52ddd02894857a6693f17->enter($__internal_2c1d0e0a48b618788d72b03e38a64fa52bb3f74637b52ddd02894857a6693f17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_4ea2d24029416381ac15bb1e51ccdf81d2057a8dc13979612f7823c19409acff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ea2d24029416381ac15bb1e51ccdf81d2057a8dc13979612f7823c19409acff->enter($__internal_4ea2d24029416381ac15bb1e51ccdf81d2057a8dc13979612f7823c19409acff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_2c1d0e0a48b618788d72b03e38a64fa52bb3f74637b52ddd02894857a6693f17->leave($__internal_2c1d0e0a48b618788d72b03e38a64fa52bb3f74637b52ddd02894857a6693f17_prof);

        
        $__internal_4ea2d24029416381ac15bb1e51ccdf81d2057a8dc13979612f7823c19409acff->leave($__internal_4ea2d24029416381ac15bb1e51ccdf81d2057a8dc13979612f7823c19409acff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
