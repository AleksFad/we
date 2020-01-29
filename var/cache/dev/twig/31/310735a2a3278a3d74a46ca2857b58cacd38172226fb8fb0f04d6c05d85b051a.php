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

/* admin/view-news.html.twig */
class __TwigTemplate_16d5cea45784b52b6627b1276f9e61c4a12041f341a912024a474556bfcd4c01 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/view-news.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/view-news.html.twig"));

        // line 1
        echo "<style>
    th, td {
        padding: 10px;
    }
    th {
        text-align: right;
    }
</style>

<h1>News Created or Modified</h1>

<table>
    <tbody>
    <tr>
        <td><td><img src=";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new RuntimeError('Variable "news" does not exist.', 15, $this->source); })()), "picture", [], "any", false, false, false, 15), "html", null, true);
        echo " /></td></td>
    </tr>
    <tr>
        <th>Title:</th>
        <td>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new RuntimeError('Variable "news" does not exist.', 19, $this->source); })()), "title", [], "any", false, false, false, 19), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <th>Description:</th>
        <td>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new RuntimeError('Variable "news" does not exist.', 23, $this->source); })()), "description", [], "any", false, false, false, 23), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <th>Content:</th>
        <td>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new RuntimeError('Variable "news" does not exist.', 27, $this->source); })()), "content", [], "any", false, false, false, 27), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <th>Date:</th>
        <td>";
        // line 31
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new RuntimeError('Variable "news" does not exist.', 31, $this->source); })()), "date", [], "any", false, false, false, 31), "Y-m-d"), "html", null, true);
        echo "</td>
    </tr>
    </tbody>
</table>

<div class=\"row\">
    <div class=\"col-sm-12\">
        <h3><i class=\"pr-3 fa fa-comment\"></i>";
        // line 38
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new RuntimeError('Variable "news" does not exist.', 38, $this->source); })()), "categories", [], "any", false, false, false, 38)), "html", null, true);
        echo " Categories</h3>
        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new RuntimeError('Variable "news" does not exist.', 39, $this->source); })()), "categories", [], "any", false, false, false, 39));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 40
            echo "            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"comment-container d-inline-block pl-3 align-top\">
                        <span class=\"comment\"> ";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "title", [], "any", false, false, false, 43), "html", null, true);
            echo "</span>
";
            // line 45
            echo "                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "    </div>
</div>

<div class=\"row\">
    <div class=\"col-sm-12\">
        <h3><i class=\"pr-3 fa fa-comment\"></i>";
        // line 54
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new RuntimeError('Variable "news" does not exist.', 54, $this->source); })()), "comments", [], "any", false, false, false, 54)), "html", null, true);
        echo " Comments</h3>
        ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new RuntimeError('Variable "news" does not exist.', 55, $this->source); })()), "comments", [], "any", false, false, false, 55));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 56
            echo "            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"comment-container d-inline-block pl-3 align-top\">
                        <span class=\"comment\"> ";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 59), "html", null, true);
            echo "</span><span><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comments_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 59)]), "html", null, true);
            echo "\">Delete comment</a></span>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "    </div>
</div>

<br/>
";
        // line 69
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comments_create", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new RuntimeError('Variable "news" does not exist.', 69, $this->source); })()), "id", [], "any", false, false, false, 69)]), "html", null, true);
        echo "\">Add new comment</a>
<a href=\"/admin/news\">View All News</a> -
<a href=\"/admin/news/update/";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new RuntimeError('Variable "news" does not exist.', 71, $this->source); })()), "id", [], "any", false, false, false, 71), "html", null, true);
        echo "\">Modify News</a>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/view-news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 71,  162 => 69,  156 => 64,  143 => 59,  138 => 56,  134 => 55,  130 => 54,  123 => 49,  114 => 45,  110 => 43,  105 => 40,  101 => 39,  97 => 38,  87 => 31,  80 => 27,  73 => 23,  66 => 19,  59 => 15,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>
    th, td {
        padding: 10px;
    }
    th {
        text-align: right;
    }
</style>

<h1>News Created or Modified</h1>

<table>
    <tbody>
    <tr>
        <td><td><img src={{ news.picture }} /></td></td>
    </tr>
    <tr>
        <th>Title:</th>
        <td>{{ news.title }}</td>
    </tr>
    <tr>
        <th>Description:</th>
        <td>{{ news.description }}</td>
    </tr>
    <tr>
        <th>Content:</th>
        <td>{{ news.content }}</td>
    </tr>
    <tr>
        <th>Date:</th>
        <td>{{ news.date|date('Y-m-d') }}</td>
    </tr>
    </tbody>
</table>

<div class=\"row\">
    <div class=\"col-sm-12\">
        <h3><i class=\"pr-3 fa fa-comment\"></i>{{ news.categories|length }} Categories</h3>
        {% for category in news.categories %}
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"comment-container d-inline-block pl-3 align-top\">
                        <span class=\"comment\"> {{ category.title }}</span>
{#                        <span><a href=\"{{path ('comments_delete', {'id' : comment.id })}}\">Delete comment</a></span>#}
                    </div>
                </div>
            </div>
        {% endfor %}
    </div>
</div>

<div class=\"row\">
    <div class=\"col-sm-12\">
        <h3><i class=\"pr-3 fa fa-comment\"></i>{{ news.comments|length }} Comments</h3>
        {% for comment in news.comments %}
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"comment-container d-inline-block pl-3 align-top\">
                        <span class=\"comment\"> {{ comment.content }}</span><span><a href=\"{{path ('comments_delete', {'id' : comment.id })}}\">Delete comment</a></span>
                    </div>
                </div>
            </div>
        {% endfor %}
    </div>
</div>

<br/>
{#<a href=\"/admin/news/{{ news.id }}/comments/create\">Add a comment</a>#}
<a href=\"{{path ('comments_create', {'id' : news.id })}}\">Add new comment</a>
<a href=\"/admin/news\">View All News</a> -
<a href=\"/admin/news/update/{{ news.id }}\">Modify News</a>", "admin/view-news.html.twig", "/Users/tactic/news-portal/templates/admin/view-news.html.twig");
    }
}
