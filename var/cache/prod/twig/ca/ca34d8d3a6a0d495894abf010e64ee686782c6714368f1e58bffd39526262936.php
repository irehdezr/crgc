<?php

/* security.html.twig */
class __TwigTemplate_23152e6e03f2d0f54749e7bcdd909381636cec03b280e13cc0bd081b8795b575 extends Twig_Template
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
        $__internal_988a74bb4a6df69f3ea14955c07a87f0627ed43b08dba16f063e315669ab4f93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_988a74bb4a6df69f3ea14955c07a87f0627ed43b08dba16f063e315669ab4f93->enter($__internal_988a74bb4a6df69f3ea14955c07a87f0627ed43b08dba16f063e315669ab4f93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security.html.twig"));

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
        
        $__internal_988a74bb4a6df69f3ea14955c07a87f0627ed43b08dba16f063e315669ab4f93->leave($__internal_988a74bb4a6df69f3ea14955c07a87f0627ed43b08dba16f063e315669ab4f93_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_126c2746867a491e9194367e6e56353852bfc59eb9758c17a9af6b5140894723 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_126c2746867a491e9194367e6e56353852bfc59eb9758c17a9af6b5140894723->enter($__internal_126c2746867a491e9194367e6e56353852bfc59eb9758c17a9af6b5140894723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "                CRgourmetcoffee
            ";
        
        $__internal_126c2746867a491e9194367e6e56353852bfc59eb9758c17a9af6b5140894723->leave($__internal_126c2746867a491e9194367e6e56353852bfc59eb9758c17a9af6b5140894723_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_224bc8d81c55c0a906a74263355d11a5daa2bee1bcc411ea03be6895f384efc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_224bc8d81c55c0a906a74263355d11a5daa2bee1bcc411ea03be6895f384efc1->enter($__internal_224bc8d81c55c0a906a74263355d11a5daa2bee1bcc411ea03be6895f384efc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/css/bootstrap.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/css/crgourmetcoffee.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_224bc8d81c55c0a906a74263355d11a5daa2bee1bcc411ea03be6895f384efc1->leave($__internal_224bc8d81c55c0a906a74263355d11a5daa2bee1bcc411ea03be6895f384efc1_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_159449b8b5393cb8d7f49d90a6a2d232726885a09c609ff1ad8fbd13e284f240 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_159449b8b5393cb8d7f49d90a6a2d232726885a09c609ff1ad8fbd13e284f240->enter($__internal_159449b8b5393cb8d7f49d90a6a2d232726885a09c609ff1ad8fbd13e284f240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "            ";
        
        $__internal_159449b8b5393cb8d7f49d90a6a2d232726885a09c609ff1ad8fbd13e284f240->leave($__internal_159449b8b5393cb8d7f49d90a6a2d232726885a09c609ff1ad8fbd13e284f240_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_79bdc84fa539ca02da0de4745936c55508eeae12e29ab6e05c62a52f25d4555f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79bdc84fa539ca02da0de4745936c55508eeae12e29ab6e05c62a52f25d4555f->enter($__internal_79bdc84fa539ca02da0de4745936c55508eeae12e29ab6e05c62a52f25d4555f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_79bdc84fa539ca02da0de4745936c55508eeae12e29ab6e05c62a52f25d4555f->leave($__internal_79bdc84fa539ca02da0de4745936c55508eeae12e29ab6e05c62a52f25d4555f_prof);

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
</html>", "security.html.twig", "C:\\xampp\\htdocs\\app\\Resources\\views\\security.html.twig");
    }
}
