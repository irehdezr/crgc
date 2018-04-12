<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_8592b21d1b18d494b7c97eedf7bc88ec31b2691fc1ee95e6f1c262ac1ce8923f extends Twig_Template
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
        $__internal_17fa2897a926b189e98ad0ac3e3490eece6cc7b7c9c67ff445ca25478346e185 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17fa2897a926b189e98ad0ac3e3490eece6cc7b7c9c67ff445ca25478346e185->enter($__internal_17fa2897a926b189e98ad0ac3e3490eece6cc7b7c9c67ff445ca25478346e185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_4de7cdbe17dd7062b0fb0632f7366e861be17df5c6779cbf9939ba80d073216f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4de7cdbe17dd7062b0fb0632f7366e861be17df5c6779cbf9939ba80d073216f->enter($__internal_4de7cdbe17dd7062b0fb0632f7366e861be17df5c6779cbf9939ba80d073216f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_17fa2897a926b189e98ad0ac3e3490eece6cc7b7c9c67ff445ca25478346e185->leave($__internal_17fa2897a926b189e98ad0ac3e3490eece6cc7b7c9c67ff445ca25478346e185_prof);

        
        $__internal_4de7cdbe17dd7062b0fb0632f7366e861be17df5c6779cbf9939ba80d073216f->leave($__internal_4de7cdbe17dd7062b0fb0632f7366e861be17df5c6779cbf9939ba80d073216f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
