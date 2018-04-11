<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_47dd7a757f88b442d1b5b7e4ef036997f4f822888b8a2d840da76bbf742a94ea extends Twig_Template
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
        $__internal_6cbf1f4f0d480e730205dcad798548704e06134119d441461422a369ba2b18ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cbf1f4f0d480e730205dcad798548704e06134119d441461422a369ba2b18ab->enter($__internal_6cbf1f4f0d480e730205dcad798548704e06134119d441461422a369ba2b18ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_c71d88ee043921a002c889f1760b32528301c923b6be21d27c2dcb43f9867031 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c71d88ee043921a002c889f1760b32528301c923b6be21d27c2dcb43f9867031->enter($__internal_c71d88ee043921a002c889f1760b32528301c923b6be21d27c2dcb43f9867031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_6cbf1f4f0d480e730205dcad798548704e06134119d441461422a369ba2b18ab->leave($__internal_6cbf1f4f0d480e730205dcad798548704e06134119d441461422a369ba2b18ab_prof);

        
        $__internal_c71d88ee043921a002c889f1760b32528301c923b6be21d27c2dcb43f9867031->leave($__internal_c71d88ee043921a002c889f1760b32528301c923b6be21d27c2dcb43f9867031_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
