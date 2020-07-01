<?php
//Conexão
include_once '../../model/db_connect.php';
//Header
include_once '../../view/includes/header.php';

    if(isset($_GET['user'])) {
        $idusuario = $_GET['user'];
    }

    if(isset($_GET['id'])) {
        $id = mysqli_escape_string($connect, $_GET['id']);
        $sql = "SELECT * FROM TELEFONE WHERE IDTELEFONE = '$id'";
        $resultado = mysqli_query($connect, $sql);
        $dados = mysqli_fetch_array($resultado);
    
    }

?>
<link type="text/css" rel="stylesheet" href="stylecard.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="../../dist/css/adminlte.min.css">

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="display: flex; justify-content: center; width: auto;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Editar Telefone</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                                title="Collapse">
                                <i class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                    <form action="../../model/dao/telefone/update.php" method="POST">
                        <input type="hidden" name="idusuario" value="<?php echo $idusuario; ?>">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="hidden" name="idcliente" value="<?php echo $dados['IDCLIENTE'];?>">
                        <input type="hidden" name="idcontato" value="<?php echo $dados['IDCONTATO'];?>">

                            <div class="form-group">
                                <label for="inputName">DDD</label>
                                <input type="text" id="inputName" name="ddd" class="form-control" value="<?php echo $dados['DDD']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="inputName">Número</label>
                                <input type="text" id="inputName" name="numero" class="form-control" value="<?php echo $dados['NUMERO']; ?>">
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <a href="../contato/view.php?user=<?php echo $idusuario; ?>&idcliente=<?php echo $dados['IDCLIENTE'] ?>&id=<?php echo $dados['IDCONTATO'] ?>" class="btn btn-secondary">Voltar</a>
                                    <input type="submit" value="Salvar" class="btn btn-success float-right" name="btn-editar-telefone">
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </section>
</div>

<?php
//Footer
include_once '../../view/includes/footer.php';
?>