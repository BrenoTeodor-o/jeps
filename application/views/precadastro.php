<section id="inscricao">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Pré-Cadastro</h2>
                <p class="section-subheading text-muted">TESTE</p>
            </div>  
        </div>
        <form action="cadastro/insert"  method="post">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Escolha de Grupo</h3>
                </div>
                <div class="panel-body">
                    <div class="row">                            
                        <div class="col-md-4">
                            <label>Grupos</label>
                            <div class="radio">
                              <label><input type="radio" class="minicursos_1 grupo-1" name="minicursos_1" value="react">Grupo I: dsdsd</label>
                            </div>

                            <div class="radio">
                              <label><input type="radio" class="minicursos_1 grupo-2" name="minicursos_1" value="react">Grupo II: dsdsds</label>
                            </div>

                            <div class="radio">
                              <label><input type="radio" class="minicursos_1 grupo-3" name="minicursos_1" value="react">Grupo III: dsdsds</label>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
            
            <div class="panel cad-normal panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Dados da Instituição</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-4">
                            <label>Nome</label>
                            <input type="text" name="" class="form-control"> 
                        </div>
                        <div class="col-md-4">
                            <label>CNPJ</label>
                            <input type="text" name="" class="form-control"> 
                        </div>
                        <div class="col-md-4">
                            <label>Cidade</label>
                            <input type="text" name="" class="form-control"> 
                        </div> 
                        <div class="col-md-4">
                            <label>E-mail</label>
                            <input type="text" name="" class="form-control"> 
                        </div>
                        <div class="col-md-4">
                            <label>Curso</label>
                            <input type="text" name="" class="form-control"> 
                        </div>
                    </div>
                   
                </div>
            </div>   

            <div class="panel grupo2 panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Dados da Instituição</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-4">
                            <label>Nome</label>
                            <input type="text" name="" class="form-control"> 
                        </div>
                        <div class="col-md-4">
                            <label>CPF</label>
                            <input type="text" name="" class="form-control"> 
                        </div>
                        <div class="col-md-4">
                            <label>Universidade</label>
                            <input type="text" name="" class="form-control"> 
                        </div> 
                        <div class="col-md-4">
                            <label>Curso</label>
                            <input type="text" name="" class="form-control"> 
                        </div>
                    </div>
                   
                </div>
            </div>                
            <input class=" pull-right btn btn-success" type="submit" name="Submit" value="Enviar" style="cursor:pointer;" />
        </form>
    </div>
</section>

