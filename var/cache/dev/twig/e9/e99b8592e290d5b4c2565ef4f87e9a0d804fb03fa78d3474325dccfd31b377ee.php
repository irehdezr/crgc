<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_37ed828f0897176da1274a7ea9282e8ba6b1d8dea335189a6d9abb8954022afb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_2daa646c04d868f2e45e57bba8f9ae806b6f82910d784f4d7808b6977308a684 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2daa646c04d868f2e45e57bba8f9ae806b6f82910d784f4d7808b6977308a684->enter($__internal_2daa646c04d868f2e45e57bba8f9ae806b6f82910d784f4d7808b6977308a684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_5e49c418a89bad7086cda494f192f575f89e4207e0873352914e70e0f88b27c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e49c418a89bad7086cda494f192f575f89e4207e0873352914e70e0f88b27c6->enter($__internal_5e49c418a89bad7086cda494f192f575f89e4207e0873352914e70e0f88b27c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2daa646c04d868f2e45e57bba8f9ae806b6f82910d784f4d7808b6977308a684->leave($__internal_2daa646c04d868f2e45e57bba8f9ae806b6f82910d784f4d7808b6977308a684_prof);

        
        $__internal_5e49c418a89bad7086cda494f192f575f89e4207e0873352914e70e0f88b27c6->leave($__internal_5e49c418a89bad7086cda494f192f575f89e4207e0873352914e70e0f88b27c6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_beae7e98bf32b9eaa6db23fba5b4a28b1152e8cf8c268ee452b6d68b567ba004 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_beae7e98bf32b9eaa6db23fba5b4a28b1152e8cf8c268ee452b6d68b567ba004->enter($__internal_beae7e98bf32b9eaa6db23fba5b4a28b1152e8cf8c268ee452b6d68b567ba004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7a6e76f5ed2248729e01fda97e860dc6a2f4ae615ab4cd13c96affdae0976c71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a6e76f5ed2248729e01fda97e860dc6a2f4ae615ab4cd13c96affdae0976c71->enter($__internal_7a6e76f5ed2248729e01fda97e860dc6a2f4ae615ab4cd13c96affdae0976c71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_7a6e76f5ed2248729e01fda97e860dc6a2f4ae615ab4cd13c96affdae0976c71->leave($__internal_7a6e76f5ed2248729e01fda97e860dc6a2f4ae615ab4cd13c96affdae0976c71_prof);

        
        $__internal_beae7e98bf32b9eaa6db23fba5b4a28b1152e8cf8c268ee452b6d68b567ba004->leave($__internal_beae7e98bf32b9eaa6db23fba5b4a28b1152e8cf8c268ee452b6d68b567ba004_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_d031412820df0b566ebac086a85f346f213176f08a8c9b8d7989db3039325bb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d031412820df0b566ebac086a85f346f213176f08a8c9b8d7989db3039325bb7->enter($__internal_d031412820df0b566ebac086a85f346f213176f08a8c9b8d7989db3039325bb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_56ae43c9226777595a5b5154b70c662b264d3f1b929f7c081e1887adea4dcde6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56ae43c9226777595a5b5154b70c662b264d3f1b929f7c081e1887adea4dcde6->enter($__internal_56ae43c9226777595a5b5154b70c662b264d3f1b929f7c081e1887adea4dcde6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_56ae43c9226777595a5b5154b70c662b264d3f1b929f7c081e1887adea4dcde6->leave($__internal_56ae43c9226777595a5b5154b70c662b264d3f1b929f7c081e1887adea4dcde6_prof);

        
        $__internal_d031412820df0b566ebac086a85f346f213176f08a8c9b8d7989db3039325bb7->leave($__internal_d031412820df0b566ebac086a85f346f213176f08a8c9b8d7989db3039325bb7_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd6485842277fc3a8629e7d0626ff46b09faac5a0aaeb1a380f4bf4cb39336d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd6485842277fc3a8629e7d0626ff46b09faac5a0aaeb1a380f4bf4cb39336d7->enter($__internal_cd6485842277fc3a8629e7d0626ff46b09faac5a0aaeb1a380f4bf4cb39336d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a005dc9a4b29180a9f546b84c2953add66b8a0100c1d6a4b528ce8adeaa2cf16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a005dc9a4b29180a9f546b84c2953add66b8a0100c1d6a4b528ce8adeaa2cf16->enter($__internal_a005dc9a4b29180a9f546b84c2953add66b8a0100c1d6a4b528ce8adeaa2cf16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_a005dc9a4b29180a9f546b84c2953add66b8a0100c1d6a4b528ce8adeaa2cf16->leave($__internal_a005dc9a4b29180a9f546b84c2953add66b8a0100c1d6a4b528ce8adeaa2cf16_prof);

        
        $__internal_cd6485842277fc3a8629e7d0626ff46b09faac5a0aaeb1a380f4bf4cb39336d7->leave($__internal_cd6485842277fc3a8629e7d0626ff46b09faac5a0aaeb1a380f4bf4cb39336d7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
