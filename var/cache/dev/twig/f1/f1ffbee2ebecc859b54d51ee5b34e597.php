<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* pret/show.html.twig */
class __TwigTemplate_cad46d19e464476941e343a82deb7d84 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pret/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pret/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pret/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Pret";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Pret</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pret"]) || array_key_exists("pret", $context) ? $context["pret"] : (function () { throw new RuntimeError('Variable "pret" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date_pret</th>
                <td>";
        // line 16
        ((twig_get_attribute($this->env, $this->source, (isset($context["pret"]) || array_key_exists("pret", $context) ? $context["pret"] : (function () { throw new RuntimeError('Variable "pret" does not exist.', 16, $this->source); })()), "datePret", [], "any", false, false, false, 16)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pret"]) || array_key_exists("pret", $context) ? $context["pret"] : (function () { throw new RuntimeError('Variable "pret" does not exist.', 16, $this->source); })()), "datePret", [], "any", false, false, false, 16), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Date_rendu_prevue</th>
                <td>";
        // line 20
        ((twig_get_attribute($this->env, $this->source, (isset($context["pret"]) || array_key_exists("pret", $context) ? $context["pret"] : (function () { throw new RuntimeError('Variable "pret" does not exist.', 20, $this->source); })()), "dateRenduPrevue", [], "any", false, false, false, 20)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pret"]) || array_key_exists("pret", $context) ? $context["pret"] : (function () { throw new RuntimeError('Variable "pret" does not exist.', 20, $this->source); })()), "dateRenduPrevue", [], "any", false, false, false, 20), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Date_rendu_user</th>
                <td>";
        // line 24
        ((twig_get_attribute($this->env, $this->source, (isset($context["pret"]) || array_key_exists("pret", $context) ? $context["pret"] : (function () { throw new RuntimeError('Variable "pret" does not exist.', 24, $this->source); })()), "dateRenduUser", [], "any", false, false, false, 24)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pret"]) || array_key_exists("pret", $context) ? $context["pret"] : (function () { throw new RuntimeError('Variable "pret" does not exist.', 24, $this->source); })()), "dateRenduUser", [], "any", false, false, false, 24), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Statut</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pret"]) || array_key_exists("pret", $context) ? $context["pret"] : (function () { throw new RuntimeError('Variable "pret" does not exist.', 28, $this->source); })()), "statut", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pret_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pret_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["pret"]) || array_key_exists("pret", $context) ? $context["pret"] : (function () { throw new RuntimeError('Variable "pret" does not exist.', 35, $this->source); })()), "id", [], "any", false, false, false, 35)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 37
        echo twig_include($this->env, $context, "pret/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "pret/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 37,  137 => 35,  132 => 33,  124 => 28,  117 => 24,  110 => 20,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Pret{% endblock %}

{% block body %}
    <h1>Pret</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ pret.id }}</td>
            </tr>
            <tr>
                <th>Date_pret</th>
                <td>{{ pret.datePret ? pret.datePret|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Date_rendu_prevue</th>
                <td>{{ pret.dateRenduPrevue ? pret.dateRenduPrevue|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Date_rendu_user</th>
                <td>{{ pret.dateRenduUser ? pret.dateRenduUser|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Statut</th>
                <td>{{ pret.statut }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_pret_index') }}\">back to list</a>

    <a href=\"{{ path('app_pret_edit', {'id': pret.id}) }}\">edit</a>

    {{ include('pret/_delete_form.html.twig') }}
{% endblock %}
", "pret/show.html.twig", "C:\\Users\\ugora\\Desktop\\nws-inventaire\\templates\\pret\\show.html.twig");
    }
}
