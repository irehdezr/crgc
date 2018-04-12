<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_18fbcc66b7b0f39ea411fc8890a24006a8436544564e8957adcddf0ad4a101c1 extends Twig_Template
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
        $__internal_c18af6f2bb74f0aac14d208ab0a066e1e3c24ecd09103d965ea0f88aa63bf01d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c18af6f2bb74f0aac14d208ab0a066e1e3c24ecd09103d965ea0f88aa63bf01d->enter($__internal_c18af6f2bb74f0aac14d208ab0a066e1e3c24ecd09103d965ea0f88aa63bf01d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_0b6c89986f781466ae84df4eb4d66ec69091a45bddd07648b51c12431b6cbc03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b6c89986f781466ae84df4eb4d66ec69091a45bddd07648b51c12431b6cbc03->enter($__internal_0b6c89986f781466ae84df4eb4d66ec69091a45bddd07648b51c12431b6cbc03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_c18af6f2bb74f0aac14d208ab0a066e1e3c24ecd09103d965ea0f88aa63bf01d->leave($__internal_c18af6f2bb74f0aac14d208ab0a066e1e3c24ecd09103d965ea0f88aa63bf01d_prof);

        
        $__internal_0b6c89986f781466ae84df4eb4d66ec69091a45bddd07648b51c12431b6cbc03->leave($__internal_0b6c89986f781466ae84df4eb4d66ec69091a45bddd07648b51c12431b6cbc03_prof);

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
", "@Framework/FormTable/hidden_row.html.php", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
