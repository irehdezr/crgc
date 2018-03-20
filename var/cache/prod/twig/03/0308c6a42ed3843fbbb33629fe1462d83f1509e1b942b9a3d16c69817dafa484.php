<?php

/* layout.html.twig */
class __TwigTemplate_91df15fe8416c4eb8e02aabaca2182a50321e7aa6261ed15505bf6a7956dbf20 extends Twig_Template
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
        $__internal_f4133ff189309c9784666c3b439c10ba22f9f78d6d7e02a14ec7b73e1e3c8c9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4133ff189309c9784666c3b439c10ba22f9f78d6d7e02a14ec7b73e1e3c8c9e->enter($__internal_f4133ff189309c9784666c3b439c10ba22f9f78d6d7e02a14ec7b73e1e3c8c9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        <header>
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("PageBundle:Default:header"));
        echo "
        </header>
        <main>
            ";
        // line 21
        $this->displayBlock('body', $context, $blocks);
        // line 23
        echo "        </main>
        <footer>
            ";
        // line 25
        $this->loadTemplate("footer.html.twig", "layout.html.twig", 25)->display($context);
        // line 26
        echo "        </footer>
        ";
        // line 27
        $this->displayBlock('javascripts', $context, $blocks);
        // line 32
        echo "    </body>
</html>";
        
        $__internal_f4133ff189309c9784666c3b439c10ba22f9f78d6d7e02a14ec7b73e1e3c8c9e->leave($__internal_f4133ff189309c9784666c3b439c10ba22f9f78d6d7e02a14ec7b73e1e3c8c9e_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_220fe76b333def84b2284bb7a08bf34c5f5d2dc7f090114dbb0996700fd6e3cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_220fe76b333def84b2284bb7a08bf34c5f5d2dc7f090114dbb0996700fd6e3cc->enter($__internal_220fe76b333def84b2284bb7a08bf34c5f5d2dc7f090114dbb0996700fd6e3cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "                CRgourmetcoffee
            ";
        
        $__internal_220fe76b333def84b2284bb7a08bf34c5f5d2dc7f090114dbb0996700fd6e3cc->leave($__internal_220fe76b333def84b2284bb7a08bf34c5f5d2dc7f090114dbb0996700fd6e3cc_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e7ea0c032efee73bd4004bbaa29c37b063daf0a969bc2aebcbf6d3b84c34a0fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7ea0c032efee73bd4004bbaa29c37b063daf0a969bc2aebcbf6d3b84c34a0fc->enter($__internal_e7ea0c032efee73bd4004bbaa29c37b063daf0a969bc2aebcbf6d3b84c34a0fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/crgourmetcoffee.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_e7ea0c032efee73bd4004bbaa29c37b063daf0a969bc2aebcbf6d3b84c34a0fc->leave($__internal_e7ea0c032efee73bd4004bbaa29c37b063daf0a969bc2aebcbf6d3b84c34a0fc_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_b28894118fb5b81e798029329d4675da6689c606c8bd94a42b8151af75a2c3dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b28894118fb5b81e798029329d4675da6689c606c8bd94a42b8151af75a2c3dd->enter($__internal_b28894118fb5b81e798029329d4675da6689c606c8bd94a42b8151af75a2c3dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 22
        echo "            ";
        
        $__internal_b28894118fb5b81e798029329d4675da6689c606c8bd94a42b8151af75a2c3dd->leave($__internal_b28894118fb5b81e798029329d4675da6689c606c8bd94a42b8151af75a2c3dd_prof);

    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8d61f0b498ba7081e8ffa84523cebbfd4fda8a806e88db940c45c8088a46fb7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d61f0b498ba7081e8ffa84523cebbfd4fda8a806e88db940c45c8088a46fb7f->enter($__internal_8d61f0b498ba7081e8ffa84523cebbfd4fda8a806e88db940c45c8088a46fb7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 28
        echo "            <script src= \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.1.0.min.js"), "html", null, true);
        echo "\"></script>
            <script src= \"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"> </script>
            <script src= \"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/crgourmetcoffee.js.twig"), "html", null, true);
        echo "\"> </script>
       ";
        
        $__internal_8d61f0b498ba7081e8ffa84523cebbfd4fda8a806e88db940c45c8088a46fb7f->leave($__internal_8d61f0b498ba7081e8ffa84523cebbfd4fda8a806e88db940c45c8088a46fb7f_prof);

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
        return array (  135 => 30,  131 => 29,  126 => 28,  120 => 27,  113 => 22,  107 => 21,  98 => 13,  93 => 12,  87 => 11,  79 => 7,  73 => 6,  65 => 32,  63 => 27,  60 => 26,  58 => 25,  54 => 23,  52 => 21,  46 => 18,  41 => 15,  39 => 11,  35 => 9,  33 => 6,  26 => 1,);
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
            <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.css')}}\" />
            <link rel=\"stylesheet\" href=\"{{ asset('css/crgourmetcoffee.css')}}\" />
        {% endblock %}
    </head>
    <body>
        <header>
            {{ render(controller('PageBundle:Default:header' )) }}
        </header>
        <main>
            {% block body %}
            {% endblock %}
        </main>
        <footer>
            {% include \"footer.html.twig\"%}
        </footer>
        {% block javascripts %}
            <script src= \"{{ asset('js/jquery-3.1.0.min.js') }}\"></script>
            <script src= \"{{ asset('js/bootstrap.js') }}\"> </script>
            <script src= \"{{ asset('js/crgourmetcoffee.js.twig') }}\"> </script>
       {% endblock %}
    </body>
</html>", "layout.html.twig", "D:\\Programacion\\xampp\\htdocs\\crgc\\app\\Resources\\views\\layout.html.twig");
    }
}
