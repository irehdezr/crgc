<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_075275339c270f501f288998ea6203542aad9910c1648421a035e30889b55828 extends Twig_Template
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
        $__internal_411eeec3ea095102691d79a1aa0415672da58ecda9de724315d7a777c94041de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_411eeec3ea095102691d79a1aa0415672da58ecda9de724315d7a777c94041de->enter($__internal_411eeec3ea095102691d79a1aa0415672da58ecda9de724315d7a777c94041de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_c6e0bc72eb35e7fc87d989d35fbf2ddedf790bc7213358162843872f65354116 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6e0bc72eb35e7fc87d989d35fbf2ddedf790bc7213358162843872f65354116->enter($__internal_c6e0bc72eb35e7fc87d989d35fbf2ddedf790bc7213358162843872f65354116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_411eeec3ea095102691d79a1aa0415672da58ecda9de724315d7a777c94041de->leave($__internal_411eeec3ea095102691d79a1aa0415672da58ecda9de724315d7a777c94041de_prof);

        
        $__internal_c6e0bc72eb35e7fc87d989d35fbf2ddedf790bc7213358162843872f65354116->leave($__internal_c6e0bc72eb35e7fc87d989d35fbf2ddedf790bc7213358162843872f65354116_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\repeated_row.html.php");
    }
}
