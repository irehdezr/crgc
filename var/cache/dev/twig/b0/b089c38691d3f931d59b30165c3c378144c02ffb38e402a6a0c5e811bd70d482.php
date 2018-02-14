<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_da1062aad529fa13d58cde9dd34e2126c23bf4228a8c910d9829f7dbdff52c5a extends Twig_Template
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
        $__internal_c93888d66b438391eb9634f4724eb7326b5faea1f1e9cc807c4dd2f524825e71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c93888d66b438391eb9634f4724eb7326b5faea1f1e9cc807c4dd2f524825e71->enter($__internal_c93888d66b438391eb9634f4724eb7326b5faea1f1e9cc807c4dd2f524825e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_9344a27bfa3558fd6de384f601f14095ef73506fd3d916a41baebddea6e71a58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9344a27bfa3558fd6de384f601f14095ef73506fd3d916a41baebddea6e71a58->enter($__internal_9344a27bfa3558fd6de384f601f14095ef73506fd3d916a41baebddea6e71a58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_c93888d66b438391eb9634f4724eb7326b5faea1f1e9cc807c4dd2f524825e71->leave($__internal_c93888d66b438391eb9634f4724eb7326b5faea1f1e9cc807c4dd2f524825e71_prof);

        
        $__internal_9344a27bfa3558fd6de384f601f14095ef73506fd3d916a41baebddea6e71a58->leave($__internal_9344a27bfa3558fd6de384f601f14095ef73506fd3d916a41baebddea6e71a58_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
