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

/* registration/register.html.twig */
class __TwigTemplate_f820361b8010578e4e768f153d135d12 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
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

        yield "Inscription - Galerie Photo";
        
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
            <h1 class=\"display-4 font-weight-bold\">Inscription</h1>
            <p class=\"lead\">Rejoignez-nous pour partager vos plus belles photos.</p>
        </div>

        <div class=\"bg-dark text-white p-5 rounded\">
            ";
        // line 14
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "flashes", ["error"], "method", false, false, false, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 15
            yield "                <div class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "flashes", ["success"], "method", false, false, false, 17));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 18
            yield "                <div class=\"alert alert-success\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        yield "
            <form method=\"post\">
                ";
        // line 22
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 22, $this->source); })()), 'form_start');
        yield "

                <div class=\"form-group mb-3\">
                    ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 25, $this->source); })()), "email", [], "any", false, false, false, 25), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Email"]);
        yield "
                    ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 26, $this->source); })()), "email", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrez votre email"]]);
        yield "
                    ";
        // line 27
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 27, $this->source); })()), "email", [], "any", false, false, false, 27), "vars", [], "any", false, false, false, 27), "errors", [], "any", false, false, false, 27)) > 0)) {
            // line 28
            yield "                        <div class=\"invalid-feedback d-block\">
                            ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 29, $this->source); })()), "email", [], "any", false, false, false, 29), "vars", [], "any", false, false, false, 29), "errors", [], "any", false, false, false, 29));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 30
                yield "                                <p>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 30), "html", null, true);
                yield "</p>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            yield "                        </div>
                    ";
        }
        // line 34
        yield "                </div>

                <div class=\"form-group mb-3\">
                    ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 37, $this->source); })()), "username", [], "any", false, false, false, 37), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Nom d’utilisateur"]);
        yield "
                    ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 38, $this->source); })()), "username", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Choisissez un nom d’utilisateur"]]);
        yield "
                    ";
        // line 39
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 39, $this->source); })()), "username", [], "any", false, false, false, 39), "vars", [], "any", false, false, false, 39), "errors", [], "any", false, false, false, 39)) > 0)) {
            // line 40
            yield "                        <div class=\"invalid-feedback d-block\">
                            ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 41, $this->source); })()), "username", [], "any", false, false, false, 41), "vars", [], "any", false, false, false, 41), "errors", [], "any", false, false, false, 41));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 42
                yield "                                <p>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 42), "html", null, true);
                yield "</p>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            yield "                        </div>
                    ";
        }
        // line 46
        yield "                </div>

                <div class=\"form-group mb-3\">
                    ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 49, $this->source); })()), "age", [], "any", false, false, false, 49), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Âge"]);
        yield "
                    ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 50, $this->source); })()), "age", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrez votre âge"]]);
        yield "
                    ";
        // line 51
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 51, $this->source); })()), "age", [], "any", false, false, false, 51), "vars", [], "any", false, false, false, 51), "errors", [], "any", false, false, false, 51)) > 0)) {
            // line 52
            yield "                        <div class=\"invalid-feedback d-block\">
                            ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 53, $this->source); })()), "age", [], "any", false, false, false, 53), "vars", [], "any", false, false, false, 53), "errors", [], "any", false, false, false, 53));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 54
                yield "                                <p>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 54), "html", null, true);
                yield "</p>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            yield "                        </div>
                    ";
        }
        // line 58
        yield "                </div>

                ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 60, $this->source); })()), "_token", [], "any", false, false, false, 60), 'row');
        yield "
                ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 61, $this->source); })()), "recaptcha", [], "any", false, false, false, 61), 'row');
        yield "


                <button type=\"submit\" class=\"btn btn-light btn-lg w-100 mt-4\">S'inscrire</button>

                ";
        // line 66
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 66, $this->source); })()), 'form_end');
        yield "
            </form>
        </div>
    </div>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
    var form = document.querySelector('form');
    var recaptchaResponse = document.getElementById('registration_form_captcha'); // champ caché

    form.addEventListener('submit', function(e) {
        var recaptcha = grecaptcha.getResponse();
        if (!recaptcha) {
            e.preventDefault(); 
            alert('Veuillez cocher la case \"Je ne suis pas un robot\".');
        } else {
            recaptchaResponse.value = recaptcha; 
    });
});

    </script>


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
        return "registration/register.html.twig";
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
        return array (  248 => 66,  240 => 61,  236 => 60,  232 => 58,  228 => 56,  219 => 54,  215 => 53,  212 => 52,  210 => 51,  206 => 50,  202 => 49,  197 => 46,  193 => 44,  184 => 42,  180 => 41,  177 => 40,  175 => 39,  171 => 38,  167 => 37,  162 => 34,  158 => 32,  149 => 30,  145 => 29,  142 => 28,  140 => 27,  136 => 26,  132 => 25,  126 => 22,  122 => 20,  113 => 18,  108 => 17,  99 => 15,  94 => 14,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Inscription - Galerie Photo{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <div class=\"text-center text-white mb-4\">
            <h1 class=\"display-4 font-weight-bold\">Inscription</h1>
            <p class=\"lead\">Rejoignez-nous pour partager vos plus belles photos.</p>
        </div>

        <div class=\"bg-dark text-white p-5 rounded\">
            {# Affichage des messages flash d'erreurs ou de succès #}
            {% for message in app.flashes('error') %}
                <div class=\"alert alert-danger\">{{ message }}</div>
            {% endfor %}
            {% for message in app.flashes('success') %}
                <div class=\"alert alert-success\">{{ message }}</div>
            {% endfor %}

            <form method=\"post\">
                {{ form_start(registrationForm) }}

                <div class=\"form-group mb-3\">
                    {{ form_label(registrationForm.email, 'Email', {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(registrationForm.email, {'attr': {'class': 'form-control', 'placeholder': 'Entrez votre email'}}) }}
                    {% if registrationForm.email.vars.errors|length > 0 %}
                        <div class=\"invalid-feedback d-block\">
                            {% for error in registrationForm.email.vars.errors %}
                                <p>{{ error.message }}</p>
                            {% endfor %}
                        </div>
                    {% endif %}
                </div>

                <div class=\"form-group mb-3\">
                    {{ form_label(registrationForm.username, 'Nom d’utilisateur', {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(registrationForm.username, {'attr': {'class': 'form-control', 'placeholder': 'Choisissez un nom d’utilisateur'}}) }}
                    {% if registrationForm.username.vars.errors|length > 0 %}
                        <div class=\"invalid-feedback d-block\">
                            {% for error in registrationForm.username.vars.errors %}
                                <p>{{ error.message }}</p>
                            {% endfor %}
                        </div>
                    {% endif %}
                </div>

                <div class=\"form-group mb-3\">
                    {{ form_label(registrationForm.age, 'Âge', {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(registrationForm.age, {'attr': {'class': 'form-control', 'placeholder': 'Entrez votre âge'}}) }}
                    {% if registrationForm.age.vars.errors|length > 0 %}
                        <div class=\"invalid-feedback d-block\">
                            {% for error in registrationForm.age.vars.errors %}
                                <p>{{ error.message }}</p>
                            {% endfor %}
                        </div>
                    {% endif %}
                </div>

                {{ form_row(registrationForm._token) }}
                {{ form_row(registrationForm.recaptcha) }}


                <button type=\"submit\" class=\"btn btn-light btn-lg w-100 mt-4\">S'inscrire</button>

                {{ form_end(registrationForm) }}
            </form>
        </div>
    </div>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
    var form = document.querySelector('form');
    var recaptchaResponse = document.getElementById('registration_form_captcha'); // champ caché

    form.addEventListener('submit', function(e) {
        var recaptcha = grecaptcha.getResponse();
        if (!recaptcha) {
            e.preventDefault(); 
            alert('Veuillez cocher la case \"Je ne suis pas un robot\".');
        } else {
            recaptchaResponse.value = recaptcha; 
    });
});

    </script>


    <footer class=\"bg-dark text-white text-center py-4 mt-5\">
        <p>&copy; 2025 Galerie Photo. Tous droits réservés.</p>
    </footer>




   
{% endblock %}
", "registration/register.html.twig", "/opt/projet/Galerie/templates/registration/register.html.twig");
    }
}
