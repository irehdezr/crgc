<?php

/* @WebProfiler/Profiler/layout.html.twig */
class __TwigTemplate_3f96afc13c65a3048ef4590f91122ccfa665e3f1f10c2545c6ae0ccd9547ef8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_42dc488b543b83afb6bed2756e2e9ce3216d75ce70237d63d8fcd4a35d3db890 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42dc488b543b83afb6bed2756e2e9ce3216d75ce70237d63d8fcd4a35d3db890->enter($__internal_42dc488b543b83afb6bed2756e2e9ce3216d75ce70237d63d8fcd4a35d3db890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42dc488b543b83afb6bed2756e2e9ce3216d75ce70237d63d8fcd4a35d3db890->leave($__internal_42dc488b543b83afb6bed2756e2e9ce3216d75ce70237d63d8fcd4a35d3db890_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d5891228c7832a98fbd2eedc5472c035792cae8b7c3416c5a9aa092695cb6f4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5891228c7832a98fbd2eedc5472c035792cae8b7c3416c5a9aa092695cb6f4e->enter($__internal_d5891228c7832a98fbd2eedc5472c035792cae8b7c3416c5a9aa092695cb6f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/header.html.twig", array(), false);
        echo "

    <div id=\"summary\">
        ";
        // line 7
        $this->displayBlock('summary', $context, $blocks);
        // line 83
        echo "    </div>

    <div id=\"content\" class=\"container\">
        <div id=\"main\">
            <div id=\"collector-wrapper\">
                <div id=\"collector-content\">
                    ";
        // line 89
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/base_js.html.twig");
        echo "
                    ";
        // line 90
        $this->displayBlock('panel', $context, $blocks);
        // line 91
        echo "                </div>
            </div>

            <div id=\"sidebar\">
                <div id=\"sidebar-shortcuts\">
                    <div class=\"shortcuts\">
                        <a href=\"#\" id=\"sidebarShortcutsMenu\" class=\"visible-small\">
                            <span class=\"icon\">";
        // line 98
        echo twig_include($this->env, $context, "@WebProfiler/Icon/menu.svg");
        echo "</span>
                        </a>

                        <a class=\"btn btn-sm\" href=\"";
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_search", array("limit" => 10));
        echo "\">Last 10</a>
                        <a class=\"btn btn-sm\" href=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", twig_array_merge(array("token" => "latest"), $this->getAttribute($this->getAttribute(($context["request"] ?? null), "query", array()), "all", array()))), "html", null, true);
        echo "\">Latest</a>

                        <a class=\"sf-toggle btn btn-sm\" data-toggle-selector=\"#sidebar-search\" ";
        // line 104
        if ((array_key_exists("tokens", $context) || array_key_exists("about", $context))) {
            echo "data-toggle-initial=\"display\"";
        }
        echo ">
                            ";
        // line 105
        echo twig_include($this->env, $context, "@WebProfiler/Icon/search.svg");
        echo " <span class=\"hidden-small\">Search</span>
                        </a>

                        ";
        // line 108
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_search_bar", $this->getAttribute($this->getAttribute(($context["request"] ?? null), "query", array()), "all", array())));
        echo "
                    </div>
                </div>

                ";
        // line 112
        if (array_key_exists("templates", $context)) {
            // line 113
            echo "                    <ul id=\"menu-profiler\">
                        ";
            // line 114
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
                // line 115
                echo "                            ";
                ob_start();
                // line 116
                $__internal_99aee0aa3c2d6e1cb66a19a76b448869a1e0602d288327b34879f619b959679d = array("collector" => $this->getAttribute(($context["profile"] ?? null), "getcollector", array(0 => $context["name"]), "method"), "profiler_markup_version" => ($context["profiler_markup_version"] ?? null));
                if (!is_array($__internal_99aee0aa3c2d6e1cb66a19a76b448869a1e0602d288327b34879f619b959679d)) {
                    throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                }
                $context['_parent'] = $context;
                $context = array_merge($context, $__internal_99aee0aa3c2d6e1cb66a19a76b448869a1e0602d288327b34879f619b959679d);
                // line 117
                $this->loadTemplate($context["template"], "@WebProfiler/Profiler/layout.html.twig", 117)->displayBlock("menu", $context);
                $context = $context['_parent'];
                $context["menu"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 120
                echo "                            ";
                if ( !twig_test_empty(($context["menu"] ?? null))) {
                    // line 121
                    echo "                                <li class=\"";
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo " ";
                    echo ((($context["name"] == ($context["panel"] ?? null))) ? ("selected") : (""));
                    echo "\">
                                    <a href=\"";
                    // line 122
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => ($context["token"] ?? null), "panel" => $context["name"])), "html", null, true);
                    echo "\">";
                    echo ($context["menu"] ?? null);
                    echo "</a>
                                </li>
                            ";
                }
                // line 125
                echo "                        ";
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
            // line 126
            echo "                    </ul>
                ";
        }
        // line 128
        echo "            </div>
        </div>
    </div>
    <script>
        (function () {
            Sfjs.addEventListener(document.getElementById('sidebarShortcutsMenu'), 'click', function (event) {
                event.preventDefault();
                Sfjs.toggleClass(document.getElementById('sidebar'), 'expanded');
            })
        }())
    </script>
