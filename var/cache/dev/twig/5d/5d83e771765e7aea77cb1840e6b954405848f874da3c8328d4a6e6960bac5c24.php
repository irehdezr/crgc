<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_b828cc5726b7f873955832f098a0a01986a78bdf941f4b345de012fc2cd06946 extends Twig_Template
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
        $__internal_4dbeac90dd1ceb73d288c73f929100b6ff64473edbe76598e1957b9f70e21d27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dbeac90dd1ceb73d288c73f929100b6ff64473edbe76598e1957b9f70e21d27->enter($__internal_4dbeac90dd1ceb73d288c73f929100b6ff64473edbe76598e1957b9f70e21d27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_23f0d9b6c4330d35ad4b13276d6abf6c569d7bd6079f500a3c0c932f23fc29e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23f0d9b6c4330d35ad4b13276d6abf6c569d7bd6079f500a3c0c932f23fc29e4->enter($__internal_23f0d9b6c4330d35ad4b13276d6abf6c569d7bd6079f500a3c0c932f23fc29e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_4dbeac90dd1ceb73d288c73f929100b6ff64473edbe76598e1957b9f70e21d27->leave($__internal_4dbeac90dd1ceb73d288c73f929100b6ff64473edbe76598e1957b9f70e21d27_prof);

        
        $__internal_23f0d9b6c4330d35ad4b13276d6abf6c569d7bd6079f500a3c0c932f23fc29e4->leave($__internal_23f0d9b6c4330d35ad4b13276d6abf6c569d7bd6079f500a3c0c932f23fc29e4_prof);

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
", "@Framework/Form/form_rows.html.php", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
