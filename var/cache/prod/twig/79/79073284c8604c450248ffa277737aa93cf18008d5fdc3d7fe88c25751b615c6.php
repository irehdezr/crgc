<?php

/* ReviewBundle:Default:index.html.twig */
class __TwigTemplate_e98e855b0ccb55668af1df6dfa444222025d05b6c830e873761f3df86a2f3db2 extends Twig_Template
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
        $__internal_a1674725bbe6c1b6a0933539d6d39bce417d0d51ff591b11c94489de2e01f75b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1674725bbe6c1b6a0933539d6d39bce417d0d51ff591b11c94489de2e01f75b->enter($__internal_a1674725bbe6c1b6a0933539d6d39bce417d0d51ff591b11c94489de2e01f75b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ReviewBundle:Default:index.html.twig"));

        // line 1
        echo "<div>
    <div class=\"informationSection\">

                                <div class='prodInfoIconHeadings col-xs-offset-3 col-xs-6'>
                                    <h4>Reviews of verified purchases for <span class=\"productName\"></span> sold by ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["farm"] ?? $this->getContext($context, "farm")), "name", array()), "html", null, true);
        echo " </h4>
                                </div>     
        <h2 class=\"prodInfoIconHeadings\"></h2>
    </div>
    <div style=\"width: 500px;\" class=\"container form-group \">
        <h3>Customer Reviews</h3>
        <p>
            Total comments: \"Variable\"<br>
            Average: \"Variable\" out of 5 stars.
        </p>
    </div>
    <section id=\"review_section\">
        <div class=\"review\">
                    
        </div>
    </section>
</div>";
        
        $__internal_a1674725bbe6c1b6a0933539d6d39bce417d0d51ff591b11c94489de2e01f75b->leave($__internal_a1674725bbe6c1b6a0933539d6d39bce417d0d51ff591b11c94489de2e01f75b_prof);

    }

    public function getTemplateName()
    {
        return "ReviewBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 5,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <div class=\"informationSection\">

                                <div class='prodInfoIconHeadings col-xs-offset-3 col-xs-6'>
                                    <h4>Reviews of verified purchases for <span class=\"productName\"></span> sold by {{farm.name}} </h4>
                                </div>     
        <h2 class=\"prodInfoIconHeadings\"></h2>
    </div>
    <div style=\"width: 500px;\" class=\"container form-group \">
        <h3>Customer Reviews</h3>
        <p>
            Total comments: \"Variable\"<br>
            Average: \"Variable\" out of 5 stars.
        </p>
    </div>
    <section id=\"review_section\">
        <div class=\"review\">
                    
        </div>
    </section>
</div>", "ReviewBundle:Default:index.html.twig", "C:\\xampp\\htdocs\\crgc\\src\\ReviewBundle/Resources/views/Default/index.html.twig");
    }
}
