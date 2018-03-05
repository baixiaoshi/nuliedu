<?php

/* file-chooser/parts/upload-file.html.twig */
class __TwigTemplate_c8df52c0a3f0209f3afb0a5ffa4aa138a99914c122db295e5c02f031791c73a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["targetType"] = ((array_key_exists("targetType", $context)) ? (_twig_default_filter(($context["targetType"] ?? null), "course-activity")) : ("course-activity"));
        // line 2
        if (((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? null), "")) : (""))) {
            // line 3
            echo "  ";
            $context["token"] = ($context["token"] ?? null);
        } else {
            // line 5
            echo "  ";
            $context["token"] = $this->env->getExtension('AppBundle\Twig\UploaderExtension')->makeUpoaderToken(($context["targetType"] ?? null), ($context["courseId"] ?? null), "private");
        }
        // line 7
        $context["storageSetting"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("storage");
        // line 8
        echo "<div class=\"uploader-content\">
  <div class=\"uploader-container\" id=\"uploader-container\"
  data-init-url=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("uploader_init_v2", array("token" => ($context["token"] ?? null)), true), "html", null, true);
        echo "\"
  data-finish-url=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("uploader_finished_v2", array("token" => ($context["token"] ?? null)), true), "html", null, true);
        echo "\"
  data-accept=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->env->getExtension('AppBundle\Twig\UploaderExtension')->getUploadFileAccept(($context["targetType"] ?? null), ((array_key_exists("fileType", $context)) ? (_twig_default_filter(($context["fileType"] ?? null), "")) : ("")))), "html", null, true);
        echo "\"
  data-process=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\UploaderExtension')->getProcessMode(($context["targetType"] ?? null)), "html", null, true);
        echo "\">
  </div>
  ";
        // line 15
        if ((((((array_key_exists("mediaType", $context)) ? (_twig_default_filter(($context["mediaType"] ?? null), null)) : (null)) == "video") || ((array_key_exists("showVideoQuality", $context)) ? (_twig_default_filter(($context["showVideoQuality"] ?? null), 0)) : (0))) && ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("storage.upload_mode", "local") != "local"))) {
            // line 16
            echo "    <div class=\"uploader-bottom\">
      <div class=\"row\">
        <div class=\"col-xs-8\">
          ";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("file_chooser.upload_file.video_quality"), "html", null, true);
            echo "
          <select class=\"form-control border-gray mrl js-upload-params\" name=\"videoQuality\">
            ";
            // line 21
            echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->selectOptions(array("low" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("file_chooser.upload_file.video_quality.low"), "normal" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("file_chooser.upload_file.video_quality.normal"), "high" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("file_chooser.upload_file.video_quality.high")), $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("storage.video_quality"));
            echo "
          </select>
          ";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("file_chooser.upload_file.audio_quality"), "html", null, true);
            echo "
          <select class=\"form-control border-gray js-upload-params\" name=\"audioQuality\">
            ";
            // line 25
            echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->selectOptions(array("low" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("file_chooser.upload_file.audio_quality.low"), "normal" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("file_chooser.upload_file.audio_quality.normal"), "high" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("file_chooser.upload_file.audio_quality.high")), $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("storage.video_audio_quality"));
            echo "
          </select>
        </div>
        <input type=\"hidden\" name=\"support_mobile\" value=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("storage.support_mobile", 0), "html", null, true);
            echo "\" />
        <div class=\"col-xs-4 text-xs text-center\">
          <a class=\"btn-gray\" href=\"javascript:;\" data-container=\"body\" data-toggle=\"popover\" data-placement=\"top\" data-trigger=\"hover\" data-content=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("file_chooser.upload_file.convert_tips"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("file_chooser.upload_file.convert"), "html", null, true);
            echo "</a>
          ｜
          <a class=\"btn-gray\" href=\"javascript:;\" data-container=\"body\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\" data-content=\"";
            // line 32
            if (((array_key_exists("showVideoQuality", $context)) ? (_twig_default_filter(($context["showVideoQuality"] ?? null), 0)) : (0))) {
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("upload.cloud_upload_tips");
            } else {
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("file_chooser.upload_file.suopprt_audio_tips");
            }
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("file_chooser.upload_file.upload_tips"), "html", null, true);
            echo "</a>
        </div>
      </div>
    </div>
  ";
        }
        // line 37
        echo "
  ";
        // line 38
        if (((((array_key_exists("mediaType", $context)) ? (_twig_default_filter(($context["mediaType"] ?? null), null)) : (null)) == "audio") && ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("storage.upload_mode", "local") != "local"))) {
            // line 39
            echo "    <div class=\"uploader-bottom text-right\">
      <a class=\"btn-gray\" href=\"javascript:;\" data-container=\"body\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\" data-content=\"";
            // line 40
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("file_chooser.upload_file.upload_audio_tips");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("file_chooser.upload_file.upload_tips"), "html", null, true);
            echo "
    </a>
    </div>
  ";
        }
        // line 44
        echo "
  ";
        // line 45
        if (((((array_key_exists("mediaType", $context)) ? (_twig_default_filter(($context["mediaType"] ?? null), null)) : (null)) == "flash") && ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("storage.upload_mode", "local") != "local"))) {
            // line 46
            echo "    <div class=\"uploader-bottom text-right\">
      <a class=\"btn-gray\" href=\"javascript:;\" data-container=\"body\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\" data-content=\"";
            // line 47
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("file_chooser.upload_file.upload_flash_tips");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("file_chooser.upload_file.upload_tips"), "html", null, true);
            echo "
    </a>
    </div>
  ";
        }
        // line 51
        echo "
  ";
        // line 52
        if (((((array_key_exists("mediaType", $context)) ? (_twig_default_filter(($context["mediaType"] ?? null), null)) : (null)) == "document") && ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("storage.upload_mode", "local") != "local"))) {
            // line 53
            echo "    <div class=\"uploader-bottom text-right\">
      <a class=\"btn-gray\" href=\"javascript:;\" data-container=\"body\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\" data-content=\"";
            // line 54
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("file_chooser.upload_file.upload_doc_tips");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("file_chooser.upload_file.upload_tips"), "html", null, true);
            echo "
    </a>
    </div>
  ";
        }
        // line 58
        echo "
  ";
        // line 59
        if (((((array_key_exists("mediaType", $context)) ? (_twig_default_filter(($context["mediaType"] ?? null), null)) : (null)) == "ppt") && ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("storage.upload_mode", "local") != "local"))) {
            // line 60
            echo "    <div class=\"uploader-bottom text-right\">
      <a class=\"btn-gray\" href=\"javascript:;\" data-container=\"body\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\" data-content=\"";
            // line 61
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("file_chooser.upload_file.upload_ppt_tips");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("file_chooser.upload_file.upload_tips"), "html", null, true);
            echo "</a>
    </div>
  ";
        }
        // line 64
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "file-chooser/parts/upload-file.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 64,  167 => 61,  164 => 60,  162 => 59,  159 => 58,  150 => 54,  147 => 53,  145 => 52,  142 => 51,  133 => 47,  130 => 46,  128 => 45,  125 => 44,  116 => 40,  113 => 39,  111 => 38,  108 => 37,  94 => 32,  87 => 30,  82 => 28,  76 => 25,  71 => 23,  66 => 21,  61 => 19,  56 => 16,  54 => 15,  49 => 13,  45 => 12,  41 => 11,  37 => 10,  33 => 8,  31 => 7,  27 => 5,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "file-chooser/parts/upload-file.html.twig", "/vagrant_data/nuliedu/app/Resources/views/file-chooser/parts/upload-file.html.twig");
    }
}
