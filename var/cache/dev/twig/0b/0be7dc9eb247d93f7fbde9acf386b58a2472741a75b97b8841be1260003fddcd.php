<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_7fdeee0d4999b6dba7368c4116450d0ca16e27c6515490eca2e66d2702517f85 extends Twig_Template
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
        $__internal_566095c57415a874d364f81440b63c599d2d12754f8fb258d0f590ad2a95b656 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_566095c57415a874d364f81440b63c599d2d12754f8fb258d0f590ad2a95b656->enter($__internal_566095c57415a874d364f81440b63c599d2d12754f8fb258d0f590ad2a95b656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_91594d3e41d097516716bbfbc1c8f84902a994b40c814ad9544f63eff6912769 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91594d3e41d097516716bbfbc1c8f84902a994b40c814ad9544f63eff6912769->enter($__internal_91594d3e41d097516716bbfbc1c8f84902a994b40c814ad9544f63eff6912769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_566095c57415a874d364f81440b63c599d2d12754f8fb258d0f590ad2a95b656->leave($__internal_566095c57415a874d364f81440b63c599d2d12754f8fb258d0f590ad2a95b656_prof);

        
        $__internal_91594d3e41d097516716bbfbc1c8f84902a994b40c814ad9544f63eff6912769->leave($__internal_91594d3e41d097516716bbfbc1c8f84902a994b40c814ad9544f63eff6912769_prof);

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
", "@Framework/Form/form_end.html.php", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
