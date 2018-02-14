<?php

/* PageBundle:Default:login.html.twig */
class __TwigTemplate_a777bda10ab5b546efb2dbd84c09154586a5d24107efa6a51779260f0ee8ec4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "PageBundle:Default:login.html.twig", 1);
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
        $__internal_19ef4f4b95d4836d0896e245d2f0d2879d4228cb6b16211b215b91d42ecaf090 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19ef4f4b95d4836d0896e245d2f0d2879d4228cb6b16211b215b91d42ecaf090->enter($__internal_19ef4f4b95d4836d0896e245d2f0d2879d4228cb6b16211b215b91d42ecaf090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:login.html.twig"));

        $__internal_d143eb6d594a4fbe86893a520375b8e981a8813180c999b5bade9e8097a5f2e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d143eb6d594a4fbe86893a520375b8e981a8813180c999b5bade9e8097a5f2e3->enter($__internal_d143eb6d594a4fbe86893a520375b8e981a8813180c999b5bade9e8097a5f2e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19ef4f4b95d4836d0896e245d2f0d2879d4228cb6b16211b215b91d42ecaf090->leave($__internal_19ef4f4b95d4836d0896e245d2f0d2879d4228cb6b16211b215b91d42ecaf090_prof);

        
        $__internal_d143eb6d594a4fbe86893a520375b8e981a8813180c999b5bade9e8097a5f2e3->leave($__internal_d143eb6d594a4fbe86893a520375b8e981a8813180c999b5bade9e8097a5f2e3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a9e2f43952a30cc6551eade46518de95bc0bbee4b689d597216fbdbdee09cea9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9e2f43952a30cc6551eade46518de95bc0bbee4b689d597216fbdbdee09cea9->enter($__internal_a9e2f43952a30cc6551eade46518de95bc0bbee4b689d597216fbdbdee09cea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9c8c757d2b0bce342e9d8c705ea18d2c4127554a881f27dcce319be2d0e93291 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c8c757d2b0bce342e9d8c705ea18d2c4127554a881f27dcce319be2d0e93291->enter($__internal_9c8c757d2b0bce342e9d8c705ea18d2c4127554a881f27dcce319be2d0e93291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Farm Information ";
        
        $__internal_9c8c757d2b0bce342e9d8c705ea18d2c4127554a881f27dcce319be2d0e93291->leave($__internal_9c8c757d2b0bce342e9d8c705ea18d2c4127554a881f27dcce319be2d0e93291_prof);

        
        $__internal_a9e2f43952a30cc6551eade46518de95bc0bbee4b689d597216fbdbdee09cea9->leave($__internal_a9e2f43952a30cc6551eade46518de95bc0bbee4b689d597216fbdbdee09cea9_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fd082fd5d2959598ec52b5a236e20eaa43e42aebbcb86cf147c625fc71baff36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd082fd5d2959598ec52b5a236e20eaa43e42aebbcb86cf147c625fc71baff36->enter($__internal_fd082fd5d2959598ec52b5a236e20eaa43e42aebbcb86cf147c625fc71baff36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_98755ecaa5ac934c868ac1f6db6a3f4c6d2f936448890f018568a3b63c4832db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98755ecaa5ac934c868ac1f6db6a3f4c6d2f936448890f018568a3b63c4832db->enter($__internal_98755ecaa5ac934c868ac1f6db6a3f4c6d2f936448890f018568a3b63c4832db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_98755ecaa5ac934c868ac1f6db6a3f4c6d2f936448890f018568a3b63c4832db->leave($__internal_98755ecaa5ac934c868ac1f6db6a3f4c6d2f936448890f018568a3b63c4832db_prof);

        
        $__internal_fd082fd5d2959598ec52b5a236e20eaa43e42aebbcb86cf147c625fc71baff36->leave($__internal_fd082fd5d2959598ec52b5a236e20eaa43e42aebbcb86cf147c625fc71baff36_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d2e2f0ea9434d535a2270567321bff73329be4e57dcaa187aeb17e66fcc054db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2e2f0ea9434d535a2270567321bff73329be4e57dcaa187aeb17e66fcc054db->enter($__internal_d2e2f0ea9434d535a2270567321bff73329be4e57dcaa187aeb17e66fcc054db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_57c3888ac00b48038d685a5f3b05f69ef4b61817dce350a7a991d9838a9165f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57c3888ac00b48038d685a5f3b05f69ef4b61817dce350a7a991d9838a9165f7->enter($__internal_57c3888ac00b48038d685a5f3b05f69ef4b61817dce350a7a991d9838a9165f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_57c3888ac00b48038d685a5f3b05f69ef4b61817dce350a7a991d9838a9165f7->leave($__internal_57c3888ac00b48038d685a5f3b05f69ef4b61817dce350a7a991d9838a9165f7_prof);

        
        $__internal_d2e2f0ea9434d535a2270567321bff73329be4e57dcaa187aeb17e66fcc054db->leave($__internal_d2e2f0ea9434d535a2270567321bff73329be4e57dcaa187aeb17e66fcc054db_prof);

    }

    public function getTemplateName()
    {
        return "PageBundle:Default:login.html.twig";
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
{% endblock %}", "PageBundle:Default:login.html.twig", "C:\\xampp\\htdocs\\src\\PageBundle/Resources/views/Default/login.html.twig");
    }
}
