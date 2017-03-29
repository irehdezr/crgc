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
        $__internal_c9529274920feb3a66dbd85b1927a257b4680be5d70059fb332647ab808835f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9529274920feb3a66dbd85b1927a257b4680be5d70059fb332647ab808835f0->enter($__internal_c9529274920feb3a66dbd85b1927a257b4680be5d70059fb332647ab808835f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_5ea3de8d7148206822c26a33e9db80104b8f1233c6dedc2b8cd29b80aa90b072 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ea3de8d7148206822c26a33e9db80104b8f1233c6dedc2b8cd29b80aa90b072->enter($__internal_5ea3de8d7148206822c26a33e9db80104b8f1233c6dedc2b8cd29b80aa90b072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_c9529274920feb3a66dbd85b1927a257b4680be5d70059fb332647ab808835f0->leave($__internal_c9529274920feb3a66dbd85b1927a257b4680be5d70059fb332647ab808835f0_prof);

        
        $__internal_5ea3de8d7148206822c26a33e9db80104b8f1233c6dedc2b8cd29b80aa90b072->leave($__internal_5ea3de8d7148206822c26a33e9db80104b8f1233c6dedc2b8cd29b80aa90b072_prof);

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
