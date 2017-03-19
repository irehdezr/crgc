<?php

/* @WebProfiler/Collector/logger.html.twig */
class __TwigTemplate_ecf94f1d7a37d046a6f9775c6043aef8acbe80f56867e1865ce1095702ba1f83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/logger.html.twig", 1);
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
        $__internal_4b11250c5b0930cfac56870c18acf97d3bc646116e1f34721329539ba59dcdd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b11250c5b0930cfac56870c18acf97d3bc646116e1f34721329539ba59dcdd4->enter($__internal_4b11250c5b0930cfac56870c18acf97d3bc646116e1f34721329539ba59dcdd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/logger.html.twig"));

        // line 3
        $context["helper"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b11250c5b0930cfac56870c18acf97d3bc646116e1f34721329539ba59dcdd4->leave($__internal_4b11250c5b0930cfac56870c18acf97d3bc646116e1f34721329539ba59dcdd4_prof);

    }

    // line 5
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f9a10a750947dbcacca21d57b65559e417cf61ca9004313383fd08d19986a2ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9a10a750947dbcacca21d57b65559e417cf61ca9004313383fd08d19986a2ad->enter($__internal_f9a10a750947dbcacca21d57b65559e417cf61ca9004313383fd08d19986a2ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 6
        echo "    ";
        if ((($this->getAttribute(($context["collector"] ?? null), "counterrors", array()) || $this->getAttribute(($context["collector"] ?? null), "countdeprecations", array())) || $this->getAttribute(($context["collector"] ?? null), "countwarnings", array()))) {
            // line 7
            echo "        ";
            ob_start();
            // line 8
            echo "            ";
            $context["status_color"] = (($this->getAttribute(($context["collector"] ?? null), "counterrors", array())) ? ("red") : ("yellow"));
            // line 9
            echo "            ";
            echo twig_include($this->env, $context, "@WebProfiler/Icon/logger.svg");
            echo "
            <span class=\"sf-toolbar-value\">";
            // line 10
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? null), "counterrors", array())) ? ($this->getAttribute(($context["collector"] ?? null), "counterrors", array())) : (($this->getAttribute(($context["collector"] ?? null), "countdeprecations", array()) + $this->getAttribute(($context["collector"] ?? null), "countwarnings", array())))), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 12
            echo "
        ";
            // line 13
            ob_start();
            // line 14
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Errors</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 16
            echo (($this->getAttribute(($context["collector"] ?? null), "counterrors", array())) ? ("red") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? null), "counterrors", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collector"] ?? null), "counterrors", array()), 0)) : (0)), "html", null, true);
            echo "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Warnings</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 21
            echo (($this->getAttribute(($context["collector"] ?? null), "countwarnings", array())) ? ("yellow") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? null), "countwarnings", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collector"] ?? null), "countwarnings", array()), 0)) : (0)), "html", null, true);
            echo "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Deprecations</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 26
            echo (($this->getAttribute(($context["collector"] ?? null), "countdeprecations", array())) ? ("yellow") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? null), "countdeprecations", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collector"] ?? null), "countdeprecations", array()), 0)) : (0)), "html", null, true);
            echo "</span>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 29
            echo "
        ";
            // line 30
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => ($context["profiler_url"] ?? null), "status" => ($context["status_color"] ?? null)));
            echo "
    ";
        }
        
        $__internal_f9a10a750947dbcacca21d57b65559e417cf61ca9004313383fd08d19986a2ad->leave($__internal_f9a10a750947dbcacca21d57b65559e417cf61ca9004313383fd08d19986a2ad_prof);

    }

    // line 34
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bf401e340d55aad18a14e83502985664fba4f78d13e23b0af10183415179f53a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf401e340d55aad18a14e83502985664fba4f78d13e23b0af10183415179f53a->enter($__internal_bf401e340d55aad18a14e83502985664fba4f78d13e23b0af10183415179f53a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 35
        echo "    <span class=\"label label-status-";
        echo (($this->getAttribute(($context["collector"] ?? null), "counterrors", array())) ? ("error") : (((($this->getAttribute(($context["collector"] ?? null), "countdeprecations", array()) || $this->getAttribute(($context["collector"] ?? null), "countwarnings", array()))) ? ("warning") : (""))));
        echo " ";
        echo ((twig_test_empty($this->getAttribute(($context["collector"] ?? null), "logs", array()))) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 36
        echo twig_include($this->env, $context, "@WebProfiler/Icon/logger.svg");
        echo "</span>
        <strong>Logs</strong>
        ";
        // line 38
        if ((($this->getAttribute(($context["collector"] ?? null), "counterrors", array()) || $this->getAttribute(($context["collector"] ?? null), "countdeprecations", array())) || $this->getAttribute(($context["collector"] ?? null), "countwarnings", array()))) {
            // line 39
            echo "            <span class=\"count\">
                <span>";
            // line 40
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? null), "counterrors", array())) ? ($this->getAttribute(($context["collector"] ?? null), "counterrors", array())) : (($this->getAttribute(($context["collector"] ?? null), "countdeprecations", array()) + $this->getAttribute(($context["collector"] ?? null), "countwarnings", array())))), "html", null, true);
            echo "</span>
            </span>
        ";
        }
        // line 43
        echo "    </span>
