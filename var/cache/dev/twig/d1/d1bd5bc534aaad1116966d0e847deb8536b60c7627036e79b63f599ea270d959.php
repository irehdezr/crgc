<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_c2a4a8499b596054479e432e6c2e34824270acb3df4eb99b66f6d4aeac034b86 extends Twig_Template
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
        $__internal_9a0d54b838860ff3d30919c93ae7b8c18bc7c9ef75812f909317659db86929d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a0d54b838860ff3d30919c93ae7b8c18bc7c9ef75812f909317659db86929d0->enter($__internal_9a0d54b838860ff3d30919c93ae7b8c18bc7c9ef75812f909317659db86929d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_16f4618e5310d93ae59b5d3cd55a5023870c2bf06e1d818ffbb994b504380f8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16f4618e5310d93ae59b5d3cd55a5023870c2bf06e1d818ffbb994b504380f8b->enter($__internal_16f4618e5310d93ae59b5d3cd55a5023870c2bf06e1d818ffbb994b504380f8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_9a0d54b838860ff3d30919c93ae7b8c18bc7c9ef75812f909317659db86929d0->leave($__internal_9a0d54b838860ff3d30919c93ae7b8c18bc7c9ef75812f909317659db86929d0_prof);

        
        $__internal_16f4618e5310d93ae59b5d3cd55a5023870c2bf06e1d818ffbb994b504380f8b->leave($__internal_16f4618e5310d93ae59b5d3cd55a5023870c2bf06e1d818ffbb994b504380f8b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
