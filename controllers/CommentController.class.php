<?php

class CommentController{

    public function addAction($params)
    {
        $text = $params['POST']['text'];
        $comment = new Comment();
        $comment->setText($text);
        $comment->setAuthorId(1);
        $comment->setRecipeId(1);
        $comment->setCreatedAt((new DateTime('now'))->format('Y-m-d'));
        $comment->save();
    }


}