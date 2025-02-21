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

/* galerie/index.html.twig */
class __TwigTemplate_6b7b31c22b42728499af445acac4558b extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "galerie/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "galerie/index.html.twig", 1);
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

        yield "Galerie Photo - Accueil";
        
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
        yield from         $this->loadTemplate("includes/navbar.html.twig", "galerie/index.html.twig", 6)->unwrap()->yield($context);
        // line 7
        yield "

    <div class=\"container mt-5\">
        <div class=\"d-flex justify-content-between align-items-center mb-4\">
            <h1 class=\"text-white\">Galerie Photo</h1>
            <a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("galerie_ajouter");
        yield "\" class=\"btn btn-primary\">Ajouter une photo</a>
        </div>

        <div class=\"photo-gallery-container\">
            <div class=\"photo-gallery\">
                ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["photos"]) || array_key_exists("photos", $context) ? $context["photos"] : (function () { throw new RuntimeError('Variable "photos" does not exist.', 17, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
            // line 18
            yield "                    <div class=\"photo-card\">
                        <img src=\"";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/photos/" . CoreExtension::getAttribute($this->env, $this->source, $context["photo"], "filename", [], "any", false, false, false, 19))), "html", null, true);
            yield "\" alt=\"Photo\" class=\"img-fluid\">
                        <div class=\"photo-info\">
                            <p class=\"text-white\">Ajoutée le : ";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["photo"], "createdAt", [], "any", false, false, false, 21), "d/m/Y H:i"), "html", null, true);
            yield "</p>
                            <p class=\"text-white\">Taille : ";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["photo"], "size", [], "any", false, false, false, 22) / 1024), 2, ",", " "), "html", null, true);
            yield " Ko</p>

                            ";
            // line 24
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24) == CoreExtension::getAttribute($this->env, $this->source, $context["photo"], "user", [], "any", false, false, false, 24))) {
                // line 25
                yield "                                <form method=\"post\" action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("galerie_supprimer", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["photo"], "id", [], "any", false, false, false, 25)]), "html", null, true);
                yield "\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette photo ?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
                // line 26
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["photo"], "id", [], "any", false, false, false, 26))), "html", null, true);
                yield "\">
                                    <button type=\"submit\" class=\"btn btn-danger btn-sm\">Supprimer</button>
                                </form>
                            ";
            }
            // line 30
            yield "                        </div>
                    </div>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 33
            yield "                    <p class=\"text-white\">Aucune photo disponible.</p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['photo'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        yield "            </div>
        </div>
    </div>

    <footer class=\"bg-dark text-white text-center py-4 mt-5\">
        <p>&copy; 2025 Galerie Photo. Tous droits réservés.</p>
    </footer>



";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "galerie/index.html.twig";
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
        return array (  153 => 35,  146 => 33,  139 => 30,  132 => 26,  127 => 25,  125 => 24,  120 => 22,  116 => 21,  111 => 19,  108 => 18,  103 => 17,  95 => 12,  88 => 7,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Galerie Photo - Accueil{% endblock %}

{% block body %}
    {% include 'includes/navbar.html.twig' %}


    <div class=\"container mt-5\">
        <div class=\"d-flex justify-content-between align-items-center mb-4\">
            <h1 class=\"text-white\">Galerie Photo</h1>
            <a href=\"{{ path('galerie_ajouter') }}\" class=\"btn btn-primary\">Ajouter une photo</a>
        </div>

        <div class=\"photo-gallery-container\">
            <div class=\"photo-gallery\">
                {% for photo in photos %}
                    <div class=\"photo-card\">
                        <img src=\"{{ asset('uploads/photos/' ~ photo.filename) }}\" alt=\"Photo\" class=\"img-fluid\">
                        <div class=\"photo-info\">
                            <p class=\"text-white\">Ajoutée le : {{ photo.createdAt|date('d/m/Y H:i') }}</p>
                            <p class=\"text-white\">Taille : {{ (photo.size / 1024)|number_format(2, ',', ' ') }} Ko</p>

                            {% if app.user == photo.user %}
                                <form method=\"post\" action=\"{{ path('galerie_supprimer', {id: photo.id}) }}\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette photo ?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ photo.id) }}\">
                                    <button type=\"submit\" class=\"btn btn-danger btn-sm\">Supprimer</button>
                                </form>
                            {% endif %}
                        </div>
                    </div>
                {% else %}
                    <p class=\"text-white\">Aucune photo disponible.</p>
                {% endfor %}
            </div>
        </div>
    </div>

    <footer class=\"bg-dark text-white text-center py-4 mt-5\">
        <p>&copy; 2025 Galerie Photo. Tous droits réservés.</p>
    </footer>



{% endblock %}
", "galerie/index.html.twig", "/opt/projet/Galerie/templates/galerie/index.html.twig");
    }
}
