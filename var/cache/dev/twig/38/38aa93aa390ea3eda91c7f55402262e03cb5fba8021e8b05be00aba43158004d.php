<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_9bde9d740d03120655f1c6c655fe7c8fe9a88e8a8b9888ed93de23a0381997ff extends Twig_Template
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
        $__internal_70172892df5316373d5fdeae03f7414505b83ecd4f2a39c81541a2f1e24f0c54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70172892df5316373d5fdeae03f7414505b83ecd4f2a39c81541a2f1e24f0c54->enter($__internal_70172892df5316373d5fdeae03f7414505b83ecd4f2a39c81541a2f1e24f0c54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_38e661476fc9ddfd3684a51b1a7475287bb8c2a25063e40dd03b6190a1f16990 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38e661476fc9ddfd3684a51b1a7475287bb8c2a25063e40dd03b6190a1f16990->enter($__internal_38e661476fc9ddfd3684a51b1a7475287bb8c2a25063e40dd03b6190a1f16990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_70172892df5316373d5fdeae03f7414505b83ecd4f2a39c81541a2f1e24f0c54->leave($__internal_70172892df5316373d5fdeae03f7414505b83ecd4f2a39c81541a2f1e24f0c54_prof);

        
        $__internal_38e661476fc9ddfd3684a51b1a7475287bb8c2a25063e40dd03b6190a1f16990->leave($__internal_38e661476fc9ddfd3684a51b1a7475287bb8c2a25063e40dd03b6190a1f16990_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
