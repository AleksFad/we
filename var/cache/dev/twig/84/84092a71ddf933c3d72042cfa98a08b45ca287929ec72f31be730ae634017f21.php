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

/* admin/news/view-news.html.twig */
class __TwigTemplate_248b74d1e3f67f68a0c6bb54497fe206fe4887b6bd09b197de997cb2b6ed5cfd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/news/view-news.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/news/view-news.html.twig"));

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
        <th>Title:</th>
        <td>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new RuntimeError('Variable "news" does not exist.', 17, $this->source); })()), "title", [], "any", false, false, false, 17), "html", null, true);
        echo "</td>
    </tr>
";
        // line 23
        echo "
    <tr>
        <th>Date:</th>
        <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new RuntimeError('Variable "news" does not exist.', 26, $this->source); })()), "date", [], "any", false, false, false, 26), "Y-m-d"), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <th>Category:</th>
        <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new RuntimeError('Variable "news" does not exist.', 30, $this->source); })()), "categories", [], "any", false, false, false, 30), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <th>Content:</th>
        <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new RuntimeError('Variable "news" does not exist.', 34, $this->source); })()), "content", [], "any", false, false, false, 34), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <td><td><img src=";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new RuntimeError('Variable "news" does not exist.', 37, $this->source); })()), "image", [], "any", false, false, false, 37), "html", null, true);
        echo " /></td></td>
    </tr>
    </tbody>
</table>

<div class=\"row\">
    <div class=\"col-sm-12\">
        <h3><i class=\"pr-3 fa fa-comment\"></i>";
        // line 44
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new RuntimeError('Variable "news" does not exist.', 44, $this->source); })()), "comments", [], "any", false, false, false, 44)), "html", null, true);
        echo " Comments</h3>
        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new RuntimeError('Variable "news" does not exist.', 45, $this->source); })()), "comments", [], "any", false, false, false, 45));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 46
            echo "            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"comment-container d-inline-block pl-3 align-top\">
                        <span class=\"comment\"> ";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 49), "html", null, true);
            echo "</span><span><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comments_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 49)]), "html", null, true);
            echo "\"> Delete comment</a></span>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "    </div>
</div>

<br/>
<a href=\"/admin/news/";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new RuntimeError('Variable "news" does not exist.', 58, $this->source); })()), "id", [], "any", false, false, false, 58), "html", null, true);
        echo "/category/create\">Add a category</a>
<a href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comments_create", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new RuntimeError('Variable "news" does not exist.', 59, $this->source); })()), "id", [], "any", false, false, false, 59)]), "html", null, true);
        echo "\">Add new comment</a>
<a href=\"/admin/news\">View All News</a> -
<a href=\"/admin/news/update/";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new RuntimeError('Variable "news" does not exist.', 61, $this->source); })()), "id", [], "any", false, false, false, 61), "html", null, true);
        echo "\">Modify News</a>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/news/view-news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 61,  137 => 59,  133 => 58,  127 => 54,  114 => 49,  109 => 46,  105 => 45,  101 => 44,  91 => 37,  85 => 34,  78 => 30,  71 => 26,  66 => 23,  61 => 17,  43 => 1,);
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
        <th>Title:</th>
        <td>{{ news.title }}</td>
    </tr>
{#    <tr>#}
{#        <th>Description:</th>#}
{#        <td>{{ news.description }}</td>#}
{#    </tr>#}

    <tr>
        <th>Date:</th>
        <td>{{ news.date|date('Y-m-d') }}</td>
    </tr>
    <tr>
        <th>Category:</th>
        <td>{{ news.categories }}</td>
    </tr>
    <tr>
        <th>Content:</th>
        <td>{{ news.content }}</td>
    </tr>
    <tr>
        <td><td><img src={{ news.image }} /></td></td>
    </tr>
    </tbody>
</table>

<div class=\"row\">
    <div class=\"col-sm-12\">
        <h3><i class=\"pr-3 fa fa-comment\"></i>{{ news.comments|length }} Comments</h3>
        {% for comment in news.comments %}
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"comment-container d-inline-block pl-3 align-top\">
                        <span class=\"comment\"> {{ comment.content }}</span><span><a href=\"{{path ('comments_delete', {'id' : comment.id })}}\"> Delete comment</a></span>
                    </div>
                </div>
            </div>
        {% endfor %}
    </div>
</div>

<br/>
<a href=\"/admin/news/{{ news.id }}/category/create\">Add a category</a>
<a href=\"{{path ('comments_create', {'id' : news.id })}}\">Add new comment</a>
<a href=\"/admin/news\">View All News</a> -
<a href=\"/admin/news/update/{{ news.id }}\">Modify News</a>", "admin/news/view-news.html.twig", "/Users/tactic/news-portal/templates/admin/news/view-news.html.twig");
    }
}
