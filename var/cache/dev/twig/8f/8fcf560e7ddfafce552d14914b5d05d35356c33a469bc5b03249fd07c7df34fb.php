<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_7544320964c7e0d1523512edd600948c55952fa7ff229ac9a1bdf82bb40eeb51 extends Twig_Template
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
        $__internal_8bf8e8974fe4c115142583374e9d7704f91d5d995d53c257bedeb967f3480e61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bf8e8974fe4c115142583374e9d7704f91d5d995d53c257bedeb967f3480e61->enter($__internal_8bf8e8974fe4c115142583374e9d7704f91d5d995d53c257bedeb967f3480e61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_867c9f4bc7313e32773ae17fbc38ebfeeefd0ff36863c2c5b8187f249d3b6ded = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_867c9f4bc7313e32773ae17fbc38ebfeeefd0ff36863c2c5b8187f249d3b6ded->enter($__internal_867c9f4bc7313e32773ae17fbc38ebfeeefd0ff36863c2c5b8187f249d3b6ded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_8bf8e8974fe4c115142583374e9d7704f91d5d995d53c257bedeb967f3480e61->leave($__internal_8bf8e8974fe4c115142583374e9d7704f91d5d995d53c257bedeb967f3480e61_prof);

        
        $__internal_867c9f4bc7313e32773ae17fbc38ebfeeefd0ff36863c2c5b8187f249d3b6ded->leave($__internal_867c9f4bc7313e32773ae17fbc38ebfeeefd0ff36863c2c5b8187f249d3b6ded_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
