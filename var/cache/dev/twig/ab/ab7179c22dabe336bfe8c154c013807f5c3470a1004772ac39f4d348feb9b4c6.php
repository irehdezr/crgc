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
        $__internal_9c46ae3e55fee4ba853361e0785fe7c79f7b9e38d1864f74597770c4f240ab30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c46ae3e55fee4ba853361e0785fe7c79f7b9e38d1864f74597770c4f240ab30->enter($__internal_9c46ae3e55fee4ba853361e0785fe7c79f7b9e38d1864f74597770c4f240ab30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_35bb0d2d90834866bcfde69fa836231f88c73273e64b9c28c84322913255a1ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35bb0d2d90834866bcfde69fa836231f88c73273e64b9c28c84322913255a1ba->enter($__internal_35bb0d2d90834866bcfde69fa836231f88c73273e64b9c28c84322913255a1ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_9c46ae3e55fee4ba853361e0785fe7c79f7b9e38d1864f74597770c4f240ab30->leave($__internal_9c46ae3e55fee4ba853361e0785fe7c79f7b9e38d1864f74597770c4f240ab30_prof);

        
        $__internal_35bb0d2d90834866bcfde69fa836231f88c73273e64b9c28c84322913255a1ba->leave($__internal_35bb0d2d90834866bcfde69fa836231f88c73273e64b9c28c84322913255a1ba_prof);

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
