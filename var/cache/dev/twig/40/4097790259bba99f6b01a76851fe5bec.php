<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_01eb40a8dcb49e3e040fea28489d1c02 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!-- templates/base.html.twig -->

<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- Inclure Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\"
        integrity=\"sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyW8+Q6RQ9vJ7MOhdMhL8KpNjp8TfJw31W\"
        crossorigin=\"anonymous\">

    <!-- Inclure le thème Bootswatch Lux -->
    <link rel=\"stylesheet\" href=\"https://bootswatch.com/4/lux/bootstrap.min.css\">

    <!-- Inclure du style personnalisé -->
    <style>
        body {
            background-color: #f8f9fa;
            color: #343a40;
            font-family: 'Arial', sans-serif;
        }

        .container {
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 30px;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #000000;
        }

        .form-label {
            font-weight: bold;
            color: #007bff;
        }

        .form-control {
            border-radius: 5px;
        }

        .btn-primary {
            background-color: #343a40;
            border-color: #343a40;
        }

        .navbar {
            background-color: #007bff;
            margin-bottom: 20px;
        }

        .navbar-brand {
            font-size: 1.5rem;
            font-weight: bold;
            color: #ffffff;
        }

        .navbar-toggler-icon {
            background-color: #ffffff;
        }

        .navbar-nav .nav-link {
            color: #ffffff;
        }

        .navbar-title {
            color: #000000;
            font-weight: bold;
            text-align: center;
        }

        .navbar-name {
            color: #000000;
            text-align: center;
            margin-top: -10px; /* Ajuster la marge pour le positionnement */
            font-size: 1.5rem; /* Taille de police similaire à celle du titre */
        }

        /* Styles pour le footer */
        footer {
            margin-top: 50px;
            background-color: #f8f9fa;
            padding: 10px 0;
        }

        footer p {
            margin: 0;
        }
    </style>
</head>

<body>
    <div class=\"container mt-3\">
        <h1 class=\"navbar-title\">E-Portfolio</h1>
        <p class=\"navbar-name\">Beysson Adrien</p>
    </div>

    <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
        <div class=\"container-fluid\">
            <a class=\"navbar-brand\" href=\"";
        // line 107
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">E-Portfolio</a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor01\"
                aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
                <ul class=\"navbar-nav ml-auto\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 115
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cv");
        echo "\">CV</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 118
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("plus");
        echo "\">En savoir plus</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 121
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("competence");
        echo "\">Portfolio</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class=\"container mt-5\">
        ";
        // line 129
        $this->displayBlock('body', $context, $blocks);
        // line 130
        echo "    </section>

    <!-- Footer -->
    <footer class=\"mt-5\">
        <div class=\"container\">
            <hr>
            <p class=\"text-center\">&copy; 2024 E-Portfolio - Adrien Beysson</p>
        </div>
    </footer>

    <!-- Inclure Bootstrap JS et Popper.js -->
    <script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"
        integrity=\"sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj\"
        crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js\"
        integrity=\"sha384-eMNCO9jq2k4YJsJsXn1CqjSef6YbHvTbO9UnQbYEKr8RNE+mbYUAl66fwMlJe+mv\"
        crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"
        integrity=\"sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyW8+Q6RQ9vJ7MOhdMhL8KpNjp8TfJw31W\"
        crossorigin=\"anonymous\"></script>
</body>

</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Mon e-Portfolio";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 129
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  244 => 129,  225 => 9,  192 => 130,  190 => 129,  179 => 121,  173 => 118,  167 => 115,  156 => 107,  55 => 9,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- templates/base.html.twig -->

<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{% block title %}Mon e-Portfolio{% endblock %}</title>

    <!-- Inclure Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\"
        integrity=\"sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyW8+Q6RQ9vJ7MOhdMhL8KpNjp8TfJw31W\"
        crossorigin=\"anonymous\">

    <!-- Inclure le thème Bootswatch Lux -->
    <link rel=\"stylesheet\" href=\"https://bootswatch.com/4/lux/bootstrap.min.css\">

    <!-- Inclure du style personnalisé -->
    <style>
        body {
            background-color: #f8f9fa;
            color: #343a40;
            font-family: 'Arial', sans-serif;
        }

        .container {
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 30px;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #000000;
        }

        .form-label {
            font-weight: bold;
            color: #007bff;
        }

        .form-control {
            border-radius: 5px;
        }

        .btn-primary {
            background-color: #343a40;
            border-color: #343a40;
        }

        .navbar {
            background-color: #007bff;
            margin-bottom: 20px;
        }

        .navbar-brand {
            font-size: 1.5rem;
            font-weight: bold;
            color: #ffffff;
        }

        .navbar-toggler-icon {
            background-color: #ffffff;
        }

        .navbar-nav .nav-link {
            color: #ffffff;
        }

        .navbar-title {
            color: #000000;
            font-weight: bold;
            text-align: center;
        }

        .navbar-name {
            color: #000000;
            text-align: center;
            margin-top: -10px; /* Ajuster la marge pour le positionnement */
            font-size: 1.5rem; /* Taille de police similaire à celle du titre */
        }

        /* Styles pour le footer */
        footer {
            margin-top: 50px;
            background-color: #f8f9fa;
            padding: 10px 0;
        }

        footer p {
            margin: 0;
        }
    </style>
</head>

<body>
    <div class=\"container mt-3\">
        <h1 class=\"navbar-title\">E-Portfolio</h1>
        <p class=\"navbar-name\">Beysson Adrien</p>
    </div>

    <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
        <div class=\"container-fluid\">
            <a class=\"navbar-brand\" href=\"{{ path('index') }}\">E-Portfolio</a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor01\"
                aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
                <ul class=\"navbar-nav ml-auto\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('cv') }}\">CV</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('plus') }}\">En savoir plus</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('competence') }}\">Portfolio</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class=\"container mt-5\">
        {% block body %}{% endblock %}
    </section>

    <!-- Footer -->
    <footer class=\"mt-5\">
        <div class=\"container\">
            <hr>
            <p class=\"text-center\">&copy; 2024 E-Portfolio - Adrien Beysson</p>
        </div>
    </footer>

    <!-- Inclure Bootstrap JS et Popper.js -->
    <script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"
        integrity=\"sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj\"
        crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js\"
        integrity=\"sha384-eMNCO9jq2k4YJsJsXn1CqjSef6YbHvTbO9UnQbYEKr8RNE+mbYUAl66fwMlJe+mv\"
        crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"
        integrity=\"sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyW8+Q6RQ9vJ7MOhdMhL8KpNjp8TfJw31W\"
        crossorigin=\"anonymous\"></script>
</body>

</html>
", "base.html.twig", "C:\\Users\\AdriT\\OneDrive\\Desktop\\SAé 1.4\\sae1.04\\templates\\base.html.twig");
    }
}
