<?php
function nav_item(string $link, string $title): string{
    if($_SERVER['SCRIPT_NAME'] === $link){
        $class = 'currentlink';
    }
    return <<<HTML
    <li>
        <a  class="$class" href="$link">$title</a>
    </li>
HTML;
}