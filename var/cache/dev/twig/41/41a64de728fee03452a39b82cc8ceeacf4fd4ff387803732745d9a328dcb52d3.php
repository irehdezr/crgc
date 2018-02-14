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
        $__internal_4fe7f7924cbe4443252dd3bd35455e0e7ec134c43c02fe5abb9521a48d0a299e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fe7f7924cbe4443252dd3bd35455e0e7ec134c43c02fe5abb9521a48d0a299e->enter($__internal_4fe7f7924cbe4443252dd3bd35455e0e7ec134c43c02fe5abb9521a48d0a299e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_9a8e8dc6b3f706b59cbbafc9e866b3a5a0faf448aca273e105fb9ecf32c3c484 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a8e8dc6b3f706b59cbbafc9e866b3a5a0faf448aca273e105fb9ecf32c3c484->enter($__internal_9a8e8dc6b3f706b59cbbafc9e866b3a5a0faf448aca273e105fb9ecf32c3c484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4fe7f7924cbe4443252dd3bd35455e0e7ec134c43c02fe5abb9521a48d0a299e->leave($__internal_4fe7f7924cbe4443252dd3bd35455e0e7ec134c43c02fe5abb9521a48d0a299e_prof);

        
        $__internal_9a8e8dc6b3f706b59cbbafc9e866b3a5a0faf448aca273e105fb9ecf32c3c484->leave($__internal_9a8e8dc6b3f706b59cbbafc9e866b3a5a0faf448aca273e105fb9ecf32c3c484_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_30cd0048a7aea7a98df16d3b068b22a989a80d4adc5a35471296d0a01d8d2aa1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30cd0048a7aea7a98df16d3b068b22a989a80d4adc5a35471296d0a01d8d2aa1->enter($__internal_30cd0048a7aea7a98df16d3b068b22a989a80d4adc5a35471296d0a01d8d2aa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fec4c35d7e87846166f854f8f0e3dd324e9f8d31a0c7337f6f410a4cda4fba83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fec4c35d7e87846166f854f8f0e3dd324e9f8d31a0c7337f6f410a4cda4fba83->enter($__internal_fec4c35d7e87846166f854f8f0e3dd324e9f8d31a0c7337f6f410a4cda4fba83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_fec4c35d7e87846166f854f8f0e3dd324e9f8d31a0c7337f6f410a4cda4fba83->leave($__internal_fec4c35d7e87846166f854f8f0e3dd324e9f8d31a0c7337f6f410a4cda4fba83_prof);

        
        $__internal_30cd0048a7aea7a98df16d3b068b22a989a80d4adc5a35471296d0a01d8d2aa1->leave($__internal_30cd0048a7aea7a98df16d3b068b22a989a80d4adc5a35471296d0a01d8d2aa1_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_87622a38af2ea80b5da05449df65a16e605170d1f8a22e34531efa49a1182c89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87622a38af2ea80b5da05449df65a16e605170d1f8a22e34531efa49a1182c89->enter($__internal_87622a38af2ea80b5da05449df65a16e605170d1f8a22e34531efa49a1182c89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_197d4a8dd9944b7ad08a71324f5d1d2c7caa3b682174838327643ea7602fad45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_197d4a8dd9944b7ad08a71324f5d1d2c7caa3b682174838327643ea7602fad45->enter($__internal_197d4a8dd9944b7ad08a71324f5d1d2c7caa3b682174838327643ea7602fad45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_197d4a8dd9944b7ad08a71324f5d1d2c7caa3b682174838327643ea7602fad45->leave($__internal_197d4a8dd9944b7ad08a71324f5d1d2c7caa3b682174838327643ea7602fad45_prof);

        
        $__internal_87622a38af2ea80b5da05449df65a16e605170d1f8a22e34531efa49a1182c89->leave($__internal_87622a38af2ea80b5da05449df65a16e605170d1f8a22e34531efa49a1182c89_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_6fe29fe2af42214547758d9476fe976c23d1265f76d676ea71efe670d2ab1cb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fe29fe2af42214547758d9476fe976c23d1265f76d676ea71efe670d2ab1cb8->enter($__internal_6fe29fe2af42214547758d9476fe976c23d1265f76d676ea71efe670d2ab1cb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ff317525f7d661f2d3b58348da623f6521d25dedacd65625fff105a6e807dfb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff317525f7d661f2d3b58348da623f6521d25dedacd65625fff105a6e807dfb5->enter($__internal_ff317525f7d661f2d3b58348da623f6521d25dedacd65625fff105a6e807dfb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_ff317525f7d661f2d3b58348da623f6521d25dedacd65625fff105a6e807dfb5->leave($__internal_ff317525f7d661f2d3b58348da623f6521d25dedacd65625fff105a6e807dfb5_prof);

        
        $__internal_6fe29fe2af42214547758d9476fe976c23d1265f76d676ea71efe670d2ab1cb8->leave($__internal_6fe29fe2af42214547758d9476fe976c23d1265f76d676ea71efe670d2ab1cb8_prof);

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
