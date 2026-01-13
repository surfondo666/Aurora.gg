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

/* workshop/index.html.twig */
class __TwigTemplate_e2dcaa416538232043bacee130eced9e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "workshop/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "workshop/index.html.twig"));

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

        yield "Workshop | Aurora.gg";
        
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
        yield "<div class=\"min-h-screen bg-[#1b2838] pb-12\">
    
    <div class=\"relative h-64 overflow-hidden border-b border-black shadow-lg\">
        <div class=\"absolute inset-0 bg-gradient-to-r from-[#171a21] to-[#2a475e]/80 z-10\"></div>
        <img src=\"https://cdn.cloudflare.steamstatic.com/steam/apps/730/library_hero.jpg\" class=\"absolute inset-0 w-full h-full object-cover opacity-40\">
        
        <div class=\"relative z-20 container mx-auto px-4 h-full flex flex-col justify-center\">
            <h1 class=\"text-4xl md:text-5xl font-bold text-white tracking-wider mb-2 drop-shadow-lg\">
                WORKSHOP <span class=\"text-aurora-gold\">SELECTION</span>
            </h1>
            <p class=\"text-[#c6d4df] max-w-2xl text-lg drop-shadow\">
                Los mejores mapas de la comunidad seleccionados para ti.
            </p>
        </div>
    </div>

    <div class=\"bg-[#101216]/90 border-b border-[#2a475e] sticky top-0 z-30 backdrop-blur-md shadow-md\">
        <div class=\"container mx-auto px-4 py-4 flex flex-wrap justify-center gap-6 text-sm font-bold text-[#8f98a0]\">
            
            <button class=\"filter-btn text-white border-b-2 border-aurora-gold pb-1 transition-all hover:text-white\" data-filter=\"all\">
                TODOS
            </button>
            
            <button class=\"filter-btn hover:text-white border-b-2 border-transparent pb-1 hover:border-white/20 transition-all\" data-filter=\"AIM TRAINING\">
                AIM TRAINING
            </button>
            <button class=\"filter-btn hover:text-white border-b-2 border-transparent pb-1 hover:border-white/20 transition-all\" data-filter=\"1 VS 1\">
                1 VS 1
            </button>
            <button class=\"filter-btn hover:text-white border-b-2 border-transparent pb-1 hover:border-white/20 transition-all\" data-filter=\"SURF\">
                SURF
            </button>
            <button class=\"filter-btn hover:text-white border-b-2 border-transparent pb-1 hover:border-white/20 transition-all\" data-filter=\"BHOP\">
                BHOP
            </button>
            <button class=\"filter-btn hover:text-white border-b-2 border-transparent pb-1 hover:border-white/20 transition-all\" data-filter=\"UTILITY\">
                UTILITY
            </button>

        </div>
    </div>

    <div class=\"container mx-auto px-4 py-8\">
        <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6\" id=\"maps-grid\">
            
            ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["maps"]) || array_key_exists("maps", $context) ? $context["maps"] : (function () { throw new RuntimeError('Variable "maps" does not exist.', 51, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["map"]) {
            // line 52
            yield "            <div class=\"map-card bg-[#16202d] border border-[#101216] shadow-xl group hover:border-[#66c0f4] transition-all duration-300 relative overflow-hidden flex flex-col h-full\"
                 data-category=\"";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["map"], "category", [], "any", false, false, false, 53), "html", null, true);
            yield "\">
                
                <div class=\"relative h-48 overflow-hidden bg-black\">
                    <img src=\"";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["map"], "image", [], "any", false, false, false, 56)), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["map"], "title", [], "any", false, false, false, 56), "html", null, true);
            yield "\" class=\"w-full h-full object-cover opacity-80 group-hover:opacity-100 group-hover:scale-105 transition-all duration-500\">                    
                    <div class=\"absolute top-2 right-2 bg-black/70 backdrop-blur text-white text-[10px] font-bold px-2 py-1 rounded border border-white/10\">
                        ";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["map"], "category", [], "any", false, false, false, 58), "html", null, true);
            yield "
                    </div>
                </div>

                <div class=\"p-4 flex flex-col flex-grow\">
                    <h3 class=\"text-[#c6d4df] font-bold text-lg leading-tight mb-1 group-hover:text-white truncate\">
                        ";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["map"], "title", [], "any", false, false, false, 64), "html", null, true);
            yield "
                    </h3>
                    <div class=\"text-xs text-[#5d7385] mb-3\">
                        por <span class=\"text-[#66c0f4] hover:underline cursor-pointer\">";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["map"], "author", [], "any", false, false, false, 67), "html", null, true);
            yield "</span>
                    </div>

                    <p class=\"text-[#8f98a0] text-sm mb-4 line-clamp-3 flex-grow\">
                        ";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["map"], "desc", [], "any", false, false, false, 71), "html", null, true);
            yield "
                    </p>

                    <div class=\"flex gap-2 mb-4 flex-wrap\">
                        ";
            // line 75
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["map"], "tags", [], "any", false, false, false, 75));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 76
                yield "                            <span class=\"text-[10px] bg-[#222b35] text-[#6d8495] px-1.5 py-0.5 rounded border border-[#303842]\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["tag"], "html", null, true);
                yield "</span>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['tag'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            yield "                    </div>

                    <a href=\"";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["map"], "link", [], "any", false, false, false, 80), "html", null, true);
            yield "\" target=\"_blank\" class=\"mt-auto block text-center bg-gradient-to-r from-[#5c7e10] to-[#4b6a0a] hover:from-[#76a113] hover:to-[#60860d] text-[#d2eba6] font-bold py-2 rounded shadow-lg border border-[#4b6a0a] transition-all flex items-center justify-center gap-2 group-hover:brightness-110\">
                        <i class=\"fa-solid fa-plus-circle\"></i> Ir al Workshop
                    </a>
                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['map'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        yield "  
            
            <div id=\"no-results\" class=\"hidden col-span-full text-center py-12 text-[#8f98a0]\">
                <i class=\"fa-solid fa-ghost text-4xl mb-4 opacity-50\"></i>
                <p>No hay mapas en esta categoría por ahora.</p>
            </div>

        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const buttons = document.querySelectorAll('.filter-btn');
        const cards = document.querySelectorAll('.map-card');
        const noResults = document.getElementById('no-results');

        buttons.forEach(button => {
            button.addEventListener('click', () => {
                // 1. Gestionar estilos de los botones (Activo/Inactivo)
                buttons.forEach(btn => {
                    btn.classList.remove('text-white', 'border-aurora-gold');
                    btn.classList.add('border-transparent');
                });
                button.classList.add('text-white', 'border-aurora-gold');
                button.classList.remove('border-transparent');

                // 2. Filtrar las cartas
                const filterValue = button.getAttribute('data-filter');
                let visibleCount = 0;

                cards.forEach(card => {
                    if (filterValue === 'all' || card.getAttribute('data-category') === filterValue) {
                        card.classList.remove('hidden');
                        card.classList.add('flex'); // Restaurar display flex
                        visibleCount++;
                    } else {
                        card.classList.add('hidden');
                        card.classList.remove('flex');
                    }
                });

                // 3. Mostrar mensaje si no hay nada
                if (visibleCount === 0) {
                    noResults.classList.remove('hidden');
                } else {
                    noResults.classList.add('hidden');
                }
            });
        });
    });
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
        return "workshop/index.html.twig";
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
        return array (  225 => 85,  213 => 80,  209 => 78,  200 => 76,  196 => 75,  189 => 71,  182 => 67,  176 => 64,  167 => 58,  160 => 56,  154 => 53,  151 => 52,  147 => 51,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Workshop | Aurora.gg{% endblock %}

{% block body %}
<div class=\"min-h-screen bg-[#1b2838] pb-12\">
    
    <div class=\"relative h-64 overflow-hidden border-b border-black shadow-lg\">
        <div class=\"absolute inset-0 bg-gradient-to-r from-[#171a21] to-[#2a475e]/80 z-10\"></div>
        <img src=\"https://cdn.cloudflare.steamstatic.com/steam/apps/730/library_hero.jpg\" class=\"absolute inset-0 w-full h-full object-cover opacity-40\">
        
        <div class=\"relative z-20 container mx-auto px-4 h-full flex flex-col justify-center\">
            <h1 class=\"text-4xl md:text-5xl font-bold text-white tracking-wider mb-2 drop-shadow-lg\">
                WORKSHOP <span class=\"text-aurora-gold\">SELECTION</span>
            </h1>
            <p class=\"text-[#c6d4df] max-w-2xl text-lg drop-shadow\">
                Los mejores mapas de la comunidad seleccionados para ti.
            </p>
        </div>
    </div>

    <div class=\"bg-[#101216]/90 border-b border-[#2a475e] sticky top-0 z-30 backdrop-blur-md shadow-md\">
        <div class=\"container mx-auto px-4 py-4 flex flex-wrap justify-center gap-6 text-sm font-bold text-[#8f98a0]\">
            
            <button class=\"filter-btn text-white border-b-2 border-aurora-gold pb-1 transition-all hover:text-white\" data-filter=\"all\">
                TODOS
            </button>
            
            <button class=\"filter-btn hover:text-white border-b-2 border-transparent pb-1 hover:border-white/20 transition-all\" data-filter=\"AIM TRAINING\">
                AIM TRAINING
            </button>
            <button class=\"filter-btn hover:text-white border-b-2 border-transparent pb-1 hover:border-white/20 transition-all\" data-filter=\"1 VS 1\">
                1 VS 1
            </button>
            <button class=\"filter-btn hover:text-white border-b-2 border-transparent pb-1 hover:border-white/20 transition-all\" data-filter=\"SURF\">
                SURF
            </button>
            <button class=\"filter-btn hover:text-white border-b-2 border-transparent pb-1 hover:border-white/20 transition-all\" data-filter=\"BHOP\">
                BHOP
            </button>
            <button class=\"filter-btn hover:text-white border-b-2 border-transparent pb-1 hover:border-white/20 transition-all\" data-filter=\"UTILITY\">
                UTILITY
            </button>

        </div>
    </div>

    <div class=\"container mx-auto px-4 py-8\">
        <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6\" id=\"maps-grid\">
            
            {% for map in maps %}
            <div class=\"map-card bg-[#16202d] border border-[#101216] shadow-xl group hover:border-[#66c0f4] transition-all duration-300 relative overflow-hidden flex flex-col h-full\"
                 data-category=\"{{ map.category }}\">
                
                <div class=\"relative h-48 overflow-hidden bg-black\">
                    <img src=\"{{ asset(map.image) }}\" alt=\"{{ map.title }}\" class=\"w-full h-full object-cover opacity-80 group-hover:opacity-100 group-hover:scale-105 transition-all duration-500\">                    
                    <div class=\"absolute top-2 right-2 bg-black/70 backdrop-blur text-white text-[10px] font-bold px-2 py-1 rounded border border-white/10\">
                        {{ map.category }}
                    </div>
                </div>

                <div class=\"p-4 flex flex-col flex-grow\">
                    <h3 class=\"text-[#c6d4df] font-bold text-lg leading-tight mb-1 group-hover:text-white truncate\">
                        {{ map.title }}
                    </h3>
                    <div class=\"text-xs text-[#5d7385] mb-3\">
                        por <span class=\"text-[#66c0f4] hover:underline cursor-pointer\">{{ map.author }}</span>
                    </div>

                    <p class=\"text-[#8f98a0] text-sm mb-4 line-clamp-3 flex-grow\">
                        {{ map.desc }}
                    </p>

                    <div class=\"flex gap-2 mb-4 flex-wrap\">
                        {% for tag in map.tags %}
                            <span class=\"text-[10px] bg-[#222b35] text-[#6d8495] px-1.5 py-0.5 rounded border border-[#303842]\">{{ tag }}</span>
                        {% endfor %}
                    </div>

                    <a href=\"{{ map.link }}\" target=\"_blank\" class=\"mt-auto block text-center bg-gradient-to-r from-[#5c7e10] to-[#4b6a0a] hover:from-[#76a113] hover:to-[#60860d] text-[#d2eba6] font-bold py-2 rounded shadow-lg border border-[#4b6a0a] transition-all flex items-center justify-center gap-2 group-hover:brightness-110\">
                        <i class=\"fa-solid fa-plus-circle\"></i> Ir al Workshop
                    </a>
                </div>
            </div>
            {% endfor %}  
            
            <div id=\"no-results\" class=\"hidden col-span-full text-center py-12 text-[#8f98a0]\">
                <i class=\"fa-solid fa-ghost text-4xl mb-4 opacity-50\"></i>
                <p>No hay mapas en esta categoría por ahora.</p>
            </div>

        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const buttons = document.querySelectorAll('.filter-btn');
        const cards = document.querySelectorAll('.map-card');
        const noResults = document.getElementById('no-results');

        buttons.forEach(button => {
            button.addEventListener('click', () => {
                // 1. Gestionar estilos de los botones (Activo/Inactivo)
                buttons.forEach(btn => {
                    btn.classList.remove('text-white', 'border-aurora-gold');
                    btn.classList.add('border-transparent');
                });
                button.classList.add('text-white', 'border-aurora-gold');
                button.classList.remove('border-transparent');

                // 2. Filtrar las cartas
                const filterValue = button.getAttribute('data-filter');
                let visibleCount = 0;

                cards.forEach(card => {
                    if (filterValue === 'all' || card.getAttribute('data-category') === filterValue) {
                        card.classList.remove('hidden');
                        card.classList.add('flex'); // Restaurar display flex
                        visibleCount++;
                    } else {
                        card.classList.add('hidden');
                        card.classList.remove('flex');
                    }
                });

                // 3. Mostrar mensaje si no hay nada
                if (visibleCount === 0) {
                    noResults.classList.remove('hidden');
                } else {
                    noResults.classList.add('hidden');
                }
            });
        });
    });
</script>
{% endblock %}", "workshop/index.html.twig", "/home/alumno/Documents/aurora-gg/templates/workshop/index.html.twig");
    }
}
