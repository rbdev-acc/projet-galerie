<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* home.html.twig */
class __TwigTemplate_40c0763a248fa992947ed0b923b59781 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Accueil - Galerie Photo";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    ";
        yield from         $this->loadTemplate("includes/navbar.html.twig", "home.html.twig", 6)->unwrap()->yield($context);
        // line 7
        yield "

    <div class=\"container mt-5\">
        <div class=\"row\">
            <!-- Liste des autres galeries à gauche -->
            <div class=\"col-md-4\">
                <h2 class=\"text-white\">Autres galeries</h2>
                <ul class=\"list-group\">
                    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["usersWithPhotos"]) || array_key_exists("usersWithPhotos", $context) ? $context["usersWithPhotos"] : (function () { throw new RuntimeError('Variable "usersWithPhotos" does not exist.', 15, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 16
            yield "                        <li class=\"list-group-item\">
                            <a href=\"#\">";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 17), "html", null, true);
            yield "</a>
                            <!-- On peut ajouter un lien pour voir les photos de cet utilisateur -->
                        </li>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 21
            yield "                        <p class=\"text-white\">Aucune galerie disponible.</p>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        yield "                </ul>
            </div>

            <!-- Affichage de la galerie aléatoire à droite -->
            <div class=\"col-md-8\">
                ";
        // line 28
        if ((isset($context["randomUser"]) || array_key_exists("randomUser", $context) ? $context["randomUser"] : (function () { throw new RuntimeError('Variable "randomUser" does not exist.', 28, $this->source); })())) {
            // line 29
            yield "                    <div class=\"text-center text-white\">
                        <h1 class=\"display-4 font-weight-bold\">Galerie de ";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["randomUser"]) || array_key_exists("randomUser", $context) ? $context["randomUser"] : (function () { throw new RuntimeError('Variable "randomUser" does not exist.', 30, $this->source); })()), "username", [], "any", false, false, false, 30), "html", null, true);
            yield "</h1>
                        <div class=\"row\">
                            ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["randomUserPhotos"]) || array_key_exists("randomUserPhotos", $context) ? $context["randomUserPhotos"] : (function () { throw new RuntimeError('Variable "randomUserPhotos" does not exist.', 32, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
                // line 33
                yield "                                <div class=\"col-md-4 mb-4\">
                                    <div class=\"card\">
                                        <img src=\"";
                // line 35
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/photos/" . CoreExtension::getAttribute($this->env, $this->source, $context["photo"], "filename", [], "any", false, false, false, 35))), "html", null, true);
                yield "\" class=\"card-img-top\" alt=\"Photo\">
                                        <div class=\"card-body\">
                                            <p class=\"card-text\">Ajoutée le : ";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["photo"], "createdAt", [], "any", false, false, false, 37), "d/m/Y H:i"), "html", null, true);
                yield "</p>
                                            <p class=\"card-text\">Taille : ";
                // line 38
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["photo"], "size", [], "any", false, false, false, 38) / 1024), 2, ",", " "), "html", null, true);
                yield " Ko</p>
                                        </div>
                                    </div>
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['photo'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            yield "                        </div>
                    </div>
                ";
        } else {
            // line 46
            yield "                    <p class=\"text-white\">Aucune galerie disponible pour le moment.</p>
                ";
        }
        // line 48
        yield "            </div>
        </div>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "home.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  176 => 48,  172 => 46,  167 => 43,  156 => 38,  152 => 37,  147 => 35,  143 => 33,  139 => 32,  134 => 30,  131 => 29,  129 => 28,  122 => 23,  115 => 21,  106 => 17,  103 => 16,  98 => 15,  88 => 7,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil - Galerie Photo{% endblock %}

{% block body %}
    {% include 'includes/navbar.html.twig' %}


    <div class=\"container mt-5\">
        <div class=\"row\">
            <!-- Liste des autres galeries à gauche -->
            <div class=\"col-md-4\">
                <h2 class=\"text-white\">Autres galeries</h2>
                <ul class=\"list-group\">
                    {% for user in usersWithPhotos %}
                        <li class=\"list-group-item\">
                            <a href=\"#\">{{ user.username }}</a>
                            <!-- On peut ajouter un lien pour voir les photos de cet utilisateur -->
                        </li>
                    {% else %}
                        <p class=\"text-white\">Aucune galerie disponible.</p>
                    {% endfor %}
                </ul>
            </div>

            <!-- Affichage de la galerie aléatoire à droite -->
            <div class=\"col-md-8\">
                {% if randomUser %}
                    <div class=\"text-center text-white\">
                        <h1 class=\"display-4 font-weight-bold\">Galerie de {{ randomUser.username }}</h1>
                        <div class=\"row\">
                            {% for photo in randomUserPhotos %}
                                <div class=\"col-md-4 mb-4\">
                                    <div class=\"card\">
                                        <img src=\"{{ asset('uploads/photos/' ~ photo.filename) }}\" class=\"card-img-top\" alt=\"Photo\">
                                        <div class=\"card-body\">
                                            <p class=\"card-text\">Ajoutée le : {{ photo.createdAt|date('d/m/Y H:i') }}</p>
                                            <p class=\"card-text\">Taille : {{ (photo.size / 1024)|number_format(2, ',', ' ') }} Ko</p>
                                        </div>
                                    </div>
                                </div>
                            {% endfor %}
                        </div>
                    </div>
                {% else %}
                    <p class=\"text-white\">Aucune galerie disponible pour le moment.</p>
                {% endif %}
            </div>
        </div>
    </div>

{% endblock %}
", "home.html.twig", "/opt/projet/Galerie/templates/home.html.twig");
    }
}
