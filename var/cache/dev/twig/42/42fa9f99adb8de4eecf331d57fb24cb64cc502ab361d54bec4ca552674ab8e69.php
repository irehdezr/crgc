<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_17eb30dbfd0784bfd88e332211c1ebafb1386a0d7e5ea1c5af714117f1adbe2f extends Twig_Template
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
        $__internal_7952355e3e440b6cef2a6e6f1b4bff3086d610cd74b21e3f0cadc923dd9aa8b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7952355e3e440b6cef2a6e6f1b4bff3086d610cd74b21e3f0cadc923dd9aa8b1->enter($__internal_7952355e3e440b6cef2a6e6f1b4bff3086d610cd74b21e3f0cadc923dd9aa8b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_b84ffe1a1e1a7990c492cfc50b6e4d1ab64786bd5b3b410a6692a3e4e3a666d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b84ffe1a1e1a7990c492cfc50b6e4d1ab64786bd5b3b410a6692a3e4e3a666d6->enter($__internal_b84ffe1a1e1a7990c492cfc50b6e4d1ab64786bd5b3b410a6692a3e4e3a666d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_7952355e3e440b6cef2a6e6f1b4bff3086d610cd74b21e3f0cadc923dd9aa8b1->leave($__internal_7952355e3e440b6cef2a6e6f1b4bff3086d610cd74b21e3f0cadc923dd9aa8b1_prof);

        
        $__internal_b84ffe1a1e1a7990c492cfc50b6e4d1ab64786bd5b3b410a6692a3e4e3a666d6->leave($__internal_b84ffe1a1e1a7990c492cfc50b6e4d1ab64786bd5b3b410a6692a3e4e3a666d6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
