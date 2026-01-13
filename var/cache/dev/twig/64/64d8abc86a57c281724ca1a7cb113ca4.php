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

/* @EasyAdmin/crud/index.html.twig */
class __TwigTemplate_dd8ddf3df5080fa79003e5f3a0d70421 extends Template
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
            'body_id' => [$this, 'block_body_id'],
            'body_class' => [$this, 'block_body_class'],
            'configured_head_contents' => [$this, 'block_configured_head_contents'],
            'configured_body_contents' => [$this, 'block_configured_body_contents'],
            'configured_stylesheets' => [$this, 'block_configured_stylesheets'],
            'configured_javascripts' => [$this, 'block_configured_javascripts'],
            'content_title' => [$this, 'block_content_title'],
            'page_actions' => [$this, 'block_page_actions'],
            'filters' => [$this, 'block_filters'],
            'global_actions' => [$this, 'block_global_actions'],
            'batch_actions' => [$this, 'block_batch_actions'],
            'main' => [$this, 'block_main'],
            'table_head' => [$this, 'block_table_head'],
            'table_body' => [$this, 'block_table_body'],
            'entity_row_attributes' => [$this, 'block_entity_row_attributes'],
            'entity_actions' => [$this, 'block_entity_actions'],
            'table_body_empty' => [$this, 'block_table_body_empty'],
            'table_footer' => [$this, 'block_table_footer'],
            'paginator' => [$this, 'block_paginator'],
            'delete_form' => [$this, 'block_delete_form'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 5
        return $this->load(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 5, $this->source); })()), "templatePath", ["layout"], "method", false, false, false, 5), 5);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/index.html.twig"));

        // line 4
        $context["ea"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->ea();
        // line 6
        $context["__internal_15b22a18d5bdec5ca64d40e82250e35c31ca271d772f340149f3664b02b49170"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 6, $this->source); })()), "i18n", [], "any", false, false, false, 6), "translationDomain", [], "any", false, false, false, 6);
        // line 11
        $context["ea_field_assets"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 11, $this->source); })()), "crud", [], "any", false, false, false, 11), "fieldAssets", [Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Crud::PAGE_INDEX")], "method", false, false, false, 11);
        // line 46
        $context["has_batch_actions"] = (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["batch_actions"]) || array_key_exists("batch_actions", $context) ? $context["batch_actions"] : (function () { throw new RuntimeError('Variable "batch_actions" does not exist.', 46, $this->source); })())) > 0);
        // line 5
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_id(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_id"));

        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 8, $this->source); })())) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("ea-index-" . CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 8, $this->source); })())), "name", [], "any", false, false, false, 8)), "html", null, true)) : (""));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_class"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("ea-index" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 9, $this->source); })())) > 0)) ? ((" ea-index-" . CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 9, $this->source); })())), "name", [], "any", false, false, false, 9))) : (""))), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 13
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_configured_head_contents(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_head_contents"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_head_contents"));

        // line 14
        yield "    ";
        yield from $this->yieldParentBlock("configured_head_contents", $context, $blocks);
        yield "
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea_field_assets"]) || array_key_exists("ea_field_assets", $context) ? $context["ea_field_assets"] : (function () { throw new RuntimeError('Variable "ea_field_assets" does not exist.', 15, $this->source); })()), "headContents", [], "any", false, false, false, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 16
            yield "        ";
            yield $context["htmlContent"];
            yield "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['htmlContent'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 20
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_configured_body_contents(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_body_contents"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_body_contents"));

        // line 21
        yield "    ";
        yield from $this->yieldParentBlock("configured_body_contents", $context, $blocks);
        yield "
    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea_field_assets"]) || array_key_exists("ea_field_assets", $context) ? $context["ea_field_assets"] : (function () { throw new RuntimeError('Variable "ea_field_assets" does not exist.', 22, $this->source); })()), "bodyContents", [], "any", false, false, false, 22));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 23
            yield "        ";
            yield $context["htmlContent"];
            yield "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['htmlContent'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 27
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_configured_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_stylesheets"));

        // line 28
        yield "    ";
        yield from $this->yieldParentBlock("configured_stylesheets", $context, $blocks);
        yield "
    ";
        // line 29
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_css_assets.html.twig", ["assets" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea_field_assets"]) || array_key_exists("ea_field_assets", $context) ? $context["ea_field_assets"] : (function () { throw new RuntimeError('Variable "ea_field_assets" does not exist.', 29, $this->source); })()), "cssAssets", [], "any", false, false, false, 29)], false);
        yield "
    ";
        // line 30
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_encore_link_tags.html.twig", ["assets" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea_field_assets"]) || array_key_exists("ea_field_assets", $context) ? $context["ea_field_assets"] : (function () { throw new RuntimeError('Variable "ea_field_assets" does not exist.', 30, $this->source); })()), "webpackEncoreAssets", [], "any", false, false, false, 30)], false);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 33
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_configured_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_javascripts"));

        // line 34
        yield "    ";
        yield from $this->yieldParentBlock("configured_javascripts", $context, $blocks);
        yield "
    ";
        // line 35
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_js_assets.html.twig", ["assets" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea_field_assets"]) || array_key_exists("ea_field_assets", $context) ? $context["ea_field_assets"] : (function () { throw new RuntimeError('Variable "ea_field_assets" does not exist.', 35, $this->source); })()), "jsAssets", [], "any", false, false, false, 35)], false);
        yield "
    ";
        // line 36
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_encore_script_tags.html.twig", ["assets" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea_field_assets"]) || array_key_exists("ea_field_assets", $context) ? $context["ea_field_assets"] : (function () { throw new RuntimeError('Variable "ea_field_assets" does not exist.', 36, $this->source); })()), "webpackEncoreAssets", [], "any", false, false, false, 36)], false);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 39
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_title"));

        // line 40
        $context["custom_page_title"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 40, $this->source); })()), "crud", [], "any", false, false, false, 40), "customPageTitle", ["index", null, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 40, $this->source); })()), "i18n", [], "any", false, false, false, 40), "translationParameters", [], "any", false, false, false, 40), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 40, $this->source); })()), "i18n", [], "any", false, false, false, 40), "translationDomain", [], "any", false, false, false, 40)], "method", false, false, false, 40);
        // line 41
        yield (((null === (isset($context["custom_page_title"]) || array_key_exists("custom_page_title", $context) ? $context["custom_page_title"] : (function () { throw new RuntimeError('Variable "custom_page_title" does not exist.', 41, $this->source); })()))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 42
(isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 42, $this->source); })()), "crud", [], "any", false, false, false, 42), "defaultPageTitle", ["index", null, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 42, $this->source); })()), "i18n", [], "any", false, false, false, 42), "translationParameters", [], "any", false, false, false, 42)], "method", false, false, false, 42), [],         // line 6
(isset($context["__internal_15b22a18d5bdec5ca64d40e82250e35c31ca271d772f340149f3664b02b49170"]) || array_key_exists("__internal_15b22a18d5bdec5ca64d40e82250e35c31ca271d772f340149f3664b02b49170", $context) ? $context["__internal_15b22a18d5bdec5ca64d40e82250e35c31ca271d772f340149f3664b02b49170"] : (function () { throw new RuntimeError('Variable "__internal_15b22a18d5bdec5ca64d40e82250e35c31ca271d772f340149f3664b02b49170" does not exist.', 6, $this->source); })()))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(        // line 43
(isset($context["custom_page_title"]) || array_key_exists("custom_page_title", $context) ? $context["custom_page_title"] : (function () { throw new RuntimeError('Variable "custom_page_title" does not exist.', 43, $this->source); })()), [],         // line 6
(isset($context["__internal_15b22a18d5bdec5ca64d40e82250e35c31ca271d772f340149f3664b02b49170"]) || array_key_exists("__internal_15b22a18d5bdec5ca64d40e82250e35c31ca271d772f340149f3664b02b49170", $context) ? $context["__internal_15b22a18d5bdec5ca64d40e82250e35c31ca271d772f340149f3664b02b49170"] : (function () { throw new RuntimeError('Variable "__internal_15b22a18d5bdec5ca64d40e82250e35c31ca271d772f340149f3664b02b49170" does not exist.', 6, $this->source); })()))));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 47
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_actions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_actions"));

        // line 48
        yield "    ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 48, $this->source); })())) > 0)) {
            // line 49
            yield "        <div class=\"datagrid-filters\">
            ";
            // line 50
            yield from $this->unwrap()->yieldBlock('filters', $context, $blocks);
            // line 63
            yield "        </div>
    ";
        }
        // line 65
        yield "
    ";
        // line 66
        yield from $this->unwrap()->yieldBlock('global_actions', $context, $blocks);
        // line 77
        yield "    ";
        yield from $this->unwrap()->yieldBlock('batch_actions', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 50
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_filters(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "filters"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "filters"));

        // line 51
        yield "                ";
        $context["applied_filters"] = Twig\Extension\CoreExtension::keys(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, true, false, 51), "query", [], "any", false, true, false, 51), "all", [], "any", false, true, false, 51), "filters", [], "array", true, true, false, 51)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 51, $this->source); })()), "request", [], "any", false, false, false, 51), "query", [], "any", false, false, false, 51), "all", [], "any", false, false, false, 51), "filters", [], "array", false, false, false, 51), [])) : ([])));
        // line 52
        yield "                <div class=\"btn-group action-filters\">
                    <a href=\"#\" data-href=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "setAction", ["renderFilters"], "method", false, false, false, 53), "html", null, true);
        yield "\" class=\"btn btn-secondary btn-labeled btn-labeled-right action-filters-button disabled ";
        yield (((($tmp = (isset($context["applied_filters"]) || array_key_exists("applied_filters", $context) ? $context["applied_filters"] : (function () { throw new RuntimeError('Variable "applied_filters" does not exist.', 53, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("action-filters-applied") : (""));
        yield "\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-filters\">
                        ";
        // line 54
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:filter"]);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->createTranslatable("filter.title", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 54, $this->source); })()), "i18n", [], "any", false, false, false, 54), "translationParameters", [], "any", false, false, false, 54), "EasyAdminBundle"), [],         // line 6
(isset($context["__internal_15b22a18d5bdec5ca64d40e82250e35c31ca271d772f340149f3664b02b49170"]) || array_key_exists("__internal_15b22a18d5bdec5ca64d40e82250e35c31ca271d772f340149f3664b02b49170", $context) ? $context["__internal_15b22a18d5bdec5ca64d40e82250e35c31ca271d772f340149f3664b02b49170"] : (function () { throw new RuntimeError('Variable "__internal_15b22a18d5bdec5ca64d40e82250e35c31ca271d772f340149f3664b02b49170" does not exist.', 6, $this->source); })())), "html", null, true);
        // line 54
        if ((($tmp = (isset($context["applied_filters"]) || array_key_exists("applied_filters", $context) ? $context["applied_filters"] : (function () { throw new RuntimeError('Variable "applied_filters" does not exist.', 54, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " <span class=\"action-filters-button-count\">(";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["applied_filters"]) || array_key_exists("applied_filters", $context) ? $context["applied_filters"] : (function () { throw new RuntimeError('Variable "applied_filters" does not exist.', 54, $this->source); })())), "html", null, true);
            yield ")</span>";
        }
        // line 55
        yield "                    </a>
                    ";
        // line 56
        if ((($tmp = (isset($context["applied_filters"]) || array_key_exists("applied_filters", $context) ? $context["applied_filters"] : (function () { throw new RuntimeError('Variable "applied_filters" does not exist.', 56, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 57
            yield "                        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "unset", ["filters"], "method", false, false, false, 57), "setAction", ["index"], "method", false, false, false, 57), "html", null, true);
            yield "\" class=\"btn btn-secondary action-filters-reset\">
                            ";
            // line 58
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:xmark"]);
            yield "
                        </a>
                    ";
        }
        // line 61
        yield "                </div>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 66
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_global_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "global_actions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "global_actions"));

        // line 67
        yield "        <div class=\"global-actions\">
            ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::reverse($this->env->getCharset(), (isset($context["global_actions"]) || array_key_exists("global_actions", $context) ? $context["global_actions"] : (function () { throw new RuntimeError('Variable "global_actions" does not exist.', 68, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 69
            yield "                ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "isActionGroup", [], "any", false, false, false, 69)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 70
                yield "                    ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "templatePath", [], "any", false, false, false, 70), ["group" => $context["item"], "entity" => null], false);
                yield "
                ";
            } else {
                // line 72
                yield "                    ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "templatePath", [], "any", false, false, false, 72), ["action" => $context["item"]], false);
                yield "
                ";
            }
            // line 74
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        yield "        </div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 77
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_batch_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "batch_actions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "batch_actions"));

        // line 78
        yield "        ";
        if ((($tmp = (isset($context["has_batch_actions"]) || array_key_exists("has_batch_actions", $context) ? $context["has_batch_actions"] : (function () { throw new RuntimeError('Variable "has_batch_actions" does not exist.', 78, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 79
            yield "            <div class=\"batch-actions d-none\">
                ";
            // line 80
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["batch_actions"]) || array_key_exists("batch_actions", $context) ? $context["batch_actions"] : (function () { throw new RuntimeError('Variable "batch_actions" does not exist.', 80, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 81
                yield "                    ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 81), ["action" => $context["action"]], false);
                yield "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['action'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            yield "            </div>
        ";
        }
        // line 85
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 88
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 89
        yield "    ";
        // line 90
        yield "    ";
        $context["sort_params"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 90), "query", [], "any", false, true, false, 90), "all", [], "any", false, true, false, 90), "sort", [], "array", true, true, false, 90)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 90, $this->source); })()), "request", [], "any", false, false, false, 90), "query", [], "any", false, false, false, 90), "all", [], "any", false, false, false, 90), "sort", [], "array", false, false, false, 90), [])) : ([]));
        // line 91
        yield "    ";
        $context["sort_field_name"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::keys((isset($context["sort_params"]) || array_key_exists("sort_params", $context) ? $context["sort_params"] : (function () { throw new RuntimeError('Variable "sort_params" does not exist.', 91, $this->source); })())));
        // line 92
        yield "    ";
        $context["sort_order"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), (isset($context["sort_params"]) || array_key_exists("sort_params", $context) ? $context["sort_params"] : (function () { throw new RuntimeError('Variable "sort_params" does not exist.', 92, $this->source); })()));
        // line 93
        yield "    ";
        $context["some_results_are_hidden"] = Twig\Extension\CoreExtension::reduce($this->env, (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 93, $this->source); })()), function ($__some_results_are_hidden__, $__entity__) use ($context, $macros) { $context["some_results_are_hidden"] = $__some_results_are_hidden__; $context["entity"] = $__entity__; return ((isset($context["some_results_are_hidden"]) || array_key_exists("some_results_are_hidden", $context) ? $context["some_results_are_hidden"] : (function () { throw new RuntimeError('Variable "some_results_are_hidden" does not exist.', 93, $this->source); })()) ||  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 93, $this->source); })()), "isAccessible", [], "any", false, false, false, 93)); }, false);
        // line 94
        yield "    ";
        $context["has_footer"] = (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 94, $this->source); })())) != 0);
        // line 95
        yield "    ";
        $context["has_search"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 95, $this->source); })()), "crud", [], "any", false, false, false, 95), "isSearchEnabled", [], "any", false, false, false, 95);
        // line 96
        yield "    ";
        $context["has_filters"] = (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 96, $this->source); })())) > 0);
        // line 97
        yield "    ";
        $context["num_results"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 97, $this->source); })()));
        // line 98
        yield "
    <table class=\"table datagrid ";
        // line 99
        yield ((Twig\Extension\CoreExtension::testEmpty((isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 99, $this->source); })()))) ? ("datagrid-empty") : (""));
        yield "\">
        ";
        // line 100
        if (((isset($context["num_results"]) || array_key_exists("num_results", $context) ? $context["num_results"] : (function () { throw new RuntimeError('Variable "num_results" does not exist.', 100, $this->source); })()) > 0)) {
            // line 101
            yield "            <thead>
            ";
            // line 102
            yield from $this->unwrap()->yieldBlock('table_head', $context, $blocks);
            // line 141
            yield "            </thead>
        ";
        }
        // line 143
        yield "
        <tbody>
        ";
        // line 145
        yield from $this->unwrap()->yieldBlock('table_body', $context, $blocks);
        // line 233
        yield "        </tbody>

        <tfoot>
        ";
        // line 236
        yield from $this->unwrap()->yieldBlock('table_footer', $context, $blocks);
        // line 238
        yield "        </tfoot>
    </table>

    ";
        // line 241
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 241, $this->source); })())) > 0)) {
            // line 242
            yield "        <div class=\"content-panel-footer without-padding without-border\">
            ";
            // line 243
            yield from $this->unwrap()->yieldBlock('paginator', $context, $blocks);
            // line 246
            yield "        </div>
    ";
        }
        // line 248
        yield "
    ";
        // line 249
        yield from $this->unwrap()->yieldBlock('delete_form', $context, $blocks);
        // line 252
        yield "
    ";
        // line 253
        if ((($tmp = (isset($context["has_filters"]) || array_key_exists("has_filters", $context) ? $context["has_filters"] : (function () { throw new RuntimeError('Variable "has_filters" does not exist.', 253, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 254
            yield "        ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/crud/includes/_filters_modal.html.twig");
            yield "
    ";
        }
        // line 256
        yield "
    ";
        // line 257
        if ((($tmp = (isset($context["has_batch_actions"]) || array_key_exists("has_batch_actions", $context) ? $context["has_batch_actions"] : (function () { throw new RuntimeError('Variable "has_batch_actions" does not exist.', 257, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 258
            yield "        ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/crud/includes/_batch_action_modal.html.twig", [], false);
            yield "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 102
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_table_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_head"));

        // line 103
        yield "                <tr>
                    ";
        // line 104
        if ((($tmp = (isset($context["has_batch_actions"]) || array_key_exists("has_batch_actions", $context) ? $context["has_batch_actions"] : (function () { throw new RuntimeError('Variable "has_batch_actions" does not exist.', 104, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 105
            yield "                        <th>
                            <div class=\"form-check\">
                                <span><input type=\"checkbox\" class=\"form-check-input form-batch-checkbox-all\" id=\"form-batch-checkbox-all\"></span>
                            </div>
                        </th>
                    ";
        }
        // line 111
        yield "
                    ";
        // line 112
        $context["ea_sort_asc"] = Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Option\\SortOrder::ASC");
        // line 113
        yield "                    ";
        $context["ea_sort_desc"] = Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Option\\SortOrder::DESC");
        // line 114
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((((CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 114, $this->source); })()), function ($__e__) use ($context, $macros) { $context["e"] = $__e__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["e"]) || array_key_exists("e", $context) ? $context["e"] : (function () { throw new RuntimeError('Variable "e" does not exist.', 114, $this->source); })()), "isAccessible", [], "any", false, false, false, 114); })), "fields", [], "any", true, true, false, 114) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 114, $this->source); })()), function ($__e__) use ($context, $macros) { $context["e"] = $__e__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["e"]) || array_key_exists("e", $context) ? $context["e"] : (function () { throw new RuntimeError('Variable "e" does not exist.', 114, $this->source); })()), "isAccessible", [], "any", false, false, false, 114); })), "fields", [], "any", false, false, false, 114)))) ? (CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 114, $this->source); })()), function ($__e__) use ($context, $macros) { $context["e"] = $__e__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["e"]) || array_key_exists("e", $context) ? $context["e"] : (function () { throw new RuntimeError('Variable "e" does not exist.', 114, $this->source); })()), "isAccessible", [], "any", false, false, false, 114); })), "fields", [], "any", false, false, false, 114)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 115
            yield "                        ";
            $context["is_searchable"] = ((null == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 115, $this->source); })()), "crud", [], "any", false, false, false, 115), "searchFields", [], "any", false, false, false, 115)) || CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 115), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 115, $this->source); })()), "crud", [], "any", false, false, false, 115), "searchFields", [], "any", false, false, false, 115)));
            // line 116
            yield "                        ";
            $context["is_sorting_field"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 116, $this->source); })()), "search", [], "any", false, false, false, 116), "isSortingField", [CoreExtension::getAttribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 116)], "method", false, false, false, 116);
            // line 117
            yield "                        ";
            $context["next_sort_direction"] = (((($tmp = (isset($context["is_sorting_field"]) || array_key_exists("is_sorting_field", $context) ? $context["is_sorting_field"] : (function () { throw new RuntimeError('Variable "is_sorting_field" does not exist.', 117, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 117, $this->source); })()), "search", [], "any", false, false, false, 117), "sortDirection", [CoreExtension::getAttribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 117)], "method", false, false, false, 117) == (isset($context["ea_sort_desc"]) || array_key_exists("ea_sort_desc", $context) ? $context["ea_sort_desc"] : (function () { throw new RuntimeError('Variable "ea_sort_desc" does not exist.', 117, $this->source); })()))) ? ((isset($context["ea_sort_asc"]) || array_key_exists("ea_sort_asc", $context) ? $context["ea_sort_asc"] : (function () { throw new RuntimeError('Variable "ea_sort_asc" does not exist.', 117, $this->source); })())) : ((isset($context["ea_sort_desc"]) || array_key_exists("ea_sort_desc", $context) ? $context["ea_sort_desc"] : (function () { throw new RuntimeError('Variable "ea_sort_desc" does not exist.', 117, $this->source); })())))) : ((isset($context["ea_sort_desc"]) || array_key_exists("ea_sort_desc", $context) ? $context["ea_sort_desc"] : (function () { throw new RuntimeError('Variable "ea_sort_desc" does not exist.', 117, $this->source); })())));
            // line 118
            yield "                        ";
            $context["column_icon"] = (((($tmp = (isset($context["is_sorting_field"]) || array_key_exists("is_sorting_field", $context) ? $context["is_sorting_field"] : (function () { throw new RuntimeError('Variable "is_sorting_field" does not exist.', 118, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (((((isset($context["next_sort_direction"]) || array_key_exists("next_sort_direction", $context) ? $context["next_sort_direction"] : (function () { throw new RuntimeError('Variable "next_sort_direction" does not exist.', 118, $this->source); })()) == (isset($context["ea_sort_desc"]) || array_key_exists("ea_sort_desc", $context) ? $context["ea_sort_desc"] : (function () { throw new RuntimeError('Variable "ea_sort_desc" does not exist.', 118, $this->source); })()))) ? ("internal:sort-arrow-up") : ("internal:sort-arrow-down"))) : ("internal:sort-arrows"));
            // line 119
            yield "
                        <th data-column=\"";
            // line 120
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 120), "html", null, true);
            yield "\" class=\"";
            yield (((($tmp = (isset($context["is_searchable"]) || array_key_exists("is_searchable", $context) ? $context["is_searchable"] : (function () { throw new RuntimeError('Variable "is_searchable" does not exist.', 120, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("searchable") : (""));
            yield " ";
            yield (((($tmp = (isset($context["is_sorting_field"]) || array_key_exists("is_sorting_field", $context) ? $context["is_sorting_field"] : (function () { throw new RuntimeError('Variable "is_sorting_field" does not exist.', 120, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("sorted") : (""));
            yield " ";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["field"], "isVirtual", [], "any", false, false, false, 120)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("field-virtual") : (""));
            yield " header-for-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(Twig\Extension\CoreExtension::filter($this->env, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["field"], "cssClass", [], "any", false, false, false, 120), " "), function ($__class__) use ($context, $macros) { $context["class"] = $__class__; return (is_string($_v0 = (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 120, $this->source); })())) && is_string($_v1 = "field-") && str_starts_with($_v0, $_v1)); }), ""), "html", null, true);
            yield " text-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "textAlign", [], "any", false, false, false, 120), "html", null, true);
            yield "\" dir=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 120, $this->source); })()), "i18n", [], "any", false, false, false, 120), "textDirection", [], "any", false, false, false, 120), "html", null, true);
            yield "\">
                            ";
            // line 121
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["field"], "isSortable", [], "any", false, false, false, 121)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 122
                yield "                                ";
                $context["sortable_url"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "set", ["page", 1], "method", false, false, false, 122), "set", ["sort", [CoreExtension::getAttribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 122) => (isset($context["next_sort_direction"]) || array_key_exists("next_sort_direction", $context) ? $context["next_sort_direction"] : (function () { throw new RuntimeError('Variable "next_sort_direction" does not exist.', 122, $this->source); })())]], "method", false, false, false, 122);
                // line 123
                yield "                                ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 123, $this->source); })()), "usePrettyUrls", [], "any", false, false, false, 123)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 124
                    yield "                                    ";
                    $context["sortable_url"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sortable_url"]) || array_key_exists("sortable_url", $context) ? $context["sortable_url"] : (function () { throw new RuntimeError('Variable "sortable_url" does not exist.', 124, $this->source); })()), "setController", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 124, $this->source); })()), "request", [], "any", false, false, false, 124), "attributes", [], "any", false, false, false, 124), "get", ["crudControllerFqcn"], "method", false, false, false, 124)], "method", false, false, false, 124), "setAction", ["index"], "method", false, false, false, 124);
                    // line 125
                    yield "                                ";
                }
                // line 126
                yield "
                                <a href=\"";
                // line 127
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["sortable_url"]) || array_key_exists("sortable_url", $context) ? $context["sortable_url"] : (function () { throw new RuntimeError('Variable "sortable_url" does not exist.', 127, $this->source); })()), "html", null, true);
                yield "\">
                                    ";
                // line 128
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 128), [],                 // line 6
(isset($context["__internal_15b22a18d5bdec5ca64d40e82250e35c31ca271d772f340149f3664b02b49170"]) || array_key_exists("__internal_15b22a18d5bdec5ca64d40e82250e35c31ca271d772f340149f3664b02b49170", $context) ? $context["__internal_15b22a18d5bdec5ca64d40e82250e35c31ca271d772f340149f3664b02b49170"] : (function () { throw new RuntimeError('Variable "__internal_15b22a18d5bdec5ca64d40e82250e35c31ca271d772f340149f3664b02b49170" does not exist.', 6, $this->source); })()));
                // line 128
                yield " ";
                yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => (isset($context["column_icon"]) || array_key_exists("column_icon", $context) ? $context["column_icon"] : (function () { throw new RuntimeError('Variable "column_icon" does not exist.', 128, $this->source); })())]);
                yield "
                                </a>
                            ";
            } else {
                // line 131
                yield "                                <span>";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 131), [],                 // line 6
(isset($context["__internal_15b22a18d5bdec5ca64d40e82250e35c31ca271d772f340149f3664b02b49170"]) || array_key_exists("__internal_15b22a18d5bdec5ca64d40e82250e35c31ca271d772f340149f3664b02b49170", $context) ? $context["__internal_15b22a18d5bdec5ca64d40e82250e35c31ca271d772f340149f3664b02b49170"] : (function () { throw new RuntimeError('Variable "__internal_15b22a18d5bdec5ca64d40e82250e35c31ca271d772f340149f3664b02b49170" does not exist.', 6, $this->source); })()));
                // line 131
                yield "</span>
                            ";
            }
            // line 133
            yield "                        </th>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        yield "
                    <th class=\"";
        // line 136
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 136, $this->source); })()), "crud", [], "any", false, false, false, 136), "showEntityActionsAsDropdown", [], "any", false, false, false, 136)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("actions-as-dropdown-table-head") : (""));
        yield "\" dir=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 136, $this->source); })()), "i18n", [], "any", false, false, false, 136), "textDirection", [], "any", false, false, false, 136), "html", null, true);
        yield "\">
                        <span class=\"visually-hidden\">";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->createTranslatable("action.entity_actions", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 137, $this->source); })()), "i18n", [], "any", false, false, false, 137), "translationParameters", [], "any", false, false, false, 137), "EasyAdminBundle"), [],         // line 6
