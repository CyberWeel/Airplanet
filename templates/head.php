<?php function make_head(string $title) :string {
    return '<!DOCTYPE html>'."\n".
        '<html lang="ru">'."\n".
        '<head>'."\n".
        '<meta charset="UTF-8">'."\n".
        '<meta name="viewport" content="width=device-width, initial-scale=1.0">'."\n".
        '<title>'.$title.'</title>'."\n".
        '<link rel="stylesheet" href="'.MAIN_CSS_PATH.'">'."\n".
        '</head>';
} 