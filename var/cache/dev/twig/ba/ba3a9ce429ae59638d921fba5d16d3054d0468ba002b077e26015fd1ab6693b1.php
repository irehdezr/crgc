<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_abb407c3dd3277220d4835d3823fa82be278b27c84d3493ee6b2e3be04a3a588 extends Twig_Template
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
        $__internal_ef30b4755c1a01b4d62067b1bfcba474b0ba196b55c979c2cd7e2b513ee19355 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef30b4755c1a01b4d62067b1bfcba474b0ba196b55c979c2cd7e2b513ee19355->enter($__internal_ef30b4755c1a01b4d62067b1bfcba474b0ba196b55c979c2cd7e2b513ee19355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_b0fbe3c535a059901066d1886af5e887d67a3cd83517abec21f45c22aab0ad22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0fbe3c535a059901066d1886af5e887d67a3cd83517abec21f45c22aab0ad22->enter($__internal_b0fbe3c535a059901066d1886af5e887d67a3cd83517abec21f45c22aab0ad22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_ef30b4755c1a01b4d62067b1bfcba474b0ba196b55c979c2cd7e2b513ee19355->leave($__internal_ef30b4755c1a01b4d62067b1bfcba474b0ba196b55c979c2cd7e2b513ee19355_prof);

        
        $__internal_b0fbe3c535a059901066d1886af5e887d67a3cd83517abec21f45c22aab0ad22->leave($__internal_b0fbe3c535a059901066d1886af5e887d67a3cd83517abec21f45c22aab0ad22_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
