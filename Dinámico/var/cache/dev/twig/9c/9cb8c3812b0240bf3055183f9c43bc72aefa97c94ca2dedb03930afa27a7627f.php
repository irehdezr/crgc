<?php

/* @Product/Default/index.html.twig */
class __TwigTemplate_a3f6f157c1046b315b65a964d28ae9d14e72eb64c4bcbb3f774b591acec68e24 extends Twig_Template
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
        $__internal_ea5aa00afc97058309a7c9e70d8183858db53032ce5c382e21d1505cbcdb32ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea5aa00afc97058309a7c9e70d8183858db53032ce5c382e21d1505cbcdb32ab->enter($__internal_ea5aa00afc97058309a7c9e70d8183858db53032ce5c382e21d1505cbcdb32ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Product/Default/index.html.twig"));

        $__internal_147441e08c6287a409103dcaec8b67ced29f799fd170ec3e300c72082da15736 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_147441e08c6287a409103dcaec8b67ced29f799fd170ec3e300c72082da15736->enter($__internal_147441e08c6287a409103dcaec8b67ced29f799fd170ec3e300c72082da15736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Product/Default/index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_ea5aa00afc97058309a7c9e70d8183858db53032ce5c382e21d1505cbcdb32ab->leave($__internal_ea5aa00afc97058309a7c9e70d8183858db53032ce5c382e21d1505cbcdb32ab_prof);

        
        $__internal_147441e08c6287a409103dcaec8b67ced29f799fd170ec3e300c72082da15736->leave($__internal_147441e08c6287a409103dcaec8b67ced29f799fd170ec3e300c72082da15736_prof);

    }

    public function getTemplateName()
    {
        return "@Product/Default/index.html.twig";
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
", "@Product/Default/index.html.twig", "C:\\xampp\\htdocs\\src\\ProductBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
