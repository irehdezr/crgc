<?php

/* PageBundle:Default:product_information.html.twig */
class __TwigTemplate_2beb8d3621928514ef6739c45f5ccc72b5b76eddf943e34bf1fae0aef988315b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "PageBundle:Default:product_information.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5519d2f15175154f29f2375cb72355832320c71efb5e9a6bfb35036e671ff3a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5519d2f15175154f29f2375cb72355832320c71efb5e9a6bfb35036e671ff3a8->enter($__internal_5519d2f15175154f29f2375cb72355832320c71efb5e9a6bfb35036e671ff3a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:product_information.html.twig"));

        $__internal_94438a4b81c358453b56b25a5aef6d15e01449088769689f203f90992facb151 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94438a4b81c358453b56b25a5aef6d15e01449088769689f203f90992facb151->enter($__internal_94438a4b81c358453b56b25a5aef6d15e01449088769689f203f90992facb151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:product_information.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5519d2f15175154f29f2375cb72355832320c71efb5e9a6bfb35036e671ff3a8->leave($__internal_5519d2f15175154f29f2375cb72355832320c71efb5e9a6bfb35036e671ff3a8_prof);

        
        $__internal_94438a4b81c358453b56b25a5aef6d15e01449088769689f203f90992facb151->leave($__internal_94438a4b81c358453b56b25a5aef6d15e01449088769689f203f90992facb151_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c8141f72617d5cb656258aa93074cbf212e6e593b8717e463d6cc7fc183b55ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8141f72617d5cb656258aa93074cbf212e6e593b8717e463d6cc7fc183b55ba->enter($__internal_c8141f72617d5cb656258aa93074cbf212e6e593b8717e463d6cc7fc183b55ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4db0c351c027bb3b6bfd81dfb7cedc1da067614732d9c922ac9067b4c9c5c2d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4db0c351c027bb3b6bfd81dfb7cedc1da067614732d9c922ac9067b4c9c5c2d0->enter($__internal_4db0c351c027bb3b6bfd81dfb7cedc1da067614732d9c922ac9067b4c9c5c2d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Product Information ";
        
        $__internal_4db0c351c027bb3b6bfd81dfb7cedc1da067614732d9c922ac9067b4c9c5c2d0->leave($__internal_4db0c351c027bb3b6bfd81dfb7cedc1da067614732d9c922ac9067b4c9c5c2d0_prof);

        
        $__internal_c8141f72617d5cb656258aa93074cbf212e6e593b8717e463d6cc7fc183b55ba->leave($__internal_c8141f72617d5cb656258aa93074cbf212e6e593b8717e463d6cc7fc183b55ba_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c82baaf6d9aca5a38611076890fc49ed2a2572ef2608801f4db61bf0db034a91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c82baaf6d9aca5a38611076890fc49ed2a2572ef2608801f4db61bf0db034a91->enter($__internal_c82baaf6d9aca5a38611076890fc49ed2a2572ef2608801f4db61bf0db034a91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1606beda1918789f2fc30dc4bdecbab3826011bc57987a900d6a2aa23e0c0ea7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1606beda1918789f2fc30dc4bdecbab3826011bc57987a900d6a2aa23e0c0ea7->enter($__internal_1606beda1918789f2fc30dc4bdecbab3826011bc57987a900d6a2aa23e0c0ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/product_information.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_1606beda1918789f2fc30dc4bdecbab3826011bc57987a900d6a2aa23e0c0ea7->leave($__internal_1606beda1918789f2fc30dc4bdecbab3826011bc57987a900d6a2aa23e0c0ea7_prof);

        
        $__internal_c82baaf6d9aca5a38611076890fc49ed2a2572ef2608801f4db61bf0db034a91->leave($__internal_c82baaf6d9aca5a38611076890fc49ed2a2572ef2608801f4db61bf0db034a91_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_c619a2cd6132b6ed123bd398acf66ef8eef0bc0c742eadb56e32f2f2ec2d77b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c619a2cd6132b6ed123bd398acf66ef8eef0bc0c742eadb56e32f2f2ec2d77b9->enter($__internal_c619a2cd6132b6ed123bd398acf66ef8eef0bc0c742eadb56e32f2f2ec2d77b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dd588e8e4d4a489d236c34932968dfbd507c052e968dbe622a3212518fe0dc74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd588e8e4d4a489d236c34932968dfbd507c052e968dbe622a3212518fe0dc74->enter($__internal_dd588e8e4d4a489d236c34932968dfbd507c052e968dbe622a3212518fe0dc74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<main>
<section>
\t\t<div id='prodInfoWidth'>
\t\t\t<center><h2>
\t\t\t\t\t";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getPageTitle", array(), "method"), "html", null, true);
        echo "</h2></center>
\t\t<section>
\t\t\t<div id='prodInfoSection' class='col-xs-offset-1 col-xs-10 col-md-offset-3 col-md-6'>
\t\t\t\t<div id='prodInfoCarouselContainer' class=\"container col-xs-12\">
\t                <div id=\"myCarousel\" class=\"carousel slide both\" data-interval=\"false\">
\t\t                <div class=\"carousel-inner\" role=\"listbox\">
\t\t                \t";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["farm"] ?? $this->getContext($context, "farm")), "getProducts", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["prod"]) {
            // line 21
            echo "\t\t                \t<div
\t\t                \t";
            // line 22
            if ($this->getAttribute($context["loop"], "first", array())) {
                // line 23
                echo "\t\t\t                \tclass= \"item active\"
\t\t\t                ";
            } else {
                // line 25
                echo "\t\t\t                \tclass= \"item\"
\t\t\t                ";
            }
            // line 27
            echo "\t\t\t                >
\t\t\t\t\t\t\t\t<div id='carouselHeading' >
\t\t\t\t\t\t\t\t\t<center><h3>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "getName", array(), "method"), "html", null, true);
            echo "</h3></center>
\t\t\t\t\t\t\t\t</div>
\t\t\t                \t<div class=\"row-fluid\">
\t\t\t\t\t\t\t\t\t<div class=\"carouselCards col-xs-12 col-md-offset-2 col-md-8\">
\t\t\t\t\t\t\t\t\t\t<div class=\"productThumbnails\">
\t\t\t\t\t\t\t\t\t\t\t<div class='prodThumbInside'>
\t\t\t\t\t\t\t\t\t\t\t\t<img class='prodThumbImgs' src=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "getImage", array(), "method"), "html", null, true);
            echo " \">\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t                \t</div>
\t\t\t                </div>
\t\t                \t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prod'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "\t\t                </div>
\t\t                <a class=\"left carousel-control\" href=\".both\" data-slide=\"prev\"></a>
\t\t                <a class=\"right carousel-control\" href=\".both\" data-slide=\"next\"></a>
\t                </div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- Second carrousel Begin -->

\t\t\t<div id='prodInfoCarouselContainer2' class='col-xs-offset-1 col-xs-10 col-md-offset-3 col-md-6' data-spy=\"affix\" data-offset-top=\"480\">
\t\t\t\t<div class=\"container col-xs-12\">
\t                <div id=\"myCarousel2\" class=\"carousel slide both\" data-interval=\"false\">
\t\t                <div class=\"carousel-inner\" role=\"listbox\">
\t\t\t                <div class=\"item active\">
\t\t\t                \t<div class='row'>
\t\t\t\t\t\t\t\t\t<a class='prodInfoIconHeadOrder col-xs-offset-4 col-xs-4' href=\"#\">
\t\t\t\t\t\t\t\t\t\t<div class='col-xs-12'>
\t\t\t\t\t\t\t\t\t\t\t<center><p class='price'>\$ ";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute(($context["presentation"] ?? $this->getContext($context, "presentation")), "getPrice", array(), "method"), "html", null, true);
        echo "</p></center>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class='stickyRow row'>
\t\t\t\t\t\t\t\t\t<div class='ratingCont col-xs-4'>
\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 66
        $context["rank"] = 0;
        // line 67
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "getRank", array(), "method")));
        foreach ($context['_seq'] as $context["_key"] => $context["inx"]) {
            // line 68
            echo "\t\t\t\t\t\t\t\t\t\t\t \t";
            $context["rank"] = (($context["rank"] ?? $this->getContext($context, "rank")) + 1);
            // line 69
            echo "\t\t\t\t\t\t\t\t\t\t\t \t<span>&#x2605;</span>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inx'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        if ((($context["rank"] ?? $this->getContext($context, "rank")) < 5)) {
            // line 72
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(($context["rank"] ?? $this->getContext($context, "rank")), 4));
            foreach ($context['_seq'] as $context["_key"] => $context["inx2"]) {
                // line 73
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["rank"] = (($context["rank"] ?? $this->getContext($context, "rank")) + 1);
                // line 74
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span>&#x2606;</span>
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inx2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 77
        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<a class='stickyRow col-xs-4' href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon5.svg\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class='reviews col-xs-4'>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "getReviews", array(), "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getReviewsTitle", array(), "method"), "html", null, true);
        echo "</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class='order row'>
