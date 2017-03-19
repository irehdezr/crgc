<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0cc9441e4364f1a1e1f83ec8063c2e85c1691ea14a4911e30fc6ef0504d584bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a72c02352ab880c7ab49ba923d144e1ea6578e6da033534fcccf54587c600acf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a72c02352ab880c7ab49ba923d144e1ea6578e6da033534fcccf54587c600acf->enter($__internal_a72c02352ab880c7ab49ba923d144e1ea6578e6da033534fcccf54587c600acf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a72c02352ab880c7ab49ba923d144e1ea6578e6da033534fcccf54587c600acf->leave($__internal_a72c02352ab880c7ab49ba923d144e1ea6578e6da033534fcccf54587c600acf_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_593846b16142ee6e3fbfd537eb3ab8318af330955040f6ae5a2784f2ecfdd130 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_593846b16142ee6e3fbfd537eb3ab8318af330955040f6ae5a2784f2ecfdd130->enter($__internal_593846b16142ee6e3fbfd537eb3ab8318af330955040f6ae5a2784f2ecfdd130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_593846b16142ee6e3fbfd537eb3ab8318af330955040f6ae5a2784f2ecfdd130->leave($__internal_593846b16142ee6e3fbfd537eb3ab8318af330955040f6ae5a2784f2ecfdd130_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a1a49f34f83ddb5cc33398f9de5792016fab8a8b4ebc307e5f6e5f1122a7e2ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1a49f34f83ddb5cc33398f9de5792016fab8a8b4ebc307e5f6e5f1122a7e2ff->enter($__internal_a1a49f34f83ddb5cc33398f9de5792016fab8a8b4ebc307e5f6e5f1122a7e2ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a1a49f34f83ddb5cc33398f9de5792016fab8a8b4ebc307e5f6e5f1122a7e2ff->leave($__internal_a1a49f34f83ddb5cc33398f9de5792016fab8a8b4ebc307e5f6e5f1122a7e2ff_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f03b34339069fa8fcf9693a7d1346ba68b6c3200513639bc6404933d9c518b8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f03b34339069fa8fcf9693a7d1346ba68b6c3200513639bc6404933d9c518b8a->enter($__internal_f03b34339069fa8fcf9693a7d1346ba68b6c3200513639bc6404933d9c518b8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? null))));
        echo "
";
        
        $__internal_f03b34339069fa8fcf9693a7d1346ba68b6c3200513639bc6404933d9c518b8a->leave($__internal_f03b34339069fa8fcf9693a7d1346ba68b6c3200513639bc6404933d9c518b8a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
