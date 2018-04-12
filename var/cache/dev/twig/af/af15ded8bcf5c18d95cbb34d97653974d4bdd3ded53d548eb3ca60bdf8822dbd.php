<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_01d50c7a50a12da31ac3abbf108659dc4c1508d6a25016c3ffb3606d8fcb3fda extends Twig_Template
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
        $__internal_62ebd33c21f94fda336710fb32a73054f90bec93dcbd08a0eaad154126a22346 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62ebd33c21f94fda336710fb32a73054f90bec93dcbd08a0eaad154126a22346->enter($__internal_62ebd33c21f94fda336710fb32a73054f90bec93dcbd08a0eaad154126a22346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_66a20af7022de366cffe933a965fc35a47b6abc69823b8582de7605a7c7671e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66a20af7022de366cffe933a965fc35a47b6abc69823b8582de7605a7c7671e7->enter($__internal_66a20af7022de366cffe933a965fc35a47b6abc69823b8582de7605a7c7671e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_62ebd33c21f94fda336710fb32a73054f90bec93dcbd08a0eaad154126a22346->leave($__internal_62ebd33c21f94fda336710fb32a73054f90bec93dcbd08a0eaad154126a22346_prof);

        
        $__internal_66a20af7022de366cffe933a965fc35a47b6abc69823b8582de7605a7c7671e7->leave($__internal_66a20af7022de366cffe933a965fc35a47b6abc69823b8582de7605a7c7671e7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
