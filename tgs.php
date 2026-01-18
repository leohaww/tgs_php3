<?php
// Program 1: Array dan Rata-rata

function program1() {
    $nilai = [10, 20, 30, 40, 50];
    $total = 0;

    echo "Isi array: ";
    foreach ($nilai as $n) {
        echo $n . " ";
        $total += $n;
    }

    $rataRata = $total / count($nilai);

    echo "\n\nTotal nilai: " . $total;
    echo "\nRata-rata nilai: " . $rataRata . "\n\n";
}

echo "<br/>";

// Program 2: Single Linked List


class Node {
    public $data;
    public $next;
    public function __construct($data = 0) {
        $this->data = $data;
        $this->next = null;
    }
}


function program2() {
    $head = new Node(100);
    $second = new Node(200);
    $third = new Node(300);

    $head->next = $second;
    $second->next = $third;

    echo "Isi Single Linked List: ";
    $temp = $head;
    while ($temp != null) {
        echo $temp->data . " -> ";
        $temp = $temp->next;
    }
    echo "NULL\n\n";
}

echo "<br/>";

// Program 3: Stack


function program3() {
    $tumpukan = [];

    array_push($tumpukan, 10);
    array_push($tumpukan, 20);
    array_push($tumpukan, 30);
    echo "Menambahkan 10, 20, dan 30 ke dalam stack.\n";

    echo "Menghapus data teratas (" . end($tumpukan) . ")...\n";
    array_pop($tumpukan);

    echo "Isi stack saat ini (dari atas ke bawah):\n";
    while (!empty($tumpukan)) {
        echo "| " . end($tumpukan) . " |\n";
        array_pop($tumpukan);
    }
    echo "-----\n\n";
}

echo "<br/>";

// Program 4: Queue


function program4() {
    $antrean = [];

    array_push($antrean, "A");
    array_push($antrean, "B");
    array_push($antrean, "C");
    echo "Data A, B, dan C telah masuk ke antrean.\n";

    echo "Menghapus data paling depan (" . $antrean[0] . ")...\n";
    array_shift($antrean);

    echo "Isi queue saat ini (dari depan ke belakang):\n";
    foreach ($antrean as $a) {
        echo "[" . $a . "] ";
    }
    echo "\n\n";
}

echo "<br/>";

// Program 5: Binary Tree


class TreeNode {
    public $data;
    public $left;
    public $right;
    public function __construct($nilai) {
        $this->data = $nilai;
        $this->left = null;
        $this->right = null;
    }
}

function tampilkanTree($root) {
    if ($root == null) return;
    tampilkanTree($root->left);
    echo $root->data . " ";
    tampilkanTree($root->right);
}

function program5() {
    $root = new TreeNode(10);
    $root->left = new TreeNode(5);
    $root->right = new TreeNode(15);

    echo "Data pada Binary Tree (In-order): ";
    tampilkanTree($root);
    echo "\n\n";
}

echo "<br/>";

// Program 6: Graph (Adjacency List)


function program6() {
    $adjList = [];
    $adjList['A'] = ['B', 'C'];
    $adjList['B'] = [];
    $adjList['C'] = [];

    echo "Daftar Ketetanggaan (Graph Adjacency List):\n";
    foreach ($adjList as $node => $tetangga) {
        echo "Node " . $node . " terhubung ke: ";
        if (empty($tetangga)) {
            echo "Tidak ada";
        } else {
            foreach ($tetangga as $n) {
                echo $n . " ";
            }
        }
        echo "\n";
    }
    echo "\n";
}

echo "<br/>";

// Program 7: Hash Table


function program7() {
    $mahasantri = [
        "230101" => "Ahmad Fauzi",
        "230102" => "Siti Aminah",
        "230103" => "Budi Santoso"
    ];

    echo "Daftar Mahasantri (Hash Table):\n";
    echo "-------------------------------\n";
    echo "NIM\t| Nama\n";
    echo "-------------------------------\n";

    foreach ($mahasantri as $nim => $nama) {
        echo $nim . "\t| " . $nama . "\n";
    }
    echo "\n";
}

echo "<br/>";

// Panggilan semua program


program1();
program2();
program3();
program4();
program5();
program6();
program7();
?>