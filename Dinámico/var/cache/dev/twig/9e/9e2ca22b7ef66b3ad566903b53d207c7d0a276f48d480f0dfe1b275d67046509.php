<?php

/* layout.html.twig */
class __TwigTemplate_59a22f57519d8cb9de99b0753a563fba7fdd5191fcde6742dab0a459c2bf1605 extends Twig_Template
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
        $__internal_f619008d52e3a5c105995b79e2604f7c422360fcd851d046f6f4d0fed37a3d71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f619008d52e3a5c105995b79e2604f7c422360fcd851d046f6f4d0fed37a3d71->enter($__internal_f619008d52e3a5c105995b79e2604f7c422360fcd851d046f6f4d0fed37a3d71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_3762a82913dc9c1cf89c2705fa8119c687d14f00b37c27ed8eb5f19a46be3f3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3762a82913dc9c1cf89c2705fa8119c687d14f00b37c27ed8eb5f19a46be3f3c->enter($__internal_3762a82913dc9c1cf89c2705fa8119c687d14f00b37c27ed8eb5f19a46be3f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        
        $__internal_f619008d52e3a5c105995b79e2604f7c422360fcd851d046f6f4d0fed37a3d71->leave($__internal_f619008d52e3a5c105995b79e2604f7c422360fcd851d046f6f4d0fed37a3d71_prof);

        
        $__internal_3762a82913dc9c1cf89c2705fa8119c687d14f00b37c27ed8eb5f19a46be3f3c->leave($__internal_3762a82913dc9c1cf89c2705fa8119c687d14f00b37c27ed8eb5f19a46be3f3c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5ef60af0e06433c3c994acc09ed20b10c0c26f6ed1fbe51ea32d6646454888e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ef60af0e06433c3c994acc09ed20b10c0c26f6ed1fbe51ea32d6646454888e7->enter($__internal_5ef60af0e06433c3c994acc09ed20b10c0c26f6ed1fbe51ea32d6646454888e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_30205080c2bc3500a76f9581f67b59dc77aab8f14153b71f80fcfd3abcbe9bc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30205080c2bc3500a76f9581f67b59dc77aab8f14153b71f80fcfd3abcbe9bc9->enter($__internal_30205080c2bc3500a76f9581f67b59dc77aab8f14153b71f80fcfd3abcbe9bc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CRgourmetcoffee";
        
        $__internal_30205080c2bc3500a76f9581f67b59dc77aab8f14153b71f80fcfd3abcbe9bc9->leave($__internal_30205080c2bc3500a76f9581f67b59dc77aab8f14153b71f80fcfd3abcbe9bc9_prof);

        
        $__internal_5ef60af0e06433c3c994acc09ed20b10c0c26f6ed1fbe51ea32d6646454888e7->leave($__internal_5ef60af0e06433c3c994acc09ed20b10c0c26f6ed1fbe51ea32d6646454888e7_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b98310cbd74c0d06de185bbdbbbb1ee98620eddb931666647e3e0876ccfcfa72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b98310cbd74c0d06de185bbdbbbb1ee98620eddb931666647e3e0876ccfcfa72->enter($__internal_b98310cbd74c0d06de185bbdbbbb1ee98620eddb931666647e3e0876ccfcfa72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_14b3498bfe115ddb86796ffa1d97d465f5124f8c4db0d3fa80dfa5e746d66fb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14b3498bfe115ddb86796ffa1d97d465f5124f8c4db0d3fa80dfa5e746d66fb8->enter($__internal_14b3498bfe115ddb86796ffa1d97d465f5124f8c4db0d3fa80dfa5e746d66fb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "                <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/bootstrap.css"), "html", null, true);
        echo "\" />
                <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/crgourmetcoffee.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_14b3498bfe115ddb86796ffa1d97d465f5124f8c4db0d3fa80dfa5e746d66fb8->leave($__internal_14b3498bfe115ddb86796ffa1d97d465f5124f8c4db0d3fa80dfa5e746d66fb8_prof);

        
        $__internal_b98310cbd74c0d06de185bbdbbbb1ee98620eddb931666647e3e0876ccfcfa72->leave($__internal_b98310cbd74c0d06de185bbdbbbb1ee98620eddb931666647e3e0876ccfcfa72_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_b7dc0c68854896a7c2fc828ea1ed74f1a01f10af4a5425a6ef6cf35746e71ddb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7dc0c68854896a7c2fc828ea1ed74f1a01f10af4a5425a6ef6cf35746e71ddb->enter($__internal_b7dc0c68854896a7c2fc828ea1ed74f1a01f10af4a5425a6ef6cf35746e71ddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_05e6ec970bc9ef3451c1fc1058da23f209e8c6718c078b15ac3c00bbf780c593 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05e6ec970bc9ef3451c1fc1058da23f209e8c6718c078b15ac3c00bbf780c593->enter($__internal_05e6ec970bc9ef3451c1fc1058da23f209e8c6718c078b15ac3c00bbf780c593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_05e6ec970bc9ef3451c1fc1058da23f209e8c6718c078b15ac3c00bbf780c593->leave($__internal_05e6ec970bc9ef3451c1fc1058da23f209e8c6718c078b15ac3c00bbf780c593_prof);

        
        $__internal_b7dc0c68854896a7c2fc828ea1ed74f1a01f10af4a5425a6ef6cf35746e71ddb->leave($__internal_b7dc0c68854896a7c2fc828ea1ed74f1a01f10af4a5425a6ef6cf35746e71ddb_prof);

    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_468a853f1dca854dcd9755b7c17b5899a7133178c15451bc88d94748fba51b49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_468a853f1dca854dcd9755b7c17b5899a7133178c15451bc88d94748fba51b49->enter($__internal_468a853f1dca854dcd9755b7c17b5899a7133178c15451bc88d94748fba51b49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a0408bcdd7b584c92d4107be6eb3d51843986487280cb5d0aac461dfc64b36f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0408bcdd7b584c92d4107be6eb3d51843986487280cb5d0aac461dfc64b36f0->enter($__internal_a0408bcdd7b584c92d4107be6eb3d51843986487280cb5d0aac461dfc64b36f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 23
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/jquery-3.1.0.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/bootstrap.js"), "html", null, true);
        echo "\"  </script>
       ";
        
        $__internal_a0408bcdd7b584c92d4107be6eb3d51843986487280cb5d0aac461dfc64b36f0->leave($__internal_a0408bcdd7b584c92d4107be6eb3d51843986487280cb5d0aac461dfc64b36f0_prof);

        
        $__internal_468a853f1dca854dcd9755b7c17b5899a7133178c15451bc88d94748fba51b49->leave($__internal_468a853f1dca854dcd9755b7c17b5899a7133178c15451bc88d94748fba51b49_prof);

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
        return array (  152 => 24,  147 => 23,  138 => 22,  121 => 17,  109 => 9,  104 => 8,  95 => 7,  77 => 5,  66 => 26,  64 => 22,  61 => 21,  59 => 20,  55 => 18,  53 => 17,  49 => 15,  47 => 14,  42 => 11,  40 => 7,  35 => 5,  29 => 1,);
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
</html>", "layout.html.twig", "/home/ubuntu/workspace/app/Resources/views/layout.html.twig");
    }
}
