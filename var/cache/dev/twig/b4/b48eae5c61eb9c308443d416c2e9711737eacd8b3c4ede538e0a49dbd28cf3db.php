<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_f04bc7bfa96601b643a5391b948d808307d9520f78fc25097753e793c6279396 extends Twig_Template
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
        $__internal_03b4cc87442f5b723a7575875280ab50fc4af9862d15a22a8fe37de71fbb15fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03b4cc87442f5b723a7575875280ab50fc4af9862d15a22a8fe37de71fbb15fa->enter($__internal_03b4cc87442f5b723a7575875280ab50fc4af9862d15a22a8fe37de71fbb15fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_61a26c709ce6d1bf581719abd1ec4d641be43eeb349930b228bd8dcc9dd1b35e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61a26c709ce6d1bf581719abd1ec4d641be43eeb349930b228bd8dcc9dd1b35e->enter($__internal_61a26c709ce6d1bf581719abd1ec4d641be43eeb349930b228bd8dcc9dd1b35e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_03b4cc87442f5b723a7575875280ab50fc4af9862d15a22a8fe37de71fbb15fa->leave($__internal_03b4cc87442f5b723a7575875280ab50fc4af9862d15a22a8fe37de71fbb15fa_prof);

        
        $__internal_61a26c709ce6d1bf581719abd1ec4d641be43eeb349930b228bd8dcc9dd1b35e->leave($__internal_61a26c709ce6d1bf581719abd1ec4d641be43eeb349930b228bd8dcc9dd1b35e_prof);

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
", "@Framework/FormTable/form_row.html.php", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
