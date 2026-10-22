<?php
interface Publicable // interfaz
{
    public function publicar(): void;
    public function estaPublicado(): bool;
}
