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

/* blog/realisation.html.twig */
class __TwigTemplate_5c2ca3f4180f8d0f8edb7b7a26e0738a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/realisation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/realisation.html.twig"));

        // line 3
        $context["titles"] = ["Site web", "UJM", "Titre 3", "Titre 4", "Titre 5", "Titre 6", "Titre 7", "Titre 8", "Titre 9"];
        // line 4
        $context["images"] = ["", "ujm.png", "", "", "", "", "", "", ""];
        // line 5
        $context["links"] = ["#", "https://www.univ-st-etienne.fr/fr/index.html", "", "", "", "", "", "", ""];
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "blog/realisation.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <div class=\"container text-center\">
        <div class=\"row d-flex justify-content-center align-items-center text-center\">
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 11
            echo "                <div class=\"col-4 mb-4\">
                    <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["links"]) || array_key_exists("links", $context) ? $context["links"] : (function () { throw new RuntimeError('Variable "links" does not exist.', 12, $this->source); })()), $context["i"], [], "array", false, false, false, 12), "html", null, true);
            echo "\" class=\"text-decoration-none\">
                        <div class=\"card bg-dark text-white\" style=\"width: 18rem; height: 18rem; border-radius: 20px;\">
                            <div class=\"card-img-overlay d-flex align-items-center justify-content-center\">
                                ";
            // line 15
            if (twig_get_attribute($this->env, $this->source, (isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 15, $this->source); })()), $context["i"], [], "array", false, false, false, 15)) {
                // line 16
                echo "                                    <img src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 16, $this->source); })()), $context["i"], [], "array", false, false, false, 16), "html", null, true);
                echo "\" alt=\"Image";
                echo twig_escape_filter($this->env, ($context["i"] + 1), "html", null, true);
                echo "\" class=\"img-fluid\">
                                ";
            }
            // line 18
            echo "                                <!-- Contenu optionnel pour le carré -->
                            </div>
                        </div>
                    </a>
                    <div class=\"mt-2 d-flex justify-content-center ml-auto\">
                        <h5 class=\"card-title fw-bold mb-0 text-black\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new RuntimeError('Variable "titles" does not exist.', 23, $this->source); })()), $context["i"], [], "array", false, false, false, 23), "html", null, true);
            echo "</h5>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        </div>
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
        return "blog/realisation.html.twig";
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
        return array (  119 => 27,  109 => 23,  102 => 18,  94 => 16,  92 => 15,  86 => 12,  83 => 11,  79 => 10,  75 => 8,  65 => 7,  54 => 1,  52 => 5,  50 => 4,  48 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% set titles = ['Site web', 'UJM', 'Titre 3', 'Titre 4', 'Titre 5', 'Titre 6', 'Titre 7', 'Titre 8', 'Titre 9'] %}
{% set images = ['', 'ujm.png', '', '', '', '', '', '', ''] %}
{% set links = ['#', 'https://www.univ-st-etienne.fr/fr/index.html', '', '', '', '', '', '', ''] %}

{% block body %}
    <div class=\"container text-center\">
        <div class=\"row d-flex justify-content-center align-items-center text-center\">
            {% for i in 0..8 %}
                <div class=\"col-4 mb-4\">
                    <a href=\"{{ links[i] }}\" class=\"text-decoration-none\">
                        <div class=\"card bg-dark text-white\" style=\"width: 18rem; height: 18rem; border-radius: 20px;\">
                            <div class=\"card-img-overlay d-flex align-items-center justify-content-center\">
                                {% if images[i] %}
                                    <img src=\"{{ images[i] }}\" alt=\"Image{{ i + 1 }}\" class=\"img-fluid\">
                                {% endif %}
                                <!-- Contenu optionnel pour le carré -->
                            </div>
                        </div>
                    </a>
                    <div class=\"mt-2 d-flex justify-content-center ml-auto\">
                        <h5 class=\"card-title fw-bold mb-0 text-black\">{{ titles[i] }}</h5>
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>
{% endblock %}
", "blog/realisation.html.twig", "C:\\Users\\AdriT\\OneDrive\\Desktop\\SAé 1.4\\sae1.04\\templates\\blog\\realisation.html.twig");
    }
}
