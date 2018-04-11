<?php

/* @Twig/Exception/exception.html.twig */
class __TwigTemplate_620cd05181a6557d43d73dd54ef94b5aefa54df07544178609f50b7fbbcdfb3a extends Twig_Template
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
        // line 1
        echo "<div class=\"block-exception\">
    <div class=\"block-exception-detected clear-fix\">
        <div class=\"support\">
            <a href=\"http://symfony.com/support\">Need support?</a>
        </div>
        <div class=\"illustration-exception\">
            ";
        // line 7
        echo twig_include($this->env, $context, "@Twig/Exception/exception.svg");
        echo "
        </div>
        <div class=\"text-exception\">
            <div class=\"open-quote\">“</div>

            <h1>
                ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatFileFromText(nl2br(twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? null), "message", array()), "html", null, true)));
        echo "
            </h1>

            <div>
                <strong>";
        // line 17
        echo twig_escape_filter($this->env, ($context["status_code"] ?? null), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? null), "html", null, true);
        echo " - ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->abbrClass($this->getAttribute(($context["exception"] ?? null), "class", array()));
        echo "
            </div>

            ";
        // line 20
        $context["previous_count"] = twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? null), "allPrevious", array()));
        // line 21
        echo "            ";
        if (($context["previous_count"] ?? null)) {
            // line 22
            echo "                <div class=\"linked\"><span><strong>";
            echo twig_escape_filter($this->env, ($context["previous_count"] ?? null), "html", null, true);
            echo "</strong> linked Exception";
            echo (((($context["previous_count"] ?? null) > 1)) ? ("s") : (""));
            echo ":</span>
                    <ul>
                        ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? null), "allPrevious", array()));
            foreach ($context['_seq'] as $context["i"] => $context["previous"]) {
                // line 25
                echo "                            <li>
                                ";
                // line 26
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->abbrClass($this->getAttribute($context["previous"], "class", array()));
                echo " <a href=\"#traces-link-";
                echo twig_escape_filter($this->env, ($context["i"] + 1), "html", null, true);
                echo "\" onclick=\"toggle('traces-";
                echo twig_escape_filter($this->env, ($context["i"] + 1), "html", null, true);
                echo "', 'traces'); switchIcons('icon-traces-";
                echo twig_escape_filter($this->env, ($context["i"] + 1), "html", null, true);
                echo "-open', 'icon-traces-";
                echo twig_escape_filter($this->env, ($context["i"] + 1), "html", null, true);
                echo "-close');\">&#187;</a>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['previous'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "                    </ul>
                </div>
            ";
        }
        // line 32
        echo "
            <div class=\"close-quote\">”</div>
        </div>
    </div>
</div>

