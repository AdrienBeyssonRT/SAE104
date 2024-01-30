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

/* blog/competence.html.twig */
class __TwigTemplate_344c62c99076b83f35940439b018fbae extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/competence.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/competence.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "blog/competence.html.twig", 1);
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

        echo "Compétences";
        
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
        echo "    <h2 class=\"text-center\">Mes Compétences</h2>

    <!-- Partie 1: Assister l’administrateur du réseau -->
    <div class=\"container d-flex align-items-center justify-content-center\">
        <div class=\"mb-4 text-center\">
            <h4>Assister l’administrateur du réseau</h4>
            <div class=\"progress-container\">
            </div>
            <p class=\"mt-2\"><strong>Apprentissages critiques :</strong></p>
            <!-- Barres de progression pour chaque apprentissage critique -->
            <ul class=\"text-left\">
                <li>
                    <span>Maîtriser les lois fondamentales de l’électricité afin d’intervenir sur des équipements de réseaux et télécommunications (habilitation électrique)</span>
                    <div class=\"progress\" style=\"border: 1px solid #ccc; border-radius: 5px; margin: 5px;\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 30%; height: 15px;\" aria-valuenow=\"30\" aria-valuemin=\"0\" aria-valuemax=\"100\">30%</div>
                    </div>
                </li>
                <li>
                    <span>Comprendre les principes et standards du codage de l’information</span>
                    <div class=\"progress\" style=\"border: 1px solid #ccc; border-radius: 5px; margin: 5px;\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 60%; height: 15px;\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\">60%</div>
                    </div>
                </li>
                <li>
                    <span>Configurer les fonctions de base du réseau local (Ethernet, IPv4, intro IPv6, commutation, VLANs, routage statique)</span>
                    <div class=\"progress\" style=\"border: 1px solid #ccc; border-radius: 5px; margin: 5px;\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 60%; height: 15px;\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\">60%</div>
                    </div>
                </li>
                <li>
                    <span>Maîtriser les rôles et les principes fondamentaux des systèmes d’exploitation afin d’interagir avec ceux-ci pour la configuration et
