<?php
    header('Content-Type: application/json');
    include 'conexao.php';

    $metodo = $_SERVER['REQUEST_METHOD'];

    // echo json_encode($metodo);

    $url = $_SERVER['REQUEST_URI'];
    echo json_encode($url);

    $path = parse_url($url, PHP_URL_PATH);
    $path = trim($path,'/');

    $path_parts = explode('/',$path);
    

    $primeiraparte = isset($path_parts[0]) ? $path_parts[0] : '';
    $segundaparte = isset($path_parts[1]) ? $path_parts[1] : '';
    $terceiraparte = isset($path_parts[2]) ? $path_parts[2] : '';
    $quartaparte = isset($path_parts[3]) ? $path_parts[3] : '';

    $resposta = [
        'metodo' => $metodo,
        'primeiraparte' => $primeiraparte,
        'segundaparte' => $segundaparte,
        'terceiraparte' => $terceiraparte,
        'quartaparte' => $quartaparte,
    ];

    //


    switch ($metodo){
        case 'GET':
            # lógica para o get ...

            if($terceiraparte == 'alunos' && $quartaparte == ''){
                echo json_encode([
                    'mensagem' => 'LISTA DE TODOS OS ALUNOS'
                ]);
            }
            elseif($terceiraparte == 'alunos' && $quartaparte != ''){
                echo json_encode ([
                    'mensagem' => 'LISTA DE TODOS OS CURSOS',
                    'id_aluno' => $quartaparte
                ]);
            }
            elseif($terceiraparte == 'cursos' && $quartaparte == ''){
                echo json_encode ([
                    'mensagem' => 'LISTA DE TODOS OS CURSOS'
                ]);
            }
            elseif($terceiraparte == 'cursos' && $quartaparte != ''){
                echo json_encode ([
                    'mensagem' => 'LISTA DE TODOS OS CURSOS',
                    'id_aluno' => $quartaparte
                ]);
            }
            break;
        case 'POST':
            # lógica para o get ...
            break;
        case 'PUT':
            # lógica para o get ...
            break;
        case 'DELETE':
            # lógica para o get ...
            break;
        
        default:
            echo json_encode([
                'mensagem' => 'Método não permitido'
            ]);
            break;
    }

?>