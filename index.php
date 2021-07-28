<?php

$request = preg_match("/(\/[^\/ ]*)\/*[^\/ ]*/", $_SERVER['REQUEST_URI'], $matches) ? $matches[1] : '';
$projects = json_decode(file_get_contents('./assets/docs/projects.json'))->projects;
$citations = json_decode(file_get_contents('./assets/docs/citations.json'))->citations;

switch ($request) {
    case '/':
        $index = random_int(0, count($citations) - 1);
        require __DIR__ . '/views/home.php';
        break;
    case '/projects':
        $projectName = preg_match("/\/projects\/([a-z-]+)/", $_SERVER['REQUEST_URI'], $matches) ? $matches[1] : header('Location: /');
        $project = null;
        for ($i = 0; $i < count($projects); ++$i) {
            if ($projects[$i]->slug === $projectName) {
                $project = $projects[$i];
                break;
            }
        }
        require __DIR__ . '/views/project.php';
        break;
    default:
        require __DIR__ . '/views/error404.php';
}