<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_85579eb121a089d7e312c7020cc4bdeb6df58d3d62e50b2195cc05c11f4fd0b6 extends Twig_Template
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
        $__internal_58905265e9583cd10f004e9d38f133bb182f2e3106cf9e149b5d6a032319df76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58905265e9583cd10f004e9d38f133bb182f2e3106cf9e149b5d6a032319df76->enter($__internal_58905265e9583cd10f004e9d38f133bb182f2e3106cf9e149b5d6a032319df76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_f9445ba131250b19d8b7f5aac93e28988a427ae8d37d5a16d1aa8815b688f2c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9445ba131250b19d8b7f5aac93e28988a427ae8d37d5a16d1aa8815b688f2c3->enter($__internal_f9445ba131250b19d8b7f5aac93e28988a427ae8d37d5a16d1aa8815b688f2c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58905265e9583cd10f004e9d38f133bb182f2e3106cf9e149b5d6a032319df76->leave($__internal_58905265e9583cd10f004e9d38f133bb182f2e3106cf9e149b5d6a032319df76_prof);

        
        $__internal_f9445ba131250b19d8b7f5aac93e28988a427ae8d37d5a16d1aa8815b688f2c3->leave($__internal_f9445ba131250b19d8b7f5aac93e28988a427ae8d37d5a16d1aa8815b688f2c3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_473bb699b2411aa1ca289a9380284d5d1dc29394d84bf64e10e10a3073f99551 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_473bb699b2411aa1ca289a9380284d5d1dc29394d84bf64e10e10a3073f99551->enter($__internal_473bb699b2411aa1ca289a9380284d5d1dc29394d84bf64e10e10a3073f99551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_73b12be2601c908e98ad0a0a2d12bafe98f71f792d5f89fd0cce0659303970c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73b12be2601c908e98ad0a0a2d12bafe98f71f792d5f89fd0cce0659303970c8->enter($__internal_73b12be2601c908e98ad0a0a2d12bafe98f71f792d5f89fd0cce0659303970c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_73b12be2601c908e98ad0a0a2d12bafe98f71f792d5f89fd0cce0659303970c8->leave($__internal_73b12be2601c908e98ad0a0a2d12bafe98f71f792d5f89fd0cce0659303970c8_prof);

        
        $__internal_473bb699b2411aa1ca289a9380284d5d1dc29394d84bf64e10e10a3073f99551->leave($__internal_473bb699b2411aa1ca289a9380284d5d1dc29394d84bf64e10e10a3073f99551_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_f21a719e3d896399577b29a7c81ceb223f0aa41138e00d6ea8312140637f9604 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f21a719e3d896399577b29a7c81ceb223f0aa41138e00d6ea8312140637f9604->enter($__internal_f21a719e3d896399577b29a7c81ceb223f0aa41138e00d6ea8312140637f9604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d541dfee59516084b0f3356d2769aa65b3e97efdd13555332b22225fecb3be5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d541dfee59516084b0f3356d2769aa65b3e97efdd13555332b22225fecb3be5f->enter($__internal_d541dfee59516084b0f3356d2769aa65b3e97efdd13555332b22225fecb3be5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d541dfee59516084b0f3356d2769aa65b3e97efdd13555332b22225fecb3be5f->leave($__internal_d541dfee59516084b0f3356d2769aa65b3e97efdd13555332b22225fecb3be5f_prof);

        
        $__internal_f21a719e3d896399577b29a7c81ceb223f0aa41138e00d6ea8312140637f9604->leave($__internal_f21a719e3d896399577b29a7c81ceb223f0aa41138e00d6ea8312140637f9604_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_a2f567fb02ede600c1cbec3756f01a4e9e848c1b5f835bc68bf9d7b84eb1b547 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2f567fb02ede600c1cbec3756f01a4e9e848c1b5f835bc68bf9d7b84eb1b547->enter($__internal_a2f567fb02ede600c1cbec3756f01a4e9e848c1b5f835bc68bf9d7b84eb1b547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_221a54368e00b7b12b31071ee2f294cdaab6edde2aed0fd5d1718183bad705f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_221a54368e00b7b12b31071ee2f294cdaab6edde2aed0fd5d1718183bad705f7->enter($__internal_221a54368e00b7b12b31071ee2f294cdaab6edde2aed0fd5d1718183bad705f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_221a54368e00b7b12b31071ee2f294cdaab6edde2aed0fd5d1718183bad705f7->leave($__internal_221a54368e00b7b12b31071ee2f294cdaab6edde2aed0fd5d1718183bad705f7_prof);

        
        $__internal_a2f567fb02ede600c1cbec3756f01a4e9e848c1b5f835bc68bf9d7b84eb1b547->leave($__internal_a2f567fb02ede600c1cbec3756f01a4e9e848c1b5f835bc68bf9d7b84eb1b547_prof);

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
