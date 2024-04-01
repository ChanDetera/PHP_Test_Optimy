<?php

class CommentController
{
    private $service;

    public function __construct()
    {
        $this->service = new CommentService();
    }

    /**
     * Get list
     *
     * @return array
     */
    public function list()
    {
        return $this->service->list();
    }

    /**
     * Store comment
     *
     * @param $body
     * @param $newsId
     * @return mixed
     */
    public function store($body, $newsId)
    {
        return $this->service->store($body, $newsId);
    }

    /**
     * Destroy comment
     *
     * @param $id
     * @return mixed
     */
    public function destroy($id)
    {
        return $this->service->destroy($id);
    }
}