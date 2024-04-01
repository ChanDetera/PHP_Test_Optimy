<?php

class NewsController
{
    private $service;

    public function __construct()
    {
        $this->service = new NewsService();
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
     * Store news
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
     * Destroy news and comments under
     *
     * @param $id
     * @return mixed
     */
    public function destroy($id)
    {
        return $this->service->destroy($id);
    }
}