\t\t\t\t\t\t\t\t\t<div class='col-xs-offset-4 col-xs-4'>
\t\t\t\t\t\t\t\t\t\t<a id=\"product\" data-product-id=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "getId", array(), "method"), "html", null, true);
        echo "\" class='orderPresentation prodInfoIconHeadOrder'>
\t\t\t\t\t\t\t\t\t\t\t<h4>";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? $this->getContext($context, "template")), "getOrderTitle", array(), "method"), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class='row'>
\t\t\t\t\t\t\t\t\t<center><a class=\"btn btn-default btn-xs share\" href=\"#\"><span class=\"glyphicon glyphicon-share\" aria-hidden=\"true\"></span> Share</a></center>
\t\t\t\t\t\t\t\t</div>
\t\t\t                </div>
\t\t\t                 
\t\t\t                <div class=\"item\">
\t\t\t                \t<div class='row'>
\t\t\t\t\t\t\t\t\t<a class='prodInfoIconHeadOrder col-xs-offset-4 col-xs-4' href=\"#\">
\t\t\t\t\t\t\t\t\t\t<div class='col-xs-12'>
\t\t\t\t\t\t\t\t\t\t\t<center><p class='price'>\$19.99</p></center>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class='stickyRow row'>
\t\t\t\t\t\t\t\t\t<div class='ratingCont col-xs-4'>
\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t<span>&#x2605;</span><span>&#x2605;</span><span>&#x2605;</span><span>&#x2606;</span><span>&#x2606;</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<a class='stickyRow col-xs-4' href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon5.svg\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class='reviews col-xs-4'>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">7 reviews</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class='order row'>
\t\t\t\t\t\t\t\t\t<div class='col-xs-offset-4 col-xs-4'>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<h4>Order</h4>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class='row'>
\t\t\t\t\t\t\t\t\t<center><a class=\"btn btn-default btn-xs share\" href=\"#\"><span class=\"glyphicon glyphicon-share\" aria-hidden=\"true\"></span> Share</a></center>
\t\t\t\t\t\t\t\t</div>
\t\t\t                </div>
\t\t\t                 
\t\t\t                <div class=\"item\">
\t\t\t                \t<div class='row'>
\t\t\t\t\t\t\t\t\t<a class='prodInfoIconHeadOrder col-xs-offset-4 col-xs-4' href=\"#\">
\t\t\t\t\t\t\t\t\t\t<div class='col-xs-12'>
\t\t\t\t\t\t\t\t\t\t\t<center><p class='price'>\$39.99</p></center>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class='stickyRow row'>
\t\t\t\t\t\t\t\t\t<div class='ratingCont col-xs-4'>
\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t<span>&#x2605;</span><span>&#x2605;</span><span>&#x2605;</span><span>&#x2606;</span><span>&#x2606;</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<a class='stickyRow col-xs-4' href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon5.svg\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class='reviews col-xs-4'>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">16 reviews</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class='order row'>
\t\t\t\t\t\t\t\t\t<div class='col-xs-offset-4 col-xs-4'>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<h4>Order</h4>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class='row'>
\t\t\t\t\t\t\t\t\t<center><a class=\"btn btn-xs share\" href=\"#\"><span class=\"glyphicon glyphicon-share\" aria-hidden=\"true\"></span> Share</a></center>
\t\t\t\t\t\t\t\t</div>
\t\t\t                </div>
\t\t                </div>
\t                </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t\t<!-- Second carrousel End -->

