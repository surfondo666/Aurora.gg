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

/* community/index.html.twig */
class __TwigTemplate_47e7afa698faf58ab1998e8fbea2d72a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "community/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "community/index.html.twig"));

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

        yield "Comunidad | Aurora.gg";
        
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
        yield "<div class=\"bg-black min-h-screen py-8 text-gray-300\">
    <div class=\"container mx-auto px-4 md:px-6\">
        
        <div class=\"grid grid-cols-1 lg:grid-cols-3 gap-8\">
            
            <div class=\"lg:col-span-2 space-y-6\">
                
                ";
        // line 13
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 14
            yield "                    <div class=\"bg-zinc-900/50 border border-white/10 p-4 rounded-xl shadow-lg backdrop-blur-sm\">
                        ";
            // line 15
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 15, $this->source); })()), 'form_start');
            yield "
                            <div class=\"flex gap-4\">
                                <div class=\"w-10 h-10 rounded-full bg-zinc-800 overflow-hidden shrink-0 border border-zinc-700\">
                                    <img src=\"https://ui-avatars.com/api/?name=";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18), "email", [], "any", false, false, false, 18), "html", null, true);
            yield "&background=000&color=d4af37\" class=\"w-full h-full\">
                                </div>
                                <div class=\"flex-grow space-y-3\">
                                    ";
            // line 21
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 21, $this->source); })()), "title", [], "any", false, false, false, 21), 'widget');
            yield "
                                    ";
            // line 22
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 22, $this->source); })()), "content", [], "any", false, false, false, 22), 'widget');
            yield "
                                    
                                    <div class=\"flex justify-between items-center mt-2\">
                                        ";
            // line 25
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 25, $this->source); })()), "category", [], "any", false, false, false, 25), 'widget');
            yield "
                                        <button type=\"submit\" class=\"bg-aurora-gold hover:bg-yellow-400 text-black font-bold px-6 py-1.5 rounded-full transition-all text-sm shadow-[0_0_10px_rgba(255,215,0,0.2)]\">
                                            Publicar
                                        </button>
                                    </div>
                                </div>
                            </div>
                        ";
            // line 32
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 32, $this->source); })()), 'form_end');
            yield "
                    </div>
                ";
        }
        // line 35
        yield "
                ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 36, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 37
            yield "                <div class=\"bg-zinc-900/40 border border-white/5 rounded-xl overflow-hidden flex shadow-lg hover:border-white/20 transition-all group\">
                    
                    <div class=\"w-14 bg-black/20 flex flex-col items-center py-4 gap-1 border-r border-white/5\">
                        <a href=\"";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_like", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            yield "\" class=\"js-like-btn transition-colors hover:scale-110 ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "user", [], "any", false, false, false, 40) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["post"], "likes", [], "any", false, false, false, 40), "contains", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "user", [], "any", false, false, false, 40)], "method", false, false, false, 40))) ? ("text-aurora-gold") : ("text-gray-600 hover:text-aurora-gold"));
            yield "\">
                            <i class=\"fa-solid fa-arrow-up text-lg\"></i>
                        </a>
                        
                        <span class=\"js-likes-count text-sm font-bold text-white\">";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["post"], "likes", [], "any", false, false, false, 44)), "html", null, true);
            yield "</span>
                        
                        <button class=\"text-gray-700 hover:text-blue-500 cursor-not-allowed opacity-50\"><i class=\"fa-solid fa-arrow-down\"></i></button>
                    </div>

                    <div class=\"p-5 flex-grow cursor-pointer relative\" onclick=\"window.location='";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 49)]), "html", null, true);
            yield "'\">
                        <div class=\"flex items-center gap-2 text-xs text-gray-500 mb-2 font-mono\">
                            <span class=\"font-bold text-gray-300\">u/";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["post"], "author", [], "any", false, false, false, 51), "email", [], "any", false, false, false, 51), "@"), 0, [], "array", false, false, false, 51), "html", null, true);
            yield "</span>
                            <span>•</span>
                            <span>";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "createdAt", [], "any", false, false, false, 53), "d M"), "html", null, true);
            yield "</span>
                            <span class=\"bg-aurora-gold/10 text-aurora-gold border border-aurora-gold/20 px-2 py-0.5 rounded text-[10px] uppercase tracking-wider ml-2\">";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "category", [], "any", false, false, false, 54), "html", null, true);
            yield "</span>
                        </div>

                        <h3 class=\"text-xl font-bold text-white mb-2 group-hover:text-aurora-gold transition-colors\">";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 57), "html", null, true);
            yield "</h3>
                        <p class=\"text-gray-400 text-sm mb-4 line-clamp-2 leading-relaxed\">";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "content", [], "any", false, false, false, 58), "html", null, true);
            yield "</p>

                        <div class=\"flex items-center gap-4 text-gray-500 text-xs font-bold z-10 relative\">
                            <div class=\"flex items-center gap-2 px-2 py-1 bg-black/20 rounded\">
                                <i class=\"fa-regular fa-comment-alt\"></i> ";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["post"], "comments", [], "any", false, false, false, 62)), "html", null, true);
            yield " Comentarios
                            </div>
                            
                            <button onclick=\"event.stopPropagation(); navigator.clipboard.writeText('";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_post_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 65)]), "html", null, true);
            yield "'); alert('Enlace copiado!')\" class=\"flex items-center gap-2 hover:text-white hover:bg-white/10 px-2 py-1 rounded transition-colors\">
                                <i class=\"fa-solid fa-share\"></i> Compartir
                            </button>

                            <a href=\"";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_save", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 69)]), "html", null, true);
            yield "\" 
                               onclick=\"event.stopPropagation();\" 
                               class=\"js-save-btn flex items-center gap-2 hover:bg-white/10 px-2 py-1 rounded transition-colors ";
            // line 71
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 71, $this->source); })()), "user", [], "any", false, false, false, 71) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["post"], "savedBy", [], "any", false, false, false, 71), "contains", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 71, $this->source); })()), "user", [], "any", false, false, false, 71)], "method", false, false, false, 71))) ? ("text-aurora-gold") : (""));
            yield "\">
                                <i class=\"";
            // line 72
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 72, $this->source); })()), "user", [], "any", false, false, false, 72) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["post"], "savedBy", [], "any", false, false, false, 72), "contains", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 72, $this->source); })()), "user", [], "any", false, false, false, 72)], "method", false, false, false, 72))) ? ("fa-solid") : ("fa-regular"));
            yield " fa-bookmark\"></i> Guardar
                            </a>
                        </div>
                    </div>
                </div>
                ";
            $context['_iterated'] = true;
        }
        // line 77
        if (!$context['_iterated']) {
            // line 78
            yield "                    <div class=\"text-center py-20 border-2 border-dashed border-white/5 rounded-xl\">
                        <i class=\"fa-solid fa-ghost text-4xl text-zinc-700 mb-4\"></i>
                        <p class=\"text-zinc-500\">No hay publicaciones aún.</p>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['post'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        yield "            </div>

            <div class=\"hidden lg:block space-y-6\">
                <form action=\"";
        // line 86
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_community");
        yield "\" method=\"get\" class=\"relative group\">
                    <input type=\"text\" name=\"q\" value=\"";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["searchQuery"]) || array_key_exists("searchQuery", $context) ? $context["searchQuery"] : (function () { throw new RuntimeError('Variable "searchQuery" does not exist.', 87, $this->source); })()), "html", null, true);
        yield "\" placeholder=\"Buscar posts...\" class=\"w-full bg-zinc-900/80 border border-white/10 rounded-lg px-4 py-3 text-white focus:border-aurora-gold focus:ring-1 focus:ring-aurora-gold/50 outline-none transition-all pl-10\">
                    <i class=\"fa-solid fa-search absolute left-3.5 top-3.5 text-gray-500 group-focus-within:text-aurora-gold transition-colors\"></i>
                </form>

                <div class=\"bg-zinc-900/50 border border-white/10 rounded-xl p-6 shadow-lg\">
                    <h4 class=\"text-white font-bold text-sm mb-4 flex items-center gap-2\">
                        <i class=\"fa-solid fa-user-astronaut text-aurora-gold\"></i> Tu Panel
                    </h4>
                    <a href=\"";
        // line 95
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_my_posts");
        yield "\" class=\"block w-full text-center bg-white/5 hover:bg-white/10 text-gray-300 hover:text-white py-2 rounded-lg text-sm border border-white/5 transition-all mb-2\">
                        Gestionar mis Publicaciones
                    </a>
                </div>
            </div>

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
        return "community/index.html.twig";
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
        return array (  277 => 95,  266 => 87,  262 => 86,  257 => 83,  247 => 78,  245 => 77,  235 => 72,  231 => 71,  226 => 69,  219 => 65,  213 => 62,  206 => 58,  202 => 57,  196 => 54,  192 => 53,  187 => 51,  182 => 49,  174 => 44,  165 => 40,  160 => 37,  155 => 36,  152 => 35,  146 => 32,  136 => 25,  130 => 22,  126 => 21,  120 => 18,  114 => 15,  111 => 14,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Comunidad | Aurora.gg{% endblock %}

{% block body %}
<div class=\"bg-black min-h-screen py-8 text-gray-300\">
    <div class=\"container mx-auto px-4 md:px-6\">
        
        <div class=\"grid grid-cols-1 lg:grid-cols-3 gap-8\">
            
            <div class=\"lg:col-span-2 space-y-6\">
                
                {% if app.user %}
                    <div class=\"bg-zinc-900/50 border border-white/10 p-4 rounded-xl shadow-lg backdrop-blur-sm\">
                        {{ form_start(postForm) }}
                            <div class=\"flex gap-4\">
                                <div class=\"w-10 h-10 rounded-full bg-zinc-800 overflow-hidden shrink-0 border border-zinc-700\">
                                    <img src=\"https://ui-avatars.com/api/?name={{ app.user.email }}&background=000&color=d4af37\" class=\"w-full h-full\">
                                </div>
                                <div class=\"flex-grow space-y-3\">
                                    {{ form_widget(postForm.title) }}
                                    {{ form_widget(postForm.content) }}
                                    
                                    <div class=\"flex justify-between items-center mt-2\">
                                        {{ form_widget(postForm.category) }}
                                        <button type=\"submit\" class=\"bg-aurora-gold hover:bg-yellow-400 text-black font-bold px-6 py-1.5 rounded-full transition-all text-sm shadow-[0_0_10px_rgba(255,215,0,0.2)]\">
                                            Publicar
                                        </button>
                                    </div>
                                </div>
                            </div>
                        {{ form_end(postForm) }}
                    </div>
                {% endif %}

                {% for post in posts %}
                <div class=\"bg-zinc-900/40 border border-white/5 rounded-xl overflow-hidden flex shadow-lg hover:border-white/20 transition-all group\">
                    
                    <div class=\"w-14 bg-black/20 flex flex-col items-center py-4 gap-1 border-r border-white/5\">
                        <a href=\"{{ path('app_post_like', {id: post.id}) }}\" class=\"js-like-btn transition-colors hover:scale-110 {{ app.user and post.likes.contains(app.user) ? 'text-aurora-gold' : 'text-gray-600 hover:text-aurora-gold' }}\">
                            <i class=\"fa-solid fa-arrow-up text-lg\"></i>
                        </a>
                        
                        <span class=\"js-likes-count text-sm font-bold text-white\">{{ post.likes|length }}</span>
                        
                        <button class=\"text-gray-700 hover:text-blue-500 cursor-not-allowed opacity-50\"><i class=\"fa-solid fa-arrow-down\"></i></button>
                    </div>

                    <div class=\"p-5 flex-grow cursor-pointer relative\" onclick=\"window.location='{{ path('app_post_show', {id: post.id}) }}'\">
                        <div class=\"flex items-center gap-2 text-xs text-gray-500 mb-2 font-mono\">
                            <span class=\"font-bold text-gray-300\">u/{{ post.author.email|split('@')[0] }}</span>
                            <span>•</span>
                            <span>{{ post.createdAt|date('d M') }}</span>
                            <span class=\"bg-aurora-gold/10 text-aurora-gold border border-aurora-gold/20 px-2 py-0.5 rounded text-[10px] uppercase tracking-wider ml-2\">{{ post.category }}</span>
                        </div>

                        <h3 class=\"text-xl font-bold text-white mb-2 group-hover:text-aurora-gold transition-colors\">{{ post.title }}</h3>
                        <p class=\"text-gray-400 text-sm mb-4 line-clamp-2 leading-relaxed\">{{ post.content }}</p>

                        <div class=\"flex items-center gap-4 text-gray-500 text-xs font-bold z-10 relative\">
                            <div class=\"flex items-center gap-2 px-2 py-1 bg-black/20 rounded\">
                                <i class=\"fa-regular fa-comment-alt\"></i> {{ post.comments|length }} Comentarios
                            </div>
                            
                            <button onclick=\"event.stopPropagation(); navigator.clipboard.writeText('{{ url('app_post_show', {id: post.id}) }}'); alert('Enlace copiado!')\" class=\"flex items-center gap-2 hover:text-white hover:bg-white/10 px-2 py-1 rounded transition-colors\">
                                <i class=\"fa-solid fa-share\"></i> Compartir
                            </button>

                            <a href=\"{{ path('app_post_save', {id: post.id}) }}\" 
                               onclick=\"event.stopPropagation();\" 
                               class=\"js-save-btn flex items-center gap-2 hover:bg-white/10 px-2 py-1 rounded transition-colors {{ app.user and post.savedBy.contains(app.user) ? 'text-aurora-gold' : '' }}\">
                                <i class=\"{{ app.user and post.savedBy.contains(app.user) ? 'fa-solid' : 'fa-regular' }} fa-bookmark\"></i> Guardar
                            </a>
                        </div>
                    </div>
                </div>
                {% else %}
                    <div class=\"text-center py-20 border-2 border-dashed border-white/5 rounded-xl\">
                        <i class=\"fa-solid fa-ghost text-4xl text-zinc-700 mb-4\"></i>
                        <p class=\"text-zinc-500\">No hay publicaciones aún.</p>
                    </div>
                {% endfor %}
            </div>

            <div class=\"hidden lg:block space-y-6\">
                <form action=\"{{ path('app_community') }}\" method=\"get\" class=\"relative group\">
                    <input type=\"text\" name=\"q\" value=\"{{ searchQuery }}\" placeholder=\"Buscar posts...\" class=\"w-full bg-zinc-900/80 border border-white/10 rounded-lg px-4 py-3 text-white focus:border-aurora-gold focus:ring-1 focus:ring-aurora-gold/50 outline-none transition-all pl-10\">
                    <i class=\"fa-solid fa-search absolute left-3.5 top-3.5 text-gray-500 group-focus-within:text-aurora-gold transition-colors\"></i>
                </form>

                <div class=\"bg-zinc-900/50 border border-white/10 rounded-xl p-6 shadow-lg\">
                    <h4 class=\"text-white font-bold text-sm mb-4 flex items-center gap-2\">
                        <i class=\"fa-solid fa-user-astronaut text-aurora-gold\"></i> Tu Panel
                    </h4>
                    <a href=\"{{ path('app_my_posts') }}\" class=\"block w-full text-center bg-white/5 hover:bg-white/10 text-gray-300 hover:text-white py-2 rounded-lg text-sm border border-white/5 transition-all mb-2\">
                        Gestionar mis Publicaciones
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>
{% endblock %}", "community/index.html.twig", "/home/alumno/Documents/aurora-gg/templates/community/index.html.twig");
    }
}
