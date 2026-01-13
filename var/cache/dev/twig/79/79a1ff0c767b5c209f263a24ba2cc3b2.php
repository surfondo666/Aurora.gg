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

/* community/profile.html.twig */
class __TwigTemplate_ed087068ca71a23ad488619be011c1a2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "community/profile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "community/profile.html.twig"));

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

        yield "Mi Perfil | Aurora.gg";
        
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
        yield "<div class=\"min-h-screen bg-[#1b2838] text-[#c6d4df] pb-20\">
    
    <div class=\"bg-gradient-to-b from-[#171a21] to-[#1b2838] border-b border-black shadow-xl\">
        <div class=\"container mx-auto px-4 py-8\">
            <div class=\"flex flex-col md:flex-row items-center gap-6\">
                
                <div class=\"relative group\">
                    <div class=\"w-32 h-32 p-1 bg-gradient-to-b from-[#5c5c5c] to-[#383838] rounded-sm shadow-lg\">
                        <img src=\"https://ui-avatars.com/api/?name=";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14), "email", [], "any", false, false, false, 14), "html", null, true);
        yield "&background=171a21&color=66c0f4&size=256&bold=true\" 
                             class=\"w-full h-full object-cover border border-black bg-[#171a21]\">
                    </div>
                    <div class=\"absolute -bottom-2 -right-2 bg-[#171a21] p-1 rounded-full\">
                        <div class=\"w-4 h-4 bg-aurora-neon rounded-full border-2 border-[#171a21] animate-pulse\"></div>
                    </div>
                </div>

                <div class=\"text-center md:text-left flex-grow\">
                    <h1 class=\"text-3xl font-bold text-white tracking-wide mb-1\">";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23), "email", [], "any", false, false, false, 23), "@"), 0, [], "array", false, false, false, 23), "html", null, true);
        yield "</h1>
                    <div class=\"flex items-center justify-center md:justify-start gap-4 text-xs font-bold text-[#8f98a0]\">
                        <span class=\"flex items-center gap-1\"><img src=\"https://community.akamai.steamstatic.com/public/images/countryflags/es.gif\"> ESPAÑA</span>
                        <span>•</span>
                        <span class=\"text-aurora-gold\">LVL 10</span>
                    </div>
                    <p class=\"mt-4 text-sm max-w-xl text-[#8f98a0]\">
                        Bienvenido a tu panel de control. Aquí puedes gestionar tus aportaciones a la comunidad y revisar el contenido que has guardado para más tarde.
                    </p>
                </div>

                <div class=\"bg-[#101216]/50 p-4 rounded border border-[#2a475e] min-w-[200px] text-center md:text-right\">
                    <div class=\"text-sm text-[#66c0f4] font-bold mb-1\">ESTADÍSTICAS</div>
                    <div class=\"text-2xl font-light text-white\">";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["myPosts"]) || array_key_exists("myPosts", $context) ? $context["myPosts"] : (function () { throw new RuntimeError('Variable "myPosts" does not exist.', 36, $this->source); })())), "html", null, true);
        yield " <span class=\"text-xs text-gray-500\">POSTS</span></div>
                    <div class=\"text-2xl font-light text-white\">";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["savedPosts"]) || array_key_exists("savedPosts", $context) ? $context["savedPosts"] : (function () { throw new RuntimeError('Variable "savedPosts" does not exist.', 37, $this->source); })())), "html", null, true);
        yield " <span class=\"text-xs text-gray-500\">GUARDADOS</span></div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"container mx-auto px-4 py-8\">
        
        <div class=\"flex gap-1 mb-6 border-b border-[#3c4250]\">
            <button onclick=\"switchTab('my-posts')\" id=\"tab-my-posts\" 
                    class=\"tab-btn px-6 py-3 bg-[#2a475e] text-white font-bold rounded-t hover:bg-[#3d5f7a] transition-colors relative top-[1px]\">
                Mis Publicaciones
            </button>
            <button onclick=\"switchTab('saved-posts')\" id=\"tab-saved-posts\" 
                    class=\"tab-btn px-6 py-3 bg-[#171a21] text-[#8f98a0] font-bold rounded-t hover:bg-[#2a475e] hover:text-white transition-colors relative top-[1px]\">
                Guardados
            </button>
        </div>

        <div id=\"content-my-posts\" class=\"tab-content space-y-4\">
            ";
        // line 57
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["myPosts"]) || array_key_exists("myPosts", $context) ? $context["myPosts"] : (function () { throw new RuntimeError('Variable "myPosts" does not exist.', 57, $this->source); })()))) {
            // line 58
            yield "                <div class=\"bg-[#171a21]/50 border border-dashed border-gray-700 rounded-lg p-12 text-center\">
                    <i class=\"fa-solid fa-pen-nib text-4xl text-gray-600 mb-4\"></i>
                    <h3 class=\"text-xl text-gray-400\">No has publicado nada aún</h3>
                    <a href=\"";
            // line 61
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_community");
            yield "\" class=\"mt-4 inline-block text-[#66c0f4] hover:text-white underline\">Crear mi primer post</a>
                </div>
            ";
        } else {
            // line 64
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["myPosts"]) || array_key_exists("myPosts", $context) ? $context["myPosts"] : (function () { throw new RuntimeError('Variable "myPosts" does not exist.', 64, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 65
                yield "                    <div class=\"bg-[#16202d] border border-[#2a475e] p-4 flex gap-4 hover:border-[#66c0f4] transition-colors group\">
                        <div class=\"flex flex-col items-center justify-center w-16 text-[#66c0f4] border-r border-[#2a475e] pr-4\">
                            <span class=\"text-xl font-bold\">";
                // line 67
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["post"], "likes", [], "any", false, false, false, 67)), "html", null, true);
                yield "</span>
                            <i class=\"fa-solid fa-thumbs-up text-xs opacity-50\"></i>
                        </div>
                        
                        <div class=\"flex-grow\">
                            <div class=\"flex justify-between items-start\">
                                <h3 class=\"text-lg font-bold text-white group-hover:text-[#66c0f4] truncate\">
                                    <a href=\"";
                // line 74
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 74)]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 74), "html", null, true);
                yield "</a>
                                </h3>
                                <span class=\"text-xs bg-[#2a475e] px-2 py-1 rounded text-[#66c0f4]\">";
                // line 76
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "category", [], "any", false, false, false, 76), "html", null, true);
                yield "</span>
                            </div>
                            <p class=\"text-sm text-[#8f98a0] mt-1 line-clamp-2\">";
                // line 78
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "content", [], "any", false, false, false, 78), "html", null, true);
                yield "</p>
                            <div class=\"mt-3 text-xs text-gray-500 flex gap-4\">
                                <span><i class=\"fa-regular fa-clock\"></i> ";
                // line 80
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "createdAt", [], "any", false, false, false, 80), "d M Y"), "html", null, true);
                yield "</span>
                                <span><i class=\"fa-regular fa-comment\"></i> ";
                // line 81
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["post"], "comments", [], "any", false, false, false, 81)), "html", null, true);
                yield " comentarios</span>
                            </div>
                        </div>

                        <div class=\"flex flex-col justify-center gap-2 pl-4 border-l border-[#2a475e]\">
                            <a href=\"";
                // line 86
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 86)]), "html", null, true);
                yield "\" class=\"bg-[#2a475e] hover:bg-[#66c0f4] hover:text-black text-white px-3 py-1 rounded text-xs font-bold transition-colors text-center\">
                                VER
                            </a>
                            <button class=\"bg-[#171a21] hover:bg-red-900 text-gray-400 hover:text-red-200 border border-gray-700 px-3 py-1 rounded text-xs transition-colors\">
                                BORRAR
                            </button>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['post'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            yield "            ";
        }
        // line 96
        yield "        </div>

        <div id=\"content-saved-posts\" class=\"tab-content hidden space-y-4\">
            ";
        // line 99
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["savedPosts"]) || array_key_exists("savedPosts", $context) ? $context["savedPosts"] : (function () { throw new RuntimeError('Variable "savedPosts" does not exist.', 99, $this->source); })()))) {
            // line 100
            yield "                <div class=\"bg-[#171a21]/50 border border-dashed border-gray-700 rounded-lg p-12 text-center\">
                    <i class=\"fa-regular fa-bookmark text-4xl text-gray-600 mb-4\"></i>
                    <h3 class=\"text-xl text-gray-400\">No tienes favoritos guardados</h3>
                    <p class=\"text-sm text-gray-600\">Navega por la comunidad y guarda lo que te interese.</p>
                </div>
            ";
        } else {
            // line 106
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["savedPosts"]) || array_key_exists("savedPosts", $context) ? $context["savedPosts"] : (function () { throw new RuntimeError('Variable "savedPosts" does not exist.', 106, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 107
                yield "                    <div class=\"bg-[#16202d] border border-[#2a475e] p-4 flex gap-4 hover:border-aurora-gold transition-colors group\">
                        <div class=\"flex-grow\">
                            <div class=\"flex items-center gap-2 mb-1\">
                                <img src=\"https://ui-avatars.com/api/?name=";
                // line 110
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["post"], "author", [], "any", false, false, false, 110), "email", [], "any", false, false, false, 110), "html", null, true);
                yield "&size=24\" class=\"w-5 h-5 rounded opacity-70\">
                                <span class=\"text-xs text-[#66c0f4] font-bold\">u/";
                // line 111
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["post"], "author", [], "any", false, false, false, 111), "email", [], "any", false, false, false, 111), "@"), 0, [], "array", false, false, false, 111), "html", null, true);
                yield "</span>
                            </div>
                            <h3 class=\"text-lg font-bold text-white group-hover:text-aurora-gold\">
                                <a href=\"";
                // line 114
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 114)]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 114), "html", null, true);
                yield "</a>
                            </h3>
                        </div>
                        <div class=\"flex items-center\">
                            <a href=\"";
                // line 118
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_save", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 118)]), "html", null, true);
                yield "\" class=\"text-aurora-gold hover:text-white text-sm font-bold flex items-center gap-2 px-4 py-2 bg-[#2a475e]/30 rounded border border-aurora-gold/30 hover:bg-red-900/50 hover:border-red-500 transition-all\">
                                <i class=\"fa-solid fa-bookmark\"></i> QUITAR
                            </a>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['post'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 124
            yield "            ";
        }
        // line 125
        yield "        </div>

    </div>
