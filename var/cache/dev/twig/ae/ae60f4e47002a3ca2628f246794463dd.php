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

/* pret/index.html.twig */
class __TwigTemplate_59c12133e92baaff67e53920df43fc34 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pret/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pret/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pret/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<h1 class=\"mt-4 mb-4\">Pret index</h1>

\t<table class=\"table table-striped\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th scope=\"col\">Materiel Emprunte</th>
\t\t\t\t<th scope=\"col\">Date_pret</th>
\t\t\t\t<th scope=\"col\">Date_rendu_prevue</th>
\t\t\t\t<th scope=\"col\">Date_rendu_user</th>
\t\t\t\t<th scope=\"col\">Statut</th>
\t\t\t\t<th scope=\"col\">Propriétaire</th>
\t\t\t\t<th scope=\"col\">Actions</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["prets"]) || array_key_exists("prets", $context) ? $context["prets"] : (function () { throw new RuntimeError('Variable "prets" does not exist.', 19, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["pret"]) {
            // line 20
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pret"], "getMaterielEmprunte", [], "method", false, false, false, 21), "nom", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
\t\t\t\t\t";
            // line 23
            echo "\t\t\t\t\t<td>";
            ((twig_get_attribute($this->env, $this->source, $context["pret"], "datePret", [], "any", false, false, false, 23)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pret"], "datePret", [], "any", false, false, false, 23), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
\t\t\t\t\t<td>";
            // line 24
            ((twig_get_attribute($this->env, $this->source, $context["pret"], "dateRenduPrevue", [], "any", false, false, false, 24)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pret"], "dateRenduPrevue", [], "any", false, false, false, 24), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
\t\t\t\t\t<td>";
            // line 25
            ((twig_get_attribute($this->env, $this->source, $context["pret"], "dateRenduUser", [], "any", false, false, false, 25)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pret"], "dateRenduUser", [], "any", false, false, false, 25), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
\t\t\t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pret"], "statut", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pret"], "getUserEmprunteur", [], "method", false, false, false, 27), "email", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pret_show", ["id" => twig_get_attribute($this->env, $this->source, $context["pret"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\" class=\"btn btn-info btn-sm\">Show</a>
\t\t\t\t\t\t<a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pret_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["pret"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\" class=\"btn btn-warning btn-sm\">Edit</a>
\t\t\t\t\t\t";
            // line 31
            if ((null === twig_get_attribute($this->env, $this->source, $context["pret"], "dateRenduUser", [], "any", false, false, false, 31))) {
                // line 32
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pret_rendu", ["id" => twig_get_attribute($this->env, $this->source, $context["pret"], "id", [], "any", false, false, false, 32)]), "html", null, true);
                echo "\" class=\"btn btn-warning btn-sm\">Rendu</a>
\t\t\t\t\t\t\t<a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pret_rappele", ["id" => twig_get_attribute($this->env, $this->source, $context["pret"], "id", [], "any", false, false, false, 33)]), "html", null, true);
                echo "\" class=\"btn btn-warning btn-sm\">Rappel</a>
\t\t\t\t\t\t";
            }
            // line 35
            echo "\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 38
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"8\">No records found</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pret'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "\t\t</tbody>
\t</table>

\t<a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pret_new");
        echo "\" class=\"btn btn-primary\">Create new</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "pret/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 45,  155 => 42,  146 => 38,  139 => 35,  134 => 33,  129 => 32,  127 => 31,  123 => 30,  119 => 29,  114 => 27,  110 => 26,  106 => 25,  102 => 24,  97 => 23,  93 => 21,  90 => 20,  85 => 19,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
\t<h1 class=\"mt-4 mb-4\">Pret index</h1>

\t<table class=\"table table-striped\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th scope=\"col\">Materiel Emprunte</th>
\t\t\t\t<th scope=\"col\">Date_pret</th>
\t\t\t\t<th scope=\"col\">Date_rendu_prevue</th>
\t\t\t\t<th scope=\"col\">Date_rendu_user</th>
\t\t\t\t<th scope=\"col\">Statut</th>
\t\t\t\t<th scope=\"col\">Propriétaire</th>
\t\t\t\t<th scope=\"col\">Actions</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t{% for pret in prets %}
\t\t\t\t<tr>
\t\t\t\t\t<td>{{ pret.getMaterielEmprunte().nom }}</td>
\t\t\t\t\t{# Assuming 'nom' is the property of Materiel that you want to display #}
\t\t\t\t\t<td>{{ pret.datePret ? pret.datePret|date('Y-m-d') : '' }}</td>
\t\t\t\t\t<td>{{ pret.dateRenduPrevue ? pret.dateRenduPrevue|date('Y-m-d') : '' }}</td>
\t\t\t\t\t<td>{{ pret.dateRenduUser ? pret.dateRenduUser|date('Y-m-d') : '' }}</td>
\t\t\t\t\t<td>{{ pret.statut }}</td>
\t\t\t\t\t<td>{{ pret.getUserEmprunteur().email }}</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"{{ path('app_pret_show', {'id': pret.id}) }}\" class=\"btn btn-info btn-sm\">Show</a>
\t\t\t\t\t\t<a href=\"{{ path('app_pret_edit', {'id': pret.id}) }}\" class=\"btn btn-warning btn-sm\">Edit</a>
\t\t\t\t\t\t{% if pret.dateRenduUser is null %}
\t\t\t\t\t\t\t<a href=\"{{ path('app_pret_rendu', {'id': pret.id}) }}\" class=\"btn btn-warning btn-sm\">Rendu</a>
\t\t\t\t\t\t\t<a href=\"{{ path('app_pret_rappele', {'id': pret.id}) }}\" class=\"btn btn-warning btn-sm\">Rappel</a>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t{% else %}
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"8\">No records found</td>
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t</tbody>
\t</table>

\t<a href=\"{{ path('app_pret_new') }}\" class=\"btn btn-primary\">Create new</a>
{% endblock %}
", "pret/index.html.twig", "C:\\Users\\ugora\\Desktop\\nws-inventaire\\templates\\pret\\index.html.twig");
    }
}
