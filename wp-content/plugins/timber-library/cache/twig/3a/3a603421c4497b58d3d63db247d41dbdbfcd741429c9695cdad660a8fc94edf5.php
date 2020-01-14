<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modules/hero/hero.twig */
class __TwigTemplate_16463529c62cf6885ac0ab1262afe1703d658383c9bb15b59168276efc14895a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"hero\">
  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum fugiat itaque necessitatibus nemo officiis perferendis quasi reiciendis sunt, tenetur velit. Aliquid aspernatur et illo modi necessitatibus qui sint sunt tenetur?
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/hero/hero.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"hero\">
  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum fugiat itaque necessitatibus nemo officiis perferendis quasi reiciendis sunt, tenetur velit. Aliquid aspernatur et illo modi necessitatibus qui sint sunt tenetur?
</div>
", "modules/hero/hero.twig", "/var/www/html/wp-content/themes/truveris/modules/hero/hero.twig");
    }
}
