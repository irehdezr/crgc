<?php

/* layout.html.twig */
class __TwigTemplate_efdc6cf63ca69b8c9f43a33462ec05784f0d217bc816ac8ba983c9d24797e631 extends Twig_Template
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
        $__internal_0f3eb03643312fe218511d45b4e83169fb45d2e803937b4bb2e4843fd83bdd9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f3eb03643312fe218511d45b4e83169fb45d2e803937b4bb2e4843fd83bdd9d->enter($__internal_0f3eb03643312fe218511d45b4e83169fb45d2e803937b4bb2e4843fd83bdd9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_a096886111f6b418fb73c303d04314669c3d0515a233a3873e06dea9567607de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a096886111f6b418fb73c303d04314669c3d0515a233a3873e06dea9567607de->enter($__internal_a096886111f6b418fb73c303d04314669c3d0515a233a3873e06dea9567607de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        
        $__internal_0f3eb03643312fe218511d45b4e83169fb45d2e803937b4bb2e4843fd83bdd9d->leave($__internal_0f3eb03643312fe218511d45b4e83169fb45d2e803937b4bb2e4843fd83bdd9d_prof);

        
        $__internal_a096886111f6b418fb73c303d04314669c3d0515a233a3873e06dea9567607de->leave($__internal_a096886111f6b418fb73c303d04314669c3d0515a233a3873e06dea9567607de_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_9c7b9ec8412c95c086a39e2cbcbd05c4c8ada1d8b904e180e9342eb662782ad5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c7b9ec8412c95c086a39e2cbcbd05c4c8ada1d8b904e180e9342eb662782ad5->enter($__internal_9c7b9ec8412c95c086a39e2cbcbd05c4c8ada1d8b904e180e9342eb662782ad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_814ff965d4d5f8ac2bcd9e288bc779781ba3407363161035e82a6dbfe737adac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_814ff965d4d5f8ac2bcd9e288bc779781ba3407363161035e82a6dbfe737adac->enter($__internal_814ff965d4d5f8ac2bcd9e288bc779781ba3407363161035e82a6dbfe737adac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "                CRgourmetcoffee
            ";
        
        $__internal_814ff965d4d5f8ac2bcd9e288bc779781ba3407363161035e82a6dbfe737adac->leave($__internal_814ff965d4d5f8ac2bcd9e288bc779781ba3407363161035e82a6dbfe737adac_prof);

        
        $__internal_9c7b9ec8412c95c086a39e2cbcbd05c4c8ada1d8b904e180e9342eb662782ad5->leave($__internal_9c7b9ec8412c95c086a39e2cbcbd05c4c8ada1d8b904e180e9342eb662782ad5_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ebf9db081f61941e2f239db4c3efbca4c18a9f7460df6b8226060124f938f757 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebf9db081f61941e2f239db4c3efbca4c18a9f7460df6b8226060124f938f757->enter($__internal_ebf9db081f61941e2f239db4c3efbca4c18a9f7460df6b8226060124f938f757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f251b0320512a790859990b974ea406420cb56574b959cef4717af1e122708ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f251b0320512a790859990b974ea406420cb56574b959cef4717af1e122708ba->enter($__internal_f251b0320512a790859990b974ea406420cb56574b959cef4717af1e122708ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/crgourmetcoffee.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_f251b0320512a790859990b974ea406420cb56574b959cef4717af1e122708ba->leave($__internal_f251b0320512a790859990b974ea406420cb56574b959cef4717af1e122708ba_prof);

        
        $__internal_ebf9db081f61941e2f239db4c3efbca4c18a9f7460df6b8226060124f938f757->leave($__internal_ebf9db081f61941e2f239db4c3efbca4c18a9f7460df6b8226060124f938f757_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_86257c90ff0580fe2b05ca80612b74644fb7f77ddf3d82d428bc30aee38f29ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86257c90ff0580fe2b05ca80612b74644fb7f77ddf3d82d428bc30aee38f29ba->enter($__internal_86257c90ff0580fe2b05ca80612b74644fb7f77ddf3d82d428bc30aee38f29ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8ad0fbda2ea2982346d31173e4590eb1268b51f6ae98b334f9c9ad2ef639530b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ad0fbda2ea2982346d31173e4590eb1268b51f6ae98b334f9c9ad2ef639530b->enter($__internal_8ad0fbda2ea2982346d31173e4590eb1268b51f6ae98b334f9c9ad2ef639530b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 22
        echo "            ";
        
        $__internal_8ad0fbda2ea2982346d31173e4590eb1268b51f6ae98b334f9c9ad2ef639530b->leave($__internal_8ad0fbda2ea2982346d31173e4590eb1268b51f6ae98b334f9c9ad2ef639530b_prof);

        
        $__internal_86257c90ff0580fe2b05ca80612b74644fb7f77ddf3d82d428bc30aee38f29ba->leave($__internal_86257c90ff0580fe2b05ca80612b74644fb7f77ddf3d82d428bc30aee38f29ba_prof);

    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9ea4c1cea0a3bc88fe6f8aef144d5485b5b46fbfc7291c574558ca55ec1eac40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ea4c1cea0a3bc88fe6f8aef144d5485b5b46fbfc7291c574558ca55ec1eac40->enter($__internal_9ea4c1cea0a3bc88fe6f8aef144d5485b5b46fbfc7291c574558ca55ec1eac40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0ed8da371fc58f29620708845d548dbe9711b39f4f520e1db574345bb5a0fdd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ed8da371fc58f29620708845d548dbe9711b39f4f520e1db574345bb5a0fdd3->enter($__internal_0ed8da371fc58f29620708845d548dbe9711b39f4f520e1db574345bb5a0fdd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_0ed8da371fc58f29620708845d548dbe9711b39f4f520e1db574345bb5a0fdd3->leave($__internal_0ed8da371fc58f29620708845d548dbe9711b39f4f520e1db574345bb5a0fdd3_prof);

        
        $__internal_9ea4c1cea0a3bc88fe6f8aef144d5485b5b46fbfc7291c574558ca55ec1eac40->leave($__internal_9ea4c1cea0a3bc88fe6f8aef144d5485b5b46fbfc7291c574558ca55ec1eac40_prof);

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
        return array (  162 => 30,  158 => 29,  153 => 28,  144 => 27,  134 => 22,  125 => 21,  113 => 13,  108 => 12,  99 => 11,  88 => 7,  79 => 6,  68 => 32,  66 => 27,  63 => 26,  61 => 25,  57 => 23,  55 => 21,  49 => 18,  44 => 15,  42 => 11,  38 => 9,  36 => 6,  29 => 1,);
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
