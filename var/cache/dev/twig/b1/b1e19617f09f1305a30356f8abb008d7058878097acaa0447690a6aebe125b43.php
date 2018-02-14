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
        $__internal_c7388325d699974c8b69e5b05a977bca2000f9e9c67febf4387719dc28f7d82d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7388325d699974c8b69e5b05a977bca2000f9e9c67febf4387719dc28f7d82d->enter($__internal_c7388325d699974c8b69e5b05a977bca2000f9e9c67febf4387719dc28f7d82d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_46aeb910d0eb5ba544a9d0e75b2bb944d1ceea6ebb14f849c574a55dc166b841 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46aeb910d0eb5ba544a9d0e75b2bb944d1ceea6ebb14f849c574a55dc166b841->enter($__internal_46aeb910d0eb5ba544a9d0e75b2bb944d1ceea6ebb14f849c574a55dc166b841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_c7388325d699974c8b69e5b05a977bca2000f9e9c67febf4387719dc28f7d82d->leave($__internal_c7388325d699974c8b69e5b05a977bca2000f9e9c67febf4387719dc28f7d82d_prof);

        
        $__internal_46aeb910d0eb5ba544a9d0e75b2bb944d1ceea6ebb14f849c574a55dc166b841->leave($__internal_46aeb910d0eb5ba544a9d0e75b2bb944d1ceea6ebb14f849c574a55dc166b841_prof);

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
