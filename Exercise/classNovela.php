<?php

    require_once("Books.php");

    class Novel extends Book{

        public string   $themes;
        public string   $pages;
        public int      $year;
        static string    $status = "Available";
 

        public function __construct(string $title, string $author, string $theme, int $year, string $pages, float $price,){

            $discountPrice=$price*0.8;
            
            parent::__construct($title, $author, $discountPrice);

            $this -> theme = $theme;
            $this -> year = $year;
            $this -> pages = $pages;
        }

        public function getInfoBook(){                  //OverWrite de propiedad
            $arrBook = array (
                                'title' =>  $this ->    title,
                                'author'=>  $this ->    author,
                                'stock' =>  $this ->    stock,
                                'status' => $this ->    status,
                                'price' =>  $this ->    price,
                                'theme' =>  $this ->    theme,
                                'year'=>    $this ->    year,
                                'pages' =>  $this ->    pages
            );
            return $arrBook;
        }

    }


    class Present implements giveBook{
        public function gift(string $title, string $author){
            echo "Your present is already";
        }
    }
    





?>