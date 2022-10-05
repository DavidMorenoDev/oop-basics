<?php
    //Propiedades: caracteristicas de nuestros objetos
    //Métodos: definen el comportamiento de nuestros objetos
    //Métodos: ¿qué puede hacer nuestro objeto?


    // I CREATE CLASS OF BOOK
    class Book{

        // I INDICATE THE PROPERTIES
        public string       $author;
        public string       $title; 
        protected int       $stock = 100;
        public float        $price; 

        // I CREATE THE CONSTRUCTION FUNCTION
    public function __construct(string $title, string $author, float $price ){
        $this -> author = $author;
        $this -> title = $title;
        $this -> price = $price;
    }


    public function getInfoBook(){
        $arrBook = array (
                            'title' =>   $this -> title,
                            'author'=>   $this -> author,
                            'stock' =>   $this -> stock,
                            'price' =>   $this -> price,
        );
        return $arrBook;
    }

    public function sellBook($title, $author, $price){
        echo "Congratulation you have sold the book {$this -> title} by {$this -> author} for <b>{$this -> price}</b>";
    }


    public function buyBook($title, $author){
        echo "You have purchased the book {$this -> title} by {$this -> author}";
    }


    public function __destruct(){
        echo "You have completed the free reading time, if you want to continue your reading get the <b>{$this -> title}</b> by <b>{$this -> author}</b>";
    }


    public function repair(){
        echo "your book <b>{$this -> title}</b>  is already restored";
    }


    public function modify(){
        echo "We have already modified the cover of your book <b>{$this -> title}</b>";
    }


} // END CLASS PRODUCT



?>