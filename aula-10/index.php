<?php

# Interfaces - Uma interface serve como template para implementação de classes

interface Crud {
    public function create($data);
    public function read();
    public function update();
    public function delete();
}

# A classe Noticias implementa a interface Crud, logo deve possuir os métodos de Crud
class Noticias implements Crud {
    
    public function create($data) {
        // Lógica para criar uma Noticia
    }

    public function read() {
        // Lógica para ler uma Noticia
    }

    public function update() {
        // Lógica para atualizar uma Noticia
    }

    public function delete() {
        // Lógica para deletar uma Noticia
    }
}
