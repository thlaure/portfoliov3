<?php

$request = preg_match("/(\/[^\/ ]*)\/*[^\/ ]*/", $_SERVER['REQUEST_URI'], $matches) ? $matches[1] : '';
$projects = json_decode(file_get_contents('./assets/docs/projects.json'))->projects;

switch ($request) {
    case '/':
        require __DIR__ . '/views/home.php';
        break;
    case '/projects':
        $projectName = preg_match("/\/projects\/([a-z-]+)/", $_SERVER['REQUEST_URI'], $matches) ? $matches[1] : header('Location: /');
        $project = null;
        $nbProjects = count($projects);
        for ($i = 0; $i < $nbProjects; ++$i) {
            if ($projects[$i]->slug === $projectName) {
                $project = $projects[$i];
                break;
            }
        }
        require __DIR__ . '/views/project.php';
        break;
    default:
        header('Location: /');
}