administration des réseaux et services fournis (DHCP, DNS, ...)</span>
                    <div class=\"progress\" style=\"border: 1px solid #ccc; border-radius: 5px; margin: 5px;\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 60%; height: 15px;\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\">60%</div>
                    </div>
                </li>
                <li>
                    <span>Savoir identifier les dysfonctionnements du réseau local</span>
                    <div class=\"progress\" style=\"border: 1px solid #ccc; border-radius: 5px; margin: 5px;\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 60%; height: 15px;\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\">60%</div>
                    </div>
                </li>
                <li>
                    <span> Installer un poste client (et le sécuriser: antivirus, parefeu, comptes, ...)</span>
                    <div class=\"progress\" style=\"border: 1px solid #ccc; border-radius: 5px; margin: 5px;\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 60%; height: 15px;\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\">60%</div>
                    </div>
                </li>
                <!-- Ajoutez d'autres barres de progression au besoin -->
            </ul>
        </div>
    </div>

    <!-- Partie 2: Découvrir les transmissions et la ToIP -->
    <div class=\"container d-flex align-items-center justify-content-center\">
        <div class=\"mb-4 text-center\">
            <h4>Découvrir les transmissions et la ToIP</h4>
            <div class=\"progress-container\">
            </div>
            <p class=\"mt-2\"><strong>Apprentissages critiques :</strong></p>
            <!-- Barres de progression pour chaque apprentissage critique -->
            <ul class=\"text-left\">
                <li>
                    <span>Mesurer et analyser les signaux (audio et vidéo, ordres de grandeurs, comprendre la dualité temps/fréquence et utiliser des équipements d’analyse spectrale, avec projets autour de la chaîne d’acquisition/traitement)</span>
                    <div class=\"progress\" style=\"border: 1px solid #ccc; border-radius: 5px; margin: 5px;\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 40%; height: 15px;\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\">40%</div>
                    </div>
                </li>
                <li>
                    <span>Caractériser des systèmes de transmissions élémentaires et découvrir la modélisation mathématique de leur fonctionnement</span>
                    <div class=\"progress\" style=\"border: 1px solid #ccc; border-radius: 5px; margin: 5px;\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 75%; height: 15px;\" aria-valuenow=\"75\" aria-valuemin=\"0\" aria-valuemax=\"100\">75%</div>
                    </div>
                </li>
                <li>
                    <span>Déployer des supports de transmission (traitement au choix de la propagation, câblage LAN, fibre optique, ou une introduction à l’IoT)</span>
                    <div class=\"progress\" style=\"border: 1px solid #ccc; border-radius: 5px; margin: 5px;\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 75%; height: 15px;\" aria-valuenow=\"75\" aria-valuemin=\"0\" aria-valuemax=\"100\">75%</div>
                    </div>
                </li>
                <li>
                    <span>Connecter les systèmes de ToIP (s’interprétant ici comme la possibilité de se connecter au réseau téléphonique)</span>
                    <div class=\"progress\" style=\"border: 1px solid #ccc; border-radius: 5px; margin: 5px;\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 75%; height: 15px;\" aria-valuenow=\"75\" aria-valuemin=\"0\" aria-valuemax=\"100\">75%</div>
                    </div>
                </li>
                <li>
                    <span>Communiquer avec un client ou un collaborateur</span>
                    <div class=\"progress\" style=\"border: 1px solid #ccc; border-radius: 5px; margin: 5px;\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 75%; height: 15px;\" aria-valuenow=\"75\" aria-valuemin=\"0\" aria-valuemax=\"100\">75%</div>
                    </div>
                </li>
                <!-- Ajoutez d'autres barres de progression au besoin -->
            </ul>
        </div>
    </div>

    <!-- Partie 3: S’intégrer dans un service informatique -->
    <div class=\"container d-flex align-items-center justify-content-center\">
        <div class=\"mb-4 text-center\">
            <h4>S’intégrer dans un service informatique</h4>
            <div class=\"progress-container\">
            </div>
            <p class=\"mt-2\"><strong>Apprentissages critiques :</strong></p>
            <!-- Barres de progression pour chaque apprentissage critique -->
            <ul class=\"text-left\">
                <li>
                    <span>Utiliser un système informatique et ses outils (intro système, fichiers, CLI, zips, outils collaboratifs sur Internet, hygiène informatique. . . : référentiel PIX et CyberEdu)</span>
                    <div class=\"progress\" style=\"border: 1px solid #ccc; border-radius: 5px; margin: 5px;\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 50%; height: 15px;\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\">50%</div>
                    </div>
                </li>
                <li>
                    <span>Lire, exécuter, corriger et modifier un programme (programmes simples type scripts, algorithme inclus)</span>
                    <div class=\"progress\" style=\"border: 1px solid #ccc; border-radius: 5px; margin: 5px;\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 70%; height: 15px;\" aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\">70%</div>
                    </div>
                </li>
                <li>
                    <span>Traduire un algorithme, dans un langage et pour un environnement donné (peut inclure plusieurs, y compris objet)</span>
                    <div class=\"progress\" style=\"border: 1px solid #ccc; border-radius: 5px; margin: 5px;\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 70%; height: 15px;\" aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\">70%</div>
                    </div>
                </li>
                <li>
                    <span>Connaître l’architecture et les technologies d’un site Web (Langages et outils : HTML, CSS, CMS, JS, responsive)</span>
                    <div class=\"progress\" style=\"border: 1px solid #ccc; border-radius: 5px; margin: 5px;\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 70%; height: 15px;\" aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\">70%</div>
                    </div>
                </li>
                <li>
                    <span>Choisir les mécanismes de gestion de données adaptés au développement de l’outil (BDD, SQL, LDAP, JSON, sérialisation, conception de BDD simple. . .)</span>
                    <div class=\"progress\" style=\"border: 1px solid #ccc; border-radius: 5px; margin: 5px;\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 70%; height: 15px;\" aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\">70%</div>
                    </div>
                </li>
                <li>
                    <span>S’intégrer dans un environnement propice au développement et au travail collaboratif (intro méthodes agiles)</span>
                    <div class=\"progress\" style=\"border: 1px solid #ccc; border-radius: 5px; margin: 5px;\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 70%; height: 15px;\" aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\">70%</div>
                    </div>
                </li>
                <!-- Ajoutez d'autres barres de progression au besoin -->
            </ul>
        </div>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "blog/competence.html.twig";
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

