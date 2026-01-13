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

/* inventory/index.html.twig */
class __TwigTemplate_09cb85da4e07c8e82f53a011d1b5802e extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inventory/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inventory/index.html.twig"));

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

        yield "Inventario Funcional";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "<style>
    .inventory-dashboard {
        position: sticky; top: 0; z-index: 1000;
        background: #1e1e1e; color: white; padding: 15px;
        border-bottom: 3px solid #0d6efd;
        display: flex; justify-content: space-between; align-items: center;
        box-shadow: 0 4px 6px rgba(0,0,0,0.3);
    }
    .skin-card {
        cursor: pointer; transition: transform 0.2s, border 0.2s;
        border: 2px solid transparent; background: #2b2b2b; color: #fff;
    }
    .skin-card:hover { transform: translateY(-5px); }
    
    /* Clase que añade JS cuando seleccionas */
    .skin-card.selected {
        border-color: #28a745; /* Verde */
        background-color: #1a3c25;
        box-shadow: 0 0 10px #28a745;
    }
    
    .price-tag { color: #0dcaf0; font-weight: bold; }
    .total-display { font-size: 2rem; font-weight: bold; color: #28a745; }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 32
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

        // line 33
        yield "<div class=\"inventory-dashboard\">
    <div>
        <strong>Usuario:</strong> ";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35), "html", null, true);
        yield " | 
        <a href=\"";
        // line 36
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("auth_logout");
        yield "\" class=\"text-danger\">Desconectar</a>
    </div>
    <div>
        <button onclick=\"selectAll()\" class=\"btn btn-sm btn-outline-light\">Todo</button>
        <button onclick=\"clearSelection()\" class=\"btn btn-sm btn-outline-light\">Nada</button>
    </div>
    <div class=\"total-display\">
        Total: \$<span id=\"total-price\">0.00</span>
    </div>
</div>

<div class=\"container mt-4\">
    ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "flashes", ["error"], "method", false, false, false, 48));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 49
            yield "        <div class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        yield "
    <div class=\"row g-3\" id=\"inventory-grid\">
        ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 53, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 54
            yield "            <div class=\"col-6 col-md-3 col-lg-2\">
                <div class=\"card h-100 skin-card\" 
                     onclick=\"toggleItem(this, ";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 56), "html", null, true);
            yield ")\" 
                     data-price=\"";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 57), "html", null, true);
            yield "\">
                    
                    <img src=\"";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 59), "html", null, true);
            yield "\" class=\"card-img-top p-2\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 59), "html", null, true);
            yield "\">
                    <div class=\"card-body p-2 text-center\">
                        <small class=\"card-title d-block text-truncate\" title=\"";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 61), "html", null, true);
            yield "\">
                            ";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 62), "html", null, true);
            yield "
                        </small>
                        <div class=\"price-tag\">\$";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 64), 2), "html", null, true);
            yield "</div>
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        // line 68
        if (!$context['_iterated']) {
            // line 69
            yield "            <div class=\"col-12 text-center text-white\">
                <p>No se encontraron items o el inventario es privado.</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        yield "    </div>
</div>

<script>
    let totalPrice = 0.0;

    function toggleItem(element, price) {
        // Convertir precio a float por seguridad
        price = parseFloat(price);

        if (element.classList.contains('selected')) {
            // Deseleccionar
            element.classList.remove('selected');
            totalPrice -= price;
        } else {
            // Seleccionar
            element.classList.add('selected');
            totalPrice += price;
        }
        updateDisplay();
    }

    function selectAll() {
        const cards = document.querySelectorAll('.skin-card');
        totalPrice = 0;
        cards.forEach(card => {
            card.classList.add('selected');
            totalPrice += parseFloat(card.getAttribute('data-price'));
        });
        updateDisplay();
    }

    function clearSelection() {
        const cards = document.querySelectorAll('.skin-card');
        cards.forEach(card => card.classList.remove('selected'));
        totalPrice = 0;
        updateDisplay();
    }

    function updateDisplay() {
        // Evitar números negativos por errores de redondeo flotante
        if (totalPrice < 0) totalPrice = 0;
        document.getElementById('total-price').innerText = totalPrice.toFixed(2);
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
        return "inventory/index.html.twig";
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
        return array (  243 => 73,  234 => 69,  232 => 68,  223 => 64,  218 => 62,  214 => 61,  207 => 59,  202 => 57,  198 => 56,  194 => 54,  189 => 53,  185 => 51,  176 => 49,  172 => 48,  157 => 36,  153 => 35,  149 => 33,  136 => 32,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Inventario Funcional{% endblock %}

{% block stylesheets %}
<style>
    .inventory-dashboard {
        position: sticky; top: 0; z-index: 1000;
        background: #1e1e1e; color: white; padding: 15px;
        border-bottom: 3px solid #0d6efd;
        display: flex; justify-content: space-between; align-items: center;
        box-shadow: 0 4px 6px rgba(0,0,0,0.3);
    }
    .skin-card {
        cursor: pointer; transition: transform 0.2s, border 0.2s;
        border: 2px solid transparent; background: #2b2b2b; color: #fff;
    }
    .skin-card:hover { transform: translateY(-5px); }
    
    /* Clase que añade JS cuando seleccionas */
    .skin-card.selected {
        border-color: #28a745; /* Verde */
        background-color: #1a3c25;
        box-shadow: 0 0 10px #28a745;
    }
    
    .price-tag { color: #0dcaf0; font-weight: bold; }
    .total-display { font-size: 2rem; font-weight: bold; color: #28a745; }
</style>
{% endblock %}

{% block body %}
<div class=\"inventory-dashboard\">
    <div>
        <strong>Usuario:</strong> {{ app.user }} | 
        <a href=\"{{ path('auth_logout') }}\" class=\"text-danger\">Desconectar</a>
    </div>
    <div>
        <button onclick=\"selectAll()\" class=\"btn btn-sm btn-outline-light\">Todo</button>
        <button onclick=\"clearSelection()\" class=\"btn btn-sm btn-outline-light\">Nada</button>
    </div>
    <div class=\"total-display\">
        Total: \$<span id=\"total-price\">0.00</span>
    </div>
</div>

<div class=\"container mt-4\">
    {% for message in app.flashes('error') %}
        <div class=\"alert alert-danger\">{{ message }}</div>
    {% endfor %}

    <div class=\"row g-3\" id=\"inventory-grid\">
        {% for item in items %}
            <div class=\"col-6 col-md-3 col-lg-2\">
                <div class=\"card h-100 skin-card\" 
                     onclick=\"toggleItem(this, {{ item.price }})\" 
                     data-price=\"{{ item.price }}\">
                    
                    <img src=\"{{ item.image }}\" class=\"card-img-top p-2\" alt=\"{{ item.name }}\">
                    <div class=\"card-body p-2 text-center\">
                        <small class=\"card-title d-block text-truncate\" title=\"{{ item.name }}\">
                            {{ item.name }}
                        </small>
                        <div class=\"price-tag\">\${{ item.price|number_format(2) }}</div>
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"col-12 text-center text-white\">
                <p>No se encontraron items o el inventario es privado.</p>
            </div>
        {% endfor %}
    </div>
</div>

<script>
    let totalPrice = 0.0;

    function toggleItem(element, price) {
        // Convertir precio a float por seguridad
        price = parseFloat(price);

        if (element.classList.contains('selected')) {
            // Deseleccionar
            element.classList.remove('selected');
            totalPrice -= price;
        } else {
            // Seleccionar
            element.classList.add('selected');
            totalPrice += price;
        }
        updateDisplay();
    }

    function selectAll() {
        const cards = document.querySelectorAll('.skin-card');
        totalPrice = 0;
        cards.forEach(card => {
            card.classList.add('selected');
            totalPrice += parseFloat(card.getAttribute('data-price'));
        });
        updateDisplay();
    }

    function clearSelection() {
        const cards = document.querySelectorAll('.skin-card');
        cards.forEach(card => card.classList.remove('selected'));
        totalPrice = 0;
        updateDisplay();
    }

    function updateDisplay() {
        // Evitar números negativos por errores de redondeo flotante
        if (totalPrice < 0) totalPrice = 0;
        document.getElementById('total-price').innerText = totalPrice.toFixed(2);
    }
</script>
{% endblock %}", "inventory/index.html.twig", "/home/alumno/Documents/aurora-gg/templates/inventory/index.html.twig");
    }
}
