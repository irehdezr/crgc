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
        $__internal_790636abb8ac9a0a3024b234226c77932c542f64b7c3b615c6d341304c685f83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_790636abb8ac9a0a3024b234226c77932c542f64b7c3b615c6d341304c685f83->enter($__internal_790636abb8ac9a0a3024b234226c77932c542f64b7c3b615c6d341304c685f83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_37e2c2f4871df17c86f5a36e9bab9c2975097dc05a5d92fa16dc1a46c47dcb32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37e2c2f4871df17c86f5a36e9bab9c2975097dc05a5d92fa16dc1a46c47dcb32->enter($__internal_37e2c2f4871df17c86f5a36e9bab9c2975097dc05a5d92fa16dc1a46c47dcb32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        
        $__internal_790636abb8ac9a0a3024b234226c77932c542f64b7c3b615c6d341304c685f83->leave($__internal_790636abb8ac9a0a3024b234226c77932c542f64b7c3b615c6d341304c685f83_prof);

        
        $__internal_37e2c2f4871df17c86f5a36e9bab9c2975097dc05a5d92fa16dc1a46c47dcb32->leave($__internal_37e2c2f4871df17c86f5a36e9bab9c2975097dc05a5d92fa16dc1a46c47dcb32_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fc106ef712a2ccf6e43d8f9ae257f17bae3fc0e23593119f137017164bedc1ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc106ef712a2ccf6e43d8f9ae257f17bae3fc0e23593119f137017164bedc1ed->enter($__internal_fc106ef712a2ccf6e43d8f9ae257f17bae3fc0e23593119f137017164bedc1ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_472b9f4a470169980e73ce977483745a9265de30c14e8d37946b8655d3667264 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_472b9f4a470169980e73ce977483745a9265de30c14e8d37946b8655d3667264->enter($__internal_472b9f4a470169980e73ce977483745a9265de30c14e8d37946b8655d3667264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CRgourmetcoffee";
        
        $__internal_472b9f4a470169980e73ce977483745a9265de30c14e8d37946b8655d3667264->leave($__internal_472b9f4a470169980e73ce977483745a9265de30c14e8d37946b8655d3667264_prof);

        
        $__internal_fc106ef712a2ccf6e43d8f9ae257f17bae3fc0e23593119f137017164bedc1ed->leave($__internal_fc106ef712a2ccf6e43d8f9ae257f17bae3fc0e23593119f137017164bedc1ed_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_92c3d414b754813034192f69bef36b5989c8c2a02ad603001331988b537cd507 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92c3d414b754813034192f69bef36b5989c8c2a02ad603001331988b537cd507->enter($__internal_92c3d414b754813034192f69bef36b5989c8c2a02ad603001331988b537cd507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_aec1707c4eecc43dbe943319cf887b7a9ccd8d31de3ca18550df5d0bc517b80b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aec1707c4eecc43dbe943319cf887b7a9ccd8d31de3ca18550df5d0bc517b80b->enter($__internal_aec1707c4eecc43dbe943319cf887b7a9ccd8d31de3ca18550df5d0bc517b80b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "                <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/bootstrap.css"), "html", null, true);
        echo "\" />
                <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/crgourmetcoffee.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_aec1707c4eecc43dbe943319cf887b7a9ccd8d31de3ca18550df5d0bc517b80b->leave($__internal_aec1707c4eecc43dbe943319cf887b7a9ccd8d31de3ca18550df5d0bc517b80b_prof);

        
        $__internal_92c3d414b754813034192f69bef36b5989c8c2a02ad603001331988b537cd507->leave($__internal_92c3d414b754813034192f69bef36b5989c8c2a02ad603001331988b537cd507_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e05c85b52e87e6927ca5bd2c7abfd913ca8f5e7ad9e0a3ef5dfbeb5285793e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e05c85b52e87e6927ca5bd2c7abfd913ca8f5e7ad9e0a3ef5dfbeb5285793e3->enter($__internal_3e05c85b52e87e6927ca5bd2c7abfd913ca8f5e7ad9e0a3ef5dfbeb5285793e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_41068ef0a57ff1c788c33ce654c167f45d9c3323364f82437283f6f7be05c54e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41068ef0a57ff1c788c33ce654c167f45d9c3323364f82437283f6f7be05c54e->enter($__internal_41068ef0a57ff1c788c33ce654c167f45d9c3323364f82437283f6f7be05c54e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_41068ef0a57ff1c788c33ce654c167f45d9c3323364f82437283f6f7be05c54e->leave($__internal_41068ef0a57ff1c788c33ce654c167f45d9c3323364f82437283f6f7be05c54e_prof);

        
        $__internal_3e05c85b52e87e6927ca5bd2c7abfd913ca8f5e7ad9e0a3ef5dfbeb5285793e3->leave($__internal_3e05c85b52e87e6927ca5bd2c7abfd913ca8f5e7ad9e0a3ef5dfbeb5285793e3_prof);

    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_11e6acdd4493b94b4c58d9142d9c465789ad9c5127f2a43effd5401950e631e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11e6acdd4493b94b4c58d9142d9c465789ad9c5127f2a43effd5401950e631e2->enter($__internal_11e6acdd4493b94b4c58d9142d9c465789ad9c5127f2a43effd5401950e631e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_327684935aec3a58d71789e92458bb572753b484ce74733f54e8b476b6dc6f43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_327684935aec3a58d71789e92458bb572753b484ce74733f54e8b476b6dc6f43->enter($__internal_327684935aec3a58d71789e92458bb572753b484ce74733f54e8b476b6dc6f43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 23
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/jquery-3.1.0.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/bootstrap.js"), "html", null, true);
        echo "\"  </script>
       ";
        
        $__internal_327684935aec3a58d71789e92458bb572753b484ce74733f54e8b476b6dc6f43->leave($__internal_327684935aec3a58d71789e92458bb572753b484ce74733f54e8b476b6dc6f43_prof);

        
        $__internal_11e6acdd4493b94b4c58d9142d9c465789ad9c5127f2a43effd5401950e631e2->leave($__internal_11e6acdd4493b94b4c58d9142d9c465789ad9c5127f2a43effd5401950e631e2_prof);

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
</html>", "layout.html.twig", "C:\\xampp\\htdocs\\app\\Resources\\views\\layout.html.twig");
    }
}
