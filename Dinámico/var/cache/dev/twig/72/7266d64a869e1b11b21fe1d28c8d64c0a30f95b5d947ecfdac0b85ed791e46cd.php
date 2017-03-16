<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_6982dc9b7b8bcbba4f9acfd7e8dbb3d3a8e99c23b4d81a5ae74c29d0e43853e8 extends Twig_Template
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
        $__internal_d128b87626531cd2f936db3d8480222d77201b471b78e568524649b6e9bbb008 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d128b87626531cd2f936db3d8480222d77201b471b78e568524649b6e9bbb008->enter($__internal_d128b87626531cd2f936db3d8480222d77201b471b78e568524649b6e9bbb008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_73b4ad8c422e26edd1f0bad3ed73d0427e82ddf1144a3688a2617576e4d64989 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73b4ad8c422e26edd1f0bad3ed73d0427e82ddf1144a3688a2617576e4d64989->enter($__internal_73b4ad8c422e26edd1f0bad3ed73d0427e82ddf1144a3688a2617576e4d64989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d128b87626531cd2f936db3d8480222d77201b471b78e568524649b6e9bbb008->leave($__internal_d128b87626531cd2f936db3d8480222d77201b471b78e568524649b6e9bbb008_prof);

        
        $__internal_73b4ad8c422e26edd1f0bad3ed73d0427e82ddf1144a3688a2617576e4d64989->leave($__internal_73b4ad8c422e26edd1f0bad3ed73d0427e82ddf1144a3688a2617576e4d64989_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7703cd13af3c6a4541d08aa035b817b53885a2de9fc123519924e89a07e9b020 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7703cd13af3c6a4541d08aa035b817b53885a2de9fc123519924e89a07e9b020->enter($__internal_7703cd13af3c6a4541d08aa035b817b53885a2de9fc123519924e89a07e9b020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_57af3676e9c3f5cf71dc09679ba669aba83347bd5101150f41f30c96dba037d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57af3676e9c3f5cf71dc09679ba669aba83347bd5101150f41f30c96dba037d8->enter($__internal_57af3676e9c3f5cf71dc09679ba669aba83347bd5101150f41f30c96dba037d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_57af3676e9c3f5cf71dc09679ba669aba83347bd5101150f41f30c96dba037d8->leave($__internal_57af3676e9c3f5cf71dc09679ba669aba83347bd5101150f41f30c96dba037d8_prof);

        
        $__internal_7703cd13af3c6a4541d08aa035b817b53885a2de9fc123519924e89a07e9b020->leave($__internal_7703cd13af3c6a4541d08aa035b817b53885a2de9fc123519924e89a07e9b020_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_044ce8bf8015f377819312712cd8a4d368226baf614b3347979231d6f2f194fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_044ce8bf8015f377819312712cd8a4d368226baf614b3347979231d6f2f194fc->enter($__internal_044ce8bf8015f377819312712cd8a4d368226baf614b3347979231d6f2f194fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c901ac3ff06f41fd757299e6972bd6e1cc07a0eb3dadd77f3f9a6b5635a0cf81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c901ac3ff06f41fd757299e6972bd6e1cc07a0eb3dadd77f3f9a6b5635a0cf81->enter($__internal_c901ac3ff06f41fd757299e6972bd6e1cc07a0eb3dadd77f3f9a6b5635a0cf81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c901ac3ff06f41fd757299e6972bd6e1cc07a0eb3dadd77f3f9a6b5635a0cf81->leave($__internal_c901ac3ff06f41fd757299e6972bd6e1cc07a0eb3dadd77f3f9a6b5635a0cf81_prof);

        
        $__internal_044ce8bf8015f377819312712cd8a4d368226baf614b3347979231d6f2f194fc->leave($__internal_044ce8bf8015f377819312712cd8a4d368226baf614b3347979231d6f2f194fc_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_045a96430354c69c4c274e789a0e74773c958106321b1a61349a8ff935a505b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_045a96430354c69c4c274e789a0e74773c958106321b1a61349a8ff935a505b5->enter($__internal_045a96430354c69c4c274e789a0e74773c958106321b1a61349a8ff935a505b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4cad9db07491f90a22d33578e138677d38d7ccc80628d66e579c709845ca4e41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cad9db07491f90a22d33578e138677d38d7ccc80628d66e579c709845ca4e41->enter($__internal_4cad9db07491f90a22d33578e138677d38d7ccc80628d66e579c709845ca4e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_4cad9db07491f90a22d33578e138677d38d7ccc80628d66e579c709845ca4e41->leave($__internal_4cad9db07491f90a22d33578e138677d38d7ccc80628d66e579c709845ca4e41_prof);

        
        $__internal_045a96430354c69c4c274e789a0e74773c958106321b1a61349a8ff935a505b5->leave($__internal_045a96430354c69c4c274e789a0e74773c958106321b1a61349a8ff935a505b5_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
