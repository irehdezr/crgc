<?php

/* layout.html.twig */
class __TwigTemplate_224c0c911975e2efc303f079c804daced2df91e71744310adaf1df71ffc8fb53 extends Twig_Template
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
        $__internal_98e445cacd5142ebc529c5a9fad0b396d12943fb7a1ec0b01aa618bd1365df32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98e445cacd5142ebc529c5a9fad0b396d12943fb7a1ec0b01aa618bd1365df32->enter($__internal_98e445cacd5142ebc529c5a9fad0b396d12943fb7a1ec0b01aa618bd1365df32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_3b961930c278fc62428ef91d8dd579fdc34f7e78084c9a8394a8da408ebb7d1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b961930c278fc62428ef91d8dd579fdc34f7e78084c9a8394a8da408ebb7d1e->enter($__internal_3b961930c278fc62428ef91d8dd579fdc34f7e78084c9a8394a8da408ebb7d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        $this->loadTemplate("header.html.twig", "layout.html.twig", 18)->display($context);
        // line 19
        echo "        </div>
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
        
        $__internal_98e445cacd5142ebc529c5a9fad0b396d12943fb7a1ec0b01aa618bd1365df32->leave($__internal_98e445cacd5142ebc529c5a9fad0b396d12943fb7a1ec0b01aa618bd1365df32_prof);

        
        $__internal_3b961930c278fc62428ef91d8dd579fdc34f7e78084c9a8394a8da408ebb7d1e->leave($__internal_3b961930c278fc62428ef91d8dd579fdc34f7e78084c9a8394a8da408ebb7d1e_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_f40fe2c146562028d370281297d33e3e723ef8560e5323916ad80ab489c97f3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f40fe2c146562028d370281297d33e3e723ef8560e5323916ad80ab489c97f3e->enter($__internal_f40fe2c146562028d370281297d33e3e723ef8560e5323916ad80ab489c97f3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9d9a6a18fec6ac4b7a7989179c9f80cd4520464090c261f35f81dd758cb3a386 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d9a6a18fec6ac4b7a7989179c9f80cd4520464090c261f35f81dd758cb3a386->enter($__internal_9d9a6a18fec6ac4b7a7989179c9f80cd4520464090c261f35f81dd758cb3a386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "                CRgourmetcoffee
            ";
        
        $__internal_9d9a6a18fec6ac4b7a7989179c9f80cd4520464090c261f35f81dd758cb3a386->leave($__internal_9d9a6a18fec6ac4b7a7989179c9f80cd4520464090c261f35f81dd758cb3a386_prof);

        
        $__internal_f40fe2c146562028d370281297d33e3e723ef8560e5323916ad80ab489c97f3e->leave($__internal_f40fe2c146562028d370281297d33e3e723ef8560e5323916ad80ab489c97f3e_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3670f9cc81b47439a15401a34449aa2eb431788e64926147d557f4b59e163898 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3670f9cc81b47439a15401a34449aa2eb431788e64926147d557f4b59e163898->enter($__internal_3670f9cc81b47439a15401a34449aa2eb431788e64926147d557f4b59e163898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3a2ff12779e32193ab544531c925c9a42989cb67cb63af9f79922eed4cef6317 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a2ff12779e32193ab544531c925c9a42989cb67cb63af9f79922eed4cef6317->enter($__internal_3a2ff12779e32193ab544531c925c9a42989cb67cb63af9f79922eed4cef6317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/css/bootstrap.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/css/crgourmetcoffee.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_3a2ff12779e32193ab544531c925c9a42989cb67cb63af9f79922eed4cef6317->leave($__internal_3a2ff12779e32193ab544531c925c9a42989cb67cb63af9f79922eed4cef6317_prof);

        
        $__internal_3670f9cc81b47439a15401a34449aa2eb431788e64926147d557f4b59e163898->leave($__internal_3670f9cc81b47439a15401a34449aa2eb431788e64926147d557f4b59e163898_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_d3d727eb0b3a106b7c7d41e9e95cfe72c653e27e02f1752baf98bd7d93f320ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3d727eb0b3a106b7c7d41e9e95cfe72c653e27e02f1752baf98bd7d93f320ae->enter($__internal_d3d727eb0b3a106b7c7d41e9e95cfe72c653e27e02f1752baf98bd7d93f320ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a51b0e2580a5977ffa56b9e118b13e33f63ae43dc31e5bad2bb0ddd222e9d900 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a51b0e2580a5977ffa56b9e118b13e33f63ae43dc31e5bad2bb0ddd222e9d900->enter($__internal_a51b0e2580a5977ffa56b9e118b13e33f63ae43dc31e5bad2bb0ddd222e9d900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 22
        echo "            ";
        
        $__internal_a51b0e2580a5977ffa56b9e118b13e33f63ae43dc31e5bad2bb0ddd222e9d900->leave($__internal_a51b0e2580a5977ffa56b9e118b13e33f63ae43dc31e5bad2bb0ddd222e9d900_prof);

        
        $__internal_d3d727eb0b3a106b7c7d41e9e95cfe72c653e27e02f1752baf98bd7d93f320ae->leave($__internal_d3d727eb0b3a106b7c7d41e9e95cfe72c653e27e02f1752baf98bd7d93f320ae_prof);

    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2d560e35dca0e0f4058c1c65a2431ebe5ccdd6ef766c2cd3fd45737f0bdef610 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d560e35dca0e0f4058c1c65a2431ebe5ccdd6ef766c2cd3fd45737f0bdef610->enter($__internal_2d560e35dca0e0f4058c1c65a2431ebe5ccdd6ef766c2cd3fd45737f0bdef610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7b4eca5d5adf2f2908ed273f12ce794911f74ac16d56886565f96951a592f84b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b4eca5d5adf2f2908ed273f12ce794911f74ac16d56886565f96951a592f84b->enter($__internal_7b4eca5d5adf2f2908ed273f12ce794911f74ac16d56886565f96951a592f84b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 28
        echo "            <script src= \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/js/jquery-3.1.0.min.js"), "html", null, true);
        echo "\"></script>
            <script src= \"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/js/bootstrap.js"), "html", null, true);
        echo "\"> </script>
            <script src= \"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/js/crgourmetcoffee.js.twig"), "html", null, true);
        echo "\"> </script>
       ";
        
        $__internal_7b4eca5d5adf2f2908ed273f12ce794911f74ac16d56886565f96951a592f84b->leave($__internal_7b4eca5d5adf2f2908ed273f12ce794911f74ac16d56886565f96951a592f84b_prof);

        
        $__internal_2d560e35dca0e0f4058c1c65a2431ebe5ccdd6ef766c2cd3fd45737f0bdef610->leave($__internal_2d560e35dca0e0f4058c1c65a2431ebe5ccdd6ef766c2cd3fd45737f0bdef610_prof);

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
        return array (  162 => 30,  158 => 29,  153 => 28,  144 => 27,  134 => 22,  125 => 21,  113 => 13,  108 => 12,  99 => 11,  88 => 7,  79 => 6,  68 => 32,  66 => 27,  63 => 26,  61 => 25,  57 => 23,  55 => 21,  51 => 19,  49 => 18,  44 => 15,  42 => 11,  38 => 9,  36 => 6,  29 => 1,);
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
        <div id=\"header\">
            {% include \"header.html.twig\"%}
        </div>
        <div id=\"content\">
            {% block body %}
            {% endblock %}
        </div>
        <div id=\"footer\">
            {% include \"footer.html.twig\"%}
        </div>
        {% block javascripts %}
            <script src= \"{{ asset('/web/public/js/jquery-3.1.0.min.js') }}\"></script>
            <script src= \"{{ asset('/web/public/js/bootstrap.js') }}\"> </script>
            <script src= \"{{ asset('/web/public/js/crgourmetcoffee.js.twig') }}\"> </script>
       {% endblock %}
    </body>
</html>", "layout.html.twig", "C:\\xampp\\htdocs\\app\\Resources\\views\\layout.html.twig");
    }
}
