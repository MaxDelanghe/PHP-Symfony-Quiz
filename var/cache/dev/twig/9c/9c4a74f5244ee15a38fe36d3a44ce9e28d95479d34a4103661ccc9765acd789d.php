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

/* security/userprofile.html.twig */
class __TwigTemplate_839f9d69e2eaef116016f2e75deb0ac582be6f240b8011a3545c2d866e3c6e4b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/userprofile.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/userprofile.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/userprofile.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Mon profil";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"container\">

    <h3>Mon profil</h3>
    <div style=\"background-color: #EBEBEB; padding: 1.5em; margin-bottom: 2em;\">
        <p>Email : ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 10, $this->source); })()), "email", [], "any", false, false, false, 10), "html", null, true);
        echo "</p>
        <p>Username : ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 11, $this->source); })()), "username", [], "any", false, false, false, 11), "html", null, true);
        echo "</p>
        <p>Pseudo : ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 12, $this->source); })()), "pseudo", [], "any", false, false, false, 12), "html", null, true);
        echo "</p>
        <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil_update");
        echo "\" class=\"btn btn-success\">Mettre a jour ses infos personel</a>
        <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil_email_update");
        echo "\" class=\"btn text-light bg-dark\">Mettre a jour son email</a>
        <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil_password_update");
        echo "\" class=\"btn btn-danger\">Mettre a jour son mdp</a>
    </div>

    <h4>Mes quizs :</h4>
    <table class=\"table table-striped table-dark\">
        <thead>
          <tr>
            <th scope=\"col\">#</th>
            <th scope=\"col\">Nom du quiz</th>
            <th scope=\"col\">Categorie</th>
            <th scope=\"col\">Popularite</th>
            <th scope=\"col\">Date de creation</th>
          </tr>
        </thead>
        <tbody>
    ";
        // line 30
        $context["i"] = 1;
        // line 31
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["collections"]) || array_key_exists("collections", $context) ? $context["collections"] : (function () { throw new RuntimeError('Variable "collections" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["collection"]) {
            // line 32
            echo "          <tr>
            <th scope=\"row\">";
            // line 33
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 33, $this->source); })()), "html", null, true);
            echo "</th>
            <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["collection"], "name", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
            <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["collection"], "categorie_name", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
            <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["collection"], "pop", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
            <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["collection"], "date", [], "any", false, false, false, 37), "m/d/Y"), "html", null, true);
            echo "</td>
          </tr>
          ";
            // line 39
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 39, $this->source); })()) + 1);
            // line 40
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['collection'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "      </tbody>
    </table>
    <h4>Mon historique : </h4>
    <table class=\"table table-striped table-dark\">
        <thead>
          <tr>
            <th scope=\"col\">#</th>
            <th scope=\"col\">Nom du quiz</th>
            <th scope=\"col\">Categorie du quiz</th>
            <th scope=\"col\">Popularite du quiz</th>
            <th scope=\"col\">Scores</th>
            <th scope=\"col\">Quizee le</th>
          </tr>
        </thead>
        <tbody>
    ";
        // line 56
        $context["i"] = 1;
        // line 57
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["collections_Historys"]) || array_key_exists("collections_Historys", $context) ? $context["collections_Historys"] : (function () { throw new RuntimeError('Variable "collections_Historys" does not exist.', 57, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["collections_History"]) {
            // line 58
            echo "          <tr>
            <th scope=\"row\">";
            // line 59
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 59, $this->source); })()), "html", null, true);
            echo "</th>
            <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["collections_History"], "name", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
            <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["collections_History"], "categorie_name", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
            <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["collections_History"], "pop", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
            <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["collections_History"], "score", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
            <td>";
            // line 64
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["collections_History"], "date", [], "any", false, false, false, 64), "m/d/Y"), "html", null, true);
            echo "</td>
          </tr>
          ";
            // line 66
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 66, $this->source); })()) + 1);
            // line 67
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['collections_History'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "      </tbody>
    </table>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/userprofile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 68,  225 => 67,  223 => 66,  218 => 64,  214 => 63,  210 => 62,  206 => 61,  202 => 60,  198 => 59,  195 => 58,  190 => 57,  188 => 56,  171 => 41,  165 => 40,  163 => 39,  158 => 37,  154 => 36,  150 => 35,  146 => 34,  142 => 33,  139 => 32,  134 => 31,  132 => 30,  114 => 15,  110 => 14,  106 => 13,  102 => 12,  98 => 11,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mon profil{% endblock %}

{% block body %}
<div class=\"container\">

    <h3>Mon profil</h3>
    <div style=\"background-color: #EBEBEB; padding: 1.5em; margin-bottom: 2em;\">
        <p>Email : {{ user.email}}</p>
        <p>Username : {{ user.username}}</p>
        <p>Pseudo : {{ user.pseudo}}</p>
        <a href=\"{{ path('profil_update')}}\" class=\"btn btn-success\">Mettre a jour ses infos personel</a>
        <a href=\"{{ path('profil_email_update')}}\" class=\"btn text-light bg-dark\">Mettre a jour son email</a>
        <a href=\"{{ path('profil_password_update')}}\" class=\"btn btn-danger\">Mettre a jour son mdp</a>
    </div>

    <h4>Mes quizs :</h4>
    <table class=\"table table-striped table-dark\">
        <thead>
          <tr>
            <th scope=\"col\">#</th>
            <th scope=\"col\">Nom du quiz</th>
            <th scope=\"col\">Categorie</th>
            <th scope=\"col\">Popularite</th>
            <th scope=\"col\">Date de creation</th>
          </tr>
        </thead>
        <tbody>
    {% set i = 1 %}
    {% for collection in collections %}
          <tr>
            <th scope=\"row\">{{i}}</th>
            <td>{{  collection.name   }}</td>
            <td>{{  collection.categorie_name   }}</td>
            <td>{{  collection.pop   }}</td>
            <td>{{  collection.date  | date(\"m/d/Y\") }}</td>
          </tr>
          {% set i = i + 1 %}
    {% endfor %}
      </tbody>
    </table>
    <h4>Mon historique : </h4>
    <table class=\"table table-striped table-dark\">
        <thead>
          <tr>
            <th scope=\"col\">#</th>
            <th scope=\"col\">Nom du quiz</th>
            <th scope=\"col\">Categorie du quiz</th>
            <th scope=\"col\">Popularite du quiz</th>
            <th scope=\"col\">Scores</th>
            <th scope=\"col\">Quizee le</th>
          </tr>
        </thead>
        <tbody>
    {% set i = 1 %}
    {% for collections_History in collections_Historys %}
          <tr>
            <th scope=\"row\">{{i}}</th>
            <td>{{  collections_History.name   }}</td>
            <td>{{  collections_History.categorie_name   }}</td>
            <td>{{  collections_History.pop   }}</td>
            <td>{{  collections_History.score   }}</td>
            <td>{{  collections_History.date  | date(\"m/d/Y\") }}</td>
          </tr>
          {% set i = i + 1 %}
    {% endfor %}
      </tbody>
    </table>
</div>
{% endblock %}", "security/userprofile.html.twig", "/home/maxime/Documents/my_quiz (copy)/templates/security/userprofile.html.twig");
    }
}
