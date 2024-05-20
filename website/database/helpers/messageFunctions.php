<?php


// Read From Json File
function readMessages()
{
    $content = file_get_contents(__DIR__ . 'Messages.json');

    // From Json To Array
    $contentToArray = json_decode($content, true);
    return $contentToArray;
}


// Write To File Json
function writeMessage($message)
{
    $contentToJson = json_encode($message);
    file_put_contents(__DIR__ . 'Messages.json', $contentToJson);
}


// create  message
function createMessage($name, $email, $phone, $message)
{
    $messages = readMessages();
    $lastMessage = $messages ? end($messages) : [];
    $lastMessageId = $lastMessage['id'] ?? 0;

    $newMessage = [
        'id' => $lastMessageId + 1,
        'name' => $name,
        'email' => $email,
        'phone' => $phone,
        'message' => $message
    ];
    $messages[] = $newMessage;
    writeMessage($messages);
}


// read All Messages
function readAllMessages()
{
    return readMessages();
}

// delete Messages
function deleteMessage($id)
{
    $messages = readMessages();
    $newMessage = [];
    foreach ($messages as $message) {
        if ($message['id'] != $id) {
            $newMessage[] = $message;
        }
    }

    writeMessage($newMessage);
}

