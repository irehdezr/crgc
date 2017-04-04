<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_609b24b10c2c012deac938f1e6f5a8ff3a2894db59cad1890a94b3d30a13e4aa extends Twig_Template
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
        $__internal_bd639bb5f2b0302d7d4e4305554356031fa3603d18090a9166285fd8521aafea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd639bb5f2b0302d7d4e4305554356031fa3603d18090a9166285fd8521aafea->enter($__internal_bd639bb5f2b0302d7d4e4305554356031fa3603d18090a9166285fd8521aafea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_2672b139f479b7716b142204033751e7ca4d5d949fbb04533e7d0679ec0b2893 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2672b139f479b7716b142204033751e7ca4d5d949fbb04533e7d0679ec0b2893->enter($__internal_2672b139f479b7716b142204033751e7ca4d5d949fbb04533e7d0679ec0b2893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_bd639bb5f2b0302d7d4e4305554356031fa3603d18090a9166285fd8521aafea->leave($__internal_bd639bb5f2b0302d7d4e4305554356031fa3603d18090a9166285fd8521aafea_prof);

        
        $__internal_2672b139f479b7716b142204033751e7ca4d5d949fbb04533e7d0679ec0b2893->leave($__internal_2672b139f479b7716b142204033751e7ca4d5d949fbb04533e7d0679ec0b2893_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
