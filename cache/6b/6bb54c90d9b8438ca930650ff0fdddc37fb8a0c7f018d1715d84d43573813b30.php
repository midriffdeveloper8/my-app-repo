<?php

/* orders.html */
class __TwigTemplate_c95a564d20350bb6f1fcc7e6d44237fa30d08338b9d15959287315184d32c2be extends Twig_Template
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
    <meta charset=\"UTF-8\">
    <title>Orders</title>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/picnic/6.1.1/picnic.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/picnic/6.1.1/plugins.min.css\">
    <link rel=\"stylesheet\" href=\"css/style.css\">
</head>
<body>

    <nav>
      <a href=\"#\" class=\"brand\">
        <span>Shopify App</span>
      </a>
    </nav>

    <main>
        <h1>Orders</h1>
        <div class=\"flex one\">
          ";
        // line 21
        if ((isset($context["orders"]) ? $context["orders"] : null)) {
            // line 22
            echo "\t\t  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) ? $context["orders"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 23
                echo "          <div>
            <article class=\"card\">
              <section>
\t\t\t  <table>
                <tr><td>billing_address :</td>
\t\t\t\t<td>";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "address1", array()), "html", null, true);
                echo "</td>
\t\t\t\t</tr>
            <tr><td>discounts:<td>";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "total_discounts", array()), "html", null, true);
                echo " </tr>
\t\t\t<tr><td>order_number:<td>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "number", array()), "html", null, true);
                echo " </tr>
\t\t\t<tr><td>email:<td>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "email", array()), "html", null, true);
                echo " </tr>
\t\t\t<tr><td>discount codes:</td>";
                // line 33
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["discounts"]) ? $context["discounts"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    echo "<td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["discount"], "code", array()), "html", null, true);
                    echo "</td>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 34
                echo "\t\t\t<tr><td>discount amount:</td><td>";
                echo twig_escape_filter($this->env, (isset($context["discounts_amount"]) ? $context["discounts_amount"] : null), "html", null, true);
                echo "</td>
\t\t\t<tr><td>discount savings</td><td>";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["discounts"]) ? $context["discounts"] : null), "savings", array()), "html", null, true);
                echo "</td>
\t\t\t<tr><td>discount type: </td><td>";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["discounts"]) ? $context["discounts"] : null), "type", array()), "html", null, true);
                echo "</td>
\t\t
\t\t\t</table>
              </section>
            </article>
          </div>
\t\t  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "          ";
        } else {
            // line 44
            echo "\t\t\tNO orders
\t\t\t";
        }
        // line 46
        echo "        </div>
    </main>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "orders.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 46,  108 => 44,  105 => 43,  92 => 36,  88 => 35,  83 => 34,  72 => 33,  68 => 32,  64 => 31,  60 => 30,  55 => 28,  48 => 23,  43 => 22,  41 => 21,  19 => 1,);
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
    <meta charset=\"UTF-8\">
    <title>Orders</title>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/picnic/6.1.1/picnic.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/picnic/6.1.1/plugins.min.css\">
    <link rel=\"stylesheet\" href=\"css/style.css\">
</head>
<body>

    <nav>
      <a href=\"#\" class=\"brand\">
        <span>Shopify App</span>
      </a>
    </nav>

    <main>
        <h1>Orders</h1>
        <div class=\"flex one\">
          {% if orders %}
\t\t  {% for order in orders %}
          <div>
            <article class=\"card\">
              <section>
\t\t\t  <table>
                <tr><td>billing_address :</td>
\t\t\t\t<td>{{ order.address1 }}</td>
\t\t\t\t</tr>
            <tr><td>discounts:<td>{{ order.total_discounts }} </tr>
\t\t\t<tr><td>order_number:<td>{{ order.number }} </tr>
\t\t\t<tr><td>email:<td>{{ order.email }} </tr>
\t\t\t<tr><td>discount codes:</td>{% for discount in discounts %}<td>{{ discount.code }}</td>{% endfor %}
\t\t\t<tr><td>discount amount:</td><td>{{ discounts_amount  }}</td>
\t\t\t<tr><td>discount savings</td><td>{{ discounts.savings }}</td>
\t\t\t<tr><td>discount type: </td><td>{{ discounts.type}}</td>
\t\t
\t\t\t</table>
              </section>
            </article>
          </div>
\t\t  {% endfor %}
          {% else %}
\t\t\tNO orders
\t\t\t{% endif %}
        </div>
    </main>

</body>
</html>", "orders.html", "C:\\wamp\\www\\shopify-tester-master\\templates\\orders.html");
    }
}
