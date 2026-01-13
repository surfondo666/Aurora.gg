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

/* components/_navbar.html.twig */
class __TwigTemplate_fa1cfb2586d217c7c839553efbe93118 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_navbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_navbar.html.twig"));

        // line 2
        yield "
";
        // line 3
        $context["route"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "request", [], "any", false, false, false, 3), "get", ["_route"], "method", false, false, false, 3);
        // line 4
        yield "
<nav class=\"fixed w-full z-50 bg-aurora-bg/95 backdrop-blur-md border-b border-aurora-border transition-all duration-300\" id=\"main-navbar\">
    <div class=\"container mx-auto px-6 h-20 flex justify-between items-center\">
        
        <a href=\"";
        // line 8
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"flex items-center gap-2 group\">
            <div class=\"relative\">
                <i class=\"fa-solid fa-crosshairs text-aurora-gold text-2xl group-hover:rotate-90 transition-transform duration-500\"></i>
                <div class=\"absolute inset-0 bg-aurora-gold blur-lg opacity-20 group-hover:opacity-40 transition-opacity\"></div>
            </div>
            <span class=\"text-2xl font-bold tracking-wider text-white\">AURORA<span class=\"text-aurora-gold\">.GG</span></span>
        </a>

        <div class=\"hidden md:flex items-center gap-8 text-sm font-bold uppercase tracking-wide\">
            <a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_servers");
        yield "\" class=\"transition-colors hover:text-aurora-gold ";
        yield ((((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 17, $this->source); })()) == "app_servers")) ? ("text-aurora-gold border-b-2 border-aurora-gold pb-1") : ("text-gray-400"));
        yield "\">
               <i class=\"fa-solid fa-server mr-1\"></i> Servidores
            </a>
            <a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_inventory");
        yield "\" class=\"transition-colors hover:text-aurora-gold ";
        yield ((((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 20, $this->source); })()) == "app_inventory")) ? ("text-aurora-gold border-b-2 border-aurora-gold pb-1") : ("text-gray-400"));
        yield "\">
               <i class=\"fa-solid fa-box-open mr-1\"></i> Inventario
            </a>
            <a href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_community");
        yield "\" class=\"transition-colors hover:text-aurora-gold ";
        yield ((((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 23, $this->source); })()) == "app_community")) ? ("text-aurora-gold border-b-2 border-aurora-gold pb-1") : ("text-gray-400"));
        yield "\">
               <i class=\"fa-solid fa-users mr-1\"></i> Comunidad
            </a>
            <a href=\"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_workshop");
        yield "\" class=\"transition-colors hover:text-aurora-gold ";
        yield ((((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 26, $this->source); })()) == "app_workshop")) ? ("text-aurora-gold border-b-2 border-aurora-gold pb-1") : ("text-gray-400"));
        yield "\">
               <i class=\"fa-solid fa-steam-symbol mr-1\"></i> Workshop
            </a>
        </div>

        <div class=\"flex items-center gap-4\">
            
            ";
        // line 33
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 34
            yield "                <div class=\"group relative z-50\">
                    <button class=\"flex items-center gap-3 focus:outline-none\">
                        <div class=\"text-right hidden lg:block\">
                            <div class=\"text-sm font-bold text-white\">";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "user", [], "any", false, false, false, 37), "email", [], "any", false, false, false, 37), "@"), 0, [], "array", false, false, false, 37), "html", null, true);
            yield "</div>
                            <div class=\"text-[10px] text-aurora-neon font-mono uppercase tracking-wider flex items-center justify-end gap-1\">
                                <span class=\"w-1.5 h-1.5 rounded-full bg-aurora-neon animate-pulse\"></span> Online
                            </div>
                        </div>
                        <img src=\"https://ui-avatars.com/api/?name=";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "user", [], "any", false, false, false, 42), "email", [], "any", false, false, false, 42), "html", null, true);
            yield "&background=FFD700&color=000&size=128\" 
                             class=\"w-10 h-10 rounded border-2 border-gray-700 group-hover:border-aurora-gold transition-colors shadow-lg\">
                    </button>
                    <div class=\"absolute right-0 mt-2 w-48 bg-aurora-card border border-aurora-border rounded-lg shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200\">
                        <div class=\"py-1\">
                            <a href=\"";
            // line 47
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
            yield "\" class=\"block px-4 py-2 text-sm text-gray-300 hover:text-aurora-gold\"><i class=\"fa-solid fa-gauge-high w-5\"></i> Admin</a>
                            <a href=\"";
            // line 48
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" class=\"block px-4 py-2 text-sm text-red-400 hover:bg-red-900/20\"><i class=\"fa-solid fa-power-off w-5\"></i> Salir</a>
                        </div>
                    </div>
                </div>
            ";
        } else {
            // line 53
            yield "                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"hidden md:flex bg-[#171a21] hover:bg-[#2a475e] text-[#b8b6b4] hover:text-white px-5 py-2 rounded-sm items-center gap-3 font-bold text-xs transition-colors duration-200 group shadow-md\">
                    <i class=\"fa-brands fa-steam text-2xl group-hover:text-white transition-colors\"></i>
                    <div class=\"flex flex-col items-start leading-tight\">
                        <span class=\"text-[10px] uppercase font-normal opacity-80\">Sign in with</span>
                        <span class=\"text-sm tracking-wide font-bold\">STEAM</span>
                    </div>
                </a>
            ";
        }
        // line 61
        yield "
            <button id=\"mobile-menu-btn\" class=\"md:hidden text-white text-2xl ml-2 p-2 focus:outline-none\">
                <i class=\"fa-solid fa-bars\"></i>
            </button>
        </div>
    </div>

    <div id=\"mobile-menu\" class=\"hidden md:hidden bg-aurora-card border-t border-aurora-border absolute w-full left-0 shadow-2xl\">
        <div class=\"flex flex-col p-4 space-y-4 font-bold text-gray-300\">
            <a href=\"";
        // line 70
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_servers");
        yield "\" class=\"hover:text-aurora-gold\"><i class=\"fa-solid fa-server w-6\"></i> Servidores</a>
            <a href=\"";
        // line 71
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_inventory");
        yield "\" class=\"hover:text-aurora-gold\"><i class=\"fa-solid fa-box-open w-6\"></i> Inventario</a>
            <a href=\"";
        // line 72
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_community");
        yield "\" class=\"hover:text-aurora-gold\"><i class=\"fa-solid fa-users w-6\"></i> Comunidad</a>
            <a href=\"";
        // line 73
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_workshop");
        yield "\" class=\"hover:text-aurora-gold\"><i class=\"fa-solid fa-steam-symbol w-6\"></i> Workshop</a>
            
            <div class=\"border-t border-aurora-border my-2\"></div>
            
            ";
        // line 77
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "user", [], "any", false, false, false, 77)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 78
            yield "                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"bg-[#171a21] text-white py-3 px-4 rounded-sm flex items-center justify-center gap-3 hover:bg-[#2a475e] transition-colors\">
                    <i class=\"fa-brands fa-steam text-xl\"></i> INICIAR CON STEAM
                </a>
            ";
        } else {
            // line 82
            yield "                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
            yield "\" class=\"hover:text-aurora-gold\"><i class=\"fa-solid fa-gauge-high w-6\"></i> Panel Admin</a>
                <a href=\"";
            // line 83
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" class=\"text-red-400\"><i class=\"fa-solid fa-power-off w-6\"></i> Cerrar Sesión</a>
            ";
        }
        // line 85
        yield "        </div>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');

        if (btn && menu) {
            btn.addEventListener('click', function() {
                menu.classList.toggle('hidden');
                const icon = btn.querySelector('i');
                if (menu.classList.contains('hidden')) {
                    icon.classList.remove('fa-xmark');
                    icon.classList.add('fa-bars');
                } else {
                    icon.classList.remove('fa-bars');
                    icon.classList.add('fa-xmark');
                }
            });
        }
    });
