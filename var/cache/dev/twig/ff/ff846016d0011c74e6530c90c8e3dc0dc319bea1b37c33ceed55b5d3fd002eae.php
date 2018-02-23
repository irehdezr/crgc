<?php

/* security.html.twig */
class __TwigTemplate_4297fc68bb286ed026a3fa208424ed5f313ed4c3201d5313b3a85832978bb89b extends Twig_Template
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
        $__internal_9cf5a60b4fc20165da9f7a2fe9d8926964cfbc87260af78e52277725f962ca92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cf5a60b4fc20165da9f7a2fe9d8926964cfbc87260af78e52277725f962ca92->enter($__internal_9cf5a60b4fc20165da9f7a2fe9d8926964cfbc87260af78e52277725f962ca92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security.html.twig"));

        $__internal_0b5ee22661cb5328306e98fc50b1b543dd14f9042a09cc25dcdd4237d0383253 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b5ee22661cb5328306e98fc50b1b543dd14f9042a09cc25dcdd4237d0383253->enter($__internal_0b5ee22661cb5328306e98fc50b1b543dd14f9042a09cc25dcdd4237d0383253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security.html.twig"));

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
        
        $__internal_9cf5a60b4fc20165da9f7a2fe9d8926964cfbc87260af78e52277725f962ca92->leave($__internal_9cf5a60b4fc20165da9f7a2fe9d8926964cfbc87260af78e52277725f962ca92_prof);

        
        $__internal_0b5ee22661cb5328306e98fc50b1b543dd14f9042a09cc25dcdd4237d0383253->leave($__internal_0b5ee22661cb5328306e98fc50b1b543dd14f9042a09cc25dcdd4237d0383253_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_c3e8fe40c058d6b02b2efc8db798d5efa1852da2b466155fd3882dcf8ae4d988 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3e8fe40c058d6b02b2efc8db798d5efa1852da2b466155fd3882dcf8ae4d988->enter($__internal_c3e8fe40c058d6b02b2efc8db798d5efa1852da2b466155fd3882dcf8ae4d988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8a7bdff68e847bb62c49c28bce16856b3d1108572d477cb49c1ab896516ab807 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a7bdff68e847bb62c49c28bce16856b3d1108572d477cb49c1ab896516ab807->enter($__internal_8a7bdff68e847bb62c49c28bce16856b3d1108572d477cb49c1ab896516ab807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "                CRgourmetcoffee
            ";
        
        $__internal_8a7bdff68e847bb62c49c28bce16856b3d1108572d477cb49c1ab896516ab807->leave($__internal_8a7bdff68e847bb62c49c28bce16856b3d1108572d477cb49c1ab896516ab807_prof);

        
        $__internal_c3e8fe40c058d6b02b2efc8db798d5efa1852da2b466155fd3882dcf8ae4d988->leave($__internal_c3e8fe40c058d6b02b2efc8db798d5efa1852da2b466155fd3882dcf8ae4d988_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4cbb8f39e1a222872d7a372776cf018d689c7af03fd1bca62b174f6e332c5b27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cbb8f39e1a222872d7a372776cf018d689c7af03fd1bca62b174f6e332c5b27->enter($__internal_4cbb8f39e1a222872d7a372776cf018d689c7af03fd1bca62b174f6e332c5b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_21965961c93227c0b8ad886f9b1cb034d89d699e93488d15e0a721e07538cffa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21965961c93227c0b8ad886f9b1cb034d89d699e93488d15e0a721e07538cffa->enter($__internal_21965961c93227c0b8ad886f9b1cb034d89d699e93488d15e0a721e07538cffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/css/bootstrap.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/css/crgourmetcoffee.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_21965961c93227c0b8ad886f9b1cb034d89d699e93488d15e0a721e07538cffa->leave($__internal_21965961c93227c0b8ad886f9b1cb034d89d699e93488d15e0a721e07538cffa_prof);

        
        $__internal_4cbb8f39e1a222872d7a372776cf018d689c7af03fd1bca62b174f6e332c5b27->leave($__internal_4cbb8f39e1a222872d7a372776cf018d689c7af03fd1bca62b174f6e332c5b27_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_0879067837c5b552384e7279b84cd7948588b18aa82b332c6d0dfb52060e27dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0879067837c5b552384e7279b84cd7948588b18aa82b332c6d0dfb52060e27dd->enter($__internal_0879067837c5b552384e7279b84cd7948588b18aa82b332c6d0dfb52060e27dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5081489612544b137a520c3bd1ae0e1e83cbcdac5450281164f12229df3abde7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5081489612544b137a520c3bd1ae0e1e83cbcdac5450281164f12229df3abde7->enter($__internal_5081489612544b137a520c3bd1ae0e1e83cbcdac5450281164f12229df3abde7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "            ";
        
        $__internal_5081489612544b137a520c3bd1ae0e1e83cbcdac5450281164f12229df3abde7->leave($__internal_5081489612544b137a520c3bd1ae0e1e83cbcdac5450281164f12229df3abde7_prof);

        
        $__internal_0879067837c5b552384e7279b84cd7948588b18aa82b332c6d0dfb52060e27dd->leave($__internal_0879067837c5b552384e7279b84cd7948588b18aa82b332c6d0dfb52060e27dd_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_22d273e928b59389454486c4481670cbd05e02098f44bb851f7a7ed52638b17f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22d273e928b59389454486c4481670cbd05e02098f44bb851f7a7ed52638b17f->enter($__internal_22d273e928b59389454486c4481670cbd05e02098f44bb851f7a7ed52638b17f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_cab4aca0852ef0573585a858ba2ed498a6b5976be5bd7bf5da994a5bca4b01ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cab4aca0852ef0573585a858ba2ed498a6b5976be5bd7bf5da994a5bca4b01ec->enter($__internal_cab4aca0852ef0573585a858ba2ed498a6b5976be5bd7bf5da994a5bca4b01ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_cab4aca0852ef0573585a858ba2ed498a6b5976be5bd7bf5da994a5bca4b01ec->leave($__internal_cab4aca0852ef0573585a858ba2ed498a6b5976be5bd7bf5da994a5bca4b01ec_prof);

        
        $__internal_22d273e928b59389454486c4481670cbd05e02098f44bb851f7a7ed52638b17f->leave($__internal_22d273e928b59389454486c4481670cbd05e02098f44bb851f7a7ed52638b17f_prof);

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
</html>", "security.html.twig", "C:\\xampp\\htdocs\\app\\Resources\\views\\security.html.twig");
    }
}