</div>

<script>
    function switchTab(tabName) {
        // 1. Ocultar todos los contenidos
        document.querySelectorAll('.tab-content').forEach(el => el.classList.add('hidden'));
        
        // 2. Desactivar estilos de todos los botones
        document.querySelectorAll('.tab-btn').forEach(btn => {
            btn.classList.remove('bg-[#2a475e]', 'text-white'); // Quitar estilo activo
            btn.classList.add('bg-[#171a21]', 'text-[#8f98a0]'); // Poner estilo inactivo
        });

        // 3. Mostrar el contenido seleccionado
        document.getElementById('content-' + tabName).classList.remove('hidden');

        // 4. Activar el botón seleccionado
        const activeBtn = document.getElementById('tab-' + tabName);
        activeBtn.classList.remove('bg-[#171a21]', 'text-[#8f98a0]');
        activeBtn.classList.add('bg-[#2a475e]', 'text-white');
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
        return "community/profile.html.twig";
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
        return array (  303 => 125,  300 => 124,  288 => 118,  279 => 114,  273 => 111,  269 => 110,  264 => 107,  259 => 106,  251 => 100,  249 => 99,  244 => 96,  241 => 95,  226 => 86,  218 => 81,  214 => 80,  209 => 78,  204 => 76,  197 => 74,  187 => 67,  183 => 65,  178 => 64,  172 => 61,  167 => 58,  165 => 57,  142 => 37,  138 => 36,  122 => 23,  110 => 14,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mi Perfil | Aurora.gg{% endblock %}

{% block body %}
<div class=\"min-h-screen bg-[#1b2838] text-[#c6d4df] pb-20\">
    
    <div class=\"bg-gradient-to-b from-[#171a21] to-[#1b2838] border-b border-black shadow-xl\">
        <div class=\"container mx-auto px-4 py-8\">
            <div class=\"flex flex-col md:flex-row items-center gap-6\">
                
                <div class=\"relative group\">
                    <div class=\"w-32 h-32 p-1 bg-gradient-to-b from-[#5c5c5c] to-[#383838] rounded-sm shadow-lg\">
                        <img src=\"https://ui-avatars.com/api/?name={{ app.user.email }}&background=171a21&color=66c0f4&size=256&bold=true\" 
                             class=\"w-full h-full object-cover border border-black bg-[#171a21]\">
                    </div>
                    <div class=\"absolute -bottom-2 -right-2 bg-[#171a21] p-1 rounded-full\">
                        <div class=\"w-4 h-4 bg-aurora-neon rounded-full border-2 border-[#171a21] animate-pulse\"></div>
                    </div>
                </div>

                <div class=\"text-center md:text-left flex-grow\">
                    <h1 class=\"text-3xl font-bold text-white tracking-wide mb-1\">{{ app.user.email|split('@')[0] }}</h1>
                    <div class=\"flex items-center justify-center md:justify-start gap-4 text-xs font-bold text-[#8f98a0]\">
                        <span class=\"flex items-center gap-1\"><img src=\"https://community.akamai.steamstatic.com/public/images/countryflags/es.gif\"> ESPAÑA</span>
                        <span>•</span>
                        <span class=\"text-aurora-gold\">LVL 10</span>
                    </div>
                    <p class=\"mt-4 text-sm max-w-xl text-[#8f98a0]\">
                        Bienvenido a tu panel de control. Aquí puedes gestionar tus aportaciones a la comunidad y revisar el contenido que has guardado para más tarde.
                    </p>
                </div>

                <div class=\"bg-[#101216]/50 p-4 rounded border border-[#2a475e] min-w-[200px] text-center md:text-right\">
                    <div class=\"text-sm text-[#66c0f4] font-bold mb-1\">ESTADÍSTICAS</div>
                    <div class=\"text-2xl font-light text-white\">{{ myPosts|length }} <span class=\"text-xs text-gray-500\">POSTS</span></div>
                    <div class=\"text-2xl font-light text-white\">{{ savedPosts|length }} <span class=\"text-xs text-gray-500\">GUARDADOS</span></div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"container mx-auto px-4 py-8\">
        
        <div class=\"flex gap-1 mb-6 border-b border-[#3c4250]\">
            <button onclick=\"switchTab('my-posts')\" id=\"tab-my-posts\" 
                    class=\"tab-btn px-6 py-3 bg-[#2a475e] text-white font-bold rounded-t hover:bg-[#3d5f7a] transition-colors relative top-[1px]\">
                Mis Publicaciones
            </button>
            <button onclick=\"switchTab('saved-posts')\" id=\"tab-saved-posts\" 
                    class=\"tab-btn px-6 py-3 bg-[#171a21] text-[#8f98a0] font-bold rounded-t hover:bg-[#2a475e] hover:text-white transition-colors relative top-[1px]\">
                Guardados
            </button>
        </div>

        <div id=\"content-my-posts\" class=\"tab-content space-y-4\">
            {% if myPosts is empty %}
                <div class=\"bg-[#171a21]/50 border border-dashed border-gray-700 rounded-lg p-12 text-center\">
                    <i class=\"fa-solid fa-pen-nib text-4xl text-gray-600 mb-4\"></i>
                    <h3 class=\"text-xl text-gray-400\">No has publicado nada aún</h3>
                    <a href=\"{{ path('app_community') }}\" class=\"mt-4 inline-block text-[#66c0f4] hover:text-white underline\">Crear mi primer post</a>
                </div>
            {% else %}
                {% for post in myPosts %}
                    <div class=\"bg-[#16202d] border border-[#2a475e] p-4 flex gap-4 hover:border-[#66c0f4] transition-colors group\">
                        <div class=\"flex flex-col items-center justify-center w-16 text-[#66c0f4] border-r border-[#2a475e] pr-4\">
                            <span class=\"text-xl font-bold\">{{ post.likes|length }}</span>
                            <i class=\"fa-solid fa-thumbs-up text-xs opacity-50\"></i>
                        </div>
                        
                        <div class=\"flex-grow\">
                            <div class=\"flex justify-between items-start\">
                                <h3 class=\"text-lg font-bold text-white group-hover:text-[#66c0f4] truncate\">
                                    <a href=\"{{ path('app_post_show', {id: post.id}) }}\">{{ post.title }}</a>
                                </h3>
                                <span class=\"text-xs bg-[#2a475e] px-2 py-1 rounded text-[#66c0f4]\">{{ post.category }}</span>
                            </div>
                            <p class=\"text-sm text-[#8f98a0] mt-1 line-clamp-2\">{{ post.content }}</p>
                            <div class=\"mt-3 text-xs text-gray-500 flex gap-4\">
                                <span><i class=\"fa-regular fa-clock\"></i> {{ post.createdAt|date('d M Y') }}</span>
                                <span><i class=\"fa-regular fa-comment\"></i> {{ post.comments|length }} comentarios</span>
                            </div>
                        </div>

                        <div class=\"flex flex-col justify-center gap-2 pl-4 border-l border-[#2a475e]\">
                            <a href=\"{{ path('app_post_show', {id: post.id}) }}\" class=\"bg-[#2a475e] hover:bg-[#66c0f4] hover:text-black text-white px-3 py-1 rounded text-xs font-bold transition-colors text-center\">
                                VER
                            </a>
                            <button class=\"bg-[#171a21] hover:bg-red-900 text-gray-400 hover:text-red-200 border border-gray-700 px-3 py-1 rounded text-xs transition-colors\">
                                BORRAR
                            </button>
                        </div>
                    </div>
                {% endfor %}
            {% endif %}
        </div>

        <div id=\"content-saved-posts\" class=\"tab-content hidden space-y-4\">
            {% if savedPosts is empty %}
                <div class=\"bg-[#171a21]/50 border border-dashed border-gray-700 rounded-lg p-12 text-center\">
                    <i class=\"fa-regular fa-bookmark text-4xl text-gray-600 mb-4\"></i>
                    <h3 class=\"text-xl text-gray-400\">No tienes favoritos guardados</h3>
                    <p class=\"text-sm text-gray-600\">Navega por la comunidad y guarda lo que te interese.</p>
                </div>
            {% else %}
                {% for post in savedPosts %}
                    <div class=\"bg-[#16202d] border border-[#2a475e] p-4 flex gap-4 hover:border-aurora-gold transition-colors group\">
                        <div class=\"flex-grow\">
                            <div class=\"flex items-center gap-2 mb-1\">
                                <img src=\"https://ui-avatars.com/api/?name={{ post.author.email }}&size=24\" class=\"w-5 h-5 rounded opacity-70\">
                                <span class=\"text-xs text-[#66c0f4] font-bold\">u/{{ post.author.email|split('@')[0] }}</span>
                            </div>
                            <h3 class=\"text-lg font-bold text-white group-hover:text-aurora-gold\">
                                <a href=\"{{ path('app_post_show', {id: post.id}) }}\">{{ post.title }}</a>
                            </h3>
                        </div>
                        <div class=\"flex items-center\">
                            <a href=\"{{ path('app_post_save', {id: post.id}) }}\" class=\"text-aurora-gold hover:text-white text-sm font-bold flex items-center gap-2 px-4 py-2 bg-[#2a475e]/30 rounded border border-aurora-gold/30 hover:bg-red-900/50 hover:border-red-500 transition-all\">
                                <i class=\"fa-solid fa-bookmark\"></i> QUITAR
                            </a>
                        </div>
                    </div>
                {% endfor %}
            {% endif %}
        </div>

    </div>
</div>

<script>
    function switchTab(tabName) {
        // 1. Ocultar todos los contenidos
        document.querySelectorAll('.tab-content').forEach(el => el.classList.add('hidden'));
        
        // 2. Desactivar estilos de todos los botones
        document.querySelectorAll('.tab-btn').forEach(btn => {
            btn.classList.remove('bg-[#2a475e]', 'text-white'); // Quitar estilo activo
            btn.classList.add('bg-[#171a21]', 'text-[#8f98a0]'); // Poner estilo inactivo
        });

        // 3. Mostrar el contenido seleccionado
        document.getElementById('content-' + tabName).classList.remove('hidden');

        // 4. Activar el botón seleccionado
        const activeBtn = document.getElementById('tab-' + tabName);
        activeBtn.classList.remove('bg-[#171a21]', 'text-[#8f98a0]');
        activeBtn.classList.add('bg-[#2a475e]', 'text-white');
    }
</script>
{% endblock %}", "community/profile.html.twig", "/home/alumno/Documents/aurora-gg/templates/community/profile.html.twig");
    }
}
