<?php

/* security.html.twig */
class __TwigTemplate_39ea28043fa7ace7ac3e57dfdaa31d8dbe98d9adbe0d4843b86523d427aae42f extends Twig_Template
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
        $__internal_dfb6e482c24eaed2feea2da1348ae2e02e9678fcf416871f1760b75bbb4a131f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfb6e482c24eaed2feea2da1348ae2e02e9678fcf416871f1760b75bbb4a131f->enter($__internal_dfb6e482c24eaed2feea2da1348ae2e02e9678fcf416871f1760b75bbb4a131f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security.html.twig"));

        $__internal_e6857b1ce5b674ede078a3ffa86039d9498e96378c56ed9430bde73de890d758 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6857b1ce5b674ede078a3ffa86039d9498e96378c56ed9430bde73de890d758->enter($__internal_e6857b1ce5b674ede078a3ffa86039d9498e96378c56ed9430bde73de890d758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security.html.twig"));

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
        
        $__internal_dfb6e482c24eaed2feea2da1348ae2e02e9678fcf416871f1760b75bbb4a131f->leave($__internal_dfb6e482c24eaed2feea2da1348ae2e02e9678fcf416871f1760b75bbb4a131f_prof);

        
        $__internal_e6857b1ce5b674ede078a3ffa86039d9498e96378c56ed9430bde73de890d758->leave($__internal_e6857b1ce5b674ede078a3ffa86039d9498e96378c56ed9430bde73de890d758_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_5bf2281168b28d36645edab71fd1d92f31bd74f3da46226da3bc7fd668f37623 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bf2281168b28d36645edab71fd1d92f31bd74f3da46226da3bc7fd668f37623->enter($__internal_5bf2281168b28d36645edab71fd1d92f31bd74f3da46226da3bc7fd668f37623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b794cf5a348233468486c6d3f4a58756207720c0de57981e31994ebd44e88583 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b794cf5a348233468486c6d3f4a58756207720c0de57981e31994ebd44e88583->enter($__internal_b794cf5a348233468486c6d3f4a58756207720c0de57981e31994ebd44e88583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "                CRgourmetcoffee
            ";
        
        $__internal_b794cf5a348233468486c6d3f4a58756207720c0de57981e31994ebd44e88583->leave($__internal_b794cf5a348233468486c6d3f4a58756207720c0de57981e31994ebd44e88583_prof);

        
        $__internal_5bf2281168b28d36645edab71fd1d92f31bd74f3da46226da3bc7fd668f37623->leave($__internal_5bf2281168b28d36645edab71fd1d92f31bd74f3da46226da3bc7fd668f37623_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_766134d5290eca65b524786b2bdecaa17574d00b5217a4c266e48ba1d7e05447 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_766134d5290eca65b524786b2bdecaa17574d00b5217a4c266e48ba1d7e05447->enter($__internal_766134d5290eca65b524786b2bdecaa17574d00b5217a4c266e48ba1d7e05447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9947a0c9e85e9352158377a18433660a63edeffa630d84209313960b3cce2bef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9947a0c9e85e9352158377a18433660a63edeffa630d84209313960b3cce2bef->enter($__internal_9947a0c9e85e9352158377a18433660a63edeffa630d84209313960b3cce2bef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/css/bootstrap.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/css/crgourmetcoffee.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_9947a0c9e85e9352158377a18433660a63edeffa630d84209313960b3cce2bef->leave($__internal_9947a0c9e85e9352158377a18433660a63edeffa630d84209313960b3cce2bef_prof);

        
        $__internal_766134d5290eca65b524786b2bdecaa17574d00b5217a4c266e48ba1d7e05447->leave($__internal_766134d5290eca65b524786b2bdecaa17574d00b5217a4c266e48ba1d7e05447_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_0875f7e5d361fc79fad39f26e51e4a2083a4a2b831c10552ed8940fcf81b36a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0875f7e5d361fc79fad39f26e51e4a2083a4a2b831c10552ed8940fcf81b36a7->enter($__internal_0875f7e5d361fc79fad39f26e51e4a2083a4a2b831c10552ed8940fcf81b36a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_486fc3b0279b6094938a64470ea0ef3b8f8fbf531968a0806323615457d77a99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_486fc3b0279b6094938a64470ea0ef3b8f8fbf531968a0806323615457d77a99->enter($__internal_486fc3b0279b6094938a64470ea0ef3b8f8fbf531968a0806323615457d77a99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "            ";
        
        $__internal_486fc3b0279b6094938a64470ea0ef3b8f8fbf531968a0806323615457d77a99->leave($__internal_486fc3b0279b6094938a64470ea0ef3b8f8fbf531968a0806323615457d77a99_prof);

        
        $__internal_0875f7e5d361fc79fad39f26e51e4a2083a4a2b831c10552ed8940fcf81b36a7->leave($__internal_0875f7e5d361fc79fad39f26e51e4a2083a4a2b831c10552ed8940fcf81b36a7_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8576063e43d6791722bb732aa624a376bc08d58a756197203c679aebc9482e35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8576063e43d6791722bb732aa624a376bc08d58a756197203c679aebc9482e35->enter($__internal_8576063e43d6791722bb732aa624a376bc08d58a756197203c679aebc9482e35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d95579537ab4c8591889b2cc975f030e1b38f65017d876607c156f94d6505e5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d95579537ab4c8591889b2cc975f030e1b38f65017d876607c156f94d6505e5a->enter($__internal_d95579537ab4c8591889b2cc975f030e1b38f65017d876607c156f94d6505e5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_d95579537ab4c8591889b2cc975f030e1b38f65017d876607c156f94d6505e5a->leave($__internal_d95579537ab4c8591889b2cc975f030e1b38f65017d876607c156f94d6505e5a_prof);

        
        $__internal_8576063e43d6791722bb732aa624a376bc08d58a756197203c679aebc9482e35->leave($__internal_8576063e43d6791722bb732aa624a376bc08d58a756197203c679aebc9482e35_prof);

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