\t\t</section>
\t\t<div class='clearfix'></div>
\t\t<section>
\t\t<div id='prodInfoWidth'>
\t\t\t<div class='prodInfoPreferences row col-xs-offset-1 col-xs-10 col-md-offset-3 col-md-6'>
\t\t\t\t<div class='row'>
\t\t\t\t\t<div class='col-xs-12 col-md-6'>
\t\t\t\t\t\t<div id='informationSection'>
\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t<div class='prodInfoIconHeadings col-xs-offset-3 col-xs-6'>
\t\t\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon2.svg\">
\t\t\t\t\t\t\t\t\t<h4>Information</h4>
\t\t\t\t\t\t\t\t</div>                                                                    
\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t<div id='prodInfoDetails' class='col-xs-12'>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<span>Farm: </span><a class='btn btn-default btn-xs' href=\"#\">Tortuga</a></br>
\t\t\t\t\t\t\t\t\t<span>Species: </span>Arabica</br>
\t\t\t\t\t\t\t\t\t<span>Cultivar: </span>Caturra</br>
\t\t\t\t\t\t\t\t\t<span>Grade: </span>SHB</br>
\t\t\t\t\t\t\t\t\t<span>Processing: </span>Washed</br>
\t\t\t\t\t\t\t\t\t<span>Flavor notes: </span>Dried frutis and chocolate</br>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class='col-xs-12 col-md-6'>
\t\t\t\t\t\t<div id='roastSection'>
\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t<div class='prodInfoIconHeadings col-xs-offset-3 col-xs-6'>
\t\t\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon7.svg\">
\t\t\t\t\t\t\t\t\t<h4>Roast</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t<div class=\"btn-group btn-group-justified\" role=\"group\" aria-label=\"...\">
\t\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default active\">Light</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">Medium</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">Dark</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class='row'>
\t\t\t\t\t<div class='col-xs-12 col-md-6'>
\t\t\t\t\t\t<div id='presentationSection'>
\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t<div class='prodInfoIconHeadings col-xs-offset-3 col-xs-6'>
\t\t\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon10.svg\">
\t\t\t\t\t\t\t\t\t<h4>Weight</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t<div class=\"btn-group btn-group-justified\" role=\"group\" aria-label=\"...\">
\t\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">32 oz</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default active\">12 oz</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">32 oz</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">12 oz</button>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class='col-xs-12 col-md-6'>
\t\t\t\t\t\t<div id='presentationSection'>
\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t<div class='prodInfoIconHeadings col-xs-offset-3 col-xs-6'>
\t\t\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon8.svg\">
\t\t\t\t\t\t\t\t\t<h4>Grind</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t<div class=\"btn-group btn-group-justified\" role=\"group\" aria-label=\"...\">
\t\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">Whole Bean</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default active\">Ground</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class='row'>
\t\t\t\t\t<div class='col-xs-12 col-md-offset-3 col-md-6'>
\t\t\t\t\t\t<div id='cupSection'>
\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t<div class='prodInfoIconHeadings col-xs-offset-3 col-xs-6'>
\t\t\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon9.svg\">
\t\t\t\t\t\t\t\t\t<h4>Cup Scoring</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t<div id='cupMap' class='col-xs-12'>
\t\t\t\t\t\t\t\t<center><img src=\"/web/public/imgs/cupScoring.png\"></center>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t</section>
\t</main>
\t

