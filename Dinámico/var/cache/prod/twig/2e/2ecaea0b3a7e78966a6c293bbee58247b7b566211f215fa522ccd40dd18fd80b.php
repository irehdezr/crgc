<?php

/* layout.html.twig */
class __TwigTemplate_c0f91db3116dda100db9a8acb2b6274a0ec6c26599dde545692cc7ae657693c7 extends Twig_Template
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
        $__internal_68731a675b05fee835a84abe96730c96cd99acbc921e2e2e739a1d44551ccbd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68731a675b05fee835a84abe96730c96cd99acbc921e2e2e739a1d44551ccbd2->enter($__internal_68731a675b05fee835a84abe96730c96cd99acbc921e2e2e739a1d44551ccbd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        
        $__internal_68731a675b05fee835a84abe96730c96cd99acbc921e2e2e739a1d44551ccbd2->leave($__internal_68731a675b05fee835a84abe96730c96cd99acbc921e2e2e739a1d44551ccbd2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fef7b682b631ba83623e9f51a716e1199f8a72bad4ec06a2ac3f04cc85f12448 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fef7b682b631ba83623e9f51a716e1199f8a72bad4ec06a2ac3f04cc85f12448->enter($__internal_fef7b682b631ba83623e9f51a716e1199f8a72bad4ec06a2ac3f04cc85f12448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CRgourmetcoffee";
        
        $__internal_fef7b682b631ba83623e9f51a716e1199f8a72bad4ec06a2ac3f04cc85f12448->leave($__internal_fef7b682b631ba83623e9f51a716e1199f8a72bad4ec06a2ac3f04cc85f12448_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_52eda3bcb3e8e17f43fb7842ac92f00548f829fe5dda1384b532875c40132860 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52eda3bcb3e8e17f43fb7842ac92f00548f829fe5dda1384b532875c40132860->enter($__internal_52eda3bcb3e8e17f43fb7842ac92f00548f829fe5dda1384b532875c40132860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "                <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/bootstrap.css"), "html", null, true);
        echo "\" />
                <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/crgourmetcoffee.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_52eda3bcb3e8e17f43fb7842ac92f00548f829fe5dda1384b532875c40132860->leave($__internal_52eda3bcb3e8e17f43fb7842ac92f00548f829fe5dda1384b532875c40132860_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_f77578d4fb76702e659f0eab308a97a73ba19abf866b55f2f67caf2b504ab6d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f77578d4fb76702e659f0eab308a97a73ba19abf866b55f2f67caf2b504ab6d6->enter($__internal_f77578d4fb76702e659f0eab308a97a73ba19abf866b55f2f67caf2b504ab6d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f77578d4fb76702e659f0eab308a97a73ba19abf866b55f2f67caf2b504ab6d6->leave($__internal_f77578d4fb76702e659f0eab308a97a73ba19abf866b55f2f67caf2b504ab6d6_prof);

    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4e6427b45be17331dd0b772532d0ea0a028ed1714db0ffc0159b404329b036e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e6427b45be17331dd0b772532d0ea0a028ed1714db0ffc0159b404329b036e9->enter($__internal_4e6427b45be17331dd0b772532d0ea0a028ed1714db0ffc0159b404329b036e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 23
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/jquery-3.1.0.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/bootstrap.js"), "html", null, true);
        echo "\"  </script>
       ";
        
        $__internal_4e6427b45be17331dd0b772532d0ea0a028ed1714db0ffc0159b404329b036e9->leave($__internal_4e6427b45be17331dd0b772532d0ea0a028ed1714db0ffc0159b404329b036e9_prof);

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
                <link rel=\"stylesheet\" href=\"{{ asset('public/css/bootstrap.css')}}\" />
                <link rel=\"stylesheet\" href=\"{{ asset('public/css/crgourmetcoffee.css')}}\" />
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
            <script src=\"{{ asset('public/js/jquery-3.1.0.min.js')}}\"></script>
            <script src=\"{{ asset('public/js/bootstrap.js')}}\"  </script>
       {% endblock %}
    </body>
</html>", "layout.html.twig", "C:\\xampp\\htdocs\\app\\Resources\\views\\layout.html.twig");
    }
}
