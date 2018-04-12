<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_47dd7a757f88b442d1b5b7e4ef036997f4f822888b8a2d840da76bbf742a94ea extends Twig_Template
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
        $__internal_1a0c560a072b2334a182cd04970ecde0aa061ddf6f7f0bf1283673a169c49a37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a0c560a072b2334a182cd04970ecde0aa061ddf6f7f0bf1283673a169c49a37->enter($__internal_1a0c560a072b2334a182cd04970ecde0aa061ddf6f7f0bf1283673a169c49a37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_e2be3dbd50dfa1cc2d09b0a173ac4d27a91f5bf473209c84bfe019cf31f44bea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2be3dbd50dfa1cc2d09b0a173ac4d27a91f5bf473209c84bfe019cf31f44bea->enter($__internal_e2be3dbd50dfa1cc2d09b0a173ac4d27a91f5bf473209c84bfe019cf31f44bea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_1a0c560a072b2334a182cd04970ecde0aa061ddf6f7f0bf1283673a169c49a37->leave($__internal_1a0c560a072b2334a182cd04970ecde0aa061ddf6f7f0bf1283673a169c49a37_prof);

        
        $__internal_e2be3dbd50dfa1cc2d09b0a173ac4d27a91f5bf473209c84bfe019cf31f44bea->leave($__internal_e2be3dbd50dfa1cc2d09b0a173ac4d27a91f5bf473209c84bfe019cf31f44bea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
