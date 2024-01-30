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

/* blog/plus.html.twig */
class __TwigTemplate_81908d47bbce01a938b3ace001b6cc8a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/plus.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/plus.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "blog/plus.html.twig", 1);
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

        echo "En Savoir Plus";
        
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
        echo "    <div class=\"container\">
        <h2>Mes Passions et Passe-temps</h2>

        <div class=\"mb-4\">
            <h4>Boxe et Sports de Combat</h4>
            <img src=\"boxe.jpg\" alt=\"Image de Boxe\" class=\"img-thumbnail mb-2 max-width-200\">
            <p>
                En dehors du monde du développement, ma passion première est la boxe. J'ai consacré du temps
                à perfectionner mes compétences, et cela va au-delà du simple exercice physique pour moi. J'apprécie
                également les sports de combat en général, que ce soit en les pratiquant ou en les suivant de près.
            </p>
        </div>

        <div class=\"mb-4\">
            <h4>Jeux Occasionnels</h4>
            <img src=\"rust.jpg\" alt=\"Image de Rust\" class=\"img-thumbnail mb-2 max-width-200\">
            <p>
                Lorsque je ne suis pas sur le ring ou devant un écran de développement, je m'accorde parfois du temps
                pour des jeux occasionnels. C'est une façon pour moi de me détendre et de relever des défis ludiques
                lorsque j'ai un moment de libre.
            </p>
            <div class=\"d-flex justify-content-between max-width-200\">
                <img src=\"valo.avif\" alt=\"Image de Valorant\" class=\"img-thumbnail mb-2 mr-2 max-width-200\">
            </div>
        </div>

        <div class=\"mb-4\">
            <h4>Séries et Films</h4>
            <p>
                En dehors de mes passions sportives, j'aime me plonger dans des séries et des films captivants.
                Que ce soit pour suivre des intrigues palpitantes ou pour découvrir de nouveaux univers, le monde
                du divertissement visuel a une place spéciale dans ma vie. Certains de mes favoris incluent \"Sons of Anarchy\",
                \"Breaking Bad\", et \"Fast and Furious: Tokyo Drift\".
            </p>
            <div class=\"d-flex justify-content-between max-width-200\">
                <img src=\"soa.jpg\" alt=\"Image de Sons of Anarchy\" class=\"img-thumbnail mb-2 mr-2 max-width-200\">
                <img src=\"tokyodrift.jpg\" alt=\"Image de Fast and Furious: Tokyo Drift\" class=\"img-thumbnail mb-2 max-width-200\">
                <img src=\"breakingbad.jfif\" alt=\"Image de Breaking Bad\" class=\"img-thumbnail mb-2 max-width-200\">
            </div>
        </div>

        <div class=\"mb-4\">
            <h4>Montres</h4>
            <img src=\"montrej&cojpg.jpg\" alt=\"Image de Montres\" class=\"img-thumbnail mb-2 max-width-200\">
            <p>
                Une autre passion qui me fascine est celle des montres. J'adore non seulement collectionner des montres,
                mais aussi les fabriquer. L'art de créer ces petits chefs-d'œuvre mécaniques est une source infinie
                de fascination pour moi.
            </p>
        </div>

        <div class=\"mb-4\">
            <h4>Cybersécurité</h4>
            <img src=\"cybersecu.jpg\" alt=\"Image de Cybersécurité\" class=\"img-thumbnail mb-2 max-width-200\">
            <p>
                En tant que passionné de technologie, la cybersécurité occupe une place importante dans mes centres
                d'intérêt. Comprendre et renforcer la sécurité informatique est une mission qui me tient à cœur, que
                ce soit dans le cadre de mes projets personnels ou pour contribuer à un environnement numérique plus sûr.
            </p>
        </div>

        <!-- Ajoutez d'autres passions et passe-temps au besoin -->
    </div>

    <style>
        .max-width-200 {
            max-width: 200px;
            max-height: 200px;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "blog/plus.html.twig";
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
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}En Savoir Plus{% endblock %}

