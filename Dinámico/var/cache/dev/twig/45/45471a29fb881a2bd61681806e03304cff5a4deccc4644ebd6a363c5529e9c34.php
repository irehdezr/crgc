<?php

/* @WebProfiler/Profiler/toolbar.html.twig */
class __TwigTemplate_d2d74afdddff4efcccb32908a90ecc0d0bc6c0b4e15db734a27606b34c21a982 extends Twig_Template
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
        $__internal_d629ec39aba3b09f1296a03910e0b45c5dce9f77cb461b28289654ab7fe87e05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d629ec39aba3b09f1296a03910e0b45c5dce9f77cb461b28289654ab7fe87e05->enter($__internal_d629ec39aba3b09f1296a03910e0b45c5dce9f77cb461b28289654ab7fe87e05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar.html.twig"));

        // line 1
        echo "<!-- START of Symfony Web Debug Toolbar -->
";
        // line 2
        if (("normal" != ($context["position"] ?? null))) {
            // line 3
            echo "    <div id=\"sfMiniToolbar-";
            echo twig_escape_filter($this->env, ($context["token"] ?? null), "html", null, true);
            echo "\" class=\"sf-minitoolbar\" data-no-turbolink>
        <a href=\"#\" title=\"Show Symfony toolbar\" tabindex=\"-1\" id=\"sfToolbarMiniToggler-";
            // line 4
            echo twig_escape_filter($this->env, ($context["token"] ?? null), "html", null, true);
            echo "\" accesskey=\"D\">
            ";
            // line 5
            echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
            echo "
        </a>
    </div>
    <style";
            // line 8
            if (($context["csp_style_nonce"] ?? null)) {
                echo " nonce=\"";
                echo twig_escape_filter($this->env, ($context["csp_style_nonce"] ?? null), "html", null, true);
                echo "\"";
            }
            echo ">
        ";
            // line 9
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar.css.twig", array("position" => ($context["position"] ?? null), "floatable" => true));
            echo "
    </style>
    <div id=\"sfToolbarClearer-";
            // line 11
            echo twig_escape_filter($this->env, ($context["token"] ?? null), "html", null, true);
            echo "\" class=\"sf-toolbar-clearer\"></div>
";
        }
        // line 13
        echo "
<div id=\"sfToolbarMainContent-";
        // line 14
        echo twig_escape_filter($this->env, ($context["token"] ?? null), "html", null, true);
        echo "\" class=\"sf-toolbarreset clear-fix\" data-no-turbolink>
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["templates"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["name"] => $context["template"]) {
            // line 16
            echo "        ";
            $__internal_6ce9e5750052834c9bed362731b2eebc90d22be3f9f908a1183efe9295045b22 = array("collector" => $this->getAttribute(            // line 17
($context["profile"] ?? null), "getcollector", array(0 => $context["name"]), "method"), "profiler_url" =>             // line 18
($context["profiler_url"] ?? null), "token" => $this->getAttribute(            // line 19
($context["profile"] ?? null), "token", array()), "name" =>             // line 20
$context["name"], "profiler_markup_version" =>             // line 21
($context["profiler_markup_version"] ?? null), "csp_script_nonce" =>             // line 22
($context["csp_script_nonce"] ?? null), "csp_style_nonce" =>             // line 23
($context["csp_style_nonce"] ?? null));
            if (!is_array($__internal_6ce9e5750052834c9bed362731b2eebc90d22be3f9f908a1183efe9295045b22)) {
                throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
            }
            $context['_parent'] = $context;
            $context = array_merge($context, $__internal_6ce9e5750052834c9bed362731b2eebc90d22be3f9f908a1183efe9295045b22);
            // line 25
            echo "            ";
            $this->loadTemplate($context["template"], "@WebProfiler/Profiler/toolbar.html.twig", 25)->displayBlock("toolbar", $context);
            echo "
        ";
            $context = $context['_parent'];
            // line 27
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
    ";
        // line 29
        if (("normal" != ($context["position"] ?? null))) {
            // line 30
            echo "        <a class=\"hide-button\" id=\"sfToolbarHideButton-";
            echo twig_escape_filter($this->env, ($context["token"] ?? null), "html", null, true);
            echo "\" title=\"Close Toolbar\" tabindex=\"-1\" accesskey=\"D\">
            ";
            // line 31
            echo twig_include($this->env, $context, "@WebProfiler/Icon/close.svg");
            echo "
        </a>
    ";
        }
        // line 34
        echo "</div>
<!-- END of Symfony Web Debug Toolbar -->
";
        
        $__internal_d629ec39aba3b09f1296a03910e0b45c5dce9f77cb461b28289654ab7fe87e05->leave($__internal_d629ec39aba3b09f1296a03910e0b45c5dce9f77cb461b28289654ab7fe87e05_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 34,  129 => 31,  124 => 30,  122 => 29,  119 => 28,  105 => 27,  99 => 25,  92 => 23,  91 => 22,  90 => 21,  89 => 20,  88 => 19,  87 => 18,  86 => 17,  84 => 16,  67 => 15,  63 => 14,  60 => 13,  55 => 11,  50 => 9,  42 => 8,  36 => 5,  32 => 4,  27 => 3,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@WebProfiler/Profiler/toolbar.html.twig", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar.html.twig");
    }
}
