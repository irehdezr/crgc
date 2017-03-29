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
        $__internal_3d680896516ec105b814085ad05ee7767c5eaf2889b1214c1f8abb53f66fd37c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d680896516ec105b814085ad05ee7767c5eaf2889b1214c1f8abb53f66fd37c->enter($__internal_3d680896516ec105b814085ad05ee7767c5eaf2889b1214c1f8abb53f66fd37c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_c82c24abee6c1acbe1c697a65dc11012f949669ca7bf8d6f3919235b066971bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c82c24abee6c1acbe1c697a65dc11012f949669ca7bf8d6f3919235b066971bd->enter($__internal_c82c24abee6c1acbe1c697a65dc11012f949669ca7bf8d6f3919235b066971bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_3d680896516ec105b814085ad05ee7767c5eaf2889b1214c1f8abb53f66fd37c->leave($__internal_3d680896516ec105b814085ad05ee7767c5eaf2889b1214c1f8abb53f66fd37c_prof);

        
        $__internal_c82c24abee6c1acbe1c697a65dc11012f949669ca7bf8d6f3919235b066971bd->leave($__internal_c82c24abee6c1acbe1c697a65dc11012f949669ca7bf8d6f3919235b066971bd_prof);

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
