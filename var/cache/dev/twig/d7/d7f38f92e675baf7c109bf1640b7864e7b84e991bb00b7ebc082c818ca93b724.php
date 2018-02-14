<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_33e1f0948209b25506b4f8e32b542df0ef9b80a31daf1128f1df592078dd75d3 extends Twig_Template
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
        $__internal_0b93c2f40f82e369a984b3f32e3812fbf1e81c45ab138c7979076834c5cc1cee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b93c2f40f82e369a984b3f32e3812fbf1e81c45ab138c7979076834c5cc1cee->enter($__internal_0b93c2f40f82e369a984b3f32e3812fbf1e81c45ab138c7979076834c5cc1cee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_bee04c2ee8ef93eda9d3b1d0f360727e760f54b90360b3986cb32ab4e2ca0d73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bee04c2ee8ef93eda9d3b1d0f360727e760f54b90360b3986cb32ab4e2ca0d73->enter($__internal_bee04c2ee8ef93eda9d3b1d0f360727e760f54b90360b3986cb32ab4e2ca0d73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_0b93c2f40f82e369a984b3f32e3812fbf1e81c45ab138c7979076834c5cc1cee->leave($__internal_0b93c2f40f82e369a984b3f32e3812fbf1e81c45ab138c7979076834c5cc1cee_prof);

        
        $__internal_bee04c2ee8ef93eda9d3b1d0f360727e760f54b90360b3986cb32ab4e2ca0d73->leave($__internal_bee04c2ee8ef93eda9d3b1d0f360727e760f54b90360b3986cb32ab4e2ca0d73_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
