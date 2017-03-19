<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_83f9aafe8388f65cc5729b50f46fcd5b27e851ad09d4d541ca661047d99c1437 extends Twig_Template
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
        $__internal_2e80aa21c33d6f9d5e7adb95cba8bbf2c5e889288dd09d71dfa1e0a67187fcd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e80aa21c33d6f9d5e7adb95cba8bbf2c5e889288dd09d71dfa1e0a67187fcd3->enter($__internal_2e80aa21c33d6f9d5e7adb95cba8bbf2c5e889288dd09d71dfa1e0a67187fcd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e80aa21c33d6f9d5e7adb95cba8bbf2c5e889288dd09d71dfa1e0a67187fcd3->leave($__internal_2e80aa21c33d6f9d5e7adb95cba8bbf2c5e889288dd09d71dfa1e0a67187fcd3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_85ed89d1e733133b05e24d12e11812da13041345d88ce96e2ef0d056648838d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85ed89d1e733133b05e24d12e11812da13041345d88ce96e2ef0d056648838d5->enter($__internal_85ed89d1e733133b05e24d12e11812da13041345d88ce96e2ef0d056648838d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? null), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? null))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_85ed89d1e733133b05e24d12e11812da13041345d88ce96e2ef0d056648838d5->leave($__internal_85ed89d1e733133b05e24d12e11812da13041345d88ce96e2ef0d056648838d5_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fd9ed68b21281b572113bb4bdec565f0a8621672624385e4f2a2e56665faff70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd9ed68b21281b572113bb4bdec565f0a8621672624385e4f2a2e56665faff70->enter($__internal_fd9ed68b21281b572113bb4bdec565f0a8621672624385e4f2a2e56665faff70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? null), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? null), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_fd9ed68b21281b572113bb4bdec565f0a8621672624385e4f2a2e56665faff70->leave($__internal_fd9ed68b21281b572113bb4bdec565f0a8621672624385e4f2a2e56665faff70_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1e326a2554c3f839cb207f8416a5581cdb0b33ef4f3bdfc5bc127037ee5bb660 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e326a2554c3f839cb207f8416a5581cdb0b33ef4f3bdfc5bc127037ee5bb660->enter($__internal_1e326a2554c3f839cb207f8416a5581cdb0b33ef4f3bdfc5bc127037ee5bb660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? null), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? null))));
            echo "
        </div>
    ";
        }
        
        $__internal_1e326a2554c3f839cb207f8416a5581cdb0b33ef4f3bdfc5bc127037ee5bb660->leave($__internal_1e326a2554c3f839cb207f8416a5581cdb0b33ef4f3bdfc5bc127037ee5bb660_prof);

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
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
