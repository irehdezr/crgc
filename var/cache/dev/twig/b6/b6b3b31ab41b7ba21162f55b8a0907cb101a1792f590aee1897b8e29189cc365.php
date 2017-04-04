<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a33bd37b0b37916916ea0a6d4ac625860f1a7d6b38fbed8ace04f7c7fb043825 extends Twig_Template
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
        $__internal_74fcbf094efaf6ae35a9bf0fcd268088970099963ab97fa8d2eecf70abf839db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74fcbf094efaf6ae35a9bf0fcd268088970099963ab97fa8d2eecf70abf839db->enter($__internal_74fcbf094efaf6ae35a9bf0fcd268088970099963ab97fa8d2eecf70abf839db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_6489532b2316a7ae0cff9b265c785f6c1c76136cf0f0bb5d53b2bc15cf5c7c0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6489532b2316a7ae0cff9b265c785f6c1c76136cf0f0bb5d53b2bc15cf5c7c0b->enter($__internal_6489532b2316a7ae0cff9b265c785f6c1c76136cf0f0bb5d53b2bc15cf5c7c0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74fcbf094efaf6ae35a9bf0fcd268088970099963ab97fa8d2eecf70abf839db->leave($__internal_74fcbf094efaf6ae35a9bf0fcd268088970099963ab97fa8d2eecf70abf839db_prof);

        
        $__internal_6489532b2316a7ae0cff9b265c785f6c1c76136cf0f0bb5d53b2bc15cf5c7c0b->leave($__internal_6489532b2316a7ae0cff9b265c785f6c1c76136cf0f0bb5d53b2bc15cf5c7c0b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4e6aebca30c60a71c4f04c72c86c8fe86c13931c8273c46e23b8e6af769aa550 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e6aebca30c60a71c4f04c72c86c8fe86c13931c8273c46e23b8e6af769aa550->enter($__internal_4e6aebca30c60a71c4f04c72c86c8fe86c13931c8273c46e23b8e6af769aa550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6d2068e67a0628b896b9479c4ed861101a9d2fdeb98fe096dd65b4a655d77c09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d2068e67a0628b896b9479c4ed861101a9d2fdeb98fe096dd65b4a655d77c09->enter($__internal_6d2068e67a0628b896b9479c4ed861101a9d2fdeb98fe096dd65b4a655d77c09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_6d2068e67a0628b896b9479c4ed861101a9d2fdeb98fe096dd65b4a655d77c09->leave($__internal_6d2068e67a0628b896b9479c4ed861101a9d2fdeb98fe096dd65b4a655d77c09_prof);

        
        $__internal_4e6aebca30c60a71c4f04c72c86c8fe86c13931c8273c46e23b8e6af769aa550->leave($__internal_4e6aebca30c60a71c4f04c72c86c8fe86c13931c8273c46e23b8e6af769aa550_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_550d4c388c653d14c92583f0c82769d433715252545ec5e05823bb4d9aac6774 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_550d4c388c653d14c92583f0c82769d433715252545ec5e05823bb4d9aac6774->enter($__internal_550d4c388c653d14c92583f0c82769d433715252545ec5e05823bb4d9aac6774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0f82fa181f098c0ff9c38a866eb796786db03d609419bed441287701b260f150 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f82fa181f098c0ff9c38a866eb796786db03d609419bed441287701b260f150->enter($__internal_0f82fa181f098c0ff9c38a866eb796786db03d609419bed441287701b260f150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0f82fa181f098c0ff9c38a866eb796786db03d609419bed441287701b260f150->leave($__internal_0f82fa181f098c0ff9c38a866eb796786db03d609419bed441287701b260f150_prof);

        
        $__internal_550d4c388c653d14c92583f0c82769d433715252545ec5e05823bb4d9aac6774->leave($__internal_550d4c388c653d14c92583f0c82769d433715252545ec5e05823bb4d9aac6774_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_abcbecdbd1c22f6d16bcf4133ffd46603768991b556251ad2f851acea06541a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abcbecdbd1c22f6d16bcf4133ffd46603768991b556251ad2f851acea06541a2->enter($__internal_abcbecdbd1c22f6d16bcf4133ffd46603768991b556251ad2f851acea06541a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fa5872571edbbbef22767dfd8ba3f0e68dc43a1d9fd85de6dfd518e79e0094fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa5872571edbbbef22767dfd8ba3f0e68dc43a1d9fd85de6dfd518e79e0094fa->enter($__internal_fa5872571edbbbef22767dfd8ba3f0e68dc43a1d9fd85de6dfd518e79e0094fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_fa5872571edbbbef22767dfd8ba3f0e68dc43a1d9fd85de6dfd518e79e0094fa->leave($__internal_fa5872571edbbbef22767dfd8ba3f0e68dc43a1d9fd85de6dfd518e79e0094fa_prof);

        
        $__internal_abcbecdbd1c22f6d16bcf4133ffd46603768991b556251ad2f851acea06541a2->leave($__internal_abcbecdbd1c22f6d16bcf4133ffd46603768991b556251ad2f851acea06541a2_prof);

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
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
