<?php


// Read From Json File
function readProjects()
{
    $content = file_get_contents(__DIR__ . 'projects.json');

    // From Json To Array
    $contentToArray = json_decode($content, true);
    return $contentToArray;
}


// Write To File Json
function writeProjects($project)
{
    $contentToJson = json_encode($project);
    file_put_contents(__DIR__ . 'projects.json', $contentToJson);
}

// create  project
function createProject($name, $description, $image)
{
    $projects = readProjects();
    $lastProject = $projects ? end($projects) : [];
    $lastProjectId = $lastProject['id'] ?? 0;

    $newProject = [
        'id' => $lastProjectId + 1,
        'name' => $name,
        'description' => $description,
        'image' => $image
    ];
    $projects[] = $newProject;
    writeProjects($projects);
}


// read All Products
function readAllProjects()
{
    return readProjects();
}


