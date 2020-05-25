<?php

namespace App\Traits;

trait ScopeFilterByColumn
{
    public function scopeFilterByColumns($query, $values = []) {
        $columns = $this->searchableColumns();
        foreach ($values as $key => $value) {
            if (array_key_exists($key, $columns)) {
                $query->filterByColumn($key, $value, $columns[$key]);
            } elseif (in_array($key, $columns)) {
                $query->filterByColumn($key, $value);
            }
        }
        return $query;
    }

    public function scopeFilterByColumn($query, $key, $value, $column = null) {
        if (is_null($column)) {
            $query->where($key, 'like', "%$value%");
        } else {
            if (is_callable($column)) {
                $column($query, $value, $key);
            } elseif (is_array($column)) {
                $columnName = array_key_exists('column', $column) ? $column['column'] : $key;
                $value = array_key_exists('value', $column) ? $column['value'] : $value;
                $condition = array_key_exists('condition', $column) ? $column['condition'] : 'like';
                $query->where($columnName, $condition, $value);
            }
        }
        return $query;
    }

    public abstract function searchableColumns(): array;
}
