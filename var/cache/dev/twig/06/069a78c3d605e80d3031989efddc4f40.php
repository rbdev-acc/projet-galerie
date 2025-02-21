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

/* galerie/ajouter.html.twig */
class __TwigTemplate_140ce9b5108067f1232477d0f3f3889b extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "galerie/ajouter.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "galerie/ajouter.html.twig", 1);
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

        yield "Ajouter une photo - Galerie Photo";
        
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
        yield from         $this->loadTemplate("includes/navbar.html.twig", "galerie/ajouter.html.twig", 6)->unwrap()->yield($context);
        // line 7
        yield "

    <!-- Main content for adding photo -->
    <div class=\"container mt-5\">
        <h1 class=\"text-center text-white\">Ajouter une photo à la galerie</h1>

        <form method=\"POST\" enctype=\"multipart/form-data\" class=\"mt-4\">
            ";
        // line 14
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), 'form_start');
        yield "
            <div class=\"form-group\">
                ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "file", [], "any", false, false, false, 16), 'label', ["label_attr" => ["class" => "text-light"], "label" => "Sélectionner une photo"]);
        yield "
                ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "file", [], "any", false, false, false, 17), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "file", [], "any", false, false, false, 18), 'errors');
        yield "
            </div>

            <div class=\"form-group\">
                ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "orderNumber", [], "any", false, false, false, 22), 'label', ["label_attr" => ["class" => "text-light"], "label" => "Numéro d'ordre"]);
        yield "
                ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "orderNumber", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "orderNumber", [], "any", false, false, false, 24), 'errors');
        yield "
            </div>

            <button type=\"submit\" class=\"btn btn-primary\">Ajouter la photo</button>
            ";
        // line 28
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), 'form_end');
        yield "
        </form>
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
        return "galerie/ajouter.html.twig";
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
        return array (  132 => 28,  125 => 24,  121 => 23,  117 => 22,  110 => 18,  106 => 17,  102 => 16,  97 => 14,  88 => 7,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Ajouter une photo - Galerie Photo{% endblock %}

{% block body %}
    {% include 'includes/navbar.html.twig' %}


    <!-- Main content for adding photo -->
    <div class=\"container mt-5\">
        <h1 class=\"text-center text-white\">Ajouter une photo à la galerie</h1>

        <form method=\"POST\" enctype=\"multipart/form-data\" class=\"mt-4\">
            {{ form_start(form) }}
            <div class=\"form-group\">
                {{ form_label(form.file, 'Sélectionner une photo', {'label_attr': {'class': 'text-light'}}) }}
                {{ form_widget(form.file, {'attr': {'class': 'form-control'}}) }}
                {{ form_errors(form.file) }}
            </div>

            <div class=\"form-group\">
                {{ form_label(form.orderNumber, 'Numéro d\\'ordre', {'label_attr': {'class': 'text-light'}}) }}
                {{ form_widget(form.orderNumber, {'attr': {'class': 'form-control'}}) }}
                {{ form_errors(form.orderNumber) }}
            </div>

            <button type=\"submit\" class=\"btn btn-primary\">Ajouter la photo</button>
            {{ form_end(form) }}
        </form>
    </div>

    <footer class=\"bg-dark text-white text-center py-4 mt-5\">
        <p>&copy; 2025 Galerie Photo. Tous droits réservés.</p>
    </footer>

  
{% endblock %}
", "galerie/ajouter.html.twig", "/opt/projet/Galerie/templates/galerie/ajouter.html.twig");
    }
}
