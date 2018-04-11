<?php

/* security.html.twig */
class __TwigTemplate_53f42dd41d95e0eda481e95df19d023e58c1f5aff48e1340b473433fcc103a5a extends Twig_Template
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
        $__internal_469d1719e78f6ef5e1f1c65e4c673ed3be6e3cfeddf50690b28522313728bbd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_469d1719e78f6ef5e1f1c65e4c673ed3be6e3cfeddf50690b28522313728bbd2->enter($__internal_469d1719e78f6ef5e1f1c65e4c673ed3be6e3cfeddf50690b28522313728bbd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security.html.twig"));

        $__internal_543e24c3b87e0f0c6f41b498a8d2ea521233bb797385fad851fae81994eb8f9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_543e24c3b87e0f0c6f41b498a8d2ea521233bb797385fad851fae81994eb8f9a->enter($__internal_543e24c3b87e0f0c6f41b498a8d2ea521233bb797385fad851fae81994eb8f9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security.html.twig"));

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
        
        $__internal_469d1719e78f6ef5e1f1c65e4c673ed3be6e3cfeddf50690b28522313728bbd2->leave($__internal_469d1719e78f6ef5e1f1c65e4c673ed3be6e3cfeddf50690b28522313728bbd2_prof);

        
        $__internal_543e24c3b87e0f0c6f41b498a8d2ea521233bb797385fad851fae81994eb8f9a->leave($__internal_543e24c3b87e0f0c6f41b498a8d2ea521233bb797385fad851fae81994eb8f9a_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_1f9ddba509992278fc41b652c51ee7be5f7361a963e99bb64d9243499397e165 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f9ddba509992278fc41b652c51ee7be5f7361a963e99bb64d9243499397e165->enter($__internal_1f9ddba509992278fc41b652c51ee7be5f7361a963e99bb64d9243499397e165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_39294210ac41e8ba411ac8c9e1162e686359ae2cd5bb8edc7fe3f60dd29fb15b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39294210ac41e8ba411ac8c9e1162e686359ae2cd5bb8edc7fe3f60dd29fb15b->enter($__internal_39294210ac41e8ba411ac8c9e1162e686359ae2cd5bb8edc7fe3f60dd29fb15b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "                CRgourmetcoffee
            ";
        
        $__internal_39294210ac41e8ba411ac8c9e1162e686359ae2cd5bb8edc7fe3f60dd29fb15b->leave($__internal_39294210ac41e8ba411ac8c9e1162e686359ae2cd5bb8edc7fe3f60dd29fb15b_prof);

        
        $__internal_1f9ddba509992278fc41b652c51ee7be5f7361a963e99bb64d9243499397e165->leave($__internal_1f9ddba509992278fc41b652c51ee7be5f7361a963e99bb64d9243499397e165_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_342911d2624fe2cef5b4510b2867922cf3637c13b98646ce27954b986affb364 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_342911d2624fe2cef5b4510b2867922cf3637c13b98646ce27954b986affb364->enter($__internal_342911d2624fe2cef5b4510b2867922cf3637c13b98646ce27954b986affb364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_95f1953aa403250b69d0c264093f8c5c6e3eb1144d04484bf01ea47f014f7717 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95f1953aa403250b69d0c264093f8c5c6e3eb1144d04484bf01ea47f014f7717->enter($__internal_95f1953aa403250b69d0c264093f8c5c6e3eb1144d04484bf01ea47f014f7717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/css/bootstrap.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/css/crgourmetcoffee.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_95f1953aa403250b69d0c264093f8c5c6e3eb1144d04484bf01ea47f014f7717->leave($__internal_95f1953aa403250b69d0c264093f8c5c6e3eb1144d04484bf01ea47f014f7717_prof);

        
        $__internal_342911d2624fe2cef5b4510b2867922cf3637c13b98646ce27954b986affb364->leave($__internal_342911d2624fe2cef5b4510b2867922cf3637c13b98646ce27954b986affb364_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e76be321245263c67c72251ff9d78c281915b2b8db850bb76f5670571f8f02c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e76be321245263c67c72251ff9d78c281915b2b8db850bb76f5670571f8f02c->enter($__internal_9e76be321245263c67c72251ff9d78c281915b2b8db850bb76f5670571f8f02c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1a78fcd26d7186fb74438e213bf66f980a62a0505e729f9c0c5c214eace97e86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a78fcd26d7186fb74438e213bf66f980a62a0505e729f9c0c5c214eace97e86->enter($__internal_1a78fcd26d7186fb74438e213bf66f980a62a0505e729f9c0c5c214eace97e86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "            ";
        
        $__internal_1a78fcd26d7186fb74438e213bf66f980a62a0505e729f9c0c5c214eace97e86->leave($__internal_1a78fcd26d7186fb74438e213bf66f980a62a0505e729f9c0c5c214eace97e86_prof);

        
        $__internal_9e76be321245263c67c72251ff9d78c281915b2b8db850bb76f5670571f8f02c->leave($__internal_9e76be321245263c67c72251ff9d78c281915b2b8db850bb76f5670571f8f02c_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_910cf982c931104f6b7ed81412bea4673b18c729f7df3564c13d6b602527af67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_910cf982c931104f6b7ed81412bea4673b18c729f7df3564c13d6b602527af67->enter($__internal_910cf982c931104f6b7ed81412bea4673b18c729f7df3564c13d6b602527af67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_257457091e5d8d9aefca06ada3f8f60c0919136a9d1be4928069e8b4648cc0c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_257457091e5d8d9aefca06ada3f8f60c0919136a9d1be4928069e8b4648cc0c7->enter($__internal_257457091e5d8d9aefca06ada3f8f60c0919136a9d1be4928069e8b4648cc0c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_257457091e5d8d9aefca06ada3f8f60c0919136a9d1be4928069e8b4648cc0c7->leave($__internal_257457091e5d8d9aefca06ada3f8f60c0919136a9d1be4928069e8b4648cc0c7_prof);

        
        $__internal_910cf982c931104f6b7ed81412bea4673b18c729f7df3564c13d6b602527af67->leave($__internal_910cf982c931104f6b7ed81412bea4673b18c729f7df3564c13d6b602527af67_prof);

    }

    public function getTemplateName()
    {
        return "security.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  150 => 24,  146 => 23,  141 => 22,  132 => 21,  122 => 19,  113 => 18,  101 => 13,  96 => 12,  87 => 11,  76 => 7,  67 => 6,  56 => 26,  54 => 21,  51 => 20,  49 => 18,  44 => 15,  42 => 11,  38 => 9,  36 => 6,  29 => 1,);
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
