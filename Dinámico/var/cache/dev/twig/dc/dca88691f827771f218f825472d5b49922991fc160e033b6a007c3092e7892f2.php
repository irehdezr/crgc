<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_f437b0a9e7b1e2bf188f14c5ac799b3b08b5c2b0d5444d784f3b0a94fa3351d3 extends Twig_Template
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
        $__internal_878b625f1d04874071c6b832f3ba7031b64f5b7974a6a4dd4bd338e0162734d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_878b625f1d04874071c6b832f3ba7031b64f5b7974a6a4dd4bd338e0162734d5->enter($__internal_878b625f1d04874071c6b832f3ba7031b64f5b7974a6a4dd4bd338e0162734d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_a667ab47737dd305405b5c2b17a8f7c7b979fc9c8db8603a05b0b09280605d86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a667ab47737dd305405b5c2b17a8f7c7b979fc9c8db8603a05b0b09280605d86->enter($__internal_a667ab47737dd305405b5c2b17a8f7c7b979fc9c8db8603a05b0b09280605d86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_878b625f1d04874071c6b832f3ba7031b64f5b7974a6a4dd4bd338e0162734d5->leave($__internal_878b625f1d04874071c6b832f3ba7031b64f5b7974a6a4dd4bd338e0162734d5_prof);

        
        $__internal_a667ab47737dd305405b5c2b17a8f7c7b979fc9c8db8603a05b0b09280605d86->leave($__internal_a667ab47737dd305405b5c2b17a8f7c7b979fc9c8db8603a05b0b09280605d86_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