";
        
        $__internal_dd588e8e4d4a489d236c34932968dfbd507c052e968dbe622a3212518fe0dc74->leave($__internal_dd588e8e4d4a489d236c34932968dfbd507c052e968dbe622a3212518fe0dc74_prof);

        
        $__internal_c619a2cd6132b6ed123bd398acf66ef8eef0bc0c742eadb56e32f2f2ec2d77b9->leave($__internal_c619a2cd6132b6ed123bd398acf66ef8eef0bc0c742eadb56e32f2f2ec2d77b9_prof);

    }

    // line 286
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_855e12185679a053a6387f0b514b9d1c4246c3e1b34fdebb17ba61671d4e63bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_855e12185679a053a6387f0b514b9d1c4246c3e1b34fdebb17ba61671d4e63bd->enter($__internal_855e12185679a053a6387f0b514b9d1c4246c3e1b34fdebb17ba61671d4e63bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_13c66a7ac1fa253984d9ccafaf49ccf3ceafdf0cc44408d8f8d4b0bf367769b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13c66a7ac1fa253984d9ccafaf49ccf3ceafdf0cc44408d8f8d4b0bf367769b1->enter($__internal_13c66a7ac1fa253984d9ccafaf49ccf3ceafdf0cc44408d8f8d4b0bf367769b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 287
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script src=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/js/product_information.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_13c66a7ac1fa253984d9ccafaf49ccf3ceafdf0cc44408d8f8d4b0bf367769b1->leave($__internal_13c66a7ac1fa253984d9ccafaf49ccf3ceafdf0cc44408d8f8d4b0bf367769b1_prof);

        
        $__internal_855e12185679a053a6387f0b514b9d1c4246c3e1b34fdebb17ba61671d4e63bd->leave($__internal_855e12185679a053a6387f0b514b9d1c4246c3e1b34fdebb17ba61671d4e63bd_prof);

    }

    public function getTemplateName()
    {
        return "PageBundle:Default:product_information.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  485 => 288,  480 => 287,  471 => 286,  264 => 89,  260 => 88,  250 => 83,  242 => 77,  239 => 76,  232 => 74,  229 => 73,  224 => 72,  221 => 71,  214 => 69,  211 => 68,  206 => 67,  204 => 66,  194 => 59,  175 => 42,  154 => 35,  145 => 29,  141 => 27,  137 => 25,  133 => 23,  131 => 22,  128 => 21,  111 => 20,  102 => 14,  96 => 10,  87 => 9,  75 => 7,  70 => 6,  61 => 5,  43 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}

{% block title%} Product Information {% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/product_information.css') }}\" />
{% endblock %}
{% block body %}
<main>
<section>
\t\t<div id='prodInfoWidth'>
\t\t\t<center><h2>
\t\t\t\t\t{{ template.getPageTitle() }}</h2></center>
\t\t<section>
\t\t\t<div id='prodInfoSection' class='col-xs-offset-1 col-xs-10 col-md-offset-3 col-md-6'>
\t\t\t\t<div id='prodInfoCarouselContainer' class=\"container col-xs-12\">
\t                <div id=\"myCarousel\" class=\"carousel slide both\" data-interval=\"false\">
\t\t                <div class=\"carousel-inner\" role=\"listbox\">
\t\t                \t{% for prod in farm.getProducts %}
\t\t                \t<div
\t\t                \t{% if loop.first%}
\t\t\t                \tclass= \"item active\"
\t\t\t                {% else %}
\t\t\t                \tclass= \"item\"
\t\t\t                {% endif %}
\t\t\t                >
\t\t\t\t\t\t\t\t<div id='carouselHeading' >
\t\t\t\t\t\t\t\t\t<center><h3>{{ product.getName() }}</h3></center>
\t\t\t\t\t\t\t\t</div>
\t\t\t                \t<div class=\"row-fluid\">
\t\t\t\t\t\t\t\t\t<div class=\"carouselCards col-xs-12 col-md-offset-2 col-md-8\">
\t\t\t\t\t\t\t\t\t\t<div class=\"productThumbnails\">
\t\t\t\t\t\t\t\t\t\t\t<div class='prodThumbInside'>
\t\t\t\t\t\t\t\t\t\t\t\t<img class='prodThumbImgs' src=\"{{ product.getImage() }} \">\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t                \t</div>
\t\t\t                </div>
\t\t                \t{% endfor %}
\t\t                </div>
\t\t                <a class=\"left carousel-control\" href=\".both\" data-slide=\"prev\"></a>
\t\t                <a class=\"right carousel-control\" href=\".both\" data-slide=\"next\"></a>
\t                </div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- Second carrousel Begin -->

\t\t\t<div id='prodInfoCarouselContainer2' class='col-xs-offset-1 col-xs-10 col-md-offset-3 col-md-6' data-spy=\"affix\" data-offset-top=\"480\">
\t\t\t\t<div class=\"container col-xs-12\">
\t                <div id=\"myCarousel2\" class=\"carousel slide both\" data-interval=\"false\">
\t\t                <div class=\"carousel-inner\" role=\"listbox\">
\t\t\t                <div class=\"item active\">
\t\t\t                \t<div class='row'>
\t\t\t\t\t\t\t\t\t<a class='prodInfoIconHeadOrder col-xs-offset-4 col-xs-4' href=\"#\">
\t\t\t\t\t\t\t\t\t\t<div class='col-xs-12'>
\t\t\t\t\t\t\t\t\t\t\t<center><p class='price'>\$ {{ presentation.getPrice() }}</p></center>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class='stickyRow row'>
\t\t\t\t\t\t\t\t\t<div class='ratingCont col-xs-4'>
\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t{% set rank= 0 %}
\t\t\t\t\t\t\t\t\t\t\t{% for inx in 1..product.getRank() %}
\t\t\t\t\t\t\t\t\t\t\t \t{% set rank = rank+1 %}
\t\t\t\t\t\t\t\t\t\t\t \t<span>&#x2605;</span>
\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t{% if rank < 5 %}
\t\t\t\t\t\t\t\t\t\t\t\t{% for inx2 in rank..4 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% set rank = rank+1 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>&#x2606;</span>
\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<a class='stickyRow col-xs-4' href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon5.svg\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class='reviews col-xs-4'>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">{{ product.getReviews() }} {{ template.getReviewsTitle() }}</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class='order row'>
\t\t\t\t\t\t\t\t\t<div class='col-xs-offset-4 col-xs-4'>
\t\t\t\t\t\t\t\t\t\t<a id=\"product\" data-product-id=\"{{product.getId() }}\" class='orderPresentation prodInfoIconHeadOrder'>
\t\t\t\t\t\t\t\t\t\t\t<h4>{{ template.getOrderTitle() }}</h4>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class='row'>
\t\t\t\t\t\t\t\t\t<center><a class=\"btn btn-default btn-xs share\" href=\"#\"><span class=\"glyphicon glyphicon-share\" aria-hidden=\"true\"></span> Share</a></center>
\t\t\t\t\t\t\t\t</div>
\t\t\t                </div>
\t\t\t                 
\t\t\t                <div class=\"item\">
\t\t\t                \t<div class='row'>
\t\t\t\t\t\t\t\t\t<a class='prodInfoIconHeadOrder col-xs-offset-4 col-xs-4' href=\"#\">
\t\t\t\t\t\t\t\t\t\t<div class='col-xs-12'>
\t\t\t\t\t\t\t\t\t\t\t<center><p class='price'>\$19.99</p></center>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class='stickyRow row'>
\t\t\t\t\t\t\t\t\t<div class='ratingCont col-xs-4'>
\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t<span>&#x2605;</span><span>&#x2605;</span><span>&#x2605;</span><span>&#x2606;</span><span>&#x2606;</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<a class='stickyRow col-xs-4' href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon5.svg\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class='reviews col-xs-4'>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">7 reviews</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class='order row'>
\t\t\t\t\t\t\t\t\t<div class='col-xs-offset-4 col-xs-4'>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<h4>Order</h4>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class='row'>
\t\t\t\t\t\t\t\t\t<center><a class=\"btn btn-default btn-xs share\" href=\"#\"><span class=\"glyphicon glyphicon-share\" aria-hidden=\"true\"></span> Share</a></center>
\t\t\t\t\t\t\t\t</div>
\t\t\t                </div>
\t\t\t                 
\t\t\t                <div class=\"item\">
\t\t\t                \t<div class='row'>
\t\t\t\t\t\t\t\t\t<a class='prodInfoIconHeadOrder col-xs-offset-4 col-xs-4' href=\"#\">
\t\t\t\t\t\t\t\t\t\t<div class='col-xs-12'>
\t\t\t\t\t\t\t\t\t\t\t<center><p class='price'>\$39.99</p></center>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class='stickyRow row'>
\t\t\t\t\t\t\t\t\t<div class='ratingCont col-xs-4'>
\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t<span>&#x2605;</span><span>&#x2605;</span><span>&#x2605;</span><span>&#x2606;</span><span>&#x2606;</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<a class='stickyRow col-xs-4' href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon5.svg\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class='reviews col-xs-4'>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">16 reviews</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class='order row'>
\t\t\t\t\t\t\t\t\t<div class='col-xs-offset-4 col-xs-4'>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<h4>Order</h4>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class='row'>
\t\t\t\t\t\t\t\t\t<center><a class=\"btn btn-xs share\" href=\"#\"><span class=\"glyphicon glyphicon-share\" aria-hidden=\"true\"></span> Share</a></center>
\t\t\t\t\t\t\t\t</div>
\t\t\t                </div>
\t\t                </div>
\t                </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t\t<!-- Second carrousel End -->

\t\t</section>
\t\t<div class='clearfix'></div>
\t\t<section>
\t\t<div id='prodInfoWidth'>
\t\t\t<div class='prodInfoPreferences row col-xs-offset-1 col-xs-10 col-md-offset-3 col-md-6'>
\t\t\t\t<div class='row'>
\t\t\t\t\t<div class='col-xs-12 col-md-6'>
\t\t\t\t\t\t<div id='informationSection'>
\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t<div class='prodInfoIconHeadings col-xs-offset-3 col-xs-6'>
\t\t\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon2.svg\">
\t\t\t\t\t\t\t\t\t<h4>Information</h4>
\t\t\t\t\t\t\t\t</div>                                                                    
\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t<div id='prodInfoDetails' class='col-xs-12'>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<span>Farm: </span><a class='btn btn-default btn-xs' href=\"#\">Tortuga</a></br>
\t\t\t\t\t\t\t\t\t<span>Species: </span>Arabica</br>
\t\t\t\t\t\t\t\t\t<span>Cultivar: </span>Caturra</br>
\t\t\t\t\t\t\t\t\t<span>Grade: </span>SHB</br>
\t\t\t\t\t\t\t\t\t<span>Processing: </span>Washed</br>
\t\t\t\t\t\t\t\t\t<span>Flavor notes: </span>Dried frutis and chocolate</br>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class='col-xs-12 col-md-6'>
\t\t\t\t\t\t<div id='roastSection'>
\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t<div class='prodInfoIconHeadings col-xs-offset-3 col-xs-6'>
\t\t\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon7.svg\">
\t\t\t\t\t\t\t\t\t<h4>Roast</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t<div class=\"btn-group btn-group-justified\" role=\"group\" aria-label=\"...\">
\t\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default active\">Light</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">Medium</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">Dark</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class='row'>
\t\t\t\t\t<div class='col-xs-12 col-md-6'>
\t\t\t\t\t\t<div id='presentationSection'>
\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t<div class='prodInfoIconHeadings col-xs-offset-3 col-xs-6'>
\t\t\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon10.svg\">
\t\t\t\t\t\t\t\t\t<h4>Weight</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t<div class=\"btn-group btn-group-justified\" role=\"group\" aria-label=\"...\">
\t\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">32 oz</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default active\">12 oz</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">32 oz</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">12 oz</button>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class='col-xs-12 col-md-6'>
\t\t\t\t\t\t<div id='presentationSection'>
\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t<div class='prodInfoIconHeadings col-xs-offset-3 col-xs-6'>
\t\t\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon8.svg\">
\t\t\t\t\t\t\t\t\t<h4>Grind</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t<div class=\"btn-group btn-group-justified\" role=\"group\" aria-label=\"...\">
\t\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">Whole Bean</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default active\">Ground</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class='row'>
\t\t\t\t\t<div class='col-xs-12 col-md-offset-3 col-md-6'>
\t\t\t\t\t\t<div id='cupSection'>
\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t<div class='prodInfoIconHeadings col-xs-offset-3 col-xs-6'>
\t\t\t\t\t\t\t\t\t<img src=\"/web/public/imgs/icon9.svg\">
\t\t\t\t\t\t\t\t\t<h4>Cup Scoring</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t<div id='cupMap' class='col-xs-12'>
\t\t\t\t\t\t\t\t<center><img src=\"/web/public/imgs/cupScoring.png\"></center>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t</section>
\t</main>
\t

{% endblock %}
{% block javascripts %}
    {{ parent() }}
\t<script src=\"{{ asset('/web/public/js/product_information.js')}}\"></script>
{% endblock %}", "PageBundle:Default:product_information.html.twig", "C:\\xampp\\htdocs\\crgc\\src\\PageBundle/Resources/views/Default/product_information.html.twig");
    }
}
