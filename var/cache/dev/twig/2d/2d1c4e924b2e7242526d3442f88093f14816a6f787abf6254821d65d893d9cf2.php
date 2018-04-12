<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_c9c6a19dfc36d998ee7c610e152247146e57e65858e4b0c0c60d477aa4aac910 extends Twig_Template
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
        $__internal_5e2b97a20539c9eb4ce099ec7bbea8dd5684ad64f756f2917e10a100b2f9a602 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e2b97a20539c9eb4ce099ec7bbea8dd5684ad64f756f2917e10a100b2f9a602->enter($__internal_5e2b97a20539c9eb4ce099ec7bbea8dd5684ad64f756f2917e10a100b2f9a602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_3a26bdc908d7d13f5b4f68cf87fcbb138dc3f16c5ebe26685c5f840d4a52939d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a26bdc908d7d13f5b4f68cf87fcbb138dc3f16c5ebe26685c5f840d4a52939d->enter($__internal_3a26bdc908d7d13f5b4f68cf87fcbb138dc3f16c5ebe26685c5f840d4a52939d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e2b97a20539c9eb4ce099ec7bbea8dd5684ad64f756f2917e10a100b2f9a602->leave($__internal_5e2b97a20539c9eb4ce099ec7bbea8dd5684ad64f756f2917e10a100b2f9a602_prof);

        
        $__internal_3a26bdc908d7d13f5b4f68cf87fcbb138dc3f16c5ebe26685c5f840d4a52939d->leave($__internal_3a26bdc908d7d13f5b4f68cf87fcbb138dc3f16c5ebe26685c5f840d4a52939d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8f9267ad636d7c635b231216a7fadf8612a58d6d3f69ff1b109eb230797261d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f9267ad636d7c635b231216a7fadf8612a58d6d3f69ff1b109eb230797261d2->enter($__internal_8f9267ad636d7c635b231216a7fadf8612a58d6d3f69ff1b109eb230797261d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7680dde57f68a6bdfb7cf45c52283413fc4c71f70f406cbe2cea960e56e3d260 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7680dde57f68a6bdfb7cf45c52283413fc4c71f70f406cbe2cea960e56e3d260->enter($__internal_7680dde57f68a6bdfb7cf45c52283413fc4c71f70f406cbe2cea960e56e3d260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_7680dde57f68a6bdfb7cf45c52283413fc4c71f70f406cbe2cea960e56e3d260->leave($__internal_7680dde57f68a6bdfb7cf45c52283413fc4c71f70f406cbe2cea960e56e3d260_prof);

        
        $__internal_8f9267ad636d7c635b231216a7fadf8612a58d6d3f69ff1b109eb230797261d2->leave($__internal_8f9267ad636d7c635b231216a7fadf8612a58d6d3f69ff1b109eb230797261d2_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_47e13f6d9f2d3d2edc882a1da258610e340a3d7f53623173225727f98a94c37e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47e13f6d9f2d3d2edc882a1da258610e340a3d7f53623173225727f98a94c37e->enter($__internal_47e13f6d9f2d3d2edc882a1da258610e340a3d7f53623173225727f98a94c37e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_385b238209c8f26a21d166354c529b2cb7b37c3cfeac2adf8ed458a7f54e5195 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_385b238209c8f26a21d166354c529b2cb7b37c3cfeac2adf8ed458a7f54e5195->enter($__internal_385b238209c8f26a21d166354c529b2cb7b37c3cfeac2adf8ed458a7f54e5195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_385b238209c8f26a21d166354c529b2cb7b37c3cfeac2adf8ed458a7f54e5195->leave($__internal_385b238209c8f26a21d166354c529b2cb7b37c3cfeac2adf8ed458a7f54e5195_prof);

        
        $__internal_47e13f6d9f2d3d2edc882a1da258610e340a3d7f53623173225727f98a94c37e->leave($__internal_47e13f6d9f2d3d2edc882a1da258610e340a3d7f53623173225727f98a94c37e_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_6bfd6a4a9eada2fba0e4885bbdad8dad93c45b8582d0d3c954fb19a57fe3b171 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bfd6a4a9eada2fba0e4885bbdad8dad93c45b8582d0d3c954fb19a57fe3b171->enter($__internal_6bfd6a4a9eada2fba0e4885bbdad8dad93c45b8582d0d3c954fb19a57fe3b171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0495406d306c37f0f5d32888d7b8382192256cb7554b6957e560b10f4104fb6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0495406d306c37f0f5d32888d7b8382192256cb7554b6957e560b10f4104fb6f->enter($__internal_0495406d306c37f0f5d32888d7b8382192256cb7554b6957e560b10f4104fb6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_0495406d306c37f0f5d32888d7b8382192256cb7554b6957e560b10f4104fb6f->leave($__internal_0495406d306c37f0f5d32888d7b8382192256cb7554b6957e560b10f4104fb6f_prof);

        
        $__internal_6bfd6a4a9eada2fba0e4885bbdad8dad93c45b8582d0d3c954fb19a57fe3b171->leave($__internal_6bfd6a4a9eada2fba0e4885bbdad8dad93c45b8582d0d3c954fb19a57fe3b171_prof);

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
", "TwigBundle:Exception:exception_full.html.twig", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
