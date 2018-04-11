<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_c9c6a19dfc36d998ee7c610e152247146e57e65858e4b0c0c60d477aa4aac910 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_55665dc9e00bf721c5d7b3f8751e009434908b28bcd4e43b5f8b524e6559d9a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55665dc9e00bf721c5d7b3f8751e009434908b28bcd4e43b5f8b524e6559d9a8->enter($__internal_55665dc9e00bf721c5d7b3f8751e009434908b28bcd4e43b5f8b524e6559d9a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_4da48695258c093cde4ae97a62b2779da081deea449400e4f491d3bd0db3ed68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4da48695258c093cde4ae97a62b2779da081deea449400e4f491d3bd0db3ed68->enter($__internal_4da48695258c093cde4ae97a62b2779da081deea449400e4f491d3bd0db3ed68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55665dc9e00bf721c5d7b3f8751e009434908b28bcd4e43b5f8b524e6559d9a8->leave($__internal_55665dc9e00bf721c5d7b3f8751e009434908b28bcd4e43b5f8b524e6559d9a8_prof);

        
        $__internal_4da48695258c093cde4ae97a62b2779da081deea449400e4f491d3bd0db3ed68->leave($__internal_4da48695258c093cde4ae97a62b2779da081deea449400e4f491d3bd0db3ed68_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d6ce5d4a5d0b8e80e6647719d707413bfc693e0fe384b0e176c0e3318f250ab2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6ce5d4a5d0b8e80e6647719d707413bfc693e0fe384b0e176c0e3318f250ab2->enter($__internal_d6ce5d4a5d0b8e80e6647719d707413bfc693e0fe384b0e176c0e3318f250ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_300f5bdd440ac3d631cbde600aedf60646d6cb335c43d50f1c23dd6cfabf292e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_300f5bdd440ac3d631cbde600aedf60646d6cb335c43d50f1c23dd6cfabf292e->enter($__internal_300f5bdd440ac3d631cbde600aedf60646d6cb335c43d50f1c23dd6cfabf292e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_300f5bdd440ac3d631cbde600aedf60646d6cb335c43d50f1c23dd6cfabf292e->leave($__internal_300f5bdd440ac3d631cbde600aedf60646d6cb335c43d50f1c23dd6cfabf292e_prof);

        
        $__internal_d6ce5d4a5d0b8e80e6647719d707413bfc693e0fe384b0e176c0e3318f250ab2->leave($__internal_d6ce5d4a5d0b8e80e6647719d707413bfc693e0fe384b0e176c0e3318f250ab2_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_664fc9e12edf353a4a72ec8b3a21752baf58b6a2fd5fbfb9060e65b892740fa5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_664fc9e12edf353a4a72ec8b3a21752baf58b6a2fd5fbfb9060e65b892740fa5->enter($__internal_664fc9e12edf353a4a72ec8b3a21752baf58b6a2fd5fbfb9060e65b892740fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b57fbec9e9397f9a7128cfdaa06d4d6c129c9e8c9273152abd06b82bbf63e701 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b57fbec9e9397f9a7128cfdaa06d4d6c129c9e8c9273152abd06b82bbf63e701->enter($__internal_b57fbec9e9397f9a7128cfdaa06d4d6c129c9e8c9273152abd06b82bbf63e701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b57fbec9e9397f9a7128cfdaa06d4d6c129c9e8c9273152abd06b82bbf63e701->leave($__internal_b57fbec9e9397f9a7128cfdaa06d4d6c129c9e8c9273152abd06b82bbf63e701_prof);

        
        $__internal_664fc9e12edf353a4a72ec8b3a21752baf58b6a2fd5fbfb9060e65b892740fa5->leave($__internal_664fc9e12edf353a4a72ec8b3a21752baf58b6a2fd5fbfb9060e65b892740fa5_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_31447bfd48cdc893c29fba4071814eda897c832276cfb35df162e3ac8e93bc27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31447bfd48cdc893c29fba4071814eda897c832276cfb35df162e3ac8e93bc27->enter($__internal_31447bfd48cdc893c29fba4071814eda897c832276cfb35df162e3ac8e93bc27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f6155c07e63334fea4da0f0ffa18e62a6ed1a3274f67457ea0d4f68e08ef85ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6155c07e63334fea4da0f0ffa18e62a6ed1a3274f67457ea0d4f68e08ef85ce->enter($__internal_f6155c07e63334fea4da0f0ffa18e62a6ed1a3274f67457ea0d4f68e08ef85ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_f6155c07e63334fea4da0f0ffa18e62a6ed1a3274f67457ea0d4f68e08ef85ce->leave($__internal_f6155c07e63334fea4da0f0ffa18e62a6ed1a3274f67457ea0d4f68e08ef85ce_prof);

        
        $__internal_31447bfd48cdc893c29fba4071814eda897c832276cfb35df162e3ac8e93bc27->leave($__internal_31447bfd48cdc893c29fba4071814eda897c832276cfb35df162e3ac8e93bc27_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
