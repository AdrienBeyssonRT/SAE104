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

/* blog/index.html.twig */
class __TwigTemplate_667642d5619a55733757f0450f24f740 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "blog/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "E-Portfolio";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <section class=\"container mt-5\">
        <h2>Bienvenue sur l'E-Portfolio d'Adrien Beysson</h2>
        <p>
            Bonjour, je suis Adrien Beysson. Je suis étudiant à Roanne dans le BUT Réseaux et télécommunications (RT), je suis âgé de 19 ans, je suis passionné d'informatique d'où ce parcours et je souhaite partager mes réalisations,
            compétences et expériences à travers ce E-Portfolio.
        </p>

        <!-- Section Informations Personnelles -->
        <div class=\"mt-5\">
            <h3>Informations Personnelles</h3>
            <ul>
                <li><strong>Nom:</strong> Beysson</li>
                <li><strong>Prenon:</strong> Adrien</li>
                <li><strong>Âge:</strong> 19 ans</li>
                <li><strong>Études:</strong> BUT Réseaux et télécommunications (RT)</li>
                <li><strong>Adresse:</strong> 12 rue Arago, Roanne</li>
                <li><strong>Numéro de téléphone:</strong> 07 84 23 55 71</li>
                <li><strong>E-mail:</strong> adrienbeysson1@gmail.com</li>
            </ul>
        </div>

        <!-- Section Mon CV -->
        <div class=\"mt-5\">
            <h3>Mon CV</h3>
            <p>
                Consultez mon CV pour en savoir plus sur mon parcours académique et professionnel.
            </p>
            <a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cv");
        echo "\" class=\"btn btn-primary\">Voir le CV</a>
        </div>

        <!-- Section Pour en savoir plus -->
        <div class=\"mt-5\">
            <h3>Pour en savoir plus</h3>
            <p>
                Vous pouvez en savoir plus sur mes loisirs, passions et aspirations en explorant les différentes sections de mon E-Portfolio.
            </p>
            <a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("plus");
        echo "\" class=\"btn btn-primary\">Découvrir</a>
        </div>

        <!-- Section Portfolio -->
        <div class=\"mt-5\">
            <h3>Portfolio</h3>
            <p>
                Explorez mes compétences dans mon portfolio.
            </p>
            <a href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("competence");
        echo "\" class=\"btn btn-primary\">Voir le Portfolio</a>
        </div>
    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "blog/index.html.twig";
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
        return array (  141 => 51,  129 => 42,  117 => 33,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}E-Portfolio{% endblock %}

{% block body %}
    <section class=\"container mt-5\">
        <h2>Bienvenue sur l'E-Portfolio d'Adrien Beysson</h2>
        <p>
            Bonjour, je suis Adrien Beysson. Je suis étudiant à Roanne dans le BUT Réseaux et télécommunications (RT), je suis âgé de 19 ans, je suis passionné d'informatique d'où ce parcours et je souhaite partager mes réalisations,
            compétences et expériences à travers ce E-Portfolio.
        </p>

        <!-- Section Informations Personnelles -->
        <div class=\"mt-5\">
            <h3>Informations Personnelles</h3>
            <ul>
                <li><strong>Nom:</strong> Beysson</li>
                <li><strong>Prenon:</strong> Adrien</li>
                <li><strong>Âge:</strong> 19 ans</li>
                <li><strong>Études:</strong> BUT Réseaux et télécommunications (RT)</li>
                <li><strong>Adresse:</strong> 12 rue Arago, Roanne</li>
                <li><strong>Numéro de téléphone:</strong> 07 84 23 55 71</li>
                <li><strong>E-mail:</strong> adrienbeysson1@gmail.com</li>
            </ul>
        </div>

        <!-- Section Mon CV -->
        <div class=\"mt-5\">
            <h3>Mon CV</h3>
            <p>
                Consultez mon CV pour en savoir plus sur mon parcours académique et professionnel.
            </p>
            <a href=\"{{ path('cv') }}\" class=\"btn btn-primary\">Voir le CV</a>
        </div>

        <!-- Section Pour en savoir plus -->
        <div class=\"mt-5\">
            <h3>Pour en savoir plus</h3>
            <p>
                Vous pouvez en savoir plus sur mes loisirs, passions et aspirations en explorant les différentes sections de mon E-Portfolio.
            </p>
            <a href=\"{{ path('plus') }}\" class=\"btn btn-primary\">Découvrir</a>
        </div>

        <!-- Section Portfolio -->
        <div class=\"mt-5\">
            <h3>Portfolio</h3>
            <p>
                Explorez mes compétences dans mon portfolio.
            </p>
            <a href=\"{{ path('competence') }}\" class=\"btn btn-primary\">Voir le Portfolio</a>
        </div>
    </section>
{% endblock %}
", "blog/index.html.twig", "C:\\Users\\AdriT\\OneDrive\\Desktop\\SAé 1.4\\sae1.04\\templates\\blog\\index.html.twig");
    }
}
