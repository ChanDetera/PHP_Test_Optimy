<?php

class NewsRepository
{
    protected $model;

    public function __construct()
    {
        $this->model = new News();
    }

    /**
     * Find by id
     *
     * @return News
     */
    public function find($id)
    {
        return $this->model->find($id);
    }

    /**
     * Get list
     *
     * @return array
     */
    public function list()
    {
        return $this->model->get();
    }

    /**
     * Store news
     *
     * @param $body
     * @param $newsId
     * @return mixed
     */
    public function store($title, $body)
    {
        $data = $this->model->create([
            'title' => $title,
            'body' => $body,
            'created_at' => date('Y-m-d'),
        ]);

        return $data->id;
    }

    /**
     * Destroy news and comments under
     *
     * @param $id
     * @return mixed
     */
    public function destroy($id)
    {
        $news = $this->find($id);
        $comments = $news->comments;

        foreach ($comments as $comment) {
            $comment->delete();
        }

        $news->delete();

        return true;
    }
}