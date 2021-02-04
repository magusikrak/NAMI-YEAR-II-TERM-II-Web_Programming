<?php
function insert($pdo, $table, $record) {
    $keys = array_keys($record);

    $values = implode(', ', $keys);
    $valuesWithColon = implode(', :', $keys);

    $query = 'INSERT INTO ' . $table . ' (' . $values . ') VALUES (:' . $valuesWithColon . ')';

    $stmt = $pdo->prepare($query);

    $stmt->execute($record);
}


function find($pdo, $table, $field, $value) {
        $stmt = $pdo->prepare('SELECT * FROM ' . $table . ' WHERE ' . $field . ' = :value');
        $criteria = [
                'value' => $value
        ];
        $stmt->execute($criteria);

        return $stmt;
}

function findAll($pdo, $table) {
        $stmt = $pdo->prepare('SELECT * FROM ' . $table );

        $stmt->execute();

        return $stmt;
}
