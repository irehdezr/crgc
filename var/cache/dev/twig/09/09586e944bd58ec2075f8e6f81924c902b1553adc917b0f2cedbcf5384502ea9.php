<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_4b7812f5265abe0da2f8a46531a2a56c28c6cbb2836c94742bf378971040a460 extends Twig_Template
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
        $__internal_9edbcfc779bf66d088201a7ada027313adf32f2a4816195235d4d47c716fad2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9edbcfc779bf66d088201a7ada027313adf32f2a4816195235d4d47c716fad2f->enter($__internal_9edbcfc779bf66d088201a7ada027313adf32f2a4816195235d4d47c716fad2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_2c26a511e27bb658647f0b85fac79937361395b475ba81db1bc8d1857661164d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c26a511e27bb658647f0b85fac79937361395b475ba81db1bc8d1857661164d->enter($__internal_2c26a511e27bb658647f0b85fac79937361395b475ba81db1bc8d1857661164d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_9edbcfc779bf66d088201a7ada027313adf32f2a4816195235d4d47c716fad2f->leave($__internal_9edbcfc779bf66d088201a7ada027313adf32f2a4816195235d4d47c716fad2f_prof);

        
        $__internal_2c26a511e27bb658647f0b85fac79937361395b475ba81db1bc8d1857661164d->leave($__internal_2c26a511e27bb658647f0b85fac79937361395b475ba81db1bc8d1857661164d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
