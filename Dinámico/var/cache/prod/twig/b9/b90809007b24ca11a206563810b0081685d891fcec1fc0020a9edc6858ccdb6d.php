<?php

/* layout.html.twig */
class __TwigTemplate_eb7480fb3fbefc355d80c737b2a3b8c070520f02f7eae7d2ac3f25ad84ca75de extends Twig_Template
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
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "CRgourmetcoffee";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "                <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/bootstrap.css"), "html", null, true);
        echo "\" />
                <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/crgourmetcoffee.css"), "html", null, true);
        echo "\" />
        ";
    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        // line 23
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/jquery-3.1.0.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/bootstrap.js"), "html", null, true);
        echo "\"  </script>
       ";
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
        return array (  98 => 24,  93 => 23,  90 => 22,  85 => 17,  79 => 9,  74 => 8,  71 => 7,  65 => 5,  60 => 26,  58 => 22,  55 => 21,  53 => 20,  49 => 18,  47 => 17,  43 => 15,  41 => 14,  36 => 11,  34 => 7,  29 => 5,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout.html.twig", "C:\\xampp\\htdocs\\app\\Resources\\views\\layout.html.twig");
    }
}
