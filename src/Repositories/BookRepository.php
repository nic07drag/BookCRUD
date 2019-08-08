<?php


namespace Nic07drag\BookCRUD\Repositories;

use Nic07drag\BookCRUD\Models\Book;


class BookRepository implements BookRepositoryContract
{
    protected $model;
    public function __construct(Book $model)
    {
        $this->model = $model;
    }
    public function paginate()
    {
        // TODO: Implement paginate() method.
        return $this->model->paginate(10);
    }
    public function find($id)
    {
        // TODO: Implement find() method.
        return  $this->model->findOrFail($id);
    }
    public function store($data)
    {
        // TODO: Implement store() method.
        return $this->model->create($data);
    }
    public function update($id, $data)
    {
        // TODO: Implement update() method.
        $model = $this->find($id);
        return $model->update($data);
    }
    public function destroy($id)
    {
        // TODO: Implement destroy() method.
        $model = $this->find($id);
        return $model->destroy($id);
    }
}