<?php
/**
 * Created by PhpStorm.
 * User: M_hacker
 * Date: 08.05.2017
 * Time: 18:21
 */

include('connection.php');
$arr = array();

$id = 0;
try {
    $data = json_decode(file_get_contents("php://input"));
    $id = $data->type;
} catch (Exception $ex) {
    echo 'google';
}
if ($id == 'page') {
    $type = $data->g_l;
    $index = $data->index;
    if ($index == 0) {
        foreach ($connection->query('SELECT * from book_with_genre_auth ') as $row) {
            $arr[] = $row;
        }
    }
    if ($type == 0) {

    } elseif ($type == 1) {

    }
} elseif ($id == 'get_a_book') {
    $id1 = $data->id;
    foreach ($connection->query('SELECT * from book_with_genre_auth where `b_id` = ' . $id1 . '') as $row) {
        $arr[] = $row;
    }
    echo json_encode($arr);
} elseif ($id == 'genre_and_book') {
//    foreach ($connection->query('SELECT * from book_with_genre_auth') as $row) {
//        $arr[] = $row;
//    }
    $d = $data->genre;
    $arr2 = array();
    if ($d == '-1') {
        $s = $data->sort;
//        echo "the s value is".$s;
        if ($s == '-1') {
            foreach ($connection->query('SELECT * from `book_with_genre_auth`') as $row) {
                $arr[] = $row;
            }
        } elseif ($s == '0') {
            foreach ($connection->query('SELECT * from `book_with_genre_auth` order by p_date DESC') as $row) {
                $arr[] = $row;
            }
        } elseif ($s == '1') {
            foreach ($connection->query('SELECT * from book_with_genre_auth ORDER by price desc') as $row) {
                $arr[] = $row;
            }
        } elseif ($s == '2') {
            foreach ($connection->query('SELECT * from book_with_genre_auth order by rank desc') as $row) {
                $arr[] = $row;
            }
        }
    } else {
        foreach ($connection->query("SELECT * from `book_with_genre_auth` where `g_id`='$d';") as $row) {
            $arr[] = $row;
        }
    }
    foreach ($connection->query('SELECT * from genre order by id desc') as $row) {
        $arr2[] = $row;
    }
    $ar = array('genres' => $arr2,
        'books' => $arr
    );
    echo json_encode($ar);
} elseif ($id == 'news') {
    foreach ($connection->query('SELECT * from news limit 3') as $row) {
        $arr[] = $row;
    }
    echo json_encode($arr);
} elseif ($id == 'on_sale_books') {
    foreach ($connection->query('SELECT * from on_sale_books') as $row) {
        $arr[] = $row;
    }
    echo json_encode($arr);
} elseif ($id == 1) {
    foreach ($connection->query('SELECT * from top_seller') as $row) {
        $arr[] = $row;
    }
    echo json_encode($arr);
} elseif ($id == 2) {
    foreach ($connection->query('SELECT * from top_ranked') as $row) {

        $arr[] = $row;
    }
    echo json_encode($arr);
} elseif ($id == 3) {
    $delete_id = $data->user_id;
    $delete_query = "delete from users WHERE id='$delete_id'";//delete query
    $run = $dbcon->prepare($delete_query);
    if ($run->execute()) {
        echo "<script>alert('user has been deleted')</script>";
    }
} elseif ($id == 'users') {
    $n = $data->n;
    if ($n == '-1') {
        foreach ($dbcon->query('SELECT * from users') as $row) {
            $arr[] = $row;
        }
    } else {
        foreach ($dbcon->query("SELECT * from users where user_name like '%$n%'") as $row) {
            $arr[] = $row;
        }
//        echo json_encode($arr);
    }
    echo json_encode($arr);
} elseif ($id == 'insert') {
    $user_name = $data->user->user_name;
    $user_email = $data->user->email;
    $user_pass = $data->user->password;

    $check_user = "select * from users WHERE user_name='$user_name'";
    $query = $dbcon->prepare($check_user);
    $query->execute();
    if ($query->fetchAll()[0][1] == $user_name) {
        echo '0';
    }

    $insert_user = "insert into users (user_name,user_pass,user_email) VALUE ('$user_name','$user_pass','$user_email')";
    $query = $dbcon->prepare($insert_user);

    if ($query->execute()) ;
    {
        echo '1';
    }
} elseif ($id == 'books') {
    $n = $data->n;
    if ($n == '-1') {
        foreach ($connection->query('SELECT * from book_with_genre_auth') as $row) {
            $arr[] = $row;
        }
    } else {
        foreach ($connection->query("SELECT * from book_with_genre_auth where title like '%$n%'") as $row) {
            $arr[] = $row;
        }
    }
    echo json_encode($arr);
} elseif ($id == 'genres') {
    foreach ($connection->query('SELECT * from genre') as $row) {
        $arr[] = $row;
    }
    echo json_encode($arr);
} elseif ($id == 'authors') {
    foreach ($connection->query('SELECT * from author') as $row) {
        $arr[] = $row;
    }
    echo json_encode($arr);
} else {
    echo "nothing";
}