(isset($context["__internal_15b22a18d5bdec5ca64d40e82250e35c31ca271d772f340149f3664b02b49170"]) || array_key_exists("__internal_15b22a18d5bdec5ca64d40e82250e35c31ca271d772f340149f3664b02b49170", $context) ? $context["__internal_15b22a18d5bdec5ca64d40e82250e35c31ca271d772f340149f3664b02b49170"] : (function () { throw new RuntimeError('Variable "__internal_15b22a18d5bdec5ca64d40e82250e35c31ca271d772f340149f3664b02b49170" does not exist.', 6, $this->source); })())), "html", null, true);
        // line 137
        yield "</span>
                    </th>
                </tr>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 145
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_table_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_body"));

        // line 146
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 146, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 147
            yield "                ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "isAccessible", [], "any", false, false, false, 147)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 148
                yield "                    <tr data-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "primaryKeyValueAsString", [], "any", false, false, false, 148), "html", null, true);
                yield "\" ";
                yield from $this->unwrap()->yieldBlock('entity_row_attributes', $context, $blocks);
                yield ">
                        ";
                // line 149
                if ((($tmp = (isset($context["has_batch_actions"]) || array_key_exists("has_batch_actions", $context) ? $context["has_batch_actions"] : (function () { throw new RuntimeError('Variable "has_batch_actions" does not exist.', 149, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 150
                    yield "                            <td class=\"batch-actions-selector\">
                                <div class=\"form-check\">
                                    <input type=\"checkbox\" class=\"form-check-input form-batch-checkbox\" id=\"form-batch-checkbox-";
                    // line 152
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 152), "html", null, true);
                    yield "\" value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "primaryKeyValue", [], "any", false, false, false, 152), "html", null, true);
                    yield "\">
                                </div>
                            </td>
                        ";
                }
                // line 156
                yield "
                        ";
                // line 157
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["entity"], "fields", [], "any", false, false, false, 157));
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 158
                    yield "                            ";
                    $context["is_searchable"] = ((null == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 158, $this->source); })()), "crud", [], "any", false, false, false, 158), "searchFields", [], "any", false, false, false, 158)) || CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 158), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 158, $this->source); })()), "crud", [], "any", false, false, false, 158), "searchFields", [], "any", false, false, false, 158)));
                    // line 159
                    yield "
                            <td data-column=\"";
                    // line 160
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 160), "html", null, true);
                    yield "\" data-label=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 160), [],                     // line 6
