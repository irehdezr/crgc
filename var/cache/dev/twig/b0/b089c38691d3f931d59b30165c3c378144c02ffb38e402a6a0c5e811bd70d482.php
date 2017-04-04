<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_da1062aad529fa13d58cde9dd34e2126c23bf4228a8c910d9829f7dbdff52c5a extends Twig_Template
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
        $__internal_8727a66e3f928546daf0bcc4f28d9af96daaeee8cf3c94ae10f0f897548bb4ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8727a66e3f928546daf0bcc4f28d9af96daaeee8cf3c94ae10f0f897548bb4ba->enter($__internal_8727a66e3f928546daf0bcc4f28d9af96daaeee8cf3c94ae10f0f897548bb4ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_fc5993665e270e3267588256fce8938754cf33941465dffc0f9c7dba59770076 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc5993665e270e3267588256fce8938754cf33941465dffc0f9c7dba59770076->enter($__internal_fc5993665e270e3267588256fce8938754cf33941465dffc0f9c7dba59770076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_8727a66e3f928546daf0bcc4f28d9af96daaeee8cf3c94ae10f0f897548bb4ba->leave($__internal_8727a66e3f928546daf0bcc4f28d9af96daaeee8cf3c94ae10f0f897548bb4ba_prof);

        
        $__internal_fc5993665e270e3267588256fce8938754cf33941465dffc0f9c7dba59770076->leave($__internal_fc5993665e270e3267588256fce8938754cf33941465dffc0f9c7dba59770076_prof);

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
", "@Framework/Form/form_rest.html.php", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
