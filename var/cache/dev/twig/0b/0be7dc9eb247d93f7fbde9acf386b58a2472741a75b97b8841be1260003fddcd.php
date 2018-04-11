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
        $__internal_76adc2b5c372bd7d39ecc9fc1eb09c8ccde0bdce662add228edbccf1d13f22a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76adc2b5c372bd7d39ecc9fc1eb09c8ccde0bdce662add228edbccf1d13f22a2->enter($__internal_76adc2b5c372bd7d39ecc9fc1eb09c8ccde0bdce662add228edbccf1d13f22a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_c6ebd69b5aa5e7658c92b0cf2e3591dfc12fd4bc6120c724ad210f1c3a0b05a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6ebd69b5aa5e7658c92b0cf2e3591dfc12fd4bc6120c724ad210f1c3a0b05a4->enter($__internal_c6ebd69b5aa5e7658c92b0cf2e3591dfc12fd4bc6120c724ad210f1c3a0b05a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_76adc2b5c372bd7d39ecc9fc1eb09c8ccde0bdce662add228edbccf1d13f22a2->leave($__internal_76adc2b5c372bd7d39ecc9fc1eb09c8ccde0bdce662add228edbccf1d13f22a2_prof);

        
        $__internal_c6ebd69b5aa5e7658c92b0cf2e3591dfc12fd4bc6120c724ad210f1c3a0b05a4->leave($__internal_c6ebd69b5aa5e7658c92b0cf2e3591dfc12fd4bc6120c724ad210f1c3a0b05a4_prof);

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