{% block title %}Compétences{% endblock %}

{% block body %}
    <h2 class=\"text-center\">Mes Compétences</h2>

    <!-- Partie 1: Assister l’administrateur du réseau -->
    <div class=\"container d-flex align-items-center justify-content-center\">
        <div class=\"mb-4 text-center\">
            <h4>Assister l’administrateur du réseau</h4>
            <div class=\"progress-container\">
            </div>
            <p class=\"mt-2\"><strong>Apprentissages critiques :</strong></p>
            <!-- Barres de progression pour chaque apprentissage critique -->
            <ul class=\"text-left\">
                <li>
                    <span>Maîtriser les lois fondamentales de l’électricité afin d’intervenir sur des équipements de réseaux et télécommunications (habilitation électrique)</span>
                    <div class=\"progress\" style=\"border: 1px solid #ccc; border-radius: 5px; margin: 5px;\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 30%; height: 15px;\" aria-valuenow=\"30\" aria-valuemin=\"0\" aria-valuemax=\"100\">30%</div>
                    </div>
                </li>
                <li>
                    <span>Comprendre les principes et standards du codage de l’information</span>
                    <div class=\"progress\" style=\"border: 1px solid #ccc; border-radius: 5px; margin: 5px;\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 60%; height: 15px;\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\">60%</div>
                    </div>
                </li>
                <li>
                    <span>Configurer les fonctions de base du réseau local (Ethernet, IPv4, intro IPv6, commutation, VLANs, routage statique)</span>
                    <div class=\"progress\" style=\"border: 1px solid #ccc; border-radius: 5px; margin: 5px;\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 60%; height: 15px;\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\">60%</div>
                    </div>
                </li>
                <li>
                    <span>Maîtriser les rôles et les principes fondamentaux des systèmes d’exploitation afin d’interagir avec ceux-ci pour la configuration et
