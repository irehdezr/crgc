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
        $__internal_9feedaf393cbda36a571ba6e76a2d4f3f0245666aba5b6317bf2e960bde8ec2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9feedaf393cbda36a571ba6e76a2d4f3f0245666aba5b6317bf2e960bde8ec2f->enter($__internal_9feedaf393cbda36a571ba6e76a2d4f3f0245666aba5b6317bf2e960bde8ec2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_24f6e76a1310e1f2f218e0f85716432b1b9a029542032355b3174bcacd27aa83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24f6e76a1310e1f2f218e0f85716432b1b9a029542032355b3174bcacd27aa83->enter($__internal_24f6e76a1310e1f2f218e0f85716432b1b9a029542032355b3174bcacd27aa83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9feedaf393cbda36a571ba6e76a2d4f3f0245666aba5b6317bf2e960bde8ec2f->leave($__internal_9feedaf393cbda36a571ba6e76a2d4f3f0245666aba5b6317bf2e960bde8ec2f_prof);

        
        $__internal_24f6e76a1310e1f2f218e0f85716432b1b9a029542032355b3174bcacd27aa83->leave($__internal_24f6e76a1310e1f2f218e0f85716432b1b9a029542032355b3174bcacd27aa83_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8bd9dd14b0b19e546d0b7df0bd650245851e67d24a19a943603e56d14a5813c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bd9dd14b0b19e546d0b7df0bd650245851e67d24a19a943603e56d14a5813c8->enter($__internal_8bd9dd14b0b19e546d0b7df0bd650245851e67d24a19a943603e56d14a5813c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d9f45702ce09725acd4574627e6b3150ddd60ae8aead65e66bf95fe42d63278f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9f45702ce09725acd4574627e6b3150ddd60ae8aead65e66bf95fe42d63278f->enter($__internal_d9f45702ce09725acd4574627e6b3150ddd60ae8aead65e66bf95fe42d63278f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_d9f45702ce09725acd4574627e6b3150ddd60ae8aead65e66bf95fe42d63278f->leave($__internal_d9f45702ce09725acd4574627e6b3150ddd60ae8aead65e66bf95fe42d63278f_prof);

        
        $__internal_8bd9dd14b0b19e546d0b7df0bd650245851e67d24a19a943603e56d14a5813c8->leave($__internal_8bd9dd14b0b19e546d0b7df0bd650245851e67d24a19a943603e56d14a5813c8_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_cdd67ece2884e5ac6f34f7d96cc4c80acd9cd99f2f94d4f12acd69d8d8b362b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdd67ece2884e5ac6f34f7d96cc4c80acd9cd99f2f94d4f12acd69d8d8b362b4->enter($__internal_cdd67ece2884e5ac6f34f7d96cc4c80acd9cd99f2f94d4f12acd69d8d8b362b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_39d637ef2ed561369f831f2af8f4085f54ed917d7e0e746982d58464b0f81bda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39d637ef2ed561369f831f2af8f4085f54ed917d7e0e746982d58464b0f81bda->enter($__internal_39d637ef2ed561369f831f2af8f4085f54ed917d7e0e746982d58464b0f81bda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_39d637ef2ed561369f831f2af8f4085f54ed917d7e0e746982d58464b0f81bda->leave($__internal_39d637ef2ed561369f831f2af8f4085f54ed917d7e0e746982d58464b0f81bda_prof);

        
        $__internal_cdd67ece2884e5ac6f34f7d96cc4c80acd9cd99f2f94d4f12acd69d8d8b362b4->leave($__internal_cdd67ece2884e5ac6f34f7d96cc4c80acd9cd99f2f94d4f12acd69d8d8b362b4_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_fb47135ea4a0d5187c18b23e1501314aacf4b7d7f68cac4464782db674bfe816 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb47135ea4a0d5187c18b23e1501314aacf4b7d7f68cac4464782db674bfe816->enter($__internal_fb47135ea4a0d5187c18b23e1501314aacf4b7d7f68cac4464782db674bfe816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1d608206054111dedfd845b5a108c1168a3e9d2d9054346ef89b1bf62d0b146f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d608206054111dedfd845b5a108c1168a3e9d2d9054346ef89b1bf62d0b146f->enter($__internal_1d608206054111dedfd845b5a108c1168a3e9d2d9054346ef89b1bf62d0b146f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_1d608206054111dedfd845b5a108c1168a3e9d2d9054346ef89b1bf62d0b146f->leave($__internal_1d608206054111dedfd845b5a108c1168a3e9d2d9054346ef89b1bf62d0b146f_prof);

        
        $__internal_fb47135ea4a0d5187c18b23e1501314aacf4b7d7f68cac4464782db674bfe816->leave($__internal_fb47135ea4a0d5187c18b23e1501314aacf4b7d7f68cac4464782db674bfe816_prof);

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
