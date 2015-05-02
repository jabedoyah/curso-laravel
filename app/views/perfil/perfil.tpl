{capture assign="portada"}
    
    <!--<img src="http://www.juegosdb.com/wp-content//2012/08/descargar-new-super-mario-bros-2-3ds.jpg">-->
    
    {/capture}
{capture assign="left"}
    
    <img src="{url('assets/img/profile')}/{$foto}" width="150" height="150">
    <div class="well"><strong>Información</strong><br/>
        {$nombre}<br/>
        {$correo}
    </div>
    {/capture}
    
{capture assign="right"}
    
    {Form::open(['url'=>'/publicacion/crear'])}
    <textarea name="publicacion" placeholder="¿Qué estás pensando?" rows="3" class="col-lg-12"></textarea>
    <button type="submit" class="btn pull-right btn-success">Publicar</button>
    {Form::close()}
    <hr>
    <hr>
    <hr>
    <hr>
    
        {foreach $publicaciones as $publicacion}
            <div required class="well" style="word-break: break-all; margin-bottom: 5px; padding: 10px 5px; font-family: 'Lobster', cursive;">{$publicacion->publicacion}
                <buttom class="close" aria-hidden="true" style="margin-top:-10px"><a href="{url('publicacion/eliminar')}/{$publicacion->id}">&times;</a></buttom>
                    
            </div>
                <div><span class="glyphicon glyphicon-comment"></span><span>Comentar</span>  
                <span class="glyphicon glyphicon-thumbs-up" style="margin-left: 10px"></span>Me gusta
                <span class="glyphicon glyphicon-thumbs-down" style="margin-left: 10px" ></span>No me gusta :v
                <div id="comentarios-{$publicacion->id}">
                    <div style="font-size: 10px; padding: 3px" class="well well-sm col-sm-7">Esto es un comentario</div>
                    
                </div>
                    <br>
                    <br><textarea id="comentario-{$publicacion->id}" rows="1" placeholder='Escribe tu comentario' class='col-sm-6'></textarea>
                <button class="btn btn-success btn-sm" onclick="fb.comentar({$publicacion->id})">Comentar</button>
            <hr>
        </div>
            {foreachelse}
                
                <div class='alert alert-info'>No tienes publicaciones</div>
        {/foreach}
    {/capture}
    
{include file="../masterpage/template.tpl" layout="two_columns"}