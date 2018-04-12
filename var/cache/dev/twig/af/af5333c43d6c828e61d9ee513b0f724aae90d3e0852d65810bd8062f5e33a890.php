<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a9fa14b82aad46aa4378636311a6d39ab7d7d7d3d3591c625196a7713db7afa2 extends Twig_Template
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
        $__internal_8f811f546357bd43588cb809a5a743da44e95d8af304e7f51b10c0020a64bc1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f811f546357bd43588cb809a5a743da44e95d8af304e7f51b10c0020a64bc1b->enter($__internal_8f811f546357bd43588cb809a5a743da44e95d8af304e7f51b10c0020a64bc1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_fd21a2e39bcfd063c580a3577238211cecd4ed6710cca86891aff4474efc1514 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd21a2e39bcfd063c580a3577238211cecd4ed6710cca86891aff4474efc1514->enter($__internal_fd21a2e39bcfd063c580a3577238211cecd4ed6710cca86891aff4474efc1514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f811f546357bd43588cb809a5a743da44e95d8af304e7f51b10c0020a64bc1b->leave($__internal_8f811f546357bd43588cb809a5a743da44e95d8af304e7f51b10c0020a64bc1b_prof);

        
        $__internal_fd21a2e39bcfd063c580a3577238211cecd4ed6710cca86891aff4474efc1514->leave($__internal_fd21a2e39bcfd063c580a3577238211cecd4ed6710cca86891aff4474efc1514_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_724c608882bfa2b9735e72ee4d55d9156354290625d04ff0e2c2b5df753df272 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_724c608882bfa2b9735e72ee4d55d9156354290625d04ff0e2c2b5df753df272->enter($__internal_724c608882bfa2b9735e72ee4d55d9156354290625d04ff0e2c2b5df753df272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_59cdcf51075d72e9fb629d29b96e5007a217a38892b40de56b497c4f8ce53753 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59cdcf51075d72e9fb629d29b96e5007a217a38892b40de56b497c4f8ce53753->enter($__internal_59cdcf51075d72e9fb629d29b96e5007a217a38892b40de56b497c4f8ce53753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_59cdcf51075d72e9fb629d29b96e5007a217a38892b40de56b497c4f8ce53753->leave($__internal_59cdcf51075d72e9fb629d29b96e5007a217a38892b40de56b497c4f8ce53753_prof);

        
        $__internal_724c608882bfa2b9735e72ee4d55d9156354290625d04ff0e2c2b5df753df272->leave($__internal_724c608882bfa2b9735e72ee4d55d9156354290625d04ff0e2c2b5df753df272_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_9e83aa939cfb294700f6370f507fc65b1d1958d27e94fe8805098238d933bc7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e83aa939cfb294700f6370f507fc65b1d1958d27e94fe8805098238d933bc7f->enter($__internal_9e83aa939cfb294700f6370f507fc65b1d1958d27e94fe8805098238d933bc7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f5c8699f4c4ad5e9c6f7387e0397acad63667fbee76a0f9430c24398c94b5f6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5c8699f4c4ad5e9c6f7387e0397acad63667fbee76a0f9430c24398c94b5f6c->enter($__internal_f5c8699f4c4ad5e9c6f7387e0397acad63667fbee76a0f9430c24398c94b5f6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f5c8699f4c4ad5e9c6f7387e0397acad63667fbee76a0f9430c24398c94b5f6c->leave($__internal_f5c8699f4c4ad5e9c6f7387e0397acad63667fbee76a0f9430c24398c94b5f6c_prof);

        
        $__internal_9e83aa939cfb294700f6370f507fc65b1d1958d27e94fe8805098238d933bc7f->leave($__internal_9e83aa939cfb294700f6370f507fc65b1d1958d27e94fe8805098238d933bc7f_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe32275d291b8a61f7ceeae524f501b93a15977d5797031433cd24dccbec659d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe32275d291b8a61f7ceeae524f501b93a15977d5797031433cd24dccbec659d->enter($__internal_fe32275d291b8a61f7ceeae524f501b93a15977d5797031433cd24dccbec659d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7c270b96fb144e5a3eb7b019b1cab979afc6fd65449b26c621ce7354b7eccd3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c270b96fb144e5a3eb7b019b1cab979afc6fd65449b26c621ce7354b7eccd3b->enter($__internal_7c270b96fb144e5a3eb7b019b1cab979afc6fd65449b26c621ce7354b7eccd3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_7c270b96fb144e5a3eb7b019b1cab979afc6fd65449b26c621ce7354b7eccd3b->leave($__internal_7c270b96fb144e5a3eb7b019b1cab979afc6fd65449b26c621ce7354b7eccd3b_prof);

        
        $__internal_fe32275d291b8a61f7ceeae524f501b93a15977d5797031433cd24dccbec659d->leave($__internal_fe32275d291b8a61f7ceeae524f501b93a15977d5797031433cd24dccbec659d_prof);

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
