<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_aba8b33f618ddab9937f540212d17b4f586cc55f46700bfc4b99a8827fe23c83 extends Twig_Template
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
        $__internal_2993cc872327a68a354ea1e3dde8622845a5e797277becb2ea9b9c0f00de0383 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2993cc872327a68a354ea1e3dde8622845a5e797277becb2ea9b9c0f00de0383->enter($__internal_2993cc872327a68a354ea1e3dde8622845a5e797277becb2ea9b9c0f00de0383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_42f92b3d91e9fb367dfd93027dbe8c2be7d621d5b74817234897bd2ca4eb0306 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42f92b3d91e9fb367dfd93027dbe8c2be7d621d5b74817234897bd2ca4eb0306->enter($__internal_42f92b3d91e9fb367dfd93027dbe8c2be7d621d5b74817234897bd2ca4eb0306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_2993cc872327a68a354ea1e3dde8622845a5e797277becb2ea9b9c0f00de0383->leave($__internal_2993cc872327a68a354ea1e3dde8622845a5e797277becb2ea9b9c0f00de0383_prof);

        
        $__internal_42f92b3d91e9fb367dfd93027dbe8c2be7d621d5b74817234897bd2ca4eb0306->leave($__internal_42f92b3d91e9fb367dfd93027dbe8c2be7d621d5b74817234897bd2ca4eb0306_prof);

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
", "@Framework/Form/form_errors.html.php", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
