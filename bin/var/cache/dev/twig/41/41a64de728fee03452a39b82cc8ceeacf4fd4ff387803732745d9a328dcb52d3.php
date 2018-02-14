<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_c3886f2759e168c3056dcc1fccfc9f230f1a239acfe2c195b721276a1ff60702 extends Twig_Template
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
        $__internal_b564506b360d74d86ab65d9e9b5501da621baa94a2d7f34be726413add5e0470 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b564506b360d74d86ab65d9e9b5501da621baa94a2d7f34be726413add5e0470->enter($__internal_b564506b360d74d86ab65d9e9b5501da621baa94a2d7f34be726413add5e0470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_c6bf5a4264264d21af993d2817270f9d1aeed32e46464cd1fbb994c0e628c263 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6bf5a4264264d21af993d2817270f9d1aeed32e46464cd1fbb994c0e628c263->enter($__internal_c6bf5a4264264d21af993d2817270f9d1aeed32e46464cd1fbb994c0e628c263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b564506b360d74d86ab65d9e9b5501da621baa94a2d7f34be726413add5e0470->leave($__internal_b564506b360d74d86ab65d9e9b5501da621baa94a2d7f34be726413add5e0470_prof);

        
        $__internal_c6bf5a4264264d21af993d2817270f9d1aeed32e46464cd1fbb994c0e628c263->leave($__internal_c6bf5a4264264d21af993d2817270f9d1aeed32e46464cd1fbb994c0e628c263_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_89cf11f49ca954728985e990fe1458d90c3b065fd0e25e9989d567826bb5dd3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89cf11f49ca954728985e990fe1458d90c3b065fd0e25e9989d567826bb5dd3a->enter($__internal_89cf11f49ca954728985e990fe1458d90c3b065fd0e25e9989d567826bb5dd3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ee24b757f5b7ec9fb65c804d49c8e0c8ea5ab4031a39f347a9471c0c563362ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee24b757f5b7ec9fb65c804d49c8e0c8ea5ab4031a39f347a9471c0c563362ee->enter($__internal_ee24b757f5b7ec9fb65c804d49c8e0c8ea5ab4031a39f347a9471c0c563362ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_ee24b757f5b7ec9fb65c804d49c8e0c8ea5ab4031a39f347a9471c0c563362ee->leave($__internal_ee24b757f5b7ec9fb65c804d49c8e0c8ea5ab4031a39f347a9471c0c563362ee_prof);

        
        $__internal_89cf11f49ca954728985e990fe1458d90c3b065fd0e25e9989d567826bb5dd3a->leave($__internal_89cf11f49ca954728985e990fe1458d90c3b065fd0e25e9989d567826bb5dd3a_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_c517b266c9e1c2f9ac7166843999065290af03791d5db6e4aa7691e0f2a01ba8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c517b266c9e1c2f9ac7166843999065290af03791d5db6e4aa7691e0f2a01ba8->enter($__internal_c517b266c9e1c2f9ac7166843999065290af03791d5db6e4aa7691e0f2a01ba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f3fee8bc3baf2306fe447af1fe4607a9644a5243dd241547efdae3d75c3efb89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3fee8bc3baf2306fe447af1fe4607a9644a5243dd241547efdae3d75c3efb89->enter($__internal_f3fee8bc3baf2306fe447af1fe4607a9644a5243dd241547efdae3d75c3efb89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f3fee8bc3baf2306fe447af1fe4607a9644a5243dd241547efdae3d75c3efb89->leave($__internal_f3fee8bc3baf2306fe447af1fe4607a9644a5243dd241547efdae3d75c3efb89_prof);

        
        $__internal_c517b266c9e1c2f9ac7166843999065290af03791d5db6e4aa7691e0f2a01ba8->leave($__internal_c517b266c9e1c2f9ac7166843999065290af03791d5db6e4aa7691e0f2a01ba8_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_67aa54aaf2c7d8593c5330f7630702bf27718fda70abf2d73853b40e7fb218c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67aa54aaf2c7d8593c5330f7630702bf27718fda70abf2d73853b40e7fb218c8->enter($__internal_67aa54aaf2c7d8593c5330f7630702bf27718fda70abf2d73853b40e7fb218c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2eb951b7c7b923aaf2cd45f7b4cfe6af25b60f4d03e066aec7c4bdc78aea3564 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2eb951b7c7b923aaf2cd45f7b4cfe6af25b60f4d03e066aec7c4bdc78aea3564->enter($__internal_2eb951b7c7b923aaf2cd45f7b4cfe6af25b60f4d03e066aec7c4bdc78aea3564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_2eb951b7c7b923aaf2cd45f7b4cfe6af25b60f4d03e066aec7c4bdc78aea3564->leave($__internal_2eb951b7c7b923aaf2cd45f7b4cfe6af25b60f4d03e066aec7c4bdc78aea3564_prof);

        
        $__internal_67aa54aaf2c7d8593c5330f7630702bf27718fda70abf2d73853b40e7fb218c8->leave($__internal_67aa54aaf2c7d8593c5330f7630702bf27718fda70abf2d73853b40e7fb218c8_prof);

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
", "TwigBundle:Exception:exception_full.html.twig", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