{% block body %}
    <div class=\"container\">
        <h2>Mes Passions et Passe-temps</h2>

        <div class=\"mb-4\">
            <h4>Boxe et Sports de Combat</h4>
            <img src=\"boxe.jpg\" alt=\"Image de Boxe\" class=\"img-thumbnail mb-2 max-width-200\">
            <p>
                En dehors du monde du développement, ma passion première est la boxe. J'ai consacré du temps
                à perfectionner mes compétences, et cela va au-delà du simple exercice physique pour moi. J'apprécie
                également les sports de combat en général, que ce soit en les pratiquant ou en les suivant de près.
            </p>
        </div>

        <div class=\"mb-4\">
            <h4>Jeux Occasionnels</h4>
            <img src=\"rust.jpg\" alt=\"Image de Rust\" class=\"img-thumbnail mb-2 max-width-200\">
            <p>
                Lorsque je ne suis pas sur le ring ou devant un écran de développement, je m'accorde parfois du temps
                pour des jeux occasionnels. C'est une façon pour moi de me détendre et de relever des défis ludiques
                lorsque j'ai un moment de libre.
            </p>
            <div class=\"d-flex justify-content-between max-width-200\">
                <img src=\"valo.avif\" alt=\"Image de Valorant\" class=\"img-thumbnail mb-2 mr-2 max-width-200\">
            </div>
        </div>

        <div class=\"mb-4\">
            <h4>Séries et Films</h4>
            <p>
                En dehors de mes passions sportives, j'aime me plonger dans des séries et des films captivants.
                Que ce soit pour suivre des intrigues palpitantes ou pour découvrir de nouveaux univers, le monde
                du divertissement visuel a une place spéciale dans ma vie. Certains de mes favoris incluent \"Sons of Anarchy\",
                \"Breaking Bad\", et \"Fast and Furious: Tokyo Drift\".
            </p>
            <div class=\"d-flex justify-content-between max-width-200\">
                <img src=\"soa.jpg\" alt=\"Image de Sons of Anarchy\" class=\"img-thumbnail mb-2 mr-2 max-width-200\">
                <img src=\"tokyodrift.jpg\" alt=\"Image de Fast and Furious: Tokyo Drift\" class=\"img-thumbnail mb-2 max-width-200\">
                <img src=\"breakingbad.jfif\" alt=\"Image de Breaking Bad\" class=\"img-thumbnail mb-2 max-width-200\">
            </div>
        </div>

        <div class=\"mb-4\">
            <h4>Montres</h4>
            <img src=\"montrej&cojpg.jpg\" alt=\"Image de Montres\" class=\"img-thumbnail mb-2 max-width-200\">
            <p>
                Une autre passion qui me fascine est celle des montres. J'adore non seulement collectionner des montres,
                mais aussi les fabriquer. L'art de créer ces petits chefs-d'œuvre mécaniques est une source infinie
                de fascination pour moi.
            </p>
        </div>

        <div class=\"mb-4\">
            <h4>Cybersécurité</h4>
            <img src=\"cybersecu.jpg\" alt=\"Image de Cybersécurité\" class=\"img-thumbnail mb-2 max-width-200\">
            <p>
                En tant que passionné de technologie, la cybersécurité occupe une place importante dans mes centres
                d'intérêt. Comprendre et renforcer la sécurité informatique est une mission qui me tient à cœur, que
                ce soit dans le cadre de mes projets personnels ou pour contribuer à un environnement numérique plus sûr.
            </p>
        </div>

        <!-- Ajoutez d'autres passions et passe-temps au besoin -->
    </div>

    <style>
        .max-width-200 {
            max-width: 200px;
            max-height: 200px;
        }
    </style>
{% endblock %}
", "blog/plus.html.twig", "C:\\Users\\AdriT\\OneDrive\\Desktop\\SAé 1.4\\sae1.04\\templates\\blog\\plus.html.twig");
    }
}