";
        
        $__internal_d5891228c7832a98fbd2eedc5472c035792cae8b7c3416c5a9aa092695cb6f4e->leave($__internal_d5891228c7832a98fbd2eedc5472c035792cae8b7c3416c5a9aa092695cb6f4e_prof);

    }

    // line 7
    public function block_summary($context, array $blocks = array())
    {
        $__internal_0b5c67462bfa571f3059a50e07c1d202c4544a964035459b2cbc0dae9d4737d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b5c67462bfa571f3059a50e07c1d202c4544a964035459b2cbc0dae9d4737d7->enter($__internal_0b5c67462bfa571f3059a50e07c1d202c4544a964035459b2cbc0dae9d4737d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 8
        echo "            ";
        if (array_key_exists("profile", $context)) {
            // line 9
            echo "                ";
            $context["status_code"] = ((twig_in_filter("request", twig_get_array_keys_filter($this->getAttribute(($context["profile"] ?? null), "collectors", array())))) ? ((($this->getAttribute($this->getAttribute(($context["profile"] ?? null), "getcollector", array(0 => "request"), "method", false, true), "statuscode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["profile"] ?? null), "getcollector", array(0 => "request"), "method", false, true), "statuscode", array()), 0)) : (0))) : (0));
            // line 10
            echo "                ";
            $context["css_class"] = (((($context["status_code"] ?? null) > 399)) ? ("status-error") : ((((($context["status_code"] ?? null) > 299)) ? ("status-warning") : ("status-success"))));
            // line 11
            echo "
                <div class=\"status ";
            // line 12
            echo twig_escape_filter($this->env, ($context["css_class"] ?? null), "html", null, true);
            echo "\">
                    <div class=\"container\">
                        <h2 class=\"break-long-words\">
                            ";
            // line 15
            if (twig_in_filter(twig_upper_filter($this->env, $this->getAttribute(($context["profile"] ?? null), "method", array())), array(0 => "GET", 1 => "HEAD"))) {
                // line 16
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["profile"] ?? null), "url", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["profile"] ?? null), "url", array()), "html", null, true);
                echo "</a>
                            ";
            } else {
                // line 18
                echo "                                ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["profile"] ?? null), "url", array()), "html", null, true);
                echo "
                            ";
            }
            // line 20
            echo "                        </h2>

                        ";
            // line 22
            $context["request_collector"] = (($this->getAttribute($this->getAttribute(($context["profile"] ?? null), "collectors", array(), "any", false, true), "request", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["profile"] ?? null), "collectors", array(), "any", false, true), "request", array()), false)) : (false));
            // line 23
            echo "                        ";
            if ((array_key_exists("request_collector", $context) && $this->getAttribute(($context["request_collector"] ?? null), "redirect", array()))) {
                // line 24
                $context["redirect"] = $this->getAttribute(($context["request_collector"] ?? null), "redirect", array());
                // line 25
                $context["controller"] = $this->getAttribute(($context["redirect"] ?? null), "controller", array());
                // line 26
                $context["redirect_route"] = ("@" . $this->getAttribute(($context["redirect"] ?? null), "route", array()));
                // line 27
                echo "                            <dl class=\"metadata\">
                                <dt>
                                    <span class=\"label\">";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute(($context["redirect"] ?? null), "status_code", array()), "html", null, true);
                echo "</span>
                                    Redirect from
                                </dt>
                                <dd>
                                    ";
                // line 33
                echo twig_escape_filter($this->env, ((("GET" != $this->getAttribute(($context["redirect"] ?? null), "method", array()))) ? ($this->getAttribute(($context["redirect"] ?? null), "method", array())) : ("")), "html", null, true);
                echo "
                                    ";
                // line 34
                if ($this->getAttribute($this->getAttribute(($context["redirect"] ?? null), "controller", array(), "any", false, true), "class", array(), "any", true, true)) {
                    // line 35
                    $context["link"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->getFileLink($this->getAttribute(($context["controller"] ?? null), "file", array()), $this->getAttribute(($context["controller"] ?? null), "line", array()));
                    // line 36
                    if (($context["link"] ?? null)) {
                        echo "<a href=\"";
                        echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["controller"] ?? null), "file", array()), "html", null, true);
                        echo "\">";
                    }
                    // line 37
                    echo twig_escape_filter($this->env, ($context["redirect_route"] ?? null), "html", null, true);
                    // line 38
                    if (($context["link"] ?? null)) {
                        echo "</a>";
                    }
                } else {
                    // line 40
                    echo twig_escape_filter($this->env, ($context["redirect_route"] ?? null), "html", null, true);
                }
                // line 42
                echo "                                    (<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => $this->getAttribute(($context["redirect"] ?? null), "token", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["redirect"] ?? null), "token", array()), "html", null, true);
                echo "</a>)
                                </dd>
                            </dl>";
            }
            // line 46
            echo "
                        ";
            // line 47
            if (((($context["request_collector"] ?? null) && (($this->getAttribute(($context["request_collector"] ?? null), "forward", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["request_collector"] ?? null), "forward", array()), false)) : (false))) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["request_collector"] ?? null), "forward", array(), "any", false, true), "controller", array(), "any", false, true), "class", array(), "any", true, true))) {
                // line 48
                $context["forward"] = $this->getAttribute(($context["request_collector"] ?? null), "forward", array());
                // line 49
                $context["controller"] = $this->getAttribute(($context["forward"] ?? null), "controller", array());
                // line 50
                echo "<dl class=\"metadata\">
                                <dt>Forwarded to</dt>
                                <dd>
                                    ";
                // line 53
                $context["link"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->getFileLink($this->getAttribute(($context["controller"] ?? null), "file", array()), $this->getAttribute(($context["controller"] ?? null), "line", array()));
                // line 54
                if (($context["link"] ?? null)) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["controller"] ?? null), "file", array()), "html", null, true);
                    echo "\">";
                }
                // line 55
                echo twig_escape_filter($this->env, strip_tags($this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->abbrClass($this->getAttribute(($context["controller"] ?? null), "class", array()))), "html", null, true);
                // line 56
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["controller"] ?? null), "method", array())) ? ((" :: " . $this->getAttribute(($context["controller"] ?? null), "method", array()))) : ("")), "html", null, true);
                // line 57
                if (($context["link"] ?? null)) {
                    echo "</a>";
                }
                // line 58
                echo "                                    (<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => $this->getAttribute(($context["forward"] ?? null), "token", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["forward"] ?? null), "token", array()), "html", null, true);
                echo "</a>)
                                </dd>
                            </dl>";
            }
            // line 62
            echo "
                        <dl class=\"metadata\">
                            <dt>Method</dt>
                            <dd>";
            // line 65
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute(($context["profile"] ?? null), "method", array())), "html", null, true);
            echo "</dd>

                            <dt>HTTP Status</dt>
                            <dd>";
            // line 68
            echo twig_escape_filter($this->env, ($context["status_code"] ?? null), "html", null, true);
            echo "</dd>

                            <dt>IP</dt>
                            <dd>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute(($context["profile"] ?? null), "ip", array()), "html", null, true);
            echo "</dd>

                            <dt>Profiled on</dt>
                            <dd>";
            // line 74
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["profile"] ?? null), "time", array()), "r"), "html", null, true);
            echo "</dd>

                            <dt>Token</dt>
                            <dd>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute(($context["profile"] ?? null), "token", array()), "html", null, true);
            echo "</dd>
                        </dl>
                    </div>
                </div>
            ";
        }
        // line 82
        echo "        ";
        
        $__internal_0b5c67462bfa571f3059a50e07c1d202c4544a964035459b2cbc0dae9d4737d7->leave($__internal_0b5c67462bfa571f3059a50e07c1d202c4544a964035459b2cbc0dae9d4737d7_prof);

    }

    // line 90
    public function block_panel($context, array $blocks = array())
    {
        $__internal_754b9aa9135ecb7f8a52899dbb359b6d2d352b469322eaf37d2b7dfc505d2ea8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_754b9aa9135ecb7f8a52899dbb359b6d2d352b469322eaf37d2b7dfc505d2ea8->enter($__internal_754b9aa9135ecb7f8a52899dbb359b6d2d352b469322eaf37d2b7dfc505d2ea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_754b9aa9135ecb7f8a52899dbb359b6d2d352b469322eaf37d2b7dfc505d2ea8->leave($__internal_754b9aa9135ecb7f8a52899dbb359b6d2d352b469322eaf37d2b7dfc505d2ea8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  384 => 90,  377 => 82,  369 => 77,  363 => 74,  357 => 71,  351 => 68,  345 => 65,  340 => 62,  331 => 58,  327 => 57,  325 => 56,  323 => 55,  315 => 54,  313 => 53,  308 => 50,  306 => 49,  304 => 48,  302 => 47,  299 => 46,  290 => 42,  287 => 40,  282 => 38,  280 => 37,  272 => 36,  270 => 35,  268 => 34,  264 => 33,  257 => 29,  253 => 27,  251 => 26,  249 => 25,  247 => 24,  244 => 23,  242 => 22,  238 => 20,  232 => 18,  224 => 16,  222 => 15,  216 => 12,  213 => 11,  210 => 10,  207 => 9,  204 => 8,  198 => 7,  180 => 128,  176 => 126,  162 => 125,  154 => 122,  147 => 121,  144 => 120,  140 => 117,  133 => 116,  130 => 115,  113 => 114,  110 => 113,  108 => 112,  101 => 108,  95 => 105,  89 => 104,  84 => 102,  80 => 101,  74 => 98,  65 => 91,  63 => 90,  59 => 89,  51 => 83,  49 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@WebProfiler/Profiler/layout.html.twig", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\layout.html.twig");
    }
}
