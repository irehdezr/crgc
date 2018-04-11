<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_b828cc5726b7f873955832f098a0a01986a78bdf941f4b345de012fc2cd06946 extends Twig_Template
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
        $__internal_b9222122462a328453f0803b1b01e23ffba6db6223074b6d368a7fa2609b28b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9222122462a328453f0803b1b01e23ffba6db6223074b6d368a7fa2609b28b8->enter($__internal_b9222122462a328453f0803b1b01e23ffba6db6223074b6d368a7fa2609b28b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_a5284443a77c1d358464b7ee376e270afd3bd14234450967d56d20cebb6af9e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5284443a77c1d358464b7ee376e270afd3bd14234450967d56d20cebb6af9e8->enter($__internal_a5284443a77c1d358464b7ee376e270afd3bd14234450967d56d20cebb6af9e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_b9222122462a328453f0803b1b01e23ffba6db6223074b6d368a7fa2609b28b8->leave($__internal_b9222122462a328453f0803b1b01e23ffba6db6223074b6d368a7fa2609b28b8_prof);

        
        $__internal_a5284443a77c1d358464b7ee376e270afd3bd14234450967d56d20cebb6af9e8->leave($__internal_a5284443a77c1d358464b7ee376e270afd3bd14234450967d56d20cebb6af9e8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
