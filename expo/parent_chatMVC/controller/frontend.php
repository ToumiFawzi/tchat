<?php

require('./model/frontend.php');

function listCommunity()
{
    $community = getCommunity();
    
    require('./view/listCommunityView.php');
}

function listPosts()
{
    $posts = getPosts();

    require('./view/listPostsView.php');
}

function post()
{
    $post = getPost($_GET['id']);
    $comments = getComments($_GET['id']);

    require('./view/postView.php');
}

function addComment($postId, $author, $comment)
{
    $affectedLines = postComment($postId, $author, $comment);
    
    if ($affectedLines === false) {
        die('Impossible d\'ajouter le commentaire !');
    }
    else {
        header('Location: index.php?action=post&id=' . $postId);
    }
}

function editIfComment($idEdit, $idBillet, $author, $comment)
{
    $affectedLines = postComment($author, $comment);
    
    if ($affectedLines === false) {
        die('Impossible d\'ajouter le commentaire !');
    }
    else {
        header('Location: index.php?action=post&id=' . $idBillet);
    }
}