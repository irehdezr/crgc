<?php

/* layout.html.twig */
class __TwigTemplate_ff6f82870056217de8e8722104a6621cd3c0943c384e6508e1ad51204062b209 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f65089824dbb5f7efa2b1de2e0b7e76c029fb6db0a94229592d1d8121a96b0dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f65089824dbb5f7efa2b1de2e0b7e76c029fb6db0a94229592d1d8121a96b0dd->enter($__internal_f65089824dbb5f7efa2b1de2e0b7e76c029fb6db0a94229592d1d8121a96b0dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
          <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <div id=\"header\">
            ";
        // line 14
        $this->loadTemplate("header.html.twig", "layout.html.twig", 14)->display($context);
        // line 15
        echo "        </div>
        <div id=\"content\">
            ";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "        </div>
        <div id=\"footer\">
            ";
        // line 20
        $this->loadTemplate("footer.html.twig", "layout.html.twig", 20)->display($context);
        // line 21
        echo "        </div>
        ";
        // line 22
        $this->displayBlock('javascripts', $context, $blocks);
        // line 26
        echo "    </body>
</html>";
        
        $__internal_f65089824dbb5f7efa2b1de2e0b7e76c029fb6db0a94229592d1d8121a96b0dd->leave($__internal_f65089824dbb5f7efa2b1de2e0b7e76c029fb6db0a94229592d1d8121a96b0dd_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8928c02dfc43c7b8a796d1f425e90b14afd883f1eb2c28edd852ddda3e5d7a57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8928c02dfc43c7b8a796d1f425e90b14afd883f1eb2c28edd852ddda3e5d7a57->enter($__internal_8928c02dfc43c7b8a796d1f425e90b14afd883f1eb2c28edd852ddda3e5d7a57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CRgourmetcoffee";
        
        $__internal_8928c02dfc43c7b8a796d1f425e90b14afd883f1eb2c28edd852ddda3e5d7a57->leave($__internal_8928c02dfc43c7b8a796d1f425e90b14afd883f1eb2c28edd852ddda3e5d7a57_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2c6ca25e3c885a4813294a07955e323b64729d1dc8de1acd0cc680e6f926131f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c6ca25e3c885a4813294a07955e323b64729d1dc8de1acd0cc680e6f926131f->enter($__internal_2c6ca25e3c885a4813294a07955e323b64729d1dc8de1acd0cc680e6f926131f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "                <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/css/bootstrap.css"), "html", null, true);
        echo "\" />
                <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/css/crgourmetcoffee.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_2c6ca25e3c885a4813294a07955e323b64729d1dc8de1acd0cc680e6f926131f->leave($__internal_2c6ca25e3c885a4813294a07955e323b64729d1dc8de1acd0cc680e6f926131f_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_47bc6102cb2c6d2390acb7ecdfc1a37855730a8019cd166d520d719e58583f05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47bc6102cb2c6d2390acb7ecdfc1a37855730a8019cd166d520d719e58583f05->enter($__internal_47bc6102cb2c6d2390acb7ecdfc1a37855730a8019cd166d520d719e58583f05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_47bc6102cb2c6d2390acb7ecdfc1a37855730a8019cd166d520d719e58583f05->leave($__internal_47bc6102cb2c6d2390acb7ecdfc1a37855730a8019cd166d520d719e58583f05_prof);

    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_40e30a8775db771b4d5f3f410c10f0e5a1fd589a16f59109175c0f6b81533c91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40e30a8775db771b4d5f3f410c10f0e5a1fd589a16f59109175c0f6b81533c91->enter($__internal_40e30a8775db771b4d5f3f410c10f0e5a1fd589a16f59109175c0f6b81533c91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 23
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/js/jquery-3.1.0.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/js/bootstrap.js"), "html", null, true);
        echo "\"  </script>
       ";
        
        $__internal_40e30a8775db771b4d5f3f410c10f0e5a1fd589a16f59109175c0f6b81533c91->leave($__internal_40e30a8775db771b4d5f3f410c10f0e5a1fd589a16f59109175c0f6b81533c91_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 24,  120 => 23,  114 => 22,  103 => 17,  94 => 9,  89 => 8,  83 => 7,  71 => 5,  63 => 26,  61 => 22,  58 => 21,  56 => 20,  52 => 18,  50 => 17,  46 => 15,  44 => 14,  39 => 11,  37 => 7,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}CRgourmetcoffee{% endblock %}</title>
          <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        {% block stylesheets %}
                <link rel=\"stylesheet\" href=\"{{ asset('/web/public/css/bootstrap.css')}}\" />
                <link rel=\"stylesheet\" href=\"{{ asset('/web/public/css/crgourmetcoffee.css')}}\" />
        {% endblock %}
    </head>
    <body>
        <div id=\"header\">
            {% include \"header.html.twig\"%}
        </div>
        <div id=\"content\">
            {% block body %}{% endblock %}
        </div>
        <div id=\"footer\">
            {% include \"footer.html.twig\"%}
        </div>
        {% block javascripts %}
            <script src=\"{{ asset('/web/public/js/jquery-3.1.0.min.js')}}\"></script>
            <script src=\"{{ asset('/web/public/js/bootstrap.js')}}\"  </script>
       {% endblock %}
    </body>
</html>", "layout.html.twig", "/home/crgourme/public_html/app/Resources/views/layout.html.twig");
    }
}
