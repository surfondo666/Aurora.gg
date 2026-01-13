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

/* community/show.html.twig */
class __TwigTemplate_ddf9b9d0cd6e4484afcf7ba2281970c4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "community/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "community/show.html.twig"));

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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        yield " | Aurora.gg";
        
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
    <div class=\"container mx-auto px-4 md:px-6 max-w-5xl\">
        
        <a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_community");
        yield "\" class=\"group inline-flex items-center gap-2 text-gray-500 hover:text-aurora-gold mb-8 transition-colors font-bold text-sm\">
            <i class=\"fa-solid fa-arrow-left group-hover:-translate-x-1 transition-transform\"></i> Volver a la Comunidad
        </a>

        <div class=\"bg-zinc-900/50 border border-white/10 rounded-xl overflow-hidden shadow-2xl mb-10 backdrop-blur-sm\">
            
            <div class=\"bg-black/40 p-5 border-b border-white/5 flex justify-between items-start\">
                <div class=\"flex items-center gap-4\">
                    <div class=\"p-0.5 bg-gradient-to-tr from-aurora-gold to-black rounded-full\">
                        <img src=\"https://ui-avatars.com/api/?name=";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 18, $this->source); })()), "author", [], "any", false, false, false, 18), "email", [], "any", false, false, false, 18), "html", null, true);
        yield "&background=000&color=d4af37\" class=\"w-11 h-11 rounded-full border-2 border-black\">
                    </div>
                    <div>
                        <div class=\"text-white font-bold text-base tracking-wide\">";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 21, $this->source); })()), "author", [], "any", false, false, false, 21), "email", [], "any", false, false, false, 21), "@"), 0, [], "array", false, false, false, 21), "html", null, true);
        yield "</div>
                        <div class=\"text-xs text-gray-500 font-mono mt-0.5\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 22, $this->source); })()), "createdAt", [], "any", false, false, false, 22), "d/m/Y H:i"), "html", null, true);
        yield "</div>
                    </div>
                </div>
                <span class=\"bg-aurora-gold/10 text-aurora-gold border border-aurora-gold/20 text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider\">
                    ";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 26, $this->source); })()), "category", [], "any", false, false, false, 26), "html", null, true);
        yield "
                </span>
            </div>

            <div class=\"p-8\">
                <h1 class=\"text-3xl md:text-4xl font-black text-white mb-6 leading-tight\">";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 31, $this->source); })()), "title", [], "any", false, false, false, 31), "html", null, true);
        yield "</h1>
                <div class=\"text-gray-300 leading-relaxed whitespace-pre-wrap text-lg font-light\">";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 32, $this->source); })()), "content", [], "any", false, false, false, 32), "html", null, true);
        yield "</div>
            </div>

            <div class=\"bg-black/20 p-4 border-t border-white/5 flex items-center gap-6\">
                <a href=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_like", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 36, $this->source); })()), "id", [], "any", false, false, false, 36)]), "html", null, true);
        yield "\" class=\"js-like-btn flex items-center gap-2.5 px-4 py-2 rounded-lg transition-all hover:bg-white/5 group ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "user", [], "any", false, false, false, 36) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 36, $this->source); })()), "likes", [], "any", false, false, false, 36), "contains", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "user", [], "any", false, false, false, 36)], "method", false, false, false, 36))) ? ("text-aurora-gold") : ("text-gray-500"));
        yield "\">
                    <i class=\"fa-solid fa-arrow-up text-lg group-hover:-translate-y-1 transition-transform\"></i>
                    <span class=\"js-likes-count font-bold text-sm\">";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 38, $this->source); })()), "likes", [], "any", false, false, false, 38)), "html", null, true);
        yield "</span>
                </a>
                
                <a href=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_save", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 41, $this->source); })()), "id", [], "any", false, false, false, 41)]), "html", null, true);
        yield "\" class=\"js-save-btn flex items-center gap-2.5 px-4 py-2 rounded-lg transition-all hover:bg-white/5 ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "user", [], "any", false, false, false, 41) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 41, $this->source); })()), "savedBy", [], "any", false, false, false, 41), "contains", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "user", [], "any", false, false, false, 41)], "method", false, false, false, 41))) ? ("text-aurora-gold") : ("text-gray-500 hover:text-white"));
        yield "\">
                    <i class=\"";
        // line 42
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "user", [], "any", false, false, false, 42) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 42, $this->source); })()), "savedBy", [], "any", false, false, false, 42), "contains", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "user", [], "any", false, false, false, 42)], "method", false, false, false, 42))) ? ("fa-solid") : ("fa-regular"));
        yield " fa-bookmark text-lg\"></i>
                    <span class=\"font-bold text-sm\">Guardar</span>
                </a>

                <button onclick=\"navigator.clipboard.writeText(window.location.href); alert('Enlace copiado')\" class=\"ml-auto text-gray-500 hover:text-white text-sm font-bold flex items-center gap-2 px-4 py-2 hover:bg-white/5 rounded-lg transition-colors\">
                    <i class=\"fa-solid fa-share-nodes\"></i> Compartir
                </button>
            </div>
        </div>

        <div class=\"relative\">
            <div class=\"absolute left-6 top-0 bottom-0 w-px bg-white/5 md:block hidden\"></div>
            <h3 class=\"text-xl font-bold text-white mb-8 pl-0 md:pl-16 flex items-center gap-3\">
                Comentarios <span class=\"bg-white/10 text-xs px-2 py-0.5 rounded-full text-gray-400\">";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 55, $this->source); })()), "comments", [], "any", false, false, false, 55)), "html", null, true);
        yield "</span>
            </h3>

            ";
        // line 58
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "user", [], "any", false, false, false, 58)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 59
            yield "                <div class=\"flex gap-6 mb-12 pl-0 md:pl-4 relative z-10\">
                    <div class=\"hidden md:block w-12 h-12 shrink-0 p-0.5 bg-zinc-800 rounded-full\">
                         <img src=\"https://ui-avatars.com/api/?name=";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "user", [], "any", false, false, false, 61), "email", [], "any", false, false, false, 61), "html", null, true);
            yield "&background=000&color=fff\" class=\"w-full h-full rounded-full\">
                    </div>
                    <div class=\"flex-grow\">
                        ";
            // line 64
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 64, $this->source); })()), 'form_start');
            yield "
                            <div class=\"relative group\">
                                ";
            // line 66
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 66, $this->source); })()), "content", [], "any", false, false, false, 66), 'widget');
            yield "
                                <button type=\"submit\" class=\"absolute bottom-3 right-3 bg-aurora-gold hover:bg-yellow-400 text-black font-bold px-6 py-1.5 rounded-md text-sm transition-all shadow-glow\">Publicar</button>
                            </div>
                        ";
            // line 69
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 69, $this->source); })()), 'form_end');
            yield "
                    </div>
                </div>
            ";
        } else {
            // line 73
            yield "                <div class=\"ml-0 md:ml-16 bg-red-900/10 border border-red-500/20 p-4 rounded text-center mb-8\">
                    <p class=\"text-red-200/70\">Debes <a href=\"";
            // line 74
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"text-red-400 hover:text-white underline font-bold\">iniciar sesión</a> para comentar.</p>
                </div>
            ";
        }
        // line 77
        yield "
            <div class=\"space-y-6\">
                ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 79, $this->source); })()), "comments", [], "any", false, false, false, 79));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 80
            yield "                    <div class=\"flex gap-4 md:gap-6 relative z-10 pl-0 md:pl-4 group\">
                        <div class=\"w-10 h-10 md:w-12 md:h-12 shrink-0 rounded-full bg-zinc-800 border border-zinc-700 overflow-hidden mt-1\">
                            <img src=\"https://ui-avatars.com/api/?name=";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 82), "email", [], "any", false, false, false, 82), "html", null, true);
            yield "&background=18181b&color=a1a1aa\" class=\"w-full h-full object-cover opacity-70 group-hover:opacity-100 transition-opacity\">
                        </div>
                        <div class=\"flex-grow bg-zinc-900/40 border border-white/5 rounded-lg p-4 hover:border-white/20 transition-colors\">
                            <div class=\"flex justify-between items-center mb-3\">
                                <span class=\"font-bold text-white text-sm group-hover:text-aurora-gold transition-colors\">";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 86), "email", [], "any", false, false, false, 86), "@"), 0, [], "array", false, false, false, 86), "html", null, true);
            yield "</span>
                                <span class=\"text-xs text-zinc-600 font-mono\">";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 87), "d M - H:i"), "html", null, true);
            yield "</span>
                            </div>
                            <p class=\"text-gray-400 text-sm leading-relaxed\">";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 89), "html", null, true);
            yield "</p>
                        </div>
                    </div>
                ";
            $context['_iterated'] = true;
        }
        // line 92
        if (!$context['_iterated']) {
            // line 93
            yield "                    <div class=\"ml-0 md:ml-16 py-10 border-2 border-dashed border-white/5 rounded-lg text-center\"><p class=\"text-zinc-500 italic\">Sé el primero en hablar.</p></div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['comment'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        yield "            </div>
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
        return "community/show.html.twig";
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
        return array (  280 => 95,  273 => 93,  271 => 92,  263 => 89,  258 => 87,  254 => 86,  247 => 82,  243 => 80,  238 => 79,  234 => 77,  228 => 74,  225 => 73,  218 => 69,  212 => 66,  207 => 64,  201 => 61,  197 => 59,  195 => 58,  189 => 55,  173 => 42,  167 => 41,  161 => 38,  154 => 36,  147 => 32,  143 => 31,  135 => 26,  128 => 22,  124 => 21,  118 => 18,  106 => 9,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ post.title }} | Aurora.gg{% endblock %}

