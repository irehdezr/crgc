<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_c72ec379d732a49712764c9f93b4c049e78c9726eb0aef8e97e4a0760ace530e extends Twig_Template
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
        $__internal_943bc1f53ea95962dbca3f46550552f8c3d4389c510bcb4b8f98a85cb30b255c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_943bc1f53ea95962dbca3f46550552f8c3d4389c510bcb4b8f98a85cb30b255c->enter($__internal_943bc1f53ea95962dbca3f46550552f8c3d4389c510bcb4b8f98a85cb30b255c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_0d09b181680f2dc2e466db249ade1d608cad7cf19da21a65de9200a5955eac57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d09b181680f2dc2e466db249ade1d608cad7cf19da21a65de9200a5955eac57->enter($__internal_0d09b181680f2dc2e466db249ade1d608cad7cf19da21a65de9200a5955eac57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_943bc1f53ea95962dbca3f46550552f8c3d4389c510bcb4b8f98a85cb30b255c->leave($__internal_943bc1f53ea95962dbca3f46550552f8c3d4389c510bcb4b8f98a85cb30b255c_prof);

        
        $__internal_0d09b181680f2dc2e466db249ade1d608cad7cf19da21a65de9200a5955eac57->leave($__internal_0d09b181680f2dc2e466db249ade1d608cad7cf19da21a65de9200a5955eac57_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
