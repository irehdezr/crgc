<?php

/* @Twig/Exception/exception.html.twig */
class __TwigTemplate_38e70fe3343b9733e11530216874a908ca464118db1188d2a8dd213eb7436f6b extends Twig_Template
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
        $__internal_f3174c87f1742bc0d856292c066bde6b3dc13a9a929f8ba76736396907f03c6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3174c87f1742bc0d856292c066bde6b3dc13a9a929f8ba76736396907f03c6d->enter($__internal_f3174c87f1742bc0d856292c066bde6b3dc13a9a929f8ba76736396907f03c6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.html.twig"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatFileFromText(nl2br(twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true)));
        echo "
            </h1>

            <div>
                <strong>";
        // line 17
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo " - ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->abbrClass($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "class", array()));
        echo "
            </div>

            ";
        // line 20
        $context["previous_count"] = twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "allPrevious", array()));
        // line 21
        echo "            ";
        if (($context["previous_count"] ?? $this->getContext($context, "previous_count"))) {
            // line 22
            echo "                <div class=\"linked\"><span><strong>";
            echo twig_escape_filter($this->env, ($context["previous_count"] ?? $this->getContext($context, "previous_count")), "html", null, true);
            echo "</strong> linked Exception";
            echo (((($context["previous_count"] ?? $this->getContext($context, "previous_count")) > 1)) ? ("s") : (""));
            echo ":</span>
                    <ul>
                        ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "allPrevious", array()));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()));
        foreach ($context['_seq'] as $context["position"] => $context["e"]) {
            // line 39
            echo "    ";
            $this->loadTemplate("@Twig/Exception/traces.html.twig", "@Twig/Exception/exception.html.twig", 39)->display(array("exception" => $context["e"], "position" => $context["position"], "count" => ($context["previous_count"] ?? $this->getContext($context, "previous_count"))));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['position'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "
";
        // line 42
        if (($context["logger"] ?? $this->getContext($context, "logger"))) {
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
            if ($this->getAttribute(($context["logger"] ?? $this->getContext($context, "logger")), "counterrors", array())) {
                // line 56
                echo "                <div class=\"error-count\">
                    <span>
                        ";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute(($context["logger"] ?? $this->getContext($context, "logger")), "counterrors", array()), "html", null, true);
                echo " error";
                echo ((($this->getAttribute(($context["logger"] ?? $this->getContext($context, "logger")), "counterrors", array()) > 1)) ? ("s") : (""));
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
            $this->loadTemplate("@Twig/Exception/logs.html.twig", "@Twig/Exception/exception.html.twig", 65)->display(array("logs" => $this->getAttribute(($context["logger"] ?? $this->getContext($context, "logger")), "logs", array())));
            // line 66
            echo "        </div>
    </div>
";
        }
        // line 69
        echo "
";
        // line 70
        if (($context["currentContent"] ?? $this->getContext($context, "currentContent"))) {
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
            echo twig_escape_filter($this->env, ($context["currentContent"] ?? $this->getContext($context, "currentContent")), "html", null, true);
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
        $this->loadTemplate("@Twig/Exception/traces_text.html.twig", "@Twig/Exception/exception.html.twig", 90)->display(array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
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
        
        $__internal_f3174c87f1742bc0d856292c066bde6b3dc13a9a929f8ba76736396907f03c6d->leave($__internal_f3174c87f1742bc0d856292c066bde6b3dc13a9a929f8ba76736396907f03c6d_prof);

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
        return array (  206 => 91,  204 => 90,  201 => 89,  192 => 83,  188 => 81,  178 => 73,  176 => 72,  173 => 71,  171 => 70,  168 => 69,  163 => 66,  161 => 65,  156 => 62,  147 => 58,  143 => 56,  141 => 55,  138 => 54,  128 => 46,  126 => 45,  122 => 43,  120 => 42,  117 => 41,  110 => 39,  106 => 38,  98 => 32,  93 => 29,  76 => 26,  73 => 25,  69 => 24,  61 => 22,  58 => 21,  56 => 20,  46 => 17,  39 => 13,  30 => 7,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"block-exception\">
    <div class=\"block-exception-detected clear-fix\">
        <div class=\"support\">
            <a href=\"http://symfony.com/support\">Need support?</a>
        </div>
        <div class=\"illustration-exception\">
            {{ include('@Twig/Exception/exception.svg') }}
        </div>
        <div class=\"text-exception\">
            <div class=\"open-quote\">“</div>

            <h1>
                {{ exception.message|nl2br|format_file_from_text }}
            </h1>

            <div>
                <strong>{{ status_code }}</strong> {{ status_text }} - {{ exception.class|abbr_class }}
            </div>

            {% set previous_count = exception.allPrevious|length %}
            {% if previous_count %}
                <div class=\"linked\"><span><strong>{{ previous_count }}</strong> linked Exception{{ previous_count > 1 ? 's' : '' }}:</span>
                    <ul>
                        {% for i, previous in exception.allPrevious %}
                            <li>
                                {{ previous.class|abbr_class }} <a href=\"#traces-link-{{ i + 1 }}\" onclick=\"toggle('traces-{{ i + 1 }}', 'traces'); switchIcons('icon-traces-{{ i + 1 }}-open', 'icon-traces-{{ i + 1 }}-close');\">&#187;</a>
                            </li>
                        {% endfor %}
                    </ul>
                </div>
            {% endif %}

            <div class=\"close-quote\">”</div>
        </div>
    </div>
</div>

{% for position, e in exception.toarray %}
    {% include '@Twig/Exception/traces.html.twig' with { 'exception': e, 'position': position, 'count': previous_count } only %}
{% endfor %}

{% if logger %}
    <div class=\"block\">
        <div class=\"logs clear-fix\">
            {% spaceless %}
            <h2>
                Logs&nbsp;
                <a href=\"#\" onclick=\"toggle('logs'); switchIcons('icon-logs-open', 'icon-logs-close'); return false;\">
                    <img class=\"toggle\" id=\"icon-logs-open\" alt=\"+\" src=\"data:image/gif;base64,R0lGODlhEgASAMQTANft99/v+Ga44bHb8ITG52S44dXs9+z1+uPx+YvK6WC24G+944/M6W28443L6dnu+Ge54v/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABMALAAAAAASABIAQAVS4DQBTiOd6LkwgJgeUSzHSDoNaZ4PU6FLgYBA5/vFID/DbylRGiNIZu74I0h1hNsVxbNuUV4d9SsZM2EzWe1qThVzwWFOAFCQFa1RQq6DJB4iIQA7\" style=\"display: none\" />
                    <img class=\"toggle\" id=\"icon-logs-close\" alt=\"-\" src=\"data:image/gif;base64,R0lGODlhEgASAMQSANft94TG57Hb8GS44ez1+mC24IvK6ePx+Wa44dXs92+942e54o3L6W2844/M6dnu+P/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABIALAAAAAASABIAQAVCoCQBTBOd6Kk4gJhGBCTPxysJb44K0qD/ER/wlxjmisZkMqBEBW5NHrMZmVKvv9hMVsO+hE0EoNAstEYGxG9heIhCADs=\" style=\"display: inline\" />
                </a>
            </h2>
            {% endspaceless %}

            {% if logger.counterrors %}
                <div class=\"error-count\">
                    <span>
                        {{ logger.counterrors }} error{{ logger.counterrors > 1 ? 's' : ''}}
                    </span>
                </div>
            {% endif %}
        </div>

        <div id=\"logs\">
            {% include '@Twig/Exception/logs.html.twig' with { 'logs': logger.logs } only %}
        </div>
    </div>
{% endif %}

{% if currentContent %}
    <div class=\"block\">
        {% spaceless %}
        <h2>
            Content of the Output&nbsp;
            <a href=\"#\" onclick=\"toggle('output-content'); switchIcons('icon-content-open', 'icon-content-close'); return false;\">
                <img class=\"toggle\" id=\"icon-content-close\" alt=\"-\" src=\"data:image/gif;base64,R0lGODlhEgASAMQSANft94TG57Hb8GS44ez1+mC24IvK6ePx+Wa44dXs92+942e54o3L6W2844/M6dnu+P/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABIALAAAAAASABIAQAVCoCQBTBOd6Kk4gJhGBCTPxysJb44K0qD/ER/wlxjmisZkMqBEBW5NHrMZmVKvv9hMVsO+hE0EoNAstEYGxG9heIhCADs=\" style=\"display: none\" />
                <img class=\"toggle\" id=\"icon-content-open\" alt=\"+\" src=\"data:image/gif;base64,R0lGODlhEgASAMQTANft99/v+Ga44bHb8ITG52S44dXs9+z1+uPx+YvK6WC24G+944/M6W28443L6dnu+Ge54v/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABMALAAAAAASABIAQAVS4DQBTiOd6LkwgJgeUSzHSDoNaZ4PU6FLgYBA5/vFID/DbylRGiNIZu74I0h1hNsVxbNuUV4d9SsZM2EzWe1qThVzwWFOAFCQFa1RQq6DJB4iIQA7\" style=\"display: inline\" />
            </a>
        </h2>
        {% endspaceless %}

        <div id=\"output-content\" style=\"display: none\">
            {{ currentContent }}
        </div>

        <div style=\"clear: both\"></div>
    </div>
{% endif %}

{% include '@Twig/Exception/traces_text.html.twig' with { 'exception': exception } only %}

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
", "@Twig/Exception/exception.html.twig", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.html.twig");
    }
}
