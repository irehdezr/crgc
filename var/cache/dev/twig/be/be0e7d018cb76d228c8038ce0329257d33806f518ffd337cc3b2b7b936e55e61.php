<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a236fa6a0062ba1a24d363f761bee280a242665a9e259775e950da7b4faba031 extends Twig_Template
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
        $__internal_d0f9414e9208090da7ea1c5c7d1a5fc04a31a74248d3b2968008e7669ce8783d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0f9414e9208090da7ea1c5c7d1a5fc04a31a74248d3b2968008e7669ce8783d->enter($__internal_d0f9414e9208090da7ea1c5c7d1a5fc04a31a74248d3b2968008e7669ce8783d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_3dce18c164fa37e4eae75b6f695fcd155563f2aa821e707c1116a8aa5c77f78a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dce18c164fa37e4eae75b6f695fcd155563f2aa821e707c1116a8aa5c77f78a->enter($__internal_3dce18c164fa37e4eae75b6f695fcd155563f2aa821e707c1116a8aa5c77f78a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0f9414e9208090da7ea1c5c7d1a5fc04a31a74248d3b2968008e7669ce8783d->leave($__internal_d0f9414e9208090da7ea1c5c7d1a5fc04a31a74248d3b2968008e7669ce8783d_prof);

        
        $__internal_3dce18c164fa37e4eae75b6f695fcd155563f2aa821e707c1116a8aa5c77f78a->leave($__internal_3dce18c164fa37e4eae75b6f695fcd155563f2aa821e707c1116a8aa5c77f78a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1587db9158d8f12ebac7e0e231ef1d1598b40305c3989a88825f27ea03ddd1b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1587db9158d8f12ebac7e0e231ef1d1598b40305c3989a88825f27ea03ddd1b4->enter($__internal_1587db9158d8f12ebac7e0e231ef1d1598b40305c3989a88825f27ea03ddd1b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_aefc0df7ffd3a977f40016327e7f7053176f68eef24babba30389c220d6dbdf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aefc0df7ffd3a977f40016327e7f7053176f68eef24babba30389c220d6dbdf0->enter($__internal_aefc0df7ffd3a977f40016327e7f7053176f68eef24babba30389c220d6dbdf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_aefc0df7ffd3a977f40016327e7f7053176f68eef24babba30389c220d6dbdf0->leave($__internal_aefc0df7ffd3a977f40016327e7f7053176f68eef24babba30389c220d6dbdf0_prof);

        
        $__internal_1587db9158d8f12ebac7e0e231ef1d1598b40305c3989a88825f27ea03ddd1b4->leave($__internal_1587db9158d8f12ebac7e0e231ef1d1598b40305c3989a88825f27ea03ddd1b4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f0b3b2cb75c3ae2403e1e460018a9199bc94a32311e807728e0b5c1018bf60fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0b3b2cb75c3ae2403e1e460018a9199bc94a32311e807728e0b5c1018bf60fa->enter($__internal_f0b3b2cb75c3ae2403e1e460018a9199bc94a32311e807728e0b5c1018bf60fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a7ee3bcacb1422fc0770fb2ba7a9a548d8bffbc883ac7707177757c46f7a4be5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7ee3bcacb1422fc0770fb2ba7a9a548d8bffbc883ac7707177757c46f7a4be5->enter($__internal_a7ee3bcacb1422fc0770fb2ba7a9a548d8bffbc883ac7707177757c46f7a4be5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a7ee3bcacb1422fc0770fb2ba7a9a548d8bffbc883ac7707177757c46f7a4be5->leave($__internal_a7ee3bcacb1422fc0770fb2ba7a9a548d8bffbc883ac7707177757c46f7a4be5_prof);

        
        $__internal_f0b3b2cb75c3ae2403e1e460018a9199bc94a32311e807728e0b5c1018bf60fa->leave($__internal_f0b3b2cb75c3ae2403e1e460018a9199bc94a32311e807728e0b5c1018bf60fa_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c5f990f5613d392818960e915003b51261a144decd170fe6c97c1f38ae1efc49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5f990f5613d392818960e915003b51261a144decd170fe6c97c1f38ae1efc49->enter($__internal_c5f990f5613d392818960e915003b51261a144decd170fe6c97c1f38ae1efc49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_aa1dae3e981a18441e54b9bc0c8b33be24da45a95b50590325a81293b9a29087 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa1dae3e981a18441e54b9bc0c8b33be24da45a95b50590325a81293b9a29087->enter($__internal_aa1dae3e981a18441e54b9bc0c8b33be24da45a95b50590325a81293b9a29087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_aa1dae3e981a18441e54b9bc0c8b33be24da45a95b50590325a81293b9a29087->leave($__internal_aa1dae3e981a18441e54b9bc0c8b33be24da45a95b50590325a81293b9a29087_prof);

        
        $__internal_c5f990f5613d392818960e915003b51261a144decd170fe6c97c1f38ae1efc49->leave($__internal_c5f990f5613d392818960e915003b51261a144decd170fe6c97c1f38ae1efc49_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
