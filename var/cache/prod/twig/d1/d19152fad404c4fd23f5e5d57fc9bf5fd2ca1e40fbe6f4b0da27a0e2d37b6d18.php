<?php

/* security.html.twig */
class __TwigTemplate_c77a14ec36f22eb147ec1b1a770411a49816f77039e2440ae61b8f868ca1fdec extends Twig_Template
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
        $__internal_583084da39e62531f9334693eccf12304ed071ab031a405623e62fbebb324259 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_583084da39e62531f9334693eccf12304ed071ab031a405623e62fbebb324259->enter($__internal_583084da39e62531f9334693eccf12304ed071ab031a405623e62fbebb324259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>
            ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 9
        echo "        </title>
        <meta name=\"viewport\" content=\"width=device-width,height=device-height initial-scale=1.0\">
        ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "    </head>
    <body>
        <div id=\"content\">
            ";
        // line 18
        $this->displayBlock('body', $context, $blocks);
        // line 20
        echo "        </div>
        ";
        // line 21
        $this->displayBlock('javascripts', $context, $blocks);
        // line 26
        echo "    </body>
</html>";
        
        $__internal_583084da39e62531f9334693eccf12304ed071ab031a405623e62fbebb324259->leave($__internal_583084da39e62531f9334693eccf12304ed071ab031a405623e62fbebb324259_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_543807e5fa4d535cc9c3539269ead9dcbc6af752504a2a6f3e55b0027392c95d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_543807e5fa4d535cc9c3539269ead9dcbc6af752504a2a6f3e55b0027392c95d->enter($__internal_543807e5fa4d535cc9c3539269ead9dcbc6af752504a2a6f3e55b0027392c95d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "                CRgourmetcoffee
            ";
        
        $__internal_543807e5fa4d535cc9c3539269ead9dcbc6af752504a2a6f3e55b0027392c95d->leave($__internal_543807e5fa4d535cc9c3539269ead9dcbc6af752504a2a6f3e55b0027392c95d_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4b4210d149b948ba181cf6f918e73e7af6aa18f65a66b4221e8744bf2ffbf6ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b4210d149b948ba181cf6f918e73e7af6aa18f65a66b4221e8744bf2ffbf6ff->enter($__internal_4b4210d149b948ba181cf6f918e73e7af6aa18f65a66b4221e8744bf2ffbf6ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/css/bootstrap.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/css/crgourmetcoffee.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_4b4210d149b948ba181cf6f918e73e7af6aa18f65a66b4221e8744bf2ffbf6ff->leave($__internal_4b4210d149b948ba181cf6f918e73e7af6aa18f65a66b4221e8744bf2ffbf6ff_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_d4ae9c952d0c964f4ce12020cf94db2f0f1f905df78f1d80235bb374cad6284a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4ae9c952d0c964f4ce12020cf94db2f0f1f905df78f1d80235bb374cad6284a->enter($__internal_d4ae9c952d0c964f4ce12020cf94db2f0f1f905df78f1d80235bb374cad6284a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "            ";
        
        $__internal_d4ae9c952d0c964f4ce12020cf94db2f0f1f905df78f1d80235bb374cad6284a->leave($__internal_d4ae9c952d0c964f4ce12020cf94db2f0f1f905df78f1d80235bb374cad6284a_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6b223456c55c331def772a119489fd4068c70fddb378b1fef0444fa332808295 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b223456c55c331def772a119489fd4068c70fddb378b1fef0444fa332808295->enter($__internal_6b223456c55c331def772a119489fd4068c70fddb378b1fef0444fa332808295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 22
        echo "            <script src= \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/js/jquery-3.1.0.min.js"), "html", null, true);
        echo "\"></script>
            <script src= \"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/js/bootstrap.js"), "html", null, true);
        echo "\"> </script>
            <script src= \"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/js/crgourmetcoffee.js"), "html", null, true);
        echo "\"> </script>
       ";
        
        $__internal_6b223456c55c331def772a119489fd4068c70fddb378b1fef0444fa332808295->leave($__internal_6b223456c55c331def772a119489fd4068c70fddb378b1fef0444fa332808295_prof);

    }

    public function getTemplateName()
    {
        return "security.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  123 => 24,  119 => 23,  114 => 22,  108 => 21,  101 => 19,  95 => 18,  86 => 13,  81 => 12,  75 => 11,  67 => 7,  61 => 6,  53 => 26,  51 => 21,  48 => 20,  46 => 18,  41 => 15,  39 => 11,  35 => 9,  33 => 6,  26 => 1,);
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
        <title>
            {% block title %}
                CRgourmetcoffee
            {% endblock %}
        </title>
        <meta name=\"viewport\" content=\"width=device-width,height=device-height initial-scale=1.0\">
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('/web/public/css/bootstrap.css')}}\" />
            <link rel=\"stylesheet\" href=\"{{ asset('/web/public/css/crgourmetcoffee.css')}}\" />
        {% endblock %}
    </head>
    <body>
        <div id=\"content\">
            {% block body %}
            {% endblock %}
        </div>
        {% block javascripts %}
            <script src= \"{{ asset('/web/public/js/jquery-3.1.0.min.js') }}\"></script>
            <script src= \"{{ asset('/web/public/js/bootstrap.js') }}\"> </script>
            <script src= \"{{ asset('/web/public/js/crgourmetcoffee.js') }}\"> </script>
       {% endblock %}
    </body>
</html>", "security.html.twig", "C:\\xampp\\htdocs\\crgc\\app\\Resources\\views\\security.html.twig");
    }
}
