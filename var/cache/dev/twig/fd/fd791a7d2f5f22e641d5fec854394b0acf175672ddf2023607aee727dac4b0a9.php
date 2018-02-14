<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_aba8b33f618ddab9937f540212d17b4f586cc55f46700bfc4b99a8827fe23c83 extends Twig_Template
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
        $__internal_bbf685c65cf1264edf06da910f614317ad6531eb3788bbb187050f0949a9a2c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbf685c65cf1264edf06da910f614317ad6531eb3788bbb187050f0949a9a2c6->enter($__internal_bbf685c65cf1264edf06da910f614317ad6531eb3788bbb187050f0949a9a2c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_0936e8d140486ce54bfdc79239038ebf4c1f757fe52398480ede53553df4da27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0936e8d140486ce54bfdc79239038ebf4c1f757fe52398480ede53553df4da27->enter($__internal_0936e8d140486ce54bfdc79239038ebf4c1f757fe52398480ede53553df4da27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_bbf685c65cf1264edf06da910f614317ad6531eb3788bbb187050f0949a9a2c6->leave($__internal_bbf685c65cf1264edf06da910f614317ad6531eb3788bbb187050f0949a9a2c6_prof);

        
        $__internal_0936e8d140486ce54bfdc79239038ebf4c1f757fe52398480ede53553df4da27->leave($__internal_0936e8d140486ce54bfdc79239038ebf4c1f757fe52398480ede53553df4da27_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
