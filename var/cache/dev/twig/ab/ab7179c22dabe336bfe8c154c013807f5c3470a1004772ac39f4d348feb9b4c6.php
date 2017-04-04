<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_8ebe5317567e6923aca6c0e066b7d6324a6cb33f21e94f11295e7b5d92bcd319 extends Twig_Template
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
        $__internal_8a822b1dd5db3c65355736b067f9427d4299b4cad57b3898299f1fad0cc0b514 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a822b1dd5db3c65355736b067f9427d4299b4cad57b3898299f1fad0cc0b514->enter($__internal_8a822b1dd5db3c65355736b067f9427d4299b4cad57b3898299f1fad0cc0b514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_b38c1bf0e70b7657f3143723d3c7a062baee72cdd0000c0bd3f924d6b3198d8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b38c1bf0e70b7657f3143723d3c7a062baee72cdd0000c0bd3f924d6b3198d8d->enter($__internal_b38c1bf0e70b7657f3143723d3c7a062baee72cdd0000c0bd3f924d6b3198d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_8a822b1dd5db3c65355736b067f9427d4299b4cad57b3898299f1fad0cc0b514->leave($__internal_8a822b1dd5db3c65355736b067f9427d4299b4cad57b3898299f1fad0cc0b514_prof);

        
        $__internal_b38c1bf0e70b7657f3143723d3c7a062baee72cdd0000c0bd3f924d6b3198d8d->leave($__internal_b38c1bf0e70b7657f3143723d3c7a062baee72cdd0000c0bd3f924d6b3198d8d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
