<?php

class CommentService
{
    private $repository;

    public function __construct()
    {
        $this->repository = new CommentRepository();
    }

    /**
     * Get list
     *
     * @return array
     */
    public function list()
    {
        return $this->repository->list();
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
        return $this->repository->store($body, $newsId);
    }

    /**
     * Destroy comment
     *
     * @param $id
     * @return mixed
     */
    public function destroy($id)
    {
        return $this->repository->destroy($id);
    }
}