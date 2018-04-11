<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_70c353190e72902b62ea1d06afce8eca930274e91a497455814b96b841935e40 extends Twig_Template
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
        $__internal_5b2bd42a3e2c67dae4c8e2fc53f3a698d6390b0ba3c78fdd72df9cf954f1991e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b2bd42a3e2c67dae4c8e2fc53f3a698d6390b0ba3c78fdd72df9cf954f1991e->enter($__internal_5b2bd42a3e2c67dae4c8e2fc53f3a698d6390b0ba3c78fdd72df9cf954f1991e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_c3f0a5fbe42026a7c6bb6d85c56e6be0a1bfe4ac3bba5496fc430b28d3aec6d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3f0a5fbe42026a7c6bb6d85c56e6be0a1bfe4ac3bba5496fc430b28d3aec6d1->enter($__internal_c3f0a5fbe42026a7c6bb6d85c56e6be0a1bfe4ac3bba5496fc430b28d3aec6d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_5b2bd42a3e2c67dae4c8e2fc53f3a698d6390b0ba3c78fdd72df9cf954f1991e->leave($__internal_5b2bd42a3e2c67dae4c8e2fc53f3a698d6390b0ba3c78fdd72df9cf954f1991e_prof);

        
        $__internal_c3f0a5fbe42026a7c6bb6d85c56e6be0a1bfe4ac3bba5496fc430b28d3aec6d1->leave($__internal_c3f0a5fbe42026a7c6bb6d85c56e6be0a1bfe4ac3bba5496fc430b28d3aec6d1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
