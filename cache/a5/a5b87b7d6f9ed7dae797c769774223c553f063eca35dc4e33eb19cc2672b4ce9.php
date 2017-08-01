<?php

/* install.html */
class __TwigTemplate_266edbc880def680527dbb0de68a8e9d1aa8097184448cf111b7fb45c264f44f extends Twig_Template
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
\t<title>Install</title>
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
\t\t<form method=\"POST\">
\t\t\t<fieldset class=\"flex one\">
\t\t\t  <label>
\t\t\t  \tStore Name
\t\t\t  \t<input type=\"text\" name=\"store\" placeholder=\"e.g. test-shop.myshopify.com\">
\t\t\t  </label>
\t\t\t</fieldset>
\t\t\t<button>Install</button>
\t\t</form>
\t</main>
\t
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "install.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
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
\t<title>Install</title>
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
\t\t<form method=\"POST\">
\t\t\t<fieldset class=\"flex one\">
\t\t\t  <label>
\t\t\t  \tStore Name
\t\t\t  \t<input type=\"text\" name=\"store\" placeholder=\"e.g. test-shop.myshopify.com\">
\t\t\t  </label>
\t\t\t</fieldset>
\t\t\t<button>Install</button>
\t\t</form>
\t</main>
\t
</body>
</html>", "install.html", "C:\\wamp\\www\\shopify-tester-master\\templates\\install.html");
    }
}
