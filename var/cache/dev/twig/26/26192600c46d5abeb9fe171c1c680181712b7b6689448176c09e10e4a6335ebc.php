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
        $__internal_ed19e9a8df4ae4a3c1c16934f2a297c68d0f6b39bddb290cca4441cd6d45c002 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed19e9a8df4ae4a3c1c16934f2a297c68d0f6b39bddb290cca4441cd6d45c002->enter($__internal_ed19e9a8df4ae4a3c1c16934f2a297c68d0f6b39bddb290cca4441cd6d45c002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_74937c0a47dc471f3a9f8af54bf06c9bfd106281fb2d928fc716f8e182d00cef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74937c0a47dc471f3a9f8af54bf06c9bfd106281fb2d928fc716f8e182d00cef->enter($__internal_74937c0a47dc471f3a9f8af54bf06c9bfd106281fb2d928fc716f8e182d00cef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_ed19e9a8df4ae4a3c1c16934f2a297c68d0f6b39bddb290cca4441cd6d45c002->leave($__internal_ed19e9a8df4ae4a3c1c16934f2a297c68d0f6b39bddb290cca4441cd6d45c002_prof);

        
        $__internal_74937c0a47dc471f3a9f8af54bf06c9bfd106281fb2d928fc716f8e182d00cef->leave($__internal_74937c0a47dc471f3a9f8af54bf06c9bfd106281fb2d928fc716f8e182d00cef_prof);

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
