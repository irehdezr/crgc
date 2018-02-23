<?php

/* layout.html.twig */
class __TwigTemplate_ef88fa0175c9b846136250dd93d264b41eb38ae867c823f989411685cd5fbedc extends Twig_Template
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
        $__internal_24a48353232464073819034945ff2ecb6e8939c3c15114b7842b3bcabce37842 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24a48353232464073819034945ff2ecb6e8939c3c15114b7842b3bcabce37842->enter($__internal_24a48353232464073819034945ff2ecb6e8939c3c15114b7842b3bcabce37842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        <div id=\"header\">
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("PageBundle:Default:header"));
        echo "
        </div>
        <div id=\"content\">
            ";
        // line 21
        $this->displayBlock('body', $context, $blocks);
        // line 23
        echo "        </div>
        <div id=\"footer\">
            ";
        // line 25
        $this->loadTemplate("footer.html.twig", "layout.html.twig", 25)->display($context);
        // line 26
        echo "        </div>
        ";
        // line 27
        $this->displayBlock('javascripts', $context, $blocks);
        // line 32
        echo "    </body>
</html>";
        
        $__internal_24a48353232464073819034945ff2ecb6e8939c3c15114b7842b3bcabce37842->leave($__internal_24a48353232464073819034945ff2ecb6e8939c3c15114b7842b3bcabce37842_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_847e825fd026dc552aa933977f3df787dd200de7c56aaa9e6131ee4909f3e794 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_847e825fd026dc552aa933977f3df787dd200de7c56aaa9e6131ee4909f3e794->enter($__internal_847e825fd026dc552aa933977f3df787dd200de7c56aaa9e6131ee4909f3e794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "                CRgourmetcoffee
            ";
        
        $__internal_847e825fd026dc552aa933977f3df787dd200de7c56aaa9e6131ee4909f3e794->leave($__internal_847e825fd026dc552aa933977f3df787dd200de7c56aaa9e6131ee4909f3e794_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_15d0c793a0179b3f8b2381d47a7f8d362352e54f937929e8b0045ca6a13fd68d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15d0c793a0179b3f8b2381d47a7f8d362352e54f937929e8b0045ca6a13fd68d->enter($__internal_15d0c793a0179b3f8b2381d47a7f8d362352e54f937929e8b0045ca6a13fd68d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/crgourmetcoffee.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_15d0c793a0179b3f8b2381d47a7f8d362352e54f937929e8b0045ca6a13fd68d->leave($__internal_15d0c793a0179b3f8b2381d47a7f8d362352e54f937929e8b0045ca6a13fd68d_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a657d4001a368f442694b0eb0f4c34f6f69df6c77d2d68cd2a6e39a0466adfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a657d4001a368f442694b0eb0f4c34f6f69df6c77d2d68cd2a6e39a0466adfc->enter($__internal_2a657d4001a368f442694b0eb0f4c34f6f69df6c77d2d68cd2a6e39a0466adfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 22
        echo "            ";
        
        $__internal_2a657d4001a368f442694b0eb0f4c34f6f69df6c77d2d68cd2a6e39a0466adfc->leave($__internal_2a657d4001a368f442694b0eb0f4c34f6f69df6c77d2d68cd2a6e39a0466adfc_prof);

    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_19663f74afe8ab73dec589e82aad56165a8e2e7fefee09ef5c8eb38ff392445b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19663f74afe8ab73dec589e82aad56165a8e2e7fefee09ef5c8eb38ff392445b->enter($__internal_19663f74afe8ab73dec589e82aad56165a8e2e7fefee09ef5c8eb38ff392445b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_19663f74afe8ab73dec589e82aad56165a8e2e7fefee09ef5c8eb38ff392445b->leave($__internal_19663f74afe8ab73dec589e82aad56165a8e2e7fefee09ef5c8eb38ff392445b_prof);

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
        <div id=\"header\">
            {{ render(controller('PageBundle:Default:header' )) }}
        </div>
        <div id=\"content\">
            {% block body %}
            {% endblock %}
        </div>
        <div id=\"footer\">
            {% include \"footer.html.twig\"%}
        </div>
        {% block javascripts %}
            <script src= \"{{ asset('js/jquery-3.1.0.min.js') }}\"></script>
            <script src= \"{{ asset('js/bootstrap.js') }}\"> </script>
            <script src= \"{{ asset('js/crgourmetcoffee.js') }}\"> </script>
       {% endblock %}
    </body>
</html>", "layout.html.twig", "D:\\Programacion\\xampp\\htdocs\\app\\app\\Resources\\views\\layout.html.twig");
    }
}
