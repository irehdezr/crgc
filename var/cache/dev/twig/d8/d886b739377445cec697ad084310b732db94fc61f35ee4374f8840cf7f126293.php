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
        $__internal_585ffd0e6f7d3176e43d3cbbe544782f73127a820a9de04b0c57687b8372519c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_585ffd0e6f7d3176e43d3cbbe544782f73127a820a9de04b0c57687b8372519c->enter($__internal_585ffd0e6f7d3176e43d3cbbe544782f73127a820a9de04b0c57687b8372519c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_10ae64a1ebfff4a297d5df6aec1c2d084abd78cc5a4fd32f82b73470c0463e8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10ae64a1ebfff4a297d5df6aec1c2d084abd78cc5a4fd32f82b73470c0463e8b->enter($__internal_10ae64a1ebfff4a297d5df6aec1c2d084abd78cc5a4fd32f82b73470c0463e8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_585ffd0e6f7d3176e43d3cbbe544782f73127a820a9de04b0c57687b8372519c->leave($__internal_585ffd0e6f7d3176e43d3cbbe544782f73127a820a9de04b0c57687b8372519c_prof);

        
        $__internal_10ae64a1ebfff4a297d5df6aec1c2d084abd78cc5a4fd32f82b73470c0463e8b->leave($__internal_10ae64a1ebfff4a297d5df6aec1c2d084abd78cc5a4fd32f82b73470c0463e8b_prof);

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
