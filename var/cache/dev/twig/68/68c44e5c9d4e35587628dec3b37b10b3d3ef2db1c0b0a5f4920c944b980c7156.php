<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_1aab9efe2e43824a97a78ae02852bd1ba795cce4e8bda1f69cc54c76c54a5dd5 extends Twig_Template
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
        $__internal_7b45988b4303b5c031aca18037369f25beaf97863794f074443957266e45ebbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b45988b4303b5c031aca18037369f25beaf97863794f074443957266e45ebbb->enter($__internal_7b45988b4303b5c031aca18037369f25beaf97863794f074443957266e45ebbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_b8ba4bfa1cfa8dd693ab68e74eee7496882cb30bfbcdb602aa440e872a29b9e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8ba4bfa1cfa8dd693ab68e74eee7496882cb30bfbcdb602aa440e872a29b9e4->enter($__internal_b8ba4bfa1cfa8dd693ab68e74eee7496882cb30bfbcdb602aa440e872a29b9e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_7b45988b4303b5c031aca18037369f25beaf97863794f074443957266e45ebbb->leave($__internal_7b45988b4303b5c031aca18037369f25beaf97863794f074443957266e45ebbb_prof);

        
        $__internal_b8ba4bfa1cfa8dd693ab68e74eee7496882cb30bfbcdb602aa440e872a29b9e4->leave($__internal_b8ba4bfa1cfa8dd693ab68e74eee7496882cb30bfbcdb602aa440e872a29b9e4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
