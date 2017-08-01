<?php

/* checkouts.html */
class __TwigTemplate_375d023f07cd56547c7d817bdb040f75bdeae9f1d28853d36d8d871e3c4b6fa9 extends Twig_Template
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
\t\t<h1>checkout</h1>
\t\t<div class=\"flex two\">
\t\t  ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["checkouts"]) ? $context["checkouts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["checkout"]) {
            // line 22
            echo "\t\t  <div>
\t\t    <article class=\"card\">
\t\t      <section>
\t\t\t  <table>
\t\t\t  <tr><td>email :</td><td>";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : null), "html", null, true);
            echo "</td></tr>
\t\t\t  <tr><td>customer_id :</td><td>";
            // line 27
            echo twig_escape_filter($this->env, (isset($context["customer_id"]) ? $context["customer_id"] : null), "html", null, true);
            echo "</td></tr>
\t\t\t  <tr><td>currency :</td><td>";
            // line 28
            echo twig_escape_filter($this->env, (isset($context["currency"]) ? $context["currency"] : null), "html", null, true);
            echo "</td></tr>
\t\t\t  <tr><td>billing_address :</td><td>";
            // line 29
            echo twig_escape_filter($this->env, (isset($context["billing_address"]) ? $context["billing_address"] : null), "html", null, true);
            echo "</td></tr>
\t\t\t  
                <tr>";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["line"]) ? $context["line"] : null), "item", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                echo "<td>
\t\t      title  ";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
                echo "
\t\t       variant_id ";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "variant_id", array()), "html", null, true);
                echo "
\t\t\t\t</td><td>variant_title";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "variant_title", array()), "html", null, true);
                echo "
\t\t\t\tproduct_id";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "product_id", array()), "html", null, true);
                echo "
\t\t\t\tid";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "</td></tr>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "\t\t\t\t</table>
\t\t      </section>
\t\t    </article>
\t\t  </div>
\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['checkout'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "\t\t</div>
\t</main>
\t
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "checkouts.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 43,  98 => 38,  90 => 36,  86 => 35,  82 => 34,  78 => 33,  74 => 32,  68 => 31,  63 => 29,  59 => 28,  55 => 27,  51 => 26,  45 => 22,  41 => 21,  19 => 1,);
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
\t\t<h1>checkout</h1>
\t\t<div class=\"flex two\">
\t\t  {% for checkout in checkouts %}
\t\t  <div>
\t\t    <article class=\"card\">
\t\t      <section>
\t\t\t  <table>
\t\t\t  <tr><td>email :</td><td>{{ email }}</td></tr>
\t\t\t  <tr><td>customer_id :</td><td>{{ customer_id }}</td></tr>
\t\t\t  <tr><td>currency :</td><td>{{ currency }}</td></tr>
\t\t\t  <tr><td>billing_address :</td><td>{{ billing_address }}</td></tr>
\t\t\t  
                <tr>{% for item in line.item %}<td>
\t\t      title  {{ item.title }}
\t\t       variant_id {{ item.variant_id }}
\t\t\t\t</td><td>variant_title{{ item.variant_title }}
\t\t\t\tproduct_id{{ item.product_id }}
\t\t\t\tid{{ item.id }}</td></tr>
\t\t\t\t{% endfor %}
\t\t\t\t</table>
\t\t      </section>
\t\t    </article>
\t\t  </div>
\t\t  {% endfor %}
\t\t</div>
\t</main>
\t
</body>
</html>", "checkouts.html", "C:\\wamp\\www\\shopify-tester-master\\templates\\checkouts.html");
    }
}