";
        
        $__internal_bf401e340d55aad18a14e83502985664fba4f78d13e23b0af10183415179f53a->leave($__internal_bf401e340d55aad18a14e83502985664fba4f78d13e23b0af10183415179f53a_prof);

    }

    // line 46
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1d074065fa454d030028f4b0eba99a3eae083e33890c7b21cf778b0e424eada3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d074065fa454d030028f4b0eba99a3eae083e33890c7b21cf778b0e424eada3->enter($__internal_1d074065fa454d030028f4b0eba99a3eae083e33890c7b21cf778b0e424eada3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 47
        echo "    <h2>Log Messages</h2>

    ";
        // line 49
        if (twig_test_empty($this->getAttribute(($context["collector"] ?? null), "logs", array()))) {
            // line 50
            echo "        <div class=\"empty\">
            <p>No log messages available.</p>
        </div>
    ";
        } else {
            // line 54
            echo "        ";
            // line 55
            echo "        ";
            list($context["deprecation_logs"], $context["debug_logs"], $context["info_and_error_logs"], $context["silenced_logs"]) =             array(array(), array(), array(), array());
            // line 56
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? null), "logs", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                // line 57
                echo "            ";
                if (($this->getAttribute($context["log"], "scream", array(), "any", true, true) &&  !$this->getAttribute($context["log"], "scream", array()))) {
                    // line 58
                    echo "                ";
                    $context["deprecation_logs"] = twig_array_merge(($context["deprecation_logs"] ?? null), array(0 => $context["log"]));
                    // line 59
                    echo "            ";
                } elseif (($this->getAttribute($context["log"], "scream", array(), "any", true, true) && $this->getAttribute($context["log"], "scream", array()))) {
                    // line 60
                    echo "                ";
                    $context["silenced_logs"] = twig_array_merge(($context["silenced_logs"] ?? null), array(0 => $context["log"]));
                    // line 61
                    echo "            ";
                } elseif (($this->getAttribute($context["log"], "priorityName", array()) == "DEBUG")) {
                    // line 62
                    echo "                ";
                    $context["debug_logs"] = twig_array_merge(($context["debug_logs"] ?? null), array(0 => $context["log"]));
                    // line 63
                    echo "            ";
                } else {
                    // line 64
                    echo "                ";
                    $context["info_and_error_logs"] = twig_array_merge(($context["info_and_error_logs"] ?? null), array(0 => $context["log"]));
                    // line 65
                    echo "            ";
                }
                // line 66
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "
        <div class=\"sf-tabs\">
            <div class=\"tab\">
                <h3 class=\"tab-title\">Info. &amp; Errors <span class=\"badge status-";
            // line 70
            echo (($this->getAttribute(($context["collector"] ?? null), "counterrors", array())) ? ("error") : ((($this->getAttribute(($context["collector"] ?? null), "countwarnings", array())) ? ("warning") : (""))));
            echo "\">";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? null), "counterrors", array())) ? ($this->getAttribute(($context["collector"] ?? null), "counterrors", array())) : (twig_length_filter($this->env, ($context["info_and_error_logs"] ?? null)))), "html", null, true);
            echo "</span></h3>

                <div class=\"tab-content\">
                    ";
            // line 73
            if (twig_test_empty(($context["info_and_error_logs"] ?? null))) {
                // line 74
                echo "                        <div class=\"empty\">
                            <p>There are no log messages of this level.</p>
                        </div>
                    ";
            } else {
                // line 78
                echo "                        ";
                echo $context["helper"]->getrender_table(($context["info_and_error_logs"] ?? null), "info", true);
                echo "
                    ";
            }
            // line 80
            echo "                </div>
            </div>

            <div class=\"tab\">
                ";
            // line 86
            echo "                <h3 class=\"tab-title\">Deprecations <span class=\"badge status-";
            echo (($this->getAttribute(($context["collector"] ?? null), "countdeprecations", array())) ? ("warning") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? null), "countdeprecations", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collector"] ?? null), "countdeprecations", array()), 0)) : (0)), "html", null, true);
            echo "</span></h3>

                <div class=\"tab-content\">
                    ";
            // line 89
            if (twig_test_empty(($context["deprecation_logs"] ?? null))) {
                // line 90
                echo "                        <div class=\"empty\">
                            <p>There are no log messages about deprecated features.</p>
                        </div>
                    ";
            } else {
                // line 94
                echo "                        ";
                echo $context["helper"]->getrender_table(($context["deprecation_logs"] ?? null), "deprecation", false, true);
                echo "
                    ";
            }
            // line 96
            echo "                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Debug <span class=\"badge\">";
            // line 100
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["debug_logs"] ?? null)), "html", null, true);
            echo "</span></h3>

                <div class=\"tab-content\">
                    ";
            // line 103
            if (twig_test_empty(($context["debug_logs"] ?? null))) {
                // line 104
                echo "                        <div class=\"empty\">
                            <p>There are no log messages of this level.</p>
                        </div>
                    ";
            } else {
                // line 108
                echo "                        ";
                echo $context["helper"]->getrender_table(($context["debug_logs"] ?? null), "debug");
                echo "
                    ";
            }
            // line 110
            echo "                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Silenced PHP Notices<span class=\"badge\">";
            // line 114
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? null), "countscreams", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collector"] ?? null), "countscreams", array()), 0)) : (0)), "html", null, true);
            echo "</span></h3>

                <div class=\"tab-content\">
                    ";
            // line 117
            if (twig_test_empty(($context["silenced_logs"] ?? null))) {
                // line 118
                echo "                        <div class=\"empty\">
                            <p>There are no log messages of this level.</p>
                        </div>
                    ";
            } else {
                // line 122
                echo "                        ";
                echo $context["helper"]->getrender_table(($context["silenced_logs"] ?? null), "silenced");
                echo "
                    ";
            }
            // line 124
            echo "                </div>
            </div>

        </div>
    ";
        }
        
        $__internal_1d074065fa454d030028f4b0eba99a3eae083e33890c7b21cf778b0e424eada3->leave($__internal_1d074065fa454d030028f4b0eba99a3eae083e33890c7b21cf778b0e424eada3_prof);

    }

    // line 131
    public function getrender_table($__logs__ = null, $__category__ = "", $__show_level__ = false, $__is_deprecation__ = false, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "logs" => $__logs__,
            "category" => $__category__,
            "show_level" => $__show_level__,
            "is_deprecation" => $__is_deprecation__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_a1de6a8e7706adddc19b7ac303f65629a2329138c4ed9c7cd637786fb7efd50d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_a1de6a8e7706adddc19b7ac303f65629a2329138c4ed9c7cd637786fb7efd50d->enter($__internal_a1de6a8e7706adddc19b7ac303f65629a2329138c4ed9c7cd637786fb7efd50d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_table"));

            // line 132
            echo "    ";
            $context["helper"] = $this;
            // line 133
            echo "    ";
            $context["channel_is_defined"] = $this->getAttribute(twig_first($this->env, ($context["logs"] ?? null)), "channel", array(), "any", true, true);
            // line 134
            echo "
    <table class=\"logs\">
        <thead>
            <tr>
                <th>";
            // line 138
            echo ((($context["show_level"] ?? null)) ? ("Level") : ("Time"));
            echo "</th>
                ";
            // line 139
            if (($context["channel_is_defined"] ?? null)) {
                echo "<th>Channel</th>";
            }
            // line 140
            echo "                <th class=\"full-width\">Message</th>
            </tr>
        </thead>

        <tbody>
            ";
            // line 145
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["logs"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                // line 146
                echo "                ";
                $context["css_class"] = ((($context["is_deprecation"] ?? null)) ? ("") : (((twig_in_filter($this->getAttribute(                // line 147
$context["log"], "priorityName", array()), array(0 => "CRITICAL", 1 => "ERROR", 2 => "ALERT", 3 => "EMERGENCY"))) ? ("status-error") : (((($this->getAttribute(                // line 148
$context["log"], "priorityName", array()) == "WARNING")) ? ("status-warning") : (""))))));
                // line 150
                echo "                <tr class=\"";
                echo twig_escape_filter($this->env, ($context["css_class"] ?? null), "html", null, true);
                echo "\">
                    <td class=\"font-normal text-small\" nowrap>
                        ";
                // line 152
                if (($context["show_level"] ?? null)) {
                    // line 153
                    echo "                            <span class=\"colored text-bold\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "priorityName", array()), "html", null, true);
                    echo "</span>
                        ";
                }
                // line 155
                echo "                        <span class=\"text-muted newline\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["log"], "timestamp", array()), "H:i:s"), "html", null, true);
                echo "</span>
                    </td>

                    ";
                // line 158
                if (($context["channel_is_defined"] ?? null)) {
                    // line 159
                    echo "                        <td class=\"font-normal text-small text-bold\" nowrap>
                            ";
                    // line 160
                    echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "channel", array()), "html", null, true);
                    echo "
                            ";
                    // line 161
                    if (($this->getAttribute($context["log"], "errorCount", array(), "any", true, true) && ($this->getAttribute($context["log"], "errorCount", array()) > 1))) {
                        // line 162
                        echo "                                <span class=\"text-muted\">(";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "errorCount", array()), "html", null, true);
                        echo " times)</span>
                            ";
                    }
                    // line 164
                    echo "                        </td>

                    ";
                }
                // line 167
                echo "
                    <td class=\"font-normal\">";
                // line 168
                echo $context["helper"]->getrender_log_message(($context["category"] ?? null), $this->getAttribute($context["loop"], "index", array()), $context["log"], ($context["is_deprecation"] ?? null));
                echo "</td>
                </tr>
            ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 171
            echo "        </tbody>
    </table>
