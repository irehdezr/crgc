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
        $__internal_61ec0d77a326fe2ff74af3698f74278921f0f72f10ccf4e14baf2728dd9deeaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61ec0d77a326fe2ff74af3698f74278921f0f72f10ccf4e14baf2728dd9deeaf->enter($__internal_61ec0d77a326fe2ff74af3698f74278921f0f72f10ccf4e14baf2728dd9deeaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_990f8d6bce8f9754444da27dbcac1efa65cd9388f5685ccb0200520caa2d6c57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_990f8d6bce8f9754444da27dbcac1efa65cd9388f5685ccb0200520caa2d6c57->enter($__internal_990f8d6bce8f9754444da27dbcac1efa65cd9388f5685ccb0200520caa2d6c57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61ec0d77a326fe2ff74af3698f74278921f0f72f10ccf4e14baf2728dd9deeaf->leave($__internal_61ec0d77a326fe2ff74af3698f74278921f0f72f10ccf4e14baf2728dd9deeaf_prof);

        
        $__internal_990f8d6bce8f9754444da27dbcac1efa65cd9388f5685ccb0200520caa2d6c57->leave($__internal_990f8d6bce8f9754444da27dbcac1efa65cd9388f5685ccb0200520caa2d6c57_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_27e88deff69f3e3669377e3731afe2e48afe8c84661875655a5e68bd7b2470a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27e88deff69f3e3669377e3731afe2e48afe8c84661875655a5e68bd7b2470a0->enter($__internal_27e88deff69f3e3669377e3731afe2e48afe8c84661875655a5e68bd7b2470a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7f67e6db60b3cbb1acb9267f7782a3719a182f857b5fd398607a3e3b1b72cd22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f67e6db60b3cbb1acb9267f7782a3719a182f857b5fd398607a3e3b1b72cd22->enter($__internal_7f67e6db60b3cbb1acb9267f7782a3719a182f857b5fd398607a3e3b1b72cd22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_7f67e6db60b3cbb1acb9267f7782a3719a182f857b5fd398607a3e3b1b72cd22->leave($__internal_7f67e6db60b3cbb1acb9267f7782a3719a182f857b5fd398607a3e3b1b72cd22_prof);

        
        $__internal_27e88deff69f3e3669377e3731afe2e48afe8c84661875655a5e68bd7b2470a0->leave($__internal_27e88deff69f3e3669377e3731afe2e48afe8c84661875655a5e68bd7b2470a0_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_6548e0a757c3987100e24efd0706fef06e9327733c7cf154646e59e303cce179 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6548e0a757c3987100e24efd0706fef06e9327733c7cf154646e59e303cce179->enter($__internal_6548e0a757c3987100e24efd0706fef06e9327733c7cf154646e59e303cce179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_00f03831828859b564ae11ec98e6e5398a2f82205b03e647359b962432bed675 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00f03831828859b564ae11ec98e6e5398a2f82205b03e647359b962432bed675->enter($__internal_00f03831828859b564ae11ec98e6e5398a2f82205b03e647359b962432bed675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_00f03831828859b564ae11ec98e6e5398a2f82205b03e647359b962432bed675->leave($__internal_00f03831828859b564ae11ec98e6e5398a2f82205b03e647359b962432bed675_prof);

        
        $__internal_6548e0a757c3987100e24efd0706fef06e9327733c7cf154646e59e303cce179->leave($__internal_6548e0a757c3987100e24efd0706fef06e9327733c7cf154646e59e303cce179_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_5b26e5dbf7dc0680464614cde99fd330fafcad0412938977b871795cc1186a85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b26e5dbf7dc0680464614cde99fd330fafcad0412938977b871795cc1186a85->enter($__internal_5b26e5dbf7dc0680464614cde99fd330fafcad0412938977b871795cc1186a85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3f296da9992e4ccfd991468d43923f42954c92a8b2492562c99500e7dcbbd966 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f296da9992e4ccfd991468d43923f42954c92a8b2492562c99500e7dcbbd966->enter($__internal_3f296da9992e4ccfd991468d43923f42954c92a8b2492562c99500e7dcbbd966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_3f296da9992e4ccfd991468d43923f42954c92a8b2492562c99500e7dcbbd966->leave($__internal_3f296da9992e4ccfd991468d43923f42954c92a8b2492562c99500e7dcbbd966_prof);

        
        $__internal_5b26e5dbf7dc0680464614cde99fd330fafcad0412938977b871795cc1186a85->leave($__internal_5b26e5dbf7dc0680464614cde99fd330fafcad0412938977b871795cc1186a85_prof);

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
