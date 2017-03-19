<?php

/* @Security/Collector/security.html.twig */
class __TwigTemplate_a2999d889ffb315908dd6b61aa152645cab3d20cb5ebd08a51696465771a4a97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@Security/Collector/security.html.twig", 1);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
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
        $__internal_78dc8c23b2f81d0362e36cc8d611050ebc5949c811c9eaf6814d414f15658cb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78dc8c23b2f81d0362e36cc8d611050ebc5949c811c9eaf6814d414f15658cb5->enter($__internal_78dc8c23b2f81d0362e36cc8d611050ebc5949c811c9eaf6814d414f15658cb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Security/Collector/security.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78dc8c23b2f81d0362e36cc8d611050ebc5949c811c9eaf6814d414f15658cb5->leave($__internal_78dc8c23b2f81d0362e36cc8d611050ebc5949c811c9eaf6814d414f15658cb5_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_f1f2c95e4fc8755b0077e43fd121aba63ca8a2b43b45614981bd588a900fa299 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1f2c95e4fc8755b0077e43fd121aba63ca8a2b43b45614981bd588a900fa299->enter($__internal_f1f2c95e4fc8755b0077e43fd121aba63ca8a2b43b45614981bd588a900fa299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Security";
        
        $__internal_f1f2c95e4fc8755b0077e43fd121aba63ca8a2b43b45614981bd588a900fa299->leave($__internal_f1f2c95e4fc8755b0077e43fd121aba63ca8a2b43b45614981bd588a900fa299_prof);

    }

    // line 5
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e116c40f79779140e1d3590af0f7bb9e97f3786100eae7ed059d45593e7183d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e116c40f79779140e1d3590af0f7bb9e97f3786100eae7ed059d45593e7183d1->enter($__internal_e116c40f79779140e1d3590af0f7bb9e97f3786100eae7ed059d45593e7183d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 6
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? null), "token", array())) {
            // line 7
            echo "        ";
            $context["is_authenticated"] = ($this->getAttribute(($context["collector"] ?? null), "enabled", array()) && $this->getAttribute(($context["collector"] ?? null), "authenticated", array()));
            // line 8
            echo "        ";
            $context["color_code"] = ((($context["is_authenticated"] ?? null)) ? ("") : ("yellow"));
            // line 9
            echo "    ";
        } else {
            // line 10
            echo "        ";
            $context["color_code"] = (($this->getAttribute(($context["collector"] ?? null), "enabled", array())) ? ("red") : (""));
            // line 11
            echo "    ";
        }
        // line 12
        echo "
    ";
        // line 13
        ob_start();
        // line 14
        echo "        ";
        echo twig_include($this->env, $context, "@Security/Collector/icon.svg");
        echo "
        <span class=\"sf-toolbar-value\">";
        // line 15
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? null), "user", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collector"] ?? null), "user", array()), "n/a")) : ("n/a")), "html", null, true);
        echo "</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 17
        echo "
    ";
        // line 18
        ob_start();
        // line 19
        echo "        ";
        if ($this->getAttribute(($context["collector"] ?? null), "enabled", array())) {
            // line 20
            echo "            ";
            if ($this->getAttribute(($context["collector"] ?? null), "token", array())) {
                // line 21
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Logged in as</b>
                    <span>";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "user", array()), "html", null, true);
                echo "</span>
                </div>

                <div class=\"sf-toolbar-info-piece\">
                    <b>Authenticated</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-";
                // line 28
                echo ((($context["is_authenticated"] ?? null)) ? ("green") : ("red"));
                echo "\">";
                echo ((($context["is_authenticated"] ?? null)) ? ("Yes") : ("No"));
                echo "</span>
                </div>

                <div class=\"sf-toolbar-info-piece\">
                    <b>Token class</b>
                    <span>";
                // line 33
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->abbrClass($this->getAttribute(($context["collector"] ?? null), "tokenClass", array()));
                echo "</span>
                </div>
            ";
            } else {
                // line 36
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Authenticated</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-red\">No</span>
                </div>
            ";
            }
            // line 41
            echo "
            ";
            // line 42
            if ($this->getAttribute(($context["collector"] ?? null), "firewall", array())) {
                // line 43
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Firewall name</b>
                    <span>";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? null), "firewall", array()), "name", array()), "html", null, true);
                echo "</span>
                </div>
            ";
            }
            // line 48
            echo "
            ";
            // line 49
            if (($this->getAttribute(($context["collector"] ?? null), "token", array()) && $this->getAttribute(($context["collector"] ?? null), "logoutUrl", array()))) {
                // line 50
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Actions</b>
                    <span><a href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "logoutUrl", array()), "html", null, true);
                echo "\">Logout</a></span>
                </div>
            ";
            }
            // line 55
            echo "        ";
        } else {
            // line 56
            echo "            <div class=\"sf-toolbar-info-piece\">
                <span>The security is disabled.</span>
            </div>
        ";
        }
        // line 60
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 61
        echo "
    ";
        // line 62
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => ($context["profiler_url"] ?? null), "status" => ($context["color_code"] ?? null)));
        echo "
