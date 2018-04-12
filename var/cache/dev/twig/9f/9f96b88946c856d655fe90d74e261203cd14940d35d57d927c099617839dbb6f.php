<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_70c353190e72902b62ea1d06afce8eca930274e91a497455814b96b841935e40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_22692b0f6dd096530334cae16a8b54079ca4e682df8a1d38458722c750af7ebd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22692b0f6dd096530334cae16a8b54079ca4e682df8a1d38458722c750af7ebd->enter($__internal_22692b0f6dd096530334cae16a8b54079ca4e682df8a1d38458722c750af7ebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_ca7ee6f6df1006218b17d414fa95cf6ae323c2177c7c967ddcb1e7fcf47e244d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca7ee6f6df1006218b17d414fa95cf6ae323c2177c7c967ddcb1e7fcf47e244d->enter($__internal_ca7ee6f6df1006218b17d414fa95cf6ae323c2177c7c967ddcb1e7fcf47e244d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_22692b0f6dd096530334cae16a8b54079ca4e682df8a1d38458722c750af7ebd->leave($__internal_22692b0f6dd096530334cae16a8b54079ca4e682df8a1d38458722c750af7ebd_prof);

        
        $__internal_ca7ee6f6df1006218b17d414fa95cf6ae323c2177c7c967ddcb1e7fcf47e244d->leave($__internal_ca7ee6f6df1006218b17d414fa95cf6ae323c2177c7c967ddcb1e7fcf47e244d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
