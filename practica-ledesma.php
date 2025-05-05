<?php
/**
 * Script sencillo para realizar la actividad 1.2 de la tarea 5 de Despliegues
 *
 * En este archivo he incluido un par de funciones básicas para probar cómo se genera 
 * la documentación automática con phpDocumentor.
 * 
 * @author Maria Ledesma Ledesma
 * @version 1.0
 * {@internal "Este script está hecho solo para practicar la generación de documentación en PHP."}
 */

/**
 * Devuelve un saludo personalizado.
 * 
 * Esta función genera un saludo personalizado usando el nombre que le llega como parámetro.
 *
 * @param string $nombre El nombre de la persona a saludar.
 * @return string El mensaje de saludo.
 */
function saludar($nombre) {
    return "Hola, " . $nombre . "!";
}
//Comentario añadido para probar Git
/**
 * Calcula el doble de un número.
 * 
 * Se introduce un número y te devuelve el doble del mismo.
 *
 * @param int $numero El número al que se le calculará el doble.
 * @return int El doble del número.
 */
function doble($numero) {
    return $numero * 2;
}
?>