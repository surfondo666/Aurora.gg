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
class __TwigTemplate_8539c07b73c34a546b79aea9789c159f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Iniciar Sesión | Aurora.gg";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<div class=\"min-h-[85vh] flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8 relative\">
    <div class=\"absolute inset-0 bg-[url('https://cdn.akamai.steamstatic.com/steamcommunity/public/images/apps/730/2f66c624647970d24e12e88241473132646c0752.jpg')] bg-cover bg-center opacity-10 blur-sm pointer-events-none\"></div>

    <div class=\"max-w-md w-full space-y-8 relative z-10 bg-[#171a21] p-8 rounded shadow-[0_0_20px_rgba(0,0,0,0.5)] border border-[#2a475e]\">
        
        <div class=\"text-center\">
            <h2 class=\"mt-2 text-3xl font-extrabold text-[#66c0f4] uppercase tracking-wider\">
                INICIAR SESIÓN
            </h2>
            <p class=\"mt-2 text-sm text-gray-400\">
                Accede a tu inventario y servidores
            </p>
        </div>

        <form class=\"mt-8 space-y-6\" method=\"post\">
            ";
        // line 21
        if ((($tmp = (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 21, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 22
            yield "                <div class=\"bg-red-900/50 border border-red-500 text-red-200 px-4 py-3 rounded text-sm flex items-center gap-2\">
                    <i class=\"fa-solid fa-circle-exclamation\"></i>
                    ";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 24, $this->source); })()), "messageKey", [], "any", false, false, false, 24), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 24, $this->source); })()), "messageData", [], "any", false, false, false, 24), "security"), "html", null, true);
            yield "
                </div>
            ";
        }
        // line 27
        yield "
            ";
        // line 28
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 29
            yield "                <div class=\"text-center text-gray-300\">
                    Ya estás conectado como ";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30), "userIdentifier", [], "any", false, false, false, 30), "html", null, true);
            yield ", <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" class=\"text-[#66c0f4] hover:underline\">Cerrar sesión</a>
                </div>
            ";
        }
        // line 33
        yield "
            <div class=\"space-y-4\">
                <div>
                    <label for=\"inputEmail\" class=\"block text-xs font-bold text-gray-400 uppercase mb-1\">Nombre de cuenta o Email</label>
                    <input type=\"email\" value=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 37, $this->source); })()), "html", null, true);
        yield "\" name=\"email\" id=\"inputEmail\" 
                           class=\"appearance-none rounded-sm relative block w-full px-3 py-2 border border-black bg-[#32353c] placeholder-gray-500 text-white focus:outline-none focus:ring-1 focus:ring-[#66c0f4] focus:border-[#66c0f4] focus:bg-[#393c44] transition-colors sm:text-sm shadow-inner\" 
                           placeholder=\"tu@email.com\" autocomplete=\"email\" required autofocus>
                </div>
                <div>
                    <label for=\"inputPassword\" class=\"block text-xs font-bold text-gray-400 uppercase mb-1\">Contraseña</label>
                    <input type=\"password\" name=\"password\" id=\"inputPassword\" 
                           class=\"appearance-none rounded-sm relative block w-full px-3 py-2 border border-black bg-[#32353c] placeholder-gray-500 text-white focus:outline-none focus:ring-1 focus:ring-[#66c0f4] focus:border-[#66c0f4] focus:bg-[#393c44] transition-colors sm:text-sm shadow-inner\" 
                           autocomplete=\"current-password\" required>
                </div>
            </div>

            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">

            <div class=\"flex items-center justify-between\">
                <div class=\"flex items-center\">
                    <input id=\"remember_me\" name=\"_remember_me\" type=\"checkbox\" class=\"h-4 w-4 text-[#66c0f4] focus:ring-[#66c0f4] border-gray-600 rounded bg-[#32353c]\">
                    <label for=\"remember_me\" class=\"ml-2 block text-sm text-gray-400\">
                        Recordarme
                    </label>
                </div>

                <div class=\"text-sm\">
                    <a href=\"#\" class=\"font-medium text-[#b8b6b4] hover:text-white transition-colors\">
                        ¿Olvidaste tu contraseña?
                    </a>
                </div>
            </div>

            <div>
                <button type=\"submit\" class=\"group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-bold rounded-sm text-white bg-gradient-to-r from-[#2a475e] to-[#21384b] hover:from-[#375a76] hover:to-[#2a475e] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#66c0f4] transition-all shadow-lg\">
                    INICIAR SESIÓN
                </button>
            </div>
        </form>
        
        <div class=\"text-center mt-4\">
            <p class=\"text-gray-500 text-xs\">
                ¿Nuevo en Aurora.gg? 
                <a href=\"";
        // line 76
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\" class=\"text-white hover:text-[#66c0f4] font-bold underline transition-colors\">Crear una cuenta</a>
            </p>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  196 => 76,  166 => 49,  151 => 37,  145 => 33,  137 => 30,  134 => 29,  132 => 28,  129 => 27,  123 => 24,  119 => 22,  117 => 21,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Iniciar Sesión | Aurora.gg{% endblock %}

{% block body %}
<div class=\"min-h-[85vh] flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8 relative\">
    <div class=\"absolute inset-0 bg-[url('https://cdn.akamai.steamstatic.com/steamcommunity/public/images/apps/730/2f66c624647970d24e12e88241473132646c0752.jpg')] bg-cover bg-center opacity-10 blur-sm pointer-events-none\"></div>

    <div class=\"max-w-md w-full space-y-8 relative z-10 bg-[#171a21] p-8 rounded shadow-[0_0_20px_rgba(0,0,0,0.5)] border border-[#2a475e]\">
        
        <div class=\"text-center\">
            <h2 class=\"mt-2 text-3xl font-extrabold text-[#66c0f4] uppercase tracking-wider\">
                INICIAR SESIÓN
            </h2>
            <p class=\"mt-2 text-sm text-gray-400\">
                Accede a tu inventario y servidores
            </p>
        </div>

        <form class=\"mt-8 space-y-6\" method=\"post\">
            {% if error %}
                <div class=\"bg-red-900/50 border border-red-500 text-red-200 px-4 py-3 rounded text-sm flex items-center gap-2\">
                    <i class=\"fa-solid fa-circle-exclamation\"></i>
                    {{ error.messageKey|trans(error.messageData, 'security') }}
                </div>
            {% endif %}

            {% if app.user %}
                <div class=\"text-center text-gray-300\">
                    Ya estás conectado como {{ app.user.userIdentifier }}, <a href=\"{{ path('app_logout') }}\" class=\"text-[#66c0f4] hover:underline\">Cerrar sesión</a>
                </div>
            {% endif %}

            <div class=\"space-y-4\">
                <div>
                    <label for=\"inputEmail\" class=\"block text-xs font-bold text-gray-400 uppercase mb-1\">Nombre de cuenta o Email</label>
                    <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" 
                           class=\"appearance-none rounded-sm relative block w-full px-3 py-2 border border-black bg-[#32353c] placeholder-gray-500 text-white focus:outline-none focus:ring-1 focus:ring-[#66c0f4] focus:border-[#66c0f4] focus:bg-[#393c44] transition-colors sm:text-sm shadow-inner\" 
                           placeholder=\"tu@email.com\" autocomplete=\"email\" required autofocus>
                </div>
                <div>
                    <label for=\"inputPassword\" class=\"block text-xs font-bold text-gray-400 uppercase mb-1\">Contraseña</label>
                    <input type=\"password\" name=\"password\" id=\"inputPassword\" 
                           class=\"appearance-none rounded-sm relative block w-full px-3 py-2 border border-black bg-[#32353c] placeholder-gray-500 text-white focus:outline-none focus:ring-1 focus:ring-[#66c0f4] focus:border-[#66c0f4] focus:bg-[#393c44] transition-colors sm:text-sm shadow-inner\" 
                           autocomplete=\"current-password\" required>
                </div>
            </div>

            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

            <div class=\"flex items-center justify-between\">
                <div class=\"flex items-center\">
                    <input id=\"remember_me\" name=\"_remember_me\" type=\"checkbox\" class=\"h-4 w-4 text-[#66c0f4] focus:ring-[#66c0f4] border-gray-600 rounded bg-[#32353c]\">
                    <label for=\"remember_me\" class=\"ml-2 block text-sm text-gray-400\">
                        Recordarme
                    </label>
                </div>

                <div class=\"text-sm\">
                    <a href=\"#\" class=\"font-medium text-[#b8b6b4] hover:text-white transition-colors\">
                        ¿Olvidaste tu contraseña?
                    </a>
                </div>
            </div>

            <div>
                <button type=\"submit\" class=\"group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-bold rounded-sm text-white bg-gradient-to-r from-[#2a475e] to-[#21384b] hover:from-[#375a76] hover:to-[#2a475e] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#66c0f4] transition-all shadow-lg\">
                    INICIAR SESIÓN
                </button>
            </div>
        </form>
        
        <div class=\"text-center mt-4\">
            <p class=\"text-gray-500 text-xs\">
                ¿Nuevo en Aurora.gg? 
                <a href=\"{{ path('app_register') }}\" class=\"text-white hover:text-[#66c0f4] font-bold underline transition-colors\">Crear una cuenta</a>
            </p>
        </div>
    </div>
</div>
{% endblock %}", "security/login.html.twig", "/home/alumno/Documents/aurora-gg/templates/security/login.html.twig");
    }
}
