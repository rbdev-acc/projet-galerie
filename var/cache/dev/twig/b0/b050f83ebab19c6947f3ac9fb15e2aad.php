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

/* security/login.html.twig */
class __TwigTemplate_b37dae8511470a6556b0e726df059239 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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

        yield "Connexion - Galerie Photo";
        
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
        yield "    <div class=\"container mt-5\">
        <div class=\"text-center text-white mb-4\">
            <h1 class=\"display-4 font-weight-bold\">Se connecter</h1>
            <p class=\"lead\">Rejoignez-nous pour partager vos plus belles photos.</p>
        </div>

        <div class=\"bg-dark text-white p-5 rounded\">
            ";
        // line 14
        yield "            ";
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 14, $this->source); })())) {
            // line 15
            yield "                <div class=\"alert alert-danger\">
                    ";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 16, $this->source); })()), "html", null, true);
            yield "
                </div>
            ";
        }
        // line 19
        yield "
            ";
        // line 20
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20)) {
            // line 21
            yield "                <div class=\"mb-3\">
                    Vous êtes connecté en tant que ";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22), "email", [], "any", false, false, false, 22), "html", null, true);
            yield ", <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" class=\"text-decoration-none text-light\">Se déconnecter</a>
                </div>
            ";
        }
        // line 25
        yield "
        <div class=\"bg-dark text-white p-5 rounded\">
            ";
        // line 28
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "flashes", ["success"], "method", false, false, false, 28));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 29
            yield "                <div class=\"alert alert-success\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        yield "
            <form method=\"post\">
                <div class=\"form-group mb-3\">
                    <label for=\"inputEmail\" class=\"form-label\">Email</label>
                    <input 
                        type=\"email\" 
                        value=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 37, $this->source); })()), "html", null, true);
        yield "\" 
                        name=\"email\" 
                        id=\"inputEmail\" 
                        class=\"form-control\" 
                        placeholder=\"Entrez votre email\"
                        autocomplete=\"email\"
                        required 
                        autofocus
                    >
                    ";
        // line 46
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "request", [], "any", false, false, false, 46), "get", ["email"], "method", false, false, false, 46) &&  !(isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 46, $this->source); })()))) {
            // line 47
            yield "                        <div class=\"invalid-feedback d-block\">
                            L'email est requis.
                        </div>
                    ";
        }
        // line 51
        yield "                </div>

                <div class=\"form-group mb-3\">
                    <label for=\"inputPassword\" class=\"form-label\">Mot de passe</label>
                    <input 
                        type=\"password\" 
                        name=\"password\" 
                        id=\"inputPassword\" 
                        class=\"form-control\" 
                        placeholder=\"Mot de passe\"
                        autocomplete=\"current-password\" 
                        required
                    >
                    ";
        // line 64
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "request", [], "any", false, false, false, 64), "get", ["password"], "method", false, false, false, 64) &&  !(isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 64, $this->source); })()))) {
            // line 65
            yield "                        <div class=\"invalid-feedback d-block\">
                            Le mot de passe est requis.
                        </div>
                    ";
        }
        // line 69
        yield "                </div>

                <input 
                    type=\"hidden\" 
                    name=\"_csrf_token\"
                    value=\"";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\"
                >

                <button type=\"submit\" class=\"btn btn-light btn-lg w-100 mt-4\">Se connecter</button>
            </form>
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
        return "security/login.html.twig";
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
        return array (  198 => 74,  191 => 69,  185 => 65,  183 => 64,  168 => 51,  162 => 47,  160 => 46,  148 => 37,  140 => 31,  131 => 29,  126 => 28,  122 => 25,  114 => 22,  111 => 21,  109 => 20,  106 => 19,  100 => 16,  97 => 15,  94 => 14,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Connexion - Galerie Photo{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <div class=\"text-center text-white mb-4\">
            <h1 class=\"display-4 font-weight-bold\">Se connecter</h1>
            <p class=\"lead\">Rejoignez-nous pour partager vos plus belles photos.</p>
        </div>

        <div class=\"bg-dark text-white p-5 rounded\">
            {# Affichage des messages d'erreur #}
            {% if error %}
                <div class=\"alert alert-danger\">
                    {{ error }}
                </div>
            {% endif %}

            {% if app.user %}
                <div class=\"mb-3\">
                    Vous êtes connecté en tant que {{ app.user.email }}, <a href=\"{{ path('app_logout') }}\" class=\"text-decoration-none text-light\">Se déconnecter</a>
                </div>
            {% endif %}

        <div class=\"bg-dark text-white p-5 rounded\">
            {# Affichage des messages flash #}
            {% for message in app.flashes('success') %}
                <div class=\"alert alert-success\">{{ message }}</div>
            {% endfor %}

            <form method=\"post\">
                <div class=\"form-group mb-3\">
                    <label for=\"inputEmail\" class=\"form-label\">Email</label>
                    <input 
                        type=\"email\" 
                        value=\"{{ last_username }}\" 
                        name=\"email\" 
                        id=\"inputEmail\" 
                        class=\"form-control\" 
                        placeholder=\"Entrez votre email\"
                        autocomplete=\"email\"
                        required 
                        autofocus
                    >
                    {% if app.request.get('email') and not error %}
                        <div class=\"invalid-feedback d-block\">
                            L'email est requis.
                        </div>
                    {% endif %}
                </div>

                <div class=\"form-group mb-3\">
                    <label for=\"inputPassword\" class=\"form-label\">Mot de passe</label>
                    <input 
                        type=\"password\" 
                        name=\"password\" 
                        id=\"inputPassword\" 
                        class=\"form-control\" 
                        placeholder=\"Mot de passe\"
                        autocomplete=\"current-password\" 
                        required
                    >
                    {% if app.request.get('password') and not error %}
                        <div class=\"invalid-feedback d-block\">
                            Le mot de passe est requis.
                        </div>
                    {% endif %}
                </div>

                <input 
                    type=\"hidden\" 
                    name=\"_csrf_token\"
                    value=\"{{ csrf_token('authenticate') }}\"
                >

                <button type=\"submit\" class=\"btn btn-light btn-lg w-100 mt-4\">Se connecter</button>
            </form>
        </div>
    </div>

    <footer class=\"bg-dark text-white text-center py-4 mt-5\">
        <p>&copy; 2025 Galerie Photo. Tous droits réservés.</p>
    </footer>

   
{% endblock %}
", "security/login.html.twig", "/opt/projet/Galerie/templates/security/login.html.twig");
    }
}
