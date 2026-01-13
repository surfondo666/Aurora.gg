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

/* base.html.twig */
class __TwigTemplate_05c139cc27dbce74453e1e550e674d1a extends Template
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
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 2
        yield "<!DOCTYPE html>
<html lang=\"es\">
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        
        <link href=\"https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700;800&display=swap\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
        <script src=\"https://cdn.tailwindcss.com\"></script>
        
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            aurora: { bg: '#0A0A0A', card: '#121212', border: '#2A2A2A', gold: '#FFD700', neon: '#39FF14' }
                        },
                        fontFamily: { sans: ['Montserrat', 'sans-serif'] }
                    }
                }
            }
        document.addEventListener('DOMContentLoaded', function() {
            
            // LOGICA LIKE
            document.querySelectorAll('.js-like-btn').forEach(btn => {
                btn.addEventListener('click', function(e) {
                    e.preventDefault();
                    const icon = this.querySelector('i');
                    const countSpan = this.querySelector('.js-likes-count'); // Buscar dentro o al lado
                    const parentContainer = this.parentElement; 
                    const displayCount = countSpan || parentContainer.querySelector('.js-likes-count');

                    fetch(this.href)
                        .then(response => {
                            if (response.status === 403) window.location.href = '/login';
                            return response.json();
                        })
                        .then(data => {
                            if (data.liked) {
                                this.classList.add('text-aurora-gold');
                                this.classList.remove('text-gray-500', 'text-gray-600');
                                icon.style.transform = \"scale(1.2)\";
                                setTimeout(() => icon.style.transform = \"scale(1)\", 200);
                            } else {
                                this.classList.remove('text-aurora-gold');
                                this.classList.add('text-gray-500');
                            }
                            if (displayCount) displayCount.innerText = data.count;
                        });
                });
            });

            // LOGICA GUARDAR
            document.querySelectorAll('.js-save-btn').forEach(btn => {
                btn.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation(); // Evitar abrir el post si estamos en index
                    const icon = this.querySelector('i');

                    fetch(this.href)
                        .then(response => {
                            if (response.status === 403) window.location.href = '/login';
                            return response.json();
                        })
                        .then(data => {
                            if (data.saved) {
                                this.classList.add('text-aurora-gold');
                                this.classList.remove('text-gray-500', 'hover:text-white');
                                icon.classList.remove('fa-regular');
                                icon.classList.add('fa-solid');
                            } else {
                                this.classList.remove('text-aurora-gold');
                                this.classList.add('text-gray-500');
                                icon.classList.remove('fa-solid');
                                icon.classList.add('fa-regular');
                            }
                        });
                });
            });
        });
    </script>
    

        ";
        // line 86
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 88
        yield "
        ";
        // line 89
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 91
        yield "    </head>
    
    <body class=\"flex flex-col min-h-screen bg-aurora-bg text-gray-200\">
        
        ";
        // line 95
        yield from $this->load("components/_navbar.html.twig", 95)->unwrap()->yield($context);
        // line 96
        yield "
        <main class=\"pt-24 flex-grow\">
            ";
        // line 98
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 99
        yield "        </main>

        <footer class=\"bg-aurora-card border-t border-aurora-border mt-12 py-8 text-center text-xs text-gray-600\">
            Aurora.gg &copy; ";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " - CS2 Community
        </footer>
        
    </body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
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

        yield "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 86
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

        // line 87
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 89
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 90
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 98
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  254 => 98,  243 => 90,  230 => 89,  219 => 87,  206 => 86,  183 => 6,  167 => 102,  162 => 99,  160 => 98,  156 => 96,  154 => 95,  148 => 91,  146 => 89,  143 => 88,  141 => 86,  58 => 6,  52 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/base.html.twig #}
<!DOCTYPE html>
<html lang=\"es\">
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        
        <link href=\"https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700;800&display=swap\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
        <script src=\"https://cdn.tailwindcss.com\"></script>
        
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            aurora: { bg: '#0A0A0A', card: '#121212', border: '#2A2A2A', gold: '#FFD700', neon: '#39FF14' }
                        },
                        fontFamily: { sans: ['Montserrat', 'sans-serif'] }
                    }
                }
            }
        document.addEventListener('DOMContentLoaded', function() {
            
            // LOGICA LIKE
            document.querySelectorAll('.js-like-btn').forEach(btn => {
                btn.addEventListener('click', function(e) {
                    e.preventDefault();
                    const icon = this.querySelector('i');
                    const countSpan = this.querySelector('.js-likes-count'); // Buscar dentro o al lado
                    const parentContainer = this.parentElement; 
                    const displayCount = countSpan || parentContainer.querySelector('.js-likes-count');

                    fetch(this.href)
                        .then(response => {
                            if (response.status === 403) window.location.href = '/login';
                            return response.json();
                        })
                        .then(data => {
                            if (data.liked) {
                                this.classList.add('text-aurora-gold');
                                this.classList.remove('text-gray-500', 'text-gray-600');
                                icon.style.transform = \"scale(1.2)\";
                                setTimeout(() => icon.style.transform = \"scale(1)\", 200);
                            } else {
                                this.classList.remove('text-aurora-gold');
                                this.classList.add('text-gray-500');
                            }
                            if (displayCount) displayCount.innerText = data.count;
                        });
                });
            });

            // LOGICA GUARDAR
            document.querySelectorAll('.js-save-btn').forEach(btn => {
                btn.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation(); // Evitar abrir el post si estamos en index
                    const icon = this.querySelector('i');

                    fetch(this.href)
                        .then(response => {
                            if (response.status === 403) window.location.href = '/login';
                            return response.json();
                        })
                        .then(data => {
                            if (data.saved) {
                                this.classList.add('text-aurora-gold');
                                this.classList.remove('text-gray-500', 'hover:text-white');
                                icon.classList.remove('fa-regular');
                                icon.classList.add('fa-solid');
                            } else {
                                this.classList.remove('text-aurora-gold');
                                this.classList.add('text-gray-500');
                                icon.classList.remove('fa-solid');
                                icon.classList.add('fa-regular');
                            }
                        });
                });
            });
        });
    </script>
    

        {% block stylesheets %}
        {% endblock %}

        {% block javascripts %}
        {% endblock %}
    </head>
    
    <body class=\"flex flex-col min-h-screen bg-aurora-bg text-gray-200\">
        
        {% include 'components/_navbar.html.twig' %}

        <main class=\"pt-24 flex-grow\">
            {% block body %}{% endblock %}
        </main>

        <footer class=\"bg-aurora-card border-t border-aurora-border mt-12 py-8 text-center text-xs text-gray-600\">
            Aurora.gg &copy; {{ \"now\"|date(\"Y\") }} - CS2 Community
        </footer>
        
    </body>
</html>", "base.html.twig", "/home/alumno/Documents/aurora-gg/templates/base.html.twig");
    }
}
