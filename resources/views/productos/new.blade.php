
@extends('layouts.menu')
@section('contenido')

<div class="row">
    <h1 class="teal-text text-lighten-3">
        Nuevo producto
    </h1>
</div>

<div class="row ">




    <form class='col s8' method="POST" action="">
        <div class="row">
            <div class="input-field col s8">
            <input placeholder="Placeholder" id="nombre" type="text" name="nombre">
                    <label for="nombre">Nombre de Producto</label>
            </div>
               
        </div>  
        
        

    <!-- !-->




    <div class="row">
        <div class="input-field col s8">
            <textarea name="desc" id="desc" class="materialize-textarea"></textarea>

                <label for="desc">Descripcion</label>
        </div>
    </div>





        <!-- !-->




   <div class="row">
       <div class="input-field col s8">
           <input type="text" placeholder="Precio del Producto" id="precio" name="precio">
           <label for="precio">Precio</label>
       </div>
   </div>

   




    
    <div class="row">
        <div class="file-field input-field col s8">
            <div class="btn">
                <span>imagenes...</span>
                <input type="file" name="imagen">
            </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text">
                <div>
        </div>
    </div>
 

    

    <div class="row">
        <button class="btn waves-effect waves-light col s8" type="submit" name="action">Enviar</button>
    </div>

  
    
    </form>
</div>
@endsection






