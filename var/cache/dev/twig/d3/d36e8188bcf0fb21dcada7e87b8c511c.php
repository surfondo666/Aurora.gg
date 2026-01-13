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

/* security/register.html.twig */
class __TwigTemplate_b19dca7089747e4fa8caf7cdbe78312e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/register.html.twig"));

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

        yield "Registro | Aurora.gg";
        
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
            <h2 class=\"mt-2 text-3xl font-extrabold text-white uppercase tracking-wider\">
                CREAR CUENTA
            </h2>
            <p class=\"mt-2 text-sm text-gray-400\">
                Únete a la comunidad de CS2
            </p>
        </div>

        ";
        // line 20
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 20, $this->source); })()), 'form_start', ["attr" => ["class" => "mt-8 space-y-6"]]);
        yield "
            
            ";
        // line 22
        if ((($tmp = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 22, $this->source); })()), 'errors')) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 23
            yield "                <div class=\"bg-red-900/50 border border-red-500 text-red-200 px-4 py-3 rounded text-sm\">
                    ";
            // line 24
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 24, $this->source); })()), 'errors');
            yield "
                </div>
            ";
        }
        // line 27
        yield "
            <div class=\"space-y-4\">
                <div>
                    <label class=\"block text-xs font-bold text-gray-400 uppercase mb-1\">Email</label>
                    ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 31, $this->source); })()), "email", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "appearance-none rounded-sm relative block w-full px-3 py-2 border border-black bg-[#32353c] placeholder-gray-500 text-white focus:outline-none focus:ring-1 focus:ring-[#66c0f4] focus:border-[#66c0f4] focus:bg-[#393c44] transition-colors sm:text-sm shadow-inner", "placeholder" => "ejemplo@aurora.gg"]]);
        yield "
                    <div class=\"text-red-400 text-xs mt-1\">";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 32, $this->source); })()), "email", [], "any", false, false, false, 32), 'errors');
        yield "</div>
                </div>

                <div>
                    <label class=\"block text-xs font-bold text-gray-400 uppercase mb-1\">Contraseña</label>
                    ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 37, $this->source); })()), "plainPassword", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "appearance-none rounded-sm relative block w-full px-3 py-2 border border-black bg-[#32353c] placeholder-gray-500 text-white focus:outline-none focus:ring-1 focus:ring-[#66c0f4] focus:border-[#66c0f4] focus:bg-[#393c44] transition-colors sm:text-sm shadow-inner", "placeholder" => "******"]]);
        yield "
                    <div class=\"text-red-400 text-xs mt-1\">";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 38, $this->source); })()), "plainPassword", [], "any", false, false, false, 38), 'errors');
        yield "</div>
                </div>

                <div class=\"flex items-center gap-2\">
                    ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 42, $this->source); })()), "agreeTerms", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "h-4 w-4 text-[#66c0f4] focus:ring-[#66c0f4] border-gray-600 rounded bg-[#32353c]"]]);
        yield "
                    <span class=\"text-sm text-gray-400\">Acepto los <a href=\"#\" class=\"text-white hover:underline\">Términos de Servicio</a></span>
                </div>
            </div>

            <div>
                <button type=\"submit\" class=\"group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-bold rounded-sm text-black bg-aurora-gold hover:bg-yellow-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-aurora-gold transition-all shadow-lg transform hover:-translate-y-0.5\">
                    REGISTRARSE GRATIS
                </button>
            </div>

        ";
        // line 53
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 53, $this->source); })()), 'form_end');
        yield "
        
        <div class=\"text-center mt-4\">
            <p class=\"text-gray-500 text-xs\">
                ¿Ya tienes cuenta? 
                <a href=\"";
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"text-[#66c0f4] hover:text-white font-bold underline transition-colors\">Inicia sesión</a>
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
        return "security/register.html.twig";
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
        return array (  183 => 58,  175 => 53,  161 => 42,  154 => 38,  150 => 37,  142 => 32,  138 => 31,  132 => 27,  126 => 24,  123 => 23,  121 => 22,  116 => 20,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Registro | Aurora.gg{% endblock %}

{% block body %}
<div class=\"min-h-[85vh] flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8 relative\">
    <div class=\"absolute inset-0 bg-[url('https://cdn.akamai.steamstatic.com/steamcommunity/public/images/apps/730/2f66c624647970d24e12e88241473132646c0752.jpg')] bg-cover bg-center opacity-10 blur-sm pointer-events-none\"></div>

    <div class=\"max-w-md w-full space-y-8 relative z-10 bg-[#171a21] p-8 rounded shadow-[0_0_20px_rgba(0,0,0,0.5)] border border-[#2a475e]\">
        
        <div class=\"text-center\">
            <h2 class=\"mt-2 text-3xl font-extrabold text-white uppercase tracking-wider\">
                CREAR CUENTA
            </h2>
            <p class=\"mt-2 text-sm text-gray-400\">
                Únete a la comunidad de CS2
            </p>
        </div>

        {{ form_start(registrationForm, {'attr': {'class': 'mt-8 space-y-6'}}) }}
            
            {% if form_errors(registrationForm) %}
                <div class=\"bg-red-900/50 border border-red-500 text-red-200 px-4 py-3 rounded text-sm\">
                    {{ form_errors(registrationForm) }}
                </div>
            {% endif %}

            <div class=\"space-y-4\">
                <div>
                    <label class=\"block text-xs font-bold text-gray-400 uppercase mb-1\">Email</label>
                    {{ form_widget(registrationForm.email, {'attr': {'class': 'appearance-none rounded-sm relative block w-full px-3 py-2 border border-black bg-[#32353c] placeholder-gray-500 text-white focus:outline-none focus:ring-1 focus:ring-[#66c0f4] focus:border-[#66c0f4] focus:bg-[#393c44] transition-colors sm:text-sm shadow-inner', 'placeholder': 'ejemplo@aurora.gg'}}) }}
                    <div class=\"text-red-400 text-xs mt-1\">{{ form_errors(registrationForm.email) }}</div>
                </div>

                <div>
                    <label class=\"block text-xs font-bold text-gray-400 uppercase mb-1\">Contraseña</label>
                    {{ form_widget(registrationForm.plainPassword, {'attr': {'class': 'appearance-none rounded-sm relative block w-full px-3 py-2 border border-black bg-[#32353c] placeholder-gray-500 text-white focus:outline-none focus:ring-1 focus:ring-[#66c0f4] focus:border-[#66c0f4] focus:bg-[#393c44] transition-colors sm:text-sm shadow-inner', 'placeholder': '******'}}) }}
                    <div class=\"text-red-400 text-xs mt-1\">{{ form_errors(registrationForm.plainPassword) }}</div>
                </div>

                <div class=\"flex items-center gap-2\">
                    {{ form_widget(registrationForm.agreeTerms, {'attr': {'class': 'h-4 w-4 text-[#66c0f4] focus:ring-[#66c0f4] border-gray-600 rounded bg-[#32353c]'}}) }}
                    <span class=\"text-sm text-gray-400\">Acepto los <a href=\"#\" class=\"text-white hover:underline\">Términos de Servicio</a></span>
                </div>
            </div>

            <div>
                <button type=\"submit\" class=\"group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-bold rounded-sm text-black bg-aurora-gold hover:bg-yellow-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-aurora-gold transition-all shadow-lg transform hover:-translate-y-0.5\">
                    REGISTRARSE GRATIS
                </button>
            </div>

        {{ form_end(registrationForm) }}
        
        <div class=\"text-center mt-4\">
            <p class=\"text-gray-500 text-xs\">
                ¿Ya tienes cuenta? 
                <a href=\"{{ path('app_login') }}\" class=\"text-[#66c0f4] hover:text-white font-bold underline transition-colors\">Inicia sesión</a>
            </p>
        </div>
    </div>
</div>
{% endblock %}", "security/register.html.twig", "/home/alumno/Documents/aurora-gg/templates/security/register.html.twig");
    }
}
