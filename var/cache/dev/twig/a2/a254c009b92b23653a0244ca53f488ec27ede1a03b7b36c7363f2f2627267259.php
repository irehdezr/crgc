<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_39f63b2e10050189a92a97c8d4f44cfd3b4d57bbc138bba692b6a642036652ba extends Twig_Template
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
        $__internal_d04b706a23bae76c10f19abc51dd03c5d30ce842c8a805b0f5890421298a9c51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d04b706a23bae76c10f19abc51dd03c5d30ce842c8a805b0f5890421298a9c51->enter($__internal_d04b706a23bae76c10f19abc51dd03c5d30ce842c8a805b0f5890421298a9c51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_61c8f29b3dcd8526d7738259b64b78c99f21e36822516fa8182137f79ebc71ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61c8f29b3dcd8526d7738259b64b78c99f21e36822516fa8182137f79ebc71ba->enter($__internal_61c8f29b3dcd8526d7738259b64b78c99f21e36822516fa8182137f79ebc71ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_d04b706a23bae76c10f19abc51dd03c5d30ce842c8a805b0f5890421298a9c51->leave($__internal_d04b706a23bae76c10f19abc51dd03c5d30ce842c8a805b0f5890421298a9c51_prof);

        
        $__internal_61c8f29b3dcd8526d7738259b64b78c99f21e36822516fa8182137f79ebc71ba->leave($__internal_61c8f29b3dcd8526d7738259b64b78c99f21e36822516fa8182137f79ebc71ba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
