<?php

/* @Page/Default/login.html.twig */
class __TwigTemplate_fc9c0651f6586b3f39a7cee03d133d7f2b11388249ed76da4ab879ec8d41d7fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "@Page/Default/login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_46b695ee95c3fe5e107fc6c6039a81b9fcc4ee74d2c2fee6ae96a7570db12bb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46b695ee95c3fe5e107fc6c6039a81b9fcc4ee74d2c2fee6ae96a7570db12bb3->enter($__internal_46b695ee95c3fe5e107fc6c6039a81b9fcc4ee74d2c2fee6ae96a7570db12bb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Page/Default/login.html.twig"));

        $__internal_6d6a882faae377ce038b7082ef088ce1b5eeb986c0110ac5e1738a03026ab942 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d6a882faae377ce038b7082ef088ce1b5eeb986c0110ac5e1738a03026ab942->enter($__internal_6d6a882faae377ce038b7082ef088ce1b5eeb986c0110ac5e1738a03026ab942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Page/Default/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46b695ee95c3fe5e107fc6c6039a81b9fcc4ee74d2c2fee6ae96a7570db12bb3->leave($__internal_46b695ee95c3fe5e107fc6c6039a81b9fcc4ee74d2c2fee6ae96a7570db12bb3_prof);

        
        $__internal_6d6a882faae377ce038b7082ef088ce1b5eeb986c0110ac5e1738a03026ab942->leave($__internal_6d6a882faae377ce038b7082ef088ce1b5eeb986c0110ac5e1738a03026ab942_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1ae4442b168b45fa64d534e726e49915b2276a1663e6d62cb2b925e1e39366fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ae4442b168b45fa64d534e726e49915b2276a1663e6d62cb2b925e1e39366fc->enter($__internal_1ae4442b168b45fa64d534e726e49915b2276a1663e6d62cb2b925e1e39366fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4cc08ba36fdb17cc8316fbaf33fa7f25f164c54bc4ae9200669c944187bbe339 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cc08ba36fdb17cc8316fbaf33fa7f25f164c54bc4ae9200669c944187bbe339->enter($__internal_4cc08ba36fdb17cc8316fbaf33fa7f25f164c54bc4ae9200669c944187bbe339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Farm Information ";
        
        $__internal_4cc08ba36fdb17cc8316fbaf33fa7f25f164c54bc4ae9200669c944187bbe339->leave($__internal_4cc08ba36fdb17cc8316fbaf33fa7f25f164c54bc4ae9200669c944187bbe339_prof);

        
        $__internal_1ae4442b168b45fa64d534e726e49915b2276a1663e6d62cb2b925e1e39366fc->leave($__internal_1ae4442b168b45fa64d534e726e49915b2276a1663e6d62cb2b925e1e39366fc_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_84b7d06835695ae3490b6e4d0d2d3a6939dc8e9fa9760751a00b6f14ec257bf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84b7d06835695ae3490b6e4d0d2d3a6939dc8e9fa9760751a00b6f14ec257bf4->enter($__internal_84b7d06835695ae3490b6e4d0d2d3a6939dc8e9fa9760751a00b6f14ec257bf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_25a48f4e8736b9c1e627ec1d228559f14d871d7854cd3679fd66527f7ee313de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25a48f4e8736b9c1e627ec1d228559f14d871d7854cd3679fd66527f7ee313de->enter($__internal_25a48f4e8736b9c1e627ec1d228559f14d871d7854cd3679fd66527f7ee313de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/css/product.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/css/farm_information.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_25a48f4e8736b9c1e627ec1d228559f14d871d7854cd3679fd66527f7ee313de->leave($__internal_25a48f4e8736b9c1e627ec1d228559f14d871d7854cd3679fd66527f7ee313de_prof);

        
        $__internal_84b7d06835695ae3490b6e4d0d2d3a6939dc8e9fa9760751a00b6f14ec257bf4->leave($__internal_84b7d06835695ae3490b6e4d0d2d3a6939dc8e9fa9760751a00b6f14ec257bf4_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_90cddeba4e71a77d9d1d599ec592958cf3df50b3243c9d39aa6a55271f95bd9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90cddeba4e71a77d9d1d599ec592958cf3df50b3243c9d39aa6a55271f95bd9f->enter($__internal_90cddeba4e71a77d9d1d599ec592958cf3df50b3243c9d39aa6a55271f95bd9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0671ec536371ac56776a597c32a9298446ed12952f3ca52433d7b4287aac8fd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0671ec536371ac56776a597c32a9298446ed12952f3ca52433d7b4287aac8fd3->enter($__internal_0671ec536371ac56776a597c32a9298446ed12952f3ca52433d7b4287aac8fd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "<main style=\"background-image:url('/web/public/imgs/coffeeGrains.png');\">
     <div class=\"container\">
        <div class=\"login-box\">
            <div name=\"login-box-header\">
                <div class=\"login-logo\">
                    <!--Imagen del Logo-->
                </div>
                <nav class=\"navbar navbar-inverse\">
                    <h1 style=\"color:white; text-align:center;\">Welcome</h1>
                </nav>
            </div>
            <div class=\"login-box-body\">
                <form action=\"inicio.php\" method=\"post\">
                    <div class=\"form-group has-feedback\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"User name\" name=\"user\" id=\"user\" required></input>
                        <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
                    </div>
                    <div class=\"form-group has-feedback\">
                        <input type=\"password\" class=\"form-control\" placeholder=\"Password\" name=\"password\" id=\"password\" required></input>
                        <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-1 col-md-offset-6 col-lg-1 col-lg-offset-6\">
                            <div class=\"checkbox\">
                                <label>
                                    <div class='col-md-1 col-lg-1'>Re</div>
                            </label>
                            </div>
                        </div>
                        <div class=\"col-md-1 col-md-offset-2 col-lg-1 col-lg-offset-2\">
                            <input name=\"login\" id=\"btn_login\" type=\"submit\" value=\"Login\" class=\"btn btn-success pull-rigth\" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
";
        
        $__internal_0671ec536371ac56776a597c32a9298446ed12952f3ca52433d7b4287aac8fd3->leave($__internal_0671ec536371ac56776a597c32a9298446ed12952f3ca52433d7b4287aac8fd3_prof);

        
        $__internal_90cddeba4e71a77d9d1d599ec592958cf3df50b3243c9d39aa6a55271f95bd9f->leave($__internal_90cddeba4e71a77d9d1d599ec592958cf3df50b3243c9d39aa6a55271f95bd9f_prof);

    }

    public function getTemplateName()
    {
        return "@Page/Default/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 11,  90 => 10,  78 => 7,  74 => 6,  69 => 5,  60 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}

{% block title%} Farm Information {% endblock %}
{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('/web/public/css/product.css')}}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('/web/public/css/farm_information.css') }}\" />
{% endblock %}

{% block body %}
<main style=\"background-image:url('/web/public/imgs/coffeeGrains.png');\">
     <div class=\"container\">
        <div class=\"login-box\">
            <div name=\"login-box-header\">
                <div class=\"login-logo\">
                    <!--Imagen del Logo-->
                </div>
                <nav class=\"navbar navbar-inverse\">
                    <h1 style=\"color:white; text-align:center;\">Welcome</h1>
                </nav>
            </div>
            <div class=\"login-box-body\">
                <form action=\"inicio.php\" method=\"post\">
                    <div class=\"form-group has-feedback\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"User name\" name=\"user\" id=\"user\" required></input>
                        <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
                    </div>
                    <div class=\"form-group has-feedback\">
                        <input type=\"password\" class=\"form-control\" placeholder=\"Password\" name=\"password\" id=\"password\" required></input>
                        <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-1 col-md-offset-6 col-lg-1 col-lg-offset-6\">
                            <div class=\"checkbox\">
                                <label>
                                    <div class='col-md-1 col-lg-1'>Re</div>
                            </label>
                            </div>
                        </div>
                        <div class=\"col-md-1 col-md-offset-2 col-lg-1 col-lg-offset-2\">
                            <input name=\"login\" id=\"btn_login\" type=\"submit\" value=\"Login\" class=\"btn btn-success pull-rigth\" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
{% endblock %}", "@Page/Default/login.html.twig", "C:\\xampp\\htdocs\\src\\PageBundle\\Resources\\views\\Default\\login.html.twig");
    }
}
