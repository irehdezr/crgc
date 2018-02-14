<?php

/* @Farm/Default/index.html.twig */
class __TwigTemplate_af933ecac320fb862705a53f2a9b691690455141ad7038ebd059d427744819fd extends Twig_Template
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
        $__internal_f823afbc3490341003b3d2dcb5b8b9dae04309fdce714cec5ac8b0e84d7cbd27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f823afbc3490341003b3d2dcb5b8b9dae04309fdce714cec5ac8b0e84d7cbd27->enter($__internal_f823afbc3490341003b3d2dcb5b8b9dae04309fdce714cec5ac8b0e84d7cbd27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Farm/Default/index.html.twig"));

        $__internal_b3a6ddf064281acfd38ea55357a75b9af81ebc86eb66070fef30e9018d23cf7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3a6ddf064281acfd38ea55357a75b9af81ebc86eb66070fef30e9018d23cf7c->enter($__internal_b3a6ddf064281acfd38ea55357a75b9af81ebc86eb66070fef30e9018d23cf7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Farm/Default/index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_f823afbc3490341003b3d2dcb5b8b9dae04309fdce714cec5ac8b0e84d7cbd27->leave($__internal_f823afbc3490341003b3d2dcb5b8b9dae04309fdce714cec5ac8b0e84d7cbd27_prof);

        
        $__internal_b3a6ddf064281acfd38ea55357a75b9af81ebc86eb66070fef30e9018d23cf7c->leave($__internal_b3a6ddf064281acfd38ea55357a75b9af81ebc86eb66070fef30e9018d23cf7c_prof);

    }

    public function getTemplateName()
    {
        return "@Farm/Default/index.html.twig";
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
        return new Twig_Source("Hello World!
", "@Farm/Default/index.html.twig", "C:\\xampp\\htdocs\\src\\FarmBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
