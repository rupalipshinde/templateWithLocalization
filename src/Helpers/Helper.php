<?php
namespace Rupalipshinde\TemplateWithLocalization\Helpers;

use DB;

function getTemplates($lang = 'en') {
    $templates = DB::table('email_templates')->where('language',$lang)->get();
    $templatesArr = array();
    foreach ($templates as $template) {
        $templatesArr['description'] = $template->description;
        $templatesArr['title'] = $template->title;
        $templatesArr['subject'] = $template->subject;
        $templatesArr['event'] = $template->event;
        $templatesArr['placeholder'] = $template->placeholder;
    }
    return $templatesArr;
}

?>