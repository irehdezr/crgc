<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_92ea93a0fd9f721111034c70e0fe53cdb04521942e1bfabffe7a58f128ad344f extends Twig_Template
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
        $__internal_1748d3ef97c4299e927b918619fb62c23fe400107bd38f065dfb3871fc898cfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1748d3ef97c4299e927b918619fb62c23fe400107bd38f065dfb3871fc898cfb->enter($__internal_1748d3ef97c4299e927b918619fb62c23fe400107bd38f065dfb3871fc898cfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_c9ededafb0376165a02f0c74a4431af34c6400b27687c90ce5b30dbdd2232d01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9ededafb0376165a02f0c74a4431af34c6400b27687c90ce5b30dbdd2232d01->enter($__internal_c9ededafb0376165a02f0c74a4431af34c6400b27687c90ce5b30dbdd2232d01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_1748d3ef97c4299e927b918619fb62c23fe400107bd38f065dfb3871fc898cfb->leave($__internal_1748d3ef97c4299e927b918619fb62c23fe400107bd38f065dfb3871fc898cfb_prof);

        
        $__internal_c9ededafb0376165a02f0c74a4431af34c6400b27687c90ce5b30dbdd2232d01->leave($__internal_c9ededafb0376165a02f0c74a4431af34c6400b27687c90ce5b30dbdd2232d01_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
