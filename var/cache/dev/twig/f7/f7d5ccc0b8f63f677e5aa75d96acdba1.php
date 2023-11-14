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
class __TwigTemplate_0d313ae1986518b0d2db7ba29c824336 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pret/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pret/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pret/show.html.twig", 1);
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
        echo "\t<h1 class=\"mt-4 mb-4\">Pret Details</h1>

\t";
        // line 6
        if ((isset($context["pret"]) || array_key_exists("pret", $context) ? $context["pret"] : (function () { throw new RuntimeError('Variable "pret" does not exist.', 6, $this->source); })())) {
            // line 7
            echo "\t\t<table class=\"table table-striped\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th scope=\"col\">Materiel Emprunte</th>
\t\t\t\t\t<th scope=\"col\">Date_pret</th>
\t\t\t\t\t<th scope=\"col\">Date_rendu_prevue</th>
\t\t\t\t\t<th scope=\"col\">Date_rendu_user</th>
\t\t\t\t\t<th scope=\"col\">Statut</th>
\t\t\t\t\t<th scope=\"col\">Propriétaire</th>
\t\t\t\t\t<th scope=\"col\">Actions</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t<td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pret"]) || array_key_exists("pret", $context) ? $context["pret"] : (function () { throw new RuntimeError('Variable "pret" does not exist.', 21, $this->source); })()), "getMaterielEmprunte", [], "method", false, false, false, 21), "nom", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 22
            ((twig_get_attribute($this->env, $this->source, (isset($context["pret"]) || array_key_exists("pret", $context) ? $context["pret"] : (function () { throw new RuntimeError('Variable "pret" does not exist.', 22, $this->source); })()), "datePret", [], "any", false, false, false, 22)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pret"]) || array_key_exists("pret", $context) ? $context["pret"] : (function () { throw new RuntimeError('Variable "pret" does not exist.', 22, $this->source); })()), "datePret", [], "any", false, false, false, 22), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
\t\t\t\t\t<td>";
            // line 23
            ((twig_get_attribute($this->env, $this->source, (isset($context["pret"]) || array_key_exists("pret", $context) ? $context["pret"] : (function () { throw new RuntimeError('Variable "pret" does not exist.', 23, $this->source); })()), "dateRenduPrevue", [], "any", false, false, false, 23)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pret"]) || array_key_exists("pret", $context) ? $context["pret"] : (function () { throw new RuntimeError('Variable "pret" does not exist.', 23, $this->source); })()), "dateRenduPrevue", [], "any", false, false, false, 23), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
\t\t\t\t\t<td>";
            // line 24
            ((twig_get_attribute($this->env, $this->source, (isset($context["pret"]) || array_key_exists("pret", $context) ? $context["pret"] : (function () { throw new RuntimeError('Variable "pret" does not exist.', 24, $this->source); })()), "dateRenduUser", [], "any", false, false, false, 24)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pret"]) || array_key_exists("pret", $context) ? $context["pret"] : (function () { throw new RuntimeError('Variable "pret" does not exist.', 24, $this->source); })()), "dateRenduUser", [], "any", false, false, false, 24), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
\t\t\t\t\t<td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pret"]) || array_key_exists("pret", $context) ? $context["pret"] : (function () { throw new RuntimeError('Variable "pret" does not exist.', 25, $this->source); })()), "statut", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 26
            ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pret"]) || array_key_exists("pret", $context) ? $context["pret"] : (function () { throw new RuntimeError('Variable "pret" does not exist.', 26, $this->source); })()), "getUserEmprunteur", [], "method", false, false, false, 26), "email", [], "any", false, false, false, 26)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pret"]) || array_key_exists("pret", $context) ? $context["pret"] : (function () { throw new RuntimeError('Variable "pret" does not exist.', 26, $this->source); })()), "getUserEmprunteur", [], "method", false, false, false, 26), "email", [], "any", false, false, false, 26), "html", null, true))) : (print ("")));
            echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pret_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["pret"]) || array_key_exists("pret", $context) ? $context["pret"] : (function () { throw new RuntimeError('Variable "pret" does not exist.', 28, $this->source); })()), "id", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\" class=\"btn btn-info btn-sm\">Show</a>