administration des réseaux et services fournis (DHCP, DNS, ...)</span>
                    <div class=\"progress\" style=\"border: 1px solid #ccc; border-radius: 5px; margin: 5px;\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 60%; height: 15px;\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\">60%</div>
                    </div>
                </li>
                <li>
                    <span>Savoir identifier les dysfonctionnements du réseau local</span>
                    <div class=\"progress\" style=\"border: 1px solid #ccc; border-radius: 5px; margin: 5px;\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 60%; height: 15px;\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\">60%</div>
                    </div>
                </li>
                <li>
                    <span> Installer un poste client (et le sécuriser: antivirus, parefeu, comptes, ...)</span>
                    <div class=\"progress\" style=\"border: 1px solid #ccc; border-radius: 5px; margin: 5px;\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 60%; height: 15px;\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\">60%</div>
                    </div>
                </li>
                <!-- Ajoutez d'autres barres de progression au besoin -->
            </ul>
        </div>
    </div>

    <!-- Partie 2: Découvrir les transmissions et la ToIP -->
    <div class=\"container d-flex align-items-center justify-content-center\">
        <div class=\"mb-4 text-center\">
            <h4>Découvrir les transmissions et la ToIP</h4>
            <div class=\"progress-container\">
            </div>
            <p class=\"mt-2\"><strong>Apprentissages critiques :</strong></p>
            <!-- Barres de progression pour chaque apprentissage critique -->
            <ul class=\"text-left\">
                <li>
                    <span>Mesurer et analyser les signaux (audio et vidéo, ordres de grandeurs, comprendre la dualité temps/fréquence et utiliser des équipements d’analyse spectrale, avec projets autour de la chaîne d’acquisition/traitement)</span>
                    <div class=\"progress\" style=\"border: 1px solid #ccc; border-radius: 5px; margin: 5px;\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 40%; height: 15px;\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\">40%</div>
                    </div>
                </li>
                <li>
                    <span>Caractériser des systèmes de transmissions élémentaires et découvrir la modélisation mathématique de leur fonctionnement</span>
                    <div class=\"progress\" style=\"border: 1px solid #ccc; border-radius: 5px; margin: 5px;\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 75%; height: 15px;\" aria-valuenow=\"75\" aria-valuemin=\"0\" aria-valuemax=\"100\">75%</div>
                    </div>
                </li>
                <li>
                    <span>Déployer des supports de transmission (traitement au choix de la propagation, câblage LAN, fibre optique, ou une introduction à l’IoT)</span>
                    <div class=\"progress\" style=\"border: 1px solid #ccc; border-radius: 5px; margin: 5px;\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 75%; height: 15px;\" aria-valuenow=\"75\" aria-valuemin=\"0\" aria-valuemax=\"100\">75%</div>
                    </div>
                </li>
                <li>
                    <span>Connecter les systèmes de ToIP (s’interprétant ici comme la possibilité de se connecter au réseau téléphonique)</span>
                    <div class=\"progress\" style=\"border: 1px solid #ccc; border-radius: 5px; margin: 5px;\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 75%; height: 15px;\" aria-valuenow=\"75\" aria-valuemin=\"0\" aria-valuemax=\"100\">75%</div>
                    </div>
                </li>
                <li>
                    <span>Communiquer avec un client ou un collaborateur</span>
                    <div class=\"progress\" style=\"border: 1px solid #ccc; border-radius: 5px; margin: 5px;\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 75%; height: 15px;\" aria-valuenow=\"75\" aria-valuemin=\"0\" aria-valuemax=\"100\">75%</div>
                    </div>
                </li>
                <!-- Ajoutez d'autres barres de progression au besoin -->
            </ul>
        </div>
    </div>

    <!-- Partie 3: S’intégrer dans un service informatique -->
    <div class=\"container d-flex align-items-center justify-content-center\">
        <div class=\"mb-4 text-center\">
            <h4>S’intégrer dans un service informatique</h4>
            <div class=\"progress-container\">
            </div>
            <p class=\"mt-2\"><strong>Apprentissages critiques :</strong></p>
            <!-- Barres de progression pour chaque apprentissage critique -->
            <ul class=\"text-left\">
                <li>
                    <span>Utiliser un système informatique et ses outils (intro système, fichiers, CLI, zips, outils collaboratifs sur Internet, hygiène informatique. . . : référentiel PIX et CyberEdu)</span>
                    <div class=\"progress\" style=\"border: 1px solid #ccc; border-radius: 5px; margin: 5px;\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 50%; height: 15px;\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\">50%</div>
                    </div>
                </li>
                <li>
                    <span>Lire, exécuter, corriger et modifier un programme (programmes simples type scripts, algorithme inclus)</span>
                    <div class=\"progress\" style=\"border: 1px solid #ccc; border-radius: 5px; margin: 5px;\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 70%; height: 15px;\" aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\">70%</div>
                    </div>
                </li>
                <li>
                    <span>Traduire un algorithme, dans un langage et pour un environnement donné (peut inclure plusieurs, y compris objet)</span>
                    <div class=\"progress\" style=\"border: 1px solid #ccc; border-radius: 5px; margin: 5px;\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 70%; height: 15px;\" aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\">70%</div>
                    </div>
                </li>
                <li>
                    <span>Connaître l’architecture et les technologies d’un site Web (Langages et outils : HTML, CSS, CMS, JS, responsive)</span>
                    <div class=\"progress\" style=\"border: 1px solid #ccc; border-radius: 5px; margin: 5px;\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 70%; height: 15px;\" aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\">70%</div>
                    </div>
                </li>
                <li>
                    <span>Choisir les mécanismes de gestion de données adaptés au développement de l’outil (BDD, SQL, LDAP, JSON, sérialisation, conception de BDD simple. . .)</span>
                    <div class=\"progress\" style=\"border: 1px solid #ccc; border-radius: 5px; margin: 5px;\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 70%; height: 15px;\" aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\">70%</div>
                    </div>
                </li>
                <li>
                    <span>S’intégrer dans un environnement propice au développement et au travail collaboratif (intro méthodes agiles)</span>
                    <div class=\"progress\" style=\"border: 1px solid #ccc; border-radius: 5px; margin: 5px;\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 70%; height: 15px;\" aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\">70%</div>
                    </div>
                </li>
                <!-- Ajoutez d'autres barres de progression au besoin -->
            </ul>
        </div>
    </div>

{% endblock %}", "blog/competence.html.twig", "C:\\Users\\AdriT\\OneDrive\\Desktop\\SAé 1.4\\sae1.04\\templates\\blog\\competence.html.twig");
    }
}