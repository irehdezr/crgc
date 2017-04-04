<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_9e63fde05069fb11cd75513c98ebf48eb9624fa7a38b22e791424280153aab54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_78c6a8045d322382b386eb970e477061bc68f63b50cefd83a152af38549d825f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78c6a8045d322382b386eb970e477061bc68f63b50cefd83a152af38549d825f->enter($__internal_78c6a8045d322382b386eb970e477061bc68f63b50cefd83a152af38549d825f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_4fda715c7af37f814b6c7d7f1d558b64970c4b0fbb17d34db91d9ab1bc106a3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fda715c7af37f814b6c7d7f1d558b64970c4b0fbb17d34db91d9ab1bc106a3f->enter($__internal_4fda715c7af37f814b6c7d7f1d558b64970c4b0fbb17d34db91d9ab1bc106a3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78c6a8045d322382b386eb970e477061bc68f63b50cefd83a152af38549d825f->leave($__internal_78c6a8045d322382b386eb970e477061bc68f63b50cefd83a152af38549d825f_prof);

        
        $__internal_4fda715c7af37f814b6c7d7f1d558b64970c4b0fbb17d34db91d9ab1bc106a3f->leave($__internal_4fda715c7af37f814b6c7d7f1d558b64970c4b0fbb17d34db91d9ab1bc106a3f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_93c13084917266c0fe6bb1ca238add2144f6f564ffb94c6d8cba2e6ca9842780 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93c13084917266c0fe6bb1ca238add2144f6f564ffb94c6d8cba2e6ca9842780->enter($__internal_93c13084917266c0fe6bb1ca238add2144f6f564ffb94c6d8cba2e6ca9842780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_da8baef87842da8e194100d9eeea9b72875e516131062611fc7e872afcc96490 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da8baef87842da8e194100d9eeea9b72875e516131062611fc7e872afcc96490->enter($__internal_da8baef87842da8e194100d9eeea9b72875e516131062611fc7e872afcc96490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_da8baef87842da8e194100d9eeea9b72875e516131062611fc7e872afcc96490->leave($__internal_da8baef87842da8e194100d9eeea9b72875e516131062611fc7e872afcc96490_prof);

        
        $__internal_93c13084917266c0fe6bb1ca238add2144f6f564ffb94c6d8cba2e6ca9842780->leave($__internal_93c13084917266c0fe6bb1ca238add2144f6f564ffb94c6d8cba2e6ca9842780_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c730ed4a0060df757ba73e8bb37be5a30cf373c79482f3734d44715864df9a43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c730ed4a0060df757ba73e8bb37be5a30cf373c79482f3734d44715864df9a43->enter($__internal_c730ed4a0060df757ba73e8bb37be5a30cf373c79482f3734d44715864df9a43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2d8f6eae02cdd18f2b9dfc306156f6c68c0eac45ae2eab2b51f5cfb07ccb8f84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d8f6eae02cdd18f2b9dfc306156f6c68c0eac45ae2eab2b51f5cfb07ccb8f84->enter($__internal_2d8f6eae02cdd18f2b9dfc306156f6c68c0eac45ae2eab2b51f5cfb07ccb8f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_2d8f6eae02cdd18f2b9dfc306156f6c68c0eac45ae2eab2b51f5cfb07ccb8f84->leave($__internal_2d8f6eae02cdd18f2b9dfc306156f6c68c0eac45ae2eab2b51f5cfb07ccb8f84_prof);

        
        $__internal_c730ed4a0060df757ba73e8bb37be5a30cf373c79482f3734d44715864df9a43->leave($__internal_c730ed4a0060df757ba73e8bb37be5a30cf373c79482f3734d44715864df9a43_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ef3d805499b255a1e742f66f9c0f7ed70266a6014c880747138766968a41a07d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef3d805499b255a1e742f66f9c0f7ed70266a6014c880747138766968a41a07d->enter($__internal_ef3d805499b255a1e742f66f9c0f7ed70266a6014c880747138766968a41a07d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_24e5b12e0b7c757682e9f2682d9dd7288bb3ce318db8326288526049ec07e2ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24e5b12e0b7c757682e9f2682d9dd7288bb3ce318db8326288526049ec07e2ec->enter($__internal_24e5b12e0b7c757682e9f2682d9dd7288bb3ce318db8326288526049ec07e2ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_24e5b12e0b7c757682e9f2682d9dd7288bb3ce318db8326288526049ec07e2ec->leave($__internal_24e5b12e0b7c757682e9f2682d9dd7288bb3ce318db8326288526049ec07e2ec_prof);

        
        $__internal_ef3d805499b255a1e742f66f9c0f7ed70266a6014c880747138766968a41a07d->leave($__internal_ef3d805499b255a1e742f66f9c0f7ed70266a6014c880747138766968a41a07d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
