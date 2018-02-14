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
        $__internal_447e653a4ead94f55b2173ece92a41730ec3c15b0c636f7020827c525d35b92c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_447e653a4ead94f55b2173ece92a41730ec3c15b0c636f7020827c525d35b92c->enter($__internal_447e653a4ead94f55b2173ece92a41730ec3c15b0c636f7020827c525d35b92c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_533e0b8ff4b2bfafb7e1fce51c4ffec9503ebb0f5bb1d41db30b859386327a86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_533e0b8ff4b2bfafb7e1fce51c4ffec9503ebb0f5bb1d41db30b859386327a86->enter($__internal_533e0b8ff4b2bfafb7e1fce51c4ffec9503ebb0f5bb1d41db30b859386327a86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_447e653a4ead94f55b2173ece92a41730ec3c15b0c636f7020827c525d35b92c->leave($__internal_447e653a4ead94f55b2173ece92a41730ec3c15b0c636f7020827c525d35b92c_prof);

        
        $__internal_533e0b8ff4b2bfafb7e1fce51c4ffec9503ebb0f5bb1d41db30b859386327a86->leave($__internal_533e0b8ff4b2bfafb7e1fce51c4ffec9503ebb0f5bb1d41db30b859386327a86_prof);

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
