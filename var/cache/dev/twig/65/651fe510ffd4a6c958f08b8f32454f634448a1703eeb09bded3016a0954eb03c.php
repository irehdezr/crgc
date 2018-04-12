<?php

/* ::layout.html.twig */
class __TwigTemplate_f9eb6d9840835c60b84976b24bb02b3e11d151821fccbda5807f87396a51cfcd extends Twig_Template
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
        $__internal_6390cd4ef6bc7a05534276f2db7c9cec79c746888fc608588db33803ac969195 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6390cd4ef6bc7a05534276f2db7c9cec79c746888fc608588db33803ac969195->enter($__internal_6390cd4ef6bc7a05534276f2db7c9cec79c746888fc608588db33803ac969195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_2390061ae206308f22c8afbe27ce10768796739ae5a31d412ba8862b6706c01e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2390061ae206308f22c8afbe27ce10768796739ae5a31d412ba8862b6706c01e->enter($__internal_2390061ae206308f22c8afbe27ce10768796739ae5a31d412ba8862b6706c01e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        $this->loadTemplate("footer.html.twig", "::layout.html.twig", 25)->display($context);
        // line 26
        echo "        </footer>
        ";
        // line 27
        $this->displayBlock('javascripts', $context, $blocks);
        // line 36
        echo "    </body>
</html>";
        
        $__internal_6390cd4ef6bc7a05534276f2db7c9cec79c746888fc608588db33803ac969195->leave($__internal_6390cd4ef6bc7a05534276f2db7c9cec79c746888fc608588db33803ac969195_prof);

        
        $__internal_2390061ae206308f22c8afbe27ce10768796739ae5a31d412ba8862b6706c01e->leave($__internal_2390061ae206308f22c8afbe27ce10768796739ae5a31d412ba8862b6706c01e_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_98540dc9ad1c5bd3f5ae03d0676717ce85ba1ea021084821543e2e82d4c2dac4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98540dc9ad1c5bd3f5ae03d0676717ce85ba1ea021084821543e2e82d4c2dac4->enter($__internal_98540dc9ad1c5bd3f5ae03d0676717ce85ba1ea021084821543e2e82d4c2dac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c20ae57c91bbb38a1263c4dcc36468adbededb63cf28880a92dbfba83afaff9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c20ae57c91bbb38a1263c4dcc36468adbededb63cf28880a92dbfba83afaff9b->enter($__internal_c20ae57c91bbb38a1263c4dcc36468adbededb63cf28880a92dbfba83afaff9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "                CRgourmetcoffee
            ";
        
        $__internal_c20ae57c91bbb38a1263c4dcc36468adbededb63cf28880a92dbfba83afaff9b->leave($__internal_c20ae57c91bbb38a1263c4dcc36468adbededb63cf28880a92dbfba83afaff9b_prof);

        
        $__internal_98540dc9ad1c5bd3f5ae03d0676717ce85ba1ea021084821543e2e82d4c2dac4->leave($__internal_98540dc9ad1c5bd3f5ae03d0676717ce85ba1ea021084821543e2e82d4c2dac4_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5082826dd11767a66d25a7ee1a5c934a5f0ba0c01e665d0828c33f605db10b5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5082826dd11767a66d25a7ee1a5c934a5f0ba0c01e665d0828c33f605db10b5e->enter($__internal_5082826dd11767a66d25a7ee1a5c934a5f0ba0c01e665d0828c33f605db10b5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0a4b7983c36f7d14ff9e9b6cae13de426432b692e4cbaa617b15842adce55b3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a4b7983c36f7d14ff9e9b6cae13de426432b692e4cbaa617b15842adce55b3f->enter($__internal_0a4b7983c36f7d14ff9e9b6cae13de426432b692e4cbaa617b15842adce55b3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/crgourmetcoffee.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_0a4b7983c36f7d14ff9e9b6cae13de426432b692e4cbaa617b15842adce55b3f->leave($__internal_0a4b7983c36f7d14ff9e9b6cae13de426432b692e4cbaa617b15842adce55b3f_prof);

        
        $__internal_5082826dd11767a66d25a7ee1a5c934a5f0ba0c01e665d0828c33f605db10b5e->leave($__internal_5082826dd11767a66d25a7ee1a5c934a5f0ba0c01e665d0828c33f605db10b5e_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_a0ac0c4faca6affebfd71f60fb42c83cd6cb1408466ba902a632b424d8fcf8a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0ac0c4faca6affebfd71f60fb42c83cd6cb1408466ba902a632b424d8fcf8a9->enter($__internal_a0ac0c4faca6affebfd71f60fb42c83cd6cb1408466ba902a632b424d8fcf8a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_707526e90d11be2304fa6fafaa8bfe93e0b55eecdf58300c61562ce20497517e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_707526e90d11be2304fa6fafaa8bfe93e0b55eecdf58300c61562ce20497517e->enter($__internal_707526e90d11be2304fa6fafaa8bfe93e0b55eecdf58300c61562ce20497517e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 22
        echo "            ";
        
        $__internal_707526e90d11be2304fa6fafaa8bfe93e0b55eecdf58300c61562ce20497517e->leave($__internal_707526e90d11be2304fa6fafaa8bfe93e0b55eecdf58300c61562ce20497517e_prof);

        
        $__internal_a0ac0c4faca6affebfd71f60fb42c83cd6cb1408466ba902a632b424d8fcf8a9->leave($__internal_a0ac0c4faca6affebfd71f60fb42c83cd6cb1408466ba902a632b424d8fcf8a9_prof);

    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4c27d1253711cd4101f7a7da1691cc6cf23342b34df9a6d9119ac7f109970bfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c27d1253711cd4101f7a7da1691cc6cf23342b34df9a6d9119ac7f109970bfc->enter($__internal_4c27d1253711cd4101f7a7da1691cc6cf23342b34df9a6d9119ac7f109970bfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5fc9b1806b0c3603ff42535c0712678ddcfc9201ccfe69d608dbfb1f4b1c099b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fc9b1806b0c3603ff42535c0712678ddcfc9201ccfe69d608dbfb1f4b1c099b->enter($__internal_5fc9b1806b0c3603ff42535c0712678ddcfc9201ccfe69d608dbfb1f4b1c099b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 28
        echo "\t\t\t<script>
\t\t\t\tvar addToCartUrl = \"";
        // line 29
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_add_presentation_to_cart"), "js"), "html", null, true);
        echo "\";
                var homeUrl = \"";
        // line 30
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_homepage"), "js"), "html", null, true);
        echo "\";
\t\t\t</script>
            <script src= \"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.1.0.min.js"), "html", null, true);
        echo "\"></script>
            <script src= \"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"> </script>
            <script src= \"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/crgourmetcoffee.js"), "html", null, true);
        echo "\"> </script>
       ";
        
        $__internal_5fc9b1806b0c3603ff42535c0712678ddcfc9201ccfe69d608dbfb1f4b1c099b->leave($__internal_5fc9b1806b0c3603ff42535c0712678ddcfc9201ccfe69d608dbfb1f4b1c099b_prof);

        
        $__internal_4c27d1253711cd4101f7a7da1691cc6cf23342b34df9a6d9119ac7f109970bfc->leave($__internal_4c27d1253711cd4101f7a7da1691cc6cf23342b34df9a6d9119ac7f109970bfc_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 34,  169 => 33,  165 => 32,  160 => 30,  156 => 29,  153 => 28,  144 => 27,  134 => 22,  125 => 21,  113 => 13,  108 => 12,  99 => 11,  88 => 7,  79 => 6,  68 => 36,  66 => 27,  63 => 26,  61 => 25,  57 => 23,  55 => 21,  49 => 18,  44 => 15,  42 => 11,  38 => 9,  36 => 6,  29 => 1,);
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
                var homeUrl = \"{{ path('page_homepage')|escape('js') }}\";
\t\t\t</script>
            <script src= \"{{ asset('js/jquery-3.1.0.min.js') }}\"></script>
            <script src= \"{{ asset('js/bootstrap.js') }}\"> </script>
            <script src= \"{{ asset('js/crgourmetcoffee.js') }}\"> </script>
       {% endblock %}
    </body>
</html>", "::layout.html.twig", "C:\\xampp\\htdocs\\crgc\\app/Resources\\views/layout.html.twig");
    }
}
