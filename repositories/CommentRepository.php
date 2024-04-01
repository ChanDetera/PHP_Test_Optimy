<?php

class CommentRepository
{
    protected $model;

    public function __construct()
    {
        $this->model = new Comment();
    }

    /**
     * Find by id
     *
     * @return Comment
     */
    public function find($id)
    {
        return $this->model->find($id);
    }

    /**
     * Get list
     * @return array
     */
    public function list()
    {
        return $this->model->get();
    }

    /**
     * Store comment
     * @param $body
     * @param $newsId
     * @return mixed
     */
    public function store($body, $newsId)
    {
        $data = $this->model->create([
            'body' => $body,
            'created_at' => date('Y-m-d'),
            'news_id' => $newsId
        ]);

        return $data->id;
    }

    /**
     * Destroy comment
     * @param $id
     * @return mixed
     */
    public function destroy($id)
    {
        return $this->find($id)->delete();
    }
}