{% block body %}
<div class=\"min-h-screen bg-black py-10 text-gray-300\">
    <div class=\"container mx-auto px-4 md:px-6 max-w-5xl\">
        
        <a href=\"{{ path('app_community') }}\" class=\"group inline-flex items-center gap-2 text-gray-500 hover:text-aurora-gold mb-8 transition-colors font-bold text-sm\">
            <i class=\"fa-solid fa-arrow-left group-hover:-translate-x-1 transition-transform\"></i> Volver a la Comunidad
        </a>

        <div class=\"bg-zinc-900/50 border border-white/10 rounded-xl overflow-hidden shadow-2xl mb-10 backdrop-blur-sm\">
            
            <div class=\"bg-black/40 p-5 border-b border-white/5 flex justify-between items-start\">
                <div class=\"flex items-center gap-4\">
                    <div class=\"p-0.5 bg-gradient-to-tr from-aurora-gold to-black rounded-full\">
                        <img src=\"https://ui-avatars.com/api/?name={{ post.author.email }}&background=000&color=d4af37\" class=\"w-11 h-11 rounded-full border-2 border-black\">
                    </div>
                    <div>
                        <div class=\"text-white font-bold text-base tracking-wide\">{{ post.author.email|split('@')[0] }}</div>
                        <div class=\"text-xs text-gray-500 font-mono mt-0.5\">{{ post.createdAt|date('d/m/Y H:i') }}</div>
                    </div>
                </div>
                <span class=\"bg-aurora-gold/10 text-aurora-gold border border-aurora-gold/20 text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider\">
                    {{ post.category }}
                </span>
            </div>

            <div class=\"p-8\">
                <h1 class=\"text-3xl md:text-4xl font-black text-white mb-6 leading-tight\">{{ post.title }}</h1>
                <div class=\"text-gray-300 leading-relaxed whitespace-pre-wrap text-lg font-light\">{{ post.content }}</div>
            </div>

            <div class=\"bg-black/20 p-4 border-t border-white/5 flex items-center gap-6\">
                <a href=\"{{ path('app_post_like', {id: post.id}) }}\" class=\"js-like-btn flex items-center gap-2.5 px-4 py-2 rounded-lg transition-all hover:bg-white/5 group {{ app.user and post.likes.contains(app.user) ? 'text-aurora-gold' : 'text-gray-500' }}\">
                    <i class=\"fa-solid fa-arrow-up text-lg group-hover:-translate-y-1 transition-transform\"></i>
                    <span class=\"js-likes-count font-bold text-sm\">{{ post.likes|length }}</span>
                </a>
                
                <a href=\"{{ path('app_post_save', {id: post.id}) }}\" class=\"js-save-btn flex items-center gap-2.5 px-4 py-2 rounded-lg transition-all hover:bg-white/5 {{ app.user and post.savedBy.contains(app.user) ? 'text-aurora-gold' : 'text-gray-500 hover:text-white' }}\">
                    <i class=\"{{ app.user and post.savedBy.contains(app.user) ? 'fa-solid' : 'fa-regular' }} fa-bookmark text-lg\"></i>
                    <span class=\"font-bold text-sm\">Guardar</span>
                </a>

                <button onclick=\"navigator.clipboard.writeText(window.location.href); alert('Enlace copiado')\" class=\"ml-auto text-gray-500 hover:text-white text-sm font-bold flex items-center gap-2 px-4 py-2 hover:bg-white/5 rounded-lg transition-colors\">
                    <i class=\"fa-solid fa-share-nodes\"></i> Compartir
                </button>
            </div>
        </div>

        <div class=\"relative\">
            <div class=\"absolute left-6 top-0 bottom-0 w-px bg-white/5 md:block hidden\"></div>
            <h3 class=\"text-xl font-bold text-white mb-8 pl-0 md:pl-16 flex items-center gap-3\">
                Comentarios <span class=\"bg-white/10 text-xs px-2 py-0.5 rounded-full text-gray-400\">{{ post.comments|length }}</span>
            </h3>

            {% if app.user %}
                <div class=\"flex gap-6 mb-12 pl-0 md:pl-4 relative z-10\">
                    <div class=\"hidden md:block w-12 h-12 shrink-0 p-0.5 bg-zinc-800 rounded-full\">
                         <img src=\"https://ui-avatars.com/api/?name={{ app.user.email }}&background=000&color=fff\" class=\"w-full h-full rounded-full\">
                    </div>
                    <div class=\"flex-grow\">
                        {{ form_start(commentForm) }}
                            <div class=\"relative group\">
                                {{ form_widget(commentForm.content) }}
                                <button type=\"submit\" class=\"absolute bottom-3 right-3 bg-aurora-gold hover:bg-yellow-400 text-black font-bold px-6 py-1.5 rounded-md text-sm transition-all shadow-glow\">Publicar</button>
                            </div>
                        {{ form_end(commentForm) }}
                    </div>
                </div>
            {% else %}
                <div class=\"ml-0 md:ml-16 bg-red-900/10 border border-red-500/20 p-4 rounded text-center mb-8\">
                    <p class=\"text-red-200/70\">Debes <a href=\"{{ path('app_login') }}\" class=\"text-red-400 hover:text-white underline font-bold\">iniciar sesión</a> para comentar.</p>
                </div>
            {% endif %}

            <div class=\"space-y-6\">
                {% for comment in post.comments %}
                    <div class=\"flex gap-4 md:gap-6 relative z-10 pl-0 md:pl-4 group\">
                        <div class=\"w-10 h-10 md:w-12 md:h-12 shrink-0 rounded-full bg-zinc-800 border border-zinc-700 overflow-hidden mt-1\">
                            <img src=\"https://ui-avatars.com/api/?name={{ comment.author.email }}&background=18181b&color=a1a1aa\" class=\"w-full h-full object-cover opacity-70 group-hover:opacity-100 transition-opacity\">
                        </div>
                        <div class=\"flex-grow bg-zinc-900/40 border border-white/5 rounded-lg p-4 hover:border-white/20 transition-colors\">
                            <div class=\"flex justify-between items-center mb-3\">
                                <span class=\"font-bold text-white text-sm group-hover:text-aurora-gold transition-colors\">{{ comment.author.email|split('@')[0] }}</span>
                                <span class=\"text-xs text-zinc-600 font-mono\">{{ comment.createdAt|date('d M - H:i') }}</span>
                            </div>
                            <p class=\"text-gray-400 text-sm leading-relaxed\">{{ comment.content }}</p>
                        </div>
                    </div>
                {% else %}
                    <div class=\"ml-0 md:ml-16 py-10 border-2 border-dashed border-white/5 rounded-lg text-center\"><p class=\"text-zinc-500 italic\">Sé el primero en hablar.</p></div>
                {% endfor %}
            </div>
        </div>
    </div>
</div>
{% endblock %}", "community/show.html.twig", "/home/alumno/Documents/aurora-gg/templates/community/show.html.twig");
    }
}
