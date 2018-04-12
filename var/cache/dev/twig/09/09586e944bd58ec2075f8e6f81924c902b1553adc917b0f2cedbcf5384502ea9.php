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
        $__internal_ea7168ccb175e012dc4f5ab306f3f8e2a5c7f0dd95932888c4690945cc64b260 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea7168ccb175e012dc4f5ab306f3f8e2a5c7f0dd95932888c4690945cc64b260->enter($__internal_ea7168ccb175e012dc4f5ab306f3f8e2a5c7f0dd95932888c4690945cc64b260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_7eea2c892c6d681da9be700780968121c5dad98799daeefb14dab4a2e223fa7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eea2c892c6d681da9be700780968121c5dad98799daeefb14dab4a2e223fa7e->enter($__internal_7eea2c892c6d681da9be700780968121c5dad98799daeefb14dab4a2e223fa7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ea7168ccb175e012dc4f5ab306f3f8e2a5c7f0dd95932888c4690945cc64b260->leave($__internal_ea7168ccb175e012dc4f5ab306f3f8e2a5c7f0dd95932888c4690945cc64b260_prof);

        
        $__internal_7eea2c892c6d681da9be700780968121c5dad98799daeefb14dab4a2e223fa7e->leave($__internal_7eea2c892c6d681da9be700780968121c5dad98799daeefb14dab4a2e223fa7e_prof);

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