\t\t\t\t\t\t<a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pret_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["pret"]) || array_key_exists("pret", $context) ? $context["pret"] : (function () { throw new RuntimeError('Variable "pret" does not exist.', 29, $this->source); })()), "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\" class=\"btn btn-warning btn-sm\">Edit</a>
\t\t\t\t\t\t";
            // line 30
            if ((null === twig_get_attribute($this->env, $this->source, (isset($context["pret"]) || array_key_exists("pret", $context) ? $context["pret"] : (function () { throw new RuntimeError('Variable "pret" does not exist.', 30, $this->source); })()), "dateRenduUser", [], "any", false, false, false, 30))) {
                // line 31
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pret_rendu", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["pret"]) || array_key_exists("pret", $context) ? $context["pret"] : (function () { throw new RuntimeError('Variable "pret" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31)]), "html", null, true);
                echo "\" class=\"btn btn-warning btn-sm\">Rendu</a>
\t\t\t\t\t\t\t<a href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pret_rappele", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["pret"]) || array_key_exists("pret", $context) ? $context["pret"] : (function () { throw new RuntimeError('Variable "pret" does not exist.', 32, $this->source); })()), "id", [], "any", false, false, false, 32)]), "html", null, true);
                echo "\" class=\"btn btn-warning btn-sm\">Rappel</a>
\t\t\t\t\t\t";
            }
            // line 34
            echo "\t\t\t\t\t\t<form method=\"post\" action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pret_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["pret"]) || array_key_exists("pret", $context) ? $context["pret"] : (function () { throw new RuntimeError('Variable "pret" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\" style=\"display: inline;\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, (isset($context["pret"]) || array_key_exists("pret", $context) ? $context["pret"] : (function () { throw new RuntimeError('Variable "pret" does not exist.', 35, $this->source); })()), "id", [], "any", false, false, false, 35))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-danger btn-sm\" onclick=\"return confirm('Are you sure you want to delete this item?')\">Delete</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</tbody>
\t\t</table>

\t\t<a href=\"";
            // line 43
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pret_index");
            echo "\" class=\"btn btn-primary\">Back to List</a>
\t";
        } else {
            // line 45
            echo "\t\t<p>No record found</p>
\t";
        }
        
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
        return array (  156 => 45,  151 => 43,  140 => 35,  135 => 34,  130 => 32,  125 => 31,  123 => 30,  119 => 29,  115 => 28,  110 => 26,  106 => 25,  102 => 24,  98 => 23,  94 => 22,  90 => 21,  74 => 7,  72 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
\t<h1 class=\"mt-4 mb-4\">Pret Details</h1>

\t{% if pret %}
\t\t<table class=\"table table-striped\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th scope=\"col\">Materiel Emprunte</th>
\t\t\t\t\t<th scope=\"col\">Date_pret</th>
\t\t\t\t\t<th scope=\"col\">Date_rendu_prevue</th>
\t\t\t\t\t<th scope=\"col\">Date_rendu_user</th>
\t\t\t\t\t<th scope=\"col\">Statut</th>
\t\t\t\t\t<th scope=\"col\">Propriétaire</th>
\t\t\t\t\t<th scope=\"col\">Actions</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t<td>{{ pret.getMaterielEmprunte().nom }}</td>
\t\t\t\t\t<td>{{ pret.datePret ? pret.datePret|date('Y-m-d') : '' }}</td>
\t\t\t\t\t<td>{{ pret.dateRenduPrevue ? pret.dateRenduPrevue|date('Y-m-d') : '' }}</td>
\t\t\t\t\t<td>{{ pret.dateRenduUser ? pret.dateRenduUser|date('Y-m-d') : '' }}</td>
\t\t\t\t\t<td>{{ pret.statut }}</td>
\t\t\t\t\t<td>{{ pret.getUserEmprunteur().email ? pret.getUserEmprunteur().email : '' }}</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"{{ path('app_pret_show', {'id': pret.id}) }}\" class=\"btn btn-info btn-sm\">Show</a>
\t\t\t\t\t\t<a href=\"{{ path('app_pret_edit', {'id': pret.id}) }}\" class=\"btn btn-warning btn-sm\">Edit</a>
\t\t\t\t\t\t{% if pret.dateRenduUser is null %}
\t\t\t\t\t\t\t<a href=\"{{ path('app_pret_rendu', {'id': pret.id}) }}\" class=\"btn btn-warning btn-sm\">Rendu</a>
\t\t\t\t\t\t\t<a href=\"{{ path('app_pret_rappele', {'id': pret.id}) }}\" class=\"btn btn-warning btn-sm\">Rappel</a>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t<form method=\"post\" action=\"{{ path('app_pret_delete', {'id': pret.id}) }}\" style=\"display: inline;\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ pret.id) }}\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-danger btn-sm\" onclick=\"return confirm('Are you sure you want to delete this item?')\">Delete</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</tbody>
\t\t</table>

\t\t<a href=\"{{ path('app_pret_index') }}\" class=\"btn btn-primary\">Back to List</a>
\t{% else %}
\t\t<p>No record found</p>
\t{% endif %}
{% endblock %}
", "pret/show.html.twig", "C:\\Users\\ugora\\Desktop\\nws-inventaire\\templates\\pret\\show.html.twig");
    }
}
