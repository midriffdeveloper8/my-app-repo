<?php

/* single-product.html */
class __TwigTemplate_b87cbdcd24617d3db5b525023bbf42408c4cc4256fbedef479a86e1d0cee5b7d extends Twig_Template
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
\t<title>Product</title>
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
\t\t<h1>Single Product</h1>
\t\t<div class=\"flex one\">
\t\t 
\t\t  <div>
\t\t    <article class=\"card\">
\t\t      <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "images", array()), 0, array(), "array"), "src", array()), "html", null, true);
        echo "\">
\t\t      <section>
\t\t        <h3>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "title", array()), "html", null, true);
        echo "</h3>
\t\t        <strong>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "variants", array()), 0, array(), "array"), "price", array()), "html", null, true);
        echo " </strong>
\t\t\t\t<br>
\t\t\t\t";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "body_html", array()), "html", null, true);
        echo "
\t\t      </section>
\t\t    </article>
\t\t  </div>
\t\t 
\t\t</div>
\t</main>
\t
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "single-product.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 29,  53 => 27,  49 => 26,  44 => 24,  19 => 1,);
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
\t<title>Product</title>
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
\t\t<h1>Single Product</h1>
\t\t<div class=\"flex one\">
\t\t 
\t\t  <div>
\t\t    <article class=\"card\">
\t\t      <img src=\"{{ product.images[0].src }}\">
\t\t      <section>
\t\t        <h3>{{ product.title }}</h3>
\t\t        <strong>{{ product.variants[0].price }} </strong>
\t\t\t\t<br>
\t\t\t\t{{ product.body_html }}
\t\t      </section>
\t\t    </article>
\t\t  </div>
\t\t 
\t\t</div>
\t</main>
\t
</body>
</html>", "single-product.html", "C:\\wamp\\www\\shopify-tester-master\\templates\\single-product.html");
    }
}
