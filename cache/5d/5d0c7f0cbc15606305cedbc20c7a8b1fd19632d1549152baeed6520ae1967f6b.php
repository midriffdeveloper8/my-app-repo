<?php

/* products.html */
class __TwigTemplate_1b931543ed84ee42a92639f128ec19aab266ee369b0492a8bdb61e26746ec77d extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"UTF-8\">
\t<title>Products</title>
\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/picnic/6.1.1/picnic.min.css\">
\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/picnic/6.1.1/plugins.min.css\">
\t<link rel=\"stylesheet\" href=\"css/style.css\">
</head>
<body>
\t
\t<nav>
\t  <a href=\"#\" class=\"brand\">
\t    <span>Shopify App</span>
\t  </a>
\t</nav>
\t
\t<main>
\t\t<h1>Products</h1>
\t\t<div class=\"flex two\">
\t\t  ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["prod"]) {
            // line 22
            echo "\t\t  <div>
\t\t    <article class=\"card\">
\t\t      <img src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["prod"], "images", array()), 0, array(), "array"), "src", array()), "html", null, true);
            echo "\">
\t\t      <section>
\t\t        <h3>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["prod"], "title", array()), "html", null, true);
            echo "</h3>
\t\t        <strong>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["prod"], "variants", array()), 0, array(), "array"), "price", array()), "html", null, true);
            echo " PHP</strong>
\t\t      </section>
\t\t    </article>
\t\t  </div>
\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prod'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "\t\t</div>
\t</main>
\t
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "products.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 32,  58 => 27,  54 => 26,  49 => 24,  45 => 22,  41 => 21,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"UTF-8\">
\t<title>Products</title>
\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/picnic/6.1.1/picnic.min.css\">
\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/picnic/6.1.1/plugins.min.css\">
\t<link rel=\"stylesheet\" href=\"css/style.css\">
</head>
<body>
\t
\t<nav>
\t  <a href=\"#\" class=\"brand\">
\t    <span>Shopify App</span>
\t  </a>
\t</nav>
\t
\t<main>
\t\t<h1>Products</h1>
\t\t<div class=\"flex two\">
\t\t  {% for prod in products %}
\t\t  <div>
\t\t    <article class=\"card\">
\t\t      <img src=\"{{ prod.images[0].src }}\">
\t\t      <section>
\t\t        <h3>{{ prod.title }}</h3>
\t\t        <strong>{{ prod.variants[0].price }} PHP</strong>
\t\t      </section>
\t\t    </article>
\t\t  </div>
\t\t  {% endfor %}
\t\t</div>
\t</main>
\t
</body>
</html>", "products.html", "C:\\wamp\\www\\shopify-tester-master\\templates\\products.html");
    }
}
