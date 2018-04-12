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
        $__internal_515351ca79ddb5ad322716df96b3db6f4dc3bb06add4bc6c9dc9f3bccda55ec3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_515351ca79ddb5ad322716df96b3db6f4dc3bb06add4bc6c9dc9f3bccda55ec3->enter($__internal_515351ca79ddb5ad322716df96b3db6f4dc3bb06add4bc6c9dc9f3bccda55ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_89e59285fe1783513ff28f2354dfc2d4d188104f6cc43e9bf45b6c2edd6c4ac3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89e59285fe1783513ff28f2354dfc2d4d188104f6cc43e9bf45b6c2edd6c4ac3->enter($__internal_89e59285fe1783513ff28f2354dfc2d4d188104f6cc43e9bf45b6c2edd6c4ac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_515351ca79ddb5ad322716df96b3db6f4dc3bb06add4bc6c9dc9f3bccda55ec3->leave($__internal_515351ca79ddb5ad322716df96b3db6f4dc3bb06add4bc6c9dc9f3bccda55ec3_prof);

        
        $__internal_89e59285fe1783513ff28f2354dfc2d4d188104f6cc43e9bf45b6c2edd6c4ac3->leave($__internal_89e59285fe1783513ff28f2354dfc2d4d188104f6cc43e9bf45b6c2edd6c4ac3_prof);

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
