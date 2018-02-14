<?php

/* ::layout.html.twig */
class __TwigTemplate_e18bdfc49f74bd448f5189da5bd24f9b20351327fb10ed5ed4f1c472e679dab7 extends Twig_Template
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
        $__internal_d2a0961909ddd765f109657da428359e6c1abdfd8879aa4dc5a5aed7c1780569 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2a0961909ddd765f109657da428359e6c1abdfd8879aa4dc5a5aed7c1780569->enter($__internal_d2a0961909ddd765f109657da428359e6c1abdfd8879aa4dc5a5aed7c1780569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_3454f4d33c892735312cdc612a8aa99e5ee4b2e9e90484d4417729feecab09e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3454f4d33c892735312cdc612a8aa99e5ee4b2e9e90484d4417729feecab09e1->enter($__internal_3454f4d33c892735312cdc612a8aa99e5ee4b2e9e90484d4417729feecab09e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        $this->loadTemplate("header.html.twig", "::layout.html.twig", 18)->display($context);
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
        $this->loadTemplate("footer.html.twig", "::layout.html.twig", 25)->display($context);
        // line 26
        echo "        </div>
        ";
        // line 27
        $this->displayBlock('javascripts', $context, $blocks);
        // line 32
        echo "    </body>
</html>";
        
        $__internal_d2a0961909ddd765f109657da428359e6c1abdfd8879aa4dc5a5aed7c1780569->leave($__internal_d2a0961909ddd765f109657da428359e6c1abdfd8879aa4dc5a5aed7c1780569_prof);

        
        $__internal_3454f4d33c892735312cdc612a8aa99e5ee4b2e9e90484d4417729feecab09e1->leave($__internal_3454f4d33c892735312cdc612a8aa99e5ee4b2e9e90484d4417729feecab09e1_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_d24fe5336ad3c17c8dea5ac50356c7dc07e1a895a7829b0cea022341503c5b2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d24fe5336ad3c17c8dea5ac50356c7dc07e1a895a7829b0cea022341503c5b2c->enter($__internal_d24fe5336ad3c17c8dea5ac50356c7dc07e1a895a7829b0cea022341503c5b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_52edd880427a381c9367838f04255cd0f711f873a787a53e045f423085218616 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52edd880427a381c9367838f04255cd0f711f873a787a53e045f423085218616->enter($__internal_52edd880427a381c9367838f04255cd0f711f873a787a53e045f423085218616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "                CRgourmetcoffee
            ";
        
        $__internal_52edd880427a381c9367838f04255cd0f711f873a787a53e045f423085218616->leave($__internal_52edd880427a381c9367838f04255cd0f711f873a787a53e045f423085218616_prof);

        
        $__internal_d24fe5336ad3c17c8dea5ac50356c7dc07e1a895a7829b0cea022341503c5b2c->leave($__internal_d24fe5336ad3c17c8dea5ac50356c7dc07e1a895a7829b0cea022341503c5b2c_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1c6ef6cd787746c7283688780a206740e5d4efe7178a994bec0c25582fbfa53d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c6ef6cd787746c7283688780a206740e5d4efe7178a994bec0c25582fbfa53d->enter($__internal_1c6ef6cd787746c7283688780a206740e5d4efe7178a994bec0c25582fbfa53d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4e1f191d30a64e5ea545bb994da4f5507f0830e20ce355b1be2aadba876018ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e1f191d30a64e5ea545bb994da4f5507f0830e20ce355b1be2aadba876018ef->enter($__internal_4e1f191d30a64e5ea545bb994da4f5507f0830e20ce355b1be2aadba876018ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/css/bootstrap.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/css/crgourmetcoffee.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_4e1f191d30a64e5ea545bb994da4f5507f0830e20ce355b1be2aadba876018ef->leave($__internal_4e1f191d30a64e5ea545bb994da4f5507f0830e20ce355b1be2aadba876018ef_prof);

        
        $__internal_1c6ef6cd787746c7283688780a206740e5d4efe7178a994bec0c25582fbfa53d->leave($__internal_1c6ef6cd787746c7283688780a206740e5d4efe7178a994bec0c25582fbfa53d_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_dcb73cf6c7e46e01ccabda110bf373bdf438b59e924cdd560ed3327abdda5df6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcb73cf6c7e46e01ccabda110bf373bdf438b59e924cdd560ed3327abdda5df6->enter($__internal_dcb73cf6c7e46e01ccabda110bf373bdf438b59e924cdd560ed3327abdda5df6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a4c6d38a9f1324b434edfc65ab30acbccc8e784fa27deedd07ee0a02b5e37c92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4c6d38a9f1324b434edfc65ab30acbccc8e784fa27deedd07ee0a02b5e37c92->enter($__internal_a4c6d38a9f1324b434edfc65ab30acbccc8e784fa27deedd07ee0a02b5e37c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 22
        echo "            ";
        
        $__internal_a4c6d38a9f1324b434edfc65ab30acbccc8e784fa27deedd07ee0a02b5e37c92->leave($__internal_a4c6d38a9f1324b434edfc65ab30acbccc8e784fa27deedd07ee0a02b5e37c92_prof);

        
        $__internal_dcb73cf6c7e46e01ccabda110bf373bdf438b59e924cdd560ed3327abdda5df6->leave($__internal_dcb73cf6c7e46e01ccabda110bf373bdf438b59e924cdd560ed3327abdda5df6_prof);

    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_df353e340ca767ed3de94d9d7d6e991952afa5bf80c11f06533affc7897611d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df353e340ca767ed3de94d9d7d6e991952afa5bf80c11f06533affc7897611d5->enter($__internal_df353e340ca767ed3de94d9d7d6e991952afa5bf80c11f06533affc7897611d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a2c766cfc46b76989a77e9ccb9bbdd81b75da4daaa5d9aabb8868cc8fc00acc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2c766cfc46b76989a77e9ccb9bbdd81b75da4daaa5d9aabb8868cc8fc00acc1->enter($__internal_a2c766cfc46b76989a77e9ccb9bbdd81b75da4daaa5d9aabb8868cc8fc00acc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_a2c766cfc46b76989a77e9ccb9bbdd81b75da4daaa5d9aabb8868cc8fc00acc1->leave($__internal_a2c766cfc46b76989a77e9ccb9bbdd81b75da4daaa5d9aabb8868cc8fc00acc1_prof);

        
        $__internal_df353e340ca767ed3de94d9d7d6e991952afa5bf80c11f06533affc7897611d5->leave($__internal_df353e340ca767ed3de94d9d7d6e991952afa5bf80c11f06533affc7897611d5_prof);

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
</html>", "::layout.html.twig", "C:\\xampp\\htdocs\\app/Resources\\views/layout.html.twig");
    }
}
