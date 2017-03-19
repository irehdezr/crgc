<?php

/* @WebProfiler/Collector/form.html.twig */
class __TwigTemplate_aadd3bbdd331dcb0d3ede1f5ad50d78c7bf3a023b73bcc3fba5c7d499da04f3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/form.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'head' => array($this, 'block_head'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_59764eba42cb8b08fa2d1ca1c7e876290ac555a15355388fee43eb0251cc6c66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59764eba42cb8b08fa2d1ca1c7e876290ac555a15355388fee43eb0251cc6c66->enter($__internal_59764eba42cb8b08fa2d1ca1c7e876290ac555a15355388fee43eb0251cc6c66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/form.html.twig"));

        // line 3
        $context["__internal_3d75098cc34d8abbf14bdeda277487a7945204b3bac916b813c15d5bdfa9fa36"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59764eba42cb8b08fa2d1ca1c7e876290ac555a15355388fee43eb0251cc6c66->leave($__internal_59764eba42cb8b08fa2d1ca1c7e876290ac555a15355388fee43eb0251cc6c66_prof);

    }

    // line 5
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b0646518d8d50c378430f81738e0896e8c812d1f3b9797969110d79bce9934c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0646518d8d50c378430f81738e0896e8c812d1f3b9797969110d79bce9934c4->enter($__internal_b0646518d8d50c378430f81738e0896e8c812d1f3b9797969110d79bce9934c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 6
        echo "    ";
        if ((($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", array()), "nb_errors", array()) > 0) || twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", array()), "forms", array())))) {
            // line 7
            echo "        ";
            $context["status_color"] = (($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", array()), "nb_errors", array())) ? ("red") : (""));
            // line 8
            echo "        ";
            ob_start();
            // line 9
            echo "            ";
            echo twig_include($this->env, $context, "@WebProfiler/Icon/form.svg");
            echo "
            <span class=\"sf-toolbar-value\">
                ";
            // line 11
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", array()), "nb_errors", array())) ? ($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", array()), "nb_errors", array())) : (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", array()), "forms", array())))), "html", null, true);
            echo "
            </span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 14
            echo "
        ";
            // line 15
            ob_start();
            // line 16
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Number of forms</b>
                <span class=\"sf-toolbar-status\">";
            // line 18
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", array()), "forms", array())), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Number of errors</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 22
            echo ((($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", array()), "nb_errors", array()) > 0)) ? ("red") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", array()), "nb_errors", array()), "html", null, true);
            echo "</span>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 25
            echo "
        ";
            // line 26
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => ($context["profiler_url"] ?? null), "status" => ($context["status_color"] ?? null)));
            echo "
    ";
        }
        
        $__internal_b0646518d8d50c378430f81738e0896e8c812d1f3b9797969110d79bce9934c4->leave($__internal_b0646518d8d50c378430f81738e0896e8c812d1f3b9797969110d79bce9934c4_prof);

    }

    // line 30
    public function block_menu($context, array $blocks = array())
    {
        $__internal_04047f6190a0052724328c5602315f236407c14ad1b1e78e4f98bea931f3b566 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04047f6190a0052724328c5602315f236407c14ad1b1e78e4f98bea931f3b566->enter($__internal_04047f6190a0052724328c5602315f236407c14ad1b1e78e4f98bea931f3b566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 31
        echo "    <span class=\"label label-status-";
        echo (($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", array()), "nb_errors", array())) ? ("error") : (""));
        echo " ";
        echo ((twig_test_empty($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", array()), "forms", array()))) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 32
        echo twig_include($this->env, $context, "@WebProfiler/Icon/form.svg");
        echo "</span>
        <strong>Forms</strong>
        ";
        // line 34
        if (($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", array()), "nb_errors", array()) > 0)) {
            // line 35
            echo "            <span class=\"count\">
                <span>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", array()), "nb_errors", array()), "html", null, true);
            echo "</span>
            </span>
        ";
        }
        // line 39
        echo "    </span>
";
        
        $__internal_04047f6190a0052724328c5602315f236407c14ad1b1e78e4f98bea931f3b566->leave($__internal_04047f6190a0052724328c5602315f236407c14ad1b1e78e4f98bea931f3b566_prof);

    }

    // line 42
    public function block_head($context, array $blocks = array())
    {
        $__internal_fa5f866c57fe2d352f41a564b91011769bba18de0223443715dbf0a4ef200196 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa5f866c57fe2d352f41a564b91011769bba18de0223443715dbf0a4ef200196->enter($__internal_fa5f866c57fe2d352f41a564b91011769bba18de0223443715dbf0a4ef200196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 43
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "

    <style>
        #tree-menu {
            float: left;
            padding-right: 10px;
            width: 230px;
        }
        #tree-menu ul {
            list-style: none;
            margin: 0;
            padding-left: 0;
        }
        #tree-menu li {
            margin: 0;
            padding: 0;
            width: 100%;
        }
        #tree-menu .empty {
            border: 0;
            mmargin: 0;
            padding: 0;
        }
        #tree-details-container {
            border-left: 1px solid #DDD;
            margin-left: 250px;
            padding-left: 20px;
        }
        .tree-details {
            padding-bottom: 40px;
        }
        .tree-details h3 {
            font-size: 18px;
            position: relative;
        }

        .toggle-icon {
            display: inline-block;
            background: url(\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAgBAMAAADpp+X/AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QweDgwx4LcKwAAAABVQTFRFAAAA////////////////ZmZm////bvjBwAAAAAV0Uk5TABZwsuCVEUjgAAAAAWJLR0QF+G/pxwAAAE1JREFUGNNjSHMSYGBgUEljSGYAAzMGBwiDhUEBwmBiEIAwGBmwgTQgQGWgA7h2uIFwK+CWwp1BpHvYEqDuATEYkBlY3IOmBq6dCPcAAIT5Eg2IksjQAAAAAElFTkSuQmCC\") no-repeat top left #5eb5e0;
        }
        .closed .toggle-icon, .closed.toggle-icon {
            background-position: bottom left;
        }
        .toggle-icon.empty {
            background-image: url(\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABmJLR0QAZgBmAGYHukptAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QweDhIf6CA40AAAAFRJREFUOMvtk7ENACEMA61vfx767MROWfO+AdGBHlNyTZrYUZRYDBII4NWE1pNdpFarfgLUbpDaBEgBYRiEVjsvDLa1l6O4Z3wkFWN+OfLKdpisOH/TlICzukmUJwAAAABJRU5ErkJggg==\");
        }

        .tree .tree-inner {
            cursor: pointer;
            padding: 5px 7px 5px 22px;
            position: relative;

        }
        .tree .toggle-button {
            /* provide a bigger clickable area than just 10x10px */
            width: 16px;
            height: 16px;
            margin-left: -18px;
        }
        .tree .toggle-icon {
            width: 10px;
            height: 10px;
            /* position the icon in the center of the clickable area */
            margin-left: 3px;
            margin-top: 3px;
            background-size: 10px 20px;
            background-color: #AAA;
        }
        .tree .toggle-icon.empty {
            width: 10px;
            height: 10px;
            position: absolute;
            top: 50%;
            margin-top: -5px;
            margin-left: -15px;
            background-size: 10px 10px;
        }
        .tree ul ul .tree-inner {
            padding-left: 37px;
        }
        .tree ul ul ul .tree-inner {
            padding-left: 52px;
        }
        .tree ul ul ul ul .tree-inner {
            padding-left: 67px;
        }
        .tree ul ul ul ul ul .tree-inner {
            padding-left: 82px;
        }
        .tree .tree-inner:hover {
            background: #dfdfdf;
        }
        .tree .tree-inner.active, .tree .tree-inner.active:hover {
            background: #E0E0E0;
            font-weight: bold;
        }
        .tree .tree-inner.active .toggle-icon, .tree .tree-inner:hover .toggle-icon, .tree .tree-inner.active:hover .toggle-icon {
            background-image: url(\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAgBAMAAADpp+X/AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QweDhEYXWn+sAAAABhQTFRFAAAA39/f39/f39/f39/fZmZm39/f////gc3YPwAAAAV0Uk5TAAtAc6ZeVyCYAAAAAWJLR0QF+G/pxwAAAE1JREFUGNNjSHMSYGBgUEljSGYAAzMGBwiDhUEBwmBiEIAwGBmwgXIgQGWgA7h2uIFwK+CWwp1BpHvYC6DuATEYkBlY3IOmBq6dCPcAADqLE4MnBi/fAAAAAElFTkSuQmCC\");
            background-color: #999;
        }
        .tree .tree-inner.active .toggle-icon.empty, .tree .tree-inner:hover .toggle-icon.empty, .tree .tree-inner.active:hover .toggle-icon.empty {
            background-image: url(\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQBAMAAADt3eJSAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QweDhoucSey4gAAABVQTFRFAAAA39/f39/f39/f39/fZmZm39/fD5Dx2AAAAAV0Uk5TAAtAc6ZeVyCYAAAAAWJLR0QF+G/pxwAAADJJREFUCNdjSHMSYGBgUEljSGYAAzMGBwiDhUEBwmBiEIAwGBnIA3DtcAPhVsAthTkDAFOfBKW9C1iqAAAAAElFTkSuQmCC\");
        }
        .tree-details .toggle-icon {
            width: 16px;
            height: 16px;
            /* vertically center the button */
            position: absolute;
            top: 50%;
            margin-top: -9px;
            margin-left: 6px;
        }
        .badge-error {
            float: right;
            background: #B0413E;
            color: #FFF;
            padding: 1px 4px;
            font-size: 10px;
            font-weight: bold;
            vertical-align: middle;
        }
        .has-error {
            color: #B0413E;
        }
        .errors h3 {
            color: #B0413E;
        }
        .errors th {
            background: #B0413E;
            color: #FFF;
        }
        .errors .toggle-icon {
            background-color: #B0413E;
        }
        h3 a, h3 a:hover, h3 a:focus {
            color: inherit;
            text-decoration: inherit;
        }
    </style>
";
        
        $__internal_fa5f866c57fe2d352f41a564b91011769bba18de0223443715dbf0a4ef200196->leave($__internal_fa5f866c57fe2d352f41a564b91011769bba18de0223443715dbf0a4ef200196_prof);

    }

    // line 184
    public function block_panel($context, array $blocks = array())
    {
        $__internal_acadd95c28e6818e8331a2485b54f5eaff73ca01808f37f73c79f4150ce115d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acadd95c28e6818e8331a2485b54f5eaff73ca01808f37f73c79f4150ce115d3->enter($__internal_acadd95c28e6818e8331a2485b54f5eaff73ca01808f37f73c79f4150ce115d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 185
        echo "    <h2>Forms</h2>

    ";
        // line 187
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", array()), "forms", array()))) {
            // line 188
            echo "        <div id=\"tree-menu\" class=\"tree\">
            <ul>
            ";
            // line 190
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", array()), "forms", array()));
            foreach ($context['_seq'] as $context["formName"] => $context["formData"]) {
                // line 191
                echo "                ";
                echo $context["__internal_3d75098cc34d8abbf14bdeda277487a7945204b3bac916b813c15d5bdfa9fa36"]->getform_tree_entry($context["formName"], $context["formData"], true);
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['formName'], $context['formData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 193
            echo "            </ul>
        </div>

        <div id=\"tree-details-container\">
            ";
            // line 197
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", array()), "forms", array()));
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
            foreach ($context['_seq'] as $context["formName"] => $context["formData"]) {
                // line 198
                echo "                ";
                echo $context["__internal_3d75098cc34d8abbf14bdeda277487a7945204b3bac916b813c15d5bdfa9fa36"]->getform_tree_details($context["formName"], $context["formData"], $this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", array()), "forms_by_hash", array()), $this->getAttribute($context["loop"], "first", array()));
                echo "
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
            unset($context['_seq'], $context['_iterated'], $context['formName'], $context['formData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 200
            echo "        </div>
    ";
        } else {
            // line 202
            echo "        <div class=\"empty\">
            <p>No forms were submitted for this request.</p>
        </div>
    ";
        }
        // line 206
        echo "
    <script>
    function Toggler(storage) {
        \"use strict\";

        var STORAGE_KEY = 'sf_toggle_data',

            states = {},

            isCollapsed = function (button) {
                return Sfjs.hasClass(button, 'closed');
            },

            isExpanded = function (button) {
                return !isCollapsed(button);
            },

            expand = function (button) {
                var targetId = button.dataset.toggleTargetId,
                    target = document.getElementById(targetId);

                if (!target) {
                    throw \"Toggle target \" + targetId + \" does not exist\";
                }

                if (isCollapsed(button)) {
                    Sfjs.removeClass(button, 'closed');
                    Sfjs.removeClass(target, 'hidden');

                    states[targetId] = 1;
                    storage.setItem(STORAGE_KEY, states);
                }
            },

            collapse = function (button) {
                var targetId = button.dataset.toggleTargetId,
                    target = document.getElementById(targetId);

                if (!target) {
                    throw \"Toggle target \" + targetId + \" does not exist\";
                }

                if (isExpanded(button)) {
                    Sfjs.addClass(button, 'closed');
                    Sfjs.addClass(target, 'hidden');

                    states[targetId] = 0;
                    storage.setItem(STORAGE_KEY, states);
                }
            },

            toggle = function (button) {
                if (Sfjs.hasClass(button, 'closed')) {
                    expand(button);
                } else {
                    collapse(button);
                }
            },

            initButtons = function (buttons) {
                states = storage.getItem(STORAGE_KEY, {});

                // must be an object, not an array or anything else
                // `typeof` returns \"object\" also for arrays, so the following
                // check must be done
                // see http://stackoverflow.com/questions/4775722/check-if-object-is-array
                if ('[object Object]' !== Object.prototype.toString.call(states)) {
                    states = {};
                }

                for (var i = 0, l = buttons.length; i < l; ++i) {
                    var targetId = buttons[i].dataset.toggleTargetId,
                        target = document.getElementById(targetId);

                    if (!target) {
                        throw \"Toggle target \" + targetId + \" does not exist\";
                    }

                    // correct the initial state of the button
                    if (Sfjs.hasClass(target, 'hidden')) {
                        Sfjs.addClass(buttons[i], 'closed');
                    }

                    // attach listener for expanding/collapsing the target
                    clickHandler(buttons[i], toggle);

                    if (states.hasOwnProperty(targetId)) {
                        // open or collapse based on stored data
                        if (0 === states[targetId]) {
                            collapse(buttons[i]);
                        } else {
                            expand(buttons[i]);
                        }
                    }
                }
            };

        return {
            initButtons: initButtons,

            toggle: toggle,

            isExpanded: isExpanded,

            isCollapsed: isCollapsed,

            expand: expand,

            collapse: collapse
        };
    }

    function JsonStorage(storage) {
        var setItem = function (key, data) {
                storage.setItem(key, JSON.stringify(data));
            },

            getItem = function (key, defaultValue) {
                var data = storage.getItem(key);

                if (null !== data) {
                    try {
                        return JSON.parse(data);
                    } catch(e) {
                    }
                }

                return defaultValue;
            };

        return {
            setItem: setItem,

            getItem: getItem
        };
    }

    function TabView() {
        \"use strict\";

        var activeTab = null,

            activeTarget = null,

            select = function (tab) {
                var targetId = tab.dataset.tabTargetId,
                    target = document.getElementById(targetId);

                if (!target) {
                    throw \"Tab target \" + targetId + \" does not exist\";
                }

                if (activeTab) {
                    Sfjs.removeClass(activeTab, 'active');
                }

                if (activeTarget) {
                    Sfjs.addClass(activeTarget, 'hidden');
                }

                Sfjs.addClass(tab, 'active');
                Sfjs.removeClass(target, 'hidden');

                activeTab = tab;
                activeTarget = target;
            },

            initTabs = function (tabs) {
                for (var i = 0, l = tabs.length; i < l; ++i) {
                    var targetId = tabs[i].dataset.tabTargetId,
                        target = document.getElementById(targetId);

                    if (!target) {
                        throw \"Tab target \" + targetId + \" does not exist\";
                    }

                    clickHandler(tabs[i], select);

                    Sfjs.addClass(target, 'hidden');
                }

                if (tabs.length > 0) {
                    select(tabs[0]);
                }
            };

        return {
            initTabs: initTabs,

            select: select
        };
    }

    var tabTarget = new TabView(),
        toggler = new Toggler(new JsonStorage(sessionStorage)),
        clickHandler = function (element, callback) {
            Sfjs.addEventListener(element, 'click', function (e) {
                if (!e) {
                    e = window.event;
                }

                callback(this);

                if (e.preventDefault) {
                    e.preventDefault();
                } else {
                    e.returnValue = false;
                }

                e.stopPropagation();

                return false;
            });
        };

    tabTarget.initTabs(document.querySelectorAll('.tree .tree-inner'));
    toggler.initButtons(document.querySelectorAll('a.toggle-button'));
    </script>
";
        
        $__internal_acadd95c28e6818e8331a2485b54f5eaff73ca01808f37f73c79f4150ce115d3->leave($__internal_acadd95c28e6818e8331a2485b54f5eaff73ca01808f37f73c79f4150ce115d3_prof);

    }

    // line 426
    public function getform_tree_entry($__name__ = null, $__data__ = null, $__is_root__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "data" => $__data__,
            "is_root" => $__is_root__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_94c3778e7dcf763dc76b0256e80d4f30a47f6592730a2c7bf0911d80792f078f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_94c3778e7dcf763dc76b0256e80d4f30a47f6592730a2c7bf0911d80792f078f->enter($__internal_94c3778e7dcf763dc76b0256e80d4f30a47f6592730a2c7bf0911d80792f078f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "form_tree_entry"));

            // line 427
            echo "    ";
            $context["tree"] = $this;
            // line 428
            echo "    ";
            $context["has_error"] = ($this->getAttribute(($context["data"] ?? null), "errors", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute(($context["data"] ?? null), "errors", array())) > 0));
            // line 429
            echo "    <li>
        <div class=\"tree-inner\" data-tab-target-id=\"";
            // line 430
            echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "id", array()), "html", null, true);
            echo "-details\">
            ";
            // line 431
            if (($context["has_error"] ?? null)) {
                // line 432
                echo "                <div class=\"badge-error\">";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["data"] ?? null), "errors", array())), "html", null, true);
                echo "</div>
            ";
            }
            // line 434
            echo "
            ";
            // line 435
            if ( !twig_test_empty($this->getAttribute(($context["data"] ?? null), "children", array()))) {
                // line 436
                echo "                <a class=\"toggle-button\" data-toggle-target-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "id", array()), "html", null, true);
                echo "-children\" href=\"#\"><span class=\"toggle-icon\"></span></a>
            ";
            } else {
                // line 438
                echo "                <div class=\"toggle-icon empty\"></div>
            ";
            }
            // line 440
            echo "
            <span ";
            // line 441
            if ((($context["has_error"] ?? null) || (($this->getAttribute(($context["data"] ?? null), "has_children_error", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["data"] ?? null), "has_children_error", array()), false)) : (false)))) {
                echo "class=\"has-error\"";
            }
            echo ">
                ";
            // line 442
            echo twig_escape_filter($this->env, ((array_key_exists("name", $context)) ? (_twig_default_filter(($context["name"] ?? null), "(no name)")) : ("(no name)")), "html", null, true);
            echo "
            </span>
        </div>

        ";
            // line 446
            if ( !twig_test_empty($this->getAttribute(($context["data"] ?? null), "children", array()))) {
                // line 447
                echo "            <ul id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "id", array()), "html", null, true);
                echo "-children\" ";
                if (( !($context["is_root"] ?? null) &&  !(($this->getAttribute(($context["data"] ?? null), "has_children_error", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["data"] ?? null), "has_children_error", array()), false)) : (false)))) {
                    echo "class=\"hidden\"";
                }
                echo ">
                ";
                // line 448
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["data"] ?? null), "children", array()));
                foreach ($context['_seq'] as $context["childName"] => $context["childData"]) {
                    // line 449
                    echo "                    ";
                    echo $context["tree"]->getform_tree_entry($context["childName"], $context["childData"], false);
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['childName'], $context['childData'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 451
                echo "            </ul>
        ";
            }
            // line 453
            echo "    </li>
";
            
            $__internal_94c3778e7dcf763dc76b0256e80d4f30a47f6592730a2c7bf0911d80792f078f->leave($__internal_94c3778e7dcf763dc76b0256e80d4f30a47f6592730a2c7bf0911d80792f078f_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 456
    public function getform_tree_details($__name__ = null, $__data__ = null, $__forms_by_hash__ = null, $__show__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "data" => $__data__,
            "forms_by_hash" => $__forms_by_hash__,
            "show" => $__show__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_261cab7a2954fd63c62f3ccfec2b5c51a22ea6d95949a415c528011b54f1c622 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_261cab7a2954fd63c62f3ccfec2b5c51a22ea6d95949a415c528011b54f1c622->enter($__internal_261cab7a2954fd63c62f3ccfec2b5c51a22ea6d95949a415c528011b54f1c622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "form_tree_details"));

            // line 457
            echo "    ";
            $context["tree"] = $this;
            // line 458
            echo "    <div class=\"tree-details";
            if ( !((array_key_exists("show", $context)) ? (_twig_default_filter(($context["show"] ?? null), false)) : (false))) {
                echo " hidden";
            }
            echo "\" ";
            if ($this->getAttribute(($context["data"] ?? null), "id", array(), "any", true, true)) {
                echo "id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "id", array()), "html", null, true);
                echo "-details\"";
            }
            echo ">
        <h2 class=\"dump-inline\">
            ";
            // line 460
            echo twig_escape_filter($this->env, ((array_key_exists("name", $context)) ? (_twig_default_filter(($context["name"] ?? null), "(no name)")) : ("(no name)")), "html", null, true);
            echo " (";
            echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute(($context["data"] ?? null), "type_class", array())));
            echo ")
        </h2>

        ";
            // line 463
            if (($this->getAttribute(($context["data"] ?? null), "errors", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute(($context["data"] ?? null), "errors", array())) > 0))) {
                // line 464
                echo "        <div class=\"errors\">
            <h3>
                <a class=\"toggle-button\" data-toggle-target-id=\"";
                // line 466
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "id", array()), "html", null, true);
                echo "-errors\" href=\"#\">
                    Errors <span class=\"toggle-icon\"></span>
                </a>
            </h3>

            <table id=\"";
                // line 471
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "id", array()), "html", null, true);
                echo "-errors\">
                <thead>
                    <tr>
                        <th>Message</th>
                        <th>Origin</th>
                        <th>Cause</th>
                    </tr>
                </thead>
                <tbody>
                ";
                // line 480
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["data"] ?? null), "errors", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 481
                    echo "                <tr>
                    <td>";
                    // line 482
                    echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                    echo "</td>
                    <td>
                        ";
                    // line 484
                    if (twig_test_empty($this->getAttribute($context["error"], "origin", array()))) {
                        // line 485
                        echo "                            <em>This form.</em>
                        ";
                    } elseif ( !$this->getAttribute(                    // line 486
($context["forms_by_hash"] ?? null), $this->getAttribute($context["error"], "origin", array()), array(), "array", true, true)) {
                        // line 487
                        echo "                            <em>Unknown.</em>
                        ";
                    } else {
                        // line 489
                        echo "                            ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["forms_by_hash"] ?? null), $this->getAttribute($context["error"], "origin", array()), array(), "array"), "name", array()), "html", null, true);
                        echo "
                        ";
                    }
                    // line 491
                    echo "                    </td>
                    <td>
                        ";
                    // line 493
                    if ($this->getAttribute($context["error"], "trace", array())) {
                        // line 494
                        echo "                            <span class=\"newline\">Caused by:</span>
                            ";
                        // line 495
                        echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute($context["error"], "trace", array()), 2));
                        echo "
                        ";
                    } else {
                        // line 497
                        echo "                            <em>Unknown.</em>
                        ";
                    }
                    // line 499
                    echo "                    </td>
                </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 502
                echo "                </tbody>
            </table>
        </div>
        ";
            }
            // line 506
            echo "
        ";
            // line 507
            if ($this->getAttribute(($context["data"] ?? null), "default_data", array(), "any", true, true)) {
                // line 508
                echo "        <h3>
            <a class=\"toggle-button\" data-toggle-target-id=\"";
                // line 509
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "id", array()), "html", null, true);
                echo "-default_data\" href=\"#\">
                Default Data <span class=\"toggle-icon\"></span>
            </a>
        </h3>

        <div id=\"";
                // line 514
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "id", array()), "html", null, true);
                echo "-default_data\">
            <table>
                <thead>
                    <tr>
                        <th width=\"180\">Property</th>
                        <th>Value</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th class=\"font-normal\" scope=\"row\">Model Format</th>
                        <td>
                            ";
                // line 526
                if ($this->getAttribute($this->getAttribute(($context["data"] ?? null), "default_data", array(), "any", false, true), "model", array(), "any", true, true)) {
                    // line 527
                    echo "                                ";
                    echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute($this->getAttribute(($context["data"] ?? null), "default_data", array()), "model", array())));
                    echo "
                            ";
                } else {
                    // line 529
                    echo "                                <em class=\"font-normal text-muted\">same as normalized format</em>
                            ";
                }
                // line 531
                echo "                        </td>
                    </tr>
                    <tr>
                        <th class=\"font-normal\" scope=\"row\">Normalized Format</th>
                        <td>";
                // line 535
                echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute($this->getAttribute(($context["data"] ?? null), "default_data", array()), "norm", array())));
                echo "</td>
                    </tr>
                    <tr>
                        <th class=\"font-normal\" scope=\"row\">View Format</th>
                        <td>
                            ";
                // line 540
                if ($this->getAttribute($this->getAttribute(($context["data"] ?? null), "default_data", array(), "any", false, true), "view", array(), "any", true, true)) {
                    // line 541
                    echo "                                ";
                    echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute($this->getAttribute(($context["data"] ?? null), "default_data", array()), "view", array())));
                    echo "
                            ";
                } else {
                    // line 543
                    echo "                                <em class=\"font-normal text-muted\">same as normalized format</em>
                            ";
                }
                // line 545
                echo "                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        ";
            }
            // line 551
            echo "
        ";
            // line 552
            if ($this->getAttribute(($context["data"] ?? null), "submitted_data", array(), "any", true, true)) {
                // line 553
                echo "        <h3>
            <a class=\"toggle-button\" data-toggle-target-id=\"";
                // line 554
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "id", array()), "html", null, true);
                echo "-submitted_data\" href=\"#\">
                Submitted Data <span class=\"toggle-icon\"></span>
            </a>
        </h3>

        <div id=\"";
                // line 559
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "id", array()), "html", null, true);
                echo "-submitted_data\">
        ";
                // line 560
                if ($this->getAttribute($this->getAttribute(($context["data"] ?? null), "submitted_data", array(), "any", false, true), "norm", array(), "any", true, true)) {
                    // line 561
                    echo "            <table>
                <thead>
                    <tr>
                        <th width=\"180\">Property</th>
                        <th>Value</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th class=\"font-normal\" scope=\"row\">View Format</th>
                        <td>
                            ";
                    // line 572
                    if ($this->getAttribute($this->getAttribute(($context["data"] ?? null), "submitted_data", array(), "any", false, true), "view", array(), "any", true, true)) {
                        // line 573
                        echo "                                ";
                        echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute($this->getAttribute(($context["data"] ?? null), "submitted_data", array()), "view", array())));
                        echo "
                            ";
                    } else {
                        // line 575
                        echo "                                <em class=\"font-normal text-muted\">same as normalized format</em>
                            ";
                    }
                    // line 577
                    echo "                        </td>
                    </tr>
                    <tr>
                        <th class=\"font-normal\" scope=\"row\">Normalized Format</th>
                        <td>";
                    // line 581
                    echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute($this->getAttribute(($context["data"] ?? null), "submitted_data", array()), "norm", array())));
                    echo "</td>
                    </tr>
                    <tr>
                        <th class=\"font-normal\" scope=\"row\">Model Format</th>
                        <td>
                            ";
                    // line 586
                    if ($this->getAttribute($this->getAttribute(($context["data"] ?? null), "submitted_data", array(), "any", false, true), "model", array(), "any", true, true)) {
                        // line 587
                        echo "                                ";
                        echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute($this->getAttribute(($context["data"] ?? null), "submitted_data", array()), "model", array())));
                        echo "
                            ";
                    } else {
                        // line 589
                        echo "                                <em class=\"font-normal text-muted\">same as normalized format</em>
                            ";
                    }
                    // line 591
                    echo "                        </td>
                    </tr>
                </tbody>
            </table>
        ";
                } else {
                    // line 596
                    echo "            <div class=\"empty\">
                <p>This form was not submitted.</p>
            </div>
        ";
                }
                // line 600
                echo "        </div>
        ";
            }
            // line 602
            echo "
        ";
            // line 603
            if ($this->getAttribute(($context["data"] ?? null), "passed_options", array(), "any", true, true)) {
                // line 604
                echo "        <h3>
            <a class=\"toggle-button\" data-toggle-target-id=\"";
                // line 605
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "id", array()), "html", null, true);
                echo "-passed_options\" href=\"#\">
                Passed Options <span class=\"toggle-icon\"></span>
            </a>
        </h3>

        <div id=\"";
                // line 610
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "id", array()), "html", null, true);
                echo "-passed_options\">
            ";
                // line 611
                if (twig_length_filter($this->env, $this->getAttribute(($context["data"] ?? null), "passed_options", array()))) {
                    // line 612
                    echo "            <table>
                <thead>
                    <tr>
                        <th width=\"180\">Option</th>
                        <th>Passed Value</th>
                        <th>Resolved Value</th>
                    </tr>
                </thead>
                <tbody>
                ";
                    // line 621
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["data"] ?? null), "passed_options", array()));
                    foreach ($context['_seq'] as $context["option"] => $context["value"]) {
                        // line 622
                        echo "                <tr>
                    <th>";
                        // line 623
                        echo twig_escape_filter($this->env, $context["option"], "html", null, true);
                        echo "</th>
                    <td>";
                        // line 624
                        echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $context["value"]));
                        echo "</td>
                    <td>
                        ";
                        // line 626
                        if (($this->getAttribute($this->getAttribute(($context["data"] ?? null), "resolved_options", array()), $context["option"], array(), "array") == $context["value"])) {
                            // line 627
                            echo "                            <em class=\"font-normal text-muted\">same as passed value</em>
                        ";
                        } else {
                            // line 629
                            echo "                            ";
                            echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute($this->getAttribute(($context["data"] ?? null), "resolved_options", array()), $context["option"], array(), "array")));
                            echo "
                        ";
                        }
                        // line 631
                        echo "                    </td>
                </tr>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['option'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 634
                    echo "                </tbody>
            </table>
            ";
                } else {
                    // line 637
                    echo "                <div class=\"empty\">
                    <p>No options where passed when constructing this form.</p>
                </div>
            ";
                }
                // line 641
                echo "        </div>
        ";
            }
            // line 643
            echo "
        ";
            // line 644
            if ($this->getAttribute(($context["data"] ?? null), "resolved_options", array(), "any", true, true)) {
                // line 645
                echo "        <h3>
            <a class=\"toggle-button\" data-toggle-target-id=\"";
                // line 646
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "id", array()), "html", null, true);
                echo "-resolved_options\" href=\"#\">
                Resolved Options <span class=\"toggle-icon\"></span>
            </a>
        </h3>

        <div id=\"";
                // line 651
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "id", array()), "html", null, true);
                echo "-resolved_options\" class=\"hidden\">
            <table>
                <thead>
                    <tr>
                        <th width=\"180\">Option</th>
                        <th>Value</th>
                    </tr>
                </thead>
                <tbody>
                ";
                // line 660
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["data"] ?? null), "resolved_options", array()));
                foreach ($context['_seq'] as $context["option"] => $context["value"]) {
                    // line 661
                    echo "                <tr>
                    <th scope=\"row\">";
                    // line 662
                    echo twig_escape_filter($this->env, $context["option"], "html", null, true);
                    echo "</th>
                    <td>";
                    // line 663
                    echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $context["value"]));
                    echo "</td>
                </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['option'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 666
                echo "                </tbody>
            </table>
        </div>
        ";
            }
            // line 670
            echo "
        ";
            // line 671
            if ($this->getAttribute(($context["data"] ?? null), "view_vars", array(), "any", true, true)) {
                // line 672
                echo "        <h3>
            <a class=\"toggle-button\" data-toggle-target-id=\"";
                // line 673
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "id", array()), "html", null, true);
                echo "-view_vars\" href=\"#\">
                View Variables <span class=\"toggle-icon\"></span>
            </a>
        </h3>

        <div id=\"";
                // line 678
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "id", array()), "html", null, true);
                echo "-view_vars\" class=\"hidden\">
            <table>
                <thead>
                    <tr>
                        <th width=\"180\">Variable</th>
                        <th>Value</th>
                    </tr>
                </thead>
                <tbody>
                ";
                // line 687
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["data"] ?? null), "view_vars", array()));
                foreach ($context['_seq'] as $context["variable"] => $context["value"]) {
                    // line 688
                    echo "                <tr>
                    <th scope=\"row\">";
                    // line 689
                    echo twig_escape_filter($this->env, $context["variable"], "html", null, true);
                    echo "</th>
                    <td>";
                    // line 690
                    echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $context["value"]));
                    echo "</td>
                </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['variable'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 693
                echo "                </tbody>
            </table>
        </div>
        ";
            }
            // line 697
            echo "    </div>

    ";
            // line 699
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["data"] ?? null), "children", array()));
            foreach ($context['_seq'] as $context["childName"] => $context["childData"]) {
                // line 700
                echo "        ";
                echo $context["tree"]->getform_tree_details($context["childName"], $context["childData"], ($context["forms_by_hash"] ?? null));
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['childName'], $context['childData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_261cab7a2954fd63c62f3ccfec2b5c51a22ea6d95949a415c528011b54f1c622->leave($__internal_261cab7a2954fd63c62f3ccfec2b5c51a22ea6d95949a415c528011b54f1c622_prof);

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
        return "@WebProfiler/Collector/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1212 => 700,  1208 => 699,  1204 => 697,  1198 => 693,  1189 => 690,  1185 => 689,  1182 => 688,  1178 => 687,  1166 => 678,  1158 => 673,  1155 => 672,  1153 => 671,  1150 => 670,  1144 => 666,  1135 => 663,  1131 => 662,  1128 => 661,  1124 => 660,  1112 => 651,  1104 => 646,  1101 => 645,  1099 => 644,  1096 => 643,  1092 => 641,  1086 => 637,  1081 => 634,  1073 => 631,  1067 => 629,  1063 => 627,  1061 => 626,  1056 => 624,  1052 => 623,  1049 => 622,  1045 => 621,  1034 => 612,  1032 => 611,  1028 => 610,  1020 => 605,  1017 => 604,  1015 => 603,  1012 => 602,  1008 => 600,  1002 => 596,  995 => 591,  991 => 589,  985 => 587,  983 => 586,  975 => 581,  969 => 577,  965 => 575,  959 => 573,  957 => 572,  944 => 561,  942 => 560,  938 => 559,  930 => 554,  927 => 553,  925 => 552,  922 => 551,  914 => 545,  910 => 543,  904 => 541,  902 => 540,  894 => 535,  888 => 531,  884 => 529,  878 => 527,  876 => 526,  861 => 514,  853 => 509,  850 => 508,  848 => 507,  845 => 506,  839 => 502,  831 => 499,  827 => 497,  822 => 495,  819 => 494,  817 => 493,  813 => 491,  807 => 489,  803 => 487,  801 => 486,  798 => 485,  796 => 484,  791 => 482,  788 => 481,  784 => 480,  772 => 471,  764 => 466,  760 => 464,  758 => 463,  750 => 460,  736 => 458,  733 => 457,  715 => 456,  696 => 453,  692 => 451,  683 => 449,  679 => 448,  670 => 447,  668 => 446,  661 => 442,  655 => 441,  652 => 440,  648 => 438,  642 => 436,  640 => 435,  637 => 434,  631 => 432,  629 => 431,  625 => 430,  622 => 429,  619 => 428,  616 => 427,  599 => 426,  374 => 206,  368 => 202,  364 => 200,  347 => 198,  330 => 197,  324 => 193,  315 => 191,  311 => 190,  307 => 188,  305 => 187,  301 => 185,  295 => 184,  147 => 43,  141 => 42,  133 => 39,  127 => 36,  124 => 35,  122 => 34,  117 => 32,  110 => 31,  104 => 30,  94 => 26,  91 => 25,  83 => 22,  76 => 18,  72 => 16,  70 => 15,  67 => 14,  61 => 11,  55 => 9,  52 => 8,  49 => 7,  46 => 6,  40 => 5,  33 => 1,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@WebProfiler/Collector/form.html.twig", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\form.html.twig");
    }
}