";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? null), "toarray", array()));
        foreach ($context['_seq'] as $context["position"] => $context["e"]) {
            // line 39
            echo "    ";
            $this->loadTemplate("@Twig/Exception/traces.html.twig", "@Twig/Exception/exception.html.twig", 39)->display(array("exception" => $context["e"], "position" => $context["position"], "count" => ($context["previous_count"] ?? null)));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['position'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "
";
        // line 42
        if (($context["logger"] ?? null)) {
            // line 43
            echo "    <div class=\"block\">
        <div class=\"logs clear-fix\">
            ";
            // line 45
            ob_start();
            // line 46
            echo "            <h2>
                Logs&nbsp;
                <a href=\"#\" onclick=\"toggle('logs'); switchIcons('icon-logs-open', 'icon-logs-close'); return false;\">
                    <img class=\"toggle\" id=\"icon-logs-open\" alt=\"+\" src=\"data:image/gif;base64,R0lGODlhEgASAMQTANft99/v+Ga44bHb8ITG52S44dXs9+z1+uPx+YvK6WC24G+944/M6W28443L6dnu+Ge54v/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABMALAAAAAASABIAQAVS4DQBTiOd6LkwgJgeUSzHSDoNaZ4PU6FLgYBA5/vFID/DbylRGiNIZu74I0h1hNsVxbNuUV4d9SsZM2EzWe1qThVzwWFOAFCQFa1RQq6DJB4iIQA7\" style=\"display: none\" />
                    <img class=\"toggle\" id=\"icon-logs-close\" alt=\"-\" src=\"data:image/gif;base64,R0lGODlhEgASAMQSANft94TG57Hb8GS44ez1+mC24IvK6ePx+Wa44dXs92+942e54o3L6W2844/M6dnu+P/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABIALAAAAAASABIAQAVCoCQBTBOd6Kk4gJhGBCTPxysJb44K0qD/ER/wlxjmisZkMqBEBW5NHrMZmVKvv9hMVsO+hE0EoNAstEYGxG9heIhCADs=\" style=\"display: inline\" />
                </a>
            </h2>
            ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 54
            echo "
            ";
            // line 55
            if ($this->getAttribute(($context["logger"] ?? null), "counterrors", array())) {
                // line 56
                echo "                <div class=\"error-count\">
                    <span>
                        ";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute(($context["logger"] ?? null), "counterrors", array()), "html", null, true);
                echo " error";
                echo ((($this->getAttribute(($context["logger"] ?? null), "counterrors", array()) > 1)) ? ("s") : (""));
                echo "
                    </span>
                </div>
            ";
            }
            // line 62
            echo "        </div>

        <div id=\"logs\">
            ";
            // line 65
            $this->loadTemplate("@Twig/Exception/logs.html.twig", "@Twig/Exception/exception.html.twig", 65)->display(array("logs" => $this->getAttribute(($context["logger"] ?? null), "logs", array())));
            // line 66
            echo "        </div>
    </div>
";
        }
        // line 69
        echo "
";
        // line 70
        if (($context["currentContent"] ?? null)) {
            // line 71
            echo "    <div class=\"block\">
        ";
            // line 72
            ob_start();
            // line 73
            echo "        <h2>
            Content of the Output&nbsp;
            <a href=\"#\" onclick=\"toggle('output-content'); switchIcons('icon-content-open', 'icon-content-close'); return false;\">
                <img class=\"toggle\" id=\"icon-content-close\" alt=\"-\" src=\"data:image/gif;base64,R0lGODlhEgASAMQSANft94TG57Hb8GS44ez1+mC24IvK6ePx+Wa44dXs92+942e54o3L6W2844/M6dnu+P/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABIALAAAAAASABIAQAVCoCQBTBOd6Kk4gJhGBCTPxysJb44K0qD/ER/wlxjmisZkMqBEBW5NHrMZmVKvv9hMVsO+hE0EoNAstEYGxG9heIhCADs=\" style=\"display: none\" />
                <img class=\"toggle\" id=\"icon-content-open\" alt=\"+\" src=\"data:image/gif;base64,R0lGODlhEgASAMQTANft99/v+Ga44bHb8ITG52S44dXs9+z1+uPx+YvK6WC24G+944/M6W28443L6dnu+Ge54v/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABMALAAAAAASABIAQAVS4DQBTiOd6LkwgJgeUSzHSDoNaZ4PU6FLgYBA5/vFID/DbylRGiNIZu74I0h1hNsVxbNuUV4d9SsZM2EzWe1qThVzwWFOAFCQFa1RQq6DJB4iIQA7\" style=\"display: inline\" />
            </a>
        </h2>
        ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 81
            echo "
        <div id=\"output-content\" style=\"display: none\">
            ";
            // line 83
            echo twig_escape_filter($this->env, ($context["currentContent"] ?? null), "html", null, true);
            echo "
        </div>

        <div style=\"clear: both\"></div>
    </div>
";
        }
        // line 89
        echo "
";
        // line 90
        $this->loadTemplate("@Twig/Exception/traces_text.html.twig", "@Twig/Exception/exception.html.twig", 90)->display(array("exception" => ($context["exception"] ?? null)));
        // line 91
        echo "
<script type=\"text/javascript\">//<![CDATA[
    function toggle(id, clazz) {
        var el = document.getElementById(id),
            current = el.style.display,
            i;

        if (clazz) {
            var tags = document.getElementsByTagName('*');
            for (i = tags.length - 1; i >= 0; i--) {
                if (tags[i].className === clazz) {
                    tags[i].style.display = 'none';
                }
            }
        }

        el.style.display = current === 'none' ? 'block' : 'none';
    }

    function switchIcons(id1, id2) {
        var icon1, icon2, display1, display2;

        icon1 = document.getElementById(id1);
        icon2 = document.getElementById(id2);

        display1 = icon1.style.display;
        display2 = icon2.style.display;

        icon1.style.display = display2;
        icon2.style.display = display1;
    }
//]]></script>
";
    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 91,  201 => 90,  198 => 89,  189 => 83,  185 => 81,  175 => 73,  173 => 72,  170 => 71,  168 => 70,  165 => 69,  160 => 66,  158 => 65,  153 => 62,  144 => 58,  140 => 56,  138 => 55,  135 => 54,  125 => 46,  123 => 45,  119 => 43,  117 => 42,  114 => 41,  107 => 39,  103 => 38,  95 => 32,  90 => 29,  73 => 26,  70 => 25,  66 => 24,  58 => 22,  55 => 21,  53 => 20,  43 => 17,  36 => 13,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Twig/Exception/exception.html.twig", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.html.twig");
    }
}