";
        
        $__internal_e116c40f79779140e1d3590af0f7bb9e97f3786100eae7ed059d45593e7183d1->leave($__internal_e116c40f79779140e1d3590af0f7bb9e97f3786100eae7ed059d45593e7183d1_prof);

    }

    // line 65
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8f0d8a207b78c803d71ee41fc7fbc85a9b031700216f8ff7be5ace37513c04c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f0d8a207b78c803d71ee41fc7fbc85a9b031700216f8ff7be5ace37513c04c4->enter($__internal_8f0d8a207b78c803d71ee41fc7fbc85a9b031700216f8ff7be5ace37513c04c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 66
        echo "    <span class=\"label ";
        echo ((( !$this->getAttribute(($context["collector"] ?? null), "enabled", array()) ||  !$this->getAttribute(($context["collector"] ?? null), "token", array()))) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 67
        echo twig_include($this->env, $context, "@Security/Collector/icon.svg");
        echo "</span>
        <strong>Security</strong>
    </span>
";
        
        $__internal_8f0d8a207b78c803d71ee41fc7fbc85a9b031700216f8ff7be5ace37513c04c4->leave($__internal_8f0d8a207b78c803d71ee41fc7fbc85a9b031700216f8ff7be5ace37513c04c4_prof);

    }

    // line 72
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d7adaa78fd0f1d35fefb0caba93eb94761838231297e935c6883183ccdf449da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7adaa78fd0f1d35fefb0caba93eb94761838231297e935c6883183ccdf449da->enter($__internal_d7adaa78fd0f1d35fefb0caba93eb94761838231297e935c6883183ccdf449da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 73
        echo "    <h2>Security Token</h2>

    ";
        // line 75
        if ($this->getAttribute(($context["collector"] ?? null), "enabled", array())) {
            // line 76
            echo "        ";
            if ($this->getAttribute(($context["collector"] ?? null), "token", array())) {
                // line 77
                echo "            <div class=\"metrics\">
                <div class=\"metric\">
                    <span class=\"value\">";
                // line 79
                echo twig_escape_filter($this->env, ((($this->getAttribute(($context["collector"] ?? null), "user", array()) == "anon.")) ? ("Anonymous") : ($this->getAttribute(($context["collector"] ?? null), "user", array()))), "html", null, true);
                echo "</span>
                    <span class=\"label\">Username</span>
                </div>

                <div class=\"metric\">
                    <span class=\"value\">";
                // line 84
                echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . (($this->getAttribute(($context["collector"] ?? null), "authenticated", array())) ? ("yes") : ("no"))) . ".svg"));
                echo "</span>
                    <span class=\"label\">Authenticated</span>
                </div>
            </div>

            <table>
                <thead>
                    <tr>
                        <th scope=\"col\" class=\"key\">Property</th>
                        <th scope=\"col\">Value</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Roles</th>
                        <td>
                            ";
                // line 100
                echo ((twig_test_empty($this->getAttribute(($context["collector"] ?? null), "roles", array()))) ? ("none") : (call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute(($context["collector"] ?? null), "roles", array()), 1))));
                echo "

                            ";
                // line 102
                if (( !$this->getAttribute(($context["collector"] ?? null), "authenticated", array()) && twig_test_empty($this->getAttribute(($context["collector"] ?? null), "roles", array())))) {
                    // line 103
                    echo "                                <p class=\"help\">User is not authenticated probably because they have no roles.</p>
                            ";
                }
                // line 105
                echo "                        </td>
                    </tr>

                    ";
                // line 108
                if ($this->getAttribute(($context["collector"] ?? null), "supportsRoleHierarchy", array())) {
                    // line 109
                    echo "                    <tr>
                        <th>Inherited Roles</th>
                        <td>";
                    // line 111
                    echo ((twig_test_empty($this->getAttribute(($context["collector"] ?? null), "inheritedRoles", array()))) ? ("none") : (call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute(($context["collector"] ?? null), "inheritedRoles", array()), 1))));
                    echo "</td>
                    </tr>
                    ";
                }
                // line 114
                echo "
                    ";
                // line 115
                if ($this->getAttribute(($context["collector"] ?? null), "token", array())) {
                    // line 116
                    echo "                    <tr>
                        <th>Token</th>
                        <td>";
                    // line 118
                    echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute(($context["collector"] ?? null), "token", array())));
                    echo "</td>
                    </tr>
                    ";
                }
                // line 121
                echo "                </tbody>
            </table>
        ";
            } elseif ($this->getAttribute(            // line 123
($context["collector"] ?? null), "enabled", array())) {
                // line 124
                echo "            <div class=\"empty\">
                <p>There is no security token.</p>
            </div>
        ";
            }
            // line 128
            echo "

        <h2>Security Firewall</h2>

        ";
            // line 132
            if ($this->getAttribute(($context["collector"] ?? null), "firewall", array())) {
                // line 133
                echo "            <div class=\"metrics\">
                <div class=\"metric\">
                    <span class=\"value\">";
                // line 135
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? null), "firewall", array()), "name", array()), "html", null, true);
                echo "</span>
                    <span class=\"label\">Name</span>
                </div>
                <div class=\"metric\">
                    <span class=\"value\">";
                // line 139
                echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . (($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "firewall", array()), "security_enabled", array())) ? ("yes") : ("no"))) . ".svg"));
                echo "</span>
                    <span class=\"label\">Security enabled</span>
                </div>
                <div class=\"metric\">
                    <span class=\"value\">";
                // line 143
                echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . (($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "firewall", array()), "stateless", array())) ? ("yes") : ("no"))) . ".svg"));
                echo "</span>
                    <span class=\"label\">Stateless</span>
                </div>
                <div class=\"metric\">
                    <span class=\"value\">";
                // line 147
                echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . (($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "firewall", array()), "allows_anonymous", array())) ? ("yes") : ("no"))) . ".svg"));
                echo "</span>
                    <span class=\"label\">Allows anonymous</span>
                </div>
            </div>

            ";
                // line 152
                if ($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "firewall", array()), "security_enabled", array())) {
                    // line 153
                    echo "                <table>
                    <thead>
                        <tr>
                            <th scope=\"col\" class=\"key\">Key</th>
                            <th scope=\"col\">Value</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>provider</th>
                            <td>";
                    // line 163
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "firewall", array()), "provider", array())) ? ($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "firewall", array()), "provider", array())) : ("(none)")), "html", null, true);
                    echo "</td>
                        </tr>
                        <tr>
                            <th>context</th>
                            <td>";
                    // line 167
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "firewall", array()), "context", array())) ? ($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "firewall", array()), "context", array())) : ("(none)")), "html", null, true);
                    echo "</td>
                        </tr>
                        <tr>
                            <th>entry_point</th>
                            <td>";
                    // line 171
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "firewall", array()), "entry_point", array())) ? ($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "firewall", array()), "entry_point", array())) : ("(none)")), "html", null, true);
                    echo "</td>
                        </tr>
                        <tr>
                            <th>user_checker</th>
                            <td>";
                    // line 175
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "firewall", array()), "user_checker", array())) ? ($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "firewall", array()), "user_checker", array())) : ("(none)")), "html", null, true);
                    echo "</td>
                        </tr>
                        <tr>
                            <th>access_denied_handler</th>
                            <td>";
                    // line 179
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "firewall", array()), "access_denied_handler", array())) ? ($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "firewall", array()), "access_denied_handler", array())) : ("(none)")), "html", null, true);
                    echo "</td>
                        </tr>
                        <tr>
                            <th>access_denied_url</th>
                            <td>";
                    // line 183
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "firewall", array()), "access_denied_url", array())) ? ($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "firewall", array()), "access_denied_url", array())) : ("(none)")), "html", null, true);
                    echo "</td>
                        </tr>
                        <tr>
                            <th>listeners</th>
                            <td>";
                    // line 187
                    echo ((twig_test_empty($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "firewall", array()), "listeners", array()))) ? ("(none)") : (call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? null), "firewall", array()), "listeners", array()), 1))));
                    echo "</td>
                        </tr>
                    </tbody>
                </table>
            ";
                }
                // line 192
                echo "        ";
            } elseif ($this->getAttribute(($context["collector"] ?? null), "enabled", array())) {
                // line 193
                echo "            <div class=\"empty\">
                <p>This request was not covered by any firewall.</p>
            </div>
        ";
            }
            // line 197
            echo "    ";
        } else {
            // line 198
            echo "        <div class=\"empty\">
            <p>The security component is disabled.</p>
        </div>
    ";
        }
        // line 202
        echo "
    ";
        // line 203
        if ( !twig_test_empty((($this->getAttribute(($context["collector"] ?? null), "voters", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collector"] ?? null), "voters", array()), array())) : (array())))) {
            // line 204
            echo "        <h2>Security Voters <small>(";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "voters", array())), "html", null, true);
            echo ")</small></h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 208
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? null), "voterStrategy", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collector"] ?? null), "voterStrategy", array()), "unknown")) : ("unknown")), "html", null, true);
            echo "</span>
                <span class=\"label\">Strategy</span>
            </div>
        </div>

        <table class=\"voters\">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Voter class</th>
                </tr>
            </thead>

            <tbody>
                ";
            // line 222
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? null), "voters", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["voter"]) {
                // line 223
                echo "                    <tr>
                        <td class=\"font-normal text-small text-muted nowrap\">";
                // line 224
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</td>
                        <td class=\"font-normal\">";
                // line 225
                echo twig_escape_filter($this->env, $context["voter"], "html", null, true);
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 228
            echo "            </tbody>
        </table>
    ";
        }
        // line 231
        echo "
    ";
        // line 232
        if ( !twig_test_empty((($this->getAttribute(($context["collector"] ?? null), "accessDecisionLog", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collector"] ?? null), "accessDecisionLog", array()), array())) : (array())))) {
            // line 233
            echo "        <h2>Access decision log</h2>

        <table class=\"decision-log\">
            <col style=\"width: 30px\">
            <col style=\"width: 120px\">
            <col style=\"width: 25%\">
            <col style=\"width: 60%\">

            <thead>
                <tr>
                    <th>#</th>
                    <th>Result</th>
                    <th>Attributes</th>
                    <th>Object</th>
                </tr>
            </thead>

            <tbody>
                ";
            // line 251
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? null), "accessDecisionLog", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["decision"]) {
                // line 252
                echo "                    <tr>
                        <td class=\"font-normal text-small text-muted nowrap\">";
                // line 253
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</td>
                        <td class=\"font-normal\">
                            ";
                // line 255
                echo (($this->getAttribute($context["decision"], "result", array())) ? ("<span class=\"label status-success same-width\">GRANTED</span>") : ("<span class=\"label status-error same-width\">DENIED</span>"));
                // line 258
                echo "
                        </td>
                        <td>";
                // line 260
                echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute($context["decision"], "attributes", array())) == 1)) ? (twig_first($this->env, $this->getAttribute($context["decision"], "attributes", array()))) : (call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute($context["decision"], "attributes", array()))))), "html", null, true);
                echo "</td>
                        <td>";
                // line 261
                echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute($context["decision"], "object", array())));
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['decision'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 264
            echo "            </tbody>
        </table>
    ";
        }
        
        $__internal_d7adaa78fd0f1d35fefb0caba93eb94761838231297e935c6883183ccdf449da->leave($__internal_d7adaa78fd0f1d35fefb0caba93eb94761838231297e935c6883183ccdf449da_prof);

    }

    public function getTemplateName()
    {
        return "@Security/Collector/security.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  587 => 264,  570 => 261,  566 => 260,  562 => 258,  560 => 255,  555 => 253,  552 => 252,  535 => 251,  515 => 233,  513 => 232,  510 => 231,  505 => 228,  488 => 225,  484 => 224,  481 => 223,  464 => 222,  447 => 208,  439 => 204,  437 => 203,  434 => 202,  428 => 198,  425 => 197,  419 => 193,  416 => 192,  408 => 187,  401 => 183,  394 => 179,  387 => 175,  380 => 171,  373 => 167,  366 => 163,  354 => 153,  352 => 152,  344 => 147,  337 => 143,  330 => 139,  323 => 135,  319 => 133,  317 => 132,  311 => 128,  305 => 124,  303 => 123,  299 => 121,  293 => 118,  289 => 116,  287 => 115,  284 => 114,  278 => 111,  274 => 109,  272 => 108,  267 => 105,  263 => 103,  261 => 102,  256 => 100,  237 => 84,  229 => 79,  225 => 77,  222 => 76,  220 => 75,  216 => 73,  210 => 72,  199 => 67,  194 => 66,  188 => 65,  179 => 62,  176 => 61,  173 => 60,  167 => 56,  164 => 55,  158 => 52,  154 => 50,  152 => 49,  149 => 48,  143 => 45,  139 => 43,  137 => 42,  134 => 41,  127 => 36,  121 => 33,  111 => 28,  103 => 23,  99 => 21,  96 => 20,  93 => 19,  91 => 18,  88 => 17,  83 => 15,  78 => 14,  76 => 13,  73 => 12,  70 => 11,  67 => 10,  64 => 9,  61 => 8,  58 => 7,  55 => 6,  49 => 5,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Security/Collector/security.html.twig", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\SecurityBundle\\Resources\\views\\Collector\\security.html.twig");
    }
}
