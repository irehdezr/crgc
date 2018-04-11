<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_4b1e0ceb84486310dc7b456ddef3a1f2449320fa49634c63906fdaffd8074e85 extends Twig_Template
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
        $__internal_1b69ad463161f1b5be8b72a102d24e78f1ec49864f038154d16246a52e658ef9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b69ad463161f1b5be8b72a102d24e78f1ec49864f038154d16246a52e658ef9->enter($__internal_1b69ad463161f1b5be8b72a102d24e78f1ec49864f038154d16246a52e658ef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_c0681f2775857438bef9c1ca74ac86ecbb00e83f883f2fdfdd0cab47afcbd4c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0681f2775857438bef9c1ca74ac86ecbb00e83f883f2fdfdd0cab47afcbd4c4->enter($__internal_c0681f2775857438bef9c1ca74ac86ecbb00e83f883f2fdfdd0cab47afcbd4c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_1b69ad463161f1b5be8b72a102d24e78f1ec49864f038154d16246a52e658ef9->leave($__internal_1b69ad463161f1b5be8b72a102d24e78f1ec49864f038154d16246a52e658ef9_prof);

        
        $__internal_c0681f2775857438bef9c1ca74ac86ecbb00e83f883f2fdfdd0cab47afcbd4c4->leave($__internal_c0681f2775857438bef9c1ca74ac86ecbb00e83f883f2fdfdd0cab47afcbd4c4_prof);

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
", "@Framework/Form/hidden_row.html.php", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
