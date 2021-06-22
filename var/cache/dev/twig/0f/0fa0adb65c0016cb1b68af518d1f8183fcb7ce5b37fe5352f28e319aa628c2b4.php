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

/* quiz/display_result.html.twig */
class __TwigTemplate_fbd98d87f13294748f122f97b4962888dbc0d3895e4c589c47843b0297e6978f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/display_result.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/display_result.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "quiz/display_result.html.twig", 1);
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

<div class=\"border\">
    <p class=\"text-success text-decoration-underline\">Vert indique une reponse choisie et correct</p>
    <p class=\"text-danger text-decoration-underline\">rouge indique une reponse choisie mais incorrect</p>
    <p class=\"text-primary text-decoration-underline\">Bleu indique la bonne reponse</p>
</div>
";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 14
            echo "    <p>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "content", [], "any", false, false, false, 14), "html", null, true);
            echo "</p>
        ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["question"], "getAnswers", [], "any", false, false, false, 15));
            foreach ($context['_seq'] as $context["_key"] => $context["answer"]) {
                // line 16
                echo "            ";
                $context["expect"] = false;
                // line 17
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["results"]) || array_key_exists("results", $context) ? $context["results"] : (function () { throw new RuntimeError('Variable "results" does not exist.', 17, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                    // line 18
                    echo "                    ";
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["answer"], "content", [], "any", false, false, false, 18), twig_get_attribute($this->env, $this->source, $context["result"], 0, [], "array", false, false, false, 18)))) {
                        // line 19
                        echo "                        ";
                        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["result"], 1, [], "array", false, false, false, 19), true))) {
                            // line 20
                            echo "                            ";
                            $context["expect"] = "correct";
                            // line 21
                            echo "                        ";
                        } else {
                            // line 22
                            echo "                            ";
                            $context["expect"] = "incorect";
                            // line 23
                            echo "                        ";
                        }
                        // line 24
                        echo "                    ";
                    }
                    // line 25
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                echo "             ";
                if ((0 === twig_compare((isset($context["expect"]) || array_key_exists("expect", $context) ? $context["expect"] : (function () { throw new RuntimeError('Variable "expect" does not exist.', 26, $this->source); })()), "correct"))) {
                    // line 27
                    echo "                <p class=\"text-success\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["answer"], "content", [], "any", false, false, false, 27), "html", null, true);
                    echo "</p>
             ";
                } elseif ((0 === twig_compare(                // line 28
(isset($context["expect"]) || array_key_exists("expect", $context) ? $context["expect"] : (function () { throw new RuntimeError('Variable "expect" does not exist.', 28, $this->source); })()), "incorect"))) {
                    // line 29
                    echo "                <p class=\"text-danger\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["answer"], "content", [], "any", false, false, false, 29), "html", null, true);
                    echo "</p>
             ";
                } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                 // line 30
$context["answer"], "correct", [], "any", false, false, false, 30), true))) {
                    // line 31
                    echo "                 <p class=\"text-primary\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["answer"], "content", [], "any", false, false, false, 31), "html", null, true);
                    echo "</p>
             ";
                } else {
                    // line 33
                    echo "                 <p class=\"\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["answer"], "content", [], "any", false, false, false, 33), "html", null, true);
                    echo "</p>
             ";
                }
                // line 35
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['answer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "    
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "quiz/display_result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 37,  173 => 35,  167 => 33,  161 => 31,  159 => 30,  154 => 29,  152 => 28,  147 => 27,  144 => 26,  138 => 25,  135 => 24,  132 => 23,  129 => 22,  126 => 21,  123 => 20,  120 => 19,  117 => 18,  112 => 17,  109 => 16,  105 => 15,  100 => 14,  96 => 13,  87 => 6,  77 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{% endblock %}

{% block body %}
<div class=\"container\">

<div class=\"border\">
    <p class=\"text-success text-decoration-underline\">Vert indique une reponse choisie et correct</p>
    <p class=\"text-danger text-decoration-underline\">rouge indique une reponse choisie mais incorrect</p>
    <p class=\"text-primary text-decoration-underline\">Bleu indique la bonne reponse</p>
</div>
{% for question in questions %}
    <p>{{ question.content }}</p>
        {% for answer in question.getAnswers %}
            {% set expect = false %}
                {% for result in results %}
                    {% if answer.content ==  result[0]%}
                        {% if result[1] == true %}
                            {% set expect = 'correct' %}
                        {% else %}
                            {% set expect = 'incorect' %}
                        {% endif %}
                    {% endif %}
                {% endfor %}
             {% if expect == 'correct' %}
                <p class=\"text-success\">{{ answer.content }}</p>
             {% elseif expect == 'incorect' %}
                <p class=\"text-danger\">{{ answer.content }}</p>
             {% elseif answer.correct == true %}
                 <p class=\"text-primary\">{{ answer.content }}</p>
             {% else %}
                 <p class=\"\">{{ answer.content }}</p>
             {% endif %}
    {% endfor %}
{% endfor %}
    
</div>
{% endblock %}", "quiz/display_result.html.twig", "/home/maxime/Documents/my_quiz (copy)/templates/quiz/display_result.html.twig");
    }
}
