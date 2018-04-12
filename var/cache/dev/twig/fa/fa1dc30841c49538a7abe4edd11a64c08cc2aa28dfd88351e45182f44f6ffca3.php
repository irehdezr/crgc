<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_b8ed3a41714b21a4e0131f21baaf9720985fa471469242f88568aea117e021a7 extends Twig_Template
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
        $__internal_417d71ee6994bbeffef9d1752a0f89a10045a6e1668213cd6a037a6433957de2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_417d71ee6994bbeffef9d1752a0f89a10045a6e1668213cd6a037a6433957de2->enter($__internal_417d71ee6994bbeffef9d1752a0f89a10045a6e1668213cd6a037a6433957de2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_5758fe9a755f833064cb385960c476b44b2a4df90bf83c9fa82ea0964b82366e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5758fe9a755f833064cb385960c476b44b2a4df90bf83c9fa82ea0964b82366e->enter($__internal_5758fe9a755f833064cb385960c476b44b2a4df90bf83c9fa82ea0964b82366e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_417d71ee6994bbeffef9d1752a0f89a10045a6e1668213cd6a037a6433957de2->leave($__internal_417d71ee6994bbeffef9d1752a0f89a10045a6e1668213cd6a037a6433957de2_prof);

        
        $__internal_5758fe9a755f833064cb385960c476b44b2a4df90bf83c9fa82ea0964b82366e->leave($__internal_5758fe9a755f833064cb385960c476b44b2a4df90bf83c9fa82ea0964b82366e_prof);

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
", "@Framework/FormTable/button_row.html.php", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
