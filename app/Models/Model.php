<?php

namespace TugasBesar\BookingClass2g\Models;

use TugasBesar\BookingClass2g\App\Database;

class Model extends Database
{
    protected $table;

    public function find($id, string $column = 'id'): object
    {
        $model = new static;
        $sql = "SELECT * FROM $model->table WHERE $column = ?";
        $stmt = $model->db->prepare($sql);
        $stmt->bind_param('s', $id);
        $stmt->execute();
        $result = $stmt->get_result()->fetch_assoc();
        if ($result) {
            foreach ($result as $key => $value) {
                $model->$key = $value;
            }
        }
        return $model;
    }

    public function all(): array
    {
        $model = new static;
        $sql = "SELECT * FROM $model->table";
        $stmt = $model->db->prepare($sql);
        $stmt->execute();
        return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    }

    public function insert(array $data): void
    {
        $model = new static;
        $columns = implode(', ', array_keys($data));
        $placeholders = implode(', ', array_fill(0, count($data), '?'));
        $sql = "INSERT INTO $model->table ($columns) VALUES ($placeholders)";
        $stmt = $model->db->prepare($sql);
        $stmt->bind_param(str_repeat('s', count($data)), ...array_values($data));
        $stmt->execute();
    }

    public function update(array $data, string $id, string $column = 'id'): void
    {
        $model = new static;
        $set = '';
        foreach ($data as $key => $value) {
            $set .= "$key = ?, ";
        }
        $set = rtrim($set, ', ');
        $sql = "UPDATE $model->table SET $set WHERE $column = ?";
        $stmt = $model->db->prepare($sql);

        $types = str_repeat('s', count($data)) . 's';
        $values = array_values($data);
        $values[] = $id;

        $stmt->bind_param($types, ...$values);
        $stmt->execute();
    }

    public function delete(string $id, string $column = 'id'): void
    {
        $model = new static;
        $sql = "DELETE FROM $model->table WHERE $column = ?";
        $stmt = $model->db->prepare($sql);
        $stmt->bind_param('s', $id);
        $stmt->execute();
    }

    public function query(string $sql): array
    {
        $model = new static;
        $stmt = $model->db->prepare($sql);
        $stmt->execute();
        return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    }

    public function where(string $column, string $operator, string $value): object | null
    {
        $model = new static;
        $sql = "SELECT * FROM $model->table WHERE $column $operator '$value'";
        $stmt = $model->db->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result()->fetch_assoc();
        return $result ? (object) $result : null;
    }
}
