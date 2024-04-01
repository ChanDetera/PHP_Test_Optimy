<?php

class NewsService
{
    private $repository;

    public function __construct()
    {
        $this->repository = new NewsRepository();
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
     * Store news
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
     * Destroy news and comments under
     *
     * @param $id
     * @return mixed
     */
    public function destroy($id)
    {
        return $this->repository->destroy($id);
    }
}