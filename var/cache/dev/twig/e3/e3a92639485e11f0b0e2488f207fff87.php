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

/* server/index.html.twig */
class __TwigTemplate_ac0651c8699df5dceea3f9879308801d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "server/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "server/index.html.twig"));

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

        yield "Server Browser | Aurora.gg";
        
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
        yield "<div class=\"min-h-screen bg-black py-10 text-gray-300\">
    <div class=\"container mx-auto px-4 md:px-6\">
        
        <div class=\"flex justify-between items-end mb-8 border-b border-white/10 pb-6\">
            <div>
                <h1 class=\"text-3xl font-black text-white mb-1 uppercase tracking-wider\">Server <span class=\"text-aurora-gold\">Browser</span></h1>
                <p class=\"text-gray-500 text-sm font-mono\">Estado en tiempo real</p>
            </div>
            
            ";
        // line 15
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 16
            yield "                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_server_new");
            yield "\" class=\"bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded font-bold text-xs uppercase flex items-center gap-2\">
                    <i class=\"fa-solid fa-lock\"></i> Zona Admin
                </a>
            ";
        }
        // line 20
        yield "        </div>

        <div class=\"flex flex-col gap-4\">
            
            <div class=\"hidden md:grid grid-cols-12 gap-4 px-6 text-xs font-bold text-gray-500 uppercase tracking-widest mb-2\">
                <div class=\"col-span-5\">Servidor</div>
                <div class=\"col-span-3\">Mapa</div>
                <div class=\"col-span-2\">Estado</div>
                <div class=\"col-span-1 text-center\">Ping</div>
                <div class=\"col-span-1 text-right\"></div>
            </div>

            ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["servers"]) || array_key_exists("servers", $context) ? $context["servers"] : (function () { throw new RuntimeError('Variable "servers" does not exist.', 32, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["server"]) {
            // line 33
            yield "                <div id=\"server-card-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["server"], "id", [], "any", false, false, false, 33), "html", null, true);
            yield "\" class=\"group bg-zinc-900/40 border border-white/5 rounded-lg p-4 md:p-0 md:h-20 grid grid-cols-1 md:grid-cols-12 gap-4 items-center relative overflow-hidden transition-all duration-500\">
                    
                    <div id=\"status-line-";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["server"], "id", [], "any", false, false, false, 35), "html", null, true);
            yield "\" class=\"absolute left-0 top-0 bottom-0 w-1 bg-gray-600\"></div>

                    <div class=\"col-span-5 md:pl-6\">
                        <h3 class=\"text-white font-bold text-lg leading-tight\">";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["server"], "name", [], "any", false, false, false, 38), "html", null, true);
            yield "</h3>
                        <div class=\"flex items-center gap-2 mt-1\">
                            <code class=\"text-xs text-zinc-500 font-mono bg-black/30 px-2 py-0.5 rounded cursor-pointer hover:text-white transition-colors\" onclick=\"copyIp('";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["server"], "ipAdress", [], "any", false, false, false, 40), "html", null, true);
            yield ":";
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["server"], "port", [], "any", true, true, false, 40) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["server"], "port", [], "any", false, false, false, 40)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["server"], "port", [], "any", false, false, false, 40), "html", null, true)) : (27015));
            yield "')\">
                                ";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["server"], "ipAdress", [], "any", false, false, false, 41), "html", null, true);
            yield ":";
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["server"], "port", [], "any", true, true, false, 41) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["server"], "port", [], "any", false, false, false, 41)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["server"], "port", [], "any", false, false, false, 41), "html", null, true)) : (27015));
            yield "
                            </code>
                        </div>
                    </div>

                    <div class=\"col-span-3 flex items-center gap-2 text-sm text-gray-400\">
                        <i class=\"fa-solid fa-map text-zinc-700\"></i>
                        <span id=\"map-";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["server"], "id", [], "any", false, false, false, 48), "html", null, true);
            yield "\" class=\"italic text-zinc-600\">Conectando...</span>
                    </div>

                    <div class=\"col-span-2\">
                        <div class=\"flex justify-between text-xs font-bold mb-1\">
                            <span id=\"players-text-";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["server"], "id", [], "any", false, false, false, 53), "html", null, true);
            yield "\" class=\"text-zinc-500\">--/--</span>
                        </div>
                        <div class=\"w-full h-1.5 bg-black rounded-full overflow-hidden\">
                            <div id=\"players-bar-";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["server"], "id", [], "any", false, false, false, 56), "html", null, true);
            yield "\" class=\"h-full bg-zinc-700 w-0 transition-all duration-1000\"></div>
                        </div>
                    </div>

                    <div class=\"col-span-1 text-center\">
                        <div class=\"flex flex-col items-center\">
                            <i id=\"ping-icon-";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["server"], "id", [], "any", false, false, false, 62), "html", null, true);
            yield "\" class=\"fa-solid fa-signal text-zinc-700 text-xs mb-1\"></i>
                            <span id=\"ping-text-";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["server"], "id", [], "any", false, false, false, 63), "html", null, true);
            yield "\" class=\"text-xs font-mono font-bold text-zinc-700\">...</span>
                        </div>
                    </div>
                    <a href=\"steam://connect/";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["server"], "ipAdress", [], "any", false, false, false, 66), "html", null, true);
            yield ":";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["server"], "port", [], "any", false, false, false, 66), "html", null, true);
            yield "\" 
                    class=\"group flex h-9 w-9 items-center justify-center rounded-full border border-white/20 bg-transparent text-white transition-all duration-300 hover:border-yellow-500 hover:text-yellow-500 hover:shadow-[0_0_10px_rgba(234,179,8,0.2)] hover:scale-110\">
                        <i class=\"fa-solid fa-play pl-0.5 text-xs\"></i>
                    </a>

                    <div class=\"col-span-1 flex justify-end gap-3 md:pr-6 z-10\">
                        ";
            // line 72
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 73
                yield "                            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_server_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["server"], "id", [], "any", false, false, false, 73)]), "html", null, true);
                yield "\" class=\"text-zinc-600 hover:text-white\"><i class=\"fa-solid fa-pen\"></i></a>
                            <a href=\"";
                // line 74
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_server_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["server"], "id", [], "any", false, false, false, 74)]), "html", null, true);
                yield "\" class=\"text-zinc-600 hover:text-red-500\" onclick=\"return confirm('¿Borrar?')\"><i class=\"fa-solid fa-trash\"></i></a>
                        ";
            }
            // line 76
            yield "                         <button onclick=\"copyIp('";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["server"], "ipAdress", [], "any", false, false, false, 76), "html", null, true);
            yield ":";
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["server"], "port", [], "any", true, true, false, 76) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["server"], "port", [], "any", false, false, false, 76)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["server"], "port", [], "any", false, false, false, 76), "html", null, true)) : (27015));
            yield "')\" class=\"text-zinc-500 hover:text-aurora-gold md:hidden\"><i class=\"fa-regular fa-copy\"></i></button>
                    </div>
                </div>

                <script>
                    document.addEventListener('DOMContentLoaded', () => {
                        fetchServerStatus(";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["server"], "id", [], "any", false, false, false, 82), "html", null, true);
            yield ");
                    });
                </script>
            ";
            $context['_iterated'] = true;
        }
        // line 85
        if (!$context['_iterated']) {
            // line 86
            yield "                <div class=\"text-center py-12 border border-dashed border-zinc-800 rounded text-zinc-600\">
                    No hay servidores configurados.
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['server'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        yield "        </div>
    </div>
</div>

<script>
    function copyIp(ip) {
        navigator.clipboard.writeText(ip);
        alert('IP Copiada: ' + ip);
    }

    function fetchServerStatus(id) {
        // Llamamos a nuestra API interna de Symfony
        fetch(`/servers/api/status/\${id}`)
            .then(response => response.json())
            .then(data => {
                const mapEl = document.getElementById(`map-\${id}`);
                const playersTextEl = document.getElementById(`players-text-\${id}`);
                const playersBarEl = document.getElementById(`players-bar-\${id}`);
                const pingTextEl = document.getElementById(`ping-text-\${id}`);
                const pingIconEl = document.getElementById(`ping-icon-\${id}`);
                const statusLine = document.getElementById(`status-line-\${id}`);
                const card = document.getElementById(`server-card-\${id}`);

                if (data.online) {
                    // SI ESTÁ ONLINE
                    statusLine.classList.replace('bg-gray-600', 'bg-green-500');
                    card.classList.add('hover:border-green-500/50');
                    
                    // Mapa
                    mapEl.innerText = data.map;
                    mapEl.classList.remove('italic', 'text-zinc-600');
                    mapEl.classList.add('text-white');

                    // Jugadores
                    playersTextEl.innerHTML = `<span class=\"text-white\">\${data.players}</span> <span class=\"text-zinc-500\">/ \${data.max_players}</span>`;
                    
                    // Barra de progreso
                    const percentage = (data.players / data.max_players) * 100;
                    playersBarEl.style.width = `\${percentage}%`;
                    playersBarEl.classList.replace('bg-zinc-700', 'bg-gradient-to-r');
                    playersBarEl.classList.add('from-green-500', 'to-green-400');

                    // Ping
                    pingTextEl.innerText = data.ping + 'ms';
                    pingIconEl.classList.remove('text-zinc-700');
                    pingTextEl.classList.remove('text-zinc-700');
                    
                    if(data.ping < 50) {
                        pingIconEl.classList.add('text-green-500');
                        pingTextEl.classList.add('text-green-500');
                    } else if(data.ping < 100) {
                        pingIconEl.classList.add('text-yellow-500');
                        pingTextEl.classList.add('text-yellow-500');
                    } else {
                        pingIconEl.classList.add('text-red-500');
                        pingTextEl.classList.add('text-red-500');
                    }

                } else {
                    // SI ESTÁ OFFLINE
                    statusLine.classList.replace('bg-gray-600', 'bg-red-600');
                    mapEl.innerText = \"Offline\";
                    mapEl.classList.add('text-red-500');
                    playersTextEl.innerText = \"0 / 0\";
                }
            })
            .catch(error => {
                console.error('Error fetching server status:', error);
            });
    }
</script>
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
        return "server/index.html.twig";
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
        return array (  262 => 90,  253 => 86,  251 => 85,  243 => 82,  231 => 76,  226 => 74,  221 => 73,  219 => 72,  208 => 66,  202 => 63,  198 => 62,  189 => 56,  183 => 53,  175 => 48,  163 => 41,  157 => 40,  152 => 38,  146 => 35,  140 => 33,  135 => 32,  121 => 20,  113 => 16,  111 => 15,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Server Browser | Aurora.gg{% endblock %}

{% block body %}
<div class=\"min-h-screen bg-black py-10 text-gray-300\">
    <div class=\"container mx-auto px-4 md:px-6\">
        
        <div class=\"flex justify-between items-end mb-8 border-b border-white/10 pb-6\">
            <div>
                <h1 class=\"text-3xl font-black text-white mb-1 uppercase tracking-wider\">Server <span class=\"text-aurora-gold\">Browser</span></h1>
                <p class=\"text-gray-500 text-sm font-mono\">Estado en tiempo real</p>
            </div>
            
            {% if is_granted('ROLE_ADMIN') %}
                <a href=\"{{ path('app_server_new') }}\" class=\"bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded font-bold text-xs uppercase flex items-center gap-2\">
                    <i class=\"fa-solid fa-lock\"></i> Zona Admin
                </a>
            {% endif %}
        </div>

        <div class=\"flex flex-col gap-4\">
            
            <div class=\"hidden md:grid grid-cols-12 gap-4 px-6 text-xs font-bold text-gray-500 uppercase tracking-widest mb-2\">
                <div class=\"col-span-5\">Servidor</div>
                <div class=\"col-span-3\">Mapa</div>
                <div class=\"col-span-2\">Estado</div>
                <div class=\"col-span-1 text-center\">Ping</div>
                <div class=\"col-span-1 text-right\"></div>
            </div>

            {% for server in servers %}
                <div id=\"server-card-{{ server.id }}\" class=\"group bg-zinc-900/40 border border-white/5 rounded-lg p-4 md:p-0 md:h-20 grid grid-cols-1 md:grid-cols-12 gap-4 items-center relative overflow-hidden transition-all duration-500\">
                    
                    <div id=\"status-line-{{ server.id }}\" class=\"absolute left-0 top-0 bottom-0 w-1 bg-gray-600\"></div>

                    <div class=\"col-span-5 md:pl-6\">
                        <h3 class=\"text-white font-bold text-lg leading-tight\">{{ server.name }}</h3>
                        <div class=\"flex items-center gap-2 mt-1\">
                            <code class=\"text-xs text-zinc-500 font-mono bg-black/30 px-2 py-0.5 rounded cursor-pointer hover:text-white transition-colors\" onclick=\"copyIp('{{ server.ipAdress }}:{{ server.port ?? 27015 }}')\">
                                {{ server.ipAdress }}:{{ server.port ?? 27015 }}
                            </code>
                        </div>
                    </div>

                    <div class=\"col-span-3 flex items-center gap-2 text-sm text-gray-400\">
                        <i class=\"fa-solid fa-map text-zinc-700\"></i>
                        <span id=\"map-{{ server.id }}\" class=\"italic text-zinc-600\">Conectando...</span>
                    </div>

                    <div class=\"col-span-2\">
                        <div class=\"flex justify-between text-xs font-bold mb-1\">
                            <span id=\"players-text-{{ server.id }}\" class=\"text-zinc-500\">--/--</span>
                        </div>
                        <div class=\"w-full h-1.5 bg-black rounded-full overflow-hidden\">
                            <div id=\"players-bar-{{ server.id }}\" class=\"h-full bg-zinc-700 w-0 transition-all duration-1000\"></div>
                        </div>
                    </div>

                    <div class=\"col-span-1 text-center\">
                        <div class=\"flex flex-col items-center\">
                            <i id=\"ping-icon-{{ server.id }}\" class=\"fa-solid fa-signal text-zinc-700 text-xs mb-1\"></i>
                            <span id=\"ping-text-{{ server.id }}\" class=\"text-xs font-mono font-bold text-zinc-700\">...</span>
                        </div>
                    </div>
                    <a href=\"steam://connect/{{ server.ipAdress }}:{{ server.port }}\" 
                    class=\"group flex h-9 w-9 items-center justify-center rounded-full border border-white/20 bg-transparent text-white transition-all duration-300 hover:border-yellow-500 hover:text-yellow-500 hover:shadow-[0_0_10px_rgba(234,179,8,0.2)] hover:scale-110\">
                        <i class=\"fa-solid fa-play pl-0.5 text-xs\"></i>
                    </a>

                    <div class=\"col-span-1 flex justify-end gap-3 md:pr-6 z-10\">
                        {% if is_granted('ROLE_ADMIN') %}
                            <a href=\"{{ path('app_server_edit', {id: server.id}) }}\" class=\"text-zinc-600 hover:text-white\"><i class=\"fa-solid fa-pen\"></i></a>
                            <a href=\"{{ path('app_server_delete', {id: server.id}) }}\" class=\"text-zinc-600 hover:text-red-500\" onclick=\"return confirm('¿Borrar?')\"><i class=\"fa-solid fa-trash\"></i></a>
                        {% endif %}
                         <button onclick=\"copyIp('{{ server.ipAdress }}:{{ server.port ?? 27015 }}')\" class=\"text-zinc-500 hover:text-aurora-gold md:hidden\"><i class=\"fa-regular fa-copy\"></i></button>
                    </div>
                </div>

                <script>
                    document.addEventListener('DOMContentLoaded', () => {
                        fetchServerStatus({{ server.id }});
                    });
                </script>
            {% else %}
                <div class=\"text-center py-12 border border-dashed border-zinc-800 rounded text-zinc-600\">
                    No hay servidores configurados.
                </div>
            {% endfor %}
        </div>
    </div>
</div>

<script>
    function copyIp(ip) {
        navigator.clipboard.writeText(ip);
        alert('IP Copiada: ' + ip);
    }

    function fetchServerStatus(id) {
        // Llamamos a nuestra API interna de Symfony
        fetch(`/servers/api/status/\${id}`)
            .then(response => response.json())
            .then(data => {
                const mapEl = document.getElementById(`map-\${id}`);
                const playersTextEl = document.getElementById(`players-text-\${id}`);
                const playersBarEl = document.getElementById(`players-bar-\${id}`);
                const pingTextEl = document.getElementById(`ping-text-\${id}`);
                const pingIconEl = document.getElementById(`ping-icon-\${id}`);
                const statusLine = document.getElementById(`status-line-\${id}`);
                const card = document.getElementById(`server-card-\${id}`);

                if (data.online) {
                    // SI ESTÁ ONLINE
                    statusLine.classList.replace('bg-gray-600', 'bg-green-500');
                    card.classList.add('hover:border-green-500/50');
                    
                    // Mapa
                    mapEl.innerText = data.map;
                    mapEl.classList.remove('italic', 'text-zinc-600');
                    mapEl.classList.add('text-white');

                    // Jugadores
                    playersTextEl.innerHTML = `<span class=\"text-white\">\${data.players}</span> <span class=\"text-zinc-500\">/ \${data.max_players}</span>`;
                    
                    // Barra de progreso
                    const percentage = (data.players / data.max_players) * 100;
                    playersBarEl.style.width = `\${percentage}%`;
                    playersBarEl.classList.replace('bg-zinc-700', 'bg-gradient-to-r');
                    playersBarEl.classList.add('from-green-500', 'to-green-400');

                    // Ping
                    pingTextEl.innerText = data.ping + 'ms';
                    pingIconEl.classList.remove('text-zinc-700');
                    pingTextEl.classList.remove('text-zinc-700');
                    
                    if(data.ping < 50) {
                        pingIconEl.classList.add('text-green-500');
                        pingTextEl.classList.add('text-green-500');
                    } else if(data.ping < 100) {
                        pingIconEl.classList.add('text-yellow-500');
                        pingTextEl.classList.add('text-yellow-500');
                    } else {
                        pingIconEl.classList.add('text-red-500');
                        pingTextEl.classList.add('text-red-500');
                    }

                } else {
                    // SI ESTÁ OFFLINE
                    statusLine.classList.replace('bg-gray-600', 'bg-red-600');
                    mapEl.innerText = \"Offline\";
                    mapEl.classList.add('text-red-500');
                    playersTextEl.innerText = \"0 / 0\";
                }
            })
            .catch(error => {
                console.error('Error fetching server status:', error);
            });
    }
</script>
{% endblock %}", "server/index.html.twig", "/home/alumno/Documents/aurora-gg/templates/server/index.html.twig");
    }
}
