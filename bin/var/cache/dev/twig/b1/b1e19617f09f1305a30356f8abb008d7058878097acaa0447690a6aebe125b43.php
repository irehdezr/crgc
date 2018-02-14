<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_813c0d3f8bcf8a8358d657a40af9f9e2d3918941a44006c5e81bdae3c876dd9d extends Twig_Template
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
        $__internal_3cdecda1055b0f61ef6db5cf3784e7d8e5fdc789d178433a6050e109af59c36b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cdecda1055b0f61ef6db5cf3784e7d8e5fdc789d178433a6050e109af59c36b->enter($__internal_3cdecda1055b0f61ef6db5cf3784e7d8e5fdc789d178433a6050e109af59c36b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_28006ea2a2af10f688b1644190a5a76d56fd404e3b3edc013e425cc17c9e3bb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28006ea2a2af10f688b1644190a5a76d56fd404e3b3edc013e425cc17c9e3bb6->enter($__internal_28006ea2a2af10f688b1644190a5a76d56fd404e3b3edc013e425cc17c9e3bb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_3cdecda1055b0f61ef6db5cf3784e7d8e5fdc789d178433a6050e109af59c36b->leave($__internal_3cdecda1055b0f61ef6db5cf3784e7d8e5fdc789d178433a6050e109af59c36b_prof);

        
        $__internal_28006ea2a2af10f688b1644190a5a76d56fd404e3b3edc013e425cc17c9e3bb6->leave($__internal_28006ea2a2af10f688b1644190a5a76d56fd404e3b3edc013e425cc17c9e3bb6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
