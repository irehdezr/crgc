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
        $__internal_708066ef3f8e66ace24bd092c2e042fffb0c0ed581d4c82f73017de57a4ecc1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_708066ef3f8e66ace24bd092c2e042fffb0c0ed581d4c82f73017de57a4ecc1d->enter($__internal_708066ef3f8e66ace24bd092c2e042fffb0c0ed581d4c82f73017de57a4ecc1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_3000cd4cdd757c6a2a733407913ab9fe1ac0f3991db48578f274a54489f8b490 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3000cd4cdd757c6a2a733407913ab9fe1ac0f3991db48578f274a54489f8b490->enter($__internal_3000cd4cdd757c6a2a733407913ab9fe1ac0f3991db48578f274a54489f8b490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_708066ef3f8e66ace24bd092c2e042fffb0c0ed581d4c82f73017de57a4ecc1d->leave($__internal_708066ef3f8e66ace24bd092c2e042fffb0c0ed581d4c82f73017de57a4ecc1d_prof);

        
        $__internal_3000cd4cdd757c6a2a733407913ab9fe1ac0f3991db48578f274a54489f8b490->leave($__internal_3000cd4cdd757c6a2a733407913ab9fe1ac0f3991db48578f274a54489f8b490_prof);

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