</script>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/_navbar.html.twig";
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
        return array (  204 => 85,  199 => 83,  194 => 82,  186 => 78,  184 => 77,  177 => 73,  173 => 72,  169 => 71,  165 => 70,  154 => 61,  142 => 53,  134 => 48,  130 => 47,  122 => 42,  114 => 37,  109 => 34,  107 => 33,  95 => 26,  87 => 23,  79 => 20,  71 => 17,  59 => 8,  53 => 4,  51 => 3,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/components/_navbar.html.twig #}

{% set route = app.request.get('_route') %}

<nav class=\"fixed w-full z-50 bg-aurora-bg/95 backdrop-blur-md border-b border-aurora-border transition-all duration-300\" id=\"main-navbar\">
    <div class=\"container mx-auto px-6 h-20 flex justify-between items-center\">
        
        <a href=\"{{ path('app_home') }}\" class=\"flex items-center gap-2 group\">
            <div class=\"relative\">
                <i class=\"fa-solid fa-crosshairs text-aurora-gold text-2xl group-hover:rotate-90 transition-transform duration-500\"></i>
                <div class=\"absolute inset-0 bg-aurora-gold blur-lg opacity-20 group-hover:opacity-40 transition-opacity\"></div>
            </div>
            <span class=\"text-2xl font-bold tracking-wider text-white\">AURORA<span class=\"text-aurora-gold\">.GG</span></span>
        </a>

        <div class=\"hidden md:flex items-center gap-8 text-sm font-bold uppercase tracking-wide\">
            <a href=\"{{ path('app_servers') }}\" class=\"transition-colors hover:text-aurora-gold {{ route == 'app_servers' ? 'text-aurora-gold border-b-2 border-aurora-gold pb-1' : 'text-gray-400' }}\">
               <i class=\"fa-solid fa-server mr-1\"></i> Servidores
            </a>
            <a href=\"{{ path('app_inventory') }}\" class=\"transition-colors hover:text-aurora-gold {{ route == 'app_inventory' ? 'text-aurora-gold border-b-2 border-aurora-gold pb-1' : 'text-gray-400' }}\">
               <i class=\"fa-solid fa-box-open mr-1\"></i> Inventario
            </a>
            <a href=\"{{ path('app_community') }}\" class=\"transition-colors hover:text-aurora-gold {{ route == 'app_community' ? 'text-aurora-gold border-b-2 border-aurora-gold pb-1' : 'text-gray-400' }}\">
               <i class=\"fa-solid fa-users mr-1\"></i> Comunidad
            </a>
            <a href=\"{{ path('app_workshop') }}\" class=\"transition-colors hover:text-aurora-gold {{ route == 'app_workshop' ? 'text-aurora-gold border-b-2 border-aurora-gold pb-1' : 'text-gray-400' }}\">
               <i class=\"fa-solid fa-steam-symbol mr-1\"></i> Workshop
            </a>
        </div>

        <div class=\"flex items-center gap-4\">
            
            {% if app.user %}
                <div class=\"group relative z-50\">
                    <button class=\"flex items-center gap-3 focus:outline-none\">
                        <div class=\"text-right hidden lg:block\">
                            <div class=\"text-sm font-bold text-white\">{{ app.user.email|split('@')[0] }}</div>
                            <div class=\"text-[10px] text-aurora-neon font-mono uppercase tracking-wider flex items-center justify-end gap-1\">
                                <span class=\"w-1.5 h-1.5 rounded-full bg-aurora-neon animate-pulse\"></span> Online
                            </div>
                        </div>
                        <img src=\"https://ui-avatars.com/api/?name={{ app.user.email }}&background=FFD700&color=000&size=128\" 
                             class=\"w-10 h-10 rounded border-2 border-gray-700 group-hover:border-aurora-gold transition-colors shadow-lg\">
                    </button>
                    <div class=\"absolute right-0 mt-2 w-48 bg-aurora-card border border-aurora-border rounded-lg shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200\">
                        <div class=\"py-1\">
                            <a href=\"{{ path('admin') }}\" class=\"block px-4 py-2 text-sm text-gray-300 hover:text-aurora-gold\"><i class=\"fa-solid fa-gauge-high w-5\"></i> Admin</a>
                            <a href=\"{{ path('app_logout') }}\" class=\"block px-4 py-2 text-sm text-red-400 hover:bg-red-900/20\"><i class=\"fa-solid fa-power-off w-5\"></i> Salir</a>
                        </div>
                    </div>
                </div>
            {% else %}
                <a href=\"{{ path('app_login') }}\" class=\"hidden md:flex bg-[#171a21] hover:bg-[#2a475e] text-[#b8b6b4] hover:text-white px-5 py-2 rounded-sm items-center gap-3 font-bold text-xs transition-colors duration-200 group shadow-md\">
                    <i class=\"fa-brands fa-steam text-2xl group-hover:text-white transition-colors\"></i>
                    <div class=\"flex flex-col items-start leading-tight\">
                        <span class=\"text-[10px] uppercase font-normal opacity-80\">Sign in with</span>
                        <span class=\"text-sm tracking-wide font-bold\">STEAM</span>
                    </div>
                </a>
            {% endif %}

            <button id=\"mobile-menu-btn\" class=\"md:hidden text-white text-2xl ml-2 p-2 focus:outline-none\">
                <i class=\"fa-solid fa-bars\"></i>
            </button>
        </div>
    </div>

    <div id=\"mobile-menu\" class=\"hidden md:hidden bg-aurora-card border-t border-aurora-border absolute w-full left-0 shadow-2xl\">
        <div class=\"flex flex-col p-4 space-y-4 font-bold text-gray-300\">
            <a href=\"{{ path('app_servers') }}\" class=\"hover:text-aurora-gold\"><i class=\"fa-solid fa-server w-6\"></i> Servidores</a>
            <a href=\"{{ path('app_inventory') }}\" class=\"hover:text-aurora-gold\"><i class=\"fa-solid fa-box-open w-6\"></i> Inventario</a>
            <a href=\"{{ path('app_community') }}\" class=\"hover:text-aurora-gold\"><i class=\"fa-solid fa-users w-6\"></i> Comunidad</a>
            <a href=\"{{ path('app_workshop') }}\" class=\"hover:text-aurora-gold\"><i class=\"fa-solid fa-steam-symbol w-6\"></i> Workshop</a>
            
            <div class=\"border-t border-aurora-border my-2\"></div>
            
            {% if not app.user %}
                <a href=\"{{ path('app_login') }}\" class=\"bg-[#171a21] text-white py-3 px-4 rounded-sm flex items-center justify-center gap-3 hover:bg-[#2a475e] transition-colors\">
                    <i class=\"fa-brands fa-steam text-xl\"></i> INICIAR CON STEAM
                </a>
            {% else %}
                <a href=\"{{ path('admin') }}\" class=\"hover:text-aurora-gold\"><i class=\"fa-solid fa-gauge-high w-6\"></i> Panel Admin</a>
                <a href=\"{{ path('app_logout') }}\" class=\"text-red-400\"><i class=\"fa-solid fa-power-off w-6\"></i> Cerrar Sesión</a>
            {% endif %}
        </div>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');

        if (btn && menu) {
            btn.addEventListener('click', function() {
                menu.classList.toggle('hidden');
                const icon = btn.querySelector('i');
                if (menu.classList.contains('hidden')) {
                    icon.classList.remove('fa-xmark');
                    icon.classList.add('fa-bars');
                } else {
                    icon.classList.remove('fa-bars');
                    icon.classList.add('fa-xmark');
                }
            });
        }
    });
</script>", "components/_navbar.html.twig", "/home/alumno/Documents/aurora-gg/templates/components/_navbar.html.twig");
    }
}
