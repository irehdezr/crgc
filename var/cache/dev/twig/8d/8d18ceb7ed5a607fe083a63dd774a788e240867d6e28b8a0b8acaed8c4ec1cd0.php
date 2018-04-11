<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_2be8ca80bb365aca6a8d90989de9148ad9aca2278fb9f6ef9d9a7856010d6fc8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_07530dff1d772fffe6b8702f4187a1bd9c5cfbb5a4cc15109eb6f3f622681fdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07530dff1d772fffe6b8702f4187a1bd9c5cfbb5a4cc15109eb6f3f622681fdf->enter($__internal_07530dff1d772fffe6b8702f4187a1bd9c5cfbb5a4cc15109eb6f3f622681fdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_149ce5a5b8e373afda9c6aea57607e7d81fef711d8ddba5fe261489949f98731 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_149ce5a5b8e373afda9c6aea57607e7d81fef711d8ddba5fe261489949f98731->enter($__internal_149ce5a5b8e373afda9c6aea57607e7d81fef711d8ddba5fe261489949f98731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_07530dff1d772fffe6b8702f4187a1bd9c5cfbb5a4cc15109eb6f3f622681fdf->leave($__internal_07530dff1d772fffe6b8702f4187a1bd9c5cfbb5a4cc15109eb6f3f622681fdf_prof);

        
        $__internal_149ce5a5b8e373afda9c6aea57607e7d81fef711d8ddba5fe261489949f98731->leave($__internal_149ce5a5b8e373afda9c6aea57607e7d81fef711d8ddba5fe261489949f98731_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_0a24b8c1fb34eb473831639f3dfb39e6a5278c4a480b6863161988e64fb0159c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a24b8c1fb34eb473831639f3dfb39e6a5278c4a480b6863161988e64fb0159c->enter($__internal_0a24b8c1fb34eb473831639f3dfb39e6a5278c4a480b6863161988e64fb0159c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3077b9d99694b7fab384753d129b22b0e4941a73322f72340167952b50156fa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3077b9d99694b7fab384753d129b22b0e4941a73322f72340167952b50156fa9->enter($__internal_3077b9d99694b7fab384753d129b22b0e4941a73322f72340167952b50156fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_3077b9d99694b7fab384753d129b22b0e4941a73322f72340167952b50156fa9->leave($__internal_3077b9d99694b7fab384753d129b22b0e4941a73322f72340167952b50156fa9_prof);

        
        $__internal_0a24b8c1fb34eb473831639f3dfb39e6a5278c4a480b6863161988e64fb0159c->leave($__internal_0a24b8c1fb34eb473831639f3dfb39e6a5278c4a480b6863161988e64fb0159c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
