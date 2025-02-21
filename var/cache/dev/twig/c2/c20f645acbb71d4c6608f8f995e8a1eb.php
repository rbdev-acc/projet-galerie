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

/* @Recaptcha/form/recaptcha.html.twig */
class __TwigTemplate_512b248e3053d0afc2d50edbe32d7d48 extends Template
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

        $this->parent = false;

        $this->blocks = [
            'recaptcha_widget' => [$this, 'block_recaptcha_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Recaptcha/form/recaptcha.html.twig"));

        // line 2
        yield "
";
        // line 3
        yield from $this->unwrap()->yieldBlock('recaptcha_widget', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_recaptcha_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "recaptcha_widget"));

        // line 4
        yield "    ";
        // line 5
        yield "        <div id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 5, $this->source); })()), "html", null, true);
        yield "\" data-toggle=\"recaptcha\" data-type=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 5, $this->source); })()), "html", null, true);
        yield "\">  
        </div>
        <script type=\"text/javascript\">
        /**
         * The callback function executed
         * once all the Google dependencies have loaded
         */
        function onGoogleReCaptchaApiLoad() {
            var widgets = document.querySelectorAll('[data-toggle=\"recaptcha\"]');

            for (var i = 0; i < widgets.length; i++) {
                renderReCaptcha(widgets[i]);
            }
        }

        function renderReCaptcha(widget) {
            var form = widget.closest('form');
            var widgetType = widget.getAttribute('data-type');
            
            var widgetParameters = {
                'sitekey': '";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["google_site_key"]) || array_key_exists("google_site_key", $context) ? $context["google_site_key"] : (function () { throw new RuntimeError('Variable "google_site_key" does not exist.', 25, $this->source); })()), "html", null, true);
        yield "'
            };

            if (widgetType == 'invisible') {
                widgetParameters['callback'] = function () {
                    form.submit()
                };
                widgetParameters['size'] = \"invisible\";
            }

            var widgetId = grecaptcha.render(widget, widgetParameters);
            if (widgetType == 'invisible') {
                bindChallengeToSubmitButtons(form, widgetId);
            }
        }
        function bindChallengeToSubmitButtons(form, reCaptchaId) {
            getSubmitButtons(form).forEach(function (button) {
                button.addEventListener('click', function (e) {
                    e.preventDefault();
                    grecaptcha.execute(reCaptchaId);
                });
            });
        }
        function getSubmitButtons(form) {
            var buttons = form.querySelectorAll('button, input');
            var submitButtons = [];

            for (var i= 0; i < buttons.length; i++) {
                var button = buttons[i];
                if (button.getAttribute('type') == 'submit') {
                    submitButtons.push(button);
                }
            }

            return submitButtons;
        }
    </script>
    <script type=\"text/javascript\" src=\"https://www.google.com/recaptcha/api.js?onload=onGoogleReCaptchaApiLoad&render=explicit&hl=";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "request", [], "any", false, false, false, 62), "locale", [], "any", false, false, false, 62), "html", null, true);
        yield "\" async defer></script>

    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Recaptcha/form/recaptcha.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  134 => 62,  94 => 25,  68 => 5,  66 => 4,  49 => 3,  46 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @Recaptcha/form/recaptcha.html.twig #}

{% block recaptcha_widget %}
    {#% apply spaceless %#}
        <div id=\"{{ id }}\" data-toggle=\"recaptcha\" data-type=\"{{ type }}\">  
        </div>
        <script type=\"text/javascript\">
        /**
         * The callback function executed
         * once all the Google dependencies have loaded
         */
        function onGoogleReCaptchaApiLoad() {
            var widgets = document.querySelectorAll('[data-toggle=\"recaptcha\"]');

            for (var i = 0; i < widgets.length; i++) {
                renderReCaptcha(widgets[i]);
            }
        }

        function renderReCaptcha(widget) {
            var form = widget.closest('form');
            var widgetType = widget.getAttribute('data-type');
            
            var widgetParameters = {
                'sitekey': '{{ google_site_key }}'
            };

            if (widgetType == 'invisible') {
                widgetParameters['callback'] = function () {
                    form.submit()
                };
                widgetParameters['size'] = \"invisible\";
            }

            var widgetId = grecaptcha.render(widget, widgetParameters);
            if (widgetType == 'invisible') {
                bindChallengeToSubmitButtons(form, widgetId);
            }
        }
        function bindChallengeToSubmitButtons(form, reCaptchaId) {
            getSubmitButtons(form).forEach(function (button) {
                button.addEventListener('click', function (e) {
                    e.preventDefault();
                    grecaptcha.execute(reCaptchaId);
                });
            });
        }
        function getSubmitButtons(form) {
            var buttons = form.querySelectorAll('button, input');
            var submitButtons = [];

            for (var i= 0; i < buttons.length; i++) {
                var button = buttons[i];
                if (button.getAttribute('type') == 'submit') {
                    submitButtons.push(button);
                }
            }

            return submitButtons;
        }
    </script>
    <script type=\"text/javascript\" src=\"https://www.google.com/recaptcha/api.js?onload=onGoogleReCaptchaApiLoad&render=explicit&hl={{app.request.locale}}\" async defer></script>

    {#% endapply %#}
{% endblock %}
", "@Recaptcha/form/recaptcha.html.twig", "/opt/projet/Galerie/vendor/victor-prdh/recaptcha-bundle/src/Resources/views/form/recaptcha.html.twig");
    }
}
