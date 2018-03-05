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
        $__internal_568c49621e1a576fa72f2fe920fad478945a85071a82ee99fe2dd65af5f3c323 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_568c49621e1a576fa72f2fe920fad478945a85071a82ee99fe2dd65af5f3c323->enter($__internal_568c49621e1a576fa72f2fe920fad478945a85071a82ee99fe2dd65af5f3c323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        
        $__internal_568c49621e1a576fa72f2fe920fad478945a85071a82ee99fe2dd65af5f3c323->leave($__internal_568c49621e1a576fa72f2fe920fad478945a85071a82ee99fe2dd65af5f3c323_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_8382f7b64f6d93d6e74e80c460766fcf2390a30aed5069b549089ac068ff1a1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8382f7b64f6d93d6e74e80c460766fcf2390a30aed5069b549089ac068ff1a1f->enter($__internal_8382f7b64f6d93d6e74e80c460766fcf2390a30aed5069b549089ac068ff1a1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "                CRgourmetcoffee
            ";
        
        $__internal_8382f7b64f6d93d6e74e80c460766fcf2390a30aed5069b549089ac068ff1a1f->leave($__internal_8382f7b64f6d93d6e74e80c460766fcf2390a30aed5069b549089ac068ff1a1f_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b7586fffb772c9551ef91c7ab76ed34d8bef77e9b14b900eaf5fd63f801e4423 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7586fffb772c9551ef91c7ab76ed34d8bef77e9b14b900eaf5fd63f801e4423->enter($__internal_b7586fffb772c9551ef91c7ab76ed34d8bef77e9b14b900eaf5fd63f801e4423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/crgourmetcoffee.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_b7586fffb772c9551ef91c7ab76ed34d8bef77e9b14b900eaf5fd63f801e4423->leave($__internal_b7586fffb772c9551ef91c7ab76ed34d8bef77e9b14b900eaf5fd63f801e4423_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_a50187b484ad022bf3bec72018f4ee860a8bb48851399ee737e4149b1055d4b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a50187b484ad022bf3bec72018f4ee860a8bb48851399ee737e4149b1055d4b6->enter($__internal_a50187b484ad022bf3bec72018f4ee860a8bb48851399ee737e4149b1055d4b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 22
        echo "            ";
        
        $__internal_a50187b484ad022bf3bec72018f4ee860a8bb48851399ee737e4149b1055d4b6->leave($__internal_a50187b484ad022bf3bec72018f4ee860a8bb48851399ee737e4149b1055d4b6_prof);

    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3253abb726c870050438427be32bc120c5cca4dc3dd1808b51691ccd07bde09f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3253abb726c870050438427be32bc120c5cca4dc3dd1808b51691ccd07bde09f->enter($__internal_3253abb726c870050438427be32bc120c5cca4dc3dd1808b51691ccd07bde09f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/crgourmetcoffee.js"), "html", null, true);
        echo "\"> </script>
       ";
        
        $__internal_3253abb726c870050438427be32bc120c5cca4dc3dd1808b51691ccd07bde09f->leave($__internal_3253abb726c870050438427be32bc120c5cca4dc3dd1808b51691ccd07bde09f_prof);

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
            <script src= \"{{ asset('js/crgourmetcoffee.js') }}\"> </script>
       {% endblock %}
    </body>
</html>", "layout.html.twig", "D:\\Programacion\\xampp\\htdocs\\crgc\\app\\Resources\\views\\layout.html.twig");
    }
}
