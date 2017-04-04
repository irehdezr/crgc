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
        $__internal_8038cf343979666fa589d564318e3069c47be72a5ada6bbb14fe35f77df2c98e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8038cf343979666fa589d564318e3069c47be72a5ada6bbb14fe35f77df2c98e->enter($__internal_8038cf343979666fa589d564318e3069c47be72a5ada6bbb14fe35f77df2c98e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_4ef6373e8a57c52394c3fe3d30a97f0cbdcc443ec0e4831eca0966e985fbb7a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ef6373e8a57c52394c3fe3d30a97f0cbdcc443ec0e4831eca0966e985fbb7a3->enter($__internal_4ef6373e8a57c52394c3fe3d30a97f0cbdcc443ec0e4831eca0966e985fbb7a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_8038cf343979666fa589d564318e3069c47be72a5ada6bbb14fe35f77df2c98e->leave($__internal_8038cf343979666fa589d564318e3069c47be72a5ada6bbb14fe35f77df2c98e_prof);

        
        $__internal_4ef6373e8a57c52394c3fe3d30a97f0cbdcc443ec0e4831eca0966e985fbb7a3->leave($__internal_4ef6373e8a57c52394c3fe3d30a97f0cbdcc443ec0e4831eca0966e985fbb7a3_prof);

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