(isset($context["__internal_15b22a18d5bdec5ca64d40e82250e35c31ca271d772f340149f3664b02b49170"]) || array_key_exists("__internal_15b22a18d5bdec5ca64d40e82250e35c31ca271d772f340149f3664b02b49170", $context) ? $context["__internal_15b22a18d5bdec5ca64d40e82250e35c31ca271d772f340149f3664b02b49170"] : (function () { throw new RuntimeError('Variable "__internal_15b22a18d5bdec5ca64d40e82250e35c31ca271d772f340149f3664b02b49170" does not exist.', 6, $this->source); })())), "html");
                    // line 160
                    yield "\" class=\"";
                    yield (((($tmp = (isset($context["is_searchable"]) || array_key_exists("is_searchable", $context) ? $context["is_searchable"] : (function () { throw new RuntimeError('Variable "is_searchable" does not exist.', 160, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("searchable") : (""));
                    yield " ";
                    yield (((CoreExtension::getAttribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 160) == (isset($context["sort_field_name"]) || array_key_exists("sort_field_name", $context) ? $context["sort_field_name"] : (function () { throw new RuntimeError('Variable "sort_field_name" does not exist.', 160, $this->source); })()))) ? ("sorted") : (""));
                    yield " text-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "textAlign", [], "any", false, false, false, 160), "html", null, true);
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "cssClass", [], "any", false, false, false, 160), "html", null, true);
                    yield "\" dir=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 160, $this->source); })()), "i18n", [], "any", false, false, false, 160), "textDirection", [], "any", false, false, false, 160), "html", null, true);
                    yield "\" ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "htmlAttributes", [], "any", false, false, false, 160));
                    foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["name"], "html", null, true);
                        yield "=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html_attr");
                        yield "\" ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['name'], $context['value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    yield ">
                                ";
                    // line 161
                    yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "templatePath", [], "any", false, false, false, 161), ["field" => $context["field"], "entity" => $context["entity"]], false);
                    yield "
                            </td>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 164
                yield "
                        ";
                // line 165
                yield from $this->unwrap()->yieldBlock('entity_actions', $context, $blocks);
                // line 199
                yield "                    </tr>

                ";
            }
            // line 202
            yield "            ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 203
            yield "                ";
            yield from $this->unwrap()->yieldBlock('table_body_empty', $context, $blocks);
            // line 223
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['entity'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 224
        yield "
            ";
        // line 225
        if ((($tmp = (isset($context["some_results_are_hidden"]) || array_key_exists("some_results_are_hidden", $context) ? $context["some_results_are_hidden"] : (function () { throw new RuntimeError('Variable "some_results_are_hidden" does not exist.', 225, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 226
            yield "                <tr class=\"datagrid-row-empty\">
                    <td class=\"text-center\" colspan=\"100\">
                        <span class=\"datagrid-row-empty-message\">";
            // line 228
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:lock", "class" => "mr-1"]);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("datagrid.hidden_results", [], "EasyAdminBundle"), "html", null, true);
            yield "</span>
                    </td>
                </tr>
            ";
        }
        // line 232
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 148
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_entity_row_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entity_row_attributes"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entity_row_attributes"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 165
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_entity_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entity_actions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entity_actions"));

        // line 166
        yield "                            <td class=\"actions ";
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 166, $this->source); })()), "crud", [], "any", false, false, false, 166), "showEntityActionsAsDropdown", [], "any", false, false, false, 166)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("actions-as-dropdown") : (""));
        yield "\">
                                ";
        // line 167
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 167, $this->source); })()), "actions", [], "any", false, false, false, 167), "count", [], "any", false, false, false, 167) > 0)) {
            // line 168
            yield "                                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 168, $this->source); })()), "crud", [], "any", false, false, false, 168), "showEntityActionsAsDropdown", [], "any", false, false, false, 168)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 169
                yield "                                        ";
                $context["hasAnyActionWithIcon"] = (Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 169, $this->source); })()), "actions", [], "any", false, false, false, 169), function ($__item__) use ($context, $macros) { $context["item"] = $__item__; return (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 169, $this->source); })()), "isActionGroup", [], "any", false, false, false, 169)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (false) : ( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 169, $this->source); })()), "icon", [], "any", false, false, false, 169)))); })) > 0);
                // line 170
                yield "                                        ";
                $_v2 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
                $preRendered = $_v2->preRender("ea:ActionMenu", Twig\Extension\CoreExtension::toArray(["class" => "dropdown-actions"]));
                if (null !== $preRendered) {
                    yield $preRendered; 
                } else {
                    $preRenderEvent = $_v2->startEmbedComponent("ea:ActionMenu", Twig\Extension\CoreExtension::toArray(["class" => "dropdown-actions"]), $context, "@EasyAdmin/crud/index.html.twig", 30054531711);
                    $embeddedContext = $preRenderEvent->getVariables();
                    $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
                    $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
                    $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 30054531711);
                    $this->load("@EasyAdmin/crud/index.html.twig", 170, "30054531711")->display($embeddedContext, $embeddedBlocks);
                    $_v2->finishEmbedComponent();
                }
                // line 187
                yield "                                    ";
            } else {
                // line 188
                yield "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 188, $this->source); })()), "actions", [], "any", false, false, false, 188));
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 189
                    yield "                                            ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["action"], "isActionGroup", [], "any", false, false, false, 189)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 190
                        yield "                                                ";
                        yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 190), ["group" => $context["action"], "entity" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 190, $this->source); })())], false);
                        yield "
                                            ";
                    } else {
                        // line 192
                        yield "                                                ";
                        yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 192), ["action" => $context["action"], "entity" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 192, $this->source); })()), "isIncludedInDropdown" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 192, $this->source); })()), "crud", [], "any", false, false, false, 192), "showEntityActionsAsDropdown", [], "any", false, false, false, 192)], false);
                        yield "
                                            ";
                    }
                    // line 194
                    yield "                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['action'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 195
                yield "                                    ";
            }
            // line 196
            yield "                                ";
        }
        // line 197
        yield "                            </td>
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 203
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_table_body_empty(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_body_empty"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_body_empty"));

        // line 204
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 14));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 205
            yield "                        <tr class=\"empty-row\">
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                        </tr>

                        ";
            // line 214
            if ((3 == CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 214))) {
                // line 215
                yield "                            <tr class=\"no-results\">
                                <td colspan=\"100\">
                                    ";
                // line 217
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->createTranslatable("datagrid.no_results", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 217, $this->source); })()), "i18n", [], "any", false, false, false, 217), "translationParameters", [], "any", false, false, false, 217), "EasyAdminBundle"), [],                 // line 6
(isset($context["__internal_15b22a18d5bdec5ca64d40e82250e35c31ca271d772f340149f3664b02b49170"]) || array_key_exists("__internal_15b22a18d5bdec5ca64d40e82250e35c31ca271d772f340149f3664b02b49170", $context) ? $context["__internal_15b22a18d5bdec5ca64d40e82250e35c31ca271d772f340149f3664b02b49170"] : (function () { throw new RuntimeError('Variable "__internal_15b22a18d5bdec5ca64d40e82250e35c31ca271d772f340149f3664b02b49170" does not exist.', 6, $this->source); })())), "html", null, true);
                // line 217
                yield "
                                </td>
                            </tr>
                        ";
            }
            // line 221
            yield "                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 222
        yield "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 236
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_table_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_footer"));

        // line 237
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 243
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_paginator(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "paginator"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "paginator"));

        // line 244
        yield "                ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 244, $this->source); })()), "templatePath", ["crud/paginator"], "method", false, false, false, 244), ["render_detailed_pagination" =>  !(isset($context["some_results_are_hidden"]) || array_key_exists("some_results_are_hidden", $context) ? $context["some_results_are_hidden"] : (function () { throw new RuntimeError('Variable "some_results_are_hidden" does not exist.', 244, $this->source); })())]);
        yield "
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 249
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_delete_form(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "delete_form"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "delete_form"));

        // line 250
        yield "        ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/crud/includes/_delete_form.html.twig", [], false);
        yield "
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
        return "@EasyAdmin/crud/index.html.twig";
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
        return array (  1212 => 250,  1199 => 249,  1185 => 244,  1172 => 243,  1161 => 237,  1148 => 236,  1137 => 222,  1123 => 221,  1117 => 217,  1115 => 6,  1114 => 217,  1110 => 215,  1108 => 214,  1097 => 205,  1079 => 204,  1066 => 203,  1054 => 197,  1051 => 196,  1048 => 195,  1042 => 194,  1036 => 192,  1030 => 190,  1027 => 189,  1022 => 188,  1019 => 187,  1004 => 170,  1001 => 169,  998 => 168,  996 => 167,  991 => 166,  978 => 165,  956 => 148,  945 => 232,  936 => 228,  932 => 226,  930 => 225,  927 => 224,  921 => 223,  918 => 203,  905 => 202,  900 => 199,  898 => 165,  895 => 164,  886 => 161,  861 => 160,  859 => 6,  856 => 160,  853 => 159,  850 => 158,  846 => 157,  843 => 156,  834 => 152,  830 => 150,  828 => 149,  821 => 148,  818 => 147,  799 => 146,  786 => 145,  772 => 137,  770 => 6,  769 => 137,  763 => 136,  760 => 135,  753 => 133,  749 => 131,  747 => 6,  745 => 131,  738 => 128,  736 => 6,  735 => 128,  731 => 127,  728 => 126,  725 => 125,  722 => 124,  719 => 123,  716 => 122,  714 => 121,  698 => 120,  695 => 119,  692 => 118,  689 => 117,  686 => 116,  683 => 115,  678 => 114,  675 => 113,  673 => 112,  670 => 111,  662 => 105,  660 => 104,  657 => 103,  644 => 102,  629 => 258,  627 => 257,  624 => 256,  618 => 254,  616 => 253,  613 => 252,  611 => 249,  608 => 248,  604 => 246,  602 => 243,  599 => 242,  597 => 241,  592 => 238,  590 => 236,  585 => 233,  583 => 145,  579 => 143,  575 => 141,  573 => 102,  570 => 101,  568 => 100,  564 => 99,  561 => 98,  558 => 97,  555 => 96,  552 => 95,  549 => 94,  546 => 93,  543 => 92,  540 => 91,  537 => 90,  535 => 89,  522 => 88,  511 => 85,  507 => 83,  498 => 81,  494 => 80,  491 => 79,  488 => 78,  475 => 77,  463 => 75,  457 => 74,  451 => 72,  445 => 70,  442 => 69,  438 => 68,  435 => 67,  422 => 66,  410 => 61,  404 => 58,  399 => 57,  397 => 56,  394 => 55,  388 => 54,  386 => 6,  383 => 54,  377 => 53,  374 => 52,  371 => 51,  358 => 50,  346 => 77,  344 => 66,  341 => 65,  337 => 63,  335 => 50,  332 => 49,  329 => 48,  316 => 47,  305 => 6,  304 => 43,  303 => 6,  302 => 42,  301 => 41,  299 => 40,  286 => 39,  273 => 36,  269 => 35,  264 => 34,  251 => 33,  238 => 30,  234 => 29,  229 => 28,  216 => 27,  198 => 23,  194 => 22,  189 => 21,  176 => 20,  158 => 16,  154 => 15,  149 => 14,  136 => 13,  113 => 9,  90 => 8,  80 => 5,  78 => 46,  76 => 11,  74 => 6,  72 => 4,  59 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{# @var entities \\EasyCorp\\Bundle\\EasyAdminBundle\\Collection\\EntityCollection #}
{# @var paginator \\EasyCorp\\Bundle\\EasyAdminBundle\\Orm\\EntityPaginator #}
{% set ea = ea() %}
{% extends ea.templatePath('layout') %}
{% trans_default_domain ea.i18n.translationDomain %}

{% block body_id entities|length > 0 ? 'ea-index-' ~ entities|first.name : '' %}
{% block body_class 'ea-index' ~ (entities|length > 0 ? ' ea-index-' ~ entities|first.name : '') %}

{% set ea_field_assets = ea.crud.fieldAssets(constant('EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Config\\\\Crud::PAGE_INDEX')) %}

{% block configured_head_contents %}
    {{ parent() }}
    {% for htmlContent in ea_field_assets.headContents %}
        {{ htmlContent|raw }}
    {% endfor %}
{% endblock %}

{% block configured_body_contents %}
    {{ parent() }}
    {% for htmlContent in ea_field_assets.bodyContents %}
        {{ htmlContent|raw }}
    {% endfor %}
{% endblock %}

{% block configured_stylesheets %}
    {{ parent() }}
    {{ include('@EasyAdmin/includes/_css_assets.html.twig', {assets: ea_field_assets.cssAssets}, with_context: false) }}
    {{ include('@EasyAdmin/includes/_encore_link_tags.html.twig', {assets: ea_field_assets.webpackEncoreAssets}, with_context: false) }}
{% endblock %}

{% block configured_javascripts %}
    {{ parent() }}
    {{ include('@EasyAdmin/includes/_js_assets.html.twig', {assets: ea_field_assets.jsAssets}, with_context: false) }}
    {{ include('@EasyAdmin/includes/_encore_script_tags.html.twig', {assets: ea_field_assets.webpackEncoreAssets}, with_context: false) }}
{% endblock %}

{% block content_title %}
    {%- set custom_page_title = ea.crud.customPageTitle('index', null, ea.i18n.translationParameters, ea.i18n.translationDomain) -%}
    {{- custom_page_title is null
        ? ea.crud.defaultPageTitle('index', null, ea.i18n.translationParameters)|trans|raw
        : custom_page_title|trans|raw -}}
{% endblock %}

{% set has_batch_actions = batch_actions|length > 0 %}
{% block page_actions %}
    {% if filters|length > 0 %}
        <div class=\"datagrid-filters\">
            {% block filters %}
                {% set applied_filters = ea.request.query.all['filters']|default([])|keys %}
                <div class=\"btn-group action-filters\">
                    <a href=\"#\" data-href=\"{{ ea_url().setAction('renderFilters') }}\" class=\"btn btn-secondary btn-labeled btn-labeled-right action-filters-button disabled {{ applied_filters ? 'action-filters-applied' }}\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-filters\">
                        {{ component('ea:Icon', { name: 'internal:filter' }) }} {{ t('filter.title', ea.i18n.translationParameters, 'EasyAdminBundle')|trans }}{% if applied_filters %} <span class=\"action-filters-button-count\">({{ applied_filters|length }})</span>{% endif %}
                    </a>
                    {% if applied_filters %}
                        <a href=\"{{ ea_url().unset('filters').setAction('index') }}\" class=\"btn btn-secondary action-filters-reset\">
                            {{ component('ea:Icon', { name: 'internal:xmark' }) }}
                        </a>
                    {% endif %}
                </div>
            {% endblock filters %}
        </div>
    {% endif %}

    {% block global_actions %}
        <div class=\"global-actions\">
            {% for item in global_actions|reverse %}
                {% if item.isActionGroup %}
                    {{ include(item.templatePath, {group: item, entity: null}, with_context: false) }}
                {% else %}
                    {{ include(item.templatePath, {action: item}, with_context: false) }}
                {% endif %}
            {% endfor %}
        </div>
    {% endblock global_actions %}
    {% block batch_actions %}
        {% if has_batch_actions %}
            <div class=\"batch-actions d-none\">
                {% for action in batch_actions %}
                    {{ include(action.templatePath, {action: action}, with_context: false) }}
                {% endfor %}
            </div>
        {% endif %}
    {% endblock %}
{% endblock page_actions %}

{% block main %}
    {# sort can be multiple; let's consider the sorting field the first one #}
    {% set sort_params = app.request.query.all['sort']|default({}) %}
    {% set sort_field_name = sort_params|keys|first %}
    {% set sort_order = sort_params|first %}
    {% set some_results_are_hidden = entities|reduce((some_results_are_hidden, entity) => some_results_are_hidden or not entity.isAccessible, false) %}
    {% set has_footer = entities|length != 0 %}
    {% set has_search = ea.crud.isSearchEnabled %}
    {% set has_filters = filters|length > 0 %}
    {% set num_results = entities|length %}

    <table class=\"table datagrid {{ entities is empty ? 'datagrid-empty' }}\">
        {% if num_results > 0 %}
            <thead>
            {% block table_head %}
                <tr>
                    {% if has_batch_actions %}
                        <th>
                            <div class=\"form-check\">
                                <span><input type=\"checkbox\" class=\"form-check-input form-batch-checkbox-all\" id=\"form-batch-checkbox-all\"></span>
                            </div>
                        </th>
                    {% endif %}

                    {% set ea_sort_asc = constant('EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Config\\\\Option\\\\SortOrder::ASC') %}
                    {% set ea_sort_desc = constant('EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Config\\\\Option\\\\SortOrder::DESC') %}
                    {% for field in entities|filter(e => e.isAccessible)|first.fields ?? [] %}
                        {% set is_searchable = null == ea.crud.searchFields or field.property in ea.crud.searchFields %}
                        {% set is_sorting_field = ea.search.isSortingField(field.property) %}
                        {% set next_sort_direction = is_sorting_field ? (ea.search.sortDirection(field.property) == ea_sort_desc ? ea_sort_asc : ea_sort_desc) : ea_sort_desc %}
                        {% set column_icon = is_sorting_field ? (next_sort_direction == ea_sort_desc ? 'internal:sort-arrow-up' : 'internal:sort-arrow-down') : 'internal:sort-arrows' %}

                        <th data-column=\"{{ field.property }}\" class=\"{{ is_searchable ? 'searchable' }} {{ is_sorting_field ? 'sorted' }} {{ field.isVirtual ? 'field-virtual' }} header-for-{{ field.cssClass|split(' ')|filter(class => class starts with 'field-')|join('') }} text-{{ field.textAlign }}\" dir=\"{{ ea.i18n.textDirection }}\">
                            {% if field.isSortable %}
                                {% set sortable_url = ea_url().set('page', 1).set('sort', {(field.property): next_sort_direction}) %}
                                {% if ea.usePrettyUrls %}
                                    {% set sortable_url = sortable_url.setController(ea.request.attributes.get('crudControllerFqcn')).setAction('index') %}
                                {% endif %}

                                <a href=\"{{ sortable_url }}\">
                                    {{ field.label|trans|raw }} {{ component('ea:Icon', { name: (column_icon) }) }}
                                </a>
                            {% else %}
                                <span>{{ field.label|trans|raw }}</span>
                            {% endif %}
                        </th>
                    {% endfor %}

                    <th class=\"{{ ea.crud.showEntityActionsAsDropdown ? 'actions-as-dropdown-table-head' }}\" dir=\"{{ ea.i18n.textDirection }}\">
                        <span class=\"visually-hidden\">{{ t('action.entity_actions', ea.i18n.translationParameters, 'EasyAdminBundle')|trans }}</span>
                    </th>
                </tr>
            {% endblock table_head %}
            </thead>
        {% endif %}

        <tbody>
        {% block table_body %}
            {% for entity in entities %}
                {% if entity.isAccessible %}
                    <tr data-id=\"{{ entity.primaryKeyValueAsString }}\" {% block entity_row_attributes %}{% endblock %}>
                        {% if has_batch_actions %}
                            <td class=\"batch-actions-selector\">
                                <div class=\"form-check\">
                                    <input type=\"checkbox\" class=\"form-check-input form-batch-checkbox\" id=\"form-batch-checkbox-{{ loop.index0 }}\" value=\"{{ entity.primaryKeyValue }}\">
                                </div>
                            </td>
                        {% endif %}

                        {% for field in entity.fields %}
                            {% set is_searchable = null == ea.crud.searchFields or field.property in ea.crud.searchFields %}

                            <td data-column=\"{{ field.property }}\" data-label=\"{{ field.label|trans|e('html') }}\" class=\"{{ is_searchable ? 'searchable' }} {{ field.property == sort_field_name ? 'sorted' }} text-{{ field.textAlign }} {{ field.cssClass }}\" dir=\"{{ ea.i18n.textDirection }}\" {% for name, value in field.htmlAttributes %}{{ name }}=\"{{ value|e('html_attr') }}\" {% endfor %}>
                                {{ include(field.templatePath, {field: field, entity: entity}, with_context: false) }}
                            </td>
                        {% endfor %}

                        {% block entity_actions %}
                            <td class=\"actions {{ ea.crud.showEntityActionsAsDropdown ? 'actions-as-dropdown' }}\">
                                {% if entity.actions.count > 0 %}
                                    {% if ea.crud.showEntityActionsAsDropdown %}
                                        {% set hasAnyActionWithIcon = entity.actions|filter(item => item.isActionGroup ? false : item.icon is not null)|length > 0 %}
                                        {% component 'ea:ActionMenu' with { class: 'dropdown-actions' } %}
                                            {% block content %}{% component 'ea:ActionMenu:Button' with { withoutDropdownToggleMarker: true } %}
                                                {% block content %}{{ component('ea:Icon', { name: 'internal:dots-horizontal' }) }}
                                            {% endblock %}{% endcomponent %}

                                            {% component 'ea:ActionMenu:Overlay' %}
                                                {% block content %}{% component 'ea:ActionMenu:ActionList' with { hasSubmenus: (entity.actions|filter(item => item.isActionGroup)|length > 0) } %}
                                                    {% block content %}{% for item in entity.actions %}
                                                        {% if item.isActionGroup %}
                                                            {{ component('ea:ActionMenu:ActionList:ItemGroup', { group: (item), showBlankIcons: (hasAnyActionWithIcon), entity: (entity) }) }}
                                                        {% else %}
                                                            {{ component('ea:ActionMenu:ActionList:Item', { class: (item.cssClass)~' dropdown-item-variant-'~(item.variant.value), url: (item.linkUrl), icon: (item.icon), 'icon:class': 'action-icon', htmlAttributes: (item.htmlAttributes), renderAsForm: (item.isRenderedAsForm), label: (item.label|trans), 'label:class': 'action-label', renderLabelRaw: true, showBlankIcons: (hasAnyActionWithIcon) }) }}
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endblock %}{% endcomponent %}
                                            {% endblock %}{% endcomponent %}
                                        {% endblock %}{% endcomponent %}
                                    {% else %}
                                        {% for action in entity.actions %}
                                            {% if action.isActionGroup %}
                                                {{ include(action.templatePath, {group: action, entity: entity}, with_context: false) }}
                                            {% else %}
                                                {{ include(action.templatePath, {action: action, entity: entity, isIncludedInDropdown: ea.crud.showEntityActionsAsDropdown}, with_context: false) }}
                                            {% endif %}
                                        {% endfor %}
                                    {% endif %}
                                {% endif %}
                            </td>
                        {% endblock entity_actions %}
                    </tr>

                {% endif %}
            {% else %}
                {% block table_body_empty %}
                    {% for i in 1..14 %}
                        <tr class=\"empty-row\">
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                        </tr>

                        {% if 3 == loop.index %}
                            <tr class=\"no-results\">
                                <td colspan=\"100\">
                                    {{ t('datagrid.no_results', ea.i18n.translationParameters, 'EasyAdminBundle')|trans }}
                                </td>
                            </tr>
                        {% endif %}
                    {% endfor %}
                {% endblock table_body_empty %}
            {% endfor %}

            {% if some_results_are_hidden %}
                <tr class=\"datagrid-row-empty\">
                    <td class=\"text-center\" colspan=\"100\">
                        <span class=\"datagrid-row-empty-message\">{{ component('ea:Icon', { name: 'internal:lock', class: 'mr-1' }) }} {{ 'datagrid.hidden_results'|trans({}, 'EasyAdminBundle') }}</span>
                    </td>
                </tr>
            {% endif %}
        {% endblock table_body %}
        </tbody>

        <tfoot>
        {% block table_footer %}
        {% endblock table_footer %}
        </tfoot>
    </table>

    {% if entities|length > 0 %}
        <div class=\"content-panel-footer without-padding without-border\">
            {% block paginator %}
                {{ include(ea.templatePath('crud/paginator'), {render_detailed_pagination: not some_results_are_hidden}) }}
            {% endblock paginator %}
        </div>
    {% endif %}

    {% block delete_form %}
        {{ include('@EasyAdmin/crud/includes/_delete_form.html.twig', with_context: false) }}
    {% endblock delete_form %}

    {% if has_filters %}
        {{ include('@EasyAdmin/crud/includes/_filters_modal.html.twig') }}
    {% endif %}

    {% if has_batch_actions %}
        {{ include('@EasyAdmin/crud/includes/_batch_action_modal.html.twig', {}, with_context: false) }}
    {% endif %}
{% endblock main %}
", "@EasyAdmin/crud/index.html.twig", "/home/alumno/Documents/aurora-gg/vendor/easycorp/easyadmin-bundle/templates/crud/index.html.twig");
    }
}


/* @EasyAdmin/crud/index.html.twig */
class __TwigTemplate_dd8ddf3df5080fa79003e5f3a0d70421___30054531711 extends Template
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
            'outer__block_fallback' => [$this, 'block_outer__block_fallback'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 170
        return $this->load((isset($context["__parent__"]) || array_key_exists("__parent__", $context) ? $context["__parent__"] : (function () { throw new RuntimeError('Variable "__parent__" does not exist.', 170, $this->source); })()), 170);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/index.html.twig"));

        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 171
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $_v3 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
        $preRendered = $_v3->preRender("ea:ActionMenu:Button", Twig\Extension\CoreExtension::toArray(["withoutDropdownToggleMarker" => true]));
        if (null !== $preRendered) {
            yield $preRendered; 
        } else {
            $preRenderEvent = $_v3->startEmbedComponent("ea:ActionMenu:Button", Twig\Extension\CoreExtension::toArray(["withoutDropdownToggleMarker" => true]), $context, "@EasyAdmin/crud/index.html.twig", 32907355891);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 32907355891);
            $this->load("@EasyAdmin/crud/index.html.twig", 171, "32907355891")->display($embeddedContext, $embeddedBlocks);
            $_v3->finishEmbedComponent();
        }
        // line 174
        yield "
                                            ";
        // line 175
        $_v4 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
        $preRendered = $_v4->preRender("ea:ActionMenu:Overlay", Twig\Extension\CoreExtension::toArray([]));
        if (null !== $preRendered) {
            yield $preRendered; 
        } else {
            $preRenderEvent = $_v4->startEmbedComponent("ea:ActionMenu:Overlay", Twig\Extension\CoreExtension::toArray([]), $context, "@EasyAdmin/crud/index.html.twig", 32763678681);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 32763678681);
            $this->load("@EasyAdmin/crud/index.html.twig", 175, "32763678681")->display($embeddedContext, $embeddedBlocks);
            $_v4->finishEmbedComponent();
        }
        // line 186
        yield "                                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/crud/index.html.twig";
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
        return array (  1626 => 186,  1612 => 175,  1609 => 174,  1583 => 171,  1540 => 170,  1212 => 250,  1199 => 249,  1185 => 244,  1172 => 243,  1161 => 237,  1148 => 236,  1137 => 222,  1123 => 221,  1117 => 217,  1115 => 6,  1114 => 217,  1110 => 215,  1108 => 214,  1097 => 205,  1079 => 204,  1066 => 203,  1054 => 197,  1051 => 196,  1048 => 195,  1042 => 194,  1036 => 192,  1030 => 190,  1027 => 189,  1022 => 188,  1019 => 187,  1004 => 170,  1001 => 169,  998 => 168,  996 => 167,  991 => 166,  978 => 165,  956 => 148,  945 => 232,  936 => 228,  932 => 226,  930 => 225,  927 => 224,  921 => 223,  918 => 203,  905 => 202,  900 => 199,  898 => 165,  895 => 164,  886 => 161,  861 => 160,  859 => 6,  856 => 160,  853 => 159,  850 => 158,  846 => 157,  843 => 156,  834 => 152,  830 => 150,  828 => 149,  821 => 148,  818 => 147,  799 => 146,  786 => 145,  772 => 137,  770 => 6,  769 => 137,  763 => 136,  760 => 135,  753 => 133,  749 => 131,  747 => 6,  745 => 131,  738 => 128,  736 => 6,  735 => 128,  731 => 127,  728 => 126,  725 => 125,  722 => 124,  719 => 123,  716 => 122,  714 => 121,  698 => 120,  695 => 119,  692 => 118,  689 => 117,  686 => 116,  683 => 115,  678 => 114,  675 => 113,  673 => 112,  670 => 111,  662 => 105,  660 => 104,  657 => 103,  644 => 102,  629 => 258,  627 => 257,  624 => 256,  618 => 254,  616 => 253,  613 => 252,  611 => 249,  608 => 248,  604 => 246,  602 => 243,  599 => 242,  597 => 241,  592 => 238,  590 => 236,  585 => 233,  583 => 145,  579 => 143,  575 => 141,  573 => 102,  570 => 101,  568 => 100,  564 => 99,  561 => 98,  558 => 97,  555 => 96,  552 => 95,  549 => 94,  546 => 93,  543 => 92,  540 => 91,  537 => 90,  535 => 89,  522 => 88,  511 => 85,  507 => 83,  498 => 81,  494 => 80,  491 => 79,  488 => 78,  475 => 77,  463 => 75,  457 => 74,  451 => 72,  445 => 70,  442 => 69,  438 => 68,  435 => 67,  422 => 66,  410 => 61,  404 => 58,  399 => 57,  397 => 56,  394 => 55,  388 => 54,  386 => 6,  383 => 54,  377 => 53,  374 => 52,  371 => 51,  358 => 50,  346 => 77,  344 => 66,  341 => 65,  337 => 63,  335 => 50,  332 => 49,  329 => 48,  316 => 47,  305 => 6,  304 => 43,  303 => 6,  302 => 42,  301 => 41,  299 => 40,  286 => 39,  273 => 36,  269 => 35,  264 => 34,  251 => 33,  238 => 30,  234 => 29,  229 => 28,  216 => 27,  198 => 23,  194 => 22,  189 => 21,  176 => 20,  158 => 16,  154 => 15,  149 => 14,  136 => 13,  113 => 9,  90 => 8,  80 => 5,  78 => 46,  76 => 11,  74 => 6,  72 => 4,  59 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{# @var entities \\EasyCorp\\Bundle\\EasyAdminBundle\\Collection\\EntityCollection #}
{# @var paginator \\EasyCorp\\Bundle\\EasyAdminBundle\\Orm\\EntityPaginator #}
{% set ea = ea() %}
{% extends ea.templatePath('layout') %}
{% trans_default_domain ea.i18n.translationDomain %}

{% block body_id entities|length > 0 ? 'ea-index-' ~ entities|first.name : '' %}
{% block body_class 'ea-index' ~ (entities|length > 0 ? ' ea-index-' ~ entities|first.name : '') %}

{% set ea_field_assets = ea.crud.fieldAssets(constant('EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Config\\\\Crud::PAGE_INDEX')) %}

{% block configured_head_contents %}
    {{ parent() }}
    {% for htmlContent in ea_field_assets.headContents %}
        {{ htmlContent|raw }}
    {% endfor %}
{% endblock %}

{% block configured_body_contents %}
    {{ parent() }}
    {% for htmlContent in ea_field_assets.bodyContents %}
        {{ htmlContent|raw }}
    {% endfor %}
{% endblock %}

{% block configured_stylesheets %}
    {{ parent() }}
    {{ include('@EasyAdmin/includes/_css_assets.html.twig', {assets: ea_field_assets.cssAssets}, with_context: false) }}
    {{ include('@EasyAdmin/includes/_encore_link_tags.html.twig', {assets: ea_field_assets.webpackEncoreAssets}, with_context: false) }}
{% endblock %}

{% block configured_javascripts %}
    {{ parent() }}
    {{ include('@EasyAdmin/includes/_js_assets.html.twig', {assets: ea_field_assets.jsAssets}, with_context: false) }}
    {{ include('@EasyAdmin/includes/_encore_script_tags.html.twig', {assets: ea_field_assets.webpackEncoreAssets}, with_context: false) }}
{% endblock %}

{% block content_title %}
    {%- set custom_page_title = ea.crud.customPageTitle('index', null, ea.i18n.translationParameters, ea.i18n.translationDomain) -%}
    {{- custom_page_title is null
        ? ea.crud.defaultPageTitle('index', null, ea.i18n.translationParameters)|trans|raw
        : custom_page_title|trans|raw -}}
{% endblock %}

{% set has_batch_actions = batch_actions|length > 0 %}
{% block page_actions %}
    {% if filters|length > 0 %}
        <div class=\"datagrid-filters\">
            {% block filters %}
                {% set applied_filters = ea.request.query.all['filters']|default([])|keys %}
                <div class=\"btn-group action-filters\">
                    <a href=\"#\" data-href=\"{{ ea_url().setAction('renderFilters') }}\" class=\"btn btn-secondary btn-labeled btn-labeled-right action-filters-button disabled {{ applied_filters ? 'action-filters-applied' }}\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-filters\">
                        {{ component('ea:Icon', { name: 'internal:filter' }) }} {{ t('filter.title', ea.i18n.translationParameters, 'EasyAdminBundle')|trans }}{% if applied_filters %} <span class=\"action-filters-button-count\">({{ applied_filters|length }})</span>{% endif %}
                    </a>
                    {% if applied_filters %}
                        <a href=\"{{ ea_url().unset('filters').setAction('index') }}\" class=\"btn btn-secondary action-filters-reset\">
                            {{ component('ea:Icon', { name: 'internal:xmark' }) }}
                        </a>
                    {% endif %}
                </div>
            {% endblock filters %}
        </div>
    {% endif %}

    {% block global_actions %}
        <div class=\"global-actions\">
            {% for item in global_actions|reverse %}
                {% if item.isActionGroup %}
                    {{ include(item.templatePath, {group: item, entity: null}, with_context: false) }}
                {% else %}
                    {{ include(item.templatePath, {action: item}, with_context: false) }}
                {% endif %}
            {% endfor %}
        </div>
    {% endblock global_actions %}
    {% block batch_actions %}
        {% if has_batch_actions %}
            <div class=\"batch-actions d-none\">
                {% for action in batch_actions %}
                    {{ include(action.templatePath, {action: action}, with_context: false) }}
                {% endfor %}
            </div>
        {% endif %}
    {% endblock %}
{% endblock page_actions %}

{% block main %}
    {# sort can be multiple; let's consider the sorting field the first one #}
    {% set sort_params = app.request.query.all['sort']|default({}) %}
    {% set sort_field_name = sort_params|keys|first %}
    {% set sort_order = sort_params|first %}
    {% set some_results_are_hidden = entities|reduce((some_results_are_hidden, entity) => some_results_are_hidden or not entity.isAccessible, false) %}
    {% set has_footer = entities|length != 0 %}
    {% set has_search = ea.crud.isSearchEnabled %}
    {% set has_filters = filters|length > 0 %}
    {% set num_results = entities|length %}

    <table class=\"table datagrid {{ entities is empty ? 'datagrid-empty' }}\">
        {% if num_results > 0 %}
            <thead>
            {% block table_head %}
                <tr>
                    {% if has_batch_actions %}
                        <th>
                            <div class=\"form-check\">
                                <span><input type=\"checkbox\" class=\"form-check-input form-batch-checkbox-all\" id=\"form-batch-checkbox-all\"></span>
                            </div>
                        </th>
                    {% endif %}

                    {% set ea_sort_asc = constant('EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Config\\\\Option\\\\SortOrder::ASC') %}
                    {% set ea_sort_desc = constant('EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Config\\\\Option\\\\SortOrder::DESC') %}
                    {% for field in entities|filter(e => e.isAccessible)|first.fields ?? [] %}
                        {% set is_searchable = null == ea.crud.searchFields or field.property in ea.crud.searchFields %}
                        {% set is_sorting_field = ea.search.isSortingField(field.property) %}
                        {% set next_sort_direction = is_sorting_field ? (ea.search.sortDirection(field.property) == ea_sort_desc ? ea_sort_asc : ea_sort_desc) : ea_sort_desc %}
                        {% set column_icon = is_sorting_field ? (next_sort_direction == ea_sort_desc ? 'internal:sort-arrow-up' : 'internal:sort-arrow-down') : 'internal:sort-arrows' %}

                        <th data-column=\"{{ field.property }}\" class=\"{{ is_searchable ? 'searchable' }} {{ is_sorting_field ? 'sorted' }} {{ field.isVirtual ? 'field-virtual' }} header-for-{{ field.cssClass|split(' ')|filter(class => class starts with 'field-')|join('') }} text-{{ field.textAlign }}\" dir=\"{{ ea.i18n.textDirection }}\">
                            {% if field.isSortable %}
                                {% set sortable_url = ea_url().set('page', 1).set('sort', {(field.property): next_sort_direction}) %}
                                {% if ea.usePrettyUrls %}
                                    {% set sortable_url = sortable_url.setController(ea.request.attributes.get('crudControllerFqcn')).setAction('index') %}
                                {% endif %}

                                <a href=\"{{ sortable_url }}\">
                                    {{ field.label|trans|raw }} {{ component('ea:Icon', { name: (column_icon) }) }}
                                </a>
                            {% else %}
                                <span>{{ field.label|trans|raw }}</span>
                            {% endif %}
                        </th>
                    {% endfor %}

                    <th class=\"{{ ea.crud.showEntityActionsAsDropdown ? 'actions-as-dropdown-table-head' }}\" dir=\"{{ ea.i18n.textDirection }}\">
                        <span class=\"visually-hidden\">{{ t('action.entity_actions', ea.i18n.translationParameters, 'EasyAdminBundle')|trans }}</span>
                    </th>
                </tr>
            {% endblock table_head %}
            </thead>
        {% endif %}

        <tbody>
        {% block table_body %}
            {% for entity in entities %}
                {% if entity.isAccessible %}
                    <tr data-id=\"{{ entity.primaryKeyValueAsString }}\" {% block entity_row_attributes %}{% endblock %}>
                        {% if has_batch_actions %}
                            <td class=\"batch-actions-selector\">
                                <div class=\"form-check\">
                                    <input type=\"checkbox\" class=\"form-check-input form-batch-checkbox\" id=\"form-batch-checkbox-{{ loop.index0 }}\" value=\"{{ entity.primaryKeyValue }}\">
                                </div>
                            </td>
                        {% endif %}

                        {% for field in entity.fields %}
                            {% set is_searchable = null == ea.crud.searchFields or field.property in ea.crud.searchFields %}

                            <td data-column=\"{{ field.property }}\" data-label=\"{{ field.label|trans|e('html') }}\" class=\"{{ is_searchable ? 'searchable' }} {{ field.property == sort_field_name ? 'sorted' }} text-{{ field.textAlign }} {{ field.cssClass }}\" dir=\"{{ ea.i18n.textDirection }}\" {% for name, value in field.htmlAttributes %}{{ name }}=\"{{ value|e('html_attr') }}\" {% endfor %}>
                                {{ include(field.templatePath, {field: field, entity: entity}, with_context: false) }}
                            </td>
                        {% endfor %}

                        {% block entity_actions %}
                            <td class=\"actions {{ ea.crud.showEntityActionsAsDropdown ? 'actions-as-dropdown' }}\">
                                {% if entity.actions.count > 0 %}
                                    {% if ea.crud.showEntityActionsAsDropdown %}
                                        {% set hasAnyActionWithIcon = entity.actions|filter(item => item.isActionGroup ? false : item.icon is not null)|length > 0 %}
                                        {% component 'ea:ActionMenu' with { class: 'dropdown-actions' } %}
                                            {% block content %}{% component 'ea:ActionMenu:Button' with { withoutDropdownToggleMarker: true } %}
                                                {% block content %}{{ component('ea:Icon', { name: 'internal:dots-horizontal' }) }}
                                            {% endblock %}{% endcomponent %}

                                            {% component 'ea:ActionMenu:Overlay' %}
                                                {% block content %}{% component 'ea:ActionMenu:ActionList' with { hasSubmenus: (entity.actions|filter(item => item.isActionGroup)|length > 0) } %}
                                                    {% block content %}{% for item in entity.actions %}
                                                        {% if item.isActionGroup %}
                                                            {{ component('ea:ActionMenu:ActionList:ItemGroup', { group: (item), showBlankIcons: (hasAnyActionWithIcon), entity: (entity) }) }}
                                                        {% else %}
                                                            {{ component('ea:ActionMenu:ActionList:Item', { class: (item.cssClass)~' dropdown-item-variant-'~(item.variant.value), url: (item.linkUrl), icon: (item.icon), 'icon:class': 'action-icon', htmlAttributes: (item.htmlAttributes), renderAsForm: (item.isRenderedAsForm), label: (item.label|trans), 'label:class': 'action-label', renderLabelRaw: true, showBlankIcons: (hasAnyActionWithIcon) }) }}
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endblock %}{% endcomponent %}
                                            {% endblock %}{% endcomponent %}
                                        {% endblock %}{% endcomponent %}
                                    {% else %}
                                        {% for action in entity.actions %}
                                            {% if action.isActionGroup %}
                                                {{ include(action.templatePath, {group: action, entity: entity}, with_context: false) }}
                                            {% else %}
                                                {{ include(action.templatePath, {action: action, entity: entity, isIncludedInDropdown: ea.crud.showEntityActionsAsDropdown}, with_context: false) }}
                                            {% endif %}
                                        {% endfor %}
                                    {% endif %}
                                {% endif %}
                            </td>
                        {% endblock entity_actions %}
                    </tr>

                {% endif %}
            {% else %}
                {% block table_body_empty %}
                    {% for i in 1..14 %}
                        <tr class=\"empty-row\">
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                        </tr>

                        {% if 3 == loop.index %}
                            <tr class=\"no-results\">
                                <td colspan=\"100\">
                                    {{ t('datagrid.no_results', ea.i18n.translationParameters, 'EasyAdminBundle')|trans }}
                                </td>
                            </tr>
                        {% endif %}
                    {% endfor %}
                {% endblock table_body_empty %}
            {% endfor %}

            {% if some_results_are_hidden %}
                <tr class=\"datagrid-row-empty\">
                    <td class=\"text-center\" colspan=\"100\">
                        <span class=\"datagrid-row-empty-message\">{{ component('ea:Icon', { name: 'internal:lock', class: 'mr-1' }) }} {{ 'datagrid.hidden_results'|trans({}, 'EasyAdminBundle') }}</span>
                    </td>
                </tr>
            {% endif %}
        {% endblock table_body %}
        </tbody>

        <tfoot>
        {% block table_footer %}
        {% endblock table_footer %}
        </tfoot>
    </table>

    {% if entities|length > 0 %}
        <div class=\"content-panel-footer without-padding without-border\">
            {% block paginator %}
                {{ include(ea.templatePath('crud/paginator'), {render_detailed_pagination: not some_results_are_hidden}) }}
            {% endblock paginator %}
        </div>
    {% endif %}

    {% block delete_form %}
        {{ include('@EasyAdmin/crud/includes/_delete_form.html.twig', with_context: false) }}
    {% endblock delete_form %}

    {% if has_filters %}
        {{ include('@EasyAdmin/crud/includes/_filters_modal.html.twig') }}
    {% endif %}

    {% if has_batch_actions %}
        {{ include('@EasyAdmin/crud/includes/_batch_action_modal.html.twig', {}, with_context: false) }}
    {% endif %}
{% endblock main %}
", "@EasyAdmin/crud/index.html.twig", "/home/alumno/Documents/aurora-gg/vendor/easycorp/easyadmin-bundle/templates/crud/index.html.twig");
    }
}


/* @EasyAdmin/crud/index.html.twig */
class __TwigTemplate_dd8ddf3df5080fa79003e5f3a0d70421___32907355891 extends Template
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
            'outer__block_fallback' => [$this, 'block_outer__block_fallback'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 171
        return $this->load((isset($context["__parent__"]) || array_key_exists("__parent__", $context) ? $context["__parent__"] : (function () { throw new RuntimeError('Variable "__parent__" does not exist.', 171, $this->source); })()), 171);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/index.html.twig"));

        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 172
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:dots-horizontal"]);
        yield "
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
        return "@EasyAdmin/crud/index.html.twig";
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
        return array (  1994 => 172,  1951 => 171,  1626 => 186,  1612 => 175,  1609 => 174,  1583 => 171,  1540 => 170,  1212 => 250,  1199 => 249,  1185 => 244,  1172 => 243,  1161 => 237,  1148 => 236,  1137 => 222,  1123 => 221,  1117 => 217,  1115 => 6,  1114 => 217,  1110 => 215,  1108 => 214,  1097 => 205,  1079 => 204,  1066 => 203,  1054 => 197,  1051 => 196,  1048 => 195,  1042 => 194,  1036 => 192,  1030 => 190,  1027 => 189,  1022 => 188,  1019 => 187,  1004 => 170,  1001 => 169,  998 => 168,  996 => 167,  991 => 166,  978 => 165,  956 => 148,  945 => 232,  936 => 228,  932 => 226,  930 => 225,  927 => 224,  921 => 223,  918 => 203,  905 => 202,  900 => 199,  898 => 165,  895 => 164,  886 => 161,  861 => 160,  859 => 6,  856 => 160,  853 => 159,  850 => 158,  846 => 157,  843 => 156,  834 => 152,  830 => 150,  828 => 149,  821 => 148,  818 => 147,  799 => 146,  786 => 145,  772 => 137,  770 => 6,  769 => 137,  763 => 136,  760 => 135,  753 => 133,  749 => 131,  747 => 6,  745 => 131,  738 => 128,  736 => 6,  735 => 128,  731 => 127,  728 => 126,  725 => 125,  722 => 124,  719 => 123,  716 => 122,  714 => 121,  698 => 120,  695 => 119,  692 => 118,  689 => 117,  686 => 116,  683 => 115,  678 => 114,  675 => 113,  673 => 112,  670 => 111,  662 => 105,  660 => 104,  657 => 103,  644 => 102,  629 => 258,  627 => 257,  624 => 256,  618 => 254,  616 => 253,  613 => 252,  611 => 249,  608 => 248,  604 => 246,  602 => 243,  599 => 242,  597 => 241,  592 => 238,  590 => 236,  585 => 233,  583 => 145,  579 => 143,  575 => 141,  573 => 102,  570 => 101,  568 => 100,  564 => 99,  561 => 98,  558 => 97,  555 => 96,  552 => 95,  549 => 94,  546 => 93,  543 => 92,  540 => 91,  537 => 90,  535 => 89,  522 => 88,  511 => 85,  507 => 83,  498 => 81,  494 => 80,  491 => 79,  488 => 78,  475 => 77,  463 => 75,  457 => 74,  451 => 72,  445 => 70,  442 => 69,  438 => 68,  435 => 67,  422 => 66,  410 => 61,  404 => 58,  399 => 57,  397 => 56,  394 => 55,  388 => 54,  386 => 6,  383 => 54,  377 => 53,  374 => 52,  371 => 51,  358 => 50,  346 => 77,  344 => 66,  341 => 65,  337 => 63,  335 => 50,  332 => 49,  329 => 48,  316 => 47,  305 => 6,  304 => 43,  303 => 6,  302 => 42,  301 => 41,  299 => 40,  286 => 39,  273 => 36,  269 => 35,  264 => 34,  251 => 33,  238 => 30,  234 => 29,  229 => 28,  216 => 27,  198 => 23,  194 => 22,  189 => 21,  176 => 20,  158 => 16,  154 => 15,  149 => 14,  136 => 13,  113 => 9,  90 => 8,  80 => 5,  78 => 46,  76 => 11,  74 => 6,  72 => 4,  59 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{# @var entities \\EasyCorp\\Bundle\\EasyAdminBundle\\Collection\\EntityCollection #}
{# @var paginator \\EasyCorp\\Bundle\\EasyAdminBundle\\Orm\\EntityPaginator #}
{% set ea = ea() %}
{% extends ea.templatePath('layout') %}
{% trans_default_domain ea.i18n.translationDomain %}

{% block body_id entities|length > 0 ? 'ea-index-' ~ entities|first.name : '' %}
{% block body_class 'ea-index' ~ (entities|length > 0 ? ' ea-index-' ~ entities|first.name : '') %}

{% set ea_field_assets = ea.crud.fieldAssets(constant('EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Config\\\\Crud::PAGE_INDEX')) %}

{% block configured_head_contents %}
    {{ parent() }}
    {% for htmlContent in ea_field_assets.headContents %}
        {{ htmlContent|raw }}
    {% endfor %}
{% endblock %}

{% block configured_body_contents %}
    {{ parent() }}
    {% for htmlContent in ea_field_assets.bodyContents %}
        {{ htmlContent|raw }}
    {% endfor %}
{% endblock %}

{% block configured_stylesheets %}
    {{ parent() }}
    {{ include('@EasyAdmin/includes/_css_assets.html.twig', {assets: ea_field_assets.cssAssets}, with_context: false) }}
    {{ include('@EasyAdmin/includes/_encore_link_tags.html.twig', {assets: ea_field_assets.webpackEncoreAssets}, with_context: false) }}
{% endblock %}

{% block configured_javascripts %}
    {{ parent() }}
    {{ include('@EasyAdmin/includes/_js_assets.html.twig', {assets: ea_field_assets.jsAssets}, with_context: false) }}
    {{ include('@EasyAdmin/includes/_encore_script_tags.html.twig', {assets: ea_field_assets.webpackEncoreAssets}, with_context: false) }}
{% endblock %}

{% block content_title %}
    {%- set custom_page_title = ea.crud.customPageTitle('index', null, ea.i18n.translationParameters, ea.i18n.translationDomain) -%}
    {{- custom_page_title is null
        ? ea.crud.defaultPageTitle('index', null, ea.i18n.translationParameters)|trans|raw
        : custom_page_title|trans|raw -}}
{% endblock %}

{% set has_batch_actions = batch_actions|length > 0 %}
{% block page_actions %}
    {% if filters|length > 0 %}
        <div class=\"datagrid-filters\">
            {% block filters %}
                {% set applied_filters = ea.request.query.all['filters']|default([])|keys %}
                <div class=\"btn-group action-filters\">
                    <a href=\"#\" data-href=\"{{ ea_url().setAction('renderFilters') }}\" class=\"btn btn-secondary btn-labeled btn-labeled-right action-filters-button disabled {{ applied_filters ? 'action-filters-applied' }}\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-filters\">
                        {{ component('ea:Icon', { name: 'internal:filter' }) }} {{ t('filter.title', ea.i18n.translationParameters, 'EasyAdminBundle')|trans }}{% if applied_filters %} <span class=\"action-filters-button-count\">({{ applied_filters|length }})</span>{% endif %}
                    </a>
                    {% if applied_filters %}
                        <a href=\"{{ ea_url().unset('filters').setAction('index') }}\" class=\"btn btn-secondary action-filters-reset\">
                            {{ component('ea:Icon', { name: 'internal:xmark' }) }}
                        </a>
                    {% endif %}
                </div>
            {% endblock filters %}
        </div>
    {% endif %}

    {% block global_actions %}
        <div class=\"global-actions\">
            {% for item in global_actions|reverse %}
                {% if item.isActionGroup %}
                    {{ include(item.templatePath, {group: item, entity: null}, with_context: false) }}
                {% else %}
                    {{ include(item.templatePath, {action: item}, with_context: false) }}
                {% endif %}
            {% endfor %}
        </div>
    {% endblock global_actions %}
    {% block batch_actions %}
        {% if has_batch_actions %}
            <div class=\"batch-actions d-none\">
                {% for action in batch_actions %}
                    {{ include(action.templatePath, {action: action}, with_context: false) }}
                {% endfor %}
            </div>
        {% endif %}
    {% endblock %}
{% endblock page_actions %}

{% block main %}
    {# sort can be multiple; let's consider the sorting field the first one #}
    {% set sort_params = app.request.query.all['sort']|default({}) %}
    {% set sort_field_name = sort_params|keys|first %}
    {% set sort_order = sort_params|first %}
    {% set some_results_are_hidden = entities|reduce((some_results_are_hidden, entity) => some_results_are_hidden or not entity.isAccessible, false) %}
    {% set has_footer = entities|length != 0 %}
    {% set has_search = ea.crud.isSearchEnabled %}
    {% set has_filters = filters|length > 0 %}
    {% set num_results = entities|length %}

    <table class=\"table datagrid {{ entities is empty ? 'datagrid-empty' }}\">
        {% if num_results > 0 %}
            <thead>
            {% block table_head %}
                <tr>
                    {% if has_batch_actions %}
                        <th>
                            <div class=\"form-check\">
                                <span><input type=\"checkbox\" class=\"form-check-input form-batch-checkbox-all\" id=\"form-batch-checkbox-all\"></span>
                            </div>
                        </th>
                    {% endif %}

                    {% set ea_sort_asc = constant('EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Config\\\\Option\\\\SortOrder::ASC') %}
                    {% set ea_sort_desc = constant('EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Config\\\\Option\\\\SortOrder::DESC') %}
                    {% for field in entities|filter(e => e.isAccessible)|first.fields ?? [] %}
                        {% set is_searchable = null == ea.crud.searchFields or field.property in ea.crud.searchFields %}
                        {% set is_sorting_field = ea.search.isSortingField(field.property) %}
                        {% set next_sort_direction = is_sorting_field ? (ea.search.sortDirection(field.property) == ea_sort_desc ? ea_sort_asc : ea_sort_desc) : ea_sort_desc %}
                        {% set column_icon = is_sorting_field ? (next_sort_direction == ea_sort_desc ? 'internal:sort-arrow-up' : 'internal:sort-arrow-down') : 'internal:sort-arrows' %}

                        <th data-column=\"{{ field.property }}\" class=\"{{ is_searchable ? 'searchable' }} {{ is_sorting_field ? 'sorted' }} {{ field.isVirtual ? 'field-virtual' }} header-for-{{ field.cssClass|split(' ')|filter(class => class starts with 'field-')|join('') }} text-{{ field.textAlign }}\" dir=\"{{ ea.i18n.textDirection }}\">
                            {% if field.isSortable %}
                                {% set sortable_url = ea_url().set('page', 1).set('sort', {(field.property): next_sort_direction}) %}
                                {% if ea.usePrettyUrls %}
                                    {% set sortable_url = sortable_url.setController(ea.request.attributes.get('crudControllerFqcn')).setAction('index') %}
                                {% endif %}

                                <a href=\"{{ sortable_url }}\">
                                    {{ field.label|trans|raw }} {{ component('ea:Icon', { name: (column_icon) }) }}
                                </a>
                            {% else %}
                                <span>{{ field.label|trans|raw }}</span>
                            {% endif %}
                        </th>
                    {% endfor %}

                    <th class=\"{{ ea.crud.showEntityActionsAsDropdown ? 'actions-as-dropdown-table-head' }}\" dir=\"{{ ea.i18n.textDirection }}\">
                        <span class=\"visually-hidden\">{{ t('action.entity_actions', ea.i18n.translationParameters, 'EasyAdminBundle')|trans }}</span>
                    </th>
                </tr>
            {% endblock table_head %}
            </thead>
        {% endif %}

        <tbody>
        {% block table_body %}
            {% for entity in entities %}
                {% if entity.isAccessible %}
                    <tr data-id=\"{{ entity.primaryKeyValueAsString }}\" {% block entity_row_attributes %}{% endblock %}>
                        {% if has_batch_actions %}
                            <td class=\"batch-actions-selector\">
                                <div class=\"form-check\">
                                    <input type=\"checkbox\" class=\"form-check-input form-batch-checkbox\" id=\"form-batch-checkbox-{{ loop.index0 }}\" value=\"{{ entity.primaryKeyValue }}\">
                                </div>
                            </td>
                        {% endif %}

                        {% for field in entity.fields %}
                            {% set is_searchable = null == ea.crud.searchFields or field.property in ea.crud.searchFields %}

                            <td data-column=\"{{ field.property }}\" data-label=\"{{ field.label|trans|e('html') }}\" class=\"{{ is_searchable ? 'searchable' }} {{ field.property == sort_field_name ? 'sorted' }} text-{{ field.textAlign }} {{ field.cssClass }}\" dir=\"{{ ea.i18n.textDirection }}\" {% for name, value in field.htmlAttributes %}{{ name }}=\"{{ value|e('html_attr') }}\" {% endfor %}>
                                {{ include(field.templatePath, {field: field, entity: entity}, with_context: false) }}
                            </td>
                        {% endfor %}

                        {% block entity_actions %}
                            <td class=\"actions {{ ea.crud.showEntityActionsAsDropdown ? 'actions-as-dropdown' }}\">
                                {% if entity.actions.count > 0 %}
                                    {% if ea.crud.showEntityActionsAsDropdown %}
                                        {% set hasAnyActionWithIcon = entity.actions|filter(item => item.isActionGroup ? false : item.icon is not null)|length > 0 %}
                                        {% component 'ea:ActionMenu' with { class: 'dropdown-actions' } %}
                                            {% block content %}{% component 'ea:ActionMenu:Button' with { withoutDropdownToggleMarker: true } %}
                                                {% block content %}{{ component('ea:Icon', { name: 'internal:dots-horizontal' }) }}
                                            {% endblock %}{% endcomponent %}

                                            {% component 'ea:ActionMenu:Overlay' %}
                                                {% block content %}{% component 'ea:ActionMenu:ActionList' with { hasSubmenus: (entity.actions|filter(item => item.isActionGroup)|length > 0) } %}
                                                    {% block content %}{% for item in entity.actions %}
                                                        {% if item.isActionGroup %}
                                                            {{ component('ea:ActionMenu:ActionList:ItemGroup', { group: (item), showBlankIcons: (hasAnyActionWithIcon), entity: (entity) }) }}
                                                        {% else %}
                                                            {{ component('ea:ActionMenu:ActionList:Item', { class: (item.cssClass)~' dropdown-item-variant-'~(item.variant.value), url: (item.linkUrl), icon: (item.icon), 'icon:class': 'action-icon', htmlAttributes: (item.htmlAttributes), renderAsForm: (item.isRenderedAsForm), label: (item.label|trans), 'label:class': 'action-label', renderLabelRaw: true, showBlankIcons: (hasAnyActionWithIcon) }) }}
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endblock %}{% endcomponent %}
                                            {% endblock %}{% endcomponent %}
                                        {% endblock %}{% endcomponent %}
                                    {% else %}
                                        {% for action in entity.actions %}
                                            {% if action.isActionGroup %}
                                                {{ include(action.templatePath, {group: action, entity: entity}, with_context: false) }}
                                            {% else %}
                                                {{ include(action.templatePath, {action: action, entity: entity, isIncludedInDropdown: ea.crud.showEntityActionsAsDropdown}, with_context: false) }}
                                            {% endif %}
                                        {% endfor %}
                                    {% endif %}
                                {% endif %}
                            </td>
                        {% endblock entity_actions %}
                    </tr>

                {% endif %}
            {% else %}
                {% block table_body_empty %}
                    {% for i in 1..14 %}
                        <tr class=\"empty-row\">
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                        </tr>

                        {% if 3 == loop.index %}
                            <tr class=\"no-results\">
                                <td colspan=\"100\">
                                    {{ t('datagrid.no_results', ea.i18n.translationParameters, 'EasyAdminBundle')|trans }}
                                </td>
                            </tr>
                        {% endif %}
                    {% endfor %}
                {% endblock table_body_empty %}
            {% endfor %}

            {% if some_results_are_hidden %}
                <tr class=\"datagrid-row-empty\">
                    <td class=\"text-center\" colspan=\"100\">
                        <span class=\"datagrid-row-empty-message\">{{ component('ea:Icon', { name: 'internal:lock', class: 'mr-1' }) }} {{ 'datagrid.hidden_results'|trans({}, 'EasyAdminBundle') }}</span>
                    </td>
                </tr>
            {% endif %}
        {% endblock table_body %}
        </tbody>

        <tfoot>
        {% block table_footer %}
        {% endblock table_footer %}
        </tfoot>
    </table>

    {% if entities|length > 0 %}
        <div class=\"content-panel-footer without-padding without-border\">
            {% block paginator %}
                {{ include(ea.templatePath('crud/paginator'), {render_detailed_pagination: not some_results_are_hidden}) }}
            {% endblock paginator %}
        </div>
    {% endif %}

    {% block delete_form %}
        {{ include('@EasyAdmin/crud/includes/_delete_form.html.twig', with_context: false) }}
    {% endblock delete_form %}

    {% if has_filters %}
        {{ include('@EasyAdmin/crud/includes/_filters_modal.html.twig') }}
    {% endif %}

    {% if has_batch_actions %}
        {{ include('@EasyAdmin/crud/includes/_batch_action_modal.html.twig', {}, with_context: false) }}
    {% endif %}
{% endblock main %}
", "@EasyAdmin/crud/index.html.twig", "/home/alumno/Documents/aurora-gg/vendor/easycorp/easyadmin-bundle/templates/crud/index.html.twig");
    }
}


/* @EasyAdmin/crud/index.html.twig */
class __TwigTemplate_dd8ddf3df5080fa79003e5f3a0d70421___32763678681 extends Template
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
            'outer__block_fallback' => [$this, 'block_outer__block_fallback'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 175
        return $this->load((isset($context["__parent__"]) || array_key_exists("__parent__", $context) ? $context["__parent__"] : (function () { throw new RuntimeError('Variable "__parent__" does not exist.', 175, $this->source); })()), 175);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/index.html.twig"));

        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 176
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $_v5 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
        $preRendered = $_v5->preRender("ea:ActionMenu:ActionList", Twig\Extension\CoreExtension::toArray(["hasSubmenus" => (Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 176, $this->source); })()), "actions", [], "any", false, false, false, 176), function ($__item__) use ($context, $macros) { $context["item"] = $__item__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 176, $this->source); })()), "isActionGroup", [], "any", false, false, false, 176); })) > 0)]));
        if (null !== $preRendered) {
            yield $preRendered; 
        } else {
            $preRenderEvent = $_v5->startEmbedComponent("ea:ActionMenu:ActionList", Twig\Extension\CoreExtension::toArray(["hasSubmenus" => (Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 176, $this->source); })()), "actions", [], "any", false, false, false, 176), function ($__item__) use ($context, $macros) { $context["item"] = $__item__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 176, $this->source); })()), "isActionGroup", [], "any", false, false, false, 176); })) > 0)]), $context, "@EasyAdmin/crud/index.html.twig", 15141576381);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 15141576381);
            $this->load("@EasyAdmin/crud/index.html.twig", 176, "15141576381")->display($embeddedContext, $embeddedBlocks);
            $_v5->finishEmbedComponent();
        }
        // line 185
        yield "                                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/crud/index.html.twig";
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
        return array (  2402 => 185,  2376 => 176,  2333 => 175,  1994 => 172,  1951 => 171,  1626 => 186,  1612 => 175,  1609 => 174,  1583 => 171,  1540 => 170,  1212 => 250,  1199 => 249,  1185 => 244,  1172 => 243,  1161 => 237,  1148 => 236,  1137 => 222,  1123 => 221,  1117 => 217,  1115 => 6,  1114 => 217,  1110 => 215,  1108 => 214,  1097 => 205,  1079 => 204,  1066 => 203,  1054 => 197,  1051 => 196,  1048 => 195,  1042 => 194,  1036 => 192,  1030 => 190,  1027 => 189,  1022 => 188,  1019 => 187,  1004 => 170,  1001 => 169,  998 => 168,  996 => 167,  991 => 166,  978 => 165,  956 => 148,  945 => 232,  936 => 228,  932 => 226,  930 => 225,  927 => 224,  921 => 223,  918 => 203,  905 => 202,  900 => 199,  898 => 165,  895 => 164,  886 => 161,  861 => 160,  859 => 6,  856 => 160,  853 => 159,  850 => 158,  846 => 157,  843 => 156,  834 => 152,  830 => 150,  828 => 149,  821 => 148,  818 => 147,  799 => 146,  786 => 145,  772 => 137,  770 => 6,  769 => 137,  763 => 136,  760 => 135,  753 => 133,  749 => 131,  747 => 6,  745 => 131,  738 => 128,  736 => 6,  735 => 128,  731 => 127,  728 => 126,  725 => 125,  722 => 124,  719 => 123,  716 => 122,  714 => 121,  698 => 120,  695 => 119,  692 => 118,  689 => 117,  686 => 116,  683 => 115,  678 => 114,  675 => 113,  673 => 112,  670 => 111,  662 => 105,  660 => 104,  657 => 103,  644 => 102,  629 => 258,  627 => 257,  624 => 256,  618 => 254,  616 => 253,  613 => 252,  611 => 249,  608 => 248,  604 => 246,  602 => 243,  599 => 242,  597 => 241,  592 => 238,  590 => 236,  585 => 233,  583 => 145,  579 => 143,  575 => 141,  573 => 102,  570 => 101,  568 => 100,  564 => 99,  561 => 98,  558 => 97,  555 => 96,  552 => 95,  549 => 94,  546 => 93,  543 => 92,  540 => 91,  537 => 90,  535 => 89,  522 => 88,  511 => 85,  507 => 83,  498 => 81,  494 => 80,  491 => 79,  488 => 78,  475 => 77,  463 => 75,  457 => 74,  451 => 72,  445 => 70,  442 => 69,  438 => 68,  435 => 67,  422 => 66,  410 => 61,  404 => 58,  399 => 57,  397 => 56,  394 => 55,  388 => 54,  386 => 6,  383 => 54,  377 => 53,  374 => 52,  371 => 51,  358 => 50,  346 => 77,  344 => 66,  341 => 65,  337 => 63,  335 => 50,  332 => 49,  329 => 48,  316 => 47,  305 => 6,  304 => 43,  303 => 6,  302 => 42,  301 => 41,  299 => 40,  286 => 39,  273 => 36,  269 => 35,  264 => 34,  251 => 33,  238 => 30,  234 => 29,  229 => 28,  216 => 27,  198 => 23,  194 => 22,  189 => 21,  176 => 20,  158 => 16,  154 => 15,  149 => 14,  136 => 13,  113 => 9,  90 => 8,  80 => 5,  78 => 46,  76 => 11,  74 => 6,  72 => 4,  59 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{# @var entities \\EasyCorp\\Bundle\\EasyAdminBundle\\Collection\\EntityCollection #}
{# @var paginator \\EasyCorp\\Bundle\\EasyAdminBundle\\Orm\\EntityPaginator #}
{% set ea = ea() %}
{% extends ea.templatePath('layout') %}
{% trans_default_domain ea.i18n.translationDomain %}

{% block body_id entities|length > 0 ? 'ea-index-' ~ entities|first.name : '' %}
{% block body_class 'ea-index' ~ (entities|length > 0 ? ' ea-index-' ~ entities|first.name : '') %}

{% set ea_field_assets = ea.crud.fieldAssets(constant('EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Config\\\\Crud::PAGE_INDEX')) %}

{% block configured_head_contents %}
    {{ parent() }}
    {% for htmlContent in ea_field_assets.headContents %}
        {{ htmlContent|raw }}
    {% endfor %}
{% endblock %}

{% block configured_body_contents %}
    {{ parent() }}
    {% for htmlContent in ea_field_assets.bodyContents %}
        {{ htmlContent|raw }}
    {% endfor %}
{% endblock %}

{% block configured_stylesheets %}
    {{ parent() }}
    {{ include('@EasyAdmin/includes/_css_assets.html.twig', {assets: ea_field_assets.cssAssets}, with_context: false) }}
    {{ include('@EasyAdmin/includes/_encore_link_tags.html.twig', {assets: ea_field_assets.webpackEncoreAssets}, with_context: false) }}
{% endblock %}

{% block configured_javascripts %}
    {{ parent() }}
    {{ include('@EasyAdmin/includes/_js_assets.html.twig', {assets: ea_field_assets.jsAssets}, with_context: false) }}
    {{ include('@EasyAdmin/includes/_encore_script_tags.html.twig', {assets: ea_field_assets.webpackEncoreAssets}, with_context: false) }}
{% endblock %}

{% block content_title %}
    {%- set custom_page_title = ea.crud.customPageTitle('index', null, ea.i18n.translationParameters, ea.i18n.translationDomain) -%}
    {{- custom_page_title is null
        ? ea.crud.defaultPageTitle('index', null, ea.i18n.translationParameters)|trans|raw
        : custom_page_title|trans|raw -}}
{% endblock %}

{% set has_batch_actions = batch_actions|length > 0 %}
{% block page_actions %}
    {% if filters|length > 0 %}
        <div class=\"datagrid-filters\">
            {% block filters %}
                {% set applied_filters = ea.request.query.all['filters']|default([])|keys %}
                <div class=\"btn-group action-filters\">
                    <a href=\"#\" data-href=\"{{ ea_url().setAction('renderFilters') }}\" class=\"btn btn-secondary btn-labeled btn-labeled-right action-filters-button disabled {{ applied_filters ? 'action-filters-applied' }}\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-filters\">
                        {{ component('ea:Icon', { name: 'internal:filter' }) }} {{ t('filter.title', ea.i18n.translationParameters, 'EasyAdminBundle')|trans }}{% if applied_filters %} <span class=\"action-filters-button-count\">({{ applied_filters|length }})</span>{% endif %}
                    </a>
                    {% if applied_filters %}
                        <a href=\"{{ ea_url().unset('filters').setAction('index') }}\" class=\"btn btn-secondary action-filters-reset\">
                            {{ component('ea:Icon', { name: 'internal:xmark' }) }}
                        </a>
                    {% endif %}
                </div>
            {% endblock filters %}
        </div>
    {% endif %}

    {% block global_actions %}
        <div class=\"global-actions\">
            {% for item in global_actions|reverse %}
                {% if item.isActionGroup %}
                    {{ include(item.templatePath, {group: item, entity: null}, with_context: false) }}
                {% else %}
                    {{ include(item.templatePath, {action: item}, with_context: false) }}
                {% endif %}
            {% endfor %}
        </div>
    {% endblock global_actions %}
    {% block batch_actions %}
        {% if has_batch_actions %}
            <div class=\"batch-actions d-none\">
                {% for action in batch_actions %}
                    {{ include(action.templatePath, {action: action}, with_context: false) }}
                {% endfor %}
            </div>
        {% endif %}
    {% endblock %}
{% endblock page_actions %}

{% block main %}
    {# sort can be multiple; let's consider the sorting field the first one #}
    {% set sort_params = app.request.query.all['sort']|default({}) %}
    {% set sort_field_name = sort_params|keys|first %}
    {% set sort_order = sort_params|first %}
    {% set some_results_are_hidden = entities|reduce((some_results_are_hidden, entity) => some_results_are_hidden or not entity.isAccessible, false) %}
    {% set has_footer = entities|length != 0 %}
    {% set has_search = ea.crud.isSearchEnabled %}
    {% set has_filters = filters|length > 0 %}
    {% set num_results = entities|length %}

    <table class=\"table datagrid {{ entities is empty ? 'datagrid-empty' }}\">
        {% if num_results > 0 %}
            <thead>
            {% block table_head %}
                <tr>
                    {% if has_batch_actions %}
                        <th>
                            <div class=\"form-check\">
                                <span><input type=\"checkbox\" class=\"form-check-input form-batch-checkbox-all\" id=\"form-batch-checkbox-all\"></span>
                            </div>
                        </th>
                    {% endif %}

                    {% set ea_sort_asc = constant('EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Config\\\\Option\\\\SortOrder::ASC') %}
                    {% set ea_sort_desc = constant('EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Config\\\\Option\\\\SortOrder::DESC') %}
                    {% for field in entities|filter(e => e.isAccessible)|first.fields ?? [] %}
                        {% set is_searchable = null == ea.crud.searchFields or field.property in ea.crud.searchFields %}
                        {% set is_sorting_field = ea.search.isSortingField(field.property) %}
                        {% set next_sort_direction = is_sorting_field ? (ea.search.sortDirection(field.property) == ea_sort_desc ? ea_sort_asc : ea_sort_desc) : ea_sort_desc %}
                        {% set column_icon = is_sorting_field ? (next_sort_direction == ea_sort_desc ? 'internal:sort-arrow-up' : 'internal:sort-arrow-down') : 'internal:sort-arrows' %}

                        <th data-column=\"{{ field.property }}\" class=\"{{ is_searchable ? 'searchable' }} {{ is_sorting_field ? 'sorted' }} {{ field.isVirtual ? 'field-virtual' }} header-for-{{ field.cssClass|split(' ')|filter(class => class starts with 'field-')|join('') }} text-{{ field.textAlign }}\" dir=\"{{ ea.i18n.textDirection }}\">
                            {% if field.isSortable %}
                                {% set sortable_url = ea_url().set('page', 1).set('sort', {(field.property): next_sort_direction}) %}
                                {% if ea.usePrettyUrls %}
                                    {% set sortable_url = sortable_url.setController(ea.request.attributes.get('crudControllerFqcn')).setAction('index') %}
                                {% endif %}

                                <a href=\"{{ sortable_url }}\">
                                    {{ field.label|trans|raw }} {{ component('ea:Icon', { name: (column_icon) }) }}
                                </a>
                            {% else %}
                                <span>{{ field.label|trans|raw }}</span>
                            {% endif %}
                        </th>
                    {% endfor %}

                    <th class=\"{{ ea.crud.showEntityActionsAsDropdown ? 'actions-as-dropdown-table-head' }}\" dir=\"{{ ea.i18n.textDirection }}\">
                        <span class=\"visually-hidden\">{{ t('action.entity_actions', ea.i18n.translationParameters, 'EasyAdminBundle')|trans }}</span>
                    </th>
                </tr>
            {% endblock table_head %}
            </thead>
        {% endif %}

        <tbody>
        {% block table_body %}
            {% for entity in entities %}
                {% if entity.isAccessible %}
                    <tr data-id=\"{{ entity.primaryKeyValueAsString }}\" {% block entity_row_attributes %}{% endblock %}>
                        {% if has_batch_actions %}
                            <td class=\"batch-actions-selector\">
                                <div class=\"form-check\">
                                    <input type=\"checkbox\" class=\"form-check-input form-batch-checkbox\" id=\"form-batch-checkbox-{{ loop.index0 }}\" value=\"{{ entity.primaryKeyValue }}\">
                                </div>
                            </td>
                        {% endif %}

                        {% for field in entity.fields %}
                            {% set is_searchable = null == ea.crud.searchFields or field.property in ea.crud.searchFields %}

                            <td data-column=\"{{ field.property }}\" data-label=\"{{ field.label|trans|e('html') }}\" class=\"{{ is_searchable ? 'searchable' }} {{ field.property == sort_field_name ? 'sorted' }} text-{{ field.textAlign }} {{ field.cssClass }}\" dir=\"{{ ea.i18n.textDirection }}\" {% for name, value in field.htmlAttributes %}{{ name }}=\"{{ value|e('html_attr') }}\" {% endfor %}>
                                {{ include(field.templatePath, {field: field, entity: entity}, with_context: false) }}
                            </td>
                        {% endfor %}

                        {% block entity_actions %}
                            <td class=\"actions {{ ea.crud.showEntityActionsAsDropdown ? 'actions-as-dropdown' }}\">
                                {% if entity.actions.count > 0 %}
                                    {% if ea.crud.showEntityActionsAsDropdown %}
                                        {% set hasAnyActionWithIcon = entity.actions|filter(item => item.isActionGroup ? false : item.icon is not null)|length > 0 %}
                                        {% component 'ea:ActionMenu' with { class: 'dropdown-actions' } %}
                                            {% block content %}{% component 'ea:ActionMenu:Button' with { withoutDropdownToggleMarker: true } %}
                                                {% block content %}{{ component('ea:Icon', { name: 'internal:dots-horizontal' }) }}
                                            {% endblock %}{% endcomponent %}

                                            {% component 'ea:ActionMenu:Overlay' %}
                                                {% block content %}{% component 'ea:ActionMenu:ActionList' with { hasSubmenus: (entity.actions|filter(item => item.isActionGroup)|length > 0) } %}
                                                    {% block content %}{% for item in entity.actions %}
                                                        {% if item.isActionGroup %}
                                                            {{ component('ea:ActionMenu:ActionList:ItemGroup', { group: (item), showBlankIcons: (hasAnyActionWithIcon), entity: (entity) }) }}
                                                        {% else %}
                                                            {{ component('ea:ActionMenu:ActionList:Item', { class: (item.cssClass)~' dropdown-item-variant-'~(item.variant.value), url: (item.linkUrl), icon: (item.icon), 'icon:class': 'action-icon', htmlAttributes: (item.htmlAttributes), renderAsForm: (item.isRenderedAsForm), label: (item.label|trans), 'label:class': 'action-label', renderLabelRaw: true, showBlankIcons: (hasAnyActionWithIcon) }) }}
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endblock %}{% endcomponent %}
                                            {% endblock %}{% endcomponent %}
                                        {% endblock %}{% endcomponent %}
                                    {% else %}
                                        {% for action in entity.actions %}
                                            {% if action.isActionGroup %}
                                                {{ include(action.templatePath, {group: action, entity: entity}, with_context: false) }}
                                            {% else %}
                                                {{ include(action.templatePath, {action: action, entity: entity, isIncludedInDropdown: ea.crud.showEntityActionsAsDropdown}, with_context: false) }}
                                            {% endif %}
                                        {% endfor %}
                                    {% endif %}
                                {% endif %}
                            </td>
                        {% endblock entity_actions %}
                    </tr>

                {% endif %}
            {% else %}
                {% block table_body_empty %}
                    {% for i in 1..14 %}
                        <tr class=\"empty-row\">
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                        </tr>

                        {% if 3 == loop.index %}
                            <tr class=\"no-results\">
                                <td colspan=\"100\">
                                    {{ t('datagrid.no_results', ea.i18n.translationParameters, 'EasyAdminBundle')|trans }}
                                </td>
                            </tr>
                        {% endif %}
                    {% endfor %}
                {% endblock table_body_empty %}
            {% endfor %}

            {% if some_results_are_hidden %}
                <tr class=\"datagrid-row-empty\">
                    <td class=\"text-center\" colspan=\"100\">
                        <span class=\"datagrid-row-empty-message\">{{ component('ea:Icon', { name: 'internal:lock', class: 'mr-1' }) }} {{ 'datagrid.hidden_results'|trans({}, 'EasyAdminBundle') }}</span>
                    </td>
                </tr>
            {% endif %}
        {% endblock table_body %}
        </tbody>

        <tfoot>
        {% block table_footer %}
        {% endblock table_footer %}
        </tfoot>
    </table>

    {% if entities|length > 0 %}
        <div class=\"content-panel-footer without-padding without-border\">
            {% block paginator %}
                {{ include(ea.templatePath('crud/paginator'), {render_detailed_pagination: not some_results_are_hidden}) }}
            {% endblock paginator %}
        </div>
    {% endif %}

    {% block delete_form %}
        {{ include('@EasyAdmin/crud/includes/_delete_form.html.twig', with_context: false) }}
    {% endblock delete_form %}

    {% if has_filters %}
        {{ include('@EasyAdmin/crud/includes/_filters_modal.html.twig') }}
    {% endif %}

    {% if has_batch_actions %}
        {{ include('@EasyAdmin/crud/includes/_batch_action_modal.html.twig', {}, with_context: false) }}
    {% endif %}
{% endblock main %}
", "@EasyAdmin/crud/index.html.twig", "/home/alumno/Documents/aurora-gg/vendor/easycorp/easyadmin-bundle/templates/crud/index.html.twig");
    }
}


/* @EasyAdmin/crud/index.html.twig */
class __TwigTemplate_dd8ddf3df5080fa79003e5f3a0d70421___15141576381 extends Template
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
            'outer__block_fallback' => [$this, 'block_outer__block_fallback'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 176
        return $this->load((isset($context["__parent__"]) || array_key_exists("__parent__", $context) ? $context["__parent__"] : (function () { throw new RuntimeError('Variable "__parent__" does not exist.', 176, $this->source); })()), 176);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/index.html.twig"));

        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 177
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 177, $this->source); })()), "actions", [], "any", false, false, false, 177));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 178
            yield "                                                        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "isActionGroup", [], "any", false, false, false, 178)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 179
                yield "                                                            ";
                yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:ActionMenu:ActionList:ItemGroup", ["group" => $context["item"], "showBlankIcons" => (isset($context["hasAnyActionWithIcon"]) || array_key_exists("hasAnyActionWithIcon", $context) ? $context["hasAnyActionWithIcon"] : (function () { throw new RuntimeError('Variable "hasAnyActionWithIcon" does not exist.', 179, $this->source); })()), "entity" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 179, $this->source); })())]);
                yield "
                                                        ";
            } else {
                // line 181
                yield "                                                            ";
                yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:ActionMenu:ActionList:Item", ["class" => ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "cssClass", [], "any", false, false, false, 181) . " dropdown-item-variant-") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "variant", [], "any", false, false, false, 181), "value", [], "any", false, false, false, 181)), "url" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "linkUrl", [], "any", false, false, false, 181), "icon" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 181), "icon:class" => "action-icon", "htmlAttributes" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "htmlAttributes", [], "any", false, false, false, 181), "renderAsForm" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "isRenderedAsForm", [], "any", false, false, false, 181), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 181)), "label:class" => "action-label", "renderLabelRaw" => true, "showBlankIcons" => (isset($context["hasAnyActionWithIcon"]) || array_key_exists("hasAnyActionWithIcon", $context) ? $context["hasAnyActionWithIcon"] : (function () { throw new RuntimeError('Variable "hasAnyActionWithIcon" does not exist.', 181, $this->source); })())]);
                yield "
                                                        ";
            }
            // line 183
            yield "                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 184
        yield "                                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/crud/index.html.twig";
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
        return array (  2807 => 184,  2801 => 183,  2795 => 181,  2789 => 179,  2786 => 178,  2770 => 177,  2727 => 176,  2402 => 185,  2376 => 176,  2333 => 175,  1994 => 172,  1951 => 171,  1626 => 186,  1612 => 175,  1609 => 174,  1583 => 171,  1540 => 170,  1212 => 250,  1199 => 249,  1185 => 244,  1172 => 243,  1161 => 237,  1148 => 236,  1137 => 222,  1123 => 221,  1117 => 217,  1115 => 6,  1114 => 217,  1110 => 215,  1108 => 214,  1097 => 205,  1079 => 204,  1066 => 203,  1054 => 197,  1051 => 196,  1048 => 195,  1042 => 194,  1036 => 192,  1030 => 190,  1027 => 189,  1022 => 188,  1019 => 187,  1004 => 170,  1001 => 169,  998 => 168,  996 => 167,  991 => 166,  978 => 165,  956 => 148,  945 => 232,  936 => 228,  932 => 226,  930 => 225,  927 => 224,  921 => 223,  918 => 203,  905 => 202,  900 => 199,  898 => 165,  895 => 164,  886 => 161,  861 => 160,  859 => 6,  856 => 160,  853 => 159,  850 => 158,  846 => 157,  843 => 156,  834 => 152,  830 => 150,  828 => 149,  821 => 148,  818 => 147,  799 => 146,  786 => 145,  772 => 137,  770 => 6,  769 => 137,  763 => 136,  760 => 135,  753 => 133,  749 => 131,  747 => 6,  745 => 131,  738 => 128,  736 => 6,  735 => 128,  731 => 127,  728 => 126,  725 => 125,  722 => 124,  719 => 123,  716 => 122,  714 => 121,  698 => 120,  695 => 119,  692 => 118,  689 => 117,  686 => 116,  683 => 115,  678 => 114,  675 => 113,  673 => 112,  670 => 111,  662 => 105,  660 => 104,  657 => 103,  644 => 102,  629 => 258,  627 => 257,  624 => 256,  618 => 254,  616 => 253,  613 => 252,  611 => 249,  608 => 248,  604 => 246,  602 => 243,  599 => 242,  597 => 241,  592 => 238,  590 => 236,  585 => 233,  583 => 145,  579 => 143,  575 => 141,  573 => 102,  570 => 101,  568 => 100,  564 => 99,  561 => 98,  558 => 97,  555 => 96,  552 => 95,  549 => 94,  546 => 93,  543 => 92,  540 => 91,  537 => 90,  535 => 89,  522 => 88,  511 => 85,  507 => 83,  498 => 81,  494 => 80,  491 => 79,  488 => 78,  475 => 77,  463 => 75,  457 => 74,  451 => 72,  445 => 70,  442 => 69,  438 => 68,  435 => 67,  422 => 66,  410 => 61,  404 => 58,  399 => 57,  397 => 56,  394 => 55,  388 => 54,  386 => 6,  383 => 54,  377 => 53,  374 => 52,  371 => 51,  358 => 50,  346 => 77,  344 => 66,  341 => 65,  337 => 63,  335 => 50,  332 => 49,  329 => 48,  316 => 47,  305 => 6,  304 => 43,  303 => 6,  302 => 42,  301 => 41,  299 => 40,  286 => 39,  273 => 36,  269 => 35,  264 => 34,  251 => 33,  238 => 30,  234 => 29,  229 => 28,  216 => 27,  198 => 23,  194 => 22,  189 => 21,  176 => 20,  158 => 16,  154 => 15,  149 => 14,  136 => 13,  113 => 9,  90 => 8,  80 => 5,  78 => 46,  76 => 11,  74 => 6,  72 => 4,  59 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{# @var entities \\EasyCorp\\Bundle\\EasyAdminBundle\\Collection\\EntityCollection #}
{# @var paginator \\EasyCorp\\Bundle\\EasyAdminBundle\\Orm\\EntityPaginator #}
{% set ea = ea() %}
{% extends ea.templatePath('layout') %}
{% trans_default_domain ea.i18n.translationDomain %}

{% block body_id entities|length > 0 ? 'ea-index-' ~ entities|first.name : '' %}
{% block body_class 'ea-index' ~ (entities|length > 0 ? ' ea-index-' ~ entities|first.name : '') %}

{% set ea_field_assets = ea.crud.fieldAssets(constant('EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Config\\\\Crud::PAGE_INDEX')) %}

{% block configured_head_contents %}
    {{ parent() }}
    {% for htmlContent in ea_field_assets.headContents %}
        {{ htmlContent|raw }}
    {% endfor %}
{% endblock %}

{% block configured_body_contents %}
    {{ parent() }}
    {% for htmlContent in ea_field_assets.bodyContents %}
        {{ htmlContent|raw }}
    {% endfor %}
{% endblock %}

{% block configured_stylesheets %}
    {{ parent() }}
    {{ include('@EasyAdmin/includes/_css_assets.html.twig', {assets: ea_field_assets.cssAssets}, with_context: false) }}
    {{ include('@EasyAdmin/includes/_encore_link_tags.html.twig', {assets: ea_field_assets.webpackEncoreAssets}, with_context: false) }}
{% endblock %}

{% block configured_javascripts %}
    {{ parent() }}
    {{ include('@EasyAdmin/includes/_js_assets.html.twig', {assets: ea_field_assets.jsAssets}, with_context: false) }}
    {{ include('@EasyAdmin/includes/_encore_script_tags.html.twig', {assets: ea_field_assets.webpackEncoreAssets}, with_context: false) }}
{% endblock %}

{% block content_title %}
    {%- set custom_page_title = ea.crud.customPageTitle('index', null, ea.i18n.translationParameters, ea.i18n.translationDomain) -%}
    {{- custom_page_title is null
        ? ea.crud.defaultPageTitle('index', null, ea.i18n.translationParameters)|trans|raw
        : custom_page_title|trans|raw -}}
{% endblock %}

{% set has_batch_actions = batch_actions|length > 0 %}
{% block page_actions %}
    {% if filters|length > 0 %}
        <div class=\"datagrid-filters\">
            {% block filters %}
                {% set applied_filters = ea.request.query.all['filters']|default([])|keys %}
                <div class=\"btn-group action-filters\">
                    <a href=\"#\" data-href=\"{{ ea_url().setAction('renderFilters') }}\" class=\"btn btn-secondary btn-labeled btn-labeled-right action-filters-button disabled {{ applied_filters ? 'action-filters-applied' }}\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-filters\">
                        {{ component('ea:Icon', { name: 'internal:filter' }) }} {{ t('filter.title', ea.i18n.translationParameters, 'EasyAdminBundle')|trans }}{% if applied_filters %} <span class=\"action-filters-button-count\">({{ applied_filters|length }})</span>{% endif %}
                    </a>
                    {% if applied_filters %}
                        <a href=\"{{ ea_url().unset('filters').setAction('index') }}\" class=\"btn btn-secondary action-filters-reset\">
                            {{ component('ea:Icon', { name: 'internal:xmark' }) }}
                        </a>
                    {% endif %}
                </div>
            {% endblock filters %}
        </div>
    {% endif %}

    {% block global_actions %}
        <div class=\"global-actions\">
            {% for item in global_actions|reverse %}
                {% if item.isActionGroup %}
                    {{ include(item.templatePath, {group: item, entity: null}, with_context: false) }}
                {% else %}
                    {{ include(item.templatePath, {action: item}, with_context: false) }}
                {% endif %}
            {% endfor %}
        </div>
    {% endblock global_actions %}
    {% block batch_actions %}
        {% if has_batch_actions %}
            <div class=\"batch-actions d-none\">
                {% for action in batch_actions %}
                    {{ include(action.templatePath, {action: action}, with_context: false) }}
                {% endfor %}
            </div>
        {% endif %}
    {% endblock %}
{% endblock page_actions %}

{% block main %}
    {# sort can be multiple; let's consider the sorting field the first one #}
    {% set sort_params = app.request.query.all['sort']|default({}) %}
    {% set sort_field_name = sort_params|keys|first %}
    {% set sort_order = sort_params|first %}
    {% set some_results_are_hidden = entities|reduce((some_results_are_hidden, entity) => some_results_are_hidden or not entity.isAccessible, false) %}
    {% set has_footer = entities|length != 0 %}
    {% set has_search = ea.crud.isSearchEnabled %}
    {% set has_filters = filters|length > 0 %}
    {% set num_results = entities|length %}

    <table class=\"table datagrid {{ entities is empty ? 'datagrid-empty' }}\">
        {% if num_results > 0 %}
            <thead>
            {% block table_head %}
                <tr>
                    {% if has_batch_actions %}
                        <th>
                            <div class=\"form-check\">
                                <span><input type=\"checkbox\" class=\"form-check-input form-batch-checkbox-all\" id=\"form-batch-checkbox-all\"></span>
                            </div>
                        </th>
                    {% endif %}

                    {% set ea_sort_asc = constant('EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Config\\\\Option\\\\SortOrder::ASC') %}
                    {% set ea_sort_desc = constant('EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Config\\\\Option\\\\SortOrder::DESC') %}
                    {% for field in entities|filter(e => e.isAccessible)|first.fields ?? [] %}
                        {% set is_searchable = null == ea.crud.searchFields or field.property in ea.crud.searchFields %}
                        {% set is_sorting_field = ea.search.isSortingField(field.property) %}
                        {% set next_sort_direction = is_sorting_field ? (ea.search.sortDirection(field.property) == ea_sort_desc ? ea_sort_asc : ea_sort_desc) : ea_sort_desc %}
                        {% set column_icon = is_sorting_field ? (next_sort_direction == ea_sort_desc ? 'internal:sort-arrow-up' : 'internal:sort-arrow-down') : 'internal:sort-arrows' %}

                        <th data-column=\"{{ field.property }}\" class=\"{{ is_searchable ? 'searchable' }} {{ is_sorting_field ? 'sorted' }} {{ field.isVirtual ? 'field-virtual' }} header-for-{{ field.cssClass|split(' ')|filter(class => class starts with 'field-')|join('') }} text-{{ field.textAlign }}\" dir=\"{{ ea.i18n.textDirection }}\">
                            {% if field.isSortable %}
                                {% set sortable_url = ea_url().set('page', 1).set('sort', {(field.property): next_sort_direction}) %}
                                {% if ea.usePrettyUrls %}
                                    {% set sortable_url = sortable_url.setController(ea.request.attributes.get('crudControllerFqcn')).setAction('index') %}
                                {% endif %}

                                <a href=\"{{ sortable_url }}\">
                                    {{ field.label|trans|raw }} {{ component('ea:Icon', { name: (column_icon) }) }}
                                </a>
                            {% else %}
                                <span>{{ field.label|trans|raw }}</span>
                            {% endif %}
                        </th>
                    {% endfor %}

                    <th class=\"{{ ea.crud.showEntityActionsAsDropdown ? 'actions-as-dropdown-table-head' }}\" dir=\"{{ ea.i18n.textDirection }}\">
                        <span class=\"visually-hidden\">{{ t('action.entity_actions', ea.i18n.translationParameters, 'EasyAdminBundle')|trans }}</span>
                    </th>
                </tr>
            {% endblock table_head %}
            </thead>
        {% endif %}

        <tbody>
        {% block table_body %}
            {% for entity in entities %}
                {% if entity.isAccessible %}
                    <tr data-id=\"{{ entity.primaryKeyValueAsString }}\" {% block entity_row_attributes %}{% endblock %}>
                        {% if has_batch_actions %}
                            <td class=\"batch-actions-selector\">
                                <div class=\"form-check\">
                                    <input type=\"checkbox\" class=\"form-check-input form-batch-checkbox\" id=\"form-batch-checkbox-{{ loop.index0 }}\" value=\"{{ entity.primaryKeyValue }}\">
                                </div>
                            </td>
                        {% endif %}

                        {% for field in entity.fields %}
                            {% set is_searchable = null == ea.crud.searchFields or field.property in ea.crud.searchFields %}

                            <td data-column=\"{{ field.property }}\" data-label=\"{{ field.label|trans|e('html') }}\" class=\"{{ is_searchable ? 'searchable' }} {{ field.property == sort_field_name ? 'sorted' }} text-{{ field.textAlign }} {{ field.cssClass }}\" dir=\"{{ ea.i18n.textDirection }}\" {% for name, value in field.htmlAttributes %}{{ name }}=\"{{ value|e('html_attr') }}\" {% endfor %}>
                                {{ include(field.templatePath, {field: field, entity: entity}, with_context: false) }}
                            </td>
                        {% endfor %}

                        {% block entity_actions %}
                            <td class=\"actions {{ ea.crud.showEntityActionsAsDropdown ? 'actions-as-dropdown' }}\">
                                {% if entity.actions.count > 0 %}
                                    {% if ea.crud.showEntityActionsAsDropdown %}
                                        {% set hasAnyActionWithIcon = entity.actions|filter(item => item.isActionGroup ? false : item.icon is not null)|length > 0 %}
                                        {% component 'ea:ActionMenu' with { class: 'dropdown-actions' } %}
                                            {% block content %}{% component 'ea:ActionMenu:Button' with { withoutDropdownToggleMarker: true } %}
                                                {% block content %}{{ component('ea:Icon', { name: 'internal:dots-horizontal' }) }}
                                            {% endblock %}{% endcomponent %}

                                            {% component 'ea:ActionMenu:Overlay' %}
                                                {% block content %}{% component 'ea:ActionMenu:ActionList' with { hasSubmenus: (entity.actions|filter(item => item.isActionGroup)|length > 0) } %}
                                                    {% block content %}{% for item in entity.actions %}
                                                        {% if item.isActionGroup %}
                                                            {{ component('ea:ActionMenu:ActionList:ItemGroup', { group: (item), showBlankIcons: (hasAnyActionWithIcon), entity: (entity) }) }}
                                                        {% else %}
                                                            {{ component('ea:ActionMenu:ActionList:Item', { class: (item.cssClass)~' dropdown-item-variant-'~(item.variant.value), url: (item.linkUrl), icon: (item.icon), 'icon:class': 'action-icon', htmlAttributes: (item.htmlAttributes), renderAsForm: (item.isRenderedAsForm), label: (item.label|trans), 'label:class': 'action-label', renderLabelRaw: true, showBlankIcons: (hasAnyActionWithIcon) }) }}
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endblock %}{% endcomponent %}
                                            {% endblock %}{% endcomponent %}
                                        {% endblock %}{% endcomponent %}
                                    {% else %}
                                        {% for action in entity.actions %}
                                            {% if action.isActionGroup %}
                                                {{ include(action.templatePath, {group: action, entity: entity}, with_context: false) }}
                                            {% else %}
                                                {{ include(action.templatePath, {action: action, entity: entity, isIncludedInDropdown: ea.crud.showEntityActionsAsDropdown}, with_context: false) }}
                                            {% endif %}
                                        {% endfor %}
                                    {% endif %}
                                {% endif %}
                            </td>
                        {% endblock entity_actions %}
                    </tr>

                {% endif %}
            {% else %}
                {% block table_body_empty %}
                    {% for i in 1..14 %}
                        <tr class=\"empty-row\">
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                        </tr>

                        {% if 3 == loop.index %}
                            <tr class=\"no-results\">
                                <td colspan=\"100\">
                                    {{ t('datagrid.no_results', ea.i18n.translationParameters, 'EasyAdminBundle')|trans }}
                                </td>
                            </tr>
                        {% endif %}
                    {% endfor %}
                {% endblock table_body_empty %}
            {% endfor %}

            {% if some_results_are_hidden %}
                <tr class=\"datagrid-row-empty\">
                    <td class=\"text-center\" colspan=\"100\">
                        <span class=\"datagrid-row-empty-message\">{{ component('ea:Icon', { name: 'internal:lock', class: 'mr-1' }) }} {{ 'datagrid.hidden_results'|trans({}, 'EasyAdminBundle') }}</span>
                    </td>
                </tr>
            {% endif %}
        {% endblock table_body %}
        </tbody>

        <tfoot>
        {% block table_footer %}
        {% endblock table_footer %}
        </tfoot>
    </table>

    {% if entities|length > 0 %}
        <div class=\"content-panel-footer without-padding without-border\">
            {% block paginator %}
                {{ include(ea.templatePath('crud/paginator'), {render_detailed_pagination: not some_results_are_hidden}) }}
            {% endblock paginator %}
        </div>
    {% endif %}

    {% block delete_form %}
        {{ include('@EasyAdmin/crud/includes/_delete_form.html.twig', with_context: false) }}
    {% endblock delete_form %}

    {% if has_filters %}
        {{ include('@EasyAdmin/crud/includes/_filters_modal.html.twig') }}
    {% endif %}

    {% if has_batch_actions %}
        {{ include('@EasyAdmin/crud/includes/_batch_action_modal.html.twig', {}, with_context: false) }}
    {% endif %}
{% endblock main %}
", "@EasyAdmin/crud/index.html.twig", "/home/alumno/Documents/aurora-gg/vendor/easycorp/easyadmin-bundle/templates/crud/index.html.twig");
    }
}
