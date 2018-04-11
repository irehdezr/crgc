<?php

/* layout.html.twig */
class __TwigTemplate_1d65d2cbb85a32dc48eb261514ec01895b3fcbdf14d485ed7af5f468f4ddebbb extends Twig_Template
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
        $__internal_07c4193a56191c7aec7b355735912f4e52f494c4cecf7e155001ff91bc618861 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07c4193a56191c7aec7b355735912f4e52f494c4cecf7e155001ff91bc618861->enter($__internal_07c4193a56191c7aec7b355735912f4e52f494c4cecf7e155001ff91bc618861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_b858cf931bb8648abdd50bbccf5f6f5a937a9e875fa0d034a95eca12002bd50a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b858cf931bb8648abdd50bbccf5f6f5a937a9e875fa0d034a95eca12002bd50a->enter($__internal_b858cf931bb8648abdd50bbccf5f6f5a937a9e875fa0d034a95eca12002bd50a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        // line 35
        echo "    </body>
</html>";
        
        $__internal_07c4193a56191c7aec7b355735912f4e52f494c4cecf7e155001ff91bc618861->leave($__internal_07c4193a56191c7aec7b355735912f4e52f494c4cecf7e155001ff91bc618861_prof);

        
        $__internal_b858cf931bb8648abdd50bbccf5f6f5a937a9e875fa0d034a95eca12002bd50a->leave($__internal_b858cf931bb8648abdd50bbccf5f6f5a937a9e875fa0d034a95eca12002bd50a_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_986ab3dd52900e97d5cde7c380a85129cf926358a2149653ce0e23db45f749e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_986ab3dd52900e97d5cde7c380a85129cf926358a2149653ce0e23db45f749e5->enter($__internal_986ab3dd52900e97d5cde7c380a85129cf926358a2149653ce0e23db45f749e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5f62f11c95d7cceefc3cd3d6be9bba7f0eaf6e14a64c046e5d8b896091c85a73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f62f11c95d7cceefc3cd3d6be9bba7f0eaf6e14a64c046e5d8b896091c85a73->enter($__internal_5f62f11c95d7cceefc3cd3d6be9bba7f0eaf6e14a64c046e5d8b896091c85a73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "                CRgourmetcoffee
            ";
        
        $__internal_5f62f11c95d7cceefc3cd3d6be9bba7f0eaf6e14a64c046e5d8b896091c85a73->leave($__internal_5f62f11c95d7cceefc3cd3d6be9bba7f0eaf6e14a64c046e5d8b896091c85a73_prof);

        
        $__internal_986ab3dd52900e97d5cde7c380a85129cf926358a2149653ce0e23db45f749e5->leave($__internal_986ab3dd52900e97d5cde7c380a85129cf926358a2149653ce0e23db45f749e5_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7226197e3c1ef90a0ef46485517f667a65207f718498f8ae4b4d695d883a8a44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7226197e3c1ef90a0ef46485517f667a65207f718498f8ae4b4d695d883a8a44->enter($__internal_7226197e3c1ef90a0ef46485517f667a65207f718498f8ae4b4d695d883a8a44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c49ebb18e407f5e6aa9f0720f2a798d0dae494d0764d17e11b4b8cc4c516243c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c49ebb18e407f5e6aa9f0720f2a798d0dae494d0764d17e11b4b8cc4c516243c->enter($__internal_c49ebb18e407f5e6aa9f0720f2a798d0dae494d0764d17e11b4b8cc4c516243c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/crgourmetcoffee.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_c49ebb18e407f5e6aa9f0720f2a798d0dae494d0764d17e11b4b8cc4c516243c->leave($__internal_c49ebb18e407f5e6aa9f0720f2a798d0dae494d0764d17e11b4b8cc4c516243c_prof);

        
        $__internal_7226197e3c1ef90a0ef46485517f667a65207f718498f8ae4b4d695d883a8a44->leave($__internal_7226197e3c1ef90a0ef46485517f667a65207f718498f8ae4b4d695d883a8a44_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_936e810e387b3df57d6ec4cf01444498cdfd5718c1782dde9e91a260743a03fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_936e810e387b3df57d6ec4cf01444498cdfd5718c1782dde9e91a260743a03fc->enter($__internal_936e810e387b3df57d6ec4cf01444498cdfd5718c1782dde9e91a260743a03fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4b5d7026aa8a04df6e5d88069939e83657b1f344919d1fdb59bcbeaa91740bb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b5d7026aa8a04df6e5d88069939e83657b1f344919d1fdb59bcbeaa91740bb5->enter($__internal_4b5d7026aa8a04df6e5d88069939e83657b1f344919d1fdb59bcbeaa91740bb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 22
        echo "            ";
        
        $__internal_4b5d7026aa8a04df6e5d88069939e83657b1f344919d1fdb59bcbeaa91740bb5->leave($__internal_4b5d7026aa8a04df6e5d88069939e83657b1f344919d1fdb59bcbeaa91740bb5_prof);

        
        $__internal_936e810e387b3df57d6ec4cf01444498cdfd5718c1782dde9e91a260743a03fc->leave($__internal_936e810e387b3df57d6ec4cf01444498cdfd5718c1782dde9e91a260743a03fc_prof);

    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_63f2b41ca4c78f4840986a6c743c251ceebb29844277763efdc6d4c46ef49f22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63f2b41ca4c78f4840986a6c743c251ceebb29844277763efdc6d4c46ef49f22->enter($__internal_63f2b41ca4c78f4840986a6c743c251ceebb29844277763efdc6d4c46ef49f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5e0c0a04e654701f84f1c6cec3ca4764e660d9227cb1552b134ab8620da40684 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e0c0a04e654701f84f1c6cec3ca4764e660d9227cb1552b134ab8620da40684->enter($__internal_5e0c0a04e654701f84f1c6cec3ca4764e660d9227cb1552b134ab8620da40684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 28
        echo "\t\t\t<script>
\t\t\t\tvar addToCartUrl = \"";
        // line 29
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_add_presentation_to_cart"), "js"), "html", null, true);
        echo "\";
\t\t\t</script>
            <script src= \"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.1.0.min.js"), "html", null, true);
        echo "\"></script>
            <script src= \"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"> </script>
            <script src= \"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/crgourmetcoffee.js"), "html", null, true);
        echo "\"> </script>
       ";
        
        $__internal_5e0c0a04e654701f84f1c6cec3ca4764e660d9227cb1552b134ab8620da40684->leave($__internal_5e0c0a04e654701f84f1c6cec3ca4764e660d9227cb1552b134ab8620da40684_prof);

        
        $__internal_63f2b41ca4c78f4840986a6c743c251ceebb29844277763efdc6d4c46ef49f22->leave($__internal_63f2b41ca4c78f4840986a6c743c251ceebb29844277763efdc6d4c46ef49f22_prof);

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
        return array (  169 => 33,  165 => 32,  161 => 31,  156 => 29,  153 => 28,  144 => 27,  134 => 22,  125 => 21,  113 => 13,  108 => 12,  99 => 11,  88 => 7,  79 => 6,  68 => 35,  66 => 27,  63 => 26,  61 => 25,  57 => 23,  55 => 21,  49 => 18,  44 => 15,  42 => 11,  38 => 9,  36 => 6,  29 => 1,);
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
\t\t\t<script>
\t\t\t\tvar addToCartUrl = \"{{ path('product_add_presentation_to_cart')|escape('js') }}\";
\t\t\t</script>
            <script src= \"{{ asset('js/jquery-3.1.0.min.js') }}\"></script>
            <script src= \"{{ asset('js/bootstrap.js') }}\"> </script>
            <script src= \"{{ asset('js/crgourmetcoffee.js') }}\"> </script>
       {% endblock %}
    </body>
</html>", "layout.html.twig", "C:\\xampp\\htdocs\\crgc\\app\\Resources\\views\\layout.html.twig");
    }
}
