<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Cadastro do Responsável</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!--<form action="/responsavelInstituicao/insert" name="insert" method="post">-->
    <form action="responsavelInstituicao/store"  method="post">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Dados da Instituição</h3>
            </div>
            <div class="panel-body">
            
                <div class="row">
                    <div class="col-md-4">
                        <label>CPF</label>
                        <input type="text" name="cpf" id="cpf" class="form-control" value="" size="11" autofocus='true' />
                    </div>
                    <div class="col-md-4">
                        <label>RG</label>
                        <input type="text" name="rg" id="rg" class="form-control" value="" size="20"/>
                    </div>
                    <div class="col-md-4">
                        <label>Nome</label>
                        <input type="text" name="nome" id="nome" class="form-control" value="" size="45"/>
                    </div>
                    <div class="col-md-4">
                        <label>Telefone</label>
                        <input type="text" name="telefone" id="telefone" class="form-control" value="" size="11"/>
                    </div>
                    <div class="col-md-4">
                       <label>E-mail</label>
                        <input type="email" name="email" email" class="form-control" value="" size="45"/>
                    </div>
                </div>
            </div>
        </div>
        <input class=" pull-right btn btn-success" type="submit" name="Submit" value="Enviar" style="cursor:pointer;" />  
    </form>         
</div>