";
            
            $__internal_a1de6a8e7706adddc19b7ac303f65629a2329138c4ed9c7cd637786fb7efd50d->leave($__internal_a1de6a8e7706adddc19b7ac303f65629a2329138c4ed9c7cd637786fb7efd50d_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 175
    public function getrender_log_message($__category__ = null, $__log_index__ = null, $__log__ = null, $__is_deprecation__ = false, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "category" => $__category__,
            "log_index" => $__log_index__,
            "log" => $__log__,
            "is_deprecation" => $__is_deprecation__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_1dffc68b093e9dd410e094416b31fafdbf86fb52a957a7db5f78514e13f1cf7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_1dffc68b093e9dd410e094416b31fafdbf86fb52a957a7db5f78514e13f1cf7a->enter($__internal_1dffc68b093e9dd410e094416b31fafdbf86fb52a957a7db5f78514e13f1cf7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_log_message"));

            // line 176
            echo "    ";
            if (($context["is_deprecation"] ?? null)) {
                // line 177
                echo "        ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["log"] ?? null), "message", array()), "html", null, true);
                echo "

        ";
                // line 179
                $context["context_id"] = ((("context-" . ($context["category"] ?? null)) . "-") . ($context["log_index"] ?? null));
                // line 180
                echo "
        <span class=\"metadata\">
             <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                // line 182
                echo twig_escape_filter($this->env, ($context["context_id"] ?? null), "html", null, true);
                echo "\" data-toggle-alt-content=\"Hide trace\">Show trace</a>

            <div id=\"";
                // line 184
                echo twig_escape_filter($this->env, ($context["context_id"] ?? null), "html", null, true);
                echo "\" class=\"context sf-toggle-content sf-toggle-hidden\">
                ";
                // line 185
                echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["log"] ?? null), "context", array()), "seek", array(0 => "exception"), "method"), "seek", array(0 => "\000Exception\000trace"), "method"), 2));
                echo "
            </div>
        </span>
    ";
            } elseif (($this->getAttribute(            // line 188
($context["log"] ?? null), "context", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute(($context["log"] ?? null), "context", array())))) {
                // line 189
                echo "        ";
                echo $this->env->getExtension('Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension')->dumpLog($this->env, $this->getAttribute(($context["log"] ?? null), "message", array()), $this->getAttribute(($context["log"] ?? null), "context", array()));
                echo "

        ";
                // line 191
                $context["context_id"] = ((("context-" . ($context["category"] ?? null)) . "-") . ($context["log_index"] ?? null));
                // line 192
                echo "
        <span class=\"metadata\">
             <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                // line 194
                echo twig_escape_filter($this->env, ($context["context_id"] ?? null), "html", null, true);
                echo "\" data-toggle-alt-content=\"Hide context\">Show context</a>

             <div id=\"";
                // line 196
                echo twig_escape_filter($this->env, ($context["context_id"] ?? null), "html", null, true);
                echo "\" class=\"context sf-toggle-content sf-toggle-hidden\">
                ";
                // line 197
                echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute(($context["log"] ?? null), "context", array()), 1));
                echo "
            </div>
        </span>
    ";
            } else {
                // line 201
                echo "        ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["log"] ?? null), "message", array()), "html", null, true);
                echo "
    ";
            }
            
            $__internal_1dffc68b093e9dd410e094416b31fafdbf86fb52a957a7db5f78514e13f1cf7a->leave($__internal_1dffc68b093e9dd410e094416b31fafdbf86fb52a957a7db5f78514e13f1cf7a_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/logger.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  560 => 201,  553 => 197,  549 => 196,  544 => 194,  540 => 192,  538 => 191,  532 => 189,  530 => 188,  524 => 185,  520 => 184,  515 => 182,  511 => 180,  509 => 179,  503 => 177,  500 => 176,  482 => 175,  462 => 171,  445 => 168,  442 => 167,  437 => 164,  431 => 162,  429 => 161,  425 => 160,  422 => 159,  420 => 158,  413 => 155,  407 => 153,  405 => 152,  399 => 150,  397 => 148,  396 => 147,  394 => 146,  377 => 145,  370 => 140,  366 => 139,  362 => 138,  356 => 134,  353 => 133,  350 => 132,  332 => 131,  320 => 124,  314 => 122,  308 => 118,  306 => 117,  300 => 114,  294 => 110,  288 => 108,  282 => 104,  280 => 103,  274 => 100,  268 => 96,  262 => 94,  256 => 90,  254 => 89,  245 => 86,  239 => 80,  233 => 78,  227 => 74,  225 => 73,  217 => 70,  212 => 67,  206 => 66,  203 => 65,  200 => 64,  197 => 63,  194 => 62,  191 => 61,  188 => 60,  185 => 59,  182 => 58,  179 => 57,  174 => 56,  171 => 55,  169 => 54,  163 => 50,  161 => 49,  157 => 47,  151 => 46,  143 => 43,  137 => 40,  134 => 39,  132 => 38,  127 => 36,  120 => 35,  114 => 34,  104 => 30,  101 => 29,  93 => 26,  83 => 21,  73 => 16,  69 => 14,  67 => 13,  64 => 12,  59 => 10,  54 => 9,  51 => 8,  48 => 7,  45 => 6,  39 => 5,  32 => 1,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@WebProfiler/Collector/logger.html.twig", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\logger.html.twig");
    }
}
