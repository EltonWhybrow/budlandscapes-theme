<?php
$data = isset($data) ? $data : new stdClass();
$text = isset($data->text) ? $data->text : "";
$size = isset($data->size) ? $data->size : "";
$type = isset($data->type) ? $data->type : "";
$url = isset($data->url) ? $data->url : "";
$qstring = isset($data->qstring) ? $data->qstring : "";
?>

<p class="my-1">
    <!-- {# purgecss: primary-btn-sm primary-btn secondary-btn secondary-btn-sm #} -->
    <a href="<?= $url ?><?= $qstring ?>" class="<?= $type ?>-btn<?= $size ?> inline-flex" target="_blank">
        <span><?= $text ?></span>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 button-icon-right" viewBox="0 0 20 20"
            fill="currentColor">
            <path fill-rule="evenodd"
                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                clip-rule="evenodd" />
        </svg>
    </a>
</p>
