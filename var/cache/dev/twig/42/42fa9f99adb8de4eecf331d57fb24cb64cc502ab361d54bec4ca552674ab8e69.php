<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_17eb30dbfd0784bfd88e332211c1ebafb1386a0d7e5ea1c5af714117f1adbe2f extends Twig_Template
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
        $__internal_8428c6fe4fe5ac58ba5836f0d34b785ae8412ec9ee4aef8a66b636f71366ad2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8428c6fe4fe5ac58ba5836f0d34b785ae8412ec9ee4aef8a66b636f71366ad2c->enter($__internal_8428c6fe4fe5ac58ba5836f0d34b785ae8412ec9ee4aef8a66b636f71366ad2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_5341c13d62b242553ba96c05a4f6569a2b5889f3180211e35b6064ca8fc20376 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5341c13d62b242553ba96c05a4f6569a2b5889f3180211e35b6064ca8fc20376->enter($__internal_5341c13d62b242553ba96c05a4f6569a2b5889f3180211e35b6064ca8fc20376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_8428c6fe4fe5ac58ba5836f0d34b785ae8412ec9ee4aef8a66b636f71366ad2c->leave($__internal_8428c6fe4fe5ac58ba5836f0d34b785ae8412ec9ee4aef8a66b636f71366ad2c_prof);

        
        $__internal_5341c13d62b242553ba96c05a4f6569a2b5889f3180211e35b6064ca8fc20376->leave($__internal_5341c13d62b242553ba96c05a4f6569a2b5889f3180211e35b6064ca8fc20376_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
