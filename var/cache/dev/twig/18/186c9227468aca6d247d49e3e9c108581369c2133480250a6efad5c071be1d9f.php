<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_379bfe9ba49f1b2f8c80b9624969edf496422d749847c4fcb82917be91a08fde extends Twig_Template
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
        $__internal_71519506681dd766e61068481b80369a8296b35dafe22473db9024fe0d059a00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71519506681dd766e61068481b80369a8296b35dafe22473db9024fe0d059a00->enter($__internal_71519506681dd766e61068481b80369a8296b35dafe22473db9024fe0d059a00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_ba6dd616b5a5f6768608334e2535890e6274e1f346f4307c9a7c9552159156da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba6dd616b5a5f6768608334e2535890e6274e1f346f4307c9a7c9552159156da->enter($__internal_ba6dd616b5a5f6768608334e2535890e6274e1f346f4307c9a7c9552159156da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_71519506681dd766e61068481b80369a8296b35dafe22473db9024fe0d059a00->leave($__internal_71519506681dd766e61068481b80369a8296b35dafe22473db9024fe0d059a00_prof);

        
        $__internal_ba6dd616b5a5f6768608334e2535890e6274e1f346f4307c9a7c9552159156da->leave($__internal_ba6dd616b5a5f6768608334e2535890e6274e1f346f4307c9a7c9552159156da_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
