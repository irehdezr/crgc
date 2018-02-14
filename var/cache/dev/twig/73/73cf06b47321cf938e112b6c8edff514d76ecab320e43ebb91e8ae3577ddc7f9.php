<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_609b24b10c2c012deac938f1e6f5a8ff3a2894db59cad1890a94b3d30a13e4aa extends Twig_Template
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
        $__internal_775f62254608db56b18f0b89ed9a769b365e50542af0d72531124bd26f223847 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_775f62254608db56b18f0b89ed9a769b365e50542af0d72531124bd26f223847->enter($__internal_775f62254608db56b18f0b89ed9a769b365e50542af0d72531124bd26f223847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_ce3f52f0abd0a94c28c95cd3d0da4083c5035d42fcfde2fcc651a0cd8eabd72b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce3f52f0abd0a94c28c95cd3d0da4083c5035d42fcfde2fcc651a0cd8eabd72b->enter($__internal_ce3f52f0abd0a94c28c95cd3d0da4083c5035d42fcfde2fcc651a0cd8eabd72b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_775f62254608db56b18f0b89ed9a769b365e50542af0d72531124bd26f223847->leave($__internal_775f62254608db56b18f0b89ed9a769b365e50542af0d72531124bd26f223847_prof);

        
        $__internal_ce3f52f0abd0a94c28c95cd3d0da4083c5035d42fcfde2fcc651a0cd8eabd72b->leave($__internal_ce3f52f0abd0a94c28c95cd3d0da4083c5035d42fcfde2fcc651a0cd8eabd72b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
