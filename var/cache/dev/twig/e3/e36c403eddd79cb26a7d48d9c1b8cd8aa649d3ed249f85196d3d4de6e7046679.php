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
        $__internal_ca0b2e349c8a03cdaae48e5650281ed760df24437c3291085839614332826883 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca0b2e349c8a03cdaae48e5650281ed760df24437c3291085839614332826883->enter($__internal_ca0b2e349c8a03cdaae48e5650281ed760df24437c3291085839614332826883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_56aeb55d6e5b13bd2f77cd061d28ca557ff59c4897cf821d879c1f58ce5ad7e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56aeb55d6e5b13bd2f77cd061d28ca557ff59c4897cf821d879c1f58ce5ad7e4->enter($__internal_56aeb55d6e5b13bd2f77cd061d28ca557ff59c4897cf821d879c1f58ce5ad7e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca0b2e349c8a03cdaae48e5650281ed760df24437c3291085839614332826883->leave($__internal_ca0b2e349c8a03cdaae48e5650281ed760df24437c3291085839614332826883_prof);

        
        $__internal_56aeb55d6e5b13bd2f77cd061d28ca557ff59c4897cf821d879c1f58ce5ad7e4->leave($__internal_56aeb55d6e5b13bd2f77cd061d28ca557ff59c4897cf821d879c1f58ce5ad7e4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8dc4098d08e74b25a82ee567b3f54173ef4a994e8db070208f2bcb80bbe0183e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dc4098d08e74b25a82ee567b3f54173ef4a994e8db070208f2bcb80bbe0183e->enter($__internal_8dc4098d08e74b25a82ee567b3f54173ef4a994e8db070208f2bcb80bbe0183e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d39ff4994569e39d13f3293dd46e6f622cca813e3ab243ac7cd9fcf6458d7c38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d39ff4994569e39d13f3293dd46e6f622cca813e3ab243ac7cd9fcf6458d7c38->enter($__internal_d39ff4994569e39d13f3293dd46e6f622cca813e3ab243ac7cd9fcf6458d7c38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_d39ff4994569e39d13f3293dd46e6f622cca813e3ab243ac7cd9fcf6458d7c38->leave($__internal_d39ff4994569e39d13f3293dd46e6f622cca813e3ab243ac7cd9fcf6458d7c38_prof);

        
        $__internal_8dc4098d08e74b25a82ee567b3f54173ef4a994e8db070208f2bcb80bbe0183e->leave($__internal_8dc4098d08e74b25a82ee567b3f54173ef4a994e8db070208f2bcb80bbe0183e_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_5616939959aa7d4b2598d28170b1dd1444669c8b2ef3b51a53b60e577306ae39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5616939959aa7d4b2598d28170b1dd1444669c8b2ef3b51a53b60e577306ae39->enter($__internal_5616939959aa7d4b2598d28170b1dd1444669c8b2ef3b51a53b60e577306ae39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f04bd878dc962ab6ff81b6bd14d13971acf6a66025508a21d33cc110de53f52d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f04bd878dc962ab6ff81b6bd14d13971acf6a66025508a21d33cc110de53f52d->enter($__internal_f04bd878dc962ab6ff81b6bd14d13971acf6a66025508a21d33cc110de53f52d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f04bd878dc962ab6ff81b6bd14d13971acf6a66025508a21d33cc110de53f52d->leave($__internal_f04bd878dc962ab6ff81b6bd14d13971acf6a66025508a21d33cc110de53f52d_prof);

        
        $__internal_5616939959aa7d4b2598d28170b1dd1444669c8b2ef3b51a53b60e577306ae39->leave($__internal_5616939959aa7d4b2598d28170b1dd1444669c8b2ef3b51a53b60e577306ae39_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_3a2091424e5b0f3508a3c2d059b7889e8298b9bbb004e43cdc0e2ef6307991bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a2091424e5b0f3508a3c2d059b7889e8298b9bbb004e43cdc0e2ef6307991bf->enter($__internal_3a2091424e5b0f3508a3c2d059b7889e8298b9bbb004e43cdc0e2ef6307991bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f681b2d488f8a70225b6dcedb8fea31a98bd517f43af5874905384e6c5d972cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f681b2d488f8a70225b6dcedb8fea31a98bd517f43af5874905384e6c5d972cf->enter($__internal_f681b2d488f8a70225b6dcedb8fea31a98bd517f43af5874905384e6c5d972cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_f681b2d488f8a70225b6dcedb8fea31a98bd517f43af5874905384e6c5d972cf->leave($__internal_f681b2d488f8a70225b6dcedb8fea31a98bd517f43af5874905384e6c5d972cf_prof);

        
        $__internal_3a2091424e5b0f3508a3c2d059b7889e8298b9bbb004e43cdc0e2ef6307991bf->leave($__internal_3a2091424e5b0f3508a3c2d059b7889e8298b9bbb004e43cdc0e2ef6307991bf_prof);

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
