<?php

/* customers.html */
class __TwigTemplate_9245e88a4df54bc251f97e02da1a2ea6fefc7cd9f0aa14f5aefedada25adf0be extends Twig_Template
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
\t<title>CUSTOMERS</title>
\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/picnic/6.1.1/picnic.min.css\">
\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/picnic/6.1.1/plugins.min.css\">
\t<link rel=\"stylesheet\" href=\"css/style.css\">
</head>
<body>
\t<nav>
\t  <a href=\"#\" class=\"brand\">
\t    <span>Shopify App</span>
\t  </a>
\t</nav>
\t<main>
\t\t<h1>Customers</h1>
\t\t<div class=\"flex one\">
\t\t";
        // line 19
        if ((isset($context["customers"]) ? $context["customers"] : null)) {
            // line 20
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["customers"]) ? $context["customers"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer"]) {
                // line 21
                echo "\t\t<div>
            <article class=\"card\">
\t\t\t\t<section>
\t\t\t\t\t<table>
\t\t\t\t\t  <tr>
\t\t\t\t\t\t<td>id:</td><td> ";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["customer"], "id", array()), "html", null, true);
                echo "</td></tr>
\t\t\t\t\t  <tr>
\t\t\t\t\t\t<td>first_name:</td><td> ";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["customer"], "first_name", array()), "html", null, true);
                echo "</td></tr>
\t\t\t\t\t  <tr>
\t\t\t\t\t\t<td>last_name:</td><td> ";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["customer"], "last_name", array()), "html", null, true);
                echo "</td></tr>
\t\t\t\t\t  <tr>
\t\t\t\t\t\t<td>note:</td><td> ";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["customer"], "note", array()), "html", null, true);
                echo "</td></tr>
\t\t\t\t\t  <tr>
\t\t\t\t\t    <td>order name:</td><td> ";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["customer"], "last_order_name", array()), "html", null, true);
                echo "</td></tr>
\t\t\t\t\t  <tr>
\t\t\t\t\t    <td>order id:</td><td> ";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["customer"], "last_order_id", array()), "html", null, true);
                echo "</td></tr>
\t\t\t\t\t  <tr>
\t\t\t\t\t    <td>tags:</td><td> ";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["customer"], "tags", array()), "html", null, true);
                echo "</td></tr>
\t\t\t\t\t  <tr>
\t\t\t\t\t\t<td rowspan=6>address:</td>";
                // line 40
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["customer"], "addresses", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                    // line 41
                    echo "\t\t\t\t\t\t<tr><td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "address1", array()), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t<tr><td>";
                    // line 42
                    echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "address2", array()), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t<tr><td>";
                    // line 43
                    echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "city", array()), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t<tr><td>";
                    // line 44
                    echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "province", array()), "html", null, true);
                    echo "(";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "province_code", array()), "html", null, true);
                    echo ")</td>
\t\t\t\t\t\t<tr><td>";
                    // line 45
                    echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "country", array()), "html", null, true);
                    echo "(";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "country_code", array()), "html", null, true);
                    echo ")</td>
\t\t\t\t\t\t<tr><td>Phone:<td>";
                    // line 46
                    echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "phone", array()), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t<tr><td>Name:<td>";
                    // line 47
                    echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "name", array()), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 48
                echo "</td></tr>
\t\t\t\t\t  <tr>
\t\t\t\t\t\t<td>email:</td><td>";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["customer"], "email", array()), "html", null, true);
                echo "</td></tr>
\t\t\t\t\t  <tr>
\t\t\t\t\t  <td>Tax Exempt:</td><td>";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($context["customer"], "tax_exempt", array()), "html", null, true);
                echo "</td></tr>
\t\t\t\t\t</table>
\t\t\t\t</section>
            </article>
        </div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "\t\t";
        }
        // line 59
        echo "\t\t</div>
\t</main>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "customers.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 59,  150 => 58,  138 => 52,  133 => 50,  129 => 48,  121 => 47,  117 => 46,  111 => 45,  105 => 44,  101 => 43,  97 => 42,  92 => 41,  88 => 40,  83 => 38,  78 => 36,  73 => 34,  68 => 32,  63 => 30,  58 => 28,  53 => 26,  46 => 21,  41 => 20,  39 => 19,  19 => 1,);
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
\t<title>CUSTOMERS</title>
\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/picnic/6.1.1/picnic.min.css\">
\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/picnic/6.1.1/plugins.min.css\">
\t<link rel=\"stylesheet\" href=\"css/style.css\">
</head>
<body>
\t<nav>
\t  <a href=\"#\" class=\"brand\">
\t    <span>Shopify App</span>
\t  </a>
\t</nav>
\t<main>
\t\t<h1>Customers</h1>
\t\t<div class=\"flex one\">
\t\t{% if customers %}
\t\t{% for customer in customers %}
\t\t<div>
            <article class=\"card\">
\t\t\t\t<section>
\t\t\t\t\t<table>
\t\t\t\t\t  <tr>
\t\t\t\t\t\t<td>id:</td><td> {{ customer.id }}</td></tr>
\t\t\t\t\t  <tr>
\t\t\t\t\t\t<td>first_name:</td><td> {{ customer.first_name }}</td></tr>
\t\t\t\t\t  <tr>
\t\t\t\t\t\t<td>last_name:</td><td> {{ customer.last_name }}</td></tr>
\t\t\t\t\t  <tr>
\t\t\t\t\t\t<td>note:</td><td> {{ customer.note }}</td></tr>
\t\t\t\t\t  <tr>
\t\t\t\t\t    <td>order name:</td><td> {{ customer.last_order_name }}</td></tr>
\t\t\t\t\t  <tr>
\t\t\t\t\t    <td>order id:</td><td> {{ customer.last_order_id }}</td></tr>
\t\t\t\t\t  <tr>
\t\t\t\t\t    <td>tags:</td><td> {{ customer.tags }}</td></tr>
\t\t\t\t\t  <tr>
\t\t\t\t\t\t<td rowspan=6>address:</td>{% for address in customer.addresses %}
\t\t\t\t\t\t<tr><td>{{ address.address1 }}</td>
\t\t\t\t\t\t<tr><td>{{ address.address2 }}</td>
\t\t\t\t\t\t<tr><td>{{ address.city }}</td>
\t\t\t\t\t\t<tr><td>{{ address.province }}({{ address.province_code }})</td>
\t\t\t\t\t\t<tr><td>{{ address.country }}({{ address.country_code }})</td>
\t\t\t\t\t\t<tr><td>Phone:<td>{{ address.phone }}</td>
\t\t\t\t\t\t<tr><td>Name:<td>{{ address.name }}</td>
\t\t\t\t\t\t{% endfor %}</td></tr>
\t\t\t\t\t  <tr>
\t\t\t\t\t\t<td>email:</td><td>{{customer.email}}</td></tr>
\t\t\t\t\t  <tr>
\t\t\t\t\t  <td>Tax Exempt:</td><td>{{ customer.tax_exempt }}</td></tr>
\t\t\t\t\t</table>
\t\t\t\t</section>
            </article>
        </div>
\t\t{% endfor %}
\t\t{% endif %}
\t\t</div>
\t</main>
</body>
</html>", "customers.html", "C:\\wamp\\www\\shopify-tester-master\\templates\\customers.html");
    }
}
