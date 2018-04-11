<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_081fb6751b4cba40b99644ee5a2be5b7529af55b3a800f071fc9f0bf595837c0 extends Twig_Template
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
        $__internal_570d0df8e32ae84aa8974b06999bfa4d901f18c5aa0e4f890e9881c0739d22b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_570d0df8e32ae84aa8974b06999bfa4d901f18c5aa0e4f890e9881c0739d22b3->enter($__internal_570d0df8e32ae84aa8974b06999bfa4d901f18c5aa0e4f890e9881c0739d22b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_55b630cd9b2b1019ec49261aaaf1585f48b1c3edcd001adfc5bb95d0293ef502 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55b630cd9b2b1019ec49261aaaf1585f48b1c3edcd001adfc5bb95d0293ef502->enter($__internal_55b630cd9b2b1019ec49261aaaf1585f48b1c3edcd001adfc5bb95d0293ef502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_570d0df8e32ae84aa8974b06999bfa4d901f18c5aa0e4f890e9881c0739d22b3->leave($__internal_570d0df8e32ae84aa8974b06999bfa4d901f18c5aa0e4f890e9881c0739d22b3_prof);

        
        $__internal_55b630cd9b2b1019ec49261aaaf1585f48b1c3edcd001adfc5bb95d0293ef502->leave($__internal_55b630cd9b2b1019ec49261aaaf1585f48b1c3edcd001adfc5bb95d0293ef502_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
